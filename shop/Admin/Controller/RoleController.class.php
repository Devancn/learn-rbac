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

	//分配权限
	function distribute($role_id){
		$role=new \Model\RoleModel();
		//两个逻辑：展示、收集
		//查询被分配权限的角色信息
		if(!empty($_POST)){
			//dump($_POST);//role_id ,auth_id(array);
			//收集好设置的权限，并制作为数据表要求格式 并存储
			$z=$role->saveAuth($_POST['role_id'],$_POST['auth_id']);
			if($z){
				$this->redirect('showlist',array(),2,'分配权限成功');
			}else{
				$this->redirect('distribute',array('role_id'=>$role_id),2,'分配权限失败');
			}
		}else{
			//查询分配权限的角色信息
			$role_info=$role->find($role_id);

			//获得可供选取分配的权限信息
			//以后用递归做 无限分类
			$auth_infoA=D('Auth')->where('auth_level=0')->select();//父级权限
			$auth_infoB=D('Auth')->where('auth_level=1')->select();//子级权限

			$this->assign('auth_infoA',$auth_infoA);
			$this->assign('auth_infoB',$auth_infoB);
			$this->assign('role_info',$role_info);
			$this->display();
		}
	}
}