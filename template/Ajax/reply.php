<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ']=base64_decode('ZGVmaW5lZA=='); ?>
<?php
if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$cell=$_GET['shuoid'];$content=$_GET['content'];$qq=$_GET['qq'];$result=$DB->query("SELECT * from ".DBQZ."_qq WHERE status2='1' order by rand() limit 10");$arr=array();while($row=$DB->fetch($result)){$arr[]=$row;}$gls=$DB->count("SELECT count(*) from ".DBQZ."_qq WHERE status2='1'");?>
<ul class="list-group" style="list-style:none;">

<li class='list-group-item alert-info'>å¹³å°æ€»å…±<span id="hyall"><?php echo $gls;?><span>ä¸ªQQ,æœ‰<span id="liked"></span>ä¸ªå·²æˆåŠŸåˆ·é˜Ÿå½¢ï¼</li>
<li class='list-group-item' style="color:red;text-align: center;font-weight: bold;" id="load">ç­‰å¾…å¼€å¯</li>
<?php
$liked=0;foreach($arr as $k=>$row){$uin=$row['qq'];if(isset($_SESSION["r_".$cell][$uin])){if($_SESSION["r_".$cell][$uin]==1){$liked=$liked+1;echo base64_decode('PGxpIGNsYXNzPSJsaXN0LWdyb3VwLWl0ZW0iPg==').$uin.'<span style="float:right;"><font color="green">å·²è¯„è®º</font></span></li>';}else{echo base64_decode('PGxpIGNsYXNzPSJsaXN0LWdyb3VwLWl0ZW0iPg==').$uin.'<span style="float:right;" qid="'.$row['id'].'" class="nozan"><font color="red">å¤±è´¥</font></span></li>';}}else{echo base64_decode('PGxpIGNsYXNzPSJsaXN0LWdyb3VwLWl0ZW0iPg==').$uin.'<span style="float:right;" qid="'.$row['id'].'" class="nostart">æœªå¼€å¯</span></li>';}}echo "<script>$('#liked').html('{$liked}');</script>";?>
</ul>
<script>
$(document).ready(function() {
	$('#load').html('æ£€æµ‹ä¸­');
	var shuoid='<?php echo $cell?>';
	var touin,num=0;
	$(".nostart").each(function(){
		var checkself=$(this),
			qid=checkself.attr('qid');
		checkself.html("<img src='images/load.gif' height=25>")
		var url="<?php echo $siteurl ?>qq/api/reply.php";
		xiha.postData(url,'uin=<?php echo $qq ?>&content=<?php echo $content ?>&cell='+shuoid+'&qid='+qid, function(d) {
			if(d.code ==0){
				checkself.removeClass('nostart');
				checkself.html("<font color='green'>å·²è¯„è®º</font>");
				$('#load').html(d.msg);
				num = $('#liked').text();
				num=parseInt(num);
				num++;
				$('#liked').text(num);
			}else if(d.code ==-2){
				checkself.html("<font color='yellow'>é¢‘ç¹</font>");
				$('#load').html(d.msg);
			}else if(d.code ==-3){
				checkself.removeClass('nostart');
				checkself.html("<font color='red'>SIDè¿‡æœŸ</font>");
				$('#load').html(d.msg);
			}else{
				checkself.html("<font color='red'>å¤±è´¥</font>");
				alert(d.msg);
				return false;
			}
		});
		num++;
		//return false;
	});
	if(num<1) $('#load').html('æ²¡æœ‰å¾…å¯è¯„è®ºçš„QQ');
});
</script>