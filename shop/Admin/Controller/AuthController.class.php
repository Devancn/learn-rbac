<?php
/*
 * 命名空间与目录没有直接关系
 * tp框架的设计是目录名字的命名空间在做类文件引入的时候会转化为目录的一部分
 * 进而获得该类文件
 * */
//命名空间
namespace Admin\Controller;//声明一个命名空间
use Tools\AdminController;
//权限控制器
class AuthController extends AdminController{
	//列表展示
	function showlist(){
		//访问过滤
		//获得全部权限信息并给模板展示
		$info=D('Auth')->order('auth_path')->select();
		$this->assign("info",$info);
		$this->display();
	}
	//权限添加
	function tianjia(){
		$auth=new \Model\AuthModel();
		//两个逻辑:展示、收集
		if(!empty($_POST)){
//			dump($_POST);//只有4个信息name,pid,controller,action
			$z=$auth->saveData($_POST);//通过算法制作auth_path和auth_level,并实现整条记录的写入
			if($z){
				$this->redirect('showlist',array(),2,"添加权限成功!");
			}else{
				$this->redirect('tianjia',array(),2,"添加失败");
			}
		}else{
			//获得上级(顶级)权限信息
			$auth_infoA=$auth->where('auth_level=0')->select();
			$this->assign('auth_infoA',$auth_infoA);
			$this->display();
		}
	}
}