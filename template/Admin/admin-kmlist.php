<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['Á®Ã®ÀÁÖÃ‹¥ÁÖÃÖ¯”ÖÁ‹ÃÀıÖ”¾Ã¥ÁÃ']=base64_decode('c3RybGVu');$zym_decrypt['Ö¥¯¯ÃÀ‹¾¥¾À¾®‹¾ÃÁÀÖÖ”‹Àı®Ö¯ÃÁÃÖÃ']=base64_decode('bXRfcmFuZA==');$zym_decrypt['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']=base64_decode('aW50dmFs');$zym_decrypt['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']=base64_decode('c2hvd21zZw==');$zym_decrypt['®ıÖı®¥Ãı®¯”À¯‹ÖÄıÄ”ı””À¯®ˆÃ¥Ö']=base64_decode('Z2V0a20='); ?>
<?php
if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="å¡å¯†åˆ—è¡¨";function getkm($len =12){$str ="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";$strlen =$GLOBALS['zym_decrypt']['Á®Ã®ÀÁÖÃ‹¥ÁÖÃÖ¯”ÖÁ‹ÃÀıÖ”¾Ã¥ÁÃ']($str);$randstr ="";for ($i =0;$i < $len;$i++){$randstr .= $str[$GLOBALS['zym_decrypt']['Ö¥¯¯ÃÀ‹¾¥¾À¾®‹¾ÃÁÀÖÖ”‹Àı®Ö¯ÃÁÃÖÃ'](0, $strlen - 1)];}return $randstr;}$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>é¦–é¡µ</a></li>
<li><a href="index.php?mod=admin"><i class="icon fa fa-cog"></i>åå°ç®¡ç†</a></li>
<li class="active"><a href="#"><i class="icon fa fa-list-alt"></i>å¡å¯†åˆ—è¡¨</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTEyIiByb2xlPSJtYWluIj4=');$my=isset($_GET['my'])?$_GET['my']:null;if ($isadmin==1 || $isdeputy==1){$kind=isset($_GET['kind'])?$_GET['kind']:null;if($my==null){if(isset($_GET['km'])){$sql=" km='{$_GET['km']}'";}elseif($kind==1){$sql=" kind='1'";$link='&kind='.$kind;$name='å……å€¼å¡';$addsm='æ¯ä¸ªå¡å¯†é¢é¢';}elseif($kind==2){$sql=" kind='2'";$link='&kind='.$kind;$name='VIPå¡';$addsm='æ¯ä¸ªå¡å¯†å¼€é€šæœˆæ•°(0ä¸ºæ°¸ä¹…)';}elseif($kind==3){$sql=" kind='3'";$link='&kind='.$kind;$name='è¯•ç”¨å¡';$addsm='æ¯ä¸ªå¡å¯†å¼€é€šå¤©æ•°';}elseif($kind==4){$sql=" kind='4'";$link='&kind='.$kind;$name='é…é¢å¡';$addsm='æ¯ä¸ªå¡å¯†çš„é…é¢æ•°é‡';}elseif($kind==5){$sql=" kind='5'";$link='&kind='.$kind;$name='ä»£ç†å¡';$addsm='æ¯ä¸ªå¡å¯†çš„ä»£ç†ä½™é¢';}$numrows =$DB->count("select count(*) from ".DBQZ."_kms where".$sql);if($kind==1){echo '<ul class="nav nav-tabs">
	  <li class="active"><a href="#">å……å€¼å¡å¡å¯†</a></li>
	  <li><a href="index.php?mod=admin-kmlist&kind=2">VIPå¡å¡å¯†</a></li>
	  <li><a href="index.php?mod=admin-kmlist&kind=3">è¯•ç”¨å¡å¡å¯†</a></li>
	  <li><a href="index.php?mod=admin-kmlist&kind=4">é…é¢å¡å¡å¯†</a></li>
	  <li><a href="index.php?mod=admin-kmlist&kind=5">ä»£ç†å¡å¡å¯†</a></li>
</ul>';}elseif($kind==2){echo '<ul class="nav nav-tabs">
	  <li><a href="index.php?mod=admin-kmlist&kind=1">å……å€¼å¡å¡å¯†</a></li>
	  <li class="active"><a href="#">VIPå¡å¡å¯†</a></li>
	  <li><a href="index.php?mod=admin-kmlist&kind=3">è¯•ç”¨å¡å¡å¯†</a></li>
	  <li><a href="index.php?mod=admin-kmlist&kind=4">é…é¢å¡å¡å¯†</a></li>
	  <li><a href="index.php?mod=admin-kmlist&kind=5">ä»£ç†å¡å¡å¯†</a></li>
</ul>';}elseif($kind==3){echo '<ul class="nav nav-tabs">
	  <li><a href="index.php?mod=admin-kmlist&kind=1">å……å€¼å¡å¡å¯†</a></li>
	  <li><a href="index.php?mod=admin-kmlist&kind=2">VIPå¡å¡å¯†</a></li>
	  <li class="active"><a href="#">è¯•ç”¨å¡å¡å¯†</a></li>
	  <li><a href="index.php?mod=admin-kmlist&kind=4">é…é¢å¡å¡å¯†</a></li>
	  <li><a href="index.php?mod=admin-kmlist&kind=5">ä»£ç†å¡å¡å¯†</a></li>
</ul>';}elseif($kind==4){echo '<ul class="nav nav-tabs">
	  <li><a href="index.php?mod=admin-kmlist&kind=1">å……å€¼å¡å¡å¯†</a></li>
	  <li><a href="index.php?mod=admin-kmlist&kind=2">VIPå¡å¡å¯†</a></li>
	  <li><a href="index.php?mod=admin-kmlist&kind=3">è¯•ç”¨å¡å¡å¯†</a></li>
	  <li class="active"><a href="#">é…é¢å¡å¡å¯†</a></li>
	  <li><a href="index.php?mod=admin-kmlist&kind=5">ä»£ç†å¡å¡å¯†</a></li>
</ul>';}elseif($kind==5){echo '<ul class="nav nav-tabs">
	  <li><a href="index.php?mod=admin-kmlist&kind=1">å……å€¼å¡å¡å¯†</a></li>
	  <li><a href="index.php?mod=admin-kmlist&kind=2">VIPå¡å¡å¯†</a></li>
	  <li><a href="index.php?mod=admin-kmlist&kind=3">è¯•ç”¨å¡å¡å¯†</a></li>
	  <li><a href="index.php?mod=admin-kmlist&kind=4">é…é¢å¡å¡å¯†</a></li>
	  <li class="active"><a href="#">ä»£ç†å¡å¡å¯†</a></li>
</ul>';}else {echo base64_decode('PHVsIGNsYXNzPSJuYXYgbmF2LXRhYnMiPgoJICA8bGk+PGEgaHJlZj0iaW5kZXgucGhwP21vZD1hZG1pbi1rbWxpc3Qma2luZD0xIj7lhYXlgLzljaHljaHlr4Y8L2E+PC9saT4KCSAgPGxpPjxhIGhyZWY9ImluZGV4LnBocD9tb2Q9YWRtaW4ta21saXN0JmtpbmQ9MiI+VklQ5Y2h5Y2h5a+GPC9hPjwvbGk+CgkgIDxsaT48YSBocmVmPSJpbmRleC5waHA/bW9kPWFkbWluLWttbGlzdCZraW5kPTMiPuivleeUqOWNoeWNoeWvhjwvYT48L2xpPgoJICA8bGk+PGEgaHJlZj0iaW5kZXgucGhwP21vZD1hZG1pbi1rbWxpc3Qma2luZD00Ij7phY3pop3ljaHljaHlr4Y8L2E+PC9saT4KCSAgPGxpPjxhIGhyZWY9ImluZGV4LnBocD9tb2Q9YWRtaW4ta21saXN0JmtpbmQ9NSI+5Luj55CG5Y2h5Y2h5a+GPC9hPjwvbGk+CjwvdWw+');}echo base64_decode('PGgzPg==').$name.'å¡å¯†åˆ—è¡¨ ('.$numrows.')</h3>';if(isset($addsm))echo '<form action="index.php?mod=admin-kmlist&my=add" method="POST" class="form-inline"><input type="hidden" name="kind" value="'.$kind.'">
  <div class="form-group">
    <label>'.$name.'å¡å¯†ç”Ÿæˆ</label>
    <input type="text" class="form-control" name="num" placeholder="ç”Ÿæˆçš„ä¸ªæ•°">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="value" placeholder="'.$addsm.'">
  </div>
  <button type="submit" class="btn btn-primary">ç”Ÿæˆ</button>
  <a href="index.php?mod=admin-kmlist&my=qk&kind='.$kind.'" class="btn btn-danger">æ¸…ç©º</a>
  <a href="index.php?mod=admin-kmlist&my=qkuse&kind='.$kind.'" class="btn btn-danger">æ¸…ç©ºå·²ä½¿ç”¨</a>
</form>â€»<a href="http://www.917ka.com/" target="_blank">è‡ªåŠ¨å¡å¯†å‘å¡å¹³å°</a><br/>';$pagesize=$conf['pagesize'];$pages=$GLOBALS['zym_decrypt']['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']($numrows/$pagesize);if ($numrows%$pagesize){$pages++;}if (isset($_GET['page'])){$page=$GLOBALS['zym_decrypt']['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']($_GET['page']);}else{$page=1;}$offset=$pagesize*($page - 1);?>
<style>
.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>td,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>thead>tr>th{white-space: pre-wrap;}
</style>
<div class="panel panel-default table-responsive">
<table class="table table-hover">
	<thead>
		<tr>
			<th>å¡å¯†</th>
			<th>çŠ¶æ€</th>
			<th>æ—¶é—´è®°å½•</th>
			<th>æ“ä½œ</th>
		</tr>
	</thead>
	<tobdy>
<?php
 $rs=$DB->query("select * from ".DBQZ."_kms where{$sql} order by id desc limit $offset,$pagesize");$i=0;while ($myrow =$DB->fetch($rs)){$i++;$pagesl=$i+($page-1)*$pagesize;$kind=$myrow['kind'];if($kind==1){$value='<font color="blue">'.$myrow['value'].'</font> '.$conf['coin_name'];$name='å……å€¼å¡';}elseif($kind==2){if($myrow['value']==0)$myrow['value']='æ— é™';$value='<font color="blue">'.$myrow['value'].'</font> ä¸ªæœˆ';$name='VIPå¡';}elseif($kind==3){$value='<font color="blue">'.$myrow['value'].'</font> å¤©';$name='è¯•ç”¨å¡';}elseif($kind==4){$value='<font color="blue">'.$myrow['value'].'</font> ä¸ª';$name='é…é¢å¡';}elseif($kind==5){$value='<font color="blue">'.$myrow['value'].'</font> RMB';$name='ä»£ç†å¡';}if($myrow['isuse']==1){$isuse='<font color="red">å·²ä½¿ç”¨</font><br/>ä½¿ç”¨è€…:'.$myrow['user'];$usetime='<br>ä½¿ç”¨æ—¶é—´:<font color="blue">'.$myrow['usetime'].'</font>';}elseif($myrow['isuse']==0){$isuse='<font color="green">æœªä½¿ç”¨</font>';$usetime=null;}if($myrow['daili']){$dailiinfo='<br/>ä»£ç†IDï¼š'.$myrow['daili'];}echo base64_decode('PHRyPjx0ZCBzdHlsZT0id2lkdGg6MzAlOyI+PGI+').$myrow['km'].'</b><br/>'.$name.'ï¼š'.$value.$dailiinfo.'</td><td style="width:20%">'.$isuse.'</td><td style="width:30%">ç”Ÿæˆæ—¶é—´:<font color="blue">'.$myrow['addtime'].'</font>'.$usetime.'</td><td style="width:20%"><a href="index.php?mod=admin-kmlist&my=del&id='.$myrow['id'].$link.'" class="btn btn-danger btn-sm">åˆ é™¤</a></td></tr>';}?>
	</tbody>
</table>
</div>

<?php
echo base64_decode('PHVsIGNsYXNzPSJwYWdpbmF0aW9uIj4=');$first=1;$prev=$page-1;$next=$page+1;$last=$pages;if ($page>1){echo '<li><a href="index.php?mod=admin-kmlist&page='.$first.$link.'">é¦–é¡µ</a></li>';echo base64_decode('PGxpPjxhIGhyZWY9ImluZGV4LnBocD9tb2Q9YWRtaW4ta21saXN0JnBhZ2U9').$prev.$link.'">&laquo;</a></li>';}else {echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+6aaW6aG1PC9hPjwvbGk+');echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+JmxhcXVvOzwvYT48L2xpPg==');}for ($i=1;$i<$page;$i++)echo '<li><a href="index.php?mod=admin-kmlist&page='.$i.$link.'">'.$i .'</a></li>';echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+').$page.'</a></li>';for ($i=$page+1;$i<=$pages;$i++)echo '<li><a href="index.php?mod=admin-kmlist&page='.$i.$link.'">'.$i .'</a></li>';echo '';if ($page<$pages){echo '<li><a href="index.php?mod=admin-kmlist&page='.$next.$link.'">&raquo;</a></li>';echo base64_decode('PGxpPjxhIGhyZWY9ImluZGV4LnBocD9tb2Q9YWRtaW4ta21saXN0JnBhZ2U9').$last.$link.'">å°¾é¡µ</a></li>';}else {echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+JnJhcXVvOzwvYT48L2xpPg==');echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+5bC+6aG1PC9hPjwvbGk+');}echo base64_decode('PC91bD4=');}elseif($my=='add'){echo '<div class="box">';$kind=$GLOBALS['zym_decrypt']['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']($_POST['kind']);$num=$GLOBALS['zym_decrypt']['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']($_POST['num']);$value=$GLOBALS['zym_decrypt']['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']($_POST['value']);if($value<0 || $num<0){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('å¡å¯†é¢å€¼ä¸èƒ½ä¸ºè´Ÿå€¼ï¼',3);}if($num>100){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('ä¸€æ¬¡æ€§ç”Ÿæˆå¡å¯†æ•°é‡ä¸èƒ½å¤§äº100å¼ ï¼',3);}if(!isset($_SESSION['addkm_count']))$_SESSION['addkm_count']=0;if($_SESSION['addkm_count']>2000){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('å•æ—¥ç”Ÿæˆå¡å¯†æ•°é‡ä¸Šé™2000å¼ ï¼',3);}echo base64_decode('PHVsIGNsYXNzPSdsaXN0LWdyb3VwJz48bGkgY2xhc3M9J2xpc3QtZ3JvdXAtaXRlbSBhY3RpdmUnPuaIkOWKn+eUn+aIkOS7peS4i+WNoeWvhjwvbGk+');for ($i =0;$i < $num;$i++){$km=$GLOBALS['zym_decrypt']['®ıÖı®¥Ãı®¯”À¯‹ÖÄıÄ”ı””À¯®ˆÃ¥Ö'](12);$sql=$DB->query("insert into `".DBQZ."_kms` (`kind`,`km`,`value`,`addtime`) values ('".$kind."','".$km."','".$value."','".$date."')");if($sql){$_SESSION['addkm_count']++;echo "<li class='list-group-item'>$km</li>";}}echo base64_decode('PC91bD48L2Rpdj48YSBocmVmPSJpbmRleC5waHA/bW9kPWFkbWluLWttbGlzdCZraW5kPQ==').$kind.'" class="btn btn-default btn-block">>>è¿”å›å¡å¯†åˆ—è¡¨</a>';}elseif($my=='del'){echo '<div class="panel panel-primary">
<div class="panel-heading w h"><h3 class="panel-title">åˆ é™¤å¡å¯†</h3></div>
<div class="panel-body box">';$id=$_GET['id'];$kind=$_GET['kind'];$sql=$DB->query("DELETE FROM ".DBQZ."_kms WHERE id='$id'");if($sql){echo 'åˆ é™¤æˆåŠŸï¼';}else{echo base64_decode('5Yig6Zmk5aSx6LSl77yB');}echo base64_decode('PGhyLz48YSBocmVmPSJpbmRleC5waHA/bW9kPWFkbWluLWttbGlzdCZraW5kPQ==').$kind.'">>>è¿”å›å¡å¯†åˆ—è¡¨</a></div></div>';}elseif($my=='qk'){$kind=$_GET['kind'];echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwgcGFuZWwtcHJpbWFyeSI+CjxkaXYgY2xhc3M9InBhbmVsLWhlYWRpbmcgdyBoIj48aDMgY2xhc3M9InBhbmVsLXRpdGxlIj7muIXnqbrljaHlr4Y8L2gzPjwvZGl2Pgo8ZGl2IGNsYXNzPSJwYW5lbC1ib2R5IGJveCI+CuaCqOehruiupOimgea4heepuuaJgOacieWNoeWvhuWQl++8n+a4heepuuWQjuaXoOazleaBouWkje+8gTxicj48YSBocmVmPSJpbmRleC5waHA/bW9kPWFkbWluLWttbGlzdCZteT1xazIma2luZD0=').$kind.'">ç¡®è®¤</a> | <a href="javascript:history.back();">è¿”å›</a></div></div>';}elseif($my=='qk2'){echo '<div class="panel panel-primary">
<div class="panel-heading w h"><h3 class="panel-title">æ¸…ç©ºå¡å¯†</h3></div>
<div class="panel-body box">';$kind=$_GET['kind'];if($DB->query("DELETE FROM ".DBQZ."_kms WHERE kind='$kind'")==true){echo '<div class="box">æ¸…ç©ºæˆåŠŸï¼Œ</div>';}else{echo base64_decode('PGRpdiBjbGFzcz0iYm94Ij7muIXnqbrlpLHotKXvvIw8L2Rpdj4=');}echo base64_decode('PGhyLz48YSBocmVmPSJpbmRleC5waHA/bW9kPWFkbWluLWttbGlzdCZraW5kPQ==').$kind.'">>>è¿”å›å¡å¯†åˆ—è¡¨</a></div></div>';}elseif($my=='qkuse'){$kind=$_GET['kind'];echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwgcGFuZWwtcHJpbWFyeSI+CjxkaXYgY2xhc3M9InBhbmVsLWhlYWRpbmcgdyBoIj48aDMgY2xhc3M9InBhbmVsLXRpdGxlIj7muIXnqbrlt7Lkvb/nlKjljaHlr4Y8L2gzPjwvZGl2Pgo8ZGl2IGNsYXNzPSJwYW5lbC1ib2R5IGJveCI+CuaCqOehruiupOimgea4heepuuaJgOacieW3suS9v+eUqOeahOWNoeWvhuWQl++8nzxicj48YSBocmVmPSJpbmRleC5waHA/bW9kPWFkbWluLWttbGlzdCZteT1xa3VzZTIma2luZD0=').$kind.'">ç¡®è®¤</a> | <a href="javascript:history.back();">è¿”å›</a></div></div>';}elseif($my=='qkuse2'){echo '<div class="panel panel-primary">
<div class="panel-heading w h"><h3 class="panel-title">æ¸…ç©ºå·²ä½¿ç”¨å¡å¯†</h3></div>
<div class="panel-body box">';$kind=$_GET['kind'];if($DB->query("DELETE FROM ".DBQZ."_kms WHERE kind='$kind' and isuse=1")==true){echo '<div class="box">æ¸…ç©ºæˆåŠŸï¼Œ</div>';}else{echo base64_decode('PGRpdiBjbGFzcz0iYm94Ij7muIXnqbrlpLHotKXvvIw8L2Rpdj4=');}echo base64_decode('PGhyLz48YSBocmVmPSJpbmRleC5waHA/bW9kPWFkbWluLWttbGlzdCZraW5kPQ==').$kind.'">>>è¿”å›å¡å¯†åˆ—è¡¨</a></div></div>';}}else {$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ'](base64_decode('5ZCO5Y+w566h55CG55m75b2V5aSx6LSl44CC6K+35Lul566h55CG5ZGY6Lqr5Lu9IDxhIGhyZWY9ImluZGV4LnBocD9tb2Q9bG9naW4iPumHjeaWsOeZu+W9lTwvYT7vvIE='),3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>