<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀýÃÃÃ®ˆŽ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃýÖ¥Ž”ýÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['ý®”ýÁÁ®ŽÁÁ¥¾ÃÄ®¯¯®Ã”¥Ž®ˆ¥Ö‹¥Ä”À®']=base64_decode('cHJlZ19tYXRjaA=='); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀýÃÃÃ®ˆŽ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃýÖ¥Ž”ýÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();if($conf['banned'] && $GLOBALS['zym_decrypt']['ý®”ýÁÁ®ŽÁÁ¥¾ÃÄ®¯¯®Ã”¥Ž®ˆ¥Ö‹¥Ä”À®']('/('.$conf['banned'].')/',$clientip)&& $isadmin!=1){echo <<<HTML
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ç«™ç‚¹ä¿¡æ¯</title>
</head>
<body bgcolor="#FFFFFF">
<table cellpadding="0" cellspacing="0" border="0" width="600" align="center" height="85%">
<tr align="center" valign="middle">
	<td>
	<table cellpadding="20" cellspacing="0" border="0" width="80%" align="center" style="font-family: Verdana, Tahoma; color: #666666; font-size: 16px">
	<tr>
	<td valign="middle" align="center" bgcolor="#EBEBEB">
		<b style="font-size: 20px">ç«™ç‚¹ä¿¡æ¯</b>
		<br /><br /><p style="text-align:left;">æŠ±æ­‰ï¼Œæ‚¨çš„ IP åœ°å€ä¸åœ¨å…è®¸èŒƒå›´å†…ï¼Œæ— æ³•è®¿é—®æœ¬ç«™ç‚¹ï¼</p>
		<br /><br />
	</td>
	</tr>
	</table>
	</td>
</tr>
</table>
</body>
</html>
HTML;
exit;}?>