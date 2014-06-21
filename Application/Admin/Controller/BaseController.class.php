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
		}elseif(CONTROLLER_NAME != 'Login'){
			$this->redirect('Login/Index');
		}
    }	
}