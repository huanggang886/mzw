<?php
error_reporting(0);
@header('Content-Type: text/html; charset=UTF-8');
$do=isset($_GET['do'])?$_GET['do']:'0';
if(file_exists('install.lock')){
	$installed=true;
	$do='0';
}

function checkfunc($f,$m = false) {
	if (function_exists($f)) {
		return '<font color="green">可用</font>';
	} else {
		if ($m == false) {
			return '<font color="black">不支持</font>';
		} else {
			return '<font color="red">不支持</font>';
		}
	}
}

function checkclass($f,$m = false) {
	if (class_exists($f)) {
		return '<font color="green">可用</font>';
	} else {
		if ($m == false) {
			return '<font color="black">不支持</font>';
		} else {
			return '<font color="red">不支持</font>';
		}
	}
}
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no,minimal-ui">
<title>彩虹云任务安装向导</title>
<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<!--[if lt IE 9]>
	<script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


</head>
<body>
<nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <span class="navbar-brand">彩虹云任务安装向导</span>
      </div><!-- /.navbar-header -->
    </div><!-- /.container -->
  </nav><!-- /.navbar -->
  <div class="container" style="padding-top:60px;">
    <div class="col-xs-12 col-sm-8 col-lg-6 center-block" style="float: none;">

<?php if($do=='0'){?>
<div class="panel panel-primary">
	<div class="panel-heading" style="background: #15A638;">
		<h3 class="panel-title" align="center">欢迎使用彩虹云任务</h3>
	</div>
	<div class="panel-body">
		<p><iframe src="../readme.txt" style="width:100%;height:465px;"></iframe></p>
		<?php if($installed){ ?>
		<div class="alert alert-warning">您已经安装过，如需重新安装请删除<font color=red> install/install.lock </font>文件后再安装！</div>
		<?php }else{?>
		<p align="center"><a class="btn btn-primary" href="index.php?do=1">开始安装</a></p>
		<?php }?>
	</div>
</div>

<?php }elseif($do=='1'){?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">环境检查</h3>
	</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
	<span class="sr-only">10%</span>
  </div>
</div>
<table class="table table-striped">
	<thead>
		<tr>
			<th style="width:20%">函数检测</th>
			<th style="width:15%">需求</th>
			<th style="width:15%">当前</th>
			<th style="width:50%">用途</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>PHP 5.2+</td>
			<td>必须</td>
			<td><?php echo phpversion(); ?></td>
			<td>PHP版本支持</td>
		</tr>
		<tr>
			<td>curl_exec()</td>
			<td>必须</td>
			<td><?php echo checkfunc('curl_exec',true); ?></td>
			<td>抓取网页</td>
		</tr>
		<tr>
			<td>file_get_contents()</td>
			<td>必须</td>
			<td><?php echo checkfunc('file_get_contents',true); ?></td>
			<td>读取文件</td>
		</tr>
		<tr>
			<td>fsockopen()</td>
			<td>推荐</td>
			<td><?php echo checkfunc('fsockopen'); ?></td>
			<td>发送邮件</td>
		</tr>
		<tr>
			<td>ZipArchive</td>
			<td>推荐</td>
			<td><?php echo checkclass('ZipArchive'); ?></td>
			<td>Zip 解包和压缩</td>
		</tr>
		<tr>
			<td>写入权限</td>
			<td>推荐</td>
			<td><?php if (is_writable('./')) { echo '<font color="green">可用</font>'; } else { echo '<font color="black">不支持</font>'; } ?></td>
			<td>写入文件(1/2)</td>
		</tr>
		<tr>
			<td>file_put_contents()</td>
			<td>推荐</td>
			<td><?php echo checkfunc('file_put_contents'); ?></td>
			<td>写入文件(2/2)</td>
		</tr>
	</tbody>
</table>
<p><span><a class="btn btn-primary" href="index.php?do=0"><<上一步</a></span>
<span style="float:right"><a class="btn btn-primary" href="index.php?do=2" align="right">下一步>></a></span></p>
</div>

<?php }elseif($do=='2'){?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">数据库配置</h3>
	</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
	<span class="sr-only">30%</span>
  </div>
</div>
	<div class="panel-body">
	<?php
if(defined("SAE_ACCESSKEY"))
echo <<<HTML
检测到您使用的是SAE空间，支持一键安装，请点击 <a href="?do=3">下一步</a>
HTML;
else
echo <<<HTML
		<form action="?do=3" class="form-sign" method="post">
		<label for="name">数据库地址:</label>
		<input type="text" class="form-control" name="db_host" value="localhost">
		<label for="name">数据库端口:</label>
		<input type="text" class="form-control" name="db_port" value="3306">
		<label for="name">数据库用户名:</label>
		<input type="text" class="form-control" name="db_user">
		<label for="name">数据库密码:</label>
		<input type="text" class="form-control" name="db_pwd">
		<label for="name">数据库名:</label>
		<input type="text" class="form-control" name="db_name">
		<label for="name">数据表前缀:</label>
		<input type="text" class="form-control" name="db_qz" value="wjob">
		<br><input type="submit" class="btn btn-primary btn-block" name="submit" value="保存配置">
		</form><br/>
		（如果已事先填写好config.php相关数据库配置，请 <a href="?do=3&jump=1">点击此处</a> 跳过这一步！）
HTML;
?>
	</div>
</div>

<?php }elseif($do=='3'){
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">保存数据库</h3>
	</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
	<span class="sr-only">50%</span>
  </div>
</div>
	<div class="panel-body">
<?php
require './db.class.php';
if(defined("SAE_ACCESSKEY") || $_GET['jump']==1){
	if(defined("SAE_ACCESSKEY"))include_once '../includes/sae.php';
	else include_once '../config.php';
	define('DBQZ', $dbconfig['dbqz']);
	if(!$dbconfig['user']||!$dbconfig['pwd']||!$dbconfig['dbname']) {
		echo '<div class="alert alert-danger">请先填写好数据库并保存后再安装！<hr/><a href="javascript:history.back(-1)"><< 返回上一页</a></div>';
	} else {
		if(!$con=DB::connect($dbconfig['host'],$dbconfig['user'],$dbconfig['pwd'],$dbconfig['dbname'],$dbconfig['port'])){
			if(DB::connect_errno()==2002)
				echo '<div class="alert alert-warning">连接数据库失败，数据库地址填写错误！</div>';
			elseif(DB::connect_errno()==1045)
				echo '<div class="alert alert-warning">连接数据库失败，数据库用户名或密码填写错误！</div>';
			elseif(DB::connect_errno()==1049)
				echo '<div class="alert alert-warning">连接数据库失败，数据库名不存在！</div>';
			else
				echo '<div class="alert alert-warning">连接数据库失败，['.DB::connect_errno().']'.DB::connect_error().'</div>';
		}else{
			echo '<div class="alert alert-success">数据库配置文件保存成功！</div>';
			if(DB::query("select * from ".DBQZ."_config where 1")==FALSE)
				echo '<p align="right"><a class="btn btn-primary btn-block" href="?do=4">创建数据表>></a></p>';
			else
				echo '<div class="list-group-item list-group-item-info">系统检测到你已安装过彩虹云任务</div>
				<div class="list-group-item">
					<a href="update4.php" class="btn btn-block btn-primary">从V6.x升级安装</a>
				</div>
				<div class="list-group-item">
					<a href="?do=7" class="btn btn-block btn-info">跳过安装</a>
				</div>
				<div class="list-group-item">
					<a href="?do=4" onclick="if(!confirm(\'全新安装将会清空所有数据，是否继续？\')){return false;}" class="btn btn-block btn-warning">强制全新安装</a>
				</div>';
		}
	}
}else{
	$db_host=isset($_POST['db_host'])?$_POST['db_host']:NULL;
	$db_port=isset($_POST['db_port'])?$_POST['db_port']:NULL;
	$db_user=isset($_POST['db_user'])?$_POST['db_user']:NULL;
	$db_pwd=isset($_POST['db_pwd'])?$_POST['db_pwd']:NULL;
	$db_name=isset($_POST['db_name'])?$_POST['db_name']:NULL;
	$db_qz=isset($_POST['db_qz'])?$_POST['db_qz']:NULL;

	if($db_host==null || $db_port==null || $db_user==null || $db_pwd==null || $db_name==null){
		echo '<div class="alert alert-danger">保存错误,请确保每项都不为空<hr/><a href="javascript:history.back(-1)"><< 返回上一页</a></div>';
	} else {
		$config="<?php
/*数据库配置*/
\$dbconfig=array(
	'host' => '{$db_host}', //数据库服务器
	'port' => {$db_port}, //数据库端口
	'user' => '{$db_user}', //数据库用户名
	'pwd' => '{$db_pwd}', //数据库密码
	'dbname' => '{$db_name}', //数据库名
	'dbqz' => '{$db_qz}' //数据表前缀
);

/*系统配置*/
define('CACHE_FILE', 0); //缓存方式(0为数据库1为文件)
define('CC_Defender', 1); //防CC攻击开关(1为session模式)
?>";
		if(!$con=DB::connect($db_host,$db_user,$db_pwd,$db_name,$db_port)){
			if(DB::connect_errno()==2002)
				echo '<div class="alert alert-warning">连接数据库失败，数据库地址填写错误！</div>';
			elseif(DB::connect_errno()==1045)
				echo '<div class="alert alert-warning">连接数据库失败，数据库用户名或密码填写错误！</div>';
			elseif(DB::connect_errno()==1049)
				echo '<div class="alert alert-warning">连接数据库失败，数据库名不存在！</div>';
			else
				echo '<div class="alert alert-warning">连接数据库失败，['.DB::connect_errno().']'.DB::connect_error().'</div>';
		}elseif(file_put_contents('../config.php',$config)){
			echo '<div class="alert alert-success">数据库配置文件保存成功！</div>';
			if(DB::query("select * from ".$db_qz."_config where 1")==FALSE)
				echo '<p align="right"><a class="btn btn-primary btn-block" href="?do=4">创建数据表>></a></p>';
			else
				echo '<div class="list-group-item list-group-item-info">系统检测到你已安装过彩虹云任务</div>
				<div class="list-group-item">
					<a href="update4.php" class="btn btn-block btn-primary">从V6.x升级安装</a>
				</div>
				<div class="list-group-item">
					<a href="?do=7" class="btn btn-block btn-info">跳过安装</a>
				</div>
				<div class="list-group-item">
					<a href="?do=4" onclick="if(!confirm(\'全新安装将会清空所有数据，是否继续？\')){return false;}" class="btn btn-block btn-warning">强制全新安装</a>
				</div>';
		}else
			echo '<div class="alert alert-danger">保存失败，请确保网站根目录有写入权限<hr/><a href="javascript:history.back(-1)"><< 返回上一页</a></div>';
	}
}
?>
	</div>
</div>
<?php }elseif($do=='4'){?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">创建数据表</h3>
	</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
	<span class="sr-only">70%</span>
  </div>
</div>
	<div class="panel-body">
<?php
if(defined("SAE_ACCESSKEY"))include_once '../includes/sae.php';
else include_once '../config.php';
define('DBQZ', $dbconfig['dbqz']);
if(!$dbconfig['user']||!$dbconfig['pwd']||!$dbconfig['dbname']) {
	echo '<div class="alert alert-danger">请先填写好数据库并保存后再安装！<hr/><a href="javascript:history.back(-1)"><< 返回上一页</a></div>';
} else {
	require './db.class.php';
	$sql=file_get_contents("install.sql");
	$sql.='</explode>'.file_get_contents("site.sql");
	$sql=str_replace('{DBQZ}', DBQZ, $sql);
	$sql=explode(';</explode>',$sql);
	$cn = DB::connect($dbconfig['host'],$dbconfig['user'],$dbconfig['pwd'],$dbconfig['dbname'],$dbconfig['port']);
	if (!$cn) die('err:'.DB::connect_error());
	DB::query("set sql_mode = ''");
	DB::query("set names utf8");
	$t=0; $e=0; $error='';
	for($i=0;$i<count($sql);$i++) {
		if ($sql[$i]=='')continue;
		if(DB::query($sql[$i])) {
			++$t;
		} else {
			++$e;
			$error.=DB::error().'<br/>';
		}
	}
}
if($e==0) {
	echo '<div class="alert alert-success">安装成功！<br/>SQL成功'.$t.'句/失败'.$e.'句</div><p align="right"><a class="btn btn-block btn-primary" href="index.php?do=5">下一步>></a></p>';
} else {
	echo '<div class="alert alert-danger">安装失败<br/>SQL成功'.$t.'句/失败'.$e.'句<br/>错误信息：'.$error.'</div><p align="right"><a class="btn btn-block btn-primary" href="index.php?do=4">点此进行重试</a></p>';
}
?>
	</div>
</div>

<?php }elseif($do=='5'){?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">网站信息配置</h3>
	</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
	<span class="sr-only">85%</span>
  </div>
</div>
	<div class="panel-body">
		<form action="?do=6" class="form-sign" method="post">
		<label for="name">管理员账号(ID=1):</label>
		<input type="text" class="form-control" name="user">
		<label for="name">管理员密码:</label>
		<input type="password" class="form-control" name="pass" maxlength="32">
		<label for="name">网站名称:</label>
		<input type="text" class="form-control" name="sitename" value="彩虹云任务">
		<label for="name">站长ＱＱ:</label>
		<input type="text" class="form-control" name="kfqq">
		<br><input type="submit" class="btn btn-primary btn-block" name="submit" value="保存配置">
		</form><br/>
	</div>
</div>

<?php }elseif($do=='6'){?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">安装完成</h3>
	</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
	<span class="sr-only">100%</span>
  </div>
</div>
	<div class="panel-body">
<?php
$user=isset($_POST['user'])?$_POST['user']:NULL;
$pass=isset($_POST['pass'])?$_POST['pass']:NULL;
$sitename=isset($_POST['sitename'])?$_POST['sitename']:NULL;
$kfqq=isset($_POST['kfqq'])?$_POST['kfqq']:NULL;

if($user==NULL or $sitename==NULL or $pass==NULL){
	echo '<div class="alert alert-danger">保存错误,请确保每项都不为空<hr/><a href="javascript:history.back(-1)"><< 返回上一页</a></div>';
} else {
	$u="http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	@file_get_contents('http://www.qqzzz.net/api/tongji4.php?url='.$u);
	require_once "update.inc.php";
	saveSetting('sitename',$sitename);
	saveSetting('kfqq',$kfqq);
	saveSetting('build',$date);
	saveSetting('siteurl',$siteurl);
	$syskey = random(32);
	saveSetting('syskey',$syskey);
	saveSetting('cronkey',rand(100000,999999));
	saveSetting('version','7030');
	$ad=$DB->query("insert into `".DBQZ."_user` (`user`,`pass`,`date`,`last`,`coin`,`qq`) values ('".$user."','".$pass."','".$date."','".$date."','10000','".$kfqq."')");
	$CACHE->clear();
	if($ad){
		@file_put_contents("install.lock",'安装锁');
		echo '<div class="alert alert-info"><font color="green">安装完成！管理账号和密码是:'.$user.'/'.$pass.',请在首页进行登录。</font><br/><br/><a href="../">>>网站首页</a><hr/><font color="blue">提示：要想正常运行，需要监控，监控说明请到后台查看。</font><br/>更多设置选项请登录后台管理进行修改。<br/><br/><font color="#FF0033">如果你的空间不支持本地文件读写，请自行在install/ 目录建立 install.lock 文件！</font></div>';
	}else{echo '<div class="alert alert-danger">保存失败!'.$DB->error().'</div>';}
}
?>
	</div>
</div>

<?php }elseif($do=='7'){?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">安装完成</h3>
	</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
	<span class="sr-only">100%</span>
  </div>
</div>
	<div class="panel-body">
<?php
	$u="http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	@file_get_contents('http://www.qqzzz.net/api/tongji4.php?url='.$u);
	@file_put_contents("install.lock",'安装锁');
	echo '<div class="alert alert-info"><font color="green">安装完成！</font><br/><br/><a href="../">>>网站首页</a><hr/><font color="blue">提示：要想正常运行，需要监控，监控说明请到后台查看。</font><br/>更多设置选项请登录后台管理进行修改。<br/><br/><font color="#FF0033">如果你的空间不支持本地文件读写，请自行在install/ 目录建立 install.lock 文件！</font></div>';
?>
	</div>
</div>


<?php }?>


</div></body></html>