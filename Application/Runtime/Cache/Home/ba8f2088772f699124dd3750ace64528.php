<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
        body, html{width: 100%;height: 100%;overflow: hidden;margin:0;}
        #allmap {width:600px;height:500px;overflow: hidden;}

        dl,dt,dd,ul,li{
            margin:0;
            padding:0;
            list-style:none;
        }
        p{font-size:12px;}
        dt{
            font-size:14px;
            font-family:"微软雅黑";
            font-weight:bold;
            border-bottom:1px dotted #000;
            padding:5px 0 5px 5px;
            margin:5px 0;
        }
        dd{
            padding:5px 0 0 5px;
        }
        li{
            line-height:28px;
        }
    </style>
    <!--这里要替换你的key  ak=你的key -->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=3ac1342b68fec1069cd54e9af77f7b05"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/library/DrawingManager/1.4/src/DrawingManager_min.js"></script>
    <title>绘制点并获取当前点的坐标</title>
</head>
<body>
<div id="allmap" style="overflow:hidden;zoom:1;position:relative;">
    <div id="map" style="height:100%;-webkit-transition: all 0.5s ease-in-out;transition: all 0.5s ease-in-out;"></div>
</div>
<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map('map');
    //以钦州初始化城市...
    map.centerAndZoom("钦州",15);
    map.enableScrollWheelZoom();
    var overlays = [];
    //回调获得覆盖物信息
    var overlaycomplete = function(e){
        clearbefore();
        overlays.push(e.overlay);
      var result="";
        if (e.drawingMode == BMAP_DRAWING_MARKER) {
            result += ' 坐标：' + e.overlay.getPosition().lng + ',' + e.overlay.getPosition().lat;
        }
       console.log(result)
    };
    //实例化鼠标绘制工具
    var drawingManager = new BMapLib.DrawingManager(map, {
        isOpen: true, //是否开启绘制模式
        enableDrawingTool: false,
        setDrawingMode:BMAP_DRAWING_MARKER//画点
    });

    //添加鼠标绘制工具监听事件，用于获取绘制结果
    drawingManager.addEventListener('overlaycomplete', overlaycomplete);
    function clearbefore() {
        for(var i = 0; i < overlays.length; i++){
            map.removeOverlay(overlays[i]);
        }
    }
</script>
</body>
</html>
</script>