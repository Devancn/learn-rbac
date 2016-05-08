<?php
/*
 * 命名空间与目录没有直接关系
 * tp框架的设计是目录名字的命名空间在做类文件引入的时候会转化为目录的一部分
 * 进而获得该类文件
 * */
//命名空间
namespace Admin\Controller;//声明一个命名空间
use Model\GoodsModel; //空间类元素引入
use Think\Controller;
use Think\Upload;
class GoodsController extends Controller{
	//商品列表
	function showlist1(){
		//使用GoodsModel
		//$goods=new GoodsModel();
		//1)实例化普通model对象
		//$goods=new \Model\GoodsModel();//命名空间实例化Model
		//2)D函数实例化Model对象
		//1.实例化父类Model对象
		//$model=D();//new Model();
		//var_dump($model);//可以用于执行原生sql语句(普通model)对象也可以执行原生sql语句
		//$goods=D('Goods');//实例化父类Model对象，同时操作sw_goods数据表,该方式即使没有对应的model模型类，也不影响我们直接操作该表
		//2.实例化父类Model对象，同时操作指定的数据表
		$user=D('User');
		var_dump($user);


		$this ->display();
	}

	function showlist2(){
		//数据查询操作
		$goods=new \Model\GoodsModel();//或D('Goods);
		//1查询全部记录、全部字段数据
		$info=$goods -> select();//SELECT * FROM `sw_goods`
		//2根据主键id值查询记录SELECT * FROM `sw_goods` WHERE `goods_id` = 9
		$info=$goods->select(9);
		//3主键id值查询在某个范围的记录
		$info=$goods ->select("20,23,25,29");//SELECT * FROM `sw_goods` WHERE `goods_id` IN ('20','23','25','29')
		//把获得的信息传递给模板使用
		//dump($info) dump是TP框架定义好的函数
		$this ->assign('info',$info);
		$this ->display();
	}

	function showlist3(){
		$goods=D('Goods');
		//数据操作常用方法
		//1.where()限制操作(查询)条件
		//$goods -> where('goods_price>1000 and goods_name like "诺%"');//SELECT * FROM `sw_goods` WHERE ( goods_price>1000 and goods_name like "诺%" ) ,sql语句where后边的信息都可以作为where方法的参数
		//2.field()限制查询的字段
		//$goods -> field('goods_id,goods_name');
		//$info=$goods -> select();

		//3.limit(长度)；限制查询的条数 SELECT * FROM `sw_goods` LIMIT 5
		//limit(偏移量,长度)
		//$goods ->limit(6);
		//$info=$goods -> select();

		//4.order() 排序查询 order by
		//$goods  -> order('goods_price desc');
		//$info=$goods -> select();
		//$goods -> group('goods_brand_id');
		//$goods -> field("goods_brand_id,max(goods_price)");//SELECT `goods_brand_id`,max(goods_price) FROM `sw_goods` GROUP BY goods_brand_id
		//$info=$goods -> select();

		//5.having()设置查询条件
		$goods -> having('goods_price>1000');//SELECT * FROM `sw_goods` HAVING goods_price>1000
		$info=$goods -> select();
		$this -> assign('info',$info);
		$this -> display();
	}

	function showlist(){
		$goods=D('Goods');


		//$goods -> field('goods_name');
		//$goods -> where('goods_price>1000');
		//$goods ->limit(10);
		//$goods ->order('goods_price desc');
		//$info=$goods -> select();
		//以上许多方法可以做连贯操作,如下
		//连贯操作的各个方法没有顺序要求，但select()必须放在最后
		//$info=$goods -> field('goods_name') -> limit(10) -> order('goods_price desc') -> where('goods_price>1000') -> select();
		$info=$goods->order('goods_id desc')->select();
		$this -> assign('info',$info);
		$this -> display();
	}
	//添加商品
	function tianjia1(){
		//数据添加
		$goods=new \Model\GoodsModel();//操作sw_goods数据表的对象
		//1.数组方式
//		$arr=array(
//			'goods_name'=>'samsung6s',
//			'goods_price'=>'5600',
//			'goods_weight'=>1300,
//			'goods_number'=>16,
//		);
//		$z=$goods->add($arr);
//		dump($z);
		//对象给本身不存在的属性赋值会要执行魔术方法__set
		$goods -> goods_name='nokia345';
		$goods -> goods_price=2100;
		$goods -> goods_weight=90;

		$z=$goods -> add();
		dump($z);
		$this ->display();
	}

	function tianjia(){
		//两个逻辑：展示表单，收集表单
		$goods=D('Goods');
		if(!empty($_POST)){
			//处理上传的图片附件
			if($_FILES['goods_pic']['error']<4){
				$cfg=array(
					'rootPath'      =>  './Public/Uploads/', //保存根路径
				);
				$up=new Upload($cfg);//上面需要引入命名空间
				//uploadOne()方法执行成功后会把附件(在服务器上)的名字和路径等相关信息给我们返回
				$z=$up->uploadOne($_FILES['goods_pic']);//只上传一个附件图片
				//把上传好的附件存储到数据库里面
				$_POST['goods_big_img']=$up->rootPath.$z["savepath"].$z["savename"];
				//dump($up->getError());
				//dump($z);
			}
			//收集表单
			$z=$goods->add($_POST);
			if($z){
				//redirect([分组/控制器/操作方法]，参数，延迟时间，提示信息)
				$this->redirect('showlist',array(),3,'商品添加成功');
			}else{
				$this->redirect('tianjia',array(),3,'商品添加失败');
			}
		}else{
			//展示表单

		}
		$this->display();
	}
	//修改商品
	function xiugai1(){
		$goods=new \Model\GoodsModel();
		//AR方式数据修改
		//$goods ->goods_id=166;//这是根据id值更新数据
		$goods -> goods_name="huawei222";
		$goods -> goods_price=1700;
		$goods -> goods_number=21;
		$z=$goods -> where('goods_id>166') ->save();
		dump($z);
		$this ->display();
	}
	//xiugai方法中参数表示表单post 或get发送过来的数据,这里有形参执行这个方法就必须传递实参进来
	function xiugai($goods_id){
		$goods=D('Goods');
		//两个逻辑：展示、收集
		if(!empty($_POST)){
			$z=$goods->save($_POST);
			if($z){
				//redirect([分组/控制器/操作方法]，参数，延迟时间，提示信息)
				$this->redirect('showlist',array(),3,'商品更新成功');
			}else{
				$this->redirect('xiugai',array('goods_id'=>$goods_id),3,'商品更新失败');
			}
		}else{
			//根据$goods_id获得修改的商品信息，并给模板展示
			//find()方法只负责给返回一条记录结果,并且是一维数组返回
			$info=$goods->find($goods_id);
			$this->assign('info',$info);
			$this->display();
		}
	}
}