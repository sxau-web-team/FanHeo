<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->assign('title','FanHe.饭盒-在线订餐－叫外卖,找饭盒');
    	$this->assign('stitle','');
	    $this->display();
    }
    public function logout () {

    	session_unset();
    	session_destroy();
    	$this->display('index');
    }
}