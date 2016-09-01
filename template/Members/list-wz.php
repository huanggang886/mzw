<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['¥¯”¯ıÄÖıÃ””ÀÖÄ®ÄˆıÖÀÁ¾Ã®Ã®ÄÁÀ']=base64_decode('cGhvbmVfY2hlY2s=');$zym_decrypt['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']=base64_decode('c2hvd21zZw==');$zym_decrypt['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']=base64_decode('ZGFkZHNsYXNoZXM='); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="ç½‘å€ç›‘æ§ä»»åŠ¡åˆ—è¡¨";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>é¦–é¡µ</a></li>
<li class="active"><a href="#"><i class="icon fa fa-list-alt"></i>ç½‘å€ç›‘æ§</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTEyIiByb2xlPSJtYWluIj4=');if($islogin==1){if($conf['active']!=0)$GLOBALS['zym_decrypt']['¥¯”¯ıÄÖıÃ””ÀÖÄ®ÄˆıÖÀÁ¾Ã®Ã®ÄÁÀ']();if(OPEN_CRON==0){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ'](base64_decode('5b2T5YmN56uZ54K55pyq5byA5ZCv5q2k5Yqf6IO944CC'),2);exit;}$sysid=isset($_GET['sys'])?$_GET['sys']:1;if(isset($_GET['kw'])){$kw=$GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($_GET['kw']);$sql=" `url` LIKE '%{$kw}%'";$rownum='åŒ…å«'.$_GET['kw'].'çš„å…±æœ‰';$sysid=$kw;}else {$sql=" sysid='{$sysid}'";$rownum='ä½ æ€»å…±å»ºç«‹äº†';}$gls=$DB->count("SELECT count(*) from ".DBQZ."_wzjob WHERE uid='{$uid}'");if($row['wzjobnum']!=$gls)$DB->query("UPDATE ".DBQZ."_user SET wzjobnum= '$gls' WHERE userid = '$uid'");$gls=$DB->count("SELECT count(*) from ".DBQZ."_wzjob WHERE uid='{$uid}' and{$sql}");echo base64_decode('PGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtaW5mbyI+');if($conf['server_wz']>1)echo 'â˜… '.$sysname[$sysid].'å·æœåŠ¡å™¨ä»»åŠ¡åˆ—è¡¨â˜…[<a href="index.php?mod=syslist&'.$link.'">è¿”å›æœåŠ¡å™¨åˆ—è¡¨</a>]<br/>';echo base64_decode('4piFIA==').$rownum.$gls.'ä¸ªä»»åŠ¡ï¼';if($isvip==0 && $rules[2]!=0 && $isadmin==0)echo '<br/>â˜†ç½‘å€ç›‘æ§ç±»ä»»åŠ¡æ‰£å¸æ ‡å‡†ï¼š<font color="red">æ¯æ¡ä»»åŠ¡æ¯å¤©æ”¶å– '.$rules[2].' '.$conf['coin_name'].'</font> 
[<a href="index.php?mod=shop&kind=1">å¼€é€šVIP</a>]åå¯ä»¥å…å¸';echo base64_decode('PC9kaXY+');echo base64_decode('PGRpdiBpZD0id3pmdW5jIj4=');echo base64_decode('CjxzcGFuIGNsYXNzPSJkcm9wZG93biI+CiAgIDxidXR0b24gaHJlZj0iIyIgY2xhc3M9ImJ0biBidG4tcHJpbWFyeSIgZGF0YS10b2dnbGU9ImRyb3Bkb3duIiByb2xlPSJidXR0b24iPua3u+WKoOS7u+WKoSA8c3BhbiBjbGFzcz0iY2FyZXQiPjwvc3Bhbj48L2J1dHRvbj4KICAgPHVsIGNsYXNzPSJkcm9wZG93bi1tZW51IiByb2xlPSJtZW51Ij4KICAgIDxsaSByb2xlPSJwcmVzZW50YXRpb24iPjxhIHJvbGU9Im1lbnVpdGVtIiB0YWJpbmRleD0iLTEiIGhyZWY9IiMiIG9uY2xpY2s9Ind6am9iX2VkaXQoJ2FkZCcsMCwn').$sysid.'\')">æ·»åŠ ç½‘å€ç›‘æ§ä»»åŠ¡</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="wzjob_edit(\'bulk\',0,\''.$sysid.'\')">æ‰¹é‡æ·»åŠ ç½‘å€ä»»åŠ¡</a></li>
   </ul>
</span>
<span class="dropdown">
   <button href="#" class="btn btn-info" data-toggle="dropdown" role="button">ä»»åŠ¡æ“ä½œ <span class="caret"></span></button>
   <ul class="dropdown-menu" role="menu">
    <li role="presentation"><a role="menuitem" href="index.php?mod=output&sys='.$sysid.$link.'">å¯¼å‡ºæ‰€æœ‰</a></li>
    <li role="presentation"><a role="menuitem" href="#" onclick="wzjob_edit(\'upload\',0,\''.$sysid.'\')">æ–‡ä»¶å¯¼å…¥</a></li>
	<li role="presentation" class="divider"></li>
    <li role="presentation"><a role="menuitem" href="index.php?mod=set&my=qk&sys='.$sysid.$link.'">æ¸…ç©ºæ‰€æœ‰</a></li>
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
	$('#wzfunc').show();
	$('#list').html('<center><i class="fa fa-spinner fa-pulse"></i>æ­£åœ¨åŠ è½½...</center>');
	if($_GET['userid'])
		ajax.get("ajax.php?mod=list&act="+type+"&sysid=<?php echo $sysid ?>&page="+page+"&userid="+$_GET['userid'], "html", function(data) {
			$('#list').html(data);
		});
	else
		ajax.get("ajax.php?mod=list&act="+type+"&sysid=<?php echo $sysid ?>&page="+page, "html", function(data) {
			$('#list').html(data);
		});
}
function wzjob_edit(type,jobid,sysid,page) {
	jobid = jobid || 0;
	sysid = sysid || 1;
	page = page || 1;
	$('#wzfunc').hide();
	$('#list').html('<center><i class="fa fa-spinner fa-pulse"></i>è¯·ç¨å€™...</center>');
	ajax.get("ajax.php?mod=wzjob&act=edit&type="+type+"&sysid="+sysid+"&jobid="+jobid+"&page="+page, "html", function(data) {
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
			showlist('wztask',page);
		}else{
			alert(arr.msg);
		}
	});
}
$(document).ready(function(){
showlist('wztask',1);
});
</script>

<style>
.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>td,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>thead>tr>th{white-space: pre-wrap;}
</style>
<div id="list">
</div>

<?php
 }else{$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('ç™»å½•å¤±è´¥ï¼Œå¯èƒ½æ˜¯å¯†ç é”™è¯¯æˆ–è€…èº«ä»½å¤±æ•ˆäº†ï¼Œè¯·<a href="index.php?mod=login">é‡æ–°ç™»å½•</a>ï¼',3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>