<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['����������Ô�������È��Ë�������']=base64_decode('aGVhZGVy');$zym_decrypt['�ĈÔîÈ������������֔��֥��־�']=base64_decode('ZmlsZV9leGlzdHM='); ?>
<?php
if(!$GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();if($islogin==1){@$GLOBALS['zym_decrypt']['����������Ô�������È��Ë�������']('Content-Type: text/html; charset=UTF-8');exit(base64_decode('PHNjcmlwdCBsYW5ndWFnZT0namF2YXNjcmlwdCc+YWxlcnQoJ+aCqOW3sueZu+W9le+8gScpO3dpbmRvdy5sb2NhdGlvbi5ocmVmPScuL2luZGV4LnBocD9tb2Q9dXNlcic7PC9zY3JpcHQ+'));}if($_SESSION['Oauth_access_token'] && $_SESSION['Oauth_social_uid']){}else{@$GLOBALS['zym_decrypt']['����������Ô�������È��Ë�������']('Content-Type: text/html; charset=UTF-8');exit(base64_decode('PHNjcmlwdCBsYW5ndWFnZT0namF2YXNjcmlwdCc+YWxlcnQoJ+ivt+mHjeaWsOeZu+W9le+8gScpO3dpbmRvdy5sb2NhdGlvbi5ocmVmPScuL2luZGV4LnBocD9tb2Q9bG9naW4nOzwvc2NyaXB0Pg=='));}$verifyswich=1;$no_nav=true;$title="完善账号信息";$conf['ui_style']=1;include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');if($verifyswich==1)$displyver='<div class="form-group"><input type="text" name="verify" class="form-control" style="max-width: 55%;display:inline-block;vertical-align:middle;" placeholder="输入验证码" required>&nbsp;<img title="点击刷新" src="verifycode.php" onclick="this.src=\'verifycode.php?\'+Math.random();" style="max-height:42px;vertical-align:middle;" class="img-rounded"></div>';else $displyver='';?>
<div class="container-fluid content pjaxmain">
	<div class="row">
		<!-- Main Page -->
		<div class="body-register">
			<div class="center-register">
				<div class="panel panel-register">
				<?php if($is_fenzhan==1)$logoname =DBQZ;else $logoname ='';if(!$GLOBALS['zym_decrypt']['�ĈÔîÈ������������֔��֥��־�'](ROOT.base64_decode('aW1hZ2VzLw==').$logoname.'logo.png'))$logoname='';?>
					<a href="./" class="logo pull-left">
						<img src="images/<?php echo $logoname?>logo.png" height="45" alt="<?php echo $conf['sitetitle']?>" />
					</a>
					<?php if($_GET['my']=='bind'){?>
					<div class="panel-title-register text-right">
						<h2 class="title text-uppercase"><i class="fa fa-user"></i> 绑定已有账号</h2>
					</div>
					<div class="panel-body">
						<form action="index.php?my=login" method="GET">
						<input name="my" type="hidden" value="login"/>
						<input name="connect" type="hidden" value="true"/>
						<input type="hidden" name="ctime" value="2592000"/>
							<div class="form-group">
								<label>用户名</label>
								<div class="input-group input-group-icon">
									<input name="user" type="text" class="form-control bk-noradius" />
									<span class="input-group-addon">
										<span class="icon">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group">
								<label>密码</label>&nbsp;(<a href="index.php?mod=findpwd"><small>找回密码</small></a>)
								<div class="input-group input-group-icon">
									<input name="pass" type="password" class="form-control bk-noradius" />
									<span class="input-group-addon">
										<span class="icon">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>
							<button href="index.html" type="submit" class="btn btn-primary btn-block bk-margin-top-10">绑定账号</button>
							<div class="text-with-hr">
								<span>or</span>
							</div>
							<p class="text-center">没有账号？<a href="index.php?mod=connect&my=reg"><small>免费注册</small></a></p>
						</form>
					</div>
					<?php }elseif($_GET['my']=='reg'){?>
					<div class="panel-title-register text-right">
						<h2 class="title text-uppercase"><i class="fa fa-user"></i> 注册一个新账号</h2>
					</div>
					<div class="panel-body">
						<form action="index.php?mod=reg" method="POST">
						<input name="my" type="hidden" value="reg"/>
						<input name="connect" type="hidden" value="true"/>
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
							<p class="text-center">已有账号？<a href="index.php?mod=connect&my=bind"><small>点此绑定已有账号</small></a></p>
						</form>
					</div>
					<?php }?>
<?php
$conf['marquee']=false;$conf['limhplayer']=false;include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>