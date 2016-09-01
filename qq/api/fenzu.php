<?php
error_reporting(0);
header('Content-Type: text/html; charset=UTF-8');
@ignore_user_abort(true);
@set_time_limit(0);
$uin=$_POST['uin']?$_POST['uin']:exit('{"code":-10,"msg":"No Uin！"}');
$skey=$_POST['skey']?$_POST['skey']:exit('{"code":-1,"msg":"No Skey！"}');
$pskey=$_POST['pskey']?$_POST['pskey']:exit('{"code":-1,"msg":"No P_skey！"}');
$gpid=$_POST['gpid']?$_POST['gpid']:0;
$touin=$_POST['touin']?$_POST['touin']:exit('{"code":-1,"msg":"No touin！"}');

function get_curl($url, $post=0, $referer=0, $cookie=0, $header=0, $ua=0, $nobaody=0)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$httpheader[] = "Accept:application/json";
	$httpheader[] = "Accept-Encoding:gzip,deflate,sdch";
	$httpheader[] = "Accept-Language:zh-CN,zh;q=0.8";
	$httpheader[] = "Connection:close";
	curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
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
	if($referer){
		if($referer==1){
			curl_setopt($ch, CURLOPT_REFERER, 'http://m.qzone.com/infocenter?g_f=');
		}else{
			curl_setopt($ch, CURLOPT_REFERER, $referer);
		}
	}
	if ($ua) {
		curl_setopt($ch, CURLOPT_USERAGENT, $ua);
	}
	else {
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; U; Android 4.0.4; es-mx; HTC_One_X Build/IMM76D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0");
	}
	if ($nobaody) {
		curl_setopt($ch, CURLOPT_NOBODY, 1);
	}
	curl_setopt($ch, CURLOPT_ENCODING, "gzip");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$ret = curl_exec($ch);
	curl_close($ch);
	return $ret;
}
function getGTK($skey){
	$len = strlen($skey);
	$hash = 5381;
	for($i = 0; $i < $len; $i++){
		$hash += (($hash << 5) & 0xffffffff) + ord($skey[$i]);
	}
	return $hash & 0x7fffffff;//计算g_tk
}

$gtk=getGTK($pskey);
$cookie='pt2gguin=o0'.$uin.'; uin=o0'.$uin.'; skey='.$skey.'; p_skey='.$pskey.'; p_uin=o0'.$uin.';';
$url = "http://w.qzone.qq.com/cgi-bin/tfriend/friend_chggroupid.cgi?g_tk=".$gtk."&plg_auth=1";

$post = 'qzreferrer=http%3A%2F%2Fcn.qzs.qq.com%2Fqzone%2Fv8%2Fpages%2Ffriends%2Ffriend_msg_setting.html%3Fmode%3Dpass1%26ouin%3D'.$touin.'%26id%3D2%26flag%3D100%26key%3D1549099873%26time%3D&gpid='.$gpid.'&ifuin='.$touin.'&uin='.$uin.'&flag=100&key='.$touin.'&rd=0.109091'.time().'&remark=&fupdate=1';
do{
$data = get_curl($url,$post,'http://user.qzone.qq.com/'.$uin.'/myhome/friends/center',$cookie);
preg_match('/callback\((.*?)\)\;/is',$data,$json);
$arr=json_decode($json[1],true);
if(array_key_exists('code',$arr) && $arr['code']==0) {
	echo('{"code":0,"msg":"修改成功"}');
} elseif($arr['code']==-3000) {
	echo('{"code":-1,"msg":"SKEY已失效！"}');
} elseif(array_key_exists('code',$arr)) {
	echo('{"code":-2,"msg":"'.$arr['message'].'"}');
}
}while(!array_key_exists('code',$arr));

?>