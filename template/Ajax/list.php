<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']=base64_decode('ZGFkZHNsYXNoZXM=');$zym_decrypt['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']=base64_decode('c2hvd21zZw==');$zym_decrypt['¾Á®ÖÖ‹ıÃ”¥®®ıÖ‹‹”À®ÃıÃıÖ¯Ã¥Á']=base64_decode('cXFqb2JfZGVjb2Rl');$zym_decrypt['ÃˆÃ¯ÁÖÀ¥ˆÄ”ˆ‹ÖÃÃ‹”¾ÁÀ®¥¯ÖÖ”Ãııˆ']=base64_decode('ZGdtZGF0ZQ==');$zym_decrypt['®ˆ¾¯ÖÖ”Ã‹Ö‹‹ÖÖˆ‹¥”ıÖÀÃ‹ÖÖÃÁˆÃÄ¾']=base64_decode('aW5fYXJyYXk=');$zym_decrypt['ÄÄ¥¾À¥À‹¯ÁııÖ¥®À‹‹ˆ¥¯ıÖÄÖ¯Ä¾Áı”']=base64_decode('c2lnbmpvYl9kZWNvZGU=');$zym_decrypt['”¾ˆÃÃıˆÁÖ¯ı¾‹ÁÀÖÖÄ¥¥ÖÀÖÖˆˆˆ®ÖÄÄ']=base64_decode('aXNfbnVtZXJpYw==');$zym_decrypt['ıÁˆı”ÖıÃÖÃ‹Á®ˆÖÀ”¥¥‹”ÄÁ”¯¥Á¾¯Ã']=base64_decode('c3RydG90aW1l');$zym_decrypt['ÁııÃ¯¥‹¯‹®”ıÃ®ÃÁÄ”ÀÖ‹Ã¯ÖÖı¥Ö‹']=base64_decode('dGltZQ==');$zym_decrypt['Ã”ˆˆÃÃÃÃÄÃ‹”À®ˆı‹ı¾ÄÃÖ¯ı‹¾¯ÀÀÀ']=base64_decode('Y2VpbA=='); ?>
<?php
if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$act=isset($_GET['act'])?$_GET['act']:null;if($islogin==1){switch($act){case 'qqtask': $qq=$GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($_GET['qq']);$qqrow=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$qq}' limit 1");if($qqrow['uid']!=$uid && $isadmin!=1){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('ä½ åªèƒ½æ“ä½œè‡ªå·±çš„QQå“¦ï¼',3);}$gls=$DB->count("SELECT count(*) from ".DBQZ."_qqjob WHERE qq='{$qq}'");$pagesize=$conf['pagesize'];if (!isset($_GET['page'])){$page =1;$pageu =$page - 1;}else {$page =$_GET['page'];$pageu =($page - 1)* $pagesize;}?>
<div class="panel panel-default table-responsive" id="list">
<table class="table table-hover">
	<thead>
		<tr>
			<th>ä»»åŠ¡åç§°ï¼ˆ<?php echo $gls?>ï¼‰</th>
			<th>å…¶ä»–ä¿¡æ¯</th>
			<th>çŠ¶æ€/æ“ä½œ</th>
		</tr>
	</thead>
	<tobdy>
	<tr>
		<td><b>å·²å¼€å¯SID/SKEYè‡ªåŠ¨æ›´æ–°</b></td><td>çŠ¶æ€:<font color="green">æ­£åœ¨è¿è¡Œ</font><br/>ä¸Šæ¬¡æ›´æ–°:<font color="blue"><?php echo $qqrow['time']?></font></td><td><a class="btn btn-danger btn-sm" disabled><i class="fa fa-trash"></i>&nbsp;åˆ é™¤</a></td>
	</tr>
<?php
$i=0;$rs=$DB->query("SELECT * FROM ".DBQZ."_qqjob WHERE qq='$qq' order by jobid desc limit $pageu,$pagesize");while($myrow =$DB->fetch($rs)){$i++;$pagesl =$i + ($page - 1)* $pagesize;$type=$myrow['type'];$qqjob=$GLOBALS['zym_decrypt']['¾Á®ÖÖ‹ıÃ”¥®®ıÖ‹‹”À®ÃıÃıÖ¯Ã¥Á']($qq,$type,$myrow['method'],$myrow['data']);echo base64_decode('PHRyIGpvYmlkPSI=').$myrow['jobid'].'"><td style="width:40%;"><b>'.$pagesl.'.'.$qqTaskNames[$type].'ä»»åŠ¡</b><br/>'.$qqjob['info'];echo base64_decode('PC90ZD48dGQgc3R5bGU9IndpZHRoOjM1JSI+54q25oCBOg==');if ($myrow['zt'] == '1'){echo '<font color="red">æš‚åœè¿è¡Œ...</font><br/>';}else{echo base64_decode('PGZvbnQgY29sb3I9ImdyZWVuIj7mraPlnKjov5DooYw8L2ZvbnQ+PGJyLz4=');}echo base64_decode('6L+Q6KGM5qyh5pWwOjxmb250IGNvbG9yPSJyZWQiPg==').$myrow['times'].'</font><br>ä¸Šæ¬¡æ‰§è¡Œ:<font color="blue">'.$GLOBALS['zym_decrypt']['ÃˆÃ¯ÁÖÀ¥ˆÄ”ˆ‹ÖÃÃ‹”¾ÁÀ®¥¯ÖÖ”Ãııˆ']($myrow['lasttime']).'</font>';echo base64_decode('PGJyLz7ov5DooYzml7bpl7Q6PGZvbnQgY29sb3I9ImJsdWUiPg==').$myrow['start'].'æ—¶ - '.$myrow['stop'].'æ—¶</font>';if($myrow['pl']!=0)echo '<br>è¿è¡Œé¢‘ç‡:<font color="red">'.$myrow['pl'].'</font>ç§’/æ¬¡';elseif($GLOBALS['zym_decrypt']['®ˆ¾¯ÖÖ”Ã‹Ö‹‹ÖÖˆ‹¥”ıÖÀÃ‹ÖÖÃÁˆÃÄ¾']($type,$qqSignTasks))echo '<br>è¿è¡Œé¢‘ç‡:<font color="red">18000</font>ç§’/æ¬¡';elseif($GLOBALS['zym_decrypt']['®ˆ¾¯ÖÖ”Ã‹Ö‹‹ÖÖˆ‹¥”ıÖÀÃ‹ÖÖÃÁˆÃÄ¾']($type,$qqLimitTasks)|| $GLOBALS['zym_decrypt']['®ˆ¾¯ÖÖ”Ã‹Ö‹‹ÖÖˆ‹¥”ıÖÀÃ‹ÖÖÃÁˆÃÄ¾']($type,$qqGuajiTasks))echo '<br>è¿è¡Œé¢‘ç‡:<font color="red">600</font>ç§’/æ¬¡';echo base64_decode('PC90ZD48dGQgc3R5bGU9IndpZHRoOjI1JSI+');if($myrow['data'] || $type=='3gqq')echo '<a href="#" onclick="qqjob_edit(\''.$qq.'\',undefined,\''.$myrow['jobid'].'\',\''.$page.'\')" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>&nbsp;ç¼–è¾‘</a><br/>';if ($myrow['zt'] == '1'){echo '<a href="#" onclick="job_edit(\'kq\','.$myrow['jobid'].',\'qqjob\',\''.$page.'\')" class="btn btn-success btn-sm"><i class="fa fa-play"></i>&nbsp;å¼€å¯</a>';}else{echo base64_decode('PGEgaHJlZj0iIyIgb25jbGljaz0iam9iX2VkaXQoJ3p0Jyw=').$myrow['jobid'].',\'qqjob\',\''.$page.'\')" class="btn btn-success btn-sm"><i class="fa fa-pause"></i>&nbsp;æš‚åœ</a>';}echo base64_decode('PGJyLz48YSBocmVmPSIjIiBvbmNsaWNrPSJqb2JfZWRpdCgnZGVsJyw=').$myrow['jobid'].',\'qqjob\',\''.$page.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>&nbsp;åˆ é™¤</a></div></td></tr>';}?>
	</tbody>
</table>
</div>
<?php  break;case base64_decode('c2lnbnRhc2s='): $gls=$DB->count("SELECT count(*) from ".DBQZ."_signjob WHERE uid='{$uid}'");$pagesize=$conf['pagesize'];if (!isset($_GET['page'])){$page =1;$pageu =$page - 1;}else {$page =$_GET['page'];$pageu =($page - 1)* $pagesize;}?>
<div class="panel panel-default table-responsive" id="list">
<table class="table table-hover">
	<thead>
		<tr>
			<th>ä»»åŠ¡åç§°</th>
			<th>å…¶ä»–ä¿¡æ¯</th>
			<th>çŠ¶æ€/æ“ä½œ</th>
		</tr>
	</thead>
	<tobdy>
<?php
$i=0;$rs=$DB->query("SELECT * FROM ".DBQZ."_signjob WHERE uid='$uid' order by jobid desc limit $pageu,$pagesize");while($myrow =$DB->fetch($rs)){$i++;$pagesl =$i + ($page - 1)* $pagesize;$type=$myrow['type'];$signjob=$GLOBALS['zym_decrypt']['ÄÄ¥¾À¥À‹¯ÁııÖ¥®À‹‹ˆ¥¯ıÖÄÖ¯Ä¾Áı”']($type,$myrow['data']);echo base64_decode('PHRyIGpvYmlkPSI=').$myrow['jobid'].'"><td style="width:40%;"><b>'.$pagesl.'.'.$signTaskNames[$type].'ä»»åŠ¡</b><br/>ç­¾åˆ°æ•°æ®ï¼š'.$signjob['data'].$signjob['info'];echo base64_decode('PC90ZD48dGQgc3R5bGU9IndpZHRoOjM1JSI+54q25oCBOg==');if ($myrow['zt'] == '1'){echo '<font color="red">æš‚åœè¿è¡Œ...</font><br/>';}else{echo base64_decode('PGZvbnQgY29sb3I9ImdyZWVuIj7mraPlnKjov5DooYw8L2ZvbnQ+PGJyLz4=');}echo base64_decode('6L+Q6KGM5qyh5pWwOjxmb250IGNvbG9yPSJyZWQiPg==').$myrow['times'].'</font><br>ä¸Šæ¬¡æ‰§è¡Œ:<font color="blue">'.$GLOBALS['zym_decrypt']['ÃˆÃ¯ÁÖÀ¥ˆÄ”ˆ‹ÖÃÃ‹”¾ÁÀ®¥¯ÖÖ”Ãııˆ']($myrow['lasttime']).'</font>';echo base64_decode('PC90ZD48dGQgc3R5bGU9IndpZHRoOjI1JSI+');if($myrow['data'])echo '<a href="#" onclick="signjob_edit(\''.$type.'\',\''.$myrow['jobid'].'\',\''.$page.'\')" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>&nbsp;ç¼–è¾‘</a><br/>';if ($myrow['zt'] == '1'){echo '<a href="#" onclick="job_edit(\'kq\','.$myrow['jobid'].',\'signjob\',\''.$page.'\')" class="btn btn-success btn-sm"><i class="fa fa-play"></i>&nbsp;å¼€å¯</a>';}else{echo base64_decode('PGEgaHJlZj0iIyIgb25jbGljaz0iam9iX2VkaXQoJ3p0Jyw=').$myrow['jobid'].',\'signjob\',\''.$page.'\')" class="btn btn-success btn-sm"><i class="fa fa-pause"></i>&nbsp;æš‚åœ</a>';}echo base64_decode('PGJyLz48YSBocmVmPSIjIiBvbmNsaWNrPSJqb2JfZWRpdCgnZGVsJyw=').$myrow['jobid'].',\'signjob\',\''.$page.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>&nbsp;åˆ é™¤</a></div></td></tr>';}?>
	</tbody>
</table>
</div>
<?php  break;case base64_decode('d3p0YXNr'): $sysid=$GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($_GET['sysid']);if($GLOBALS['zym_decrypt']['”¾ˆÃÃıˆÁÖ¯ı¾‹ÁÀÖÖÄ¥¥ÖÀÖÖˆˆˆ®ÖÄÄ']($sysid))$sqls=" and sysid='{$sysid}'";elseif(!empty($sysid))$sqls=" and `url` LIKE '%{$sysid}%'";else $sqls=null;$gls=$DB->count("SELECT count(*) from ".DBQZ."_wzjob WHERE uid='{$uid}'{$sqls}");$pagesize=$conf['pagesize'];if (!isset($_GET['page'])){$page =1;$pageu =$page - 1;}else {$page =$_GET['page'];$pageu =($page - 1)* $pagesize;}?>
<div class="panel panel-default table-responsive" id="list">
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
$i=0;$rs=$DB->query("SELECT * FROM ".DBQZ."_wzjob WHERE uid='$uid'{$sqls} order by jobid desc limit $pageu,$pagesize");while($myrow =$DB->fetch($rs)){$i++;$pagesl =$i + ($page - 1)* $pagesize;echo base64_decode('PHRyIGpvYmlkPSI=').$myrow['jobid'].'"><td style="width:40%;"><b>'.$pagesl.'.'.$myrow['name'].'</b><br/><a href="'.$myrow['url'].'" target="_blank">'.$myrow['url'].'</a><br>';if(!empty($myrow['realip']))echo '{çœŸå®IP:'.$myrow['realip'].'}';if($myrow['usep']==1)echo '{ä»£ç†IP}';if($myrow['post']==1)echo '{æ¨¡æ‹ŸPOST}';if($myrow['cookie']!='')echo '{æ¨¡æ‹ŸCookie}';if($myrow['referer']!='')echo '{æ¨¡æ‹Ÿæ¥æº}';if($myrow['useragent']!='')echo '{æ¨¡æ‹Ÿæµè§ˆå™¨}';echo base64_decode('PC90ZD48dGQgc3R5bGU9IndpZHRoOjM1JSI+54q25oCBOg==');if ($myrow['zt'] == '1'){echo '<font color="red">æš‚åœè¿è¡Œ...</font><br/>';}else{echo base64_decode('PGZvbnQgY29sb3I9ImdyZWVuIj7mraPlnKjov5DooYw8L2ZvbnQ+PGJyLz4=');}echo base64_decode('6L+Q6KGM5qyh5pWwOjxmb250IGNvbG9yPSJyZWQiPg==').$myrow['times'].'</font><br>ä¸Šæ¬¡æ‰§è¡Œ:<font color="blue">'.$GLOBALS['zym_decrypt']['ÃˆÃ¯ÁÖÀ¥ˆÄ”ˆ‹ÖÃÃ‹”¾ÁÀ®¥¯ÖÖ”Ãııˆ']($myrow['lasttime']).'</font><br/>è¿è¡Œæ—¶é—´:<font color="blue">';echo $myrow['start'].'æ—¶ - '.$myrow['stop'].'æ—¶</font>';if($myrow['pl']!=0)echo '<br>è¿è¡Œé¢‘ç‡:<font color="red">'.$myrow['pl'].'</font>ç§’/æ¬¡';echo base64_decode('PC90ZD48dGQgc3R5bGU9IndpZHRoOjI1JSI+');echo base64_decode('PGEgaHJlZj0iIyIgb25jbGljaz0id3pqb2JfZWRpdCgnZWRpdCcsJw==').$myrow['jobid'].'\',\''.$myrow['sysid'].'\',\''.$page.'\')" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>&nbsp;ç¼–è¾‘</a><br/>';if ($myrow['zt'] == '1'){echo '<a href="#" onclick="job_edit(\'kq\','.$myrow['jobid'].',\'wzjob\',\''.$page.'\')" class="btn btn-success btn-sm"><i class="fa fa-play"></i>&nbsp;å¼€å¯</a>';}else{echo base64_decode('PGEgaHJlZj0iIyIgb25jbGljaz0iam9iX2VkaXQoJ3p0Jyw=').$myrow['jobid'].',\'wzjob\',\''.$page.'\')" class="btn btn-success btn-sm"><i class="fa fa-pause"></i>&nbsp;æš‚åœ</a>';}echo base64_decode('PGJyLz48YSBocmVmPSIjIiBvbmNsaWNrPSJqb2JfZWRpdCgnZGVsJyw=').$myrow['jobid'].',\'wzjob\',\''.$page.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>&nbsp;åˆ é™¤</a></div></td></tr>';}?>
	</tbody>
</table>
</div>
<?php
break;case base64_decode('cXFsaXN0'): if(isset($_GET['super'])&& $isadmin==1){if(isset($_GET['qq']))$gls=1;else $gls=$DB->count("SELECT count(*) from ".DBQZ."_qq WHERE 1");}else $gls=$DB->count("SELECT count(*) from ".DBQZ."_qq WHERE uid='{$uid}'");$pagesize=$conf['pagesize'];if (!isset($_GET['page'])){$page =1;$pageu =$page - 1;}else {$page =$_GET['page'];$pageu =($page - 1)* $pagesize;}?>
<div class="panel panel-default table-responsive">
<table class="table table-hover">
	<thead>
		<tr>
			<th>QQè´¦å·</th>
			<th>çŠ¶æ€</th>
			<th>æ“ä½œ</th>
		</tr>
	</thead>
	<tobdy>
<?php
$i=0;if(isset($_GET['super'])&& $isadmin==1){if(isset($_GET['qq']))$rs=$DB->query("SELECT * FROM ".DBQZ."_qq WHERE qq='{$_GET['qq']}' order by id desc limit $pageu,$pagesize");else $rs=$DB->query("SELECT * FROM ".DBQZ."_qq WHERE 1 order by id desc limit $pageu,$pagesize");$link.='&super=1';}else $rs=$DB->query("SELECT * FROM ".DBQZ."_qq WHERE uid='{$uid}' order by id desc limit $pageu,$pagesize");while($myrow =$DB->fetch($rs)){$i++;$pagesl =$i + ($page - 1)* $pagesize;echo base64_decode('PHRyPjx0ZCBzdHlsZT0id2lkdGg6NDAlOyIgaWQ9Im1lbnViYXIiPjxhIGhyZWY9ImluZGV4LnBocD9tb2Q9bGlzdC1xcSZxcT0=').$myrow['qq'].$link.'" title="è¿›å…¥ä»»åŠ¡ç®¡ç†"><img src="//q2.qlogo.cn/headimg_dl?bs=qq&dst_uin='.$myrow['qq'].'&src_uin='.$myrow['qq'].'&fid='.$myrow['qq'].'&spec=100&url_enc=0&referer=bu_interface&term_type=PC" class="qqlogo" width="80px"><label>'.$myrow['qq'].'</label></a>';if(isset($_GET['super'])&& $isadmin==1)echo '<br/>æ‰€å±ç”¨æˆ·:<a href="index.php?mod=admin-user&my=user&uid='.$myrow['uid'].$link.'">ID '.$myrow['uid'].'</a>';if($conf['vipmode']==1){if($myrow['vip']==1){if($GLOBALS['zym_decrypt']['ıÁˆı”ÖıÃÖÃ‹Á®ˆÖÀ”¥¥‹”ÄÁ”¯¥Á¾¯Ã']($myrow['vipdate'])>$GLOBALS['zym_decrypt']['ÁııÃ¯¥‹¯‹®”ıÃ®ÃÁÄ”ÀÖ‹Ã¯ÖÖı¥Ö‹']()){$vipstatus='åˆ°æœŸæ—¶é—´:<font color="green">'.$myrow['vipdate'].'</font>[<a href="index.php?mod=shop&act=1&qq='.$myrow['qq'].'">ç»­æœŸ</a>]';}else{$vipstatus='<font color="red">å·²è¿‡æœŸï¼Œè¯·åŠæ—¶<a href="index.php?mod=shop&act=1&qq='.$myrow['qq'].$link.'">ç»­è´¹</a></font>';}}elseif($myrow['vip']==2){$vipstatus='<font color="green">æ°¸ä¹… VIP</font>';}else{$vipstatus='<font color="red">å·²è¿‡æœŸï¼Œè¯·åŠæ—¶<a href="index.php?mod=shop&act=1&qq='.$myrow['qq'].'">ç»­è´¹</a></font>';}echo base64_decode('PGJyLz4=').$vipstatus;}echo base64_decode('PC90ZD48dGQgc3R5bGU9IndpZHRoOjMwJSI+');if ($myrow['status'] == '1')echo '<font color="green">SID æ­£å¸¸</font>';else echo base64_decode('PGZvbnQgY29sb3I9InJlZCI+U0lEIOW3suWkseaViDwvZm9udD4=');if ($myrow['status2'] == '1')echo '<br/><font color="green">SKEY æ­£å¸¸</font>';else echo base64_decode('PGJyLz48Zm9udCBjb2xvcj0icmVkIj5TS0VZIOW3suWkseaViDwvZm9udD4=');if (empty($myrow['pskey']))echo '<br/><font color="red">æœªè·å–P_skeyï¼</font>';elseif ($myrow['status2'] == '1')echo '<br/><font color="green">P_skeyæ­£å¸¸</font>';else echo base64_decode('PGJyLz48Zm9udCBjb2xvcj0icmVkIj5QX3NrZXnlt7LlpLHmlYg8L2ZvbnQ+');echo base64_decode('PC90ZD48dGQgc3R5bGU9IndpZHRoOjMwJSI+PGEgY2xhc3M9ImJ0biBidG4tcHJpbWFyeSIgaHJlZj0iaW5kZXgucGhwP21vZD1saXN0LXFxJnFxPQ==').$myrow['qq'].$link.'" title="æ·»åŠ ä»»åŠ¡"><i class="fa fa-edit"></i>&nbsp;ä»»åŠ¡</a>&nbsp;&nbsp;<a class="btn btn-success" href="#" onclick="addqq(\'update\',\''.$myrow['qq'].'\')" title="æ›´æ–°SID&SKEY"><i class="fa fa-refresh"></i>&nbsp;æ›´æ–°</a>&nbsp;&nbsp;<a class="btn btn-danger" href="#" onclick="addqq(\'del\',\''.$myrow['qq'].'\')" title="åˆ é™¤æ­¤QQ" onclick="return confirm(\'ä½ ç¡®å®è¦åˆ é™¤æ­¤QQå·åŠæ­¤QQä¸‹æ‰€æœ‰æŒ‚æœºä»»åŠ¡å—ï¼Ÿ\');"><i class="fa fa-trash">&nbsp;åˆ é™¤</i></a></td></tr>';}?>
	</tbody>
</table>
</div>
<?php
break;case base64_decode('ZGFtYWxpc3Q='): $gls=$DB->count("SELECT count(*) from ".DBQZ."_qq WHERE status2='4'");$pagesize=$conf['pagesize'];if (!isset($_GET['page'])){$page =1;$pageu =$page - 1;}else {$page =$_GET['page'];$pageu =($page - 1)* $pagesize;}?>
<div class="panel panel-default table-responsive">
<table class="table table-hover">
	<thead>
		<tr>
			<th>QQè´¦å·</th>
			<th>çŠ¶æ€/æ“ä½œ</th>
		</tr>
	</thead>
	<tobdy>
<?php
$i=0;$rs=$DB->query("SELECT * FROM ".DBQZ."_qq WHERE status2='4' order by id desc limit $pageu,$pagesize");while($myrow =$DB->fetch($rs)){$i++;$pagesl =$i + ($page - 1)* $pagesize;echo base64_decode('PHRyPjx0ZCBzdHlsZT0id2lkdGg6NTAlOyI+PGltZyBzcmM9Ii8vcTIucWxvZ28uY24vaGVhZGltZ19kbD9icz1xcSZkc3RfdWluPQ==').$myrow['qq'].'&src_uin='.$myrow['qq'].'&fid='.$myrow['qq'].'&spec=100&url_enc=0&referer=bu_interface&term_type=PC" class="qqlogo" width="80px"><label>'.$myrow['qq'].'</label>';echo base64_decode('PC90ZD48dGQgc3R5bGU9IndpZHRoOjUwJSI+');if ($myrow['status'] == '1')echo '<font color="green">SID æ­£å¸¸</font>';else echo base64_decode('PGZvbnQgY29sb3I9InJlZCI+U0lEIOW3suWkseaViDwvZm9udD4=');if ($myrow['status2'] == '1')echo '<br/><font color="green">SKEY æ­£å¸¸</font>';else echo base64_decode('PGJyLz48Zm9udCBjb2xvcj0icmVkIj5TS0VZIOW3suWkseaViDwvZm9udD4=');if (empty($myrow['pskey']))echo '<br/><font color="red">æœªè·å–P_skeyï¼</font>';elseif ($myrow['status2'] == '1')echo '<br/><font color="green">P_skeyæ­£å¸¸</font>';else echo base64_decode('PGJyLz48Zm9udCBjb2xvcj0icmVkIj5QX3NrZXnlt7LlpLHmlYg8L2ZvbnQ+');echo base64_decode('PGJyLz48YSBocmVmPSIjIiBvbmNsaWNrPSJhZGRxcSgnZGFtYScsJw==').$myrow['qq'].'\')" title="ååŠ©æ‰“ç " class="btn btn-success btn-sm">ååŠ©æ‰“ç </a></td></tr>';}?>
	</tbody>
</table>
</div>
<?php
break;}$s =$GLOBALS['zym_decrypt']['Ã”ˆˆÃÃÃÃÄÃ‹”À®ˆı‹ı¾ÄÃÖ¯ı‹¾¯ÀÀÀ']($gls / $pagesize);$first=1;$prev=$page-1;$next=$page+1;$last=$s;echo base64_decode('PHVsIGNsYXNzPSJwYWdpbmF0aW9uIj4=');if ($page>1){echo '<li><a href="#" onclick="showlist(\''.$act.'\','.$first.')">é¦–é¡µ</a></li>';echo base64_decode('PGxpPjxhIGhyZWY9IiMiIG9uY2xpY2s9InNob3dsaXN0KCc=').$act.'\','.$prev.')">&laquo;</a></li>';}else {echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+6aaW6aG1PC9hPjwvbGk+');echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+JmxhcXVvOzwvYT48L2xpPg==');}for ($i=1;$i<$page;$i++)echo '<li><a href="#" onclick="showlist(\''.$act.'\','.$i.')">'.$i .'</a></li>';echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+').$page.'</a></li>';for ($i=$page+1;$i<=$s;$i++)echo '<li><a href="#" onclick="showlist(\''.$act.'\','.$i.')">'.$i .'</a></li>';echo '';if ($page<$s){echo '<li><a href="#" onclick="showlist(\''.$act.'\','.$next.')">&raquo;</a></li>';echo base64_decode('PGxpPjxhIGhyZWY9IiMiIG9uY2xpY2s9InNob3dsaXN0KCc=').$act.'\','.$last.')">å°¾é¡µ</a></li>';}else {echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+JnJhcXVvOzwvYT48L2xpPg==');echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+5bC+6aG1PC9hPjwvbGk+');}echo base64_decode('PC91bD4=');}else{$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ'](base64_decode('55m75b2V5aSx6LSl77yM5Y+v6IO95piv5a+G56CB6ZSZ6K+v5oiW6ICF6Lqr5Lu95aSx5pWI5LqG77yM6K+3PGEgaHJlZj0iaW5kZXgucGhwP21vZD1sb2dpbiI+6YeN5paw55m75b2VPC9hPu+8gQ=='),3);}