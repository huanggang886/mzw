<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['����ï�������î��Ď���֋ï����֋']=base64_decode('dGltZQ==');$zym_decrypt['�����Ď���Ô����ĮĈ�����îî���']=base64_decode('cGhvbmVfY2hlY2s=');$zym_decrypt['����֯È���Ë���å��֋��þ������']=base64_decode('c2hvd21zZw==');$zym_decrypt['���������ċ����֮�������������È']=base64_decode('ZGFkZHNsYXNoZXM=');$zym_decrypt['ċ�֯��Ô�֮���������֥�î������']=base64_decode('bWQ1');$zym_decrypt['�����֮�į���������������þ�Ĕ��']=base64_decode('ZGF0ZQ==');$zym_decrypt['��ֈ������Ô�Î֋�ֈ������������']=base64_decode('dXJsZW5jb2Rl'); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="QQ任务列表";$time =$GLOBALS['zym_decrypt']['����ï�������î��Ď���֋ï����֋']();$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>首页</a></li>
<li><a href="index.php?mod=qqlist"><i class="icon fa fa-qq"></i>ＱＱ管理</a></li>
<li class="active"><a href="#"><i class="icon fa fa-list-alt"></i>'.$_GET['qq'].'</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTEyIiByb2xlPSJtYWluIj4=');if($islogin==1){if($conf['active']!=0)$GLOBALS['zym_decrypt']['�����Ď���Ô����ĮĈ�����îî���']();if(OPEN_QQOL==0){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5b2T5YmN56uZ54K55pyq5byA5ZCv5q2k5Yqf6IO944CC'),2);}$qq=$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_GET['qq']);$gls=$DB->count("SELECT count(*) from ".DBQZ."_qqjob WHERE qq='{$qq}' and uid='{$uid}'");$qqrow=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$qq}' limit 1");if($qqrow['uid']!=$uid && $isadmin!=1 && $isdeputy!=1){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('你只能操作自己的QQ哦！',3);}if($qqlevelapi==5)$qqlevellink='qqdg.php?qq='.$qq.'&md5='.$GLOBALS['zym_decrypt']['ċ�֯��Ô�֮���������֥�î������'](SYS_KEY.$qq.$time).'&s='.$time;else $qqlevellink='index.php?mod=qqlevel&qq='.$qq;echo base64_decode('Cjx0YWJsZSBjbGFzcz0idGFibGUgdGFibGUtYm9yZGVyZWQiPiAKCTx0Ym9keT4KCTx0cj4KCQk8dGQgY2xhc3M9ImhpZGRlbi14cyI+PHNwYW4gY2xhc3M9ImJ0biBidG4tbGFyZ2UgYnRuLWJsb2NrIGJ0bi1wcmltYXJ5IiBzdHlsZT0ibGluZS1oZWlnaHQ6MzVweDsiPlFROg==').$qq.'</span><a href="http://ptlogin2.qq.com/jump?uin='.$qq.'&skey='.$qqrow['skey'].'&u1=http://user.qzone.qq.com/'.$qq.'?" class="btn btn-large btn-block btn-warning" style="line-height:35px;" target="_blank">进入QQ空间</a></td>
		<td align="center" valign="middle" class="panel panel-default" style="background:url(images/qqback.gif);background-size:cover;"><img src="//q1.qlogo.cn/g?b=qq&nk='.$qq.'&s=100&t='.$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("Ymd").'" class="qqlogo"></td>
		<td><a href="'.$qqlevellink.'" class="btn btn-large btn-block btn-info" style="line-height:35px;">QQ等级代挂</a><a href="index.php?mod=search&q='.$qq.'" class="btn btn-large btn-block btn-success" style="line-height:35px;" target="_blank">秒赞认证</a></td>
	</tr>
	</tbody>
</table>';echo base64_decode('PGRpdiBpZD0icXFmdW5jIj4=');if($isvip==0 && $rules[4]!=0 && $isadmin==0)echo '<div class="alert alert-info">QQ类任务扣币标准：<font color="red">每条任务每天收取 '.$rules[4].' '.$conf['coin_name'].'</font> 
[<a href="index.php?mod=shop&kind=1">开通VIP</a>]后可以免币</div>';echo base64_decode('CjxzcGFuIGNsYXNzPSJkcm9wZG93biI+CiAgIDxidXR0b24gaHJlZj0iIyIgY2xhc3M9ImJ0biBidG4tcHJpbWFyeSIgZGF0YS10b2dnbGU9ImRyb3Bkb3duIiByb2xlPSJidXR0b24iPua3u+WKoFFR5oyC5py65Lu75YqhIDxzcGFuIGNsYXNzPSJjYXJldCI+PC9zcGFuPjwvYnV0dG9uPgogICA8dWwgY2xhc3M9ImRyb3Bkb3duLW1lbnUiIHJvbGU9Im1lbnUiPgoJPGxpIHJvbGU9InByZXNlbnRhdGlvbiI+PGEgcm9sZT0ibWVudWl0ZW0iIHRhYmluZGV4PSItMSIgZGF0YS10b2dnbGU9Im1vZGFsIiBkYXRhLXRhcmdldD0iI3Fxam9iIiBocmVmPSIjIiBpZD0icXFsaXN0MDIiPuepuumXtOexu+S7u+WKoTwvYT48L2xpPg==');if(OPEN_OTHE==1||OPEN_SHUA==1)echo base64_decode('PGxpIHJvbGU9InByZXNlbnRhdGlvbiI+PGEgcm9sZT0ibWVudWl0ZW0iIHRhYmluZGV4PSItMSIgZGF0YS10b2dnbGU9Im1vZGFsIiBkYXRhLXRhcmdldD0iI3Fxam9iIiBocmVmPSIjIiBpZD0icXFsaXN0MDMiPuS6kuWIt+exu+S7u+WKoTwvYT48L2xpPg==');echo base64_decode('PGxpIHJvbGU9InByZXNlbnRhdGlvbiI+PGEgcm9sZT0ibWVudWl0ZW0iIHRhYmluZGV4PSItMSIgZGF0YS10b2dnbGU9Im1vZGFsIiBkYXRhLXRhcmdldD0iI3Fxam9iIiBocmVmPSIjIiBpZD0icXFsaXN0MDQiPuaZrumAmuetvuWIsOexu+S7u+WKoTwvYT48L2xpPgoJPGxpIHJvbGU9InByZXNlbnRhdGlvbiI+PGEgcm9sZT0ibWVudWl0ZW0iIHRhYmluZGV4PSItMSIgZGF0YS10b2dnbGU9Im1vZGFsIiBkYXRhLXRhcmdldD0iI3Fxam9iIiBocmVmPSIjIiBpZD0icXFsaXN0MDUiPuS8muWRmOetvuWIsOexu+S7u+WKoTwvYT48L2xpPg==');if(OPEN_LEVE==1)echo base64_decode('PGxpIHJvbGU9InByZXNlbnRhdGlvbiI+PGEgcm9sZT0ibWVudWl0ZW0iIGhyZWY9Ig==').$qqlevellink.'">等级代挂类任务</a></li>';if(OPEN_QZDS==1)echo base64_decode('PGxpIHJvbGU9InByZXNlbnRhdGlvbiI+PGEgcm9sZT0ibWVudWl0ZW0iIHRhYmluZGV4PSItMSIgZGF0YS10b2dnbGU9Im1vZGFsIiBkYXRhLXRhcmdldD0iI3Fxam9iIiBocmVmPSIjIiBpZD0icXFsaXN0MDYiPu+8se+8seS7o+WIt+exu+S7u+WKoTwvYT48L2xpPg==');echo base64_decode('PGxpIHJvbGU9InByZXNlbnRhdGlvbiI+PGEgcm9sZT0ibWVudWl0ZW0iIHRhYmluZGV4PSItMSIgZGF0YS10b2dnbGU9Im1vZGFsIiBkYXRhLXRhcmdldD0iI3Fxam9iIiBocmVmPSIjIiBpZD0icXFsaXN0MDEiPuWFtuS7luexu+S7u+WKoTwvYT48L2xpPg==');echo base64_decode('PC91bD4KPC9zcGFuPgo8c3BhbiBjbGFzcz0iZHJvcGRvd24iPgogICA8YnV0dG9uIGhyZWY9IiMiIGNsYXNzPSJidG4gYnRuLXN1Y2Nlc3MiIGRhdGEtdG9nZ2xlPSJkcm9wZG93biIgcm9sZT0iYnV0dG9uIj5RUeWwj+W3peWFtyA8c3BhbiBjbGFzcz0iY2FyZXQiPjwvc3Bhbj48L2J1dHRvbj4KICAgPHVsIGNsYXNzPSJkcm9wZG93bi1tZW51IiByb2xlPSJtZW51Ij4KICAgIDxsaSByb2xlPSJwcmVzZW50YXRpb24iPjxhIHJvbGU9Im1lbnVpdGVtIiBocmVmPSJpbmRleC5waHA/bW9kPWR4JnFxPQ==').$qq.'" target="_blank">单向好友检测</a></li>
	<li role="presentation"><a role="menuitem" href="index.php?mod=mzjc&qq='.$qq.'" target="_blank">秒赞好友检测</a></li>
	<li role="presentation"><a role="menuitem" href="#" onclick="qqtool(\''.$qq.'\',\'qqz\')">刷圈圈赞99+</a></li>';if(OPEN_SHUAR==1)echo base64_decode('PGxpIHJvbGU9InByZXNlbnRhdGlvbiI+PGEgcm9sZT0ibWVudWl0ZW0iIGhyZWY9ImluZGV4LnBocD9tb2Q9cmVwbHkmcXE9').$qq.'" target="_blank">说说刷队形</a></li>';if(OPEN_SHUA==1)echo base64_decode('PGxpIHJvbGU9InByZXNlbnRhdGlvbiI+PGEgcm9sZT0ibWVudWl0ZW0iIGhyZWY9ImluZGV4LnBocD9tb2Q9c3omcXE9').$qq.'" target="_blank">说说刷赞</a></li>
	<li role="presentation"><a role="menuitem" href="index.php?mod=rq&qq='.$qq.'" target="_blank">空间刷人气</a></li>';echo base64_decode('PGxpIHJvbGU9InByZXNlbnRhdGlvbiI+PGEgcm9sZT0ibWVudWl0ZW0iIGhyZWY9IiMiIG9uY2xpY2s9InFxdG9vbCgn').$qq.'\',\'ebook\')">领取图书VIP</a></li>
	<li role="presentation"><a role="menuitem" href="http://ptlogin2.qq.com/jump?uin='.$qq.'&skey='.$qqrow['skey'].'&u1=http://kf.qq.com/touch/qzone/qzone_status.html" target="_blank">空间异常诊断</a></li>
	<li role="presentation"><a role="menuitem" href="http://ptlogin2.qq.com/jump?uin='.$qq.'&skey='.$qqrow['skey'].'&u1=http://kf.qq.com/qzone/remove_qzone.html" target="_blank">解除禁言</a></li>
	<li role="presentation"><a role="menuitem" tabindex="-1" data-toggle="modal" data-target="#qqjob" href="#" id="qqlist07">>>更多小工具</a></li>
   </ul>
</span>
<span class="dropdown">
   <button href="#" class="btn btn-info" data-toggle="dropdown" role="button">批量操作 <span class="caret"></span></button>
   <ul class="dropdown-menu" role="menu">
    <li role="presentation"><a role="menuitem" href="index.php?mod=set&my=qkqqrw&qq='.$qq.$link.'">清空所有</a></li>
	<li role="presentation"><a role="menuitem" href="#" onclick="job_edit(\'ztall\',\''.$qq.'\',\'qqjob\',\'1\')">一键暂停所有</a></li>
	<li role="presentation"><a role="menuitem" href="#" onclick="job_edit(\'kqall\',\''.$qq.'\',\'qqjob\',\'1\')">一键开启所有</a></li>
   </ul>
</span>
';echo base64_decode('PC9kaXY+');?>

<script>
function qqtool(qq,type) {
	if(type=='ebook')
		var url="qq/api/ebook.php?uin="+qq+"&sid=<?php echo $GLOBALS['zym_decrypt']['��ֈ������Ô�Î֋�ֈ������������']($qqrow['sid'])?>";
	else if(type=='qqz')
		var url="index.php?mod=qqz&qq="+qq;
	ajax.get(url, "json", function(arr) {
		alert(arr.msg);
	});
}
function showlist(type,page) {
	page = page || '1';
	$('#qqfunc').show();
	$('#list').html('<center><i class="fa fa-spinner fa-pulse"></i>正在加载...</center>');
	ajax.get("ajax.php?mod=list&act="+type+"&qq=<?php echo $qq ?>&page="+page, "html", function(data) {
		$('#list').html(data);
	});
}
function qqjob_edit(qq,type,jobid,page) {
	jobid = jobid || 0;
	page = page || 1;
	$('#qqjob').modal('hide');
	$('#qqfunc').hide();
	$('#list').html('<center><i class="fa fa-spinner fa-pulse"></i>请稍候...</center>');
	ajax.get("ajax.php?mod=qqjob&act=edit&qq="+qq+"&type="+type+"&jobid="+jobid+"&page="+page, "html", function(data) {
		$('#list').html(data);
	});
}
function qqjob_add(qq,type) {
	$('#qqjob').modal('hide');
	ajax.get("ajax.php?mod=qqjob&act=add&qq="+qq+"&type="+type, "json", function(arr) {
		if(arr.code==1){
			alert(arr.msg);
			showlist('qqtask',1);
		}else{
			alert(arr.msg);
		}
	});
}
function job_edit(act,jobid,table,page) {
	page = page || 1;
	if(act=='del') {
		if(!confirm('你确实要删除此任务吗？'))return false;
	}
	ajax.get("ajax.php?mod=edit&act="+act+"&jobid="+jobid+"&table="+table, "json", function(arr) {
		if(arr.code==1){
			alert(arr.msg);
			showlist('qqtask',page);
		}else{
			alert(arr.msg);
		}
	});
}
$(document).ready(function(){
$("#qqlist01").click(function(){
  htmlobj=$.ajax({url:"template/Ajax/display.php?list=1&qq=<?php echo $qq ?>",async:false});
  $("#myDiv").html(htmlobj.responseText);
});
$("#qqlist02").click(function(){
  htmlobj=$.ajax({url:"template/Ajax/display.php?list=2&qq=<?php echo $qq ?>",async:false});
  $("#myDiv").html(htmlobj.responseText);
});
$("#qqlist03").click(function(){
  htmlobj=$.ajax({url:"template/Ajax/display.php?list=3&qq=<?php echo $qq ?>",async:false});
  $("#myDiv").html(htmlobj.responseText);
});
$("#qqlist04").click(function(){
  htmlobj=$.ajax({url:"template/Ajax/display.php?list=4&qq=<?php echo $qq ?>",async:false});
  $("#myDiv").html(htmlobj.responseText);
});
$("#qdlist").click(function(){
  htmlobj=$.ajax({url:"template/Ajax/display.php?list=5",async:false});
  $("#myDiv").html(htmlobj.responseText);
});
$("#qqlist05").click(function(){
  htmlobj=$.ajax({url:"template/Ajax/display.php?list=6&qq=<?php echo $qq ?>",async:false});
  $("#myDiv").html(htmlobj.responseText);
});
$("#qqlist06").click(function(){
  htmlobj=$.ajax({url:"template/Ajax/display.php?list=7&qq=<?php echo $qq ?>",async:false});
  $("#myDiv").html(htmlobj.responseText);
});
$("#qqlist07").click(function(){
  htmlobj=$.ajax({url:"template/Ajax/display.php?list=11&qq=<?php echo $qq ?>",async:false});
  $("#myDiv").html(htmlobj.responseText);
});
showlist('qqtask',1);
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
 }else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('登录失败，可能是密码错误或者身份失效了，请<a href="index.php?mod=login">重新登录</a>！',3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>