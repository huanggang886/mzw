<?php
/*
*柯林挂积时
*By 消失的彩虹海
*/
error_reporting(0);
set_time_limit(0);
ignore_user_abort(true);
header("content-Type: text/html; charset=utf-8"); 

$user=isset($_POST['user']) ? $_POST['user'] : $_GET['user'];
$pwd=isset($_POST['pwd']) ? $_POST['pwd'] : $_GET['pwd'];
$sid=isset($_POST['sid']) ? $_POST['sid'] : $_GET['sid'];
$siteid=isset($_POST['siteid']) ? $_POST['siteid'] : $_GET['siteid'];
$ym=isset($_POST['ym']) ? $_POST['ym'] : $_GET['ym'];

if($sid && $siteid && $ym){}else{echo"<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}

$log_url="http://{$ym}/waplogin.aspx";//登陆url
$log_post="logname=$user&logpass=$pwd&saveid=0&action=login&classid=0&siteid={$siteid}&sid=-2-0-0-0-320&backurl=myfile.aspx?siteid={$siteid}";//登陆post

$myfile_url="http://{$ym}/myfile.aspx?siteid={$siteid}&sid={$sid}";//用户中心url
$msglist_url="http://{$ym}/bbs/messagelist.aspx?siteid={$siteid}&sid={$sid}";//消息列表url

//访问用户中心
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$myfile_url);
curl_setopt($ch,CURLOPT_REFERER,$myfile_url);
curl_setopt($ch,CURLOPT_TIMEOUT,30);//超时
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
$html=curl_exec($ch);
$httpcode = curl_getinfo($ch,CURLINFO_HTTP_CODE);
curl_close($ch);

if($httpcode<200 || $httpcode>=300){exit('对方网站无法访问！（HTTP错误码：'.$httpcode.'）<br/>1.请检查域名是否输入正确。<br/>2.对方网站正在维护。<br/>3.与对方网站连接受阻。<br/>4.对方网站可能开启了安全狗。');}

if(strpos($html, '我的地盘'))
{
	//访问消息列表
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_URL,$msglist_url);
	curl_setopt($ch,CURLOPT_REFERER,$myfile_url);
	curl_setopt($ch,CURLOPT_TIMEOUT,30);//超时
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_NOBODY,1);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
	curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
	$html=curl_exec($ch);
	curl_close($ch);

	$resultStr = $user.' 挂积时成功！';
}elseif(strpos($html, '身份实效了') && $user && $pwd){
	//访问登录页面
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_URL,$log_url);
	curl_setopt($ch,CURLOPT_REFERER,$log_url);
	curl_setopt($ch,CURLOPT_POST,1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$log_post);
	curl_setopt($ch,CURLOPT_TIMEOUT,30);//超时
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
	curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
	$html=curl_exec($ch);
	curl_close($ch);

	if(strpos($html, '登录成功'))
	{
		$resultStr = $user.' 挂积时成功！';
	}
	else
	{
		$resultStr = '登录失败！请检查账号密码是否输入正确。';
	}
}elseif(strpos($html, '身份实效了')){
	$resultStr = $user.' 身份实效了,请更新SID！';
}else{
	$resultStr = $user.' 挂积时失败！';
}

echo $resultStr;

?>