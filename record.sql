/*
MySQL Data Transfer
Source Host: localhost
Source Database: test
Target Host: localhost
Target Database: test
Date: 2013/5/9 21:49:55
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for group_info
-- ----------------------------
CREATE TABLE `group_info` (
  `studentID` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `studentID1` varchar(255) DEFAULT NULL,
  `name1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `studentID2` varchar(255) DEFAULT NULL,
  `name2` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `studentID3` varchar(255) DEFAULT NULL,
  `name3` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`studentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for student_info
-- ----------------------------
CREATE TABLE `student_info` (
  `studentID` varchar(11) CHARACTER SET utf8 NOT NULL,
  `name` varchar(11) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pwd` varchar(11) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`studentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
