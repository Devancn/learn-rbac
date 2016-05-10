<?php
//命名空间
namespace Model;
use Think\Model;
//为sw_goods数据表创建一个Model模型类
//父类Model:Thinkphp/library/Think/Model.class.php
class RoleModel extends Model{
	//可以定义方法并访问

	//制作数据(role_auth_ids和role_auth_ac)、存储数据
	function saveAuth($roleid,$authid){
		//1.制作 role_auth_ids
		$authids=implode(',',$authid);

		//2.制作role_auth_ac(控制器和操作方法连接的字符串)
		//根据把选中的权限id信息,查询对应的权限记录，遍历并从中获得每个权限的controller和action信息
		$authinfo=D('Auth')->select($authids);
		foreach($authinfo as $k => $v){
			if(!empty($v['auth_c']) && !empty($v['auth_a'])){
				$s.=$v['auth_c']."-".$v['auth_a'].",";
			}
		}
		$s=rtrim($s,',');
		$sql="update sw_role set role_auth_ids='$authids',role_auth_ac='$s' where role_id='$roleid'";
		//$this代表调用该方法的当前的对象 $role
		return $this->execute($sql);
	}
}