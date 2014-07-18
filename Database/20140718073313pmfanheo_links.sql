-- 
-- 表的结构 `fanheo_links`
-- 
CREATE TABLE `fanheo_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(25) NOT NULL,
  `url` varchar(255) NOT NULL,
  `state` tinyint(1) NOT NULL,
  `time` varchar(12) NOT NULL,
  `img` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
-- 
-- 导出表中的数据 `fanheo_links`
--
INSERT INTO `fanheo_links` VALUES ('1','独步清风','http://1433.sinaapp.com','0','1397548204','');
INSERT INTO `fanheo_links` VALUES ('3','郭栋的小家','www.guodoonng.com','1','1405683175','');
