<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['����֯È���Ë���å��֋��þ������']=base64_decode('c2hvd21zZw==');$zym_decrypt['�����Ď���Ô����ĮĈ�����îî���']=base64_decode('cGhvbmVfY2hlY2s='); ?>
<?php
if(!$GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="QQ挂机列表";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>首页</a></li>
<li class="active"><a href="#"><i class="icon fa fa-qq"></i>ＱＱ列表</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTEyIiByb2xlPSJtYWluIj4=');if($islogin==1){if(isset($_GET["super"])&& $isadmin==1){$gls=$DB->count("SELECT count(*) from ".DBQZ."_qq WHERE 1");$gxsid=$DB->count("SELECT count(*) from ".DBQZ."_qq WHERE status2!='1'");}else {$gls=$DB->count("SELECT count(*) from ".DBQZ."_qq WHERE uid='{$uid}'");if($row['qqnum']!=$gls)$DB->query("UPDATE ".DBQZ."_user SET qqnum= '$gls' WHERE userid = '$uid'");$qqjobnum=$DB->count("SELECT count(*) from ".DBQZ."_qqjob WHERE uid='{$uid}'");if($row['qqjobnum']!=$qqjobnum)$DB->query("UPDATE ".DBQZ."_user SET qqjobnum= '$gls' WHERE userid = '$uid'");$gxsid=$DB->count("SELECT count(*) from ".DBQZ."_qq WHERE status2!='1' and uid='{$uid}'");}if(OPEN_QQOL==0){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5b2T5YmN56uZ54K55pyq5byA5ZCv5q2k5Yqf6IO944CC'),2);exit;}if($conf['active']!=0)$GLOBALS['zym_decrypt']['�����Ď���Ô����ĮĈ�����îî���']();echo base64_decode('PGRpdiBpZD0iZnVuYyI+');echo base64_decode('PGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtaW5mbyI+4piF5L2g5oC75YWx5re75Yqg5LqGIDxmb250IGNvbG9yPSJyZWQiPg==').$gls.'</font> 个QQ账号！
<br/>你当前有 <font color="red">'.$gxsid.'</font> 个QQ的SID&Skey等待更新！<br/>
[<a href="index.php?mod=set&my=mail&'.$link.'">点此设置SID&Skey失效提醒邮箱</a>]</div>';echo base64_decode('CjxhIGhyZWY9IiMiIG9uY2xpY2s9ImFkZHFxKCdsb2dpbicpIiBjbGFzcz0iYnRuIGJ0bi1zdWNjZXNzIGJ0bi1sZyI+PGkgY2xhc3M9ImZhIGZhLXBsdXMiPjwvaT4mbmJzcDvmt7vliqBRUei0puWPtzwvYT4mbmJzcDsKPHNwYW4gY2xhc3M9ImRyb3Bkb3duIj4KICAgPGJ1dHRvbiBocmVmPSIjIiBjbGFzcz0iYnRuIGJ0bi1pbmZvIiBkYXRhLXRvZ2dsZT0iZHJvcGRvd24iIHJvbGU9ImJ1dHRvbiI+5om56YeP5pON5L2cIDxzcGFuIGNsYXNzPSJjYXJldCI+PC9zcGFuPjwvYnV0dG9uPgogICA8dWwgY2xhc3M9ImRyb3Bkb3duLW1lbnUiIHJvbGU9Im1lbnUiPgogICAgPGxpIHJvbGU9InByZXNlbnRhdGlvbiI+PGEgcm9sZT0ibWVudWl0ZW0iIGhyZWY9ImluZGV4LnBocD9tb2Q9c2V0Jm15PXFrcXE=').$link.'">清空所有</a></li>
   </ul>
   &nbsp;<button href="#" data-toggle="modal" data-target="#help" class="btn btn-default" id="help">帮助</button>
</span>
';echo base64_decode('PC9kaXY+');$pagesize=$conf['pagesize'];if (!isset($_GET['page'])){$page =1;$pageu =$page - 1;}else {$page =$_GET['page'];$pageu =($page - 1)* $pagesize;}?>
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
function addqq(act,qq) {
	if(act=='del') {
		if(!confirm('你确实要删除此QQ及此QQ下所有挂机任务吗？'))return false;
		ajax.get("ajax.php?mod=addqq&act="+act+"&qq="+qq, "json", function(arr) {
			if(arr.code==1){
				alert(arr.msg);
				showlist('qqlist',1);
			}else{
				alert(arr.msg);
			}
		});
		return true;
	}
	qq = qq || 0;
	$('#func').hide();
	$('#list').html('<center><i class="fa fa-spinner fa-pulse"></i>请稍候...</center>');
	ajax.get("ajax.php?mod=addqq&act="+act+"&qq="+qq, "html", function(data) {
		$('#list').html(data);
	});
}
function showlist(type,page) {
	page = page || '1';
	$('#func').show();
	$('#list').html('<center><i class="fa fa-spinner fa-pulse"></i>正在加载...</center>');
	if($_GET['qq'])
		ajax.get("ajax.php?mod=list&act="+type+"&page="+page+"&super=1&qq="+$_GET['qq'], "html", function(data) {
			$('#list').html(data);
		});
	else if($_GET['super']==1)
		ajax.get("ajax.php?mod=list&act="+type+"&page="+page+"&super=1", "html", function(data) {
			$('#list').html(data);
		});
	else if($_GET['userid'])
		ajax.get("ajax.php?mod=list&act="+type+"&page="+page+"&userid="+$_GET['userid'], "html", function(data) {
			$('#list').html(data);
		});
	else
		ajax.get("ajax.php?mod=list&act="+type+"&page="+page, "html", function(data) {
			$('#list').html(data);
		});
}
$(document).ready(function(){
	$("#help").click(function(){
		htmlobj=$.ajax({url:"template/Ajax/display.php?list=9",async:false});
	$("#myDiv").html(htmlobj.responseText);
});
showlist('qqlist',1);
});
</script>

<style>
.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>td,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>thead>tr>th{white-space: pre-wrap;}
</style>
<div id="list"></div>
<?php
 }else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('55m75b2V5aSx6LSl77yM5Y+v6IO95piv5a+G56CB6ZSZ6K+v5oiW6ICF6Lqr5Lu95aSx5pWI5LqG77yM6K+3PGEgaHJlZj0iaW5kZXgucGhwP21vZD1sb2dpbiI+6YeN5paw55m75b2VPC9hPu+8gQ=='),3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>