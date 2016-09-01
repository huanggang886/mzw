<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['¥¯”¯ıÄÖıÃ””ÀÖÄ®ÄˆıÖÀÁ¾Ã®Ã®ÄÁÀ']=base64_decode('cGhvbmVfY2hlY2s='); ?>
<?php
if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="è¯•ç”¨å¡è·å–";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>é¦–é¡µ</a></li>
<li class="active"><a href="#"><i class="icon fa fa-check-square"></i>è¯•ç”¨å¡è·å–</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLWxnLTggY29sLXNtLTEwIGNvbC14cy0xMiBjZW50ZXItYmxvY2siIHJvbGU9Im1haW4iPg==');$result =$DB->query("SELECT * FROM ".DBQZ."_kms WHERE kind='3' and isuse='0' LIMIT 30");if($conf['active']!=0)$GLOBALS['zym_decrypt']['¥¯”¯ıÄÖıÃ””ÀÖÄ®ÄˆıÖÀÁ¾Ã®Ã®ÄÁÀ']();echo base64_decode('PHRhYmxlIGNsYXNzPSJ0YWJsZSB0YWJsZS1ib3JkZXJlZCI+DQo8dGJvZHkgYWxpZ249ImNlbnRlciI+DQo8dHI+DQo8dGQ+5Y2h5a+GPC90ZD4NCjx0ZD7ml7bplb88L3RkPg0KPHRkPuaYr+WQpuS9v+eUqDwvdGQ+DQo8dGQ+5L2/55SoSUQ8L3RkPg0KPHRkPuS9v+eUqOaXtumXtDwvdGQ+DQo8dGQ+5L2/55SoPC90ZD4NCjwhLS08dGQ+55Sf5oiQ5pe26Ze0PC90ZD4tLT4NCjwvdHI+');while($rows =$DB->fetch($result)){if($rows['isuse']==1){$sfsy='<font color="#FF0000">å·²ä½¿ç”¨</font>';}else{$sfsy='<font color="#0000C6">æœªä½¿ç”¨</font>';}echo base64_decode('PHRyPg0KPHRkPg=='). $rows['km'] . '</td>
<td>'. $rows['value'] . 'å¤©</td>
<td>' . $sfsy . '</td>
<td>' . $rows['user'] . '</td>
<td>' . $rows['usetime'] . '</td>
<td><form action="index.php?mod=shop&kind=3" method="POST">
<input name="km" type="hidden" value="'. $rows['km'] . '">
<button type="submit" name="submit" class="btn btn-info">ä½¿ç”¨</button>
</form>
</td>
<!--<td>' . $rows['addtime'] . '</td>-->
</tr>';}echo base64_decode('PC90Ym9keT48L3RhYmxlPg==');include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>