<?php
namespace Home\Controller;
use Think\Controller;
class UCenterController extends Controller {
    public function index(){
    	$this->assign('title','FanHeo.个人中心');
       
	   $this->display();
    }
}