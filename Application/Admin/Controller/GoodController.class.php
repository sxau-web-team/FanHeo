<?php
namespace Admin\Controller;
use Think\Controller;

class GoodController extends BaseController {
	//商品列表
	Public function index(){
		$count = M('goods')->count();
		$page = new \Think\Page($count,10);
		$limit = $page->firstRow . ',' . $page->listRows;
		//id 商品名称 所属分类 所属品牌 价格 状态 评价管理 缩略图 操作
		$this->goods = M('goods')->field(array('id','name','goods_no','sell_price','img','content','exp'))->limit($limit)->select();
		$this->page = $page->show();

		$this->assign('title','饭盒后台管理系统-商品管理-商品列表');
		$this->assign('loginname',$_SESSION['AdminUser']);
		$this->display();
	}
	//添加商品
	Public function addGood(){
		$this->assign('title','饭盒后台管理系统-商品管理-添加商品');
		$this->assign('loginname',$_SESSION['AdminUser']);
		$this->category = M('category')->select();

		$this->display();
	}
	//添加商品处理
	Public function addGoodHandler(){
		if(M('goods')->add($_POST)){
			$this->success('添加成功',U('Admin/Good/index'));
		}
		else{
			$this->error('添加失败');
		}
	}
}