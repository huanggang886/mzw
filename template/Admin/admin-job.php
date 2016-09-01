<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['ııÖˆı¥‹ˆ”Ã”¾ÃÖ‹ÃÖˆÁ¯À‹¾”À‹ı”']=base64_decode('dXJsZW5jb2Rl');$zym_decrypt['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']=base64_decode('aW50dmFs');$zym_decrypt['¾Á®ÖÖ‹ıÃ”¥®®ıÖ‹‹”À®ÃıÃıÖ¯Ã¥Á']=base64_decode('cXFqb2JfZGVjb2Rl');$zym_decrypt['ÄÄ¥¾À¥À‹¯ÁııÖ¥®À‹‹ˆ¥¯ıÖÄÖ¯Ä¾Áı”']=base64_decode('c2lnbmpvYl9kZWNvZGU=');$zym_decrypt['ÃˆÃ¯ÁÖÀ¥ˆÄ”ˆ‹ÖÃÃ‹”¾ÁÀ®¥¯ÖÖ”Ãııˆ']=base64_decode('ZGdtZGF0ZQ==');$zym_decrypt['®ˆ¾¯ÖÖ”Ã‹Ö‹‹ÖÖˆ‹¥”ıÖÀÃ‹ÖÖÃÁˆÃÄ¾']=base64_decode('aW5fYXJyYXk=');$zym_decrypt['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']=base64_decode('c2hvd21zZw=='); ?>
<?php
if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="ä»»åŠ¡æ•°æ®ç®¡ç†";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>é¦–é¡µ</a></li>
<li><a href="index.php?mod=admin"><i class="icon fa fa-cog"></i>åå°ç®¡ç†</a></li>
<li class="active"><a href="#"><i class="icon fa fa-list-alt"></i>ä»»åŠ¡æ•°æ®ç®¡ç†</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTEyIiByb2xlPSJtYWluIj4=');$table=isset($_GET['table'])?$_GET['table']:'wzjob';$sysid=isset($_GET['sys'])?$_GET['sys']:1;if ($isadmin==1){if(isset($_GET['kw'])){$sql=" `url` LIKE '%{$_GET['kw']}%'";$link='&table=wzjob&kw='.$_GET['kw'];$rownum='åŒ…å«'.$_GET['kw'].'çš„å…±æœ‰';}elseif($conf['server_wz']>1 && $table=='wzjob'){$sql=" sysid='{$sysid}'";$link='&table=wzjob&sys='.$sysid;$rownum='ç³»ç»Ÿ'.$sysname[$sysid].'ä¸‹å…±æœ‰';}else {$sql=' 1';$link='&table='.$table;}$zongs=$DB->count("select count(*) from ".DBQZ."_{$table} where 1");echo base64_decode('PGgzPuS7u+WKoeaVsOaNrueuoeeQhjwvaDM+');echo base64_decode('PGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtaW5mbyI+572R56uZ5YWx5pyJ').$zongs.'æ¡ä»»åŠ¡';if($conf['server_wz']>1 && $table=='wzjob'){echo '<br>ã€';for($i=1;$i<=$conf['server_wz'];$i++)echo '<a href="index.php?mod=admin-job&sys='.$i.'">ç³»ç»Ÿ'.$sysname[$i].'</a>.';echo base64_decode('44CRPGJyPg==');}$numrows=$DB->count("select count(*) from ".DBQZ."_{$table} where".$sql);if(isset($rownum))echo $rownum.$numrows.'æ¡ä»»åŠ¡';if(isset($_GET['kw']))echo '<br>[<a href="index.php?mod=admin-clear&my=qlrw&table='.$table.'&kw='.$GLOBALS['zym_decrypt']['ııÖˆı¥‹ˆ”Ã”¾ÃÖ‹ÃÖˆÁ¯À‹¾”À‹ı”']($_GET['kw']).'">åˆ é™¤æ‰€æœ‰åŒ…å«'.$_GET['kw'].'çš„ä»»åŠ¡</a>]';echo base64_decode('PC9kaXY+');$pagesize=$conf['pagesize'];$pages=$GLOBALS['zym_decrypt']['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']($numrows/$pagesize);if ($numrows%$pagesize){$pages++;}if (isset($_GET['page'])){$page=$GLOBALS['zym_decrypt']['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']($_GET['page']);}else{$page=1;}$offset=$pagesize*($page - 1);?>
<script>
function showresult(surl) {
  htmlobj=$.ajax({url:"template/Ajax/display.php?list=8&url="+surl,async:false});
  $("#myDiv").html(htmlobj.responseText);
}
function job_edit(act,jobid,table,page) {
	page = page || 1;
	if(act=='del') {
		if(!confirm('ä½ ç¡®å®è¦åˆ é™¤æ­¤ä»»åŠ¡å—ï¼Ÿ'))return false;
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
			<th>ä»»åŠ¡åç§°/ç½‘å€</th>
			<th>å…¶ä»–ä¿¡æ¯</th>
			<th>çŠ¶æ€/æ“ä½œ</th>
		</tr>
	</thead>
	<tobdy>
<?php
 $rs=$DB->query("select * from ".DBQZ."_{$table} where{$sql} order by jobid desc limit $offset,$pagesize");$i=0;while($myrow =$DB->fetch($rs)){$i++;$pagesl =$i + ($page - 1)* $pagesize;if($table=='wzjob'){echo '<tr jobid="'.$myrow['jobid'].'"><td style="width:40%;"><b>'.$pagesl.'.'.$myrow['name'].'</b><br/>å»ºç«‹è€…:<a href="index.php?mod=admin-user&my=user&uid='.$myrow['uid'].'">UID:'.$myrow['uid'].'</a><br/>';echo base64_decode('PGEgaHJlZj0i').$myrow['url'].'" target="_blank">'.$myrow['url'].'</a><br>';if(!empty($myrow['realip']))echo '{çœŸå®IP:'.$myrow['realip'].'}';if($myrow['usep']==1)echo '{ä»£ç†IP}';if($myrow['post']==1)echo '{æ¨¡æ‹ŸPOST}';if($myrow['cookie']!='')echo '{æ¨¡æ‹ŸCookie}';if($myrow['referer']!='')echo '{æ¨¡æ‹Ÿæ¥æº}';if($myrow['useragent']!='')echo '{æ¨¡æ‹Ÿæµè§ˆå™¨}';}elseif($table=='qqjob'){$type=$myrow['type'];$qqjob=$GLOBALS['zym_decrypt']['¾Á®ÖÖ‹ıÃ”¥®®ıÖ‹‹”À®ÃıÃıÖ¯Ã¥Á']($myrow['qq'],$type,$myrow['method'],$myrow['data']);echo base64_decode('PHRyIGpvYmlkPSI=').$myrow['jobid'].'"><td style="width:40%;"><b>'.$pagesl.'.'.$qqTaskNames[$type].'ä»»åŠ¡</b><br/>å»ºç«‹è€…:<a href="index.php?mod=admin-user&my=user&uid='.$myrow['uid'].'">UID:'.$myrow['uid'].'</a><br/>'.$qqjob['info'];}elseif($table=='signjob'){$type=$myrow['type'];$signjob=$GLOBALS['zym_decrypt']['ÄÄ¥¾À¥À‹¯ÁııÖ¥®À‹‹ˆ¥¯ıÖÄÖ¯Ä¾Áı”']($type,$myrow['data']);echo base64_decode('PHRyIGpvYmlkPSI=').$myrow['jobid'].'"><td style="width:40%;"><b>'.$pagesl.'.'.$signTaskNames[$type].'ä»»åŠ¡</b><br/>å»ºç«‹è€…:<a href="index.php?mod=admin-user&my=user&uid='.$myrow['uid'].'">UID:'.$myrow['uid'].'</a><br/>ç­¾åˆ°æ•°æ®ï¼š'.$signjob['data'].$signjob['info'];}echo base64_decode('PC90ZD48dGQgc3R5bGU9IndpZHRoOjM1JSI+54q25oCBOg==');if ($myrow['zt'] == '1'){echo '<font color="red">æš‚åœè¿è¡Œ...</font><br/>';}else{echo base64_decode('PGZvbnQgY29sb3I9ImdyZWVuIj7mraPlnKjov5DooYw8L2ZvbnQ+PGJyLz4=');}echo base64_decode('6L+Q6KGM5qyh5pWwOjxmb250IGNvbG9yPSJyZWQiPg==').$myrow['times'].'</font><br>ä¸Šæ¬¡æ‰§è¡Œ:<font color="blue">'.$GLOBALS['zym_decrypt']['ÃˆÃ¯ÁÖÀ¥ˆÄ”ˆ‹ÖÃÃ‹”¾ÁÀ®¥¯ÖÖ”Ãııˆ']($myrow['lasttime']).'</font><br/>è¿è¡Œæ—¶é—´:<font color="blue">';echo $myrow['start'].'æ—¶ - '.$myrow['stop'].'æ—¶</font>';if($myrow['pl']!=0)echo '<br>è¿è¡Œé¢‘ç‡:<font color="red">'.$myrow['pl'].'</font>ç§’/æ¬¡';elseif($GLOBALS['zym_decrypt']['®ˆ¾¯ÖÖ”Ã‹Ö‹‹ÖÖˆ‹¥”ıÖÀÃ‹ÖÖÃÁˆÃÄ¾']($type,$qqSignTasks))echo '<br>è¿è¡Œé¢‘ç‡:<font color="red">18000</font>ç§’/æ¬¡';elseif($GLOBALS['zym_decrypt']['®ˆ¾¯ÖÖ”Ã‹Ö‹‹ÖÖˆ‹¥”ıÖÀÃ‹ÖÖÃÁˆÃÄ¾']($type,$qqLimitTasks)|| $GLOBALS['zym_decrypt']['®ˆ¾¯ÖÖ”Ã‹Ö‹‹ÖÖˆ‹¥”ıÖÀÃ‹ÖÖÃÁˆÃÄ¾']($type,$qqGuajiTasks))echo '<br>è¿è¡Œé¢‘ç‡:<font color="red">600</font>ç§’/æ¬¡';echo base64_decode('PC90ZD48dGQgc3R5bGU9IndpZHRoOjI1JSI+');if($myrow['data'] || $table=='wzjob')echo '<a href="#" onclick="'.$table.'_edit(\'edit\',\''.$myrow['jobid'].'\',\''.$myrow['sysid'].'\',\''.$page.'\')" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>&nbsp;ç¼–è¾‘</a><br/>';if ($myrow['zt'] == '1'){echo '<a href="#" onclick="job_edit(\'kq\','.$myrow['jobid'].',\''.$table.'\',\''.$page.'\')" class="btn btn-success btn-sm"><i class="fa fa-play"></i>&nbsp;å¼€å¯</a>';}else{echo base64_decode('PGEgaHJlZj0iIyIgb25jbGljaz0iam9iX2VkaXQoJ3p0Jyw=').$myrow['jobid'].',\''.$table.'\',\''.$page.'\')" class="btn btn-success btn-sm"><i class="fa fa-pause"></i>&nbsp;æš‚åœ</a>';}echo base64_decode('PGJyLz48YSBocmVmPSIjIiBvbmNsaWNrPSJqb2JfZWRpdCgnZGVsJyw=').$myrow['jobid'].',\''.$table.'\',\''.$page.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>&nbsp;åˆ é™¤</a></div></td></tr>';}?>
	</tbody>
</table>
</div>

<?php
echo base64_decode('PHVsIGNsYXNzPSJwYWdpbmF0aW9uIj4=');$first=1;$prev=$page-1;$next=$page+1;$last=$pages;if ($page>1){echo '<li><a href="index.php?mod=admin-job&page='.$first.$link.'">é¦–é¡µ</a></li>';echo base64_decode('PGxpPjxhIGhyZWY9ImluZGV4LnBocD9tb2Q9YWRtaW4tam9iJnBhZ2U9').$prev.$link.'">&laquo;</a></li>';}else {echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+6aaW6aG1PC9hPjwvbGk+');echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+JmxhcXVvOzwvYT48L2xpPg==');}for ($i=1;$i<$page;$i++)echo '<li><a href="index.php?mod=admin-job&page='.$i.$link.'">'.$i .'</a></li>';echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+').$page.'</a></li>';for ($i=$page+1;$i<=$pages;$i++)echo '<li><a href="index.php?mod=admin-job&page='.$i.$link.'">'.$i .'</a></li>';echo '';if ($page<$pages){echo '<li><a href="index.php?mod=admin-job&page='.$next.$link.'">&raquo;</a></li>';echo base64_decode('PGxpPjxhIGhyZWY9ImluZGV4LnBocD9tb2Q9YWRtaW4tam9iJnBhZ2U9').$last.$link.'">å°¾é¡µ</a></li>';}else {echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+JnJhcXVvOzwvYT48L2xpPg==');echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+5bC+6aG1PC9hPjwvbGk+');}echo base64_decode('PC91bD4=');}else {$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ'](base64_decode('5ZCO5Y+w566h55CG55m75b2V5aSx6LSl44CC6K+35Lul566h55CG5ZGY6Lqr5Lu9IDxhIGhyZWY9ImluZGV4LnBocD9tb2Q9bG9naW4iPumHjeaWsOeZu+W9lTwvYT7vvIE='),3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>