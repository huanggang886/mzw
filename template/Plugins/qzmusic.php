<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['��������֯�������ĥ����ֈ�������']=base64_decode('aXNfbnVtZXJpYw==');$zym_decrypt['���֥���֥�����֥�����Į������į']=base64_decode('Z2V0X2N1cmw=');$zym_decrypt['���������֮��������֮������֥���']=base64_decode('cHJlZ19tYXRjaF9hbGw=');$zym_decrypt['�֯������֎��֮��ľ��֋�î������']=base64_decode('Y291bnQ=');$zym_decrypt['����֯È���Ë���å��֋��þ������']=base64_decode('c2hvd21zZw=='); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="空间背景音乐查询";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>首页</a></li>
<li><a href="index.php?mod=qqlist">ＱＱ管理</a></li>
<li><a href="index.php?mod=list-qq&qq='.$_GET['qq'].'">'.$_GET['qq'].'</a></li>
<li class="active"><a href="#">空间背景音乐</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTEyIiByb2xlPSJtYWluIj4=');if($islogin==1){?>
<div class="panel panel-primary">
	<div class="panel-heading w h">
		<h3 class="panel-title" align="center">使用说明</h3>
	</div>
	<div class="panel-body box" align="left">
		<p style="color:red">使用此功能可以获取任意QQ空间的背景音乐，同时可以将下载地址做为音乐外链使用。</p>
	</div>
</div>
<div class="panel panel-primary">
	<div class="panel-heading w h" style="background: #56892E;">
		<h3 class="panel-title" align="center">空间背景音乐查询</h3>
	</div>
	<ul align="center" class="list-group box" style="list-style:none;">
		<li class="list-group-item">
    <form action="index.php" method="get"><input type="hidden" name="mod" value="qzmusic">
    请输入要查询的QQ:<input type="text" class="form-control" name="qq" size="20"><br><input type="submit" class="btn btn-primary btn-block" value="查询">
    </form>
<br>
	</ul>
</div>
<div class="panel panel-primary box">
<?php
if(isset($_GET['qq'])){if($_GET['qq'] == ''){?>
<table class="table table-bordered table-striped">
<thead>
    <tr>
      <td colspan="2">查询结果：</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td colspan="2"><div class="alerte alert-error">请输入您要查询的QQ</div></td>
    </tr>
  </tbody>
</table>
<?php
 }elseif(!$GLOBALS['zym_decrypt']['��������֯�������ĥ����ֈ�������']($_GET['qq'])){?>
<table class="table table-bordered table-striped">
<thead>
    <tr>
      <td colspan="2">查询结果：</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td colspan="2"><div class="alerte alert-error">QQ必须为数字</div></td>
    </tr>
  </tbody>
</table>
<?php
 }else{$url =$GLOBALS['zym_decrypt']['���֥���֥�����֥�����Į������į']("http://qzone-music.qq.com/fcg-bin/cgi_playlist_xml.fcg?json=1&uin=".$_GET['qq']."&g_tk=5381");$GLOBALS['zym_decrypt']['���������֮��������֮������֥���'](base64_decode('QHhzb25nX25hbWVcOiIoLiopIkBVaQ=='),$url,$arr);$GLOBALS['zym_decrypt']['���������֮��������֮������֥���'](base64_decode('QHhxdXNpY19pZDooLiopLHhjdHlwZTooLiopLHhleHBpcmVfdGltZUBVaQ=='),$url,$xqusic);$GLOBALS['zym_decrypt']['���������֮��������֮������֥���'](base64_decode('QHhzb25nX3VybFw6JyguKiknQFVp'),$url,$arrurl);$GLOBALS['zym_decrypt']['���������֮��������֮������֥���'](base64_decode('QHhzaW5nZXJfbmFtZVw6IiguKikiQFVp'),$url,$singger);$n =$GLOBALS['zym_decrypt']['�֯������֎��֮��ľ��֋�î������']($arr[1]);?>
<table class="table table-bordered table-striped">
<thead>
    <tr>
      <td colspan="2"><?php echo $_GET['qq'];?> 的查询结果：</td>
    </tr>
       </thead>
<?php
 if($n == 0){?>
  <tbody>
    <tr>
      <td colspan="2"><div class="alerte alert-error">该QQ未设置背景音乐</div></td>
    </tr>
 </tbody>
<?php
 }else{?>
  <tbody>
    <tr>
      <td>歌曲名称：</td>
      <td>下载地址：</td>
    </tr>
  </tbody>
<?php
 for($i=0;$i<$n;$i++){$name=mb_convert_encoding($arr[1][$i], "UTF-8", "GB2312");$singer=mb_convert_encoding($singger[1][$i], "UTF-8", "GB2312");?>
  <thead>
    <tr>
      <td><?php echo $name .' - '. $singer?></td>
      <td><div class="btn-group"><a href="http://stream.qqmusic.tc.qq.com/<?php echo $xqusic[1][$i]?>.m4a?fromtag=6" target="_blank">下载地址1</a>｜<a href="<?php echo $arrurl[1][$i]?>" target="_blank">下载地址2</a></div></td>
    </tr>
  </thead>
<?php
 }}?>
</table>
<?php
 }}?>
</div>

<?php
}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('登录失败，可能是密码错误或者身份失效了，请<a href="index.php?mod=login">重新登录</a>！',3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>