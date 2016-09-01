<div class="pjaxmain">
<div class="navbar navbar-default navbar-fixed-top affix" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only"><?php echo $sitename;?></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="./"><?php echo $sitename;?></a>
	<p class="navbar-text pull-left text-muted hidden-xs hidden-sm"><small class="text-muted text-sm"><em><?php echo $_SERVER['HTTP_HOST'];?></em></small></p>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
	  <?php if($islogin==1) {
	  echo '<li class="'.checkIfActive("user").checkIfActive("user2").'" ><a href="index.php?mod=user"><span class="glyphicon glyphicon-user"></span> '.$gl.'</a></li>';
	  if(OPEN_QQOL==1)echo '<li class="'.checkIfActive("qqlist").checkIfActive("list-qq").checkIfActive("wall").'" ><a href="index.php?mod=qqlist"><span class="glyphicon glyphicon-globe"></span> ＱＱ管理</a></li>';
	  if(OPEN_SIGN==1)echo '<li class="'.checkIfActive("list-sign").'"><a href="index.php?mod=list-sign"><span class="glyphicon glyphicon-cloud"></span> 自动签到</a></li>';
	  if(OPEN_CRON==1){
		  if($conf['server_wz']>1)echo '<li class="'.checkIfActive("syslist").checkIfActive("list-wz").'" ><a href="index.php?mod=syslist"><span class="glyphicon glyphicon-tasks"></span> 网址监控</a></li>';
	  	  else echo '<li class="'.checkIfActive("syslist").checkIfActive("list-wz").'" ><a href="index.php?mod=list-wz"><span class="glyphicon glyphicon-tasks"></span> 网址监控</a></li>';
	  }echo '<li class="'.checkIfActive("shop").'"><a href="index.php?mod=shop"><span class="glyphicon glyphicon-shopping-cart"></span> 自助购买</a></li>';
	  }else{
	  echo '<li class="'.checkIfActive("user").checkIfActive("user2").'" ><a href="index.php?mod=user"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
	  <li class="'.checkIfActive("login").checkIfActive("login2").'" ><a href="index.php?mod=login2"><span class="glyphicon glyphicon-play"></span> 登录</a></li>
	  <li class="'.checkIfActive("reg").checkIfActive("zhuce2").'" ><a href="index.php?mod=zhuce2"><span class="glyphicon glyphicon-user"></span> 注册</a></li>
	  <li class="'.checkIfActive("chat").'"><a href="index.php?mod=chat"><span class="glyphicon glyphicon-comment"></span> 聊天社区</a></li>';
	  }?>
	  <li class="<?php echo checkIfActive("help"); ?>" ><a href="index.php?mod=help"><span class="glyphicon glyphicon-info-sign"></span> 功能介绍</a></li>
	  <?php if($isadmin==1 || $isdeputy==1)echo '<li class="'.checkIfActive("admin").'" ><a href="index.php?mod=admin"><span class="glyphicon glyphicon-cog"></span> 后台管理</a></li>';
	  elseif($isdaili==1) echo '<li class="'.checkIfActive("admin").'" ><a href="index.php?mod=admin-daili"><span class="glyphicon glyphicon-cog"></span> 代理后台</a></li>';?>
	  <?php if($islogin==1)echo '<li class="" ><a href="index.php?my=loginout"><span class="glyphicon glyphicon-off"></span> 登出</a></li>';?>
	  </ul>
  </div><!-- /.navbar-collapse -->
</div>
<?php unset($already);
if($mod=='user2'||$mod=='login2'||$mod=='zhuce2')$colnum=array('3','9');
else $colnum=array('2','10');?>
<!-- 侧边导航，宽屏设备可见 -->
<div class="container bs-docs-container">
      <div class="row">
        <div class="col-md-<?php echo $colnum[0]?>">
          <div class="bs-sidebar hidden-print visible-lg visible-md" role="complementary" >
            <ul class="nav bs-sidenav">    
      <li class="<?php echo checkIfActive("user").checkIfActive("user2"); ?>" ><a href="index.php?mod=user"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
	  <?php if($islogin==1) {
	  if(OPEN_QQOL==1)echo '<li class="'.checkIfActive("qqlist").checkIfActive("list-qq").checkIfActive("wall").'" ><a href="index.php?mod=qqlist"><span class="glyphicon glyphicon-globe"></span> ＱＱ管理</a></li>';
	  if(OPEN_QQOL==1&&OPEN_DAMA==1)echo '<li class="'.checkIfActive("dama").'" ><a href="index.php?mod=dama"><span class="glyphicon glyphicon-check"></span> 协助打码</a></li>';
	  if(OPEN_SIGN==1)echo '<li class="'.checkIfActive("list-sign").'"><a href="index.php?mod=list-sign"><span class="glyphicon glyphicon-cloud"></span> 自动签到</a></li>';
	  if(OPEN_CRON==1){
		  if($conf['server_wz']>1)echo '<li class="'.checkIfActive("syslist").checkIfActive("list-wz").'" ><a href="index.php?mod=syslist"><span class="glyphicon glyphicon-tasks"></span> 网址监控</a></li>';
	  	  else echo '<li class="'.checkIfActive("syslist").checkIfActive("list-wz").'" ><a href="index.php?mod=list-wz"><span class="glyphicon glyphicon-tasks"></span> 网址监控</a></li>';
	  }echo '<li class="'.checkIfActive("shop").'"><a href="index.php?mod=shop"><span class="glyphicon glyphicon-shopping-cart"></span> 自助购买</a></li>';
	  }else{
	  echo '<li class="'.checkIfActive("login").checkIfActive("login2").'"><a href="index.php?mod=login2"><span class="glyphicon glyphicon-play"></span> 登录</a></li>
	  <li class="'.checkIfActive("reg").checkIfActive("zhuce2").'"><a href="index.php?mod=zhuce2"><span class="glyphicon glyphicon-user"></span> 注册</a></li>';
	  }
	  if(OPEN_CHAT==1)echo '<li class="'.checkIfActive("chat").'"><a href="index.php?mod=chat"><span class="glyphicon glyphicon-comment"></span> 聊天社区</a></li>';?>
	  <li class="<?php echo checkIfActive("help"); ?>" ><a href="index.php?mod=help"><span class="glyphicon glyphicon-info-sign"></span> 功能介绍</a></li>
	  <?php if($isadmin==1 || $isdeputy==1)echo '<li class="'.checkIfActive("admin").'" ><a href="index.php?mod=admin"><span class="glyphicon glyphicon-cog"></span> 后台管理</a></li>';
	  elseif($isdaili==1) echo '<li class="'.checkIfActive("admin").'" ><a href="index.php?mod=admin-daili"><span class="glyphicon glyphicon-cog"></span> 代理后台</a></li>';?>
	  </ul>
          </div>
        </div>
	  <div id="myDiv"></div>
	  <div class="col-md-<?php echo $colnum[1]?>">
		 <div class="row">
<?php unset($already);?>