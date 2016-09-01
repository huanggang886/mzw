<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀýÃÃÃ®ˆŽ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃýÖ¥Ž”ýÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['”¾ˆÃÃýˆÁÖ¯ý¾‹ÁÀÖÖÄ¥¥ÖÀÖÖˆˆˆ®ŽÖÄÄ']=base64_decode('aXNfbnVtZXJpYw==');$zym_decrypt['”Á®Ö¥ÃÖÀÖ¥¥ÃýÁÖÖ¥ýˆˆ¥ÄÄ®”¯®ÁÁ‹Ä¯']=base64_decode('Z2V0X2N1cmw=');$zym_decrypt['‹ÁÃÄÃýÄÄÄÖ®ÖÖÀÖÃÖÀ®Ö®¥ŽÁ¾Á”Ö¥ˆ®Ä']=base64_decode('cHJlZ19tYXRjaF9hbGw=');$zym_decrypt['ˆÖ¯¥ÖÀŽ¥ÁÖŽˆÖÖ®‹ÖÄ¾ˆ‹Ö‹ÃÃ®ý”¾®¾®']=base64_decode('Y291bnQ=');$zym_decrypt['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']=base64_decode('c2hvd21zZw=='); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀýÃÃÃ®ˆŽ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃýÖ¥Ž”ýÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="ç©ºé—´èƒŒæ™¯éŸ³ä¹æŸ¥è¯¢";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>é¦–é¡µ</a></li>
<li><a href="index.php?mod=qqlist">ï¼±ï¼±ç®¡ç†</a></li>
<li><a href="index.php?mod=list-qq&qq='.$_GET['qq'].'">'.$_GET['qq'].'</a></li>
<li class="active"><a href="#">ç©ºé—´èƒŒæ™¯éŸ³ä¹</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTEyIiByb2xlPSJtYWluIj4=');if($islogin==1){?>
<div class="panel panel-primary">
	<div class="panel-heading w h">
		<h3 class="panel-title" align="center">ä½¿ç”¨è¯´æ˜Ž</h3>
	</div>
	<div class="panel-body box" align="left">
		<p style="color:red">ä½¿ç”¨æ­¤åŠŸèƒ½å¯ä»¥èŽ·å–ä»»æ„QQç©ºé—´çš„èƒŒæ™¯éŸ³ä¹ï¼ŒåŒæ—¶å¯ä»¥å°†ä¸‹è½½åœ°å€åšä¸ºéŸ³ä¹å¤–é“¾ä½¿ç”¨ã€‚</p>
	</div>
</div>
<div class="panel panel-primary">
	<div class="panel-heading w h" style="background: #56892E;">
		<h3 class="panel-title" align="center">ç©ºé—´èƒŒæ™¯éŸ³ä¹æŸ¥è¯¢</h3>
	</div>
	<ul align="center" class="list-group box" style="list-style:none;">
		<li class="list-group-item">
    <form action="index.php" method="get"><input type="hidden" name="mod" value="qzmusic">
    è¯·è¾“å…¥è¦æŸ¥è¯¢çš„QQ:<input type="text" class="form-control" name="qq" size="20"><br><input type="submit" class="btn btn-primary btn-block" value="æŸ¥è¯¢">
    </form>
<br>
	</ul>
</div>
<div class="panel panel-primary box">
<?php
if(isset($_GET['qq'])){if($_GET['qq'] == ''){?>
<table class="table table-bordered table-striped">
<thead>
    <tr>
      <td colspan="2">æŸ¥è¯¢ç»“æžœï¼š</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td colspan="2"><div class="alerte alert-error">è¯·è¾“å…¥æ‚¨è¦æŸ¥è¯¢çš„QQ</div></td>
    </tr>
  </tbody>
</table>
<?php
 }elseif(!$GLOBALS['zym_decrypt']['”¾ˆÃÃýˆÁÖ¯ý¾‹ÁÀÖÖÄ¥¥ÖÀÖÖˆˆˆ®ŽÖÄÄ']($_GET['qq'])){?>
<table class="table table-bordered table-striped">
<thead>
    <tr>
      <td colspan="2">æŸ¥è¯¢ç»“æžœï¼š</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td colspan="2"><div class="alerte alert-error">QQå¿…é¡»ä¸ºæ•°å­—</div></td>
    </tr>
  </tbody>
</table>
<?php
 }else{$url =$GLOBALS['zym_decrypt']['”Á®Ö¥ÃÖÀÖ¥¥ÃýÁÖÖ¥ýˆˆ¥ÄÄ®”¯®ÁÁ‹Ä¯']("http://qzone-music.qq.com/fcg-bin/cgi_playlist_xml.fcg?json=1&uin=".$_GET['qq']."&g_tk=5381");$GLOBALS['zym_decrypt']['‹ÁÃÄÃýÄÄÄÖ®ÖÖÀÖÃÖÀ®Ö®¥ŽÁ¾Á”Ö¥ˆ®Ä'](base64_decode('QHhzb25nX25hbWVcOiIoLiopIkBVaQ=='),$url,$arr);$GLOBALS['zym_decrypt']['‹ÁÃÄÃýÄÄÄÖ®ÖÖÀÖÃÖÀ®Ö®¥ŽÁ¾Á”Ö¥ˆ®Ä'](base64_decode('QHhxdXNpY19pZDooLiopLHhjdHlwZTooLiopLHhleHBpcmVfdGltZUBVaQ=='),$url,$xqusic);$GLOBALS['zym_decrypt']['‹ÁÃÄÃýÄÄÄÖ®ÖÖÀÖÃÖÀ®Ö®¥ŽÁ¾Á”Ö¥ˆ®Ä'](base64_decode('QHhzb25nX3VybFw6JyguKiknQFVp'),$url,$arrurl);$GLOBALS['zym_decrypt']['‹ÁÃÄÃýÄÄÄÖ®ÖÖÀÖÃÖÀ®Ö®¥ŽÁ¾Á”Ö¥ˆ®Ä'](base64_decode('QHhzaW5nZXJfbmFtZVw6IiguKikiQFVp'),$url,$singger);$n =$GLOBALS['zym_decrypt']['ˆÖ¯¥ÖÀŽ¥ÁÖŽˆÖÖ®‹ÖÄ¾ˆ‹Ö‹ÃÃ®ý”¾®¾®']($arr[1]);?>
<table class="table table-bordered table-striped">
<thead>
    <tr>
      <td colspan="2"><?php echo $_GET['qq'];?> çš„æŸ¥è¯¢ç»“æžœï¼š</td>
    </tr>
       </thead>
<?php
 if($n == 0){?>
  <tbody>
    <tr>
      <td colspan="2"><div class="alerte alert-error">è¯¥QQæœªè®¾ç½®èƒŒæ™¯éŸ³ä¹</div></td>
    </tr>
 </tbody>
<?php
 }else{?>
  <tbody>
    <tr>
      <td>æ­Œæ›²åç§°ï¼š</td>
      <td>ä¸‹è½½åœ°å€ï¼š</td>
    </tr>
  </tbody>
<?php
 for($i=0;$i<$n;$i++){$name=mb_convert_encoding($arr[1][$i], "UTF-8", "GB2312");$singer=mb_convert_encoding($singger[1][$i], "UTF-8", "GB2312");?>
  <thead>
    <tr>
      <td><?php echo $name .' - '. $singer?></td>
      <td><div class="btn-group"><a href="http://stream.qqmusic.tc.qq.com/<?php echo $xqusic[1][$i]?>.m4a?fromtag=6" target="_blank">ä¸‹è½½åœ°å€1</a>ï½œ<a href="<?php echo $arrurl[1][$i]?>" target="_blank">ä¸‹è½½åœ°å€2</a></div></td>
    </tr>
  </thead>
<?php
 }}?>
</table>
<?php
 }}?>
</div>

<?php
}else{$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('ç™»å½•å¤±è´¥ï¼Œå¯èƒ½æ˜¯å¯†ç é”™è¯¯æˆ–è€…èº«ä»½å¤±æ•ˆäº†ï¼Œè¯·<a href="index.php?mod=login">é‡æ–°ç™»å½•</a>ï¼',3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>