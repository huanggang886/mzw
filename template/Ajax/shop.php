<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['���������ċ����֮�������������È']=base64_decode('ZGFkZHNsYXNoZXM=');$zym_decrypt['�����֮�į���������������þ�Ĕ��']=base64_decode('ZGF0ZQ==');$zym_decrypt['��������î�֎�å��È������������']=base64_decode('cmFuZA==');$zym_decrypt['��ֈ������Ô�Î֋�ֈ������������']=base64_decode('dXJsZW5jb2Rl'); ?>
<div class="modal fade" align="left" id="shop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="clearInterval(interval1)"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">在线支付</h4>
      </div>
      <div class="modal-body">
<?php
if(!$GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$act=isset($_GET['act'])?$_GET['act']:null;if($islogin==1){switch($act){case 'pay': $type=isset($_GET['type'])?$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_GET['type']):exit('No paytype!');$shopid=isset($_GET['shopid'])?$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_GET['shopid']):exit('No shopid!');$qq=isset($_GET['qq'])?$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_GET['qq']):null;$money=$buy_rules[$shopid];$desc='shop_'.$uid.'_'.$shopid;if($qq!='undefined')$desc.='_'.$qq;if($shopid==0)$name='1天试用VIP会员';elseif($shopid==1)$name='1个月VIP会员';elseif($shopid==2)$name='3个月VIP会员';elseif($shopid==3)$name='6个月VIP会员';elseif($shopid==4)$name='12个月VIP会员';elseif($shopid==5)$name='永久VIP会员';elseif($shopid==6)$name='1个QQ配额';elseif($shopid==7)$name='3个QQ配额';elseif($shopid==8)$name='5个QQ配额';elseif($shopid==9)$name='10个QQ配额';?>
<script>
    // 检查是否支付完成
	var interval1;
    function loadmsg(orderid) {
		$(".getshop").html('请稍候');
		if(orderid){
			var act = 'get';
			var text = '检测是否已付款';
		}else{
			var act = 'fill';
			var text = '确定';
			orderid = $("#orderid").val();
			if(orderid==''){
				alert('交易号不能为空！');
				$(".getshop").html('确定');
				return false;
			}
		}
        $.ajax({
            type: "GET",
            dataType: "json",
			cache: false,
            url: "ajax.php?mod=getshop&act="+act+"&type=<?php echo $type?>&shopid=<?php echo $shopid?>&qq=<?php echo $qq?>&orderid="+orderid,
            success: function (data, textStatus) {
                //从服务器得到数据，显示数据并继续查询
                if (data.code == "1") {
					clearInterval(interval1);
                    // 这个脚本是 ie6和ie7 通用的脚本
                    if (confirm("您已支付完成，是否刷新页面？")) {
                        window.location.href="index.php?mod=shop";
                    } else {
                        // 用户取消
                    }
                } else {
					if(text == '确定')
						alert(data.msg);
                    $(".getshop").html(text);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                if (textStatus == "timeout") {
                    //loadmsg();
                } else { //异常
                    alert('创建连接失败');
                }
            }
        });
    }
</script>
<?php
 if($type=='alipay'){if($conf['alipay_api']==1){$orderid=$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("YmdHis").$GLOBALS['zym_decrypt']['��������î�֎�å��È������������'](111,999);$sql="insert into `".DBQZ."_pay` (`uid`,`qq`,`type`,`orderid`,`addtime`,`shopid`,`name`,`money`,`status`) values ('".$uid."','".$qq."','".$type."','".$orderid."','".$date."','".$shopid."','".$name."','".$money."','0')";if($DB->query($sql))echo '<table class="table"><tobdy><tr><td>已经成功生成订单！</td></tr><tr><td>订单号：<u>'.$orderid.'</u></td></tr><tr><td>商品名称：<u>'.$name.'('.$money.'元)</u></td></tr><tr><td>支付方式：<u>支付宝</u></td></tr><tr><td><a href="index.php?mod=pay&type=alipay&orderid='.$orderid.'" class="btn btn-success btn-block" target="_blank">立即支付</a></td></tr></tbody></table><script>$(document).ready(function(){interval1=setInterval("loadmsg(\''.$orderid.'\')", 3000);});</script>';else echo base64_decode('PHRhYmxlIGNsYXNzPSJ0YWJsZSI+PHRvYmR5Pjx0cj48dGQ+55Sf5oiQ6K6i5Y2V5aSx6LSl77yBPC90ZD48L3RyPjx0cj48dGQ+5Y6f5Zug77ya').$DB->error().'</td></tr></tbody></table>';}elseif($conf['alipay_api']==2){echo '<script src="assets/js/noreferrer.js"></script>
			<ul class="nav nav-tabs"><li class="active"><a href="#web" data-toggle="tab">网页支付宝转账</a></li><li><a href="#mobile" data-toggle="tab">手机支付宝转账</a></li><li><a href="#order" data-toggle="tab">交易号补单</a></li></ul>
			<div class="tab-content">
			<div class="tab-pane fade in active" id="web">
			<table class="table"><tobdy><tr><td>【支付方法】</td></tr><tr><td>1.打开：<a rel="noreferrer" href="https://shenghuo.alipay.com/send/payment/fill.htm" target="_blank">https://shenghuo.alipay.com/send/payment/fill.htm</a></td></tr><tr><td>2.收款人：'.$conf['alipay_account'].'</td></tr><tr><td>3.收款人姓名：'.$conf['alipay_name'].'</td></tr><tr><td>4.付款金额：'.$money.'</tr><tr><td>5.付款说明：'.$desc.'</td></tr><tr><td><font color="red">请正确填写付款说明,否则无法自动到账</font></td></tr><tr><td><a id="getshop" class="btn btn-success btn-block getshop" onclick="loadmsg(\''.$desc.'\');">检测是否已付款</a></td></tr></tbody></table>
			</div>
			<div class="tab-pane fade in" id="mobile">
			<table class="table"><tobdy><tr><td><img src="images/alipay.png"></td></tr><tr><td>1.首先打开手机支付宝钱包</td></tr><tr><td>2.扫描本站支付宝二维码,并选择转账功能</td></tr><tr><td>3.付款金额：'.$money.'</tr><tr><td>4.付款说明：'.$desc.'</td></tr><tr><td><font color="red">请正确填写付款说明,否则无法自动到账</font></td></tr><tr><td><a id="getshop" class="btn btn-success btn-block getshop" onclick="loadmsg(\''.$desc.'\');">检测是否已付款</a></td></tr></tbody></table>
			</div>
			<div class="tab-pane fade in" id="order">
			<table class="table"><tobdy><tr><td>如果没有自动到账，请手动输入支付宝交易号进行补单：</td></tr><tr><td><input type="text" class="form-control" name="orderid" id="orderid" value="" placeholder="支付宝交易号" required></td></tr><tr><td><a id="getshop" class="btn btn-success btn-block getshop" onclick="loadmsg();">确定</a></td></tr><tr><td><a target="_blank" href="https://consumeprod.alipay.com/record/index.htm">查看支付宝交易号</a></td></tr></tbody></table>
			</div>
			</div>';}}elseif($type=='tenpay'){if($conf['tenpay_api']==1){$orderid=$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("YmdHis").$GLOBALS['zym_decrypt']['��������î�֎�å��È������������'](111,999);$sql="insert into `".DBQZ."_pay` (`uid`,`qq`,`type`,`orderid`,`addtime`,`shopid`,`name`,`money`,`status`) values ('".$uid."','".$qq."','".$type."','".$orderid."','".$date."','".$shopid."','".$name."','".$money."','0')";if($DB->query($sql))echo '<table class="table"><tobdy><tr><td>已经成功生成订单！</td></tr><tr><td>订单号：<u>'.$orderid.'</u></td></tr><tr><td>商品名称：<u>'.$name.'('.$money.'元)</u></td><tr><td>支付方式：<u>财付通（QQ钱包）</u></td></tr><tr><td><a href="index.php?mod=pay&type=tenpay&orderid='.$orderid.'" class="btn btn-success btn-block" target="_blank">立即支付</a></td></tr></tbody></table><script>$(document).ready(function(){interval1=setInterval("loadmsg(\''.$orderid.'\')", 3000);});</script>';else echo base64_decode('PHRhYmxlIGNsYXNzPSJ0YWJsZSI+PHRvYmR5Pjx0cj48dGQ+55Sf5oiQ6K6i5Y2V5aSx6LSl77yBPC90ZD48L3RyPjx0cj48dGQ+5Y6f5Zug77ya').$DB->error().'</td></tr></tbody></table>';}elseif($conf['tenpay_api']==2){$orderid=$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("YmdHis").$GLOBALS['zym_decrypt']['��������î�֎�å��È������������'](111,999);$sql="insert into `".DBQZ."_pay` (`uid`,`qq`,`type`,`orderid`,`addtime`,`shopid`,`name`,`money`,`status`) values ('".$uid."','".$qq."','".$type."','".$orderid."','".$date."','".$shopid."','".$name."','".$money."','0')";$DB->query($sql);echo base64_decode('PHVsIGNsYXNzPSJuYXYgbmF2LXRhYnMiPjxsaSBjbGFzcz0iYWN0aXZlIj48YSBocmVmPSIjd2ViIiBkYXRhLXRvZ2dsZT0idGFiIj7otKLku5jpgJrovazotKY8L2E+PC9saT48bGk+PGEgaHJlZj0iI29yZGVyIiBkYXRhLXRvZ2dsZT0idGFiIj7kuqTmmJPlj7fooaXljZU8L2E+PC9saT48bGk+PGEgaHJlZj0iI2dpZnQiIGRhdGEtdG9nZ2xlPSJ0YWIiPue6ouWMheaUr+S7mDwvYT48L2xpPjwvdWw+DQoJCQk8ZGl2IGNsYXNzPSJ0YWItY29udGVudCI+DQoJCQk8ZGl2IGNsYXNzPSJ0YWItcGFuZSBmYWRlIGluIGFjdGl2ZSIgaWQ9IndlYiI+DQoJCQk8dGFibGUgY2xhc3M9InRhYmxlIj48dG9iZHk+PHRyPjx0ZD7mlK/ku5jmlrnlvI/vvJo8dT7otKLku5jpgJrovazotKY8L3U+PC90ZD48L3RyPjx0cj48dGQ+PGEgaHJlZj0iaW5kZXgucGhwP21vZD1wYXkmdHlwZT10ZW5wYXkyJm9yZGVyaWQ9').$orderid.'" class="btn btn-primary btn-block" target="_blank">立即支付</a></td></tr><tr><td><font color="red">请不要修改付款说明,否则无法自动到账</font></td></tr><tr><td><a id="getshop" class="btn btn-success btn-block getshop" onclick="loadmsg(\''.$orderid.'\');">检测是否已经支付</a></td></tr></tbody></table>
			</div>
			<div class="tab-pane fade in" id="order">
			<table class="table"><tobdy><tr><td>如果没有自动到账，请手动输入财付通交易号进行补单：</td></tr><tr><td><input type="text" class="form-control" name="orderid" id="orderid" value="" placeholder="财付通交易号" required></td></tr><tr><td><a id="getshop" class="btn btn-success btn-block getshop" onclick="loadmsg();">确定</a></td></tr><tr><td><a target="_blank" href="https://www.tenpay.com/v2/trade/trade_mgr.shtml">查看财付通交易号</a></td></tr></tbody></table>
			</div>
			<div class="tab-pane fade in" id="gift">
			<table class="table"><tobdy><tr><td>1、添加QQ：'.$conf['kfqq'].'为好友<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin='.$conf['kfqq'].'&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:'.$conf['kfqq'].':51" alt="点击这里给我发消息" title="点击这里给我发消息"></a></td></tr><tr><td>2、发送QQ红包（物品的对应金额），留下QQ消息<code> UID：'.$uid.' </code>，请勿写错号！</td></tr><tr><td>提示：站长看到消息后将会充值。被领取红包后QQ会有提示，未被领取的红包将会在24小时后自动退回到你的账户余额中。</td></tr></tbody></table>
			</div>
			</div>';}}elseif($type=='wxpay'){$orderid=$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("YmdHis").$GLOBALS['zym_decrypt']['��������î�֎�å��È������������'](111,999);$sql="insert into `".DBQZ."_pay` (`uid`,`qq`,`type`,`orderid`,`addtime`,`shopid`,`name`,`money`,`status`) values ('".$uid."','".$qq."','".$type."','".$orderid."','".$date."','".$shopid."','".$name."','".$money."','0')";if($DB->query($sql)){require_once SYSTEM_ROOT."wxpay/WxPay.Api.php";require_once SYSTEM_ROOT.base64_decode('d3hwYXkvV3hQYXkuTmF0aXZlUGF5LnBocA==');$notify =new NativePay();$input =new WxPayUnifiedOrder();$input->SetBody($name);$input->SetOut_trade_no($orderid);$input->SetTotal_fee($money*100);$input->SetSpbill_create_ip($clientip);$input->SetTime_start(date("YmdHis"));$input->SetTime_expire(date("YmdHis", time()+ 600));$input->SetGoods_tag("test");$input->SetNotify_url($siteurl."other/wxpay_notify.php");$input->SetTrade_type("NATIVE");$result =$notify->GetPayUrl($input);if($result["result_code"]=='SUCCESS'){echo '<table class="table"><tobdy><tr><td>订单号：<u>'.$orderid.'</u></td></tr><tr><td>商品名称：<u>'.$name.'('.$money.'元)</u></td><tr><td>支付方式：<u>微信扫码支付</u></td></tr><tr><td><img alt="用微信扫码二维码" src="http://paysdk.weixin.qq.com/example/qrcode.php?data='.$GLOBALS['zym_decrypt']['��ֈ������Ô�Î֋�ֈ������������']($result["code_url"]).'" style="width:150px;height:150px;"/><br/>请使用微信扫一扫 扫描二维码完成支付。<font color="red">支付期间请勿关闭此窗口，否则无法自动到账！</font></td></tr></tbody></table><script>$(document).ready(function(){interval1=setInterval("loadmsg(\''.$orderid.'\')", 4000);});</script>';}else{echo base64_decode('PHRhYmxlIGNsYXNzPSJ0YWJsZSI+PHRvYmR5Pjx0cj48dGQ+5b6u5L+h5pSv5LuY5LiL5Y2V5aSx6LSl77yBPC90ZD48L3RyPjx0cj48dGQ+Ww==').$result["err_code"].'] '.$result["err_code_des"].'</td></tr></tbody></table>';}}else echo base64_decode('PHRhYmxlIGNsYXNzPSJ0YWJsZSI+PHRvYmR5Pjx0cj48dGQ+55Sf5oiQ6K6i5Y2V5aSx6LSl77yBPC90ZD48L3RyPjx0cj48dGQ+5Y6f5Zug77ya').$DB->error().'</td></tr></tbody></table>';}break;}}else{exit(base64_decode('55m75b2V5aSx6LSl77yM5Y+v6IO95piv5a+G56CB6ZSZ6K+v5oiW6ICF6Lqr5Lu95aSx5pWI5LqG77yM6K+36YeN5paw55m75b2V77yB'));}?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="clearInterval(interval1)">Close</button>
      </div>
    </div>
  </div>
</div>