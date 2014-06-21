<?php
namespace Admin\Controller;
use Think\Controller;

class RbacController extends BaseController {
	//角色列表
	Public function role(){
		$role = M('role')->select();
		$this->assign('role',$role);
		$this->display();
	}
	//节点列表
	Public function node(){
		$node = M('node')->order('sort')->select();
		$this->assign('node',$node);
		$this->display();
	}
	//添加用户
	Public function addUser(){
	}
	//添加角色
	Public function addRole(){
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
}