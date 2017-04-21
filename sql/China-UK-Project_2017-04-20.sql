/*
Navicat MySQL Data Transfer

Source Server         : aliyun1
Source Server Version : 50631
Source Host           : 121.42.57.140:3306
Source Database       : china_uk_project

Target Server Type    : MYSQL
Target Server Version : 50631
File Encoding         : 65001

Date: 2017-04-21 10:22:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for questions_china_multiple
-- ----------------------------
DROP TABLE IF EXISTS `questions_china_multiple`;
CREATE TABLE `questions_china_multiple` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `answer1` varchar(50) DEFAULT NULL,
  `answer2` varchar(50) DEFAULT NULL,
  `answer3` varchar(50) DEFAULT NULL,
  `answer4` varchar(50) DEFAULT NULL,
  `answer` varchar(50) NOT NULL,
  `pic` enum('0','1') DEFAULT '0' COMMENT '0none；1has a picture',
  `pic_info` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of questions_china_multiple
-- ----------------------------
INSERT INTO `questions_china_multiple` VALUES ('1', 'Multiple', 'Which dynasty realized unification of China first in history?\r\n', 'Shang Dynasty\r\n', 'Qing Dynasty\r\n', 'Qin Dynasty\r\n', 'Ming Dynasty\r\n', 'Qin Dynasty', '0', null);
INSERT INTO `questions_china_multiple` VALUES ('2', 'Multiple', 'Which dynasty did the poet LiBai live in?\r\n', 'Tang Dynasty\r\n', 'Song Dynasty\r\n', 'Yuan Dynasty\r\n', 'Ming Dynasty\r\n', 'Tang Dynasty', '1', 'libai.jpg');
INSERT INTO `questions_china_multiple` VALUES ('3', 'Multiple', 'Which is the correct sequence of dynasties based on time?\r\n', 'Tang.Song.Ming.Yuan.Qing', 'Tang.Song.Yuan.Ming.Qing\r\n', 'Tang.Ming.Yuan.Song.Qing\r\n', 'Song.Tang.Yuan.Ming.Qing\r\n', 'Tang.Song.Yuan.Ming.Qing', '0', null);
INSERT INTO `questions_china_multiple` VALUES ('4', 'Multiple', 'Which one DOESN\'T belong to the Four Masterpieces of China?\r\n', 'Dream of Red Mansions', 'Romance of Three Kingdoms\r\n', 'Journey to the West\r\n', 'The Golden Lotus\r\n', 'The Golden Lotus', '0', null);
INSERT INTO `questions_china_multiple` VALUES ('5', 'Multiple', 'What\'s the name of food shown in the picture?\r\n', 'Roast Pork', 'Beijing Roast Duck\r\n', 'Nanjing Steamed Salted Duck\r\n', 'Braised Meat\r\n', 'Beijing Roast Duck', '1', 'm5.jpg');
INSERT INTO `questions_china_multiple` VALUES ('6', 'Multiple', 'What\'s the material of food shown in the picture?\r\n', 'sweet potato\r\n', 'potato\r\n', 'raddish\r\n', 'eggplant\r\n', 'sweet potato', '1', 'm6.jpg');
INSERT INTO `questions_china_multiple` VALUES ('7', 'Multiple', 'Which is one of the special food in Hunan Province?\r\n', 'RouJiaMo Crunchy bread with meat and vegetables \r\n', 'rice noodles\r\n', 'spicy soup\r\n', 'Stinky Tofu', 'Stinky Tofu', '1', 'choudoufu.jpg');
INSERT INTO `questions_china_multiple` VALUES ('8', 'Multiple', 'What\'s the staple food in Southern China?\r\n', 'Noodles\r\n', 'Sandwiches\r\n', 'Plain Rice\r\n', 'Cereal\r\n', 'Plain Rice', '1', 'shuidao.jpg');
INSERT INTO `questions_china_multiple` VALUES ('9', 'Multiple', 'Which area is the local snacks shown in?\r\n', 'Shanghai \r\n', 'Guangdong\r\n', 'Beijing\r\n', 'Henan\r\n', 'Guangdong', '1', 'm9.jpg');
INSERT INTO `questions_china_multiple` VALUES ('10', 'Multiple', 'Which one is NOT the offical holiday in China?\r\n', 'Lantern Festival\r\n', 'Mid-autumn Festival\r\n', 'Dragon Boat Festival\r\n', 'Tomb Sweeping Day\r\n', 'Lantern Festival', '0', null);
INSERT INTO `questions_china_multiple` VALUES ('11', 'Multiple', 'What\'s the purpose of Dragon Boat Festival originally?\r\n', 'To enhance team awareness\r\n', 'To exercise\r\n', 'To commemorate the great poet QuYuan\r\n', 'To entertain or relax\r\n', 'To commemorate the great poet QuYuan', '1', 'duanwu.jpg');
INSERT INTO `questions_china_multiple` VALUES ('12', 'Multiple', 'Which ehinic minority does the activity of traditional festival shown in the piture belong to?\r\n', 'Dai People\r\n', 'Yi People\r\n', 'Bai People\r\n', 'Han People\r\n', 'Dai People', '1', 'm12.jpg');
INSERT INTO `questions_china_multiple` VALUES ('13', 'Multiple', 'By the end of 2016, the population of mainland China(not including HongKong,Macau,Taiwan or overseas', '1.465 billion', '1.365 billion\r\n', '1.385 billion\r\n', '1.425 billion\r\n', '1.425 billion', '0', null);
INSERT INTO `questions_china_multiple` VALUES ('14', 'Multiple', 'Which is NOT one of China\'s municipalities directly under the central government?\r\n', 'Chongqing\r\n\r\n', 'Shanghai \r\n', 'Shenzhen', 'Tianjin\r\n', 'Shenzhen', '0', null);
INSERT INTO `questions_china_multiple` VALUES ('15', 'Multiple', 'How many provincial level adminitrative regions are there in China?\r\n', '34\r\n', '23\r\n', '24', '32', '34', '0', null);
INSERT INTO `questions_china_multiple` VALUES ('16', 'Multiple', 'How many autonomous regions are there in China? \r\n', '3', '5', '4', '6', '5', '0', null);
INSERT INTO `questions_china_multiple` VALUES ('17', 'Multiple', 'By the end of March 2017, which city has the biggest population in China?\r\n', 'Shanghai\r\n', 'Beijing\r\n', 'Chongqing\r\n', 'Guangzhou', 'Chongqing', '0', null);
INSERT INTO `questions_china_multiple` VALUES ('18', 'Multiple', 'Which is NOT included in the \"Five Lakes\" of the \"Five Lakes Four Ocean\" in China?\r\n', 'Taihu Lake\r\n', 'West Lake\r\n', 'Poyang Lake\r\n', 'Dongting Lake\r\n', 'West Lake', '0', null);
INSERT INTO `questions_china_multiple` VALUES ('19', 'Multiple', 'Which is the sea near Qingdao City of Shandong Province in China?\r\n', 'the Esat China Sea', 'the Bohai Sea\r\n', 'the Yellow Sea\r\n', 'the South China Sea\r\n', 'the Yellow Sea', '1', 'huanghai.jpg');
INSERT INTO `questions_china_multiple` VALUES ('20', 'Multiple', 'Which city is the scenic spot shown in the picture located in China?\r\n', 'Guangzhou \r\n', 'Shanghai \r\n', 'Taibei\r\n', 'Beijing\r\n', 'Guangzhou ', '1', 'm20.jpg');
INSERT INTO `questions_china_multiple` VALUES ('21', 'Multiple', 'Which is the Central Great Mountain of the Five Great Mountains in China?\r\n', 'Mount Heng\r\n', 'Mount Hua\r\n', 'Mount Song\r\n', 'Mount Tai\r\n', 'Mount Song', '1', 'songshan.jpg');
INSERT INTO `questions_china_multiple` VALUES ('22', 'Multiple', 'Which is the typical building located in Shanghai in China?\r\n', 'Confucius Temple\r\n', 'Canton Tower\r\n', 'the Oriental Pearl Tower\r\n', 'the Sun Yat-sen Mausoleum\r\n', 'the Oriental Pearl Tower', '1', 'dongfangmingzhu.jpg');
INSERT INTO `questions_china_multiple` VALUES ('23', 'Multiple', 'Which is NOT included in the 24 Solar Terms in China?\r\n', 'Light Snow\r\n', 'Light Rain\r\n', 'Cold Dews\r\n', 'Great Cold\r\n', 'Light Rain', '0', null);
INSERT INTO `questions_china_multiple` VALUES ('24', 'Multiple', 'Which month is \"White Dews\" of the 24 Solar Terms in?\r\n', 'September\r\n', 'October\r\n', 'November\r\n', 'December\r\n', 'September', '1', 'bailu.jpg');
INSERT INTO `questions_china_multiple` VALUES ('25', 'Multiple', 'Which one represent bearing many children in Chinese cultrue?\r\n', 'Egg', 'Seeds', 'Chicken', 'Duck', 'Seeds', '0', null);

-- ----------------------------
-- Table structure for questions_china_trueorfalse
-- ----------------------------
DROP TABLE IF EXISTS `questions_china_trueorfalse`;
CREATE TABLE `questions_china_trueorfalse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL DEFAULT 'trueorfalse',
  `question` varchar(150) NOT NULL,
  `answer1` varchar(50) NOT NULL,
  `answer2` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of questions_china_trueorfalse
-- ----------------------------
INSERT INTO `questions_china_trueorfalse` VALUES ('1', 'trueorfalse', 'China has more than 60 Peoples.', 'FALSE', null);
INSERT INTO `questions_china_trueorfalse` VALUES ('2', 'trueorfalse', 'When Chinese people say \"Have you eaten?\",that\'s an indication of inviting you to a meal.', 'FALSE', null);
INSERT INTO `questions_china_trueorfalse` VALUES ('3', 'trueorfalse', 'People in China would eat rice dumplings(sticky rice wrapped in leaves)during Dragon Boat Festival.', 'TRUE', null);
INSERT INTO `questions_china_trueorfalse` VALUES ('4', 'trueorfalse', 'The tradition of giving red envelopes to junior people during Spring Festival is for protection against evil originally.', 'TRUE', null);
INSERT INTO `questions_china_trueorfalse` VALUES ('5', 'trueorfalse', 'The Four Great Inventions of ancient China are the compass, gunpowder, papermaking and printing.', 'TRUE', null);
INSERT INTO `questions_china_trueorfalse` VALUES ('6', 'trueorfalse', 'The Revolution of 1912 led by Sun Yat-sen overthrew the Qing Dynasty.\r\n', 'FALSE', null);
INSERT INTO `questions_china_trueorfalse` VALUES ('7', 'trueorfalse', 'The Qixi Festival, Chinese Valentine\'s Day, falls on the seventh day of the seventh month in lunar calendar.\r\n', 'TRUE', null);
INSERT INTO `questions_china_trueorfalse` VALUES ('8', 'trueorfalse', 'Chinese konts are often used to express good wishes.\r\n', 'TRUE', null);
INSERT INTO `questions_china_trueorfalse` VALUES ('9', 'trueorfalse', 'Canton Tower is the tallest tower in China.\r\n', 'FALSE', null);
INSERT INTO `questions_china_trueorfalse` VALUES ('10', 'trueorfalse', 'Chinese Chess is usually referred to as Chu-Han contention.\r\n', 'TRUE', null);
INSERT INTO `questions_china_trueorfalse` VALUES ('11', 'trueorfalse', 'The appellations of \"Han People\" and \"Han Language\" originated from the Han Dynasty.\r\n', 'TRUE', null);
INSERT INTO `questions_china_trueorfalse` VALUES ('12', 'trueorfalse', 'Yao Ming is the president of Chinese Basketball Association.\r\n', 'TRUE', null);
INSERT INTO `questions_china_trueorfalse` VALUES ('13', 'trueorfalse', 'Tiananmen Square in Beijing is the largest public square in the world.\r\n', 'TRUE', null);
INSERT INTO `questions_china_trueorfalse` VALUES ('14', 'trueorfalse', 'China \'s gingko isn\'t the oldest tree in the world.\r\n', 'FALSE', null);
INSERT INTO `questions_china_trueorfalse` VALUES ('15', 'trueorfalse', 'Forbidden City, the former Imperial Palace, is located in the center of Henan Province.\r\n', 'FALSE', null);
INSERT INTO `questions_china_trueorfalse` VALUES ('16', 'trueorfalse', 'AS an ancient Chinese fortification, the Great Wall dates back more than 2000 years ago to the Spring and Autumn and the Warring States periods.\r\n', 'TRUE', null);
INSERT INTO `questions_china_trueorfalse` VALUES ('17', 'trueorfalse', 'The painting Qingming Scroll is attributed to the Song Dynasty(960-1279) artist Zhang Zeduan.\r\n', 'TRUE', null);
INSERT INTO `questions_china_trueorfalse` VALUES ('18', 'trueorfalse', 'Noodles are the symbol of longevity in Chinese culture.\r\n', 'TRUE', null);
INSERT INTO `questions_china_trueorfalse` VALUES ('19', 'trueorfalse', 'Spoons are the primary eating utensil in China for solid foods.\r\n', 'FALSE', null);
INSERT INTO `questions_china_trueorfalse` VALUES ('20', 'trueorfalse', 'Chinese cuisine involves seven marjor branches.\r\n', 'FALSE', null);
INSERT INTO `questions_china_trueorfalse` VALUES ('21', 'trueorfalse', 'A Chinese character is pronounced same when it represents different meanings.\r\n', 'FALSE', null);
INSERT INTO `questions_china_trueorfalse` VALUES ('22', 'trueorfalse', 'A sweet dish like sliced fruits is usually served at the beginning of a formal dinner.\r\n', 'FALSE', null);

-- ----------------------------
-- Table structure for questions_uk_multiple
-- ----------------------------
DROP TABLE IF EXISTS `questions_uk_multiple`;
CREATE TABLE `questions_uk_multiple` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `answer1` varchar(50) DEFAULT NULL,
  `answer2` varchar(50) DEFAULT NULL,
  `answer3` varchar(50) DEFAULT NULL,
  `answer4` varchar(50) DEFAULT NULL,
  `answer` varchar(50) NOT NULL,
  `pic` enum('0','1') DEFAULT '0' COMMENT '0none；1has a picture',
  `pic_info` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of questions_uk_multiple
-- ----------------------------
INSERT INTO `questions_uk_multiple` VALUES ('1', 'Multiple', 'What is the biggest castle in the UK?', 'Kenilworth', 'Dover', 'Windsor', 'Tintagel', 'Windsor', '1', 'WIndsor.jpg');
INSERT INTO `questions_uk_multiple` VALUES ('2', 'Multiple', 'At what age you can legally buy alcohol in the UK', '18', '21', '30', '10', '18', '1', 'alcohol.jpg');
INSERT INTO `questions_uk_multiple` VALUES ('3', 'Multiple', 'What is the tallest point in the UK?', 'Everest', 'Kilamanjaro', 'Ben Nevis', 'Alps', 'Ben Nevis', '0', null);
INSERT INTO `questions_uk_multiple` VALUES ('4', 'Multiple', 'Who was the first female prime minister in the UK?', 'Queen Elizabeth', 'Margaret Thatcher', 'Emma Watson', 'Theresa May', 'Margaret Thatcher', '1', 'Margaret Thatcher.jpg');
INSERT INTO `questions_uk_multiple` VALUES ('5', 'Multiple', 'What is the oldest university in the UK?', 'Oxford', 'Cambridge', 'UCL', 'Kensington', 'Oxford', '0', null);
INSERT INTO `questions_uk_multiple` VALUES ('6', 'Multiple', 'What is the oldest church in the UK?', 'Sistine Chapel', 'Church of England', 'Vatican', 'St. Paul\'s Cathedral', 'St. Paul\'s Cathedral', '0', null);
INSERT INTO `questions_uk_multiple` VALUES ('7', 'Multiple', 'How many wives did Henry VIII have?', '2', '8', '10', '1', '8', '1', 'henry_viii.jpg');
INSERT INTO `questions_uk_multiple` VALUES ('8', 'Multiple', 'What is the oldest landmark in the UK?', 'Buckingham Palace', 'Big Ben', 'Stonehenge', 'London Eye', 'Stonehenge', '1', 'Stonehenge.jpg');
INSERT INTO `questions_uk_multiple` VALUES ('9', 'Multiple', 'Which of these is the home of the royal family?', 'Buckingham Palace', 'House of Parliament', 'IKEA', 'Stonehenge', 'Buckingham Palace', '1', 'Buckingham Palace.jpg');
INSERT INTO `questions_uk_multiple` VALUES ('10', 'Multiple', 'What is the population in the UK?', '75 million', '35 million', '60 million', '100 million', '60 million', '0', null);
INSERT INTO `questions_uk_multiple` VALUES ('11', 'Multiple', 'What is the population of London?', '9 million', '12 million', '8 million', '1 million', '9 million', '0', null);
INSERT INTO `questions_uk_multiple` VALUES ('12', 'Multiple', 'Who is the longest reigning monarch in the UK?', 'Queen Victoria', 'Queen Elizabeth II ', 'Queen Mary', 'King Henry', 'Queen Elizabeth II ', '0', null);
INSERT INTO `questions_uk_multiple` VALUES ('13', 'Multiple', 'What is the currency used in the UK?', 'Yuan', 'Dollars', 'Euro', 'Pound Sterling', 'Pound Sterling', '1', 'pound.jpg');
INSERT INTO `questions_uk_multiple` VALUES ('14', 'Multiple', 'What is the longest river in the UK?', 'River Trent', 'River Thames', 'River Severn', 'River Wye', 'River Severn', '0', null);
INSERT INTO `questions_uk_multiple` VALUES ('15', 'Multiple', 'What is the largest natural lake in England?', 'Windermere', 'Loch Ness', 'Derwent Water', 'Ullswater', 'Windermere', '0', null);
INSERT INTO `questions_uk_multiple` VALUES ('16', 'Multiple', 'Apart from Britain, what is the biggest island in the UK?', 'Isle of wight', 'Lewis and Harris', 'Anglesey', 'Isle of Arran', 'Lewis and Harris', '0', null);
INSERT INTO `questions_uk_multiple` VALUES ('17', 'Multiple', 'What percentage of the UK is woodland?', '48%', '2.50%', '12.70%', '22%', '12.70%', '0', null);
INSERT INTO `questions_uk_multiple` VALUES ('18', 'Multiple', 'Which city does J.K Rowling currently living in?', 'London', 'York', 'Edinburgh', 'Oxford', 'Edinburgh', '1', 'J.K Rowling.jpg');
INSERT INTO `questions_uk_multiple` VALUES ('19', 'Multiple', 'Where was the footballer George Best born in?', 'Belfast', 'Manchester', 'Liverpool', 'Glasgow', 'Belfast', '1', 'GeorgeBest.jpg');
INSERT INTO `questions_uk_multiple` VALUES ('20', 'Multiple', 'Which one of the actors played James Bond?', 'David Tennant', 'Johnny Depp', 'Daniel Craig', 'Idris Elba', 'Daniel Craig', '1', '007.jpg');
INSERT INTO `questions_uk_multiple` VALUES ('21', 'Multiple', 'What is Steven Hawking famous for?', 'Being a physicist', 'Creating pizza', 'Finding a dinosaur fossil', 'Winning the world cup', 'Being a physicist', '1', 'Steven Hawking.jpg');
INSERT INTO `questions_uk_multiple` VALUES ('22', 'Multiple', 'Who is the Queen\'s eldest son?', 'Prince Charles', 'Prince George', 'Prince Phillip', 'Prince Harry', 'Prince Charles', '1', 'Queen.jpg');
INSERT INTO `questions_uk_multiple` VALUES ('23', 'Multiple', 'Paul McCartney is from which British band?', 'Artic Monkeys', 'Rolling Stones', 'Beatles', 'The Darkness', 'Beatles', '1', 'beatles.jpg');
INSERT INTO `questions_uk_multiple` VALUES ('24', 'Multiple', 'What is the population of Northen Ireland?', '3 million', '5 million', '1.8 million', '2.4 million', '1.8 million', '0', null);
INSERT INTO `questions_uk_multiple` VALUES ('25', 'Multiple', 'Who is the patron saint of Wales?', 'St. Thomas', 'St. George', 'St. Lewis', 'St. David', 'St. David', '0', null);

-- ----------------------------
-- Table structure for questions_uk_trueorfalse
-- ----------------------------
DROP TABLE IF EXISTS `questions_uk_trueorfalse`;
CREATE TABLE `questions_uk_trueorfalse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL DEFAULT 'trueorfalse',
  `question` varchar(100) NOT NULL,
  `answer1` varchar(50) NOT NULL,
  `answer2` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of questions_uk_trueorfalse
-- ----------------------------
INSERT INTO `questions_uk_trueorfalse` VALUES ('1', 'trueorfalse', 'The queen owns all the unmarked swans in the UK', 'TRUE', null);
INSERT INTO `questions_uk_trueorfalse` VALUES ('2', 'trueorfalse', 'The UK is right next to Russia', 'FALSE', null);
INSERT INTO `questions_uk_trueorfalse` VALUES ('3', 'trueorfalse', 'Mount Henry is a mountain in the UK', 'FALSE', null);
INSERT INTO `questions_uk_trueorfalse` VALUES ('4', 'trueorfalse', 'If you reach your 100th birthday, you will receive a personalised card from the Queen', 'TRUE', null);
INSERT INTO `questions_uk_trueorfalse` VALUES ('5', 'trueorfalse', 'In the UK, you are never more than 70 miles away from the sea', 'TRUE', null);
INSERT INTO `questions_uk_trueorfalse` VALUES ('6', 'trueorfalse', 'It is illegal for 16 year olds to drink alcohol at home with a parent or guardian', 'FALSE', null);
INSERT INTO `questions_uk_trueorfalse` VALUES ('7', 'trueorfalse', 'Snooker is the national sport in the UK', 'FALSE', null);
INSERT INTO `questions_uk_trueorfalse` VALUES ('8', 'trueorfalse', 'There are more Indian restaurants in the UK than in Mumbai, India', 'TRUE', null);
INSERT INTO `questions_uk_trueorfalse` VALUES ('9', 'trueorfalse', 'The London Eye has 32 capsules, one fore each borough', 'TRUE', null);
INSERT INTO `questions_uk_trueorfalse` VALUES ('10', 'trueorfalse', 'The British Museum is older than the American declaration of Independence', 'TRUE', null);
INSERT INTO `questions_uk_trueorfalse` VALUES ('11', 'trueorfalse', 'The English language oroginally came from America', 'FALSE', null);
INSERT INTO `questions_uk_trueorfalse` VALUES ('12', 'trueorfalse', 'Edinburgh Castle is built on an ancient on active volcano', 'TRUE', null);
INSERT INTO `questions_uk_trueorfalse` VALUES ('13', 'trueorfalse', 'Henry VIII executed all his wives', 'FALSE', null);
INSERT INTO `questions_uk_trueorfalse` VALUES ('14', 'trueorfalse', 'The Queen used to own all the countries in the world', 'FALSE', null);
INSERT INTO `questions_uk_trueorfalse` VALUES ('15', 'trueorfalse', 'Judaism originated from the UK', 'FALSE', null);
INSERT INTO `questions_uk_trueorfalse` VALUES ('16', 'trueorfalse', 'The English drink the most tea in the world', 'TRUE', null);
INSERT INTO `questions_uk_trueorfalse` VALUES ('17', 'trueorfalse', 'Buckingham Palace has its own police station', 'TRUE', null);
INSERT INTO `questions_uk_trueorfalse` VALUES ('18', 'trueorfalse', 'The River Thames only has 3 bridges running through it', 'FALSE', null);
INSERT INTO `questions_uk_trueorfalse` VALUES ('19', 'trueorfalse', 'It is legal to carry a plank along a pavement in the UK', 'FALSE', null);
INSERT INTO `questions_uk_trueorfalse` VALUES ('20', 'trueorfalse', 'It is illegal to eat a mince pie on Christmas Day in the UK', 'FALSE', null);
INSERT INTO `questions_uk_trueorfalse` VALUES ('21', 'trueorfalse', 'It is illegal to die in Parliament', 'FALSE', null);
INSERT INTO `questions_uk_trueorfalse` VALUES ('22', 'trueorfalse', 'About 35% of the UK is agriculture (farm land)', 'FALSE', null);
