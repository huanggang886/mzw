<?php
/*
 *腾讯签到功能类
 *Author：消失的彩虹海 & 云上的影子
*/
class qqsign{
	public $msg;
	public function __construct($uin,$sid=null,$skey=null,$pskey=null){
		$this->uin=$uin;
		$this->sid=$sid;
		$this->skey=$skey;
		$this->pskey=$pskey;
		$this->gtk=$this->getGTK($skey);
		$this->gtk2=$this->getGTK2($skey);
		if($pskey==null)
			$this->cookie='pt2gguin=o0'.$uin.'; uin=o0'.$uin.'; skey='.$skey.';';
		else
			$this->cookie='pt2gguin=o0'.$uin.'; uin=o0'.$uin.'; skey='.$skey.'; p_skey='.$pskey.'; p_uin=o0'.$uin.';';
	}
	public function get_curl($url,$post=0,$referer=1,$cookie=0,$header=0,$ua=0,$nobaody=0){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		$httpheader[] = "Accept:application/json";
		$httpheader[] = "Accept-Encoding:gzip,deflate,sdch";
		$httpheader[] = "Accept-Language:zh-CN,zh;q=0.8";
		$httpheader[] = "Connection:close";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
		if($post){
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		}
		if($header){
			curl_setopt($ch, CURLOPT_HEADER, TRUE);
		}
		if($cookie){
			curl_setopt($ch, CURLOPT_COOKIE, $cookie);
		}
		if($referer){
			if($referer==1){
				curl_setopt($ch, CURLOPT_REFERER, 'http://m.qzone.com/infocenter?g_f=');
			}else{
				curl_setopt($ch, CURLOPT_REFERER, $referer);
			}
		}
		if($ua){
			curl_setopt($ch, CURLOPT_USERAGENT,$ua);
		}else{
			curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Linux; U; Android 4.4.1; zh-cn) AppleWebKit/533.1 (KHTML, like Gecko)Version/4.0 MQQBrowser/5.5 Mobile Safari/533.1');
		}
		if($nobaody){
			curl_setopt($ch, CURLOPT_NOBODY,1);
		}
		curl_setopt($ch, CURLOPT_ENCODING, "gzip");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		$ret = curl_exec($ch);
		curl_close($ch);
		//$ret=mb_convert_encoding($ret, "UTF-8", "UTF-8");
		return $ret;
	}
	private function getGTK($skey){
        $len = strlen($skey);
        $hash = 5381;
        for($i = 0; $i < $len; $i++){
            $hash += (($hash << 5) & 0xffffffff) + ord($skey[$i]);
        }
        return $hash & 0x7fffffff;//计算g_tk
    }
	private function getGTK2($skey){
		$salt = 5381;
		$md5key = 'tencentQQVIP123443safde&!%^%1282';
		$hash = array();
		$hash[] = ($salt << 5);
		for($i = 0; $i < strlen($skey); $i ++)
		{
			$ASCIICode = mb_convert_encoding($skey[$i], 'UTF-32BE', 'UTF-8');
			$ASCIICode = hexdec(bin2hex($ASCIICode));
			$hash[] = (($salt << 5) + $ASCIICode);
			$salt = $ASCIICode;
		}
		$md5str = md5(implode($hash) . $md5key);
		return $md5str;
	}
	private function getToken($token){
		$len = strlen($token);
		$hash = 0;
		for ($i = 0; $i < $len; $i++) {
			$hash = fmod($hash * 33 + ord($token[$i]), 4294967296);
		}
        return $hash;
    }
	public function scqd()
	{
		//$url = "http://account.book.qq.com/usercenter/signin.html";
		//$this->get_curl($url,0,0,$this->cookie);
		$url = "http://ebook.3g.qq.com/user/v3/normalLevel/sign?sid=" . $this->sid . "&g_ut=2";
		$this->get_curl($url);
		$this->msg[] = "书城签到成功~";
	}
	public function vipqd()
	{
		$url='http://vipfunc.qq.com/act/client_oz.php?action=client&g_tk='.$this->gtk2;
		$data=$this->get_curl($url,0,$url,$this->cookie);
		if($data=='{ret:0}')
			$this->msg[] = $this->uin.' 会员面板签到成功！';
		else
			$this->msg[] = $this->uin.' 会员面板签到失败！'.$json;

		//$url='http://vipfunc.qq.com/growtask/sign.php?cb=vipsign.signCb&action=daysign&actId=16&fotmat=json&t='.time().'141&g_tk='.$this->gtk2;
		//$data=$this->get_curl($url,0,$url,$this->cookie);
		$data=$this->get_curl("http://iyouxi.vip.qq.com/ams3.0.php?_c=page&actid=23314&format=json&g_tk=" . $this->gtk2 ."&cachetime=".time(),0,'http://vip.qq.com/',$this->cookie);
		$arr=json_decode($data,true);
		if(array_key_exists('ret',$arr) && $arr['ret']==0)
			$this->msg[] = $this->uin.' 会员网页版签到成功！';
		elseif($arr['ret']==10601)
			$this->msg[] = $this->uin.' 会员网页版今天已经签到！';
		elseif($arr['ret']==10002){
			$this->skeyzt=1;
			$this->msg[] = $this->uin.' 会员网页版签到失败！SKEY过期';
		}elseif($arr['ret']==20101)
			$this->msg[] = $this->uin.' 会员网页版签到失败！不是QQ会员！';
		else
			$this->msg[] = $this->uin.' 会员网页版签到失败！'.$arr['msg'];

		$data=$this->get_curl('http://iyouxi.vip.qq.com/ams3.0.php?actid=52002&rand=0.27489888'.time().'&g_tk='.$this->gtk2.'&format=json',0,'http://vip.qq.com/',$this->cookie);
		$arr=json_decode($data,true);
		if(array_key_exists('ret',$arr) && $arr['ret']==0)
			$this->msg[] = $this->uin.' 会员手机端签到成功！';
		elseif($arr['ret']==10601)
			$this->msg[] = $this->uin.' 会员手机端今天已经签到！';
		elseif($arr['ret']==10002){
			$this->skeyzt=1;
			$this->msg[] = $this->uin.' 会员手机端签到失败！SKEY过期';
		}else
			$this->msg[] = $this->uin.' 会员手机端签到失败！'.$arr['msg'];

		$data=$this->get_curl('http://iyouxi.vip.qq.com/ams3.0.php?_c=page&actid=56247&g_tk='.$this->gtk2.'&pvsrc=&fotmat=json&cache=0',0,'http://vip.qq.com/',$this->cookie);
		$arr=json_decode($data,true);
		if(array_key_exists('ret',$arr) && $arr['ret']==0)
			$this->msg[] = $this->uin.' 三国之刃会员每周签到礼包领取成功！';
		elseif($arr['ret']==10601)
			$this->msg[] = $this->uin.' 三国之刃会员每周签到礼包已领取！';
		elseif($arr['ret']==40039)
			$this->msg[] = $this->uin.' 三国之刃会员每周签到礼包 不符合领取条件';
		elseif($arr['ret']==10002){
			$this->skeyzt=1;
			$this->msg[] = $this->uin.' 三国之刃会员每周签到礼包领取失败！SKEY过期';
		}else
			$this->msg[] = $this->uin.' 三国之刃会员每周签到礼包领取失败！'.$arr['msg'];

		$data=$this->get_curl('http://iyouxi.vip.qq.com/ams3.0.php?_c=page&actid=54963&isLoadUserInfo=1&format=json&g_tk='.$this->gtk2,0,'http://vip.qq.com/',$this->cookie);
		$arr=json_decode($data,true);
		if(array_key_exists('ret',$arr) && $arr['ret']==0)
			$this->msg[] = $this->uin.' 会员积分签到成功！';
		elseif($arr['ret']==10601)
			$this->msg[] = $this->uin.' 会员积分今天已经签到！';
		elseif($arr['ret']==10002){
			$this->skeyzt=1;
			$this->msg[] = $this->uin.' 会员积分签到失败！SKEY过期';
		}else
			$this->msg[] = $this->uin.' 会员积分签到失败！'.$arr['msg'];

		$data=$this->get_curl('http://iyouxi.vip.qq.com/ams2.02.php?actid=23074&g_tk_type=1sid=&rand=0.8656469448520889&format=json&g_tk='.$this->gtk2,0,'http://vip.qq.com/',$this->cookie);
		$arr=json_decode($data,true);
		if(array_key_exists('ret',$arr) && $arr['ret']==0)
			$this->msg[] = $this->uin.' 会员积分2签到成功！';
		elseif($arr['ret']==10601)
			$this->msg[] = $this->uin.' 会员积分2今天已经签到！';
		elseif($arr['ret']==10002){
			$this->skeyzt=1;
			$this->msg[] = $this->uin.' 会员积分2签到失败！SKEY过期';
		}else
			$this->msg[] = $this->uin.' 会员积分2签到失败！'.$arr['msg'];

		$this->get_curl('http://iyouxi.vip.qq.com/ams3.0.php?_c=page&actid=27754&g_tk='.$this->gtk2.'&pvsrc=undefined&ozid=509656&vipid=MA20131223091753081&format=json&_='.time(),0,'http://vip.qq.com/',$this->cookie);//超级会员每月成长值
		$this->get_curl('http://iyouxi.vip.qq.com/ams3.0.php?_c=page&actid=27755&g_tk='.$this->gtk2.'&pvsrc=undefined&ozid=509656&vipid=MA20131223091753081&format=json&_='.time(),0,'http://vip.qq.com/',$this->cookie);//超级会员每月积分
		$this->get_curl('http://iyouxi.vip.qq.com/ams3.0.php?g_tk='.$this->gtk2.'&actid=22249&_c=page&format=json&_='.time(),0,'http://vip.qq.com/',$this->cookie);//每周薪水积分
		$this->get_curl("http://iyouxi.vip.qq.com/jsonp.php?_c=page&actid=5474&isLoadUserInfo=1&format=json&g_tk=".$this->gtk2."&_=".time(),0,0,$this->cookie);
	}
	public function lzqd(){
		$url='http://share.music.qq.com/fcgi-bin/dmrp_activity/fcg_feedback_send_lottery.fcg?activeid=110&rnd='.time().'157&g_tk='.$this->gtk.'&uin='.$this->uin.'&hostUin=0&format=json&inCharset=UTF-8&outCharset=UTF-8&notice=0&platform=activity&needNewCode=1';
		$data = $this->get_curl($url,0,'http://y.qq.com/vip/fuliwo/index.html',$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('code',$arr) && $arr['code']==0){
			if($arr['data']['alreadysend']==1)
				$this->msg[]='您今天已经签到过了！';
			else
				$this->msg[]='绿钻签到成功！';
		}elseif($arr['code']==-200017){
			$this->msg[]='你不是绿钻无法签到！';
		}else{
			$this->msg[]='绿钻签到失败！';
		}

		$url='http://share.music.qq.com/fcgi-bin/dmrp_activity/fcg_dmrp_get_present.fcg?activeid=73&rnd='.time().'029&g_tk='.$this->gtk.'&uin='.$this->uin.'&hostUin=0&format=json&inCharset=GB2312&outCharset=gb2312&notice=0&platform=activity&needNewCode=1';
		$data = $this->get_curl($url,0,'http://y.qq.com/vip/Installment_lv8/index.html',$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('code',$arr) && $arr['code']==0){
			$this->msg[]='绿钻签到2成功！';
		}elseif($arr['code']==-200006){
			$this->msg[]='绿钻签到2今天已签到！';
		}else{
			$this->msg[]='绿钻签到2失败！';
		}

		$url='http://share.music.qq.com/fcgi-bin/dmrp_activity/fcg_dmrp_get_present.fcg?activeid=128&rnd='.time().'029&g_tk='.$this->gtk.'&uin='.$this->uin.'&hostUin=0&format=json&inCharset=GB2312&outCharset=gb2312&notice=0&platform=activity&needNewCode=1';
		$data = $this->get_curl($url,0,'http://y.qq.com/vip/Installment_lv8/index.html',$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('code',$arr) && $arr['code']==0){
			$this->msg[]='绿钻签到3成功！';
		}elseif($arr['code']==-200006){
			$this->msg[]='绿钻签到3今天已签到！';
		}elseif($arr['code']==200004){
			$this->msg[]='你不是绿钻无法签到！';
		}else{
			$this->msg[]='绿钻签到3失败！';
		}

		$url='http://share.music.qq.com/fcgi-bin/dmrp_activity/fcg_dmrp_get_present.fcg?activeid=130&rnd='.time().'029&g_tk='.$this->gtk.'&uin='.$this->uin.'&hostUin=0&format=json&inCharset=GB2312&outCharset=gb2312&notice=0&platform=activity&needNewCode=1';
		$data = $this->get_curl($url,0,'http://y.qq.com/vip/Installment_lv8/index.html',$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('code',$arr) && $arr['code']==0){
			$this->msg[]='绿钻签到4成功！';
		}elseif($arr['code']==-200006){
			$this->msg[]='绿钻签到4今天已签到！';
		}elseif($arr['code']==200004){
			$this->msg[]='你不是绿钻无法签到！';
		}else{
			$this->msg[]='绿钻签到4失败！';
		}

		$url='http://share.music.qq.com/fcgi-bin/dmrp_activity/fcg_dmrp_get_present.fcg?activeid=138&rnd='.time().'029&g_tk='.$this->gtk.'&uin='.$this->uin.'&hostUin=0&format=json&inCharset=GB2312&outCharset=gb2312&notice=0&platform=activity&needNewCode=1';
		$data = $this->get_curl($url,0,'http://y.qq.com/vip/Installment_lv8/index.html',$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('code',$arr) && $arr['code']==0){
			$this->msg[]='绿钻签到5成功！';
		}elseif($arr['code']==-200006){
			$this->msg[]='绿钻签到5今天已签到！';
		}elseif($arr['code']==200004){
			$this->msg[]='你不是绿钻无法签到！';
		}else{
			$this->msg[]='绿钻签到5失败！';
		}

		$url='http://share.music.qq.com/fcgi-bin/dmrp_activity/fcg_dmrp_draw_lottery.fcg?activeid=159&rnd='.time().'482&g_tk='.$this->gtk.'&uin='.$this->uin.'&hostUin=0&format=json&inCharset=UTF-8&outCharset=UTF-8&notice=0&platform=activity&needNewCode=1';
		$data = $this->get_curl($url,0,'http://y.qq.com/vip/fuliwo/index.html',$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('code',$arr) && $arr['code']==0){
			$this->msg[]='绿钻抽奖成功！';
		}elseif($arr['code']==200008){
			$this->msg[]='您没有抽奖机会！';
		}else{
			$this->msg[]='绿钻抽奖失败！';
		}
		
	}
	public function pqd(){
		$url="http://iyouxi.vip.qq.com/ams3.0.php?g_tk=".$this->gtk2."&pvsrc=102&ozid=511022&vipid=&actid=32961&format=json".time()."8777&cache=3654";
		$data = $this->get_curl($url,0,'http://youxi.vip.qq.com/m/wallet/activeday/index.html?_wv=3&pvsrc=102',$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('ret',$arr) && $arr['ret']==0){
			$this->msg[]='钱包签到成功！';
		}elseif($arr['ret']==37206){
			$this->msg[]='钱包签到失败！你没有绑定银行卡';
		}elseif($arr['ret']==10601){
			$this->msg[]='你今天已钱包签到！';
		}else{
			$this->msg[]='钱包签到失败！'.$arr['msg'];
		}	
	}
	public function yqd(){
		$url = 'http://vip.qzone.qq.com/fcg-bin/v2/fcg_mobile_vip_site_checkin?t=0.89457'.time().'&g_tk='.$this->gtk.'&qzonetoken=423659183';
		$post = 'uin='.$this->uin.'&format=json';
		$referer='http://h5.qzone.qq.com/vipinfo/index?plg_nld=1&source=qqmail&plg_auth=1&plg_uin=1&_wv=3&plg_dev=1&plg_nld=1&aid=jh&_bid=368&plg_usr=1&plg_vkey=1&pt_qzone_sig=1';
		$data = $this->get_curl($url,$post,$referer,$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('code',$arr) && $arr['code']==0){
			$this->msg[]='黄钻签到成功！';
		}elseif(array_key_exists('code',$arr) && $arr['code']==-3000){
			$this->skeyzt=1;
			$this->msg[]='黄钻签到失败！SKEY已失效';
		}elseif(array_key_exists('code',$arr)){
			$this->msg[]='黄钻签到失败！'.$arr['message'];
		}else{
			$this->msg[]='黄钻签到失败！'.$data;
		}

		$url = 'http://activity.qzone.qq.com/fcg-bin/fcg_qzact_count?g_tk='.$this->gtk.'&format=json&actid=101&uin='.$this->uin.'&_='.time().'3333';
		$data = $this->get_curl($url,0,$url,$this->cookie);
		$data = mb_convert_encoding($data, "UTF-8", "GB2312");
		$arr = json_decode($data, true);
		$count = $arr['data']['rule']['1001']['count'][0]['left'];
		while($count>0) {
			$url = 'http://activity.qzone.qq.com/fcg-bin/fcg_qzact_lottery?g_tk='.$this->gtk;
			$post = 'actid=101&ruleid=1001&format=json&uin='.$this->uin.'&g_tk='.$this->gtk.'&qzreferrer=http%3A%2F%2Fqzs.qq.com%2Fqzone%2Fqzact%2Fact%2Fhkhd%2Findex.html';
			$referer='http://qzs.qq.com/qzone/qzact/act/hkhd/index.html';
			$data = $this->get_curl($url,$post,$referer,$this->cookie);
			$arr = json_decode($data, true);
			if(array_key_exists('code',$arr) && $arr['code']==0){
				$this->msg[]='黄钻抽奖成功，抽到'.$arr['data'][0]['name'].'！';
			}elseif($arr['code']==-3000){
				$this->skeyzt=1;
				$this->msg[]='黄钻抽奖失败！SKEY已失效';
			}elseif($arr['code']==-5004){
				$this->msg[]='黄钻抽奖失败！抽奖机会已用完';
			}elseif(array_key_exists('code',$arr)){
				$this->msg[]='黄钻抽奖失败！'.$arr['message'];
			}else{
				$this->msg[]='黄钻抽奖失败！'.$data;
			}
			--$count;
		}
	}
	public function mqqd(){
		$url = 'http://mq.qq.com/index_userSignIn.shtml?r=0.'.time().'2899';
		$data = $this->get_curl($url,0,$url,$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('iRet',$arr) && $arr['iRet']==0){
			$this->msg[]='超级ＱＱ签到成功！';
		}elseif($arr['iRet']==-10){
			$this->skeyzt=1;
			$this->msg[]='超级ＱＱ签到失败！SKEY已失效';
		}elseif($arr['iRet']==-11){
			$this->msg[]='超级ＱＱ已签到！';
		}else{
			$this->msg[]='超级ＱＱ签到失败！'.$data;
		}
		$url = 'http://mq.qq.com/activity/badgepk10_qiandao.shtml?r=0.'.time().'2796';
		$data = $this->get_curl($url,0,$url,$this->cookie);
		$data = mb_convert_encoding($data, "UTF-8", "GB2312"); 
		if(strpos($data,'签到成功')!==false){
			$this->msg[]='勋章馆签到成功！';
		}elseif(strpos($data,'感谢参与')!==false){
			$this->msg[]='勋章馆今天已签到！';
		}elseif(strpos($data,'领取失败')!==false){
			$this->msg[]='勋章馆签到失败！';
		}
	}
	public function qunqd($forbid,$lat=0,$lgt=0){
		$url = 'http://qun.qzone.qq.com/cgi-bin/get_group_list?groupcount=4&count=4&format=json&callbackFun=_GetGroupPortal&uin='.$this->uin.'&g_tk='.$this->gtk.'&ua=Mozilla%2F5.0%20(Windows%20NT%206.1%3B%20WOW64)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F31.0.1650.63%20Safari%2F537.36';
		$url2 = 'http://qiandao.qun.qq.com/cgi-bin/sign';
		$data = $this->get_curl($url,0,'http://qun.qzone.qq.com/group',$this->cookie);
		preg_match('/_GetGroupPortal_Callback\((.*?)\)\;/is',$data,$json);
		$arr = json_decode($json[1],true);
		//print_r($arr);exit;
		if(@array_key_exists('code',$arr) && $arr['code']==0) {
			foreach($arr['data']['group'] as $row){
				if(in_array($row['groupid'],$forbid))continue;
				if($lat&&$lgt){
					$data = $this->get_curl('http://qiandao.qun.qq.com/cgi-bin/get_lbs_location?lat='.$lat.'&lgt='.$lgt.'&s=1&n=1&gpstype=1&gc='.$row['groupid'],0,'http://qiandao.qun.qq.com/index.html',$this->cookie);
					$arr=json_decode($data,true);
					if($arr['info'][0])
						$addstr='&poi='.urlencode($arr['info'][0]['city'].' · '.$arr['info'][0]['name']).'&lat='.$arr['info'][0]['lat'].'&lgt='.$arr['info'][0]['lgt'].'&seckey='.$arr['info'][0]['seckey'];
					else{
						$addstr=null;$lat=0;$lgt=0;
					}
				}
				$post = 'gc='.$row['groupid'].'&is_sign=0&from=1&bkn='.$this->gtk.$addstr;
				$data = $this->get_curl($url2,$post,'http://qiandao.qun.qq.com/index.html?groupUin='.$row['groupid'].'&appID=100729587',$this->cookie);
				$arr=json_decode($data,true);
				if(array_key_exists('ec',$arr) && $arr['ec']==0) {
					if(array_key_exists('name_list',$arr))
						$this->msg[] = '群：'.$row['groupid'].' 签到成功！累计签到'.$arr['conti_count'].'天,签到排名为'.$arr['rank'].'名.';
					elseif(array_key_exists('conti_count',$arr))
						$this->msg[] = '群：'.$row['groupid'].' 今天已签到！累计签到'.$arr['conti_count'].'天,签到排名为'.$arr['rank'].'名.';
					else
						$this->msg[] = '群：'.$row['groupid'].'签到失败！原因：'.$data;
				} elseif($arr['ec']==1) {
					$this->skeyzt=1;
					$this->msg[] = '群：'.$row['groupid'].'签到失败！原因：SKEY失效！';
				} else {
					$this->msg[] = '群：'.$row['groupid'].'签到失败！原因：'.$data;
				}
			}
		} elseif($arr['code']==-3000) {
			$this->msg[]='群签到失败！原因：SKEY已失效。';
		} else {
			$this->msg[]='群签到失败！原因：'.$arr['message'];
		}
	}
	public function wenwen($superkey,$forbid){
		$supertoken=(string)$this->getToken($superkey);
		$url = "http://ptlogin2.qq.com/pt4_auth?daid=210&appid=21000110&auth_token=".$this->getToken($supertoken);
		$data = $this->get_curl($url,0,'http://ui.ptlogin2.qq.com/cgi-bin/login','superuin=o0'.$this->uin.'; superkey='.$superkey.'; supertoken='.$supertoken.';');
		if(preg_match('/ptsigx=(.*?)&/',$data,$match)){
			$url='http://ptlogin4.wenwen.sogou.com/check_sig?uin='.$this->uin.'&ptsigx='.$match[1].'&daid=210&pt_login_type=4&service=pt4_auth&pttype=2&regmaster=&aid=6000201&s_url=http%3A%2F%2Fwenwen.sogou.com%2Fqunapp%2Ffriends%2F%3FgroupUin%3D514575135&low_login_enable=1&low_login_hour=720';
			$data = $this->get_curl($url,0,'http://ui.ptlogin2.qq.com/cgi-bin/login',0,1);
			$cookie='ssuid='.time().'; ';
			preg_match_all('/Set-Cookie: (.*);/iU',$data,$matchs);
			foreach ($matchs[1] as $val) {
				$cookie.=$val.'; ';
			}
			
		$url = 'http://qun.qzone.qq.com/cgi-bin/get_group_list?groupcount=4&count=4&format=json&callbackFun=_GetGroupPortal&uin='.$this->uin.'&g_tk='.$this->gtk.'&ua=Mozilla%2F5.0%20(Windows%20NT%206.1%3B%20WOW64)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F31.0.1650.63%20Safari%2F537.36';
		$data = $this->get_curl($url,0,'http://qun.qzone.qq.com/group',$this->cookie);
		preg_match('/_GetGroupPortal_Callback\((.*?)\)\;/is',$data,$json);
		$arr = json_decode($json[1],true);
		//print_r($arr);exit;
		if(@array_key_exists('code',$arr) && $arr['code']==0) {
			foreach($arr['data']['group'] as $row){
				if(in_array($row['groupid'],$forbid))continue;
				if(!$addcookie){
					$url='http://wenwen.sogou.com/wapi/qun/red-dot?groupUin='.$row['groupid'].'&orig=254&_='.time().'1573';
					$data = $this->get_curl($url,0,'http://wenwen.sogou.com/mobile/found/?groupUin='.$row['groupid'],$cookie,1,0,1);
					$addcookie='';
					preg_match_all('/Set-Cookie:(.*);/iU',$data,$matchs);
					foreach ($matchs[1] as $val) {
						if(strpos($val,'qun_t0')!==false)continue;
						$addcookie.=trim($val).'; ';
					}
				}
				$url='http://wenwen.sogou.com/wapi/qun/red-dot?groupUin='.$row['groupid'].'&orig=254&_='.time().'1573';
				$data = $this->get_curl($url,0,'http://wenwen.sogou.com/mobile/found/?groupUin='.$row['groupid'],$cookie.$addcookie,1,0,1);
				$addcookie='';
				preg_match_all('/Set-Cookie:(.*);/iU',$data,$matchs);
				foreach ($matchs[1] as $val) {
					if(strpos($val,'qun_t0')!==false)continue;
					$addcookie.=trim($val).'; ';
				}
				$url = 'http://wenwen.sogou.com/submit/qun/signin?groupUin='.$row['groupid'].'&_=0.4945279657840729';
				$post = 'groupUin='.$row['groupid'].'&questionNum=0&answerNum=0&orig=254';
				$data = $this->get_curl($url,$post,'http://wenwen.sogou.com/mobile/found/?groupUin='.$row['groupid'],$cookie.$addcookie);
				$arr=json_decode($data,true);
				if(array_key_exists('resultCode',$arr) && $arr['resultCode']==0) {
					$this->msg[] = $row['groupid'].' 群问问签到成功！已连续签到'.$arr['days'].'天';
				} elseif($arr['resultCode']==1) {
					$this->msg[] = $row['groupid'].' 群问问已签到！';
				} elseif($arr['resultCode']==-2) {
					exit('签到时间未到');
				} else {
					$this->msg[] = $row['groupid'].' 群问问签到失败！原因：'.$arr['msg'];
				}
			}
		} elseif($arr['code']==-3000) {
			$this->skeyzt=1;
			$this->msg[]='群问问签到失败！原因：SKEY已失效。';
		} else {
			$this->msg[]='群问问签到失败！原因：'.$arr['message'];
		}

		}else{
			$this->msg[]='群问问签到失败！superkey已失效';
		}
	}
	public function buluo(){
		$url='http://buluo.qq.com/cgi-bin/bar/card/bar_list_by_page?uin='.$this->uin.'&neednum=30&startnum=0&r=0.98389'.time();
		$url2='http://buluo.qq.com/cgi-bin/bar/user/sign';
		$data=$this->get_curl($url,0,'http://buluo.qq.com/mobile/personal.html',$this->cookie);
		$arr=json_decode($data,true);
		//print_r($arr);exit;
		if(array_key_exists('retcode',$arr) && $arr['retcode']==0){
			$this->msg[]=$this->uin.'获取兴趣部落列表成功！';
			$arr=$arr['result']['followbars'];
			foreach($arr as $row) {
				$post='bid='.$row['bid'].'&bkn='.$this->gtk.'&r=0.84746'.time();
				$data=$this->get_curl($url2,$post,'http://buluo.qq.com/mobile/personal.html',$this->cookie);
				$arrs=json_decode($data,true);
				if(array_key_exists('retcode',$arrs) && $arrs['retcode']==0){
					if($arrs['result']['sign']==1)
						$this->msg[]=$row['name'].' 部落已签到！';
					else
						$this->msg[]=$row['name'].' 部落签到成功！';
				}elseif($arrs['retcode']==100000){
					$this->skeyzt=1;
					$this->msg[]=$row['name'].' 部落签到失败！SKEY已失效。';
				}else{
					$this->msg[]=$row['name'].' 部落签到失败！'.$data;
				}
			}
		}elseif($arr['retcode']==100000){
			$this->skeyzt=1;
			$this->msg[]=$this->uin.'兴趣部落签到失败！SKEY已失效。';
		}else{
			$this->msg[]=$this->uin.'兴趣部落签到失败！'.$data;
		}
	}
	public function gameqd(){
		$url = 'http://social.minigame.qq.com/cgi-bin/social/welcome_panel_operate?format=json&cmd=2&uin='.$this->uin.'&DomainID=207&g_tk='.$this->gtk;
		$data = $this->get_curl($url,0,'http://minigame.qq.com/appdir/social/cloudHall/src/index/welcome.html',$this->cookie);
		$arr=json_decode($data,true);
		if(array_key_exists('result',$arr) && $arr['result']==0) {
			if($arr['do_ret']==11)
				$this->msg[]=$this->uin.' 游戏大厅今天已签到！';
			else
				$this->msg[]=$this->uin.' 游戏大厅签到成功！';
		}elseif($arr['result']==1000005){
			$this->skeyzt=1;
			$this->msg[]=$this->uin.' 游戏大厅签到失败！SKEY已失效。';
		}else{
			$this->msg[]=$this->uin.' 游戏大厅签到失败！'.$arr['resultstr'];
		}
	}
	public function dldqd(){
		$url = 'http://fight.pet.qq.com/cgi-bin/petpk?cmd=award&op=1&type=0';
		$data = $this->get_curl($url,0,$url,$this->cookie);
		$data = mb_convert_encoding($data, "UTF-8", "GB2312");
		$arr = json_decode($data, true);
		if(array_key_exists('ret',$arr) && $arr['ret']==0){
			$this->msg[]=$arr['ContinueLogin'].' + '.$arr['DailyAward'];
		}elseif($arr['ret']==-1){
			$this->msg[]=$arr['ContinueLogin'];
			$this->msg[]=$arr['DailyAward'];
		}elseif($arr['result']==-5){
			$this->skeyzt=1;
			$this->msg[]='大乐斗领礼包失败！SKEY已失效';
		}else{
			$this->msg[]='大乐斗领礼包失败！'.$arr['msg'];
		}
	}
	public function weiyun(){
		$data = $this->get_curl('http://web2.cgi.weiyun.com/weiyun_activity.fcg?cmd%20=17004&g_tk='.$this->gtk.'&data=%7B%22req_header%22%3A%7B%22cmd%22%3A17004%2C%22appid%22%3A30013%2C%22version%22%3A2%2C%22major_version%22%3A2%7D%2C%22req_body%22%3A%7B%22ReqMsg_body%22%3A%7B%22weiyun.WeiyunDailySignInMsgReq_body%22%3A%7B%7D%7D%7D%7D&format=json',0,'http://www.weiyun.com/',$this->cookie);
		$json = json_decode($data, true);
		$arr = $json['rsp_header'];
		if(array_key_exists('retcode',$arr) && $arr['retcode']==0){
			$this->msg[]='微云签到成功！积分增加'.$json['rsp_body']['RspMsg_body']['weiyun.WeiyunDailySignInMsgRsp_body']['add_point'].'分，总共'.$json['rsp_body']['RspMsg_body']['weiyun.WeiyunDailySignInMsgRsp_body']['total_point'].'积分';
		}elseif($arr['retcode']==190051){
			$this->skeyzt=1;
			$this->msg[]='微云签到失败！SKEY已失效';
		}elseif(array_key_exists('retcode',$arr)){
			$this->msg[]='微云签到失败！'.$arr['retmsg'];
		}else{
			$this->msg[]='微云签到失败！'.$data;
		}
	}
	public function fzqd(){
		$url='http://x.pet.qq.com/vip_platform?cmd=set_sign_info&format=json&_='.time().'9008';
		$data = $this->get_curl($url,0,$url,$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('result',$arr) && $arr['result']==0){
			$this->msg[]=$this->uin.' 粉钻签到成功！';
		}elseif($arr['result']==-101){
			$this->skeyzt=1;
			$this->msg[]=$this->uin.' 粉钻签到失败！SKEY已失效';
		}else{
			$this->msg[]=$this->uin.' 粉钻签到失败！'.$arr['msg'];
		}
	}
	public function video(){
		$url='http://pay.video.qq.com/fcgi-bin/sign?low_login=1&uin='.$this->uin.'&otype=json&_t=2&g_tk='.$this->gtk2.'&_='.time().'8906';
		$data = $this->get_curl($url,0,$url,$this->cookie);
		preg_match('/QZOutputJson=(.*?)\;/is',$data,$json);
		$arr = json_decode($json[1], true);
		$arr = $arr['result'];
		if(array_key_exists('code',$arr) && $arr['code']==0){
			$this->msg[]=$this->uin.' 好莱坞会员签到成功！';
		}elseif($arr['code']==-11){
			$this->skeyzt=1;
			$this->msg[]=$this->uin.' 好莱坞会员签到失败！SKEY已失效';
		}elseif($arr['code']==500){
			$this->msg[]=$this->uin.' 你不是好莱坞会员，无法签到';
		}else{
			$this->msg[]=$this->uin.' 好莱坞会员签到失败！'.$arr['msg'];
		}
	}
	public function nianvip(){
		$url='http://iyouxi.vip.qq.com/ams3.0.php?_c=page&actid=28481&_record_gift_flow=1&g_tk='.$this->gtk2.'&pvsrc=undefined&ozid=&vipid=-&format=json&_='.time().'1516';
		$data = $this->get_curl($url,0,$url,$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('ret',$arr) && $arr['ret']==0){
			$this->msg[]=$this->uin.' 年费会员抽奖.类型:'.$arr['data']['actname'].' 结果:'.$arr['data']['op']['name'];
		}elseif($arr['ret']==10002){
			$this->skeyzt=1;
			$this->msg[]=$this->uin.' 年费会员抽奖失败！SKEY已失效';
		}elseif($arr['ret']==20102){
			$this->msg[]=$this->uin.' 你不是年费会员，无法抽奖';
		}elseif($arr['ret']==10601){
			$this->msg[]=$this->uin.' 你今天已经抽奖过了！类型:'.$arr['data']['actname'];
		}else{
			$this->msg[]=$this->uin.' 年费会员抽奖失败！'.$arr['msg'];
		}

		$url='http://iyouxi.vip.qq.com/ams3.0.php?_c=page&actid=28311&_record_gift_flow=1&g_tk='.$this->gtk2.'&pvsrc=undefined&ozid=&vipid=-&format=json&_='.time().'6721';
		$data = $this->get_curl($url,0,$url,$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('ret',$arr) && $arr['ret']==0){
			$this->msg[]=$this->uin.' 年费会员抽奖.类型:'.$arr['data']['actname'].' 结果:'.$arr['data']['op']['name'];
		}elseif($arr['ret']==10002){
			$this->skeyzt=1;
			$this->msg[]=$this->uin.' 年费会员抽奖失败！SKEY已失效';
		}elseif($arr['ret']==20102){
			$this->msg[]=$this->uin.' 你不是年费会员，无法抽奖';
		}elseif($arr['ret']==10601){
			$this->msg[]=$this->uin.' 你今天已经抽奖过了！类型:'.$arr['data']['actname'];
		}else{
			$this->msg[]=$this->uin.' 年费会员抽奖失败！'.$arr['msg'];
		}

		$url='http://iyouxi.vip.qq.com/ams3.0.php?_c=page&actid=28479&_record_gift_flow=1&g_tk='.$this->gtk2.'&pvsrc=undefined&ozid=&vipid=-&format=json&_='.time().'6721';
		$data = $this->get_curl($url,0,$url,$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('ret',$arr) && $arr['ret']==0){
			$this->msg[]=$this->uin.' 年费会员抽奖.类型:'.$arr['data']['actname'].' 结果:'.$arr['data']['op']['name'];
		}elseif($arr['ret']==10002){
			$this->skeyzt=1;
			$this->msg[]=$this->uin.' 年费会员抽奖失败！SKEY已失效';
		}elseif($arr['ret']==20102){
			$this->msg[]=$this->uin.' 你不是年费会员，无法抽奖';
		}elseif($arr['ret']==10601){
			$this->msg[]=$this->uin.' 你今天已经抽奖过了！类型:'.$arr['data']['actname'];
		}else{
			$this->msg[]=$this->uin.' 年费会员抽奖失败！'.$arr['msg'];
		}

		$url='http://iyouxi.vip.qq.com/ams3.0.php?_c=page&actid=28485&_record_gift_flow=1&g_tk='.$this->gtk2.'&pvsrc=undefined&ozid=&vipid=-&format=json&_='.time().'6721';
		$data = $this->get_curl($url,0,$url,$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('ret',$arr) && $arr['ret']==0){
			$this->msg[]=$this->uin.' 年费会员抽奖.类型:'.$arr['data']['actname'].' 结果:'.$arr['data']['op']['name'];
		}elseif($arr['ret']==10002){
			$this->skeyzt=1;
			$this->msg[]=$this->uin.' 年费会员抽奖失败！SKEY已失效';
		}elseif($arr['ret']==20102){
			$this->msg[]=$this->uin.' 你不是年费会员，无法抽奖';
		}elseif($arr['ret']==10601){
			$this->msg[]=$this->uin.' 你今天已经抽奖过了！类型:'.$arr['data']['actname'];
		}else{
			$this->msg[]=$this->uin.' 年费会员抽奖失败！'.$arr['msg'];
		}

		$url='http://iyouxi.vip.qq.com/ams3.0.php?_c=page&actid=28484&_record_gift_flow=1&g_tk='.$this->gtk2.'&pvsrc=undefined&ozid=&vipid=-&format=json&_='.time().'6721';
		$data = $this->get_curl($url,0,$url,$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('ret',$arr) && $arr['ret']==0){
			$this->msg[]=$this->uin.' 年费会员抽奖.类型:'.$arr['data']['actname'].' 结果:'.$arr['data']['op']['name'];
		}elseif($arr['ret']==10002){
			$this->skeyzt=1;
			$this->msg[]=$this->uin.' 年费会员抽奖失败！SKEY已失效';
		}elseif($arr['ret']==20102){
			$this->msg[]=$this->uin.' 你不是年费会员，无法抽奖';
		}elseif($arr['ret']==10601){
			$this->msg[]=$this->uin.' 你今天已经抽奖过了！类型:'.$arr['data']['actname'];
		}else{
			$this->msg[]=$this->uin.' 年费会员抽奖失败！'.$arr['msg'];
		}

		$url='http://iyouxi.vip.qq.com/ams3.0.php?_c=page&actid=28476&_record_gift_flow=1&g_tk='.$this->gtk2.'&pvsrc=undefined&ozid=&vipid=-&format=json&_='.time().'6721';
		$data = $this->get_curl($url,0,$url,$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('ret',$arr) && $arr['ret']==0){
			$this->msg[]=$this->uin.' 年费会员抽奖.类型:'.$arr['data']['actname'].' 结果:'.$arr['data']['op']['name'];
		}elseif($arr['ret']==10002){
			$this->skeyzt=1;
			$this->msg[]=$this->uin.' 年费会员抽奖失败！SKEY已失效';
		}elseif($arr['ret']==20102){
			$this->msg[]=$this->uin.' 你不是年费会员，无法抽奖';
		}elseif($arr['ret']==10601){
			$this->msg[]=$this->uin.' 你今天已经抽奖过了！类型:'.$arr['data']['actname'];
		}else{
			$this->msg[]=$this->uin.' 年费会员抽奖失败！'.$arr['msg'];
		}
	}
	public function king(){
		$url='http://pf.vip.qq.com/common/vframe1.1.php?&id=5000013&g_tk='.$this->gtk2.'&d='.time().'8799&_ACTID_=20121005';
		$data = $this->get_curl($url,0,$url,$this->cookie);
		$arr = json_decode(str_replace('VF_RET= ','',$data), true);
		//print_r($arr);exit;
		if(array_key_exists('TASK',$arr) && $arr['TASK']['RET']==0){
			$this->msg[]=$this->uin.' 任意星钻专属礼包抽奖成功！';
		}elseif($arr['TASK']['RET']==10002){
			$this->skeyzt=1;
			$this->msg[]=$this->uin.' 年费会员抽奖失败！SKEY已失效';
		}elseif($arr['TASK']['RET']==-10001){
			$this->msg[]=$this->uin.' 你不是钻皇，无法抽奖！';
		}else{
			$this->msg[]=$this->uin.' 任意星钻专属礼包抽奖失败！'.$arr['msg'];
		}
	}
	public function qqmgr(){
		$url='http://c.pc.qq.com/fcgi-bin/signin?format=json&mood_id=129&checkin_date='.date("Y-m-d").'&remark=%E6%88%91%E5%B0%B1%E6%98%AF%E6%9D%A5%E7%AD%BE%E5%88%B0%E7%9A%84';
		$data = $this->get_curl($url,0,$url,$this->cookie);
		$data = mb_convert_encoding($data, "UTF-8", "GB2312");
		$arr = json_decode($data, true);
		if(array_key_exists('ret',$arr) && $arr['ret']=='suc'){
			if($arr['result']==2)
				$this->msg[]='QQ管家今天已签到！';
			else
				$this->msg[]='QQ管家签到成功！';
		}elseif(strpos($arr['ret'],'登录失败')!==false){
			$this->skeyzt=1;
			$this->msg[]='QQ管家签到失败！SKEY已失效';
		}elseif(array_key_exists('ret',$arr)){
			$this->msg[]='QQ管家签到失败！'.$arr['ret'];
		}else{
			$this->msg[]='QQ管家签到失败！'.$data;
		}
	}
	public function qd3366(){
		$url = 'http://fcg.3366.com/fcg-bin/growinfo/mgp_growinfo_signin?&_r='.time().'7197&sCSRFToken='.$this->gtk;
		$data = $this->get_curl($url,0,$url,$this->cookie);
		$data = mb_convert_encoding($data, "UTF-8", "GB2312");
		preg_match('/gGrowInfoSignInResult = (.*?);/is',$data,$json);
		$arr = json_decode($json[1], true);
		if(array_key_exists('result',$arr) && $arr['result']==0){
			$this->msg[]='3366签到成功！';
		}elseif($arr['result']==16001){
			$this->msg[]='3366今天已签到！';
		}elseif($arr['result']==10002){
			$this->skeyzt=1;
			$this->msg[]='3366签到失败！SKEY已失效';
		}elseif(array_key_exists('result',$arr)){
			$this->msg[]='3366签到失败！'.$arr['resultstr'];
		}else{
			$this->msg[]='3366签到失败！'.$data;
		}
	}
	public function liuliang(){
		$url = 'http://iyouxi.vip.qq.com/ams3.0.php?g_tk='.$this->gtk2.'&pvsrc=101&ozid=511022&vipid=&actid=68391&format=json&cache=3654';
		$data = $this->get_curl($url,0,'http://youxi.vip.qq.com/m/wallet/activeday/index.html?_wv=3&pvsrc=101',$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('ret',$arr) && $arr['ret']==0){
			$this->msg[]='领取成功！流量豆 +1';
		}elseif($arr['ret']==10601){
			$this->msg[]='今天已经领取过流量豆了！';
		}elseif($arr['ret']==10002){
			$this->skeyzt=1;
			$this->msg[]='领取流量豆失败！SKEY已失效';
		}else{
			$this->msg[]='领取流量豆失败！'.$arr['msg'];
		}

		$url = 'http://proxy.vac.qq.com/cgi-bin/srfentry.fcgi?ts='.time().'7087&g_tk='.$this->gtk.'&data={%2210140%22:{%22req%22:{%22platId%22:1,%22taskId%22:10,%22taskStatus%22:10}}}';
		$data = $this->get_curl($url,0,'http://vac.qq.com/wifi/v2/integral.html?_wv=1',$this->cookie);
		$arr = json_decode($data, true);
		$arr = $arr['10140'];
		if(array_key_exists('ret',$arr) && $arr['ret']==0){
			$this->msg[]='完成签到送积分！流量豆 +5';
		}elseif($arr['ret']==10001){
			$this->msg[]='今天已经领取过积分了！';
		}elseif($arr['ret']==-500000){
			$this->skeyzt=1;
			$this->msg[]='领取积分失败！SKEY已失效';
		}else{
			$this->msg[]='领取积分失败！'.$arr['msg'];
		}
	}
	public function qqpet(){
		$url = 'http://x.pet.qq.com/petgrow?cmd=Random&format=json&_='.time().'6346';
		$data = $this->get_curl($url,0,$url,$this->cookie);
		$arr = json_decode($data, true);
		$this->msg[]=$arr['msg'];

		$url = 'http://x.pet.qq.com/toolbarsign?cmd=Sign&format=json&_='.time().'9718';
		$data = $this->get_curl($url,0,$url,$this->cookie);
		$arr = json_decode($data, true);
		$this->msg[]=$arr['msg'];

		$url = 'http://x.pet.qq.com/toolbarsign?cmd=Gift&format=json&_='.time().'9718';
		$data = $this->get_curl($url,0,$url,$this->cookie);
		$arr = json_decode($data, true);
		$this->msg[]=$arr['msg'];

	}

	public function sweet_send($id=1){
		$luin = $this->sweet_sign();
		if(!$luin)return false;

		$url = 'http://sweet.snsapp.qq.com/v2/cgi-bin/sweet_chat_sendmsg?g_tk='.$this->gtk;
		$post = 'luin='.$luin.'&opuin='.$this->uin.'&type=8&rid=&content=&richval=%5B%7B%22id%22%3A'.$id.'%2C%22subid%22%3A1%2C%22type%22%3A%22interect%22%7D%5D&src=1&uin='.$this->uin.'&plat=0&outputformat=4';
		$json=$this->get_curl($url,$post,$url,$this->cookie);
		$arr=json_decode($json,true);
		if(@array_key_exists('code',$arr) && $arr['code']==0){
			$this->msg[]='发送密语成功！今日已获得积分:'.$arr['expDetail']['totalExp'].'，总共积分:'.($arr['exp']/10);
		}elseif($arr['code']==-3000){
			$this->skeyzt=1;
			$this->msg[]='发送密语失败！原因:SKEY已过期！';
		}else{
			$this->msg[]='发送密语失败！'.$arr['message'];
		}
	}
	public function sweet_tree(){
		$luin = $this->sweet_sign();
		if(!$luin)return false;

		$url = 'http://sweet.snsapp.qq.com/v2/cgi-bin/sweet_tree_index?g_tk='.$this->gtk.'&luin='.$luin.'&outputformat=4&opuin='.$this->uin.'&src=1&uin='.$this->uin;
		$json=$this->get_curl($url,0,'http://sweet.snsapp.qq.com/',$this->cookie);
		$arr=json_decode($json,true);
		if(@array_key_exists('code',$arr) && $arr['code']==0){
			$this->msg[]='登录情侣树成功！当前经验值:'.$arr['exp'];

		$url = 'http://sweet.snsapp.qq.com/v2/cgi-bin/sweet_tree_operate?g_tk='.$this->gtk;
		$post = 'opuin='.$this->uin.'&luin='.$luin.'&outputformat=4&uin='.$this->uin.'&src=1&cmd=1';
		$json=$this->get_curl($url,$post,$url,$this->cookie);
		$arr=json_decode($json,true);
		if(@array_key_exists('code',$arr) && $arr['code']==0){
			$this->msg[]='情侣树浇水成功！获得经验值:'.$arr['exp'].'，总经验值:'.$arr['exp_total'];
		}elseif($arr['code']==-3000){
			$this->skeyzt=1;
			$this->msg[]='情侣树浇水失败！原因:SKEY已过期！';
		}else{
			$this->msg[]='情侣树浇水失败！'.$arr['message'];
		}
		$post = 'opuin='.$this->uin.'&luin='.$luin.'&outputformat=4&uin='.$this->uin.'&src=1&cmd=2';
		$json=$this->get_curl($url,$post,$url,$this->cookie);
		$arr=json_decode($json,true);
		if(@array_key_exists('code',$arr) && $arr['code']==0){
			$this->msg[]='情侣树施肥成功！获得经验值:'.$arr['exp'].'，总经验值:'.$arr['exp_total'];
		}elseif($arr['code']==-3000){
			$this->skeyzt=1;
			$this->msg[]='情侣树施肥失败！原因:SKEY已过期！';
		}else{
			$this->msg[]='情侣树施肥失败！'.$arr['message'];
		}
		$post = 'opuin='.$this->uin.'&luin='.$luin.'&outputformat=4&uin='.$this->uin.'&src=1&cmd=3';
		$json=$this->get_curl($url,$post,$url,$this->cookie);
		$arr=json_decode($json,true);
		if(@array_key_exists('code',$arr) && $arr['code']==0){
			$this->msg[]='情侣树阳光成功！获得经验值:'.$arr['exp'].'，总经验值:'.$arr['exp_total'];
		}elseif($arr['code']==-3000){
			$this->skeyzt=1;
			$this->msg[]='情侣树阳光失败！原因:SKEY已过期！';
		}else{
			$this->msg[]='情侣树阳光失败！'.$arr['message'];
		}

		$url = 'http://sweet.snsapp.qq.com/v2/cgi-bin/sweet_tree_gain?g_tk='.$this->gtk;
		$post = 'opuin='.$this->uin.'&luin='.$luin.'&trunk_id=1&outputformat=4&uin='.$this->uin.'&src=1';
		$json=$this->get_curl($url,$post,$url,$this->cookie);
		$arr=json_decode($json,true);
		if(@array_key_exists('code',$arr) && $arr['code']==0){
			$this->msg[]='情侣树收获果实成功！获得经验值:'.$arr['exp'].'，总经验值:'.$arr['exp_total'];
		}elseif($arr['code']==-3000){
			$this->skeyzt=1;
			$this->msg[]='情侣树收获果实失败！原因:SKEY已过期！';
		}else{
			$this->msg[]='情侣树收获果实失败！'.$arr['message'];
		}

		}elseif($arr['code']==-3000){
			$this->skeyzt=1;
			$this->msg[]='登录情侣树失败！原因:SKEY已过期！';
		}else{
			$this->msg[]='登录情侣树失败！'.$arr['message'];
		}
		
	}
	public function sweet_sign(){
		$url = 'http://sweet.snsapp.qq.com/v2/cgi-bin/sweet_signlove_get?cmd=0&startts=1453564800&endts=1457280000&opuin='.$this->uin.'&uin='.$this->uin.'&plat=0&outputformat=4&g_tk='.$this->gtk;
		$data = $this->get_curl($url,0,'http://sweet.snsapp.qq.com/',$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('code',$arr) && $arr['code']==0){
			$this->msg[]='情侣空间签到成功！';
			return $arr['data']['lover']['uin'];
		}elseif($arr['code']==-3000){
			$this->skeyzt=1;
			$this->msg[]='情侣空间签到失败！原因:SKEY已过期！';
			return false;
		}else{
			$this->msg[]='情侣空间签到失败！'.$arr['message'];
			return false;
		}
	}
	public function bookqd(){
		$url = "http://novelsns.html5.qq.com/ajax?m=task&type=sign&t=".time()."586";
		$data = $this->get_curl($url,0,$url,$this->cookie.'Q-H5-ACCOUNT='.$this->uin.'; Q-H5-SKEY='.$this->skey.'; luin='.$this->uin.'; Q-H5-USERTYPE=1');
		$arr = json_decode($data, true);
		if(array_key_exists('ret',$arr) && $arr['ret']==0){
			$this->msg[]='小说书架签到成功！已连续签到'.$arr['continuousDays'].'天,总共签到'.$arr['totalDays'].'天';
		}elseif($arr['ret']==-2){
			$this->msg[]='您今天已经签到过了！已连续签到'.$arr['continuousDays'].'天,总共签到'.$arr['totalDays'].'天';
		}else{
			$this->msg[]='小说书架签到失败！'.$arr['msg'];
		}
	}
	public function daoju(){
		$url = "http://apps.game.qq.com/ams/ame/ame.php?ameVersion=0.3&sServiceType=dj&iActivityId=11117&sServiceDepartment=djc&set_info=djc";
		$post = "iActivityId=11117&iFlowId=96939&g_tk=".$this->gtk."&e_code=0&g_code=0&sServiceDepartment=djc&sServiceType=dj";
		$data = $this->get_curl($url,$post,$url,$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('ret',$arr['modRet']) && $arr['modRet']['ret']==0){
			$this->msg[]='道聚城签到成功！';
		}elseif($arr['modRet']['ret']==600){
			$this->msg[]='道聚城今天已签到！';
		}else{
			$this->msg[]='道聚城签到失败！'.$arr['modRet']['msg'];
		}

		$post = "gameId=&sArea=&iSex=&sRoleId=&iGender=&sServiceType=dj&objCustomMsg=&areaname=&roleid=&rolelevel=&rolename=&areaid=&iActivityId=11117&iFlowId=96910&g_tk=".$this->gtk."&e_code=0&g_code=0&sServiceDepartment=djc";
		$data = $this->get_curl($url,$post,$url,$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('iRet',$arr['modRet']) && $arr['modRet']['iRet']==0){
			$this->msg[]=$arr['modRet']['sMsg'];
		}elseif($arr['ret']==600){
			$this->msg[]=$arr['msg'];
		}else{
			$this->msg[]=$arr['msg'];
		}
	}
	public function xinyue(){
		$url = "http://apps.game.qq.com/ams/ame/ame.php?ameVersion=0.3&sServiceType=tgclub&iActivityId=21547&sServiceDepartment=xinyue&set_info=xinyue";
		$post = "iActivityId=21547&iFlowId=149694&g_tk=".$this->gtk."&e_code=0&g_code=0&sServiceDepartment=xinyue&sServiceType=tgclub";
		$data = $this->get_curl($url,$post,0,$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('ret',$arr) && $arr['ret']==0){
			$this->msg[]='心锐VIP签到成功！';
		}elseif($arr['ret']==600){
			$this->msg[]='心锐VIP今天已签到！';
		}else{
			$this->msg[]='心锐VIP签到失败！'.$arr['msg'];
		}
	}
	public function jpgame(){
		$url = "http://1.game.qq.com/app/sign?start=".date("Y-m")."&g_tk=".$this->gtk."&_t=0.6780016267291531";
		$data = $this->get_curl($url,0,$url,$this->cookie);
		preg_match('/var sign_index = (.*?);/is', $data, $json);
		$arr = json_decode($json[1], true);
		$arr = $arr['jData']['signInfo'];
		if(array_key_exists('ret',$arr) && $arr['ret']==0){
			$this->msg[]='精品页游签到成功！';
		}elseif($arr['ret']==1){
			$this->msg[]='您今天已经签到过了！';
		}else{
			$this->msg[]='精品页游签到失败！'.$arr['msg'];
		}
	}
	public function addbuluo($superkey,$bid){
		$supertoken=(string)$this->getToken($superkey);
		$url = "http://ptlogin2.qq.com/pt4_auth?daid=371&appid=715030901&auth_token=".$this->getToken($supertoken);
		$data = $this->get_curl($url,0,'http://ui.ptlogin2.qq.com/cgi-bin/login','superuin=o0'.$this->uin.'; superkey='.$superkey.'; supertoken='.$supertoken.';');
		if(preg_match('/ptsigx=(.*?)&/',$data,$match)){
			$url='http://ptlogin4.buluo.qq.com/check_sig?uin='.$this->uin.'&ptsigx='.$match[1].'&daid=371&pt_login_type=4&service=pt4_auth&pttype=2&regmaster=&aid=715030901&s_url=http%3A%2F%2Fbuluo.qq.com%2Fp%2Fbarindex.html';
			$data = $this->get_curl($url,0,'http://ui.ptlogin2.qq.com/cgi-bin/login',0,1);
			preg_match_all('/Set-Cookie: (.*);/iU',$data,$matchs);
			$cookie='';
			foreach ($matchs[1] as $val) {
				if(substr($val,-1)=='=')continue;
				$cookie.=$val.'; ';
			}
			$url = 'http://buluo.qq.com/cgi-bin/bar/user/fbar';
			$post = 'bid='.$bid.'&op=1&bkn='.$this->gtk.'&r=0.395212'.time();
			$data = $this->get_curl($url,$post,'http://buluo.qq.com/mobile/index.html?_lv='.$bid.'&_wv=257289&_bid=128',$cookie);
			$arr = json_decode($data, true);
			if(array_key_exists('retcode',$arr) && $arr['retcode']==0){
				$this->msg[]='部落关注成功！';
			}elseif($arr['result']==100006){
				$this->msg[]='部落关注失败！p_skey已失效';
			}else{
				$this->msg[]='部落关注失败！'.$data;
			}
		}else{
			$this->msg[]='部落关注失败！superkey已失效';
		}
	}
	public function gamevip($superkey){
		$supertoken=(string)$this->getToken($superkey);
		$url = "http://ptlogin2.qq.com/pt4_auth?daid=176&appid=21000110&auth_token=".$this->getToken($supertoken);
		$data = $this->get_curl($url,0,'http://ui.ptlogin2.qq.com/cgi-bin/login','superuin=o0'.$this->uin.'; superkey='.$superkey.'; supertoken='.$supertoken.';');
		if(preg_match('/ptsigx=(.*?)&/',$data,$match)){
			$url='http://ptlogin4.gamevip.qq.com/check_sig?uin='.$this->uin.'&ptsigx='.$match[1].'&daid=176&pt_login_type=4&service=pt4_auth&pttype=2&regmaster=&aid=21000110&s_url=http%3A%2F%2Fgamevip.qq.com%2F';
			$data = $this->get_curl($url,0,'http://ui.ptlogin2.qq.com/cgi-bin/login',0,1);
			preg_match("/skey=(.*?);/", $data, $match);
			$skey=$match[1];
			preg_match("/p_skey=(.*?);/", $data, $match);
			$pskey=$match[1];
			$cookie='pt2gguin=o0'.$this->uin.'; uin=o0'.$this->uin.'; skey='.$skey.'; p_uin=o0'.$this->uin.'; p_skey='.$pskey.'; DomainID=176;';

			$url='http://app.gamevip.qq.com/cgi-bin/gamevip_sign/GameVip_SignIn?format=json&g_tk='.$this->gtk.'&_='.time().'0334';
			$data = $this->get_curl($url,0,'http://gamevip.qq.com/sign_pop/sign_pop_v2.html',$cookie);
			$arr = json_decode($data, true);
			if(array_key_exists('result',$arr) && $arr['result']==0){
				$this->msg[]='蓝钻签到成功！当前签到积分'.$arr['SignScore'].'点';
			}elseif($arr['result']==1000005){
				$this->msg[]='蓝钻签到失败！P_skey已失效';
			}else{
				$this->msg[]='蓝钻签到失败！'.$arr['resultstr'];
			}

			$url='http://app.gamevip.qq.com/cgi-bin/gamevip_sign/GameVip_Lottery?format=json&g_tk='.$this->gtk.'&_='.time().'0334';
			$data = $this->get_curl($url,0,$url,$cookie);
			$data = mb_convert_encoding($data, "UTF-8", "GB2312");
			$arr = json_decode($data, true);
			if(array_key_exists('result',$arr) && $arr['result']==0){
				$this->msg[]='蓝钻抽奖成功！';
			}elseif($arr['result']==1000005){
				$this->msg[]='蓝钻抽奖失败！P_skey已失效';
			}elseif($arr['result']==102){
				$this->msg[]='蓝钻抽奖次数已用完';
			}else{
				$this->msg[]='蓝钻抽奖失败！'.$arr['resultstr'];
			}

			$url='http://app.gamevip.qq.com/cgi-bin/gamevip_m_sign/GameVip_m_SignIn';
			$data = $this->get_curl($url,0,$url,$cookie);
			$data = mb_convert_encoding($data, "UTF-8", "GB2312");
			$arr = json_decode($data, true);
			if(array_key_exists('result',$arr) && $arr['result']==0){
				$this->msg[]='蓝钻手机签到成功！奖励魔法卡片'.$arr['MagicCard'].'张，星星'.$arr['McStar'].'颗';
			}elseif($arr['result']==1000005){
				$this->msg[]='蓝钻手机签到失败！P_skey已失效';
			}else{
				$this->msg[]='蓝钻手机签到失败！'.$arr['resultstr'];
			}
		}else{
			$this->msg[]='蓝钻签到失败！superkey已失效';
		}
	}
	public function zhongzhuan($superkey){
		$supertoken=(string)$this->getToken($superkey);
		$url = "https://ssl.ptlogin2.qq.com/pt4_auth?daid=4&appid=522005705&pt4_shttps=1&auth_token=".$this->getToken($supertoken);
		$data = $this->get_curl($url,0,'https://xui.ptlogin2.qq.com/cgi-bin/xlogin','superuin=o0'.$this->uin.'; superkey='.$superkey.'; supertoken='.$supertoken.';');
		if(preg_match('/ptsigx=(.*?)&/',$data,$match)){
			$url='https://ssl.ptlogin2.mail.qq.com/check_sig?uin='.$this->uin.'&ptsigx='.$match[1].'&daid=4&pt_login_type=4&service=pt4_auth&pttype=2&regmaster=&aid=522005705&s_url=https%3A%2F%2Fmail.qq.com%2Fcgi-bin%2Flogin%3Fvt%3Dpassport%26vm%3Dwpt%26ft%3Dloginpage%26target%3D';
			$data = $this->get_curl($url,0,'https://xui.ptlogin2.qq.com/cgi-bin/xlogin',0,1);
			preg_match_all('/Set-Cookie: (.*);/iU',$data,$matchs);
			$cookie='';
			foreach ($matchs[1] as $val) {
				if(substr($val,-1)=='=')continue;
				$cookie.=$val.'; ';
			}
			preg_match("/Location: (.*?)\r\n/", $data, $match);
			$data = $this->get_curl($match[1],0,'https://xui.ptlogin2.qq.com/cgi-bin/xlogin',$cookie,1);
			preg_match_all('/Set-Cookie: (.*);/iU',$data,$matchs);
			$cookie='';
			foreach ($matchs[1] as $val) {
				if(substr($val,-1)=='=')continue;
				$cookie.=$val.'; ';
			}
			preg_match("/frame_html\?sid=(.*?)&/", $data, $match);
			$sid=$match[1];

			$url = 'https://set2.mail.qq.com/cgi-bin/ftnExs_files?sid='.$sid.'&t=ftn.json&s=list&ef=js&listtype=self&up=down&sorttype=createtime&page=0&pagesize=50&pagemode=more&pagecount=2&ftnpreload=true&sid='.$sid;
			$data = $this->get_curl($url,0,'https://set2.mail.qq.com/',$cookie);
			$data = mb_convert_encoding($data, "UTF-8", "GB2312");
			preg_match_all('/{sFileId : \"(.*)\"/iU',$data,$matchs);
			$post='';$i=0;
			foreach ($matchs[1] as $val) {
				$post.='&fid='.$val;$i++;
			}
			$post;
			$url = 'https://set2.mail.qq.com/cgi-bin/ftnExtendfile?sid='.$sid.'&t=ftn.json&s=oper&ef=js&keytext=';
			$data = $this->get_curl($url,$post,'https://set2.mail.qq.com/',$cookie);
			if(strpos($data,'errcode : "0"')){
				$this->msg[]='QQ邮箱中转站一键续期成功！共续期了'.$i.'个文件';
			}else{
				$this->msg[]='QQ邮箱中转站一键续期失败！'.$data;
			}
		}else{
			$this->msg[]='QQ邮箱中转站一键续期失败！superkey已失效';
		}
	}
	public function mqq(){
		$url = 'http://cgi.vip.qq.com/online/set?p_tk=&g_tk_type=1&g_tk='.$this->gtk.'&sid=&beg=0&end=24&type=Y&format=json';
		$data = $this->get_curl($url,0,$url,$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('ret',$arr) && $arr['ret']==0){
			$this->msg[]=$this->uin.' 手机QQ在线6小时一键加速成功！';
		}elseif($arr['ret']==-7){
			$this->skeyzt=1;
			$this->msg[]='手机QQ等级加速失败！原因：SKEY已失效';
		}else{
			$this->msg[]='手机QQ等级加速失败！原因：'.$arr['msg'];
			$this->msg[]='----------<br/>提示：必须是QQ会员，且<a href="http://bd.qq.com/" target="_blank">绑定手机</a>才能使用此功能。';
		}
	}
	public function qqllq(){
		$url = 'http://i.browser.qq.com/all_data_query?guid=6F9994A1FEB1E4BFC613806C0BCE93B5&g_tk='.$this->gtk2;
		$data = $this->get_curl($url,0,$url,$this->cookie);
		$arr = json_decode($data, true);
		if($task_list=$arr['static_data']['task_list']){
			foreach($task_list as $row){
				if($row['interface']=='50619'||$row['interface']=='54000'||$row['interface']=='53998')continue;
				$this->qqllq_task($row['interface'],$row['title'],$row['score']);
			}
		}elseif($arr['ret']==-2){
			$this->skeyzt=1;
			$this->msg[]='获取活动列表失败！原因:SKEY已过期！';
		}else{
			$this->msg[]='获取活动列表失败！'.$arr['msg'];
		}
	}
	private function qqllq_task($actid,$title,$score){
		$url = 'http://iyouxi.vip.qq.com/ams3.0.php?g_tk='.$this->gtk2.'&actid='.$actid.'&guid=6F9994A1FEB1E4BFC613806C0BCE93B5&fromat=json&_='.time().'7071';
		$data = $this->get_curl($url,0,'http://i.browser.qq.com/',$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('ret',$arr) && $arr['ret']==0){
			$this->msg[]='QQ浏览器 '.$title.' 成功！积分+'.$score;
		}elseif($arr['ret']==10601){
			$this->msg[]='QQ浏览器 '.$title.' 今天已完成！';
		}elseif($arr['ret']==10002){
			$this->skeyzt=1;
			$this->msg[]='QQ浏览器 '.$title.' 失败！SKEY过期';
		}else{
			$this->msg[]='QQ浏览器 '.$title.' 失败！'.$arr['msg'];
		}
	}
	public function xing(){
		$url = 'http://starvip.qq.com/fcg-bin/v2/fcg_mobile_starvip_site_checkin?g_tk='.$this->gtk.'&r=0.06027948'.time();
		$post='format=json&uin='.$this->uin;
		$data = $this->get_curl($url,$post,'http://xing.qq.com/',$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('code',$arr) && $arr['code']==0){
			$this->msg[]='星钻签到成功！成长值+'.$arr['data']['add'];
		}elseif($arr['code']==-10000){
			$this->msg[]='每天只需要签到一次哦！';
		}elseif($arr['code']==-3000){
			$this->skeyzt=1;
			$this->msg[]='星钻签到失败！SKEY过期';
		}else{
			$this->msg[]='星钻签到失败！'.$arr['message'];
		}

		$url = 'http://starvip.qq.com/fcg-bin/v2/fcg_qzact_lottery?g_tk='.$this->gtk.'&r=0.00463036'.time();
		$post='actid=369&ruleid=2048&format=json&uin='.$this->uin;
		$data = $this->get_curl($url,$post,'http://xing.qq.com/',$this->cookie);
		$arr = json_decode($data, true);
		if(array_key_exists('code',$arr) && $arr['code']==0){
			$this->msg[]='星钻抽奖成功！抽奖结果：'.$arr['data'][0]['name'].$arr['data'][0]['cdkey'];
		}elseif($arr['code']==-10000){
			$this->msg[]='您已经用完了所有的抽奖机会！';
		}elseif($arr['code']==-3000){
			$this->skeyzt=1;
			$this->msg[]='星钻抽奖失败！SKEY过期';
		}else{
			$this->msg[]='星钻抽奖失败！'.$arr['message'];
		}
	}
}