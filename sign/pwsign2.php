<?php
/*
*PHPwind9.X系列论坛签到
*/
error_reporting(0);
set_time_limit(0);
ignore_user_abort(true);
header("content-Type: text/html; charset=utf-8");

function curl_get($url, $use = false, $save = false, $referer = null, $post_data = null){
	global $cookie_file;
    $ch=curl_init($url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	$httpheader[] = "Accept:application/json, text/javascript, */*; q=0.01";
	$httpheader[] = "X-Requested-With:XMLHttpRequest";
	$httpheader[] = "Accept-Encoding:gzip,deflate,sdch";
	$httpheader[] = "Accept-Language:zh-CN,zh;q=0.8";
	$httpheader[] = "Connection:close";
	curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	//需要使用cookies
	if($use){
		curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file);
    }
	//需要保存cookies
	if($save){
		curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file);
    }
	//需要referer伪装
	if(isset($referer))
		curl_setopt($ch, CURLOPT_REFERER, $referer);
	//需要post数据
	if(is_array($post_data)) {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
    }
	curl_setopt($ch, CURLOPT_ENCODING, "gzip");
    $content = curl_exec($ch);
    curl_close($ch);
    return $content;
}

function get_csrf_token($res){
	preg_match('/name="csrf_token" value="(.*?)"/i', $res, $matches);
	if(isset($matches))
        return $matches[1];
	else
		exit('未找到csrf_token');
}

$ssid = isset($_POST['id']) ? $_POST['id'] : urlencode($_GET['id']);
if($ssid){}else{echo"<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}
$str=explode("_",$ssid);

//论坛首页地址
$baseUrl = 'http://'.urldecode($str[0]);
//签到页面地址
$signPageUrl = $baseUrl.'/index.php?m=task';
//签到信息提交地址
$signSubmitUrl = $baseUrl.'/index.php?m=space&c=punch&a=punch';

//存放Cookies的文件
$cookie_file = './getcookie/cookie_'.$ssid.'.txt';

//访问签到页面
$res=curl_get($signPageUrl, true, true);

//获取csrf_token
$csrf_token = get_csrf_token($res);

//构造签到信息
$post_data = array('csrf_token' => $csrf_token);
//提交签到信息
$res = curl_get($signSubmitUrl ,true, true, $baseUrl, $post_data);
$arr=json_decode($res,true);
if($arr['state']=='success') {
	$resultStr='签到成功！获得奖励：'.$arr['data']['reward'];
}elseif(strpos($arr['message'][0], '已经打卡')) {
	$resultStr = $arr['message'][0];
}else{
	$resultStr='签到失败！'.$arr['message'][0];
}


echo $resultStr;
?>