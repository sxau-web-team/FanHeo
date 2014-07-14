<?php
namespace Admin\Controller;
use Think\Controller;

class UserController extends BaseController {
	//注册用户列表
	Public function index(){
		$count = M('user')->count();
		$page = new \Think\Page($count,10);
		$limit = $page->firstRow . ',' . $page->listRows;
		
		$this->user = M('user')->limit($limit)->select();
		$this->page = $page->show();
		$this->assign('title','饭盒后台管理系统-用户管理-用户列表');
		$this->assign('loginname',$_SESSION['AdminUser']);
		$this->display();
	}
}