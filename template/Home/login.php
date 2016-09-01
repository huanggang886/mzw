<?php
if(!defined('IN_CRONLITE'))exit();
$no_nav=true;
$title="登录";
$conf['ui_style']=1;
$conf['ui_style2']=0;
include TEMPLATE_ROOT."head.php";
if($islogin==1)exit("<script language='javascript'>window.location.href='./index.php?mod=user';</script>");
?>
<div class="container-fluid content pjaxmain">
	<div class="row">
		<!-- Main Page -->
		<div class="body-login">
			<div class="center-login">
				<div class="panel panel-login">
				<?php if($is_fenzhan==1) $logoname = DBQZ;else $logoname = ''; 
					if(!file_exists(ROOT.'images/'.$logoname.'logo.png')) $logoname='';
				?>
					<a href="./" class="logo pull-left">
						<img src="images/<?php echo $logoname?>logo.png" height="45" alt="<?php echo $conf['sitetitle']?>" />
					</a>
					<div class="panel-title-login text-right">
						<h2 class="title"><i class="fa fa-user"></i> 登录</h2>
					</div>
					<div class="panel-body">
						<form action="?" method="get">
						<input type="hidden" name="my" value="login">
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
							<br />
							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default bk-margin-bottom-10">
										<input type="checkbox" name="ctime" id="ctime" checked="checked" value="2592000" >
										<label for="ctime">下次自动登录</label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button href="index.html" type="submit" class="btn btn-primary hidden-xs">登录</button>
									<button href="index.html" type="submit" class="btn btn-primary btn-block btn-lg visible-xs bk-margin-top-10">登录</button>
								</div>
							</div>
							<br />
							<div class="text-with-hr">
								<span>or</span>
							</div>
							<div class="bk-margin-bottom-10 bk-margin-top-10 text-center">
							<?php if($conf['oauth_open']){
								$oauth_option=explode("|",$conf['oauth_option']);
								if(in_array('qqdenglu',$oauth_option))echo '<a href="social.php?type=qqdenglu"><img src="assets/img/social/qqdenglu.png"></a>&nbsp;';
								if(in_array('baidu',$oauth_option))echo '<a href="social.php?type=baidu"><img src="assets/img/social/baidu.png"></a>&nbsp;';
								if(in_array('sinaweibo',$oauth_option))echo '<a href="social.php?type=sinaweibo"><img src="assets/img/social/sinaweibo.png"></a>&nbsp;';
								if(in_array('qqweibo',$oauth_option))echo '<a href="social.php?type=qqweibo"><img src="assets/img/social/qqweibo.png"></a>&nbsp;';
								if(in_array('renren',$oauth_option))echo '<a href="social.php?type=renren"><img src="assets/img/social/renren.png"></a>&nbsp;';
								if(in_array('kaixin',$oauth_option))echo '<a href="social.php?type=kaixin"><img src="assets/img/social/kaixin.png"></a>&nbsp;';
							}?>
							</div><br />
							<p class="text-center">没有账号？<a href="index.php?mod=reg"><small>免费注册</small></a>
						</form>
					</div>
<?php
$conf['marquee']=false;$conf['limhplayer']=false;
include TEMPLATE_ROOT."foot.php";
?>