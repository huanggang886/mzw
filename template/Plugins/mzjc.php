<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['ïֈ֯����֮��ľ�ֈ�ľ�Î���È��']=base64_decode('dmlwZnVuY19jaGVjaw==');$zym_decrypt['���������ċ����֮�������������È']=base64_decode('ZGFkZHNsYXNoZXM=');$zym_decrypt['����֯È���Ë���å��֋��þ������']=base64_decode('c2hvd21zZw==');$zym_decrypt['������������֔�Îî֯֎���������']=base64_decode('Z2V0R1RL');$zym_decrypt['���֥���֥�����֥�����Į������į']=base64_decode('Z2V0X2N1cmw=');$zym_decrypt['�����������į��Ĕ�֔������������']=base64_decode('YXJyYXlfa2V5X2V4aXN0cw==');$zym_decrypt['��ֈ������Ô�Î֋�ֈ������������']=base64_decode('dXJsZW5jb2Rl');$zym_decrypt['�������������Į���Ô�����֋�Ĕ��']=base64_decode('cHJlZ19tYXRjaA==');$zym_decrypt['�֯������֎��֮��ľ��֋�î������']=base64_decode('Y291bnQ=');$zym_decrypt['����֮�����ĥ����Ď����֔���֥��']=base64_decode('YmFzZTY0X2VuY29kZQ==');$zym_decrypt['������������֯����Î���Ď��Ô���']=base64_decode('cnNvcnQ=');$zym_decrypt['���ï��ï���ÔÎ���å������ċ���']=base64_decode('cm91bmQ=');$zym_decrypt['���������þ�������֋֯����֋�֋�']=base64_decode('aXNfYXJyYXk='); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="秒赞检测";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>首页</a></li>
<li><a href="index.php?mod=qqlist">ＱＱ管理</a></li>
<li><a href="index.php?mod=list-qq&qq='.$_GET['qq'].'">'.$_GET['qq'].'</a></li>
<li class="active"><a href="#">秒赞检测</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTEyIiByb2xlPSJtYWluIj4=');if($conf['dx_api']==1)$siteurl='http://mzbapi.odata.cc/';if($islogin==1){$GLOBALS['zym_decrypt']['ïֈ֯����֮��ľ�ֈ�ľ�Î���È��']('mzjc');$qq=$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_GET['qq']);if(!$qq){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('参数不能为空！');}$row=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$qq}' limit 1");if($row['uid']!=$uid && $isadmin==0){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('你只能操作自己的QQ哦！');}if ($row['status2']!=1){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('SKEY已过期！');}$sid=$row['sid'];$skey=$row['skey'];$pskey=$row['pskey'];if($conf['mzjc_api']==0 || !$conf['mzjc_api']){$gtk =$GLOBALS['zym_decrypt']['������������֔�Îî֯֎���������']($pskey);$cookie='pt2gguin=o0'.$qq.'; uin=o0'.$qq.'; skey='.$skey.'; p_uin=o0'.$qq.'; p_skey='.$pskey.';';$url ='http://mobile.qzone.qq.com/friend/mfriend_list?g_tk='.$gtk.'&res_uin='.$qq.'&res_type=normal&format=json&count_per_page=10&page_index=0&page_type=0&mayknowuin=&qqmailstat=';$json =$GLOBALS['zym_decrypt']['���֥���֥�����֥�����Į������į']($url,0,1,$cookie);$json=mb_convert_encoding($json, "UTF-8", "UTF-8");$arr =json_decode($json, true);if (!$arr){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('好友列表获取失败！');}elseif ($arr["code"] == -3000){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('SID已过期！');}$friend=$arr["data"]["list"];$gpnames=$arr["data"]["gpnames"];foreach($gpnames as $gprow){$gpid=$gprow['gpid'];$gpname[$gpid]=$gprow['gpname'];}$gtk =$GLOBALS['zym_decrypt']['������������֔�Îî֯֎���������']($skey);$cookie='pt2gguin=o0'.$qq.'; uin=o0'.$qq.'; skey='.$skey.';';$url='http://sh.taotao.qq.com/cgi-bin/emotion_cgi_feedlist_v6?hostUin='.$qq.'&ftype=0&sort=0&pos=0&num=5&replynum=0&code_version=1&format=json&need_private_comment=1&g_tk='.$gtk;$data =$GLOBALS['zym_decrypt']['���֥���֥�����֥�����Į������į']($url,0,0,$cookie);$arr=json_decode($data,true);$qqrow=array();$qquins=array();if (@$GLOBALS['zym_decrypt']['�����������į��Ĕ�֔������������'](base64_decode('Y29kZQ=='),$arr)&& $arr['code']==0){foreach ($arr['msglist'] as $k => $row ){$url='http://users.qzone.qq.com/cgi-bin/likes/get_like_list_app?uin='.$qq.'&unikey='.$GLOBALS['zym_decrypt']['��ֈ������Ô�Î֋�ֈ������������']($row['key1']).'&begin_uin=0&query_count=200&if_first_page=1&g_tk='.$gtk;$data2 =$GLOBALS['zym_decrypt']['���֥���֥�����֥�����Į������į']($url,0,'http://user.qzone.qq.com/',$cookie);if(!$data2){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('SKEY已失效，请更新SKEY！');exit;}$GLOBALS['zym_decrypt']['�������������Į���Ô�����֋�Ĕ��'](base64_decode('L19DYWxsYmFja1woKC4qPylcKVw7L2lz'),$data2,$json);$arr2=json_decode($json[1],true);$data2=$arr2['data']['like_uin_info'];foreach ($data2 as $row2 ){$fuin=$row2['fuin'];if(isset($qqrow[$fuin])){$qqrow[$fuin]++;}else {$qqrow[$fuin]=1;$qquins[]=$fuin;}}}}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('6I635Y+W5aSx6LSl77yB'));}$mzcount=$GLOBALS['zym_decrypt']['�֯������֎��֮��ľ��֋�î������']($qqrow);$uins=$GLOBALS['zym_decrypt']['����֮�����ĥ����Ď����֔���֥��'](json_encode($qquins));foreach ($friend as $row3 ){$fuin=$row3['uin'];if(isset($qqrow[$fuin]))$list['mz']=$qqrow[$fuin];else $list['mz']=0;$list['uin']=$row3['uin'];$list['name']=$row3['nick'];if($row3['remark'])$list['remark']=$row3['remark'];else $list['remark']=$row3['nick'];$list['groupid']=$row3['groupid'];$result['friend'][]=$list;unset($list);}$GLOBALS['zym_decrypt']['������������֯����Î���Ď��Ô���']($result['friend']);$friend=$result['friend'];}else{$data =$GLOBALS['zym_decrypt']['���֥���֥�����֥�����Į������į']($allapi.'api/mzjc.php?qq='.$qq.'&skey='.$skey.'&pskey='.$pskey.'&pskey2='.$row['pskey2'].'&authcode='.$authcode);$arr=json_decode($data,true);if(@$GLOBALS['zym_decrypt']['�����������į��Ĕ�֔������������'](base64_decode('Y29kZQ=='),$arr)&& $arr['code']==0){$uins=$GLOBALS['zym_decrypt']['����֮�����ĥ����Ď����֔���֥��'](json_encode($arr['uins']));$gpnames=$arr["gpnames"];$friend=$arr['friend'];$mzcount=$arr['mzcount'];$gpname=$arr["gpname"];}elseif(@$GLOBALS['zym_decrypt']['�����������į��Ĕ�֔������������'](base64_decode('Y29kZQ=='),$arr)){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']($arr['msg']);}else {$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5LuO5a6Y5pa5QVBJ6I635Y+W5pWw5o2u5aSx6LSl77yB'));}}$fcount=$GLOBALS['zym_decrypt']['�֯������֎��֮��ľ��֋�î������']($friend);$array=array();foreach($friend as $nrow){if($nrow['mz'])$array[$nrow['groupid']]['mzcount']=$array[$nrow['groupid']]['mzcount']+1;$array[$nrow['groupid']][]=$nrow;}$friend=$array;?>
<script>
function SelectAll(chkAll,type) {
	var items = $('.uins');
	var mz;
	for (i = 0; i < items.length; i++) {
		mz=items[i].attributes["mz"].value;
		if((type==1 && mz>0) || type != 1){
			if (items[i].id.indexOf("uins") != -1) {
				if (items[i].type == "checkbox") {
					items[i].checked = chkAll.checked;
				}
			}
		}
	}
}
function SelectGpAll(gp,chkAll,type) {
	var items = $('.gpuins'+gp);
	var mz;
	for (i = 0; i < items.length; i++) {
		mz=items[i].attributes["mz"].value;
		if((type==1 && mz>0) || type != 1){
			if (items[i].id.indexOf("uins") != -1) {
				if (items[i].type == "checkbox") {
					items[i].checked = chkAll.checked;
				}
			}
		}
	}
}

$(document).ready(function(){
	$('.fenzu').click(function(){
		var self=$(this);
		if (self.attr("data-lock") === "true") return;
			else self.attr("data-lock", "true");
		self.html('移动中<img src="images/load.gif" height=22>');

		var url="<?php echo $siteurl ?>qq/api/fenzu.php";
		var fenzu=$("#gpname").val();
		var num=0;
		$("input[name=uins]").each(function(){
			if($(this)[0].checked){
				var checkself=$(this);
				var touin=checkself.val();
				var statusself=$('.status[uin='+touin+']');
				statusself.html("<img src='images/load.gif' height=25>");
				xiha.postData(url,'uin=<?php echo $qq ?>&skey=<?php echo $skey ?>&pskey=<?php echo $pskey ?>&touin='+touin+'&gpid='+fenzu, function(d) {
					if(d.code==0){
						num++;
						statusself.html('<font color="green">成功</font>');
						checkself.removeAttr('checked');
						self.html(touin+'移动完成');
					}else if(d.code==-1){
						statusself.html('<font color="red">失败</font>');
						alert('SKEY已过期，请更新SKEY！');
						return false;
					}else{
						statusself.html('<font color="red">失败</font>');
					}
				});
			}
		});
		if(num<1) self.html('没有待移动的QQ');
		else self.html('移动成功！');
		self.attr("data-lock", "false");
	});
});
var xiha={
	postData: function(url, parameter, callback, dataType, ajaxType) {
		if(!dataType) dataType='json';
		$.ajax({
			type: "POST",
			url: url,
			async: true,
			dataType: dataType,
			json: "callback",
			data: parameter,
			success: function(data) {
				if (callback == null) {
					return;
				} 
				callback(data);
			},
			error: function(error) {
				//alert('未检测到移动结果，请自己查看好友分组');
			}
		});
	}
}
</script>
<div class="panel panel-warning">
	<div class="panel-heading">
		<div class="panel-title">
			<div class="input-group" style="padding:8px 0;">
				<div class="input-group-addon">All<input type="checkbox" onclick="SelectAll(this)" />&nbsp;赞<input type="checkbox" onclick="SelectAll(this,1)" /></div>
				<div class="input-group-addon btn fenzu">移动勾选好友到</div>
				<select id="gpname" class="form-control">
				<?php
 foreach($gpnames as $row){echo '<option value="'.$row['gpid'].'">'.$row['gpname'].'</option>';}?>
				</select>
			</div>
		</div>
	</div>
</div>
<div class="panel-group" id="gpnames">
<div class="panel panel-info">
	<div class="panel-heading">
		<div class="panel-title">总共<font color="black"><?php echo $fcount?></font>个好友,其中<font color="red"><?php echo $mzcount?></font>个可能秒赞好友</div>
	</div>
</div>
<?php foreach($gpnames as $gprow){$count=$friend[$gprow['gpid']]['mzcount']?$friend[$gprow['gpid']]['mzcount']:0;?>
<div class="panel panel-success">
	<div class="panel-heading">
		<span class="right" style="color:red">[<?php echo $count?>]</span>
		<div class="panel-title" data-toggle="collapse" data-parent="#gpnames" href="#gpnames<?php echo $gprow['gpid']?>">↓&nbsp;<?php echo $gprow['gpname']?>[<?php echo $GLOBALS['zym_decrypt']['�֯������֎��֮��ľ��֋�î������']($friend[$gprow['gpid']])?>]</div>
	</div>
	<div id="gpnames<?php echo $gprow['gpid']?>" class="panel-collapse collapse">
		<div class="panel-body">
			<table class="table table-bordered" style="table-layout: fixed;">
			<tbody>
			<tr><td style="width:150px;" align="center">All<input type="checkbox" onclick="SelectGpAll(<?php echo $gprow['gpid']?>,this)"/>&nbsp;赞<input type="checkbox" onclick="SelectGpAll(<?php echo $gprow['gpid']?>,this,1)"/>&nbsp;QQ</td><td class="mzwidthtd" align="center"">昵称</td><td class="mzwidthtd hidden-xs" align="center">备注</td><td align="center">结果</td></tr>
			<?php foreach($friend[$gprow['gpid']] as $row){$bf=$row['mz']/5;$bfb=$GLOBALS['zym_decrypt']['���ï��ï���ÔÎ���å������ċ���'](($row['mz']/5)*100);if($GLOBALS['zym_decrypt']['���������þ�������֋֯����֋�֋�']($row)){echo '<tr><td><label><input name="uins" type="checkbox" class="uins gpuins'.$row['groupid'].'" id="uins" value="'.$row['uin'].'" mz="'.$row['mz'].'">'.$row['uin'].'<label></td><td class="mztd hidden-xs" title="'.$row['name'].'">'.$row['name'].'</td><td class="mztd" title="'.$row['remark'].'">'.$row['remark'].'</td><td class="mztd status" uin="'.$row['uin'].'" align="center" style="background: rgba(205, 133, 0, '.$bf.');">'.$bfb.'%</td></tr>';}}?>
			</tbody>
			</table>
		</div>
	</div>
</div>
<?php }?>
</div>

<?php
}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('55m75b2V5aSx6LSl77yM5Y+v6IO95piv5a+G56CB6ZSZ6K+v5oiW6ICF6Lqr5Lu95aSx5pWI5LqG77yM6K+3PGEgaHJlZj0iaW5kZXgucGhwP21vZD1sb2dpbiI+6YeN5paw55m75b2VPC9hPu+8gQ=='),3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>