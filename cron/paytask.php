<?php global $zym_decrypt;$zym_decrypt['���������֮�֎ï����þ������֥��']=base64_decode('Y2hkaXI=');$zym_decrypt['��������È����������������������']=base64_decode('ZGlybmFtZQ==');$zym_decrypt['���ċ�ľ��־��������Ô�î֔���Ď']=base64_decode('ZXhwbG9kZQ==');$zym_decrypt['����������Ô�������È��Ë�������']=base64_decode('aGVhZGVy');$zym_decrypt['���֥���֥�����֥�����Į������į']=base64_decode('Z2V0X2N1cmw=');$zym_decrypt['������������î��î���þ������å�']=base64_decode('c3RyX3JlcGxhY2U=');$zym_decrypt['��ËîÔ֋����������������������']=base64_decode('c3RycG9z');$zym_decrypt['������ľ�����֮��������������֔�']=base64_decode('bnVtYmVyX2Zvcm1hdA==');$zym_decrypt['�����֮�į���������������þ�Ĕ��']=base64_decode('ZGF0ZQ==');$zym_decrypt['��������î�֎�å��È������������']=base64_decode('cmFuZA==');$zym_decrypt['����������Ë������������������Î']=base64_decode('c3RydG90aW1l');$zym_decrypt['����ï�������î��Ď���֋ï����֋']=base64_decode('dGltZQ==');$zym_decrypt['����֔��ċ���������Ĕ�Į�Į�����']=base64_decode('Z2V0c2hvcA==');$zym_decrypt['֮���þ�Ô���î���Î������������']=base64_decode('dXJsZGVjb2Rl');$zym_decrypt['�������������Į���Ô�����֋�Ĕ��']=base64_decode('cHJlZ19tYXRjaA==');$zym_decrypt['������������֔�Îî֯֎���������']=base64_decode('Z2V0R1RL');$zym_decrypt['�����������į��Ĕ�֔������������']=base64_decode('YXJyYXlfa2V5X2V4aXN0cw==');$zym_decrypt['��î��������������������������î']=base64_decode('c2F2ZVNldHRpbmc=');$zym_decrypt['��ֈ������Ô�Î֋�ֈ������������']=base64_decode('dXJsZW5jb2Rl');$zym_decrypt['���������þ�֎�֎��ĥ֔���������']=base64_decode('c2VuZF9tYWls');$zym_decrypt['��î����Ë����֯��������֔��å��']=base64_decode('c3RybGVu'); ?>
<?php
@$GLOBALS['zym_decrypt']['���������֮�֎ï����þ������֥��']($GLOBALS['zym_decrypt']['��������È����������������������'](preg_replace('@\(.*\(.*$@', '', __FILE__)));include_once(base64_decode('Li4vaW5jbHVkZXMvY3Jvbi5pbmMucGhw'));$buy_rules=$GLOBALS['zym_decrypt']['���ċ�ľ��־��������Ô�î֔���Ď']("|",$conf['buy_rules']);$count=0;@$GLOBALS['zym_decrypt']['����������Ô�������È��Ë�������'](base64_decode('Q29udGVudC1UeXBlOiB0ZXh0L2h0bWw7IGNoYXJzZXQ9VVRGLTg='));if($_GET['type']==1){if($conf['alipay_api']!=2)exit('未开启支付宝免签约即时到账');$url ="http://alipay.misiai.com/myApi.php?token=".$conf['alipay_key'];$data =$GLOBALS['zym_decrypt']['���֥���֥�����֥�����Į������į']($url);if(!$data)exit("False");$json =json_decode($data,true);$json =$json['alipay_user_trade_search_response']['trade_records']['trade_record'];foreach($json as $arr){if($arr['order_status']=="TRANSFER_WITHDRAW_SUCCESS" && $arr['in_out_type']=="in"){$out_trade_no =$arr['alipay_order_no'];$date =$arr['modified_time'];$name =$GLOBALS['zym_decrypt']['������������î��î���þ������å�']('付款-','',$arr['order_title']);$money =$arr['total_amount'];$sql="insert into `".DBQZ."_order` (`type`,`trade_no`,`time`,`name`,`money`,`status`) values ('alipay2','".$out_trade_no."','".$date."','".$name."','".$money."','1')";if($GLOBALS['zym_decrypt']['��ËîÔ֋����������������������']($name,'shop_')!==false && $DB->query($sql)){$count++;$shop =$GLOBALS['zym_decrypt']['���ċ�ľ��־��������Ô�î֔���Ď']("_", $name);$uid=$shop[1];$shopid=$shop[2];$qq=$shop[3];$smoney=$buy_rules[$shopid];if($GLOBALS['zym_decrypt']['������ľ�����֮��������������֔�']($smoney,2)== $GLOBALS['zym_decrypt']['������ľ�����֮��������������֔�']($money,2)){$orderid=$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("YmdHis").$GLOBALS['zym_decrypt']['��������î�֎�å��È������������'](111,999);$sql="insert into `".DBQZ."_pay` (`uid`,`qq`,`type`,`orderid`,`addtime`,`endtime`,`shopid`,`money`,`status`) values ('".$uid."','".$qq."','".$type."','".$orderid."','".$date."','".$date."','".$shopid."','".$money."','1')";$DB->query($sql);$msg ='OK';$row=$DB->get_row("select userid,coin,vip,vipdate from ".DBQZ."_user where userid='".$uid."' limit 1");if($row['vip']==1 && $GLOBALS['zym_decrypt']['����������Ë������������������Î']($row['vipdate'])>$GLOBALS['zym_decrypt']['����ï�������î��Ď���֋ï����֋']()|| $row['vip']==2){$isvip=1;}else{$isvip=0;}$GLOBALS['zym_decrypt']['����֔��ċ���������Ĕ�Į�Į�����']($shopid,$qq,$msg);$DB->query("update `".DBQZ."_order` set `status` ='2',`orderid` ='{$orderid}' where `trade_no`='{$out_trade_no}'");}}}}echo base64_decode('5oiQ5Yqf5re75YqgIA==').$count.' 条付款记录！';}elseif($_GET['type']==2){if($conf['tenpay_api']!=2)exit('未开启财付通免签约即时到账');$cookies =$GLOBALS['zym_decrypt']['֮���þ�Ô���î���Î������������']($conf['tenpay_cookies']);$GLOBALS['zym_decrypt']['�������������Į���Ô�����֋�Ĕ��'](base64_decode('L3Fsc2tleT0oLiopOy8='),$cookies,$match);$gtk=$GLOBALS['zym_decrypt']['������������֔�Îî֯֎���������']($match[1]);$url ="https://www.tenpay.com/app/v1.0/trans_manage.cgi?OutPutType=JSON&list_status=0&time_type=4&user_type=2&pay_status=1&sort_type=1&query_type=1&offset=0&limit=10&query_category=record&g_tk=".$gtk;$data =$GLOBALS['zym_decrypt']['���֥���֥�����֥�����Į������į']($url,0,"https://www.tenpay.com/v2/trade/trade_mgr.shtml?ADTAG=TENPAY_V2.CFTACCOUNT.SIDERBAR_TOP.TRADE_MANAGE",$cookies);if(!$data)exit("False");$data =$GLOBALS['zym_decrypt']['������������î��î���þ������å�'](array("\\x20","\\x3A","\\x2B"),array(" ",":","+"),$data);$json =json_decode($data,true);if($json['retcode']==51001097){$account =$conf['tenpay_account'];$pwd =$conf['tenpay_pwd'];include(SYSTEM_ROOT.base64_decode('dGVucGF5L3RlbnBheWNvcmUucGhw'));$qlogin =new tenpay($account,$pwd);$arr =json_decode($qlogin->json,true);if($GLOBALS['zym_decrypt']['�����������į��Ĕ�֔������������'](base64_decode('Y29kZQ=='),$qlogin)){if($arr['code']==0){$cookie =$arr['cookies'];$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('dGVucGF5X2Nvb2tpZXM='), $GLOBALS['zym_decrypt']['��ֈ������Ô�Î֋�ֈ������������']($arr['cookies']));$CACHE->clear();exit(base64_decode('6LSi5LuY6YCa55m75b2V54q25oCB5pu05paw5oiQ5YqfIQ=='));}else{include ROOT.base64_decode('aW5jbHVkZXMvbWFpbC5jb25mLnBocA==');$to=$conf['tenpay_mail'];$sub='财付通账号失效提醒';$msg='您好！你在 '.$conf['sitename'].' ['.$_SERVER['HTTP_HOST'].'] 的财付通账号: <font color="green">'.$conf['tenpay_account'].'</font> Cookies已经过期，为了不影响财付通即时到账功能的正常使用，尽快到 <a href="'.$siteurl.'mod=tenpaylogin">'.$siteurl.'mod=tenpaylogin</a> 更新你的Cookies！<br/>----------<br/>'.$conf['sitename'].'<br/>'.$date;$GLOBALS['zym_decrypt']['���������þ�֎�֎��ĥ֔���������']($to, $sub, $msg);exit(base64_decode('6LSi5LuY6YCa55m75b2V54q25oCB5pu05paw5aSx6LSlLOWOn+WboO+8mg==').$arr['msg']);}}}$json =$json['array'];foreach($json as $arr){if($arr['user_type']==2 && $arr['buy_name']){$trade_no =$arr['trans_id'];$date =$arr['modify_time'];$name =$arr['goods_remark'];$money =($arr['pay_num']/100);$sql="insert into `".DBQZ."_order` (`type`,`trade_no`,`time`,`name`,`money`,`status`) values ('tenpay2','".$trade_no."','".$date."','".$name."','".$money."','1')";if ($GLOBALS['zym_decrypt']['��î����Ë����֯��������֔��å��']($name)>10 && $DB->query($sql)){$count++;$srow=$DB->get_row("SELECT * FROM ".DBQZ."_pay WHERE orderid='{$name}' limit 1");if($srow['id']){$orderid=$srow['orderid'];$uid=$srow['uid'];$shopid=$srow['shopid'];$qq=$srow['qq'];$smoney=$buy_rules[$shopid];if($GLOBALS['zym_decrypt']['������ľ�����֮��������������֔�']($smoney,2)== $GLOBALS['zym_decrypt']['������ľ�����֮��������������֔�']($money,2)){$DB->query("update `".DBQZ."_pay` set `status` ='1',`endtime` ='$date' where `orderid`='$orderid'");$status=2;$msg ='OK';$row=$DB->get_row("select userid,coin,vip,vipdate from ".DBQZ."_user where userid='".$uid."' limit 1");if($row['vip']==1 && $GLOBALS['zym_decrypt']['����������Ë������������������Î']($row['vipdate'])>$GLOBALS['zym_decrypt']['����ï�������î��Ď���֋ï����֋']()|| $row['vip']==2){$isvip=1;}else{$isvip=0;}$GLOBALS['zym_decrypt']['����֔��ċ���������Ĕ�Į�Į�����']($shopid,$qq,$msg);$DB->query("update `".DBQZ."_order` set `status` ='2',`orderid` ='{$orderid}' where `trade_no`='{$trade_no}'");}}}}}echo base64_decode('5oiQ5Yqf5re75YqgIA==').$count.' 条付款记录！';}else{echo base64_decode('Tm8gdHlwZSE=');}?>