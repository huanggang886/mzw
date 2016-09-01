<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['Á®Ã®ÀÁÖÃ‹¥ÁÖÃÖ¯”ÖÁ‹ÃÀıÖ”¾Ã¥ÁÃ']=base64_decode('c3RybGVu');$zym_decrypt['Ö¥¯¯ÃÀ‹¾¥¾À¾®‹¾ÃÁÀÖÖ”‹Àı®Ö¯ÃÁÃÖÃ']=base64_decode('bXRfcmFuZA==');$zym_decrypt['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']=base64_decode('aW50dmFs');$zym_decrypt['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']=base64_decode('c2hvd21zZw==');$zym_decrypt['Ã”ˆˆÃÃÃÃÄÃ‹”À®ˆı‹ı¾ÄÃÖ¯ı‹¾¯ÀÀÀ']=base64_decode('Y2VpbA==');$zym_decrypt['®ıÖı®¥Ãı®¯”À¯‹ÖÄıÄ”ı””À¯®ˆÃ¥Ö']=base64_decode('Z2V0a20=');$zym_decrypt['Á¾Ä¾ÖÁ¾ÖÖˆ”ÃÖÄ¯”ÀÃ”ÃÁÖ¾ˆÖÄ¾¾ÖÖ']=base64_decode('Zmxvb3I='); ?>
<?php
if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="ä»£ç†å¡å¯†åˆ—è¡¨";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>é¦–é¡µ</a></li>
<li><a href="index.php?mod=admin-daili"><i class="icon fa fa-cog"></i>ä»£ç†åå°</a></li>
<li class="active"><a href="#"><i class="icon fa fa-list-alt"></i>å¡å¯†åˆ—è¡¨</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTEyIiByb2xlPSJtYWluIj4=');function getkm($len =12){$str ="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";$strlen =$GLOBALS['zym_decrypt']['Á®Ã®ÀÁÖÃ‹¥ÁÖÃÖ¯”ÖÁ‹ÃÀıÖ”¾Ã¥ÁÃ']($str);$randstr ="";for ($i =0;$i < $len;$i++){$randstr .= $str[$GLOBALS['zym_decrypt']['Ö¥¯¯ÃÀ‹¾¥¾À¾®‹¾ÃÁÀÖÖ”‹Àı®Ö¯ÃÁÃÖÃ'](0, $strlen - 1)];}return $randstr;}$my=isset($_GET['my'])?$_GET['my']:null;if ($isdaili==1){$kind=isset($_GET['kind'])?$_GET['kind']:null;if($my==null){if($kind==1){$sql=" kind='1' and daili='{$row['userid']}'";$link='&kind='.$kind;$name='å……å€¼å¡';$addsm='æ¯ä¸ªå¡å¯†é¢é¢';}elseif($kind==2){$sql=" kind='2' and daili='{$row['userid']}'";$link='&kind='.$kind;$name='VIPå¡';$addsm='æ¯ä¸ªå¡å¯†å¼€é€šæœˆæ•°(0ä¸ºæ°¸ä¹…)';}elseif($kind==4){$sql=" kind='4' and daili='{$row['userid']}'";$link='&kind='.$kind;$name='é…é¢å¡';$addsm='æ¯ä¸ªå¡å¯†çš„é…é¢æ•°é‡';}$numrows =$DB->count("select count(*) from ".DBQZ."_kms where".$sql);if($kind==1){echo '<ul class="nav nav-tabs">
	<li><a href="index.php?mod=admin-daili">ä»£ç†åå°</a></li>
	  <li class="active"><a href="#">å……å€¼å¡å¡å¯†</a></li>
	  <li><a href="index.php?mod=admin-kmlist2&kind=2">VIPå¡å¡å¯†</a></li>
	  <li><a href="index.php?mod=admin-kmlist2&kind=4">é…é¢å¡å¡å¯†</a></li>
</ul>';echo base64_decode('PGgzPuWFheWAvOWNoeWNoeWvhuWIl+ihqCAo').$numrows.')</h3>';echo base64_decode('PGZvcm0gYWN0aW9uPSJpbmRleC5waHA/bW9kPWFkbWluLWttbGlzdDImbXk9YWRkIiBtZXRob2Q9IlBPU1QiIGNsYXNzPSJmb3JtLWlubGluZSI+PGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0ia2luZCIgdmFsdWU9Ig==').$kind.'">
  <div class="form-group">
    <label>å……å€¼å¡å¡å¯†ç”Ÿæˆ</label>
    <input type="text" class="form-control" name="num" placeholder="ç”Ÿæˆçš„ä¸ªæ•°">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="value" placeholder="'.$addsm.'">
  </div>
  <button type="submit" class="btn btn-primary">ç”Ÿæˆ</button>ï¼ˆ1RMBï¼'.$daili_rules[0].$conf['coin_name'].'ï¼‰
</form>';}elseif($kind==2){echo '<ul class="nav nav-tabs">
	<li><a href="index.php?mod=admin-daili">ä»£ç†åå°</a></li>
	  <li><a href="index.php?mod=admin-kmlist2&kind=1">å……å€¼å¡å¡å¯†</a></li>
	  <li class="active"><a href="#">VIPå¡å¡å¯†</a></li>
	  <li><a href="index.php?mod=admin-kmlist2&kind=4">é…é¢å¡å¡å¯†</a></li>
</ul>';echo base64_decode('PGgzPlZJUOWNoeWNoeWvhuWIl+ihqCAo').$numrows.')</h3>';echo base64_decode('PGZvcm0gYWN0aW9uPSJpbmRleC5waHA/bW9kPWFkbWluLWttbGlzdDImbXk9YWRkIiBtZXRob2Q9IlBPU1QiIGNsYXNzPSJmb3JtLWlubGluZSI+PGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0ia2luZCIgdmFsdWU9Ig==').$kind.'">
  <div class="form-group">
    <label>VIPå¡å¡å¯†ç”Ÿæˆ</label>
	<input type="text" class="form-control" name="num" placeholder="ç”Ÿæˆçš„ä¸ªæ•°">
  </div>
  <div class="form-group">
    <select name="value" class="form-control">
			<option value="1">VIPæœˆå¡('.$daili_rules[1].'å…ƒ)</option>
			<option value="3">VIPå­£åº¦å¡('.$daili_rules[2].'å…ƒ)</option>
			<option value="6">VIPåŠå¹´å¡('.$daili_rules[3].'å…ƒ)</option>
			<option value="12">VIPå¹´å¡('.$daili_rules[4].'å…ƒ)</option>
			<option value="0">VIPæ°¸ä¹…å¡('.$daili_rules[5].'å…ƒ)</option>
	</select>
  </div>
  <button type="submit" class="btn btn-primary">ç”Ÿæˆ</button>
</form>';}elseif($kind==4){echo '<ul class="nav nav-tabs">
	<li><a href="index.php?mod=admin-daili">ä»£ç†åå°</a></li>
	  <li><a href="index.php?mod=admin-kmlist2&kind=1">å……å€¼å¡å¡å¯†</a></li>
	  <li><a href="index.php?mod=admin-kmlist2&kind=2">VIPå¡å¡å¯†</a></li>
	  <li class="active"><a href="#">é…é¢å¡å¡å¯†</a></li>
</ul>';echo base64_decode('PGgzPumFjemineWNoeWNoeWvhuWIl+ihqCAo').$numrows.')</h3>';echo base64_decode('PGZvcm0gYWN0aW9uPSJpbmRleC5waHA/bW9kPWFkbWluLWttbGlzdDImbXk9YWRkIiBtZXRob2Q9IlBPU1QiIGNsYXNzPSJmb3JtLWlubGluZSI+PGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0ia2luZCIgdmFsdWU9Ig==').$kind.'">
  <div class="form-group">
    <label>é…é¢å¡å¡å¯†ç”Ÿæˆ</label>
	<input type="text" class="form-control" name="num" placeholder="ç”Ÿæˆçš„ä¸ªæ•°">
  </div>
  <div class="form-group">
    <select name="value" class="form-control">
			<option value="1">1ä¸ªé…é¢å¡('.$daili_rules[6].'å…ƒ)</option>
			<option value="3">3ä¸ªé…é¢å¡('.$daili_rules[7].'å…ƒ)</option>
			<option value="5">5ä¸ªé…é¢å¡('.$daili_rules[8].'å…ƒ)</option>
			<option value="10">10ä¸ªé…é¢å¡('.$daili_rules[9].'å…ƒ)</option>
	</select>
  </div>
  <button type="submit" class="btn btn-primary">ç”Ÿæˆ</button>
</form>';}echo base64_decode('4oC7PGEgaHJlZj0iaHR0cDovL3d3dy45MTdrYS5jb20vIiB0YXJnZXQ9Il9ibGFuayI+6Ieq5Yqo5Y2h5a+G5Y+R5Y2h5bmz5Y+wPC9hPjxici8+');$pagesize=$conf['pagesize'];$pages=$GLOBALS['zym_decrypt']['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']($numrows/$pagesize);if ($numrows%$pagesize){$pages++;}if (isset($_GET['page'])){$page=$GLOBALS['zym_decrypt']['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']($_GET['page']);}else{$page=1;}$offset=$pagesize*($page - 1);?>
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
 $rs=$DB->query("select * from ".DBQZ."_kms where{$sql} order by id desc limit $offset,$pagesize");$i=0;while ($myrow =$DB->fetch($rs)){$i++;$pagesl=$i+($page-1)*$pagesize;if($kind==1){$value='<font color="blue">'.$myrow['value'].'</font> '.$conf['coin_name'];}elseif($kind==2){if($myrow['value']==0)$myrow['value']='æ— é™';$value='<font color="blue">'.$myrow['value'].'</font> ä¸ªæœˆ';}elseif($kind==4){$value='<font color="blue">'.$myrow['value'].'</font> ä¸ª';}if($myrow['isuse']==1){$isuse='<font color="red">å·²ä½¿ç”¨</font><br/>ä½¿ç”¨è€…:'.$myrow['user'];$usetime='<br>ä½¿ç”¨æ—¶é—´:<font color="blue">'.$myrow['usetime'].'</font>';}elseif($myrow['isuse']==0){$isuse='<font color="green">æœªä½¿ç”¨</font>';$usetime=null;}echo base64_decode('PHRyPjx0ZCBzdHlsZT0id2lkdGg6MzAlOyI+PGI+').$myrow['km'].'</b><br/>'.$name.'ï¼š'.$value.'</td><td style="width:20%">'.$isuse.'</td><td style="width:30%">ç”Ÿæˆæ—¶é—´:<font color="blue">'.$myrow['addtime'].'</font>'.$usetime.'</td><td style="width:20%"><a href="index.php?mod=admin-kmlist2&my=del&id='.$myrow['id'].$link.'" class="btn btn-danger btn-sm">åˆ é™¤</a></td></tr>';}?>
	</tbody>
</table>
</div>

<?php
echo base64_decode('PHVsIGNsYXNzPSJwYWdpbmF0aW9uIj4=');$first=1;$prev=$page-1;$next=$page+1;$last=$pages;if ($page>1){echo '<li><a href="index.php?mod=admin-kmlist2&page='.$first.$link.'">é¦–é¡µ</a></li>';echo base64_decode('PGxpPjxhIGhyZWY9ImluZGV4LnBocD9tb2Q9YWRtaW4ta21saXN0MiZwYWdlPQ==').$prev.$link.'">&laquo;</a></li>';}else {echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+6aaW6aG1PC9hPjwvbGk+');echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+JmxhcXVvOzwvYT48L2xpPg==');}for ($i=1;$i<$page;$i++)echo '<li><a href="index.php?mod=admin-kmlist2&page='.$i.$link.'">'.$i .'</a></li>';echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+').$page.'</a></li>';for ($i=$page+1;$i<=$pages;$i++)echo '<li><a href="index.php?mod=admin-kmlist2&page='.$i.$link.'">'.$i .'</a></li>';echo '';if ($page<$pages){echo '<li><a href="index.php?mod=admin-kmlist2&page='.$next.$link.'">&raquo;</a></li>';echo base64_decode('PGxpPjxhIGhyZWY9ImluZGV4LnBocD9tb2Q9YWRtaW4ta21saXN0MiZwYWdlPQ==').$last.$link.'">å°¾é¡µ</a></li>';}else {echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+JnJhcXVvOzwvYT48L2xpPg==');echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+5bC+6aG1PC9hPjwvbGk+');}echo base64_decode('PC91bD4=');}elseif($my=='add'){echo '<div class="box">';$kind=$GLOBALS['zym_decrypt']['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']($_POST['kind']);$num=$GLOBALS['zym_decrypt']['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']($_POST['num']);$value=$GLOBALS['zym_decrypt']['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']($_POST['value']);if($value<0 || $num<0){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('å¡å¯†é¢å€¼ä¸èƒ½ä¸ºè´Ÿå€¼ï¼',3);}if($num>100){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('ä¸€æ¬¡æ€§ç”Ÿæˆå¡å¯†æ•°é‡ä¸èƒ½å¤§äº100å¼ ï¼',3);}if(!isset($_SESSION['addkm_count']))$_SESSION['addkm_count']=0;if($_SESSION['addkm_count']>1000){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('å•æ—¥ç”Ÿæˆå¡å¯†æ•°é‡ä¸Šé™1000å¼ ï¼',3);}if($kind==1)$rmb=$GLOBALS['zym_decrypt']['Ã”ˆˆÃÃÃÃÄÃ‹”À®ˆı‹ı¾ÄÃÖ¯ı‹¾¯ÀÀÀ'](($num*$value)/$daili_rules[0]);elseif($kind==2){if($value==1)$rmb=$num*$daili_rules[1];elseif($value==3)$rmb=$num*$daili_rules[2];elseif($value==6)$rmb=$num*$daili_rules[3];elseif($value==12)$rmb=$num*$daili_rules[4];elseif($value==0)$rmb=$num*$daili_rules[5];}elseif($kind==4){if($value==1)$rmb=$num*$daili_rules[6];elseif($value==3)$rmb=$num*$daili_rules[7];elseif($value==5)$rmb=$num*$daili_rules[8];elseif($value==10)$rmb=$num*$daili_rules[9];}if($rmb>$row['daili_rmb']){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('æ‚¨çš„è´¦æˆ·ä½™é¢ä¸è¶³ï¼Œè¯·è”ç³»ç«™é•¿å……å€¼ï¼',3);}else {$DB->query("update ".DBQZ."_user set daili_rmb=daili_rmb-{$rmb} where user='".$gl."'");}echo base64_decode('PHVsIGNsYXNzPSdsaXN0LWdyb3VwJz48bGkgY2xhc3M9J2xpc3QtZ3JvdXAtaXRlbSBhY3RpdmUnPuaIkOWKn+eUn+aIkOS7peS4i+WNoeWvhjwvbGk+');for ($i =0;$i < $num;$i++){$km=$GLOBALS['zym_decrypt']['®ıÖı®¥Ãı®¯”À¯‹ÖÄıÄ”ı””À¯®ˆÃ¥Ö'](12);$sql=$DB->query("insert into `".DBQZ."_kms` (`kind`,`daili`,`km`,`value`,`addtime`) values ('".$kind."','".$row['userid']."','".$km."','".$value."','".$date."')");if($sql){$_SESSION['addkm_count']++;echo "<li class='list-group-item'>$km</li>";}}echo base64_decode('PC91bD48L2Rpdj48YSBocmVmPSJpbmRleC5waHA/bW9kPWFkbWluLWttbGlzdDIma2luZD0=').$kind.'" class="btn btn-default btn-block">>>è¿”å›å¡å¯†åˆ—è¡¨</a>';}elseif($my=='del'){echo '<div class="panel panel-primary">
<div class="panel-heading w h"><h3 class="panel-title">åˆ é™¤å¡å¯†</h3></div>
<div class="panel-body box">';$id=$_GET['id'];$kind=$_GET['kind'];$myrow=$DB->get_row("SELECT * FROM ".DBQZ."_kms WHERE id='$id' and daili='{$row['userid']}'");if($myrow){if($myrow['isuse']==0){if($myrow['kind']==1)$rmb=$GLOBALS['zym_decrypt']['Á¾Ä¾ÖÁ¾ÖÖˆ”ÃÖÄ¯”ÀÃ”ÃÁÖ¾ˆÖÄ¾¾ÖÖ']($myrow['value']/$daili_rules[0]);elseif($myrow['kind']==2){if($myrow['value']==1)$rmb=$daili_rules[1];elseif($myrow['value']==3)$rmb=$daili_rules[2];elseif($myrow['value']==6)$rmb=$daili_rules[3];elseif($myrow['value']==12)$rmb=$daili_rules[4];elseif($myrow['value']==0)$rmb=$daili_rules[5];}elseif($kind==4){if($value==1)$rmb=$num*$daili_rules[6];elseif($value==3)$rmb=$num*$daili_rules[7];elseif($value==5)$rmb=$num*$daili_rules[8];elseif($value==10)$rmb=$num*$daili_rules[9];}$msg='ç”±äºè¯¥å¡å¯†æ²¡æœ‰ä½¿ç”¨ï¼ŒæˆåŠŸé€€è¿˜'.$rmb.'å…ƒåˆ°ä½ è´¦æˆ·ï¼';}$sql=$DB->query("DELETE FROM ".DBQZ."_kms WHERE id='$id'");if($sql){$DB->query("update ".DBQZ."_user set daili_rmb=daili_rmb+{$rmb} where user='".$gl."'");echo base64_decode('5Yig6Zmk5Y2h5a+G5oiQ5Yqf77yB').$msg;}else{echo base64_decode('5Yig6Zmk5aSx6LSl77yB');}}else{echo base64_decode('6K+l5Y2h5a+G5LiN5a2Y5Zyo77yB');}echo base64_decode('PGhyLz48YSBocmVmPSJpbmRleC5waHA/bW9kPWFkbWluLWttbGlzdDIma2luZD0=').$kind.'">>>è¿”å›å¡å¯†åˆ—è¡¨</a></div></div>';}}else {$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ'](base64_decode('5Luj55CG5ZCO5Y+w55m75b2V5aSx6LSl44CC6K+35Lul5Luj55CG6Lqr5Lu9IDxhIGhyZWY9ImluZGV4LnBocD9tb2Q9bG9naW4mZGFpbGk9MSI+6YeN5paw55m75b2VPC9hPu+8jOaIluiBlOezu+ermemVv+i0reS5sOS7o+eQhui6q+S7ve+8gQ=='),3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>