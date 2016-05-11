<?php
//命名空间
namespace Model;
use Think\Model;
//为sw_Auth数据表创建一个Model模型类
//父类Model:Thinkphp/library/Think/Model.class.php
class AuthModel extends Model{
	//实现权限添加逻辑
	function saveData($data){
			//$data=array(4) {
			//["auth_name"] => string(12) "商品品牌"
			//["auth_pid"] => string(3) "100"
			//["auth_c"] => string(5) "Goods"
			//["auth_a"] => string(5) "brand"
			//}
		//当前战略:根据已有信息生成一个新记录(字段内容不全面)
		//通过算法计算auth_path和auth_level
		//再通过一个updata语句把path和level给更新于是新记录里面
		//1.根据已有$data(name/pid/controller/action)数据生成一条新记录出来
		$newid=$this->add($data);
		//2.制作auth_path
		//(1)顶级权限 auth_path === 新记录主键id值
		if($data['auth_id']==0){
			$path=$newid;
		}else{
			//(2)非顶级权限,根据pid获得父级权限信息，进而获得其"全路径"
			//父级全路径一新记录主主键id值
			$pinfo=$this->find($data['auth_id']);
			$path=$pinfo['auth_path']."-".$newid;
		}
		dump($path);
		//3.制作auth_level
	}
}