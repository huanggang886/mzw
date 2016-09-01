<?php
/*
一键领取图书VIP
*/
error_reporting(0);
function get_curl($url, $post=0, $referer=0, $cookie=0, $header=0, $ua=0, $nobaody=0)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	if ($post) {
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	}
	if ($header) {
		curl_setopt($ch, CURLOPT_HEADER, true);
	}
	if ($cookie) {
		curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	}
	if ($referer) {
		curl_setopt($ch, CURLOPT_REFERER, "http://m.qzone.com/infocenter?g_f=");
	}
	if ($ua) {
		curl_setopt($ch, CURLOPT_USERAGENT, $ua);
	}
	else {
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; U; Android 4.4.1; zh-cn) AppleWebKit/533.1 (KHTML, like Gecko)Version/4.0 MQQBrowser/5.5 Mobile Safari/533.1");
	}
	if ($nobaody) {
		curl_setopt($ch, CURLOPT_NOBODY, 1);
	}
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$ret = curl_exec($ch);
	curl_close($ch);
	return $ret;
}

@header("Content-Type: text/html; charset=UTF-8");
$uin = $_GET["uin"];
$sid = $_GET["sid"];
if(!$uin||!$sid)exit('{"code":0,"msg":"输入不完整，请重新更新QQ！"}');

$url='http://ebook.3g.qq.com/user/v3/normalLevel/recieveMonthGifts?sid='.$sid.'&g_ut=2';
$data = get_curl($url,0,$url);

$url='http://ebook.3g.qq.com/user/usecard?sid='.$sid.'&g_ut=2';
$data2 = get_curl($url,0,$url);

if(strstr($data,"领取成功") || strstr($data,"您本月已经领取过礼包")){
	if (strstr($data2, '使用成功')){
		echo '{"code":0,"msg":"图书VIP领取成功！"}';
	}elseif (strstr($data2, '本月已经领取')) {
		echo '{"code":0,"msg":"图书VIP领取失败，原因：本月您已领取过"}';
	}elseif (strstr($data2, '您已经是包月VIP')) {
		echo '{"code":0,"msg":"您已拥有图书VIP，不能领取"}';
	}else{
		echo '{"code":0,"msg":"图书VIP领取成功。"}';
	}
}elseif(strstr($data,"您本月已经领取过礼包")){
	echo '{"code":0,"msg":"您本月已经领取过礼包！"}';
}else{
	echo '{"code":0,"msg":"图书VIP领取成功"}';
}


?>
