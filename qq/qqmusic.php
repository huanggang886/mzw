<?php
/*
 *QQ音乐等级加速
*/
require 'qq.inc.php';

$qq=isset($_POST['qq']) ? $_POST['qq'] : $_GET['qq'];
if($qq){}else{echo"<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}
include '../includes/authcode.php';

$data=curl_get('http://cloud.25ak.com/mzapi/qqmusic.php?uin='.$qq.'&url='.$_SERVER['HTTP_HOST'].'&authcode='.$authcode);
echo $data;

?>