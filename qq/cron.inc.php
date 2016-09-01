<?php
error_reporting(0);
define('IN_CRONLITE', true);
define('IN_CRONJOB', true);
define('SYSTEM_ROOT', dirname(__FILE__).'/');
define('ROOT', dirname(SYSTEM_ROOT).'/');
define('TIMESTAMP', time());

if (function_exists("set_time_limit"))
{
	@set_time_limit(0);
}
if (function_exists("ignore_user_abort"))
{
	@ignore_user_abort(true);
}
header("content-Type: text/html; charset=utf-8");

if(strrpos($_SERVER['HTTP_REFERER'], 'vvvpan.cn'))exit('security error!');

if(defined("SAE_ACCESSKEY"))
include_once ROOT.'includes/sae.php';
else
include_once ROOT.'config.php';

date_default_timezone_set("PRC");
$date=date("Y-m-d H:i:s");
$t=date("H");

define('RUN_KEY',md5($dbconfig['user'].md5($dbconfig['pwd'])));
//连接数据库
include_once(ROOT."includes/db.class.php");
$DB=new DB($dbconfig['host'],$dbconfig['user'],$dbconfig['pwd'],$dbconfig['dbname'],$dbconfig['port']);

include ROOT.'includes/site.inc.php';

include_once(ROOT."includes/cache.class.php");
$CACHE=new CACHE();
$conf=$CACHE->pre_fetch();//获取系统配置

define('SYS_KEY',$conf['syskey']);
$rules=explode("|",$conf['rules']);
$vip_func=explode("|",$conf['vip_func']);

$scriptpath = str_replace('\\','/',$_SERVER['SCRIPT_NAME']);
$sitepath = substr($scriptpath, 0, strrpos($scriptpath, '/qq/'));
$siteurl = ($_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://').$_SERVER['HTTP_HOST'].$sitepath.'/';
if(!$siteurl)$siteurl = $conf['siteurl'];

include_once(ROOT."includes/signapi.php");
include_once(ROOT."includes/function.php");
include_once(ROOT."includes/qq.func.php");
include_once(ROOT."includes/member.php");

define("OPEN_OTHE", isset($conf['open_othe'])?$conf['open_othe']:1);
define("OPEN_SHUA", isset($conf['open_shua'])?$conf['open_shua']:1);
define("OPEN_LEVE", isset($conf['open_leve'])?$conf['open_leve']:1);
define("OPEN_SHUAR", isset($conf['open_shua2'])?$conf['open_shua2']:1);
?>