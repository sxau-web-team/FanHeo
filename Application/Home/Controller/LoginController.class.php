<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller {
    public function index(){
       $this->assign('title','FanHeo.登录');
       $this->assign('stitle','登录FanHeo');
	   $this->display();
    }
    
    /**
     * 调用验证码
     */
    public function verify () {
        $config = array(
        'fontSize' => 30, // 验证码字体大小
        'length' => 4, // 验证码位数
        'useNoise' => true, // 关闭验证码杂点
        );

        $Verify = new \Think\Verify($config);
        $Verify->entry();

        //import('ORG.Util.Image'); 此方法失败
        //\Org\Util\Image::buildImageVerify(4,5,'png');
    }

    /**
      * 检测输入的验证码是否正确，$code为用户输入的验证码字符串
      */ 
    public function check_verify($code, $id = ''){
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }

    public function Login () {
    	/**
    	 * 用户登录表单处理
    	 */

        if (!IS_POST) {
            halt('页面不存在');
        }
        $username = I('username');
        $pwd = I('password','','md5');
        $code = I('code');
        $ver = $this->check_verify($code, $id = '');
        if(!$ver)
        $this->error('验证码错误');
        $user = M('user')->where(array('username' => $username))->find();
        $member = M('member')->where(array('user_id' => $user['id']))->find();
        
        if (!$user || $user['password'] != $pwd) {
            $this->error('账号或密码错误');

        }
        if ($member['status']==0) error('此用户已被锁定!');

        $data = array(
            
            'last_login' => date('Y-m-d H:i:s'),
            'last_ip'=> get_client_ip(),
            );
        /**
         * 如果用户登录数据更新成功则跳转
         */
        
        if(M("member")->where(array('user_id' => $member['user_id']))->save($data)){

            session('uid',$user['id']);
            session('mid',$member['user_id']);
            session('username',$user['username']);
            session('logintime',$member['last_time']);
            session('loginip',$member['last_ip']);
            //注意！以后搬到服务器后记得改跳转地址
            $this->success('登录成功，跳转到个人中心','/FanHeo/index.php/Home/UCenter/index',5);
    	
    	}else{

            error('登录失败！');
        }
    		
   
    }
}
?>