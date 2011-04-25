/*
Navicat MySQL Data Transfer

Source Server         : LocalMySQL
Source Server Version : 50509
Source Host           : localhost:3306
Source Database       : imglib

Target Server Type    : MYSQL
Target Server Version : 50509
File Encoding         : 65001

Date: 2011-04-14 16:45:38
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `imglib_cat`
-- ----------------------------
DROP TABLE IF EXISTS `imglib_cat`;
CREATE TABLE `imglib_cat` (
  `imglib_catid` int(11) NOT NULL AUTO_INCREMENT,
  `imglib_catname` varchar(30) NOT NULL,
  `imglib_par` int(11) NOT NULL,
  PRIMARY KEY (`imglib_catid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of imglib_cat
-- ----------------------------
INSERT INTO `imglib_cat` VALUES ('1', 'Digital Art', '0');
INSERT INTO `imglib_cat` VALUES ('2', 'Drawings', '0');
INSERT INTO `imglib_cat` VALUES ('3', 'Miscellaneous', '0');
INSERT INTO `imglib_cat` VALUES ('4', 'Mixed Media', '0');
INSERT INTO `imglib_cat` VALUES ('7', 'Photomanipulation', '0');
INSERT INTO `imglib_cat` VALUES ('8', 'Pixel Art', '0');
INSERT INTO `imglib_cat` VALUES ('9', 'Bookmarks', '1');
INSERT INTO `imglib_cat` VALUES ('10', 'Mobile', '1');
INSERT INTO `imglib_cat` VALUES ('11', 'people', '2');
INSERT INTO `imglib_cat` VALUES ('13', 'douban', '9');

-- ----------------------------
-- Table structure for `imglib_file`
-- ----------------------------
DROP TABLE IF EXISTS `imglib_file`;
CREATE TABLE `imglib_file` (
  `imglib_fileid` int(11) NOT NULL AUTO_INCREMENT,
  `imglib_filename` varchar(200) DEFAULT NULL,
  `imglib_filetitle` varchar(200) DEFAULT NULL,
  `imglib_tagids` text,
  `imglib_catid` int(11) DEFAULT NULL,
  PRIMARY KEY (`imglib_fileid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of imglib_file
-- ----------------------------
INSERT INTO `imglib_file` VALUES ('1', 'p859663320.jpg', 'Hinata- Lines', '9,11,12', '13');
INSERT INTO `imglib_file` VALUES ('2', '1000276550e30eda77.jpg', 'Junia', '9', '11');
INSERT INTO `imglib_file` VALUES ('3', '12893979866836.jpg', 'wake your dreams', '9', '9');
INSERT INTO `imglib_file` VALUES ('4', '12980812116186.jpg', 'Chain Smoker', '9', '11');
INSERT INTO `imglib_file` VALUES ('5', '12738505523628.jpg', 'my room', '9', '9');
INSERT INTO `imglib_file` VALUES ('6', '12992537087653.jpg', 'Silently Thanks', '9', '4');
INSERT INTO `imglib_file` VALUES ('7', '12991663576207.jpg', 'Undoda', '9', '7');
INSERT INTO `imglib_file` VALUES ('8', '12995068462826.jpg', 'delicious', '9', '8');
INSERT INTO `imglib_file` VALUES ('9', '12831542182950.jpg', 'I Love You', '9', '9');
INSERT INTO `imglib_file` VALUES ('10', '12995533598080.jpg', 'For Asha', '9', '9');
INSERT INTO `imglib_file` VALUES ('11', '12829028054029.jpg', 'Gilded Age', '9', '9');
INSERT INTO `imglib_file` VALUES ('12', '12873001693802.jpg', 'Broken', '9', '9');
INSERT INTO `imglib_file` VALUES ('13', '12798074336719.jpg', 'Skype', '9', '9');

-- ----------------------------
-- Table structure for `imglib_tag`
-- ----------------------------
DROP TABLE IF EXISTS `imglib_tag`;
CREATE TABLE `imglib_tag` (
  `imglib_tagid` int(11) NOT NULL AUTO_INCREMENT,
  `imglib_tagname` varchar(20) NOT NULL,
  `imglib_tagsize` int(11) DEFAULT NULL,
  `imglib_fileid` text,
  PRIMARY KEY (`imglib_tagid`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of imglib_tag
-- ----------------------------
INSERT INTO `imglib_tag` VALUES ('9', 'Colver', '18', '1,2,3,4,5,6,7,8,9,10,11,12,13');
INSERT INTO `imglib_tag` VALUES ('10', 'art', '12', null);
INSERT INTO `imglib_tag` VALUES ('11', 'beach', '14', null);
INSERT INTO `imglib_tag` VALUES ('12', 'city', '30', null);
INSERT INTO `imglib_tag` VALUES ('13', 'blue', '18', null);
INSERT INTO `imglib_tag` VALUES ('14', 'australia', '28', null);
INSERT INTO `imglib_tag` VALUES ('15', 'flower', '21', null);
INSERT INTO `imglib_tag` VALUES ('16', 'food', '15', null);
INSERT INTO `imglib_tag` VALUES ('17', 'canada', '17', null);
INSERT INTO `imglib_tag` VALUES ('18', 'china', '19', null);
INSERT INTO `imglib_tag` VALUES ('19', 'festival', '18', null);
INSERT INTO `imglib_tag` VALUES ('20', 'friends', '20', null);
INSERT INTO `imglib_tag` VALUES ('21', 'london', '28', null);
INSERT INTO `imglib_tag` VALUES ('22', 'newyork', '20', null);
INSERT INTO `imglib_tag` VALUES ('23', 'wedding', '38', null);
INSERT INTO `imglib_tag` VALUES ('24', 'water', '25', null);
INSERT INTO `imglib_tag` VALUES ('25', 'food', '15', null);
INSERT INTO `imglib_tag` VALUES ('26', 'food', '15', null);
