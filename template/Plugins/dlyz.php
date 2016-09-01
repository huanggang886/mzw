<?php
if(!defined('IN_CRONLITE'))exit();
$uin=is_numeric($_GET['uin'])?$_GET['uin']:null;
if($uin){
	$result=$DB->query("select * from ".DBQZ."_user where qq='$uin' and daili>0 limit 1");
	if($row = $DB->fetch($result) || $uin==$conf['kfqq']){
		$msg="<div class='alert alert-success'>恭喜！该QQ({$uin})是本站代理！可以进行交易</div>";
	}else{
		$msg="<div class='alert alert-danger'>警告！该QQ({$uin})不是代理，请结束交易</div>";
	}
}
$title="代理验证";
$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>首页</a></li>
<li class="active"><a href="#"><i class="icon fa fa-credit-card"></i>代理验证</a></li>';
include TEMPLATE_ROOT."head.php";

echo '<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 center-block" role="main">';
echo $msg;
?>
	<form method="GET" action="index.php" class="form-sign">
		<input type="hidden" name="mod" value="dlyz">
		<div class="input-group">
			<span class="input-group-addon">平台名称</span><input type="text" class="form-control" value="<?php echo $conf['sitename']?>" disabled="ture">
		</div>
		<div class="input-group">
			<span class="input-group-addon">代理扣扣</span>
			<input type="text" class="form-control" name="uin" value="" placeholder="">
		</div>
		<br/>
		<input type="submit" class="btn btn-primary btn-block" value="提交验证">
	</form>
	<p style="text-align:center">
		<br>
		<a href="./"><span class="label label-info"><?php echo $conf['sitename']?></span></a>
		<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']?>&site=qq&menu=yes"><span class="label label-info">联系站长</span></a>
	</p>
<?php include TEMPLATE_ROOT."foot.php";?>