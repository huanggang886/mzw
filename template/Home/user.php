<?php
if(!defined('IN_CRONLITE'))exit();
$title="首页";
include_once(TEMPLATE_ROOT."head.php");

echo '<div class="col-md-12" role="main">';
if($conf['ui_style']==1)
echo '<script>
$(document).ready(function(){
	activeselect(null);
});
</script>';

$gg=$conf['gg'];
if(!empty($gg))
echo '<div class="panel panel-primary">
<div class="panel-heading bk-bg-primary">
	<h6><i class="fa fa-list red"></i><span class="break"></span>公告栏</h6>
	<div class="panel-actions">
		<a href="#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
		<a href="#" class="btn-close"><i class="fa fa-times black"></i></a>
	</div>
</div>
<div class="panel-body">
<!--ggS-->'.$gg.'<!--ggE--></font></div>
</div>';

if($islogin==1)
{
echo '</div><div class="col-md-12">';
echo '<div class="panel panel-primary">
<div class="panel-heading bk-bg-primary">
	<h6><i class="fa fa-indent red"></i><span class="break"></span>控制面板</h6>
	<div class="panel-actions">
		<a href="#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
		<a href="#" class="btn-close"><i class="fa fa-times black"></i></a>
	</div>
</div>
<div class="panel-body">
<div class="col-md-4 col-sm-12 text-center">
<img alt="image" class="img-circle" src="'.(($row['qq'])?'//q1.qlogo.cn/g?b=qq&nk='.$row['qq'].'&s=100&t='.date("Ymd"):'assets/img/user.png').'" style="height:120px;"><br/>
<h3><strong>'.$row['user'].'</strong>&nbsp;<small>UID：'.$row['userid'].'&nbsp;'.usergroup().'</small></h3>
<a href="index.php?mod=userinfo" class="btn btn-info btn-xs">修改资料</a>
</div>
<div class="col-md-4 text-center">
<table class="table table-striped table-bordered">
<thead>
<tr height=50>
	<td><b>我的挂机</b></td align="center"><td><b>数量统计</b></td><td align="center"><b>快捷入口</b></td>
</tr>
</thead>
<tbody>';
if(OPEN_QQOL==1)echo '<tr height=50>
	<td><b>ＱＱ数量</b></td>
	<td align="center"><b>'.$row['qqnum'].'</b>个</td>
	<td align="center"><a href="index.php?mod=qqlist" class="btn btn-block btn-success">ＱＱ管理</a></td>
</tr>';
if(OPEN_SIGN==1)echo '<tr height=50>
	<td><b>签到任务</b></td>
	<td align="center"><b>'.$row['signjobnum'].'</b>个</td>
	<td align="center"><a href="index.php?mod=list-sign" class="btn btn-block btn-warning">自动签到</a></td>
</tr>';
if(OPEN_CRON==1)echo '<tr height=50>
	<td><b>监控任务</b></td>
	<td align="center"><b>'.$row['wzjobnum'].'</b>个</td>
	<td align="center"><a href="index.php?mod=syslist" class="btn btn-block btn-primary">网址监控</a></td>
</tr>';
echo '</tbody>
</table>';
echo '</div>';

echo '<div class="col-md-4 col-sm-12 text-center">';
echo '
<table class="table">
<tbody>';
echo '<tr height=50 class="warning">
<td><b>'.$conf['coin_name'].'</b></td>
	<td align="center"><span class="glyphicon glyphicon-usd"></span>&nbsp;<b>'.$row['coin'].'</b></td>
	<td align="center"><a href="index.php?mod=shop&kind=1" class="btn btn-block btn-warning">在线充值</a></td>
</tr>';
if($isvip==1)$vipstatus='<span class="glyphicon glyphicon-time"></span>&nbsp;<font color="green">'.$row['vipdate'].'</font>';
elseif($isvip==2)$vipstatus='<font color="green">永久 VIP</font>';
else $vipstatus='<font color="red">非 VIP</font>';
echo '<tr height=50 class="success">
	<td><b>网站会员</b></td>
	<td align="center">'.$vipstatus.'</td>
	<td align="center"><a href="index.php?mod=shop" class="btn btn-block btn-success">购买VIP</a></td>
</tr>';
if($conf['peie_open'])echo '<tr height=50 class="info">
	<td><b>ＱＱ配额</b></td>
	<td align="center"><b><span class="glyphicon glyphicon-tint"></span>&nbsp;'.$row['peie'].'</b>个</td>
	<td align="center"><a href="index.php?mod=shop" class="btn btn-block btn-info">购买配额</a></td>
</tr>';
echo '<tr height=50 class="danger">
	<td><b>网站活动</b></td>
	<td align="center"><a href="index.php?mod=qd" class="btn btn-block btn-danger">签到领VIP</a></td>
	<td align="center"><a href="index.php?mod=invite" class="btn btn-block btn-warning">邀请好友</a></td>
</tr>';
echo '</tbody>
</table>
</div>';
echo '</div></div>';
}
else
{
if(OPEN_QQOL==1 && OPEN_WALL==1){
echo '<div class="panel panel-primary">
<div class="panel-heading bk-bg-primary">
	<h6><i class="fa fa-globe red"></i><span class="break"></span>ＱＱ墙:&nbsp&nbsp<a href="index.php?mod=wall" style="color:white">更多>></a></h6>
	<div class="panel-actions">
		<a href="#" class="btn-close"><i class="fa fa-times black"></i></a>
	</div>
</div>
<ul align="center" class="list-group" style="list-style:none;">
	<li class="list-group-item"><div class="wrapper2">
		<div id="menubar" class="fix-menu">
			<div class="menu-list">
';
$rs=$DB->query("SELECT * FROM ".DBQZ."_qq WHERE 1 order by id desc limit 15");
while($row = $DB->fetch($rs))
{
	$qq=$row['qq'];
	echo '<a href="index.php?mod=search&q='.$qq.'" target="_blank"><img class="qqlogo" src="//q2.qlogo.cn/headimg_dl?bs=qq&dst_uin='.$qq.'&src_uin='.$qq.'&fid='.$qq.'&spec=100&url_enc=0&referer=bu_interface&term_type=PC" width="80px" height="80px" alt="'.$qq.'" title="'.$qq.'|添加时间:'.$row['time'].' ★点击查看详情★"></a>';
}
echo '</div></div>
			</div></li></ul>
</div>';
}
}

echo '</div><div class="col-md-6 col-sm-12">';
if(OPEN_CHAT==1){
##交流社区start
$row12=$DB->get_row("select * from ".DBQZ."_chat order by id desc limit 1");
echo '<div class="panel panel-primary">
<div class="panel-heading bk-bg-primary">
	<h6><i class="fa fa-comments red"></i><span class="break"></span>聊天社区</h6>
	<div class="panel-actions">
		<a href="#" class="btn-close"><i class="fa fa-times black"></i></a>
	</div>
</div>';
echo '<div class="panel-body">';
if($row12['nr']==''){
echo '还没有友友说话哦 <a href="index.php?mod=chat">聊天</a>';
}else{
if($row12['user']==$gl){ 
echo '<a href="index.php?mod=chat&to='.$row12['user'].'">我</a>';
}else{
echo '<a href="index.php?mod=chat&to='.$row12['user'].'">'.$row12['user'].'</a>';
}
$n=$row12['nr'];
$n = htmlspecialchars($n, ENT_QUOTES);
echo ' 说:'.$n.'('.$row12['sj'].') <a href="index.php?mod=chat">聊天</a>';
}
echo '</div></div>';
##交流社区end
}
$qqs=$DB->count("SELECT count(*) from ".DBQZ."_qq WHERE 1");
$qqjobs=$DB->count("SELECT count(*) from ".DBQZ."_qqjob WHERE 1");
$signjobs=$DB->count("SELECT count(*) from ".DBQZ."_signjob WHERE 1");
$wzjobs=$DB->count("SELECT count(*) from ".DBQZ."_wzjob WHERE 1");
$zongs=$qqjobs+$signjobs+$wzjobs;
$users=$DB->count("SELECT count(*) from ".DBQZ."_user WHERE 1");
echo '<div class="panel panel-primary">
<div class="panel-heading bk-bg-primary">
	<h6><i class="fa fa-exclamation-circle red"></i><span class="break"></span>运行日志:&nbsp&nbsp<a href="index.php?mod=all" style="color:white">详细>></a></h6>
	<div class="panel-actions">
		<a href="#" class="btn-close"><i class="fa fa-times black"></i></a>
	</div>
</div>
<div class="panel-body">
<p class="bg-info" style="padding: 10px; font-size: 90%;" align="center">系统累计运行了<font color="#ff0000">'.$info['times'].'</font>次</p>
<p class="bg-danger" style="padding: 10px; font-size: 90%;" align="center">上次运行:<font color="#ff0000">'.$info['last'].'</font></p>
<p class="bg-success" style="padding: 10px; font-size: 90%;" align="center">当前时间:<font color="#ff0000">'.$date.'</font></p>
<div class="row text-center">
	<a class="col-lg-4 col-md-4 col-sm-4 col-xs-4 bk-bg-success bk-bg-lighten bk-padding-top-10 bk-padding-bottom-10">
		<span class="icon fa fa-user"></span>&nbsp;用户数
		<h4 class="bk-margin-off-bottom ">'.$users.'</h4>
	</a>
	<a class="col-lg-4 col-md-4 col-sm-4 col-xs-4 bk-bg-warning bk-bg-lighten bk-padding-top-10 bk-padding-bottom-10">
		<span class="icon fa fa-qq"></span>&nbsp;ＱＱ数
		<h4 class="bk-margin-off-bottom">'.$qqs.'</h4>
	</a>
	<a class="col-lg-4 col-md-4 col-sm-4 col-xs-4 bk-bg-info bk-bg-lighten bk-padding-top-10 bk-padding-bottom-10">
		<span class="icon fa fa-list-alt"></span>&nbsp;任务数
		<h4 class="bk-margin-off-bottom">'.$zongs.'</h4>
	</a>
</div></div></div>';
/*echo '<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title">数据统计:</h3></div>';
echo '<div class="panel-body">';
include(ROOT.'includes/content/tongji.php');
echo '</div></div>';*/
echo '</div><div class="col-md-6 col-sm-12">';

/*$guang=$conf['guang'];
if(!empty($guang))
echo '<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title">强力推荐</h3></div><div class="panel-body"><!--guangS-->'.$guang.'<!--guangE--></div></div>';*/
echo '<div class="panel panel-primary"><div class="panel-body" style="text-align: center;">';
echo '<!--bottomS-->';
echo $conf['bottom'];
echo '<!--bottomE-->';
echo '</div></div>';
include TEMPLATE_ROOT."foot.php";
?>