/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : pitocms

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2015-03-23 18:07:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for pito_admins
-- ----------------------------
DROP TABLE IF EXISTS `pito_admins`;
CREATE TABLE `pito_admins` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL COMMENT '用户名',
  `password` varchar(50) DEFAULT NULL COMMENT '密码 一层md5',
  `lastlogin` int(10) DEFAULT NULL COMMENT '最近一次登陆时间',
  `lastip` varchar(30) DEFAULT NULL COMMENT '登陆ip',
  `logintimes` int(10) DEFAULT NULL COMMENT '登陆次数',
  `created` int(10) DEFAULT NULL,
  `updated` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='后台管理表';

-- ----------------------------
-- Records of pito_admins
-- ----------------------------
INSERT INTO `pito_admins` VALUES ('2', 'admin', '96e79218965eb72c92a549dd5a330112', '1414575117', '::1', '1420528621', null, '1426758778');
INSERT INTO `pito_admins` VALUES ('3', 'asan', '96e79218965eb72c92a549dd5a330112', null, null, null, '1426758664', null);

-- ----------------------------
-- Table structure for pito_ads
-- ----------------------------
DROP TABLE IF EXISTS `pito_ads`;
CREATE TABLE `pito_ads` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL COMMENT '广告位名称',
  `remark` text COMMENT '广告位说明',
  `created` int(10) DEFAULT NULL,
  `updated` int(10) DEFAULT NULL,
  `rm` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pito_ads
-- ----------------------------
INSERT INTO `pito_ads` VALUES ('1', '首页广告位', '首页上方第一排广告位', '1427083014', null, '0');

-- ----------------------------
-- Table structure for pito_ads_postion
-- ----------------------------
DROP TABLE IF EXISTS `pito_ads_postion`;
CREATE TABLE `pito_ads_postion` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ad_id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL COMMENT '广告位名称',
  `url` varchar(255) NOT NULL COMMENT '广告绑定的地址',
  `cover` varchar(255) NOT NULL COMMENT '广告图片',
  `weight` tinyint(1) NOT NULL DEFAULT '1',
  `created` int(10) DEFAULT NULL,
  `updated` int(10) DEFAULT NULL,
  `rm` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pito_ads_postion
-- ----------------------------
INSERT INTO `pito_ads_postion` VALUES ('1', '1', '首页1', '50', '', '50', '1427090755', null, '0');
INSERT INTO `pito_ads_postion` VALUES ('2', '1', '多大的', 'http://bbs.dedecms.com', '/Uploads/ad/20150323/550fae8b3acc7.gif', '50', '1427091083', '1427091691', '0');

-- ----------------------------
-- Table structure for pito_articles
-- ----------------------------
DROP TABLE IF EXISTS `pito_articles`;
CREATE TABLE `pito_articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) NOT NULL DEFAULT '0' COMMENT '栏目id',
  `title` varchar(200) NOT NULL,
  `remark` varchar(255) DEFAULT NULL COMMENT '文章摘要',
  `thumb` varchar(255) DEFAULT NULL COMMENT '封面图',
  `url` varchar(255) DEFAULT NULL COMMENT '文章链接',
  `weight` int(10) DEFAULT NULL COMMENT '文章权重',
  `isbest` tinyint(1) DEFAULT NULL COMMENT '是否推荐信息',
  `ishead` tinyint(1) DEFAULT '0' COMMENT '是否头条信息',
  `isflash` tinyint(1) DEFAULT '0' COMMENT '是否幻灯 1是 0否',
  `clicks` int(10) DEFAULT '0' COMMENT '点击数',
  `source` varchar(255) DEFAULT NULL COMMENT '来源',
  `writer` varchar(50) DEFAULT NULL COMMENT '作者',
  `rm` tinyint(1) unsigned DEFAULT '0',
  `created` int(10) DEFAULT NULL COMMENT '添加时间',
  `updated` int(10) DEFAULT NULL COMMENT '更新时间',
  `removed` int(10) DEFAULT NULL COMMENT '移除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pito_articles
-- ----------------------------
INSERT INTO `pito_articles` VALUES ('1', '92', '我爱我就爱', null, '/Uploads/thumb2015-03-17/5507f0b17c33d.jpg', null, '50', null, '0', '0', '0', null, null, '0', '1426583735', null, null);
INSERT INTO `pito_articles` VALUES ('2', '94', '青岛地铁要开通啦订单订单', null, '', null, '50', null, '0', '0', '0', null, null, '0', '1426755057', '1426757178', null);
INSERT INTO `pito_articles` VALUES ('3', '93', '多少点', null, '/Uploads/thumb2015-03-19/550a8e5275ca9.jpg', null, '50', null, '0', '0', '0', null, null, '0', '1426755181', null, null);
INSERT INTO `pito_articles` VALUES ('4', '93', '青岛地铁要开通啦', null, '', null, '50', null, '0', '0', '0', null, null, '0', '1426756550', null, null);
INSERT INTO `pito_articles` VALUES ('5', '93', '宝岛台湾游玩', null, '/Uploads/thumb2015-03-20/550b98ab3c8b4.jpg', null, '3333', null, '0', '0', '0', null, null, '0', '1426823346', null, null);
INSERT INTO `pito_articles` VALUES ('6', '94', '大是大非', null, '', null, '0', null, '0', '0', '0', null, null, '0', '1426823776', null, null);
INSERT INTO `pito_articles` VALUES ('7', '0', '水电费', null, '', null, '0', null, '0', '0', '0', null, null, '0', '1426825968', null, null);
INSERT INTO `pito_articles` VALUES ('8', '0', '', null, '', null, '50', null, '0', '0', '0', null, null, '0', '1426826752', null, null);
INSERT INTO `pito_articles` VALUES ('9', '0', '232', null, '', null, '50', null, '0', '0', '0', null, null, '0', '1426826834', null, null);
INSERT INTO `pito_articles` VALUES ('10', '95', '323', null, '', null, '50', null, '0', '0', '0', null, null, '0', null, null, null);
INSERT INTO `pito_articles` VALUES ('11', '0', '多大的', null, null, null, '50', null, '0', '0', '0', null, null, '0', '1426833690', null, null);
INSERT INTO `pito_articles` VALUES ('12', '0', '爱上对方', null, null, null, '50', null, '0', '0', '0', null, null, '0', '1426833976', null, null);
INSERT INTO `pito_articles` VALUES ('13', '0', '爱上对方', null, '/Uploads/20150320/550bc300b9274.jpg', null, '50', null, '0', '0', '0', null, null, '0', '1426834176', null, null);
INSERT INTO `pito_articles` VALUES ('14', '0', '3223233', null, '', null, '50', null, '0', '0', '0', null, null, '0', '1426835208', null, null);
INSERT INTO `pito_articles` VALUES ('15', '0', '撒旦法时代', null, '', null, '50', null, '0', '0', '0', null, null, '0', '1426835321', '1426835623', null);
INSERT INTO `pito_articles` VALUES ('16', '0', '灞变笢鐪佸埌搴曟槸璋佺殑', null, '/Uploads/thumb/20150320/550bcc5014034.jpg', null, '50', null, '0', '0', '0', null, null, '0', '1426835728', '1426836560', null);
INSERT INTO `pito_articles` VALUES ('17', '0', '1212121', null, '/Uploads/thumb/20150323/550fb77b964e5.gif', null, '50', null, '0', '0', '0', null, null, '0', '1427093371', null, null);

-- ----------------------------
-- Table structure for pito_articles_article
-- ----------------------------
DROP TABLE IF EXISTS `pito_articles_article`;
CREATE TABLE `pito_articles_article` (
  `article_id` int(10) unsigned NOT NULL,
  `content` text COMMENT '文章内容',
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pito_articles_article
-- ----------------------------
INSERT INTO `pito_articles_article` VALUES ('1', '&lt;p&gt;挺好滴&lt;/p&gt;');
INSERT INTO `pito_articles_article` VALUES ('2', '&lt;p&gt;很好啊水电费&lt;/p&gt;');
INSERT INTO `pito_articles_article` VALUES ('3', '&lt;p&gt;爱上对方&lt;/p&gt;');
INSERT INTO `pito_articles_article` VALUES ('4', '&lt;p&gt;很好啊&lt;/p&gt;');
INSERT INTO `pito_articles_article` VALUES ('5', '&lt;p&gt;23232323&lt;/p&gt;');
INSERT INTO `pito_articles_article` VALUES ('6', '&lt;p&gt;爱上对方&lt;/p&gt;');
INSERT INTO `pito_articles_article` VALUES ('7', '&lt;p&gt;爱上对方&lt;/p&gt;');
INSERT INTO `pito_articles_article` VALUES ('9', '&lt;p&gt;爱上对方&lt;/p&gt;');

-- ----------------------------
-- Table structure for pito_articles_product
-- ----------------------------
DROP TABLE IF EXISTS `pito_articles_product`;
CREATE TABLE `pito_articles_product` (
  `article_id` int(10) unsigned NOT NULL,
  `contents` text COMMENT '文章内容',
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pito_articles_product
-- ----------------------------
INSERT INTO `pito_articles_product` VALUES ('37', null);
INSERT INTO `pito_articles_product` VALUES ('38', null);
INSERT INTO `pito_articles_product` VALUES ('39', null);
INSERT INTO `pito_articles_product` VALUES ('41', null);
INSERT INTO `pito_articles_product` VALUES ('42', null);
INSERT INTO `pito_articles_product` VALUES ('43', null);
INSERT INTO `pito_articles_product` VALUES ('44', null);
INSERT INTO `pito_articles_product` VALUES ('45', null);
INSERT INTO `pito_articles_product` VALUES ('47', null);
INSERT INTO `pito_articles_product` VALUES ('48', null);
INSERT INTO `pito_articles_product` VALUES ('49', null);
INSERT INTO `pito_articles_product` VALUES ('50', null);
INSERT INTO `pito_articles_product` VALUES ('51', null);
INSERT INTO `pito_articles_product` VALUES ('52', null);
INSERT INTO `pito_articles_product` VALUES ('53', null);
INSERT INTO `pito_articles_product` VALUES ('54', null);
INSERT INTO `pito_articles_product` VALUES ('55', null);
INSERT INTO `pito_articles_product` VALUES ('56', null);
INSERT INTO `pito_articles_product` VALUES ('57', null);
INSERT INTO `pito_articles_product` VALUES ('58', null);
INSERT INTO `pito_articles_product` VALUES ('59', null);
INSERT INTO `pito_articles_product` VALUES ('60', null);
INSERT INTO `pito_articles_product` VALUES ('61', null);
INSERT INTO `pito_articles_product` VALUES ('62', null);
INSERT INTO `pito_articles_product` VALUES ('63', null);
INSERT INTO `pito_articles_product` VALUES ('64', null);
INSERT INTO `pito_articles_product` VALUES ('65', null);
INSERT INTO `pito_articles_product` VALUES ('66', null);
INSERT INTO `pito_articles_product` VALUES ('67', null);
INSERT INTO `pito_articles_product` VALUES ('68', null);
INSERT INTO `pito_articles_product` VALUES ('69', null);
INSERT INTO `pito_articles_product` VALUES ('70', null);
INSERT INTO `pito_articles_product` VALUES ('71', null);
INSERT INTO `pito_articles_product` VALUES ('72', null);
INSERT INTO `pito_articles_product` VALUES ('73', null);
INSERT INTO `pito_articles_product` VALUES ('74', null);

-- ----------------------------
-- Table structure for pito_articles_tour
-- ----------------------------
DROP TABLE IF EXISTS `pito_articles_tour`;
CREATE TABLE `pito_articles_tour` (
  `article_id` int(10) unsigned NOT NULL,
  `price` int(10) DEFAULT NULL COMMENT '价格',
  `pics` text COMMENT '多图',
  `content` text COMMENT '文章内容',
  `fee_info` varchar(255) DEFAULT NULL COMMENT '费用说明',
  `route_info` varchar(255) DEFAULT NULL COMMENT '路线行程',
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pito_articles_tour
-- ----------------------------
INSERT INTO `pito_articles_tour` VALUES ('10', '0', null, '&lt;p&gt;233232&lt;/p&gt;', '&lt;p&gt;43434&lt;/p&gt;', '&lt;p&gt;646455&lt;/p&gt;');
INSERT INTO `pito_articles_tour` VALUES ('11', '0', null, '&lt;p&gt;爱上对方&lt;/p&gt;', '&lt;p&gt;爱上对方&lt;/p&gt;', '&lt;p&gt;322323&lt;/p&gt;');
INSERT INTO `pito_articles_tour` VALUES ('12', '0', null, '&lt;p&gt;爱上对方&lt;/p&gt;', '&lt;p&gt;爱上对方&lt;/p&gt;', '&lt;p&gt;爱上对方&lt;/p&gt;');
INSERT INTO `pito_articles_tour` VALUES ('13', '0', null, '&lt;p&gt;啊时代发生的&lt;/p&gt;', '&lt;p&gt;爱上对方&lt;/p&gt;', '&lt;p&gt;322323&lt;/p&gt;');
INSERT INTO `pito_articles_tour` VALUES ('14', '0', null, '&lt;p&gt;233223&lt;/p&gt;', '&lt;p&gt;34234234&lt;/p&gt;', '&lt;p&gt;234324&lt;/p&gt;');
INSERT INTO `pito_articles_tour` VALUES ('15', '0', null, '&lt;p&gt;2222&lt;/p&gt;', '&lt;p&gt;3333&lt;/p&gt;', '&lt;p&gt;4444&lt;/p&gt;');
INSERT INTO `pito_articles_tour` VALUES ('16', '0', null, '&lt;p&gt;爱上对方&lt;/p&gt;', '&lt;p&gt;爱上对方&lt;/p&gt;', '&lt;p&gt;爱上对方2&lt;/p&gt;');
INSERT INTO `pito_articles_tour` VALUES ('17', '0', null, '&lt;p&gt;21212&lt;/p&gt;', '&lt;p&gt;415454&lt;/p&gt;', '&lt;p&gt;13535&lt;/p&gt;');

-- ----------------------------
-- Table structure for pito_categorys
-- ----------------------------
DROP TABLE IF EXISTS `pito_categorys`;
CREATE TABLE `pito_categorys` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL DEFAULT '' COMMENT '栏目名称',
  `thumb` varchar(255) DEFAULT NULL COMMENT '栏目图片',
  `content` text COMMENT '栏目介绍',
  `pid` smallint(5) unsigned DEFAULT '0' COMMENT '直系父类id',
  `pids` varchar(20) DEFAULT NULL COMMENT '父类id集合',
  `weight` int(10) DEFAULT '50' COMMENT '栏目权重',
  `rm` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否已删除(0:正常;1:已删除)',
  `created` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `updated` int(10) DEFAULT NULL,
  `deleted` int(10) DEFAULT '0',
  `removed` int(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`pid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pito_categorys
-- ----------------------------
INSERT INTO `pito_categorys` VALUES ('92', '新闻资讯', 'Uploads/thumb2015-03-17/5507dc2d05b49.jpg', '&lt;p&gt;爱上对方&lt;/p&gt;', '0', '0', '10', '0', '1426563056', null, null, null);
INSERT INTO `pito_categorys` VALUES ('93', '国内资讯', '/Uploads/category2015-03-19/550a8c14a742b.jpg', '&lt;p&gt;爱上对方多大的&lt;/p&gt;', '92', '0,92', '50', '0', '1426563190', '1426754585', null, null);
INSERT INTO `pito_categorys` VALUES ('94', '爱上对方', '爱上对方', '&lt;p&gt;爱上对方&lt;/p&gt;', '93', '0,92,93', '0', '0', '1426563706', null, null, null);
INSERT INTO `pito_categorys` VALUES ('95', 'dddsd', 'asdf', '&amp;lt;p&amp;gt;asdfasdf&amp;lt;/p&amp;gt;', '92', '0,92', '0', '0', '1426564714', null, null, null);
INSERT INTO `pito_categorys` VALUES ('96', '但是幅度的', '爱上对方', '&lt;p&gt;爱上对方&lt;/p&gt;', '93', '0,92,93', '0', '0', '1426564805', null, null, null);
INSERT INTO `pito_categorys` VALUES ('97', '测试分类', '水电费', '&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;爱上对方 &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;/p&gt;', '92', '0,92', '20', '0', '1426568975', null, null, null);
INSERT INTO `pito_categorys` VALUES ('98', 'dddsd', '', '&lt;p&gt;asdfasd&lt;/p&gt;', '93', '0,92,93', '50', '0', '1426578317', null, null, null);
INSERT INTO `pito_categorys` VALUES ('99', 'qwe', 'Uploads/thumb2015-03-17/5507dc2d05b49.jpg', '&lt;p&gt;asdfasdfs&lt;/p&gt;', '93', '0,92,93', '50', '0', '1426578487', null, null, null);
INSERT INTO `pito_categorys` VALUES ('100', '', '', '', '0', '0', '50', '0', '1426579897', null, null, null);
INSERT INTO `pito_categorys` VALUES ('102', '', '', '', '0', '0', '50', '0', '1426580075', null, null, null);

-- ----------------------------
-- Table structure for pito_comments
-- ----------------------------
DROP TABLE IF EXISTS `pito_comments`;
CREATE TABLE `pito_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `content` text,
  `created` int(10) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pito_comments
-- ----------------------------

-- ----------------------------
-- Table structure for pito_flinks
-- ----------------------------
DROP TABLE IF EXISTS `pito_flinks`;
CREATE TABLE `pito_flinks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '友链名称',
  `url` varchar(255) DEFAULT NULL COMMENT '友链地址',
  `weight` int(10) DEFAULT '50' COMMENT '权重',
  `pubtime` int(10) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pito_flinks
-- ----------------------------

-- ----------------------------
-- Table structure for pito_medias
-- ----------------------------
DROP TABLE IF EXISTS `pito_medias`;
CREATE TABLE `pito_medias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `path` char(50) NOT NULL,
  `filename` char(50) NOT NULL,
  `type` varchar(50) NOT NULL COMMENT '上传文件的MIME类型',
  `ext` varchar(20) NOT NULL COMMENT '上传文件的后缀类型',
  `created` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pito_medias
-- ----------------------------
INSERT INTO `pito_medias` VALUES ('1', 'pdf.png', '/Uploads/thumb/20150323/', '550fd9f4772ea.png', 'image/png', 'png', '0', null);
INSERT INTO `pito_medias` VALUES ('2', 'avatar5.gif', '/Uploads/pdf/20150323/', '550fd9f58e21a.gif', 'image/gif', 'gif', '0', null);

-- ----------------------------
-- Table structure for pito_orders
-- ----------------------------
DROP TABLE IF EXISTS `pito_orders`;
CREATE TABLE `pito_orders` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `truename` varchar(50) NOT NULL COMMENT '真实姓名',
  `remark` tinytext COMMENT '备注',
  `created` int(10) NOT NULL COMMENT '下单时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pito_orders
-- ----------------------------

-- ----------------------------
-- Table structure for pito_orders_info
-- ----------------------------
DROP TABLE IF EXISTS `pito_orders_info`;
CREATE TABLE `pito_orders_info` (
  `id` int(10) NOT NULL,
  `order_id` int(10) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL COMMENT '产品id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pito_orders_info
-- ----------------------------

-- ----------------------------
-- Table structure for pito_pages
-- ----------------------------
DROP TABLE IF EXISTS `pito_pages`;
CREATE TABLE `pito_pages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `weight` tinyint(4) NOT NULL DEFAULT '50' COMMENT '排序号',
  `content` text NOT NULL,
  `updated` int(11) NOT NULL DEFAULT '0',
  `created` int(10) NOT NULL DEFAULT '0',
  `rm` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pito_pages
-- ----------------------------
INSERT INTO `pito_pages` VALUES ('1', '关于我们', '', '', '50', '&lt;p&gt;大家好才是真的好&lt;/p&gt;', '0', '1426816075', '0');

-- ----------------------------
-- Table structure for pito_questions
-- ----------------------------
DROP TABLE IF EXISTS `pito_questions`;
CREATE TABLE `pito_questions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL COMMENT '作者',
  `title` varchar(200) NOT NULL,
  `remark` varchar(255) DEFAULT NULL COMMENT '文章摘要',
  `tags` varchar(255) DEFAULT NULL COMMENT '封面图',
  `clicks` int(10) DEFAULT '0' COMMENT '点击数',
  `answers` int(10) DEFAULT NULL COMMENT '回答的总数',
  `values` int(10) DEFAULT NULL COMMENT '有用的总数 认可的总数',
  `sames` varchar(255) DEFAULT NULL COMMENT '同问的数量',
  `content` text,
  `created` int(10) DEFAULT NULL COMMENT '添加时间',
  `updated` int(10) DEFAULT NULL COMMENT '更新时间',
  `removed` int(10) DEFAULT NULL COMMENT '移除时间',
  `rm` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pito_questions
-- ----------------------------
INSERT INTO `pito_questions` VALUES ('1', '1', '什么季节去韩国旅游玩好呢', null, '酒店,101', '50', '50', '50', '50', '&lt;p&gt;我想清明节去韩国旅游可以吗&lt;/p&gt;', '1427072582', '1427073040', null, '0');

-- ----------------------------
-- Table structure for pito_questions_answer
-- ----------------------------
DROP TABLE IF EXISTS `pito_questions_answer`;
CREATE TABLE `pito_questions_answer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question_id` int(10) NOT NULL DEFAULT '0' COMMENT '栏目id',
  `user_id` varchar(200) NOT NULL,
  `content` text,
  `created` int(10) DEFAULT NULL COMMENT '添加时间',
  `updated` int(10) DEFAULT NULL COMMENT '更新时间',
  `removed` int(10) DEFAULT NULL COMMENT '移除时间',
  `rm` tinyint(1) unsigned DEFAULT '0',
  `values` varchar(255) DEFAULT NULL COMMENT '答案被认为有用的数量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pito_questions_answer
-- ----------------------------

-- ----------------------------
-- Table structure for pito_system
-- ----------------------------
DROP TABLE IF EXISTS `pito_system`;
CREATE TABLE `pito_system` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '网站名称',
  `keyword` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `template` varchar(255) DEFAULT NULL COMMENT '模板名称',
  `resource` varchar(255) DEFAULT NULL COMMENT 'css js 图片等目录',
  `url` varchar(255) DEFAULT NULL COMMENT '网址',
  `zone` int(10) DEFAULT NULL COMMENT '地区编码',
  `backend` varchar(255) DEFAULT NULL COMMENT '后台目录名',
  `tel` varchar(30) DEFAULT NULL COMMENT '电话',
  `icp` varchar(30) DEFAULT NULL COMMENT '备案号',
  `qq` varchar(20) DEFAULT NULL,
  `wexin` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pito_system
-- ----------------------------
INSERT INTO `pito_system` VALUES ('1', 'pitocms', '', '等等', '', 'resources', null, null, 'adminofservice', null, '', null, null);

-- ----------------------------
-- Table structure for pito_users
-- ----------------------------
DROP TABLE IF EXISTS `pito_users`;
CREATE TABLE `pito_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) DEFAULT NULL COMMENT '联系电话',
  `gender` tinyint(1) NOT NULL DEFAULT '1' COMMENT '性别1男2女',
  `created` int(10) DEFAULT NULL,
  `updated` int(10) DEFAULT NULL,
  `lastlogin` int(10) DEFAULT NULL,
  `ischeck` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否验证过 验证过才能登陆',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='用户信息表';

-- ----------------------------
-- Records of pito_users
-- ----------------------------
INSERT INTO `pito_users` VALUES ('1', 'asan', '96e79218965eb72c92a549dd5a330112', 'bzs@sd.com', '15953204819', '1', '1427017266', null, null, '0');

-- ----------------------------
-- Table structure for pito_walkthrough
-- ----------------------------
DROP TABLE IF EXISTS `pito_walkthrough`;
CREATE TABLE `pito_walkthrough` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `clicks` int(10) NOT NULL DEFAULT '10' COMMENT '下载次数',
  `pdf` varchar(255) NOT NULL COMMENT '下载地址',
  `weight` int(10) DEFAULT NULL,
  `created` int(10) DEFAULT NULL,
  `updated` int(10) DEFAULT NULL,
  `rm` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='旅游攻略表';

-- ----------------------------
-- Records of pito_walkthrough
-- ----------------------------
INSERT INTO `pito_walkthrough` VALUES ('1', '高雄旅游攻略', '', '50', '', '50', '1427098818', null, '0');
INSERT INTO `pito_walkthrough` VALUES ('2', '台东旅游攻略', '', '111', '', '50', '1427098968', null, '0');
INSERT INTO `pito_walkthrough` VALUES ('3', '订单', '/Uploads/thumb/20150323/550fcdc5de91d.gif', '50', '/Uploads/pdf/20150323/550fcdc5e3357.gif', '50', '1427099077', null, '0');
INSERT INTO `pito_walkthrough` VALUES ('4', '新北市旅游攻略', '/Uploads/thumb/20150323/550fd9f4772ea.png', '1212', '/Uploads/pdf/20150323/550fd9f58e21a.gif', '50', '1427102197', null, '0');
