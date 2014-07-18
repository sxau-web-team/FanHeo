<?php
namespace Admin\Controller;
use Think\Controller;

class BrandController extends BaseController {
	//品牌列表
	Public function index(){
		$count = M('brand')->count();
		$page = new \Think\Page($count,10);
		$limit = $page->firstRow . ',' . $page->listRows;
		
		$this->brand = M('brand')->limit($limit)->select();
		$this->page = $page->show();

		$this->assign('title','饭盒后台管理系统-产品管理-品牌管理');
		$this->assign('loginname',$_SESSION['AdminUser']);
		$this->category = M('category')->select();
		$this->display();
	}
	//添加品牌
    Public function addbrand(){
        $this->assign('title','饭盒后台管理系统-产品管理-添加品牌');
        $this->assign('loginname',$_SESSION['AdminUser']);
        $this->category = M('category')->select();

        $this->display();
    }
    //添加品牌处理
    public function addbrandhandler(){
            $brand=D('brand');
            if(!$brand->create()){
                    $this->error($brand->getError());
            }
            $brand->dateline=time();
            $last=$brand->add();
            if($last){
                $this->Record('添加品牌成功');//后台操作
                $this->success('添加成功', U('Admin/Brand/index'));
            }else{
                $this->Record('添加品牌失败');//后台操作
                $this->error('品牌添加失败');
            }
    }
    //商品品牌编辑页
    public function editbrand(){
            $brand = M('brand');
            $id = I('id',1,'intval');
            $edlist = $brand->where('id='.$id)->select();
            $this->assign('edlist',$edlist);
            $this->assign('title','饭盒后台管理系统-产品管理-修改品牌');
            $this->assign('loginname',$_SESSION['AdminUser']);
            $this->category = M('category')->select();
            $this->display();
    }
    //商品品牌编辑页保存
    public function editbrandhandler(){
            $brand=D('brand');
            if($brand->create()){
                  $result = $brand->save();
                 if($result){
                     $this->Record('商品品牌修改成功');//后台操作
                     $this->success('修改成功',  U('Admin/Brand/index'));
                    
                 }else{
                    $this->Record('商品品牌修改失败');//后台操作
                    $this->error("修改失败");
                 }                      
            }else{
                 $this->error($brand->getError());
            }
    }
    //产品品牌删除
    public function delbrand(){
            $brand=M('brand');

            $id = I('id',1,'intval');

            $brand->where('id='.$id)->delete();
            $this->Record('产品品牌删除成功');//后台操作
            $this->success('删除成功', U('Admin/Brand/index'));
    }
}