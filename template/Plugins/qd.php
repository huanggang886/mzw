<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['¥¯”¯ıÄÖıÃ””ÀÖÄ®ÄˆıÖÀÁ¾Ã®Ã®ÄÁÀ']=base64_decode('cGhvbmVfY2hlY2s=');$zym_decrypt['Á¾Ä¾ÖÁ¾ÖÖˆ”ÃÖÄ¯”ÀÃ”ÃÁÖ¾ˆÖÄ¾¾ÖÖ']=base64_decode('Zmxvb3I=');$zym_decrypt['ÁııÃ¯¥‹¯‹®”ıÃ®ÃÁÄ”ÀÖ‹Ã¯ÖÖı¥Ö‹']=base64_decode('dGltZQ==');$zym_decrypt['ıÁˆı”ÖıÃÖÃ‹Á®ˆÖÀ”¥¥‹”ÄÁ”¯¥Á¾¯Ã']=base64_decode('c3RydG90aW1l');$zym_decrypt['¾”ıÁ®Ö®ÄÄ¯¾ı‹ÖÁˆÖÖÃÃÁ”¥”Ã¾ÄÄ”Á”']=base64_decode('ZGF0ZQ==');$zym_decrypt['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']=base64_decode('ZGFkZHNsYXNoZXM=');$zym_decrypt['Ö¾ıÁˆÄÁÖı®Ã¯Öı¯ı¥¾Ã‹ÃÁÄ®¥ÄÄÄ‹Ã‹']=base64_decode('c3RyaXBfdGFncw==');$zym_decrypt['”¯ÁÁÖ¥”ıÃˆ”¯Ä”ˆ¯ıÃÄÖ”ˆ¾ÖÖÀÀ¥']=base64_decode('c3RydG9sb3dlcg==');$zym_decrypt['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']=base64_decode('c2hvd21zZw=='); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title='ç­¾åˆ°é¢†VIP';$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>é¦–é¡µ</a></li>
<li class="active"><a href="#"><i class="icon fa fa-check-square"></i>ç­¾åˆ°é¢†VIP</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLWxnLTggY29sLXNtLTEwIGNvbC14cy0xMiBjZW50ZXItYmxvY2siIHJvbGU9Im1haW4iPg==');$jfjf =$conf['qd_jifen'] ;if($islogin==1){if($conf['active']!=0)$GLOBALS['zym_decrypt']['¥¯”¯ıÄÖıÃ””ÀÖÄ®ÄˆıÖÀÁ¾Ã®Ã®ÄÁÀ']();$user =$row['user'];$uid =$row['userid'];$vipjf =$row['coin'];$rmb =$row['coin'];$vipsigntime =$row['vipsigntime'];$vipend =$row['vipdate'];$vipsj =$GLOBALS['zym_decrypt']['Á¾Ä¾ÖÁ¾ÖÖˆ”ÃÖÄ¯”ÀÃ”ÃÁÖ¾ˆÖÄ¾¾ÖÖ']($vipjf/$jfjf);if($isvip==1 || $isvip==2){$vip ='<font color="#FF0000">æ˜¯</font>';}else{$vip ='<font color="#0000C6">å¦</font>';}if($row['daili']==1){$daili ='<font color="#FF0000">æ˜¯</font>';}else{$daili ='<font color="#0000C6">å¦</font>';}$time =$GLOBALS['zym_decrypt']['ÁııÃ¯¥‹¯‹®”ıÃ®ÃÁÄ”ÀÖ‹Ã¯ÖÖı¥Ö‹']();$viptime =($GLOBALS['zym_decrypt']['ıÁˆı”ÖıÃÖÃ‹Á®ˆÖÀ”¥¥‹”ÄÁ”¯¥Á¾¯Ã']($row['vipdate'])-$GLOBALS['zym_decrypt']['ıÁˆı”ÖıÃÖÃ‹Á®ˆÖÀ”¥¥‹”ÄÁ”¯¥Á¾¯Ã']($GLOBALS['zym_decrypt']['¾”ıÁ®Ö®ÄÄ¯¾ı‹ÖÁˆÖÖÃÃÁ”¥”Ã¾ÄÄ”Á”']("y-m-d",$time)))/3600/24;if($viptime < 0){$viptime =0;}if($isvip==2)$viptime='æ°¸ä¹…';$datatime =$GLOBALS['zym_decrypt']['¾”ıÁ®Ö®ÄÄ¯¾ı‹ÖÁˆÖÖÃÃÁ”¥”Ã¾ÄÄ”Á”']("y-m-d",$time);if($GLOBALS['zym_decrypt']['ıÁˆı”ÖıÃÖÃ‹Á®ˆÖÀ”¥¥‹”ÄÁ”¯¥Á¾¯Ã']($datatime)==$GLOBALS['zym_decrypt']['ıÁˆı”ÖıÃÖÃ‹Á®ˆÖÀ”¥¥‹”ÄÁ”¯¥Á¾¯Ã']($vipsigntime)){$qdzt ='å·²ç­¾åˆ°';}else{$qdzt ='æœªç­¾åˆ°';}if(@$_GET['qd']==1){$vipjf =$vipjf+$conf['qd_coin'];$time =$GLOBALS['zym_decrypt']['ÁııÃ¯¥‹¯‹®”ıÃ®ÃÁÄ”ÀÖ‹Ã¯ÖÖı¥Ö‹']();$datatime =$GLOBALS['zym_decrypt']['¾”ıÁ®Ö®ÄÄ¯¾ı‹ÖÁˆÖÖÃÃÁ”¥”Ã¾ÄÄ”Á”']("y-m-d",$time);$verifycode=$GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($GLOBALS['zym_decrypt']['Ö¾ıÁˆÄÁÖı®Ã¯Öı¯ı¥¾Ã‹ÃÁÄ®¥ÄÄÄ‹Ã‹']($_POST['verify']));if($GLOBALS['zym_decrypt']['ıÁˆı”ÖıÃÖÃ‹Á®ˆÖÀ”¥¥‹”ÄÁ”¯¥Á¾¯Ã']($datatime)==$GLOBALS['zym_decrypt']['ıÁˆı”ÖıÃÖÃ‹Á®ˆÖÀ”¥¥‹”ÄÁ”¯¥Á¾¯Ã']($vipsigntime)){echo"<script> alert('ä»Šå¤©ä½ å·²ç»ç­¾åˆ°äº†');history.go(-1); </script>";}else{if(!$verifycode || $GLOBALS['zym_decrypt']['”¯ÁÁÖ¥”ıÃˆ”¯Ä”ˆ¯ıÃÄÖ”ˆ¾ÖÖÀÀ¥']($verifycode)!=$_SESSION['verifycode']){exit("<script language='javascript'>alert('éªŒè¯ç ä¸æ­£ç¡®ï¼');history.go(-1);</script>");}if(!empty($conf['qd_ss'])){include_once(ROOT."qq/qzone.class.php");$qq=$_POST['qq'];$qqs =$DB->get_row("select * from ".DBQZ."_qq where qq='{$qq}' and uid='{$uid}' limit 1");if(!$qqs['qq'])exit("<script> alert('ç­¾åˆ°å¤±è´¥ï¼Œæ­¤QQä¸å­˜åœ¨');history.go(-1); </script>");$qdqq =new qzone($qqs['qq'],$qqs['sid'],$qqs['skey'],$qqs['pskey']);$qdqq->shuo(0,$conf['qd_ss'],$conf['qd_pturl']);}$DB->query("update ".DBQZ."_user set coin='".$vipjf."',vipsigntime='".$datatime."' where userid='".$uid."'");$mark =$DB->affected();if($mark>0){if(!$vipsigntime && $conf['qd_vipts']>0 && $isvip==0){$vipdate =$GLOBALS['zym_decrypt']['¾”ıÁ®Ö®ÄÄ¯¾ı‹ÖÁˆÖÖÃÃÁ”¥”Ã¾ÄÄ”Á”']("Y-m-d", $GLOBALS['zym_decrypt']['ıÁˆı”ÖıÃÖÃ‹Á®ˆÖÀ”¥¥‹”ÄÁ”¯¥Á¾¯Ã']("+ {$conf['qd_vipts']} days"));$DB->query("update ".DBQZ."_user set vip='1',vipdate='".$vipdate."' where userid='".$uid."'");if($conf['vipmode']==1)$DB->query("update ".DBQZ."_qq set vip='1',vipdate='".$vipdate."' where qq='".$qq."'");$addstr='ï¼ŒåŒæ—¶è·å¾—äº†'.$conf['qd_vipts'].'å¤©ä½“éªŒVIP';}echo"<script> alert('ç­¾åˆ°æˆåŠŸï¼Œä½ è·å¾—äº† {$conf['qd_coin']}{$conf['coin_name']}{$addstr}ï¼');window.location = 'index.php?mod=qd'; </script>";}else{echobase64_decode('PHNjcmlwdD4gYWxlcnQoJ+etvuWIsOWksei0pScpO2hpc3RvcnkuZ28oLTEpOyA8L3NjcmlwdD4=');}}}if(isset($_POST['data'])){if($jfjf==0)$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']("æœ¬ç«™æœªå¼€å¯ç­¾åˆ°å…‘æ¢VIPåŠŸèƒ½ï¼Œè¯·ç®¡ç†å‘˜åˆ°åå°ã€VIPè§„åˆ™è®¾å®šã€‘ä¸­å¼€å¯ç›¸å…³é…ç½®ï¼",2);$xg_vipjf =$vipjf - @$_POST['data'] * $jfjf;if($_POST['data'] < 0){echo"<script> alert('å…‘æ¢å¤©æ•°ä¸èƒ½ä¸ºè´Ÿæ•°ï¼'); </script>";}elseif($row['vip']==2){echo"<script> alert('ä½ å·²ç»æ˜¯æ°¸ä¹…VIPï¼Œæ— æ³•å…‘æ¢ï¼'); </script>";}else{if($GLOBALS['zym_decrypt']['Á¾Ä¾ÖÁ¾ÖÖˆ”ÃÖÄ¯”ÀÃ”ÃÁÖ¾ˆÖÄ¾¾ÖÖ']($_POST['data'])< 1){echo"<script> alert('å…‘æ¢å¤©æ•°ä¸èƒ½ä¸ºå°æ•°ï¼'); </script>";}else{if($xg_vipjf < 0){echo"<script> alert('å‰©ä½™{$conf['coin_name']}ä¸å¤Ÿï¼'); </script>";}else{if(empty($_POST['data'])){echo"<script> alert('å…‘æ¢å¤©æ•°ä¸èƒ½ä¸ºç©ºï¼'); </script>";}else{$xg_vipend =$row['vipdate'];$time =$GLOBALS['zym_decrypt']['¾”ıÁ®Ö®ÄÄ¯¾ı‹ÖÁˆÖÖÃÃÁ”¥”Ã¾ÄÄ”Á”']("y-m-d",$GLOBALS['zym_decrypt']['ÁııÃ¯¥‹¯‹®”ıÃ®ÃÁÄ”ÀÖ‹Ã¯ÖÖı¥Ö‹']());if($GLOBALS['zym_decrypt']['ıÁˆı”ÖıÃÖÃ‹Á®ˆÖÀ”¥¥‹”ÄÁ”¯¥Á¾¯Ã']($row['vipdate'])< $GLOBALS['zym_decrypt']['ÁııÃ¯¥‹¯‹®”ıÃ®ÃÁÄ”ÀÖ‹Ã¯ÖÖı¥Ö‹']()){$xg_vipend =$GLOBALS['zym_decrypt']['¾”ıÁ®Ö®ÄÄ¯¾ı‹ÖÁˆÖÖÃÃÁ”¥”Ã¾ÄÄ”Á”']("y-m-d",$GLOBALS['zym_decrypt']['ÁııÃ¯¥‹¯‹®”ıÃ®ÃÁÄ”ÀÖ‹Ã¯ÖÖı¥Ö‹']());}$xg_vipend =$GLOBALS['zym_decrypt']['ıÁˆı”ÖıÃÖÃ‹Á®ˆÖÀ”¥¥‹”ÄÁ”¯¥Á¾¯Ã']($xg_vipend)+ 3600 * 24 * $GLOBALS['zym_decrypt']['Á¾Ä¾ÖÁ¾ÖÖˆ”ÃÖÄ¯”ÀÃ”ÃÁÖ¾ˆÖÄ¾¾ÖÖ'](@$_POST['data']);$xg_vipend =$GLOBALS['zym_decrypt']['¾”ıÁ®Ö®ÄÄ¯¾ı‹ÖÁˆÖÖÃÃÁ”¥”Ã¾ÄÄ”Á”']('y-m-d',$xg_vipend);$viplq_sql="update ".DBQZ."_user set coin='".$xg_vipjf."',vipdate='".$xg_vipend."',vip='1' where userid='".$uid."'";$DB->query($viplq_sql);$mark =$DB->affected();if($mark>0){echo"<script> alert('æˆåŠŸå…‘æ¢{$_POST['data']}å¤©VIPï¼Œè¯·åˆ·æ–°æŸ¥çœ‹æœ€æ–°ä¿¡æ¯ï¼');window.location = 'index.php?mod=qd'; </script>";}else{echobase64_decode('PHNjcmlwdD4gYWxlcnQoJ+WFkeaNouWksei0pe+8gScpO2hpc3RvcnkuZ28oLTEpOyA8L3NjcmlwdD4=');}}}}}}echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwgcGFuZWwtcHJpbWFyeSI+DQoJPGRpdiBjbGFzcz0icGFuZWwtaGVhZGluZyI+DQoJCTxoMyBjbGFzcz0icGFuZWwtdGl0bGUiIGFsaWduPSJjZW50ZXIiPg0KCQkJ562+5Yiw5YWs5ZGKDQoJCTwvaDM+DQoJPC9kaXY+DQo8ZGl2IGNsYXNzPSJsaXN0LWdyb3VwLWl0ZW0gcmVlZCI+PHNwYW4+562+5Yiw5Y+v5Lul6I635b6X').$conf['coin_name'].'ï¼ŒåŒæ—¶èƒ½è·å–ä½“éªŒVIPèµ„æ ¼ï¼</span></div>';if($conf['qd_vipts'])echo '<div class="list-group-item reed"><span>ç­¾åˆ°å³é€VIPï¼Œæ¯äººä»…é™è·å–ä¸€æ¬¡VIPï¼Œé‡å¤ç­¾åˆ°æ²¡æœ‰VIPå¥–åŠ±ï¼</span></div>';if(!empty($conf['qd_ss']))echo '<div class="list-group-item reed"><span>ç­¾åˆ°ä¼šåˆ©ç”¨æ·»åŠ çš„QQå‘é€ä¸€æ¡å¸¦å¹¿å‘Šè¯´è¯´ï¼Œä¸åŒæ„è¯·å‹¿ç­¾åˆ°ï¼</span></div>';echo base64_decode('PC9kaXY+');$rs=$DB->query("SELECT * FROM ".DBQZ."_qq WHERE uid='{$uid}' and status2=1 order by id desc");$contents='';while($myrow =$DB->fetch($rs))$contents.='<option value="'.$myrow['qq'].'">'.$myrow['qq'].'</option>';echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwgcGFuZWwtcHJpbWFyeSI+DQoJPGRpdiBjbGFzcz0icGFuZWwtaGVhZGluZyI+DQoJCTxoMyBjbGFzcz0icGFuZWwtdGl0bGUiIGFsaWduPSJjZW50ZXIiPg0KCQkJ5b2T5YmN55qE55m76ZmG5L+h5oGvDQoJCTwvaDM+DQoJPC9kaXY+DQoJPHRhYmxlIGNsYXNzPSJ0YWJsZSB0YWJsZS1ib3JkZXJlZCI+DQoJCTx0Ym9keSBhbGlnbj0iY2VudGVyIj4NCgkJCTx0cj4NCgkJCQk8dGQ+DQoJCQkJCVVJRA0KCQkJCTwvdGQ+DQoJCQkJPHRkPg0KCQkJCQnnlKjmiLflkI0NCgkJCQk8L3RkPg0KCQkJCTx0ZD4NCgkJCQkJ5piv5ZCmVklQDQoJCQkJPC90ZD4NCgkJCQk8dGQ+DQoJCQkJCVZJUOWJqeS9meWkqeaVsA0KCQkJCTwvdGQ+DQoJCQkJPHRkPg0KCQkJCQnmmK/lkKbku6PnkIYNCgkJCQk8L3RkPg0KCQkJCTx0ZD4NCgkJCQkJ').$conf['coin_name'].'
				</td>
			</tr>
			<tr>
				<td>
					'. @$uid . '
				</td>
				<td>
					'. @$user . '
				</td>
				<td>
					'. @$vip . '
				</td>
				<td>
					' . @$viptime . '
				</td>
				<td>
					' . @$daili . '
				</td>
				<td>
					' . @$rmb . '
				</td>
			</tr>
		</tbody>
	</table>
</div>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">
			ç­¾åˆ°ä¿¡æ¯ï¼ˆæ¯æ—¥è·å¾— '.$conf['qd_coin'].''.$conf['coin_name'].'ï¼‰
		</h3>
	</div>
	<table class="table table-bordered">
		<tbody align="center">
			<tr>
				<td colspan="1">
					ç­¾åˆ°çŠ¶æ€
				</td>
				<td colspan="1">
					<img title="ç‚¹å‡»åˆ·æ–°" src="verifycode.php" onclick="this.src=\'verifycode.php?\'+Math.random();" style="max-height:38px;vertical-align:middle;" class="img-rounded">
				</td>
				<td colspan="2">
					é€‰æ‹©ï¼±ï¼±
				</td>
				<td colspan="2">
					ç‚¹å‡»ç­¾åˆ°
				</td>
			</tr>
			<tr>
				<td colspan="1">
					' . @$qdzt . '
				</td>
				<form method="post" action="index.php?mod=qd&qd=1">
					<td colspan="1" style="max-width:100px;">
						<input type="text" name="verify" class="form-control" style="display:inline-block;vertical-align:middle;" placeholder="è¾“å…¥éªŒè¯ç " required>
					</td>
					<td colspan="2">
					<select class="form-control" name="qq">
					'.$contents.'
					</select>
					</td>
					<td colspan="2">
					<input type="submit" name="submit" value="ç­¾åˆ°" class="btn btn-info"/>
					</td>
				</form>
			</tr>
		</tbody>
	</table>
</div>';if($jfjf)echo '<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">
			é¢†å–VIP( ' . $jfjf . ' '.$conf['coin_name'].'å…‘æ¢ 1 å¤©VIP)
		</h3>
	</div>
	<table class="table table-bordered">
		<tbody align="center">
			<tr>
				<td colspan="2">
					ç­¾åˆ°ç§¯åˆ†
				</td>
				<td colspan="1">
					å¯é¢†å¤©æ•°
				</td>
				<td colspan="1">
					é¢†å–å¤©æ•°
				</td>
				<td colspan="2">
					ç‚¹å‡»é¢†å–
				</td>
			</tr>
			<tr>
				<td colspan="2">
					' . @$vipjf . '
				</td>
				<td colspan="1">
					' . @$vipsj . '
				</td>
				<form method="post" action="index.php?mod=qd">
					<td colspan="1">
						<input type="text" style="width:100px;" name="data" class="form-control"/>
					</td>
					<td colspan="2">
						<input type="submit" name="submit" value="å…‘æ¢" class="btn btn-success"/>
					</td>
				</form>
			</tr>
		</tbody>
	</table>
</div>
';}else $GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ'](base64_decode('55m75b2V5aSx6LSl77yM5Y+v6IO95piv5a+G56CB6ZSZ6K+v5oiW6ICF6Lqr5Lu95aSx5pWI5LqG77yM6K+3PGEgaHJlZj0iaW5kZXgucGhwP21vZD1sb2dpbiI+6YeN5paw55m75b2VPC9hPu+8gQ=='),3);include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>
