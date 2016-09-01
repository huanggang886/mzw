<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀýÃÃÃ®ˆŽ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃýÖ¥Ž”ýÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['Áý®‹Á¾¯ÖÃÀÄÖÃ®ÖÃÃ®¾À¾Ã¾ÃÃÁˆ¾®Ã¥Ã']=base64_decode('c3RyX3JlcGxhY2U=');$zym_decrypt['”ÖÖÄ‹¾Ä¾¯ÃÖ¾ÖÁÖÃÀŽ‹ÀÃ”¾Ã®Ö””ˆÖÄŽ']=base64_decode('ZXhwbG9kZQ==');$zym_decrypt['®®Ã®®”®ˆŽ¾ŽÖÀŽÀÃýÀý¯ˆ¥ˆˆŽˆ¯®‹ÃÃ®']=base64_decode('c2F2ZVNldHRpbmc=');$zym_decrypt['Ö®¾ýÃÃŽÄ‹ÖÁÀ”ÄˆÄÃˆ®Á”¥Á¥ÃÀÖÖÃÖÖý']=base64_decode('c2VyaWFsaXpl');$zym_decrypt['ÖÃŽÖ¾¥Á”Ö¾‹¾ýÄ®ÃÃÖ”ŽÄŽÖ®ŽÃ¯ÄÁ¥ÖÄ']=base64_decode('dW5zZXJpYWxpemU=');$zym_decrypt['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']=base64_decode('c2hvd21zZw=='); ?>
<?php
if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀýÃÃÃ®ˆŽ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃýÖ¥Ž”ýÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="æ’­æ”¾å™¨è®¾ç½®";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>é¦–é¡µ</a></li>
<li><a href="index.php?mod=admin"><i class="icon fa fa-cog"></i>åŽå°ç®¡ç†</a></li>
<li class="active"><a href="#"><i class="icon fa fa-cogs"></i>æ’­æ”¾å™¨è®¾ç½®</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');$my=isset($_POST['my'])?$_POST['my']:$_GET['my'];echo base64_decode('PGRpdiBjbGFzcz0iY29sLWxnLTggY29sLXNtLTEwIGNvbC14cy0xMiBjZW50ZXItYmxvY2siIHJvbGU9Im1haW4iPg==');if ($isadmin==1){if($_POST['type']=="edit"){$list =$_POST['list'];$list =$GLOBALS['zym_decrypt']['Áý®‹Á¾¯ÖÃÀÄÖÃ®ÖÃÃ®¾À¾Ã¾ÃÃÁˆ¾®Ã¥Ã'](array("\r\n", "\r", "\n"), "[br]", $list);$match=$GLOBALS['zym_decrypt']['”ÖÖÄ‹¾Ä¾¯ÃÖ¾ÖÁÖÃÀŽ‹ÀÃ”¾Ã®Ö””ˆÖÄŽ']("[br]",$list);$music=array();foreach($match as $val){if($val=='')continue;$array=$GLOBALS['zym_decrypt']['”ÖÖÄ‹¾Ä¾¯ÃÖ¾ÖÁÖÃÀŽ‹ÀÃ”¾Ã®Ö””ˆÖÄŽ']('|',$val);$data['name']=$array[0];$data['id']=$array[1];$music[]=$data;}$GLOBALS['zym_decrypt']['®®Ã®®”®ˆŽ¾ŽÖÀŽÀÃýÀý¯ˆ¥ˆˆŽˆ¯®‹ÃÃ®'](base64_decode('bXVzaWNfbGlzdA=='), $GLOBALS['zym_decrypt']['Ö®¾ýÃÃŽÄ‹ÖÁÀ”ÄˆÄÃˆ®Á”¥Á¥ÃÀÖÖÃÖÖý']($music));$CACHE->clear();exit(base64_decode('PHNjcmlwdCBsYW5ndWFnZT0iamF2YXNjcmlwdCI+YWxlcnQoJ+S/neWtmOaIkOWKnyEnKTtoaXN0b3J5LmdvKC0xKTs8L3NjcmlwdD4='));}else{$music=@$GLOBALS['zym_decrypt']['ÖÃŽÖ¾¥Á”Ö¾‹¾ýÄ®ÃÃÖ”ŽÄŽÖ®ŽÃ¯ÄÁ¥ÖÄ']($conf['music_list']);$list='';foreach($music as $val){$list.=$val['name'].'|'.$val['id']."\r\n";}}?>
<div class="panel panel-primary">
<div class="panel-heading w h"><h3 class="panel-title">HTML5æµ®åŠ¨æ’­æ”¾å™¨è®¾ç½®</h3></div><div class="panel-body box">
<form action="index.php?mod=musicset" method="post">
<input type="hidden" name="type" value="edit" />
<div class="form-group">
<label>æ­Œå•åˆ—è¡¨:</label><br>
<textarea class="form-control" name="list" rows="8"><?php echo $list?></textarea>
</div>
<div class="form-group text-right">
<button type="submit" class="btn btn-primary btn-block" id="save">ä¿å­˜</button>
</div>
</form>
<h5>æ­Œå•å¡«å†™è¯´æ˜Ž:</h5>
ä¸€è¡Œä¸€é¦–æ­Œæ›²ï¼Œå¯ä½¿ç”¨ç½‘æ˜“äº‘éŸ³ä¹ã€è™¾ç±³éŸ³ä¹ã€ç™¾åº¦éŸ³ä¹å’ŒQQéŸ³ä¹çš„æ­Œæ›²ã€‚<br/>
ç½‘æ˜“IDéœ€è¦åœ¨æ•°å­—åŽé¢åŠ ä¸Šwyï¼Œè™¾ç±³åœ¨åŽé¢åŠ ä¸Šxmï¼Œç™¾åº¦éŸ³ä¹åœ¨åŽé¢åŠ ä¸Šbdï¼ŒQQéŸ³ä¹åœ¨åŽé¢åŠ ä¸Šqqï¼Œæ¯”å¦‚ç½‘æ˜“éŸ³ä¹IDæ˜¯26108693ï¼Œé‚£ä¹ˆåŠ ä¸Šwyå°±æ˜¯26108693wy<br/>
æ ¼å¼ï¼š<br/>
<pre>æ­Œæ›²åç§°|æ­Œæ›²ID</pre>
ä¾‹å¦‚ï¼š<br/>
<pre>ç§‹æ®‡åˆ«æ‹|1772313955xm
å…‰è¾‰å²æœˆ|22706999wy
æ— æ•Œ|0038RM350w8m1Vqq
å€©å¥³å¹½é­‚|13125209bd
</pre>
éŸ³ä¹IDå¯ä»¥åœ¨ç›¸åº”æ’­æ”¾é¡µé¢çš„åœ°å€æ ä¸­èŽ·å¾—
</div></div>
<?php
}else {$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('åŽå°ç®¡ç†ç™»å½•å¤±è´¥ã€‚è¯·ä»¥ç®¡ç†å‘˜èº«ä»½ <a href="index.php?mod=login">é‡æ–°ç™»å½•</a>ï¼',3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>