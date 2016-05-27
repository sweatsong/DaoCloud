<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>网页标题</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link type="text/css" rel="stylesheet" href="__ADMIN__/css/reset.css">
	<link type="text/css" rel="stylesheet" href="__ADMIN__/css/common1.css">
	<script type="text/javascript" src="__ADMIN__/js/jquery.js"></script>
	<link type="text/css" rel="stylesheet" href="__ADMIN__/css/page1.css">



	<script type="text/javascript">

			function check(){
				var username = document.getElementById("username").value;
				var password = document.getElementById("pw").value;
				if(username =='' || password ==''){
						alert("请输入用户命及密码")
						return false;
				}
			}

</script>
</head>
<body style="background: #378ECD url(./img/A001.jpg)repeat-x;">



<!--container-->
<div class="container bc">
	<div class="loginBox">
			<div class="top clearfix">
				<div class="tl"></div>
				<div class="tr"></div>
				<div class="t"></div>
			</div>
			<div class="content">
            	<form name="form1" method="post" action="/try/index.php/Admin/Login/checkLogin" id="form1" class="myform">

                	<fieldset>
                		<legend><h1>全民尚网后台系统</h1></legend>
                       
                  		<p><span><input name="UserName" id="username" class="username_input" type="text"></span></p>
                   	    <p><span><input name="PassWord" id="password" class="ps_input" type="password"></span></p>                    
               <input name="Button1" value="" id="Button1" onclick="return check();" class="subBtn" type="submit">

                    </fieldset>

                </form>	
			</div>
			<div class="bottom clearfix">
				<div class="bl"></div>
				<div class="br"></div>
				<div class="b"></div>
			</div>
		</div>

        
</div>

<!--footer-->
<div class="footer pt30">
	CopyRight © 2011-2015 All Rights Reserved 全民尚网系统 版权所有<br>
	
</div>



</body>
</html>