<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends BaseController {
    public function index(){
	
		header("Content-Type:text/html; charset=utf-8");
		C ( 'SHOW_RUN_TIME', false ); // 运行时间显示
        C ( 'SHOW_PAGE_TRACE', false );
		$this->assign('title','饭盒哦订餐平台后台管理系统');
		echo __ROOT__;
		$this->assign('loginstatus','admin已登录');
		$this->display();
		dump($_SESSION);
       
    }
}