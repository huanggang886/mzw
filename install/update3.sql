ALTER TABLE  `{DBQZ}_user` ADD `vipdate` date NULL,
 ADD  `phone` VARCHAR(30) NULL,
 ADD  `active` int(1) NULL;
ALTER TABLE  `{DBQZ}_user` ADD `vip` INT(1) NOT NULL DEFAULT '0',
ADD `coin` INT(150) NOT NULL DEFAULT '0';
ALTER TABLE  `{DBQZ}_job` ADD  `day` VARCHAR(30) NULL,
MODIFY COLUMN `url` text NOT NULL;

CREATE TABLE `{DBQZ}_kms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kind` tinyint(1) NOT NULL DEFAULT '1',
  `km` varchar(50) NULL,
  `value` int(11) NOT NULL DEFAULT '0',
  `isuse` tinyint(1) DEFAULT '0',
  `user` varchar(50) DEFAULT NULL,
  `usetime` datetime DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `{DBQZ}_config` (`k`, `v`) VALUES
('cache', ''),
('vip_coin', '1'),
('coin_name', '彩虹币'),
('vip_func', ''),
('shop', '<p style="color:red">1、卡密分为充值卡、VIP卡和配额卡！<br>2、自助购买卡密:<a target="_blank" href="http://cron.917ka.com/">点击进入</a><br>3、购买卡密联系QQ:<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1277180438&site=qq&menu=yes">1277180438</a></p><br>4、<a href="index.php?mod=free">点此获取试用卡密</a>'),
('qqlimit', '10'),
('qqlimit2', '0'),
('app_version', '1.0'),
('app_log', ''),
('app_start_is', '0'),
('app_start', ''),
('getss', '0'),
('sleep', '0'),
('open_qqol', '1'),
('open_sign', '1'),
('open_cron', '1'),
('open_chat', '1'),
('open_wall', '1'),
('open_othe', '1'),
('open_shua', '1'),
('open_peie', '0'),
('peie_free', '5'),
('coin_topeie', '500'),
('mzjc_api', '0'),
('txprotect', '0');

INSERT INTO `{DBQZ}_config` (`k`, `v`) VALUES
('footer', '<br>Powered by <a href="http://www.cccyun.cn">彩虹</a>! V6.16 模板设计:<a href="http://zhizhe8.net/" target="_blank">Kenvix</a>'),
('mail_api', '0');

INSERT INTO `{DBQZ}_info`(`sysid`, `times`) VALUES
('9', '0'),
('10', '0'),
('11', '0'),
('12', '0'),
('13', '0'),
('14', '0'),
('15', '0'),
('16', '0');

REPLACE INTO `{DBQZ}_config` set `v` ='100|100|1|2|3|3|10|5' where `k`='rules';

REPLACE INTO `{DBQZ}_config` set `v` ='100|5|15|30|50|66|1|3|5|8' where `k`='daili_rules'