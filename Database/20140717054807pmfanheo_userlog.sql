-- 
-- 表的结构 `fanheo_userlog`
-- 
CREATE TABLE `fanheo_userlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `actionname` varchar(40) NOT NULL,
  `page` varchar(100) NOT NULL,
  `time` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='用户操作表';
-- 
-- 导出表中的数据 `fanheo_userlog`
--
INSERT INTO `fanheo_userlog` VALUES ('1','1','会员注册成功','/fanheo/index.php/Logo/addreg','1405385381','127.0.0.1');
INSERT INTO `fanheo_userlog` VALUES ('2','1','会员登陆','/fanheo/index.php/Logo/loging','1405385415','127.0.0.1');
INSERT INTO `fanheo_userlog` VALUES ('3','0','会员登陆','/fanheo/index.php/Home/Login/Login','1405589864','127.0.0.1');
INSERT INTO `fanheo_userlog` VALUES ('4','0','会员登陆','/FanHeo/index.php/Home/Login/Login','1405590032','127.0.0.1');
INSERT INTO `fanheo_userlog` VALUES ('5','9','会员登陆','/fanheo/index.php/Home/Login/Login','1405590329','127.0.0.1');
