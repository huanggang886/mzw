<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']=base64_decode('c2hvd21zZw==');$zym_decrypt['Ã¯ÖˆÖ¯ÖÀÁÀÖ®Á®Ä¾ıÖˆÄ¾ıÃ¯ÖÃˆıÖ']=base64_decode('dmlwZnVuY19jaGVjaw==');$zym_decrypt['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']=base64_decode('ZGFkZHNsYXNoZXM='); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="ç©ºé—´åˆ·äººæ°”";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>é¦–é¡µ</a></li>
<li><a href="index.php?mod=qqlist">ï¼±ï¼±ç®¡ç†</a></li>
<li><a href="index.php?mod=list-qq&qq='.$_GET['qq'].'">'.$_GET['qq'].'</a></li>
<li class="active"><a href="#">ç©ºé—´åˆ·äººæ°”</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTggY29sLXNtLTEwIGNvbC14cy0xMiBjZW50ZXItYmxvY2siIHJvbGU9Im1haW4iPg==');if($islogin==1){if(OPEN_SHUA==0){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('å½“å‰ç«™ç‚¹æœªå¼€å¯æ­¤åŠŸèƒ½ã€‚',2);}$GLOBALS['zym_decrypt']['Ã¯ÖˆÖ¯ÖÀÁÀÖ®Á®Ä¾ıÖˆÄ¾ıÃ¯ÖÃˆıÖ'](base64_decode('cnE='));$qq=$GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($_GET['qq']);if(!$qq){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('å‚æ•°ä¸èƒ½ä¸ºç©ºï¼');}$row=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$qq}' limit 1");if($row['uid']!=$uid && $isadmin==0){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('ä½ åªèƒ½æ“ä½œè‡ªå·±çš„QQå“¦ï¼');}if(!isset($_SESSION['rqcount']))$_SESSION['rqcount']=0;if($_SESSION['rqcount']>100 && $isadmin==0){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('ä½ çš„åˆ·äººæ°”æ¬¡æ•°å·²è¶…é…é¢ï¼Œè¯·æ˜å¤©å†æ¥ï¼');}$result=$DB->query("SELECT * from ".DBQZ."_qq WHERE status='1' order by rand() limit 50");$arr=array();while($row=$DB->fetch($result)){$arr[]=$row;}$gls=$DB->count("SELECT count(*) from ".DBQZ."_qq WHERE 1");?>
<script>
$(document).ready(function() {
	$('#startcheck').click(function(){
		$('#load').html('æ£€æµ‹ä¸­');
		var self=$(this);
		if (self.attr("data-lock") === "true") return;
			else self.attr("data-lock", "true");
		var touin,num=0;
		$(".nostart").each(function(){
			var checkself=$(this),
				qid=checkself.attr('qid');
			checkself.html("<img src='images/load.gif' height=25>")
			var url="<?php echo $siteurl ?>qq/api/rq.php";
			xiha.postData(url,'uin=<?php echo $qq ?>&cell=<?php echo $cell ?>&qid='+qid, function(d) {
				if(d.code ==0){
					checkself.removeClass('nostart');
					checkself.html("<font color='green'>å·²åˆ·äººæ°”</font>");
					$('#load').html(d.msg);
					num = $('#liked').text();
					num=parseInt(num);
					num++;
					$('#liked').text(num);
				}else{
					checkself.html("<font color='red'>å¤±è´¥</font>");
				}
			});
			num++;
			//return false;
		});
		if(num<1) $('#load').html('æ²¡æœ‰å¾…åˆ·äººæ°”çš„QQ');
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
//				alert('åˆ›å»ºè¿æ¥å¤±è´¥');
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
		<p style="color:red">åˆ©ç”¨å¹³å°å†…QQå·åˆ·è‡ªå·±ç©ºé—´äººæ°”ï¼<br>æ¯æ¬¡éšæœºå–å‡º50ä¸ªQQï¼Œåˆ·æ–°æœ¬é¡µé¢å¯ä»¥æ›´æ¢ä¸€æ‰¹QQã€‚<br>åˆ·äººæ°”å‰è¯·å…ˆå°†è‡ªå·±çš„QQç©ºé—´æƒé™è®¾ä¸ºæ‰€æœ‰äººå¯è®¿é—®ï¼</p>
	</div>
</div>
	<div class="panel panel-primary">
		<div class="panel-heading w h">
			<h3 class="panel-title" align="center"><span class="btn btn-block" id="startcheck" style="color:white;">ç‚¹æ­¤å¼€å§‹åˆ·äººæ°”</span></h3>
		</div>
		<div class="panel-body box" align="left">
			<ul class="list-group" style="list-style:none;">
			
			<li class='list-group-item'>å¹³å°æ€»å…±<span id="hyall"><?php echo $gls;?><span>ä¸ªQQ,æœ‰<span id="liked"></span>ä¸ªå·²æˆåŠŸåˆ·äººæ°”ï¼</li>
			<li class='list-group-item' style="color:red;text-align: center;font-weight: bold;" id="load">ç­‰å¾…å¼€å¯</li>
			<?php
 $liked=0;foreach($arr as $k=>$row){$uin=$row['qq'];if(isset($_SESSION["r_".$cell][$uin])){if($_SESSION["r_".$cell][$uin]==1){$liked=$liked+1;echo base64_decode('PGxpIGNsYXNzPSJsaXN0LWdyb3VwLWl0ZW0iPg==').$uin.'<span style="float:right;"><font color="green">å·²åˆ·äººæ°”</font></span></li>';}else{echo base64_decode('PGxpIGNsYXNzPSJsaXN0LWdyb3VwLWl0ZW0iPg==').$uin.'<span style="float:right;" qid="'.$row['id'].'" class="nozan"><font color="red">å¤±è´¥</font></span></li>';}}else{echo base64_decode('PGxpIGNsYXNzPSJsaXN0LWdyb3VwLWl0ZW0iPg==').$uin.'<span style="float:right;" qid="'.$row['id'].'" class="nostart">æœªå¼€å¯</span></li>';}}echo "<script>$('#liked').html('{$liked}');</script>";?>
			</ul>
		</div>
	</div>

<?php
}else{$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ'](base64_decode('55m75b2V5aSx6LSl77yM5Y+v6IO95piv5a+G56CB6ZSZ6K+v5oiW6ICF6Lqr5Lu95aSx5pWI5LqG77yM6K+3PGEgaHJlZj0iaW5kZXgucGhwP21vZD1sb2dpbiI+6YeN5paw55m75b2VPC9hPu+8gQ=='),3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>