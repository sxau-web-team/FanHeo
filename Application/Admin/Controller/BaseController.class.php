<?php
/**  
 * @author 
 * @author 
 */
namespace Admin\Controller;
use Think\Controller;

class BaseController extends Controller {
    function _initialize(){
        //登陆判断
		if(isset($_SESSION['AdminUser']) && $_SESSION['LoginTime'] != ''){
			$this->assign('AdminUser',session('AdminUser'));
			$this->assign('LoginTime',session('LoginTime'));
		}elseif(CONTROLLER_NAME != 'Login' && !isset($_seeion[C('USER_AUTH_KEY')])){
			$this->redirect('Login/Index');
		}
		
		echo MODULE_NAME;
		echo ACTION_NAME;
		$notAuth = in_array(MODULE_NAME,explode(',',C('NOT_AUTH_MODULE'))) || in_array(ACTION_NAME,explode(',',C('NOT_AUTH_ACTION')));
		dump($notAuth);
		
		if(C('USER_AUTH_ON') && !$notAuth){
			\Org\Util\Rbac::AccessDecision(GROUP_NAME) || $this->error('没有权限');
		}
    }	
}