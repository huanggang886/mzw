<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['��î����Ë����֯��������֔��å��']=base64_decode('c3RybGVu');$zym_decrypt['֥�����������������֔����֯�����']=base64_decode('bXRfcmFuZA==');$zym_decrypt['���֯֎����������ֈ�Ď����������']=base64_decode('aW50dmFs');$zym_decrypt['����֯È���Ë���å��֋��þ������']=base64_decode('c2hvd21zZw==');$zym_decrypt['Ô�������Ë����������֯���������']=base64_decode('Y2VpbA==');$zym_decrypt['�������������������Ĕ��������å�']=base64_decode('Z2V0a20=');$zym_decrypt['��ľ���֎ֈ���į��Ô��־��Ď����']=base64_decode('Zmxvb3I='); ?>
<?php
if(!$GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="代理卡密列表";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>首页</a></li>
<li><a href="index.php?mod=admin-daili"><i class="icon fa fa-cog"></i>代理后台</a></li>
<li class="active"><a href="#"><i class="icon fa fa-list-alt"></i>卡密列表</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTEyIiByb2xlPSJtYWluIj4=');function getkm($len =12){$str ="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";$strlen =$GLOBALS['zym_decrypt']['��î����Ë����֯��������֔��å��']($str);$randstr ="";for ($i =0;$i < $len;$i++){$randstr .= $str[$GLOBALS['zym_decrypt']['֥�����������������֔����֯�����'](0, $strlen - 1)];}return $randstr;}$my=isset($_GET['my'])?$_GET['my']:null;if ($isdaili==1){$kind=isset($_GET['kind'])?$_GET['kind']:null;if($my==null){if($kind==1){$sql=" kind='1' and daili='{$row['userid']}'";$link='&kind='.$kind;$name='充值卡';$addsm='每个卡密面额';}elseif($kind==2){$sql=" kind='2' and daili='{$row['userid']}'";$link='&kind='.$kind;$name='VIP卡';$addsm='每个卡密开通月数(0为永久)';}elseif($kind==4){$sql=" kind='4' and daili='{$row['userid']}'";$link='&kind='.$kind;$name='配额卡';$addsm='每个卡密的配额数量';}$numrows =$DB->count("select count(*) from ".DBQZ."_kms where".$sql);if($kind==1){echo '<ul class="nav nav-tabs">
	<li><a href="index.php?mod=admin-daili">代理后台</a></li>
	  <li class="active"><a href="#">充值卡卡密</a></li>
	  <li><a href="index.php?mod=admin-kmlist2&kind=2">VIP卡卡密</a></li>
	  <li><a href="index.php?mod=admin-kmlist2&kind=4">配额卡卡密</a></li>
</ul>';echo base64_decode('PGgzPuWFheWAvOWNoeWNoeWvhuWIl+ihqCAo').$numrows.')</h3>';echo base64_decode('PGZvcm0gYWN0aW9uPSJpbmRleC5waHA/bW9kPWFkbWluLWttbGlzdDImbXk9YWRkIiBtZXRob2Q9IlBPU1QiIGNsYXNzPSJmb3JtLWlubGluZSI+PGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0ia2luZCIgdmFsdWU9Ig==').$kind.'">
  <div class="form-group">
    <label>充值卡卡密生成</label>
    <input type="text" class="form-control" name="num" placeholder="生成的个数">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="value" placeholder="'.$addsm.'">
  </div>
  <button type="submit" class="btn btn-primary">生成</button>（1RMB＝'.$daili_rules[0].$conf['coin_name'].'）
</form>';}elseif($kind==2){echo '<ul class="nav nav-tabs">
	<li><a href="index.php?mod=admin-daili">代理后台</a></li>
	  <li><a href="index.php?mod=admin-kmlist2&kind=1">充值卡卡密</a></li>
	  <li class="active"><a href="#">VIP卡卡密</a></li>
	  <li><a href="index.php?mod=admin-kmlist2&kind=4">配额卡卡密</a></li>
</ul>';echo base64_decode('PGgzPlZJUOWNoeWNoeWvhuWIl+ihqCAo').$numrows.')</h3>';echo base64_decode('PGZvcm0gYWN0aW9uPSJpbmRleC5waHA/bW9kPWFkbWluLWttbGlzdDImbXk9YWRkIiBtZXRob2Q9IlBPU1QiIGNsYXNzPSJmb3JtLWlubGluZSI+PGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0ia2luZCIgdmFsdWU9Ig==').$kind.'">
  <div class="form-group">
    <label>VIP卡卡密生成</label>
	<input type="text" class="form-control" name="num" placeholder="生成的个数">
  </div>
  <div class="form-group">
    <select name="value" class="form-control">
			<option value="1">VIP月卡('.$daili_rules[1].'元)</option>
			<option value="3">VIP季度卡('.$daili_rules[2].'元)</option>
			<option value="6">VIP半年卡('.$daili_rules[3].'元)</option>
			<option value="12">VIP年卡('.$daili_rules[4].'元)</option>
			<option value="0">VIP永久卡('.$daili_rules[5].'元)</option>
	</select>
  </div>
  <button type="submit" class="btn btn-primary">生成</button>
</form>';}elseif($kind==4){echo '<ul class="nav nav-tabs">
	<li><a href="index.php?mod=admin-daili">代理后台</a></li>
	  <li><a href="index.php?mod=admin-kmlist2&kind=1">充值卡卡密</a></li>
	  <li><a href="index.php?mod=admin-kmlist2&kind=2">VIP卡卡密</a></li>
	  <li class="active"><a href="#">配额卡卡密</a></li>
</ul>';echo base64_decode('PGgzPumFjemineWNoeWNoeWvhuWIl+ihqCAo').$numrows.')</h3>';echo base64_decode('PGZvcm0gYWN0aW9uPSJpbmRleC5waHA/bW9kPWFkbWluLWttbGlzdDImbXk9YWRkIiBtZXRob2Q9IlBPU1QiIGNsYXNzPSJmb3JtLWlubGluZSI+PGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0ia2luZCIgdmFsdWU9Ig==').$kind.'">
  <div class="form-group">
    <label>配额卡卡密生成</label>
	<input type="text" class="form-control" name="num" placeholder="生成的个数">
  </div>
  <div class="form-group">
    <select name="value" class="form-control">
			<option value="1">1个配额卡('.$daili_rules[6].'元)</option>
			<option value="3">3个配额卡('.$daili_rules[7].'元)</option>
			<option value="5">5个配额卡('.$daili_rules[8].'元)</option>
			<option value="10">10个配额卡('.$daili_rules[9].'元)</option>
	</select>
  </div>
  <button type="submit" class="btn btn-primary">生成</button>
</form>';}echo base64_decode('4oC7PGEgaHJlZj0iaHR0cDovL3d3dy45MTdrYS5jb20vIiB0YXJnZXQ9Il9ibGFuayI+6Ieq5Yqo5Y2h5a+G5Y+R5Y2h5bmz5Y+wPC9hPjxici8+');$pagesize=$conf['pagesize'];$pages=$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($numrows/$pagesize);if ($numrows%$pagesize){$pages++;}if (isset($_GET['page'])){$page=$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_GET['page']);}else{$page=1;}$offset=$pagesize*($page - 1);?>
<style>
.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>td,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>thead>tr>th{white-space: pre-wrap;}
</style>
<div class="panel panel-default table-responsive">
<table class="table table-hover">
	<thead>
		<tr>
			<th>卡密</th>
			<th>状态</th>
			<th>时间记录</th>
			<th>操作</th>
		</tr>
	</thead>
	<tobdy>
<?php
 $rs=$DB->query("select * from ".DBQZ."_kms where{$sql} order by id desc limit $offset,$pagesize");$i=0;while ($myrow =$DB->fetch($rs)){$i++;$pagesl=$i+($page-1)*$pagesize;if($kind==1){$value='<font color="blue">'.$myrow['value'].'</font> '.$conf['coin_name'];}elseif($kind==2){if($myrow['value']==0)$myrow['value']='无限';$value='<font color="blue">'.$myrow['value'].'</font> 个月';}elseif($kind==4){$value='<font color="blue">'.$myrow['value'].'</font> 个';}if($myrow['isuse']==1){$isuse='<font color="red">已使用</font><br/>使用者:'.$myrow['user'];$usetime='<br>使用时间:<font color="blue">'.$myrow['usetime'].'</font>';}elseif($myrow['isuse']==0){$isuse='<font color="green">未使用</font>';$usetime=null;}echo base64_decode('PHRyPjx0ZCBzdHlsZT0id2lkdGg6MzAlOyI+PGI+').$myrow['km'].'</b><br/>'.$name.'：'.$value.'</td><td style="width:20%">'.$isuse.'</td><td style="width:30%">生成时间:<font color="blue">'.$myrow['addtime'].'</font>'.$usetime.'</td><td style="width:20%"><a href="index.php?mod=admin-kmlist2&my=del&id='.$myrow['id'].$link.'" class="btn btn-danger btn-sm">删除</a></td></tr>';}?>
	</tbody>
</table>
</div>

<?php
echo base64_decode('PHVsIGNsYXNzPSJwYWdpbmF0aW9uIj4=');$first=1;$prev=$page-1;$next=$page+1;$last=$pages;if ($page>1){echo '<li><a href="index.php?mod=admin-kmlist2&page='.$first.$link.'">首页</a></li>';echo base64_decode('PGxpPjxhIGhyZWY9ImluZGV4LnBocD9tb2Q9YWRtaW4ta21saXN0MiZwYWdlPQ==').$prev.$link.'">&laquo;</a></li>';}else {echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+6aaW6aG1PC9hPjwvbGk+');echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+JmxhcXVvOzwvYT48L2xpPg==');}for ($i=1;$i<$page;$i++)echo '<li><a href="index.php?mod=admin-kmlist2&page='.$i.$link.'">'.$i .'</a></li>';echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+').$page.'</a></li>';for ($i=$page+1;$i<=$pages;$i++)echo '<li><a href="index.php?mod=admin-kmlist2&page='.$i.$link.'">'.$i .'</a></li>';echo '';if ($page<$pages){echo '<li><a href="index.php?mod=admin-kmlist2&page='.$next.$link.'">&raquo;</a></li>';echo base64_decode('PGxpPjxhIGhyZWY9ImluZGV4LnBocD9tb2Q9YWRtaW4ta21saXN0MiZwYWdlPQ==').$last.$link.'">尾页</a></li>';}else {echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+JnJhcXVvOzwvYT48L2xpPg==');echo base64_decode('PGxpIGNsYXNzPSJkaXNhYmxlZCI+PGE+5bC+6aG1PC9hPjwvbGk+');}echo base64_decode('PC91bD4=');}elseif($my=='add'){echo '<div class="box">';$kind=$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['kind']);$num=$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['num']);$value=$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['value']);if($value<0 || $num<0){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('卡密面值不能为负值！',3);}if($num>100){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('一次性生成卡密数量不能大于100张！',3);}if(!isset($_SESSION['addkm_count']))$_SESSION['addkm_count']=0;if($_SESSION['addkm_count']>1000){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('单日生成卡密数量上限1000张！',3);}if($kind==1)$rmb=$GLOBALS['zym_decrypt']['Ô�������Ë����������֯���������'](($num*$value)/$daili_rules[0]);elseif($kind==2){if($value==1)$rmb=$num*$daili_rules[1];elseif($value==3)$rmb=$num*$daili_rules[2];elseif($value==6)$rmb=$num*$daili_rules[3];elseif($value==12)$rmb=$num*$daili_rules[4];elseif($value==0)$rmb=$num*$daili_rules[5];}elseif($kind==4){if($value==1)$rmb=$num*$daili_rules[6];elseif($value==3)$rmb=$num*$daili_rules[7];elseif($value==5)$rmb=$num*$daili_rules[8];elseif($value==10)$rmb=$num*$daili_rules[9];}if($rmb>$row['daili_rmb']){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('您的账户余额不足，请联系站长充值！',3);}else {$DB->query("update ".DBQZ."_user set daili_rmb=daili_rmb-{$rmb} where user='".$gl."'");}echo base64_decode('PHVsIGNsYXNzPSdsaXN0LWdyb3VwJz48bGkgY2xhc3M9J2xpc3QtZ3JvdXAtaXRlbSBhY3RpdmUnPuaIkOWKn+eUn+aIkOS7peS4i+WNoeWvhjwvbGk+');for ($i =0;$i < $num;$i++){$km=$GLOBALS['zym_decrypt']['�������������������Ĕ��������å�'](12);$sql=$DB->query("insert into `".DBQZ."_kms` (`kind`,`daili`,`km`,`value`,`addtime`) values ('".$kind."','".$row['userid']."','".$km."','".$value."','".$date."')");if($sql){$_SESSION['addkm_count']++;echo "<li class='list-group-item'>$km</li>";}}echo base64_decode('PC91bD48L2Rpdj48YSBocmVmPSJpbmRleC5waHA/bW9kPWFkbWluLWttbGlzdDIma2luZD0=').$kind.'" class="btn btn-default btn-block">>>返回卡密列表</a>';}elseif($my=='del'){echo '<div class="panel panel-primary">
<div class="panel-heading w h"><h3 class="panel-title">删除卡密</h3></div>
<div class="panel-body box">';$id=$_GET['id'];$kind=$_GET['kind'];$myrow=$DB->get_row("SELECT * FROM ".DBQZ."_kms WHERE id='$id' and daili='{$row['userid']}'");if($myrow){if($myrow['isuse']==0){if($myrow['kind']==1)$rmb=$GLOBALS['zym_decrypt']['��ľ���֎ֈ���į��Ô��־��Ď����']($myrow['value']/$daili_rules[0]);elseif($myrow['kind']==2){if($myrow['value']==1)$rmb=$daili_rules[1];elseif($myrow['value']==3)$rmb=$daili_rules[2];elseif($myrow['value']==6)$rmb=$daili_rules[3];elseif($myrow['value']==12)$rmb=$daili_rules[4];elseif($myrow['value']==0)$rmb=$daili_rules[5];}elseif($kind==4){if($value==1)$rmb=$num*$daili_rules[6];elseif($value==3)$rmb=$num*$daili_rules[7];elseif($value==5)$rmb=$num*$daili_rules[8];elseif($value==10)$rmb=$num*$daili_rules[9];}$msg='由于该卡密没有使用，成功退还'.$rmb.'元到你账户！';}$sql=$DB->query("DELETE FROM ".DBQZ."_kms WHERE id='$id'");if($sql){$DB->query("update ".DBQZ."_user set daili_rmb=daili_rmb+{$rmb} where user='".$gl."'");echo base64_decode('5Yig6Zmk5Y2h5a+G5oiQ5Yqf77yB').$msg;}else{echo base64_decode('5Yig6Zmk5aSx6LSl77yB');}}else{echo base64_decode('6K+l5Y2h5a+G5LiN5a2Y5Zyo77yB');}echo base64_decode('PGhyLz48YSBocmVmPSJpbmRleC5waHA/bW9kPWFkbWluLWttbGlzdDIma2luZD0=').$kind.'">>>返回卡密列表</a></div></div>';}}else {$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5Luj55CG5ZCO5Y+w55m75b2V5aSx6LSl44CC6K+35Lul5Luj55CG6Lqr5Lu9IDxhIGhyZWY9ImluZGV4LnBocD9tb2Q9bG9naW4mZGFpbGk9MSI+6YeN5paw55m75b2VPC9hPu+8jOaIluiBlOezu+ermemVv+i0reS5sOS7o+eQhui6q+S7ve+8gQ=='),3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>