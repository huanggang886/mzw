<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']=base64_decode('c2hvd21zZw=='); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="å¾…æ‰“ç QQåˆ—è¡¨";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>é¦–é¡µ</a></li>
<li class="active"><a href="#"><i class="icon fa fa-key"></i>ååŠ©æ‰“ç </a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTEyIiByb2xlPSJtYWluIj4=');if($islogin==1){if(OPEN_DAMA==0){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('å½“å‰ç«™ç‚¹æœªå¼€å¯æ­¤åŠŸèƒ½ã€‚',2);exit;}$gls=$DB->count("SELECT count(*) from ".DBQZ."_qq WHERE status2='4'");echo base64_decode('PGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtaW5mbyI+4piF5YWx5pyJIDxmb250IGNvbG9yPSJyZWQiPg==').$gls.'</font> ä¸ªQQè´¦å·ç­‰å¾…æ‰“ç ï¼<br/>
ä½ ç›®å‰æ‹¥æœ‰çš„è™šæ‹Ÿå¸ï¼š'.$row['coin'].'</div>';echo base64_decode('CjxkaXYgaWQ9ImZ1bmMiPjxidXR0b24gaHJlZj0iIyIgY2xhc3M9ImJ0biBidG4tZGVmYXVsdCIgZGF0YS10b2dnbGU9Im1vZGFsIiBkYXRhLXRhcmdldD0iI2hlbHAiPuaJk+eggeivtOaYjjwvYnV0dG9uPjwvZGl2Pgo=');$pagesize=$conf['pagesize'];if (!isset($_GET['page'])){$page =1;$pageu =$page - 1;}else {$page =$_GET['page'];$pageu =($page - 1)* $pagesize;}?>

<div class="modal fade" align="left" id="help" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">æ‰“ç ä½¿ç”¨è¯´æ˜</h4>
      </div>
      <div class="modal-body">
åœ¨è¿™é‡Œï¼Œä½ å¯ä»¥å¸®åŠ©ç½‘ç«™é‡Œçš„å…¶å®ƒå‹å‹æ›´æ–°SID&SKEYï¼ŒåŒæ—¶ï¼Œä½ ä¹Ÿä¼šå¾—åˆ°ä¸€å®šçš„è™šæ‹Ÿå¸å¥–åŠ±ï¼<br/>
å¥–åŠ±è§„åˆ™ï¼šæ¯æˆåŠŸååŠ©æ‰“ç ä¸€æ¬¡é€ <font color="red"><?php echo $rules[5].'</font> '.$conf['coin_name'] ?>ã€‚
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
function addqq(act,qq) {
	qq = qq || 0;
	$('#func').hide();
	$('#list').html('<center><i class="fa fa-spinner fa-pulse"></i>è¯·ç¨å€™...</center>');
	ajax.get("ajax.php?mod=addqq&act="+act+"&qq="+qq, "html", function(data) {
		$('#list').html(data);
	});
}
function showlist(type,page) {
	page = page || '1';
	$('#func').show();
	$('#list').html('<center><i class="fa fa-spinner fa-pulse"></i>æ­£åœ¨åŠ è½½...</center>');
	ajax.get("ajax.php?mod=list&act="+type+"&page="+page, "html", function(data) {
		$('#list').html(data);
	});
}
$(document).ready(function(){
	$("#help").click(function(){
		htmlobj=$.ajax({url:"template/Ajax/display.php?list=11",async:false});
	$("#myDiv").html(htmlobj.responseText);
});
showlist('damalist',1);
});
</script>

<style>
.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>td,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>thead>tr>th{white-space: pre-wrap;}
</style>

<div id="list"></div>
<?php
 }else{$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('ç™»å½•å¤±è´¥ï¼Œå¯èƒ½æ˜¯å¯†ç é”™è¯¯æˆ–è€…èº«ä»½å¤±æ•ˆäº†ï¼Œè¯·<a href="index.php?mod=login">é‡æ–°ç™»å½•</a>ï¼',3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>