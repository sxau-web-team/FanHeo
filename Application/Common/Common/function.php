<?php
     /**
     * 系统邮件发送函数
     * @param string $to    接收邮件者邮箱
     * @param string $name  接收邮件者名称
     * @param string $subject 邮件主题 
     * @param string $body    邮件内容
     * @param string $attachment 附件列表
     * @return boolean 
     */
    function think_send_mail($to, $name, $subject = '', $body = '', $attachment = null){
        
        $email = M('smtp');
        $list = $email->select();
        vendor('PHPMailer.class#phpmailer'); //从PHPMailer目录导class.phpmailer.php类文件
        $mail             = new \Vendor\PHPMailer(); //PHPMailer对象
        $mail->CharSet    = 'UTF-8'; //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
        $mail->IsSMTP();  // 设定使用SMTP服务
        $mail->SMTPDebug  = 0;                     // 关闭SMTP调试功能
                                                   // 1 = errors and messages
                                                   // 2 = messages only
        $mail->SMTPAuth   = $list[0][validation]?true:false;                  // 启用 SMTP 验证功能
        $mail->SMTPSecure = 'ssl';                 // 使用安全协议
        $mail->Host       = $list[0][smtp];  // SMTP 服务器
        $mail->Port       = $list[0][smtp_port];  // SMTP服务器的端口号
        $mail->Username   = $list[0][send_email];  // SMTP服务器用户名
        $mail->Password   = $list[0][password];   // SMTP服务器密码
        $mail->SetFrom($list[0][from_email], $list[0][from_name]);
        $replyEmail       = $list[0][reply_email]?$list[0][reply_email]:$list[0][from_email];
        $replyName        = $list[0][reply_name]?$list[0][reply_name]:$list[0][from_name];
        $mail->AddReplyTo($replyEmail, $replyName);
        $mail->Subject    = $subject;
        $mail->MsgHTML($body);
        $mail->AddAddress($to, $name);
        if(is_array($attachment)){ // 添加附件
            foreach ($attachment as $file){
                is_file($file) && $mail->AddAttachment($file);
            }
        }
        return $mail->Send() ? true : $mail->ErrorInfo;
    }
    ?>