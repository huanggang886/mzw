<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['����֯È���Ë���å��֋��þ������']=base64_decode('c2hvd21zZw=='); ?>
<?php
if(!$GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title='邀请好友';$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>首页</a></li>
<li><a href="index.php?mod=invite"><i class="icon fa fa-cloud"></i>邀请好友</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTggY29sLXNtLTEwIGNvbC14cy0xMiBjZW50ZXItYmxvY2siIHJvbGU9Im1haW4iPg==');if($islogin==1){if(!$rules[9])exit("<script language='javascript'>alert('请管理员先到后台的币种规则设定，设置邀请注册送币！');history.go(-1);</script>");?>
<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title">邀请提示</h3></div><div class="panel-body">
您的专属推广地址：
<div class="alert alert-info"><a target="_blank" href="<?php echo $siteurl.'index.php?mod=reg&invite='.$uid;?>"><?php echo $siteurl.'index.php?mod=reg&invite='.$uid;?></a></div>
把以上链接发给您的好友、朋友圈、QQ群、贴吧邀请网友进行注册登陆使用，您将可以从中获得奖励！成功邀请注册一位用户你将获得<font color="red"><?php echo $rules[9].$conf['coin_name']?></font>的奖励！<?php echo $conf['coin_name']?>可以<a href="index.php?mod=shop&act=2">兑换成VIP和配额</a></br>
<font color="red">恶意刷邀请人数将取消所有奖励并做封号处理，谢谢配合！</font>
</div></div>

<ul class="nav nav-tabs"><li class="active"><a href="#mine" data-toggle="tab">我的邀请记录</a></li><li><a href="#daren" data-toggle="tab">推广达人排行榜</a></li></ul>
<div class="tab-content">
<div class="tab-pane fade in active" id="mine">
<div class="panel panel-info">
<div class="panel-heading"><h3 class="panel-title">我的邀请记录</h3></div>
<div class="panel-body">
<div class="list-group-item list-group-item-success"><span class="glyphicon glyphicon-user">&nbsp;总邀请人数：<?php echo $row['invite']?></span></div>
	<table class="table table-bordered" style="table-layout: fixed;">
		<tbody>
		<tr>
			<td align="center"><span style="color:silver;"><b>UID</b></span></td>
			<td align="center"><span style="color:silver;"><b>注册IP</b></span></td>
			<td align="center"><span style="color:silver;"><b>注册时间</b></span></td>
		</tr>
<?php
$rs=$DB->query("SELECT * FROM ".DBQZ."_invite WHERE uid='$uid' order by id desc limit 30");while($myrow =$DB->fetch($rs)){echo '<tr id="'.$myrow['id'].'" align="center"><td><b>'.$myrow['reguid'].'</b></td><td align="center">'.$myrow['regip'].'</td><td align="center">'.$myrow['addtime'].'</td></tr>';}?>
		</tbody>
	</table>
</div>
</div>
</div>

<div class="tab-pane fade in" id="daren">
<div class="panel panel-info">
<div class="panel-heading"><h3 class="panel-title">推广达人排行榜</h3></div>
<div class="panel-body">
<?php
$rs=$DB->query("SELECT * FROM ".DBQZ."_user WHERE invite!=0 order by invite desc limit 30");$i=0;while($myrow =$DB->fetch($rs)){$i++;echo base64_decode('PGRpdiBjbGFzcz0ibGlzdC1ncm91cC1pdGVtIGxpc3QtZ3JvdXAtaXRlbS13YXJuaW5nIj4NCgkJPHNwYW4gY2xhc3M9ImJhZGdlIj7pgoDor7fkurrmlbDvvJo=').$myrow['invite'].'人</span>
		<span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp;排名<font color="#FF0000"><b><span style="font-size:14px; margin-left:3px;">'.$i.'</span></b></font>&nbsp;'.$myrow['user'].'</span>
	</div>
	';}?>
</div>
</div>
</div>
<?php
}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('55m75b2V5aSx6LSl77yM5Y+v6IO95piv5a+G56CB6ZSZ6K+v5oiW6ICF6Lqr5Lu95aSx5pWI5LqG77yM6K+3PGEgaHJlZj0iaW5kZXgucGhwP21vZD1sb2dpbiI+6YeN5paw55m75b2VPC9hPu+8gQ=='),3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>