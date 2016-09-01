		<?php if($conf['marquee']) {?><!-- 底部 -->
		<div id="usage">
			<marquee scrollAmount="8" direction="left" Align="Middle" style="font-weight: bold;line-height: 40px;font-size: 20px;color: #177D06;">
				<?php echo $conf['marquee']?>
			</marquee >
		</div>
		<!-- End 底部 --><?php }?>
	
<div class="clearfix"></div>
<?php
if(!empty($conf['footer']))echo $conf['footer'];

/*if($conf['sjyl']==1)
{$txt=file(ROOT.'includes/content/content.db');
shuffle($txt);
echo $txt[0];}*/
?>
		</div></div>
	</div></div></div></div>
	<!-- start: JavaScript-->

	<!-- Vendor JS-->
	<script src="<?php echo $cdnserver?>assets/vendor/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="<?php echo $cdnserver?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo $cdnserver?>assets/plugins/pjax/pjax.js"></script>
	<script src="<?php echo $cdnserver?>assets/plugins/datepicker/WdatePicker.js"></script>

	<!-- Theme JS -->
	<script src="<?php echo $cdnserver?>assets/js/jquery.mmenu.min.js"></script>
	<script src="<?php echo $cdnserver?>assets/js/core.min.js?v=<?php echo VERSION?>"></script>
	<script src="<?php echo $cdnserver?>assets/js/ajaxfileupload.js"></script>

	<?php echo $footadd;?>

	<!-- end: JavaScript-->

<?php if($conf['ui_pjax'] || $conf['limhplayer']!=0){?>
<script type="text/javascript">
$(document).pjax('a[target!=_blank][pjax!=no][href!=#]', '.pjaxmain', {fragment:'.pjaxmain', timeout:5000});
$(document).on('pjax:send', function() { //pjax链接点击后显示加载动画；
    $(".colorful_loading_frame,.colorful_loading").css("display", "block");
});
$(document).on('pjax:complete', function() { //pjax链接加载完成后隐藏加载动画；
    $(".colorful_loading_frame,.colorful_loading").css("display", "none");
	$('#qqjob').modal('hide');
	$('#bind').modal('hide');
});
</script>
<?php }
if($conf['ui_loading']){?>
<div class="pjax_loading"></div>
<div class="colorful_loading_frame">
  <div class="colorful_loading"><i class="rect1"></i><i class="rect2"></i><i class="rect3"></i><i class="rect4"></i><i class="rect5"></i></div>
</div>
<?php }?>
<?php if($conf['limhplayer']==1||$conf['limhplayer']==2){?>
<link rel="stylesheet" href="<?php echo $cdnserver?>assets/Myhk_Player/style/player.css?v=<?php echo VERSION ?>">
<div id="wenkmPlayer">
	<div class="player">
		<div class="infos">
			<div class="songstyle"><i class="fa fa-music"></i> <span class="song"></span></div>
            <div class="timestyle"><i class="fa fa-clock-o"></i> <span class="time">00:00 / 00:00</span></div>
			<div class="artiststyle"><i class="fa fa-user"></i> <span class="artist"></span><span class="moshi"><i class="loop fa fa-random current"></i> 随机播放</span></div>
            <div class="artiststyle"><i class="fa fa-folder"></i> <span class="artist1"></span><span class="geci"></span></div>
		</div>
		<div class="control">
			<i class="loop fa fa-retweet" title="顺序播放"></i>
			<i class="prev fa fa-backward" title="上一首"></i>
			<div class="status">
				<b>
					<i class="play fa fa-play" title="播放"></i>
					<i class="pause fa fa-pause" title="暂停"></i>
				</b>
			</div>
			<i class="next fa fa-forward" title="下一首"></i>
			<i class="random fa fa-random current" title="随机播放"></i>
		</div>
		<div class="musicbottom">
			<div class="volume">
				<i class="mute fa fa-volume-off"></i>
				<i class="volumeup fa fa-volume-up"></i>
				<div class="progress">
					<div class="volume-on ts5">
						<div class="drag" title="音量"></div>
					</div>
				</div>
			</div>
			<div class="switch-playlist">
				<i class="fa fa-bars" title="播放列表"></i>
			</div>
            <div class="switch-ksclrc">
				<i class="fa fa-toggle-on" title="关闭歌词"></i>
			</div>
			<div class="switch-default">
				<i class="fa fa-refresh" title="切换默认专辑"></i>
			</div>
			<div class="switch-down">
				<a class="down"><i class="fa fa-cloud-download" title="歌曲下载"></i></a>
			</div>
		</div>
		<div class="cover"></div>
	</div>
	<div class="playlist">
		<div class="playlist-bd">
			<div class="album-list">
				<div class="musicheader"></div>
					<div class="list"></div>
			</div>
			<div class="song-list">
				<div class="musicheader"><span></span></div>
			<div class="list"><ul></ul></div>
			</div>
		</div>
	</div>
	<div class="switch-player">
		<i class="fa fa-angle-right" style="margin-top: 20px;"></i>
	</div>
</div>
<div id="wenkmTips"></div>
<div id="wenkmLrc"></div>
<div id="wenkmKsc"></div>
<script language="javascript" src="<?php echo $cdnserver?>assets/Myhk_Player/js/mousewheel.js"></script>
<script language="javascript" src="<?php echo $cdnserver?>assets/Myhk_Player/js/scrollbar.js"></script>
<script>
name='<?php echo $conf["sitename"]?>';
</script>
<script language="javascript" src="<?php echo $cdnserver?>assets/Myhk_Player/js/player.js?v=<?php echo VERSION ?>"></script>
<?php
}elseif($conf['limhplayer']==3){?>
<link rel="stylesheet" href="<?php echo $cdnserver?>assets/plugins/player/css/player.css"/>
<script type="text/javascript" src="<?php echo $cdnserver?>assets/plugins/player/js/player.js"></script>
<script>$(function(){$(".sl_conct").hover(function(){$(".sl_conct").css("right", "5px");},function(){$(".sl_conct").css("right", "-127px");});});</script>
<div class="sl_conct">
<ul>
<?php if($conf["musicid"]){?>
<div class="m_player m_player_folded" id="divplayer" role="application" onselectstart="return false" style="left: -540px;">
<iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=540 height=220 src="//music.163.com/outchain/player?type=0&id=<?php echo $conf["musicid"];?>&auto=1&height=430"></iframe>
<button type="button" class="folded_bt" title="点击收起" id="btnfold"></button>
<div class="play_list_frame" id="divplayframe" style="display: none ;filter:alpha(opacity=0);opacity:0;"></div>
</div>
<script></script>
<?php }?>
</ul>
</div>
<?php }?>
</body>
</html>