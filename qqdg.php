<?php
  $pid = '';//APIPID标识
  $url = '';//代挂平台地址

  $mod='blank';
  include "./includes/common.php";
  header("Content-Type: text/html; charset=UTF-8");
  $error = '<script language="javascript">alert("非法访问！");top.location=\'index.php?mod=qqlist\';</script>';
  isset($_GET['qq'])?(preg_match('/^[0-9]*$/',$_GET['qq'])?$qq=$_GET['qq']:exit($error)):exit($error);
  if($_GET['md5'] == md5(SYS_KEY.$_GET['qq'].$_GET['s'])){
  $info = '<script language="javascript" type="text/javascript">window.location.href="http://'.$url.'/ch.php?qq='.$qq.'&md5='.md5($qq.$pid).'";</script>';
  }else{
  $info = '<script language="javascript">alert("非法访问！");top.location=\'index.php?mod=qqlist\';</script>';
  }
  exit($info);
?>