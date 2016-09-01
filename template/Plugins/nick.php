<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']=base64_decode('ZGFkZHNsYXNoZXM=');$zym_decrypt['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']=base64_decode('c2hvd21zZw=='); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="QQç™¾å˜æ˜µç§°";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>é¦–é¡µ</a></li>
<li><a href="index.php?mod=qqlist">ï¼±ï¼±ç®¡ç†</a></li>
<li><a href="index.php?mod=list-qq&qq='.$_GET['qq'].'">'.$_GET['qq'].'</a></li>
<li class="active"><a href="#">QQç™¾å˜æ˜µç§°</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTggY29sLXNtLTEwIGNvbC14cy0xMiBjZW50ZXItYmxvY2siIHJvbGU9Im1haW4iPg==');if($islogin==1){$qq=$GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($_GET['qq']);if(!$qq){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('å‚æ•°ä¸èƒ½ä¸ºç©ºï¼');}$row=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$qq}' limit 1");if($row['uid']!=$uid && $isadmin==0){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('ä½ åªèƒ½æ“ä½œè‡ªå·±çš„QQå“¦ï¼');}if ($row['status2']!=1){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('SKEYå·²è¿‡æœŸï¼');}if(isset($_SESSION['nick_num']))unset($_SESSION['nick_num']);$skey=$row['skey'];?>
<script>
$(document).ready(function(){
	var i=0;
	$('#start').click(function(){
		if (!$('#content').val()){
		return alert('æ˜µç§°ä¸èƒ½ä¸ºç©ºï¼');
		}
		var self=$(this);
		self.html('è‡ªåŠ¨æ¢æ˜µç§°ä¸­<img src="./images/loading.gif" style="height:15px;">');
		var url="ajax.php?mod=nick&qq=<?php echo $qq?>&content="+encodeURIComponent($('#content').val());
		ajax.get(url, 'json', function(arr) {
			if(arr.code==1){
				i++;
				$('#result').html('ç¬¬'+i+'æ¬¡æ›´æ¢æ˜µç§°æˆåŠŸï¼Œå½“å‰æ˜µç§°ï¼š'+arr.nick);
				setTimeout(function () {
				$('#start').click()
				}, 1000);
			}else{
				$('#result').html('æ›´æ¢æ˜µç§°å¤±è´¥ï¼ŒåŸå› ï¼š'+arr.msg);
			}
		});
	});
});
</script>
<div class="panel panel-primary">
	<div class="panel-heading w h">
		<h3 class="panel-title" align="center">QQç™¾å˜æ˜µç§°</h3>
	</div>
	<div class="panel-body box" align="left">
		<div class="form-group">
		<div class="input-group"><div class="input-group-addon">ï¼±ï¼±</div>
			<input type="text" class="form-control" id="qq" value="<?php echo $qq?>" disabled>
		</div></div>
		<div class="form-group">
		<div class="input-group"><div class="input-group-addon">æ˜µç§°</div>
			<input type="text" class="form-control" id="content" value="" placeholder="å¤šä¸ªæ˜µç§°ä¹‹å‰ç”¨|éš”å¼€">
		</div></div>
		<button class="btn btn-primary btn-block" id="start">å¼€å§‹æ¢æ˜µç§°</button><br/>
		<p id="result" style="text-align:center;"></p>
	</div>
</div>
<div class="panel panel-primary">
	<div class="panel-heading w h">
		<h3 class="panel-title" align="center">ä½¿ç”¨è¯´æ˜</h3>
	</div>
	<div class="panel-body box" align="left">
		<p style="color:blue">éœ€è¦ä¿æŒæ­¤é¡µé¢å¼€å¯çŠ¶æ€ï¼Œæ‰èƒ½è‡ªåŠ¨æ›´æ¢æ˜µç§°ã€‚æ›´æ¢æ˜µç§°çš„é¢‘ç‡æ˜¯1ç§’ï¼Œå¯èƒ½ä¼šå› ä¸ºç½‘ç»œåŸå› æœ‰æ‰€å»¶è¿Ÿã€‚åˆ·æ–°æˆ–å…³é—­æœ¬é¡µé¢å³å¯åœæ­¢è‡ªåŠ¨æ›´æ¢ã€‚
		</p>
	</div>
</div>
<?php
}else{$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('ç™»å½•å¤±è´¥ï¼Œå¯èƒ½æ˜¯å¯†ç é”™è¯¯æˆ–è€…èº«ä»½å¤±æ•ˆäº†ï¼Œè¯·<a href="index.php?mod=login">é‡æ–°ç™»å½•</a>ï¼',3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>