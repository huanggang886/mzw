<?php
//牧场挂机
require 'qq.inc.php';

$qq=isset($_POST['qq']) ? $_POST['qq'] : $_GET['qq'];
$sid=isset($_POST['sid']) ? $_POST['sid'] : $_GET['sid'];

if($qq && $sid){}else{echo"<font color='red'>输入不完整!<a href='javascript:history.back();'>返回重新填写</a></font>";exit;}

	//签到
	$mcurl = curl_get('http://mcapp.z.qq.com/mc/cgi-bin/wap_pasture_index?sid='.$sid.'&uin='.$qq.'&g_ut=2&source=qzone');
	curl_get('http://mcapp.z.qq.com/mc/cgi-bin/wap_pasture_index?sid='.$sid.'&uin='.$qq.'&g_ut=1&signin=1&yellow=1&optflag=2&pid=0&v=1');

 	if (preg_match("/清扫/",$mcurl)) { 
	 	preg_match_all('/num=*(.*)&type=2&pos=0">清扫*/i',$mcurl,$bb);
	 	$bb = $bb[1][0];
	 	curl_get("http://mcapp.z.qq.com/mc/cgi-bin/wap_pasture_help?sid={$sid}&g_ut=1&B_UID=0&num={$bb}&type=2&pos=0");
 	}
	if (preg_match("/饥饿/",$mcurl)) { 
		curl_get("http://mcapp.z.qq.com/mc/cgi-bin/wap_pasture_feed_food?sid={$sid}&g_ut=1&num=999");
	} 
	/*$wo = explode('窝(',$url);
	$wo = explode('/',$wo[1]);
	$wo1 = explode(')',$wo[1]);
	$peng = explode('棚(',$url);
	$peng = explode('/',$peng[1]);
	$peng1 = explode(')',$peng[1]);
	if ($wo[0] != $wo1[0]) {
		curl_get('http://mcapp.z.qq.com/mc/cgi-bin/wap_pasture_animal_buy?sid='.$sid.'&g_ut=1&number=1&cId='.$wid.'&flag=0');
	}
	if ($peng[0] != $peng1[0]) {
		curl_get('http://mcapp.z.qq.com/mc/cgi-bin/wap_pasture_animal_buy?sid='.$sid.'&g_ut=1&number=1&cId='.$pid.'&flag=0');
	}*/
	if (preg_match("/收获期/",$mcurl)) {
		preg_match_all('/期 <a[\s]+[^>]*href="*(.*)">收获<*/i',$mcurl,$sh);
		$shnum = count($sh[1]);
		if ($shnum > 2) $shnum = 2;
		for ($i = 0; $i < $shnum; $i++) curl_get($sh[1][$i]);

 	}
	if (preg_match("/生产期/",$mcurl)) {
		preg_match_all('/<a[\s]+[^>]*href="*(.*)">生产<*/i',$mcurl,$sh);
		$shnum = count($sh[1]);
		if ($shnum > 2) $shnum = 2;
		for ($i = 0; $i < $shnum; $i++) curl_get($sh[1][$i]);
	}

	if (preg_match("/剩余/",$mcurl)) {
		preg_match_all('/<a[\s]+[^>]*href="*(.*)">收获<*/i',$mcurl,$sh);
		$shnum = count($sh[1]);
		if ($shnum > 2) $shnum = 2;
		for ($i = 0; $i < $shnum; $i++) curl_get($sh[1][$i]);
	}


$resultStr='执行完毕。';

echo $resultStr;
?>