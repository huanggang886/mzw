<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀýÃÃÃ®ˆŽ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃýÖ¥Ž”ýÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['ýÄÀÁ”ÁÀÀŽÄ‹¥À‹®Ö®ÁÀý‹”ˆ¾ÁŽÀ®ÄÄÃˆ']=base64_decode('ZGFkZHNsYXNoZXM=');$zym_decrypt['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']=base64_decode('c2hvd21zZw==');$zym_decrypt['‹ÖÀ¥ˆýý®Ž‹ÄÀÖ”¥ÃŽÃ®Ö¯ÖŽ®¯À¥®¾ŽÃÃ']=base64_decode('Z2V0R1RL');$zym_decrypt['Áý®‹Á¾¯ÖÃÀÄÖÃ®ÖÃÃ®¾À¾Ã¾ÃÃÁˆ¾®Ã¥Ã']=base64_decode('c3RyX3JlcGxhY2U=');$zym_decrypt['”ÖÖÄ‹¾Ä¾¯ÃÖ¾ÖÁÖÃÀŽ‹ÀÃ”¾Ã®Ö””ˆÖÄŽ']=base64_decode('ZXhwbG9kZQ==');$zym_decrypt['ŽÁýýÃ¯¥‹¯‹®”ýÃ®ÃÁÄŽ”ÀŽÖ‹Ã¯ÖÖý¥Ö‹']=base64_decode('dGltZQ==');$zym_decrypt['”Á®Ö¥ÃÖÀÖ¥¥ÃýÁÖÖ¥ýˆˆ¥ÄÄ®”¯®ÁÁ‹Ä¯']=base64_decode('Z2V0X2N1cmw=');$zym_decrypt['®¥À¾Á¯ý¥®ÁýÄ¯ˆˆÄ””Ö”ÃÀÄÀŽ‹¾ýýý¯Ã']=base64_decode('YXJyYXlfa2V5X2V4aXN0cw==');$zym_decrypt['ÖÃ”®¾¥‹Ö¾Á¾ÀÄÀÁ®ÃÁÁ¾ÀˆŽŽ®”À®¥¥ˆ¾']=base64_decode('Zmx1c2g=');$zym_decrypt['À¾Ä®ÃÃ”Ä”Ã¾ÀÖ¾ÄÁ¥¥ÀˆŽýÀˆ®Ö®‹¾ýˆÖ']=base64_decode('b2JfZmx1c2g='); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀýÃÃÃ®ˆŽ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃýÖ¥Ž”ýÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="æ‰¹é‡æ·»åŠ å¥½å‹";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>é¦–é¡µ</a></li>
<li><a href="index.php?mod=qqlist">ï¼±ï¼±ç®¡ç†</a></li>
<li><a href="index.php?mod=list-qq&qq='.$_GET['qq'].'">'.$_GET['qq'].'</a></li>
<li class="active"><a href="#">æ‰¹é‡æ·»åŠ å¥½å‹</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLWxnLTYgY29sLW1kLTggY29sLXNtLTEwIGNvbC14cy0xMiBjZW50ZXItYmxvY2siIHJvbGU9Im1haW4iPg==');if($islogin==1){$qq=$GLOBALS['zym_decrypt']['ýÄÀÁ”ÁÀÀŽÄ‹¥À‹®Ö®ÁÀý‹”ˆ¾ÁŽÀ®ÄÄÃˆ']($_GET['qq']);if(!$qq){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('å‚æ•°ä¸èƒ½ä¸ºç©ºï¼');}$row=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$qq}' limit 1");if($row['uid']!=$uid && $isadmin==0){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('ä½ åªèƒ½æ“ä½œè‡ªå·±çš„QQå“¦ï¼');}if ($row['status2']!=1){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('SKEYå·²è¿‡æœŸï¼');}$sid=$row['sid'];$skey=$row['skey'];?>
<div class="panel panel-primary">
	<div class="panel-heading w h">
		<h3 class="panel-title" align="center">æ‰¹é‡æ·»åŠ å¥½å‹</h3>
	</div>
	<div class="panel-body box" align="left">
<?php
if(isset($_POST['uins'])){$groupid=$GLOBALS['zym_decrypt']['ýÄÀÁ”ÁÀÀŽÄ‹¥À‹®Ö®ÁÀý‹”ˆ¾ÁŽÀ®ÄÄÃˆ']($_POST['groupid']);echo base64_decode('PGxhYmVsPua3u+WKoOWlveWPi+e7k+aenDo8L2xhYmVsPjxicj4=');$gtk =$GLOBALS['zym_decrypt']['‹ÖÀ¥ˆýý®Ž‹ÄÀÖ”¥ÃŽÃ®Ö¯ÖŽ®¯À¥®¾ŽÃÃ']($row['pskey']);$cookie='pt2gguin=o0'.$qq.'; uin=o0'.$qq.'; skey='.$skey.'; p_skey='.$row['pskey'].'; p_uin=o0'.$qq.';';$ua='Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36';$url='http://w.qzone.qq.com/cgi-bin/tfriend/friend_addfriend.cgi?g_tk='.$gtk;$uins =$GLOBALS['zym_decrypt']['Áý®‹Á¾¯ÖÃÀÄÖÃ®ÖÃÃ®¾À¾Ã¾ÃÃÁˆ¾®Ã¥Ã'](array("\r\n", "\r", "\n"), "[br]", $_POST['uins']);$match=$GLOBALS['zym_decrypt']['”ÖÖÄ‹¾Ä¾¯ÃÖ¾ÖÁÖÃÀŽ‹ÀÃ”¾Ã®Ö””ˆÖÄŽ']("[br]",$uins);foreach($match as $touin){if(!$touin)continue;$post='sid=0&ouin='.$touin.'&uin='.$qq.'&fupdate=1&rd=0.017492896'.$GLOBALS['zym_decrypt']['ŽÁýýÃ¯¥‹¯‹®”ýÃ®ÃÁÄŽ”ÀŽÖ‹Ã¯ÖÖý¥Ö‹']().'&fuin='.$touin.'&groupId='.$groupid.'&realname=&flag=&chat=&key=&im=0&g_tk='.$gtk.'&from=9&from_source=11&format=json&qzreferrer=http://user.qzone.qq.com/'.$qq.'/myhome/friends/ofpmd';$json=$GLOBALS['zym_decrypt']['”Á®Ö¥ÃÖÀÖ¥¥ÃýÁÖÖ¥ýˆˆ¥ÄÄ®”¯®ÁÁ‹Ä¯']($url,$post,'http://user.qzone.qq.com/'.$qq.'/myhome/friends/ofpmd',$cookie,0,$ua);$json=mb_convert_encoding($json, "UTF-8", "UTF-8");$arr =json_decode($json, true);if($GLOBALS['zym_decrypt']['®¥À¾Á¯ý¥®ÁýÄ¯ˆˆÄ””Ö”ÃÀÄÀŽ‹¾ýýý¯Ã'](base64_decode('Y29kZQ=='),$arr))echo $touin.'&nbsp;'.$arr['message'].'<br/>';else echo $touin.'&nbsp;èŽ·å–ç»“æžœå¤±è´¥ï¼<br/>';$GLOBALS['zym_decrypt']['ÖÃ”®¾¥‹Ö¾Á¾ÀÄÀÁ®ÃÁÁ¾ÀˆŽŽ®”À®¥¥ˆ¾']();$GLOBALS['zym_decrypt']['À¾Ä®ÃÃ”Ä”Ã¾ÀÖ¾ÄÁ¥¥ÀˆŽýÀˆ®Ö®‹¾ýˆÖ']();}echo base64_decode('PGJyLz48YSBocmVmPSJpbmRleC5waHA/bW9kPWZyaWVuZCZxcT0=').$qq.'"><< è¿”å›žä¸Šä¸€é¡µ</a>';}else{$gtk =$GLOBALS['zym_decrypt']['‹ÖÀ¥ˆýý®Ž‹ÄÀÖ”¥ÃŽÃ®Ö¯ÖŽ®¯À¥®¾ŽÃÃ']($row['pskey']);$cookie='pt2gguin=o0'.$qq.'; uin=o0'.$qq.'; skey='.$skey.'; p_skey='.$row['pskey'].'; p_uin=o0'.$qq.';';$ua='Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36';$url='http://r.qzone.qq.com/cgi-bin/tfriend/friend_getgroupinfo.cgi?uin='.$qq.'&fuin=&rd=0.808466'.$GLOBALS['zym_decrypt']['ŽÁýýÃ¯¥‹¯‹®”ýÃ®ÃÁÄŽ”ÀŽÖ‹Ã¯ÖÖý¥Ö‹']().'&fupdate=1&format=json&g_tk='.$gtk;$json=$GLOBALS['zym_decrypt']['”Á®Ö¥ÃÖÀÖ¥¥ÃýÁÖÖ¥ýˆˆ¥ÄÄ®”¯®ÁÁ‹Ä¯']($url,$post,'http://user.qzone.qq.com/'.$qq.'/myhome/friends/center',$cookie,0,$ua);$json=mb_convert_encoding($json, "UTF-8", "UTF-8");$arr =json_decode($json, true);if (!$arr){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('åˆ†ç»„åˆ—è¡¨èŽ·å–å¤±è´¥ï¼');}elseif ($arr["code"] == -3000){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('SKEYå·²è¿‡æœŸï¼');}elseif ($arr["code"] != 0){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']($arr["message"],3);}?>

		<form action="index.php?mod=friend&qq=<?php echo $qq ?>" method="POST">
		<div class="form-group">
		<label>æ‰¹é‡æ·»åŠ å¥½å‹QQ (æ¯è¡Œä¸€ä¸ª):</label><br>
		<textarea class="form-control" name="uins" rows="10" placeholder="æ­¤å¤„å¡«å†™QQå·ï¼Œæ¯è¡Œä¸€ä¸ªï¼Œä¸èƒ½æœ‰ç©ºè¡Œ"></textarea>
		<label>åˆ†ç»„:</label><br>
		<select name="groupid" class="form-control">
			<?php
 foreach($arr['data']['items'] as $row){echo '<option value="'.$row['groupId'].'">'.$row['groupId'].'_'.$row['groupname'].'</option>';}?>
			</select>
		<font color="green">ä¸€æ¬¡æ€§æ·»åŠ è¿‡å¤šå¯èƒ½ä¼šå¯¼è‡´è®¿é—®è¶…æ—¶ã€‚</font><br/>
		<input type="submit" class="btn btn-primary btn-block" value="ç¡®å®šæ·»åŠ ">
		</div>
		</form>
<?php }?>
	</div>
</div>

<?php
}else{$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ'](base64_decode('55m75b2V5aSx6LSl77yM5Y+v6IO95piv5a+G56CB6ZSZ6K+v5oiW6ICF6Lqr5Lu95aSx5pWI5LqG77yM6K+3PGEgaHJlZj0iaW5kZXgucGhwP21vZD1sb2dpbiI+6YeN5paw55m75b2VPC9hPu+8gQ=='),3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>