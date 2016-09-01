<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['¥¯”¯ıÄÖıÃ””ÀÖÄ®ÄˆıÖÀÁ¾Ã®Ã®ÄÁÀ']=base64_decode('cGhvbmVfY2hlY2s=');$zym_decrypt['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']=base64_decode('c2hvd21zZw=='); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="è‡ªåŠ¨ç­¾åˆ°ä»»åŠ¡åˆ—è¡¨";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>é¦–é¡µ</a></li>
<li class="active"><a href="#"><i class="icon fa fa-list-alt"></i>è‡ªåŠ¨ç­¾åˆ°</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTEyIiByb2xlPSJtYWluIj4=');if($islogin==1){if($conf['active']!=0)$GLOBALS['zym_decrypt']['¥¯”¯ıÄÖıÃ””ÀÖÄ®ÄˆıÖÀÁ¾Ã®Ã®ÄÁÀ']();if(OPEN_SIGN==0){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ'](base64_decode('5b2T5YmN56uZ54K55pyq5byA5ZCv5q2k5Yqf6IO944CC'),2);exit;}$gls=$DB->count("SELECT count(*) from ".DBQZ."_signjob WHERE uid='{$uid}'");if($row['signjobnum']!=$gls)$DB->query("UPDATE ".DBQZ."_user SET signjobnum= '$gls' WHERE userid = '$uid'");echo base64_decode('PGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtaW5mbyI+4piF5L2g5oC75YWx5bu656uL5LqG').$gls.'ä¸ªè‡ªåŠ¨ç­¾åˆ°ä»»åŠ¡ï¼';if($isvip==0 && $rules[3]!=0 && $isadmin==0)echo '<br/>â˜†ç½‘ç«™ç­¾åˆ°ç±»ä»»åŠ¡æ‰£å¸æ ‡å‡†ï¼š<font color="red">æ¯æ¡ä»»åŠ¡æ¯å¤©æ”¶å– '.$rules[3].' '.$conf['coin_name'].'</font> 
[<a href="index.php?mod=shop&kind=1">å¼€é€šVIP</a>]åå¯ä»¥å…å¸';echo base64_decode('PC9kaXY+');echo base64_decode('PGRpdiBpZD0ic2lnbmZ1bmMiPg==');echo base64_decode('CjxidXR0b24gaHJlZj0iIyIgZGF0YS10b2dnbGU9Im1vZGFsIiBkYXRhLXRhcmdldD0iI3NpZ25lciIgY2xhc3M9ImJ0biBidG4tc3VjY2VzcyBidG4tbGciIGlkPSJxZGxpc3QiPua3u+WKoOe9keermeetvuWIsOS7u+WKoTwvYnV0dG9uPgo8c3BhbiBjbGFzcz0iZHJvcGRvd24iPgogICA8YnV0dG9uIGhyZWY9IiMiIGNsYXNzPSJidG4gYnRuLWluZm8iIGRhdGEtdG9nZ2xlPSJkcm9wZG93biIgcm9sZT0iYnV0dG9uIj7ku7vliqHmk43kvZwgPHNwYW4gY2xhc3M9ImNhcmV0Ij48L3NwYW4+PC9idXR0b24+CiAgIDx1bCBjbGFzcz0iZHJvcGRvd24tbWVudSIgcm9sZT0ibWVudSI+CiAgICA8bGkgcm9sZT0icHJlc2VudGF0aW9uIj48YSByb2xlPSJtZW51aXRlbSIgaHJlZj0iaW5kZXgucGhwP21vZD1zZXQmbXk9cWtxZA==').$link.'">æ¸…ç©ºæ‰€æœ‰</a></li>
   </ul>
</span>
';echo base64_decode('PC9kaXY+');?>

<script>
var $_GET = (function(){
    var url = window.document.location.href.toString();
    var u = url.split("?");
    if(typeof(u[1]) == "string"){
        u = u[1].split("&");
        var get = {};
        for(var i in u){
            var j = u[i].split("=");
            get[j[0]] = j[1];
        }
        return get;
    } else {
        return {};
    }
})();
function showlist(type,page) {
	page = page || '1';
	$('#signfunc').show();
	$('#list').html('<center><i class="fa fa-spinner fa-pulse"></i>æ­£åœ¨åŠ è½½...</center>');
	if($_GET['userid'])
		ajax.get("ajax.php?mod=list&act="+type+"&page="+page+"&userid="+$_GET['userid'], "html", function(data) {
			$('#list').html(data);
		});
	else
		ajax.get("ajax.php?mod=list&act="+type+"&page="+page, "html", function(data) {
			$('#list').html(data);
		});
}
function signjob_edit(type,jobid,page) {
	jobid = jobid || 0;
	page = page || 1;
	$('#signer').modal('hide');
	$('#signfunc').hide();
	$('#list').html('<center><i class="fa fa-spinner fa-pulse"></i>è¯·ç¨å€™...</center>');
	ajax.get("ajax.php?mod=signjob&act=edit&type="+type+"&jobid="+jobid+"&page="+page, "html", function(data) {
		$('#list').html(data);
	});
}
function job_edit(act,jobid,table,page) {
	page = page || 1;
	if(act=='del') {
		if(!confirm('ä½ ç¡®å®è¦åˆ é™¤æ­¤ä»»åŠ¡å—ï¼Ÿ'))return false;
	}
	ajax.get("ajax.php?mod=edit&act="+act+"&jobid="+jobid+"&table="+table, "json", function(arr) {
		if(arr.code==1){
			alert(arr.msg);
			showlist('signtask',page);
		}else{
			alert(arr.msg);
		}
	});
}
$(document).ready(function(){
$("#qdlist").click(function(){
  htmlobj=$.ajax({url:"template/Ajax/display.php?list=5",async:false});
  $("#myDiv").html(htmlobj.responseText);
});
showlist('signtask',1);
});
function showresult(surl) {
  htmlobj=$.ajax({url:"template/Ajax/display.php?list=8&url="+surl,async:false});
  $("#myDiv").html(htmlobj.responseText);
}
</script>

<style>
.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>td,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>thead>tr>th{white-space: pre-wrap;}
</style>
<div id="list">
</div>
<?php
 }else{$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ'](base64_decode('55m75b2V5aSx6LSl77yM5Y+v6IO95piv5a+G56CB6ZSZ6K+v5oiW6ICF6Lqr5Lu95aSx5pWI5LqG77yM6K+3PGEgaHJlZj0iaW5kZXgucGhwP21vZD1sb2dpbiI+6YeN5paw55m75b2VPC9hPu+8gQ=='),3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>