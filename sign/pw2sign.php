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


//签到代码
$url = isset($_POST['u']) ? $_POST['u'] : $_GET['u'];
$user = isset($_POST['user']) ? $_POST['user'] : $_GET['user'];//用户名
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : $_GET['pwd'];//密码
$method = isset($_POST['method']) ? $_POST['method'] : $_GET['method'];//签到插件类型
if($url && $user && $pwd){}else{echo"<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}

//论坛首页地址
$baseUrl = preg_match("/^http:\/\//",$url)?$url:"http://".$url."/";
//账号登录地址
$loginPageUrl = $baseUrl.'login.php';

//存放Cookies的文件
$cookie_file = tempnam('./','cookie');

//构建登录信息
$login_array=array(
					'pwuser'=>$user,
                    'pwpwd'=>$pwd,
                    'cktime'=>'31536000',
                    'jumpurl'=>'',
					'step'=>'2',
                    'hideid'=>'0',
					'forward'=>'',
					'submit'=>'',
					);

//携带cookie提交登录信息
$res=curl_get($loginPageUrl ,false, true, $loginPageUrl, $login_array);
if(preg_match('!charset=gbk\"!i', $res) || preg_match('!charset=\"gbk\"!i', $res))$gbk=1;else $gbk=0;
if($gbk){$res=iconv('gbk', 'UTF-8//IGNORE', $res);}
if(preg_match('/您已经顺利登录/', $res)){
	if($method==1){
		//签到信息提交地址
		$signSubmitUrl = $baseUrl.'hack.php?H_name=qiandao';
		//构造签到信息
		$post_data = array('action' => 'qiandao', 'qdxq' => 'kx');
		//提交签到信息
		$res = curl_get($signSubmitUrl ,true, true, $baseUrl, $post_data);
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
		if($gbk){$res=iconv('gbk', 'UTF-8//IGNORE', $res);}
		if(preg_match('!"message":\'(.*?)\',!i', $res, $match)){
			$resultStr='签到结果：'.$match[1];
			$resultcode=1;
		}else{
			$resultStr='签到失败！';
			$resultcode=0;
		}
	}
} else {
	$resultStr='登录失败！'.get_msg($res);
	$resultcode=0;
}

echo $resultStr;

@unlink($cookie_file);//删除cookie文件
?>