<?php
return array(
	//'配置项'=>'配置值'
	'THINK_EMAIL' => array(
    'SMTP_HOST'   => 'smtp.163.com', //SMTP服务器
    'SMTP_PORT'   => '465', //SMTP服务器端口
    'SMTP_USER'   => 'fanheotest@163.com', //SMTP服务器用户名
    'SMTP_PASS'   => 'testfanheo', //SMTP服务器密码
    'FROM_EMAIL'  => 'fanheotest@163.com', //发件人EMAIL
    'FROM_NAME'   => 'fanheo', //发件人名称
    'REPLY_EMAIL' => '', //回复EMAIL（留空则为发件人EMAIL）
    'REPLY_NAME'  => '', //回复名称（留空则为发件人名称）
),
	 /* 支付设置 */
    'payment' => array(
        'tenpay' => array(
            // 加密key，开通财付通账户后给予
            'key' => 'e82573dc7e6136ba414f2e2affbe39fa',
            // 合作者ID，财付通有该配置，开通财付通账户后给予
            'partner' => '1900000113'
        ),
        'alipay' => array(
            // 收款账号邮箱
            'email' => '',
            // 加密key，开通支付宝账户后给予
            'key' => '',
            // 合作者ID，支付宝有该配置，开通易宝账户后给予
            'partner' => ''
        ),
        'palpay' => array(
            'business' => 'zyj@qq.com'
        ),
        'yeepay' => array(
            'key' => '69cl522AV6q613Ii4W6u8K6XuW8vM1N6bFgyv769220IuYe9u37N4y7rI4Pl',
            'partner' => '10001126856'
        ),
        'kuaiqian' => array(
            'key' => '1234567897654321',
            'partner' => '1000300079901'
        ),
        'unionpay' => array(
            'key' => '88888888',
            'partner' => '105550149170027'
        )
    )
);