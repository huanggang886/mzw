<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['����Ĉ�����������ĥ�����־��Î��']=base64_decode('ZmlsZV9nZXRfY29udGVudHM=');$zym_decrypt['������������î��î���þ������å�']=base64_decode('c3RyX3JlcGxhY2U=');$zym_decrypt['���ċ�ľ��־��������Ô�î֔���Ď']=base64_decode('ZXhwbG9kZQ==');$zym_decrypt['�֯������֎��֮��ľ��֋�î������']=base64_decode('Y291bnQ=');$zym_decrypt['�ĈÔîÈ������������֔��֥��־�']=base64_decode('ZmlsZV9leGlzdHM=');$zym_decrypt['����֮���å���������������������']=base64_decode('ZmlsZV9wdXRfY29udGVudHM='); ?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<meta name="viewport" content="width=device-width; initial-scale=1.0;  minimum-scale=1.0; maximum-scale=2.0"/>
<link rel="stylesheet" type="text/css" href="../style/css1.css">
<link rel="shortcut icon" href="../images/favicon.ico">
<title>更新程序</title>
</head>
<body style="max-width:480px;">
<?php
 include(base64_decode('dXBkYXRlLmluYy5waHA='));$do=isset($_GET['do'])?$_GET['do']:1;if($conf['version']>='4600'){echo '<div class="w h">系统提示:</div><div class="box">您已经升级到V4.9版本!</div>';}else {if($GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('U1FMSVRF'))){exit(base64_decode('U1FMaXRl5pWw5o2u5bqT5LiN5pSv5oyB5pu05paw77yB6K+35L2/55So5YWo5paw5a6J6KOF44CC'));}if(!$conf['version'] || $conf['version']<='2500'){if(!$conf['version']){$sql="ALTER TABLE `".DBQZ."_config` 
ADD COLUMN `interval` int(10) NOT NULL DEFAULT 0,
ADD COLUMN `version` int(4) NOT NULL";if($DB->query($sql)){$DB->query("update ".DBQZ."_config set version='2100' where id='1'");echo base64_decode('djIuMOaVsOaNruW6k+abtOaWsOaIkOWKn++8gTxicj4z56eS5ZCO6Ieq5Yqo6Lez6L2sLi4uIDxtZXRhIGh0dHAtZXF1aXY9InJlZnJlc2giIGNvbnRlbnQ9IjM7dXJsPXVwZGF0ZS5waHAiPiA8YSBocmVmPSJ1cGRhdGUucGhwIj7ngrnmraTmiYvliqjot7Povaw8L2E+');}else{exit(base64_decode('5pWw5o2u5bqT5pu05paw5aSx6LSl77yM6K+36YeN6K+V77yBPGJyLz4=').$DB->error());}}if($conf['version']=='2100'){$sql="ALTER TABLE `".DBQZ."_config`
ADD COLUMN `switch` int(1) NOT NULL DEFAULT 1,
ADD COLUMN `css` int(1) NOT NULL,
ADD COLUMN `sysnum` int(2) NOT NULL";$sql2="ALTER TABLE `".DBQZ."_job` 
RENAME TO `".DBQZ."_job1`";if($DB->query($sql)&& $DB->query($sql2)){$DB->query("update `".DBQZ."_config` set `css` ='1',`sysnum` ='4',`version`='2500' where `id`='1'");echo base64_decode('djIuNeaVsOaNruW6k+abtOaWsOaIkOWKn++8gTxicj4z56eS5ZCO6Ieq5Yqo6Lez6L2sLi4uIDxtZXRhIGh0dHAtZXF1aXY9InJlZnJlc2giIGNvbnRlbnQ9IjM7dXJsPXVwZGF0ZS5waHAiPiA8YSBocmVmPSJ1cGRhdGUucGhwIj7ngrnmraTmiYvliqjot7Povaw8L2E+');}else{exit(base64_decode('5pWw5o2u5bqT5pu05paw5aSx6LSl77yM6K+36YeN6K+V77yBPGJyLz4=').$DB->error());}}if($conf['version']=='2500'){$sql="ALTER TABLE `".DBQZ."_job1`
ADD COLUMN `zt` int(1) NOT NULL DEFAULT 0";if($DB->query($sql)){$DB->query("update `".DBQZ."_config` set `version`='3000' where `id`='1'");echo base64_decode('djMuMOaVsOaNruW6k+abtOaWsOaIkOWKn++8gTxici8+M+enkuWQjuiHquWKqOi3s+i9rC4uLiA8bWV0YSBodHRwLWVxdWl2PSJyZWZyZXNoIiBjb250ZW50PSIzO3VybD11cGRhdGUucGhwIj4gPGEgaHJlZj0idXBkYXRlLnBocCI+54K55q2k5omL5Yqo6Lez6L2sPC9hPg==');}else{exit(base64_decode('5pWw5o2u5bqT5pu05paw5aSx6LSl77yM6K+36YeN6K+V77yBPGJyLz4=').$DB->error());}}exit();}if($conf['version']=='4000'){$sql="ALTER TABLE  `".DBQZ."_user`
ADD  `zcip` VARCHAR( 15 ) DEFAULT NULL ,
ADD  `dlip` VARCHAR( 15 ) DEFAULT NULL";$sql2="ALTER TABLE  `".DBQZ."_chat`
ADD  `ip` VARCHAR( 15 ) DEFAULT NULL";if($DB->query($sql)&& $DB->query($sql2)){$DB->query("update `".DBQZ."_config` set `version`='4200' where `id`='1'");echo base64_decode('djQuMuaVsOaNruW6k+abtOaWsOaIkOWKn++8gTxici8+M+enkuWQjuiHquWKqOi3s+i9rC4uLiA8bWV0YSBodHRwLWVxdWl2PSJyZWZyZXNoIiBjb250ZW50PSIzO3VybD11cGRhdGUucGhwIj4gPGEgaHJlZj0idXBkYXRlLnBocCI+54K55q2k5omL5Yqo6Lez6L2sPC9hPg==');}else{exit(base64_decode('5pWw5o2u5bqT5pu05paw5aSx6LSl77yM6K+36YeN6K+V77yBPGJyLz4=').$DB->error());}exit;}elseif($conf['version']=='4200'){$sql="ALTER TABLE  `".DBQZ."_config` ADD  `banned` TEXT NULL";if($DB->query($sql)){$DB->query("update `".DBQZ."_config` set `version`='4300' where `id`='1'");echo base64_decode('djQuM+aVsOaNruW6k+abtOaWsOaIkOWKn++8gTxici8+M+enkuWQjuiHquWKqOi3s+i9rC4uLiA8bWV0YSBodHRwLWVxdWl2PSJyZWZyZXNoIiBjb250ZW50PSIzO3VybD11cGRhdGUucGhwIj4gPGEgaHJlZj0idXBkYXRlLnBocCI+54K55q2k5omL5Yqo6Lez6L2sPC9hPg==');}else{exit(base64_decode('5pWw5o2u5bqT5pu05paw5aSx6LSl77yM6K+36YeN6K+V77yBPGJyLz4=').$DB->error());}exit;}elseif($conf['version']=='4300'){$sql="ALTER TABLE  `".DBQZ."_config` ADD  `multi` INT(1) NOT NULL DEFAULT '0',
ADD  `loop` VARCHAR(150) NOT NULL DEFAULT '0-0-0-0-0-0-0-0'";if($DB->query($sql)){$DB->query("update `".DBQZ."_config` set `version`='4600' where `id`='1'");echo base64_decode('djQuNuaVsOaNruW6k+abtOaWsOaIkOWKn++8gTxicj4z56eS5ZCO6Ieq5Yqo6Lez6L2sLi4uIDxtZXRhIGh0dHAtZXF1aXY9InJlZnJlc2giIGNvbnRlbnQ9IjM7dXJsPXVwZGF0ZTIucGhwIj4gPGEgaHJlZj0idXBkYXRlMi5waHAiPueCueatpOaJi+WKqOi3s+i9rDwvYT4=');}else{exit(base64_decode('5pWw5o2u5bqT5pu05paw5aSx6LSl77yM6K+36YeN6K+V77yBPGJyLz4=').$DB->error());}exit;}else {echo base64_decode('PGRpdiBjbGFzcz0idyBoIj5WNC4w5pu05paw56iL5bqPPC9kaXY+');if($do=='1'){$DB->query("update `".DBQZ."_config` `switch` ='0' where `id`='1';");echo base64_decode('PGRpdiBjbGFzcz0iYm94Ij4=');echo base64_decode('PHByZT4=');include(base64_decode('dXBkYXRlLm1k'));echo base64_decode('PC9wcmU+');echo "<br><a href='{$_SERVER['PHP_SELF']}?do=2'>>>立即开始更新</a>";}if($do=='2'){$c=0;$d=0;$a=$GLOBALS['zym_decrypt']['����Ĉ�����������ĥ�����־��Î��']("update.sql");$a=$GLOBALS['zym_decrypt']['������������î��î���þ������å�']('{DBQZ}', DBQZ, $a);$a=$GLOBALS['zym_decrypt']['���ċ�ľ��־��������Ô�î֔���Ď'](";",$a);$error='';for($i=0;$i<$GLOBALS['zym_decrypt']['�֯������֎��֮��ľ��֋�î������']($a);$i++){if($DB->query($a[$i])){$c++;}else{$d++;$error.=$DB->error().'<br/>';}}echo base64_decode('PGRpdiBjbGFzcz0iYm94Ij4=');if($d==0){echo '数据表结构更新成功<br/>SQL成功'.$c.'句/失败'.$d.'句<br/><a href="'.$_SERVER['PHP_SELF'].'?do=3">>>下一步</a>';}else {echo base64_decode('5pWw5o2u6KGo57uT5p6E5pu05paw5aSx6LSlPGJyLz5TUUzmiJDlip8=').$c.'句/失败'.$d.'句<br/>错误信息：'.$error.'<br/><a href="'.$_SERVER['PHP_SELF'].'?do=2">点此进行重试</a>';}}if($do=='3'){$c=0;for($i=2;$i<=8;$i++){$rs=$DB->query("SELECT * FROM ".DBQZ."_job{$i} order by jobid asc");while($row =$DB->fetch($rs)){if(!$row['url'])continue;$sql="insert into `".DBQZ."_job1` (`sysid`,`url`,`post`,`postfields`,`lx`,`timea`,`timeb`,`usep`,`proxy`,`referer`,`useragent`,`start`,`stop`) values ('".$i."','".$row['url']."','".$row['post']."','".$row['postfields']."','".$row['lx']."','".$row['timea']."','".$row['timeb']."','".$row['usep']."','".$row['proxy']."','".$row['referer']."','".$row['useragent']."','".$row['start']."','".$row['stop']."')";$DB->query($sql);$c++;}}$DB->query("ALTER TABLE `".DBQZ."_job1` RENAME TO `".DBQZ."_job`");$DB->query("DROP TABLE IF EXISTS `".DBQZ."_job2`");$DB->query("DROP TABLE IF EXISTS `".DBQZ."_job3`");$DB->query("DROP TABLE IF EXISTS `".DBQZ."_job4`");$DB->query("DROP TABLE IF EXISTS `".DBQZ."_job5`");$DB->query("DROP TABLE IF EXISTS `".DBQZ."_job6`");$DB->query("DROP TABLE IF EXISTS `".DBQZ."_job7`");$DB->query("DROP TABLE IF EXISTS `".DBQZ."_job8`");echo base64_decode('PGRpdiBjbGFzcz0iYm94Ij7ku7vliqHmlbDmja7ooajlkIjlubbmiJDlip88YnIvPlNRTOWFseaJp+ihjA==').$c.'句<br/><a href="'.$_SERVER['PHP_SELF'].'?do=4">>>下一步</a>';}if($do=='4'){$u="http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];if(!$GLOBALS['zym_decrypt']['�ĈÔîÈ������������֔��֥��־�'](base64_decode('aW5zdGFsbC5sb2Nr')))@$GLOBALS['zym_decrypt']['����֮���å���������������������'](base64_decode('aW5zdGFsbC5sb2Nr'),base64_decode('d29uZQ=='));@$GLOBALS['zym_decrypt']['����Ĉ�����������ĥ�����־��Î��']("http://www.qqzzz.net/api/tongji.php?url=$u");$DB->query("update `".DBQZ."_config` set `version` ='4000',`switch` ='1',`build` ='$date' where `id`='1'");echo base64_decode('PGRpdiBjbGFzcz0iYm94Ij48Zm9udCBjb2xvcj0iZ3JlZW4iPuabtOaWsOaIkOWKn++8geW9k+WJjeeJiOacrCBWNC4wPC9mb250Pjxici8+PGJyLz4z56eS5ZCO6Ieq5Yqo6Lez6L2sLi4uIDxtZXRhIGh0dHAtZXF1aXY9InJlZnJlc2giIGNvbnRlbnQ9IjM7dXJsPXVwZGF0ZS5waHAiPiA8YSBocmVmPSJ1cGRhdGUucGhwIj7ngrnmraTmiYvliqjot7Povaw8L2E+');}}}echo base64_decode('PGhyPg==');include(ROOT.base64_decode('aW5jbHVkZXMvZm9vdC5waHA='));echo base64_decode('PC9kaXY+PC9ib2R5PjwvaHRtbD4=');?>