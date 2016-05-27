<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<title>用户注册</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

<link rel="shortcut icon" href="/Public/Home/images/favicon.ico" />
<link href="/Public/Home/style/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/Home/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Home/js/jquery.i18n.properties-1.0.9.js" ></script>
<script type="text/javascript" src="/Public/Home/js/jquery-ui-1.10.3.custom.js"></script>
<script type="text/javascript" src="/Public/Home/js/jquery.validate.js"></script>
<script type="text/javascript" src="/Public/Home/js/md5.js"></script>
<script type="text/javascript" src="/Public/Home/js/page_regist.js?lang=zh"></script>
<!--[if IE]>
  <script src="/Public/Home/js/html5.js"></script>
<![endif]-->
<!--[if lte IE 6]>
	<script src="/Public/Home/js/DD_belatedPNG_0.0.8a-min.js" language="javascript"></script>
	<script>
	  DD_belatedPNG.fix('div,li,a,h3,span,img,.png_bg,ul,input,dd,dt');
	</script>
<![endif]-->
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
<script>
	//定义页面载入事件
	$(function() {
		$('#Verify').bind('click',function(){
			//设置图片的src属性
			$(this).attr('src','/index.php/Home/Form/verify/_/'+new Date().getTime());
		});
	});
	
</script>

<script type="text/javascript">
	//定义页面载入事件
	$(function(){
		//只要移出焦点就触发
		$('#user').blur(function(){
			var user=$('#user').val();
			$.post('/index.php/Home/Form/checkuser', 'user='+user, function(msg) {
				$('#u').html(msg);
			});
		});
	})
</script>


</head>
<body class="loginbody">
<div class="dataEye">
	<div class="loginbox registbox">
		
		<div class="login-content reg-content">
			<div class="loginbox-title">
				<h3>注册</h3>
			</div>
			<form id="signupForm" method="post" action="/index.php/Home/Form/Login">
			<div class="login-error"></div>
			<div class="row">
				<label class="field" for="email">注册邮箱</label>
				<input type="text" value="" class="input-text-user noPic input-click" name="email" id="email">
			</div>
			<div class="row">
				<label class="field" for="password">密码</label>
				<input type="password" value="" class="input-text-password noPic input-click" name="password" id="password">
			</div>
			<div class="row">
				<label class="field" for="passwordAgain">确认密码</label>
				<input type="password" value="" class="input-text-password noPic input-click" name="passwordAgain" id="passwordAgain">
			</div>
			<div class="row">
				<label class="field" for="user">用户名</label>
				<input type="text" value="" class="input-text-user noPic input-click" name="user" id="user"><span id='u'></span>
			</div>
			<div class="row">
				<label class="field" for="username">昵称</label>
				<input type="text" value="" class="input-text-user noPic input-click" name="username" id="username">
			</div>
			<div class="row">
				<label class="field" for="tel">联系电话</label>
				<input type="text" value="" class="input-text-user noPic input-click" name="tel" id="tel">
			</div>
			<div class="row">
				<label class="field" for="qq">QQ</label>
				<input type="text" value="" class="input-text-user noPic input-click" name="qq" id="qq">
			</div>
			<div class="row">
				<label for="verify">验证码</label>
				<input name="verify" type="text" id="Code" size="4" style="background:url(/Public/Home/images/login_6.gif) repeat-x; border:solid 1px #c4c4c4; height:20px; background-color:#FFFFFF" maxlength="4">
              	<img id='Verify' src="/index.php/Home/Form/verify" width="50" height="24" />
			</div>
			<div class="row">
			<label for="sex">性别：</label>
				<input type="radio" value="1" name="sex" checked/>男 <input type="radio" value="2" name="sex" />女
			</div>
			<!-- <div class="row tips">
				<input type="checkbox" id="checkBox">
				<label>
				我已阅读并同意
				<a href="#" target="_blank">隐私政策、服务条款</a>
				</label>
			</div> -->
			<div class="row btnArea">
			<!-- disabled="true" --> 
			<input type="submit" class="login-btn" id="submit" value="注册" />
				<!-- <a class="login-btn" id="submit">注册</a> -->
			</div>
			</form>
		</div>
		<div class="go-regist">
			已有帐号,请<a href="#" class="link">登录</a>
		</div>
	</div>
	

</body>
<script type="text/javascript">
(function(){
var cb=document.getElementById("checkBox");
cb.onclick=function(){
    if(cb.checked==true){
        document.getElementById("submit").disabled=false;
    }
    else{
        document.getElementById("submit").disabled=true;
    }
}
})();
</script>
</html>