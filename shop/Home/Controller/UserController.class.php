<?php
//全名空间
namespace Home\Controller;
use Think\Controller;
//前台用户控制器
//父类Controller:ThinkPHP/Library/Think/Controller.class.php
class UserController extends Controller{
	//登录功能
	function login(){
		//echo 'i am logining';
		//调用view视图
		$this->display();//展现视图（视图文件名字与当前操作方法名字一致）
		//$this->display('register');//访问其他名字的模板文件
		//$this->display('Goods/detail');//访问其他控制器下的具体模板文件

	}
	//注册功能
	function register(){
		//echo "registering";
		$this->display();
	}
}