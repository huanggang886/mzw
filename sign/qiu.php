<?php
/*
 *球球大作战刷邀请棒棒糖
*/
error_reporting(0);

$url=isset($_POST['url']) ? $_POST['url'] : $_GET['url'];
if($url){}else{echo"<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}
include '../includes/authcode.php';

$data=curl_get('http://cloud.25ak.com/mzapi/qiu.php?target='.urlencode($url).'&url='.$_SERVER['HTTP_HOST'].'&authcode='.$authcode);
echo $data;

function curl_get($url)
{
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; U; Android 4.4.1; zh-cn; R815T Build/JOP40D) AppleWebKit/533.1 (KHTML, like Gecko)Version/4.0 MQQBrowser/4.5 Mobile Safari/533.1');
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$content=curl_exec($ch);
curl_close($ch);
return($content);
}
?>