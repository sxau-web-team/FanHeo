<?php
/**  
 * @author 
 * @author 
 */
namespace Admin\Controller;
use Think\Controller;

class LoginController extends BaseController {
    public function index(){
		header("Content-Type:text/html; charset=utf-8");
		$this->assign('title','饭盒哦订餐平台后台管理系统登录界面');
        $this->display();
    }
	//获取用户名和密码，与数据库对比，
	function do_login(){
		if(isset($_POST['username']) && $_POST['username'] != '')
			$username = I('post.username');
		else
		{
			echo "<script language=\"JavaScript\">alert(\"用户名为空，请重新输入\");history.go(-1)</script>"; 
		}
		if(isset($_POST['password']) && $_POST['password'] != '')
		$password = I('post.password');
		else
		{
			echo "<script language=\"JavaScript\">alert(\"密码为空，请重新输入\");history.go(-1)</script>"; 
		}
		$m_admin = M('Admin');

		$result = $m_admin->where(array('username'=>I('username')))->find();
		if(!$result){
			$this->error('该用户不存在');
		}else if($result['password'] != I('post.password','','md5')){
			dump(I('post.password','','md5'));
			$this->error('密码错误！!');
		}else{
			
		
			 $data = array(
			   'uid' => $result['uid'],
			   'loginip'    => get_client_ip(),
			   'lastip'     => $result['loginip'],
			   'logintime'  => time(),
			   'lastlogintime'   => $result['logintime'],
			   'num'        => $result['num'] + 1
			);
			$m_admin->save($data); 
			session('AdminUser',$result['username']);
			session('LoginTime',$result['lastlogintime']);
			session('LoginIp',$result['loginip']);
			
			$this->redirect('Index/index');
			
		}
		
	}
	
	//退出登陆
	function loginout(){
		session('AdminUser','');
		session(null);
		$this->redirect('index');
	}
}