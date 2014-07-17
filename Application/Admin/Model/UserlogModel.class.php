<?php
namespace Admin\Model;
use Think\Model\RelationModel;

class UserlogModel extends RelationModel{
	protected $_link=array(
		'user'=> array(  
			'mapping_type'  => self::BELONGS_TO,
			'class_name'=>'user',
            'foreign_key'=>'uid',
            'mapping_name'=>'user',
			'mapping_fields'=>'username',
			'as_fields'=>'username:username',
		),
	);
}
?>