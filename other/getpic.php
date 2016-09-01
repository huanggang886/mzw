<?php
error_reporting(0);
$uin=empty($_GET['uin'])?exit('{"saveOK":-1,"msg":"uin不能为空"}'):$_GET['uin'];
$sig=empty($_GET['sig'])?exit('{"saveOK":-1,"msg":"sig不能为空"}'):$_GET['sig'];
$loginsig=empty($_GET['loginsig'])?exit('{"saveOK":-1,"msg":"loginsig不能为空"}'):$_GET['loginsig'];
header('Content-Type:image/jpeg');
$url='https://ssl.captcha.qq.com/getimgbysig?clientype=2&uin='.$uin.'&aid=546000248&cap_cd='.$sig.'&pt_style=34&0.47683497075922787&rand=0.41839553928002715&sig='.$loginsig;
echo get_curl($url,0,'https://www.tenpay.com/');


function get_curl($url,$post=0,$referer=0,$cookie=0,$header=0,$ua=0,$nobaody=0){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url);
	$httpheader[] = "Accept:application/json";
	$httpheader[] = "Accept-Encoding:gzip,deflate,sdch";
	$httpheader[] = "Accept-Language:zh-CN,zh;q=0.8";
	$httpheader[] = "Connection:close";
	curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
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
		curl_setopt($ch, CURLOPT_REFERER, $referer);
	}
	if($ua){
		curl_setopt($ch, CURLOPT_USERAGENT,$ua);
	}else{
		curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0');
	}
	if($nobaody){
		curl_setopt($ch, CURLOPT_NOBODY,1);//主要头部
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);
	}
	curl_setopt($ch, CURLOPT_ENCODING, "gzip");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	$ret = curl_exec($ch);
	curl_close($ch);
	return $ret;
}