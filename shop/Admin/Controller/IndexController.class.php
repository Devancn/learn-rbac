<?php
//命名空间
namespace Admin\Controller;
use Tools\AdminController;
class IndexController extends AdminController{
	//头部
	function head(){
		$this ->display();
	}
	//左部
	function left(){
		//根据管理员获得其角色，进而获得角色对应的权限
		//1.根据管理员id信息，获得其本身记录信息
		$admin_id=session('admin_id');
		$admin_name=session('admin_name');
		$manager_info=D('Manager')->find($admin_id);
		$role_id=$manager_info['mg_role_id'];
		//2.根据$role_id获得本身记录信息
		$role_info=D('Role')->find($role_id);
		$auth_ids=$role_info['role_auth_ids'];
		//3.根据$auth_ids获得具体权限
		//admin超级管理员没有权限限制
		if($admin_name==='admin'){
			$auth_infoA=D('auth')->where("auth_level=0")->select();//父级
			$auth_infoB=D('auth')->where("auth_level=1")->select();//子级
		}else{
			$auth_infoA=D('auth')->where("auth_level=0 and auth_id in ($auth_ids)")->select();//父级
			$auth_infoB=D('auth')->where("auth_level=1 and auth_id in ($auth_ids)")->select();//子级
		}
		$this->assign('auth_infoA',$auth_infoA);
		$this->assign('auth_infoB',$auth_infoB);
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