<?php
//后台分组 普通控制器的父类
namespace Tools;
use Think\Controller;
class AdminController extends Controller{
	//构造方法：实现各个 方法访问过滤效果
	function __construct(){
		parent::__construct();//避免覆盖父类的构造方法，给其先执行
		//获得当前用户访问的"控制器/操作方法"信息
		$nowac=CONTROLLER_NAME.'-'.ACTION_NAME;
		//获得当前用户"允许"访问的权限信息
		//admin_id------role----auth
		//获得登录系统管理信息，进而获得角色id
		$admin_id=session('admin_id');
		$admin_name=session('admin_name');
		//未登录系统用户判断
		//如果未登录则跳转到登录页面去
		//(如果访问“登录页、验证码、退出页面”则允许访问)
		$loginac="Manager-login,Manager-verifyImg,Manager-logout";
		if(empty($admin_name) && strpos($loginac,$nowac)===false){
			$moduleurl=__MODULE__;
			$js=<<<eof
			<script type="text/javascript">
				window.top.location.href="{$moduleurl}/Manager/login";
			</script>
eof;
			echo $js;
//			$this->redirect('Manager/login');
			exit;
		}
		$manager_info=D('Manager')->find($admin_id);
		$roleid=$manager_info['mg_role_id'];
		//根据$roleid获得角色信息
		$roleinfo=D('Role')->find($roleid);
		$auth_ac=$roleinfo['role_auth_ac'];//获得角色对应权限的“控制器-操作方法信息”
		//默认允许大家都可以访问的权限
		$allow_ac="Manager-login,Manager-logout,Manager-verifyImg,Index-index,Index-left,Index-head,Index-right";
		//当前访问的权限 与 允许访问权限做“对比”
		//越权翻墙访问过滤判断
		//1.当前访问的权限没有出现在其"拥有权限"列表里面
		//2.当前访问的权限也没有出现在"默认允许权"限里面
		//3.访问都还不是admin超级管理员
		//那么当前权限就"没有权限访问"
		//strpos()判断一个小的字符串在一个大的字符串中第一次出现的位置
		if(strpos($auth_ac,$nowac)===false && strpos($allow_ac,$nowac)===false && $admin_name!=='admin'){
			exit('没有权限访问!');
		}
	}
}