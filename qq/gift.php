<?php
//送礼物

header("content-Type: text/html; charset=utf-8");

require_once 'cron.inc.php';
require_once 'shuo.func.php';
require_once "qzone.class.php";

$qq=isset($_POST['qq']) ? $_POST['qq'] : $_GET['qq'];

if($qq){}else{echo "<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}

if($_GET['runkey']!=md5(RUN_KEY)) {
	if($islogin!=1)exit('未登录！');
	if(in_array('gift',$vip_func) && $isvip==0 && $isadmin==0)exit('您不是VIP，无法使用！');
}
if(OPEN_OTHE==0)exit('当前站点未开启此功能。');
/*每次运行QQ数量配置*/
$size=3;

$result=$DB->query("select * from `".DBQZ."_qq` where status2='1' order by rand() limit {$size}");

while($row=$DB->fetch($result)){
	$content=randstr();
	$qzone=new qzone($row['qq'],$row['sid'],$row['skey'],$row['pskey']);
	$qzone->gift($qq,$content);
	echo $qzone->msg[0].'<br/>';
	if($qzone->skeyzt){
		$DB->query("UPDATE ".DBQZ."_qq SET status2='0' WHERE qq='".$row['qq']."'");
	}
}

?>