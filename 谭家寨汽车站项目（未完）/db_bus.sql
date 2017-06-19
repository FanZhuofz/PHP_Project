/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50712
Source Host           : 127.0.0.1:3306
Source Database       : db_bus

Target Server Type    : MYSQL
Target Server Version : 50712
File Encoding         : 65001

Date: 2017-06-04 01:57:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'Dawn', '0211');

-- ----------------------------
-- Table structure for `busmsg`
-- ----------------------------
DROP TABLE IF EXISTS `busmsg`;
CREATE TABLE `busmsg` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `caption` varchar(20) NOT NULL,
  `busnum` varchar(20) NOT NULL,
  `data1` varchar(20) NOT NULL,
  `time1` varchar(20) NOT NULL,
  `data2` varchar(20) NOT NULL,
  `time2` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of busmsg
-- ----------------------------
INSERT INTO `busmsg` VALUES ('1', '谭家寨-西安', '陕A9300001', '2017/2/1', '1:00', '2017/2/1', '12:00');
INSERT INTO `busmsg` VALUES ('2', '西安-谭家寨', '陕A9300002', '2017/2/1', '2:00', '2017/2/1', '3:00');
INSERT INTO `busmsg` VALUES ('3', '谭家寨-西安', '陕A9300003', '2017/2/1', '3:00', '2017/2/1', '14:00');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
