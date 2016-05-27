<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html lang="en">
 <head>
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
 	<title>小工具们</title>
 </head>
 <script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
 <script type="text/javascript">
 	$(function(){
 		$('#cid').bind('click',function(){
 			$.ajax({
 				url:'',
 				type:'',
 				success:function(){
 					
 				}
 			});
 		});
 	});
 </script>
 <body>
 	<h1>晁松的微博：用于学习开发</h1>
 	<h2>您现在的访问ip：<?php echo ($data["ip"]); ?></h2>
 	<h2>您的ip信息为：<?php echo ($data["country"]); echo ($data["region"]); echo ($data["city"]); ?></h2>
 	<h2>您的网络为：<?php echo ($data["isp"]); ?></h2>
 	<h2><?php echo ($time); ?></h2>
	<input type="button" id='cid' value="查看ip信息"/>
 </body>
 </html>