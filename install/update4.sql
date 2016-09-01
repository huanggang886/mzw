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
`name` VARCHAR( 255 ) NOT NULL default '网址挂刷任务',
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

DROP TABLE IF EXISTS `{DBQZ}_pay`;</explode>
CREATE TABLE `{DBQZ}_pay` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uid` int(11) NOT NULL,
`qq` char(20) NULL,
`orderid` char(64) NULL,
`addtime` datetime NULL,
`endtime` datetime NULL,
`name` char(64) NULL,
`text` char(255) NULL,
`money` char(32) NULL,
`state` int(1) NOT NULL DEFAULT '0',
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `{DBQZ}_site`;</explode>
create table `{DBQZ}_site` (
`id` int(11) NOT NULL auto_increment,
`db` varchar(20) NOT NULL,
`url` varchar(255) NULL,
`date` date NULL,
`active` INT(1) NOT NULL default '1',
`api` INT(1) NOT NULL default '0',
`note` text NULL,
 PRIMARY KEY (`id`),
 KEY (`db`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `{DBQZ}_domain`;</explode>
create table `{DBQZ}_domain` (
`db` varchar(20) NOT NULL,
`domain` varchar(100) NULL,
 PRIMARY KEY (`domain`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

ALTER TABLE  `{DBQZ}_user` ADD `social_uid` varchar(30) NULL,
ADD `social_token` varchar(150) NULL,
ADD `qqjobnum` int(11) NOT NULL default '0',
ADD `signjobnum` int(11) NOT NULL default '0',
ADD `wzjobnum` int(11) NOT NULL default '0';</explode>

ALTER TABLE  `{DBQZ}_qq` ADD `uid` int(11) NOT NULL,
ADD `vip` INT(1) NOT NULL DEFAULT '0',
ADD `vipdate` date NULL;</explode>

ALTER TABLE  `{DBQZ}_user` 
CHANGE `daili_qq` `qq` varchar(20) NULL;</explode>

INSERT INTO `{DBQZ}_config` (`k`, `v`) VALUES
('keywords', '彩虹云任务,自动化平台,自动签到,QQ挂机,秒赞秒评,分布式云挂机系统,空间离线助手,离线秒赞网站,24小时离线秒赞,秒赞挂机网站'),
('description', '彩虹云任务，分布式云挂机系统，本平台拥有QQ秒赞秒评、自动发说说、转发说说、刷留言、互赞主页、QQ等级代挂、QQ群签到、部落签到、会员签到等上百种功能，同时平台为了提高用户体验，增大系统的可扩转性，我们使用了分布式任务调度'),
('copyright', 'Copyright <a href="./">彩虹</a> <i class="fa fa-copyright"></i> 2016'),
('sleep2', '50'),
('sleep3', '18000'),
('localcron', '0'),
('ui_flat', '0'),
('limhplayer', '0'),
('ui_pjax', '0'),
('open_km', '1'),
('open_shua2', '0'),
('pay_api', '0'),
('buy_rules', '100|5|15|30|50|66|1|3|5|8'),
('ui_loading', '1'),
('ui_style', '1'),
('ui_style2', '3'),
('ui_index', '1'),
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
('qd_vipts', '1'),
('qd_coin', '10'),
('addzan', '0'),
('mail_ssl', '0'),
('oauth_open', '0'),
('oauth_act', '1');</explode>

UPDATE `{DBQZ}_config` set `v` ='<p class="bg-primary" style="background-color:#FF9900;padding: 3px;">
<img border="0" width="32" src="images/new.gif">本站VIP开放购买，VIP会员可享受所有功能，并能享有完美售后服务！VIP5元/月。充值卡：1元100彩虹币
</p>
<p class="bg-primary" style="background-color:#DFA5A4;padding: 3px;">
<img border="0" width="32" src="images/new.gif">★本平台免费送VIP体验卡密哦，<a href="index.php?mod=free" class="btn btn-danger btn-xs">点击领取试用VIP</a>｜<a href="http://www.917ka.com/list/2wW5u" target="_blank" class="btn btn-success btn-xs">立即购买VIP会员获尊贵身份</a>
</p>
<p class="bg-primary" style="background-color:#00D522;padding: 3px;">
<img border="0" width="32" src="images/new.gif">本站新增QQ等级代挂功能，包括电脑管家、手机QQ、电脑QQ、勋章墙等
</p>
<p class="bg-primary" style="background-color:#55D5A4;padding: 3px;">
<img border="0" width="32" src="images/new.gif">所有用户全部赠送100彩虹币。任务运行会消耗彩虹币，当彩虹币不足时会自动暂停任务。本站不定时清理过期QQ.谢谢合作.
</p>
<p class="bg-primary" style="background-color:#00D5FF;padding: 3px;">
<img border="0" width="32" src="images/new.gif">本平台火热招收代理中，代理只需20元，<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1277180438&site=qq&menu=yes" class="btn btn-primary btn-xs">站长QQ：1277180438</a> <a href="index.php?mod=dlyz" class="btn btn-warning btn-xs">代理验证</a>
</p>' where `k`='gg';</explode>

UPDATE `{DBQZ}_config` set `v` ='<table class="table table-bordered">
<tbody>
<tr height="50">
<td><button type="button" class="btn btn-block btn-warning"> <a href="http://www.qqzzz.net/" target="_blank"><span style="color:#ffffff;">♚彩虹云任务♚</span></a></button></td>
<td><button type="button" class="btn btn-block btn-warning"><a href="http://www.cccyun.cc/" target="_blank"><span style="color:#ffffff;">♚彩虹导航网♚</span></a></button></td>
</tr>
<tr height="50">
<td><button type="button" class="btn btn-block btn-danger"><a href="http://blog.cccyun.cc/" target="_blank"><span style="color:#ffffff;">♚缤纷彩虹天地♚</span></a></button></td>
<td><button type="button" class="btn btn-block btn-danger"><a href="http://tool.cccyun.cc/" target="_blank"><span style="color:#ffffff;">♚彩虹工具网♚</span></a></button></td>
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
<li class="list-group-item">域名:<a href="http://www.qqzzz.net/">www.qqzzz.net</a></li>
<li class="list-group-item"><font color="red">站长QQ：</font>1277180438<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1277180438&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:1277180438:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a><br>
<font color="red">用户QQ群：</font>326026548<a target="_blank" href="./qq/api/joingroup.php?qun=326026548"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="点击加群" title="点击加群"></a></li>
<li class="list-group-item">
<center><iframe width="280" scrolling="no" height="25" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=34&icon=1&num=3"></iframe></center>
</li>' where `k`='bottom';</explode>

UPDATE `{DBQZ}_config` set `v` ='' where `k`='footer';</explode>
UPDATE `{DBQZ}_config` set `v` ='30' where `k`='qd_jifen';</explode>
UPDATE `{DBQZ}_config` set `v` ='zyzan|liuyan|gift|sz|rq|reply' where `k`='vip_func';</explode>

INSERT INTO `{DBQZ}_info`(`sysid`, `last`) VALUES
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
('516', '0000-00-00 00:00:00');