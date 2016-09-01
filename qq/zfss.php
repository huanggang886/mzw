<?php
//转发好友说说API

require 'qq.inc.php';


$qq=isset($_POST['qq']) ? $_POST['qq'] : $_GET['qq'];
$sid=isset($_POST['sid']) ? $_POST['sid'] : $_GET['sid'];
$skey=isset($_POST['skey']) ? $_POST['skey'] : $_GET['skey'];
$pskey=isset($_POST['pskey']) ? $_POST['pskey'] : $_GET['pskey'];
$uins=isset($_POST['uin']) ? $_POST['uin'] : $_GET['uin'];
$content=isset($_POST['nr']) ? $_POST['nr'] : $_GET['nr'];
$method=isset($_POST['method']) ? $_POST['method'] : $_GET['method'];
if(empty($method))$method=3;


$getss=isset($_POST['getss']) ? $_POST['getss'] : $_GET['getss'];
if($qq && $skey){}else{echo"<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}

$uins=explode('|',$uins);

require_once 'qzone.class.php';
$qzone=new qzone($qq,$sid,$skey,$pskey);
if($method==2)
$qzone->zhuanfa(0,$uins,$content);
elseif($method==3)
$qzone->zhuanfa(1,$uins,$content);


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