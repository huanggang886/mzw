<?php
//随机昵称

require 'qq.inc.php';


$qq=isset($_POST['qq']) ? $_POST['qq'] : $_GET['qq'];
$skey=isset($_POST['skey']) ? $_POST['skey'] : $_GET['skey'];
$pskey=isset($_POST['pskey']) ? $_POST['pskey'] : $_GET['pskey'];
$content=isset($_POST['content']) ? $_POST['content'] : $_GET['content'];


if($qq && $skey){}else{echo"<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}


require_once 'qzone.class.php';
$qzone=new qzone($qq,$sid,$skey,$pskey);
$array=explode('|',$content);
$nick=$array[array_rand($array,1)];
$qzone->setnick($nick);

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