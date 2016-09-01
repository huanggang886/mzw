<?php
/*
 *群签到
*/

require 'qq.inc.php';

$qq=isset($_POST['qq']) ? $_POST['qq'] : $_GET['qq'];
$sid=isset($_POST['sid']) ? $_POST['sid'] : $_GET['sid'];
$skey=isset($_POST['skey']) ? $_POST['skey'] : $_GET['skey'];
$forbid=isset($_POST['forbid']) ? $_POST['forbid'] : $_GET['forbid'];
$lat=isset($_GET['lat']) ? $_GET['lat'] : 0;
$lgt=isset($_GET['lgt']) ? $_GET['lgt'] : 0;

if($qq && $skey){}else{echo"<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}

$forbid=explode("|",$forbid);
require_once 'qqsign.class.php';
$qzone=new qqsign($qq,$sid,$skey);
$qzone->qunqd($forbid,$lat,$lgt);

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