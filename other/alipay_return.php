<?php global $zym_decrypt;$zym_decrypt['������������î��î���þ������å�']=base64_decode('c3RyX3JlcGxhY2U=');$zym_decrypt['����֔��ċ���������Ĕ�Į�Į�����']=base64_decode('Z2V0c2hvcA==');$zym_decrypt['����֯È���Ë���å��֋��þ������']=base64_decode('c2hvd21zZw=='); ?>
<?php
 $mod='blank';require_once(base64_decode('Li4vaW5jbHVkZXMvY29tbW9uLnBocA=='));require_once(SYSTEM_ROOT.base64_decode('YWxpcGF5L2FsaXBheS5jb25maWcucGhw'));require_once(SYSTEM_ROOT.base64_decode('YWxpcGF5L2FsaXBheV9ub3RpZnkuY2xhc3MucGhw'));if(!$conf['cdnserver'])$cdnserver='../';$siteurl=$GLOBALS['zym_decrypt']['������������î��î���þ������å�']('other/','',$siteurl);$title='在线购买';$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>首页</a></li>
<li class="active"><a href="#"><i class="icon fa fa-shopping-cart"></i>自助购买</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLWxnLTggY29sLXNtLTEwIGNvbC14cy0xMiBjZW50ZXItYmxvY2siIHJvbGU9Im1haW4iPg==');$alipayNotify =new AlipayNotify($alipay_config);$verify_result =$alipayNotify->verifyReturn();if($verify_result){$out_trade_no =$_GET['out_trade_no'];$trade_no =$_GET['trade_no'];$trade_status =$_GET['trade_status'];$srow=$DB->get_row("SELECT * FROM ".DBQZ."_pay WHERE orderid='{$out_trade_no}' limit 1");$sql="insert into `".DBQZ."_order` (`type`,`orderid`,`trade_no`,`time`,`name`,`money`,`status`) values ('alipay','".$out_trade_no."','".$trade_no."','".$date."','".$srow['name']."','".$srow['money']."','2')";$DB->query($sql);if($_GET['trade_status'] == 'TRADE_FINISHED' || $_GET['trade_status'] == 'TRADE_SUCCESS'){if($srow['status']==0){$DB->query("update `".DBQZ."_pay` set `status` ='1',`endtime` ='$date' where `orderid`='$out_trade_no'");$msg ='OK';if($GLOBALS['zym_decrypt']['����֔��ċ���������Ĕ�Į�Į�����']($srow['shopid'],$srow['qq'],$msg)){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']($msg,1,'shop');}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']($msg,4,'shop');}}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5oKo5omA6LSt5Lmw55qE5ZWG5ZOB5bey5oiQ5Yqf5Yiw6LSm77yM5oSf6LCi6LSt5Lmw77yB'),1,base64_decode('c2hvcA=='));}}else {echo base64_decode('dHJhZGVfc3RhdHVzPQ==').$_GET['trade_status'];}}else {$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('6aqM6K+B5aSx6LSl77yB'),4,base64_decode('c2hvcA=='));}$conf['marquee']=false;$conf['limhplayer']=false;include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>