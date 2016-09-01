<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀýÃÃÃ®ˆŽ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃýÖ¥Ž”ýÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['ýÄÀÁ”ÁÀÀŽÄ‹¥À‹®Ö®ÁÀý‹”ˆ¾ÁŽÀ®ÄÄÃˆ']=base64_decode('ZGFkZHNsYXNoZXM=');$zym_decrypt['Ä‹ýÖ¯‹®Ã”ÃÖ®‹ÀÖÖÀÀ”ÃÁÖ¥”Ã®‹ÄÃÁÄÖ']=base64_decode('bWQ1');$zym_decrypt['®¥À¾Á¯ý¥®ÁýÄ¯ˆˆÄ””Ö”ÃÀÄÀŽ‹¾ýýý¯Ã']=base64_decode('YXJyYXlfa2V5X2V4aXN0cw==');$zym_decrypt['®®Ã®®”®ˆŽ¾ŽÖÀŽÀÃýÀý¯ˆ¥ˆˆŽˆ¯®‹ÃÃ®']=base64_decode('c2F2ZVNldHRpbmc=');$zym_decrypt['ýýÖˆŽý¥‹ˆ”Ã”¾ÃŽÖ‹ÃÖˆÁ¯À‹¾”À‹Žý”Ž']=base64_decode('dXJsZW5jb2Rl');$zym_decrypt['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']=base64_decode('c2hvd21zZw=='); ?>
<?php
if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀýÃÃÃ®ˆŽ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃýÖ¥Ž”ýÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="è´¢ä»˜é€šç™»å½•";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>é¦–é¡µ</a></li>
<li><a href="index.php?mod=admin"><i class="icon fa fa-cog"></i>åŽå°ç®¡ç†</a></li>
<li class="active"><a href="#"><i class="icon fa fa-cogs"></i>è´¢ä»˜é€šç™»å½•</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');$my=isset($_POST['my'])?$_POST['my']:$_GET['my'];echo base64_decode('PGRpdiBjbGFzcz0iY29sLWxnLTggY29sLXNtLTEwIGNvbC14cy0xMiBjZW50ZXItYmxvY2siIHJvbGU9Im1haW4iPg==');if ($isadmin==1){if($_POST['type']=="edit"){$qq =$GLOBALS['zym_decrypt']['ýÄÀÁ”ÁÀÀŽÄ‹¥À‹®Ö®ÁÀý‹”ˆ¾ÁŽÀ®ÄÄÃˆ']($_POST['tenpay_account']);$pwd =$GLOBALS['zym_decrypt']['Ä‹ýÖ¯‹®Ã”ÃÖ®‹ÀÖÖÀÀ”ÃÁÖ¥”Ã®‹ÄÃÁÄÖ']($_POST['tenpay_pwd']);$sig =$_POST['sig'];$code =$_POST['code'];include(SYSTEM_ROOT.base64_decode('dGVucGF5L3RlbnBheWNvcmUucGhw'));$qlogin =new tenpay($qq,$pwd,$code,$sig);$arr =json_decode($qlogin->json,true);if($GLOBALS['zym_decrypt']['®¥À¾Á¯ý¥®ÁýÄ¯ˆˆÄ””Ö”ÃÀÄÀŽ‹¾ýýý¯Ã'](base64_decode('Y29kZQ=='),$qlogin)){if($arr['code']==-1){$code=1;$sig=$arr['sig'];$loginsig =$arr['vsig'];}elseif($arr['code']==-3){$msg=$arr['msg'];}else{$cookie =$arr['cookies'];$GLOBALS['zym_decrypt']['®®Ã®®”®ˆŽ¾ŽÖÀŽÀÃýÀý¯ˆ¥ˆˆŽˆ¯®‹ÃÃ®'](base64_decode('dGVucGF5X2FjY291bnQ='), $qq);$GLOBALS['zym_decrypt']['®®Ã®®”®ˆŽ¾ŽÖÀŽÀÃýÀý¯ˆ¥ˆˆŽˆ¯®‹ÃÃ®'](base64_decode('dGVucGF5X3B3ZA=='), $pwd);$GLOBALS['zym_decrypt']['®®Ã®®”®ˆŽ¾ŽÖÀŽÀÃýÀý¯ˆ¥ˆˆŽˆ¯®‹ÃÃ®'](base64_decode('dGVucGF5X2Nvb2tpZXM='), $GLOBALS['zym_decrypt']['ýýÖˆŽý¥‹ˆ”Ã”¾ÃŽÖ‹ÃÖˆÁ¯À‹¾”À‹Žý”Ž']($arr['cookies']));$CACHE->clear();exit(base64_decode('PHNjcmlwdCBsYW5ndWFnZT0iamF2YXNjcmlwdCI+YWxlcnQoJ+eZu+W9leaIkOWKnyzkv53lrZjmiJDlip8hJyk7aGlzdG9yeS5nbygtMSk7PC9zY3JpcHQ+'));}}}elseif($_POST['type']=="mail"){$tenpay_mail =$GLOBALS['zym_decrypt']['ýÄÀÁ”ÁÀÀŽÄ‹¥À‹®Ö®ÁÀý‹”ˆ¾ÁŽÀ®ÄÄÃˆ']($_POST['tenpay_mail']);$GLOBALS['zym_decrypt']['®®Ã®®”®ˆŽ¾ŽÖÀŽÀÃýÀý¯ˆ¥ˆˆŽˆ¯®‹ÃÃ®'](base64_decode('dGVucGF5X21haWw='), $tenpay_mail);$CACHE->clear();exit(base64_decode('PHNjcmlwdCBsYW5ndWFnZT0iamF2YXNjcmlwdCI+YWxlcnQoJ+S/neWtmOaIkOWKnyEnKTtoaXN0b3J5LmdvKC0xKTs8L3NjcmlwdD4='));}?>
<div class="panel panel-primary">
<div class="panel-heading w h"><h3 class="panel-title">è´¢ä»˜é€šç™»å½•</h3></div><div class="panel-body box">
<form action="index.php?mod=tenpaylogin" method="post">
<input type="hidden" name="type" value="edit" />
<div class="form-group">               
	<label for="inputFirstName">*QQè´¦å·</label>
	<input type="text" class="form-control" name="tenpay_account" value="<?php echo @$_POST['tenpay_account']?>"> 
</div>
<div class="form-group">
	<label for="inputFirstName">*QQå¯†ç </label>
	<input type="password" class="form-control" name="tenpay_pwd" value="<?php echo @$_POST['tenpay_pwd']?>"> 
</div>
<div <?php if(!$code){?> style="display:none;" <?php }?>>
<div class="form-group">
	<label for="inputFirstName">*éªŒè¯ç </label>
	<input type="text" class="form-control" name="code" value="">
</div>
<div class="form-group" >
  <input type="hidden" name="sig" value="<?php echo $sig?>">
  <img src="other/getpic.php?uin=<?php echo $qq?>&sig=<?php echo $sig?>&loginsig=<?php echo $loginsig?>">
</div>
</div>
<?php if($msg){?>
<div class="form-group">
	<div class="alert alert-warning" id="load"><?=$msg?></div>
</div>
<?php }?>
<div class="form-group text-right">
<button type="submit" class="btn btn-primary btn-block" id="save">ç™»å½•å¹¶ä¿å­˜</button>
</div>
</form>
<form action="index.php?mod=tenpaylogin" method="post">
<input type="hidden" name="type" value="mail" />
<div class="form-group">               
	<label for="inputFirstName">è´¢ä»˜é€šCookieså¤±æ•ˆæé†’é‚®ç®±</label>
	<input type="email" class="form-control" name="tenpay_mail" value="<?php echo $conf['tenpay_mail']?>"> 
</div>
<div class="form-group text-right">
<button type="submit" class="btn btn-primary btn-block" id="save">ä¿å­˜è®¾ç½®</button>
</div>
</form>
</div></div>
<?php
}else {$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('åŽå°ç®¡ç†ç™»å½•å¤±è´¥ã€‚è¯·ä»¥ç®¡ç†å‘˜èº«ä»½ <a href="index.php?mod=login">é‡æ–°ç™»å½•</a>ï¼',3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>