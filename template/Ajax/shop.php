<?php global $zym_decrypt;$zym_decrypt['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ']=base64_decode('ZGVmaW5lZA==');$zym_decrypt['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']=base64_decode('ZGFkZHNsYXNoZXM=');$zym_decrypt['¾”ıÁ®Ö®ÄÄ¯¾ı‹ÖÁˆÖÖÃÃÁ”¥”Ã¾ÄÄ”Á”']=base64_decode('ZGF0ZQ==');$zym_decrypt['®¥ÃÄı®¾Ã®ÖÖÄÃ¥ÃÃˆıı¾ÄÁ¾ÃÀ‹']=base64_decode('cmFuZA==');$zym_decrypt['ııÖˆı¥‹ˆ”Ã”¾ÃÖ‹ÃÖˆÁ¯À‹¾”À‹ı”']=base64_decode('dXJsZW5jb2Rl'); ?>
<div class="modal fade" align="left" id="shop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="clearInterval(interval1)"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">åœ¨çº¿æ”¯ä»˜</h4>
      </div>
      <div class="modal-body">
<?php
if(!$GLOBALS['zym_decrypt']['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ'](base64_decode('SU5fQ1JPTkxJVEU=')))exit();$act=isset($_GET['act'])?$_GET['act']:null;if($islogin==1){switch($act){case 'pay': $type=isset($_GET['type'])?$GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($_GET['type']):exit('No paytype!');$shopid=isset($_GET['shopid'])?$GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($_GET['shopid']):exit('No shopid!');$qq=isset($_GET['qq'])?$GLOBALS['zym_decrypt']['ıÄÀÁ”ÁÀÀÄ‹¥À‹®Ö®ÁÀı‹”ˆ¾ÁÀ®ÄÄÃˆ']($_GET['qq']):null;$money=$buy_rules[$shopid];$desc='shop_'.$uid.'_'.$shopid;if($qq!='undefined')$desc.='_'.$qq;if($shopid==0)$name='1å¤©è¯•ç”¨VIPä¼šå‘˜';elseif($shopid==1)$name='1ä¸ªæœˆVIPä¼šå‘˜';elseif($shopid==2)$name='3ä¸ªæœˆVIPä¼šå‘˜';elseif($shopid==3)$name='6ä¸ªæœˆVIPä¼šå‘˜';elseif($shopid==4)$name='12ä¸ªæœˆVIPä¼šå‘˜';elseif($shopid==5)$name='æ°¸ä¹…VIPä¼šå‘˜';elseif($shopid==6)$name='1ä¸ªQQé…é¢';elseif($shopid==7)$name='3ä¸ªQQé…é¢';elseif($shopid==8)$name='5ä¸ªQQé…é¢';elseif($shopid==9)$name='10ä¸ªQQé…é¢';?>
<script>
    // æ£€æŸ¥æ˜¯å¦æ”¯ä»˜å®Œæˆ
	var interval1;
    function loadmsg(orderid) {
		$(".getshop").html('è¯·ç¨å€™');
		if(orderid){
			var act = 'get';
			var text = 'æ£€æµ‹æ˜¯å¦å·²ä»˜æ¬¾';
		}else{
			var act = 'fill';
			var text = 'ç¡®å®š';
			orderid = $("#orderid").val();
			if(orderid==''){
				alert('äº¤æ˜“å·ä¸èƒ½ä¸ºç©ºï¼');
				$(".getshop").html('ç¡®å®š');
				return false;
			}
		}
        $.ajax({
            type: "GET",
            dataType: "json",
			cache: false,
            url: "ajax.php?mod=getshop&act="+act+"&type=<?php echo $type?>&shopid=<?php echo $shopid?>&qq=<?php echo $qq?>&orderid="+orderid,
            success: function (data, textStatus) {
                //ä»æœåŠ¡å™¨å¾—åˆ°æ•°æ®ï¼Œæ˜¾ç¤ºæ•°æ®å¹¶ç»§ç»­æŸ¥è¯¢
                if (data.code == "1") {
					clearInterval(interval1);
                    // è¿™ä¸ªè„šæœ¬æ˜¯ ie6å’Œie7 é€šç”¨çš„è„šæœ¬
                    if (confirm("æ‚¨å·²æ”¯ä»˜å®Œæˆï¼Œæ˜¯å¦åˆ·æ–°é¡µé¢ï¼Ÿ")) {
                        window.location.href="index.php?mod=shop";
                    } else {
                        // ç”¨æˆ·å–æ¶ˆ
                    }
                } else {
					if(text == 'ç¡®å®š')
						alert(data.msg);
                    $(".getshop").html(text);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                if (textStatus == "timeout") {
                    //loadmsg();
                } else { //å¼‚å¸¸
                    alert('åˆ›å»ºè¿æ¥å¤±è´¥');
                }
            }
        });
    }
</script>
<?php
 if($type=='alipay'){if($conf['alipay_api']==1){$orderid=$GLOBALS['zym_decrypt']['¾”ıÁ®Ö®ÄÄ¯¾ı‹ÖÁˆÖÖÃÃÁ”¥”Ã¾ÄÄ”Á”']("YmdHis").$GLOBALS['zym_decrypt']['®¥ÃÄı®¾Ã®ÖÖÄÃ¥ÃÃˆıı¾ÄÁ¾ÃÀ‹'](111,999);$sql="insert into `".DBQZ."_pay` (`uid`,`qq`,`type`,`orderid`,`addtime`,`shopid`,`name`,`money`,`status`) values ('".$uid."','".$qq."','".$type."','".$orderid."','".$date."','".$shopid."','".$name."','".$money."','0')";if($DB->query($sql))echo '<table class="table"><tobdy><tr><td>å·²ç»æˆåŠŸç”Ÿæˆè®¢å•ï¼</td></tr><tr><td>è®¢å•å·ï¼š<u>'.$orderid.'</u></td></tr><tr><td>å•†å“åç§°ï¼š<u>'.$name.'('.$money.'å…ƒ)</u></td></tr><tr><td>æ”¯ä»˜æ–¹å¼ï¼š<u>æ”¯ä»˜å®</u></td></tr><tr><td><a href="index.php?mod=pay&type=alipay&orderid='.$orderid.'" class="btn btn-success btn-block" target="_blank">ç«‹å³æ”¯ä»˜</a></td></tr></tbody></table><script>$(document).ready(function(){interval1=setInterval("loadmsg(\''.$orderid.'\')", 3000);});</script>';else echo base64_decode('PHRhYmxlIGNsYXNzPSJ0YWJsZSI+PHRvYmR5Pjx0cj48dGQ+55Sf5oiQ6K6i5Y2V5aSx6LSl77yBPC90ZD48L3RyPjx0cj48dGQ+5Y6f5Zug77ya').$DB->error().'</td></tr></tbody></table>';}elseif($conf['alipay_api']==2){echo '<script src="assets/js/noreferrer.js"></script>
			<ul class="nav nav-tabs"><li class="active"><a href="#web" data-toggle="tab">ç½‘é¡µæ”¯ä»˜å®è½¬è´¦</a></li><li><a href="#mobile" data-toggle="tab">æ‰‹æœºæ”¯ä»˜å®è½¬è´¦</a></li><li><a href="#order" data-toggle="tab">äº¤æ˜“å·è¡¥å•</a></li></ul>
			<div class="tab-content">
			<div class="tab-pane fade in active" id="web">
			<table class="table"><tobdy><tr><td>ã€æ”¯ä»˜æ–¹æ³•ã€‘</td></tr><tr><td>1.æ‰“å¼€ï¼š<a rel="noreferrer" href="https://shenghuo.alipay.com/send/payment/fill.htm" target="_blank">https://shenghuo.alipay.com/send/payment/fill.htm</a></td></tr><tr><td>2.æ”¶æ¬¾äººï¼š'.$conf['alipay_account'].'</td></tr><tr><td>3.æ”¶æ¬¾äººå§“åï¼š'.$conf['alipay_name'].'</td></tr><tr><td>4.ä»˜æ¬¾é‡‘é¢ï¼š'.$money.'</tr><tr><td>5.ä»˜æ¬¾è¯´æ˜ï¼š'.$desc.'</td></tr><tr><td><font color="red">è¯·æ­£ç¡®å¡«å†™ä»˜æ¬¾è¯´æ˜,å¦åˆ™æ— æ³•è‡ªåŠ¨åˆ°è´¦</font></td></tr><tr><td><a id="getshop" class="btn btn-success btn-block getshop" onclick="loadmsg(\''.$desc.'\');">æ£€æµ‹æ˜¯å¦å·²ä»˜æ¬¾</a></td></tr></tbody></table>
			</div>
			<div class="tab-pane fade in" id="mobile">
			<table class="table"><tobdy><tr><td><img src="images/alipay.png"></td></tr><tr><td>1.é¦–å…ˆæ‰“å¼€æ‰‹æœºæ”¯ä»˜å®é’±åŒ…</td></tr><tr><td>2.æ‰«ææœ¬ç«™æ”¯ä»˜å®äºŒç»´ç ,å¹¶é€‰æ‹©è½¬è´¦åŠŸèƒ½</td></tr><tr><td>3.ä»˜æ¬¾é‡‘é¢ï¼š'.$money.'</tr><tr><td>4.ä»˜æ¬¾è¯´æ˜ï¼š'.$desc.'</td></tr><tr><td><font color="red">è¯·æ­£ç¡®å¡«å†™ä»˜æ¬¾è¯´æ˜,å¦åˆ™æ— æ³•è‡ªåŠ¨åˆ°è´¦</font></td></tr><tr><td><a id="getshop" class="btn btn-success btn-block getshop" onclick="loadmsg(\''.$desc.'\');">æ£€æµ‹æ˜¯å¦å·²ä»˜æ¬¾</a></td></tr></tbody></table>
			</div>
			<div class="tab-pane fade in" id="order">
			<table class="table"><tobdy><tr><td>å¦‚æœæ²¡æœ‰è‡ªåŠ¨åˆ°è´¦ï¼Œè¯·æ‰‹åŠ¨è¾“å…¥æ”¯ä»˜å®äº¤æ˜“å·è¿›è¡Œè¡¥å•ï¼š</td></tr><tr><td><input type="text" class="form-control" name="orderid" id="orderid" value="" placeholder="æ”¯ä»˜å®äº¤æ˜“å·" required></td></tr><tr><td><a id="getshop" class="btn btn-success btn-block getshop" onclick="loadmsg();">ç¡®å®š</a></td></tr><tr><td><a target="_blank" href="https://consumeprod.alipay.com/record/index.htm">æŸ¥çœ‹æ”¯ä»˜å®äº¤æ˜“å·</a></td></tr></tbody></table>
			</div>
			</div>';}}elseif($type=='tenpay'){if($conf['tenpay_api']==1){$orderid=$GLOBALS['zym_decrypt']['¾”ıÁ®Ö®ÄÄ¯¾ı‹ÖÁˆÖÖÃÃÁ”¥”Ã¾ÄÄ”Á”']("YmdHis").$GLOBALS['zym_decrypt']['®¥ÃÄı®¾Ã®ÖÖÄÃ¥ÃÃˆıı¾ÄÁ¾ÃÀ‹'](111,999);$sql="insert into `".DBQZ."_pay` (`uid`,`qq`,`type`,`orderid`,`addtime`,`shopid`,`name`,`money`,`status`) values ('".$uid."','".$qq."','".$type."','".$orderid."','".$date."','".$shopid."','".$name."','".$money."','0')";if($DB->query($sql))echo '<table class="table"><tobdy><tr><td>å·²ç»æˆåŠŸç”Ÿæˆè®¢å•ï¼</td></tr><tr><td>è®¢å•å·ï¼š<u>'.$orderid.'</u></td></tr><tr><td>å•†å“åç§°ï¼š<u>'.$name.'('.$money.'å…ƒ)</u></td><tr><td>æ”¯ä»˜æ–¹å¼ï¼š<u>è´¢ä»˜é€šï¼ˆQQé’±åŒ…ï¼‰</u></td></tr><tr><td><a href="index.php?mod=pay&type=tenpay&orderid='.$orderid.'" class="btn btn-success btn-block" target="_blank">ç«‹å³æ”¯ä»˜</a></td></tr></tbody></table><script>$(document).ready(function(){interval1=setInterval("loadmsg(\''.$orderid.'\')", 3000);});</script>';else echo base64_decode('PHRhYmxlIGNsYXNzPSJ0YWJsZSI+PHRvYmR5Pjx0cj48dGQ+55Sf5oiQ6K6i5Y2V5aSx6LSl77yBPC90ZD48L3RyPjx0cj48dGQ+5Y6f5Zug77ya').$DB->error().'</td></tr></tbody></table>';}elseif($conf['tenpay_api']==2){$orderid=$GLOBALS['zym_decrypt']['¾”ıÁ®Ö®ÄÄ¯¾ı‹ÖÁˆÖÖÃÃÁ”¥”Ã¾ÄÄ”Á”']("YmdHis").$GLOBALS['zym_decrypt']['®¥ÃÄı®¾Ã®ÖÖÄÃ¥ÃÃˆıı¾ÄÁ¾ÃÀ‹'](111,999);$sql="insert into `".DBQZ."_pay` (`uid`,`qq`,`type`,`orderid`,`addtime`,`shopid`,`name`,`money`,`status`) values ('".$uid."','".$qq."','".$type."','".$orderid."','".$date."','".$shopid."','".$name."','".$money."','0')";$DB->query($sql);echo base64_decode('PHVsIGNsYXNzPSJuYXYgbmF2LXRhYnMiPjxsaSBjbGFzcz0iYWN0aXZlIj48YSBocmVmPSIjd2ViIiBkYXRhLXRvZ2dsZT0idGFiIj7otKLku5jpgJrovazotKY8L2E+PC9saT48bGk+PGEgaHJlZj0iI29yZGVyIiBkYXRhLXRvZ2dsZT0idGFiIj7kuqTmmJPlj7fooaXljZU8L2E+PC9saT48bGk+PGEgaHJlZj0iI2dpZnQiIGRhdGEtdG9nZ2xlPSJ0YWIiPue6ouWMheaUr+S7mDwvYT48L2xpPjwvdWw+DQoJCQk8ZGl2IGNsYXNzPSJ0YWItY29udGVudCI+DQoJCQk8ZGl2IGNsYXNzPSJ0YWItcGFuZSBmYWRlIGluIGFjdGl2ZSIgaWQ9IndlYiI+DQoJCQk8dGFibGUgY2xhc3M9InRhYmxlIj48dG9iZHk+PHRyPjx0ZD7mlK/ku5jmlrnlvI/vvJo8dT7otKLku5jpgJrovazotKY8L3U+PC90ZD48L3RyPjx0cj48dGQ+PGEgaHJlZj0iaW5kZXgucGhwP21vZD1wYXkmdHlwZT10ZW5wYXkyJm9yZGVyaWQ9').$orderid.'" class="btn btn-primary btn-block" target="_blank">ç«‹å³æ”¯ä»˜</a></td></tr><tr><td><font color="red">è¯·ä¸è¦ä¿®æ”¹ä»˜æ¬¾è¯´æ˜,å¦åˆ™æ— æ³•è‡ªåŠ¨åˆ°è´¦</font></td></tr><tr><td><a id="getshop" class="btn btn-success btn-block getshop" onclick="loadmsg(\''.$orderid.'\');">æ£€æµ‹æ˜¯å¦å·²ç»æ”¯ä»˜</a></td></tr></tbody></table>
			</div>
			<div class="tab-pane fade in" id="order">
			<table class="table"><tobdy><tr><td>å¦‚æœæ²¡æœ‰è‡ªåŠ¨åˆ°è´¦ï¼Œè¯·æ‰‹åŠ¨è¾“å…¥è´¢ä»˜é€šäº¤æ˜“å·è¿›è¡Œè¡¥å•ï¼š</td></tr><tr><td><input type="text" class="form-control" name="orderid" id="orderid" value="" placeholder="è´¢ä»˜é€šäº¤æ˜“å·" required></td></tr><tr><td><a id="getshop" class="btn btn-success btn-block getshop" onclick="loadmsg();">ç¡®å®š</a></td></tr><tr><td><a target="_blank" href="https://www.tenpay.com/v2/trade/trade_mgr.shtml">æŸ¥çœ‹è´¢ä»˜é€šäº¤æ˜“å·</a></td></tr></tbody></table>
			</div>
			<div class="tab-pane fade in" id="gift">
			<table class="table"><tobdy><tr><td>1ã€æ·»åŠ QQï¼š'.$conf['kfqq'].'ä¸ºå¥½å‹<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin='.$conf['kfqq'].'&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:'.$conf['kfqq'].':51" alt="ç‚¹å‡»è¿™é‡Œç»™æˆ‘å‘æ¶ˆæ¯" title="ç‚¹å‡»è¿™é‡Œç»™æˆ‘å‘æ¶ˆæ¯"></a></td></tr><tr><td>2ã€å‘é€QQçº¢åŒ…ï¼ˆç‰©å“çš„å¯¹åº”é‡‘é¢ï¼‰ï¼Œç•™ä¸‹QQæ¶ˆæ¯<code> UIDï¼š'.$uid.' </code>ï¼Œè¯·å‹¿å†™é”™å·ï¼</td></tr><tr><td>æç¤ºï¼šç«™é•¿çœ‹åˆ°æ¶ˆæ¯åå°†ä¼šå……å€¼ã€‚è¢«é¢†å–çº¢åŒ…åQQä¼šæœ‰æç¤ºï¼Œæœªè¢«é¢†å–çš„çº¢åŒ…å°†ä¼šåœ¨24å°æ—¶åè‡ªåŠ¨é€€å›åˆ°ä½ çš„è´¦æˆ·ä½™é¢ä¸­ã€‚</td></tr></tbody></table>
			</div>
			</div>';}}elseif($type=='wxpay'){$orderid=$GLOBALS['zym_decrypt']['¾”ıÁ®Ö®ÄÄ¯¾ı‹ÖÁˆÖÖÃÃÁ”¥”Ã¾ÄÄ”Á”']("YmdHis").$GLOBALS['zym_decrypt']['®¥ÃÄı®¾Ã®ÖÖÄÃ¥ÃÃˆıı¾ÄÁ¾ÃÀ‹'](111,999);$sql="insert into `".DBQZ."_pay` (`uid`,`qq`,`type`,`orderid`,`addtime`,`shopid`,`name`,`money`,`status`) values ('".$uid."','".$qq."','".$type."','".$orderid."','".$date."','".$shopid."','".$name."','".$money."','0')";if($DB->query($sql)){require_once SYSTEM_ROOT."wxpay/WxPay.Api.php";require_once SYSTEM_ROOT.base64_decode('d3hwYXkvV3hQYXkuTmF0aXZlUGF5LnBocA==');$notify =new NativePay();$input =new WxPayUnifiedOrder();$input->SetBody($name);$input->SetOut_trade_no($orderid);$input->SetTotal_fee($money*100);$input->SetSpbill_create_ip($clientip);$input->SetTime_start(date("YmdHis"));$input->SetTime_expire(date("YmdHis", time()+ 600));$input->SetGoods_tag("test");$input->SetNotify_url($siteurl."other/wxpay_notify.php");$input->SetTrade_type("NATIVE");$result =$notify->GetPayUrl($input);if($result["result_code"]=='SUCCESS'){echo '<table class="table"><tobdy><tr><td>è®¢å•å·ï¼š<u>'.$orderid.'</u></td></tr><tr><td>å•†å“åç§°ï¼š<u>'.$name.'('.$money.'å…ƒ)</u></td><tr><td>æ”¯ä»˜æ–¹å¼ï¼š<u>å¾®ä¿¡æ‰«ç æ”¯ä»˜</u></td></tr><tr><td><img alt="ç”¨å¾®ä¿¡æ‰«ç äºŒç»´ç " src="http://paysdk.weixin.qq.com/example/qrcode.php?data='.$GLOBALS['zym_decrypt']['ııÖˆı¥‹ˆ”Ã”¾ÃÖ‹ÃÖˆÁ¯À‹¾”À‹ı”']($result["code_url"]).'" style="width:150px;height:150px;"/><br/>è¯·ä½¿ç”¨å¾®ä¿¡æ‰«ä¸€æ‰« æ‰«æäºŒç»´ç å®Œæˆæ”¯ä»˜ã€‚<font color="red">æ”¯ä»˜æœŸé—´è¯·å‹¿å…³é—­æ­¤çª—å£ï¼Œå¦åˆ™æ— æ³•è‡ªåŠ¨åˆ°è´¦ï¼</font></td></tr></tbody></table><script>$(document).ready(function(){interval1=setInterval("loadmsg(\''.$orderid.'\')", 4000);});</script>';}else{echo base64_decode('PHRhYmxlIGNsYXNzPSJ0YWJsZSI+PHRvYmR5Pjx0cj48dGQ+5b6u5L+h5pSv5LuY5LiL5Y2V5aSx6LSl77yBPC90ZD48L3RyPjx0cj48dGQ+Ww==').$result["err_code"].'] '.$result["err_code_des"].'</td></tr></tbody></table>';}}else echo base64_decode('PHRhYmxlIGNsYXNzPSJ0YWJsZSI+PHRvYmR5Pjx0cj48dGQ+55Sf5oiQ6K6i5Y2V5aSx6LSl77yBPC90ZD48L3RyPjx0cj48dGQ+5Y6f5Zug77ya').$DB->error().'</td></tr></tbody></table>';}break;}}else{exit(base64_decode('55m75b2V5aSx6LSl77yM5Y+v6IO95piv5a+G56CB6ZSZ6K+v5oiW6ICF6Lqr5Lu95aSx5pWI5LqG77yM6K+36YeN5paw55m75b2V77yB'));}?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="clearInterval(interval1)">Close</button>
      </div>
    </div>
  </div>
</div>