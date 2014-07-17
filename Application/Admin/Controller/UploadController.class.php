<?php
namespace Admin\Controller;
use Think\Controller;

class UploadController extends BaseController {
 
	public function index(){
	    $this->display();
	}
 
	/*
	*@文件上传
	*@author    FineYi
	*@date        2013-01-23
	*/
	public function upLoadFile(){
	    $error = "";
	    $msg = "";
	    $fileElementName = 'fileToUpload';
	    if(!empty($_FILES[$fileElementName]['error'])){
	        switch($_FILES[$fileElementName]['error']){
	            case '1':
	                $error = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
	                break;
	            case '2':
	                $error = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
	                break;
	            case '3':
	                $error = 'The uploaded file was only partially uploaded';
	                break;
	            case '4':
	                $error = 'No file was uploaded.';
	                break;
	 
	            case '6':
	                $error = 'Missing a temporary folder';
	                break;
	            case '7':
	                $error = 'Failed to write file to disk';
	                break;
	            case '8':
	                $error = 'File upload stopped by extension';
	                break;
	            case '999':
	            default:
	                $error = 'No error code avaiable';
	        }
	    }elseif(empty($_FILES['fileToUpload']['tmp_name']) || $_FILES['fileToUpload']['tmp_name'] == 'none'){
	        $error = 'No file was uploaded..';
	    }else{
	            $re = $this->up();
	            if(!$re){
	                $error = 'Up file fail';
	            }
	            $msg = $re['savename'];    //文件名
	            $path = '/upload/bizcoop/'.$msg;    //文件路径
	            $size = $re['size'];    //文件大小
	    }        
	    echo json_encode(array('error'=>$error,'msg'=>$msg,'path'=>$path,'size'=>$size));
	    exit;
	}
 
	private function up(){
	   // import('@.Org.UploadFile');//将上传类UploadFile.class.php拷到Lib/Org文件夹下
	    $upload=new \Think\UploadFile();
	 
	    $upload->maxSize='-1';//默认为-1，不限制上传大小
	    $upload->savePath= ICTSPACE_DIST_ROOT_PATH.'/www/upload/bizcoop/';//保存路径
	    $upload->saveRule=uniqid;//上传文件的文件名保存规则
	    $upload->uploadReplace=true;//如果存在同名文件是否进行覆盖
	    $upload->allowExts=array('jpg','jpeg','png','gif');//准许上传的文件类型
	    if($upload->upload()){
	        $info=$upload->getUploadFileInfo();
	        return $info[0];
	    }else{
	        return false;
	        exit;
	    }
	}
 
}
?>