<?php
namespace Admin\Controller;
use Think\Controller;

class RbacController extends BaseController {
	//用户列表
	Public function index(){
		
		$count = M('admin')->count();
		$page = new \Think\Page($count,10);
		$limit = $page->firstRow . ',' . $page->listRows;
		
		$this->user = D('AdminRelation')->field(array('uid','username','logintime','loginip','truename','mobile','phone'))->relation(true)->limit($limit)->select();
		$this->page = $page->show();
		$this->assign('title','饭盒后台管理系统-用户管理-管理组用户列表');
		$this->assign('loginname',$_SESSION['AdminUser']);
		$this->display();
	}
	//角色列表
	Public function role(){
		$count = M('role')->count();
		$page = new \Think\Page($count,10);
		$limit = $page->firstRow . ',' . $page->listRows;
		
		$role = M('role')->limit($limit)->select();
		$this->page = $page->show();
		
		$this->assign('role',$role);
		$this->assign('title','饭盒后台管理系统-用户管理-角色列表');
		$this->assign('loginname',$_SESSION['AdminUser']);
		$this->display();
	}
	//节点列表
	Public function node(){
		 $field = array('id','name' ,'title','pid');
		$node = M('node')->field($field)->order('sort')->select();
		$node = node_merge($node);
		$this->assign('node',$node);
		$this->display();
	}
	//添加用户
	Public function addUser(){
		$this->role = M('role')->select();
		$this->assign('title','饭盒后台管理系统-用户管理-添加管理员用户');
		$this->assign('loginname',$_SESSION['AdminUser']);
		$this->display();
	}
	//添加用户处理
	Public function addUserhandler(){
		$user = array('username' => I('username'),
					'password' => I('password','','md5'),
					'truename' => I('truename'),
					'phone' => I('phone'),
					'mobile' => I('mobile'),
					'logintime' => time(),
					'loginip' => get_client_ip() 
					);
		$role = array();
		if($uid = M('admin')->add($user)){
			foreach ($_POST['role_id'] as $v) {
				$role[] = array(
					'role_id' => $v,'user_id' => $uid);
				# code...
			}
			M('role_user')->addAll($role);
			$this->success('添加成功',U('Admin/Rbac/index'));
		}
		else{
			$this->error('添加失败');
		}
		
	}
	//添加角色
	Public function addRole(){
		$this->assign('title','饭盒后台管理系统-用户管理-添加角色');
		$this->assign('loginname',$_SESSION['AdminUser']);
		$this->display();
	}
	//添加角色处理
	Public function addRoleHandler(){
		if(M('role')->add($_POST)){
			$this->success('添加成功',U('Admin/Rbac/role'));
		}
		else{
			$this->error('添加失败');
		}
	}
	//添加节点
	Public function addNode(){
		$this->pid = I('pid',0,'intval');
		$this->level = I('level',1,'intval');
		
		switch($this->level){
			case 1:
				$this->type = '应用';break;
			case 2:
				$this->type = '控制器';break;
			case 3:
				$this->type = '动作方法';break;
		}
		$this->display();
	}
	//添加节点后的表单处理
	Public function addNodeHandler(){
		if(M('node')->add($_POST)){
			$this->success('添加成功',U('Admin/Rbac/node'));
		}
		else{
			$this->error('添加失败');
		}
	}
	//配置权限
	Public function access(){
		$rid = I('rid',1,'intval');

		$field = array('id','name','title','pid');
		$node = M('node')->order('sort')->select();
		//$this->node = node_merge($node);
		//原有权限
		$access = M('access')->where(array('role_id'=> $rid))->getField('node_id',true);
		$this->node = node_merge($node,$access);

		$this->rid = $rid;
		$this->display();

	}
	//修改权限
	Public function setAccess(){
		$rid = I('rid',0,'intval');
		$db = M('access');

		$db -> where(array('role_id' => $rid ))->delete();
		$data = array();
		foreach ($_POST['access'] as $v ) {
			$tmp = explode('_', $v);
			$data[] = array('role_id' => $rid ,'node_id' => $tmp[0],'level' => $tmp[1] );

			# code...
		}
		if( $db->addAll($data))
		{
			$this->success('修改成功',U('Admin/Rbac/role'));
		}
		else{
			$this->error('修改失败');
		}
		

	}
	//删除用户
	Public function deluser(){
		$uid = I('uid',0,'intval');
		
		$db = M('admin');
		$db -> where(array('uid' => $uid ))->delete();
	}
}