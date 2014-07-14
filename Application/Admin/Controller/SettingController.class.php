<?php
/**  
 * @author 
 * @author 
 */
namespace Admin\Controller;
use Think\Controller;

class SettingController extends Controller{
	//邮箱管理
	public function email(){
		
		//think_send_mail('1135326346@qq.com','dubuqingfeng','果果你好。。','果果你好');

        $email = M('smtp');
        $list = $email->select();
        $this->assign('vo',$list);
        $this->display();
    }
    //邮箱保存
    public function email_send(){
            $system=D('Smtp');
			if($system->create()){
				  $result = $system->save();
				 if($result){
					 $this->Record('SMTP修改成功');//后台操作
					 $this->success('修改成功', '__URL__/email');
					
				 }else{
					 $this->Record('SMTP修改失败');//后台操作
					$this->error("修改失败");
				 }			 			
			}else{
				 $this->error($system->getError());
			}
    }
   }