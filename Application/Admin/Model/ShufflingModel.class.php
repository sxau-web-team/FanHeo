<?php
namespace Admin\Model;
use Think\Model;
class ShufflingModel extends RelationModel{
	protected $_validate = array(
				array('title','/^[\w\x{4e00}-\x{9fa5}]+$/u','标题有误！'),
				array('title','','标题已经存在',0,'unique'),
				array('url','/^(\w+:\/\/)?\w+(\.\w+)+.*$/','链接有误！'),
				
                array('state','number','状态有误！'),
                
		);
}
?>