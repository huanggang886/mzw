<?php
if(!defined('IN_CRONLITE'))exit();
$title="首页";
include_once(TEMPLATE_ROOT."head.php");

echo '
<div class="col-md-12" style="margin: 0 auto;max-width:580px;">
<div class="panel panel-primary">
	<div class="panel-body" style="text-align: center;">
		<img src="images/logo.png">
	</div>
</div>';

$gg=$conf['gg'];
if(!empty($gg))
echo '<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title" align="center">公告栏</h3></div><div class="panel-body"><!--ggS-->'.$gg.'<!--ggE--></font></div>
</div>';

if($islogin==1)
{
echo '<div class="panel panel-primary"><div class="panel-heading"><h3 class="panel-title" align="center">用户中心</h3></div>
<table class="table table-bordered">
<tbody>';
echo '<tr height=50>
<td><b>用户名/UID</b></td>
	<td align="center">'.$row['user'].'/['.$row['userid'].']<br/>('.usergroup().')</td>
	<td align="center"><a href="index.php?mod=userinfo"class="btn btn-block btn-info">用户资料</a></td>
</tr>';
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
echo '<tr height=50>
<td><b>'.$conf['coin_name'].'</b></td>
	<td align="center"><font color="green">'.$row['coin'].'</font></td>
	<td align="center"><a href="index.php?mod=shop&kind=1" class="btn btn-block btn-warning">在线充值</a></td>
</tr>';
if($conf['peie_open'])echo '<tr height=50>
	<td><b>ＱＱ配额</b></td>
	<td align="center">'.$row['peie'].'个</td>
	<td align="center"><a href="index.php?mod=shop&kind=1" class="btn btn-block btn-info">购买配额</a></td>
</tr>';
echo '<tr height=50>
	<td><b>网站活动</b></td>
	<td align="center"><a href="index.php?mod=qd" class="btn btn-block btn-danger">签到领VIP</a></td>
	<td align="center"><a href="index.php?mod=invite"class="btn btn-block btn-warning">邀请好友</a></td>
</tr>';
echo '<tr height=50>
	<td><b>用户操作</b></td>
	<td align="center"><a href="index.php?mod=shop&kind=2" class="btn btn-block btn-success">开通/续费VIP</a></td>
	<td align="center"><a href="./?my=loginout" class="btn btn-block btn-danger">安全退出</a></td>
</tr>';
echo '</tbody>
</table>
</div>';
}
else
{
?>
<div class="panel panel-primary"><div class="panel-heading"><h3 class="panel-title">登录你的账号:</h3></div>
<div class="panel-body">
<form action="?" method="get">
<input type="hidden" name="my" value="login">
<div class="input-group">
<span class="input-group-addon">账号</span>
<input type="text" class="form-control" name="user" value="">
</div><br/>
<div class="input-group">
<span class="input-group-addon">密码</span>
<input type="password" class="form-control" name="pass" value="">
</div><br/>
<div class="login-button">
<input type="checkbox" name="ctime" id="ctime" checked="checked" value="2592000" >&nbsp;<label for="ctime">下次自动登录</label><br/><br/>
<button type="submit" class="btn btn-primary btn-block">马上登录</button><br/></form>
<a href="index.php?mod=zhuce2" class="btn btn-success btn-block">注册用户</a><br/>
<a href="index.php?mod=findpwd" class="btn btn-warning btn-block">找回密码</a>
</div>
</div>
</div>
<?php
}
if(OPEN_QQOL==1 && OPEN_WALL==1){
echo '<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title" align="center"><a href="index.php?mod=wall">ＱＱ展示</a></h3></div>
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
if(OPEN_CHAT==1){
##交流社区start
$row12=$DB->get_row("select * from ".DBQZ."_chat order by id desc limit 1");
echo '<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title" align="center"><a href="index.php?mod=chat">交流社区</a></h3></div>';
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
<div class="panel-heading"><h3 class="panel-title">运行日志:&nbsp&nbsp<a href="index.php?mod=all">详细>></a></h3></div><div class="panel-body">系统共有<font color="#ff0000">'.$zongs.'</font>条任务<br>共有<font color="#ff0000">'.$qqs.'</font>个QQ正在挂机<br>系统累计运行了<font color="#ff0000">'.$info['times'].'</font>次<br>上次运行:<font color="#ff0000">'.$info['last'].'</font><br>当前时间:<font color="#ff0000">'.$date.'</font></div></div>';

echo '<div class="panel panel-primary"><div class="panel-body" style="text-align: center;">';
echo '<!--bottomS-->';
echo $conf['bottom'];
echo '<!--bottomE--><br>';
$week=array("天","一","二","三","四","五","六");
echo date("Y年m月d日 H:i:s").' 星期'.$week[date("w")];
echo '</div></div></div>';
include TEMPLATE_ROOT."foot.php";

?>