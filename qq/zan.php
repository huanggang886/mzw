<?php
/*
 *QQ空间说说云点赞API
*/
require 'qq.inc.php';

$qq=isset($_POST['qq']) ? $_POST['qq'] : $_GET['qq'];
$sid=isset($_POST['sid']) ? $_POST['sid'] : $_GET['sid'];
$skey=isset($_POST['skey']) ? $_POST['skey'] : $_GET['skey'];
$pskey=isset($_POST['pskey']) ? $_POST['pskey'] : $_GET['pskey'];
$method=isset($_POST['method']) ? $_POST['method'] : $_GET['method'];
$getss=isset($_GET['getss']) ? $_GET['getss'] : null;
$newpc=isset($_GET['newpc']) ? $_GET['newpc'] : 0;
$sleep=isset($_GET['sleep']) ? $_GET['sleep'] : 0;
if(empty($method))$method=2;
$forbid=isset($_POST['forbid']) ? $_POST['forbid'] : $_GET['forbid'];
if($qq && $skey){}else{echo"<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}


//执行刷赞
$forbid=explode('|',$forbid);
require_once 'qzone.class.php';
$qzone=new qzone($qq,$sid,$skey,$pskey);
if($method==2)
$qzone->like(0,$forbid,$sleep);
elseif($method==3)
$qzone->like(1,$forbid,$sleep);
elseif($method==4)
$qzone->like(2,$forbid,$sleep);

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