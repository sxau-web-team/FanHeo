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


    }

    /**
     * 显示用户信息
     */

    public function show_userinfomation () {
    	$uid = session('uid');
    	$mid = session('mid');
    	if ($uid = $mid) {

    		$memberinfo=M('member')->where(array('user_id' => $mid))->select();
    		$userinfo=M('user')->where(array('id' => $uid))->select();
    	}else{
    		
    	}
    	echo '<br/><br/><br/><br/><br/>';
    	var_dump($memberinfo);
    	var_dump($userinfo);
    	$this->minfo = $memberinfo;
    	$this->uinfo = $userinfo;
    	$this->display('userinfomation');
    	

    }

    /**
     * 显示用户积分信息
     */
    public function view_score () {


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
    public function send_message () {


    }

    /**
     * 盒友动态
     */




}