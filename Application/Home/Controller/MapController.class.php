<?php
namespace Home\Controller;
use Think\Controller;
class MapController extends Controller{
	public function index(){
		$this->display();
	}

	public function map(){
		$url='http://api.map.baidu.com/location/ip?ak=FNt1Rc6cGxO44jOdxBejxH2HVEMREa7s&coor=bd09ll';
		//$url='http://api.map.baidu.com/marker';
		$da=file_get_contents($url);
		//var_dump($data);
		$json=json_decode($da);
		//var_dump($json);
		//echo "<hr/>";
		$a=$json->content;
		//var_dump($a);
		//echo "<hr/>";
		$b=$a->address;
		$c=$a->point;
		//var_dump($b);
		//var_dump($c);
		//echo "<hr/>";
		$data['x']=$c->x;
		$data['y']=$c->y;
		//dump($data);exit();
		$this->assign('data',$data);
		//var_dump($x.'&nbsp'.$y);
		$this->display();
	}


}