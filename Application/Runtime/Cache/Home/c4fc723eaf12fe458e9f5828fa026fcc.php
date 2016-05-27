<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html lang="en">
 <head>
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
 	<title>小工具们</title>
 </head>
 <script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
 <script type="text/javascript">
           //ajax调用
	/*$(function(){
		setInterval(function(){

				$.post('/index.php/Home/T/ajax',function(msg){
					$('#second').html(msg.second);
					$('#minute').html(msg.minute);
				},'json');

			},1000);
	}); */

	/*$(function(){
		var timeLeft=90 * 60 * 1000;
		var startMinutes = parseInt(timeLeft / (60 * 1000), 10); 
		var startMinutes = parseInt(timeLeft / (60 * 1000)); 
   		var startSec = parseInt((timeLeft - startMinutes * 60 * 1000)/1000); 
   		$('#show').html("剩余时间：" + startMinutes + "分钟" + startSec + "秒"; );
   		 timeLeft = timeLeft - 1000; 
    		setTimeout('countTime()',1000); 
	});
*/

 </script>

<script language="javascript"> 
 
function count(){
  		
   	 	var startMinutes = parseInt(timeLeft / (60 * 100)); 
   		var startSec = parseInt(timeLeft /100)%60; 
   		var  hm=timeLeft%100;
   	 	document.getElementById('show').innerHTML = "剩余时间：" + startMinutes + "分钟" + startSec + "秒"+hm; 
   	 	timeLeft = timeLeft - 1; 
   	 	if(timeLeft<0){
   	 		
   	 		 clearInterval(time);
   	 	}
   	 }

 window.onload=function(){
 
 	//alert('first');
 	//setInterval('alert("hello")',3000);

             timeLeft = 1 * 5 * 100;//这里设定的时间是5分
    		 
    	time=setInterval('count()',10); 
    	//setTimeout('count()',10);
 }
 	
 </script> 

<!-- <script type="text/javascript">
	//倒计时
	var fnTimeCountDown = function(d, o){
	
	var f = {
		haomiao: function(n){
			if(n < 10)return "00" + n.toString();
			if(n < 100)return "0" + n.toString();
			return n.toString();
		},
		zero: function(n){
			var n = parseInt(n, 10);//解析字符串,返回整数
			if(n > 0){
				if(n <= 9){
					n = "0" + n;	
				}
				return String(n);
			}else{
				return "00";	
			}
		},
		dv: function(){			
			//d = d || Date.UTC(2050, 0, 1); //如果未定义时间，则我们设定倒计时日期是2050年1月1日
			var now = new Date();
			//现在将来秒差值
			var dur = (d - now.getTime()) / 1000 , mss = d - now.getTime() ,pms = {
				hm:"000",
				sec: "00",
				mini: "00",
			};
			if(mss > 0){
				pms.hm = f.haomiao(mss % 1000);
				pms.sec = f.zero(dur % 60);
				pms.mini = Math.floor((dur / 60)) > 0? f.zero(Math.floor((dur / 60)) % 60) : "00";
				pms.hour = Math.floor((dur / 3600)) > 0? f.zero(Math.floor((dur / 3600)) % 24) : "00";
		
			}else{
				/*pms.year=pms.month=pms.day=pms.hour=pms.mini=pms.sec="00";
				pms.hm = "000";
				alert('结束了');
				return;*/

			}
			return pms;
		},
		ui: function(){
			
			
			if(o.hm){
				o.hm.html(f.dv().hm);
			}
			if(o.sec){
				o.sec.html(f.dv().sec);
			}
			if(o.mini){
				o.mini.html(f.dv().mini);
			}
		
			setTimeout(f.ui, 1);			
		}
	};	
f.ui();
};
</script>
<script type="text/javascript">

$(function(){
	var end = {
	obj: function(){
		return {
			hm: $("#hm"),
			sec: $("#sec"),
			mini: $("#mini"),
		
		}
	}
      };
//要想实现倒计时结束时间戳后面添加000

  fnTimeCountDown("1461125996000", end.obj());
   
    });
	
</script> -->
 <body>

 	<div id="show"></div> 
 	<span id="minute">00</span>分<span id="second">00</span>秒<br/>
 	<input type='button' id='btn' value="远程">

 	<DIV id=time_conter style="background:rgb(183,17,41);  WIDTH: 100%;  color:#fff;FONT-FAMILY: arial; TEXT-ALIGN: center;">
  		<P style="font-size:.8em;line-height:2em; ">即将揭晓：</P> 
		<DIV id="timejs" style="FONT-SIZE: .9em">
	      	  	<SPAN id="mini" class="time_td mini ml5">00</SPAN>分
	        		<SPAN id="sec" class="sec time_td">00</SPAN>秒
	        		<SPAN id="hm" class="hm time_td">000</SPAN>
		</DIV>
	</DIV>
 </body>
 </html>