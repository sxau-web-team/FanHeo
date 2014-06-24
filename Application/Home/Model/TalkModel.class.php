<?php 
namespace Home\Model;
use Think\Model\RelationModel;
class TalkModel extends RelationModel{
	protected $tableName = "talk";
	protected $_link =array(
		'user' => array(
			'mapping_type'	=> self::BELONGS_TO,
			'class_name'	=> 'user',
			//'foreign_key'	=> 'user_id',
			'mapping_name'	=> 'talk_user',
			//'relation_foreign_key'	=> 'id',
			'as_fields' => 'username,head_ico',
			),
		);
}
?>