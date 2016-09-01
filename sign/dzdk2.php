<?php
/*
*DiscuzX系列论坛打卡
*/
error_reporting(0);
set_time_limit(0);
ignore_user_abort(true);
header("content-Type: text/html; charset=utf-8");

function curl_get($url, $use = false, $save = false, $referer = null, $post_data = null){
	global $cookie_file;
    $ch=curl_init($url);
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
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    }
    $content = curl_exec($ch);
    curl_close($ch);
    return $content;
}

function get_formhash($res){
	preg_match('/name="formhash" value="(.*?)"/i', $res, $matches);
	if(isset($matches))
        return $matches[1];
	else
		exit('没有找到formhash');
}

function get_formhash2($res){
	preg_match('/true&formhash=(.*?)\'\)\;/i', $res, $matches);
	if(isset($matches))
        return $matches[1];
	else
		exit('没有找到formhash');
}

function get_formhash3($res){
	preg_match('/action=logout&amp;formhash=(.*?)\">/i', $res, $matches);
	if(isset($matches))
        return $matches[1];
	else
		exit('没有找到formhash');
}


$ssid = isset($_POST['id']) ? $_POST['id'] : urlencode($_GET['id']);
$method = isset($_POST['method']) ? $_POST['method'] : $_GET['method'];
if($ssid){}else{echo"<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}
$str=explode("_",$ssid);


//论坛首页地址
$baseUrl = 'http://'.urldecode($str[0]);


//存放Cookies的文件
$cookie_file = './getcookie/cookie_'.$ssid.'.txt';


if($method=='ljdaka')
{
//访问首页
$res=curl_get($baseUrl, true, true);
if(preg_match('!charset=gbk\"!i', $res) || preg_match('!charset=\"gbk\"!i', $res))$gbk=1;else $gbk=0;
if($gbk){$res=iconv('gbk', 'UTF-8//IGNORE', $res);}

//获取formhash验证串
$formhash = get_formhash3($res);
//签到信息提交地址
$signSubmitUrl = $baseUrl.'/plugin.php?id=ljdaka:daka&action=msg&formhash='.$formhash;
//提交签到信息
$res = curl_get($signSubmitUrl ,true, false, $baseUrl);
if($gbk){$res=iconv('gbk', 'UTF-8//IGNORE', $res);}

if(preg_match('!<div class=\"alert_info\">(.*?)</div>!is', $res, $msg))
	{$resultStr=$msg[1];$resultcode=1;}
else
	{$resultStr='签到失败！';$resultcode=0;}
}
elseif($method=='singcere')
{
//访问签到页面
$signPageUrl = $baseUrl.'/plugin.php?id=singcere_sign';
$res=curl_get($signPageUrl, true, true);
if(preg_match('!charset=gbk\"!i', $res) || preg_match('!charset=\"gbk\"!i', $res))$gbk=1;else $gbk=0;
if($gbk){$res=iconv('gbk', 'UTF-8//IGNORE', $res);}

//获取formhash验证串
$formhash = get_formhash($res);
//签到信息提交地址
$signSubmitUrl = $baseUrl.'/plugin.php?id=singcere_sign&signsubmit=yes&formhash='.$formhash.'&infloat=yes&handlekey=share&inajax=1&ajaxtarget=fwin_content_share';
//提交签到信息
$res = curl_get($signSubmitUrl ,true, false, $baseUrl);
if($gbk){$res=iconv('gbk', 'UTF-8//IGNORE', $res);}

if(preg_match('!singcere_sign\', \'(.*?)\', !i', $res, $msg))
	{$resultStr=$msg[1];$resultcode=1;}
else
	{$resultStr='签到失败！';$resultcode=0;}
}
else
{
$signPageUrl = $baseUrl.'/plugin.php?id=dsu_amupper:ppering';
//访问签到页面
$res=curl_get($signPageUrl, true, true);
if(preg_match('!charset=gbk\"!i', $res) || preg_match('!charset=\"gbk\"!i', $res))$gbk=1;else $gbk=0;
if($gbk){$res=iconv('gbk', 'UTF-8//IGNORE', $res);}

//获取formhash验证串
$formhash = get_formhash2($res);
//签到信息提交地址
$signSubmitUrl = $baseUrl.'/plugin.php?id=dsu_amupper&ppersubmit=true&formhash='.$formhash;
//提交签到信息
$res = curl_get($signSubmitUrl ,true, false, $signPageUrl);
if($gbk){$res=iconv('gbk', 'UTF-8//IGNORE', $res);}

if(preg_match('!<div id=\"messagetext\" class=\"alert_right\">(.*?)<script type=\"text/javascript\"!is', $res, $msg))
	{$resultStr=$msg[1];$resultcode=1;}
elseif(preg_match('!<div id=\"messagetext\" class=\"alert_error\">(.*?)<script type=\"text/javascript\"!is', $res, $msg))
	{$resultStr=$msg[1];$resultcode=0;}
else
	{$resultStr='签到失败！';$resultcode=0;}
}


echo $resultStr;
?>