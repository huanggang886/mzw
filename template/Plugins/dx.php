<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['Ã¯ÖˆÖ¯ÖÀÁÀÖ®Á®Ä¾ıÖˆÄ¾ıÃ¯ÖÃˆıÖ']=base64_decode('dmlwZnVuY19jaGVjaw==');$zym_decrypt['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']=base64_decode('ZGFkZHNsYXNoZXM=');$zym_decrypt['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']=base64_decode('c2hvd21zZw==');$zym_decrypt['‹ÖÀ¥ˆıı®‹ÄÀÖ”¥ÃÃ®Ö¯Ö®¯À¥®¾ÃÃ']=base64_decode('Z2V0R1RL');$zym_decrypt['”Á®Ö¥ÃÖÀÖ¥¥ÃıÁÖÖ¥ıˆˆ¥ÄÄ®”¯®ÁÁ‹Ä¯']=base64_decode('Z2V0X2N1cmw=');$zym_decrypt['ııÖˆı¥‹ˆ”Ã”¾ÃÖ‹ÃÖˆÁ¯À‹¾”À‹ı”']=base64_decode('dXJsZW5jb2Rl');$zym_decrypt['ˆÖ¯¥ÖÀ¥ÁÖˆÖÖ®‹ÖÄ¾ˆ‹Ö‹ÃÃ®ı”¾®¾®']=base64_decode('Y291bnQ='); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="å•å‘å¥½å‹æ£€æµ‹";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>é¦–é¡µ</a></li>
<li><a href="index.php?mod=qqlist">ï¼±ï¼±ç®¡ç†</a></li>
<li><a href="index.php?mod=list-qq&qq='.$_GET['qq'].'">'.$_GET['qq'].'</a></li>
<li class="active"><a href="#">å•å‘å¥½å‹æ£€æµ‹</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTEyIiByb2xlPSJtYWluIj4=');if($conf['dx_api']==1)$siteurl='http://mzbapi.odata.cc/';if($islogin==1){$GLOBALS['zym_decrypt']['Ã¯ÖˆÖ¯ÖÀÁÀÖ®Á®Ä¾ıÖˆÄ¾ıÃ¯ÖÃˆıÖ']('dx');$qq=$GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($_GET['qq']);if(!$qq){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('å‚æ•°ä¸èƒ½ä¸ºç©ºï¼');}$row=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$qq}' limit 1");if($row['uid']!=$uid && $isadmin==0){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('ä½ åªèƒ½æ“ä½œè‡ªå·±çš„QQå“¦ï¼');}if ($row['status2']!=1){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('SKEYå·²è¿‡æœŸï¼');}$sid=$row['sid'];$skey=$row['skey'];$pskey=$row['pskey'];$gtk =$GLOBALS['zym_decrypt']['‹ÖÀ¥ˆıı®‹ÄÀÖ”¥ÃÃ®Ö¯Ö®¯À¥®¾ÃÃ']($pskey);$cookie='pt2gguin=o0'.$qq.'; uin=o0'.$qq.'; skey='.$skey.'; p_uin=o0'.$qq.'; p_skey='.$pskey.';';if($conf['mzjc_api']==0 || !$conf['mzjc_api']){$url ='http://mobile.qzone.qq.com/friend/mfriend_list?g_tk='.$gtk.'&res_uin='.$qq.'&res_type=normal&format=json&count_per_page=10&page_index=0&page_type=0&mayknowuin=&qqmailstat=';$json =$GLOBALS['zym_decrypt']['”Á®Ö¥ÃÖÀÖ¥¥ÃıÁÖÖ¥ıˆˆ¥ÄÄ®”¯®ÁÁ‹Ä¯']($url,0,1,$cookie);}else {$json =$GLOBALS['zym_decrypt']['”Á®Ö¥ÃÖÀÖ¥¥ÃıÁÖÖ¥ıˆˆ¥ÄÄ®”¯®ÁÁ‹Ä¯']($allapi.'api/friend.php?qq='.$qq.'&sid='.$sid.'&skey='.$skey.'&authcode='.$authcode);}$json=mb_convert_encoding($json, "UTF-8", "UTF-8");$arr =json_decode($json, true);if (!$arr){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('å¥½å‹åˆ—è¡¨è·å–å¤±è´¥ï¼');}elseif ($arr["code"] == -3000){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('SKEYå·²è¿‡æœŸï¼');}$arr=$arr["data"]["list"];?>
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
	$('#load').html('æ­£åœ¨æ£€æµ‹ä¸­ï¼Œå½“å‰å·²å®Œæˆæ£€æµ‹'+qqcount+'ä¸ªQQ');
	$.each(touins, function(i, item){
		$("#to"+item).html("<img src='images/load.gif' height=25>");
	});
	var url="<?php echo $siteurl ?>qq/api/dx.php";
	xiha.postData(url,'uin=<?php echo $qq ?>&skey=<?php echo $skey ?>&pskey=<?php echo $GLOBALS['zym_decrypt']['ııÖˆı¥‹ˆ”Ã”¾ÃÖ‹ÃÖˆÁ¯À‹¾”À‹ı”']($pskey)?>&touin='+encodeURIComponent(touin), function(d) {
		if(d.code==0){
			$.each(d.data, function(i, item){
				if(item.is==0){
					var num = $('#hydx').text();
					num=parseInt(num);
					num++;
					$("#to"+item.touin).html('<span class="btn btn-large btn-block"><font color="red">å•å‘</font></span>');
					$('.uins[value='+item.touin+']').attr('checked',true);
					$(".qqdel[uin="+item.touin+"]").addClass('isdx');
					$('#hydx').text(num);
					$("#to"+item.touin).removeClass('nocheck');
				}else if(item.is==1){
					$("#to"+item.touin).html('<span class="btn btn-large btn-block"><font color="green">æ­£å¸¸</font></span>');
					$("#to"+item.touin).removeClass('nocheck');
				}else{
					$("#to"+item.touin).html('<span class="btn btn-large btn-block"><font color="red">å¤±è´¥</font></span>');
				}
				qqcount++;
			});
			if(flag!=1)
				$('#load').html('è¿™ä¸€ç»„æ£€æµ‹å®Œæˆï¼Œ1ç§’åè¿›è¡Œä¸‹ä¸€ç»„ï¼');
		}else if(d.code==-1){
			$('#load').html('<font color="red">SKEYå·²è¿‡æœŸï¼Œè¯·æ›´æ–°SKEYï¼</font>');
			alert('SKEYå·²è¿‡æœŸï¼Œè¯·æ›´æ–°SKEYï¼');
			return false;
		}else{
			$('#load').html('<font color="red">å¤±è´¥ï¼Œè¯·é‡è¯•ï¼</font>');
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
				$('#load').html('æ£€æµ‹å®Œæˆ');
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
			$('#load').html('æ²¡æœ‰å¾…æ£€æµ‹çš„');
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
		if(num<1) $('#load').html('æ²¡æœ‰å¾…æ£€æµ‹çš„');
		else
			setTimeout(function () {
				$('#startcheck').click()
			}, 800);
	});
	$('#startdelete').click(function(){
		$('#load').html('åˆ é™¤ä¸­');
		var self=$(this);
		if (self.attr("data-lock") === "true") return;
			else self.attr("data-lock", "true");
		var touin,num=0;
		$(".isdx").each(function(){
			var checkself=$(this),
				touin=checkself.attr('uin');
			checkself.html("<img src='images/load.gif' height=25>")
			var url="<?php echo $siteurl ?>qq/api/del.php";
			xiha.postData(url,'uin=<?php echo $qq ?>&skey=<?php echo $skey ?>&pskey=<?php echo $GLOBALS['zym_decrypt']['ııÖˆı¥‹ˆ”Ã”¾ÃÖ‹ÃÖˆÁ¯À‹¾”À‹ı”']($pskey)?>&touin='+touin, function(d) {
				if(d.code==0){
					num = $('#hydel').text();
					num=parseInt(num);
					num++;
					checkself.html('<span class="btn btn-large btn-block"><font color="green">æˆåŠŸ</font></span>');
					$('#hydel').text(num);
					$('#load').html('QQï¼š'+touin+'åˆ é™¤å•å‘å¥½å‹å®Œæˆ');
					$('.uins[value='+touin+']').removeAttr('checked');
					checkself.removeClass('isdx');
				}else if(d.code==-1){
					checkself.html('<span class="btn btn-large btn-block"><font color="red">å¤±è´¥</font></span>');
					alert('SKEYå·²è¿‡æœŸï¼Œè¯·æ›´æ–°SKEYï¼');
					return false;
				}else{
					checkself.html('<span class="btn btn-large btn-block"><font color="red">å¤±è´¥</font></span>');
				}
			});
		});
		if(num<1) $('#load').html('æ²¡æœ‰å¾…åˆ é™¤çš„');
		self.attr("data-lock", "false");
	});
	$('#selectdelete').click(function(){
		$('#load').html('åˆ é™¤ä¸­');
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
				xiha.postData(url,'uin=<?php echo $qq ?>&skey=<?php echo $skey ?>&pskey=<?php echo $GLOBALS['zym_decrypt']['ııÖˆı¥‹ˆ”Ã”¾ÃÖ‹ÃÖˆÁ¯À‹¾”À‹ı”']($pskey)?>&touin='+touin, function(d) {
					if(d.code==0){
						num = $('#hydel').text();
						num=parseInt(num);
						num++;
						checkself.html('<span class="btn btn-large btn-block"><font color="green">æˆåŠŸ</font></span>');
						$('#hydel').text(num);
						$('#load').html('QQï¼š'+touin+'åˆ é™¤å•å‘å¥½å‹å®Œæˆ');
						$('.uins[value='+touin+']').removeAttr('checked');
						checkself.removeClass('isdx');
					}else if(d.code==-1){
						checkself.html('<span class="btn btn-large btn-block"><font color="red">å¤±è´¥</font></span>');
						alert('SKEYå·²è¿‡æœŸï¼Œè¯·æ›´æ–°SKEYï¼');
						return false;
					}else{
						checkself.html('<span class="btn btn-large btn-block"><font color="red">å¤±è´¥</font></span>');
					}
				});
			}
		});
		if(num<1) $('#load').html('æ²¡æœ‰å¾…åˆ é™¤çš„');
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
		xiha.postData(url,'uin=<?php echo $qq ?>&skey=<?php echo $skey ?>&pskey=<?php echo $GLOBALS['zym_decrypt']['ııÖˆı¥‹ˆ”Ã”¾ÃÖ‹ÃÖˆÁ¯À‹¾”À‹ı”']($pskey)?>&touin='+touin, function(d) {
			if(d.code==0){
				num = $('#hydel').text();
				num=parseInt(num);
				num++;
				checkself.html('<span class="btn btn-large btn-block"><font color="green">æˆåŠŸ</font></span>');
				$('#hydel').text(num);
				checkself.removeClass('isdx');
			}else if(d.code==-1){
				checkself.html('<span class="btn btn-large btn-block"><font color="red">å¤±è´¥</font></span>');
				alert('SKEYå·²è¿‡æœŸï¼Œè¯·æ›´æ–°SKEYï¼');
				return false;
			}else{
				checkself.html('<span class="btn btn-large btn-block"><font color="red">å¤±è´¥</font></span>');
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
				//alert('åˆ›å»ºè¿æ¥å¤±è´¥');
			}
		});
	}
}
</script>
<div class="panel panel-primary">
	<div class="panel-heading w h">
		<h3 class="panel-title" align="center">ä½¿ç”¨è¯´æ˜</h3>
	</div>
	<div class="panel-body box" align="left">
		<p style="color:red">å•é¡¹æ£€æµ‹ï¼Œä¸ä¸€å®šå®Œå…¨æ­£ç¡®ï¼åªåšå‚è€ƒ<br>
		å¦‚æœæ£€æµ‹å‡ºç°å¤±è´¥ï¼Œåˆ™ç‚¹å‡»ä¸‹å¤±è´¥çš„QQï¼Œå³å¯é‡æ–°æ£€æµ‹ï¼
		</p>
	</div>
</div>
<div class="panel panel-primary checkbtn">
	<div class="panel-body">
		<center><span class="btn btn-large btn-success btn-block" id="<?php echo $conf['dxjc']==1?'startcheck':'startcheck2'?>">ç‚¹æ­¤å¼€å§‹å•é¡¹æ£€æµ‹</span>
		<p id="load"></p></center>
	</div>
</div>
<div class="panel panel-warning">
	<div class="panel-heading">
		<div class="panel-title">
			<div class="input-group" style="padding:8px 0;">
				<div class="input-group-addon btn">å…¨é€‰<input type="checkbox" onclick="SelectAll(this)" /></div>
				<div class="input-group-addon btn" id="selectdelete">åˆ é™¤é€‰æ‹©å¥½å‹</div>
				<div class="input-group-addon btn" id="startdelete">åˆ é™¤æ‰€æœ‰å•å‘å¥½å‹</div>
			</div>
		</div>
	</div>
</div>

<div class="panel panel-primary">
	<table class="table table-bordered box">
		<tbody>
			<tr>
			<td align="center"><span style="color:silver;"><b>QQ</b></span></td>
			<td align="center"><span style="color:silver;"><b>æ˜µç§°</b></span></td>
			<td align="center"><span style="color:silver;"><b>ç»“æœ</b></span></td>
			<td align="center"><span style="color:silver;"><b>åˆ é™¤</b></span></td>
			</tr>
			<?php
 echo '<tr><td colspan="4" align="center">æ€»å…±<span id="hyall">'.$GLOBALS['zym_decrypt']['ˆÖ¯¥ÖÀ¥ÁÖˆÖÖ®‹ÖÄ¾ˆ‹Ö‹ÃÃ®ı”¾®¾®']($arr).'<span>ä¸ªå¥½å‹,å…¶ä¸­<span id="hydx">0</span>ä¸ªå•é¡¹ï¼Œå·²åˆ é™¤<span id="hydel">0</span>ä¸ªï¼</td></tr>';foreach($arr as $row){echo '<tr><td uin="'.$row['uin'].'"><input name="uins" type="checkbox" id="uins" class="uins" value="'.$row['uin'].'"><a href="tencent://message/?uin='.$row['uin'].'&amp;Site=æˆæƒå¹³å°&amp;Menu=yes">'.$row['uin'].'</a></td><td>'.$row['remark'].'</td><td id="to'.$row['uin'].'" uin="'.$row['uin'].'" class="nocheck recheck" align="center"><span class="btn btn-large btn-block btn-primary">æ£€æµ‹</span></td><td uin="'.$row['uin'].'" class="qqdel" align="center"><span class="btn btn-large btn-block btn-danger">åˆ é™¤</span></td></tr>';}?>
		</tbody>
	</table>
</div>

<?php
}else{$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ'](base64_decode('55m75b2V5aSx6LSl77yM5Y+v6IO95piv5a+G56CB6ZSZ6K+v5oiW6ICF6Lqr5Lu95aSx5pWI5LqG77yM6K+3PGEgaHJlZj0iaW5kZXgucGhwP21vZD1sb2dpbiI+6YeN5paw55m75b2VPC9hPu+8gQ=='),3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>