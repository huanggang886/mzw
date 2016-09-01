DROP TABLE IF EXISTS `{DBQZ}_user`;</explode>
create table `{DBQZ}_user` (
`userid` int(11) NOT NULL auto_increment,
`user` varchar(150) NOT NULL,
`pass` varchar(150) NOT NULL,
`social_uid` varchar(30) NULL,
`social_token` varchar(150) NULL,
`qqnum` int(11) NOT NULL default '0',
`qqjobnum` int(11) NOT NULL default '0',
`signjobnum` int(11) NOT NULL default '0',
`wzjobnum` int(11) NOT NULL default '0',
`date` datetime NOT NULL,
`last` datetime NOT NULL,
`zcip` VARCHAR( 15 ) DEFAULT NULL,
`dlip` VARCHAR( 15 ) DEFAULT NULL,
`vip` INT(1) NOT NULL DEFAULT '0',
`vipdate` date NULL,
`coin` INT(150) NOT NULL DEFAULT '0',
`email` varchar(150) NULL,
`qq` VARCHAR(20) NOT NULL DEFAULT '0',
`phone` VARCHAR(30) NULL,
`active` int(1) NULL,
`daili` int(1) NOT NULL DEFAULT '0',
`daili_rmb` VARCHAR(100) NOT NULL DEFAULT '0',
`mail_on` int(1) NOT NULL DEFAULT '1',
`vipsigntime` date NULL,
`peie` int(11) default 5,
`invite` int(11) NULL,
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `{DBQZ}_chat`;</explode>
CREATE TABLE `{DBQZ}_chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(150) DEFAULT NULL,
  `sj` varchar(150) DEFAULT NULL,
  `nr` varchar(500) DEFAULT NULL,
  `to` varchar(150) DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `{DBQZ}_info`;</explode>
create table `{DBQZ}_info` (
`sysid` int(11) NOT NULL,
`last` datetime NULL,
`times` int(150) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sysid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

INSERT INTO `{DBQZ}_info`(`sysid`, `last`) VALUES
('0', '0000-00-00 00:00:00'),
('301', '0000-00-00 00:00:00'),
('302', '0000-00-00 00:00:00'),
('303', '0000-00-00 00:00:00'),
('304', '0000-00-00 00:00:00'),
('305', '0000-00-00 00:00:00'),
('306', '0000-00-00 00:00:00'),
('307', '0000-00-00 00:00:00'),
('308', '0000-00-00 00:00:00'),
('401', '0000-00-00 00:00:00'),
('402', '0000-00-00 00:00:00'),
('501', '0000-00-00 00:00:00'),
('502', '0000-00-00 00:00:00'),
('503', '0000-00-00 00:00:00'),
('504', '0000-00-00 00:00:00'),
('505', '0000-00-00 00:00:00'),
('506', '0000-00-00 00:00:00'),
('507', '0000-00-00 00:00:00'),
('508', '0000-00-00 00:00:00'),
('509', '0000-00-00 00:00:00'),
('510', '0000-00-00 00:00:00'),
('511', '0000-00-00 00:00:00'),
('512', '0000-00-00 00:00:00'),
('513', '0000-00-00 00:00:00'),
('514', '0000-00-00 00:00:00'),
('515', '0000-00-00 00:00:00'),
('516', '0000-00-00 00:00:00');</explode>

DROP TABLE IF EXISTS `{DBQZ}_qq`;</explode>
create table `{DBQZ}_qq` (
`id` int(11) NOT NULL auto_increment,
`uid` int(11) NOT NULL,
`qq` varchar(20) NOT NULL,
`pw` varchar(250) NULL,
`sid` varchar(150) NULL,
`skey` varchar(150) NULL,
`pskey` VARCHAR(150) NULL,
`superkey` VARCHAR(150) NULL,
`supertoken` VARCHAR(150) NULL,
`qqlevel` VARCHAR(80) NULL,
`apiid` INT(4) NOT NULL default '0',
`status` INT(1) NOT NULL default '0',
`status2` int(4) NOT NULL default '0',
`time` datetime NULL,
`vip` INT(1) NOT NULL DEFAULT '0',
`vipdate` date NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `{DBQZ}_qqjob`;</explode>
create table `{DBQZ}_qqjob` (
`jobid` int(11) NOT NULL auto_increment,
`uid` int(11) NOT NULL,
`qq` varchar(20) NOT NULL,
`type` varchar(10) NOT NULL,
`sign` int(1) NOT NULL default '0',
`method` int(1) NOT NULL default '0',
`data` text NULL,
`lasttime` int(11) NOT NULL,
`nexttime` int(11) NOT NULL,
`times` varchar(110) NOT NULL default '0',
`pl` INT(11) NOT NULL DEFAULT '0',
`start` int(2) NOT NULL default '0',
`stop` int(2) NOT NULL default '24',
`zt` int(1) NOT NULL default '0',
`fail` int(1) NOT NULL default '0',
`sysid` INT(11) NOT NULL default '0',
`day` VARCHAR(30) NULL,
`result` text NULL,
 PRIMARY KEY (`jobid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `{DBQZ}_signjob`;</explode>
create table `{DBQZ}_signjob` (
`jobid` int(11) NOT NULL auto_increment,
`uid` int(11) NOT NULL,
`type` varchar(10) NOT NULL,
`data` text NULL,
`lasttime` int(11) NOT NULL,
`nexttime` int(11) NOT NULL,
`times` varchar(110) NOT NULL default '0',
`pl` INT(11) NOT NULL DEFAULT '0',
`start` int(2) NOT NULL default '0',
`stop` int(2) NOT NULL default '24',
`zt` int(1) NOT NULL default '0',
`sysid` INT(11) NOT NULL default '0',
`day` VARCHAR(30) NULL,
`result` text NULL,
 PRIMARY KEY (`jobid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `{DBQZ}_wzjob`;</explode>
create table `{DBQZ}_wzjob` (
`jobid` int(11) NOT NULL auto_increment,
`uid` int(11) NOT NULL,
`sysid` INT(11) NOT NULL default '0',
`type` INT(4) NOT NULL default '0',
`url` text NOT NULL,
`name` VARCHAR(255) NOT NULL default '网址挂刷任务',
`realip` varchar(32) DEFAULT NULL,
`usep` int(1) NULL,
`proxy` varchar(30) NULL,
`referer` varchar(250) NULL,
`useragent` varchar(250) NULL,
`post` int(1) NULL,
`postfields` text NULL,
`cookie` text NULL,
`pl` INT(150) NOT NULL DEFAULT '0',
`start` int(2) NOT NULL default '0',
`stop` int(2) NOT NULL default '24',
`zt` int(1) NOT NULL default '0',
`lasttime` int(11) NOT NULL,
`nexttime` int(11) NOT NULL,
`times` varchar(110) NOT NULL default '0',
`day` VARCHAR(30) NULL,
`result` text NULL,
 PRIMARY KEY (`jobid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `{DBQZ}_kms`;</explode>
CREATE TABLE `{DBQZ}_kms` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`kind` tinyint(1) NOT NULL DEFAULT '1',
`daili` int(11) NOT NULL DEFAULT '0',
`km` varchar(50) NULL,
`value` int(11) NOT NULL DEFAULT '0',
`isuse` tinyint(1) DEFAULT '0',
`user` varchar(50) DEFAULT NULL,
`usetime` datetime DEFAULT NULL,
`addtime` datetime DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `{DBQZ}_pay`;</explode>
CREATE TABLE `{DBQZ}_pay` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uid` int(11) NOT NULL,
`qq` varchar(20) NULL,
`type` varchar(20) NULL,
`orderid` varchar(64) NULL,
`addtime` datetime NULL,
`endtime` datetime NULL,
`shopid` int(11) NULL,
`name` varchar(64) NULL,
`num` int(11) NOT NULL DEFAULT '1',
`money` varchar(32) NULL,
`status` int(1) NOT NULL DEFAULT '0',
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `{DBQZ}_order`;</explode>
CREATE TABLE `{DBQZ}_order` (
`trade_no` varchar(64) NOT NULL,
`type` varchar(20) NULL,
`orderid` varchar(64) NULL,
`time` datetime NULL,
`name` varchar(64) NULL,
`money` varchar(32) NULL,
`status` int(1) NOT NULL DEFAULT '0',
 PRIMARY KEY (`trade_no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `{DBQZ}_invite`;</explode>
CREATE TABLE IF NOT EXISTS `{DBQZ}_invite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `reguid` int(11) NOT NULL,
  `regip` varchar(32) NOT NULL,
  `addtime` date NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `{DBQZ}_config`;</explode>
create table `{DBQZ}_config` (
`k` varchar(32) NOT NULL,
`v` text NULL,

PRIMARY KEY  (`k`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

INSERT INTO `{DBQZ}_config` (`k`, `v`) VALUES
('cache', ''),
('zc', '2'),
('max', '120'),
('pagesize', '30'),
('sitename', '忆梦云任务'),
('sitetitle', '-分布式秒赞秒评挂机平台'),
('keywords', '忆梦云任务,自动化平台,自动签到,QQ挂机,秒赞秒评,分布式云挂机系统,空间离线助手,离线秒赞网站,24小时离线秒赞,秒赞挂机网站'),
('description', '忆梦云任务，分布式云挂机系统，本平台拥有QQ秒赞秒评、自动发说说、转发说说、刷留言、互赞主页、QQ等级代挂、QQ群签到、部落签到、会员签到等上百种功能，同时平台为了提高用户体验，增大系统的可扩转性，我们使用了分布式任务调度'),
('copyright', 'Copyright <a href="./">忆梦</a> <i class="fa fa-copyright"></i> 2016'),
('gg', '<p class="bg-primary" style="background-color:#FF9900;padding: 3px;">
<img border="0" width="32" src="images/new.gif">本站VIP开放购买，VIP会员可享受所有功能，并能享有完美售后服务！VIP5元/月。充值卡：1元100忆梦币
</p>
<p class="bg-primary" style="background-color:#DFA5A4;padding: 3px;">
<img border="0" width="32" src="images/new.gif">★本平台免费送VIP体验卡密哦，<a href="index.php?mod=free" class="btn btn-danger btn-xs">点击领取试用VIP</a>｜<a href="http://www.917ka.com/list/2yp1u" target="_blank" class="btn btn-success btn-xs">立即购买VIP会员获尊贵身份</a>
</p>
<p class="bg-primary" style="background-color:#00D522;padding: 3px;">
<img border="0" width="32" src="images/new.gif">本站新增QQ等级代挂功能，包括电脑管家、手机QQ、电脑QQ、勋章墙等
</p>
<p class="bg-primary" style="background-color:#55D5A4;padding: 3px;">
<img border="0" width="32" src="images/new.gif">所有用户全部赠送100忆梦币。任务运行会消耗忆梦币，当忆梦币不足时会自动暂停任务。本站不定时清理过期QQ.谢谢合作.
</p>
<p class="bg-primary" style="background-color:#00D5FF;padding: 3px;">
<img border="0" width="32" src="images/new.gif">本平台火热招收代理中，代理只需20元，<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=350335362&site=qq&menu=yes" class="btn btn-primary btn-xs">站长QQ：350335362</a> <a href="index.php?mod=dlyz" class="btn btn-warning btn-xs">代理验证</a>
</p>'),
('bottom', '<table class="table table-bordered">
<tbody>
<tr height="50">
<td><button type="button" class="btn btn-block btn-warning"> <a href="http://www.25ak.com/" target="_blank"><span style="color:#ffffff;">♚忆梦云任务♚</span></a></button></td>
<td><button type="button" class="btn btn-block btn-warning"><a href="http://www.ymazz.com/" target="_blank"><span style="color:#ffffff;">♚亿梦之家♚</span></a></button></td>
</tr>
<tr height="50">
<td><button type="button" class="btn btn-block btn-danger"><a href="./" target="_blank"><span style="color:#ffffff;">♚友链♚</span></a></button></td>
<td><button type="button" class="btn btn-block btn-danger"><a href="./" target="_blank"><span style="color:#ffffff;">♚友链♚</span></a></button></td>
</tr>
<tr height="50">
<td><button type="button" class="btn btn-block btn-success"><a href="./" target="_blank"><span style="color:#ffffff;">♚友链♚</span></a></button></td>
<td><button type="button" class="btn btn-block btn-success"><a href="./" target="_blank"><span style="color:#ffffff;">♚友链♚</span></a></button></td>
</tr>
<tr height="50">
<td><button type="button" class="btn btn-block btn-info"><a href="./" target="_blank"><span style="color:#ffffff;">♚友链♚</span></a></button></td>
<td><button type="button" class="btn btn-block btn-info"><a href="./" target="_blank"><span style="color:#ffffff;">♚友链♚</span></a></button></td>
</tr></tbody>
</table>
<li class="list-group-item">域名:<a href="http://www.25ak.com/">www.25ak.com</a></li>
<li class="list-group-item"><font color="red">站长QQ：</font>350335362<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=350335362&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:350335362:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a><br>
<font color="red">用户QQ群：</font>523765512<a target="_blank" href="./qq/api/joingroup.php?qun=523765512"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="点击加群" title="点击加群"></a></li>
<li class="list-group-item">
<center><iframe width="280" scrolling="no" height="25" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=34&icon=1&num=3"></iframe></center>
</li>'),
('shop', '<blockquote><p>
<a class="btn btn-success btn-block" href="http://www.917ka.com/list/2yp1u" target="_blank">点击进入自助购买卡密</a><br/>
<font color="blue">卡密分为VIP卡、充值卡和配额卡，都是在这个页面购买并激活。<br/>
如有问题请联系站长QQ：<a href="http://wpa.qq.com/msgrd?v=3&uin=350335362&site=qq&menu=yes">350335362</a></font>
</p></blockquote>'),
('qqlevel', '<a class="btn btn-success btn-block" href="http://weixuan.18faka.com" target="_blank">点击进入购买微轩代挂卡密</a>'),
('footer', ''),
('interval', '50'),
('version', '7030'),
('switch', '1'),
('bulk', '10'),
('adminid', '1'),
('qqlevelapi', '1'),
('apiserver', '1'),
('qqapiid', '0'),
('qqloginid', '0'),
('show', '1分钟|1分钟|1分钟|1分钟|1分钟|5分钟|5分钟|6小时'),
('seconds', '0-0-0-0-0-0-0-0'),
('loop', '0-0-0-0-0-0-0-0'),
('cronkey', ''),
('jifen', '1'),
('rules', '100|100|1|2|3|10|5|5|2|50'),
('daili_rules', '100|5|15|30|50|66|1|3|5|8'),
('mail_name', 'net909@163.com'),
('mail_pwd', '123456'),
('mail_stmp', 'smtp.163.com'),
('mail_port', '25'),
('mail_ssl', '0'),
('siteurl', ''),
('vip_coin', '1'),
('coin_name', '忆梦币'),
('vip_func', 'zyzan|liuyan|gift|sz|rq|reply'),
('qd_jifen', '30'),
('qd_vipts', '0'),
('qd_coin', '10'),
('coin_tovip', '2000'),
('qqlimit', '10'),
('qqlimit2', '0'),
('app_version', '1.0'),
('app_log', ''),
('app_start_is', '0'),
('app_start', ''),
('getss', '0'),
('sleep', '0'),
('sleep2', '50'),
('sleep3', '18000'),
('localcron', '0'),
('open_qqol', '1'),
('open_sign', '1'),
('open_cron', '0'),
('open_chat', '1'),
('open_wall', '1'),
('open_othe', '0'),
('open_shua', '1'),
('open_shua2', '0'),
('open_leve', '1'),
('peie_open', '1'),
('peie_free', '5'),
('coin_topeie', '500'),
('mzjc_api', '0'),
('txprotect', '1'),
('ui_flat', '0'),
('limhplayer', '0'),
('ui_pjax', '0'),
('open_km', '1'),
('pay_api', '0'),
('buy_rules', '100|5|15|30|50|66|1|3|5|8'),
('ui_loading', '1'),
('ui_style', '1'),
('ui_style2', '3'),
('ui_index', '1'),
('ui_user', '0'),
('ui_bing', '0'),
('ui_bing_date', ''),
('ui_background', '0'),
('ui_background2', '1'),
('ui_backgroundurl', ''),
('ui_backmusic', ''),
('server_qzone', '1'),
('server_qsign', '1'),
('server_wsign', '1'),
('server_wz', '1'),
('runmodol', '0'),
('vipmode', '0'),
('addzan', '0'),
('oauth_open', '0'),
('oauth_act', '1'),
('cdnserver', '0');