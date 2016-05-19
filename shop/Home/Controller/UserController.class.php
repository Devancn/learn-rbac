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
		$user=new \Model\UserModel();
		//两个逻辑：展示、收集
		if(!empty($_POST)){
			//收集表单[$_POST]信息并返回,同时触发表单自动验证,过滤非法字段
			$shuju=$user->create();
			if($shuju){//返回实在数据 的时候才进行添加
				$shuju['user_hobby']=implode(',',$_POST['user_hobby']); //把爱好的信息由array变为String
				if($user->add($shuju)){
					$this->redirect('Index/index');
				}
			}else{
//				dump($user->getError());//输出难的错误信息
				$this->assign('errorInfo',$user->getError());
			}
		}
		$this->display();
	}

	//用户名检验
	function checkNM($name){
		$info=D('User')->where("username='$name'")->find();
		if($info){
			echo "<span style='color:tomato'>用户名已经存在，请换一个</span>";
		}else{
			echo "<span style='color:green'>恭喜，可以使用此名字</span>";
		}
		exit;
	}
}