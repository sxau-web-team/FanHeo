-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-06-20 17:02:20
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
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `fanheo_admin`
--

INSERT INTO `fanheo_admin` (`uid`, `username`, `password`, `roletype`, `mobile`, `phone`, `lastip`, `email`, `sex`, `lastlogintime`, `truename`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 13500000000, NULL, NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
