<?php
if(!defined('IN_CRONLITE'))exit();
$title="登录";
include TEMPLATE_ROOT."head.php";
if($islogin==1)exit("<script language='javascript'>window.location.href='./index.php?mod=user';</script>");
?>
<div class="col-md-12" style="margin: 0 auto;max-width:580px;">
<div class="panel panel-primary">
	<div class="panel-body" style="text-align: center;">
		<img src="images/logo.png">
	</div>
</div>
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
include TEMPLATE_ROOT."foot.php";
?>