<?php
/*
 *QQ空间说说秒评API
*/
require 'qq.inc.php';

$qq=isset($_POST['qq']) ? $_POST['qq'] : $_GET['qq'];
$sid=isset($_POST['sid']) ? $_POST['sid'] : $_GET['sid'];
$skey=isset($_POST['skey']) ? $_POST['skey'] : $_GET['skey'];
$pskey=isset($_POST['pskey']) ? $_POST['pskey'] : $_GET['pskey'];
$method=isset($_POST['method']) ? $_POST['method'] : $_GET['method'];
if(empty($method))$method=2;
$content=isset($_POST['content']) ? $_POST['content'] : $_GET['content'];
$forbid=isset($_POST['forbid']) ? $_POST['forbid'] : $_GET['forbid'];
$only=isset($_POST['only']) ? $_POST['only'] : $_GET['only'];
$getss=isset($_GET['getss']) ? $_GET['getss'] : null;
$sleep=isset($_GET['sleep']) ? $_GET['sleep'] : 0;
if($qq && $skey){}else{echo"<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}


//执行秒评
if(preg_match("/\[随机\]/",$content) || $content==''){
	$str = @file_get_contents('sji.db');
	$content = explode('|',$str);
}else{
	$content=explode('|',$content);
}
$forbid=explode('|',$forbid);
$only=explode('|',$only);
require_once 'qzone.class.php';
$qzone=new qzone($qq,$sid,$skey,$pskey);
if($method==2)
$qzone->reply(0,$content,$forbid,$only,$sleep);
elseif($method==3)
$qzone->reply(1,$content,$forbid,$only,$sleep);

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
