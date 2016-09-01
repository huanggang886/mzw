<?php
$mod='blank';
$nosecu=true;
require_once("../includes/common.php");

require_once SYSTEM_ROOT."wxpay/WxPay.Api.php";
require_once SYSTEM_ROOT."wxpay/WxPay.Notify.php";

//初始化日志
//$logHandler= new CLogFileHandler("../logs/".date('Y-m-d').'.log');
//$log = Log::Init($logHandler, 15);

class PayNotifyCallBack extends WxPayNotify
{
	//查询订单
	public function Queryorder($transaction_id)
	{
		$input = new WxPayOrderQuery();
		$input->SetTransaction_id($transaction_id);
		$result = WxPayApi::orderQuery($input);
		//Log::DEBUG("query:" . json_encode($result));
		if(array_key_exists("return_code", $result)
			&& array_key_exists("result_code", $result)
			&& $result["return_code"] == "SUCCESS"
			&& $result["result_code"] == "SUCCESS")
		{
			return true;
		}
		return false;
	}
	
	//重写回调处理函数
	public function NotifyProcess($data, &$msg)
	{
		//file_put_contents('log.txt',"call back:" . json_encode($data));
		$notfiyOutput = array();
		
		if(!array_key_exists("transaction_id", $data)){
			$msg = "输入参数不正确";
			return false;
		}
		//查询订单，判断订单真实性
		if(!$this->Queryorder($data["transaction_id"])){
			$msg = "订单查询失败";
			return false;
		}
		global $DB,$conf,$date;
		if($data['return_code']=='SUCCESS' && $data['result_code']=='SUCCESS'){
			if($data['trade_state']=='SUCCESS'){
				$srow=$DB->get_row("SELECT * FROM ".DBQZ."_pay WHERE orderid='{$data['out_trade_no']}' limit 1");
				$uid=$srow['uid'];

				$sql="insert into `".DBQZ."_order` (`type`,`orderid`,`trade_no`,`time`,`name`,`money`,`status`) values ('wxpay','".$data['out_trade_no']."','".$data['transaction_id']."','".$date."','".$srow['name']."','".$srow['money']."','2')";
				$DB->query($sql);
				if($srow['status']==0){
					$DB->query("update `".DBQZ."_pay` set `status` ='1',`endtime` ='$date' where `orderid`='{$data['out_trade_no']}'");
					$row=$DB->get_row("select userid,coin,vip,vipdate from ".DBQZ."_user where userid='".$uid."' limit 1");
					if($row['vip']==1 && strtotime($row['vipdate'])>time() || $row['vip']==2){
						$isvip=1;
					}else{
						$isvip=0;
					}
					return getshop($srow['shopid'],$srow['qq'],$msg);
				}else{
					$msg='该订单已经处理';
					return true;
				}
			}else{
				$msg='['.$data['trade_state'].']'.$data['trade_state_desc'];
				return false;
			}
		}else{
			$msg='['.$data['err_code'].']'.$data['err_code_des'];
			return false;
		}
		return true;
	}
}

//Log::DEBUG("begin notify");
$notify = new PayNotifyCallBack();
$notify->Handle(false);
