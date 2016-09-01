<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['¯‹‹Ã¯¯®Ã¯ÃÀÁÃ”Ã‹®”Ã¥À¥ˆÃÁÖÄ‹ÖÖ']=base64_decode('cm91bmQ=');$zym_decrypt['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']=base64_decode('ZGFkZHNsYXNoZXM=');$zym_decrypt['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']=base64_decode('c2hvd21zZw==');$zym_decrypt['‹ÖÀ¥ˆıı®‹ÄÀÖ”¥ÃÃ®Ö¯Ö®¯À¥®¾ÃÃ']=base64_decode('Z2V0R1RL');$zym_decrypt['”Á®Ö¥ÃÖÀÖ¥¥ÃıÁÖÖ¥ıˆˆ¥ÄÄ®”¯®ÁÁ‹Ä¯']=base64_decode('Z2V0X2N1cmw=');$zym_decrypt['ı®”ıÁÁ®ÁÁ¥¾ÃÄ®¯¯®Ã”¥®ˆ¥Ö‹¥Ä”À®']=base64_decode('cHJlZ19tYXRjaA==');$zym_decrypt['”Á‹ÃÃ‹Á¾‹Ö¯ÃÁ¯‹ÃÃÀÖÖ¾¯®¯¾ıÄÀÖ¥']=base64_decode('c2l6ZQ==');$zym_decrypt['¾”ıÁ®Ö®ÄÄ¯¾ı‹ÖÁˆÖÖÃÃÁ”¥”Ã¾ÄÄ”Á”']=base64_decode('ZGF0ZQ=='); ?>
<?php
 if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$title="ä¸‹è½½ç¾¤æ–‡ä»¶";$breadcrumb='<li><a href="index.php?mod=user"><i class="icon fa fa-home"></i>é¦–é¡µ</a></li>
<li><a href="index.php?mod=qqlist">ï¼±ï¼±ç®¡ç†</a></li>
<li><a href="index.php?mod=list-qq&qq='.$_GET['qq'].'">'.$_GET['qq'].'</a></li>
<li class="active"><a href="#">ä¸‹è½½ç¾¤æ–‡ä»¶</a></li>';include TEMPLATE_ROOT.base64_decode('aGVhZC5waHA=');function size($size){if($size<1024)$size.='B';else {$size/=1024;if($size<1024)$size=$GLOBALS['zym_decrypt']['¯‹‹Ã¯¯®Ã¯ÃÀÁÃ”Ã‹®”Ã¥À¥ˆÃÁÖÄ‹ÖÖ']($size,2).'KB';else {$size/=1024;if($size<1024)$size=$GLOBALS['zym_decrypt']['¯‹‹Ã¯¯®Ã¯ÃÀÁÃ”Ã‹®”Ã¥À¥ˆÃÁÖÄ‹ÖÖ']($size,2).'MB';else {$size/=1024;if($size<1024)$size=$GLOBALS['zym_decrypt']['¯‹‹Ã¯¯®Ã¯ÃÀÁÃ”Ã‹®”Ã¥À¥ˆÃÁÖÄ‹ÖÖ']($size,2).'GB';}}}return $size;}echo base64_decode('PGRpdiBjbGFzcz0iY29sLW1kLTEyIGNlbnRlci1ibG9jayIgcm9sZT0ibWFpbiI+');if($islogin==1){$qq=$GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($_GET['qq']);if(!$qq){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('å‚æ•°ä¸èƒ½ä¸ºç©ºï¼');}$row=$DB->get_row("SELECT * FROM ".DBQZ."_qq WHERE qq='{$qq}' limit 1");if($row['uid']!=$uid && $isadmin==0){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('ä½ åªèƒ½æ“ä½œè‡ªå·±çš„QQå“¦ï¼');}if ($row['status2']!=1){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('SKEYå·²è¿‡æœŸï¼');}$sid=$row['sid'];$skey=$row['skey'];$gtk =$GLOBALS['zym_decrypt']['‹ÖÀ¥ˆıı®‹ÄÀÖ”¥ÃÃ®Ö¯Ö®¯À¥®¾ÃÃ']($skey);$cookie="uin=o0" . $qq . "; skey=" . $skey . ";";$ua='Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36';$url='http://qun.qzone.qq.com/cgi-bin/get_group_list?callbackFun=_GetGroupPortal&uin='.$qq.'&ua=Mozilla%2F5.0%20(Windows%20NT%206.3%3B%20WOW64%3B%20rv%3A25.0)%20Gecko%2F20100101%20Firefox%2F25.0&random=0.946546206453239&g_tk='.$gtk;$data =$GLOBALS['zym_decrypt']['”Á®Ö¥ÃÖÀÖ¥¥ÃıÁÖÖ¥ıˆˆ¥ÄÄ®”¯®ÁÁ‹Ä¯']($url,0,'http://qun.qzone.qq.com/group',$cookie,0,$ua);$GLOBALS['zym_decrypt']['ı®”ıÁÁ®ÁÁ¥¾ÃÄ®¯¯®Ã”¥®ˆ¥Ö‹¥Ä”À®'](base64_decode('L19HZXRHcm91cFBvcnRhbF9DYWxsYmFja1woKC4qPylcKVw7L2lz'),$data,$json);$arr =json_decode($json[1],true);if (!$arr){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('QQç¾¤åˆ—è¡¨è·å–å¤±è´¥ï¼');}elseif ($arr["code"] == -3000){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('SKEYå·²è¿‡æœŸï¼');}if(isset($_GET['groupid'])){$groupid=$GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($_GET['groupid']);$gtk =$GLOBALS['zym_decrypt']['‹ÖÀ¥ˆıı®‹ÄÀÖ”¥ÃÃ®Ö¯Ö®¯À¥®¾ÃÃ']($skey);$cookie="uin=o0" . $qq . "; skey=" . $skey . ";";$ua='Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36';$url='http://qun.qzone.qq.com/cgi-bin/group_share_list?uin='.$qq.'&groupid='.$groupid.'&bussinessid=0&r=0.1364387630019337&charset=utf-8&g_tk='.$gtk;$data =$GLOBALS['zym_decrypt']['”Á®Ö¥ÃÖÀÖ¥¥ÃıÁÖÖ¥ıˆˆ¥ÄÄ®”¯®ÁÁ‹Ä¯']($url,0,'http://qun.qzone.qq.com/group',$cookie,0,$ua);$GLOBALS['zym_decrypt']['ı®”ıÁÁ®ÁÁ¥¾ÃÄ®¯¯®Ã”¥®ˆ¥Ö‹¥Ä”À®'](base64_decode('L19DYWxsYmFja1woKC4qPylcKVw7L2lz'),$data,$json);$arrs =json_decode($json[1],true);if (!$arrs){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('QQç¾¤æ–‡ä»¶åˆ—è¡¨è·å–å¤±è´¥ï¼');}elseif ($arrs["code"] == -3000){$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ']('SKEYå·²è¿‡æœŸï¼');}}?>
<script>
function get_downurl(filepath,filename){
	$.ajax({
		type: "GET",
		url: "http://ptlogin2.qq.com/jump?uin=<?php echo $qq?>&skey=<?php echo $skey?>&u1=http://qun.qzone.qq.com/cgi-bin/group_share_get_downurl?uin=<?php echo $qq?>&groupid=<?php echo $groupid?>&pa="+filepath+"&charset=utf-8&g_tk=<?php echo $gtk?>",
		async: true,
		dataType: 'jsonp',
		jsonpCallback: "_Callback",
		success: function(arr) {
			if(arr.code==0)
				window.location.href=arr.data.url+"/"+filename;
			else
				alert(arr.message);
		},
		error: function(error) {
			alert('è·å–ä¸‹è½½åœ°å€å¤±è´¥');
		}
	});
}
</script>
<div class="panel panel-primary">
	<div class="panel-heading w h">
		<h3 class="panel-title" align="center">ä¸‹è½½ç¾¤æ–‡ä»¶</h3>
	</div>
	<div class="panel-body box" align="left">
		<form action="index.php" method="GET">
		<div class="form-group">
		<div class="input-group"><div class="input-group-addon">QQç¾¤åˆ—è¡¨</div>
		<input type="hidden" name="mod" value="groupshare">
		<input type="hidden" name="qq" value="<?php echo $qq ?>">
		<select name="groupid" class="form-control">
			<?php
 foreach($arr['data']['group'] as $row){echo '<option value="'.$row['groupid'].'" '.($groupid==$row['groupid']?'selected="selected"':NULL).'>'.$row['groupid'].'_'.$row['groupname'].'</option>';}?>
			</select>
		</div></div>
		<div class="form-group">
		<input type="submit" class="btn btn-primary btn-block" value="è·å–ç¾¤æ–‡ä»¶åˆ—è¡¨">
		</div>
		</form>
	</div>
</div>
<?php if($arrs){?>
<div class="panel panel-success">
	<div class="panel-heading w h">
		<h3 class="panel-title" align="center">ç¾¤æ–‡ä»¶åˆ—è¡¨(ç‚¹å‡»æ–‡ä»¶åä¸‹è½½)</h3>
	</div>
	<table class="table table-bordered box">
		<tbody>
			<tr><td colspan="5"><span style="color:silver;text-align:center;">è‹¥ä¸‹è½½å¤±è´¥è¯·å…ˆåˆ°<a href="http://ptlogin2.qq.com/jump?uin=<?php echo $qq?>&skey=<?php echo $skey?>&u1=http://qun.qzone.qq.com/group" target="_blank">ä¸‹è½½ä»»æ„ä¸€ä¸ªæ–‡ä»¶</span></td></tr>
			<tr>
			<td><span style="color:silver;"><b>æ–‡ä»¶å</b></span></td>
			<td><span style="color:silver;"><b>æ–‡ä»¶å¤§å°</b></span></td>
			<td class="hidden-xs"><span style="color:silver;"><b>ä¸Šä¼ è€…</b></span></td>
			<td class="hidden-xs"><span style="color:silver;"><b>ä¸Šä¼ æ—¶é—´</b></span></td>
			<td class="hidden-xs"><span style="color:silver;"><b>ä¸‹è½½æ¬¡æ•°</b></span></td>
			</tr>
			<?php
 foreach($arrs['data']['item'] as $row){echo '<tr><td><a onclick="get_downurl(\''.$row['filepath'].'\',\''.$row['filename'].'\');">'.$row['filename'].'</a></td><td>'.$GLOBALS['zym_decrypt']['”Á‹ÃÃ‹Á¾‹Ö¯ÃÁ¯‹ÃÃÀÖÖ¾¯®¯¾ıÄÀÖ¥']($row['uploadsize']).'</td><td class="hidden-xs"><a href="http://user.qzone.qq.com/'.$row['uploaduin'].'" title="'.$row['uploaduin'].'" target="_blank">'.$row['uploadnick'].'</a></td><td class="hidden-xs">'.$GLOBALS['zym_decrypt']['¾”ıÁ®Ö®ÄÄ¯¾ı‹ÖÁˆÖÖÃÃÁ”¥”Ã¾ÄÄ”Á”']("Y-m-d H:i:s",$row['createtime']).'</td><td class="hidden-xs">'.$row['downloadtimes'].'</td></tr>';}?>
		</tbody>
	</table>
</div>
<?php
}}else{$GLOBALS['zym_decrypt']['¥®‹‹Ö¯Ãˆ®ÁÀÃ‹”¾ÃÃ¥ÃÃÖ‹®ÃÃ¾¾®¯ÁˆÄ'](base64_decode('55m75b2V5aSx6LSl77yM5Y+v6IO95piv5a+G56CB6ZSZ6K+v5oiW6ICF6Lqr5Lu95aSx5pWI5LqG77yM6K+3PGEgaHJlZj0iaW5kZXgucGhwP21vZD1sb2dpbiI+6YeN5paw55m75b2VPC9hPu+8gQ=='),3);}include TEMPLATE_ROOT.base64_decode('Zm9vdC5waHA=');?>