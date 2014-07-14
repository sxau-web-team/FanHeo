<?php
/**  
 * @author 
 * @author 
 */
namespace Admin\Controller;
use Think\Controller;

class SettingController extends Controller{
    //系统设置读取
     public function system(){
        $System = M('system');
        $list = $System->order('`id` asc')->select();
        $this->assign('list',$list);
        $this->display();
    }
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
        $this->display();
    }
	//邮箱管理
	public function email(){

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
    //管理员操作记录
    public function operation(){
        $Operation = M('operation');
        $count      = $Operation->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,30);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Operation->limit($Page->firstRow.','.$Page->listRows)->order('time DESC')->select();
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('list',$list);
        $this->display();
    }

}