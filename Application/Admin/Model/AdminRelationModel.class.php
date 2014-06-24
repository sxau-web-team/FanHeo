<?php   
namespace Admin\Model;
use Think\Model\RelationModel;

class AdminRelationModel extends RelationModel{
		//定义主表名称
		Protected $tableName = 'admin';
		
		//定义关联关系
		Protected $_link = array(
			'role' => array(
				'class_name' => 'role',
				'mapping_type'      =>  self::MANY_TO_MANY,
				'foreign_key' => 'user_id',
				'relation_foreign_key' => 'role_id',
				'relation_table' => 'fanheo_role_user', 
				'mapping_fields' => 'id,name,remark',
				'mapping_name'      =>  'role',
				)

			);
}
?>