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
		$this->goods = M('goods')->limit($limit)->select();
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
		$goods =array(
    		'name'	=> I('name'),
    		'goods_no'		=> I('goods_no'),
    		'sell_price'	=> I('sell_price'),
    		'old_price'		=> I('old_price'),
    		'up_time'		=> date('Y-m-d H:i:s'),
    		'create_time'	=> date('Y-m-d H:i:s'),
    		'img'			=> I('img'),
    		'status'		=> I('status'),
    		'content'		=> I('content'),
    		'keywords'		=> I('keywords'),
    		'search_words'	=> I('search_words'),
    		'point'			=> I('point'),
    		'exp'			=> I('exp'),
    		'cid'			=> I('cid')
    		);
		if(M('goods')->add($goods)){
			$this->success('添加成功',U('Admin/Good/index'));
		}
		else{
			$this->error('添加失败');
		}
	}
}