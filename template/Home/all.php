<?php
//挂机统计文件
if(!defined('IN_CRONLITE'))exit();
$title="系统数据统计";
$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>首页</a></li>
<li class="active"><a href="#"><i class="icon fa fa-tasks"></i>系统数据统计</a></li>';
include TEMPLATE_ROOT."head.php";

echo '<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 center-block" role="main">';

$users=$DB->count("SELECT count(*) from ".DBQZ."_user WHERE 1");
$qqjobs=$DB->count("SELECT count(*) from ".DBQZ."_qqjob WHERE 1");
$signjobs=$DB->count("SELECT count(*) from ".DBQZ."_signjob WHERE 1");
$wzjobs=$DB->count("SELECT count(*) from ".DBQZ."_wzjob WHERE 1");
$zongs=$qqjobs+$signjobs+$wzjobs;
echo '<div class="panel panel-primary">
<div class="panel-heading w h"><h3 class="panel-title">挂机统计</h3></div>';
echo '<div class="panel-body box">本站共有<font color=red>'.$users.'</font>位用户<br>';
echo '系统共有<font color=red>'.$zongs.'</font>条任务<br>';
if(OPEN_QQOL==1){
	$sysid=301;
	$all_sys=$DB->count("SELECT count(*) from ".DBQZ."_qqjob WHERE sign='0'");
	$info_sys=$DB->get_row("SELECT last from ".DBQZ."_info WHERE sysid='$sysid' limit 1");
	echo '[ＱＱ挂机]共有<font color=red>'.$all_sys.'</font>条任务<br>';
	echo '上次运行:'.$info_sys['last'].'<br>';

	$sysid=401;
	$all_sys=$DB->count("SELECT count(*) from ".DBQZ."_qqjob WHERE sign='1'");
	$info_sys=$DB->get_row("SELECT last from ".DBQZ."_info WHERE sysid='$sysid' limit 1");
	echo '[ＱＱ签到]共有<font color=red>'.$all_sys.'</font>条任务<br>';
	echo '上次运行:'.$info_sys['last'].'<br>';
}
if(OPEN_SIGN==1){
	$sysid=402;
	$all_sys=$DB->count("SELECT count(*) from ".DBQZ."_signjob WHERE 1");
	$info_sys=$DB->get_row("SELECT last from ".DBQZ."_info WHERE sysid='$sysid' limit 1");
	echo '[自动签到]共有<font color=red>'.$all_sys.'</font>条任务<br>';
	echo '上次运行:'.$info_sys['last'].'<br>';
}
if(OPEN_CRON==1)
for($i=1;$i<=$conf['server_wz'];$i++) {
	$sysid=$i+500;
	$all_sys=$DB->count("SELECT count(*) from ".DBQZ."_wzjob WHERE sysid='$i'");
	$info_sys=$DB->get_row("SELECT last from ".DBQZ."_info WHERE sysid='$sysid' limit 1");
	echo '[网址任务-'.$i.'号服务器]有<font color=red>'.$all_sys.'</font>条任务<br>';
	echo '上次运行:'.$info_sys['last'].'<br>';
}
echo '<hr>系统累计运行了<font color=red>'.$info['times'].'</font>次.<br>';
echo '上次运行:'.$info['last'].'<br>';
echo '当前时间:'.$date.'</div></div>';

//注：只有Linux主机才支持显示负载。
if(function_exists("sys_getloadavg")){
$f=sys_getloadavg();
if(!empty($f[0])){
echo '<div class="panel panel-primary">
<div class="panel-heading w h"><h3 class="panel-title">系统负载:</h3></div>';
echo '<div class="panel-body box">';
echo "1min:{$f[0]}";
echo "|5min:{$f[1]}";
echo "|15min:{$f[2]}";
echo '</div></div>';}
}

include TEMPLATE_ROOT."foot.php";
?>