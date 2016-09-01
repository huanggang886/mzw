<?php
/*
反腾讯网址安全检测系统
Description:屏蔽腾讯电脑管家网址安全检测
Version:2.2
Author:消失的彩虹海
*/
//IP屏蔽
$iptables='977012992~977013247|977084416~977084927|1743654912~1743655935|1949957632~1949958143|2006126336~2006127359|2111446272~2111446527|3418570752~3418578943|3419242496~3419250687|3419250688~3419275263|3682941952~3682942207|3682942464~3682942719|3682986660~3682986663|1707474944~1707606015';
$remoteiplong=bindec(decbin(ip2long(real_ip())));
foreach(explode('|',$iptables) as $iprows){
	$ipbanrange=explode('~',$iprows);
	if($remoteiplong>=$ipbanrange[0] && $remoteiplong<=$ipbanrange[1])
		exit('欢迎使用！');
}
//HEADER特征屏蔽
if(preg_match("/manager/", strtolower($_SERVER['HTTP_USER_AGENT'])) || strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'en')!==false && strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'zh')===false || strpos($_SERVER['HTTP_USER_AGENT'], 'en')!==false && strpos($_SERVER['HTTP_USER_AGENT'], 'zh')===false || preg_match("/Windows NT 6.1/", $_SERVER['HTTP_USER_AGENT']) && $_SERVER['HTTP_ACCEPT']=='*/*' || preg_match("/vnd.wap.wml/", $_SERVER['HTTP_ACCEPT']) && preg_match("/Windows NT 5.1/", $_SERVER['HTTP_USER_AGENT']) || strpos($_SERVER['HTTP_REFERER'], 'urls.tr.com')!==false || empty($_SERVER['HTTP_USER_AGENT'])) {
	exit('欢迎使用！');
}