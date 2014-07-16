-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-07-16 11:54:42
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fanheo`
--

-- --------------------------------------------------------

--
-- 表的结构 `fanheo_access`
--

CREATE TABLE IF NOT EXISTS `fanheo_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `fanheo_admin`
--

CREATE TABLE IF NOT EXISTS `fanheo_admin` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(33) NOT NULL,
  `roletype` int(11) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `lastip` varchar(18) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `lastlogintime` int(10) unsigned DEFAULT NULL,
  `truename` varchar(10) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `loginip` varchar(18) DEFAULT NULL,
  `logintime` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `fanheo_admin`
--

INSERT INTO `fanheo_admin` (`uid`, `username`, `password`, `roletype`, `mobile`, `phone`, `lastip`, `email`, `sex`, `lastlogintime`, `truename`, `num`, `loginip`, `logintime`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 13500000000, NULL, '127.0.0.1', NULL, NULL, 1405469471, NULL, 25, '127.0.0.1', 1405499150),
(2, 'guodong', 'e35cf7b66449df565f93c607d5a81d09', 0, 0, NULL, '127.0.0.1', NULL, NULL, 1403574143, NULL, 5, '127.0.0.1', 1403592003);

-- --------------------------------------------------------

--
-- 表的结构 `fanheo_announcement`
--

CREATE TABLE IF NOT EXISTS `fanheo_announcement` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `fanheo_article`
--

CREATE TABLE IF NOT EXISTS `fanheo_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `category_id` int(11) unsigned NOT NULL,
  `create_time` datetime NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `top` tinyint(1) NOT NULL DEFAULT '0',
  `sort` tinyint(1) NOT NULL DEFAULT '0',
  `if_push` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `fanheo_article_category`
--

CREATE TABLE IF NOT EXISTS `fanheo_article_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `pid` int(11) unsigned NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `fanheo_article_category`
--

INSERT INTO `fanheo_article_category` (`id`, `name`, `pid`, `sort`) VALUES
(1, '美食', 0, 1),
(2, '健康', 0, 4),
(3, '新鲜事', 0, 1),
(4, '米饭', 1, 1),
(5, '汤', 1, 2),
(6, '校园动态', 3, 1),
(7, '创业', 3, 2),
(8, '大米', 4, 2),
(9, '社会', 3, 3),
(10, '小米', 4, 3),
(11, '蛋汤', 5, 2),
(12, '水果汤', 5, 3),
(13, '互联网', 3, 1),
(14, '肉类', 1, 1),
(15, '猪肉', 14, 2),
(16, '鸡肉', 15, 2),
(17, '面食', 0, 1),
(18, '计算机', 0, 3),
(19, '热菜', 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `fanheo_category`
--

CREATE TABLE IF NOT EXISTS `fanheo_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `pid` int(11) unsigned NOT NULL,
  `sort` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `fanheo_category`
--

INSERT INTO `fanheo_category` (`id`, `name`, `pid`, `sort`) VALUES
(1, '主食', 0, 1),
(2, '副食', 0, 2),
(3, '面食', 1, 1),
(4, '汤类', 1, 2),
(5, '热食', 1, 3),
(6, '冷食', 1, 4),
(7, '酒水', 2, 1),
(8, '啤酒', 7, 1),
(9, '饮料', 7, 2),
(10, '乳品', 2, 2);

-- --------------------------------------------------------

--
-- 表的结构 `fanheo_comment`
--

CREATE TABLE IF NOT EXISTS `fanheo_comment` (
  `id` int(11) unsigned NOT NULL,
  `goods_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `time` datetime NOT NULL,
  `contents` text,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `fanheo_favorite`
--

CREATE TABLE IF NOT EXISTS `fanheo_favorite` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `cat_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `fanheo_goods`
--

CREATE TABLE IF NOT EXISTS `fanheo_goods` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `goods_no` varchar(20) NOT NULL,
  `sell_price` decimal(15,2) NOT NULL,
  `old_price` decimal(15,2) DEFAULT NULL,
  `up_time` datetime DEFAULT NULL,
  `down_time` datetime DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `content` text,
  `keywords` varchar(255) DEFAULT NULL,
  `search_words` text,
  `point` int(11) NOT NULL DEFAULT '0',
  `list_img` varchar(255) DEFAULT NULL,
  `small_img` varchar(255) DEFAULT NULL,
  `exp` int(11) DEFAULT '0',
  `cid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `fanheo_goods`
--

INSERT INTO `fanheo_goods` (`id`, `name`, `goods_no`, `sell_price`, `old_price`, `up_time`, `down_time`, `create_time`, `img`, `status`, `content`, `keywords`, `search_words`, `point`, `list_img`, `small_img`, `exp`, `cid`) VALUES
(1, '一只盖饭', '两只盖饭', '3.50', '5.12', '2014-07-10 00:00:00', '2014-07-22 00:00:00', '2014-07-14 00:00:00', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, 0),
(2, '一只饮料', '', '5.63', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 1, '葡萄糖饮料', '饮料', NULL, 0, NULL, NULL, 3, 0),
(3, '一只计算机书', '', '58.00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 1, 'java语言程序设计', '第三版', NULL, 0, NULL, NULL, 3, 0),
(4, '林子祥', '', '56.00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 1, '一只香港歌手', '香港', NULL, 0, NULL, NULL, 136, 0),
(5, '陈百强', '', '122.00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 1, '香港歌手一只', '123456', NULL, 789456, NULL, NULL, 52, 0),
(6, '刘德华', '', '123.00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 1, '56874', '125478', NULL, 0, NULL, NULL, 25, 0),
(7, '黄家驹', '', '589.00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 1, '香港歌手一枚', 'hh', NULL, 0, NULL, NULL, 42, 0),
(8, '32145', '', '1236.00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 1, '321456', '321458', NULL, 123456, NULL, NULL, 321, 0),
(9, '286', '', '32145.00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 1, '计算机一枚', '321', NULL, 123, NULL, NULL, 21, 0),
(10, '386', '', '31.00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 1, '346', '35', NULL, 25, NULL, NULL, 45, 0),
(11, '486', '', '45.00', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 1, '计算机一枚', '32', NULL, 12, NULL, NULL, 32, 0),
(12, '2', '2', '22.00', '2.00', NULL, NULL, '0000-00-00 00:00:00', NULL, 1, '2', '2', NULL, 22, NULL, NULL, 22, 0);

-- --------------------------------------------------------

--
-- 表的结构 `fanheo_member`
--

CREATE TABLE IF NOT EXISTS `fanheo_member` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `real_name` varchar(50) DEFAULT NULL COMMENT '真实姓名',
  `words` varchar(52) DEFAULT NULL COMMENT '个性签名',
  `phone` varchar(20) DEFAULT NULL COMMENT '手机',
  `area` varchar(255) DEFAULT NULL COMMENT '地区',
  `address` varchar(250) DEFAULT NULL COMMENT '联系地址',
  `qq` varchar(15) DEFAULT NULL COMMENT 'QQ',
  `sex` tinyint(1) NOT NULL DEFAULT '1' COMMENT '性别1男2女',
  `birthday` date DEFAULT NULL COMMENT '生日',
  `group_id` int(11) DEFAULT NULL COMMENT '分组',
  `exp` int(11) NOT NULL DEFAULT '0' COMMENT '经验值',
  `point` int(11) NOT NULL DEFAULT '0' COMMENT '积分',
  `time` datetime DEFAULT NULL COMMENT '注册日期时间',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '用户状态 1正常状态 2\n删除至回收站 3锁定',
  `last_login` datetime DEFAULT NULL COMMENT '最后一次登录时间',
  `last_ip` varchar(50) DEFAULT NULL COMMENT '最后登录ip',
  `register_ip` varchar(50) DEFAULT NULL COMMENT '注册ip',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户信息表' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `fanheo_member`
--

INSERT INTO `fanheo_member` (`user_id`, `real_name`, `words`, `phone`, `area`, `address`, `qq`, `sex`, `birthday`, `group_id`, `exp`, `point`, `time`, `status`, `last_login`, `last_ip`, `register_ip`) VALUES
(1, '郭栋', 'show_userinfomationa l；啊大家看法监督法律框架是对方；粮食店街分 了可是大家分', '18404968728', '山西', '山西农业大学', '871379151', 1, '1995-02-26', 1, 0, 20, '2014-06-21 01:43:37', 1, '2014-06-21 01:43:37', '127.0.0.1', '127.0.0.1'),
(2, 'li', NULL, '18402315445', NULL, NULL, NULL, 1, NULL, NULL, 0, 0, '2014-06-21 01:43:37', 1, '2014-06-23 21:18:38', '127.0.0.1', '127.0.0.1'),
(3, 'li', NULL, '18402315445', NULL, NULL, NULL, 1, NULL, NULL, 0, 0, '2014-06-21 01:43:37', 1, '2014-06-21 01:43:37', '127.0.0.1', '127.0.0.1'),
(4, 'li', NULL, '18402315445', NULL, NULL, NULL, 1, NULL, NULL, 0, 0, '2014-06-21 01:43:37', 1, NULL, NULL, '127.0.0.1'),
(5, 'li', NULL, '18402315445', NULL, NULL, NULL, 1, NULL, NULL, 0, 0, '2014-06-21 01:43:37', 1, '2014-06-24 09:26:23', '127.0.0.1', '127.0.0.1'),
(6, 'guodong', 'show_userinfomationa l；啊大家看法监督法律框架是对方；粮食店街分 了可是大家分', '18404968725', '山西', '山西农业大学', '871379151', 1, '1995-02-26', 1, 0, 0, '2014-06-21 01:43:37', 1, '2014-06-24 14:36:42', '127.0.0.1', '127.0.0.1'),
(7, '123', NULL, '234', NULL, NULL, NULL, 1, NULL, NULL, 0, 0, '0000-00-00 00:00:00', 1, NULL, NULL, '127.0.0.1'),
(8, '李', NULL, '15421545454', NULL, NULL, NULL, 2, NULL, NULL, 0, 0, '2014-06-23 21:20:41', 1, '2014-06-23 21:21:08', '127.0.0.1', '127.0.0.1');

-- --------------------------------------------------------

--
-- 表的结构 `fanheo_node`
--

CREATE TABLE IF NOT EXISTS `fanheo_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `fanheo_node`
--

INSERT INTO `fanheo_node` (`id`, `name`, `title`, `status`, `remark`, `sort`, `pid`, `level`) VALUES
(1, 'admin', '后台应用', 1, NULL, 1, 0, 1),
(2, 'a', '前台应用', 1, NULL, 1, 0, 1),
(3, 'a', '前台应用', 1, NULL, 1, 0, 1),
(4, 'Category', '文章分类', 1, NULL, 1, 1, 2),
(5, 'admin', NULL, 1, '后台', 1, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `fanheo_operation`
--

CREATE TABLE IF NOT EXISTS `fanheo_operation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `page` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `type` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ip` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='操作记录' AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `fanheo_operation`
--

INSERT INTO `fanheo_operation` (`id`, `name`, `page`, `type`, `ip`, `time`) VALUES
(1, 'admin', '/Dswjcms2.0/index.php/Admin/Logo.html', '管理员登陆成功', '127.0.0.1', 1405296377),
(2, 'admin', '/Dswjcms2.0/index.php/Admin/Logo.html', '管理员登陆成功', '127.0.0.1', 1405338920),
(3, 'admin', '/fanheo/index.php/Admin/Setting/email_send.html', 'SMTP修改失败', '127.0.0.1', 1405416498),
(4, 'admin', '/fanheo/index.php/Admin/Setting/email_send.html', 'SMTP修改失败', '127.0.0.1', 1405416529),
(5, 'admin', '/fanheo/index.php/Admin/Setting/email_send.html', 'SMTP修改失败', '127.0.0.1', 1405416734),
(6, 'admin', '/fanheo/index.php/Admin/Setting/email_send.html', 'SMTP修改失败', '127.0.0.1', 1405416755),
(7, 'admin', '/fanheo/index.php/Admin/Setting/email_send.html', 'SMTP修改失败', '127.0.0.1', 1405417158),
(8, 'admin', '/fanheo/index.php/Admin/Setting/email_send.html', 'SMTP修改失败', '127.0.0.1', 1405503761),
(9, 'admin', '/fanheo/index.php/Admin/Setting/email_send.html', 'SMTP修改失败', '127.0.0.1', 1405503783),
(10, 'admin', '/fanheo/index.php/Admin/Setting/email_send.html', 'SMTP修改成功', '127.0.0.1', 1405503841),
(11, 'admin', '/fanheo/index.php/Admin/Setting/email_send.html', 'SMTP修改成功', '127.0.0.1', 1405503873);

-- --------------------------------------------------------

--
-- 表的结构 `fanheo_order`
--

CREATE TABLE IF NOT EXISTS `fanheo_order` (
  `id` int(11) unsigned NOT NULL,
  `order_no` varchar(20) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `pay_type` int(11) unsigned NOT NULL,
  `distribution` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `pay_status` tinyint(1) NOT NULL DEFAULT '0',
  `distribution_status` tinyint(1) NOT NULL DEFAULT '0',
  `user_name` varchar(45) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `amount` decimal(15,2) DEFAULT '0.00',
  `send_time` datetime DEFAULT NULL,
  `creat_time` datetime DEFAULT NULL,
  `completion_time` datetime DEFAULT NULL,
  `note` text,
  `postscript` varchar(255) DEFAULT NULL,
  `if_print` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `fanheo_order_goods`
--

CREATE TABLE IF NOT EXISTS `fanheo_order_goods` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) unsigned NOT NULL,
  `goods_id` int(11) unsigned DEFAULT NULL,
  `goods_price` decimal(15,2) NOT NULL DEFAULT '0.00',
  `goods_num` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `fanheo_relation`
--

CREATE TABLE IF NOT EXISTS `fanheo_relation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userA` int(11) unsigned NOT NULL,
  `userB` int(11) unsigned NOT NULL,
  `relation` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `fanheo_role`
--

CREATE TABLE IF NOT EXISTS `fanheo_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `fanheo_role`
--

INSERT INTO `fanheo_role` (`id`, `name`, `pid`, `status`, `remark`) VALUES
(1, 'admin', NULL, 1, '超级管理员'),
(2, 'productmanager', NULL, 1, '产品管理员'),
(3, 'Logisticmanage', NULL, 1, '物流管理员'),
(4, 'Logisticmanage', NULL, 1, '物流管理员'),
(5, 'shop', NULL, 1, '订单统计人员'),
(6, 'smtp.126.com', NULL, 1, 'abcd12345');

-- --------------------------------------------------------

--
-- 表的结构 `fanheo_role_user`
--

CREATE TABLE IF NOT EXISTS `fanheo_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `fanheo_role_user`
--

INSERT INTO `fanheo_role_user` (`role_id`, `user_id`) VALUES
(1, '2');

-- --------------------------------------------------------

--
-- 表的结构 `fanheo_smtp`
--

CREATE TABLE IF NOT EXISTS `fanheo_smtp` (
  `id` tinyint(1) NOT NULL,
  `smtp` varchar(255) NOT NULL,
  `validation` tinyint(1) NOT NULL COMMENT '是否启用 SMTP 验证功能',
  `send_email` varchar(255) NOT NULL COMMENT 'SMTP服务器用户名',
  `password` varchar(15) NOT NULL COMMENT 'SMTP服务器密码',
  `addresser` varchar(15) NOT NULL COMMENT '发件人名称',
  `smtp_port` smallint(5) unsigned NOT NULL COMMENT 'SMTP服务器端口',
  `from_email` varchar(255) NOT NULL COMMENT '发件人EMAIL',
  `from_name` varchar(15) NOT NULL COMMENT '发件人名字',
  `reply_email` varchar(255) NOT NULL COMMENT '回复EMAIL',
  `reply_name` varchar(15) NOT NULL COMMENT '回复名字',
  PRIMARY KEY (`id`),
  UNIQUE KEY `send_email` (`send_email`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='邮件设置表';

--
-- 转存表中的数据 `fanheo_smtp`
--

INSERT INTO `fanheo_smtp` (`id`, `smtp`, `validation`, `send_email`, `password`, `addresser`, `smtp_port`, `from_email`, `from_name`, `reply_email`, `reply_name`) VALUES
(1, 'smtp.163.com', 1, 'fanheotest@163.com', 'testfanheo', '饭盒网', 465, 'fanheotest@163.com', '饭盒网', 'fanheotest@163.com', '饭盒网');

-- --------------------------------------------------------

--
-- 表的结构 `fanheo_talk`
--

CREATE TABLE IF NOT EXISTS `fanheo_talk` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `content` varchar(255) NOT NULL,
  `img1` varchar(255) DEFAULT '0',
  `img2` varchar(255) DEFAULT '0',
  `time` datetime NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `fanheo_talkcol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `fanheo_talk`
--

INSERT INTO `fanheo_talk` (`id`, `user_id`, `content`, `img1`, `img2`, `time`, `status`, `fanheo_talkcol`) VALUES
(1, 6, '123', '0', '0', '2014-06-23 19:14:09', 1, NULL),
(2, 6, '&lt;?php\r\n/**\r\n*递归重组节点信息为多维数组\r\n*/\r\nfunction node_merge($node,$access = NULL, $pid = 0){\r\n\r\n$arr = array();\r\n\r\nforeach ($node as $v ) {\r\nif (is_array($access)) {\r\n$v[''access''] = in_array($v[''id''], $access) ? 1:0;\r\n# code...\r\n}\r\nif($v[''pid''] == $pid){\r\n$v[''', '0', '0', '2014-06-23 19:14:33', 1, NULL),
(3, 6, 'helloworld', '0', '0', '2014-06-23 19:14:48', 1, NULL),
(4, 6, '伤了，自然痛，没有一个人伤了不痛。人生，坎坎坷坷，曲曲折折，每个人难免受伤，难免不受一些委屈，谁也不会永远幸运。但是，不论伤的怎样，痛的如何，最终，我们都要努力，都要坚强。无论面临怎样的困难，怎样的挫折，都不要丧失生活的信心，失去人生的信念。路再难，道再艰，努力，就有改善的可能。', '0', '0', '2014-06-23 19:15:13', 1, NULL),
(5, 6, '生活总是起伏跌荡，不要抱怨什么，你就是再快乐，也会有烦忧;你就算再倒霉，亦会有幸运。我们以为人生是出悲剧或者喜剧，其实不然，你能走出悲剧，最终往往是喜剧;你若沉湎喜剧，结局又常常是悲剧。哭笑犬牙交错，悲喜时刻轮回，哭的时候学会遗忘，笑的时候与人分享，没人愿意哭，没人拒绝笑。', '0', '0', '2014-06-23 19:15:42', 1, NULL),
(6, 6, '生活中，并不是所有的坚强都是真实的，也不是所有的微笑都是真诚的。许多的时候我们不想坚强，但不得不坚强，我们不愿微笑，但又不得不微笑。人生就是这样，有时行为是心灵真实的体现，有时却不是，不是所有的阴天都会下雨，也不是每次的伤心都会流泪。人生总有无奈，总有伪善，这就是生活。', '0', '0', '2014-06-23 19:15:59', 1, NULL),
(7, 6, '寻求梦想走自己的路上，必须做好随时有可能被边缘化的勇气。因为不是每个人都能理解你的梦想，不是每个人都能在取得辉煌时与你同欢，与你落寞时共饮。人生这条路说容易也容易，说艰难也艰难。你对外界的需求越少，就越有可能活得自如和安详。只有这样你才能随时边缘化自己，随时被他人边缘化。', '0', '0', '2014-06-23 19:16:30', 1, NULL),
(8, 6, '人生在世总有为难之事，也有不喜之人，有时即使难也要做，即使不喜欢也要去接触。生活，就是这样，无论如何总得去进行。生活不会按我们的要求去安排，人生也不会随我们的意愿来组织，我们只能适应，只能接受。渐渐就会明白，生活是自己的，别人是次要的，学会待人，学会处事，慢慢去适应生活。', '0', '0', '2014-06-23 19:17:06', 1, NULL),
(9, 6, '人生如河，苦是转弯：思量和抉择，得到和失去，拿得起和放得下，我们需要放弃、割舍和遗忘；人生如叶，苦是漂泊：飘零的心，触碰不到依靠的岸。人生最大的痛苦就是心灵没有归属，不管你知不知觉，承不承认。心存美好，则无可恼之事；心存善良，则无可恨之人；心若简单，世间纷扰皆成空。', '0', '0', '2014-06-23 19:17:34', 1, NULL),
(10, 6, '生命太短，日子太忙，人生太累。该放的时候，要舍得放下，该弃的时候，要毅然决绝。别羡别人辉煌，别慕他人美好，别怪世态炎凉，别怨世人虚伪。学会忘记，懂得放弃，别为昨天的事烦恼，别为无谓的事伤心。面对，让心更强大；放下，让心更豁达。一个起点，一段旅程，脚踏实地走，坦荡快乐的活。', '0', '0', '2014-06-23 19:17:49', 1, NULL),
(11, 6, '有些人在想一个人，有些人在等一个人，有些人敏感的心拒绝任何人，或者说，习惯了一个人，我已经分不清，你是友情，还是错过的爱情。', '0', '0', '2014-06-23 19:18:00', 1, NULL),
(12, 6, '我们过得不好，很多时候都是在自欺欺人，总是在幻想着遥远的梦境，凌乱了脚下的步履，艳羡着别人的幸福，漠视了身边的快乐。境由心造，心灵的方向错了，我们就会无端失去感悟生命喜悦的机会，在自铸的牢笼里囚禁着思想的自由。任何时候，少审视他人，莫轻贱自己，经营好自己的日子，就是最美妙的活法。', '0', '0', '2014-06-23 19:18:17', 1, NULL),
(13, 6, '在生活中，我们难免会因为一些不愉快的事情而感到忧伤和苦闷。在这种时候，我们不应该将负面的情绪蓄积起来，而是应采取妥善的方法及时地将它们宣泄和释放出来，从而保持心理的平衡。（ [玫瑰] 早安，开心的一天从现在开始）', '0', '0', '2014-06-23 19:18:39', 1, NULL),
(14, 6, '我们一路奔走，从坎坷、伤痛中，感受了艰辛，学会了坚韧，于不同的事物中，见识了不同的各色人群，于不同的景致中，感受独特的人情。原以为，能简单地走、单纯地爱，终不免却复杂，身不由却迷茫，于苦累中，疲惫间，理解了爱恨、伤痛。使之成为记忆，成为一段自己的风景，沉淀在柔软的心中。', '0', '0', '2014-06-23 19:19:04', 1, NULL),
(15, 2, 'hellohellohellohellohellohellohellohellohello', '0', '0', '2014-06-23 21:18:55', 1, NULL),
(16, 2, 'hellohellohellohellohellohellohello', '0', '0', '2014-06-23 21:19:02', 1, NULL),
(17, 2, '当你被身边人误会时，解释一两次就够了。如果他不愿再相信你，再多解释也无济于事。因为他不信任的，已不再是那句话，那件事，而是你这个人。与其耗费精力的去说服对方，不如踏踏实实做好你自己。不要急着去证明，因为在着急中只会越描越黑。而要学会在时间中改变，因为岁月会让清者自清。', '0', '0', '2014-06-23 21:19:24', 1, NULL),
(18, 2, '【网页设计中7个令人抓狂的错误】1. 要求用户必须注册才能浏览网页内容；2. 忘记针对不同设备优化网页；3. 让用户填写过长的表格；4. 使用不好辨认或是幼稚字体；5. 使用让人抓狂的搜索功能；6. 大块文章；7. 用低像素图片展示产品。详戳：http://url.cn/J2gJZY', '0', '0', '2014-06-23 21:19:40', 1, NULL),
(19, 2, '人到这个世界本来就是来体验的，每个人的财富地位或许有高低之分，但对快乐和幸福的体会并没高低之别。当你快乐时，悲伤便在一旁窥视；而当你痛苦时，随之而来的可能就是欢乐。到了最后你会发觉，加加减减之后，那个得数将会是一样。所以，人生真的不必太计较，也不必刻意去算计，只要用心去体验就好。', '0', '0', '2014-06-23 21:19:53', 1, NULL),
(20, 8, '''as_fields'' =&gt; ''email,nickname'',''as_fields'' =&gt; ''email,nickname'',''as_fields'' =&gt; ''email,nickname'',', '0', '0', '2014-06-23 21:30:23', 1, NULL),
(21, 8, '没啥说的！', '0', '0', '2014-06-23 21:41:34', 1, NULL),
(22, 8, '异步处理！！~~~~~啊啊啊', '0', '0', '2014-06-23 21:42:05', 1, NULL),
(23, 5, '你们在干嘛呢', '0', '0', '2014-06-23 21:53:43', 1, NULL),
(24, 5, '早上好！', '0', '0', '2014-06-24 09:26:40', 1, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `fanheo_user`
--

CREATE TABLE IF NOT EXISTS `fanheo_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `email` varchar(250) DEFAULT NULL COMMENT 'Email',
  `head_ico` varchar(250) DEFAULT NULL COMMENT '头像',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `fanheo_user`
--

INSERT INTO `fanheo_user` (`id`, `username`, `password`, `email`, `head_ico`) VALUES
(1, 'guodong5', '202cb962ac59075b964b07152d234b70', '121@qq.com', 'http://127.0.0.1/FanHeo/Public/image/user/head_icon.png'),
(2, 'hello', '202cb962ac59075b964b07152d234b70', '121@qq.com', 'http://127.0.0.1/FanHeo/Public/image/user/head_icon.png'),
(3, 'hello2', '202cb962ac59075b964b07152d234b70', '121@qq.com', 'http://127.0.0.1/FanHeo/Public/image/user/head_icon.png'),
(4, 'hello3', '202cb962ac59075b964b07152d234b70', '121@qq.com', 'http://127.0.0.1/FanHeo/Public/image/user/head_icon.png'),
(5, 'hello4', '202cb962ac59075b964b07152d234b70', '121@qq.com', 'http://127.0.0.1/FanHeo/Public/image/user/head_icon.png'),
(6, 'guodong', '6774a5da0ccf118d575f7f4cbe78bb9a', '871379151@qq.com', 'http://127.0.0.1/FanHeo/Public/image/user/head_icon.png'),
(7, '123', '289dff07669d7a23de0ef88d2f7129e7', '121@qq.com', 'http://127.0.0.1/FanHeo/Public/image/user/head_icon.png'),
(8, 'liwenting', '202cb962ac59075b964b07152d234b70', '871379151@qq.com', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
