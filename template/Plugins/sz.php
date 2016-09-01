<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']=base64_decode('c2hvd21zZw==');$zym_decrypt['Ã¯ÖˆÖ¯ÖÀÁÀÖ®Á®Ä¾ıÖˆÄ¾ıÃ¯ÖÃˆıÖ']=base64_decode('dmlwZnVuY19jaGVjaw==');$zym_decrypt['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']=base64_decode('ZGFkZHNsYXNoZXM=');$zym_decrypt['‹ÖÀ¥ˆıı®‹ÄÀÖ”¥ÃÃ®Ö¯Ö®¯À¥®¾ÃÃ']=base64_decode('Z2V0R1RL');$zym_decrypt['”Á®Ö¥ÃÖÀÖ¥¥ÃıÁÖÖ¥ıˆˆ¥ÄÄ®”¯®ÁÁ‹Ä¯']=base64_decode('Z2V0X2N1cmw=');$zym_decrypt['®¥À¾Á¯ı¥®ÁıÄ¯ˆˆÄ””Ö”ÃÀÄÀ‹¾ııı¯Ã']=base64_decode('YXJyYXlfa2V5X2V4aXN0cw=='); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="è¯´è¯´åˆ·èµ";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>é¦–é¡µ</a></li>
<li><a href="index.php?mod=qqlist">ï¼±ï¼±ç®¡ç†</a></li>
<li><a href="index.php?mod=list-qq&qq='.$_GET['qq'].'">'.$_GET['qq'].'</a></li>
<li class="active"><a href="#">è¯´è¯´åˆ·èµ</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');if($islogin==1){if(OPEN_SHUA==0){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('å½“å‰ç«™ç‚¹æœªå¼€å¯æ­¤åŠŸèƒ½ã€‚',2);exit;}$GLOBALS['zym_decrypt']['Ã¯ÖˆÖ¯ÖÀÁÀÖ®Á®Ä¾ıÖˆÄ¾ıÃ¯ÖÃˆıÖ'](base64_decode('c3o='));$qq=$GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($_GET['qq']);if(!$qq){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('å‚æ•°ä¸èƒ½ä¸ºç©ºï¼');exit();}$row=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$qq}' limit 1");if($row['uid']!=$uid && $isadmin==0){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('ä½ åªèƒ½æ“ä½œè‡ªå·±çš„QQå“¦ï¼');exit();}if(!isset($_SESSION['szcount']))$_SESSION['szcount']=0;if($_SESSION['szcount']>100 && $isadmin==0){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('ä½ çš„åˆ·èµæ¬¡æ•°å·²è¶…é…é¢ï¼Œè¯·æ˜å¤©å†æ¥ï¼');exit();}$skey=$row['skey'];if($conf['mzjc_api']==0 || !$conf['mzjc_api']){$gtk =$GLOBALS['zym_decrypt']['‹ÖÀ¥ˆıı®‹ÄÀÖ”¥ÃÃ®Ö¯Ö®¯À¥®¾ÃÃ']($skey);$cookie="uin=o0" . $qq . "; skey=" . $skey . ";";$url='http://sh.taotao.qq.com/cgi-bin/emotion_cgi_feedlist_v6?hostUin='.$qq.'&ftype=0&sort=0&pos=0&num=5&replynum=0&code_version=1&format=json&need_private_comment=1&g_tk='.$gtk;$json =$GLOBALS['zym_decrypt']['”Á®Ö¥ÃÖÀÖ¥¥ÃıÁÖÖ¥ıˆˆ¥ÄÄ®”¯®ÁÁ‹Ä¯']($url,0,0,$cookie);}else{$json =$GLOBALS['zym_decrypt']['”Á®Ö¥ÃÖÀÖ¥¥ÃıÁÖÖ¥ıˆˆ¥ÄÄ®”¯®ÁÁ‹Ä¯']($allapi.'api/shuo.php?qq='.$qq.'&skey='.$skey.'&authcode='.$authcode);}$json=mb_convert_encoding($json, "UTF-8", "UTF-8");$arr=json_decode($json,true);if (@$GLOBALS['zym_decrypt']['®¥À¾Á¯ı¥®ÁıÄ¯ˆˆÄ””Ö”ÃÀÄÀ‹¾ııı¯Ã'](base64_decode('Y29kZQ=='),$arr)&& $arr['code']==0){$shuolist=$arr['msglist'];}else{$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ'](base64_decode('6I635Y+W6K+06K+05YiX6KGo5aSx6LSl77yB'));exit();}?>
<script>
function showlist(id) {
	$('#szcontrol').html('<center><i class="fa fa-spinner fa-pulse"></i>æ­£åœ¨åŠ è½½...</center>');
	ajax.get("ajax.php?mod=sz&shuoid="+id+"&qq=<?php echo $qq?>", "html", function(data) {
		$('#szcontrol').html(data);
	});
}
$(document).ready(function() {
	$('#startcheck').click(function(){
		$('#load').html('æ£€æµ‹ä¸­');
		var self=$(this);
		var shuoid=$("#shuoid").val();
		if(shuoid==''){
			alert('è¯´è¯´IDä¸èƒ½ä¸ºç©ºï¼Œè¯·å…ˆé€‰æ‹©ä¸€æ¡è¯´è¯´');
			return false;
		}
		showlist(shuoid);
	});
	$('.cbx').click(function(){
		var shuoid=$(this).val();
		$('#shuoid').val(shuoid);
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
				alert('åˆ›å»ºè¿æ¥å¤±è´¥');
			}
		});
	}
}
</script>
<div class="col-md-6 col-sm-12">
<div class="panel panel-primary">
	<div class="panel-heading w h">
		<h3 class="panel-title" align="center">ä½¿ç”¨è¯´æ˜</h3>
	</div>
	<div class="panel-body box" align="left">
		<p style="color:red">é€‰æ‹©è¦åˆ·çš„è¯´è¯´ï¼Œç„¶åç‚¹å‡»å¼€å§‹åˆ·èµå³å¯ã€‚<br>åˆ·ä¹‹å‰è¯·å…ˆè®¾ç½®ä½ çš„QQç©ºé—´ä¸ºæ‰€æœ‰äººå¯è®¿é—®ã€‚<br>æ¯æ¬¡éšæœºå–å‡º30ä¸ªQQï¼Œåˆ·æ–°æœ¬é¡µé¢å¯ä»¥æ›´æ¢ä¸€æ‰¹QQã€‚</p>
		<?php if($rules[8]>0 && $isadmin==0)echo '<p style="color:blue">æ¯åˆ·ä¸€æ¬¡èµæ‰£é™¤ <b>'.$rules[8].'</b> '.$conf['coin_name'].'</p>';?>
	</div>
</div>
<div class="panel panel-primary">
	<div class="panel-heading w h">
		<h3 class="panel-title" align="center">é€‰æ‹©è¦åˆ·çš„è¯´è¯´</h3>
	</div>
	<div class="panel-body box">
	<form>
		<?php foreach ($shuolist as $row ){?>
		<div class="list-group-item">
			<div class="input-group">
				<label><input type='radio' class="cbx" name="cbx" value="<?php echo $row['tid']?>"> <?php echo mb_substr($row['content'],0,32,'utf-8');?></label>
			</div>
		</div>
		<?php }?>
		<div class="panel-footer">
		<font color="blue">æœ¬ç«™åªåˆ—å‡ºå‰äº”æ¡è¯´è¯´ï¼Œå¦‚æœæƒ³åˆ·å…¶ä»–è¯´è¯´è¯·è‡ªè¡Œè·å–å…¶è¯´è¯´IDã€‚</font>
		</div>
	</form>
	</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="panel panel-primary">
	<div class="panel-heading w h">
		<h3 class="panel-title" align="center">åˆ·èµæ§åˆ¶å°</h3>
	</div>
	<div class="panel-body box" align="left">
		<div class="input-group">
		<div class="input-group-addon">è¦åˆ·çš„è¯´è¯´ID:</div>
		<input type="text" class="form-control" name="shuoid" value="<?php echo $shuoid?>" id="shuoid">
		</div>
		<button class="btn btn-block btn-warning" id="startcheck">ç‚¹æ­¤å¼€å§‹åˆ·èµ</button><br/>
		<div id='szcontrol'></div>
	</div>
</div>
</div>
<?php
}else{$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('ç™»å½•å¤±è´¥ï¼Œå¯èƒ½æ˜¯å¯†ç é”™è¯¯æˆ–è€…èº«ä»½å¤±æ•ˆäº†ï¼Œè¯·<a href="index.php?mod=login">é‡æ–°ç™»å½•</a>ï¼',3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>