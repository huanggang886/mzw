<?php
/*
*福利吧论坛签到
*/
error_reporting(0);
set_time_limit(0);
ignore_user_abort(true);
header("content-Type: text/html; charset=utf-8");

function curl_get($url, $use = false, $save = false, $referer = null, $post_data = null){
	global $cookie_file;
    $ch=curl_init($url);
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; U; Android 2.3; zh-cn) AppleWebKit/999+ (KHTML, like Gecko) Safari/999.9');
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
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    }
    $content = curl_exec($ch);
    curl_close($ch);
    return $content;
}

function get_formhash($res){
	preg_match('/&formhash=(.*?)&amp;/i', $res, $matches);
	if(isset($matches))
        return $matches[1];
	else
		exit('没有找到formhash');
}
$ssid = isset($_POST['id']) ? $_POST['id'] : $_GET['id'];
if($ssid){}else{echo"<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}
$str=explode("_",$ssid);


//论坛首页地址
$baseUrl = 'http://www.wndflb.com/';
//首页地址
$signPageUrl = $baseUrl.'forum.php?mobile=1';


//存放Cookies的文件
$cookie_file = './getcookie/cookie_'.$ssid.'.txt';


//访问首页
$res=curl_get($signPageUrl, true, true);
//根据签到页面上的文字来判断今天是否已经签到
if(strpos($res, '签到领奖'))
{
	//获取formhash验证串
	$formhash = get_formhash($res);
	//签到地址
	$signSubmitUrl = $baseUrl.'plugin.php?id=fx_checkin:checkin&formhash='.$formhash.'&mobile=1';
	$res = curl_get($signSubmitUrl ,true, true);
	if(strpos($res, '签到成功'))
	{
		$resultStr = '签到成功';
	}
	else
	{
		$resultStr = '签到失败';
	}
}
else
{
	$resultStr = '今天已签过到';
}


echo $resultStr;
?>