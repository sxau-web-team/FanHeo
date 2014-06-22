CREATE DATABASE  IF NOT EXISTS `fanheo` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `fanheo`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: fanheo
-- ------------------------------------------------------
-- Server version	5.6.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `fanheo_announcement`
--

DROP TABLE IF EXISTS `fanheo_announcement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fanheo_announcement` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_announcement`
--

LOCK TABLES `fanheo_announcement` WRITE;
/*!40000 ALTER TABLE `fanheo_announcement` DISABLE KEYS */;
/*!40000 ALTER TABLE `fanheo_announcement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fanheo_article`
--

DROP TABLE IF EXISTS `fanheo_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fanheo_article` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_article`
--

LOCK TABLES `fanheo_article` WRITE;
/*!40000 ALTER TABLE `fanheo_article` DISABLE KEYS */;
/*!40000 ALTER TABLE `fanheo_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fanheo_article_category`
--

DROP TABLE IF EXISTS `fanheo_article_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fanheo_article_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `parent_id` int(11) unsigned NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_article_category`
--

LOCK TABLES `fanheo_article_category` WRITE;
/*!40000 ALTER TABLE `fanheo_article_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `fanheo_article_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fanheo_comment`
--

DROP TABLE IF EXISTS `fanheo_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fanheo_comment` (
  `id` int(11) unsigned NOT NULL,
  `goods_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `time` datetime NOT NULL,
  `contents` text,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_comment`
--

LOCK TABLES `fanheo_comment` WRITE;
/*!40000 ALTER TABLE `fanheo_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `fanheo_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fanheo_favorite`
--

DROP TABLE IF EXISTS `fanheo_favorite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fanheo_favorite` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `cat_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_favorite`
--

LOCK TABLES `fanheo_favorite` WRITE;
/*!40000 ALTER TABLE `fanheo_favorite` DISABLE KEYS */;
/*!40000 ALTER TABLE `fanheo_favorite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fanheo_goods`
--

DROP TABLE IF EXISTS `fanheo_goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fanheo_goods` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_goods`
--

LOCK TABLES `fanheo_goods` WRITE;
/*!40000 ALTER TABLE `fanheo_goods` DISABLE KEYS */;
/*!40000 ALTER TABLE `fanheo_goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fanheo_member`
--

DROP TABLE IF EXISTS `fanheo_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fanheo_member` (
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='用户信息表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_member`
--

LOCK TABLES `fanheo_member` WRITE;
/*!40000 ALTER TABLE `fanheo_member` DISABLE KEYS */;
INSERT INTO `fanheo_member` VALUES (1,'郭栋','show_userinfomationa l；啊大家看法监督法律框架是对方；粮食店街分 了可是大家分','18404968728','山西','山西农业大学','871379151',1,'1995-02-26',1,0,20,'2014-06-21 01:43:37',1,'2014-06-21 01:43:37','127.0.0.1','127.0.0.1'),(2,'li',NULL,'18402315445',NULL,NULL,NULL,1,NULL,NULL,0,0,'2014-06-21 01:43:37',1,'2014-06-21 20:56:13','192.168.1.57','127.0.0.1'),(3,'li',NULL,'18402315445',NULL,NULL,NULL,1,NULL,NULL,0,0,'2014-06-21 01:43:37',1,'2014-06-21 01:43:37','127.0.0.1','127.0.0.1'),(4,'li',NULL,'18402315445',NULL,NULL,NULL,1,NULL,NULL,0,0,'2014-06-21 01:43:37',1,NULL,NULL,'127.0.0.1'),(5,'li',NULL,'18402315445',NULL,NULL,NULL,1,NULL,NULL,0,0,'2014-06-21 01:43:37',1,'2014-06-21 15:28:33','127.0.0.1','127.0.0.1'),(6,'guodong','show_userinfomationa l；啊大家看法监督法律框架是对方；粮食店街分 了可是大家分','18404968725','山西','山西农业大学','871379151',1,'1995-02-26',1,0,0,'2014-06-21 01:43:37',1,'2014-06-21 20:33:38','127.0.0.1','127.0.0.1'),(7,'123',NULL,'234',NULL,NULL,NULL,1,NULL,NULL,0,0,'0000-00-00 00:00:00',1,NULL,NULL,'127.0.0.1');
/*!40000 ALTER TABLE `fanheo_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fanheo_order`
--

DROP TABLE IF EXISTS `fanheo_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fanheo_order` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_order`
--

LOCK TABLES `fanheo_order` WRITE;
/*!40000 ALTER TABLE `fanheo_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `fanheo_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fanheo_order_goods`
--

DROP TABLE IF EXISTS `fanheo_order_goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fanheo_order_goods` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) unsigned NOT NULL,
  `goods_id` int(11) unsigned DEFAULT NULL,
  `goods_price` decimal(15,2) NOT NULL DEFAULT '0.00',
  `goods_num` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_order_goods`
--

LOCK TABLES `fanheo_order_goods` WRITE;
/*!40000 ALTER TABLE `fanheo_order_goods` DISABLE KEYS */;
/*!40000 ALTER TABLE `fanheo_order_goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fanheo_relation`
--

DROP TABLE IF EXISTS `fanheo_relation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fanheo_relation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userA` int(11) unsigned NOT NULL,
  `userB` int(11) unsigned NOT NULL,
  `relation` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_relation`
--

LOCK TABLES `fanheo_relation` WRITE;
/*!40000 ALTER TABLE `fanheo_relation` DISABLE KEYS */;
/*!40000 ALTER TABLE `fanheo_relation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fanheo_talk`
--

DROP TABLE IF EXISTS `fanheo_talk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fanheo_talk` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `content` varchar(255) NOT NULL,
  `img1` varchar(255) DEFAULT '0',
  `img2` varchar(255) DEFAULT '0',
  `time` datetime NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `fanheo_talkcol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_talk`
--

LOCK TABLES `fanheo_talk` WRITE;
/*!40000 ALTER TABLE `fanheo_talk` DISABLE KEYS */;
/*!40000 ALTER TABLE `fanheo_talk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fanheo_user`
--

DROP TABLE IF EXISTS `fanheo_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fanheo_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `email` varchar(250) DEFAULT NULL COMMENT 'Email',
  `head_ico` varchar(250) DEFAULT NULL COMMENT '头像',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='用户表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_user`
--

LOCK TABLES `fanheo_user` WRITE;
/*!40000 ALTER TABLE `fanheo_user` DISABLE KEYS */;
INSERT INTO `fanheo_user` VALUES (1,'guodong5','202cb962ac59075b964b07152d234b70','121@qq.com','http://127.0.0.1/FanHeo/Public/image/user/head_icon.png'),(2,'hello','202cb962ac59075b964b07152d234b70','121@qq.com','http://127.0.0.1/FanHeo/Public/image/user/head_icon.png'),(3,'hello2','202cb962ac59075b964b07152d234b70','121@qq.com','http://127.0.0.1/FanHeo/Public/image/user/head_icon.png'),(4,'hello3','202cb962ac59075b964b07152d234b70','121@qq.com','http://127.0.0.1/FanHeo/Public/image/user/head_icon.png'),(5,'hello4','202cb962ac59075b964b07152d234b70','121@qq.com','http://127.0.0.1/FanHeo/Public/image/user/head_icon.png'),(6,'guodong','6774a5da0ccf118d575f7f4cbe78bb9a','871379151@qq.com','http://127.0.0.1/FanHeo/Public/image/user/head_icon.png'),(7,'123','289dff07669d7a23de0ef88d2f7129e7','121@qq.com','http://127.0.0.1/FanHeo/Public/image/user/head_icon.png');
/*!40000 ALTER TABLE `fanheo_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-06-22 18:22:41
