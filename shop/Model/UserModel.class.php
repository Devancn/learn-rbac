<?php
//命名空间
namespace Model;
use Think\Model;
//为sw_users数据表创建一个Model模型类
//父类Model:Thinkphp/library/Think/Model.class.php
class UserModel extends Model{
	//可以定义方法并访问
	//是否批处理验证,默认为false一次只能难证一个数据
	protected $patchValidate=true;
	//$_validate是TP定义好的属性，由create()方法调用,用来作表单验证
	//自动验证定义
	protected $_validate =array(
		//array(字段,验证规则,错误提示,验证条件,附加规则,验证时间),
		//1.用户名验证,不能为空(唯一)
		//这里的username等是input name的属性也是表是字段名其两者相同
		array('username','require','用户名不能为空'),
		array('username','','用户名已经存在',0,'unique'),
		//2.密码验证,不能为空
		array('password','require','密码不能为空'),
		//3.确认密码验证,不能为空并且和密码一致
		array('password2','require','确认密码不能为空'),
		array('password2','password','两次密码必须一致',0,'confirm'),
		//4.邮箱验证
		array('user_email','email','邮箱格式不正确'),
		//5.qq号码验证:纯数字、位数5-12
		array('user_qq','number','qq号码必须为数字',2),
		array('user_qq','5,12','qq号码长度为5-12之间',2,'length'),
		//6.学历，必须选择一项
		array('user_xueli','2,5','学历，必须选择一项',0,'between'),
		//7.爱好，必须选择两项或以后
		array('user_hobby','cheek_hobby','爱好必须选择两项或以上',1,'callback'),
	);
	//验证爱好
	//参数$arg代表被验证项目的value值
	function cheek_hobby($arg){
		if(count($arg)<2){
			return false; //会自动输出验证的错误信息
		}
		return true;
	}
}