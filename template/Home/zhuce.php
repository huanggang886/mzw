<?php
if(!defined('IN_CRONLITE'))exit();
$no_nav=true;
$title="用户注册";
$conf['ui_style']=1;
$conf['ui_style2']=0;
include TEMPLATE_ROOT."head.php";

if($conf['oauth_open']==2 && $isadmin!=1)exit("<script language='javascript'>alert('请返回登录页面使用社会化账号登录到本站！');window.location.href='./index.php?mod=login';</script>");

if($verifyswich==1)
$displyver='<div class="form-group"><input type="text" name="verify" class="form-control" style="max-width: 55%;display:inline-block;vertical-align:middle;" placeholder="输入验证码" required>&nbsp;<img title="点击刷新" src="verifycode.php" onclick="this.src=\'verifycode.php?\'+Math.random();" style="max-height:42px;vertical-align:middle;" class="img-rounded"></div>';
else $displyver='';
?>
<div class="container-fluid content pjaxmain">
	<div class="row">
		<!-- Main Page -->
		<div class="body-register">
			<div class="center-register">
				<div class="panel panel-register">
				<?php if($is_fenzhan==1) $logoname = DBQZ;else $logoname = ''; 
					if(!file_exists(ROOT.'images/'.$logoname.'logo.png')) $logoname='';
				?>
					<a href="./" class="logo pull-left">
						<img src="images/<?php echo $logoname?>logo.png" height="45" alt="<?php echo $conf['sitetitle']?>" />
					</a>
					<div class="panel-title-register text-right">
						<h2 class="title text-uppercase"><i class="fa fa-user"></i> 用户注册</h2>
					</div>
					<div class="panel-body">
						<form action="index.php?mod=reg" method="POST">
						<input name="my" type="hidden" value="reg"/>
							<div class="form-group">
								<label>用户名：</label>
								<input name="user" type="text" class="form-control" placeholder="中文、英文或数字" required/>
							</div>

							<div class="form-group">
								<label>邮箱：</label>
								<input name="email" type="email" class="form-control" placeholder="用于找回密码及SID失效提醒" required/>
							</div>

							<div class="form-group">
								<label>ＱＱ：</label>
								<input name="qq" type="text" class="form-control" placeholder="用于显示头像及方便联系" required/>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-6">
										<label>密码：</label>
										<input name="pass" type="password" class="form-control" required/>
									</div>
									<div class="col-sm-6">
										<label>重复密码：</label>
										<input name="pass2" type="password" class="form-control" required/>
									</div>
								</div>
							</div>
							<?php echo $displyver?>
							<button href="index.html" type="submit" class="btn btn-primary btn-block bk-margin-top-10">确认注册</button>
							<div class="text-with-hr">
								<span>or</span>
							</div>
							<p class="text-center">已有账号？<a href="index.php?mod=login"><small>点此登录</small></a></p>
						</form>
					</div>
<?php
$conf['marquee']=false;$conf['limhplayer']=false;
include TEMPLATE_ROOT."foot.php";
?>