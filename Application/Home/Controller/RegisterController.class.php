<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller {
    public function index(){
       $this->assign('title','FanHeo.注册');
       $this->assign('stitle','加入FanHeo');
	   $this->display();
    }
    
    public function Register () {
    	/**
    	 * 用户注册表单处理
    	 */
    	$user = array(
    		'username' => I('username'),
    		'password' => I('password','','md5'),
    		'email'	   => I('email')

    		);
    	$member =array(
    		'real_name'	=> I('realname'),
    		'sex'		=> I('sex'),
    		'phone'		=> I('phone'),
    		'time'		=> date(),
    		'register_ip'	=> get_client_ip()
    		);
    	/**
    	 * 如果插入成功则跳转
    	 */
    	if (M('user')->add($user)&&M('member')->add($member)) {
    		$this->display('status');
    		$this->redirect('/Home','',10,'跳转中');
    	}else{
    		$this->error('注册失败！','',5);
    	}
    	
    	
    }
}
?>