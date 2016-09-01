var xiha={
	postData: function(url, parameter, callback, dataType, ajaxType) {
		if(!dataType) dataType='json';
		$.ajax({
			type: "POST",
			url: url,
			async: true,
			dataType: dataType,
			json: "callback",
			data: parameter,
			success: function(data) {
				if (callback == null) {
					return;
				} 
				callback(data);
			},
			error: function(error) {
				alert('创建连接失败');
			}
		});
	}
}
function trim(str){ //去掉头尾空格
	return str.replace(/(^\s*)|(\s*$)/g, "");
}
function ptui_checkVC(code, vcode, msg, pt_verifysession, b) {
	var uin=trim($('#uin').val()),
		pwd=trim($('#pwd').val());
	if(code==0){
		p=getmd5(uin,pwd,vcode);
		login(uin,pwd,p,vcode,pt_verifysession);
	}else{
		getvc(uin,vcode);
	}
}
function login(uin,pwd,p,vcode,pt_verifysession){
	$('#load').html('正在登录，请稍等...');
	var loginurl=siteurl+"qq/getsid/login.php?do=qqlogin";
	xiha.postData(loginurl,"uin="+uin+"&pwd="+pwd+"&p="+p+"&vcode="+vcode+"&pt_verifysession="+pt_verifysession+"&r="+Math.random(1), function(d) {
		if(d.saveOK ==0){
			$('#load').html('QQ已成功登录，正在保存...');
			xiha.postData("ajax.php?mod=addqq&act=add&r="+Math.random(1),"qq="+uin+"&qpwd="+encodeURIComponent(pwd)+"&qsid="+encodeURIComponent(d.sid)+"&skey="+encodeURIComponent(d.skey)+"&pskey="+encodeURIComponent(d.pskey)+"&superkey="+encodeURIComponent(d.superkey), function(arr) {
				if(arr.code==1) {
					alert(arr.msg);
					showlist('qqlist',1);
				}else{
					alert(arr.msg);
				}
			});
		}else if(d.saveOK ==4){
			$('#load').html('验证码错误，请重新登录。');
			$('#submit').attr('do','submit');
			$('.code').hide();
			$('#code').val("");
		}else if(d.saveOK ==3){
			$('#load').html('您输入的帐号或密码不正确，请重新输入密码！');
			$('#submit').attr('do','submit');
			$('.code').hide();
			$('#login').show();
		}else if(d.msg =='pwd不能为空'){
			$('#load').html('请输入密码！');
			$('#submit').attr('do','submit');
			$('.code').hide();
			$('#login').show();
		}else{
			$('#load').html(d.msg);
			$('#submit').attr('do','submit');
		}
	});
	
}

function getvc(uin,sig){
	$('#load').html('获取验证码，请稍等...');
	var getvcurl=siteurl+"qq/getsid/login.php?do=getvc";
	xiha.postData(getvcurl,'uin='+uin+'&sig='+sig+'&r='+Math.random(1), function(d) {
		if(d.saveOK ==0){
			$('#load').html('请输入验证码');
			$('#codeimg').attr('vc',d.vc);
			$('#codeimg').html('<img onclick="getvc(\''+uin+'\',\''+d.vc+'\')" src="'+siteurl+'qq/getsid/login.php?do=getvcpic&uin='+uin+'&sig='+d.vc+'&r='+Math.random(1)+'" title="点击刷新">');
			$('#submit').attr('do','code');
			$('.code').show();
		}else{
			alert(d.msg);
		}
	});

}
function dovc(uin,code,vc){
	$('#load').html('验证验证码，请稍等...');
	var getvcurl=siteurl+"qq/getsid/login.php?do=dovc";
	xiha.postData(getvcurl,'uin='+uin+'&ans='+code+'&sig='+vc+'&r='+Math.random(1), function(d) {
		if(d.rcode ==0){
			var pwd=$('#pwd').val();
			p=getmd5(uin,pwd,d.randstr.toUpperCase());
			login(uin,pwd,p,d.randstr.toUpperCase(),d.sig);
			
		}else{
			$('#load').html('验证码错误，重新生成验证码，请稍等...');
			getvc(uin,vc);
		}
	});

}
function checkvc(){
	var uin=trim($('#uin').val()),
		pwd=trim($('#pwd').val());
	if(uin==''||pwd=='') {
		$('#load').html('请输入密码！');
		$('#login').show();
		return false;
	}
	$('#load').html('登录中，请稍候...');
	var s = document.createElement('script');
	s.src = 'http://check.ptlogin2.qq.com/check?regmaster=&pt_tea=1&pt_vcode=1&uin='+uin+'&appid=549000912&js_ver=10132&js_type=1&login_sig=&u1=http%3A%2F%2Fqzs.qq.com%2Fqzone%2Fv5%2Floginsucc.html%3Fpara%3Dizone&r='+Math.random(1);
	document.body.appendChild(s);
}
$(document).ready(function(){
	$('#submit').click(function(){
		var self=$(this);
		var uin=trim($('#uin').val()),
			pwd=trim($('#pwd').val());
		if(uin=='') {
			alert("请确保每项不能为空！");
			return false;
		}
		$('#load').show();
		if(self.attr('do') == 'code'){
			var vcode=trim($('#code').val()),
				vc=$('#codeimg').attr('vc');
			dovc(uin,vcode,vc);
		}else{
		if (self.attr("data-lock") === "true") return;
			else self.attr("data-lock", "true");
			checkvc();
			self.attr("data-lock", "false");
		}
	});
});