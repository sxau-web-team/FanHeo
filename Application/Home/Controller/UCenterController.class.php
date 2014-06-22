<?php
namespace Home\Controller;
use Think\Controller;
class UCenterController extends CommonController {
    public function index(){
    	$this->assign('title','FanHeo.个人中心');
    	$this->assign('stitle','个人中心');
       
	   $this->display();
    }


    /**
     * 个人中心操作
     */

    /**
     * 更新用户信息
     */
    public function update_userinfomation () {

    	if (1) {
    		$uid = session('uid');
	    	$mid = session('mid');
	    	if ($uid = $mid) {

	    		$memberinfo=M('member')->where(array('user_id' => $mid))->select();
	    		$userinfo=M('user')->where(array('id' => $uid))->select();
	    	}else{
	    		
	    	}
	    	
	    	$this->minfo = $memberinfo;
	    	$this->uinfo = $userinfo;
    	
    		$this->status = 1;
    		$this->display('userinfomation');
    	}
    }

    /**
     * 显示用户信息
     */

    public function show_userinfomation () {
    	$this->assign('title','FanHeo.个人资料');
    	$this->assign('stitle','个人资料');
    	$uid = session('uid');
    	$mid = session('mid');
    	if ($uid = $mid) {

    		$memberinfo=M('member')->where(array('user_id' => $mid))->select();
    		$userinfo=M('user')->where(array('id' => $uid))->select();
    	}else{
    		
    	}
    	
    	$this->minfo = $memberinfo;
    	$this->uinfo = $userinfo;
    	
    	$this->display('userinfomation');
    	

    }

    /**
     * 显示用户积分信息
     */
    public function view_score () {
    	$this->assign('title','FanHeo.积分信息');
    	$this->assign('stitle','积分信息');


    }

    /**
     * 查看饭盒食物
     */
    public function view_fanhe () {


    }

    /**
     * 饭盒操作
     */
    //移除
    public function fanhe_remove () {

    }
    //结算
    public function fanhe_ok () {


    }

    /**
     * 查看个人订单
     */

    public function view_order () {
    	$this->assign('title','FanHeo.我的订单');
    	$this->assign('stitle','我的订单');


    }

    /**
     * 饭盒故事（历史订单）
     */

    public function record () {


    }

    /**
     * 消息通知
     */

    public function message () {


    }

    /**
     * 饭盒吐糟
     */
    public function fanhetalk () {
    	$this->assign('title','FanHeo.饭盒吐糟');
    	$this->assign('stitle','饭盒吐糟');

    	$this->display('fanhetalk');
    }
    public function send_talk () {
    	$this->assign('title','FanHeo.饭盒吐糟');
    	$this->assign('stitle','饭盒吐糟');

    	if (!IS_POST) {
            $this->error('页面不存在');
        }


        $this->display('fanhetalk');

    }

    /**
     * 盒友动态
     */




}