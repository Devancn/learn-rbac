<?php
//命名空间
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;//空间类元素引入

class ManagerController extends Controller{
	//管理员登录系统
	function login(){
		//两个逻辑：展示、收集
		if(!empty($_POST)){
//			dump($_POST);
//			$_POST['captcha']==session('verify_code');
			$vry=new Verify();
			if($vry->check($_POST['captcha'])){
				echo "验证码正确";
			}else{
				echo "验证码错误";
			}
		}
		$this->display();
	}

	//输出验证码
	function verifyImg(){
		//给验证做配置
		$cfg=array(
			'imageH'    =>45,//验证码图片高度
			'imageW'    =>100,//验证码图片宽度
			'fontSize'  =>15,//验证码字体大小(px)
			'length'    =>4,//验证码位数
			'fontttf'   =>'4.ttf'//设置验证码字体
		);
		//实例化verify类
//		$very=new \Think\Verify();//完全限定名称方法
		$very=new Verify($cfg);
		$very->entry();//输出验证码
	}
}