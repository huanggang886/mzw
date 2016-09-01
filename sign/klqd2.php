<?php
error_reporting(0);
set_time_limit(0);
ignore_user_abort(true);
header("Content-type:text/html;charset=utf-8"); 
$content=isset($_POST['content']) ? $_POST['content'] : $_GET['content'];
$domain=isset($_POST['u']) ? $_POST['u'] : $_GET['u'];
$siteid=isset($_POST['siteid']) ? $_POST['siteid'] : $_GET['siteid'];
$sid=isset($_POST['sid']) ? $_POST['sid'] : $_GET['sid'];
if($domain && $sid && $siteid){}else{echo"<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}

$url="http://{$domain}/Signin/Signin.aspx?Action=index&Mod=Signin&siteid={$siteid}&sid={$sid}";
$post="content={$content}";
$ch=curl_init();
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POSTFIELDS,$post);
curl_setopt($ch,CURLOPT_TIMEOUT,30);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$str=curl_exec($ch);
curl_close($ch);

preg_match('@</div><div class="tip">(.+)</div><div class="content">您的签到次数@i' , $str , $matches);
$resultStr = $matches[1];

echo $resultStr;

?>
