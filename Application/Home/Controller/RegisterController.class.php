<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller {
    public function index(){
       
	   $this->display();
    }
    
    public function Register () {

    	dump($_POST);
    	$this->display('status');
    }
}
?>