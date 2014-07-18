<?php
/**  
 * @author 
 * @author 
 */
namespace Admin\Controller;
use Think\Controller;

class SettingController extends BaseController{
    //系统设置读取
     public function system(){
        $System = M('system');
        $list = $System->order('`id` asc')->select();
        $this->assign('list',$list);
                $this->assign('title','饭盒后台管理系统-系统设置-系统设置');
        $this->assign('loginname',$_SESSION['AdminUser']);
        $this->display();
    }
    //服务器信息
    public function info(){
        $info = array(
            '操作系统'=>php_uname(),
            '运行环境'=>$_SERVER["SERVER_SOFTWARE"],
            'PHP运行方式'=>php_sapi_name(),
            '版本'=>C('SYSTEM_NAME').C('SYSTEM_VAR').' [ <a href="https://github.com/sxau-web-team/FanHeo" target="_blank">查看最新版本</a> ]',
            '上传附件限制'=>ini_get('upload_max_filesize'),
            '执行时间限制'=>ini_get('max_execution_time').'秒',
            '服务器时间'=>date("Y年n月j日 H:i:s"),
            '北京时间'=>gmdate("Y年n月j日 H:i:s",time()+8*3600),
            '服务器域名/IP'=>$_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]',
            '剩余空间'=>round((@disk_free_space(".")/(1024*1024)),2).'M',
            'register_globals'=>get_cfg_var("register_globals")=="1" ? "ON" : "OFF",
            'magic_quotes_gpc'=>(1===get_magic_quotes_gpc())?'YES':'NO',
            'magic_quotes_runtime'=>(1===get_magic_quotes_runtime())?'YES':'NO',
            '客户端IP'=>$_SERVER['REMOTE_ADDR'],  
            '服务器cpu数量'=>$_SERVER['PROCESSOR_IDENTIFIER'],
            'php版本'     =>PHP_VERSION,
            );
        $this->info=$info;
        $this->assign('title','饭盒后台管理系统-系统设置-服务器信息');
        $this->assign('loginname',$_SESSION['AdminUser']);
        $this->display();
    }
	//邮箱管理
	public function email(){
        $email = M('smtp');
        $list = $email->select();
        $this->assign('vo',$list);
        $this->assign('title','饭盒后台管理系统-系统设置-邮箱设置');
        $this->assign('loginname',$_SESSION['AdminUser']);
        $this->display();
    }
    //邮箱保存
    public function email_send(){
            $system=D('Smtp');
            if($system->create()){
                  $result = $system->save();
                 if($result){
                     $this->Record('SMTP修改成功');//后台操作
                     $this->success('修改成功', U('Admin/Setting/email'));
                    
                 }else{
                    $this->Record('SMTP修改失败');//后台操作
                    $this->error("修改失败");
                 }                      
            }else{
                 $this->error($system->getError());
            }
    }
    //管理员操作记录
    public function operation(){
        $Operation = M('operation');
        $count      = $Operation->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,30);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
        $list = $Operation->limit($Page->firstRow.','.$Page->listRows)->order('time DESC')->select();
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('list',$list);
        $this->assign('title','饭盒后台管理系统-系统设置-管理员操作记录');
        $this->assign('loginname',$_SESSION['AdminUser']);
        $this->display();
    }
    //用户记录
     public function userlog(){
            $Operation = D("Userlog");
            //import('ORG.Util.Page');// 导入分页类
            $count      = $Operation->count();// 查询满足要求的总记录数
            $Page       = new \Think\Page($count,30);// 实例化分页类 
            $show       = $Page->show();// 分页显示输出
            $list = $Operation->relation(true)->limit($Page->firstRow.','.$Page->listRows)->order('time DESC')->select();
            $this->assign('page',$show);// 赋值分页输出
            $this->assign('list',$list);
            $this->assign('title','饭盒后台管理系统-系统设置-管理员操作记录');
            $this->assign('loginname',$_SESSION['AdminUser']);
            $this->display();
    }
    //友情链接
    public function links(){
        $shuff = M('links');
        $list = $shuff->select();
        $this->assign('list',$list);
        $this->assign('title','饭盒后台管理系统-系统设置-友情链接管理');
        $this->assign('loginname',$_SESSION['AdminUser']);
        $this->display();
    }
    //添加友情链接
    Public function addlink(){
        $this->assign('title','饭盒后台管理系统-系统设置-添加友情链接');
        $this->assign('loginname',$_SESSION['AdminUser']);
        $this->display();
    }
    //添加友情链接处理
    public function addlinkhandler(){
            $Shuff=D('Links');
            if(!$Shuff->create()){
                    $this->error($Shuff->getError());
            }
            $Shuff->time=time();
            $last=$Shuff->add();
            if($last){
                $this->Record('添加友情链接成功');//后台操作
                $this->success('添加成功', U('Admin/Setting/links'));
            }else{
                $this->Record('添加友情链接失败');//后台操作
                $this->error('友情链接添加失败');
            }
    }
    //友情链接编辑页
    public function editlink(){
            $Shuff = M('links');
            $id = I('id',1,'intval');
            $edlist = $Shuff->where('id='.$id)->select();
            $this->assign('edlist',$edlist);
            $this->assign('title','饭盒后台管理系统-系统设置-修改友情链接');
            $this->assign('loginname',$_SESSION['AdminUser']);
            $this->display();
    }
    //友情链接编辑页保存
    public function editlinkhandler(){
            $Shuff=D('links');
            if($Shuff->create()){
                  $result = $Shuff->save();
                 if($result){
                     $this->Record('友情链接修改成功');//后台操作
                     $this->success('修改成功',  U('Admin/Setting/links'));
                    
                 }else{
                    $this->Record('友情链接修改失败');//后台操作
                    $this->error("修改失败");
                 }                      
            }else{
                 $this->error($Shuff->getError());
            }
    }
    //友情链接删除
    public function delelink(){
            $Shuff=M('links');

            $id = I('id',1,'intval');

            $Shuff->where('id='.$id)->delete();
            $this->Record('友情链接删除成功');//后台操作
            $this->success('删除成功', U('Admin/Setting/links'));
    }

}