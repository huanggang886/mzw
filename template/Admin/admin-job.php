<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['��ֈ������Ô�Î֋�ֈ������������']=base64_decode('dXJsZW5jb2Rl');$zym_decrypt['���֯֎����������ֈ�Ď����������']=base64_decode('aW50dmFs');$zym_decrypt['����֎��Ô�������֋��������֯å�']=base64_decode('cXFqb2JfZGVjb2Rl');$zym_decrypt['�ĥ����������֥����������֯ľ���']=base64_decode('c2lnbmpvYl9kZWNvZGU=');$zym_decrypt['Èï�����Ĕ����Ë�������֎֔����']=base64_decode('ZGdtZGF0ZQ==');$zym_decrypt['�����֔Ë֋��ֈ������Ë�����Îľ']=base64_decode('aW5fYXJyYXk=');$zym_decrypt['����֯È���Ë���å��֋��þ������']=base64_decode('c2hvd21zZw=='); ?>
<?php
if(!$GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="任务数据管理";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>首页</a></li>
<li><a href="index.php?mod=admin"><i class="icon fa fa-cog"></i>后台管理</a></li>
<li class="active"><a href="#"><i class="icon fa fa-list-alt"></i>任务数据管理</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTEyIiByb2xlPSJtYWluIj4=');$table=isset($_GET['table'])?$_GET['table']:'wzjob';$sysid=isset($_GET['sys'])?$_GET['sys']:1;if ($isadmin==1){if(isset($_GET['kw'])){$sql=" `url` LIKE '%{$_GET['kw']}%'";$link='&table=wzjob&kw='.$_GET['kw'];$rownum='包含'.$_GET['kw'].'的共有';}elseif($conf['server_wz']>1 && $table=='wzjob'){$sql=" sysid='{$sysid}'";$link='&table=wzjob&sys='.$sysid;$rownum='系统'.$sysname[$sysid].'下共有';}else {$sql=' 1';$link='&table='.$table;}$zongs=$DB->count("select count(*) from ".DBQZ."_{$table} where 1");echo base64_decode('PGgzPuS7u+WKoeaVsOaNrueuoeeQhjwvaDM+');echo base64_decode('PGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtaW5mbyI+572R56uZ5YWx5pyJ').$zongs.'条任务';if($conf['server_wz']>1 && $table=='wzjob'){echo '<br>【';for($i=1;$i<=$conf['server_wz'];$i++)echo '<a href="index.php?mod=admin-job&sys='.$i.'">系统'.$sysname[$i].'</a>.';echo base64_decode('44CRPGJyPg==');}$numrows=$DB->count("select count(*) from ".DBQZ."_{$table} where".$sql);if(isset($rownum))echo $rownum.$numrows.'条任务';if(isset($_GET['kw']))echo '<br>[<a href="index.php?mod=admin-clear&my=qlrw&table='.$table.'&kw='.$GLOBALS['zym_decrypt']['��ֈ������Ô�Î֋�ֈ������������']($_GET['kw']).'">删除所有包含'.$_GET['kw'].'的任务</a>]';echo base64_decode('PC9kaXY+');$pagesize=$conf['pagesize'];$pages=$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($numrows/$pagesize);if ($numrows%$pagesize){$pages++;}if (isset($_GET['page'])){$page=$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_GET['page']);}else{$page=1;}$offset=$pagesize*($page - 1);?>
<script>
function showresult(surl) {
  htmlobj=$.ajax({url:"template/Ajax/display.php?list=8&url="+surl,async:false});
  $("#myDiv").html(htmlobj.responseText);
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
	document.location.reload();
}
</script>

<style>
.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>td,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>thead>tr>th{white-space: pre-wrap;}
</style>
<div class="panel panel-default table-responsive">
<table class="table table-hover">
	<thead>
		<tr>
			<th>任务名称/网址</th>
			<th>其他信息</th>
			<th>状态/操作</th>
		</tr>
	</thead>
	<tobdy>
<?php
 $rs=$DB->query("select * from ".DBQZ."_{$table} where{$sql} order by jobid desc limit $offset,$pagesize");$i=0;while($myrow =$DB->fetch($rs)){$i++;$pagesl =$i + ($page - 1)* $pagesize;if($table=='wzjob'){echo '<tr jobid="'.$myrow['jobid'].'"><td style="width:40%;"><b>'.$pagesl.'.'.$myrow['name'].'</b><br/>建立者:<a href="index.php?mod=admin-user&my=user&uid='.$myrow['uid'].'">UID:'.$myrow['uid'].'</a><br/>';echo base64_decode('PGEgaHJlZj0i').$myrow['url'].'" target="_blank">'.$myrow['url'].'</a><br>';if(!empty($myrow['realip']))echo '{真实IP:'.$myrow['realip'].'}';if($myrow['usep']==1)echo '{代理IP}';if($myrow['post']==1)echo '{模拟POST}';if($myrow['cookie']!='')echo '{模拟Cookie}';if($myrow['referer']!='')echo '{模拟来源}';if($myrow['useragent']!='')echo '{模拟浏览器}';}elseif($table=='qqjob'){$type=$myrow['type'];$qqjob=$GLOBALS['zym_decrypt']['����֎��Ô�������֋��������֯å�']($myrow['qq'],$type,$myrow['method'],$myrow['data']);echo base64_decode('PHRyIGpvYmlkPSI=').$myrow['jobid'].'"><td style="width:40%;"><b>'.$pagesl.'.'.$qqTaskNames[$type].'任务</b><br/>建立者:<a href="index.php?mod=admin-user&my=user&uid='.$myrow['uid'].'">UID:'.$myrow['uid'].'</a><br/>'.$qqjob['info'];}elseif($table=='signjob'){$type=$myrow['type'];$signjob=$GLOBALS['zym_decrypt']['�ĥ����������֥����������֯ľ���']($type,$myrow['data']);echo base64_decode('PHRyIGpvYmlkPSI=').$myrow['jobid'].'"><td style="width:40%;"><b>'.$pagesl.'.'.$signTaskNames[$type].'任务</b><br/>建立者:<a href="index.php?mod=admin-user&my=user&uid='.$myrow['uid'].'">UID:'.$myrow['uid'].'</a><br/>签到数据：'.$signjob['data'].$signjob['info'];}echo base64_decode('PC90ZD48dGQgc3R5bGU9IndpZHRoOjM1JSI+54q25oCBOg==');if ($myrow['zt'] == '1'){echo '<font color="red">暂停运行...</font><br/>';}else{echo base64_decode('PGZvbnQgY29sb3I9ImdyZWVuIj7mraPlnKjov5DooYw8L2ZvbnQ+PGJyLz4=');}echo base64_decode('6L+Q6KGM5qyh5pWwOjxmb250IGNvbG9yPSJyZWQiPg==').$myrow['times'].'</font><br>上次执行:<font color="blue">'.$GLOBALS['zym_decrypt']['Èï�����Ĕ����Ë�������֎֔����']($myrow['lasttime']).'</font><br/>运行时间:<font color="blue">';echo $myrow['start'].'时 - '.$myrow['stop'].'时</font>';if($myrow['pl']!=0)echo '<br>运行频率:<font color="red">'.$myrow['pl'].'</font>秒/次';elseif($GLOBALS['zym_decrypt']['�����֔Ë֋��ֈ������Ë�����Îľ']($type,$qqSignTasks))echo '<br>运行频率:<font color="red">18000</font>秒/次';elseif($GLOBALS['zym_decrypt']['�����֔Ë֋��ֈ������Ë�����Îľ']($type,$qqLimitTasks)|| $GLOBALS['zym_decrypt']['�����֔Ë֋��ֈ������Ë�����Îľ']($type,$qqGuajiTasks))echo '<br>运行频率:<font color="red">600</font>秒/次';echo base64_decode('PC90ZD48dGQgc3R5bGU9IndpZHRoOjI1JSI+');if($myrow['data'] || $table=='wzjob')echo '<a href="#" onclick="'.$table.'_edit(\'edit\',\''.$myrow['jobid'].'\',\''.$myrow['sysid'].'\',\''.$page.'\')" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>&nbsp;编辑</a><br/>';if ($myrow['zt'] == '1'){echo '<a href="#" onclick="job_edit(\'kq\','.$myrow['jobid'].',\''.$table.'\',\''.$page.'\')" class="btn btn-success btn-sm"><i class="fa fa-play"></i>&nbsp;开启</a>';}else{echo base64_decode('PGEgaHJlZj0iIyIgb25jbGljaz0iam9iX2VkaXQoJ3p0Jyw=').$myrow['jobid'].',\''.$table.'\',\''.$page.'\')" class="btn btn-success btn-sm"><i class="fa fa-pause"></i>&nbsp;暂停</a>';}echo base64_decode('PGJyLz48YSBocmVmPSIjIiBvbmNsaWNrPSJqb2JfZWRpdCgnZGVsJyw=').$myrow['jobid'].',\''.$table.'\',\''.$page.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>&nbsp;删除</a></div></td></tr>';}?>
	</tbody>
</table>
</div>

<?php
echo base64_decode('PHVsIGNsYXNzPSJwYWdpbmF0aW9uIj4=');$first=1;$prev=$page-1;$next=$page+1;$last=$pages;if ($page>1){echo '<li><a href="index.php?mod=admin-job&page='.$first.$link.'">首页</a></li>';echo base64_decode('PGxpPjxhIGhyZWY9ImluZGV4LnBocD9tb2Q9YWRtaW4tam9iJnBhZ2U9').$prev.$link.'">&laquo;</a></li>';}else {echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+6aaW6aG1PC9hPjwvbGk+');echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+JmxhcXVvOzwvYT48L2xpPg==');}for ($i=1;$i<$page;$i++)echo '<li><a href="index.php?mod=admin-job&page='.$i.$link.'">'.$i .'</a></li>';echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+').$page.'</a></li>';for ($i=$page+1;$i<=$pages;$i++)echo '<li><a href="index.php?mod=admin-job&page='.$i.$link.'">'.$i .'</a></li>';echo '';if ($page<$pages){echo '<li><a href="index.php?mod=admin-job&page='.$next.$link.'">&raquo;</a></li>';echo base64_decode('PGxpPjxhIGhyZWY9ImluZGV4LnBocD9tb2Q9YWRtaW4tam9iJnBhZ2U9').$last.$link.'">尾页</a></li>';}else {echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+JnJhcXVvOzwvYT48L2xpPg==');echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+5bC+6aG1PC9hPjwvbGk+');}echo base64_decode('PC91bD4=');}else {$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5ZCO5Y+w566h55CG55m75b2V5aSx6LSl44CC6K+35Lul566h55CG5ZGY6Lqr5Lu9IDxhIGhyZWY9ImluZGV4LnBocD9tb2Q9bG9naW4iPumHjeaWsOeZu+W9lTwvYT7vvIE='),3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>