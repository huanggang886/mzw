<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['�����Ď���Ô����ĮĈ�����îî���']=base64_decode('cGhvbmVfY2hlY2s=');$zym_decrypt['��ľ���֎ֈ���į��Ô��־��Ď����']=base64_decode('Zmxvb3I=');$zym_decrypt['����ï�������î��Ď���֋ï����֋']=base64_decode('dGltZQ==');$zym_decrypt['����������Ë������������������Î']=base64_decode('c3RydG90aW1l');$zym_decrypt['�����֮�į���������������þ�Ĕ��']=base64_decode('ZGF0ZQ==');$zym_decrypt['���������ċ����֮�������������È']=base64_decode('ZGFkZHNsYXNoZXM=');$zym_decrypt['־��������ï������Ë��Į���ċË�']=base64_decode('c3RyaXBfdGFncw==');$zym_decrypt['������֥���È���Ĕ�����֔�������']=base64_decode('c3RydG9sb3dlcg==');$zym_decrypt['����֯È���Ë���å��֋��þ������']=base64_decode('c2hvd21zZw=='); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title='签到领VIP';$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>首页</a></li>
<li class="active"><a href="#"><i class="icon fa fa-check-square"></i>签到领VIP</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLWxnLTggY29sLXNtLTEwIGNvbC14cy0xMiBjZW50ZXItYmxvY2siIHJvbGU9Im1haW4iPg==');$jfjf =$conf['qd_jifen'] ;if($islogin==1){if($conf['active']!=0)$GLOBALS['zym_decrypt']['�����Ď���Ô����ĮĈ�����îî���']();$user =$row['user'];$uid =$row['userid'];$vipjf =$row['coin'];$rmb =$row['coin'];$vipsigntime =$row['vipsigntime'];$vipend =$row['vipdate'];$vipsj =$GLOBALS['zym_decrypt']['��ľ���֎ֈ���į��Ô��־��Ď����']($vipjf/$jfjf);if($isvip==1 || $isvip==2){$vip ='<font color="#FF0000">是</font>';}else{$vip ='<font color="#0000C6">否</font>';}if($row['daili']==1){$daili ='<font color="#FF0000">是</font>';}else{$daili ='<font color="#0000C6">否</font>';}$time =$GLOBALS['zym_decrypt']['����ï�������î��Ď���֋ï����֋']();$viptime =($GLOBALS['zym_decrypt']['����������Ë������������������Î']($row['vipdate'])-$GLOBALS['zym_decrypt']['����������Ë������������������Î']($GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("y-m-d",$time)))/3600/24;if($viptime < 0){$viptime =0;}if($isvip==2)$viptime='永久';$datatime =$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("y-m-d",$time);if($GLOBALS['zym_decrypt']['����������Ë������������������Î']($datatime)==$GLOBALS['zym_decrypt']['����������Ë������������������Î']($vipsigntime)){$qdzt ='已签到';}else{$qdzt ='未签到';}if(@$_GET['qd']==1){$vipjf =$vipjf+$conf['qd_coin'];$time =$GLOBALS['zym_decrypt']['����ï�������î��Ď���֋ï����֋']();$datatime =$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("y-m-d",$time);$verifycode=$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($GLOBALS['zym_decrypt']['־��������ï������Ë��Į���ċË�']($_POST['verify']));if($GLOBALS['zym_decrypt']['����������Ë������������������Î']($datatime)==$GLOBALS['zym_decrypt']['����������Ë������������������Î']($vipsigntime)){echo"<script> alert('今天你已经签到了');history.go(-1); </script>";}else{if(!$verifycode || $GLOBALS['zym_decrypt']['������֥���È���Ĕ�����֔�������']($verifycode)!=$_SESSION['verifycode']){exit("<script language='javascript'>alert('验证码不正确！');history.go(-1);</script>");}if(!empty($conf['qd_ss'])){include_once(ROOT."qq/qzone.class.php");$qq=$_POST['qq'];$qqs =$DB->get_row("select * from ".DBQZ."_qq where qq='{$qq}' and uid='{$uid}' limit 1");if(!$qqs['qq'])exit("<script> alert('签到失败，此QQ不存在');history.go(-1); </script>");$qdqq =new qzone($qqs['qq'],$qqs['sid'],$qqs['skey'],$qqs['pskey']);$qdqq->shuo(0,$conf['qd_ss'],$conf['qd_pturl']);}$DB->query("update ".DBQZ."_user set coin='".$vipjf."',vipsigntime='".$datatime."' where userid='".$uid."'");$mark =$DB->affected();if($mark>0){if(!$vipsigntime && $conf['qd_vipts']>0 && $isvip==0){$vipdate =$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("Y-m-d", $GLOBALS['zym_decrypt']['����������Ë������������������Î']("+ {$conf['qd_vipts']} days"));$DB->query("update ".DBQZ."_user set vip='1',vipdate='".$vipdate."' where userid='".$uid."'");if($conf['vipmode']==1)$DB->query("update ".DBQZ."_qq set vip='1',vipdate='".$vipdate."' where qq='".$qq."'");$addstr='，同时获得了'.$conf['qd_vipts'].'天体验VIP';}echo"<script> alert('签到成功，你获得了 {$conf['qd_coin']}{$conf['coin_name']}{$addstr}！');window.location = 'index.php?mod=qd'; </script>";}else{echobase64_decode('PHNjcmlwdD4gYWxlcnQoJ+etvuWIsOWksei0pScpO2hpc3RvcnkuZ28oLTEpOyA8L3NjcmlwdD4=');}}}if(isset($_POST['data'])){if($jfjf==0)$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']("本站未开启签到兑换VIP功能，请管理员到后台【VIP规则设定】中开启相关配置！",2);$xg_vipjf =$vipjf - @$_POST['data'] * $jfjf;if($_POST['data'] < 0){echo"<script> alert('兑换天数不能为负数！'); </script>";}elseif($row['vip']==2){echo"<script> alert('你已经是永久VIP，无法兑换！'); </script>";}else{if($GLOBALS['zym_decrypt']['��ľ���֎ֈ���į��Ô��־��Ď����']($_POST['data'])< 1){echo"<script> alert('兑换天数不能为小数！'); </script>";}else{if($xg_vipjf < 0){echo"<script> alert('剩余{$conf['coin_name']}不够！'); </script>";}else{if(empty($_POST['data'])){echo"<script> alert('兑换天数不能为空！'); </script>";}else{$xg_vipend =$row['vipdate'];$time =$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("y-m-d",$GLOBALS['zym_decrypt']['����ï�������î��Ď���֋ï����֋']());if($GLOBALS['zym_decrypt']['����������Ë������������������Î']($row['vipdate'])< $GLOBALS['zym_decrypt']['����ï�������î��Ď���֋ï����֋']()){$xg_vipend =$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("y-m-d",$GLOBALS['zym_decrypt']['����ï�������î��Ď���֋ï����֋']());}$xg_vipend =$GLOBALS['zym_decrypt']['����������Ë������������������Î']($xg_vipend)+ 3600 * 24 * $GLOBALS['zym_decrypt']['��ľ���֎ֈ���į��Ô��־��Ď����'](@$_POST['data']);$xg_vipend =$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']('y-m-d',$xg_vipend);$viplq_sql="update ".DBQZ."_user set coin='".$xg_vipjf."',vipdate='".$xg_vipend."',vip='1' where userid='".$uid."'";$DB->query($viplq_sql);$mark =$DB->affected();if($mark>0){echo"<script> alert('成功兑换{$_POST['data']}天VIP，请刷新查看最新信息！');window.location = 'index.php?mod=qd'; </script>";}else{echobase64_decode('PHNjcmlwdD4gYWxlcnQoJ+WFkeaNouWksei0pe+8gScpO2hpc3RvcnkuZ28oLTEpOyA8L3NjcmlwdD4=');}}}}}}echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwgcGFuZWwtcHJpbWFyeSI+DQoJPGRpdiBjbGFzcz0icGFuZWwtaGVhZGluZyI+DQoJCTxoMyBjbGFzcz0icGFuZWwtdGl0bGUiIGFsaWduPSJjZW50ZXIiPg0KCQkJ562+5Yiw5YWs5ZGKDQoJCTwvaDM+DQoJPC9kaXY+DQo8ZGl2IGNsYXNzPSJsaXN0LWdyb3VwLWl0ZW0gcmVlZCI+PHNwYW4+562+5Yiw5Y+v5Lul6I635b6X').$conf['coin_name'].'，同时能获取体验VIP资格！</span></div>';if($conf['qd_vipts'])echo '<div class="list-group-item reed"><span>签到即送VIP，每人仅限获取一次VIP，重复签到没有VIP奖励！</span></div>';if(!empty($conf['qd_ss']))echo '<div class="list-group-item reed"><span>签到会利用添加的QQ发送一条带广告说说，不同意请勿签到！</span></div>';echo base64_decode('PC9kaXY+');$rs=$DB->query("SELECT * FROM ".DBQZ."_qq WHERE uid='{$uid}' and status2=1 order by id desc");$contents='';while($myrow =$DB->fetch($rs))$contents.='<option value="'.$myrow['qq'].'">'.$myrow['qq'].'</option>';echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwgcGFuZWwtcHJpbWFyeSI+DQoJPGRpdiBjbGFzcz0icGFuZWwtaGVhZGluZyI+DQoJCTxoMyBjbGFzcz0icGFuZWwtdGl0bGUiIGFsaWduPSJjZW50ZXIiPg0KCQkJ5b2T5YmN55qE55m76ZmG5L+h5oGvDQoJCTwvaDM+DQoJPC9kaXY+DQoJPHRhYmxlIGNsYXNzPSJ0YWJsZSB0YWJsZS1ib3JkZXJlZCI+DQoJCTx0Ym9keSBhbGlnbj0iY2VudGVyIj4NCgkJCTx0cj4NCgkJCQk8dGQ+DQoJCQkJCVVJRA0KCQkJCTwvdGQ+DQoJCQkJPHRkPg0KCQkJCQnnlKjmiLflkI0NCgkJCQk8L3RkPg0KCQkJCTx0ZD4NCgkJCQkJ5piv5ZCmVklQDQoJCQkJPC90ZD4NCgkJCQk8dGQ+DQoJCQkJCVZJUOWJqeS9meWkqeaVsA0KCQkJCTwvdGQ+DQoJCQkJPHRkPg0KCQkJCQnmmK/lkKbku6PnkIYNCgkJCQk8L3RkPg0KCQkJCTx0ZD4NCgkJCQkJ').$conf['coin_name'].'
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
			签到信息（每日获得 '.$conf['qd_coin'].''.$conf['coin_name'].'）
		</h3>
	</div>
	<table class="table table-bordered">
		<tbody align="center">
			<tr>
				<td colspan="1">
					签到状态
				</td>
				<td colspan="1">
					<img title="点击刷新" src="verifycode.php" onclick="this.src=\'verifycode.php?\'+Math.random();" style="max-height:38px;vertical-align:middle;" class="img-rounded">
				</td>
				<td colspan="2">
					选择ＱＱ
				</td>
				<td colspan="2">
					点击签到
				</td>
			</tr>
			<tr>
				<td colspan="1">
					' . @$qdzt . '
				</td>
				<form method="post" action="index.php?mod=qd&qd=1">
					<td colspan="1" style="max-width:100px;">
						<input type="text" name="verify" class="form-control" style="display:inline-block;vertical-align:middle;" placeholder="输入验证码" required>
					</td>
					<td colspan="2">
					<select class="form-control" name="qq">
					'.$contents.'
					</select>
					</td>
					<td colspan="2">
					<input type="submit" name="submit" value="签到" class="btn btn-info"/>
					</td>
				</form>
			</tr>
		</tbody>
	</table>
</div>';if($jfjf)echo '<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">
			领取VIP( ' . $jfjf . ' '.$conf['coin_name'].'兑换 1 天VIP)
		</h3>
	</div>
	<table class="table table-bordered">
		<tbody align="center">
			<tr>
				<td colspan="2">
					签到积分
				</td>
				<td colspan="1">
					可领天数
				</td>
				<td colspan="1">
					领取天数
				</td>
				<td colspan="2">
					点击领取
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
						<input type="submit" name="submit" value="兑换" class="btn btn-success"/>
					</td>
				</form>
			</tr>
		</tbody>
	</table>
</div>
';}else $GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('55m75b2V5aSx6LSl77yM5Y+v6IO95piv5a+G56CB6ZSZ6K+v5oiW6ICF6Lqr5Lu95aSx5pWI5LqG77yM6K+3PGEgaHJlZj0iaW5kZXgucGhwP21vZD1sb2dpbiI+6YeN5paw55m75b2VPC9hPu+8gQ=='),3);include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>
