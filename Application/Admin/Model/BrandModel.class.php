<?php
namespace Admin\Model;
use Think\Model;
class BrandModel extends Model{
	protected $_validate=array(

	array('name','require','品牌名称必须填写!'),
	array('name','','品牌名称已经存在!',0,'unique',1),

	);
}

?>