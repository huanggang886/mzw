<?php
/*邮箱发送配置*/

//SKEY失效提醒邮件
$mailconfig['skeytx']['sub']='QQ:'.$qq.' SID/SKEY过期提醒';

$mailconfig['skeytx']['msg']='<div id="contentDiv" onclick="getTop().preSwapLink(event, html);" style="font-size:14px;height:auto;padding:15px 15px 10px 15px;*padding:15px 15px 0 15px;overflow:visible;min-height:100px;_height:100px;" class=" body"><div id="mailContentContainer" style="font-size: 14px; padding: 0px; height: auto; font-family: lucida Grande, Verdana; margin-right: 170px;"><div style="width:700px; padding:30px; margin:0 auto"><div style="padding:15px 10px 10px 20px; border:1px solid #E9E9E9 "><a href="'.$siteurl.'" target="_blank"><img src="'.$siteurl.'/images/logo.png" width="170" height="42"></a></div><div style="font-size:12px; padding:20px 20px; font-family:Hiragino Sans GB,Microsoft YaHei,Helvetica Neue; color:#4e4e4e;border-left:1px solid #E9E9E9;border-right:1px solid #E9E9E9;">尊敬的&nbsp;'.$conf['sitename'].'&nbsp;用户：<br><br><p>您好。你在 '.$conf['sitename'].' ['.$_SERVER['HTTP_HOST'].'] <br>&nbsp;&nbsp;QQ: <font color="green">'.$qq.'</font> 的SID/SKEY已经过期，为了不影响你的正常使用，尽快到更新你的SID！</p><div style="width: 250px;height: 100px;font-size:12px;padding:20px 20px;font-family:Hiragino Sans GB,Microsoft YaHei,Helvetica Neue;color:#4e4e4e;border-left:1px solid #E9E9E9;border-right:1px solid #E9E9E9;border-top: 1px solid #E9E9E9;border-bottom: 1px solid #E9E9E9;"> <img src="http://q.qlogo.cn/headimg_dl?dst_uin='.$qq.'&spec=100" style="float: left;"><div style="float: right;"><p style="font-size: 15px;font-weight: bold;margin: 10px 0;">'.$qq.'</p><span style="background: #cf2e2e;color: #fff;padding: 2px 5px;border-radius: 5px;">SID/SKEY失效</span><br><span style="background: #d68a39;color: #fff;padding: 2px 4px;border-radius: 5px;">'.$date.'</span><br></div></div><div style="width: 270px;font-size:12px;padding: 5px 10px;font-family:Hiragino Sans GB,Microsoft YaHei,Helvetica Neue;color:#4e4e4e;border-left:1px solid #E9E9E9;border-right:1px solid #E9E9E9;border-bottom: 1px solid #E9E9E9;"><a href="'.$siteurl.'"><input type="submit" value="立即更新" style="color: #fff;background-color: #5cb85c;padding: 6px 110px;border: 1px solid transparent;border-radius: 5px;"></a></div><div style="font-size:12px; font-family:Hiragino Sans GB,Microsoft YaHei,Helvetica Neue; color:#959393;padding:20px 0px; "><p>这是一封系统自动发出的邮件，请不要直接回复，如您有任何疑问，请联系<a href="mailto:'.$conf['kfqq'].'@qq.com" style="color:#23B27E; cursor:pointer; text-decoration:none;" target="_blank">'.$conf['kfqq'].'@qq.com</a></p></div><div style="padding:0px 20px; text-align:right"><p>'.$conf['sitename'].'</p>'.$date.'</div></div><div style="padding:15px 0px; text-align:center; border:1px solid #ededed; font-size:11px; font-family:Tahoma, Geneva, sans-serif;color:#595959; "><b>Powered by <a href="'.$siteurl.'" target="_blank" style="color:#444; text-decoration:none;">'.$conf['sitename'].'</a></b><br></div></div><style></style></div></div>';


//密码找回邮件
$mailconfig['findpwd']['sub']='密码找回邮件';

$mailconfig['findpwd']['msg']='<div id="contentDiv" onclick="getTop().preSwapLink(event, html);" style="font-size:14px;height:auto;padding:15px 15px 10px 15px;*padding:15px 15px 0 15px;overflow:visible;min-height:100px;_height:100px;" class=" body"><div id="mailContentContainer" style="font-size: 14px; padding: 0px; height: auto; font-family: lucida Grande, Verdana; margin-right: 170px;"><div style="width:700px; padding:30px; margin:0 auto"><div style="padding:15px 10px 10px 20px; border:1px solid #E9E9E9 "><a href="'.$siteurl.'" target="_blank"><img src="'.$siteurl.'/images/logo.png" width="170" height="42"></a></div><div style="font-size:12px; padding:20px 20px; font-family:Hiragino Sans GB,Microsoft YaHei,Helvetica Neue; color:#4e4e4e;border-left:1px solid #E9E9E9;border-right:1px solid #E9E9E9;">尊敬的&nbsp;'.$conf['sitename'].'&nbsp;用户：<br><br><p>您好。帮助你找回在&nbsp;'.$conf['sitename'].'&nbsp;的密码!<br>请点击下面的连接完成设置新密码！<br></p><p><a href="'.$siteurl.'index.php?mod=findpwd&code='.$code.'"><input type="submit" value="修改密码" style="color: #fff;background-color: #5cb85c;padding: 6px 50px;border: 1px solid transparent;border-radius: 5px;"></a></p><p><a style="word-break: break-all;" href="'.$siteurl.'index.php?mod=findpwd&code='.$code.'">'.$siteurl.'index.php?mod=findpwd&code='.$code.'</a><br>(如果链接不能点击，请复制并粘贴到浏览器的地址栏，然后按回车键，此链接在48小时内有效。)<br></p><div style="font-size:12px; font-family:Hiragino Sans GB,Microsoft YaHei,Helvetica Neue; color:#959393;padding:20px 0px; "><p>这是一封系统自动发出的邮件，请不要直接回复，如您有任何疑问，请联系<a href="mailto:'.$conf['kfqq'].'@qq.com" style="color:#23B27E; cursor:pointer; text-decoration:none;" target="_blank">'.$conf['kfqq'].'@qq.com</a></p></div><div style="padding:0px 20px; text-align:right"><p>'.$conf['sitename'].'</p>'.$date.'</div></div><div style="padding:15px 0px; text-align:center; border:1px solid #ededed; font-size:11px; font-family:Tahoma, Geneva, sans-serif;color:#595959; "><b>Powered by <a href="'.$siteurl.'" target="_blank" style="color:#444; text-decoration:none;">'.$conf['sitename'].'</a></b><br></div></div><style></style></div></div>';
?>