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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;