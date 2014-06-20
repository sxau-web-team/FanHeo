<?php
/**
 * @author guodong
 */
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {

    function _initialize(){
        //登陆判断
		if(!isset($_SESSION['uid'])|| !isset($_SESSION['username'])){
			$this->redirect('/Home/Login');

		}
    }	
}
?>