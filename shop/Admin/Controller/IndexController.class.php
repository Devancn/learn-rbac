<?php
//命名空间
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller{
	//头部
	function head(){
		$this ->display();
	}
	//左部
	function left(){
		$this ->display();
	}
	//右部
	function right(){
		$this ->display();
	}
	//索引页(整合 头部、左侧、右侧)
	function index(){
		$this ->display();
	}
}