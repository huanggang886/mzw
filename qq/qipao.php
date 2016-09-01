<?php
/*
 * QQ聊天气泡百变 Author:消失的彩虹海
 */
require 'qq.inc.php';

$uin=isset($_POST['qq']) ? $_POST['qq'] : $_GET['qq'];
$skey=isset($_POST['skey']) ? $_POST['skey'] : $_GET['skey'];

if($uin && $skey){}else{echo"<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}

$str='87|96|107|110|114|16|21|28|36|40|42|45|47|49|56|72|81|82|85|180|201|209|16|21|28|36|40|42|45|47|49|56|72|81|82|85|180|201|209|0|1|2|3|4|5|6|7|8|9|11|12|14|16|19|21|24|25|26|28|29|35|36|38|39|40|42|43|44|45|48|49|52|55|56|58|59|61|63|67|68|69|71|72|73|74|75|76|78|80|81|82|83|85|86|87|89|90|91|92|94|95|96|98|101|105|106|107|109|110|111|112|113|114|117|118|120|122|124|125|126|127|128|129|132|133|138|142|146|150|151|152|155|159|168|169|178';

$id=array_rand(explode('|',$str),1);
$gtk= getGTK($skey);
$cookie = 'pt2gguin=o0'.$uin.'; uin=o0'.$uin.'; skey='.$skey.'; ';
$url = 'http://logic.content.qq.com/bubble/setup?uin='.$uin.'&id='.$id.'&version=4.6.0.0&platformId=1&format=json&g_tk='.$gtk.'&_='.time().'4000';
$data = get_curl($url,0,$url,$cookie);
$arr = json_decode($data,true);
if(array_key_exists('ret',$arr) && $arr['ret']==0){
	if($arr['data']['ret']==0 && $arr['data']['msg']=="ok"){
		$resultStr='更换气泡成功！';
	}elseif($arr['data']['ret']==5002){
		$resultStr='气泡更换失败！需参与活动';
	}elseif($arr['data']['ret']==2002){
		$resultStr='气泡更换失败！你不是会员';
	}else{
		$resultStr='气泡更换失败！';
	}
}elseif($arr['ret']==-100001){
	$resultStr='更换气泡失败！SKEY过期';
	sendsiderr($qq,$skey,'skey');
}else{
	$resultStr='更换气泡失败！'.$arr['msg'];
}
echo $resultStr;

function get_curl($url,$post=0,$referer=1,$cookie=0,$header=0,$ua=0,$nobaody=0){
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
	return $ret;
}
function getGTK($skey){
	$len = strlen($skey);
	$hash = 5381;
	for($i = 0; $i < $len; $i++){
		$hash += ($hash << 5) + ord($skey[$i]);
	}
	return $hash & 0x7fffffff;//计算g_tk
}
?>