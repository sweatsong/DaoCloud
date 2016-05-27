<?php
namespace Home\Controller;
use Think\Controller;

class FormController extends Controller{
	public function index(){
		$this->display();
	}

	//ajax验证用户名是否存在
	public function checkuser(){
		$user=$_POST['user'];
		$users=M('user');
		$data=$users->where('user='.$user)->find();
		if($data!=null){
			echo '该用户名已存在！';
		}
	}
}