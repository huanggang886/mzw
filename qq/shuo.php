<?php
//自动发表图片说说API
require 'qq.inc.php';
require 'shuo.func.php';

$qq=isset($_POST['qq']) ? $_POST['qq'] : $_GET['qq'];
$sid=isset($_POST['sid']) ? $_POST['sid'] : $_GET['sid'];
$skey=isset($_POST['skey']) ? $_POST['skey'] : $_GET['skey'];
$pskey=isset($_POST['pskey']) ? $_POST['pskey'] : $_GET['pskey'];
$ua=isset($_POST['ua']) ? $_POST['ua'] : $_GET['ua'];
$nr=isset($_POST['content']) ? $_POST['content'] : $_GET['content'];
$img=isset($_POST['img']) ? $_POST['img'] : $_GET['img'];
$method=isset($_POST['method']) ? $_POST['method'] : $_GET['method'];
$delete=isset($_POST['delete']) ? $_POST['delete'] : $_GET['delete'];
if(empty($method))$method=2;
if($qq && $skey){}else{echo"<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}


if($nr=='语录' || $nr=='随机' || empty($nr))
$content=randstr();
elseif($nr=='笑话')
$content=jokei_txt();
elseif($nr=='时间')
$content=date("Y-m-d H:i:s");
elseif($nr=='表情')
$content="[em]e".rand(100, 204)."[/em]";
else $content=$nr;

if(strpos($content,'[随机]')!==false)
	$content=str_replace('[随机]',randstr(),$content);
if(strpos($content,'[笑话]')!==false)
	$content=str_replace('[笑话]',jokei_txt(),$content);
if(strpos($content,'[时间]')!==false)
	$content=str_replace('[时间]',date("Y-m-d H:i:s"),$content);
if(strpos($content,'[表情]')!==false)
	$content=str_replace('[表情]',"[em]e".rand(100, 204)."[/em]",$content);

if($img=='随机')
$imgurl = randimg();
elseif($img=='搞笑')
$imgurl = jokei_img();
else $imgurl=$img;


include_once "qzone.class.php";
	$qzone=new qzone($qq,$sid,$skey,$pskey);
	if($method==3){
		$qzone->shuo(1,$content,$imgurl,$ua,$delete);
	}else{
		$qzone->shuo(0,$content,$imgurl,$ua,$delete);
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