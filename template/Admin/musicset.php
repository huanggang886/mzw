<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['������������î��î���þ������å�']=base64_decode('c3RyX3JlcGxhY2U=');$zym_decrypt['���ċ�ľ��־��������Ô�î֔���Ď']=base64_decode('ZXhwbG9kZQ==');$zym_decrypt['��î��������������������������î']=base64_decode('c2F2ZVNldHRpbmc=');$zym_decrypt['֮���Îċ����Ĉ�È��������������']=base64_decode('c2VyaWFsaXpl');$zym_decrypt['�Î־���־���Į��֔�Ď֮�ï�����']=base64_decode('dW5zZXJpYWxpemU=');$zym_decrypt['����֯È���Ë���å��֋��þ������']=base64_decode('c2hvd21zZw=='); ?>
<?php
if(!$GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="播放器设置";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>首页</a></li>
<li><a href="index.php?mod=admin"><i class="icon fa fa-cog"></i>后台管理</a></li>
<li class="active"><a href="#"><i class="icon fa fa-cogs"></i>播放器设置</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');$my=isset($_POST['my'])?$_POST['my']:$_GET['my'];echo base64_decode('PGRpdiBjbGFzcz0iY29sLWxnLTggY29sLXNtLTEwIGNvbC14cy0xMiBjZW50ZXItYmxvY2siIHJvbGU9Im1haW4iPg==');if ($isadmin==1){if($_POST['type']=="edit"){$list =$_POST['list'];$list =$GLOBALS['zym_decrypt']['������������î��î���þ������å�'](array("\r\n", "\r", "\n"), "[br]", $list);$match=$GLOBALS['zym_decrypt']['���ċ�ľ��־��������Ô�î֔���Ď']("[br]",$list);$music=array();foreach($match as $val){if($val=='')continue;$array=$GLOBALS['zym_decrypt']['���ċ�ľ��־��������Ô�î֔���Ď']('|',$val);$data['name']=$array[0];$data['id']=$array[1];$music[]=$data;}$GLOBALS['zym_decrypt']['��î��������������������������î'](base64_decode('bXVzaWNfbGlzdA=='), $GLOBALS['zym_decrypt']['֮���Îċ����Ĉ�È��������������']($music));$CACHE->clear();exit(base64_decode('PHNjcmlwdCBsYW5ndWFnZT0iamF2YXNjcmlwdCI+YWxlcnQoJ+S/neWtmOaIkOWKnyEnKTtoaXN0b3J5LmdvKC0xKTs8L3NjcmlwdD4='));}else{$music=@$GLOBALS['zym_decrypt']['�Î־���־���Į��֔�Ď֮�ï�����']($conf['music_list']);$list='';foreach($music as $val){$list.=$val['name'].'|'.$val['id']."\r\n";}}?>
<div class="panel panel-primary">
<div class="panel-heading w h"><h3 class="panel-title">HTML5浮动播放器设置</h3></div><div class="panel-body box">
<form action="index.php?mod=musicset" method="post">
<input type="hidden" name="type" value="edit" />
<div class="form-group">
<label>歌单列表:</label><br>
<textarea class="form-control" name="list" rows="8"><?php echo $list?></textarea>
</div>
<div class="form-group text-right">
<button type="submit" class="btn btn-primary btn-block" id="save">保存</button>
</div>
</form>
<h5>歌单填写说明:</h5>
一行一首歌曲，可使用网易云音乐、虾米音乐、百度音乐和QQ音乐的歌曲。<br/>
网易ID需要在数字后面加上wy，虾米在后面加上xm，百度音乐在后面加上bd，QQ音乐在后面加上qq，比如网易音乐ID是26108693，那么加上wy就是26108693wy<br/>
格式：<br/>
<pre>歌曲名称|歌曲ID</pre>
例如：<br/>
<pre>秋殇别恋|1772313955xm
光辉岁月|22706999wy
无敌|0038RM350w8m1Vqq
倩女幽魂|13125209bd
</pre>
音乐ID可以在相应播放页面的地址栏中获得
</div></div>
<?php
}else {$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('后台管理登录失败。请以管理员身份 <a href="index.php?mod=login">重新登录</a>！',3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>