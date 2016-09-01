<?php
//空间自动签到API

require 'qq.inc.php';


require 'shuo.func.php';
$qq=isset($_POST['qq']) ? $_POST['qq'] : $_GET['qq'];
$sid=isset($_POST['sid']) ? $_POST['sid'] : $_GET['sid'];
$skey=isset($_POST['skey']) ? $_POST['skey'] : $_GET['skey'];
$pskey=isset($_POST['pskey']) ? $_POST['pskey'] : $_GET['pskey'];
$method=isset($_POST['method']) ? $_POST['method'] : $_GET['method'];
$content=isset($_POST['content']) ? $_POST['content'] : $_GET['content'];
if(empty($method))$method=2;

if($qq && $skey){}else{echo"<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}


if(strpos($content,'[随机]')!==false)
	$content=str_replace('[随机]',randstr(),$content);
if(strpos($content,'[笑话]')!==false)
	$content=str_replace('[笑话]',jokei_txt(),$content);
if(strpos($content,'[时间]')!==false)
	$content=str_replace('[时间]',date("Y-m-d H:i:s"),$content);
if(strpos($content,'[表情]')!==false)
	$content=str_replace('[表情]',"[em]e".rand(100, 204)."[/em]",$content);

require_once 'qzone.class.php';
$qzone=new qzone($qq,$sid,$skey,$pskey);
	if($method==3){
		$qzone->qiandao(1,$content);
	}else{
		$qzone->qiandao(0,$content);
	}

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