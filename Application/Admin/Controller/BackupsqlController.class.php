<?php
namespace Admin\Controller;
use Think\Controller;

class BackupsqlController extends BaseController{
	public $config = '';                                                        //相关配置
	public $model = '';                                                         //实例化一个model
	public $content;                                                            //内容
	public $dbName = '';                                                        //数据库名
	public $dir_sep = '/';
	protected $db =  NULL;                                                      //路径符号
	//初始化数据
	function _initialize() {
		parent::_initialize();
		header("Content-type: text/html;charset=utf-8");
		set_time_limit(0);                                                      //不超时
		ini_set('memory_limit','500M');
		$this->config = array(
			'path' => C('DB_BACKUP'),                                           //备份文件存在哪里
			'isCompress' => 0,                                                  //是否开启gzip压缩      【未测试】
			'isDownload' => 0                                                   //备份完成后是否下载文件 【未测试】
		);
		$this->db   =  \Think\Db::getInstance();
		$this->dbName = C('DB_NAME');                                           //当前数据库名称
		$this->model = M();
		//$sql = 'set interactive_timeout=24*3600';                             //空闲多少秒后 断开链接
		//$this->model>execute($sql);
	}
	/* -
	 * +------------------------------------------------------------------------
	 * * @ 获取数据表
	 * +------------------------------------------------------------------------
	 */
	function tablist() {
		//$count = M('admin')->count();
		//$page = new \Think\Page($count,10);
		//$limit = $page->firstRow . ',' . $page->listRows;
		
		$list = $this->model->query("SHOW TABLE STATUS FROM {$this->dbName}");  //得到表的信息
		//echo $Backup->getLastSql();
		//var_dump ($list);
		$this->assign('list', $list);
		$this->assign('title','饭盒后台管理系统-数据库管理-数据库表段列表');
		$this->assign('loginname',$_SESSION['AdminUser']);
		$this->display();
	}
	public function backupsql() {
		$this->assign('title','饭盒后台管理系统-数据库管理-备份数据库');
		$this->assign('loginname',$_SESSION['AdminUser']);
		$this->tables =$this->db->getTables($this->dbName);
		$this->display();
	}
	/**
     * 导出SQL文件
     * @access public
     * @return void
     */
	public function outputData() {


		@set_time_limit(300);
		$filename   = empty($_POST['tableName'])?$this->dbName:(count($_POST['tableName'])>1?str_replace('.','_',$_SERVER['HTTP_HOST']).'_tables':implode(',',$_POST['tableName']));
		$filename = date("Ymjhisa").$filename;
		$filepath=TEMP_PATH.$filename.'.sql';
		if(file_exists("$filepath")){
			unlink("$filepath");
		}
		$filepath=TEMP_PATH.$filename.'.zip';
		if(file_exists("$filepath")){
			unlink("$filepath");
		}
		//import("ORG.Net.Http");
		if(empty($_POST['tableName'])) {
			// 默认导出所有表
			$tables =$this->db->getTables($this->dbName);
		}else{
			// 导出指定表
			$tables  =  $_POST['tableName'];
		}
		$this->db->execute('USE '.$this->dbName);
		// 组装导出SQL
		foreach($tables as $key=>$table) {
			$sql  .= "-- \n-- 表的结构 `$table`\n-- \n";
			$info  = $this->db->query("SHOW CREATE TABLE  $table");
			$sql   .= $info[0]['Create Table'];
			$sql  .= ";\n-- \n-- 导出表中的数据 `$table`\n--\n";
			$count  =$this->db->query("SELECT count(*) as num FROM $table ");
			$tanumpro=$count[0][num];
			if($tanumpro>5000){
				for($i=0;$i<=$tanumpro;){
					$result  =$this->db->query("SELECT * FROM $table limit $i,5000");
					foreach($result as $key=>$val) {
						foreach ($val as $k=>$field){
							if(is_string($field)) {
								$val[$k] = '\''.$this->db->escapeString($field).'\'';
							}elseif(empty($field)){
								$val[$k] =  'NULL';
							}
						}
						$sql  .= "INSERT INTO `$table` VALUES (".implode(',',$val).");\n";
					}
					$i=$i+5000;
					$fp=fopen(TEMP_PATH.$filename.'.sql',"a+");
					fwrite($fp,$sql);
					fclose($fp);
					$sql='';
				}
			}else{
				$result  =$this->db->query("SELECT * FROM $table ");
				foreach($result as $key=>$val) {
					foreach ($val as $k=>$field){
						if(is_string($field)) {
							$val[$k] = '\''.$this->db->escapeString($field).'\'';
						}elseif(empty($field)){
							$val[$k] =  'NULL';
						}
					}
					$sql  .= "INSERT INTO `$table` VALUES (".implode(',',$val).");\n";
				}
				$fp=fopen(TEMP_PATH.$filename.'.sql',"a+");
				fwrite($fp,$sql);
				fclose($fp);
				$sql='';
			}
		}

		if(empty($_POST['zip'])) {
			//file_put_contents(TEMP_PATH.$filename.'.sql',trim($sql));
			copy(TEMP_PATH.$filename.'.sql',
      "Database/" . $filename.'.sql');
			$this->Record('数据库备份成功');
			$this->success('备份成功');
			
			//\Org\Net\Http::download (TEMP_PATH.$filename.'.sql');
		}else{
			/*echo TEMP_PATH.$filename.'.zip';
			echo $filename.'.sql';
			exit;*/
			$zip = new ZipArchive();
			if ($zip->open(TEMP_PATH.$filename.'.zip', ZIPARCHIVE::CREATE)!==TRUE) {
				exit("cannot open <$filename>\n");
			}
			// $zip->addFromString($filename.'.sql',trim($sql));
			$zip->addFile(TEMP_PATH.$filename.'.sql',$filename.'.sql');
			$zip->close();
			copy(TEMP_PATH.$filename.'.zip',
      "Database/" . $filename.'.zip');
			$this->Record('数据库备份成功');
			$this->success('备份成功');
			
			//\Org\Net\Http::download (TEMP_PATH.$filename.'.zip');
		}
	}
}
?>