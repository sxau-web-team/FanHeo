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
        $talk="hello";
        $this->ajaxReturn($talk);
    }

    /**
     * 饭盒吐糟
     */
    public function fanhetalk () {
    	$this->assign('title','FanHeo.饭盒吐糟');
    	$this->assign('stitle','饭盒吐糟');
    	$talk=M("talk");
    	$rows=$talk->order("id desc")->where(array('user_id'=>session('uid')))->select();
    	$this->assign("talk",$rows);
    	$this->display('fanhetalk');
    }
    public function send_talk () {

    	$talk =array(
    		'user_id'	=>session('uid'),
    		'content'	=> I('content'),
    		'time'		=> date('Y-m-d H:i:s'),
    		
    		);
    	if (M('talk')->add($talk))
    	$this->ajaxReturn($talk);
    /*
    	if (M('talk')->add($talk)) {
    		$this->display('fanhetalk');
    		
    	}else{
    		$this->error('发布失败！','',5);
    	}
		*/

        

    }

    /**
     * 盒友动态
     */
    public function talks () {

            $talk = D("talk");
            $talk = $talk->relation(true)->order("id desc")->select();
            $this->assign("talk",$talk);
            $this->display('fanhetalks');


    }



}