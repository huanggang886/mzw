<?php
//农场挂机
require 'qq.inc.php';

$qq=isset($_POST['qq']) ? $_POST['qq'] : $_GET['qq'];
$sid=isset($_POST['sid']) ? $_POST['sid'] : $_GET['sid'];

if($qq && $sid){}else{echo"<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}

 	$ncurl = curl_get("http://mcapp.z.qq.com/nc/cgi-bin/wap_farm_index?sid={$sid}&g_ut=1");
 
	curl_get('http://mcapp.z.qq.com/nc/cgi-bin/wap_farm_index?sid='.$sid.'&g_ut=1&signin=1');
	##签到
	curl_get("http://mcapp.z.qq.com/nc/cgi-bin/wap_farm_freegift_recv?sid={$sid}&g_ut=1&fg_recv=1");
	##收礼


$resultStr='执行完毕。';

echo $resultStr;
?>