<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['���������ċ����֮�������������È']=base64_decode('ZGFkZHNsYXNoZXM=');$zym_decrypt['����֯È���Ë���å��֋��þ������']=base64_decode('c2hvd21zZw==');$zym_decrypt['������������֔�Îî֯֎���������']=base64_decode('Z2V0R1RL');$zym_decrypt['������������î��î���þ������å�']=base64_decode('c3RyX3JlcGxhY2U=');$zym_decrypt['���ċ�ľ��־��������Ô�î֔���Ď']=base64_decode('ZXhwbG9kZQ==');$zym_decrypt['����ï�������î��Ď���֋ï����֋']=base64_decode('dGltZQ==');$zym_decrypt['���֥���֥�����֥�����Į������į']=base64_decode('Z2V0X2N1cmw=');$zym_decrypt['�����������į��Ĕ�֔������������']=base64_decode('YXJyYXlfa2V5X2V4aXN0cw==');$zym_decrypt['�Ô����־�����������������������']=base64_decode('Zmx1c2g=');$zym_decrypt['��Į�ÔĔþ�־�����������֮�����']=base64_decode('b2JfZmx1c2g='); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="批量添加好友";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>首页</a></li>
<li><a href="index.php?mod=qqlist">ＱＱ管理</a></li>
<li><a href="index.php?mod=list-qq&qq='.$_GET['qq'].'">'.$_GET['qq'].'</a></li>
<li class="active"><a href="#">批量添加好友</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLWxnLTYgY29sLW1kLTggY29sLXNtLTEwIGNvbC14cy0xMiBjZW50ZXItYmxvY2siIHJvbGU9Im1haW4iPg==');if($islogin==1){$qq=$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_GET['qq']);if(!$qq){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('参数不能为空！');}$row=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$qq}' limit 1");if($row['uid']!=$uid && $isadmin==0){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('你只能操作自己的QQ哦！');}if ($row['status2']!=1){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('SKEY已过期！');}$sid=$row['sid'];$skey=$row['skey'];?>
<div class="panel panel-primary">
	<div class="panel-heading w h">
		<h3 class="panel-title" align="center">批量添加好友</h3>
	</div>
	<div class="panel-body box" align="left">
<?php
if(isset($_POST['uins'])){$groupid=$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_POST['groupid']);echo base64_decode('PGxhYmVsPua3u+WKoOWlveWPi+e7k+aenDo8L2xhYmVsPjxicj4=');$gtk =$GLOBALS['zym_decrypt']['������������֔�Îî֯֎���������']($row['pskey']);$cookie='pt2gguin=o0'.$qq.'; uin=o0'.$qq.'; skey='.$skey.'; p_skey='.$row['pskey'].'; p_uin=o0'.$qq.';';$ua='Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36';$url='http://w.qzone.qq.com/cgi-bin/tfriend/friend_addfriend.cgi?g_tk='.$gtk;$uins =$GLOBALS['zym_decrypt']['������������î��î���þ������å�'](array("\r\n", "\r", "\n"), "[br]", $_POST['uins']);$match=$GLOBALS['zym_decrypt']['���ċ�ľ��־��������Ô�î֔���Ď']("[br]",$uins);foreach($match as $touin){if(!$touin)continue;$post='sid=0&ouin='.$touin.'&uin='.$qq.'&fupdate=1&rd=0.017492896'.$GLOBALS['zym_decrypt']['����ï�������î��Ď���֋ï����֋']().'&fuin='.$touin.'&groupId='.$groupid.'&realname=&flag=&chat=&key=&im=0&g_tk='.$gtk.'&from=9&from_source=11&format=json&qzreferrer=http://user.qzone.qq.com/'.$qq.'/myhome/friends/ofpmd';$json=$GLOBALS['zym_decrypt']['���֥���֥�����֥�����Į������į']($url,$post,'http://user.qzone.qq.com/'.$qq.'/myhome/friends/ofpmd',$cookie,0,$ua);$json=mb_convert_encoding($json, "UTF-8", "UTF-8");$arr =json_decode($json, true);if($GLOBALS['zym_decrypt']['�����������į��Ĕ�֔������������'](base64_decode('Y29kZQ=='),$arr))echo $touin.'&nbsp;'.$arr['message'].'<br/>';else echo $touin.'&nbsp;获取结果失败！<br/>';$GLOBALS['zym_decrypt']['�Ô����־�����������������������']();$GLOBALS['zym_decrypt']['��Į�ÔĔþ�־�����������֮�����']();}echo base64_decode('PGJyLz48YSBocmVmPSJpbmRleC5waHA/bW9kPWZyaWVuZCZxcT0=').$qq.'"><< 返回上一页</a>';}else{$gtk =$GLOBALS['zym_decrypt']['������������֔�Îî֯֎���������']($row['pskey']);$cookie='pt2gguin=o0'.$qq.'; uin=o0'.$qq.'; skey='.$skey.'; p_skey='.$row['pskey'].'; p_uin=o0'.$qq.';';$ua='Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36';$url='http://r.qzone.qq.com/cgi-bin/tfriend/friend_getgroupinfo.cgi?uin='.$qq.'&fuin=&rd=0.808466'.$GLOBALS['zym_decrypt']['����ï�������î��Ď���֋ï����֋']().'&fupdate=1&format=json&g_tk='.$gtk;$json=$GLOBALS['zym_decrypt']['���֥���֥�����֥�����Į������į']($url,$post,'http://user.qzone.qq.com/'.$qq.'/myhome/friends/center',$cookie,0,$ua);$json=mb_convert_encoding($json, "UTF-8", "UTF-8");$arr =json_decode($json, true);if (!$arr){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('分组列表获取失败！');}elseif ($arr["code"] == -3000){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('SKEY已过期！');}elseif ($arr["code"] != 0){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']($arr["message"],3);}?>

		<form action="index.php?mod=friend&qq=<?php echo $qq ?>" method="POST">
		<div class="form-group">
		<label>批量添加好友QQ (每行一个):</label><br>
		<textarea class="form-control" name="uins" rows="10" placeholder="此处填写QQ号，每行一个，不能有空行"></textarea>
		<label>分组:</label><br>
		<select name="groupid" class="form-control">
			<?php
 foreach($arr['data']['items'] as $row){echo '<option value="'.$row['groupId'].'">'.$row['groupId'].'_'.$row['groupname'].'</option>';}?>
			</select>
		<font color="green">一次性添加过多可能会导致访问超时。</font><br/>
		<input type="submit" class="btn btn-primary btn-block" value="确定添加">
		</div>
		</form>
<?php }?>
	</div>
</div>

<?php
}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('55m75b2V5aSx6LSl77yM5Y+v6IO95piv5a+G56CB6ZSZ6K+v5oiW6ICF6Lqr5Lu95aSx5pWI5LqG77yM6K+3PGEgaHJlZj0iaW5kZXgucGhwP21vZD1sb2dpbiI+6YeN5paw55m75b2VPC9hPu+8gQ=='),3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>