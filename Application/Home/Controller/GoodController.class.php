<?php
namespace Home\Controller;
use Think\Controller;

class GoodController extends Controller {
	public function index(){
		$this->Gid = I('gid',0,'intval');
		$db = M('goods');
		$db -> where(array('id' => $Gid ))->select();
	}

}
?>