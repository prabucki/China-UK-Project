/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : china_uk_project

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2017-04-17 06:50:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for questions_china
-- ----------------------------
DROP TABLE IF EXISTS `questions_china`;
CREATE TABLE `questions_china` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `answer1` varchar(50) DEFAULT NULL,
  `answer2` varchar(50) DEFAULT NULL,
  `answer3` varchar(50) DEFAULT NULL,
  `answer4` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of questions_china
-- ----------------------------
INSERT INTO `questions_china` VALUES ('1', 'Multiple', 'Which dynasty realized unification of China first in history?\r\n', 'Qin Dynasty\r\n', 'Qing Dynasty\r\n', 'Shang Dynasty\r\n', 'Ming Dynasty\r\n');
INSERT INTO `questions_china` VALUES ('2', 'Multiple', 'Which dynasty did the poet LiBai live in?\r\n', 'Tang Dynasty\r\n', 'Song Dynasty\r\n', 'Yuan Dynasty\r\n', 'Ming Dynasty\r\n');
INSERT INTO `questions_china` VALUES ('3', 'Multiple', 'Which is the correct sequence of dynasties based on time?\r\n', 'Tang.Song.Yuan.Ming.Qing\r\n', 'Tang.Song.Ming.Yuan.Qing\r\n', 'Tang.Ming.Yuan.Song.Qing\r\n', 'Song.Tang.Yuan.Ming.Qing\r\n');
INSERT INTO `questions_china` VALUES ('4', 'Multiple', 'Which one DOESN\'T belong to the Four Masterpieces of China?\r\n', 'The Golden Lotus\r\n', 'Romance of Three Kingdoms\r\n', 'Journey to the West\r\n', 'Dream of Red Mansions\r\n');
INSERT INTO `questions_china` VALUES ('5', 'Multiple', 'What\'s the name of food shown in the picture?\r\n', 'Beijing Roast Duck\r\n', 'Roast Pork\r\n', 'Nanjing Steamed Salted Duck\r\n', 'Braised Meat\r\n');
INSERT INTO `questions_china` VALUES ('6', 'Multiple', 'What\'s the material of food shown in the picture?\r\n', 'sweet potato\r\n', 'potato\r\n', 'raddish\r\n', 'eggplant\r\n');
INSERT INTO `questions_china` VALUES ('7', 'Multiple', 'Which is one of the special food in Hunan Province?\r\n', 'Stinky Tofu\r\n', 'rice noodles\r\n', 'spicy soup\r\n', 'Rou Jia Mo(Crunchy bread with meat and vegetables ');
INSERT INTO `questions_china` VALUES ('8', 'Multiple', 'What\'s the staple food in Southern China?\r\n', 'Plain Rice\r\n', 'Sandwiches\r\n', 'Noodles\r\n', 'Cereal\r\n');
INSERT INTO `questions_china` VALUES ('9', 'Multiple', 'Which area is the local snacks shown in?\r\n', 'Guangdong\r\n', 'Shanghai \r\n', 'Beijing\r\n', 'Henan\r\n');
INSERT INTO `questions_china` VALUES ('10', 'Multiple', 'Which one is NOT the offical holiday in China?\r\n', 'Lantern Festival\r\n', 'Mid-autumn Festival\r\n', 'Dragon Boat Festival\r\n', 'Tomb Sweeping Day\r\n');
INSERT INTO `questions_china` VALUES ('11', 'Multiple', 'What\'s the purpose of Dragon Boat Festival originally?\r\n', 'To commemorate the great poet QuYuan\r\n', 'To exercise\r\n', 'To enhance team awareness\r\n', 'To entertain or relax\r\n');
INSERT INTO `questions_china` VALUES ('12', 'Multiple', 'Which ehinic minority does the activity of traditional festival shown in the piture belong to?\r\n', 'Dai People\r\n', 'Dai People\r\n', 'Bai People\r\n', 'Han People\r\n');
INSERT INTO `questions_china` VALUES ('13', 'Multiple', 'By the end of 2016, the population of mainland China(not including HongKong,Macau,Taiwan or overseas', '1.425 billion\r\n', '1.365 billion\r\n', '1.385 billion\r\n', '1.465 billion\r\n');
INSERT INTO `questions_china` VALUES ('14', 'Multiple', 'Which is NOT one of China\'s municipalities directly under the central government?\r\n', 'Shenzhen\r\n', 'Shanghai \r\n', 'Chongqing\r\n', 'Tianjin\r\n');
INSERT INTO `questions_china` VALUES ('15', 'Multiple', 'How many provincial level adminitrative regions are there in China?\r\n', '34\r\n', '23\r\n', '24', '32');
INSERT INTO `questions_china` VALUES ('16', 'Multiple', 'How many autonomous regions are there in China? \r\n', '5', '3', '4', '6');
INSERT INTO `questions_china` VALUES ('17', 'Multiple', 'By the end of March 2017, which city has the biggest population in China?\r\n', 'Chongqing\r\n', 'Beijing\r\n', 'Shanghai\r\n', 'Shenzhen\r\n');
INSERT INTO `questions_china` VALUES ('18', 'Multiple', 'Which is NOT included in the \"Five Lakes\" of the \"Five Lakes Four Ocean\" in China?\r\n', 'West Lake\r\n', 'Taihu Lake\r\n', 'Poyang Lake\r\n', 'Dongting Lake\r\n');
INSERT INTO `questions_china` VALUES ('19', 'Multiple', 'Which is the sea near Qingdao City of Shandong Province in China?\r\n', 'the Yellow Sea\r\n', 'the Bohai Sea\r\n', 'the Esat China Sea\r\n', 'the South China Sea\r\n');
INSERT INTO `questions_china` VALUES ('20', 'Multiple', 'Which city is the scenic spot shown in the picture located in China?\r\n', 'Guangzhou \r\n', 'Shanghai \r\n', 'Taibei\r\n', 'Beijing\r\n');
INSERT INTO `questions_china` VALUES ('21', 'Multiple', 'Which is the Central Great Mountain of the Five Great Mountains in China?\r\n', 'Mount Song\r\n', 'Mount Hua\r\n', 'Mount Heng\r\n', 'Mount Tai\r\n');
INSERT INTO `questions_china` VALUES ('22', 'Multiple', 'Which is the typical building located in Shanghai in China?\r\n', 'the Oriental Pearl Tower\r\n', 'Canton Tower\r\n', 'Confucius Temple\r\n', 'the Sun Yat-sen Mausoleum\r\n');
INSERT INTO `questions_china` VALUES ('23', 'Multiple', 'Which is NOT included in the 24 Solar Terms in China?\r\n', 'Light Rain\r\n', 'Light Snow\r\n', 'Cold Dews\r\n', 'Great Cold\r\n');
INSERT INTO `questions_china` VALUES ('24', 'Multiple', 'Which month is \"White Dews\" of the 24 Solar Terms in?\r\n', 'September\r\n', 'October\r\n', 'November\r\n', 'December\r\n');

-- ----------------------------
-- Table structure for questions_uk
-- ----------------------------
DROP TABLE IF EXISTS `questions_uk`;
CREATE TABLE `questions_uk` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `answer1` varchar(50) DEFAULT NULL,
  `answer2` varchar(50) DEFAULT NULL,
  `answer3` varchar(50) DEFAULT NULL,
  `answer4` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of questions_uk
-- ----------------------------
INSERT INTO `questions_uk` VALUES ('1', 'Multiple', 'What is the biggest castle in the UK?', 'WIndsor', 'Dover', 'Kenilworth', 'Tintagel');
INSERT INTO `questions_uk` VALUES ('2', 'Multiple', 'At what age you can legally buy alcohol in the UK', '18', '21', '30', '10');
INSERT INTO `questions_uk` VALUES ('3', 'Multiple', 'What is the tallest point in the UK?', 'Ben Nevis', 'Kilamanjaro', 'Everest', 'Alps');
INSERT INTO `questions_uk` VALUES ('4', 'TrueFalse', 'Is London the biggest city in UK by population?', 'YES', null, null, null);
INSERT INTO `questions_uk` VALUES ('5', 'Multiple', 'At what age can you legally buy alcohol in the UK?', '18', '21', '30', '16');
INSERT INTO `questions_uk` VALUES ('6', 'Multiple', 'What is the biggest castle in the UK?', 'Windsor', 'Dover', 'KenilWorth', 'Tintagel');
INSERT INTO `questions_uk` VALUES ('7', 'Multiple', 'What is the tallest point in the UK?', 'Ben Nevis', 'Kilamanjaro', 'Everest', 'Alps');
INSERT INTO `questions_uk` VALUES ('8', 'Multiple', 'What is the oldest university in the UK?', null, null, null, null);
