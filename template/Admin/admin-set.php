<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['��ċ��þ��È�������������֯���å']=base64_decode('aHRtbHNwZWNpYWxjaGFycw==');$zym_decrypt['����֯È���Ë���å��֋��þ������']=base64_decode('c2hvd21zZw==');$zym_decrypt['��î��������������������������î']=base64_decode('c2F2ZVNldHRpbmc=');$zym_decrypt['�������Į�����Ôֈ�������å���֥']=base64_decode('aW5pX2dldA==');$zym_decrypt['���������þ�֎�֎��ĥ֔���������']=base64_decode('c2VuZF9tYWls');$zym_decrypt['���֯֎����������ֈ�Ď����������']=base64_decode('aW50dmFs');$zym_decrypt['�����Ĉ�־���Ĉ�֎���֥��ľ��Ď�']=base64_decode('aW1wbG9kZQ==');$zym_decrypt['��þ�į���������È�֔È�����ï��']=base64_decode('ZmxvYXR2YWw=');$zym_decrypt['���ċ�ľ��־��������Ô�î֔���Ď']=base64_decode('ZXhwbG9kZQ==');$zym_decrypt['�����֔Ë֋��ֈ������Ë�����Îľ']=base64_decode('aW5fYXJyYXk=');$zym_decrypt['��ľ�֎��Ô����֯�����־þ�Î�ĥ']=base64_decode('dmlwZnVuY19zZWxlY3Q=');$zym_decrypt['����ï�������î��Ď���֋ï����֋']=base64_decode('dGltZQ==');$zym_decrypt['�����֮�į���������������þ�Ĕ��']=base64_decode('ZGF0ZQ==');$zym_decrypt['����������Ë������������������Î']=base64_decode('c3RydG90aW1l');$zym_decrypt['�֯������֎��֮��ľ��֋�î������']=base64_decode('Y291bnQ=');$zym_decrypt['������֥���È���Ĕ�����֔�������']=base64_decode('c3RydG9sb3dlcg==');$zym_decrypt['����������������������ċî������']=base64_decode('Y29weQ==');$zym_decrypt['�ĈÔîÈ������������֔��֥��־�']=base64_decode('ZmlsZV9leGlzdHM=');$zym_decrypt['��������î�֎�å��È������������']=base64_decode('cmFuZA=='); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="后台管理";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>首页</a></li>
<li><a href="index.php?mod=admin"><i class="icon fa fa-cog"></i>后台管理</a></li>
<li class="active"><a href="#"><i class="icon fa fa-cogs"></i>网站设置</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');$my=isset($_POST['my'])?$_POST['my']:$_GET['my'];echo base64_decode('PGRpdiBjbGFzcz0iY29sLWxnLTggY29sLXNtLTEwIGNvbC14cy0xMiBjZW50ZXItYmxvY2siIHJvbGU9Im1haW4iPg==');if ($isadmin==1){echo '<div class="panel panel-primary">';if($my=='set_config'){echo '<div class="panel-heading w h"><h3 class="panel-title">网站信息配置</h3></div><div class="panel-body box">
<form action="index.php?mod=admin-set" method="POST"><input type="hidden" name="my" value="ad_config">
<div class="form-group">
<label>*站点名称:</label><br>
<input type="text" class="form-control" name="sitename" value="'.$conf['sitename'].'">
</div>
<div class="form-group">
<label>*网站标题栏后缀:</label><br>
<input type="text" class="form-control" name="sitetitle" value="'.$conf['sitetitle'].'">
</div>
<div class="form-group">
<label>*网站关键字:</label><br>
<input type="text" class="form-control" name="keywords" value="'.$conf['keywords'].'">
</div>
<div class="form-group">
<label>*网站描述:</label><br>
<input type="text" class="form-control" name="description" value="'.$conf['description'].'">
</div>
<div class="form-group">
<label>*网站版权:</label><br>
<input type="text" class="form-control" name="copyright" value="'.$GLOBALS['zym_decrypt']['��ċ��þ��È�������������֯���å']($conf['copyright']).'">
</div>
<div class="form-group">
<label>*网站网址:</label><br>
<input type="text" class="form-control" name="siteurl" value="'.($conf['siteurl']?$conf['siteurl']:$siteurl).'" placeholder="留空则自动获取当前网址">
</div>
<div class="form-group">
<label>*网站客服QQ:</label><br>
<input type="text" class="form-control" name="kfqq" value="'.$conf['kfqq'].'">
</div>
<div class="form-group">
<label>*系统任务数上限:</label><br>
<input type="text" class="form-control" name="max" value="'.$conf['max'].'">
</div>
<div class="form-group">
<label>*列表每页显示个数:</label><br>
<input type="text" class="form-control" name="pagesize" value="'.$conf['pagesize'].'" maxlength="10">
</div>
<div class="form-group">
<label>*批量添加任务上限:</label><br>
<input type="text" class="form-control" name="bulk" value="'.$conf['bulk'].'" maxlength="10">
</div>
<div class="form-group">
<label>用户添加QQ时添加提醒:</label><br>
<input type="text" class="form-control" name="qqtx" value="'.$conf['qqtx'].'">
<font color="green">使用QQ提醒功能为添加的QQ发送所填写的内容。留空则不发送提醒</font>
</div>
<div class="form-group">
<!--label>用户添加QQ加群号:</label><br>
<input type="text" class="form-control" name="qqqun" value="'.$conf['qqqun'].'" maxlength="11">
<font color="green">填写群号后，用户添加QQ将自动加该群。留空则不加群</font>
</div-->
<div class="form-group">
<label>用户添加QQ加好友:</label><br>
<input type="text" class="form-control" name="addfriend" value="'.$conf['addfriend'].'" maxlength="11">
<font color="green">填写QQ号后，用户添加QQ将自动加指定好友。留空则不加好友</font>
</div>
<div class="form-group">
<label>用户添加QQ关注部落ID:</label><br>
<input type="text" class="form-control" name="addbuluo" value="'.$conf['addbuluo'].'" maxlength="11">
<font color="green">填写兴趣部落ID，用户添加QQ将自动关注该部落。留空则不关注</font>
</div>
<div class="form-group">
<label>添加QQ自动添加秒赞任务:</label><br><select class="form-control" name="addzan" default="'.$conf['addzan'].'"><option value="0">0_否</option><option value="1">1_是</option></select>
</div>
<div class="form-group">
<label>副站长UID:</label><br>
<input type="text" class="form-control" name="deputy" value="'.$conf['deputy'].'">
<font color="green">填写UID，用“|”隔开。设置的副站长将拥有大部分网站管理权限，但是没有系统设置权限</font>
</div>
<div class="form-group">
<label>注册开关:</label><br><select class="form-control" name="zc" default="'.$conf['zc'].'"><option value="2">2_开放注册(防刷模式)</option><option value="1">1_开放注册</option><option value="0">0_关闭注册</option></select>
<font color="green">建议开启防刷模式，以免被恶意刷注册。主机屋空间请不要开启防刷模式。</font>
</div>
<div class="form-group">
<label>激活账号方式:</label><br><select class="form-control" name="active" default="'.$conf['active'].'"><option value="0">0_不需要激活</option><option value="1">1_绑定手机激活账号</option><option value="2">2_绑定QQ账号激活账号</option><option value="3">3_绑定新浪微博账号激活账号</option></select>
<font color="green">开启账号激活功能后，所有用户需要以指定的方式激活账号后才能使用平台功能。注：之前注册的用户也同样需要激活账号</font>
</div>
<div class="form-group">
<label>网址关键词屏蔽设定:</label><br/><input type="text" class="form-control" name="block" value="'.$conf['block'].'"><font color="green">每个关键词中间用“|”隔开</font>
</div>
<div class="form-group">
<label>添加QQ屏蔽设定:</label><br/><input type="text" class="form-control" name="qqblock" value="'.$conf['qqblock'].'"><font color="green">每个QQ号中间用“|”隔开</font>
</div>
<div class="form-group">
<label>IP地址屏蔽设定:</label><br/><input type="text" class="form-control" name="banned" value="'.$conf['banned'].'"><font color="green">每个IP地址中间用“|”隔开</font>
</div>
<div class="form-group">
<label>反腾讯网址安全监测系统:</label><br><select class="form-control" name="txprotect" default="'.$conf['txprotect'].'"><option value="0">0_关闭</option><option value="1">1_开启</option><option value="2">2_开启特定域名</option></select>
<font color="green">此功能通过对IP段和header特征的拦截，可以屏蔽腾讯管家网址安全检测系统访问，可防举报。开启此系统可以防止腾讯把秒赞网域名拉入黑名单，但是已拉黑的域名开启此功能就没有用了。</font>
</div>
<div id="frame_set" style="'.($conf['txprotect']!=2?'display:none;':null).'">
<div class="form-group">
<label>开启反腾讯网址安全监测的域名:</label><br><input type="text" class="form-control" name="txprotect_domain" value="'.$conf['txprotect_domain'].'" placeholder="cron.sgwap.net,cron.aliapp.com">
<font color="green">多个域名请用英文逗号 , 隔开</font>
</div>
</div>
<input type="submit" class="btn btn-primary btn-block" value="确定修改"></form></div>
<script>
  $("select[name=\'txprotect\']").change(function(){
	  if($(this).val() == 2){
		$("#frame_set").css("display","inherit");
	  }else{
		$("#frame_set").css("display","none");
	  }
  });
</script>';}elseif($my=='ad_config'){$sitename=$_POST['sitename'];$sitetitle=$_POST['sitetitle'];$keywords=$_POST['keywords'];$description=$_POST['description'];$copyright=$_POST['copyright'];$siteurl=$_POST['siteurl'];$kfqq=$_POST['kfqq'];$max=$_POST['max'];$pagesize=$_POST['pagesize'];$zc=$_POST['zc'];$bulk=$_POST['bulk'];$block=$_POST['block'];$banned=$_POST['banned'];$deputy=$_POST['deputy'];$qqblock=$_POST['qqblock'];$qqqun=$_POST['qqqun'];$addzan=$_POST['addzan'];$addfriend=$_POST['addfriend'];$addbuluo=$_POST['addbuluo'];$active=$_POST['active'];$qqtx=$_POST['qqtx'];$txprotect=$_POST['txprotect'];$txprotect_domain=$_POST['txprotect_domain'];if($sitename==NULL or $pagesize==NULL or $bulk==NULL){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('保存错误,请确保加*项都不为空!',3);}else {$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('c2l0ZW5hbWU='), $sitename);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('c2l0ZXRpdGxl'), $sitetitle);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('a2V5d29yZHM='), $keywords);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('ZGVzY3JpcHRpb24='), $description);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('Y29weXJpZ2h0'), $copyright);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('c2l0ZXVybA=='), $siteurl);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('a2ZxcQ=='), $kfqq);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('cGFnZXNpemU='), $pagesize);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('emM='), $zc);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('YnVsaw=='), $bulk);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('YmxvY2s='), $block);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('YmFubmVk'), $banned);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('ZGVwdXR5'), $deputy);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('cXFibG9jaw=='), $qqblock);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('cXFxdW4='), $qqqun);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('YWRkemFu'), $addzan);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('YWRkZnJpZW5k'), $addfriend);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('YWRkYnVsdW8='), $addbuluo);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('YWN0aXZl'), $active);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('cXF0eA=='), $qqtx);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('dHhwcm90ZWN0'), $txprotect);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('dHhwcm90ZWN0X2RvbWFpbg=='), $txprotect_domain);$ad=$CACHE->clear();if($sysnum>16)$DB->query("INSERT INTO `wjob_info`(`sysid`, `times`) VALUES
('17', '0'),
('18', '0'),
('19', '0'),
('20', '0');");$DB->query($max);if($ad){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('修改成功!',1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5L+u5pS55aSx6LSlIQ==').$DB->error(),4);}}}elseif($my=='set_func'){echo '<div class="panel-heading w h"><h3 class="panel-title">界面功能配置</h3></div>
<div class="panel-body box">
<form action="index.php?mod=admin-set" method="POST"><input type="hidden" name="my" value="ad_func">
<div class="form-group">
<label>是否开启QQ挂机类功能:</label><br><select class="form-control" name="open_qqol" default="'.OPEN_QQOL.'"><option value="1">1_是</option><option value="0">0_否</option></select>
</div>
<div class="form-group">
<label>是否开启自动签到功能:</label><br><select class="form-control" name="open_sign" default="'.OPEN_SIGN.'"><option value="1">1_是</option><option value="0">0_否</option></select>
</div>
<div class="form-group">
<label>是否开启网址监控功能:</label><br><select class="form-control" name="open_cron" default="'.OPEN_CRON.'"><option value="1">1_是</option><option value="0">0_否</option></select>
</div>
<div class="form-group">
<label>是否开启聊天社区功能:</label><br><select class="form-control" name="open_chat" default="'.OPEN_CHAT.'"><option value="1">1_是</option><option value="0">0_否</option></select>
</div>
<div class="form-group">
<label>是否开启ＱＱ展示功能:</label><br><select class="form-control" name="open_wall" default="'.OPEN_WALL.'"><option value="1">1_是</option><option value="0">0_否</option></select>
</div>
<div class="form-group">
<label>是否允许添加QQ代挂类任务:</label><br><select class="form-control" name="open_leve" default="'.OPEN_LEVE.'"><option value="1">1_是</option><option value="0">0_否</option></select>
</div>
<div class="form-group">
<label>是否允许添加空间代刷类任务:</label><br><select class="form-control" name="open_qzds" default="'.OPEN_QZDS.'"><option value="1">1_是</option><option value="0">0_否</option></select>
</div>
<div class="form-group">
<label>是否开启刷赞刷人气功能:<font color=red>(会导致大量QQ失效过快)</font></label><br><select class="form-control" name="open_shua" default="'.OPEN_SHUA.'"><option value="1">1_是</option><option value="0">0_否</option></select>
</div>
<div class="form-group">
<label>是否允许添加刷留言任务:<font color=red>(会导致大量QQ失效过快或被冻结)</font></label><br><select class="form-control" name="open_othe" default="'.OPEN_OTHE.'"><option value="1">1_是</option><option value="0">0_否</option></select>
</div>
<div class="form-group">
<label>是否开启刷说说队形功能:<font color=red>(会导致大量QQ失效过快或被冻结)</font></label><br><select class="form-control" name="open_shua2" default="'.OPEN_SHUAR.'"><option value="1">1_是</option><option value="0">0_否</option></select>
</div>
<div class="form-group">
<label>是否开启协助打码:</label><br><select class="form-control" name="open_dama" default="'.OPEN_DAMA.'"><option value="1">1_是</option><option value="0">0_否</option></select>
</div>
<input type="submit" class="btn btn-primary btn-block" value="确定修改"></form></div>';}elseif($my=='ad_func'){$GLOBALS['zym_decrypt']['��î��������������������������î']('open_qqol', $_POST['open_qqol']);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('b3Blbl9zaWdu'), $_POST['open_sign']);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('b3Blbl9jcm9u'), $_POST['open_cron']);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('b3Blbl9jaGF0'), $_POST['open_chat']);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('b3Blbl93YWxs'), $_POST['open_wall']);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('b3Blbl9vdGhl'), $_POST['open_othe']);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('b3Blbl9sZXZl'), $_POST['open_leve']);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('b3Blbl9xemRz'), $_POST['open_qzds']);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('b3Blbl9zaHVh'), $_POST['open_shua']);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('b3Blbl9zaHVhMg=='), $_POST['open_shua2']);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('b3Blbl9kYW1h'), $_POST['open_dama']);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('c2p5bA=='), $_POST['sjyl']);$ad=$CACHE->clear();if($ad){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('修改成功!',1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5L+u5pS55aSx6LSlIQ==').$DB->error(),4);}}elseif($my=='set_rw'){echo '<div class="panel-heading w h"><h3 class="panel-title">任务运行与服务器配置</h3></div>
<div class="panel-body box">
<form action="index.php?mod=admin-set" method="POST"><input type="hidden" name="my" value="ad_rw">
<div class="form-group">
<label>监控文件运行密钥:</label><br><input type="text" class="form-control" name="cronkey" value="'.$conf['cronkey'].'">
<font color="green">默认为空。设置密钥后，你需要在所有监控文件后面加上 <u>?key=你的密钥</u>，可防止监控文件被恶意执行</font>
</div>
<div class="form-group">
<label>是否使用本地回路:</label><br><select class="form-control" name="localcron" default="'.$conf['localcron'].'"><option value="0">0_否</option><option value="1">1_是</option></select>
<font color="green">开启本地回路能使监控运行更迅速。本地回路主要用于解决开启CDN之后访问IP和源站IP不一样而导致无法监控或监控慢的问题。</font>
</div>
<div class="form-group">
<label>是否强制单线程:</label><br><select class="form-control" name="runmodol" default="'.$conf['runmodol'].'"><option value="0">0_多线程模式(推荐)</option><option value="1">1_强制单线程模式</option></select>
<font color="green">默认多线程模式，运行速度更快，如果多线程模式无法运行任务，可尝试强制单线程，切换到单线程模式后你可能需要加快监控频率。</font>
</div>
<div class="form-group">
<label>每次/每线程运行个数:</label><br/><input type="text" class="form-control" name="interval" value="'.$conf['interval'].'" maxlength="10">
<font color="green">每次运行任务数是指在单个系统内，每运行一次监控文件(jobx.php)所能够执行的任务数。如果开启多线程后则为每个线程的任务数。可以根据自己空间的max_execution_time('.$GLOBALS['zym_decrypt']['�������Į�����Ôֈ�������å���֥']('max_execution_time').')进行设置。</font>
</div>
<!--div class="form-group">
<label>使用备用获取说说列表接口:</label><br><select class="form-control" name="getss" default="'.$conf['getss'].'"><option value="0">0_否</option><option value="1">1_是</option></select>
<font color="green">如果本站IP被腾讯屏蔽导致大部分QQ获取说说列表失败，请尝试使用备用获取说说列表接口。</font><font color="red">一般不建议使用备用接口。</font>
</div-->
<div class="form-group">
<label>PCnew协议使用备用获取说说列表接口:</label><br><select class="form-control" name="newpc" default="'.$conf['newpc'].'"><option value="0">0_否</option><option value="1">1_是</option></select>
<font color="green">如果本站IP被腾讯屏蔽导致大部分QQ在使用PCnew协议时获取说说列表失败，请尝试使用PCnew备用获取说说列表接口。</font><font color="red">备用接口会导致重复赞的问题</font>
</div>
<div class="form-group">
<label>单向检测执行方式:</label><br><select class="form-control" name="dxjc" default="'.$conf['dxjc'].'"><option value="0">模式一(默认)</option><option value="1">模式二</option></select>
<font color="green">模式二使用高并发检测，速度更快，但可能会导致服务器负载过高；模式一采用普通方式检测，速度较慢</font>
</div>
<div class="form-group">
<label>每条说说秒赞秒评时间间隔(秒):</label><br><input type="text" class="form-control" name="sleep" value="'.($conf['sleep']?$conf['sleep']:0).'" maxlength="10">
<font color="green">此处可以调整每条说说点赞/评论的时间间隔（单位：秒），用以解决过于频繁导致的获取赞结果失败。0为不间隔。设置过大会导致访问超时。</font>
</div>
<div class="form-group">
<label>秒赞任务运行时间间隔(秒):</label><br><input type="text" class="form-control" name="sleep2" value="'.($conf['sleep2']?$conf['sleep2']:50).'" maxlength="10">
<font color="green">此处可以调整每运行一次秒赞任务的时间间隔（单位：秒），建议50秒，系统限制最小10秒。</font>
</div>
<!--div class="form-group">
<label>QQ签到类任务运行时间间隔(秒):</label><br><input type="text" class="form-control" name="sleep3" value="'.($conf['sleep3']?$conf['sleep3']:18000).'" maxlength="10">
<font color="green">此处可以调整每运行一次签到类任务的时间间隔（单位：秒），建议18000秒，系统限制最小360秒。</font>
</div>
<div class="form-group">
<label>ＱＱ挂机服务器数量(<=8):</label><br/><input type="text" class="form-control" name="server_qzone" value="'.$conf['server_qzone'].'">
</div>
<div class="form-group">
<label>自动签到服务器数量:</label><br/><input type="text" class="form-control" name="server_wsign" value="'.$conf['server_wsign'].'" disabled>
</div-->
<a id="openadvance" onclick=\'$("#advance").toggle();$("#openadvance").hide();\' style="color:grey;">显示高级功能(仅限网址监控任务)</a>
<div id="advance" style="display:none;">
<div class="form-group">
<label>网址监控系统数量(<=10):</label><br/><input type="text" class="form-control" name="server_wz" value="'.$conf['server_wz'].'">
</div>
<div class="form-group">
<label>每系统任务数上限:</label><br>
<input type="text" class="form-control" name="max" value="'.$conf['max'].'">
</div>
<div class="form-group">
<label>系统执行频率显示设定:</label><br/><input type="text" class="form-control" name="frequency" value="'.$conf['show'].'"><font color="green">分别对应每个服务器，中间用“|”隔开。此处可以修改服务器列表所显示的每个系统的运行频率，实际运行频率由监控频率决定。</font>
</div>
<div class="form-group">
<label><font color="red">[优先级1]</font>有限循环秒刷配置:</label><br/><input type="text" class="form-control" name="seconds" value="'.$conf['seconds'].'">
<font color="green">0为关闭秒刷功能，填写每运行一次监控文件(jobx.php)所连续循环执行的次数。循环次数过多会导致所有任务无法一次性执行完毕。</font>
</div>
<div class="form-group">
<label><font color="red">[优先级2]</font>无限循环秒刷配置:</label><br/><input type="text" class="form-control" name="loop" value="'.$conf['loop'].'">
<font color="green">0为关闭秒刷功能，1为开启。开启后，每运行一次监控文件(jobx.php)可不间断地自动循环运行，最大循环次数因空间而异。</font><br/>
<font color="red">优先级说明：开启优先级1的秒刷配置后优先级2的配置将失效</font>
</div>
</div>
<input type="submit" class="btn btn-primary btn-block" value="确定修改"></form></div>';}elseif($my=='ad_rw'){$cronkey=$_POST['cronkey'];$runmodol=$_POST['runmodol'];$localcron=$_POST['localcron'];$interval=$_POST['interval'];$seconds=$_POST['seconds'];$loop=$_POST['loop'];$dxjc=$_POST['dxjc'];$newpc=$_POST['newpc'];$sleep=$_POST['sleep'];$sleep2=$_POST['sleep2'];$sleep3=$_POST['sleep3'];$max=$_POST['max'];$server_qzone=$_POST['server_qzone']?$_POST['server_qzone']:1;$server_wsign=$_POST['server_wsign']?$_POST['server_wsign']:1;$server_wz=$_POST['server_wz']?$_POST['server_wz']:1;$frequency=$_POST['frequency'];if($interval==NULL or $seconds==NULL or $loop==NULL){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('保存错误,请确保每项都不为空!',3);}else {$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('Y3JvbmtleQ=='), $cronkey);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('cnVubW9kb2w='), $runmodol);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('bG9jYWxjcm9u'), $localcron);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('aW50ZXJ2YWw='), $interval);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('c2Vjb25kcw=='), $seconds);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('bG9vcA=='), $loop);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('ZHhqYw=='), $dxjc);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('bmV3cGM='), $newpc);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('c2xlZXA='), $sleep);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('c2xlZXAy'), $sleep2);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('bWF4'), $max);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('c2VydmVyX3d6'), $server_wz);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('c2hvdw=='), $frequency);$ad=$CACHE->clear();if($ad){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('修改成功！',1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5L+u5pS55aSx6LSlIQ==').$DB->error(),4);}}}elseif($my=='set_mail'){echo '<div class="panel-heading w h"><h3 class="panel-title">发信邮箱配置</h3></div>
<div class="panel-body box">
<form action="index.php?mod=admin-set" method="POST"><input type="hidden" name="my" value="ad_mail">
<div class="form-group">
<label>邮箱SMTP服务器:</label><br><input type="text" class="form-control" name="mail_stmp" value="'.$conf['mail_stmp'].'">
</div>
<div class="form-group">
<label>邮箱SMTP端口:</label><br><input type="text" class="form-control" name="mail_port" value="'.$conf['mail_port'].'">
</div>
<div class="form-group">
<label>是否使用SSL:</label><br><select class="form-control" name="mail_ssl" default="'.$conf['mail_ssl'].'"><option value="0">0_否</option><option value="1">1_是</option></select>
</div>
<div class="form-group">
<label>邮箱账号:</label><br><input type="text" class="form-control" name="mail_name" value="'.$conf['mail_name'].'">
</div>
<div class="form-group">
<label>邮箱密码:</label><br><input type="text" class="form-control" name="mail_pwd" value="'.$conf['mail_pwd'].'">
</div>
<font color="green">如果为QQ邮箱需先开通SMTP，且要填写QQ邮箱独立密码。邮箱SMTP服务器可以百度一下，例如163邮箱的即为 smtp.163.com。邮箱SMTP端口默认为25，SSL的端口是465。</font> <a href="http://www.qqzzz.net/wiki/mail_faq.txt">查看邮件发送失败的相关解决方法</a><br/><br/>

<input type="submit" class="btn btn-primary btn-block" value="确定修改"></form><br/>[<a href="index.php?mod=admin-set&my=mailtest">给 '.$conf['mail_name'].' 发一封测试邮件</a>]</div>';}elseif($my=='ad_mail'){$mail_name=$_POST['mail_name'];$mail_pwd=$_POST['mail_pwd'];$mail_stmp=$_POST['mail_stmp'];$mail_port=$_POST['mail_port'];$mail_ssl=$_POST['mail_ssl'];if($mail_name==NULL or $mail_pwd==NULL){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('保存错误,请确保每项都不为空!',3);}else {$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('bWFpbF9uYW1l'), $mail_name);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('bWFpbF9wd2Q='), $mail_pwd);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('bWFpbF9zdG1w'), $mail_stmp);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('bWFpbF9wb3J0'), $mail_port);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('bWFpbF9zc2w='), $mail_ssl);$ad=$CACHE->clear();if($ad){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('修改成功!',1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5L+u5pS55aSx6LSlIQ==').$DB->error(),4);}}}elseif($my=='mailtest'){if(!empty($conf['mail_name'])){$result=$GLOBALS['zym_decrypt']['���������þ�֎�֎��ĥ֔���������']($conf['mail_name'],'邮件发送测试。','这是一封测试邮件！<br/><br/>来自：'.$siteurl);if($result==1)$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('邮件发送成功！',1);else $GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('6YKu5Lu25Y+R6YCB5aSx6LSl77yB').$result,3);}else $GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5oKo6L+Y5pyq6K6+572u6YKu566x77yB'),3);}elseif($my=='set_client'){echo '<div class="panel-heading w h"><h3 class="panel-title">安卓客户端配置</h3></div>
<div class="panel-body box">
<form action="index.php?mod=admin-set" method="POST"><input type="hidden" name="my" value="ad_client">
<div class="form-group">
<label>APP最新版本号:</label><br><input type="text" class="form-control" name="app_version" value="'.$conf['app_version'].'">
</div>
<div class="form-group">
<label>APP更新说明:</label><br><textarea class="form-control" name="app_log" rows="4">'.$conf['app_log'].'</textarea>
</div>
<div class="form-group">
<label>是否APP启动时弹出内容:</label><br><select class="form-control" name="app_start_is" default="'.$conf['app_start_is'].'"><option value="1">1_是</option><option value="0">0_否</option></select>
</div>
<div class="form-group">
<label>APP启动时弹出的内容:</label><br><textarea class="form-control" name="app_start" rows="4">'.$conf['app_start'].'</textarea>
</div>
<font color="green">（仅限已定制安卓客户端的站点）在这里可以配置安卓客户端的相关信息，以便本站会员即时更新APP到最新版本。需要更新的APK文件请放置于：网站根目录/myapp.apk 文件名一点要正确！</font><br/><br/>

<input type="submit" class="btn btn-primary btn-block" value="确定修改"></form></div>';}elseif($my=='ad_client'){$app_version=$_POST['app_version'];$app_log=$_POST['app_log'];$app_start_is=$_POST['app_start_is'];$app_start=$_POST['app_start'];if($app_version==NULL){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('保存错误,请确保每项都不为空!',3);}else {$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('YXBwX3ZlcnNpb24='), $app_version);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('YXBwX2xvZw=='), $app_log);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('YXBwX3N0YXJ0X2lz'), $app_start_is);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('YXBwX3N0YXJ0'), $app_start);$ad=$CACHE->clear();if($ad){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('修改成功!',1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5L+u5pS55aSx6LSlIQ==').$DB->error(),4);}}}elseif($my=='set_coin'){echo '<div class="panel-heading w h"><h3 class="panel-title">币种及消费规则设定</h3></div>
<div class="panel-body box">
<form action="index.php?mod=admin-set" method="POST"><input type="hidden" name="my" value="ad_coin">
<div class="form-group">
<label>虚拟币名称:</label><br><input type="text" class="form-control" name="coin_name" value="'.$conf['coin_name'].'">
</div>
<div class="form-group">
<label>一元(RMB)等于多少虚拟币:</label><br><input type="text" class="form-control" name="rules_0" value="'.$rules[0].'" maxlength="9">
</div>
<div class="form-group">
<label>注册初始送币:</label><br><input type="text" class="form-control" name="rules_1" value="'.$rules[1].'" maxlength="9">
</div>
<div class="form-group">
<label>虚拟币总开关:</label><br><select class="form-control" name="jifen" default="'.$conf['jifen'].'"><option value="1">1_开启</option><option value="0">0_关闭</option></select>
<font color="green">只有开启状态以下设置才会生效</font>
</div>
<div class="form-group">
<label>普通网址任务扣币(条/天):</label><br><input type="text" class="form-control" name="rules_2" value="'.$rules[2].'" maxlength="9">
</div>
<div class="form-group">
<label>网站签到任务扣币(条/天):</label><br><input type="text" class="form-control" name="rules_3" value="'.$rules[3].'" maxlength="9">
</div>
<div class="form-group">
<label>QQ挂机任务扣币(条/天):</label><br><input type="text" class="form-control" name="rules_4" value="'.$rules[4].'" maxlength="9">
</div>
<div class="form-group">
<label>成功协助打码送币:</label><br><input type="text" class="form-control" name="rules_5" value="'.$rules[5].'" maxlength="9">
</div>
<div class="form-group">
<label>被协助打码扣币:</label><br><input type="text" class="form-control" name="rules_6" value="'.$rules[6].'" maxlength="9">
</div>
<div class="form-group">
<label>说说刷队形扣币(每条):</label><br><input type="text" class="form-control" name="rules_7" value="'.$rules[7].'" maxlength="9">
</div>
<div class="form-group">
<label>说说刷赞扣币(每条):</label><br><input type="text" class="form-control" name="rules_8" value="'.$rules[8].'" maxlength="9">
</div>
<div class="form-group">
<label>成功邀请好友奖励:</label><br><input type="text" class="form-control" name="rules_9" value="'.$rules[9].'" maxlength="9">
</div>
<br/><br/>

<input type="submit" class="btn btn-primary btn-block" value="确定修改"></form></div>';}elseif($my=='ad_coin'){$coin_name=$_POST['coin_name'];$jifen=$_POST['jifen'];$rules=array($GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['rules_0']),$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['rules_1']),$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['rules_2']),$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['rules_3']),$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['rules_4']),$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['rules_5']),$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['rules_6']),$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['rules_7']),$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['rules_8']),$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['rules_9']));if($coin_name==NULL){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('保存错误,请确保每项都不为空!',3);}else {$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('Y29pbl9uYW1l'), $coin_name);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('cnVsZXM='), $GLOBALS['zym_decrypt']['�����Ĉ�־���Ĉ�֎���֥��ľ��Ď�']("|",$rules));$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('amlmZW4='), $jifen);$ad=$CACHE->clear();if($ad){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('修改成功!',1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5L+u5pS55aSx6LSlIQ==').$DB->error(),4);}}}elseif($my=='set_pay'){if(!empty($conf['cronkey']))$ext='&key='.$conf['cronkey'];echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwtaGVhZGluZyB3IGgiPjxoMyBjbGFzcz0icGFuZWwtdGl0bGUiPuWcqOe6v+aUr+S7mOWPiuWNoeWvhui0reS5sOiuvuWumjwvaDM+PC9kaXY+CjxkaXYgY2xhc3M9InBhbmVsLWJvZHkgYm94Ij4KPGZvcm0gYWN0aW9uPSJpbmRleC5waHA/bW9kPWFkbWluLXNldCIgbWV0aG9kPSJQT1NUIj48aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJteSIgdmFsdWU9ImFkX3BheSI+CjxkaXYgY2xhc3M9ImZvcm0tZ3JvdXAiPgo8bGFiZWw+5piv5ZCm5byA5ZCv5Y2h5a+G6Ieq5Yqp5r+A5rS75Yqf6IO9OjwvbGFiZWw+PGJyPjxzZWxlY3QgY2xhc3M9ImZvcm0tY29udHJvbCIgbmFtZT0ib3Blbl9rbSIgZGVmYXVsdD0i').$conf['open_km'].'"><option value="1">1_开启</option><option value="0">0_关闭</option></select>
</div>
<div class="form-group">
<label><img src="images/icon/alipay.ico" class="logo">支付宝即时到账接口选择:</label><br><select class="form-control" name="alipay_api" default="'.$conf['alipay_api'].'"><option value="0">0_不使用支付宝即时到账</option><option value="1">1_支付宝官方即时到账接口</option><!--option value="2">2_免签约支付宝即时到账</option--></select>
</div>
<div id="payapi_01" style="'.($conf['alipay_api']!=1?'display:none;':null).'">
<div class="form-group">
<label>*收款人支付宝账号:</label><br>
<input type="text" class="form-control" name="alipay_account" value="'.$conf['alipay_account'].'">
</div>
<div class="form-group">
<label>*合作者身份(PID):</label><br>
<input type="text" class="form-control" name="alipay_pid" value="'.$conf['alipay_pid'].'">
</div>
<div class="form-group">
<label>*安全校验码(Key):</label><br>
<input type="text" class="form-control" name="alipay_key" value="'.$conf['alipay_key'].'">
<a href="https://b.alipay.com/order/productDetail.htm?productId=2012111200373124" target="_blank">申请支付宝即时到账接口</a>
</div>
</div>
<div id="payapi_02" style="'.($conf['alipay_api']!=2?'display:none;':null).'">
<div class="form-group">
<label>*支付宝Token:</label><br>
<input type="text" class="form-control" name="alipay_key2" value="'.$conf['alipay_key'].'">
<a href="https://openauth.alipay.com/oauth2/authorize.htm?client_id=2015081700218910" target="_blank">点此获取支付宝Token</a>，token的有效期约为1个月
</div>
<div class="form-group">
<label>*收款人账号[必须与token使用的支付宝账号一致]:</label><br>
<input type="text" class="form-control" name="alipay_account2" value="'.$conf['alipay_account'].'">
</div>
<div class="form-group">
<label>*收款人姓名[必须与token使用的支付宝姓名一致]:</label><br>
<input type="text" class="form-control" name="alipay_name" value="'.$conf['alipay_name'].'">
<font color="green">请到手机支付宝钱包获取自己的二维码，并上传至images/alipay.png</font>
</div>
</div>
<div class="form-group">
<label><img src="images/icon/alipay.ico" class="logo">支付宝手机网站支付接口选择:</label><br><select class="form-control" name="alipay2_api" default="'.$conf['alipay2_api'].'"><option value="0">0_不使用支付宝手机网站支付</option><option value="1">1_支付宝官方手机网站支付接口</option></select>
</div>
<div id="payapi_06" style="'.($conf['alipay2_api']!=1?'display:none;':null).'">
<div class="form-group">
<font color="green">相关信息与以上支付宝即时到账接口一致，开启前请确保已开通支付宝手机支付，否则会导致手机用户无法支付！</font><br/>
<a href="https://b.alipay.com/order/productDetail.htm?productId=2015110218008816" target="_blank">申请支付宝手机网站支付</a>
</div>
</div>
<div class="form-group">
<label><img src="images/icon/tenpay.ico" class="logo">财付通即时到账接口选择:</label><br><select class="form-control" name="tenpay_api" default="'.$conf['tenpay_api'].'"><option value="0">0_不使用财付通即时到账</option><option value="1">1_财付通官方即时到账接口</option><!--option value="2">2_财付通免签约即时到账</option--></select>
</div>
<div id="payapi_03" style="'.($conf['tenpay_api']!=1?'display:none;':null).'">
<div class="form-group">
<label>*财付通商户号:</label><br>
<input type="text" class="form-control" name="tenpay_pid" value="'.$conf['tenpay_pid'].'">
</div>
<div class="form-group">
<label>*财付通密钥:</label><br>
<input type="text" class="form-control" name="tenpay_key" value="'.$conf['tenpay_key'].'">
<a href="http://mch.tenpay.com/market/index.shtml" target="_blank">申请财付通即时到账接口</a>
</div>
</div>
<div id="payapi_04" style="'.($conf['tenpay_api']!=2?'display:none;':null).'">
<div class="form-group">
<font color="green">请<a href="index.php?mod=tenpaylogin" target="_blank">点此登录财付通</a>，并监控相应文件</font>
</div>
</div>
<div class="form-group">
<label><img src="images/icon/wechat.ico" class="logo">微信即时到账接口选择:</label><br><select class="form-control" name="wxpay_api" default="'.$conf['wxpay_api'].'"><option value="0">0_不使用微信即时到账</option><option value="1">1_微信官方即时到账接口</option></select>
</div>
<div id="payapi_05" style="'.($conf['wxpay_api']!=1?'display:none;':null).'">
<font color="green">*微信即时到账相关信息配置请修改includes/wxpay/WxPay.Config.php</font>
</div>
<div id="buyrules" style="'.($conf['alipay_api']==0&&$conf['tenpay_api']==0&&$conf['wxpay_api']==0?'display:none;':null).'">
<h5>在线购买价格设定：</h5>
<div class="form-group">
<label>1天试用VIP会员(元):</label><br><input type="text" class="form-control" name="rules_0" value="'.$buy_rules[0].'" maxlength="9">
</div>
<div class="form-group">
<label>1个月VIP会员(元):</label><br><input type="text" class="form-control" name="rules_1" value="'.$buy_rules[1].'" maxlength="9">
</div>
<div class="form-group">
<label>3个月VIP会员(元):</label><br><input type="text" class="form-control" name="rules_2" value="'.$buy_rules[2].'" maxlength="9">
</div>
<div class="form-group">
<label>6个月VIP会员(元):</label><br><input type="text" class="form-control" name="rules_3" value="'.$buy_rules[3].'" maxlength="9">
</div>
<div class="form-group">
<label>12个月VIP会员(元):</label><br><input type="text" class="form-control" name="rules_4" value="'.$buy_rules[4].'" maxlength="9">
</div>
<div class="form-group">
<label>永久VIP会员(元):</label><br><input type="text" class="form-control" name="rules_5" value="'.$buy_rules[5].'" maxlength="9">
</div>
<div class="form-group">
<label>1个QQ配额(元):</label><br><input type="text" class="form-control" name="rules_6" value="'.$buy_rules[6].'" maxlength="9">
</div>
<div class="form-group">
<label>3个QQ配额(元):</label><br><input type="text" class="form-control" name="rules_7" value="'.$buy_rules[7].'" maxlength="9">
</div>
<div class="form-group">
<label>5个QQ配额(元):</label><br><input type="text" class="form-control" name="rules_8" value="'.$buy_rules[8].'" maxlength="9">
</div>
<div class="form-group">
<label>10个QQ配额(元):</label><br><input type="text" class="form-control" name="rules_9" value="'.$buy_rules[9].'" maxlength="9">
</div>
</div>
<script>
$("select[name=\'alipay_api\']").change(function(){
	if($(this).val() == 1){
		$("#payapi_01").css("display","inherit");
		$("#payapi_02").css("display","none");
		$("#buyrules").css("display","inherit");
	}else if($(this).val() == 2){
		$("#payapi_02").css("display","inherit");
		$("#payapi_01").css("display","none");
		$("#buyrules").css("display","inherit");
	}else{
		$("#payapi_01").css("display","none");
		$("#payapi_02").css("display","none");
		$("#buyrules").css("display","none");
	}
});
$("select[name=\'tenpay_api\']").change(function(){
	if($(this).val() == 1){
		$("#payapi_03").css("display","inherit");
		$("#payapi_04").css("display","none");
		$("#buyrules").css("display","inherit");
	}else if($(this).val() == 2){
		$("#payapi_04").css("display","inherit");
		$("#payapi_03").css("display","none");
		$("#buyrules").css("display","inherit");
	}else{
		$("#payapi_03").css("display","none");
		$("#payapi_04").css("display","none");
	}
});
$("select[name=\'wxpay_api\']").change(function(){
	if($(this).val() == 1){
		$("#payapi_05").css("display","inherit");
		$("#buyrules").css("display","inherit");
	}else{
		$("#payapi_05").css("display","none");
	}
});
$("select[name=\'alipay2_api\']").change(function(){
	if($(this).val() == 1){
		$("#payapi_06").css("display","inherit");
		$("#buyrules").css("display","inherit");
	}else{
		$("#payapi_06").css("display","none");
	}
});
</script>
<br/>
<input type="submit" class="btn btn-primary btn-block" value="确定修改"></form><br/>
<font color="green">如果开启了支付宝免签约即时到账，需要监控 <u>'.$siteurl.'cron/paytask.php?type=1'.$ext.'</u>，如果开启了财付通免签约即时到账，需要监控 <u>'.$siteurl.'cron/paytask.php?type=2'.$ext.'</u></font>
</div>';}elseif($my=='ad_pay'){$open_km=$_POST['open_km'];$km_link=$_POST['km_link'];$alipay_api=$_POST['alipay_api'];$alipay_pid=$_POST['alipay_pid'];$alipay_key=$alipay_api==1?$_POST['alipay_key']:$_POST['alipay_key2'];$alipay2_api=$_POST['alipay2_api'];$alipay_account=$alipay_api==1?$_POST['alipay_account']:$_POST['alipay_account2'];$alipay_name=$_POST['alipay_name'];$tenpay_api=$_POST['tenpay_api'];$tenpay_pid=$_POST['tenpay_pid'];$tenpay_key=$_POST['tenpay_key'];$wxpay_api=$_POST['wxpay_api'];$wxpay_appid=$_POST['wxpay_appid'];$wxpay_mchid=$_POST['wxpay_mchid'];$buy_rules=array($GLOBALS['zym_decrypt']['��þ�į���������È�֔È�����ï��']($_POST['rules_0']),$GLOBALS['zym_decrypt']['��þ�į���������È�֔È�����ï��']($_POST['rules_1']),$GLOBALS['zym_decrypt']['��þ�į���������È�֔È�����ï��']($_POST['rules_2']),$GLOBALS['zym_decrypt']['��þ�į���������È�֔È�����ï��']($_POST['rules_3']),$GLOBALS['zym_decrypt']['��þ�į���������È�֔È�����ï��']($_POST['rules_4']),$GLOBALS['zym_decrypt']['��þ�į���������È�֔È�����ï��']($_POST['rules_5']),$GLOBALS['zym_decrypt']['��þ�į���������È�֔È�����ï��']($_POST['rules_6']),$GLOBALS['zym_decrypt']['��þ�į���������È�֔È�����ï��']($_POST['rules_7']),$GLOBALS['zym_decrypt']['��þ�į���������È�֔È�����ï��']($_POST['rules_8']),$GLOBALS['zym_decrypt']['��þ�į���������È�֔È�����ï��']($_POST['rules_9']));if($open_km==NULL || $alipay_api==NULL){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('保存错误,请确保每项都不为空!',3);}else {$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('b3Blbl9rbQ=='), $open_km);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('a21fbGluaw=='), $km_link);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('YWxpcGF5X2FwaQ=='), $alipay_api);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('YWxpcGF5X3BpZA=='), $alipay_pid);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('YWxpcGF5X2tleQ=='), $alipay_key);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('YWxpcGF5X2FjY291bnQ='), $alipay_account);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('YWxpcGF5Ml9hcGk='), $alipay2_api);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('YWxpcGF5X25hbWU='), $alipay_name);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('dGVucGF5X2FwaQ=='), $tenpay_api);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('dGVucGF5X3BpZA=='), $tenpay_pid);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('dGVucGF5X2tleQ=='), $tenpay_key);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('d3hwYXlfYXBp'), $wxpay_api);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('d3hwYXlfYXBwaWQ='), $wxpay_appid);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('d3hwYXlfbWNoaWQ='), $wxpay_mchid);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('YnV5X3J1bGVz'), $GLOBALS['zym_decrypt']['�����Ĉ�־���Ĉ�֎���֥��ľ��Ď�']("|",$buy_rules));$ad=$CACHE->clear();if($ad){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('修改成功!',1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5L+u5pS55aSx6LSlIQ==').$DB->error(),4);}}}elseif($my=='set_vip'){function vipfunc_select($func){global $vip_func;foreach($GLOBALS['zym_decrypt']['���ċ�ľ��־��������Ô�î֔���Ď']('|',$func)as $v){if($GLOBALS['zym_decrypt']['�����֔Ë֋��ֈ������Ë�����Îľ']($v, $vip_func)){return 'selected';}}return null;}echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwtaGVhZGluZyB3IGgiPjxoMyBjbGFzcz0icGFuZWwtdGl0bGUiPumFjemineS4jlZJUOinhOWImeiuvuWumjwvaDM+PC9kaXY+CjxkaXYgY2xhc3M9InBhbmVsLWJvZHkgYm94Ij4KPGZvcm0gYWN0aW9uPSJpbmRleC5waHA/bW9kPWFkbWluLXNldCIgbWV0aG9kPSJQT1NUIj48aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJteSIgdmFsdWU9ImFkX3ZpcCI+CjxoND7nvZHnq5lWSVDop4TliJnorr7lrprvvJo8L2g0Pgo8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIj4KPGxhYmVsPuaYr+WQpuW8gOWQr1FR57uR5a6aVklQ5qih5byPOjwvbGFiZWw+PGJyPjxzZWxlY3QgY2xhc3M9ImZvcm0tY29udHJvbCIgbmFtZT0idmlwbW9kZSIgZGVmYXVsdD0i').$conf['vipmode'].'"><option value="0">0_否</option><option value="1">1_是</option></select>
<font color="green">此模式开启后，每个QQ都需要单独开通VIP，VIP卡密将只能给单个QQ续费。如果网站之前添加了QQ，开启此模式后所有QQ将变成VIP已过期</font>
</div>
<div class="form-group">
<label>多少虚拟币兑换1月VIP:（0为关闭兑换）</label><br><input type="text" class="form-control" name="coin_tovip" value="'.$conf['coin_tovip'].'" maxlength="9">
</div>
<div class="form-group">
<label>多少虚拟币兑换1天试用VIP:（0为关闭兑换）</label><br><input type="text" class="form-control" name="coin_tovip2" value="'.$conf['coin_tovip2'].'" maxlength="9">
</div>
<div class="form-group">
<label>只有VIP才能使用的功能:</label><br><select name="vip_func[]" multiple="multiple" class="form-control" style="height:100px;"><option value="wsign1" '.$GLOBALS['zym_decrypt']['��ľ�֎��Ô����֯�����־þ�Î�ĥ']('wsign1').'>柯林/DZ自动签到</option><option value="wsign2" '.$GLOBALS['zym_decrypt']['��ľ�֎��Ô����֯�����־þ�Î�ĥ']('wsign2').'>其它自动签到</option><option value="zan" '.$GLOBALS['zym_decrypt']['��ľ�֎��Ô����֯�����־þ�Î�ĥ']('zan').'>QQ双协议秒赞</option><option value="pl" '.$GLOBALS['zym_decrypt']['��ľ�֎��Ô����֯�����־þ�Î�ĥ']('pl').'>QQ双协议秒评</option><option value="shuo|zfss" '.$GLOBALS['zym_decrypt']['��ľ�֎��Ô����֯�����־þ�Î�ĥ']('shuo|zfss').'>QQ发说说/转发说说</option><option value="del|delly|quantu" '.$GLOBALS['zym_decrypt']['��ľ�֎��Ô����֯�����־þ�Î�ĥ']('del|delly|quantu').'>删说说/删留言/圈图</option><option value="ht|kjqd" '.$GLOBALS['zym_decrypt']['��ľ�֎��Ô����֯�����־þ�Î�ĥ']('ht|kjqd').'>花藤挂机/空间签到</option><option value="qsign" '.$GLOBALS['zym_decrypt']['��ľ�֎��Ô����֯�����־þ�Î�ĥ']('qsign').'>全部QQ签到类任务</option><option value="dx|mzjc" '.$GLOBALS['zym_decrypt']['��ľ�֎��Ô����֯�����־þ�Î�ĥ']('dx|mzjc').'>单向检测,秒赞检测</option><option value="zyzan|liuyan|gift" '.$GLOBALS['zym_decrypt']['��ľ�֎��Ô����֯�����־þ�Î�ĥ']('zyzan|liuyan|gift').'>互赞主页,留言等</option><option value="sz|rq|qqz" '.$GLOBALS['zym_decrypt']['��ľ�֎��Ô����֯�����־þ�Î�ĥ']('sz|rq|qqz').'>刷赞,人气,圈圈赞</option><option value="qqlevel" '.$GLOBALS['zym_decrypt']['��ľ�֎��Ô����֯�����־þ�Î�ĥ']('qqlevel').'>QQ等级代挂</option><option value="reply" '.$GLOBALS['zym_decrypt']['��ľ�֎��Ô����֯�����־þ�Î�ĥ']('reply').'>刷说说队形</option><option value="chat" '.$GLOBALS['zym_decrypt']['��ľ�֎��Ô����֯�����־þ�Î�ĥ']('chat').'>聊天室发言</option></select>
<font color="green">按住Ctrl键可多选</font>
</div>
<hr/>
<h4>网站配额规则设定：</h4>
<div class="form-group">
<label>是否开启添加QQ配额限制:</label><br><select class="form-control" name="peie_open" default="'.$conf['peie_open'].'"><option value="1">1_是</option><option value="0">0_否</option></select>
</div>
<div id="peie_open" style="'.($conf['peie_open']==0?'display:none;':null).'">
<div class="form-group">
<label>新用户默认赠送配额:</label><br><input type="text" class="form-control" name="peie_free" value="'.$conf['peie_free'].'" maxlength="9">
</div>
<div class="form-group">
<label>多少虚拟币兑换1个配额:（0为关闭兑换）</label><br><input type="text" class="form-control" name="coin_topeie" value="'.$conf['coin_topeie'].'" maxlength="9">
</div>
</div>
<div id="peie_close" style="'.($conf['peie_open']==1?'display:none;':null).'">
<div class="form-group">
<label>普通用户QQ添加数量上限(0为不限制):</label><br>
<input type="text" class="form-control" name="qqlimit" value="'.$conf['qqlimit'].'" maxlength="10">
</div>
<div class="form-group">
<label>VIP会员QQ添加数量上限(0为不限制):</label><br>
<input type="text" class="form-control" name="qqlimit2" value="'.$conf['qqlimit2'].'" maxlength="10">
</div>
</div>
<input type="submit" class="btn btn-primary btn-block" value="确定修改"></form></div>
<script>
$("select[name=\'peie_open\']").change(function(){
	if($(this).val() == 1){
		$("#peie_open").css("display","inherit");
		$("#peie_close").css("display","none");
	}else{
		$("#peie_close").css("display","inherit");
		$("#peie_open").css("display","none");
	}
});
$("select[name=\'peie_open\']").change(function(){
	if($(this).val() == 1){
		$("#peie_open").css("display","inherit");
		$("#peie_close").css("display","none");
	}else{
		$("#peie_close").css("display","inherit");
		$("#peie_open").css("display","none");
	}
});
</script>';}elseif($my=='ad_vip'){$coin_tovip=$_POST['coin_tovip'];$coin_tovip2=$_POST['coin_tovip2'];$qqlimit=$_POST['qqlimit'];$qqlimit2=$_POST['qqlimit2'];$vip_sys=$_POST['vip_sys'];$vip_func=$GLOBALS['zym_decrypt']['�����Ĉ�־���Ĉ�֎���֥��ľ��Ď�']("|",$_POST['vip_func']);$peie_open=$_POST['peie_open'];$peie_free=$_POST['peie_free'];$coin_topeie=$_POST['coin_topeie'];$vipmode =$_POST['vipmode'];if($peie_open==NULL){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('保存错误,请确保每项都不为空!',3);}else {$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('Y29pbl90b3ZpcA=='), $coin_tovip);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('Y29pbl90b3ZpcDI='), $coin_tovip2);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('cXFsaW1pdA=='), $qqlimit);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('cXFsaW1pdDI='), $qqlimit2);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('dmlwX2NvaW4='), '1');$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('dmlwX2Z1bmM='), $vip_func);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('dmlwX3N5cw=='), $vip_sys);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('cGVpZV9vcGVu'), $peie_open);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('cGVpZV9mcmVl'), $peie_free);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('Y29pbl90b3BlaWU='), $coin_topeie);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('dmlwbW9kZQ=='), $vipmode);$ad=$CACHE->clear();if($ad){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('修改成功!',1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5L+u5pS55aSx6LSlIQ==').$DB->error(),4);}}}elseif($my=='set_qd'){echo '<div class="panel-heading w h"><h3 class="panel-title">每日签到与说说尾巴设置</h3></div>
<div class="panel-body box">
<form action="index.php?mod=admin-set" method="POST"><input type="hidden" name="my" value="ad_qd">
<div class="form-group">
<label>签到领VIP:(多少虚拟币换一天VIP，0为不兑换)</label><br><input type="text" class="form-control" name="qd_jifen" value="'.$conf['qd_jifen'].'" maxlength="9">
</div>
<div class="form-group">
<label>用户首次签到获得体验VIP的天数(0为不获得)</label><br><input type="text" class="form-control" name="qd_vipts" value="'.$conf['qd_vipts'].'" maxlength="9">
</div>
<div class="form-group">
<label>每日签到获取虚拟币</label><br><input type="text" class="form-control" name="qd_coin" value="'.$conf['qd_coin'].'" maxlength="9">
</div>
<div class="form-group">
<label>网站签到发说说内容(留空则不发说说):</label><br>
<input type="text" class="form-control" name="qd_ss" value="'.$conf['qd_ss'].'">
</div>
<div class="form-group">
<label>说说图片[Url]:</label><br>
<input type="text" class="form-control" name="qd_pturl" value="'.$conf['qd_pturl'].'">
</div>
<div class="form-group">
<label>自动发表说说尾巴:</label><br>
<input type="text" class="form-control" name="shuotail" value="'.$conf['shuotail'].'">
<font color="green">说说尾巴中包含广告可能会造成禁言</font>
</div>
<input type="submit" class="btn btn-primary btn-block" value="确定修改"></form><br/>
<font color="green">签到领VIP页面,请自行添加地址到首页合适位置,地址为：index.php?mod=qd</font>
</div>';}elseif($my=='ad_qd'){$qd_jifen=$_POST['qd_jifen'];$qd_vipts =$_POST['qd_vipts'];$qd_coin =$_POST['qd_coin'];$qd_ss =$_POST['qd_ss'];$qd_pturl =$_POST['qd_pturl'];$shuotail =$_POST['shuotail'];if($qd_jifen==NULL){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('保存错误,请确保每项都不为空!',3);}else {$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('cWRfamlmZW4='), $qd_jifen);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('cWRfdmlwdHM='), $qd_vipts);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('cWRfY29pbg=='), $qd_coin);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('cWRfc3M='), $qd_ss);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('cWRfcHR1cmw='), $qd_pturl);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('c2h1b3RhaWw='), $shuotail);$ad=$CACHE->clear();if($ad){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('修改成功!',1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5L+u5pS55aSx6LSlIQ==').$DB->error(),4);}}}elseif($my=='set_daili'){echo '<div class="panel-heading w h"><h3 class="panel-title">代理拿卡价格配置</h3></div>
<div class="panel-body box">
<form action="index.php?mod=admin-set" method="POST"><input type="hidden" name="my" value="ad_daili">
<div class="form-group">
<label>一元(RMB)等于多少虚拟币:</label><br><input type="text" class="form-control" name="rules_0" value="'.$daili_rules[0].'" maxlength="9">
</div>
<div class="form-group">
<label>VIP月卡(RMB/个):</label><br><input type="text" class="form-control" name="rules_1" value="'.$daili_rules[1].'" maxlength="9">
</div>
<div class="form-group">
<label>VIP季度卡(RMB/个):</label><br><input type="text" class="form-control" name="rules_2" value="'.$daili_rules[2].'" maxlength="9">
</div>
<div class="form-group">
<label>VIP半年卡(RMB/个):</label><br><input type="text" class="form-control" name="rules_3" value="'.$daili_rules[3].'" maxlength="9">
</div>
<div class="form-group">
<label>VIP年卡(RMB/个):</label><br><input type="text" class="form-control" name="rules_4" value="'.$daili_rules[4].'" maxlength="9">
</div>
<div class="form-group">
<label>VIP永久卡(RMB/个):</label><br><input type="text" class="form-control" name="rules_5" value="'.$daili_rules[5].'" maxlength="9">
</div>
<div class="form-group">
<label>1个配额价格(RMB):</label><br><input type="text" class="form-control" name="rules_6" value="'.$daili_rules[6].'" maxlength="9">
</div>
<div class="form-group">
<label>3个配额价格(RMB):</label><br><input type="text" class="form-control" name="rules_7" value="'.$daili_rules[7].'" maxlength="9">
</div>
<div class="form-group">
<label>5个配额价格(RMB):</label><br><input type="text" class="form-control" name="rules_8" value="'.$daili_rules[8].'" maxlength="9">
</div>
<div class="form-group">
<label>10个配额价格(RMB):</label><br><input type="text" class="form-control" name="rules_9" value="'.$daili_rules[9].'" maxlength="9">
</div>
<br/><br/>
<input type="submit" class="btn btn-primary btn-block" value="确定修改"></form></div>';}elseif($my=='ad_daili'){$daili_rules=array($GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['rules_0']),$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['rules_1']),$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['rules_2']),$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['rules_3']),$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['rules_4']),$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['rules_5']),$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['rules_6']),$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['rules_7']),$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['rules_8']),$GLOBALS['zym_decrypt']['���֯֎����������ֈ�Ď����������']($_POST['rules_9']));if($daili_rules==NULL){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('保存错误,请确保每项都不为空!',3);}else {$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('ZGFpbGlfcnVsZXM='), $GLOBALS['zym_decrypt']['�����Ĉ�־���Ĉ�֎���֥��ľ��Ď�']("|",$daili_rules));$ad=$CACHE->clear();if($ad){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('修改成功!',1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5L+u5pS55aSx6LSlIQ==').$DB->error(),4);}}}elseif($my=='set_api'){if($is_fenzhan==1&&$siterow['api']==0)$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('当前分站没有权限修改API设置。');echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwtaGVhZGluZyB3IGgiPjxoMyBjbGFzcz0icGFuZWwtdGl0bGUiPuetvuWIsC9RUeaMguacuuaooeWdl0FQSemFjee9rjwvaDM+PC9kaXY+CjxkaXYgY2xhc3M9InBhbmVsLWJvZHkgYm94Ij4KPGZvcm0gYWN0aW9uPSJpbmRleC5waHA/bW9kPWFkbWluLXNldCIgbWV0aG9kPSJQT1NUIj48aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJteSIgdmFsdWU9ImFkX2FwaSI+CjxkaXYgY2xhc3M9ImZvcm0tZ3JvdXAiPgo8bGFiZWw+UVHnrYnnuqfku6PmjIJBUEnmjqXlj6M6PC9sYWJlbD48YnIvPjxzZWxlY3QgY2xhc3M9ImZvcm0tY29udHJvbCIgbmFtZT0icXFsZXZlbGFwaSIgZGVmYXVsdD0i').$qqlevelapi.'"><option value="1">微轩稳定代挂接口(荐)</option><option value="2">饭饭稳定代挂接口(荐)</option><option value="6">自定义API</option></select>
<div id="frame_set2" style="'.($conf['qqlevelapi']!=6?'display:none;':null).'">
<div class="form-group">
<label>自定义QQ等级代挂API接口:</label><br><input type="text" class="form-control" name="qqlevelapis" value="'.$conf['qqlevelapis'].'" placeholder="http://daigua.25ak.com/">
<font color="red">警告：请勿使用非官方认证的代挂接口，以免QQ被盗</font>
</div>
</div>
<font color="green">更改API会导致之前购买的代挂激活码全部无法使用。提示：更改代挂接口之后别忘了更改代挂页面公告</font></div>
<div class="form-group">
<label>签到API服务器:</label><br/><select class="form-control" name="apiserver" default="'.$conf['apiserver'].'"><option value="1">忆梦官方API一号</option><option value="2">忆梦官方API二号</option><option value="3">忆梦官方API三号</option><option value="0">本地API</option></select>
<font color="green">此为各大网站签到类任务的API（不包括QQ里面的签到）</font></div>
<div class="form-group">
<label>QQ挂机类API服务器:</label><br/><select class="form-control" name="qqapiid" default="'.$conf['qqapiid'].'"><option value="0">本地API(推荐)</option><option value="1">官方API一号(阿里云)需授权</option><option value="2">官方API二号(腾讯云)需授权</option><option value="7">官方API三号(百度云)需授权</option><option value="12">官方API四号(百度云)需授权</option><option value="9">秒赞吧挂机API(腾讯云)需授权</option><option value="4">笨鸟挂机API(小鸟云)需授权</option><option value="5">Ｖ８挂机API(需授权)</option><option value="6">幻谷挂机API(需授权)</option><option value="8">微时光挂机API(需授权)</option><option value="10">凉城挂机API(需授权)</option><option value="11">天成挂机API(需授权)</option><option value="3">自定义API</option></select>
<div id="frame_set" style="'.($conf['qqapiid']!=3?'display:none;':null).'">
<div class="form-group">
<label>自定义QQ挂机API服务器地址:</label><br><input type="text" class="form-control" name="myqqapi" value="'.$conf['myqqapi'].'" placeholder="http://cloud.sgwap.net/">
</div>
<font color="red"><a href="http://www.qqzzz.net/download.php?remote=true&rand='.$GLOBALS['zym_decrypt']['����ï�������î��Ď���֋ï����֋']().'">忆梦云任务QQ挂机类API远程版源码(zip)</a></font>&nbsp;<font color="green">多个API地址之间用 | 隔开</font>
</div>
<font color="green">建议选本地API，因为QQ的数量和空间稳定性是呈负相关的。如果你的空间实在无法运行QQ挂机类任务可以尝试使用官方API。官方API是需要域名授权的，授权请联系QQ:350335362</font></div>
<div class="form-group">
<label>QQ登录API服务器:</label><br/><select class="form-control" name="qqloginid" default="'.$conf['qqloginid'].'"><option value="1">官方API一号(ECS)</option><option value="2">官方API二号(SAE)</option><option value="0">本地API</option></select>
<font color="green">QQ登录即为添加QQ与更新sid。如果在添加QQ时出现登录成功但获取sid失败，请在此处更换QQ登录API</font></div>
<div class="form-group">
<label>秒赞检测与获取好友列表API:</label><br/><select class="form-control" name="mzjc_api" default="'.$conf['mzjc_api'].'"><option value="0">本地API</option><option value="1">远程API</option></select>
<font color="green">当本地获取好友列表或秒赞检测无法使用时可以尝试更换远程API</font></div>
<div class="form-group">
<label>单向检测与移动好友API:</label><br/><select class="form-control" name="dx_api" default="'.$conf['dx_api'].'"><option value="0">本地API</option><option value="1">远程API</option></select>
<font color="green">当单向删除好友与移动好友无法使用时可以尝试更换远程API</font></div>
<div class="form-group">
<label>发信API服务器:</label><br/><select class="form-control" name="mail_api" default="'.$conf['mail_api'].'"><option value="0">本地发信</option><option value="1">官方API一号</option><option value="2">笨鸟发信API</option><option value="4">秒赞吧发信API</option></select>
<font color="green">使用此API后，网站将通过官方发信API发送邮件。建议在当前空间不支持发送邮件时使用。</font></div>
<div class="form-group">
<label>圈圈赞接口:</label><br/>
<input type="text" class="form-control" name="qqz_api" value="'.$conf['qqz_api'].'" placeholder="http://61.135.169.125:3331/">
<font color="green">需精确到端口号，填写样例：http://61.135.169.125:3331/ 留空则使用官方API，如果根目录存在quan.php则会优先使用quan.php</font></div>
<div class="form-group">
<label>静态资源CDN:</label><br/><select class="form-control" name="cdnserver" default="'.$conf['cdnserver'].'"><option value="0">不使用CDN</option><option value="1">秒赞吧-CDN(腾讯云)</option><option value="2">彩虹-CDN(百度云)</option><option value="3">千序-CDN(百度云)</option></select>
<font color="green">使用CDN可以加速静态资源访问速度，适合速度较慢的主机。HTTPS不支持使用CDN</font></div>
<input type="submit" class="btn btn-primary btn-block" value="确定修改"></form></div>
<script>
$("select[name=\'qqapiid\']").change(function(){
	if($(this).val() == 3){
		$("#frame_set").css("display","inherit");
	}else{
		$("#frame_set").css("display","none");
	}
});
$("select[name=\'qqlevelapi\']").change(function(){
	if($(this).val() == 6){
		$("#frame_set2").css("display","inherit");
	}else{
		$("#frame_set2").css("display","none");
	}
});
</script>
';}elseif($my=='ad_api'){if($is_fenzhan==1&&$siterow['api']==0)$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('当前分站没有权限修改API设置。');$qqlevelapi=$_POST['qqlevelapi'];$qqlevelapis=$_POST['qqlevelapis'];$apiserver=$_POST['apiserver'];$qqapiid=$_POST['qqapiid'];$qqloginid=$_POST['qqloginid'];$mail_api=$_POST['mail_api'];$mzjc_api=$_POST['mzjc_api'];$dx_api=$_POST['dx_api'];$myqqapi=$_POST['myqqapi'];$qqz_api=$_POST['qqz_api'];$cdnserver=$_POST['cdnserver'];if($apiserver==NULL){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('保存错误,请确保每项都不为空!',3);}else {$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('cXFsZXZlbGFwaQ=='), $qqlevelapi);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('cXFsZXZlbGFwaXM='), $qqlevelapis);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('YXBpc2VydmVy'), $apiserver);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('cXFhcGlpZA=='), $qqapiid);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('cXFsb2dpbmlk'), $qqloginid);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('bWFpbF9hcGk='), $mail_api);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('bXpqY19hcGk='), $mzjc_api);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('ZHhfYXBp'), $dx_api);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('bXlxcWFwaQ=='), $myqqapi);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('cXF6X2FwaQ=='), $qqz_api);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('Y2Ruc2VydmVy'), $cdnserver);$ad=$CACHE->clear();if($ad){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('修改成功!',1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5L+u5pS55aSx6LSlIQ==').$DB->error(),4);}}}elseif($my=='set_ui'){echo '<div class="panel-heading w h"><h3 class="panel-title">网站界面风格配置</h3></div>
<div class="panel-body box">
<form action="index.php?mod=admin-set" method="POST"><input type="hidden" name="my" value="ad_ui">
<div class="form-group">
<label>默认首页设置:</label><br>
<select class="form-control" name="ui_index" default="'.$conf['ui_index'].'"><option value="1">炫彩风格首页</option><option value="0">用户中心作为默认首页</option><option value="2">手机版以用户中心为首页</option></select>
<font color="green">如需修改炫彩风格首页模板请编辑template/Home/index.php</font>
</div>
<div class="form-group">
<label>网站皮肤样式:</label><br>
<select class="form-control" name="ui_style" default="'.$conf['ui_style'].'"><option value="1">V7.x新版界面</option><option value="2">Bootstrap原版</option><option value="3">Skeumorphism UI</option><option value="4">Metro风格Flat UI</option><option value="5">高仿谷歌扁平样式</option><option value="6">Windows8 Metro UI</option></select></div>
<div class="form-group">
<label>手机版皮肤样式:</label><br>
<select class="form-control" name="ui_style2" default="'.$conf['ui_style2'].'"><option value="1">与电脑版相同</option><option value="2">Bootstrap原版</option><option value="3">Skeumorphism UI</option><option value="4">Metro风格Flat UI</option><option value="5">高仿谷歌扁平样式</option><option value="6">Windows8 Metro UI</option></select></div>
<div id="ui_flat" style="'.($conf['ui_style']!=1?'display:none;':null).'">
<div class="form-group">
<label>按钮与边框整体风格:</label><br><select class="form-control" name="ui_flat" default="'.$conf['ui_flat'].'"><option value="0">扁平化</option><option value="1">立体化</option></select>
</div>
</div>
<div id="ui_user" style="'.($conf['ui_style']==1&&$conf['ui_style2']==1?'display:none;':null).'">
<div class="form-group">
<label>是否使用V6经典版用户中心:</label><br>
<select class="form-control" name="ui_user" default="'.$conf['ui_user'].'"><option value="0">否</option><option value="1">是</option></select>
</div>
</div>
<hr/>
<div class="form-group">
<label>网页浮动音乐播放器:</label><br><select class="form-control" name="limhplayer" default="'.$conf['limhplayer'].'"><option value="0">0_关闭</option><option value="1">1_明月浩空播放器(精选专辑)</option><option value="2">2_明月浩空播放器(自定义歌单)</option><option value="3">3_网易云音乐播放器</option></select>
<font color="green">网站左下角的HTML5浮动音乐播放器</font>
<div id="limh_sq" style="'.($conf['limhplayer']!=2?'display:none;':null).'">
<a href="index.php?mod=musicset" target="_blank">点击进入设置播放列表</a>
</div>
</div>
<div id="musicid" style="'.($conf['limhplayer']!=3?'display:none;':null).'">
<div class="form-group">
<label>网易云音乐歌单ID:</label><br/>
<input type="text" class="form-control" name="musicid" value="'.$conf['musicid'].'" placeholder="填写歌单ID">
<font color="green">例如，其中红色部分为歌单ID：http://music.163.com/#/playlist?id=</font><font color="red">34238509</font>
</div>
</div>
<div class="form-group">
<label>是否开启pjax控件:</label><br><select class="form-control" name="ui_pjax" default="'.$conf['ui_pjax'].'"><option value="0">0_关闭</option><option value="1">1_开启</option></select>
<font color="green">开启pjax控件可以实现免刷新切换页面，同时能够让背景音乐不间断播放，但是不支持低端浏览器。</font>
</div>
<div class="form-group">
<label>是否开启页面加载效果:</label><br><select class="form-control" name="ui_loading" default="'.$conf['ui_loading'].'"><option value="0">0_关闭</option><option value="1">1_开启</option></select>
</div>
<div class="form-group">
<label>是否开启列表半透明:</label><br><select class="form-control" name="ui_opacity" default="'.$conf['ui_opacity'].'"><option value="0">0_关闭</option><option value="1">1_开启</option></select>
</div>
<div class="form-group">
<label>网站首页背景音乐:</label><br/>
<input type="text" class="form-control" name="ui_backmusic" value="'.$conf['ui_backmusic'].'" placeholder="填写音乐的URL">
</div>
<script>
$("select[name=\'ui_style\']").change(function(){
	if($(this).val() == 1){
		$("#ui_flat").css("display","inherit");
		$("#ui_user").css("display","none");
	}else{
		$("#ui_flat").css("display","none");
		$("#ui_user").css("display","inherit");
	}
});
$("select[name=\'ui_style2\']").change(function(){
	if($(this).val() == 1 && $("select[name=\'ui_style\']").val()==1){
		$("#ui_flat").css("display","inherit");
		$("#ui_user").css("display","none");
	}else{
		$("#ui_flat").css("display","none");
		$("#ui_user").css("display","inherit");
	}
});
$("select[name=\'limhplayer\']").change(function(){
	if($(this).val() == 2){
		$("#limh_sq").css("display","inherit");
		$("#musicid").css("display","none");
	}else if($(this).val() == 3){
		$("#limh_sq").css("display","none");
		$("#musicid").css("display","inherit");
	}else{
		$("#limh_sq").css("display","none");
		$("#musicid").css("display","none");
	}
});
</script>
<input type="submit" class="btn btn-primary btn-block" value="确定修改"></form>
<br/>小工具：<a href="http://pan.cccyun.cc/" target="_blank">外链网盘</a>｜<a href="http://link.hhtjim.com/" target="_blank">外链转换工具</a></div>';}elseif($my=='ad_ui'){$ui_index=$_POST['ui_index'];$ui_flat=$_POST['ui_flat'];$ui_user=$_POST['ui_user'];$limhplayer=$_POST['limhplayer'];$limh_domain=$_POST['limh_domain'];$limh_sq=$_POST['limh_sq'];$ui_pjax=$_POST['ui_pjax'];$ui_loading=$_POST['ui_loading'];$ui_style=$_POST['ui_style'];$ui_style2=$_POST['ui_style2'];$ui_opacity=$_POST['ui_opacity'];$ui_backmusic=$_POST['ui_backmusic'];$musicid=$_POST['musicid'];if($ui_flat==NULL or $limhplayer==NULL or $ui_pjax==NULL){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('保存错误,请确保每项都不为空!',3);}else {$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('dWlfaW5kZXg='), $ui_index);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('dWlfZmxhdA=='), $ui_flat);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('dWlfdXNlcg=='), $ui_user);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('bGltaHBsYXllcg=='), $limhplayer);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('bGltaF9kb21haW4='), $limh_domain);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('bGltaF9zcQ=='), $limh_sq);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('dWlfcGpheA=='), $ui_pjax);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('dWlfbG9hZGluZw=='), $ui_loading);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('dWlfc3R5bGU='), $ui_style);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('dWlfc3R5bGUy'), $ui_style2);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('dWlfb3BhY2l0eQ=='), $ui_opacity);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('dWlfYmFja211c2lj'), $ui_backmusic);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('bXVzaWNpZA=='), $musicid);$ad=$CACHE->clear();if($ad){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('修改成功!',1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5L+u5pS55aSx6LSlIQ==').$DB->error(),4);}}}elseif($my=='set_oauth'){$oauth_option=$GLOBALS['zym_decrypt']['���ċ�ľ��־��������Ô�î֔���Ď']("|",$conf['oauth_option']);echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwtaGVhZGluZyB3IGgiPjxoMyBjbGFzcz0icGFuZWwtdGl0bGUiPueZvuW6puekvuS8muWMlueZu+W9lee7hOS7tjwvaDM+PC9kaXY+CjxkaXYgY2xhc3M9InBhbmVsLWJvZHkgYm94Ij4KPGZvcm0gYWN0aW9uPSJpbmRleC5waHA/bW9kPWFkbWluLXNldCIgbWV0aG9kPSJQT1NUIj48aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJteSIgdmFsdWU9ImFkX29hdXRoIj4KPGRpdiBjbGFzcz0iZm9ybS1ncm91cCI+CjxsYWJlbD7mmK/lkKblkK/nlKjnmb7luqbnpL7kvJrljJbnmbvlvZU6PC9sYWJlbD48YnI+CjxzZWxlY3QgY2xhc3M9ImZvcm0tY29udHJvbCIgbmFtZT0ib2F1dGhfb3BlbiIgZGVmYXVsdD0i').$conf['oauth_open'].'"><option value="0">0_关闭</option><option value="1">1_开启</option><option value="2">2_开启(并关闭普通注册)</option></select></div>
<div id="oauth_option" style="'.($conf['oauth_open']==0?'display:none;':null).'">
<div class="form-group">
<label><input type="checkbox" name="oauth_option[]" value="qqdenglu" '.(($GLOBALS['zym_decrypt']['�����֔Ë֋��ֈ������Ë�����Îľ']('qqdenglu',$oauth_option))?'checked':null).'> 开启ＱＱ登录</label><br/>
<label><input type="checkbox" name="oauth_option[]" value="baidu" '.(($GLOBALS['zym_decrypt']['�����֔Ë֋��ֈ������Ë�����Îľ']('baidu',$oauth_option))?'checked':null).'> 开启百度登录</label><br/>
<label><input type="checkbox" name="oauth_option[]" value="sinaweibo" '.(($GLOBALS['zym_decrypt']['�����֔Ë֋��ֈ������Ë�����Îľ']('sinaweibo',$oauth_option))?'checked':null).'> 开启新浪微博登录</label><br/>
<label><input type="checkbox" name="oauth_option[]" value="qqweibo" '.(($GLOBALS['zym_decrypt']['�����֔Ë֋��ֈ������Ë�����Îľ']('qqweibo',$oauth_option))?'checked':null).'> 开启腾讯微博登录</label><br/>
<label><input type="checkbox" name="oauth_option[]" value="renren" '.(($GLOBALS['zym_decrypt']['�����֔Ë֋��ֈ������Ë�����Îľ']('renren',$oauth_option))?'checked':null).'> 开启人人网登录</label><br/>
<label><input type="checkbox" name="oauth_option[]" value="kaixin" '.(($GLOBALS['zym_decrypt']['�����֔Ë֋��ֈ������Ë�����Îľ']('kaixin',$oauth_option))?'checked':null).'> 开启开心网登录</label><br/>
</div>
<div class="form-group">
<label>新用户社会化账号登录之后:</label><br>
<select class="form-control" name="oauth_act" default="'.$conf['oauth_act'].'"><option value="1">以默认用户名直接注册本站账号</option><option value="0">自行输入用户名或绑定已有账号</option></select></div>
</div>
<script>
$("select[name=\'oauth_open\']").change(function(){
	if($(this).val() == 0){
		$("#oauth_option").css("display","none");
	}else{
		$("#oauth_option").css("display","inherit");
	}
});
</script>
<input type="submit" class="btn btn-primary btn-block" value="确定修改"></form><br/>
<font color="green">开启百度社会化登录组件后，在登录界面可以使用以上社会化账号登录本站。</font>
</div>';}elseif($my=='ad_oauth'){$oauth_open=$_POST['oauth_open'];$oauth_option=$_POST['oauth_option'];$oauth_act=$_POST['oauth_act'];$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('b2F1dGhfb3Blbg=='), $oauth_open);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('b2F1dGhfb3B0aW9u'), $GLOBALS['zym_decrypt']['�����Ĉ�־���Ĉ�֎���֥��ľ��Ď�']("|",$oauth_option));$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('b2F1dGhfYWN0'), $oauth_act);$ad=$CACHE->clear();if($ad){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('修改成功!',1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5L+u5pS55aSx6LSlIQ==').$DB->error(),4);}}elseif($my=='syskey'){echo '<div class="panel-heading w h"><h3 class="panel-title">SYS_KEY查看</h3></div><div class="panel-body box">
<input type="text" value="'.SYS_KEY.'" class="form-control" disabled><br/>
<font color="green">SYS_KEY是安装时随机生成的，网站用于加密数据的密钥，请不要随意泄露。</font>
</div><br/>';}elseif($my=='set_gg'){echo '<div class="panel-heading w h"><h3 class="panel-title">广告与公告配置</h3></div><div class="panel-body box">
<form action="index.php?mod=admin-set" method="POST"><input type="hidden" name="my" value="ad_gg">
<div class="form-group">
<label>首页公告栏:</label><br><textarea class="form-control" name="gg" rows="6">'.$GLOBALS['zym_decrypt']['��ċ��þ��È�������������֯���å']($conf['gg']).'</textarea>
</div>
<div class="form-group">
<label>首页底部:</label><br><textarea class="form-control" name="bottom" rows="6">'.$GLOBALS['zym_decrypt']['��ċ��þ��È�������������֯���å']($conf['bottom']).'</textarea>
</div>
<div class="form-group">
<label>自助购买页公告:</label><br><textarea class="form-control" name="shop" rows="4">'.$GLOBALS['zym_decrypt']['��ċ��þ��È�������������֯���å']($conf['shop']).'</textarea>
</div>
<div class="form-group">
<label>代挂页面公告:</label><br><textarea class="form-control" name="qqlevel" rows="4">'.$GLOBALS['zym_decrypt']['��ċ��þ��È�������������֯���å']($conf['qqlevel']).'</textarea>
</div>
<div class="form-group">
<label>全局底部排版:</label><br><textarea class="form-control" name="footer" rows="4">'.$GLOBALS['zym_decrypt']['��ċ��þ��È�������������֯���å']($conf['footer']).'</textarea>
</div>
<div class="form-group">
<label>底部滚动字幕:</label><br><textarea class="form-control" name="marquee" rows="4">'.$GLOBALS['zym_decrypt']['��ċ��þ��È�������������֯���å']($conf['marquee']).'</textarea>
</div>
<input type="submit" class="btn btn-primary btn-block"
value="确定修改"></form></div>';}elseif($my=='ad_gg'){$gg=$_POST['gg'];$bottom=$_POST['bottom'];$shop=$_POST['shop'];$qqlevel=$_POST['qqlevel'];$footer=$_POST['footer'];$marquee=$_POST['marquee'];$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('Z2c='), $gg);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('Ym90dG9t'), $bottom);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('c2hvcA=='), $shop);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('cXFsZXZlbA=='), $qqlevel);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('Zm9vdGVy'), $footer);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('bWFycXVlZQ=='), $marquee);$ad=$CACHE->clear();if($ad){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('修改成功!',1);}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5L+u5pS55aSx6LSlIQ==').$DB->error(),4);}}elseif($my=='renew'){if(isset($_GET['days'])){$vipdate =$GLOBALS['zym_decrypt']['�����֮�į���������������þ�Ĕ��']("Y-m-d", $GLOBALS['zym_decrypt']['����������Ë������������������Î']("+ {$_GET['days']} days"));$DB->query("update ".DBQZ."_qq set vip='1',vipdate='$vipdate' where vipdate<'".date("Y-m-d")."'");echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwtaGVhZGluZyB3IGgiPjxoMyBjbGFzcz0icGFuZWwtdGl0bGUiPuS4gOmUrue7rei0uee9keermeaJgOaciVFRPC9oMz48L2Rpdj48ZGl2IGNsYXNzPSJwYW5lbC1ib2R5IGJveCI+CuS4gOmUrue7reacn+aIkOWKn++8geW3suaIkOWKn+e7mQ==').$DB->affected().'个QQ续期'.$_GET['days'].'天VIP。
</div><br/>';}else{echo <<<HTML
<script type="text/javascript">
var days=prompt("请输入要续期的天数","")
if (days!=null && days!="")
{
	window.location.href='index.php?mod=admin-set&my=renew&days='+days
}
</script>
HTML;
}}elseif($my == 'qunfa'){echo '<div class="panel-heading w h"><h3 class="panel-title">本站所有用户邮箱导出</h3></div>';echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwtYm9keSBib3giPjxkaXYgaWQ9InJvdyI+');$rs=$DB->query("select * from ".DBQZ."_user where email is not null order by userid desc");while ($myrow =$DB->fetch($rs)){echo $myrow['email'].',';}echo base64_decode('PC9kaXY+PC9kaXY+');}elseif($my=='logo'){echo '<div class="panel-heading w h"><h3 class="panel-title">更改系统LOGO</h3></div><div class="panel-body box">';if($_POST['s']==1){$extension=$GLOBALS['zym_decrypt']['���ċ�ľ��־��������Ô�î֔���Ď']('.',$_FILES['file']['name']);if (($length =$GLOBALS['zym_decrypt']['�֯������֎��֮��ľ��֋�î������']($extension))> 1){$ext =$GLOBALS['zym_decrypt']['������֥���È���Ĕ�����֔�������']($extension[$length - 1]);}if($ext=='png'||$ext=='gif'||$ext=='jpg'||$ext=='jpeg'||$ext=='bmp')$ext='png';if($is_fenzhan)$logoname =DBQZ;else $logoname ='';$GLOBALS['zym_decrypt']['����������������������ċî������']($_FILES['file']['tmp_name'], ROOT.'images/'.$logoname.'logo.'.$ext);echo base64_decode('5oiQ5Yqf5LiK5Lyg5paH5Lu2ITxicj7vvIjlj6/og73pnIDopoHmuIXnqbrmtY/op4jlmajnvJPlrZjmiY3og73nnIvliLDmlYjmnpzvvIk=');}if(!$GLOBALS['zym_decrypt']['�ĈÔîÈ������������֔��֥��־�'](ROOT.base64_decode('aW1hZ2VzLw==').DBQZ.base64_decode('bG9nby5wbmc=')))$logoname='';else $logoname =DBQZ;echo base64_decode('PGZvcm0gYWN0aW9uPSJpbmRleC5waHA/bW9kPWFkbWluLXNldCZteT1sb2dvIiBtZXRob2Q9IlBPU1QiIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiPjxsYWJlbCBmb3I9ImZpbGUiPjwvbGFiZWw+PGlucHV0IHR5cGU9ImZpbGUiIG5hbWU9ImZpbGUiIGlkPSJmaWxlIiAvPjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9InMiIHZhbHVlPSIxIiAvPjxicj48aW5wdXQgdHlwZT0ic3VibWl0IiBjbGFzcz0iYnRuIGJ0bi1wcmltYXJ5IGJ0bi1ibG9jayIgdmFsdWU9IuehruiupOabtOaUuUxPR08iIC8+PC9mb3JtPjxicj7njrDlnKjnmoRMT0dP77yaPGJyPjxpbWcgc3JjPSJpbWFnZXMv').$logoname.'logo.png?r='.$GLOBALS['zym_decrypt']['��������î�֎�å��È������������'](10000,99999).'">';echo base64_decode('PC9kaXY+');}elseif($my == 'bj'){echo '<div class="panel-heading w h"><h3 class="panel-title">更改网站背景图片</h3></div><div class="panel-body box">';if($_POST['s']==1){$GLOBALS['zym_decrypt']['��î��������������������������î']('ui_background', $_POST['ui_background']);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('dWlfYmFja2dyb3VuZDI='), $_POST['ui_background2']);$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('dWlfYmluZw=='), $_POST['ui_bing']);$CACHE->clear();$extension=$GLOBALS['zym_decrypt']['���ċ�ľ��־��������Ô�î֔���Ď']('.',$_FILES['file']['name']);if (($length =$GLOBALS['zym_decrypt']['�֯������֎��֮��ľ��֋�î������']($extension))> 1){$ext =$GLOBALS['zym_decrypt']['������֥���È���Ĕ�����֔�������']($extension[$length - 1]);}if($ext=='png'||$ext=='gif'||$ext=='jpg'||$ext=='jpeg'||$ext=='bmp')$ext='png';if($is_fenzhan)$bjname =DBQZ;else $bjname ='';$GLOBALS['zym_decrypt']['����������������������ċî������']($_FILES['file']['tmp_name'], ROOT.'images/'.$bjname.'bj.'.$ext);echo base64_decode('5oiQ5Yqf5LiK5Lyg5paH5Lu2ITxicj7vvIjlj6/og73pnIDopoHmuIXnqbrmtY/op4jlmajnvJPlrZjmiY3og73nnIvliLDmlYjmnpzvvIk=');}echo base64_decode('PGZvcm0gYWN0aW9uPSJpbmRleC5waHA/bW9kPWFkbWluLXNldCZteT1iaiIgbWV0aG9kPSJQT1NUIiBlbmN0eXBlPSJtdWx0aXBhcnQvZm9ybS1kYXRhIj4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0icyIgdmFsdWU9IjEiLz4KPGRpdiBjbGFzcz0iZm9ybS1ncm91cCI+CjxsYWJlbCBmb3I9ImZpbGUiPjwvbGFiZWw+CjxpbnB1dCB0eXBlPSJmaWxlIiBuYW1lPSJmaWxlIiBpZD0iZmlsZSIgY2xhc3M9ImZvcm0tY29udHJvbCIvPgo8L2Rpdj4KPGRpdiBjbGFzcz0iZm9ybS1ncm91cCI+CjxsYWJlbD7mmL7npLrmlYjmnpw6PC9sYWJlbD48YnI+PHNlbGVjdCBjbGFzcz0iZm9ybS1jb250cm9sIiBuYW1lPSJ1aV9iYWNrZ3JvdW5kIiBkZWZhdWx0PSI=').$conf['ui_background'].'"><option value="0">纵向和横向重复</option><option value="1">横向重复,纵向拉伸</option><option value="2">纵向重复,横向拉伸</option><option value="3">不重复,全屏拉伸</option></select>
</div>
<div class="form-group">
<label>是否固定:</label><br><select class="form-control" name="ui_background2" default="'.$conf['ui_background2'].'"><option value="1">1_是</option><option value="0">0_否</option></select>
</div>
<div class="form-group">
<label>是否使用<a href="//cn.bing.com/" target="_blank">Bing每日壁纸</a></label><br>
<select class="form-control" name="ui_bing" default="'.$conf['ui_bing'].'"><option value="0">否</option><option value="1">是</option></select>
</div>
<input type="submit" class="btn btn-primary btn-block" value="确认更改背景" />
</form>
<br>现在的背景：<br><img src="images/'.$bjname.'bj.png?r='.$GLOBALS['zym_decrypt']['��������î�֎�å��È������������'](10000,99999).'" style="max-width:100%"><br>
<a href="index.php?mod=admin-set&my=bj2">[更改首页背景图片]</a>';echo base64_decode('PC9kaXY+');}elseif($my == 'bj2'){echo '<div class="panel-heading w h"><h3 class="panel-title">更改首页背景图片</h3></div><div class="panel-body box">';if($_POST['s']==1){$CACHE->clear();$GLOBALS['zym_decrypt']['����������������������ċî������']($_FILES['file']['tmp_name'], ROOT.'assets/img/banner.jpg');echo base64_decode('5oiQ5Yqf5LiK5Lyg5paH5Lu2ITxicj7vvIjlj6/og73pnIDopoHmuIXnqbrmtY/op4jlmajnvJPlrZjmiY3og73nnIvliLDmlYjmnpzvvIk=');}echo base64_decode('PGZvcm0gYWN0aW9uPSJpbmRleC5waHA/bW9kPWFkbWluLXNldCZteT1iajIiIG1ldGhvZD0iUE9TVCIgZW5jdHlwZT0ibXVsdGlwYXJ0L2Zvcm0tZGF0YSI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9InMiIHZhbHVlPSIxIi8+CjxkaXYgY2xhc3M9ImZvcm0tZ3JvdXAiPgo8bGFiZWwgZm9yPSJmaWxlIj48L2xhYmVsPgo8aW5wdXQgdHlwZT0iZmlsZSIgbmFtZT0iZmlsZSIgaWQ9ImZpbGUiIGNsYXNzPSJmb3JtLWNvbnRyb2wiLz4KPC9kaXY+CjxpbnB1dCB0eXBlPSJzdWJtaXQiIGNsYXNzPSJidG4gYnRuLXByaW1hcnkgYnRuLWJsb2NrIiB2YWx1ZT0i56Gu6K6k5pu05pS56IOM5pmvIiAvPgo8L2Zvcm0+Cjxicj7oh6rlrprkuYnpppbpobXog4zmma/lv4XpobvlnKhb5oyC5py6QVBJ6K6+572uXemHjOmdoumAieaLqeacrOWcsENETuaJjeiDveeUn+aViOOAggo8YnI+546w5Zyo55qE6IOM5pmv77yaPGJyPjxpbWcgc3JjPSJhc3NldHMvaW1nL2Jhbm5lci5qcGc/cj0=').$GLOBALS['zym_decrypt']['��������î�֎�å��È������������'](10000,99999).base64_decode('IiBzdHlsZT0ibWF4LXdpZHRoOjEwMCUiPjxicj4=');echo base64_decode('PC9kaXY+');}elseif($my == 'info'){echo '<div class="panel-heading w h"><h3 class="panel-title">程序信息</h3></div>';echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwtYm9keSBib3giPg==');echo base64_decode('54mI5p2D5omA5pyJ77ya5b+G5qKm572R57ucPGJyLz7vvLHvvLHvvJozNTAzMzUzNjI8YnIvPuW9k+WJjeeJiOacrO+8mlY3LjY1IChCdWlsZCA=').VERSION.base64_decode('KTxici8+5a6Y5pa5572R56uZ77yaPGEgaHJlZj0iaHR0cDovL2Jsb2cuY2NjeXVuLmNjIj5ibG9nLmNjY3l1bi5jYzwvYT48YnIvPjxhIGhyZWY9Imh0dHA6Ly93d3cueW1henouY29tIj53d3cueW1henouY29tPC9hPjxici8+PGEgaHJlZj0iaHR0cDovL3d3dy4yNWFrLmNvbSI+d3d3LjI1YWsuY29tPC9hPjxici8+5byA5pS+QVBJ77yaPGEgaHJlZj0iaHR0cDovL3d3dy5xcXp6ei5uZXQvd2lraS9jbGllbnRfYXBpMi50eHQiPmh0dHA6Ly93d3cucXF6enoubmV0L3dpa2kvY2xpZW50X2FwaTIudHh0PC9hPgo=');echo base64_decode('PC9kaXY+');}elseif($my == 'help'){echo '
<div class="panel-heading w h"><h3 class="panel-title">任务监控说明</h3></div>';echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwtYm9keSBib3giPg==');if(!empty($conf['cronkey']))$ext='&key='.$conf['cronkey'];echo base64_decode('5L2g5Y+v5Lul5qC55o2u6ZyA6KaB55uR5o6n5Lul5LiL5paH5Lu277yaPGJyLz48Zm9udCBjb2xvcj1icm93bj4=');if(OPEN_QQOL==1)echo "<li class=\"list-group-item\">{$siteurl}cron/qzonetask.php?sys=1{$ext}</li>";echo "<li class=\"list-group-item\">{$siteurl}cron/zantask.php?sys=1{$ext}</li>";if(OPEN_QQOL==1)echo "<li class=\"list-group-item\">{$siteurl}cron/qsigntask.php?sys=1{$ext}</li>";if(OPEN_SIGN==1)echo "<li class=\"list-group-item\">{$siteurl}cron/wsigntask.php?sys=1{$ext}</li>";if(OPEN_CRON==1)for($i=1;$i<=$conf['server_wz'];$i++){echo "<li class=\"list-group-item\">{$siteurl}cron/wztask.php?sys={$i}{$ext}</li>";}echo "<li class=\"list-group-item\">{$siteurl}cron/newsid.php?{$ext}</li>";echo base64_decode('CjwvZm9udD7nm5Hmjqflroznm5HmjqfnvZHlnYDlkI7ljbPlj6/miafooYzku7vliqHvvIE8YnIvPgo8Zm9udCBjb2xvcj0icmVkIj7lpoLmnpzkvaDnmoTnqbrpl7TlvIDlkK/kuobpmLJDQ+aUu+WHu++8jOaIluiAheS9v+eUqOS6huWKoOmAn+S5kOetiUNETu+8jOivt+WwhuacrOermeacjeWKoeWZqElQOg==').$_SERVER["SERVER_ADDR"].' 加入到白名单中或者在任务运行配置中开启本地回路，否则任务将无法执行。</font><br/>
推荐监控系统:<br/>
<a target="_blank" href="http://www.25ak.com/">http://www.25ak.com/</a><br/>
';echo base64_decode('PC9kaXY+');}echo base64_decode('PC9kaXY+CjxzY3JpcHQ+CnZhciBpdGVtcyA9ICQoInNlbGVjdFtkZWZhdWx0XSIpIHx8IDA7CmZvciAoaSA9IDA7IGkgPCBpdGVtcy5sZW5ndGg7IGkrKykgewoJJChpdGVtc1tpXSkudmFsKCQoaXRlbXNbaV0pLmF0dHIoImRlZmF1bHQiKSk7Cn0KPC9zY3JpcHQ+');}else {$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('5ZCO5Y+w566h55CG55m75b2V5aSx6LSl44CC6K+35Lul566h55CG5ZGY6Lqr5Lu9IDxhIGhyZWY9ImluZGV4LnBocD9tb2Q9bG9naW4iPumHjeaWsOeZu+W9lTwvYT7vvIE='),3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>