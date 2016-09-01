<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']=base64_decode('ZGFkZHNsYXNoZXM=');$zym_decrypt['®ˆ¾¯ÖÖ”Ã‹Ö‹‹ÖÖˆ‹¥”ıÖÀÃ‹ÖÖÃÁˆÃÄ¾']=base64_decode('aW5fYXJyYXk=');$zym_decrypt['”®¥‹ÀÄÄııÁ¥ˆÃÖÃÁ¥Öı‹¥ÖÀÀÄÖÃÀÃ‹']=base64_decode('cXFqb2JfZW5jb2Rl');$zym_decrypt['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']=base64_decode('aW50dmFs');$zym_decrypt['ÁııÃ¯¥‹¯‹®”ıÃ®ÃÁÄ”ÀÖ‹Ã¯ÖÖı¥Ö‹']=base64_decode('dGltZQ==');$zym_decrypt['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']=base64_decode('c2hvd21zZw==');$zym_decrypt['ÖÃÖ¾¥Á”Ö¾‹¾ıÄ®ÃÃÖ”ÄÖ®Ã¯ÄÁ¥ÖÄ']=base64_decode('dW5zZXJpYWxpemU=');$zym_decrypt['”ÖÖÄ‹¾Ä¾¯ÃÖ¾ÖÁÖÃÀ‹ÀÃ”¾Ã®Ö””ˆÖÄ']=base64_decode('ZXhwbG9kZQ==');$zym_decrypt['Ã¯ÖˆÖ¯ÖÀÁÀÖ®Á®Ä¾ıÖˆÄ¾ıÃ¯ÖÃˆıÖ']=base64_decode('dmlwZnVuY19jaGVjaw=='); ?>
<?php
if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$act=isset($_GET['act'])?$_GET['act']:null;if($islogin==1){switch($act){case 'add': $qq=$GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($_GET['qq']);$jobid=$GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($_GET['jobid']);$type=$GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($_GET['type']);if(!$qq || !$type){exit('{"code":-1,"msg":"å‚æ•°ä¸èƒ½ä¸ºç©ºï¼"}');}if(OPEN_OTHE==0 && ($type=='liuyan' || $type=='gift'))exit('{"code":-1,"msg":"å½“å‰ç«™ç‚¹æœªå¼€å¯æ­¤åŠŸèƒ½ï¼"}');$row=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$qq}' limit 1");if($row['uid']!=$uid && $isadmin!=1 && $isdeputy!=1){exit('{"code":-1,"msg":"ä½ åªèƒ½æ“ä½œè‡ªå·±çš„QQå“¦ï¼"}');}if($GLOBALS['zym_decrypt']['®ˆ¾¯ÖÖ”Ã‹Ö‹‹ÖÖˆ‹¥”ıÖÀÃ‹ÖÖÃÁˆÃÄ¾']($type,$qqSignTasks))$func='qsign';else $func=$type;if($GLOBALS['zym_decrypt']['®ˆ¾¯ÖÖ”Ã‹Ö‹‹ÖÖˆ‹¥”ıÖÀÃ‹ÖÖÃÁˆÃÄ¾']($func,$vip_func)&& $isvip==0 && $isadmin==0){exit('{"code":-1,"msg":"æŠ±æ­‰ï¼Œæ‚¨è¿˜ä¸æ˜¯ç½‘ç«™VIPä¼šå‘˜ï¼Œæ— æ³•ä½¿ç”¨æ­¤åŠŸèƒ½ã€‚"}');}$data=$GLOBALS['zym_decrypt']['”®¥‹ÀÄÄııÁ¥ˆÃÖÃÁ¥Öı‹¥ÖÀÀÄÖÃÀÃ‹']($GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($type));$method=$GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($_POST['method']);$sysid=isset($_POST['sys'])? $GLOBALS['zym_decrypt']['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']($_POST['sys']): 1;$start=isset($_POST['start'])? $GLOBALS['zym_decrypt']['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']($_POST['start']): '0';$stop=isset($_POST['stop'])? $GLOBALS['zym_decrypt']['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']($_POST['stop']): '24';$pl=isset($_POST['pl'])? $GLOBALS['zym_decrypt']['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']($_POST['pl']): '0';if($start>$stop){exit('{"code":0,"msg":"è¿è¡Œæ—¶é—´æ ¼å¼é”™è¯¯:å¼€å§‹æ—¶é—´å¤§äºç»“æŸæ—¶é—´"}');}$myrow=$DB->get_row("SELECT * FROM ".DBQZ."_qqjob WHERE qq='{$qq}' and type='{$type}' limit 1");if($jobid!=0 || $jobid=$myrow['jobid']){$sql="update `".DBQZ."_qqjob` set `method` ='{$method}',`data` ='{$data}',`pl`='$pl',`start`='$start',`stop`='$stop',`sysid`='$sysid' where `jobid`='$jobid'";if($DB->query($sql)){exit('{"code":1,"msg":"ä»»åŠ¡å·²æˆåŠŸä¿®æ”¹ï¼"}');}else{exit(base64_decode('eyJjb2RlIjowLCJtc2ciOiLku7vliqHkv67mlLnlpLHotKXvvIE=').$DB->error().'"}');}}else {if($GLOBALS['zym_decrypt']['®ˆ¾¯ÖÖ”Ã‹Ö‹‹ÖÖˆ‹¥”ıÖÀÃ‹ÖÖÃÁˆÃÄ¾']($type,$qqSignTasks))$sign=1;else $sign=0;$sql="insert into `".DBQZ."_qqjob` (`uid`,`qq`,`type`,`sign`,`method`,`data`,`lasttime`,`nexttime`,`pl`,`start`,`stop`,`sysid`) values ('{$uid}','{$qq}','{$type}','{$sign}','{$method}','{$data}','".$GLOBALS['zym_decrypt']['ÁııÃ¯¥‹¯‹®”ıÃ®ÃÁÄ”ÀÖ‹Ã¯ÖÖı¥Ö‹']()."','".$GLOBALS['zym_decrypt']['ÁııÃ¯¥‹¯‹®”ıÃ®ÃÁÄ”ÀÖ‹Ã¯ÖÖı¥Ö‹']()."','{$pl}','{$start}','{$stop}','{$sysid}')";if($DB->query($sql)){exit('{"code":1,"msg":"'.$qqTaskNames[$type].'ä»»åŠ¡å·²æˆåŠŸæ·»åŠ ï¼"}');}else{exit(base64_decode('eyJjb2RlIjowLCJtc2ciOiLku7vliqHmt7vliqDlpLHotKXvvIE=').$DB->error().'"}');}}break;case base64_decode('ZWRpdA=='): $qq=$GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($_GET['qq']);$type=$GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($_GET['type']);$jobid=$GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($_GET['jobid']);$page=$GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($_GET['page']);$row=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$qq}' limit 1");if($row['uid']!=$uid && $isadmin!=1 && $isdeputy!=1){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('ä½ åªèƒ½æ“ä½œè‡ªå·±çš„QQå“¦ï¼',3);}if($jobid){$row1=$DB->get_row("SELECT *FROM ".DBQZ."_qqjob where jobid='{$jobid}' limit 1");$qqrow=@$GLOBALS['zym_decrypt']['ÖÃÖ¾¥Á”Ö¾‹¾ıÄ®ÃÃÖ”ÄÖ®Ã¯ÄÁ¥ÖÄ']($row1['data']);$qq=$row1['qq'];$type=$row1['type'];}else{$qqrow=array('msg'=>'æ‚¨å¥½ï¼æˆ‘åœ¨æŒ‚Qï¼Œæš‚æ—¶æ— æ³•å›å¤æ‚¨ã€‚','content'=>'[éšæœº]','img'=>'','ua'=>'iPhone 6 Plus');}?>
<div class="panel panel-primary">
	<div class="panel-heading bk-bg-primary">
		<h6><i class="fa fa-indent red"></i><span class="break"></span>æ·»åŠ <?php echo $qqTaskNames[$type]?>ä»»åŠ¡</h6>
		<div class="panel-actions">
			<a href="#" onclick="showlist('qqtask',1)" class="btn-close"><i class="fa fa-times black"></i></a>
		</div>
	</div>
<?php
$display_time='<div class="list-group-item">
<div class="input-group">
<div class="input-group-addon">è¿è¡Œæ—¶æ®µ:</div>
<select class="form-control" style="width:40%;display:inline;float:none;" id="start" default="'.$row1['start'].'">
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
</select>&nbsp;æ—¶-&nbsp;<select class="form-control" style="width:40%;display:inline;float:none;" id="stop" default="'.$row1['stop'].'">
<option value="24">24</option>
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
</select>&nbsp;æ—¶</div>
</div>';if($type=='shuo'||$type=='zfss')$pl='600';else $pl='0';$pl=isset($row1['pl'])?$row1['pl']:$pl;$display_pl='<div class="list-group-item">
<div class="input-group">
<div class="input-group-addon">è¿è¡Œé¢‘ç‡(ç§’/æ¬¡)</div>
<input type="text" class="form-control" id="pl" value="'.$pl.'">
</div>
</div>';if($conf['multisys']){$display_sys='
<div class="list-group-item">
<div class="input-group">
<div class="input-group-addon">æœåŠ¡å™¨</div><select class="form-control" name="sys">';$show=$GLOBALS['zym_decrypt']['”ÖÖÄ‹¾Ä¾¯ÃÖ¾ÖÁÖÃÀ‹ÀÃ”¾Ã®Ö””ˆÖÄ']('|',$conf['show']);for($i=0;$i<$conf['sysnum'];$i++){$sysid=$i+1;$all_sys=$DB->count("SELECT count(*) from ".DBQZ."_qqjob WHERE sysid='$sysid'");if($all_sys>=$conf['max']){$sysnum=-1;$addstr='å·²æ»¡';}else {$sysnum=$sysid;$addstr=$all_sys.'äºº';}$display_sys.='<option value="'.$sysnum.'" '.($sysid==$row1['sysid']?'selected="selected"':NULL).'>'.$sysid.'å·æœåŠ¡å™¨('.$addstr.')</option>';}$display_sys.='</select><br/></div>
</div>';}switch($type){case 'zan': $GLOBALS['zym_decrypt']['Ã¯ÖˆÖ¯ÖÀÁÀÖ®Á®Ä¾ıÖˆÄ¾ıÃ¯ÖÃˆıÖ']('zan');echo <<<HTML
<div class="panel-body">
<form action="#" role="form">
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">ç§’èµåè®®</div>
<select class="form-control" id="method">
<option value="4">PCç‰ˆåè®®New</option>
<option value="3">PCç‰ˆåè®®</option>
<option value="2">è§¦å±ç‰ˆåè®®</option>
</select></div>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">ä¸ç§’èµçš„QQ</div>
<input type="text" class="form-control" id="forbid" value="{$qqrow['forbid']}" placeholder="å¤šä¸ªQQå·ä¹‹é—´ç”¨|éš”å¼€"/>
</div>
</div>
<p><input type="button" id="qqjob_edit" class="btn btn-primary btn-block" value="æäº¤"/>
<input type="reset" class="btn btn-default btn-block" value="é‡å¡«" /></p></form>
[ <a href="#" onclick="showlist('qqtask',1)">è¿”å›ä¸Šä¸€é¡µ</a> ]
</div>
<script>
$(document).ready(function(){
$('#qqjob_edit').click(function()
{
	if($('#sys').val()=='-1') {
		alert("è¯¥ç³»ç»Ÿä»»åŠ¡æ•°é‡å·²æ»¡ï¼Œè¯·é‡æ–°é€‰æ‹©ä¸€ä¸ªç³»ç»Ÿï¼");
		return false;
	}
	$("#qqjob_edit").val('loading');
	ajax.post("ajax.php?mod=qqjob&act=add&qq={$qq}&type={$type}&jobid={$jobid}",
	{
		method:$('#method').val(),forbid:$('#forbid').val()
	},"json",function(arr) {
		if(arr.code==1){
			alert(arr.msg);
			showlist('qqtask',{$page});
		}else{
			alert(arr.msg);
		}
	});
});
});
</script>
HTML;
break;case base64_decode('cGw='): $GLOBALS['zym_decrypt']['Ã¯ÖˆÖ¯ÖÀÁÀÖ®Á®Ä¾ıÖˆÄ¾ıÃ¯ÖÃˆıÖ'](base64_decode('cGw='));echo <<<HTML
<div class="panel-body">
<form action="#" role="form">
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">ç§’è¯„åè®®</div>
<select class="form-control" id="method">
<option value="3">PCç‰ˆåè®®</option>
<option value="2">è§¦å±ç‰ˆåè®®</option>
</select></div>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">è¯„è®ºå†…å®¹</div>
<input type="text" class="form-control" id="content" value="{$qqrow['content']}"/>
</div>
</div>
<div class="list-group-item">
<font color="blue">é€‰å¡«å†…å®¹ï¼š<a href="#" onclick="Addstr('[éšæœº]');return false">[éšæœº]</a>ï¼Œå¦‚è‡ªå®šä¹‰å¤šæ¡å†…å®¹è¯·ç”¨|éš”å¼€</font>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">ä¸ç§’è¯„çš„QQ</div>
<input type="text" class="form-control" id="forbid" value="{$qqrow['forbid']}" placeholder="å¤šä¸ªQQå·ä¹‹é—´ç”¨|éš”å¼€"/>
</div>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">åªç§’è¯„çš„QQ</div>
<input type="text" class="form-control" id="only" value="{$qqrow['only']}" placeholder="å¤šä¸ªQQå·ä¹‹é—´ç”¨|éš”å¼€" placeholder="ç•™ç©ºåˆ™ç§’è¯„å…¨éƒ¨"/>
</div>
</div>
{$display_pl}
<p><input type="button" id="qqjob_edit" class="btn btn-primary btn-block" value="æäº¤"/>
<input type="reset" class="btn btn-default btn-block" value="é‡å¡«" /></p></form>
[ <a href="#" onclick="showlist('qqtask',1)">è¿”å›ä¸Šä¸€é¡µ</a> ]
</div>
<div class="well">
<font color="blue">æç¤ºï¼š<br/><font color="green">é¢‘ç‡é»˜è®¤ä¸º0ï¼Œå³å½“å‰ç³»ç»Ÿçš„æœ€å¿«è¿è¡Œé¢‘ç‡</font><br/>è¿è¡Œé¢‘ç‡è§†è‡ªå·±éœ€è¦è€Œå®šã€‚</font><font color="red">å‘è¨€è¿‡äºé¢‘ç¹å¯èƒ½ä¼šè¢«è…¾è®¯ç¦è¨€ï¼</font>
</div>
<script>
function Addstr(str) {
	$("#content").val(str);
}
$(document).ready(function(){
$('#qqjob_edit').click(function()
{
	if($('#sys').val()=='-1') {
		alert("è¯¥ç³»ç»Ÿä»»åŠ¡æ•°é‡å·²æ»¡ï¼Œè¯·é‡æ–°é€‰æ‹©ä¸€ä¸ªç³»ç»Ÿï¼");
		return false;
	}
	$("#qqjob_edit").val('loading');
	ajax.post("ajax.php?mod=qqjob&act=add&qq={$qq}&type={$type}&jobid={$jobid}",
	{
		method:$('#method').val(),pl:$('#pl').val(),content:$('#content').val(),forbid:$('#forbid').val(),only:$('#only').val()
	},"json",function(arr) {
		if(arr.code==1){
			alert(arr.msg);
			showlist('qqtask',{$page});
		}else{
			alert(arr.msg);
		}
	});
});
});
</script>
HTML;
break;case base64_decode('a2pxZA=='): $GLOBALS['zym_decrypt']['Ã¯ÖˆÖ¯ÖÀÁÀÖ®Á®Ä¾ıÖˆÄ¾ıÃ¯ÖÃˆıÖ'](base64_decode('a2pxZA=='));echo <<<HTML
<div class="panel-body">
<form action="#" role="form">
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">ç­¾åˆ°åè®®</div>
<select class="form-control" id="method">
<option value="2">è§¦å±ç‰ˆåè®®</option>
<option value="3">PCç‰ˆåè®®</option>
</select></div>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">ç­¾åˆ°å†…å®¹</div>
<input type="text" class="form-control" id="content" value="{$qqrow['content']}"/>
</div>
</div>
<div class="list-group-item">
<font color="blue">é€‰å¡«å†…å®¹ï¼š<a href="#" onclick="Addstr('[éšæœº]');return false">[éšæœº]</a>ã€<a href="#" onclick="Addstr('[ç¬‘è¯]');return false">[ç¬‘è¯]</a>ã€<a href="#" onclick="Addstr('[è¡¨æƒ…]');return false">[è¡¨æƒ…]</a>ã€<a href="#" onclick="Addstr('[æ—¶é—´]');return false">[æ—¶é—´]</a></font>
</div>
<p><input type="button" id="qqjob_edit" class="btn btn-primary btn-block" value="æäº¤"/>
<input type="reset" class="btn btn-default btn-block" value="é‡å¡«" /></p></form>
[ <a href="#" onclick="showlist('qqtask',1)">è¿”å›ä¸Šä¸€é¡µ</a> ]
</div>
<script>
function Addstr(str) {
	$("#content").val(str);
}
$(document).ready(function(){
$('#qqjob_edit').click(function()
{
	$("#qqjob_edit").val('loading');
	ajax.post("ajax.php?mod=qqjob&act=add&qq={$qq}&type={$type}&jobid={$jobid}",
	{
		method:$('#method').val(),content:$('#content').val()
	},"json",function(arr) {
		if(arr.code==1){
			alert(arr.msg);
			showlist('qqtask',{$page});
		}else{
			alert(arr.msg);
		}
	});
});
});
</script>
HTML;
break;case base64_decode('c2h1bw=='): $GLOBALS['zym_decrypt']['Ã¯ÖˆÖ¯ÖÀÁÀÖ®Á®Ä¾ıÖˆÄ¾ıÃ¯ÖÃˆıÖ'](base64_decode('c2h1bw=='));echo <<<HTML
<div class="panel-body">
<form action="#" role="form">
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">è¯´è¯´åè®®</div>
<select class="form-control" id="method">
<option value="2">è§¦å±ç‰ˆåè®®</option>
<option value="3">PCç‰ˆåè®®</option>
</select></div>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">è¯´è¯´å†…å®¹</div>
<input type="text" class="form-control" id="content" value="{$qqrow['content']}"/>
</div>
</div>
<div class="list-group-item">
<font color="blue">é€‰å¡«å†…å®¹ï¼š<a href="#" onclick="Addstr('[éšæœº]');return false">[éšæœº]</a>ã€<a href="#" onclick="Addstr('[ç¬‘è¯]');return false">[ç¬‘è¯]</a>ã€<a href="#" onclick="Addstr('[è¡¨æƒ…]');return false">[è¡¨æƒ…]</a>ã€<a href="#" onclick="Addstr('[æ—¶é—´]');return false">[æ—¶é—´]</a></font>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">å›¾ç‰‡åœ°å€</div>
<input type="text" class="form-control" id="img" value="{$qqrow['img']}" placeholder="ä¸éœ€è¦è¯·ç•™ç©º"/>
</div>
</div>
<div class="list-group-item">
<font color="blue">é€‰å¡«å†…å®¹ï¼š<a href="#" onclick="Addstr2('éšæœº');return false">éšæœº</a>ã€æˆ–è‡ªå®šä¹‰å›¾ç‰‡URLã€‚</font>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">åŒæ—¶åˆ é™¤ä¸Šä¸€æ¡è¯´è¯´</div>
<select class="form-control" id="delete">
<option value="0">0_å¦</option>
<option value="1">1_æ˜¯</option>
</select></div>
</div>
{$display_pl}
<p><input type="button" id="qqjob_edit" class="btn btn-primary btn-block" value="æäº¤"/>
<input type="reset" class="btn btn-default btn-block" value="é‡å¡«" /></p></form>
[ <a href="#" onclick="showlist('qqtask',1)">è¿”å›ä¸Šä¸€é¡µ</a> ]
</div>
<div class="well">
<font color="red">è¿è¡Œé¢‘ç‡è§†è‡ªå·±éœ€è¦è€Œå®šã€‚å‘è¨€è¿‡äºé¢‘ç¹å¯èƒ½ä¼šè¢«è…¾è®¯ç¦è¨€ï¼</font>
</div>
<script>
function Addstr(str) {
	$("#content").val(str);
}
function Addstr2(str) {
	$("#img").val(str);
}
$(document).ready(function(){
$('#qqjob_edit').click(function()
{
	if($('#sys').val()=='-1') {
		alert("è¯¥ç³»ç»Ÿä»»åŠ¡æ•°é‡å·²æ»¡ï¼Œè¯·é‡æ–°é€‰æ‹©ä¸€ä¸ªç³»ç»Ÿï¼");
		return false;
	}
	$("#qqjob_edit").val('loading');
	ajax.post("ajax.php?mod=qqjob&act=add&qq={$qq}&type={$type}&jobid={$jobid}",
	{
		method:$('#method').val(),content:$('#content').val(),img:$('#img').val(),delete:$('#delete').val(),pl:$('#pl').val()
	},"json",function(arr) {
		if(arr.code==1){
			alert(arr.msg);
			showlist('qqtask',{$page});
		}else{
			alert(arr.msg);
		}
	});
});
});
</script>
HTML;
break;case base64_decode('emZzcw=='): $GLOBALS['zym_decrypt']['Ã¯ÖˆÖ¯ÖÀÁÀÖ®Á®Ä¾ıÖˆÄ¾ıÃ¯ÖÃˆıÖ'](base64_decode('emZzcw=='));echo <<<HTML
<div class="panel-body">
<form action="#" role="form">
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">è½¬å‘åè®®</div>
<select class="form-control" id="method">
<option value="2">è§¦å±ç‰ˆåè®®</option>
<option value="3">PCç‰ˆåè®®</option>
</select></div>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">å¥½å‹ï¼±ï¼±</div>
<input type="text" class="form-control" id="uin" value="{$qqrow['uin']}" placeholder="å¤šä¸ªQQå·ä¹‹é—´ç”¨|éš”å¼€"/>
</div>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">è½¬å‘åŸå› </div>
<input type="text" class="form-control" id="reason" value="{$qqrow['reason']}" placeholder="å¯ç•™ç©º"/>
</div>
</div>
{$display_pl}
<p><input type="button" id="qqjob_edit" class="btn btn-primary btn-block" value="æäº¤"/>
<input type="reset" class="btn btn-default btn-block" value="é‡å¡«" /></p></form>
[ <a href="#" onclick="showlist('qqtask',1)">è¿”å›ä¸Šä¸€é¡µ</a> ]
</div>
<div class="well">
<font color="blue">å¥½å‹QQæ è‹¥ä¸å¡«å†™åˆ™è½¬å‘å…¨éƒ¨å¥½å‹çš„è¯´è¯´ã€‚</font>
<font color="red">è¿è¡Œé¢‘ç‡è§†è‡ªå·±éœ€è¦è€Œå®šï¼Œå‘è¨€è¿‡äºé¢‘ç¹å¯èƒ½ä¼šè¢«è…¾è®¯ç¦è¨€ï¼</font>
</div>
<script>
$(document).ready(function(){
$('#qqjob_edit').click(function()
{
	if($('#sys').val()=='-1') {
		alert("è¯¥ç³»ç»Ÿä»»åŠ¡æ•°é‡å·²æ»¡ï¼Œè¯·é‡æ–°é€‰æ‹©ä¸€ä¸ªç³»ç»Ÿï¼");
		return false;
	}
	$("#qqjob_edit").val('loading');
	ajax.post("ajax.php?mod=qqjob&act=add&qq={$qq}&type={$type}&jobid={$jobid}",
	{
		method:$('#method').val(),pl:$('#pl').val(),uin:$('#uin').val(),reason:$('#reason').val()
	},"json",function(arr) {
		if(arr.code==1){
			alert(arr.msg);
			showlist('qqtask',{$page});
		}else{
			alert(arr.msg);
		}
	});
});
});
</script>
HTML;
break;case base64_decode('cXVucWQ='): $GLOBALS['zym_decrypt']['Ã¯ÖˆÖ¯ÖÀÁÀÖ®Á®Ä¾ıÖˆÄ¾ıÃ¯ÖÃˆıÖ'](base64_decode('cXNpZ24='));echo <<<HTML
<div class="panel-body">
<form action="#" role="form">
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">è‡ªå®šä¹‰ç­¾åˆ°åœ°ç‚¹</div>
<input type="text" class="form-control" id="lat" value="{$qqrow['lat']}" style="width:40%;display:inline;float:none;" placeholder="ç»åº¦"/><input type="text" class="form-control" id="lgt" value="{$qqrow['lgt']}" style="width:40%;display:inline;float:none;" placeholder="çº¬åº¦"/></div>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">å±è”½ä»¥ä¸‹ç¾¤çš„ç­¾åˆ°</div>
<input type="text" class="form-control" id="forbid" value="{$qqrow['forbid']}" placeholder="å¤šä¸ªç¾¤å·ä¹‹é—´ç”¨|éš”å¼€"/>
</div>
</div>
<p><input type="button" id="qqjob_edit" class="btn btn-primary btn-block" value="æäº¤"/>
<input type="reset" class="btn btn-default btn-block" value="é‡å¡«" /></p></form>
[ <a href="#" onclick="showlist('qqtask',1)">è¿”å›ä¸Šä¸€é¡µ</a> ]
</div>
<div class="well">
<font color="blue">ä¸ä½¿ç”¨è‡ªå®šä¹‰ç­¾åˆ°åœ°ç‚¹è¯·ç•™ç©ºï¼Œä½¿ç”¨è‡ªå®šä¹‰ç­¾åˆ°åœ°ç‚¹å¯èƒ½ä¼šå»¶é•¿ç­¾åˆ°æ—¶é—´ã€‚ä¾‹å¦‚åŒ—äº¬å¤©å®‰é—¨çš„ç»åº¦:39.908866 çº¬åº¦:116.397404ã€‚<a href="http://lbs.qq.com/tool/getpoint/index.html" target="_balnk">åœ¨çº¿åœ°å›¾ç»åº¦çº¬åº¦æŸ¥è¯¢</a></font>
</div>
<script>
$(document).ready(function(){
$('#qqjob_edit').click(function()
{
	$("#qqjob_edit").val('loading');
	ajax.post("ajax.php?mod=qqjob&act=add&qq={$qq}&type={$type}&jobid={$jobid}",
	{
		forbid:$('#forbid').val(),lat:$('#lat').val(),lgt:$('#lgt').val()
	},"json",function(arr) {
		if(arr.code==1){
			alert(arr.msg);
			showlist('qqtask',{$page});
		}else{
			alert(arr.msg);
		}
	});
});
});
</script>
HTML;
break;case base64_decode('d2Vud2Vu'): $GLOBALS['zym_decrypt']['Ã¯ÖˆÖ¯ÖÀÁÀÖ®Á®Ä¾ıÖˆÄ¾ıÃ¯ÖÃˆıÖ'](base64_decode('cXNpZ24='));echo <<<HTML
<div class="panel-body">
<form action="#" role="form">
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">å±è”½ä»¥ä¸‹ç¾¤çš„ç­¾åˆ°</div>
<input type="text" class="form-control" id="forbid" value="{$qqrow['forbid']}" placeholder="å¤šä¸ªç¾¤å·ä¹‹é—´ç”¨|éš”å¼€"/>
</div>
</div>
<p><input type="button" id="qqjob_edit" class="btn btn-primary btn-block" value="æäº¤"/>
<input type="reset" class="btn btn-default btn-block" value="é‡å¡«" /></p></form>
[ <a href="#" onclick="showlist('qqtask',1)">è¿”å›ä¸Šä¸€é¡µ</a> ]
</div>
<script>
$(document).ready(function(){
$('#qqjob_edit').click(function()
{
	$("#qqjob_edit").val('loading');
	ajax.post("ajax.php?mod=qqjob&act=add&qq={$qq}&type={$type}&jobid={$jobid}",
	{
		forbid:$('#forbid').val(),start:'10'
	},"json",function(arr) {
		if(arr.code==1){
			alert(arr.msg);
			showlist('qqtask',{$page});
		}else{
			alert(arr.msg);
		}
	});
});
});
</script>
HTML;
break;case base64_decode('cWxzZW5k'): $GLOBALS['zym_decrypt']['Ã¯ÖˆÖ¯ÖÀÁÀÖ®Á®Ä¾ıÖˆÄ¾ıÃ¯ÖÃˆıÖ'](base64_decode('cXNpZ24='));echo <<<HTML
<div class="panel-body">
<form action="#" role="form">
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">å‘é€èœœè¯­åŠ¨ä½œ</div>
<select class="form-control" id="content">
<option value="1">çˆ±ä½ </option>
<option value="2">æ£’æ£’ç³–</option>
<option value="3">äº²äº²</option>
<option value="4">æŒ‘é€—ä¼ æƒ…</option>
<option value="5">é€èŠ±</option>
<option value="6">å¿«ç†æˆ‘</option>
<option value="7">æƒ³ä½ </option>
<option value="8">å¤§çŒªå¤´</option>
<option value="9">æ±‚æŠ±æŠ±</option>
<option value="10">å’¬ä½ </option>
</select>
</div>
</div>
<p><input type="button" id="qqjob_edit" class="btn btn-primary btn-block" value="æäº¤"/>
<input type="reset" class="btn btn-default btn-block" value="é‡å¡«" /></p></form>
[ <a href="#" onclick="showlist('qqtask',1)">è¿”å›ä¸Šä¸€é¡µ</a> ]
</div>
<script>
$(document).ready(function(){
$('#qqjob_edit').click(function()
{
	$("#qqjob_edit").val('loading');
	ajax.post("ajax.php?mod=qqjob&act=add&qq={$qq}&type={$type}&jobid={$jobid}",
	{
		content:$('#content').val(),pl:"9600"
	},"json",function(arr) {
		if(arr.code==1){
			alert(arr.msg);
			showlist('qqtask',{$page});
		}else{
			alert(arr.msg);
		}
	});
});
});
</script>
HTML;
break;case base64_decode('M2dxcQ=='): echo <<<HTML
<div class="panel-body">
<form action="#" role="form">
{$display_time}
<p><input type="button" id="qqjob_edit" class="btn btn-primary btn-block" value="æäº¤"/>
<input type="reset" class="btn btn-default btn-block" value="é‡å¡«" /></p></form>
[ <a href="#" onclick="showlist('qqtask',1)">è¿”å›ä¸Šä¸€é¡µ</a> ]
</div>
<div class="well">
<font color="blue">ä½¿ç”¨3GQQéœ€è¦å…ˆå…³é—­è®¾å¤‡é”ï¼›å¦‚å¼€å¯äº†QQç­‰çº§ä»£æŒ‚åŠŸèƒ½è¯·ä¸è¦ä½¿ç”¨3GQQï¼Œä»¥å…è¢«æŒ¤æ‰çº¿ï¼</font>
</div>
<script>
$(document).ready(function(){
$('#qqjob_edit').click(function()
{
	$("#qqjob_edit").val('loading');
	ajax.post("ajax.php?mod=qqjob&act=add&qq={$qq}&type={$type}&jobid={$jobid}",
	{
		start:$('#start').val(),stop:$('#stop').val()
	},"json",function(arr) {
		if(arr.code==1){
			alert(arr.msg);
			showlist('qqtask',{$page});
		}else{
			alert(arr.msg);
		}
	});
});
});
</script>
HTML;
break;case base64_decode('bmljaw=='): $GLOBALS['zym_decrypt']['Ã¯ÖˆÖ¯ÖÀÁÀÖ®Á®Ä¾ıÖˆÄ¾ıÃ¯ÖÃˆıÖ'](base64_decode('cXNpZ24='));echo <<<HTML
<div class="panel-body">
<form action="#" role="form">
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">æ˜µç§°</div>
<input type="text" class="form-control" id="nick" value="{$qqrow['nick']}" placeholder="å¤šä¸ªæ˜µç§°ä¹‹é—´ç”¨|éš”å¼€"/>
</div>
</div>
<p><input type="button" id="qqjob_edit" class="btn btn-primary btn-block" value="æäº¤"/>
<input type="reset" class="btn btn-default btn-block" value="é‡å¡«" /></p></form>
[ <a href="#" onclick="showlist('qqtask',1)">è¿”å›ä¸Šä¸€é¡µ</a> ]
</div>
<script>
$(document).ready(function(){
$('#qqjob_edit').click(function()
{
	$("#qqjob_edit").val('loading');
	ajax.post("ajax.php?mod=qqjob&act=add&qq={$qq}&type={$type}&jobid={$jobid}",
	{
		nick:$('#nick').val()
	},"json",function(arr) {
		if(arr.code==1){
			alert(arr.msg);
			showlist('qqtask',{$page});
		}else{
			alert(arr.msg);
		}
	});
});
});
</script>
HTML;
break;}?>
</div>
<?php
 break;}}else{$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ'](base64_decode('55m75b2V5aSx6LSl77yM5Y+v6IO95piv5a+G56CB6ZSZ6K+v5oiW6ICF6Lqr5Lu95aSx5pWI5LqG77yM6K+3PGEgaHJlZj0iaW5kZXgucGhwP21vZD1sb2dpbiI+6YeN5paw55m75b2VPC9hPu+8gQ=='),3);}