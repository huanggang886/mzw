<?php
if(!defined('IN_CRONLITE'))exit();
$title='QQ等级代挂操作';
$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>首页</a></li>
<li><a href="index.php?mod=qqlist">ＱＱ管理</a></li>
<li><a href="index.php?mod=list-qq&qq='.$_GET['qq'].'">'.$_GET['qq'].'</a></li>
<li class="active"><a href="#">QQ等级代挂</a></li>';
include TEMPLATE_ROOT."head.php";

echo '<div class="col-md-8 col-sm-10 col-xs-12 center-block" role="main">';
$blackarr=array('稳定代挂中','<font color=red>密码错误</font>','<font color=red>ＱＱ冻结</font>','<font color=red>请关闭设备锁</font>');

if($islogin==1){
$act=isset($_GET['act'])?$_GET['act']:null;
if(OPEN_LEVE==0) {
	showmsg('当前站点未开启此功能。',2);exit;
}
$qq=daddslashes($_GET['qq']);
if(!$qq) {
	showmsg('参数不能为空！');
}
$row=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$qq}' limit 1");
if($row['uid']!=$uid && $isadmin==0) {
	showmsg('你只能操作自己的QQ哦！');
}
vipfunc_check('qqlevel');
?>
<?php
if($act=='add')
{
	$func=$_POST['func_0'].','.$_POST['func_1'].','.$_POST['func_2'].','.$_POST['func_3'].','.$_POST['func_4'].','.$_POST['func_5'];
	$pwd=authcode($row['pw'],'DECODE',SYS_KEY);
	$pwd=authcode($_POST['qpwd']?$_POST['qpwd']:$pwd,'ENCODE','CLOUDKEY');
	$data=get_curl($dgapi.'api/submit.php?act=add&id='.$_GET['id'].'&km='.$_POST['km'].'&uin='.$qq.'&pwd='.urlencode($pwd).'&func='.urlencode($func).'&url='.$_SERVER['HTTP_HOST'].'&authcode='.$authcode);
	$arr=json_decode($data,true);
	if($arr['code']==1) {
		$DB->query("update `".DBQZ."_qq` set `qqlevel` ='{$arr['id']}' where `qq`='$qq'");
		showmsg($arr['msg'],1);
	}elseif(array_key_exists('msg',$arr)){
		showmsg($arr['msg'],3);
	}else{
		showmsg($data,4);
	}
}
elseif($act=='fill_do')
{
	$func=implode(',',$_POST['bgid']);
	$data=get_curl($dgapi.'api/submit.php?act=fill&id='.$_GET['id'].'&uin='.$qq.'&func='.urlencode($func).'&url='.$_SERVER['HTTP_HOST'].'&authcode='.$authcode);
	$arr=json_decode($data,true);
	if($arr['code']==1) {
		showmsg($arr['msg'],1);
	}elseif(array_key_exists('msg',$arr)){
		showmsg($arr['msg'],3);
	}else{
		showmsg($data,4);
	}
}
elseif($act=='fill')
{?>
<div class="panel panel-primary">
<div class="panel-heading w h"><h3 class="panel-title">补挂操作</h3></div><div class="panel-body box">
<strong>温馨提示：QQ被冻结或密码修改请更新密码后再来补挂！请查看哪些漏挂的再勾选补挂，恶意提交补挂将永久拉黑QQ。</strong>
<form action="index.php?mod=qqlevel&act=fill_do&qq=<?php echo $qq?>&id=<?php echo $row['qqlevel']?>" method="POST" role="form">
<table class="table table-striped table-hover table-bordered">
        <tbody>
  <tr>
        <td><span class="label label-success">代挂服务</span> </td>
        <td><span class="label label-danger">选择</span> </td>
        </tr>
        <tr>
        <td>电脑管家</td>
        <td><input type="checkbox" name="bgid[]" value="guanjia"></td>
        </tr>
        <tr>
        <td>电脑QQ</td>
        <td><input type="checkbox" name="bgid[]" value="pcqq"></td>
        </tr> 
        <tr>
        <td>勋章墙</td>
        <td><input type="checkbox" name="bgid[]" value="xunzhang"></td>
        </tr>
        <tr>
        <td>手机QQ</td>
        <td><input type="checkbox" name="bgid[]" value="mqq"></td>
        </tr>
        <tr>
        <td>QQ音乐</td>
        <td><input type="checkbox" name="bgid[]" value="qqmusic"></td>
        </tr>
        <tr>
        <td>手机游戏</td>
        <td><input type="checkbox" name="bgid[]" value="qqgame"></td>
        </tr>
        <tr>
        <td colspan="2">
		<input type="submit" class="btn btn-primary btn-block" value="立即补挂">
 </td>
        </tr>
        </tbody>
    </table>
</form>
<a href="index.php?mod=qqlevel&qq=<?php echo $qq?>"><<返回代挂控制面板</a>
</div>
</div>
<?php
}
elseif($act=='help')
{?>
<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title">代挂新手帮助&nbsp;<a href="index.php?mod=qqlevel&qq=<?php echo $qq?>">[返回]</a></h3></div><div class="panel-body">
<div class="panel panel-default">
<div class="panel-heading">
<a data-toggle="collapse" data-parent="#accordion" href="#ss1">
<h4 class="panel-title">
问：代挂里包含了哪些项目？
</h4>
</a>
</div>
<div id="ss1" class="panel-collapse collapse">
<div class="panel-body">
答：<br/>
&nbsp;&nbsp;包含手机QQ在线每天加速1.0天<br/>
&nbsp;&nbsp;电脑QQ在线每天加速0.5天<br/>
&nbsp;&nbsp;非隐身在线2小时每天加速0.2天<br/>
&nbsp;&nbsp;点亮QQ勋章墙每天加速0.2天<br/>
&nbsp;&nbsp;QQ音乐听歌每天加速0.5天<br/>
&nbsp;&nbsp;管家在线30分钟每天加速0.2天<br/>
&nbsp;&nbsp;管家使用安全功能加速0.5天(月限4次)<br/>
&nbsp;&nbsp;QQ手机游戏中心每天加速0.2天<br/>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<a data-toggle="collapse" data-parent="#accordion" href="#2">
<h4 class="panel-title">
问：代挂项目的登陆时间？
</h4>
</a>
</div>
<div id="2" class="panel-collapse collapse">
<div class="panel-body">
答：本站代挂每天定时登陆两次，凌晨0点后执行第一次登陆操作，登陆所有功能进行代挂，若出现登陆保护/帐号冻结/密码错误或其他错误，会在晚上的20点后进行第二次重试。（第二次重试不包含手机QQ在线，当天添加的QQ也是在晚上20点进行挂机任务）
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<a data-toggle="collapse" data-parent="#accordion" href="#3">
<h4 class="panel-title">
问：帐号状态出现非正常状态怎么办？
</h4>
</a>
</div>
<div id="3" class="panel-collapse collapse">
<div class="panel-body">
答：当帐号的状态被系统改为非正常状态时，将不会运行代挂任务，请在解决对应问题后，在本站更新一次QQ密码即可恢复正常状态！
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<a data-toggle="collapse" data-parent="#accordion" href="#4">
<h4 class="panel-title">
问：提交代挂后，提示异地登陆/异常操作冻结帐号，怎么回事？
</h4>
</a>
</div>
<div id="4" class="panel-collapse collapse">
<div class="panel-body">
答：因为你QQ的登陆地区与我们的代挂服务器地区不一致，导致出现异地登陆，腾讯方面为了保护你 的帐号会出现以上提示，冻结后修改密码即可，建议大家在QQ安全中心里的登陆记录中“确认本人登陆”，这样挂出常用地点后就不会有这样的提示了。
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<a data-toggle="collapse" data-parent="#accordion" href="#5">
<h4 class="panel-title">
问：被提示帐号有被盗风险，发送恶意信息或广告，能给个解释吗？
</h4>
</a>
</div>
<div id="5" class="panel-collapse collapse">
<div class="panel-body">
答：这是安全中心的默认提示，实际上是不存在这个问题的，QQ帐号都有漫游聊天记录，可以自己查证一下，放心即可！密码本站绝不会泄漏，也不会去盗取你的帐号！
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<a data-toggle="collapse" data-parent="#accordion" href="#6">
<h4 class="panel-title">
问：在哪里关闭登陆保护，设备锁等？
</h4>
</a>
</div>
<div id="6" class="panel-collapse collapse">
<div class="panel-body">
答：登陆 <a href="https://aq.qq.com/cn2/safe_service/device_lock" target="_blank">https://aq.qq.com/cn2/safe_service/device_lock</a> 这个页面，即可关闭所有的登陆保护，确保正常代挂不受影响。
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<a data-toggle="collapse" data-parent="#accordion" href="#7">
<h4 class="panel-title">
问：提交代挂需要注意一些什么问题吗？
</h4>
</a>
</div>
<div id="7" class="panel-collapse collapse">
<div class="panel-body">
答：首先，请将您宝贵的帐号绑定上各种密保，开启QB消费验证，以免代挂期间产生不必要的误会，提交代挂即代表您自愿将帐号交给我们进行托管代挂，并同意本站协议。
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<a data-toggle="collapse" data-parent="#accordion" href="#9">
<h4 class="panel-title">
问：代挂每天能加速多少？
</h4>
</a>
</div>
<div id="9" class="panel-collapse collapse">
<div class="panel-body">
答：非会员每天固定加速3.8天，QQ会员用户根据会员加速倍数计算公式为：会员加速倍数×1.7+2.1 ，例如SVIP8级加速是3.0倍的计算为3×1.7+2.1=7.2天。
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<a data-toggle="collapse" data-parent="#accordion" href="#10">
<h4 class="panel-title">
问：为什么我添加了代挂却没有给我挂呢？
</h4>
</a>
</div>
<div id="10" class="panel-collapse collapse">
<div class="panel-body">
答：代挂前两三天由于异地登录容易冻结QQ，这样就让一些项目漏挂了，当天解冻后会给予补挂。如果QQ没有被冻结过，却没有任何一个项目加速的就是你密码给错了，基本密码错误的都会在状态中显示出来，但不排除个别QQ状态更新不及时还显示正常的情况，因此出现上述情况到QQ列表找到你的QQ点一下[更新]，请确保密码是正确的！
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<a data-toggle="collapse" data-parent="#accordion" href="#11">
<h4 class="panel-title">
问：为什么电脑QQ或勋章墙总是没挂呢？
</h4>
</a>
</div>
<div id="11" class="panel-collapse collapse">
<div class="panel-body">
答：勋章墙的登录类型与电脑QQ一样，受登录保护影响，目前平台QQ状态中不提示登录保护，登陆 <a href="https://aq.qq.com/cn2/safe_service/device_lock" target="_blank">https://aq.qq.com/cn2/safe_service/device_lock</a> 这个页面，关闭登录保护即可正常代挂！
</div>
</div>
</div>
<a href="index.php?mod=qqlevel&qq=<?php echo $qq?>"><<返回代挂控制面板</a>
</div>
</div>
<?php
}
else
{
	if($row['qqlevel']) {
		$data=get_curl($dgapi.'api/submit.php?act=query&id='.$row['qqlevel'].'&url='.$_SERVER['HTTP_HOST'].'&authcode='.$authcode);
		$arr=json_decode($data,true);
		if($arr['code']==1) {
			$func=explode(',',$arr['data']);
			if($arr['enddate']>=date("Y-m-d")) {
				$kminput='<div class="form-group">
<label>QQ代挂配额激活码(可空):</label><br>
<input type="text" class="form-control" name="km" value="" placeholder="输入激活码以续期">
</div>';
				$msg='<div class="alert alert-success">QQ:'.$qq.' 已开通等级代挂功能，到期日期：<font color=red>'.$arr['enddate'].'</font><br/>代挂状态：<u>'.$blackarr[$arr['black']].'</u><br/>
			注：QQ被冻结或者密码修改，请及时更新密码，在<a href="index.php?mod=qqlist">QQ列表</a>点[更新]即可同步更新代挂的密码。<br/>漏挂的扣扣，当天冻结的扣扣更改密码之后请<a href="index.php?mod=qqlevel&act=fill&qq='.$qq.'">点此提交补挂</a>！';
			} else {
				$kminput='<div class="form-group">
<label>*QQ代挂配额激活码:</label><br>
<input type="text" class="form-control" name="km" value="" placeholder="输入激活码以续期">
</div>';
				$msg='<div class="alert alert-warning">QQ:'.$qq.' 的等级代挂功能已过期（到期日期：<font color=red>'.$arr['enddate'].'</font>），如需继续使用请及时续费！<br/>
			输入激活码可以为您的QQ续期。';
			}
		}elseif($arr['code']==-1){
			$kminput='<div class="form-group">
<label>*QQ代挂配额激活码:</label><br>
<input type="text" class="form-control" name="km" value="" placeholder="输入激活码">
</div>';
			$msg='<div class="alert alert-info">首次开通请购买并输入代挂激活码，激活码将和你的QQ绑定。开通前请确保关闭设备锁和<a href="https://aq.qq.com/cn2/safe_service/device_lock" target="_blank">登录保护</a>！';
		}else{
			showmsg($data);exit;
		}
	}else{
		$kminput='<div class="form-group">
<label>*QQ代挂配额激活码:</label><br>
<input type="text" class="form-control" name="km" value="" placeholder="输入激活码">
</div>';
		$msg='<div class="alert alert-info">首次开通请购买并输入代挂激活码，激活码将和你的QQ绑定。开通前请确保关闭设备锁和<a href="https://aq.qq.com/cn2/safe_service/device_lock" target="_blank">登录保护</a>！';
	}
?>
<div class="panel panel-primary">
<div class="panel-heading w h"><h3 class="panel-title">QQ等级代挂操作&nbsp;<a href="index.php?mod=qqlevel&act=help&qq=<?php echo $qq?>" class="btn btn-info btn-xs">代挂新手帮助</a></h3></div><div class="panel-body box">
<blockquote><?php echo $conf['qqlevel'];?></blockquote>
<?php echo $msg;if($isadmin==1)echo '<br/>[ <a href="index.php?mod=shop&act=3" target="_blank">站长点此购买配额激活码</a> ]';?></div>
<form action="index.php?mod=qqlevel&act=add&qq=<?php echo $qq?>&id=<?php echo $row['qqlevel']?>" method="POST" role="form">
<?php echo $kminput?>
<div class="form-group">
<label><img src="images/icon/qqmgr.ico" class="logo">电脑管家代挂:</label><br>
<select class="form-control" name="func_0"">
<option value="1" <?php echo $func[0]==1?'selected="selected"':NULL?>>开启</option>
<option value="0" <?php echo $func[0]==0?'selected="selected"':NULL?>>关闭</option>
</select>
</div>
<div class="form-group">
<label><img src="images/icon/qq.ico" class="logo">电脑QQ在线[会顶掉电脑QQ]:</label><br>
<select class="form-control" name="func_1">
<option value="1" <?php echo $func[1]==1?'selected="selected"':NULL?>>开启</option>
<option value="0" <?php echo $func[1]==0?'selected="selected"':NULL?>>关闭</option>
</select>
</div>
<div class="form-group">
<label><img src="images/icon/mqq.ico" class="logo">手机QQ在线[会顶掉手机QQ]:</label><br>
<select class="form-control" name="func_2">
<option value="1" <?php echo $func[2]==1?'selected="selected"':NULL?>>开启</option>
<option value="0" <?php echo $func[2]==0?'selected="selected"':NULL?>>关闭</option>
</select>
</div>
<div class="form-group">
<label><img src="images/icon/chen.ico" class="logo">QQ勋章墙[会顶掉电脑QQ]:</label><br>
<select class="form-control" name="func_3">
<option value="1" <?php echo $func[3]==1?'selected="selected"':NULL?>>开启</option>
<option value="0" <?php echo $func[3]==0?'selected="selected"':NULL?>>关闭</option>
</select>
</div>
<div class="form-group">
<label><img src="images/icon/yqq.ico" class="logo">QQ音乐加速:</label><br>
<select class="form-control" name="func_4">
<option value="1" <?php echo $func[4]==1?'selected="selected"':NULL?>>开启</option>
<option value="0" <?php echo $func[4]==0?'selected="selected"':NULL?>>关闭</option>
</select>
</div>
<div class="form-group">
<label><img src="images/icon/qqgame.ico" class="logo">QQ手机游戏升级加速:</label><br>
<select class="form-control" name="func_5">
<option value="1" <?php echo $func[5]==1?'selected="selected"':NULL?>>开启</option>
<option value="0" <?php echo $func[5]==0?'selected="selected"':NULL?>>关闭</option>
</select>
</div>
<input type="submit" class="btn btn-primary btn-block" value="确认"></form><br/>
<small>温馨提示：代挂功能将会在晚上0点整系统自动进行代挂,请根据自身情况配合使用,比如：经常用手机的就无需开启手机QQ在线代挂功能。<br/>[ <a href="http://ptlogin2.qq.com/jump?uin=<?php echo $qq?>&skey=<?php echo $row['skey']?>&u1=http://id.qq.com/level2/index.html" target="_blank">点此查询我的加速</a> ]</small>
</div>
</div>
<?php
}
}else{
showmsg('登录失败，可能是密码错误或者身份失效了，请<a href="index.php?mod=login">重新登录</a>！',3);
}
include TEMPLATE_ROOT."foot.php";
?>