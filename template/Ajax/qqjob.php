<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['���������ċ����֮�������������È']=base64_decode('ZGFkZHNsYXNoZXM=');$zym_decrypt['�����֔Ë֋��ֈ������Ë�����Îľ']=base64_decode('aW5fYXJyYXk=');$zym_decrypt['������������������������������Ë']=base64_decode('cXFqb2JfZW5jb2Rl');$zym_decrypt['���֯֎����������ֈ�Ď����������']=base64_decode('aW50dmFs');$zym_decrypt['����ï�������î��Ď���֋ï����֋']=base64_decode('dGltZQ==');$zym_decrypt['����֯È���Ë���å��֋��þ������']=base64_decode('c2hvd21zZw==');$zym_decrypt['�Î־���־���Į��֔�Ď֮�ï�����']=base64_decode('dW5zZXJpYWxpemU=');$zym_decrypt['���ċ�ľ��־��������Ô�î֔���Ď']=base64_decode('ZXhwbG9kZQ==');$zym_decrypt['ïֈ֯����֮��ľ�ֈ�ľ�Î���È��']=base64_decode('dmlwZnVuY19jaGVjaw=='); ?>
<?php
if(!$GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$act=isset($_GET['act'])?$_GET['act']:null;if($islogin==1){switch($act){case 'add': $qq=$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_GET['qq']);$jobid=$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_GET['jobid']);$type=$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_GET['type']);if(!$qq || !$type){exit('{"code":-1,"msg":"参数不能为空！"}');}if(OPEN_OTHE==0 && ($type=='liuyan' || $type=='gift'))exit('{"code":-1,"msg":"当前站点未开启此功能！"}');$row=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$qq}' limit 1");if($row['uid']!=$uid && $isadmin!=1 && $isdeputy!=1){exit('{"code":-1,"msg":"你只能操作自己的QQ哦！"}');}if($GLOBALS['zym_decrypt']['�����֔Ë֋��ֈ������Ë�����Îľ']($type,$qqSignTasks))$func='qsign';else $func=$type;if($GLOBALS['zym_decrypt']['�����֔Ë֋��ֈ������Ë�����Îľ']($func,$vip_func)&& $isvip==0 && $isadmin==0){exit('{"code":-1,"msg":"抱歉，您还不是网站VIP会员，无法使用此功能。"}');}$data=$GLOBALS['zym_decrypt']['������������������������������Ë']($GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($type));$method=$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_POST['method']);$sysid=isset($_POST['sys'])? $GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['sys']): 1;$start=isset($_POST['start'])? $GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['start']): '0';$stop=isset($_POST['stop'])? $GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['stop']): '24';$pl=isset($_POST['pl'])? $GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['pl']): '0';if($start>$stop){exit('{"code":0,"msg":"运行时间格式错误:开始时间大于结束时间"}');}$myrow=$DB->get_row("SELECT * FROM ".DBQZ."_qqjob WHERE qq='{$qq}' and type='{$type}' limit 1");if($jobid!=0 || $jobid=$myrow['jobid']){$sql="update `".DBQZ."_qqjob` set `method` ='{$method}',`data` ='{$data}',`pl`='$pl',`start`='$start',`stop`='$stop',`sysid`='$sysid' where `jobid`='$jobid'";if($DB->query($sql)){exit('{"code":1,"msg":"任务已成功修改！"}');}else{exit(base64_decode('eyJjb2RlIjowLCJtc2ciOiLku7vliqHkv67mlLnlpLHotKXvvIE=').$DB->error().'"}');}}else {if($GLOBALS['zym_decrypt']['�����֔Ë֋��ֈ������Ë�����Îľ']($type,$qqSignTasks))$sign=1;else $sign=0;$sql="insert into `".DBQZ."_qqjob` (`uid`,`qq`,`type`,`sign`,`method`,`data`,`lasttime`,`nexttime`,`pl`,`start`,`stop`,`sysid`) values ('{$uid}','{$qq}','{$type}','{$sign}','{$method}','{$data}','".$GLOBALS['zym_decrypt']['����ï�������î��Ď���֋ï����֋']()."','".$GLOBALS['zym_decrypt']['����ï�������î��Ď���֋ï����֋']()."','{$pl}','{$start}','{$stop}','{$sysid}')";if($DB->query($sql)){exit('{"code":1,"msg":"'.$qqTaskNames[$type].'任务已成功添加！"}');}else{exit(base64_decode('eyJjb2RlIjowLCJtc2ciOiLku7vliqHmt7vliqDlpLHotKXvvIE=').$DB->error().'"}');}}break;case base64_decode('ZWRpdA=='): $qq=$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_GET['qq']);$type=$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_GET['type']);$jobid=$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_GET['jobid']);$page=$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_GET['page']);$row=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$qq}' limit 1");if($row['uid']!=$uid && $isadmin!=1 && $isdeputy!=1){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('你只能操作自己的QQ哦！',3);}if($jobid){$row1=$DB->get_row("SELECT *FROM ".DBQZ."_qqjob where jobid='{$jobid}' limit 1");$qqrow=@$GLOBALS['zym_decrypt']['�Î־���־���Į��֔�Ď֮�ï�����']($row1['data']);$qq=$row1['qq'];$type=$row1['type'];}else{$qqrow=array('msg'=>'您好！我在挂Q，暂时无法回复您。','content'=>'[随机]','img'=>'','ua'=>'iPhone 6 Plus');}?>
<div class="panel panel-primary">
	<div class="panel-heading bk-bg-primary">
		<h6><i class="fa fa-indent red"></i><span class="break"></span>添加<?php echo $qqTaskNames[$type]?>任务</h6>
		<div class="panel-actions">
			<a href="#" onclick="showlist('qqtask',1)" class="btn-close"><i class="fa fa-times black"></i></a>
		</div>
	</div>
<?php
$display_time='<div class="list-group-item">
<div class="input-group">
<div class="input-group-addon">运行时段:</div>
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
</select>&nbsp;时-&nbsp;<select class="form-control" style="width:40%;display:inline;float:none;" id="stop" default="'.$row1['stop'].'">
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
</select>&nbsp;时</div>
</div>';if($type=='shuo'||$type=='zfss')$pl='600';else $pl='0';$pl=isset($row1['pl'])?$row1['pl']:$pl;$display_pl='<div class="list-group-item">
<div class="input-group">
<div class="input-group-addon">运行频率(秒/次)</div>
<input type="text" class="form-control" id="pl" value="'.$pl.'">
</div>
</div>';if($conf['multisys']){$display_sys='
<div class="list-group-item">
<div class="input-group">
<div class="input-group-addon">服务器</div><select class="form-control" name="sys">';$show=$GLOBALS['zym_decrypt']['���ċ�ľ��־��������Ô�î֔���Ď']('|',$conf['show']);for($i=0;$i<$conf['sysnum'];$i++){$sysid=$i+1;$all_sys=$DB->count("SELECT count(*) from ".DBQZ."_qqjob WHERE sysid='$sysid'");if($all_sys>=$conf['max']){$sysnum=-1;$addstr='已满';}else {$sysnum=$sysid;$addstr=$all_sys.'人';}$display_sys.='<option value="'.$sysnum.'" '.($sysid==$row1['sysid']?'selected="selected"':NULL).'>'.$sysid.'号服务器('.$addstr.')</option>';}$display_sys.='</select><br/></div>
</div>';}switch($type){case 'zan': $GLOBALS['zym_decrypt']['ïֈ֯����֮��ľ�ֈ�ľ�Î���È��']('zan');echo <<<HTML
<div class="panel-body">
<form action="#" role="form">
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">秒赞协议</div>
<select class="form-control" id="method">
<option value="4">PC版协议New</option>
<option value="3">PC版协议</option>
<option value="2">触屏版协议</option>
</select></div>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">不秒赞的QQ</div>
<input type="text" class="form-control" id="forbid" value="{$qqrow['forbid']}" placeholder="多个QQ号之间用|隔开"/>
</div>
</div>
<p><input type="button" id="qqjob_edit" class="btn btn-primary btn-block" value="提交"/>
<input type="reset" class="btn btn-default btn-block" value="重填" /></p></form>
[ <a href="#" onclick="showlist('qqtask',1)">返回上一页</a> ]
</div>
<script>
$(document).ready(function(){
$('#qqjob_edit').click(function()
{
	if($('#sys').val()=='-1') {
		alert("该系统任务数量已满，请重新选择一个系统！");
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
break;case base64_decode('cGw='): $GLOBALS['zym_decrypt']['ïֈ֯����֮��ľ�ֈ�ľ�Î���È��'](base64_decode('cGw='));echo <<<HTML
<div class="panel-body">
<form action="#" role="form">
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">秒评协议</div>
<select class="form-control" id="method">
<option value="3">PC版协议</option>
<option value="2">触屏版协议</option>
</select></div>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">评论内容</div>
<input type="text" class="form-control" id="content" value="{$qqrow['content']}"/>
</div>
</div>
<div class="list-group-item">
<font color="blue">选填内容：<a href="#" onclick="Addstr('[随机]');return false">[随机]</a>，如自定义多条内容请用|隔开</font>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">不秒评的QQ</div>
<input type="text" class="form-control" id="forbid" value="{$qqrow['forbid']}" placeholder="多个QQ号之间用|隔开"/>
</div>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">只秒评的QQ</div>
<input type="text" class="form-control" id="only" value="{$qqrow['only']}" placeholder="多个QQ号之间用|隔开" placeholder="留空则秒评全部"/>
</div>
</div>
{$display_pl}
<p><input type="button" id="qqjob_edit" class="btn btn-primary btn-block" value="提交"/>
<input type="reset" class="btn btn-default btn-block" value="重填" /></p></form>
[ <a href="#" onclick="showlist('qqtask',1)">返回上一页</a> ]
</div>
<div class="well">
<font color="blue">提示：<br/><font color="green">频率默认为0，即当前系统的最快运行频率</font><br/>运行频率视自己需要而定。</font><font color="red">发言过于频繁可能会被腾讯禁言！</font>
</div>
<script>
function Addstr(str) {
	$("#content").val(str);
}
$(document).ready(function(){
$('#qqjob_edit').click(function()
{
	if($('#sys').val()=='-1') {
		alert("该系统任务数量已满，请重新选择一个系统！");
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
break;case base64_decode('a2pxZA=='): $GLOBALS['zym_decrypt']['ïֈ֯����֮��ľ�ֈ�ľ�Î���È��'](base64_decode('a2pxZA=='));echo <<<HTML
<div class="panel-body">
<form action="#" role="form">
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">签到协议</div>
<select class="form-control" id="method">
<option value="2">触屏版协议</option>
<option value="3">PC版协议</option>
</select></div>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">签到内容</div>
<input type="text" class="form-control" id="content" value="{$qqrow['content']}"/>
</div>
</div>
<div class="list-group-item">
<font color="blue">选填内容：<a href="#" onclick="Addstr('[随机]');return false">[随机]</a>、<a href="#" onclick="Addstr('[笑话]');return false">[笑话]</a>、<a href="#" onclick="Addstr('[表情]');return false">[表情]</a>、<a href="#" onclick="Addstr('[时间]');return false">[时间]</a></font>
</div>
<p><input type="button" id="qqjob_edit" class="btn btn-primary btn-block" value="提交"/>
<input type="reset" class="btn btn-default btn-block" value="重填" /></p></form>
[ <a href="#" onclick="showlist('qqtask',1)">返回上一页</a> ]
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
break;case base64_decode('c2h1bw=='): $GLOBALS['zym_decrypt']['ïֈ֯����֮��ľ�ֈ�ľ�Î���È��'](base64_decode('c2h1bw=='));echo <<<HTML
<div class="panel-body">
<form action="#" role="form">
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">说说协议</div>
<select class="form-control" id="method">
<option value="2">触屏版协议</option>
<option value="3">PC版协议</option>
</select></div>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">说说内容</div>
<input type="text" class="form-control" id="content" value="{$qqrow['content']}"/>
</div>
</div>
<div class="list-group-item">
<font color="blue">选填内容：<a href="#" onclick="Addstr('[随机]');return false">[随机]</a>、<a href="#" onclick="Addstr('[笑话]');return false">[笑话]</a>、<a href="#" onclick="Addstr('[表情]');return false">[表情]</a>、<a href="#" onclick="Addstr('[时间]');return false">[时间]</a></font>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">图片地址</div>
<input type="text" class="form-control" id="img" value="{$qqrow['img']}" placeholder="不需要请留空"/>
</div>
</div>
<div class="list-group-item">
<font color="blue">选填内容：<a href="#" onclick="Addstr2('随机');return false">随机</a>、或自定义图片URL。</font>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">同时删除上一条说说</div>
<select class="form-control" id="delete">
<option value="0">0_否</option>
<option value="1">1_是</option>
</select></div>
</div>
{$display_pl}
<p><input type="button" id="qqjob_edit" class="btn btn-primary btn-block" value="提交"/>
<input type="reset" class="btn btn-default btn-block" value="重填" /></p></form>
[ <a href="#" onclick="showlist('qqtask',1)">返回上一页</a> ]
</div>
<div class="well">
<font color="red">运行频率视自己需要而定。发言过于频繁可能会被腾讯禁言！</font>
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
		alert("该系统任务数量已满，请重新选择一个系统！");
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
break;case base64_decode('emZzcw=='): $GLOBALS['zym_decrypt']['ïֈ֯����֮��ľ�ֈ�ľ�Î���È��'](base64_decode('emZzcw=='));echo <<<HTML
<div class="panel-body">
<form action="#" role="form">
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">转发协议</div>
<select class="form-control" id="method">
<option value="2">触屏版协议</option>
<option value="3">PC版协议</option>
</select></div>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">好友ＱＱ</div>
<input type="text" class="form-control" id="uin" value="{$qqrow['uin']}" placeholder="多个QQ号之间用|隔开"/>
</div>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">转发原因</div>
<input type="text" class="form-control" id="reason" value="{$qqrow['reason']}" placeholder="可留空"/>
</div>
</div>
{$display_pl}
<p><input type="button" id="qqjob_edit" class="btn btn-primary btn-block" value="提交"/>
<input type="reset" class="btn btn-default btn-block" value="重填" /></p></form>
[ <a href="#" onclick="showlist('qqtask',1)">返回上一页</a> ]
</div>
<div class="well">
<font color="blue">好友QQ栏若不填写则转发全部好友的说说。</font>
<font color="red">运行频率视自己需要而定，发言过于频繁可能会被腾讯禁言！</font>
</div>
<script>
$(document).ready(function(){
$('#qqjob_edit').click(function()
{
	if($('#sys').val()=='-1') {
		alert("该系统任务数量已满，请重新选择一个系统！");
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
break;case base64_decode('cXVucWQ='): $GLOBALS['zym_decrypt']['ïֈ֯����֮��ľ�ֈ�ľ�Î���È��'](base64_decode('cXNpZ24='));echo <<<HTML
<div class="panel-body">
<form action="#" role="form">
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">自定义签到地点</div>
<input type="text" class="form-control" id="lat" value="{$qqrow['lat']}" style="width:40%;display:inline;float:none;" placeholder="经度"/><input type="text" class="form-control" id="lgt" value="{$qqrow['lgt']}" style="width:40%;display:inline;float:none;" placeholder="纬度"/></div>
</div>
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">屏蔽以下群的签到</div>
<input type="text" class="form-control" id="forbid" value="{$qqrow['forbid']}" placeholder="多个群号之间用|隔开"/>
</div>
</div>
<p><input type="button" id="qqjob_edit" class="btn btn-primary btn-block" value="提交"/>
<input type="reset" class="btn btn-default btn-block" value="重填" /></p></form>
[ <a href="#" onclick="showlist('qqtask',1)">返回上一页</a> ]
</div>
<div class="well">
<font color="blue">不使用自定义签到地点请留空，使用自定义签到地点可能会延长签到时间。例如北京天安门的经度:39.908866 纬度:116.397404。<a href="http://lbs.qq.com/tool/getpoint/index.html" target="_balnk">在线地图经度纬度查询</a></font>
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
break;case base64_decode('d2Vud2Vu'): $GLOBALS['zym_decrypt']['ïֈ֯����֮��ľ�ֈ�ľ�Î���È��'](base64_decode('cXNpZ24='));echo <<<HTML
<div class="panel-body">
<form action="#" role="form">
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">屏蔽以下群的签到</div>
<input type="text" class="form-control" id="forbid" value="{$qqrow['forbid']}" placeholder="多个群号之间用|隔开"/>
</div>
</div>
<p><input type="button" id="qqjob_edit" class="btn btn-primary btn-block" value="提交"/>
<input type="reset" class="btn btn-default btn-block" value="重填" /></p></form>
[ <a href="#" onclick="showlist('qqtask',1)">返回上一页</a> ]
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
break;case base64_decode('cWxzZW5k'): $GLOBALS['zym_decrypt']['ïֈ֯����֮��ľ�ֈ�ľ�Î���È��'](base64_decode('cXNpZ24='));echo <<<HTML
<div class="panel-body">
<form action="#" role="form">
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">发送蜜语动作</div>
<select class="form-control" id="content">
<option value="1">爱你</option>
<option value="2">棒棒糖</option>
<option value="3">亲亲</option>
<option value="4">挑逗传情</option>
<option value="5">送花</option>
<option value="6">快理我</option>
<option value="7">想你</option>
<option value="8">大猪头</option>
<option value="9">求抱抱</option>
<option value="10">咬你</option>
</select>
</div>
</div>
<p><input type="button" id="qqjob_edit" class="btn btn-primary btn-block" value="提交"/>
<input type="reset" class="btn btn-default btn-block" value="重填" /></p></form>
[ <a href="#" onclick="showlist('qqtask',1)">返回上一页</a> ]
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
<p><input type="button" id="qqjob_edit" class="btn btn-primary btn-block" value="提交"/>
<input type="reset" class="btn btn-default btn-block" value="重填" /></p></form>
[ <a href="#" onclick="showlist('qqtask',1)">返回上一页</a> ]
</div>
<div class="well">
<font color="blue">使用3GQQ需要先关闭设备锁；如开启了QQ等级代挂功能请不要使用3GQQ，以免被挤掉线！</font>
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
break;case base64_decode('bmljaw=='): $GLOBALS['zym_decrypt']['ïֈ֯����֮��ľ�ֈ�ľ�Î���È��'](base64_decode('cXNpZ24='));echo <<<HTML
<div class="panel-body">
<form action="#" role="form">
<div class="list-group-item">
<div class="input-group"><div class="input-group-addon">昵称</div>
<input type="text" class="form-control" id="nick" value="{$qqrow['nick']}" placeholder="多个昵称之间用|隔开"/>
</div>
</div>
<p><input type="button" id="qqjob_edit" class="btn btn-primary btn-block" value="提交"/>
<input type="reset" class="btn btn-default btn-block" value="重填" /></p></form>
[ <a href="#" onclick="showlist('qqtask',1)">返回上一页</a> ]
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
 break;}}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('55m75b2V5aSx6LSl77yM5Y+v6IO95piv5a+G56CB6ZSZ6K+v5oiW6ICF6Lqr5Lu95aSx5pWI5LqG77yM6K+3PGEgaHJlZj0iaW5kZXgucGhwP21vZD1sb2dpbiI+6YeN5paw55m75b2VPC9hPu+8gQ=='),3);}