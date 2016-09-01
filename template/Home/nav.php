<!-- Start: Header -->
<div class="navbar" role="navigation">
	<div class="container-fluid container-nav">
		<!-- Navbar Action -->
		<ul class="nav navbar-nav navbar-actions navbar-left">
			<li class="visible-md visible-lg"><a href="#" id="main-menu-toggle"><i class="fa fa-th-large"></i></a></li>
			<li class="visible-xs visible-sm"><a href="#" id="sidebar-menu"><i class="fa fa-navicon"></i></a></li>
		</ul>
		<!-- Navbar Left -->
		<div class="navbar-left">
			
		</div>
		<!-- Navbar Right -->
		<div class="navbar-right">
			<!-- Notifications -->
			
			<!-- End Notifications -->
			<!-- Userbox -->
			<div class="userbox">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<div class="profile-info">
						<span class="name"><i class="glyphicon glyphicon-user"></i>&nbsp;<?php echo $islogin?$gl:'加入我们'?></span>
					</div>			
					<i class="fa custom-caret"></i>
				</a>
				<div class="dropdown-menu">
					<ul class="list-unstyled">
						<li class="dropdown-menu-header bk-bg-white bk-margin-top-15">						
							<div class="progress progress-xs  progress-striped active">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
									100%
								</div>
							</div>
						</li>
						<?php if($islogin==1) {?>
						<li>
							<a href="index.php?mod=user"><i class="fa fa-user"></i>用户中心</a>
						</li>
						<li>
							<a href="index.php?mod=userinfo"><i class="fa fa-wrench"></i>资料修改</a>
						</li>
						<li>
							<a href="index.php?mod=shop" onclick="activeselect(this)"><i class=" glyphicon glyphicon-shopping-cart"></i>自助商城</a>
						</li>
						<li>
							<a href="index.php?mod=qqlist" onclick="activeselect(this)"><i class="glyphicon glyphicon-plus"></i>添加挂机</a>
						</li>
						<li>
							<a href="index.php?mod=qd" onclick="activeselect(this)"><i class="glyphicon glyphicon-check"></i>每日签到</a>
						</li>
						<?php if($rules[9]) {?>
						<li>
							<a href="index.php?mod=invite" onclick="activeselect(this)"><i class="glyphicon glyphicon-stats"></i>邀请好友</a>
						</li><?php }?>
						<li>
							<a href="index.php?my=loginout"><i class="fa fa-power-off"></i>安全退出</a>
						</li>
						<?php }else{?>
						<li>
							<a href="index.php?mod=login" pjax="no"><i class="glyphicon glyphicon-play"></i>登录</a>
						</li>
						<li>
							<a href="index.php?mod=reg" pjax="no"><i class="glyphicon glyphicon-plus"></i>注册</a>
						</li>
						<li>
							<a href="index.php?mod=findpwd"><i class="glyphicon glyphicon-lock"></i>找回密码</a>
						</li>
						<?php }?>
					</ul>
				</div>						
			</div>
			<!-- End Userbox -->
		</div>
		<!-- End Navbar Right -->
	</div>		
</div>
<!-- End: Header -->
<!-- Start: Content -->
<div class="container-fluid content">
	<div class="row">
		<!-- 左侧 -->
		<div class="sidebar">
			<div class="sidebar-collapse">
				<!-- Sidebar Header Logo-->
				<?php if($is_fenzhan==1) $logoname = DBQZ;else $logoname = ''; 
					if(!file_exists(ROOT.'images/'.$logoname.'logo.png')) $logoname='';
				?>
				<div class="sidebar-header">
					<a href="./"><img src="<?php echo $siteurl?>images/<?php echo $logoname?>logo.png" alt="logo" width="100%" height="100%"/></a>
				</div>
				<!-- Sidebar Menu-->
				<div class="sidebar-menu">
					<nav id="menu" class="nav-main" role="navigation">
						<ul class="nav nav-sidebar">
							<div class="panel-body text-center">
							<?php if($islogin==1) {?>
								<div class="bk-avatar">
									<img src="<?php echo ($row['qq'])?'http://q2.qlogo.cn/headimg_dl?bs=qq&dst_uin='.$row['qq'].'&src_uin='.$row['qq'].'&fid='.$row['qq'].'&spec=100&url_enc=0&referer=bu_interface&term_type=PC':'assets/img/user.png'?>" class="img-circle bk-img-60" alt="" />
								</div>
								<div class="bk-padding-top-10">
									<a href="index.php?mod=user" onclick="activeselect(this)"><i class="fa fa-circle text-success"></i> <small><?php echo $gl?></small></a>
								</div>
								<?php }else{?>
								<p style="color:#FFF">登录你的账号</p>
								<form action="?" method="GET">
								<input type="hidden" name="my" value="login">
								<input type="hidden" name="ctime" value="2592000">
								<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" class="form-control" name="user" value="" placeholder="用户名">
								</div><br/>
								<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="password" class="form-control" name="pass" value="" placeholder="密码">
								</div><br/>
								<button type="submit" class="btn btn-info btn-block">马上登录</button></form>
								<a href="index.php?mod=reg" class="btn btn-success btn-block">注册用户</a>
							<?php }?>
							</div>
							<div class="divider2"></div>
							<?php if($islogin==1) {
							if(OPEN_QQOL==1)echo '<li class="'.checkIfActive("qqlist").checkIfActive("list-qq").checkIfActive("dama").checkIfActive("wall").'" onclick="activeselect(this)"><a href="index.php?mod=qqlist"><span class="glyphicon glyphicon-globe"></span> ＱＱ管理</a></li>';
							if(OPEN_SIGN==1)echo '<li class="'.checkIfActive("list-sign").'" onclick="activeselect(this)"><a href="index.php?mod=list-sign"><span class="glyphicon glyphicon-cloud"></span> 自动签到</a></li>';
							if(OPEN_CRON==1){
								if($conf['server_wz']>1)echo '<li class="'.checkIfActive("syslist").checkIfActive("list-wz").'" onclick="activeselect(this)"><a href="index.php?mod=syslist"><span class="glyphicon glyphicon-tasks"></span> 网址监控</a></li>';
								else echo '<li class="'.checkIfActive("syslist").checkIfActive("list-wz").'" onclick="activeselect(this)"><a href="index.php?mod=list-wz"><span class="glyphicon glyphicon-tasks"></span> 网址监控</a></li>';
							}echo '<li class="'.checkIfActive("shop").'" onclick="activeselect(this)"><a href="index.php?mod=shop"><span class="glyphicon glyphicon-shopping-cart"></span> 自助购买</a></li>';
							}else{
							echo '<li class="'.checkIfActive("index").'" ><a href="index.php?mod=index"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
							<li class="'.checkIfActive("login").'" pjax="no"><a href="index.php?mod=login"><span class="glyphicon glyphicon-play"></span> 登录</a></li>
							<li class="'.checkIfActive("reg").'" pjax="no"><a href="index.php?mod=reg"><span class="glyphicon glyphicon-user"></span> 注册</a></li>';
							}
							if(OPEN_CHAT==1)echo '<li class="'.checkIfActive("chat").'" onclick="activeselect(this)"><a href="index.php?mod=chat"><span class="glyphicon glyphicon-comment"></span> 聊天社区</a></li>';?>
							<li class="<?php echo checkIfActive("help"); ?>" onclick="activeselect(this)"><a href="index.php?mod=help"><span class="glyphicon glyphicon-info-sign"></span> 功能介绍</a></li>
							<?php if($isadmin==1 || $isdeputy==1)echo '<li class="'.checkIfActive("admin").'" onclick="activeselect(this)"><a href="index.php?mod=admin"><span class="glyphicon glyphicon-cog"></span> 后台管理</a></li>';
							elseif($isdaili==1)echo '<li class="'.checkIfActive("admin").'" onclick="activeselect(this)"><a href="index.php?mod=admin-daili"><span class="glyphicon glyphicon-cog"></span> 代理后台</a></li>';
							elseif($islogin==1) echo '<li class="'.checkIfActive("wall").'" onclick="activeselect(this)"><a href="index.php?mod=wall"><span class="glyphicon glyphicon-picture"></span> ＱＱ展示</a></li>';?>
						</ul>
					</nav>
					
				</div>
				<!-- End Sidebar Menu-->
			</div>
			<!-- Sidebar Footer-->
			<div class="sidebar-footer" style="height:40px;">	
				<div class="copyright text-center">
					<small><?php echo $conf['copyright']?></small>
				</div>
			</div>
			<!-- End Sidebar Footer-->
		</div>
		<!-- End 左侧 -->

		<!-- 页面 -->
		<div id="myDiv"></div>
		<!-- Main Page -->
		<div class="main pjaxmain">
			<!-- Page Header -->
			<div class="page-header">
				<div class="pull-left">
					<ol class="breadcrumb">								
						<?php echo $breadcrumb?>
					</ol>
				</div>
				<div class="pull-right <?php echo $breadcrumb?'visible-sm visible-md visible-lg':null?>">
					<h2><?php echo $title?></h2>
				</div>
			</div>
			<!-- End Page Header -->
			<div class="row">
<?php unset($already);?>