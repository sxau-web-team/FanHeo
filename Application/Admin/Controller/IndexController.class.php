<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends BaseController {
    public function index(){
		header("Content-Type:text/html; charset=utf-8");
		$this->assign('title','饭盒哦订餐平台后台管理系统');
		echo __ROOT__;
		$this->assign('loginstatus','admin已登录');
		$this->display();
		dump($_SESSION);
       // $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是admin模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
}