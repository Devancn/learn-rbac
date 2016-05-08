<?php
//使用thinkphp框架开发shop项目
//框架两种模式：生产、开发
define('APP_DEBUG',true);//开发(错误提示非常具体)
//define('APP_DEBUG',false);//生产(错误提示模糊)
//这个常量是给页面中显示图片的绝对路径,这个是自己定义的
define('SITE_URL','http://www.dxh.com/mvc/shop/');
//给静态资源文件访问目录设置常量,方便后期维护
//Home分组
define('CSS_URL','/mvc/shop/Public/css/');
define('IMG_URL','/mvc/shop/Public/images/');
define('JS_URL','/mvc/shop/Public/js/');
//Admin分组
define('ADMIN_CSS_URL','/mvc/shop/Admin/Public/css/');
define('ADMIN_IMG_URL','/mvc/shop/Admin/Public/images/');
//引入框架的接口文件
include '../ThinkPHP/ThinkPHP.php';
