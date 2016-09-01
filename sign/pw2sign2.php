<?php
/*
*PHPwind8.X系列论坛签到
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

function get_msg($res){
	if(preg_match('!<span class=\"f14\">(.*?)</span>!i', $res, $match)){
        return $match[1];
	}elseif(preg_match('!<p class=\"f14 mb10\">(.*?)</p>!i', $res, $match)){
		return $match[1];
	}else{
		return null;
	}
}

$ssid = isset($_POST['id']) ? $_POST['id'] : urlencode($_GET['id']);
$method = isset($_POST['method']) ? $_POST['method'] : $_GET['method'];//签到插件类型
if($ssid){}else{echo"<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}
$str=explode("_",$ssid);

//论坛首页地址
$baseUrl = 'http://'.urldecode($str[0]).'/';

//存放Cookies的文件
$cookie_file = '../getcookie/cookie_'.$ssid.'.txt';

if($method==1){
	//签到信息提交地址
	$signSubmitUrl = $baseUrl.'hack.php?H_name=qiandao';
	//构造签到信息
	$post_data = array('action' => 'qiandao', 'qdxq' => 'kx');
	//提交签到信息
	$res = curl_get($signSubmitUrl ,true, true, $baseUrl, $post_data);
	if(preg_match('!charset=gbk\"!i', $res) || preg_match('!charset=\"gbk\"!i', $res))$gbk=1;else $gbk=0;
	if($gbk){$res=iconv('gbk', 'UTF-8//IGNORE', $res);}
	if(preg_match('/签到成功/', $res)){
		$resultStr='签到成功！'.get_msg($res);
		$resultcode=1;
	}elseif(preg_match('/今日已签到/', $res)){
		$resultStr = '您今日已签到，本小时内已签到！';
		$resultcode=1;
	}else{
		$resultStr='签到失败！'.get_msg($res);
		$resultcode=0;
	}
}elseif($method==2){
	//签到信息提交地址
	$signSubmitUrl = $baseUrl.'hack.php?H_name=xqqiandao';
	//构造签到信息
	$post_data = array('action' => 'qiandao', 'qdxq' => '1', 'setqdbkid' => '', 'qdmessage' => '');
	//提交签到信息
	$res = curl_get($signSubmitUrl ,true, true, $baseUrl, $post_data);
	if(preg_match('!charset=gbk\"!i', $res) || preg_match('!charset=\"gbk\"!i', $res))$gbk=1;else $gbk=0;
	if($gbk){$res=iconv('gbk', 'UTF-8//IGNORE', $res);}
	if(preg_match('/签到成功/', $res)){
		$resultStr='签到成功！'.get_msg($res);
		$resultcode=1;
	}elseif(preg_match('/今日已签到/', $res)||preg_match('/每次签到间隔时间/', $res)){
		$resultStr = '您今日已签到，本小时内已签到！';
		$resultcode=1;
	}else{
		$resultStr='签到失败！'.get_msg($res);
		$resultcode=0;
	}
}elseif($method==3){
	//访问用户中心
	$res = curl_get($baseUrl.'u.php' ,true, true);
	preg_match("!var verifyhash = \'(.*?)\';!i", $res, $match);
	//签到信息提交地址
	$signSubmitUrl = $baseUrl.'jobcenter.php?action=punch&verify='.$match[1].'&nowtime='.time().'6290';
	//构造签到信息
	$post_data = array('step' => '2');
	//提交签到信息
	$res = curl_get($signSubmitUrl ,true, true, $baseUrl.'u.php', $post_data);
	if(preg_match('!charset=gbk\"!i', $res) || preg_match('!charset=\"gbk\"!i', $res))$gbk=1;else $gbk=0;
	if($gbk){$res=iconv('gbk', 'UTF-8//IGNORE', $res);}
	if(preg_match('!"message":\'(.*?)\',!i', $res, $match)){
		$resultStr='签到结果：'.$match[1];
		$resultcode=1;
	}else{
		$resultStr='签到失败！';
		$resultcode=0;
	}
}

echo $resultStr;
?>