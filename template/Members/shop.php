<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['���������ċ����֮�������������È']=base64_decode('ZGFkZHNsYXNoZXM=');$zym_decrypt['����֯È���Ë���å��֋��þ������']=base64_decode('c2hvd21zZw==');$zym_decrypt['�����֮�į���������������þ�Ĕ��']=base64_decode('ZGF0ZQ==');$zym_decrypt['����������Ë������������������Î']=base64_decode('c3RydG90aW1l');$zym_decrypt['���֯֎����������ֈ�Ď����������']=base64_decode('aW50dmFs');$zym_decrypt['��������֯�������ĥ����ֈ�������']=base64_decode('aXNfbnVtZXJpYw==');$zym_decrypt['���֥���֥�����֥�����Į������į']=base64_decode('Z2V0X2N1cmw='); ?>
<?php
if(!$GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title='自助购买';$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>首页</a></li>
<li class="active"><a href="#"><i class="icon fa fa-shopping-cart"></i>自助购买</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');if($islogin==1){$act=isset($_GET['act'])?$_GET['act']:1;echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTEyIGNlbnRlci1ibG9jayIgcm9sZT0ibWFpbiI+');if(OPEN_DAMA==1)$addstr1='<li><a href="index.php?mod=dama">协助打码</a></li>';if($act==1){echo '<ul class="nav nav-tabs">
	  <li class="active"><a href="#">自助购买</a></li>
	  <li><a href="index.php?mod=shop&act=2">自助兑换</a></li>
	  '.$addstr1.'
</ul>';}elseif($act==2){echo '<ul class="nav nav-tabs">
	  <li><a href="index.php?mod=shop&act=1">自助购买</a></li>
	  <li class="active"><a href="#">自助兑换</a></li>
	  '.$addstr1.'
</ul>';}elseif($act==3){echo '<ul class="nav nav-tabs">
	  <li><a href="index.php?mod=shop&act=1">自助购买</a></li>
	  <li><a href="index.php?mod=shop&act=2">自助兑换</a></li>
	  '.$addstr1.'
</ul>';}echo base64_decode('PC9kaXY+');if(isset($_POST['km'])){$km=$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_POST['km']);$qq=$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_POST['qq']);$myrow=$DB->get_row("select * from ".DBQZ."_kms where km='$km' limit 1");$kid=$myrow['id'];$kind=$myrow['kind'];$kmname=array('','充值卡','VIP卡','试用卡','配额卡','代理余额卡');if(!$myrow){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('此'.$kmname[$kind].'密不存在！',3);exit;}if($myrow['isuse']==1){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('此'.$kmname[$kind].'密已被使用！',3);exit;}if($kind==1){$sql=$DB->query("update ".DBQZ."_user set coin=coin+{$myrow['value']} where user='".$gl."'");if($sql){$DB->query("update `".DBQZ."_kms` set `isuse` ='1',`user` ='$gl',`usetime` ='$date' where `id`='$kid'");$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('PGZvbnQgY29sb3I9InJlZCI+').$myrow['value'].'</font> '.$conf['coin_name'].'充值成功！<br/>你当前拥有：<font color="red">'.($row['coin']+$myrow['value']).'</font> '.$conf['coin_name'].'',1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5YWF5YC85aSx6LSl77yB').$DB->error(),4);}}elseif($kind==2){if($myrow['value']==0){$sql=$DB->query("update ".DBQZ."_user set vip='2',active='1' where userid='".$uid."'");if($conf['vipmode']==1)$sql=$DB->query("update ".DBQZ."_qq set vip='2' where qq='".$qq."'");$myrow['value']='无限';}else {if($isvip==1)$vipdate =$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("Y-m-d", $GLOBALS['zym_decrypt']['����������Ë������������������Î']("+ {$myrow['value']} months", $GLOBALS['zym_decrypt']['����������Ë������������������Î']($row['vipdate'])));else $vipdate =$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("Y-m-d", $GLOBALS['zym_decrypt']['����������Ë������������������Î']("+ {$myrow['value']} months"));$sql=$DB->query("update ".DBQZ."_user set vip='1',vipdate='$vipdate',active='1' where userid='".$uid."'");if($conf['vipmode']==1){$qqrow=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$qq}' limit 1");if($qqrow['vip']==1 && $qqrow['vipdate']>$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("Y-m-d"))$vipdate =$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("Y-m-d", $GLOBALS['zym_decrypt']['����������Ë������������������Î']("+ {$myrow['value']} months", $GLOBALS['zym_decrypt']['����������Ë������������������Î']($qqrow['vipdate'])));else $vipdate =$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("Y-m-d", $GLOBALS['zym_decrypt']['����������Ë������������������Î']("+ {$myrow['value']} months"));$sql=$DB->query("update ".DBQZ."_qq set vip='1',vipdate='$vipdate' where qq='".$qq."'");}}if($sql){$DB->query("update `".DBQZ."_kms` set `isuse` ='1',`user` ='$gl',`usetime` ='$date' where `id`='$kid'");$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('VklQ5byA6YCaL+e7reacn+aIkOWKn++8gTxici8+5oiQ5Yqf5byA6YCaL+e7reacnyA8Zm9udCBjb2xvcj0icmVkIj4=').$myrow['value'].'</font> 个月VIP，你的VIP到期日期:'.$vipdate,1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('VklQ5byA6YCaL+e7reacn+Wksei0pe+8gQ==').$DB->error(),4);}}elseif($kind==3){if($isvip==0){if($DB->get_row("SELECT * FROM ".DBQZ."_kms WHERE kind='3' and user='$gl' LIMIT 1")){showmsg('VIP试用开通失败！您已使用过试用卡！',4);exit;}$vipdate =$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("Y-m-d", $GLOBALS['zym_decrypt']['����������Ë������������������Î']("+ {$myrow['value']} days"));$sql=$DB->query("update ".DBQZ."_user set vip='1',vipdate='$vipdate' where userid='".$uid."'");if($sql){$DB->query("update `".DBQZ."_kms` set `isuse` ='1',`user` ='$gl',`usetime` ='$date' where `id`='$kid'");$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('VklQ6K+V55So5byA6YCa5oiQ5Yqf77yBPGJyLz7miJDlip/lvIDpgJogPGZvbnQgY29sb3I9InJlZCI+').$myrow['value'].'</font> 天VIP，你的VIP到期日期:'.$vipdate,1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('VklQ6K+V55So5byA6YCa5aSx6LSl77yB').$DB->error(),4);}}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5L2g5bey5pivVklQ77yM5LiN6IO95L2/55So6K+V55So5Y2h77yB'),3);}}elseif($kind==4){$sql=$DB->query("update ".DBQZ."_user set peie=peie+{$myrow['value']} where userid='".$uid."'");if($sql){$DB->query("update `".DBQZ."_kms` set `isuse` ='1',`user` ='$gl',`usetime` ='$date' where `id`='$kid'");$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('PGZvbnQgY29sb3I9InJlZCI+').$myrow['value'].'</font> 个配额增加成功！<br/>你当前拥有：<font color="red">'.($row['peie']+$myrow['value']).'</font> 个配额。',1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5aKe5Yqg6YWN6aKd5aSx6LSl77yB').$DB->error(),4);}}elseif($kind==5){$sql=$DB->query("update ".DBQZ."_user set daili=1,daili_rmb=daili_rmb+{$myrow['value']} where userid='".$uid."'");if($sql){$DB->query("update `".DBQZ."_kms` set `isuse` ='1',`user` ='$gl',`usetime` ='$date' where `id`='$kid'");$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('PGZvbnQgY29sb3I9InJlZCI+').$myrow['value'].'</font> RMB代理余额增加成功！<br/>你当前拥有：<font color="red">'.($row['daili_rmb']+$myrow['value']).'</font> RMB代理余额。',1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5aKe5Yqg6YWN6aKd5aSx6LSl77yB').$DB->error(),4);}}}elseif(isset($_POST['value'])){if($_POST['to']=='vip'){$value=$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['value']);$qq=$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_POST['qq']);if($conf['coin_tovip']==0){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('当前站点未开启虚拟币兑换VIP功能！',3);}if(!$GLOBALS['zym_decrypt']['��������֯�������ĥ����ֈ�������']($value)|| $value<=0 || $value>12){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('月数只能为数字，不能超过12个月！',3);}if($isvip==2&&$conf['vipmode']==0){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('你已经是永久VIP，不能兑换！',3);}$need=$value*$conf['coin_tovip'];if($need>$row['coin']){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('兑换'.$value.'个月VIP需要'.$need.$conf['coin_name'].'，你只有'.$row['coin'].$conf['coin_name'].'！',3);}if($isvip==1)$vipdate =$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("Y-m-d", $GLOBALS['zym_decrypt']['����������Ë������������������Î']("+ {$value} months", $GLOBALS['zym_decrypt']['����������Ë������������������Î']($row['vipdate'])));else $vipdate =$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("Y-m-d", $GLOBALS['zym_decrypt']['����������Ë������������������Î']("+ {$value} months"));$sql=$DB->query("update ".DBQZ."_user set vip='1',vipdate='$vipdate' where user='".$gl."'");if($conf['vipmode']==1){$qqrow=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$qq}' limit 1");if($qqrow['vip']==1 && $qqrow['vipdate']>$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("Y-m-d"))$vipdate =$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("Y-m-d", $GLOBALS['zym_decrypt']['����������Ë������������������Î']("+ {$value} months", $GLOBALS['zym_decrypt']['����������Ë������������������Î']($qqrow['vipdate'])));else $vipdate =$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("Y-m-d", $GLOBALS['zym_decrypt']['����������Ë������������������Î']("+ {$value} months"));$sql=$DB->query("update ".DBQZ."_qq set vip='1',vipdate='$vipdate' where qq='".$qq."'");}if($sql){$DB->query("update ".DBQZ."_user set coin=coin-{$need} where user='".$gl."'");$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('VklQ5byA6YCaL+e7reacn+aIkOWKn++8gTxici8+5oiQ5Yqf5byA6YCaL+e7reacnyA8Zm9udCBjb2xvcj0icmVkIj4=').$value.'</font> 个月VIP，你的VIP到期日期:'.$vipdate,1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('VklQ5byA6YCaL+e7reacn+Wksei0pe+8gQ==').$DB->error(),4);}}elseif($_POST['to']=='vip2'){$value=$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['value']);$qq=$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_POST['qq']);if($conf['coin_tovip2']==0){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('当前站点未开启虚拟币兑换VIP功能！',3);}if(!$GLOBALS['zym_decrypt']['��������֯�������ĥ����ֈ�������']($value)|| $value<=0 || $value>30){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('天数只能为数字，不能超过30天！',3);}if($isvip==2&&$conf['vipmode']==0){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('你已经是永久VIP，不能兑换！',3);}$need=$value*$conf['coin_tovip2'];if($need>$row['coin']){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('兑换'.$value.'天VIP需要'.$need.$conf['coin_name'].'，你只有'.$row['coin'].$conf['coin_name'].'！',3);}if($isvip==1)$vipdate =$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("Y-m-d", $GLOBALS['zym_decrypt']['����������Ë������������������Î']("+ {$value} days", $GLOBALS['zym_decrypt']['����������Ë������������������Î']($row['vipdate'])));else $vipdate =$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("Y-m-d", $GLOBALS['zym_decrypt']['����������Ë������������������Î']("+ {$value} days"));$sql=$DB->query("update ".DBQZ."_user set vip='1',vipdate='$vipdate' where user='".$gl."'");if($conf['vipmode']==1){$qqrow=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$qq}' limit 1");if($qqrow['vip']==1 && $qqrow['vipdate']>$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("Y-m-d"))$vipdate =$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("Y-m-d", $GLOBALS['zym_decrypt']['����������Ë������������������Î']("+ {$value} days", $GLOBALS['zym_decrypt']['����������Ë������������������Î']($qqrow['vipdate'])));else $vipdate =$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("Y-m-d", $GLOBALS['zym_decrypt']['����������Ë������������������Î']("+ {$value} days"));$sql=$DB->query("update ".DBQZ."_qq set vip='1',vipdate='$vipdate' where qq='".$qq."'");}if($sql){$DB->query("update ".DBQZ."_user set coin=coin-{$need} where user='".$gl."'");$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('VklQ5byA6YCaL+e7reacn+aIkOWKn++8gTxici8+5oiQ5Yqf5byA6YCaL+e7reacnyA8Zm9udCBjb2xvcj0icmVkIj4=').$value.'</font> 天VIP，你的VIP到期日期:'.$vipdate,1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('VklQ5byA6YCaL+e7reacn+Wksei0pe+8gQ==').$DB->error(),4);}}elseif($_POST['to']=='peie'){$value=$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['value']);if($conf['coin_topeie']==0){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('当前站点未开启虚拟币兑换配额功能！',3);}if(!$GLOBALS['zym_decrypt']['��������֯�������ĥ����ֈ�������']($value)|| $value<=0 || $value>10){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('配额只能为数字，且一次性只能增加10个配额！',3);}$need=$value*$conf['coin_topeie'];if($need>$row['coin']){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('兑换'.$value.'个配额需要'.$need.$conf['coin_name'].'，你只有'.$row['coin'].$conf['coin_name'].'！',3);}$sql=$DB->query("update ".DBQZ."_user set peie=peie+{$value} where user='".$gl."'");if($sql){$DB->query("update ".DBQZ."_user set coin=coin-{$need} where user='".$gl."'");$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5aKe5Yqg6YWN6aKd5oiQ5Yqf77yBPGJyLz7miJDlip/lop7liqAgPGZvbnQgY29sb3I9InJlZCI+').$value.'</font> 个配额。',1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5aKe5Yqg6YWN6aKd5aSx6LSl77yB').$DB->error(),4);}}}else {if($act==1){echo '<div class="col-md-6 col-xs-12">';echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwgcGFuZWwtcHJpbWFyeSI+CjxkaXYgY2xhc3M9InBhbmVsLWhlYWRpbmcgdyBoIj48aDMgY2xhc3M9InBhbmVsLXRpdGxlIj7otK3kubDlhazlkYo8L2gzPjwvZGl2PjxkaXYgY2xhc3M9InBhbmVsLWJvZHkgYm94Ij4=');echo $conf['shop'].'
</div></div>';if($conf['vipmode']!=1){echo '<div class="panel panel-primary"><div class="panel-body box">';echo base64_decode('PGxpIGNsYXNzPSJsaXN0LWdyb3VwLWl0ZW0iPjxiPuS9oOW9k+WJjeaLpeacie+8mjwvYj48Zm9udCBjb2xvcj0icmVkIj4=').$row['coin'].'</font> '.$conf['coin_name'].'</li>';if($isvip==1)$vipstatus='到期时间:<font color="green">'.$row['vipdate'].'</font>';elseif($isvip==2)$vipstatus='<font color="green">永久 VIP</font>';else $vipstatus='<font color="red">非 VIP</font>';echo base64_decode('PGxpIGNsYXNzPSJsaXN0LWdyb3VwLWl0ZW0iPjxiPlZJUOeKtuaAge+8mjwvYj4=').$vipstatus.'</li>';if($conf['peie_open'])echo '<li class="list-group-item"><b>你当前拥有：</b><font color="red">'.$row['peie'].'</font> 个QQ配额</li>';echo base64_decode('PC9kaXY+PC9kaXY+');}echo base64_decode('PC9kaXY+');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTYgY29sLXhzLTEyIj4=');if($conf['alipay_api']==1||$conf['tenpay_api']==1||$conf['wxpay_api']==1){echo '<div class="panel panel-success">
<div class="panel-heading w h"><h3 class="panel-title">在线购买</h3></div><div class="panel-body box">';if($conf['vipmode']==1){$rs=$DB->query("SELECT * FROM ".DBQZ."_qq WHERE uid='{$uid}' order by id desc");$contents='';while($myrow =$DB->fetch($rs))$contents.='<option value="'.$myrow['qq'].'">'.$myrow['qq'].'</option>';echo base64_decode('CjxkaXYgY2xhc3M9ImZvcm0tZ3JvdXAiPgo8bGFiZWw+6YCJ5oup5ZWG5ZOB77yaPC9sYWJlbD48YnI+CjxzZWxlY3QgY2xhc3M9ImZvcm0tY29udHJvbCIgbmFtZT0ic2hvcGlkIj4KPG9wdGlvbiB2YWx1ZT0iMCI+MeWkqeivleeUqFZJUOS8muWRmCg=').$buy_rules[0].'元)</option>
<option value="1">1个月VIP会员('.$buy_rules[1].'元)</option>
<option value="2">3个月VIP会员('.$buy_rules[2].'元)</option>
<option value="3">半年VIP会员('.$buy_rules[3].'元)</option>
<option value="4">一年VIP会员('.$buy_rules[4].'元)</option>
<option value="5">永久VIP会员('.$buy_rules[5].'元)</option>
</select>
<label>支付方式：</label>';if($conf['alipay_api'])echo '<label><input type="radio" name="paytype" value="alipay" checked>支付宝</label>';if($conf['tenpay_api'])echo '<label><input type="radio" name="paytype" value="tenpay">财付通(QQ钱包)</label>';if($conf['weixin_api'])echo '<label><input type="radio" name="paytype" value="weixin">微信支付</label>';echo base64_decode('PC9kaXY+CjxkaXYgY2xhc3M9ImZvcm0tZ3JvdXAiPgo8bGFiZWw+6YCJ5oup6KaB57ut5pyf55qEUVHvvJo8L2xhYmVsPjxicj4KPHNlbGVjdCBjbGFzcz0iZm9ybS1jb250cm9sIiBuYW1lPSJxcSIg').(isset($_GET['qq'])?'default="'.$_GET['qq'].'"':null).'>
'.$contents.'
</select></div>
<input type="submit" class="btn btn-success btn-block" id="buyshop" value="确认购买"><br/>
<font color=green>购买后刷新此页面即可看到效果！</font>';}else{echo base64_decode('CjxkaXYgY2xhc3M9ImZvcm0tZ3JvdXAiPgo8bGFiZWw+6YCJ5oup5ZWG5ZOB77yaPC9sYWJlbD48YnI+CjxzZWxlY3QgY2xhc3M9ImZvcm0tY29udHJvbCIgbmFtZT0ic2hvcGlkIj4KPG9wdGlvbiB2YWx1ZT0iMCI+MeWkqeivleeUqFZJUOS8muWRmCg=').$buy_rules[0].'元)</option>
<option value="1">1个月VIP会员('.$buy_rules[1].'元)</option>
<option value="2">3个月VIP会员('.$buy_rules[2].'元)</option>
<option value="3">半年VIP会员('.$buy_rules[3].'元)</option>
<option value="4">一年VIP会员('.$buy_rules[4].'元)</option>
<option value="5">永久VIP会员('.$buy_rules[5].'元)</option>
<option value="6">1个QQ配额('.$buy_rules[6].'元)</option>
<option value="7">3个QQ配额('.$buy_rules[7].'元)</option>
<option value="8">5个QQ配额('.$buy_rules[8].'元)</option>
<option value="9">10个QQ配额('.$buy_rules[9].'元)</option>
</select>
<label>支付方式：</label>';if($conf['alipay_api'])echo '<label><input type="radio" name="paytype" value="alipay" checked>支付宝</label>';if($conf['tenpay_api'])echo '<label><input type="radio" name="paytype" value="tenpay">财付通(QQ钱包)</label>';if($conf['wxpay_api'])echo '<label><input type="radio" name="paytype" value="wxpay">微信支付</label>';echo base64_decode('PC9kaXY+PGlucHV0IHR5cGU9InN1Ym1pdCIgY2xhc3M9ImJ0biBidG4tc3VjY2VzcyBidG4tYmxvY2siIGlkPSJidXlzaG9wIiB2YWx1ZT0i56Gu6K6k6LSt5LmwIj48YnIvPgo8Zm9udCBjb2xvcj1ncmVlbj7otK3kubDlkI7liLfmlrDmraTpobXpnaLljbPlj6/nnIvliLDmlYjmnpzvvIE8L2ZvbnQ+');}?>
<script>
$(document).ready(function(){
$("#buyshop").click(function(){
	var shopid=$("select[name='shopid']").val();
	var paytype=$("input:radio[name='paytype']:checked").val();
	var qq=$("select[name='qq']").val();
	ajax.get("ajax.php?mod=shop&act=pay&type="+paytype+"&shopid="+shopid+"&qq="+qq, "html", function(data) {
		$('#myDiv').html(data);
		$('#shop').modal('show');
	});
});
});
</script>
</div></div>
<?php
}if($conf['open_km']){echo '<div class="panel panel-success">
<div class="panel-heading w h"><h3 class="panel-title">卡密激活</h3></div><div class="panel-body box">';if($conf['vipmode']==1){$rs=$DB->query("SELECT * FROM ".DBQZ."_qq WHERE uid='{$uid}' order by id desc");$contents='';while($myrow =$DB->fetch($rs))$contents.='<option value="'.$myrow['qq'].'">'.$myrow['qq'].'</option>';echo base64_decode('PGZvcm0gYWN0aW9uPSJpbmRleC5waHA/bW9kPXNob3AmYWN0PQ==').$act.'" method="POST">
<div class="form-group">
<label>卡密激活：</label><br>
<input type="text" class="form-control" name="km" value="" autocomplete="off" placeholder="输入卡密"></div>
<div class="form-group">
<label>选择要续期的QQ：</label><br>
<select class="form-control" name="qq" '.(isset($_GET['qq'])?'default="'.$_GET['qq'].'"':null).'>
'.$contents.'
</select></div>
<input type="submit" class="btn btn-success btn-block" value="确认使用"></form><br/>
<font color=green>输入卡密，点击确定使用即可为对应QQ续期！</font>';}else{echo base64_decode('PGZvcm0gYWN0aW9uPSJpbmRleC5waHA/bW9kPXNob3AmYWN0PQ==').$act.'" method="POST">
<div class="form-group">
<label>卡密激活：</label><br>
<input type="text" class="form-control" name="km" value="" autocomplete="off" placeholder="输入卡密"></div>
<input type="submit" class="btn btn-success btn-block" value="确认使用"></form><br/>
<font color=green>所有卡密都是在这个页面激活！输入卡密，点击确定使用即可！</font>';}echo base64_decode('PC9kaXY+PC9kaXY+');}echo base64_decode('PHNjcmlwdD4KdmFyIGl0ZW1zID0gJCgic2VsZWN0W2RlZmF1bHRdIik7CmZvciAoaSA9IDA7IGkgPCBpdGVtcy5sZW5ndGg7IGkrKykgewoJJChpdGVtc1tpXSkudmFsKCQoaXRlbXNbaV0pLmF0dHIoImRlZmF1bHQiKSk7Cn0KPC9zY3JpcHQ+');echo base64_decode('PC9kaXY+');}elseif($act==2){echo '<div class="col-md-6 col-xs-12"">';echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwgcGFuZWwtcHJpbWFyeSI+CjxkaXYgY2xhc3M9InBhbmVsLWhlYWRpbmcgdyBoIj48aDMgY2xhc3M9InBhbmVsLXRpdGxlIj7oh6rliqnlhZHmjaI8L2gzPjwvZGl2PjxkaXYgY2xhc3M9InBhbmVsLWJvZHkgYm94Ij4=');echo base64_decode('PGJsb2NrcXVvdGU+PHA+Cjxmb250IGNvbG9yPSJncmVlbiI+5q2k6aG16Z2i5Y+v5Lul5L2/55SoIA==').$conf['coin_name'].' 兑换VIP和配额。</font>
</p></blockquote>
</div></div>
';if($conf['vipmode']!=1){echo '<div class="panel panel-primary"><div class="panel-body box">';echo base64_decode('PGxpIGNsYXNzPSJsaXN0LWdyb3VwLWl0ZW0iPjxiPuS9oOW9k+WJjeaLpeacie+8mjwvYj48Zm9udCBjb2xvcj0icmVkIj4=').$row['coin'].'</font> '.$conf['coin_name'].'</li>';if($isvip==1)$vipstatus='到期时间:<font color="green">'.$row['vipdate'].'</font>';elseif($isvip==2)$vipstatus='<font color="green">永久 VIP</font>';else $vipstatus='<font color="red">非 VIP</font>';echo base64_decode('PGxpIGNsYXNzPSJsaXN0LWdyb3VwLWl0ZW0iPjxiPlZJUOeKtuaAge+8mjwvYj4=').$vipstatus.'</li>';if($conf['peie_open'])echo '<li class="list-group-item"><b>你当前拥有：</b><font color="red">'.$row['peie'].'</font> 个QQ配额</li>';echo base64_decode('PC9kaXY+PC9kaXY+');}echo base64_decode('PC9kaXY+');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTYgY29sLXhzLTEyIj4=');if($conf['vipmode']==1){if($conf['coin_tovip']){$rs=$DB->query("SELECT * FROM ".DBQZ."_qq WHERE uid='{$uid}' order by id desc");$contents='';while($myrow =$DB->fetch($rs))$contents.='<option value="'.$myrow['qq'].'">'.$myrow['qq'].'</option>';echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwgcGFuZWwtcHJpbWFyeSI+Cgk8ZGl2IGNsYXNzPSJwYW5lbC1ib2R5IGJveCI+Cgk8Zm9ybSBhY3Rpb249ImluZGV4LnBocD9tb2Q9c2hvcCZhY3Q9').$act.'" method="POST"><input type="hidden" name="to" value="vip">
	<div class="form-group">
	<label>VIP兑换：</label><br>
	兑换价格：<font color="red">'.$conf['coin_tovip'].'</font> '.$conf['coin_name'].'＝1个月VIP会员<br>
	<input type="text" class="form-control" name="value" value="" autocomplete="off" placeholder="要兑换的VIP月数"></div>
	<div class="form-group">
	<label>选择要续期的QQ：</label><br>
	<select class="form-control" name="qq" '.(isset($_GET['qq'])?'default="'.$_GET['qq'].'"':null).'>
	'.$contents.'
	</select></div>
	<input type="submit" class="btn btn-success btn-block" value="确认兑换"></form>
	</div>
	</div>';echo base64_decode('PHNjcmlwdD4KdmFyIGl0ZW1zID0gJCgic2VsZWN0W2RlZmF1bHRdIik7CmZvciAoaSA9IDA7IGkgPCBpdGVtcy5sZW5ndGg7IGkrKykgewoJJChpdGVtc1tpXSkudmFsKCQoaXRlbXNbaV0pLmF0dHIoImRlZmF1bHQiKSk7Cn0KPC9zY3JpcHQ+');}}else{if($conf['coin_tovip']){echo '<div class="panel panel-primary">
	<div class="panel-body box">
	<form action="index.php?mod=shop&act='.$act.'" method="POST"><input type="hidden" name="to" value="vip">
	<div class="form-group">
	<label>VIP兑换：</label><br>
	兑换价格：<font color="red">'.$conf['coin_tovip'].'</font> '.$conf['coin_name'].'＝1个月VIP会员<br>
	<input type="text" class="form-control" name="value" value="" autocomplete="off" placeholder="要兑换的VIP月数"></div>
	<input type="submit" class="btn btn-success btn-block" value="确认兑换"></form>
	</div>
	</div>';}if($conf['coin_tovip2']){echo '<div class="panel panel-primary">
	<div class="panel-body box">
	<form action="index.php?mod=shop&act='.$act.'" method="POST"><input type="hidden" name="to" value="vip2">
	<div class="form-group">
	<label>试用VIP兑换：</label><br>
	兑换价格：<font color="red">'.$conf['coin_tovip2'].'</font> '.$conf['coin_name'].'＝1天VIP会员<br>
	<input type="text" class="form-control" name="value" value="" autocomplete="off" placeholder="要兑换的VIP天数"></div>
	<input type="submit" class="btn btn-success btn-block" value="确认兑换"></form>
	</div>
	</div>';}if($conf['coin_topeie']){echo '<div class="panel panel-primary">
	<div class="panel-body box">
	<form action="index.php?mod=shop&act='.$act.'" method="POST"><input type="hidden" name="to" value="peie">
	<div class="form-group">
	<label>配额兑换：</label><br>
	兑换价格：<font color="red">'.$conf['coin_topeie'].'</font> '.$conf['coin_name'].'＝1个QQ配额<br>
	<input type="text" class="form-control" name="value" value="" autocomplete="off" placeholder="要兑换的配额个数"></div>
	<input type="submit" class="btn btn-success btn-block" value="确认兑换"></form>
	</div>
	</div>';}}echo base64_decode('PC9kaXY+');}elseif($act==3){echo '<div class="panel panel-primary">
<div class="panel-heading w h"><h3 class="panel-title">代挂购买</h3></div><div class="panel-body box">';echo $conf['qqlevel'].'
</div></div>
';if($isadmin==1){$data=$GLOBALS['zym_decrypt']['���֥���֥�����֥�����Į������į']($dgapi.'api/submit.php?act=buy&url='.$_SERVER['HTTP_HOST'].'&authcode='.$authcode);$arr=json_decode($data,true);echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwgcGFuZWwtcHJpbWFyeSI+CjxkaXYgY2xhc3M9InBhbmVsLWhlYWRpbmcgdyBoIj48aDMgY2xhc3M9InBhbmVsLXRpdGxlIj5RUeS7o+aMgumFjeminea/gOa0u+eggei0reS5sOaWueW8jzwvaDM+PC9kaXY+PGRpdiBjbGFzcz0icGFuZWwtYm9keSBib3giPg==');echo base64_decode('PHA+e+atpOWkhOWGheWuueS7heermemVv+WPr+ingX08YnIvPg==').($arr['msg']?$arr['msg']:$data).'</p>';echo base64_decode('PC9kaXY+PC9kaXY+Cg==');}}elseif($act==4){echo '<div class="panel panel-primary">
<div class="panel-heading w h"><h3 class="panel-title">网站赚币</h3></div><div class="panel-body box">';echo $conf['shop'].'
</div></div>
<div class="panel panel-primary">
<div class="panel-body box">';?>

<?php
 }}}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('55m75b2V5aSx6LSl77yM5Y+v6IO95piv5a+G56CB6ZSZ6K+v5oiW6ICF6Lqr5Lu95aSx5pWI5LqG77yM6K+3PGEgaHJlZj0iaW5kZXgucGhwP21vZD1sb2dpbiI+6YeN5paw55m75b2VPC9hPu+8gQ=='),3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>