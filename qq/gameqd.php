<?php
/*
 *游戏大厅签到
*/
require 'qq.inc.php';

$qq=isset($_POST['qq']) ? $_POST['qq'] : $_GET['qq'];
$sid=isset($_POST['sid']) ? $_POST['sid'] : $_GET['sid'];
$skey=isset($_POST['skey']) ? $_POST['skey'] : $_GET['skey'];
$m=isset($_POST['m']) ? $_POST['m'] : $_GET['m'];
if($qq && $skey){}else{echo"<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}

require_once 'qqsign.class.php';
$qzone=new qqsign($qq,$sid,$skey);
if($m=='daoju')
	$qzone->daoju();
elseif($m=='xinyue')
	$qzone->xinyue();
elseif($m=='jpgame')
	$qzone->jpgame();
else
	$qzone->gameqd();

//结果输出
foreach($qzone->msg as $result){
	echo $result.'<br/>';
}

//SID失效通知
if($qzone->sidzt){
	sendsiderr($qq,$skey,'sid');
}elseif($qzone->skeyzt){
	sendsiderr($qq,$skey,'skey');
}
?>