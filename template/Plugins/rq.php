<?php global $zym_decrypt;$zym_decrypt['�֮�����î����֯�þ��Į���֥����']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['����֯È���Ë���å��֋��þ������']=base64_decode('c2hvd21zZw==');$zym_decrypt['ïֈ֯����֮��ľ�ֈ�ľ�Î���È��']=base64_decode('dmlwZnVuY19jaGVjaw==');$zym_decrypt['���������ċ����֮�������������È']=base64_decode('ZGFkZHNsYXNoZXM='); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="空间刷人气";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>首页</a></li>
<li><a href="index.php?mod=qqlist">ＱＱ管理</a></li>
<li><a href="index.php?mod=list-qq&qq='.$_GET['qq'].'">'.$_GET['qq'].'</a></li>
<li class="active"><a href="#">空间刷人气</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTggY29sLXNtLTEwIGNvbC14cy0xMiBjZW50ZXItYmxvY2siIHJvbGU9Im1haW4iPg==');if($islogin==1){if(OPEN_SHUA==0){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('当前站点未开启此功能。',2);}$GLOBALS['zym_decrypt']['ïֈ֯����֮��ľ�ֈ�ľ�Î���È��'](base64_decode('cnE='));$qq=$GLOBALS['zym_decrypt']['���������ċ����֮�������������È']($_GET['qq']);if(!$qq){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('参数不能为空！');}$row=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$qq}' limit 1");if($row['uid']!=$uid && $isadmin==0){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('你只能操作自己的QQ哦！');}if(!isset($_SESSION['rqcount']))$_SESSION['rqcount']=0;if($_SESSION['rqcount']>100 && $isadmin==0){$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������']('你的刷人气次数已超配额，请明天再来！');}$result=$DB->query("SELECT * from ".DBQZ."_qq WHERE status='1' order by rand() limit 50");$arr=array();while($row=$DB->fetch($result)){$arr[]=$row;}$gls=$DB->count("SELECT count(*) from ".DBQZ."_qq WHERE 1");?>
<script>
$(document).ready(function() {
	$('#startcheck').click(function(){
		$('#load').html('检测中');
		var self=$(this);
		if (self.attr("data-lock") === "true") return;
			else self.attr("data-lock", "true");
		var touin,num=0;
		$(".nostart").each(function(){
			var checkself=$(this),
				qid=checkself.attr('qid');
			checkself.html("<img src='images/load.gif' height=25>")
			var url="<?php echo $siteurl ?>qq/api/rq.php";
			xiha.postData(url,'uin=<?php echo $qq ?>&cell=<?php echo $cell ?>&qid='+qid, function(d) {
				if(d.code ==0){
					checkself.removeClass('nostart');
					checkself.html("<font color='green'>已刷人气</font>");
					$('#load').html(d.msg);
					num = $('#liked').text();
					num=parseInt(num);
					num++;
					$('#liked').text(num);
				}else{
					checkself.html("<font color='red'>失败</font>");
				}
			});
			num++;
			//return false;
		});
		if(num<1) $('#load').html('没有待刷人气的QQ');
		self.attr("data-lock", "false");
	});
	
});
var xiha={
	postData: function(url, parameter, callback, dataType, ajaxType) {
		if(!dataType) dataType='json';
		$.ajax({
			type: "POST",
			url: url,
			async: true,
			dataType: dataType,
			json: "callback",
			data: parameter,
			success: function(data) {
				if (callback == null) {
					return;
				} 
				callback(data);
			},
			error: function(error) {
//				alert('创建连接失败');
			}
		});
	}
}
</script>

<div class="panel panel-primary">
	<div class="panel-heading w h">
		<h3 class="panel-title" align="center">使用说明</h3>
	</div>
	<div class="panel-body box" align="left">
		<p style="color:red">利用平台内QQ号刷自己空间人气！<br>每次随机取出50个QQ，刷新本页面可以更换一批QQ。<br>刷人气前请先将自己的QQ空间权限设为所有人可访问！</p>
	</div>
</div>
	<div class="panel panel-primary">
		<div class="panel-heading w h">
			<h3 class="panel-title" align="center"><span class="btn btn-block" id="startcheck" style="color:white;">点此开始刷人气</span></h3>
		</div>
		<div class="panel-body box" align="left">
			<ul class="list-group" style="list-style:none;">
			
			<li class='list-group-item'>平台总共<span id="hyall"><?php echo $gls;?><span>个QQ,有<span id="liked"></span>个已成功刷人气！</li>
			<li class='list-group-item' style="color:red;text-align: center;font-weight: bold;" id="load">等待开启</li>
			<?php
 $liked=0;foreach($arr as $k=>$row){$uin=$row['qq'];if(isset($_SESSION["r_".$cell][$uin])){if($_SESSION["r_".$cell][$uin]==1){$liked=$liked+1;echo base64_decode('PGxpIGNsYXNzPSJsaXN0LWdyb3VwLWl0ZW0iPg==').$uin.'<span style="float:right;"><font color="green">已刷人气</font></span></li>';}else{echo base64_decode('PGxpIGNsYXNzPSJsaXN0LWdyb3VwLWl0ZW0iPg==').$uin.'<span style="float:right;" qid="'.$row['id'].'" class="nozan"><font color="red">失败</font></span></li>';}}else{echo base64_decode('PGxpIGNsYXNzPSJsaXN0LWdyb3VwLWl0ZW0iPg==').$uin.'<span style="float:right;" qid="'.$row['id'].'" class="nostart">未开启</span></li>';}}echo "<script>$('#liked').html('{$liked}');</script>";?>
			</ul>
		</div>
	</div>

<?php
}else{$GLOBALS['zym_decrypt']['����֯È���Ë���å��֋��þ������'](base64_decode('55m75b2V5aSx6LSl77yM5Y+v6IO95piv5a+G56CB6ZSZ6K+v5oiW6ICF6Lqr5Lu95aSx5pWI5LqG77yM6K+3PGEgaHJlZj0iaW5kZXgucGhwP21vZD1sb2dpbiI+6YeN5paw55m75b2VPC9hPu+8gQ=='),3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>