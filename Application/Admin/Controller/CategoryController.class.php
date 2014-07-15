<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends BaseController {

	//分类列表视图
	public function index () {
		//import('Org.Util.Category');
		$cate = M('category')->order('sort ASC')->select();
		//getChildId
		//$cate = \Org\Util\Category::getParents($cate,12);
		//$cate = \Org\Util\Category::getChildId($cate,1);

		//var_dump($cate);
		$this->cate = \Org\Util\Category::unlimitedForLevel($cate);
		
		$this->display();
		
	}

	//添加分类视图
	public function addCate () {
		$this->pid = I('pid',0,'intval');
		$this->display('addcate');

	}
	public function runAddCate (){
		if (M('category')->add($_POST)) {
			$this->success('添加成功',U('Category/index'));

		}else{
			$this->error('添加失败');
		}
	}
	public function sortCate () {
		$db = M('category');
		foreach ($_POST as $id => $sort) {
			$db->where(array('id' => $id))->setField('sort',$sort);
		}
		$this->redirect('Admin/Category/index');
	}
}