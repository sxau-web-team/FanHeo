<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends BaseController {
    public function index(){
	
		header("Content-Type:text/html; charset=utf-8");
		C ( 'SHOW_RUN_TIME', false ); // 运行时间显示
        C ( 'SHOW_PAGE_TRACE', false );
		$this->assign('title','饭盒哦订餐平台后台管理系统-首页-仪表盘');
		$this->assign('loginstatus','admin已登录');
		
		$this->assign('loginname',$_SESSION['AdminUser']);
		$this->display();
		//dump($_SESSION);
       
    }
}