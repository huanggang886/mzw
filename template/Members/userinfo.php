<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['���֮����Ĕ�Ëֈ��Ô�����֯�����']=base64_decode('dXNlcmdyb3Vw'); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="用户资料";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>首页</a></li>
<li class="active"><a href="#"><i class="icon fa fa-user"></i>用户资料</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLWxnLTYgY29sLW1kLTggY29sLXNtLTEwIGNvbC14cy0xMiBjZW50ZXItYmxvY2siIHJvbGU9Im1haW4iPg==');echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwgcGFuZWwtcHJpbWFyeSI+CjxkaXYgY2xhc3M9InBhbmVsLWhlYWRpbmcgdyBoIj48aDMgY2xhc3M9InBhbmVsLXRpdGxlIj7nlKjmiLfotYTmlpk8L2gzPjwvZGl2Pg==');echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwtYm9keSBib3giPg==');if($isvip==1)$vipstatus='到期时间:<font color="green">'.$row['vipdate'].'</font>';elseif($isvip==2)$vipstatus='<font color="green">永久 VIP</font>';else $vipstatus='<font color="red">非 VIP</font>';echo base64_decode('PGxpIGNsYXNzPSJsaXN0LWdyb3VwLWl0ZW0iPjxiPlVJRO+8mjwvYj4=').$row['userid'].'</li>
<li class="list-group-item"><b>用户名：</b>'.$row['user'].'</li>
<li class="list-group-item"><b>用户组：</b>'.$GLOBALS['zym_decrypt']['���֮����Ĕ�Ëֈ��Ô�����֯�����']().'</li>
<li class="list-group-item"><b>注册日期：</b>'.$row['date'].'</li>
<li class="list-group-item"><b>'.$conf['coin_name'].'：</b><font color="red">'.$row['coin'].'</font> [<a href="index.php?mod=shop&kind=1">在线充值</a>]</li>
<li class="list-group-item"><b>VIP状态：</b>'.$vipstatus.' [<a href="index.php?mod=shop&kind=2">开通/续费VIP</a>]</li>
<li class="list-group-item"><b>密码：</b>********* [<a href="index.php?mod=set&my=mm">修改密码</a>]</li>';if($conf['oauth_open'])echo '<li class="list-group-item"><b>社会化账号：</b>'.($row['social_uid']?'<font color="green">已绑定，你现在可以快捷登录到本站</font>':'<font color="red">未绑定</font> <a href="#" data-toggle="modal" data-target="#bind" class="btn btn-default btn-xs" id="bind">立即绑定</a>').'</li>';echo base64_decode('PC9kaXY+PC9kaXY+');echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwgcGFuZWwtcHJpbWFyeSI+CjxkaXYgY2xhc3M9InBhbmVsLWhlYWRpbmcgdyBoIj48aDMgY2xhc3M9InBhbmVsLXRpdGxlIj7kv67mlLnotYTmlpk8L2gzPjwvZGl2Pg==');echo base64_decode('PGRpdiBjbGFzcz0icGFuZWwtYm9keSBib3giPg==');echo base64_decode('PGZvcm0gYWN0aW9uPSJpbmRleC5waHA/bW9kPXVzZXJpbmZvIiBtZXRob2Q9InBvc3QiPgoJCTxkaXYgY2xhc3M9ImZvcm0tZ3JvdXAiPgoJCTxkaXYgY2xhc3M9ImlucHV0LWdyb3VwIj48ZGl2IGNsYXNzPSJpbnB1dC1ncm91cC1hZGRvbiI+6YKu566xPC9kaXY+CgkJCTxpbnB1dCB0eXBlPSJ0ZXh0IiBjbGFzcz0iZm9ybS1jb250cm9sIiBuYW1lPSJlbWFpbCIgdmFsdWU9Ig==').$row['email'].'" disabled>
			<div class="input-group-addon"><a href="index.php?mod=set&my=mail">修改</a></div>
		</div></div>
		<div class="form-group">
		<div class="input-group"><div class="input-group-addon">ＱＱ</div>
			<input type="text" class="form-control" name="qq" value="'.$row['qq'].'" placeholder="用于显示头像" disabled>
			<div class="input-group-addon"><a href="index.php?mod=set&my=qq">修改</a></div>
		</div></div>
		<div class="form-group">
		<div class="input-group"><div class="input-group-addon">手机</div>
			<input type="text" class="form-control" name="phone" value="'.$row['phone'].'" disabled>
			<div class="input-group-addon"><a href="index.php?mod=active">绑定</a></div>
		</div>
		</div>';echo base64_decode('PC9kaXY+PC9kaXY+');?>
<script>
$(document).ready(function(){
	$("#bind").click(function(){
		htmlobj=$.ajax({url:"template/Ajax/display.php?list=10&option=<?php echo $conf['oauth_option']?>",async:false});
	$("#myDiv").html(htmlobj.responseText);
});
});
</script>
<?php
include TEMPLATE_ROOT."foot.php";?>