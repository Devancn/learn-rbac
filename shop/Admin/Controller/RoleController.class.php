<?php
/*
 * 命名空间与目录没有直接关系
 * tp框架的设计是目录名字的命名空间在做类文件引入的时候会转化为目录的一部分
 * 进而获得该类文件
 * */
//命名空间
namespace Admin\Controller;//声明一个命名空间
use Think\Controller;
//角色控制器
class RoleController extends Controller{
	//列表展示
	function showlist(){
		//获得角色数据
		$info=D('Role')->select();
		$this->assign("info",$info);
		$this->display();
	}
}