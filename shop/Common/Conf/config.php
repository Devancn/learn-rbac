<?php
return array(
	//伪静态配置
	'URL_HTML_SUFFIX'           =>  'html',
	//显示页面底部跟踪信息
	'SHOW_PAGE_TRACE'           =>  true,
	//默认分组名称
	'DEFAULT_MODULE'            =>  'Home',
	//定义可供访问的分组列表
	'MODULE_ALLOW_LIST'         =>  array('Home','Admin'),
	//Smarty模板引擎切换(默认是Think)
	'TMPL_ENGINE_TYPE'          =>'Smarty',
	//为Smarty做配置
	'TMPL_ENGINE_CONFIG'        =>array(
		//smarty 左标记
//		'left_delimiter'    =>'{',
//		'right_delimiter'   =>'}'
	),
	/* 数据库设置 */
	'DB_TYPE'               =>  'mysql',     // 数据库类型
	'DB_HOST'               =>  '127.0.0.1', // 服务器地址
	'DB_NAME'               =>  'shop0609',          // 数据库名
	'DB_USER'               =>  'root',      // 用户名
	'DB_PWD'                =>  '123',          // 密码
	'DB_PORT'               =>  '',        // 端口
	'DB_PREFIX'             =>  'sw_',    // 数据库表前缀
	'DB_PARAMS'          	=>  array(), // 数据库连接参数
	'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
	'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
	'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
);