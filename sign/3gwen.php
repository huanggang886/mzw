<?php
//文网签到
error_reporting(0);
@set_time_limit(0);
ignore_user_abort(true);
header("content-Type: text/html; charset=utf-8");

$myid=isset($_POST['myid']) ? $_POST['myid'] : $_GET['myid'];
$txt=isset($_POST['txt']) ? $_POST['txt'] : $_GET['txt'];
if($myid && $txt){}else{echo"<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}

//访问签到页面
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,'http://wap.3gwen.com/hy/in.asp?myid='.$myid);
curl_setopt($ch,CURLOPT_COOKIE,'wenwangvv=1;');
curl_setopt($ch,CURLOPT_TIMEOUT,60);//超时
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$content=curl_exec($ch);
curl_close($ch);

if(preg_match('/你今天已经签到过了/' , $content)) {
	$resultStr = '你今天已经签到过了，请明天再来吧。<br/>';
}else{
	preg_match_all("@<postfield name='(.*?)' value=@i" , $content , $matches);
	$posttxt=$matches[1][0];
	$postbq=$matches[1][1];
	#开始签到
	$s_url="http://wap.3gwen.com/hy/in.asp?cc=2&myid={$myid}";
	$s_post="{$posttxt}={$txt}&{$postbq}=01";
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_URL,$s_url);
	curl_setopt($ch,CURLOPT_POST,1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$s_post);
	curl_setopt($ch,CURLOPT_COOKIE,'wenwangvv=1;');
	curl_setopt($ch,CURLOPT_TIMEOUT,60);//超时
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	$content=curl_exec($ch);
	curl_close($ch);

	preg_match('@－－－－－<br/>(.*?)<br/>－－－－－<br/>@i' , $content , $matches);
	$resultStr = $matches[1].'<br/>';
}

#开始抽奖
$s_url="http://3gwen.com/game/dzprun.asp?myid={$myid}";
$s_post="mobi=+&activity_id=544";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$s_url);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$s_post);
curl_setopt($ch,CURLOPT_COOKIE,'wenwangvv=1;');
curl_setopt($ch,CURLOPT_TIMEOUT,60);//超时
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$content=curl_exec($ch);
curl_close($ch);
$arr=json_decode($content,true);
if(array_key_exists('code',$arr) && $arr['code']==0){
	$resultStr .= '抽奖成功！获得奖励：'.$arr['data']['name'];
}elseif($arr['code']==12){
	$resultStr .= '今天抽奖机会已用完，请明天再来！';
}else{
	$resultStr .= '抽奖失败'.$content;
}

echo $resultStr;
?>