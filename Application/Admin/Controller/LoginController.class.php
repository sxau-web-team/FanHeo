<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller {
    public function index(){
		header("Content-Type:text/html; charset=utf-8");
		$this->assign('title','饭盒哦订餐平台后台管理系统登录界面');
        $this->display();
    }
	//登陆判断
	function loginok(){
		$db = M('master');
		$result = $db->where(array('user'=>I('user')))->find();
		if(!$result){
			echo '帐号不存在！';
		}elseif($result['pwd'] != I('pwd','','md5')){
			echo '密码错误！';
		}else{
			$data = array(
			   'id' => $result['id'],
			   'loginip'    => get_client_ip(),
			   'lastip'     => $result['loginip'],
			   'logintime'  => time(),
			   'lasttime'   => $result['logintime'],
			   'num'        => $result['num'] + 1
			);
			$db->save($data);
			session('AdminUser',$result['user']);
			session('AdminName',$result['name']);
			echo 'ok';
		}
	}
	
	//退出登陆
	function loginout(){
		session('AdminUser','');
		session(null);
		$this->redirect('index');
	}
}