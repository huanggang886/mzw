<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['���������ċ����֮�������������È']=base64_decode('ZGFkZHNsYXNoZXM=');$zym_decrypt['����֯È���Ë���å��֋��þ������']=base64_decode('c2hvd21zZw==');$zym_decrypt['������������֔�Îî֯֎���������']=base64_decode('Z2V0R1RL');$zym_decrypt['���֥���֥�����֥�����Į������į']=base64_decode('Z2V0X2N1cmw=');$zym_decrypt['�������������Į���Ô�����֋�Ĕ��']=base64_decode('cHJlZ19tYXRjaA=='); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="提取群成员";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>首页</a></li>
<li><a href="index.php?mod=qqlist">ＱＱ管理</a></li>
<li><a href="index.php?mod=list-qq&qq='.$_GET['qq'].'">'.$_GET['qq'].'</a></li>
<li class="active"><a href="#">提取群成员</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTggY29sLXNtLTEwIGNvbC14cy0xMiBjZW50ZXItYmxvY2siIHJvbGU9Im1haW4iPg==');if($islogin==1){$qq=$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_GET['qq']);if(!$qq){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('参数不能为空！');}$row=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$qq}' limit 1");if($row['uid']!=$uid && $isadmin==0){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('你只能操作自己的QQ哦！');}if ($row['status2']!=1){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('SKEY已过期！');}$sid=$row['sid'];$skey=$row['skey'];$gtk =$GLOBALS['zym_decrypt']['������������֔�Îî֯֎���������']($skey);$cookie="uin=o0" . $qq . "; skey=" . $skey . ";";$ua='Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36';$url='http://qun.qzone.qq.com/cgi-bin/get_group_list?callbackFun=_GetGroupPortal&uin='.$qq.'&ua=Mozilla%2F5.0%20(Windows%20NT%206.3%3B%20WOW64%3B%20rv%3A25.0)%20Gecko%2F20100101%20Firefox%2F25.0&random=0.946546206453239&g_tk='.$gtk;$data =$GLOBALS['zym_decrypt']['���֥���֥�����֥�����Į������į']($url,0,'http://qun.qzone.qq.com/group',$cookie,0,$ua);$GLOBALS['zym_decrypt']['�������������Į���Ô�����֋�Ĕ��'](base64_decode('L19HZXRHcm91cFBvcnRhbF9DYWxsYmFja1woKC4qPylcKVw7L2lz'),$data,$json);$arr =json_decode($json[1],true);if (!$arr){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('QQ群列表获取失败！');}elseif ($arr["code"] == -3000){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('SKEY已过期！');}if(isset($_GET['groupid'])){$groupid=$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_GET['groupid']);$gtk =$GLOBALS['zym_decrypt']['������������֔�Îî֯֎���������']($skey);$cookie="uin=o0" . $qq . "; skey=" . $skey . ";";$ua='Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36';$url='http://qun.qzone.qq.com/cgi-bin/get_group_member?callbackFun=_GroupMember&uin='.$qq.'&groupid='.$groupid.'&neednum=1&r=0.973228807809788&g_tk='.$gtk.'&ua=Mozilla%2F5.0%20(Windows%20NT%206.3%3B%20WOW64%3B%20rv%3A25.0)%20Gecko%2F20100101%20Firefox%2F25.0&ptlang=2052';$data =$GLOBALS['zym_decrypt']['���֥���֥�����֥�����Į������į']($url,0,'http://qun.qzone.qq.com/group',$cookie,0,$ua);$GLOBALS['zym_decrypt']['�������������Į���Ô�����֋�Ĕ��'](base64_decode('L19Hcm91cE1lbWJlcl9DYWxsYmFja1woKC4qPylcKVw7L2lz'),$data,$json);$arrs =json_decode($json[1],true);if (!$arrs){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('QQ群成员获取失败！');}elseif ($arrs["code"] == -3000){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('SKEY已过期！');}}?>
<div class="panel panel-primary">
	<div class="panel-heading w h">
		<h3 class="panel-title" align="center">提取群成员</h3>
	</div>
	<div class="panel-body box" align="left">
		<form action="index.php" method="GET">
		<div class="form-group">
		<div class="input-group"><div class="input-group-addon">QQ群列表</div>
		<input type="hidden" name="mod" value="group">
		<input type="hidden" name="qq" value="<?php echo $qq ?>">
		<select name="groupid" class="form-control">
			<?php
 foreach($arr['data']['group'] as $row){echo '<option value="'.$row['groupid'].'" '.($groupid==$row['groupid']?'selected="selected"':NULL).'>'.$row['groupid'].'_'.$row['groupname'].'</option>';}?>
			</select>
		</div></div>
		<div class="form-group">
		<input type="submit" class="btn btn-primary btn-block" value="提取群成员">
		</div>
		</form>
	</div>
</div>
<?php if($arrs){?>
<div class="panel panel-success">
	<div class="panel-heading w h">
		<h3 class="panel-title" align="center">群成员列表</h3>
	</div>
	<table class="table table-bordered box">
		<tbody>
			<tr>
			<td><span style="color:silver;"><b>ＱＱ</b></span></td>
			<td><span style="color:silver;"><b>昵称</b></span></td>
			</tr>
			<?php
 echo '<tr><td colspan="2" align="center"><a href="index.php?mod=output&qq='.$qq.'&groupid='.$groupid.'&type=group">导出群成员列表为TXT</a></td></tr>';foreach($arrs['data']['item'] as $row){echo '<tr><td uin="'.$row['uin'].'"><a href="tencent://message/?uin='.$row['uin'].'&amp;Site=&amp;Menu=yes">'.$row['uin'].'</a></td><td>'.$row['nick'].'</td></tr>';}?>
		</tbody>
	</table>
</div>
<?php
}}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('55m75b2V5aSx6LSl77yM5Y+v6IO95piv5a+G56CB6ZSZ6K+v5oiW6ICF6Lqr5Lu95aSx5pWI5LqG77yM6K+3PGEgaHJlZj0iaW5kZXgucGhwP21vZD1sb2dpbiI+6YeN5paw55m75b2VPC9hPu+8gQ=='),3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>