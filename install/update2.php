<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['����Ĉ�����������ĥ�����־��Î��']=base64_decode('ZmlsZV9nZXRfY29udGVudHM=');$zym_decrypt['������������î��î���þ������å�']=base64_decode('c3RyX3JlcGxhY2U=');$zym_decrypt['���ċ�ľ��־��������Ô�î֔���Ď']=base64_decode('ZXhwbG9kZQ==');$zym_decrypt['�֯������֎��֮��ľ��֋�î������']=base64_decode('Y291bnQ=');$zym_decrypt['�ĈÔîÈ������������֔��֥��־�']=base64_decode('ZmlsZV9leGlzdHM=');$zym_decrypt['����֮���å���������������������']=base64_decode('ZmlsZV9wdXRfY29udGVudHM='); ?>
<?php
include(base64_decode('dXBkYXRlLmluYy5waHA='));$do=isset($_GET['do'])?$_GET['do']:1;?>
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
 if($conf['version']=='5090'){echo '<div class="w h">系统提示:</div><div class="box">您已经升级到V5.9版本!</div>';}else {if($GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('U1FMSVRF'))){exit(base64_decode('U1FMaXRl5pWw5o2u5bqT5LiN5pSv5oyB5pu05paw77yB6K+35L2/55So5YWo5paw5a6J6KOF44CC'));}if(!$conf['version'] || $conf['version']<'4600'){exit('<div class="w h">系统提示:</div><div class="box">请 <a href="update.php">点击此处</a> 完成升级。</div>');}if($conf['version']=='5040'){$sql="ALTER TABLE `".DBQZ."_config`
ADD `kfqq` VARCHAR(150) NULL,
ADD `mail_api` int(1) NOT NULL DEFAULT 0,
ADD `footer` TEXT NULL";echo base64_decode('PGRpdiBjbGFzcz0iYm94Ij4=');if($DB->query($sql)&& $DB->query($sql2)){$DB->query("update `".DBQZ."_config` set `version`='5090' where `id`='1'");echo base64_decode('djUuOeaVsOaNruW6k+abtOaWsOaIkOWKn++8gTxicj48YnI+PGEgaHJlZj0iLi4vaW5kZXgucGhwIj4+Pui/lOWbnue9keermemmlumhtTwvYT4=');}else{exit(base64_decode('5pWw5o2u5bqT5pu05paw5aSx6LSl77yM6K+36YeN6K+V77yBPGJyLz4=').$DB->error());}}elseif($conf['version']=='5030'){$sql="ALTER TABLE `".DBQZ."_qq`
ADD `status2` int(4) NOT NULL DEFAULT 1";$sql2="ALTER TABLE `".DBQZ."_config`
ADD  `qqloginid` INT(4) NOT NULL DEFAULT 1";echo base64_decode('PGRpdiBjbGFzcz0iYm94Ij4=');if($DB->query($sql)&& $DB->query($sql2)){$DB->query("update `".DBQZ."_config` set `version`='5040' where `id`='1'");echo base64_decode('djUuNOaVsOaNruW6k+abtOaWsOaIkOWKn++8gTxicj48YnI+PGEgaHJlZj0iLi4vaW5kZXgucGhwIj4+Pui/lOWbnue9keermemmlumhtTwvYT4=');}else{exit(base64_decode('5pWw5o2u5bqT5pu05paw5aSx6LSl77yM6K+36YeN6K+V77yBPGJyLz4=').$DB->error());}}elseif($conf['version']=='5010'){$sql="ALTER TABLE  `".DBQZ."_job` ADD  `cookie` text NULL";$sql2="ALTER TABLE  `".DBQZ."_config` ADD  `sitetitle` text NULL,
 ADD  `mail_name` VARCHAR(150) NULL,
 ADD  `mail_pwd` VARCHAR(150) NULL,
 ADD  `mail_stmp` VARCHAR(150) NULL,
 ADD  `mail_port` VARCHAR(150) NULL,
 ADD  `siteurl` VARCHAR(150) NULL";echo base64_decode('PGRpdiBjbGFzcz0iYm94Ij4=');if($DB->query($sql)&& $DB->query($sql2)){$DB->query("update `".DBQZ."_config` set `version`='5030',`sitetitle`='-分布式秒赞挂机系统',`mail_stmp`='smtp.163.com',`mail_port`='25',`siteurl`='$siteurl' where `id`='1'");echo base64_decode('djUuM+aVsOaNruW6k+abtOaWsOaIkOWKn++8gTxicj48YnI+PGEgaHJlZj0iLi4vaW5kZXgucGhwIj4+Pui/lOWbnue9keermemmlumhtTwvYT4=');}else{exit(base64_decode('5pWw5o2u5bqT5pu05paw5aSx6LSl77yM6K+36YeN6K+V77yBPGJyLz4=').$DB->error());}}elseif($conf['version']=='5001'){$sql="ALTER TABLE `".DBQZ."_qq` MODIFY COLUMN  `qq` varchar(20) NOT NULL";$sql2="ALTER TABLE `".DBQZ."_config`
ADD  `cronkey` VARCHAR(150) DEFAULT NULL,
ADD  `qqapiid` INT(4) NOT NULL DEFAULT 0";echo base64_decode('PGRpdiBjbGFzcz0iYm94Ij4=');if($DB->query($sql)&& $DB->query($sql2)){$DB->query("update `".DBQZ."_config` set `version`='5010' where `id`='1'");echo base64_decode('djUuMeaVsOaNruW6k+abtOaWsOaIkOWKn++8gTxicj48YnI+PGEgaHJlZj0iLi4vaW5kZXgucGhwIj4+Pui/lOWbnue9keermemmlumhtTwvYT4=');}else{exit(base64_decode('5pWw5o2u5bqT5pu05paw5aSx6LSl77yM6K+36YeN6K+V77yBPGJyLz4=').$DB->error());}}elseif($conf['version']<='5000'){echo '<div class="w h">V5.0更新程序</div>';if($do=='1'){$DB->query("update `".DBQZ."_config` `switch` ='0' where `id`='1';");echo base64_decode('PGRpdiBjbGFzcz0iYm94Ij4=');echo base64_decode('PHByZT4=');include(base64_decode('Li4vcmVhZG1lLnR4dA=='));echo base64_decode('PC9wcmU+');echo "<hr><a href='{$_SERVER['PHP_SELF']}?do=2'>>>立即开始更新</a>";}elseif($do=='2'){$c=0;$d=0;$a=$GLOBALS['zym_decrypt']['����Ĉ�����������ĥ�����־��Î��']("update2.sql");$a=$GLOBALS['zym_decrypt']['������������î��î���þ������å�']('{DBQZ}', DBQZ, $a);$a=$GLOBALS['zym_decrypt']['���ċ�ľ��־��������Ô�î֔���Ď'](";",$a);$error='';for($i=0;$i<$GLOBALS['zym_decrypt']['�֯������֎��֮��ľ��֋�î������']($a);$i++){if($DB->query($a[$i])){$c++;}else{$d++;$error.=$DB->error().'<br/>';}}echo base64_decode('PGRpdiBjbGFzcz0iYm94Ij4=');echo base64_decode('5pWw5o2u6KGo57uT5p6E5pu05paw5oiQ5YqfPGJyLz5TUUzmiJDlip8=').$c.'句/失败'.$d.'句<br/><a href="'.$_SERVER['PHP_SELF'].'?do=3">>>下一步</a>';}elseif($do=='3'){$u="http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];if(!$GLOBALS['zym_decrypt']['�ĈÔîÈ������������֔��֥��־�'](base64_decode('aW5zdGFsbC5sb2Nr')))@$GLOBALS['zym_decrypt']['����֮���å���������������������'](base64_decode('aW5zdGFsbC5sb2Nr'),base64_decode('d29uZQ=='));@$GLOBALS['zym_decrypt']['����Ĉ�����������ĥ�����־��Î��']("http://www.qqzzz.net/api/tongji2.php?url=$u");$DB->query("update `".DBQZ."_config` set `version` ='5040',`css2` ='2',`sitetitle`='-分布式秒赞挂机系统',`mail_stmp`='smtp.163.com',`mail_port`='25',`siteurl`='$siteurl' where `id`='1';");echo base64_decode('PGRpdiBjbGFzcz0iYm94Ij48Zm9udCBjb2xvcj0iZ3JlZW4iPuabtOaWsOaIkOWKn++8geW9k+WJjeeJiOacrCBWNS40PC9mb250Pjxici8+PGJyLz48YSBocmVmPSIuLi9pbmRleC5waHAiPj4+6L+U5Zue572R56uZ6aaW6aG1PC9hPg==');}}}echo base64_decode('PGhyPg==');include(ROOT.base64_decode('aW5jbHVkZXMvZm9vdC5waHA='));echo base64_decode('PC9kaXY+PC9ib2R5PjwvaHRtbD4=');?>