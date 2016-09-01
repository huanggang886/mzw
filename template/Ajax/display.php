<?php
error_reporting(0);
@header('Content-Type: text/html; charset=UTF-8');
if($_GET['list']==1) {
	$qq=$_GET['qq'];
?>
<div class="modal fade" align="left" id="qqjob" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">添加QQ挂机(其他类)任务</h4>
      </div>
      <div class="modal-body">
<?php
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'mqq\')"><img src="images/icon/mqq.ico" class="logo">添加手机QQ等级加速任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'qqmusic\')"><img src="images/icon/yqq.ico" class="logo">添加QQ音乐等级加速任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'yyrank\')"><img src="images/icon/yqq.ico" class="logo">添加QQ音乐刷排行榜任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'qipao\')"><img src="images/icon/iyouxi.ico" class="logo">添加QQ聊天百变气泡任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_edit(\''.$qq.'\',\'nick\')"><img src="images/icon/qzone.ico" class="logo">添加QQ随机改变昵称任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'qltree\')"><img src="images/icon/sweet.ico" class="logo">添加QQ情侣树挂机任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_edit(\''.$qq.'\',\'qlsend\')"><img src="images/icon/sweet.ico" class="logo">添加QQ情侣发送蜜语任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'dld\')"><img src="images/icon/dld.ico" class="logo">添加乐斗挂机签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'qqpet\')"><img src="images/icon/qqpet.ico" class="logo">添加ＱＱ宠物挂机任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'mc\')"><img src="images/icon/mc.ico" class="logo">添加ＱＱ牧场挂机任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'nc\')"><img src="images/icon/nc.ico" class="logo">添加ＱＱ农场挂机任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'zhongzhuan\')"><img src="images/icon/3gqq.ico" class="logo">添加QQ邮箱中转站自动续期任务</a>';
//echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'guaq\')"><img src="images/icon/qq.ico" class="logo">添加手机QQ挂机(机器人)任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_edit(\''.$qq.'\',\'3gqq\')"><img src="images/icon/3gqq.ico" class="logo">添加３ＧＱＱ挂机任务</a>';
?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
}elseif($_GET['list']==2) {
	$qq=$_GET['qq'];
?>
<div class="modal fade" align="left" id="qqjob" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">添加QQ挂机(空间类)任务</h4>
      </div>
      <div class="modal-body">
<?php
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_edit(\''.$qq.'\',\'zan\')"><img src="images/icon/zan.ico" class="logo">添加空间说说秒赞任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_edit(\''.$qq.'\',\'pl\')"><img src="images/icon/pl.ico" class="logo">添加空间说说秒评任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_edit(\''.$qq.'\',\'kjqd\')"><img src="images/icon/kjqd.ico" class="logo">添加空间自动签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_edit(\''.$qq.'\',\'shuo\')"><img src="images/icon/shuo.ico" class="logo">添加发表图片说说任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'ht\')"><img src="images/icon/ht.ico" class="logo">添加空间花藤挂机任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_edit(\''.$qq.'\',\'zfss\')"><img src="images/icon/zfss.ico" class="logo">添加好友说说转发任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'del\')"><img src="images/icon/del.ico" class="logo">添加空间说说删除任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'delly\')"><img src="images/icon/delly.ico" class="logo">添加空间留言删除任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'quantu\')"><img src="images/icon/quantu.ico" class="logo">添加空间说说圈图任务</a>';
?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
}elseif($_GET['list']==3) {
	$qq=$_GET['qq'];
?>
<div class="modal fade" align="left" id="qqjob" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">添加QQ挂机(互刷类)任务</h4>
      </div>
      <div class="modal-body">
<?php
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'zyzan\')"><img src="images/icon/zyzan.ico" class="logo">添加空间互赞主页任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'liuyan\')"><img src="images/icon/liuyan.ico" class="logo">添加空间互刷留言任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'gift\')"><img src="images/icon/gift.ico" class="logo">添加空间互送礼物任务</a>';
?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
}elseif($_GET['list']==4) {
	$qq=$_GET['qq'];
?>
<div class="modal fade" align="left" id="qqjob" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">添加QQ挂机(签到类1)任务</h4>
      </div>
      <div class="modal-body">
<?php
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_edit(\''.$qq.'\',\'qunqd\')"><img src="images/icon/qun.ico" class="logo">添加QQ群自动签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_edit(\''.$qq.'\',\'wenwen\')"><img src="images/icon/sogou.ico" class="logo">添加群问问自动签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'buluo\')"><img src="images/icon/buluo.ico" class="logo">添加兴趣部落签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'weiyun\')"><img src="images/icon/weiyun.ico" class="logo">添加微云自动签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'payqd\')"><img src="images/icon/iyouxi.ico" class="logo">添加钱包自动签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'scqd\')"><img src="images/icon/3gqq.ico" class="logo">添加书城自动签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'gameqd\')"><img src="images/icon/qqgame.ico" class="logo">添加游戏大厅签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'jfsc\')"><img src="images/icon/qzone.ico" class="logo">添加积分商城签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'wtjf\')"><img src="images/icon/qzone.ico" class="logo">添加网厅积分签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'qqllq\')"><img src="images/icon/qqllq.ico" class="logo">添加Ｑ浏积分签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'qqmgr\')"><img src="images/icon/qqmgr.ico" class="logo">添加ＱＱ管家签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'qd3366\')"><img src="images/icon/3366.ico" class="logo">添加3366自动签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'liuliang\')"><img src="images/icon/chen.ico" class="logo">添加自动领取流量豆任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'bookqd\')"><img src="images/icon/3gqq.ico" class="logo">添加小说书架签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'jpgame\')"><img src="images/icon/qqgame.ico" class="logo">添加精品页游签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'xinyue\')"><img src="images/icon/qqgame.ico" class="logo">添加心悦VIP签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'daoju\')"><img src="images/icon/qqgame.ico" class="logo">添加道聚城签到任务</a>';
?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
}elseif($_GET['list']==6) {
	$qq=$_GET['qq'];
?>
<div class="modal fade" align="left" id="qqjob" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">添加QQ挂机(签到类2)任务</h4>
      </div>
      <div class="modal-body">
<?php
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'vipqd\')"><img src="images/icon/chen.ico" class="logo">添加QQ会员自动签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'xing\')"><img src="images/icon/xing.png" class="logo">添加星钻签到抽奖任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'lzqd\')"><img src="images/icon/yqq.ico" class="logo">添加绿钻自动签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'gamevip\')"><img src="images/icon/lz.ico" class="logo">添加蓝钻自动签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'yqd\')"><img src="images/icon/yellow.ico" class="logo">添加黄钻自动签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'fzqd\')"><img src="images/icon/qqpet.ico" class="logo">添加粉钻自动签到任务</a>';
//echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'sqqqd\')"><img src="images/icon/mq.ico" class="logo">添加超Ｑ自动签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'video\')"><img src="images/icon/video.ico" class="logo">添加好莱坞会员签到任务</a>';
//echo '<a class="btn btn-default btn-block" href="#" onclick="qqjob_add(\''.$qq.'\',\'nianvip\')"><img src="images/icon/chen.ico" class="logo">添加年费会员抽奖任务</a>';
?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
}elseif($_GET['list']==7) {
	$qq=$_GET['qq'];
?>
<div class="modal fade" align="left" id="qqjob" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">添加ＱＱ代刷类任务</h4>
      </div>
      <div class="modal-body">
<?php
echo '<a class="btn btn-default btn-block" href="index.php?mod=shua&func=rq&qq='.$qq.'"><img src="images/icon/qzone.ico" class="logo">添加空间人气代刷任务</a>';
echo '<a class="btn btn-default btn-block" href="index.php?mod=shua&func=card&qq='.$qq.'"><img src="images/icon/mqq.ico" class="logo">添加名片赞代刷任务</a>';
echo '<a class="btn btn-default btn-block" href="index.php?mod=shua&func=card2&qq='.$qq.'"><img src="images/icon/mqq.ico" class="logo">添加名片赞快刷任务</a>';
echo '<a class="btn btn-default btn-block" href="index.php?mod=shua&func=zyzan&qq='.$qq.'"><img src="images/icon/zyzan.ico" class="logo">添加主页赞代刷任务</a>';
echo '<a class="btn btn-default btn-block" href="index.php?mod=shua&func=liuyan&qq='.$qq.'"><img src="images/icon/liuyan.ico" class="logo">添加空间留言代刷任务</a>';
?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
}elseif($_GET['list']==11) {
	$qq=$_GET['qq'];
?>
<div class="modal fade" align="left" id="qqjob" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">其它QQ小工具</h4>
      </div>
      <div class="modal-body">
<?php
echo '<a class="btn btn-default btn-block" href="index.php?mod=face&qq='.$qq.'" target="_blank"><img src="images/icon/mqq.ico" class="logo">QQ百变头像</a>';
echo '<a class="btn btn-default btn-block" href="index.php?mod=nick&qq='.$qq.'" target="_blank"><img src="images/icon/mqq.ico" class="logo">QQ百变昵称</a>';
echo '<a class="btn btn-default btn-block" href="index.php?mod=qzmusic&qq='.$qq.'" target="_blank"><img src="images/icon/yqq.ico" class="logo">空间背景音乐查询</a>';
echo '<a class="btn btn-default btn-block" href="index.php?mod=friend&qq='.$qq.'" target="_blank"><img src="images/icon/qzone.ico" class="logo">批量添加好友</a>';
echo '<a class="btn btn-default btn-block" href="index.php?mod=group&qq='.$qq.'" target="_blank"><img src="images/icon/qun.ico" class="logo">提取群成员</a>';
echo '<a class="btn btn-default btn-block" href="index.php?mod=groupshare&qq='.$qq.'" target="_blank"><img src="images/icon/qun.ico" class="logo">下载群文件</a>';
?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
}elseif($_GET['list']==8) {
	$url=$_GET['url'];
?>
<div class="modal fade" align="left" id="showresult" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">手动执行测试</h4>
      </div>
      <div class="modal-body">
	  <div id="load" style="text-align:center;"><img src="images/load.gif" height="25">正在加载...</div>
<iframe src="<?php echo $url;?>" frameborder="0" scrolling="auto" seamless="seamless" width="100%"  onload="$('#load').hide();"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
}elseif($_GET['list']==5) {
	$sysid=$_GET['sys'];
?>

<div class="modal fade" align="left" id="signer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">添加网站签到任务</h4>
      </div>
      <div class="modal-body">
<?php
echo '<a class="btn btn-default btn-block" href="#" onclick="signjob_edit(\'klqd\')"><img src="images/icon/kelink.ico" class="logo">添加柯林自动签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="signjob_edit(\'klol\')"><img src="images/icon/kelink.ico" class="logo">添加柯林挂积时任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="signjob_edit(\'dzsign\')"><img src="images/icon/discuz.ico" class="logo">添加Discuz自动签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="signjob_edit(\'dzdk\')"><img src="images/icon/discuz.ico" class="logo">添加Discuz自动打卡任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="signjob_edit(\'dztask\')"><img src="images/icon/discuz.ico" class="logo">添加Discuz任务助手任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="signjob_edit(\'dzol\')"><img src="images/icon/discuz.ico" class="logo">添加Discuz挂积时任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="signjob_edit(\'pwsign\')"><img src="images/icon/pw.ico" class="logo">添加phpwind9自动签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="signjob_edit(\'pw2sign\')"><img src="images/icon/pw.ico" class="logo">添加phpwind8自动签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="signjob_edit(\'360yunpan\')"><img src="images/icon/360yunpan.ico" class="logo">添加360云盘签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="signjob_edit(\'xiami\')"><img src="images/icon/xiami.ico" class="logo">添加虾米音乐签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="signjob_edit(\'52pojie\')"><img src="images/icon/52pojie.ico" class="logo">添加吾爱破解签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="signjob_edit(\'fuliba\')"><img src="images/icon/fuliba.ico" class="logo">添加福利论坛签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="signjob_edit(\'ucsign\')"><img src="images/icon/uc.ico" class="logo">添加ＵＣ论坛签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="signjob_edit(\'3gwen\')"><img src="images/icon/3gwen.ico" class="logo">添加文网自动签到任务</a>';
echo '<a class="btn btn-default btn-block" href="#" onclick="signjob_edit(\'qiu\')"><img src="images/icon/qiu.ico" class="logo">添加球球大作战刷棒棒糖任务</a>';
?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
}elseif($_GET['list']==9) {
?>
<div class="modal fade" align="left" id="help" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">QQ挂机系统使用说明</h4>
      </div>
      <div class="modal-body">
首先添加一个QQ账号，添加完成后回到本页面，点击你的QQ号码进入任务列表，在任务列表里可以添加秒赞、秒评、自动说说、QQ机器人等QQ挂机服务。<br/>以后要经常来此页面更新失效的SID&SKEY。<br/>
<font color="blue">【关于不能赞与秒评说明】<br/>首先看看是否能手动点赞，如果自己手动都不能点赞，平台当然也不行(腾讯限制,会自动解除,最好把秒赞关了,一般半小时内会解除)。如果手动可以赞，平台不行，请检查skey是否失效，如果没有失效，就强制更新下skey即可！秒评建议大家不要开启，容易被腾讯禁言！</font>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
}elseif($_GET['list']==10) {
?>
<div class="modal fade" align="left" id="bind" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">绑定其它网站账号</h4>
      </div>
      <div class="modal-body"><h5>绑定其它网站账号之后就可以使用相应账号快捷登录到本站了</h5><br/>
		<?php
			$oauth_option=explode("|",$_GET['option']);
			if(in_array('qqdenglu',$oauth_option))echo '<a class="btn btn-default btn-block" href="social.php?type=qqdenglu"><img src="assets/img/social/qqdenglu.png"></a>';
			if(in_array('baidu',$oauth_option))echo '<a class="btn btn-default btn-block" href="social.php?type=baidu"><img src="assets/img/social/baidu.png"></a>';
			if(in_array('sinaweibo',$oauth_option))echo '<a class="btn btn-default btn-block" href="social.php?type=sinaweibo"><img src="assets/img/social/sinaweibo.png"></a>';
			if(in_array('qqweibo',$oauth_option))echo '<a class="btn btn-default btn-block" href="social.php?type=qqweibo"><img src="assets/img/social/qqweibo.png"></a>';
			if(in_array('renren',$oauth_option))echo '<a class="btn btn-default btn-block" href="social.php?type=renren"><img src="assets/img/social/renren.png"></a>';
			if(in_array('kaixin',$oauth_option))echo '<a class="btn btn-default btn-block" href="social.php?type=kaixin"><img src="assets/img/social/kaixin.png"></a>';
		?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php }?>