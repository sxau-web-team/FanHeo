CREATE DATABASE  IF NOT EXISTS `fanheo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `fanheo`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: fanheo
-- ------------------------------------------------------
-- Server version	5.6.11

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
-- Table structure for table `fanheo_access`
--

DROP TABLE IF EXISTS `fanheo_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fanheo_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_access`
--

LOCK TABLES `fanheo_access` WRITE;
/*!40000 ALTER TABLE `fanheo_access` DISABLE KEYS */;
/*!40000 ALTER TABLE `fanheo_access` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fanheo_admin`
--

DROP TABLE IF EXISTS `fanheo_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fanheo_admin` (
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_admin`
--

LOCK TABLES `fanheo_admin` WRITE;
/*!40000 ALTER TABLE `fanheo_admin` DISABLE KEYS */;
INSERT INTO `fanheo_admin` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3',1,13500000000,NULL,'127.0.0.1',NULL,NULL,1403597305,NULL,20,'127.0.0.1',1403597935),(2,'guodong','e35cf7b66449df565f93c607d5a81d09',0,0,NULL,'127.0.0.1',NULL,NULL,1403574143,NULL,5,'127.0.0.1',1403592003);
/*!40000 ALTER TABLE `fanheo_admin` ENABLE KEYS */;
UNLOCK TABLES;

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
  `pid` int(11) unsigned NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_article_category`
--

LOCK TABLES `fanheo_article_category` WRITE;
/*!40000 ALTER TABLE `fanheo_article_category` DISABLE KEYS */;
INSERT INTO `fanheo_article_category` VALUES (1,'美食',0,1),(2,'健康',0,4),(3,'新鲜事',0,1),(4,'米饭',1,1),(5,'汤',1,2),(6,'校园动态',3,1),(7,'创业',3,2),(8,'大米',4,2),(9,'社会',3,3),(10,'小米',4,3),(11,'蛋汤',5,2),(12,'水果汤',5,3),(13,'互联网',3,1),(14,'肉类',1,1),(15,'猪肉',14,2),(16,'鸡肉',15,2),(17,'面食',0,1),(18,'计算机',0,3),(19,'热菜',0,1);
/*!40000 ALTER TABLE `fanheo_article_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fanheo_category`
--

DROP TABLE IF EXISTS `fanheo_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fanheo_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `pid` int(11) unsigned NOT NULL,
  `sort` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_category`
--

LOCK TABLES `fanheo_category` WRITE;
/*!40000 ALTER TABLE `fanheo_category` DISABLE KEYS */;
INSERT INTO `fanheo_category` VALUES (1,'主食',0,1),(2,'副食',0,2),(3,'面食',1,1),(4,'汤类',1,2),(5,'热食',1,3),(6,'冷食',1,4),(7,'酒水',2,1),(8,'啤酒',7,1),(9,'饮料',7,2),(10,'乳品',2,2);
/*!40000 ALTER TABLE `fanheo_category` ENABLE KEYS */;
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='用户信息表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_member`
--

LOCK TABLES `fanheo_member` WRITE;
/*!40000 ALTER TABLE `fanheo_member` DISABLE KEYS */;
INSERT INTO `fanheo_member` VALUES (1,'郭栋','show_userinfomationa l；啊大家看法监督法律框架是对方；粮食店街分 了可是大家分','18404968728','山西','山西农业大学','871379151',1,'1995-02-26',1,0,20,'2014-06-21 01:43:37',1,'2014-06-21 01:43:37','127.0.0.1','127.0.0.1'),(2,'li',NULL,'18402315445',NULL,NULL,NULL,1,NULL,NULL,0,0,'2014-06-21 01:43:37',1,'2014-06-23 21:18:38','127.0.0.1','127.0.0.1'),(3,'li',NULL,'18402315445',NULL,NULL,NULL,1,NULL,NULL,0,0,'2014-06-21 01:43:37',1,'2014-06-21 01:43:37','127.0.0.1','127.0.0.1'),(4,'li',NULL,'18402315445',NULL,NULL,NULL,1,NULL,NULL,0,0,'2014-06-21 01:43:37',1,NULL,NULL,'127.0.0.1'),(5,'li',NULL,'18402315445',NULL,NULL,NULL,1,NULL,NULL,0,0,'2014-06-21 01:43:37',1,'2014-06-24 09:26:23','127.0.0.1','127.0.0.1'),(6,'guodong','show_userinfomationa l；啊大家看法监督法律框架是对方；粮食店街分 了可是大家分','18404968725','山西','山西农业大学','871379151',1,'1995-02-26',1,0,0,'2014-06-21 01:43:37',1,'2014-06-24 14:36:42','127.0.0.1','127.0.0.1'),(7,'123',NULL,'234',NULL,NULL,NULL,1,NULL,NULL,0,0,'0000-00-00 00:00:00',1,NULL,NULL,'127.0.0.1'),(8,'李',NULL,'15421545454',NULL,NULL,NULL,2,NULL,NULL,0,0,'2014-06-23 21:20:41',1,'2014-06-23 21:21:08','127.0.0.1','127.0.0.1');
/*!40000 ALTER TABLE `fanheo_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fanheo_node`
--

DROP TABLE IF EXISTS `fanheo_node`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fanheo_node` (
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_node`
--

LOCK TABLES `fanheo_node` WRITE;
/*!40000 ALTER TABLE `fanheo_node` DISABLE KEYS */;
INSERT INTO `fanheo_node` VALUES (1,'admin','后台应用',1,NULL,1,0,1),(2,'a','前台应用',1,NULL,1,0,1),(3,'a','前台应用',1,NULL,1,0,1),(4,'Category','文章分类',1,NULL,1,1,2);
/*!40000 ALTER TABLE `fanheo_node` ENABLE KEYS */;
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
-- Table structure for table `fanheo_role`
--

DROP TABLE IF EXISTS `fanheo_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fanheo_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_role`
--

LOCK TABLES `fanheo_role` WRITE;
/*!40000 ALTER TABLE `fanheo_role` DISABLE KEYS */;
INSERT INTO `fanheo_role` VALUES (1,'admin',NULL,1,'超级管理员'),(2,'productmanager',NULL,1,'产品管理员'),(3,'Logisticmanage',NULL,1,'物流管理员'),(4,'Logisticmanage',NULL,1,'物流管理员'),(5,'shop',NULL,1,'订单统计人员');
/*!40000 ALTER TABLE `fanheo_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fanheo_role_user`
--

DROP TABLE IF EXISTS `fanheo_role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fanheo_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_role_user`
--

LOCK TABLES `fanheo_role_user` WRITE;
/*!40000 ALTER TABLE `fanheo_role_user` DISABLE KEYS */;
INSERT INTO `fanheo_role_user` VALUES (1,'2');
/*!40000 ALTER TABLE `fanheo_role_user` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_talk`
--

LOCK TABLES `fanheo_talk` WRITE;
/*!40000 ALTER TABLE `fanheo_talk` DISABLE KEYS */;
INSERT INTO `fanheo_talk` VALUES (1,6,'123','0','0','2014-06-23 19:14:09',1,NULL),(2,6,'&lt;?php\r\n/**\r\n*递归重组节点信息为多维数组\r\n*/\r\nfunction node_merge($node,$access = NULL, $pid = 0){\r\n\r\n$arr = array();\r\n\r\nforeach ($node as $v ) {\r\nif (is_array($access)) {\r\n$v[\'access\'] = in_array($v[\'id\'], $access) ? 1:0;\r\n# code...\r\n}\r\nif($v[\'pid\'] == $pid){\r\n$v[\'','0','0','2014-06-23 19:14:33',1,NULL),(3,6,'helloworld','0','0','2014-06-23 19:14:48',1,NULL),(4,6,'伤了，自然痛，没有一个人伤了不痛。人生，坎坎坷坷，曲曲折折，每个人难免受伤，难免不受一些委屈，谁也不会永远幸运。但是，不论伤的怎样，痛的如何，最终，我们都要努力，都要坚强。无论面临怎样的困难，怎样的挫折，都不要丧失生活的信心，失去人生的信念。路再难，道再艰，努力，就有改善的可能。','0','0','2014-06-23 19:15:13',1,NULL),(5,6,'生活总是起伏跌荡，不要抱怨什么，你就是再快乐，也会有烦忧;你就算再倒霉，亦会有幸运。我们以为人生是出悲剧或者喜剧，其实不然，你能走出悲剧，最终往往是喜剧;你若沉湎喜剧，结局又常常是悲剧。哭笑犬牙交错，悲喜时刻轮回，哭的时候学会遗忘，笑的时候与人分享，没人愿意哭，没人拒绝笑。','0','0','2014-06-23 19:15:42',1,NULL),(6,6,'生活中，并不是所有的坚强都是真实的，也不是所有的微笑都是真诚的。许多的时候我们不想坚强，但不得不坚强，我们不愿微笑，但又不得不微笑。人生就是这样，有时行为是心灵真实的体现，有时却不是，不是所有的阴天都会下雨，也不是每次的伤心都会流泪。人生总有无奈，总有伪善，这就是生活。','0','0','2014-06-23 19:15:59',1,NULL),(7,6,'寻求梦想走自己的路上，必须做好随时有可能被边缘化的勇气。因为不是每个人都能理解你的梦想，不是每个人都能在取得辉煌时与你同欢，与你落寞时共饮。人生这条路说容易也容易，说艰难也艰难。你对外界的需求越少，就越有可能活得自如和安详。只有这样你才能随时边缘化自己，随时被他人边缘化。','0','0','2014-06-23 19:16:30',1,NULL),(8,6,'人生在世总有为难之事，也有不喜之人，有时即使难也要做，即使不喜欢也要去接触。生活，就是这样，无论如何总得去进行。生活不会按我们的要求去安排，人生也不会随我们的意愿来组织，我们只能适应，只能接受。渐渐就会明白，生活是自己的，别人是次要的，学会待人，学会处事，慢慢去适应生活。','0','0','2014-06-23 19:17:06',1,NULL),(9,6,'人生如河，苦是转弯：思量和抉择，得到和失去，拿得起和放得下，我们需要放弃、割舍和遗忘；人生如叶，苦是漂泊：飘零的心，触碰不到依靠的岸。人生最大的痛苦就是心灵没有归属，不管你知不知觉，承不承认。心存美好，则无可恼之事；心存善良，则无可恨之人；心若简单，世间纷扰皆成空。','0','0','2014-06-23 19:17:34',1,NULL),(10,6,'生命太短，日子太忙，人生太累。该放的时候，要舍得放下，该弃的时候，要毅然决绝。别羡别人辉煌，别慕他人美好，别怪世态炎凉，别怨世人虚伪。学会忘记，懂得放弃，别为昨天的事烦恼，别为无谓的事伤心。面对，让心更强大；放下，让心更豁达。一个起点，一段旅程，脚踏实地走，坦荡快乐的活。','0','0','2014-06-23 19:17:49',1,NULL),(11,6,'有些人在想一个人，有些人在等一个人，有些人敏感的心拒绝任何人，或者说，习惯了一个人，我已经分不清，你是友情，还是错过的爱情。','0','0','2014-06-23 19:18:00',1,NULL),(12,6,'我们过得不好，很多时候都是在自欺欺人，总是在幻想着遥远的梦境，凌乱了脚下的步履，艳羡着别人的幸福，漠视了身边的快乐。境由心造，心灵的方向错了，我们就会无端失去感悟生命喜悦的机会，在自铸的牢笼里囚禁着思想的自由。任何时候，少审视他人，莫轻贱自己，经营好自己的日子，就是最美妙的活法。','0','0','2014-06-23 19:18:17',1,NULL),(13,6,'在生活中，我们难免会因为一些不愉快的事情而感到忧伤和苦闷。在这种时候，我们不应该将负面的情绪蓄积起来，而是应采取妥善的方法及时地将它们宣泄和释放出来，从而保持心理的平衡。（ [玫瑰] 早安，开心的一天从现在开始）','0','0','2014-06-23 19:18:39',1,NULL),(14,6,'我们一路奔走，从坎坷、伤痛中，感受了艰辛，学会了坚韧，于不同的事物中，见识了不同的各色人群，于不同的景致中，感受独特的人情。原以为，能简单地走、单纯地爱，终不免却复杂，身不由却迷茫，于苦累中，疲惫间，理解了爱恨、伤痛。使之成为记忆，成为一段自己的风景，沉淀在柔软的心中。','0','0','2014-06-23 19:19:04',1,NULL),(15,2,'hellohellohellohellohellohellohellohellohello','0','0','2014-06-23 21:18:55',1,NULL),(16,2,'hellohellohellohellohellohellohello','0','0','2014-06-23 21:19:02',1,NULL),(17,2,'当你被身边人误会时，解释一两次就够了。如果他不愿再相信你，再多解释也无济于事。因为他不信任的，已不再是那句话，那件事，而是你这个人。与其耗费精力的去说服对方，不如踏踏实实做好你自己。不要急着去证明，因为在着急中只会越描越黑。而要学会在时间中改变，因为岁月会让清者自清。','0','0','2014-06-23 21:19:24',1,NULL),(18,2,'【网页设计中7个令人抓狂的错误】1. 要求用户必须注册才能浏览网页内容；2. 忘记针对不同设备优化网页；3. 让用户填写过长的表格；4. 使用不好辨认或是幼稚字体；5. 使用让人抓狂的搜索功能；6. 大块文章；7. 用低像素图片展示产品。详戳：http://url.cn/J2gJZY','0','0','2014-06-23 21:19:40',1,NULL),(19,2,'人到这个世界本来就是来体验的，每个人的财富地位或许有高低之分，但对快乐和幸福的体会并没高低之别。当你快乐时，悲伤便在一旁窥视；而当你痛苦时，随之而来的可能就是欢乐。到了最后你会发觉，加加减减之后，那个得数将会是一样。所以，人生真的不必太计较，也不必刻意去算计，只要用心去体验就好。','0','0','2014-06-23 21:19:53',1,NULL),(20,8,'\'as_fields\' =&gt; \'email,nickname\',\'as_fields\' =&gt; \'email,nickname\',\'as_fields\' =&gt; \'email,nickname\',','0','0','2014-06-23 21:30:23',1,NULL),(21,8,'没啥说的！','0','0','2014-06-23 21:41:34',1,NULL),(22,8,'异步处理！！~~~~~啊啊啊','0','0','2014-06-23 21:42:05',1,NULL),(23,5,'你们在干嘛呢','0','0','2014-06-23 21:53:43',1,NULL),(24,5,'早上好！','0','0','2014-06-24 09:26:40',1,NULL);
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='用户表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanheo_user`
--

LOCK TABLES `fanheo_user` WRITE;
/*!40000 ALTER TABLE `fanheo_user` DISABLE KEYS */;
INSERT INTO `fanheo_user` VALUES (1,'guodong5','202cb962ac59075b964b07152d234b70','121@qq.com','http://127.0.0.1/FanHeo/Public/image/user/head_icon.png'),(2,'hello','202cb962ac59075b964b07152d234b70','121@qq.com','http://127.0.0.1/FanHeo/Public/image/user/head_icon.png'),(3,'hello2','202cb962ac59075b964b07152d234b70','121@qq.com','http://127.0.0.1/FanHeo/Public/image/user/head_icon.png'),(4,'hello3','202cb962ac59075b964b07152d234b70','121@qq.com','http://127.0.0.1/FanHeo/Public/image/user/head_icon.png'),(5,'hello4','202cb962ac59075b964b07152d234b70','121@qq.com','http://127.0.0.1/FanHeo/Public/image/user/head_icon.png'),(6,'guodong','6774a5da0ccf118d575f7f4cbe78bb9a','871379151@qq.com','http://127.0.0.1/FanHeo/Public/image/user/head_icon.png'),(7,'123','289dff07669d7a23de0ef88d2f7129e7','121@qq.com','http://127.0.0.1/FanHeo/Public/image/user/head_icon.png'),(8,'liwenting','202cb962ac59075b964b07152d234b70','871379151@qq.com',NULL);
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

-- Dump completed on 2014-06-29 21:53:04
