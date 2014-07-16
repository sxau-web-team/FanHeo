<?php
namespace Admin\Model;
use Think\Model;
class SmtpModel extends Model{
	protected $_validate = array(
                array('smtp','require','SMTP服务器有误！'),
                array('validation','require','错误'),
                array('send_email','email','邮箱地址有误！'),
                array('password','require','邮箱密码有误！'),
				array('addresser','require','发件人有误！'),
		);
}
?>