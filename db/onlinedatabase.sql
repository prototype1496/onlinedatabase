-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.36-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for onlinedb
CREATE DATABASE IF NOT EXISTS `onlinedb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `onlinedb`;

-- Dumping structure for table onlinedb.address
CREATE TABLE IF NOT EXISTS `address` (
  `member_id` int(11) DEFAULT NULL,
  `primery_address` varchar(220) DEFAULT NULL,
  `secondary_address` varchar(220) DEFAULT NULL,
  `postal_code` varchar(220) DEFAULT NULL,
  `regon_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_province_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  KEY `FK_REGON_ID` (`regon_id`),
  KEY `FK_CONTRY_ID` (`country_id`),
  KEY `FK_STATE_PROVINCE_ID` (`state_province_id`),
  KEY `FK_CITY_ID` (`city_id`),
  KEY `member_id` (`member_id`),
  CONSTRAINT `FK_CITY_ID` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `FK_CONTRY_ID` FOREIGN KEY (`country_id`) REFERENCES `country` (`contry_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `FK_MEMBERIDs` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_REGON_ID` FOREIGN KEY (`regon_id`) REFERENCES `region` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_STATE_PROVINCE_ID` FOREIGN KEY (`state_province_id`) REFERENCES `stste_province` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table onlinedb.address: ~6 rows (approximately)
DELETE FROM `address`;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
INSERT INTO `address` (`member_id`, `primery_address`, `secondary_address`, `postal_code`, `regon_id`, `country_id`, `state_province_id`, `city_id`) VALUES
	(73, '6th jemson Avenu', 'Meanwook hill on lake vally', '10010', NULL, NULL, NULL, NULL),
	(75, 'Kafuwe Road off dal78', 'PHI npanga ylka nama', '10010', NULL, NULL, NULL, NULL),
	(76, 'cheston avenu', 'kablonga', '10010', NULL, NULL, NULL, NULL),
	(77, 'The jebhbgujbfdbuhjb', 'bnjhbhjbjubjbjbj', '100010', NULL, NULL, NULL, NULL),
	(78, 'ugjhwsfhcubs', 'sfrgefe', '10010', NULL, NULL, NULL, NULL),
	(79, 'erg', 'sfewsef', '10010', NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `address` ENABLE KEYS */;

-- Dumping structure for table onlinedb.awards
CREATE TABLE IF NOT EXISTS `awards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `award_name` varchar(220) DEFAULT 'None',
  `award_issued_by` varchar(220) DEFAULT 'None',
  `award_remarks` varchar(220) DEFAULT 'None',
  PRIMARY KEY (`id`),
  KEY `FK_MEMEBER_ID` (`member_id`),
  CONSTRAINT `FK_MEMEBER_ID` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table onlinedb.awards: ~0 rows (approximately)
DELETE FROM `awards`;
/*!40000 ALTER TABLE `awards` DISABLE KEYS */;
/*!40000 ALTER TABLE `awards` ENABLE KEYS */;

-- Dumping structure for table onlinedb.career_occupation
CREATE TABLE IF NOT EXISTS `career_occupation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) DEFAULT NULL,
  `prof_career` varchar(220) DEFAULT 'None' COMMENT 'This filed is supposed to be affiliated organisation as in stated in the gui',
  `duration_start` date DEFAULT NULL,
  `duration_end` varchar(50) DEFAULT 'Currently',
  `position` varchar(220) DEFAULT NULL,
  `co_remarks` varchar(220) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_MEMBERID` (`member_id`),
  CONSTRAINT `FK_MEMBERID` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- Dumping data for table onlinedb.career_occupation: ~8 rows (approximately)
DELETE FROM `career_occupation`;
/*!40000 ALTER TABLE `career_occupation` DISABLE KEYS */;
INSERT INTO `career_occupation` (`id`, `member_id`, `prof_career`, `duration_start`, `duration_end`, `position`, `co_remarks`) VALUES
	(6, 73, 'ZCAS', '2018-08-13', '2018-09-11', 'Manager', 'Good job'),
	(26, 73, 'Lusaka City University', '2018-09-10', '2018-09-21', 'Manager', 'Good job'),
	(28, 75, 'None', '0000-00-00', '', 'None', 'None'),
	(29, 76, 'Zcom', '2014-09-03', '2018-09-05', 'Software Developer', ''),
	(30, 77, 'Ntwork Infrastructer', '2018-06-12', '2018-09-11', 'ICT', 'Good Student'),
	(31, 78, 'ICT', '2018-10-23', '2018-10-08', 'ICT manager', 'none'),
	(32, 79, 'The Programmer', '2018-10-15', '2018-10-18', 'Head', 'Good job'),
	(33, 79, 'Computer Scinece', '2018-10-22', '2018-10-15', 'Head', 'Good job');
/*!40000 ALTER TABLE `career_occupation` ENABLE KEYS */;

-- Dumping structure for table onlinedb.certifications
CREATE TABLE IF NOT EXISTS `certifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `issued_by` varchar(220) DEFAULT NULL,
  `qualification_name` varchar(220) DEFAULT NULL,
  `cert_remarks` varchar(220) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKMEMBERKEY` (`member_id`),
  CONSTRAINT `FKMEMBERKEY` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table onlinedb.certifications: ~7 rows (approximately)
DELETE FROM `certifications`;
/*!40000 ALTER TABLE `certifications` DISABLE KEYS */;
INSERT INTO `certifications` (`id`, `member_id`, `date`, `issued_by`, `qualification_name`, `cert_remarks`) VALUES
	(1, 73, '2018-08-26', 'James Julu', 'Java Certification', 'Distinction'),
	(12, 73, '2018-08-13', 'CESSCO Organisation', 'CCNP', 'Good job'),
	(14, 75, '2018-09-03', 'None', 'None', 'None'),
	(15, 76, '2018-09-01', 'Prof Kunda', 'MSQL', 'Merit'),
	(16, 77, '2018-09-24', 'Prof Kunda', 'Mulungushi Univerity', 'Merit'),
	(17, 78, '0000-00-00', 'None', 'None', ''),
	(18, 79, '2018-10-28', 'CESSCO Organisation', 'Mulungushi Univerity', 'Merit');
/*!40000 ALTER TABLE `certifications` ENABLE KEYS */;

-- Dumping structure for table onlinedb.city
CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `state_provinceid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`city_id`),
  KEY `FK_STATE_PROVINCE` (`state_provinceid`),
  CONSTRAINT `FK_STATE_PROVINCE` FOREIGN KEY (`state_provinceid`) REFERENCES `stste_province` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table onlinedb.city: ~2 rows (approximately)
DELETE FROM `city`;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` (`city_id`, `name`, `state_provinceid`) VALUES
	(1, 'Kabwe', 1),
	(2, 'Lusaka', 2);
/*!40000 ALTER TABLE `city` ENABLE KEYS */;

-- Dumping structure for table onlinedb.country
CREATE TABLE IF NOT EXISTS `country` (
  `contry_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `regon_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`contry_id`),
  KEY `FK_REGONID` (`regon_id`),
  CONSTRAINT `FK_REGONID` FOREIGN KEY (`regon_id`) REFERENCES `region` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table onlinedb.country: ~2 rows (approximately)
DELETE FROM `country`;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT INTO `country` (`contry_id`, `name`, `regon_id`) VALUES
	(1, 'Zambia', 5),
	(2, 'Congo', 5);
/*!40000 ALTER TABLE `country` ENABLE KEYS */;

-- Dumping structure for table onlinedb.department
CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(220) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table onlinedb.department: ~3 rows (approximately)
DELETE FROM `department`;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` (`id`, `department`) VALUES
	(1, 'Youth'),
	(2, 'Adult'),
	(3, 'Others');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;

-- Dumping structure for table onlinedb.education
CREATE TABLE IF NOT EXISTS `education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) DEFAULT NULL,
  `duration_start` year(4) DEFAULT NULL,
  `duration_end` year(4) DEFAULT NULL,
  `institutiion_name` varchar(220) DEFAULT NULL,
  `major` varchar(220) DEFAULT NULL,
  `edu_remarks` varchar(220) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKMEMEBERTABLE` (`member_id`),
  CONSTRAINT `FKMEMEBERTABLE` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- Dumping data for table onlinedb.education: ~7 rows (approximately)
DELETE FROM `education`;
/*!40000 ALTER TABLE `education` DISABLE KEYS */;
INSERT INTO `education` (`id`, `member_id`, `duration_start`, `duration_end`, `institutiion_name`, `major`, `edu_remarks`) VALUES
	(20, 73, '2018', '2018', 'Mulungushi University', 'None', 'Credit'),
	(21, 73, '2003', '2018', 'Copperbelt University', 'ICT', 'credit'),
	(22, 75, '2003', '2018', 'Copperbelt University', 'ICT', 'credit'),
	(23, 76, '0000', '0000', '', '', ''),
	(24, 77, '2018', '2018', 'Mulungushi University', 'ICT', 'credit'),
	(25, 78, '2012', '2018', 'Pleal Habour', 'ICT', 'Distinction'),
	(26, 79, '2018', '2018', 'Copperbelt University', 'None', 'Credit');
/*!40000 ALTER TABLE `education` ENABLE KEYS */;

-- Dumping structure for table onlinedb.family
CREATE TABLE IF NOT EXISTS `family` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `memeber_id` int(11) DEFAULT NULL,
  `family_member_name` varchar(220) DEFAULT 'None',
  `family_dob` date DEFAULT NULL,
  `remarks` varchar(220) DEFAULT 'None',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table onlinedb.family: ~0 rows (approximately)
DELETE FROM `family`;
/*!40000 ALTER TABLE `family` DISABLE KEYS */;
INSERT INTO `family` (`id`, `memeber_id`, `family_member_name`, `family_dob`, `remarks`) VALUES
	(2, NULL, 'Jone Solye', '1997-08-26', 'None');
/*!40000 ALTER TABLE `family` ENABLE KEYS */;

-- Dumping structure for table onlinedb.gender
CREATE TABLE IF NOT EXISTS `gender` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(5) NOT NULL DEFAULT 'Male',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table onlinedb.gender: ~2 rows (approximately)
DELETE FROM `gender`;
/*!40000 ALTER TABLE `gender` DISABLE KEYS */;
INSERT INTO `gender` (`id`, `gender`) VALUES
	(1, 'Male'),
	(2, 'Femal');
/*!40000 ALTER TABLE `gender` ENABLE KEYS */;

-- Dumping structure for table onlinedb.marital_status
CREATE TABLE IF NOT EXISTS `marital_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(220) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table onlinedb.marital_status: ~4 rows (approximately)
DELETE FROM `marital_status`;
/*!40000 ALTER TABLE `marital_status` DISABLE KEYS */;
INSERT INTO `marital_status` (`id`, `status`) VALUES
	(1, 'married'),
	(2, 'single'),
	(3, 'divorced'),
	(4, 'widowed');
/*!40000 ALTER TABLE `marital_status` ENABLE KEYS */;

-- Dumping structure for table onlinedb.members
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nrc` varchar(50) DEFAULT 'None',
  `passport` varchar(50) DEFAULT 'None',
  `fname` varchar(220) DEFAULT NULL,
  `lname` varchar(220) DEFAULT NULL,
  `oname` varchar(220) DEFAULT NULL,
  `spouse_name` varchar(220) DEFAULT 'None',
  `snetwork_name` varchar(220) DEFAULT NULL,
  `generation` varchar(220) DEFAULT NULL,
  `email` varchar(220) DEFAULT NULL,
  `phone` varchar(220) DEFAULT NULL,
  `telephone` varchar(220) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `spiritual_dob` date DEFAULT NULL,
  `profile_photo` varchar(256) DEFAULT 'defult.png',
  `date_joined` datetime DEFAULT CURRENT_TIMESTAMP,
  `marital_status_id` int(11) DEFAULT NULL,
  `member_type_id` int(11) DEFAULT NULL,
  `nationality_id` varchar(50) DEFAULT NULL,
  `religion_id` int(11) DEFAULT NULL,
  `gender_id` int(11) DEFAULT '1',
  `department_id` int(11) DEFAULT NULL,
  `approval_ststus` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `passport` (`passport`),
  UNIQUE KEY `nrc` (`nrc`),
  KEY `FK_members_marital_status` (`marital_status_id`),
  KEY `FK_members_member_type` (`member_type_id`),
  KEY `FK_members_department` (`department_id`),
  KEY `FK_members_religion` (`religion_id`),
  KEY `FK_members_gender` (`gender_id`),
  CONSTRAINT `FK_members_department` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_members_gender` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_members_marital_status` FOREIGN KEY (`marital_status_id`) REFERENCES `marital_status` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_members_member_type` FOREIGN KEY (`member_type_id`) REFERENCES `member_type` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_members_religion` FOREIGN KEY (`religion_id`) REFERENCES `religion` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

-- Dumping data for table onlinedb.members: ~6 rows (approximately)
DELETE FROM `members`;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` (`id`, `nrc`, `passport`, `fname`, `lname`, `oname`, `spouse_name`, `snetwork_name`, `generation`, `email`, `phone`, `telephone`, `date_of_birth`, `spiritual_dob`, `profile_photo`, `date_joined`, `marital_status_id`, `member_type_id`, `nationality_id`, `religion_id`, `gender_id`, `department_id`, `approval_ststus`) VALUES
	(73, '121/45/8569', '2155-55-54', 'Musa', 'Emmanuel', 'Sisisoke', 'Agatha', 'mus@facebook.com', '1st', 'musae@gail.com', '0977100587', '0977412', '2017-12-01', '2018-09-05', 'DSCN1425.jpg', '2018-09-03 16:40:32', 3, 1, 'Zambian', 3, 1, 1, 1),
	(75, '5454/458/6', '45-45-447', 'Chrisabel', 'Makukula', 'Woshington', 'Mayy', 'me@facbook.com', '2nd', 'cemuka@mu.ac.zm', '097785689', '2011445455', '1993-09-05', '2010-08-09', 'defult.png', '2018-09-05 00:32:59', 1, 2, 'Zambian', 3, 2, 2, 1),
	(76, '23252/98/5', '454-414-411', 'Bennared', 'Kapinda', 'Rohim', 'Kami', 'ben@facebook.com', '5th', 'rohi@gmail.com', '0977100587', '655116565', '1995-08-09', '2012-08-06', 'defult.png', '2018-09-05 08:51:00', 1, 3, 'Zambian', 4, 1, 1, 1),
	(77, '9464-65-5', '45541', 'Likohji', 'Mwanza', 'Rabbson', 'Chiseche', '#likomwanza', '3rd', 'lrm@zcom.zo.zm', '0977100587', '078844', '2018-09-24', '2018-09-17', 'DSCN9174.JPG', '2018-09-21 21:19:36', 2, 2, 'Tanzanian', 4, 1, 2, 1),
	(78, '121/45/85699', '454-84-4559', 'Ali', 'Mwanza', 'Ahmad', '', 'Mwanza@facboo', '1st', 'Mwanza@gmail.com', '09771001221', '0321222', '2010-07-15', '2018-10-15', 'IMG_20151003_061635.JPG', '2018-10-05 09:34:52', 1, 1, 'Zmabian', 1, 1, 1, 1),
	(79, '55544', '4554545454', 'Eric', 'Kapinda', 'Sisisoke', 'Mr Alick', 'ewew', '2ND', 'eric@gmail.com', '452432542', '54242452', '2016-05-09', '2018-10-18', '17522748_1298987863483422_931203653667373964_n.jpg', '2018-10-16 13:03:01', 4, 2, 'Zambian', 2, 1, 1, 1);
/*!40000 ALTER TABLE `members` ENABLE KEYS */;

-- Dumping structure for table onlinedb.member_type
CREATE TABLE IF NOT EXISTS `member_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT 'Irregular',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table onlinedb.member_type: ~4 rows (approximately)
DELETE FROM `member_type`;
/*!40000 ALTER TABLE `member_type` DISABLE KEYS */;
INSERT INTO `member_type` (`id`, `type`) VALUES
	(1, 'VIP'),
	(2, 'Reguler'),
	(3, 'Associate'),
	(4, 'Irregular');
/*!40000 ALTER TABLE `member_type` ENABLE KEYS */;

-- Dumping structure for table onlinedb.password_reset
CREATE TABLE IF NOT EXISTS `password_reset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `token` varchar(300) NOT NULL,
  `token_creation` varchar(50) NOT NULL,
  `reset_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table onlinedb.password_reset: ~6 rows (approximately)
DELETE FROM `password_reset`;
/*!40000 ALTER TABLE `password_reset` DISABLE KEYS */;
INSERT INTO `password_reset` (`id`, `username`, `token`, `token_creation`, `reset_date`) VALUES
	(7, 'mu2014adevelopers@gmail.com', 'e51a16880c0d90f21da175d754e37359b82c1ccb357e24c791b68b6b582a646c', '1537628048', '2018-09-22 16:54:13'),
	(8, 'mu2014adevelopers@gmail.com', 'd276712360a9367612eec3726c8bb348983ba594e3b359f03b4ab77809c5add4', '1537628458', '2018-09-22 17:01:55'),
	(9, 'alinuswemwandobo@gmail.com', '8baa0201dcb54669bff424f87cd085046dc8d5f859936603bffac5562048855b', '1537628732', '2018-09-22 17:05:45'),
	(10, 'alinuswemwandobo@gmail.com', '5e8c27a750ed1f4cb986790df4f6f9b97ef390d49dfbc8990924a0ad1505b1f8', '1537632604', '2018-09-22 18:10:19'),
	(11, 'alinuswemwandobo@gmail.com', '1c39f99be219cdeb3caab4b28769032db589ed45f1e8b08ca8e9b1aef8279524', '1537642995', '2018-09-22 21:03:31'),
	(12, 'alinuswemwandobo@gmail.com', '80e5233eabb597281bc380c2870e47b7e4e100c78dd2d172e6a1448386ea0f32', '1539688699', '2018-10-16 13:18:42'),
	(13, 'alinuswemwandobo@gmail.com', 'bcb1b767607b3be9ce2174adaf8d24c37470c3600a5468e082b049b30ca9617f', '1545207327', '2018-12-19 10:15:34');
/*!40000 ALTER TABLE `password_reset` ENABLE KEYS */;

-- Dumping structure for table onlinedb.region
CREATE TABLE IF NOT EXISTS `region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region` varchar(220) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table onlinedb.region: ~5 rows (approximately)
DELETE FROM `region`;
/*!40000 ALTER TABLE `region` DISABLE KEYS */;
INSERT INTO `region` (`id`, `region`) VALUES
	(1, 'east_africa'),
	(2, 'west_africa'),
	(3, 'north_africa'),
	(4, 'southern_africa'),
	(5, 'central_africa');
/*!40000 ALTER TABLE `region` ENABLE KEYS */;

-- Dumping structure for table onlinedb.religion
CREATE TABLE IF NOT EXISTS `religion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `religon` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table onlinedb.religion: ~5 rows (approximately)
DELETE FROM `religion`;
/*!40000 ALTER TABLE `religion` DISABLE KEYS */;
INSERT INTO `religion` (`id`, `religon`) VALUES
	(1, 'Christanity'),
	(2, 'Islam'),
	(3, 'Hinduism'),
	(4, 'Atheism'),
	(5, 'Others');
/*!40000 ALTER TABLE `religion` ENABLE KEYS */;

-- Dumping structure for table onlinedb.role
CREATE TABLE IF NOT EXISTS `role` (
  `rileid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT 'member',
  PRIMARY KEY (`rileid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table onlinedb.role: ~3 rows (approximately)
DELETE FROM `role`;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` (`rileid`, `name`) VALUES
	(1, 'President'),
	(2, 'Database Admin'),
	(3, 'Country  Leader');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

-- Dumping structure for table onlinedb.stste_province
CREATE TABLE IF NOT EXISTS `stste_province` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `contry_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_CONTORYID` (`contry_id`),
  CONSTRAINT `FK_CONTORYID` FOREIGN KEY (`contry_id`) REFERENCES `country` (`contry_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table onlinedb.stste_province: ~2 rows (approximately)
DELETE FROM `stste_province`;
/*!40000 ALTER TABLE `stste_province` DISABLE KEYS */;
INSERT INTO `stste_province` (`id`, `name`, `contry_id`) VALUES
	(1, 'Central', 1),
	(2, 'Lusaka', 1);
/*!40000 ALTER TABLE `stste_province` ENABLE KEYS */;

-- Dumping structure for table onlinedb.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(64) NOT NULL,
  `user_role` int(11) DEFAULT '3',
  `acc_pic` varchar(255) DEFAULT 'defult.png',
  `appointed_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `activated` int(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_ROLLID` (`user_role`),
  CONSTRAINT `FK_ROLLID` FOREIGN KEY (`user_role`) REFERENCES `role` (`rileid`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Dumping data for table onlinedb.users: ~8 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `user_role`, `acc_pic`, `appointed_date`, `activated`) VALUES
	(16, 'moses@gmail.com', '1234', 1, 'DSCN1425.jpg', '2018-09-09 16:13:50', 1),
	(24, 'a', '1234', 2, 'defult.png', '2019-10-03 15:37:25', 1),
	(25, 'b', '1234', 3, 'defult.png', '2019-10-03 15:37:39', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for procedure onlinedb.activateUser
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `activateUser`(IN `member_id` INT)
BEGIN
UPDATE users u set u.activated =1 WHERE u.id=member_id;
END//
DELIMITER ;

-- Dumping structure for procedure onlinedb.approveUseRequest
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `approveUseRequest`(IN `member_id` INT)
BEGIN
UPDATE members m set m.approval_ststus=1 WHERE m.id=member_id;
END//
DELIMITER ;

-- Dumping structure for procedure onlinedb.changePassword
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `changePassword`(IN `username` VARCHAR(100), IN `password` VARCHAR(100))
BEGIN
UPDATE users u SET u.password = password WHERE u.username = username;
END//
DELIMITER ;

-- Dumping structure for procedure onlinedb.checkEmailValid
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `checkEmailValid`(IN `email` VARCHAR(50))
BEGIN
SELECT u.username FROM users u WHERE u.username = email AND u.activated=1;
END//
DELIMITER ;

-- Dumping structure for procedure onlinedb.deactivateUser
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `deactivateUser`(IN `member_id` INT)
BEGIN
UPDATE users u set u.activated =0 WHERE u.id=member_id;
END//
DELIMITER ;

-- Dumping structure for procedure onlinedb.deletMember
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `deletMember`(IN `member_id` INT)
BEGIN
DELETE FROM members WHERE id = member_id;
END//
DELIMITER ;

-- Dumping structure for procedure onlinedb.getAllActivatedUsers
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `getAllActivatedUsers`()
BEGIN
select u.id,u.username, r.name, u.appointed_date, if(u.activated =1, 'Yes', 'No') activated from users u, role r WHERE u.user_role = r.rileid and u.activated=1;
END//
DELIMITER ;

-- Dumping structure for procedure onlinedb.getAllDeactivatedUsers
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `getAllDeactivatedUsers`()
BEGIN
select u.id,u.username, r.name, u.appointed_date, if(u.activated =1, 'Yes', 'No') activated from users u, role r WHERE u.user_role = r.rileid and u.activated=0; 
END//
DELIMITER ;

-- Dumping structure for procedure onlinedb.getAllUsers
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `getAllUsers`()
BEGIN
select u.id,r.rileid,u.username, r.name, u.appointed_date, if(u.activated =1, 'Yes', 'No') activated from users u, role r WHERE u.user_role = r.rileid; 
END//
DELIMITER ;

-- Dumping structure for procedure onlinedb.getApprovalRequests
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `getApprovalRequests`()
BEGIN
SELECT COUNT(m.approval_ststus) as requestNumber from members m WHERE m.approval_ststus = 0;
END//
DELIMITER ;

-- Dumping structure for procedure onlinedb.getEducationDetails
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `getEducationDetails`(IN `member_id` int)
BEGIN
	SELECT * FROM education edu WHERE edu.member_id=member_id;
END//
DELIMITER ;

-- Dumping structure for procedure onlinedb.getLimmitUnApprovedMembers
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `getLimmitUnApprovedMembers`()
BEGIN
	SELECT DISTINCT m.id,m.fname, m.lname, g.gender, m.phone,m.profile_photo   FROM members m, gender g WHERE m.gender_id = g.id AND m.approval_ststus=0 LIMIT 6;
END//
DELIMITER ;

-- Dumping structure for procedure onlinedb.getMemberCareeaOcupation
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `getMemberCareeaOcupation`(IN `member_id` int)
BEGIN
	SELECT * FROM career_occupation co WHERE co.member_id = member_id;
END//
DELIMITER ;

-- Dumping structure for procedure onlinedb.getMembers
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `getMembers`()
BEGIN
	SELECT DISTINCT m.id,m.fname, m.lname, g.gender, m.phone FROM members m, gender g WHERE m.gender_id = g.id AND m.approval_ststus=1;

END//
DELIMITER ;

-- Dumping structure for procedure onlinedb.getMembersCirtifications
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `getMembersCirtifications`(IN `memeber_id` int)
BEGIN
SELECT * FROM certifications cr WHERE cr.member_id = memeber_id; 
END//
DELIMITER ;

-- Dumping structure for procedure onlinedb.getMemeberDetails
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `getMemeberDetails`(IN `member_id` int)
BEGIN
	SELECT m.id, m.nrc, m.passport, m.fname, m.lname, m.oname, g.gender, mr.`status`, m.spouse_name, m.snetwork_name,m.generation, m.email, m.phone, m.telephone, m.nationality_id, d.department, m.date_of_birth, m.spiritual_dob, rl.religon, m.profile_photo, mt.type,m.date_joined, ad.primery_address,ad.secondary_address,ad.postal_code FROM members m, gender g, marital_status mr, religion rl, member_type mt, department d, address ad WHERE m.gender_id=g.id and m.marital_status_id= mr.id and m.religion_id= rl.id and m.department_id = d.id and m.member_type_id=mt.id and m.id=ad.member_id AND m.id = member_id;

END//
DELIMITER ;

-- Dumping structure for procedure onlinedb.getResetDetails
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `getResetDetails`(IN `reset_token` VARCHAR(300))
BEGIN
Select * from password_reset r WHERE r.token = reset_token; 
END//
DELIMITER ;

-- Dumping structure for procedure onlinedb.getUnApprovedMembers
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `getUnApprovedMembers`()
BEGIN
	SELECT DISTINCT m.id,m.fname, m.lname, g.gender, m.phone,m.profile_photo   FROM members m, gender g WHERE m.gender_id = g.id AND m.approval_ststus=0;
END//
DELIMITER ;

-- Dumping structure for procedure onlinedb.getUserRoles
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `getUserRoles`()
BEGIN
select * from role;
END//
DELIMITER ;

-- Dumping structure for procedure onlinedb.upgradeUser
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `upgradeUser`(IN `user_id` INT, IN `upgrade_id` INT)
BEGIN
UPDATE users u SET u.user_role = upgrade_id WHERE u.id = user_id;
END//
DELIMITER ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
