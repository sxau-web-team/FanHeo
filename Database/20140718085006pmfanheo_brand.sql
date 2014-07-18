-- 
-- 表的结构 `fanheo_brand`
-- 
CREATE TABLE `fanheo_brand` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `sort` smallint(5) DEFAULT NULL,
  `imgurl` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `parent` smallint(5) DEFAULT NULL,
  `dateline` varchar(12) DEFAULT NULL,
  `status` smallint(5) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COMMENT='品牌';
-- 
-- 导出表中的数据 `fanheo_brand`
--
INSERT INTO `fanheo_brand` VALUES ('1','nike','6','jpg','1111111','&lt;p&gt;111111111111&lt;/p&gt;','1111111111111111','11111111111111',NULL,'2010-09-16 1','0');
INSERT INTO `fanheo_brand` VALUES ('2','lv','2','22222222','1111111111','&lt;p&gt;11111111111&lt;/p&gt;','1111111111111','1111111111111',NULL,'2010-09-16 1','1');
INSERT INTO `fanheo_brand` VALUES ('3','adidas','3',NULL,'1111111111111111111','<p>1111111111111111111111</p>','222222222222222','222222222222222222222',NULL,'2010-09-16 1','1');
INSERT INTO `fanheo_brand` VALUES ('11','test1','1111','','fdsafsdfd','fdsafsdfd','fdsafsdfd','fdsafsdfd',NULL,'2011-05-05 1','1');
INSERT INTO `fanheo_brand` VALUES ('17','adidas22','2','','adidas','阿迪达斯','adidas','衣服',NULL,'0000-00-00 0','1');
