-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-06-21 19:22:51
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `fanheo_admin`
--

INSERT INTO `fanheo_admin` (`uid`, `username`, `password`, `roletype`, `mobile`, `phone`, `lastip`, `email`, `sex`, `lastlogintime`, `truename`, `num`, `loginip`, `logintime`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 13500000000, NULL, '127.0.0.1', NULL, NULL, 1403365834, NULL, 15, '127.0.0.1', 1403367394);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `fanheo_node`
--

INSERT INTO `fanheo_node` (`id`, `name`, `title`, `status`, `remark`, `sort`, `pid`, `level`) VALUES
(1, 'admin', '后台应用', 1, NULL, 1, 0, 1),
(2, 'a', '前台应用', 1, NULL, 1, 0, 1),
(3, 'a', '前台应用', 1, NULL, 1, 0, 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `fanheo_role`
--

INSERT INTO `fanheo_role` (`id`, `name`, `pid`, `status`, `remark`) VALUES
(1, 'admin', NULL, 1, '超级管理员'),
(2, 'productmanager', NULL, 1, '产品管理员'),
(3, 'Logisticmanage', NULL, 1, '物流管理员'),
(4, 'Logisticmanage', NULL, 1, '物流管理员'),
(5, 'shop', NULL, 1, '订单统计人员');

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
