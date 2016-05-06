<?php
//全名空间
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller{
	//商品列表
	function showlist(){
		$this->display();
	}
	//商品详情
	function detail(){
		//echo "registering";
		$this->display();
	}
}