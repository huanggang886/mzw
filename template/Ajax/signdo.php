<?php global $zym_decrypt;$zym_decrypt['‹®ÖÖ¾À‹Äıı¾¥¯ÃÃÄ®À¯Á‹¥¯¥ÃÖˆ®¾‹']=base64_decode('ZXJyb3JfcmVwb3J0aW5n');$zym_decrypt['Ö®¾ıÃÃÄ‹ÖÁÀ”ÄˆÄÃˆ®Á”¥Á¥ÃÀÖÖÃÖÖı']=base64_decode('c2VyaWFsaXpl');$zym_decrypt['ÄÄ¥¾À¥À‹¯ÁııÖ¥®À‹‹ˆ¥¯ıÖÄÖ¯Ä¾Áı”']=base64_decode('c2lnbmpvYl9kZWNvZGU='); ?>
<?php
$GLOBALS['zym_decrypt']['‹®ÖÖ¾À‹Äıı¾¥¯ÃÃÄ®À¯Á‹¥¯¥ÃÖˆ®¾‹'](0);$type=$_GET['type'];$jobid=$_GET['jobid'];$page=$_GET['page'];$data=$GLOBALS['zym_decrypt']['Ö®¾ıÃÃÄ‹ÖÁÀ”ÄˆÄÃˆ®Á”¥Á¥ÃÀÖÖÃÖÖı']($_POST);$row=$GLOBALS['zym_decrypt']['ÄÄ¥¾À¥À‹¯ÁııÖ¥®À‹‹ˆ¥¯ıÖÄÖ¯Ä¾Áı”']($type,$data);$url=$row['url'];?>
<div class="panel panel-primary">
	<div class="panel-heading bk-bg-primary">
		<h6><i class="fa fa-indent red"></i><span class="break"></span>ç­¾åˆ°ç»“æœ</h6>
		<div class="panel-actions">
			<a href="#" onclick="showlist('signtask',1)" class="btn-close"><i class="fa fa-times black"></i></a>
		</div>
	</div>
	<div class="panel-body">
<div id="load"><img src="images/load.gif" height="25">æ­£åœ¨åŠ è½½...</div>
<iframe src="<?php echo $url;?>" frameborder="0" scrolling="auto" seamless="seamless" width="100%"  onload="$('#load').hide();" name="signresult"></iframe>
<p><button type="button" class="btn btn-primary btn-block" id="signjob_add">æ·»åŠ åˆ°ä»»åŠ¡åˆ—è¡¨</button>
<button type="button" class="btn btn-info btn-block" onclick="window.open(document.all.signresult.src,'signresult','')">ç‚¹æ­¤é‡è¯•</button>
<button type="button" class="btn btn-default btn-block" id="back" onclick="signjob_edit('<?php echo $type?>')">è¿”å›é‡å¡«</button></p>
</div>
</div>
<script>
$(document).ready(function(){
$('#signjob_add').click(function()
{
	$("#signjob_add").val('loading');
	ajax.post("ajax.php?mod=signjob&act=add&type=<?php echo $type?>&jobid=<?php echo $jobid?>",
	{
		data:'<?php echo $data?>'
	},"json",function(arr,status){
		if(arr.code==1){
			alert(arr.msg);
			showlist('signtask',<?php echo $page?>);
		}else{
			alert(arr.msg);
		}
	});
});
});
</script>