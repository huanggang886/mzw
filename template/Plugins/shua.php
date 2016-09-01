<?php
if(!defined('IN_CRONLITE'))exit();

//自定义代刷卡密购买地址，留空则系统默认
$kaurl='';

$funcarr=array('rq'=>'空间人气','card'=>'名片赞','card2'=>'名片赞快刷','sszan'=>'说说赞','zyzan'=>'主页赞','liuyan'=>'空间留言','shuo'=>'说说浏览量');

$title='QQ空间代刷业务';
$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>首页</a></li>
<li><a href="index.php?mod=qqlist">ＱＱ管理</a></li>
<li><a href="index.php?mod=list-qq&qq='.$_GET['qq'].'">'.$_GET['qq'].'</a></li>
<li class="active"><a href="#">QQ空间代刷</a></li>';
include TEMPLATE_ROOT."head.php";

echo '<div class="col-md-8 col-sm-10 col-xs-12 center-block" role="main">
<script>

</script>';

if($islogin==1){
$act=isset($_GET['act'])?$_GET['act']:null;

$qq=isset($_GET['qq'])?daddslashes($_GET['qq']):null;
$func=daddslashes($_GET['func']);

if($act=='add')
{
	$func=daddslashes($_POST['func']);
	$qq=daddslashes($_POST['qq']);
	$data=get_curl($shuaapi.'api/shua.php?act=add&km='.$_POST['km'].'&uin='.$qq.'&func='.$func.'&url='.$_SERVER['HTTP_HOST'].'&authcode='.$authcode);
	$arr=json_decode($data,true);
	if($arr['code']==1) {
		showmsg($arr['msg'],1);
	}elseif(array_key_exists('msg',$arr)){
		showmsg($arr['msg'],3);
	}else{
		showmsg($data,4);
	}
}
elseif($act=='help')
{?>
<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title">代刷新手帮助&nbsp;<a href="index.php?mod=shua&func=<?php echo $func?>&qq=<?php echo $qq?>">[返回]</a></h3></div><div class="panel-body">
<p>请确认.</p>

<p>1.空间需要面向所有人，设置成任何人可以访问</p>

<p>2：空间里面必须有一个公开相片且有相册封面才支持快刷</p>

<p>3：未开始状态的就是空间权限，设置好不定时开刷有照片的日刷5000以上 下单五分钟内自动开刷，如果没有开刷，</p>

<p>请新建立一个相册，上传1-3张照片，然后耐心等待开刷。</p>

<p>重要的事情说三遍</p>

<p>空间里面必须有一个公开相片并且相册有封面才支持快刷!!!</p>

<p>空间里面必须有一个公开相片并且相册有封面才支持快刷!!!</p>

<p>空间里面必须有一个公开相片并且相册有封面才支持快刷!!! </p>

<p>单子在没完成之前不要重复下单！！！！！</p>
<a href="index.php?mod=shua&func=<?php echo $func?>&qq=<?php echo $qq?>"><<返回代刷控制面板</a>
</div>
</div>
<?php
}
else
{
	$data=get_curl($shuaapi.'api/shua.php?act=buy&url='.$_SERVER['HTTP_HOST'].'&authcode='.$authcode);
	$arr=json_decode($data,true);
	if($arr['code']==1) {
		$msg=$arr['msg'];
		$kaurl=$kaurl?$kaurl:$arr['kaurl'];
	}else{
		showmsg($data);
	}
?>
<div class="panel panel-primary">
<div class="panel-heading w h"><h3 class="panel-title">QQ代刷任务&nbsp;<a href="index.php?mod=shua&act=help&func=<?php echo $func?>&qq=<?php echo $qq?>" class="btn btn-info btn-xs">代刷新手帮助</a></h3></div><div class="panel-body box">
<?php echo $msg;?>
<br/><br/>
代刷卡密购买地址：<a target="_blank" href="<?php echo $kaurl;?>"><?php echo $kaurl;?></a>
</div></div>
<div class="panel panel-info">
<div class="panel-heading w h"><h3 class="panel-title"><img src="images/icon/qq.ico" class="logo">代刷<?php echo $funcarr[$func]?></h3></div>
<div class="panel-body box">
<form action="index.php?mod=shua&act=add" method="POST" role="form">
<input type="hidden" name="func" value="<?php echo $func?>">
<div class="form-group">
<label>QQ代刷卡密:</label><br>
<input type="text" class="form-control" name="km" value="" placeholder="输入代刷<?php echo $funcarr[$func]?>的卡密">
</div>
<div class="form-group">
<label>输入要刷的QQ</label><br>
<input type="text" class="form-control" name="qq" value="<?php echo $qq?>" placeholder="">
</div>
<input type="submit" class="btn btn-primary btn-block" value="提交"></form></div>
</div>
<?php
}
}else{
showmsg('登录失败，可能是密码错误或者身份失效了，请<a href="index.php?mod=login">重新登录</a>！',3);
}

include TEMPLATE_ROOT."foot.php";
?>