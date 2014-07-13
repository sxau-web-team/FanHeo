<?php
namespace Admin\Controller;
use Think\Controller;

class GoodController extends BaseController {
	//商品列表
	Public function index(){
	
		$this->assign('title','饭盒后台管理系统-商品管理-商品列表');
		$this->assign('loginname',$_SESSION['AdminUser']);
	}
}