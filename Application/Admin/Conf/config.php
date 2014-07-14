<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE' 	=> 'mysql',
	'DB_HOST'	=> 'localhost',
	'DB_NAME' 	=> 'FanHeo',
	'DB_USER'	=> 'root',
	'DB_PWD'	=> 'root',
	'DB_PORT'	=> '3306',
	'DB_PREFIX'	=> 'fanheo_',
	'DB_CHARSET'=> 'utf8',
	
	'AUTOLOAD_NAMESPACE' => array(
    'Class' => APP_PATH.'Class',
    ),
	'SHOW_PAGE_TRACE' =>true, 
    'RBAC_SUPERADMIN' => 'admin',
    'ADMIN_AUTH_KEY'	=>  'administrator',
    'USER_AUTH_ON'  	=>  true,
    'USER_AUTH_TYPE'	=>  1,		// 默认认证类型 1 登录认证 2 实时认证
	'USER_AUTH_KEY'     =>  'authId',	// 用户认证SESSION标记
	'NOT_AUTH_MODULE'   =>  'Login',	// 默认无需认证模块
 	'NOT_AUTH_ACTION'   =>  'loginout,do_login',	
 	//'NOT_AUTH_A'	// 默认无需认证操作
	'RBAC_ROLE_TABLE'   =>  'fanheo_role',
    'RBAC_USER_TABLE'   =>  'fanheo_role_user',
    'RBAC_ACCESS_TABLE' =>  'fanheo_access',
    'RBAC_NODE_TABLE'   =>  'fanheo_node',
    'REQUIRE_AUTH_ACTION'       =>  '',		// 默认需要认证操作
    'GUEST_AUTH_ON'             =>  false,    // 是否开启游客授权访问
    'GUEST_AUTH_ID'             =>  0,        // 游客的用户ID
    'USER_AUTH_MODEL'           =>  'Admin',	// 默认验证数据表模型
    'AUTH_PWD_ENCODER'          =>  'md5',	// 用户认证密码加密方式
    /*'URL_MODEL'                 =>  2, // 如果你的环境不支持PATHINFO 请设置为3
    'APP_AUTOLOAD_PATH'         =>  '@.TagLib',
   ' SESSION_AUTO_START'        =>  true,
    'TMPL_ACTION_ERROR'         =>  'Public:success', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'       =>  'Public:success', // 默认成功跳转对应的模板文件
    'USER_AUTH_MODEL'           =>  'User',	// 默认验证数据表模型
    'AUTH_PWD_ENCODER'          =>  'md5',	// 用户认证密码加密方式
    'USER_AUTH_GATEWAY'         =>  '/PUBLIC/login',// 默认认证网关
    
    'REQUIRE_AUTH_MODULE'       =>  '',		// 默认需要认证模块
   

    'DB_LIKE_FIELDS'            =>  'title|remark',
    
*/
);