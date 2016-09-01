<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀýÃÃÃ®ˆŽ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃýÖ¥Ž”ýÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['”¾ˆÃÃýˆÁÖ¯ý¾‹ÁÀÖÖÄ¥¥ÖÀÖÖˆˆˆ®ŽÖÄÄ']=base64_decode('aXNfbnVtZXJpYw==');$zym_decrypt['Ž¯¯”‹¯¯¾®¥Ã”®ÄýÁ¥¯”Ãˆ¥ŽÃ‹Ž”®¯¾ˆ®']=base64_decode('aGVhZGVy');$zym_decrypt['”Á®Ö¥ÃÖÀÖ¥¥ÃýÁÖÖ¥ýˆˆ¥ÄÄ®”¯®ÁÁ‹Ä¯']=base64_decode('Z2V0X2N1cmw=');$zym_decrypt['¾”ýÁ®Ö®ÄÄ¯Ž¾ý‹ÖÁˆÖÖÃÃÁ”¥”Ã¾ÄÄ”Á”']=base64_decode('ZGF0ZQ==');$zym_decrypt['¯ý®ˆ””‹ÃÖÀÄ”ÖÃ¥Ä¾Ã”ÃÄˆÃÃ‹ˆÖÁ®¯®Ö']=base64_decode('Z2V0X3Fxbmljaw==');$zym_decrypt['®¥ÃÄý®¾ŽÃ®ÖÖŽÄÃ¥ŽÃÃˆýý¾ÄÁŽ¾ŽÃÀŽ‹']=base64_decode('cmFuZA=='); ?>
<?php
if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀýÃÃÃ®ˆŽ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃýÖ¥Ž”ýÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$uin=$GLOBALS['zym_decrypt']['”¾ˆÃÃýˆÁÖ¯ý¾‹ÁÀÖÖÄ¥¥ÖÀÖÖˆˆˆ®ŽÖÄÄ']($_GET['q'])?$_GET['q']:'0';@$GLOBALS['zym_decrypt']['Ž¯¯”‹¯¯¾®¥Ã”®ÄýÁ¥¯”Ãˆ¥ŽÃ‹Ž”®¯¾ˆ®'](base64_decode('Q29udGVudC1UeXBlOiB0ZXh0L2h0bWw7IGNoYXJzZXQ9VVRGLTg='));?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $uin?>-ç§’èµžè®¤è¯-<?php echo $conf['sitename']?></title>
<meta name="keywords" content="ç¦»çº¿CQY,<?php echo $uin?>,<?php echo $uin?>ç§’èµžéªŒè¯"/>
<meta name="description" content="<?php echo $config['web_name']?>"/>
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="http://clouds.odata.cc/static/search.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
</head>
<?php
$result=$DB->query("select * from ".DBQZ."_qq where qq='$uin' and status2='1' limit 1");if($row =$DB->fetch($result)){$gtk=getGTK($row['pskey']);$url='http://mobile.qzone.qq.com/list?g_tk='.$gtk.'&res_attach=att%3D0&format=json&list_type=shuoshuo&action=0&res_uin='.$row['qq'].'&count=5';$cookie='uin=o0'.$row['qq'].'; skey='.$row['skey'].'; p_skey='.$row['pskey'].'; p_uin=o0'.$row['qq'].';';$json=$GLOBALS['zym_decrypt']['”Á®Ö¥ÃÖÀÖ¥¥ÃýÁÖÖ¥ýˆˆ¥ÄÄ®”¯®ÁÁ‹Ä¯']($url,0,'http://mobile.qzone.qq.com/infocenter?g_ut=3&g_f=6676',$cookie);$arr=json_decode($json,true);$zan=0;if($arr=$arr['data']['vFeeds']){foreach($arr as $new){if($new['like']['num']>$zan)$zan=$new['like']['num'];}}?>
<body data-focus="1">
<div class="container mm-page">
	<div class="content">
		<div class="user-profile1 text-center">
			<img src="//q1.qlogo.cn/g?b=qq&nk=<?php echo $uin?>&s=100&t=<?php echo $GLOBALS['zym_decrypt']['¾”ýÁ®Ö®ÄÄ¯Ž¾ý‹ÖÁˆÖÖÃÃÁ”¥”Ã¾ÄÄ”Á”']("Ymd")?>" title="ã€QQï¼š<?php echo $uin?>ã€‘å·²èŽ·å¾—<?php echo $conf['sitename']?>æƒå¨è®¤è¯">
			<h3><?php echo $GLOBALS['zym_decrypt']['¯ý®ˆ””‹ÃÖÀÄ”ÖÃ¥Ä¾Ã”ÃÄˆÃÃ‹ˆÖÁ®¯®Ö']($uin);?></h3>
			<ul class="list-unstyled list-inline">
				<li><a href="./" target="_blank" title="è¯¥QQæ¥è‡ª<?php echo $conf['sitename']?>"><span><i class="fa"></i></span></a></li>
			</ul>
			<p>
				æ‚¨å½“å‰æŸ¥çœ‹çš„QQ,æ­£äº«å—<a href="./"><?php echo $conf['sitename']?></a>ç³»ç»Ÿè®¤è¯
			</p>
			<a class="p-btn" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $row['qq']?>&site=qq&menu=yes" target="_blank">ç‚¹å‡»èŠå¤©</a>
			<a class="p-btn" href="http://user.qzone.qq.com/<?php echo $row['qq']?>" target="_blank">è¿›å…¥ç©ºé—´</a>
		</div>
		<div class="twitter-box">
			<div class="twitter-box-head">
				<h3>åŸºæœ¬ä¿¡æ¯</h3>
				<div class="twitts-stat">
					<div class="twitts-stat-grid">
						<span>åº•èµžæ•°é‡</span>
						<label>
						<?php echo $zan?>
						</label>
					</div>
					<div class="twitts-stat-grid">
						<span>QQå·ç </span>
						<label><?php echo $row['qq']?></label>
					</div>
					<div class="twitts-stat-grid">
					<span>æ˜¯å¦ç§’èµž</span>
					<label>æ˜¯</label>
					</div>
					<div class="clearfix">
					</div>
				</div>
			</div>
			<script type="text/javascript" src="http://clouds.odata.cc/static/jquery.easy-ticker.js?r=<?php echo $GLOBALS['zym_decrypt']['®¥ÃÄý®¾ŽÃ®ÖÖŽÄÃ¥ŽÃÃˆýý¾ÄÁŽ¾ŽÃÀŽ‹']()?>"></script>
			<script type="text/javascript">
							$(document).ready(function(){
								$('#demo').hide();
								$('.vticker').easyTicker();
							});
							</script>
			<div class="latest-tweets-box">
				<div class="vticker" style="display: block; position: relative; height: 134px; overflow: hidden;">
					<ul style="position: absolute; margin: 0px; top: 0px;">
						<?php
 $result=$DB->query("select * from ".DBQZ."_qq order by id limit 10");while($qq =$DB->fetch($result)){?>
						<li style="display: block; margin: 0px;">
						<p style="margin:0px;">
							æ­å–œ<a href="?q=<?php echo $qq['qq']?>" target="_blank">QQ:<?php echo $qq['qq']?></a>,åŠ å…¥<?php echo $conf['sitename']?>è®¤è¯ï¼
						</p>
						<span style="margin: 0px;"><?php echo $qq['date']?></span></li>
						<?php
 }?>
					</ul>
				</div>
			</div>
		</div>
                 <div class="social-tags">
			<h4>ç§’èµžè®¤è¯æŸ¥è¯¢</h4>
			<div class="newsletter clearfix">
                <div class="wrap">
                                     <div class="newsletter-form clearfix">
                       

       <div class="container">
       <form action="index.php" method="get"><input type="hidden" name="mod" value="search">
<input name="q" onkeyup="value=value.replace(/[^1234567890-]+/g,'')" placeholder="è¾“å…¥è¦æŸ¥è¯¢çš„QQå·ç " class="form-control" type="text">
      

<br><p style="text-align:center;"><button type="submit" class="p-btn" align="center">ç§’èµžè®¤è¯æŸ¥è¯¢</button></p>


</form>
  
                  </div>
                    <br><p style="text-align:center;"><span style="color:#3AACF9;">ä»…æ”¯æŒæŸ¥è¯¢åœ¨æœ¬å¹³å°å¼€å¯ç§’èµžçš„ç”¨æˆ·ï¼</span></p>
                </div>
  
		</div>
		<div class="copy-right">
			<p>
				Â©2016 <a href="./"><?php echo $conf['sitename']?></a>
			</p>
		</div>
	</div>
</div>
</body>
<?php
}else{?>
<body data-focus="1">
<div class="container mm-page">
	<div class="clearfix">
	</div>
	<div class="content">
		<div class="col-3-grid-3 alert-box text-center">
			<img src="http://clouds.aliapp.com/static/qq.png" title="è¯¥QQæœªåŠ å…¥æœ¬ç«™è®¤è¯ç³»ç»Ÿ">
			<h3>æ§½ç³•,ç³»ç»Ÿæœªæ‰¾åˆ°</h3>
			<p>
				è¯¥QQæœªé€šè¿‡æˆ–æœªåŠ å…¥æœ¬ç«™è®¤è¯ç³»ç»Ÿ
			</p>
			<a class="a-alert" href="./">ç«‹é©¬åŠ å…¥</a>
		</div>
		<div class="copy-right">
			<p>
				Â©2016 <a href="./"><?php echo $conf['sitename']?></a>
			</p>
		</div>
	</div>
</div>
</body>
<?php
}?>
</html>