/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2017-09-20 17:28:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for blg_blogs
-- ----------------------------
DROP TABLE IF EXISTS `blg_blogs`;
CREATE TABLE `blg_blogs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `content` text,
  `type` varchar(50) DEFAULT NULL COMMENT '博客类型',
  `pic` text COMMENT '图片链接',
  `likes` int(11) DEFAULT '0',
  `views` int(11) DEFAULT '0' COMMENT '浏览次数',
  `talk` int(11) DEFAULT '0' COMMENT '评论次数',
  `addUser` char(32) DEFAULT NULL,
  `addTime` int(11) DEFAULT NULL,
  `display` tinyint(1) DEFAULT '0',
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blg_blogs
-- ----------------------------
INSERT INTO `blg_blogs` VALUES ('2', 'ceshi', '&lt;p&gt;1&lt;/p&gt;', 'cshi', 's:33:\"/Public/Uploads/59c08c2682f6b.jpg\";', '0', '0', '0', 'admin', '1505791037', '1', null);
INSERT INTO `blg_blogs` VALUES ('3', '2', '&lt;p&gt;2&lt;/p&gt;', '2', 's:33:\"/Public/Uploads/59c0b99f6b4e8.jpg\";', '0', '0', '0', 'admin', '1505802660', '1', null);
INSERT INTO `blg_blogs` VALUES ('4', '测试文章比套题', '&lt;p&gt;&lt;img src=&quot;/personal/uploads/image/20170919/1505809055561822.jpg&quot; title=&quot;1505809055561822.jpg&quot; alt=&quot;header.jpg&quot;/&gt;美图秀秀&lt;/p&gt;', '测试', 's:33:\"/Public/Uploads/59c0dcf08ba3a.jpg\";', '0', '0', '0', 'admin', '1505809068', '1', null);
INSERT INTO `blg_blogs` VALUES ('5', '教你怎样用欠费手机拨打电话', '&lt;p&gt;初次相识的喜悦，让你觉得似乎找到了知音。于是，对于投缘的人，开始了较频繁的交往。渐渐地，初识的喜悦退尽，接下来就是仅仅保持着联系，平淡到偶尔在节假曰发短信互致问候&lt;/p&gt;', '个人博客', 's:33:\"/Public/Uploads/59c22a559cf10.jpg\";', '0', '0', '0', 'admin', '1505896915', '0', null);
INSERT INTO `blg_blogs` VALUES ('6', '住在手机里的朋友', '&lt;p&gt;&lt;span style=&quot;color: rgb(117, 111, 113); font-family: &amp;#39;Microsoft Yahei&amp;#39;, Simsun; font-size: 12px; line-height: 22px; background-color: rgb(255, 255, 255);&quot;&gt;通信时代，无论是初次相见还是老友重逢，交换联系方式，常常是彼此交换名片，然后郑重或是出于礼貌用手机记下对方的电话号码。在快节奏的生活里，我们不知不觉中就成为住在别人手机里的朋友。又因某些意外，变成了别人手机里匆忙的过客，这种快餐式的友谊&amp;nbsp;&lt;/span&gt;&lt;/p&gt;', '个人博客', 's:33:\"/Public/Uploads/59c22a688665b.jpg\";', '0', '0', '0', 'admin', '1505897089', '0', null);
INSERT INTO `blg_blogs` VALUES ('7', '原来以为，一个人的勇敢是，删掉他的手机号码', '&lt;p&gt;&lt;span style=&quot;color: rgb(117, 111, 113); font-family: &amp;#39;Microsoft Yahei&amp;#39;, Simsun; font-size: 12px; line-height: 22px; background-color: rgb(255, 255, 255);&quot;&gt;原来以为，一个人的勇敢是，删掉他的手机号码、QQ号码等等一切，努力和他保持距离。等着有一天，习惯不想念他，习惯他不在身边,习惯时间把他在我记忆里的身影磨蚀干净&lt;/span&gt;&lt;/p&gt;', '个人博客', 's:33:\"/Public/Uploads/59c22a9f7dfe2.jpg\";', '0', '0', '0', 'admin', '1505897137', '0', null);
INSERT INTO `blg_blogs` VALUES ('8', '手机的16个惊人小秘密，据说99.999%的人都不知', '&lt;p&gt;&lt;span style=&quot;color: rgb(117, 111, 113); font-family: &amp;#39;Microsoft Yahei&amp;#39;, Simsun; font-size: 12px; line-height: 22px; background-color: rgb(255, 255, 255);&quot;&gt;引导语：知道么，手机有备用电池，手机拨号码12593+电话号码=陷阱……手机具有很多你不知道的小秘密，说出来一定很惊奇！不信的话就来看看吧！&lt;/span&gt;&lt;/p&gt;', '个人博客', 's:33:\"/Public/Uploads/59c22aeee43c5.jpg\";', '0', '0', '0', 'admin', '1505897171', '0', null);
INSERT INTO `blg_blogs` VALUES ('9', '你面对的是生活而不是手机', '&lt;p&gt;&lt;span style=&quot;color: rgb(117, 111, 113); font-family: &amp;#39;Microsoft Yahei&amp;#39;, Simsun; font-size: 12px; line-height: 22px; background-color: rgb(255, 255, 255);&quot;&gt;每一次与别人吃饭，总会有人会拿出手机。以为他们在打电话或者有紧急的短信，但用余光瞟了一眼之后发现无非就两件事：1、看小说，2、上人人或者QQ&lt;/span&gt;&lt;/p&gt;', '个人博客', 's:33:\"/Public/Uploads/59c22b1524abe.jpg\";', '0', '0', '0', 'admin', '1505897257', '0', null);
INSERT INTO `blg_blogs` VALUES ('10', '豪雅手机正式发布! 在法国全手工打造的奢侈品', '&lt;p&gt;&lt;span style=&quot;color: rgb(117, 111, 113); font-family: &amp;#39;Microsoft Yahei&amp;#39;, Simsun; font-size: 12px; line-height: 22px; background-color: rgb(255, 255, 255);&quot;&gt;现在跨界联姻，时尚、汽车以及运动品牌联合手机制造商联合发布手机产品在行业里已经不再新鲜，上周我们给大家报道过著名手表制造商瑞士泰格·豪雅（Tag Heuer） 联合法国的手机制造商Modelabs发布的一款奢华手机的部分谍照，而近日该手机终于被正式发布了&lt;/span&gt;&lt;/p&gt;', '个人博客', 's:33:\"/Public/Uploads/59c22b4b19cd0.jpg\";', '0', '0', '0', 'admin', '1505897303', '0', null);
INSERT INTO `blg_blogs` VALUES ('11', '一个程序员的生活', '&lt;p&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: arial; font-size: 13px; line-height: 20.02px; background-color: rgb(255, 255, 255);&quot;&gt;如今的编程是一场&lt;/span&gt;&lt;span style=&quot;color: rgb(204, 0, 0); font-family: arial; font-size: 13px; line-height: 20.02px; background-color: rgb(255, 255, 255);&quot;&gt;程序员&lt;/span&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: arial; font-size: 13px; line-height: 20.02px; background-color: rgb(255, 255, 255);&quot;&gt;和上帝的竞赛,&lt;/span&gt;&lt;span style=&quot;color: rgb(204, 0, 0); font-family: arial; font-size: 13px; line-height: 20.02px; background-color: rgb(255, 255, 255);&quot;&gt;程序员&lt;/span&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: arial; font-size: 13px; line-height: 20.02px; background-color: rgb(255, 255, 255);&quot;&gt;要开发出更大更好、傻瓜都会用到软件。而上帝在努力创造出更大更傻的傻瓜。目前为止,上帝是赢的。&lt;/span&gt;&lt;/p&gt;', '个人博客', 's:33:\"/Public/Uploads/59c22d2233179.jpg\";', '0', '0', '0', 'admin', '1505897820', '0', null);
INSERT INTO `blg_blogs` VALUES ('12', '时间如梭-光阴似箭', '&lt;p&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: arial; font-size: 13px; line-height: 20.02px; background-color: rgb(255, 255, 255);&quot;&gt;热门专题:贾赦的故事 仙子的故事 四年级记事 龙的寓言故事&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;color: rgb(204, 0, 0); font-family: arial; font-size: 13px; line-height: 20.02px; background-color: rgb(255, 255, 255);&quot;&gt;时间的故事&lt;/span&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: arial; font-size: 13px; line-height: 20.02px; background-color: rgb(255, 255, 255);&quot;&gt;...我们有自己的时间吗 有位老兄并非球迷,但4年一届的世界杯,场场不落,且备好&lt;/span&gt;&lt;/p&gt;', '个人博客', 's:33:\"/Public/Uploads/59c22d7e61ad7.jpg\";', '0', '0', '0', 'admin', '1505897916', '0', null);
INSERT INTO `blg_blogs` VALUES ('13', '我在大理的生活', '&lt;p&gt;&lt;span style=&quot;color: rgb(204, 0, 0); font-family: arial; font-size: 13px; line-height: 20.02px; background-color: rgb(255, 255, 255);&quot;&gt;大理&lt;/span&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: arial; font-size: 13px; line-height: 20.02px; background-color: rgb(255, 255, 255);&quot;&gt;白族自治州地处云南省中部偏西，海拔2090米，东邻楚雄州，南靠普洱市、临沧市，西与保山市、怒江州相连，北接丽江市。地跨东经98°52′～101°03′，北纬24°41′～26°42&lt;/span&gt;&lt;/p&gt;', '个人博客', 's:33:\"/Public/Uploads/59c22e4ad4c10.jpg\";', '0', '0', '0', 'admin', '1505898084', '0', null);

-- ----------------------------
-- Table structure for blg_index
-- ----------------------------
DROP TABLE IF EXISTS `blg_index`;
CREATE TABLE `blg_index` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned DEFAULT '0',
  `url` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(20) CHARACTER SET utf8 DEFAULT '',
  `level` int(11) DEFAULT '1',
  `display` tinyint(4) DEFAULT '0',
  `sort` mediumint(4) DEFAULT NULL COMMENT '排序',
  `addUser` char(32) CHARACTER SET utf8 DEFAULT NULL,
  `addTime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of blg_index
-- ----------------------------
INSERT INTO `blg_index` VALUES ('1', '0', '/', '首页', '1', '1', '1', 'admin', '1505806795');
INSERT INTO `blg_index` VALUES ('2', '0', 'Index/about', '关于我', '1', '1', '2', 'admin', '1505806829');
INSERT INTO `blg_index` VALUES ('5', '0', 'Index/lists', '文章', '1', '1', '3', 'admin', '1505807955');
INSERT INTO `blg_index` VALUES ('6', '0', '1', '心情', '1', '1', '4', 'admin', '1505807975');
INSERT INTO `blg_index` VALUES ('7', '0', '1', '相册', '1', '1', '5', 'admin', '1505807988');
INSERT INTO `blg_index` VALUES ('8', '0', '1', '留言', '1', '1', '6', 'admin', '1505807998');

-- ----------------------------
-- Table structure for blg_menu
-- ----------------------------
DROP TABLE IF EXISTS `blg_menu`;
CREATE TABLE `blg_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `name` varchar(20) DEFAULT '',
  `level` int(11) DEFAULT '1',
  `display` tinyint(4) DEFAULT '0',
  `sort` mediumint(4) DEFAULT NULL COMMENT '排序',
  `addUser` char(32) DEFAULT NULL,
  `addTime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blg_menu
-- ----------------------------
INSERT INTO `blg_menu` VALUES ('2', '0', '', '博客管理', '1', '1', '2', 'admin', '1505435477');
INSERT INTO `blg_menu` VALUES ('3', '0', '', '菜单管理', '1', '1', '1', 'admin', '1505435661');
INSERT INTO `blg_menu` VALUES ('7', '2', 'Blog/blogList', '博客列表', '2', '1', '1', 'admin', '1505438908');
INSERT INTO `blg_menu` VALUES ('8', '2', 'Blog/blogAdd', '博客添加', '2', '1', '2', 'admin', '1505438970');
INSERT INTO `blg_menu` VALUES ('9', '3', 'System/menus', '菜单列表', '2', '1', '1', 'admin', '1505443697');
INSERT INTO `blg_menu` VALUES ('11', '3', 'System/menuAdd', '添加顶级菜单', '2', '1', '2', 'admin', '1505443771');
INSERT INTO `blg_menu` VALUES ('12', '0', '', '前台页面管理', '1', '1', '3', 'admin', '1505792110');
INSERT INTO `blg_menu` VALUES ('13', '12', 'System/IndexList', '前台导航栏', '2', '1', '1', 'admin', '1505792296');
INSERT INTO `blg_menu` VALUES ('14', '12', 'System/IndexAdd', '菜单导航添加', '2', '1', '2', 'admin', '1505792338');

-- ----------------------------
-- Table structure for blg_user
-- ----------------------------
DROP TABLE IF EXISTS `blg_user`;
CREATE TABLE `blg_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` char(32) DEFAULT '',
  `logintime` int(11) DEFAULT NULL,
  `loginip` char(20) DEFAULT '',
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blg_user
-- ----------------------------
INSERT INTO `blg_user` VALUES ('3', 'admin', '21232f297a57a5a743894a0e4a801fc3', '0', '', '0');
INSERT INTO `blg_user` VALUES ('4', 'liusj', '209a41b69a5a2b12b355e4a5a0576e13', '1505380367', '0.0.0.0', '0');
INSERT INTO `blg_user` VALUES ('5', 'liusj1', '81b4dd42849924133f061d89aa72b87f', '1505380438', '0.0.0.0', '0');
INSERT INTO `blg_user` VALUES ('6', 'liusj2', 'd6b980ad11d6fd0da6cbc23333b9269e', '1505380517', '0.0.0.0', '0');
INSERT INTO `blg_user` VALUES ('7', 'liusj3', '11edd209f04e33386306ed720d136700', '1505380665', '0.0.0.0', '0');
INSERT INTO `blg_user` VALUES ('8', 'liusj4', '6b96caf60033f75e3cc70e9de73997a4', '1505380777', '0.0.0.0', '0');
