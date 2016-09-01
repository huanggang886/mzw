<?php
session_start();
header("content-Type: text/html; charset=utf-8");

require_once '../cron.inc.php';

if($islogin!=1)exit('{"code":-1,"msg":"未登录"}');
if(in_array('reply',$vip_func) && $isvip==0 && $isadmin==0)exit('{"code":-1,"msg":"您不是VIP，无法使用"}');

if(OPEN_SHUAR==0)exit('{"code":-1,"msg":"当前站点未开启此功能"}');

$cell=$_POST['cell'];
$uin=is_numeric($_POST['uin'])?$_POST['uin']:exit('{"code":-1,"msg":"uin不能为空"}');
$content=$_POST['content'];

$myrow=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$uin}' limit 1");
if($myrow['uid']!=$uid && $isadmin==0)exit('{"code":-1,"msg":"你只能操作自己的QQ哦！"}');

if($rules[7] && $isadmin==0){
if($row['coin']>=$rules[7]){
	$DB->query("update ".DBQZ."_user set coin=coin-{$rules[7]} where userid='".$row['userid']."'");
}else{
	exit('{"code":-1,"msg":"您的币不足，请充值！"}');
}
}

$qid=is_numeric($_POST['qid'])?$_POST['qid']:exit('{"code":-1,"msg":"QID不能为空"}');
$row = $DB->get_row("SELECT * FROM ".DBQZ."_qq where id='{$qid}' limit 1");
if(!$row){
	exit('{"code":-1,"msg":"QID'.$qid.'不存在"}');
}
	include_once "../qzone.class.php";
	$curkey=urlencode('http://user.qzone.qq.com/'.$uin.'/mood/'.$cell);
	$param=urlencode('4=&5='.$curkey.'&6='.$curkey.'&16=0&23=0&30=1&48=0&52=&-100=appid%3A311+typeid%3A0+feedtype%3A0+hostuin%3A'.$row['qq'].'+feedskey%3A'.$cell.'+');

	$qzone=new qzone($row['qq'],$row['sid'],$row['skey'],$row['pskey']);
	$qzone->cpreply($content,$uin,$cell,'311',$param);
	if($qzone->skeyzt){
		$_SESSION['r_'.$cell][$row['qq']]=0;
		$DB->query("UPDATE ".DBQZ."_qq SET status2='0' WHERE qq='".$row['qq']."'");
		exit('{"code":-3,"msg":"'.$row[qq].'的SID已过期！"}');
	}

	$_SESSION['r_'.$cell][$row['qq']]=1;
	++$_SESSION['replycount'];
	exit('{"code":0,"msg":"'.$row[qq].'评论成功！"}');
