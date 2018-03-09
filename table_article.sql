CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(100) DEFAULT NULL COMMENT '文章标题',
  `author` char(50) DEFAULT NULL COMMENT '文章作者',
  `description` varchar(255) DEFAULT NULL COMMENT '文章简介',
  `content` text COMMENT '文章内容',
  `dateline` int(11) DEFAULT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;