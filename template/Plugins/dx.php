<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['ïֈ֯����֮��ľ�ֈ�ľ�Î���È��']=base64_decode('dmlwZnVuY19jaGVjaw==');$zym_decrypt['���������ċ����֮�������������È']=base64_decode('ZGFkZHNsYXNoZXM=');$zym_decrypt['����֯È���Ë���å��֋��þ������']=base64_decode('c2hvd21zZw==');$zym_decrypt['������������֔�Îî֯֎���������']=base64_decode('Z2V0R1RL');$zym_decrypt['���֥���֥�����֥�����Į������į']=base64_decode('Z2V0X2N1cmw=');$zym_decrypt['��ֈ������Ô�Î֋�ֈ������������']=base64_decode('dXJsZW5jb2Rl');$zym_decrypt['�֯������֎��֮��ľ��֋�î������']=base64_decode('Y291bnQ='); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="单向好友检测";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>首页</a></li>
<li><a href="index.php?mod=qqlist">ＱＱ管理</a></li>
<li><a href="index.php?mod=list-qq&qq='.$_GET['qq'].'">'.$_GET['qq'].'</a></li>
<li class="active"><a href="#">单向好友检测</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTEyIiByb2xlPSJtYWluIj4=');if($conf['dx_api']==1)$siteurl='http://mzbapi.odata.cc/';if($islogin==1){$GLOBALS['zym_decrypt']['ïֈ֯����֮��ľ�ֈ�ľ�Î���È��']('dx');$qq=$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_GET['qq']);if(!$qq){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('参数不能为空！');}$row=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$qq}' limit 1");if($row['uid']!=$uid && $isadmin==0){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('你只能操作自己的QQ哦！');}if ($row['status2']!=1){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('SKEY已过期！');}$sid=$row['sid'];$skey=$row['skey'];$pskey=$row['pskey'];$gtk =$GLOBALS['zym_decrypt']['������������֔�Îî֯֎���������']($pskey);$cookie='pt2gguin=o0'.$qq.'; uin=o0'.$qq.'; skey='.$skey.'; p_uin=o0'.$qq.'; p_skey='.$pskey.';';if($conf['mzjc_api']==0 || !$conf['mzjc_api']){$url ='http://mobile.qzone.qq.com/friend/mfriend_list?g_tk='.$gtk.'&res_uin='.$qq.'&res_type=normal&format=json&count_per_page=10&page_index=0&page_type=0&mayknowuin=&qqmailstat=';$json =$GLOBALS['zym_decrypt']['���֥���֥�����֥�����Į������į']($url,0,1,$cookie);}else {$json =$GLOBALS['zym_decrypt']['���֥���֥�����֥�����Į������į']($allapi.'api/friend.php?qq='.$qq.'&sid='.$sid.'&skey='.$skey.'&authcode='.$authcode);}$json=mb_convert_encoding($json, "UTF-8", "UTF-8");$arr =json_decode($json, true);if (!$arr){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('好友列表获取失败！');}elseif ($arr["code"] == -3000){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('SKEY已过期！');}$arr=$arr["data"]["list"];?>
<script>
function SelectAll(chkAll) {
	var items = $('.uins');
	for (i = 0; i < items.length; i++) {
		if (items[i].id.indexOf("uins") != -1) {
			if (items[i].type == "checkbox") {
				items[i].checked = chkAll.checked;
			}
		}
	}
}
var qqcount=0;
function checkdx(touin,flag){
	touins=touin.split(",");
	$('#load').html('正在检测中，当前已完成检测'+qqcount+'个QQ');
	$.each(touins, function(i, item){
		$("#to"+item).html("<img src='images/load.gif' height=25>");
	});
	var url="<?php echo $siteurl ?>qq/api/dx.php";
	xiha.postData(url,'uin=<?php echo $qq ?>&skey=<?php echo $skey ?>&pskey=<?php echo $GLOBALS['zym_decrypt']['��ֈ������Ô�Î֋�ֈ������������']($pskey)?>&touin='+encodeURIComponent(touin), function(d) {
		if(d.code==0){
			$.each(d.data, function(i, item){
				if(item.is==0){
					var num = $('#hydx').text();
					num=parseInt(num);
					num++;
					$("#to"+item.touin).html('<span class="btn btn-large btn-block"><font color="red">单向</font></span>');
					$('.uins[value='+item.touin+']').attr('checked',true);
					$(".qqdel[uin="+item.touin+"]").addClass('isdx');
					$('#hydx').text(num);
					$("#to"+item.touin).removeClass('nocheck');
				}else if(item.is==1){
					$("#to"+item.touin).html('<span class="btn btn-large btn-block"><font color="green">正常</font></span>');
					$("#to"+item.touin).removeClass('nocheck');
				}else{
					$("#to"+item.touin).html('<span class="btn btn-large btn-block"><font color="red">失败</font></span>');
				}
				qqcount++;
			});
			if(flag!=1)
				$('#load').html('这一组检测完成，1秒后进行下一组！');
		}else if(d.code==-1){
			$('#load').html('<font color="red">SKEY已过期，请更新SKEY！</font>');
			alert('SKEY已过期，请更新SKEY！');
			return false;
		}else{
			$('#load').html('<font color="red">失败，请重试！</font>');
		}
		if(flag!=1){
			if($(".nocheck").length>0){
				touin = '';num=0;
				$(".nocheck").each(function(){
					touin+=','+$(this).attr('uin');
					num++;
					if(num>4)return false;
				});
				setTimeout(function () {
					checkdx(touin);
				}, 100);
			}else{
				$('#load').html('检测完成');
				return false;
			}
		}
	});
}
$(document).ready(function() {
	$('#startcheck2').click(function(){
		var self=$(this);
		var num=0;
		if($(".nocheck").length>0){
			var touin = '';
			$(".nocheck").each(function(){
				touin+=','+$(this).attr('uin');
				num++;
				if(num>4)return false;
			});
			checkdx(touin);
		}else{
			$('#load').html('没有待检测的');
			return false;
		}
	});
	$('#startcheck').click(function(){
		var self=$(this);
		var touin,num=0;
		$(".nocheck").each(function(){
			var checkself=$(this),
				touin=checkself.attr('uin');
			checkdx(touin,1);
			num++;
			if(num>6)return false;
		});
		if(num<1) $('#load').html('没有待检测的');
		else
			setTimeout(function () {
				$('#startcheck').click()
			}, 800);
	});
	$('#startdelete').click(function(){
		$('#load').html('删除中');
		var self=$(this);
		if (self.attr("data-lock") === "true") return;
			else self.attr("data-lock", "true");
		var touin,num=0;
		$(".isdx").each(function(){
			var checkself=$(this),
				touin=checkself.attr('uin');
			checkself.html("<img src='images/load.gif' height=25>")
			var url="<?php echo $siteurl ?>qq/api/del.php";
			xiha.postData(url,'uin=<?php echo $qq ?>&skey=<?php echo $skey ?>&pskey=<?php echo $GLOBALS['zym_decrypt']['��ֈ������Ô�Î֋�ֈ������������']($pskey)?>&touin='+touin, function(d) {
				if(d.code==0){
					num = $('#hydel').text();
					num=parseInt(num);
					num++;
					checkself.html('<span class="btn btn-large btn-block"><font color="green">成功</font></span>');
					$('#hydel').text(num);
					$('#load').html('QQ：'+touin+'删除单向好友完成');
					$('.uins[value='+touin+']').removeAttr('checked');
					checkself.removeClass('isdx');
				}else if(d.code==-1){
					checkself.html('<span class="btn btn-large btn-block"><font color="red">失败</font></span>');
					alert('SKEY已过期，请更新SKEY！');
					return false;
				}else{
					checkself.html('<span class="btn btn-large btn-block"><font color="red">失败</font></span>');
				}
			});
		});
		if(num<1) $('#load').html('没有待删除的');
		self.attr("data-lock", "false");
	});
	$('#selectdelete').click(function(){
		$('#load').html('删除中');
		var self=$(this);
		if (self.attr("data-lock") === "true") return;
			else self.attr("data-lock", "true");
		var touin,num=0;
		$("input[name=uins]").each(function(){
			if($(this).attr("checked")){
				var touin=$(this).val();
				var checkself=$(".qqdel[uin="+touin+"]");
				checkself.html("<img src='images/load.gif' height=25>")
				var url="<?php echo $siteurl ?>qq/api/del.php";
				xiha.postData(url,'uin=<?php echo $qq ?>&skey=<?php echo $skey ?>&pskey=<?php echo $GLOBALS['zym_decrypt']['��ֈ������Ô�Î֋�ֈ������������']($pskey)?>&touin='+touin, function(d) {
					if(d.code==0){
						num = $('#hydel').text();
						num=parseInt(num);
						num++;
						checkself.html('<span class="btn btn-large btn-block"><font color="green">成功</font></span>');
						$('#hydel').text(num);
						$('#load').html('QQ：'+touin+'删除单向好友完成');
						$('.uins[value='+touin+']').removeAttr('checked');
						checkself.removeClass('isdx');
					}else if(d.code==-1){
						checkself.html('<span class="btn btn-large btn-block"><font color="red">失败</font></span>');
						alert('SKEY已过期，请更新SKEY！');
						return false;
					}else{
						checkself.html('<span class="btn btn-large btn-block"><font color="red">失败</font></span>');
					}
				});
			}
		});
		if(num<1) $('#load').html('没有待删除的');
		self.attr("data-lock", "false");
	});
	$('.recheck').click(function(){
		var self=$(this),
			touin=self.attr('uin');
		checkdx(touin,1);
	});
	$('.qqdel').click(function(){
		var self=$(this),
			touin=self.attr('uin');
		var checkself=$(this);
		checkself.html("<img src='images/load.gif' height=25>")
		var url="<?php echo $siteurl ?>qq/api/del.php";
		xiha.postData(url,'uin=<?php echo $qq ?>&skey=<?php echo $skey ?>&pskey=<?php echo $GLOBALS['zym_decrypt']['��ֈ������Ô�Î֋�ֈ������������']($pskey)?>&touin='+touin, function(d) {
			if(d.code==0){
				num = $('#hydel').text();
				num=parseInt(num);
				num++;
				checkself.html('<span class="btn btn-large btn-block"><font color="green">成功</font></span>');
				$('#hydel').text(num);
				checkself.removeClass('isdx');
			}else if(d.code==-1){
				checkself.html('<span class="btn btn-large btn-block"><font color="red">失败</font></span>');
				alert('SKEY已过期，请更新SKEY！');
				return false;
			}else{
				checkself.html('<span class="btn btn-large btn-block"><font color="red">失败</font></span>');
			}
		});
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
			success: function(data,status) {
				if (callback == null) {
					return;
				}
				callback(data);
			},
			error: function(error) {
				//alert('创建连接失败');
			}
		});
	}
}
</script>
<div class="panel panel-primary">
	<div class="panel-heading w h">
		<h3 class="panel-title" align="center">使用说明</h3>
	</div>
	<div class="panel-body box" align="left">
		<p style="color:red">单项检测，不一定完全正确！只做参考<br>
		如果检测出现失败，则点击下失败的QQ，即可重新检测！
		</p>
	</div>
</div>
<div class="panel panel-primary checkbtn">
	<div class="panel-body">
		<center><span class="btn btn-large btn-success btn-block" id="<?php echo $conf['dxjc']==1?'startcheck':'startcheck2'?>">点此开始单项检测</span>
		<p id="load"></p></center>
	</div>
</div>
<div class="panel panel-warning">
	<div class="panel-heading">
		<div class="panel-title">
			<div class="input-group" style="padding:8px 0;">
				<div class="input-group-addon btn">全选<input type="checkbox" onclick="SelectAll(this)" /></div>
				<div class="input-group-addon btn" id="selectdelete">删除选择好友</div>
				<div class="input-group-addon btn" id="startdelete">删除所有单向好友</div>
			</div>
		</div>
	</div>
</div>

<div class="panel panel-primary">
	<table class="table table-bordered box">
		<tbody>
			<tr>
			<td align="center"><span style="color:silver;"><b>QQ</b></span></td>
			<td align="center"><span style="color:silver;"><b>昵称</b></span></td>
			<td align="center"><span style="color:silver;"><b>结果</b></span></td>
			<td align="center"><span style="color:silver;"><b>删除</b></span></td>
			</tr>
			<?php
 echo '<tr><td colspan="4" align="center">总共<span id="hyall">'.$GLOBALS['zym_decrypt']['�֯������֎��֮��ľ��֋�î������']($arr).'<span>个好友,其中<span id="hydx">0</span>个单项，已删除<span id="hydel">0</span>个！</td></tr>';foreach($arr as $row){echo '<tr><td uin="'.$row['uin'].'"><input name="uins" type="checkbox" id="uins" class="uins" value="'.$row['uin'].'"><a href="tencent://message/?uin='.$row['uin'].'&amp;Site=授权平台&amp;Menu=yes">'.$row['uin'].'</a></td><td>'.$row['remark'].'</td><td id="to'.$row['uin'].'" uin="'.$row['uin'].'" class="nocheck recheck" align="center"><span class="btn btn-large btn-block btn-primary">检测</span></td><td uin="'.$row['uin'].'" class="qqdel" align="center"><span class="btn btn-large btn-block btn-danger">删除</span></td></tr>';}?>
		</tbody>
	</table>
</div>

<?php
}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('55m75b2V5aSx6LSl77yM5Y+v6IO95piv5a+G56CB6ZSZ6K+v5oiW6ICF6Lqr5Lu95aSx5pWI5LqG77yM6K+3PGEgaHJlZj0iaW5kZXgucGhwP21vZD1sb2dpbiI+6YeN5paw55m75b2VPC9hPu+8gQ=='),3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>