-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.8 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2020-10-08 22:12:39
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table food.account
CREATE TABLE IF NOT EXISTS `account` (
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `autoid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`email`),
  UNIQUE KEY `autoid` (`autoid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table food.account: ~7 rows (approximately)
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` (`FirstName`, `LastName`, `birthdate`, `email`, `gender`, `password`, `phoneNumber`, `autoid`) VALUES
	('twew', 'retwe', '2019-11-05', '4@gmail.com', 'male', '23', '12323', 7),
	('akash', 'kumar', '2019-07-27', 'akash@gmail.com', 'male', '12345', '016235567771', 1),
	('taslima', 'anika', '2019-07-23', 'anika@gmail.com', 'Female', '123', '016222333242', 2),
	('Bibi', 'Halima', '0000-00-00', 'bibi@gmail.com', 'female', '12345', '012845334534', 3),
	('sanji', 'kanij', '0000-00-00', 'sanji@gmail.com', 'female', '12345', '01627267723', 4),
	('subhra', 'palit', '1996-07-05', 'subhra@gmail.com', 'male', '123', '01672337461', 5),
	('riyad', 'noman', '2019-07-13', 'xyz@gmail.com', 'male', '123456', '01627267723', 6);
/*!40000 ALTER TABLE `account` ENABLE KEYS */;


-- Dumping structure for table food.tbcategoryinfo
CREATE TABLE IF NOT EXISTS `tbcategoryinfo` (
  `foodname` varchar(50) NOT NULL DEFAULT '',
  `price` int(50) DEFAULT NULL,
  `restaurantname` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`foodname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table food.tbcategoryinfo: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbcategoryinfo` DISABLE KEYS */;
INSERT INTO `tbcategoryinfo` (`foodname`, `price`, `restaurantname`, `location`) VALUES
	('biriyani', 220, '7_days', '2no_gate'),
	('icecream', 220, '7_days', '2no_gate');
/*!40000 ALTER TABLE `tbcategoryinfo` ENABLE KEYS */;


-- Dumping structure for table food.tbcontactinfo
CREATE TABLE IF NOT EXISTS `tbcontactinfo` (
  `Email` varchar(70) NOT NULL,
  `PhoneNumber` int(50) NOT NULL,
  `Subject` text NOT NULL,
  `autoid` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Email`),
  UNIQUE KEY `autoid` (`autoid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table food.tbcontactinfo: ~4 rows (approximately)
/*!40000 ALTER TABLE `tbcontactinfo` DISABLE KEYS */;
INSERT INTO `tbcontactinfo` (`Email`, `PhoneNumber`, `Subject`, `autoid`) VALUES
	('anika@gmail.com', 1622334477, 'I cannot find food category', 1),
	('bibihalima@gmail.com', 1627267723, 'This site is good ', 2),
	('reza@gmail.com', 1832444, 'prochur', 3),
	('subhra@gmail', 2147483647, 'dsa', 4);
/*!40000 ALTER TABLE `tbcontactinfo` ENABLE KEYS */;


-- Dumping structure for table food.tbreviewinfo
CREATE TABLE IF NOT EXISTS `tbreviewinfo` (
  `EnterEmail` varchar(50) NOT NULL DEFAULT '',
  `FoodName` varchar(50) DEFAULT NULL,
  `FoodRating` float DEFAULT NULL,
  `RestaurantName` varchar(50) DEFAULT NULL,
  `Location` varchar(50) DEFAULT NULL,
  `CommentBox` varchar(50) DEFAULT NULL,
  `autoid` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`EnterEmail`),
  UNIQUE KEY `autoid` (`autoid`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Dumping data for table food.tbreviewinfo: ~11 rows (approximately)
/*!40000 ALTER TABLE `tbreviewinfo` DISABLE KEYS */;
INSERT INTO `tbreviewinfo` (`EnterEmail`, `FoodName`, `FoodRating`, `RestaurantName`, `Location`, `CommentBox`, `autoid`) VALUES
	('anee@gmail.com', 'kacchi biriyani', 8.5, '7days', '2no gate', 'quantity was insufficient.', 1),
	('anika@gmail.com', 'icecream', 9, 'Sub_Zero', 'Stadium,Kazir Dewri', 'yummy.....', 2),
	('arafat@gmail.com', ' icecream', 8.5, 'Sub_Zero', 'Stadium,Kazir Dewri', 'taste is good.', 3),
	('bibi@gmail.com', 'ice cream', 0, ' ', '', '', 11),
	('bibihalima@gmail.com', 'biriyani', 8.5, '7days', '2no gate', 'Taste was delicious.Environment was good.', 4),
	('farhana@gmail.com', 'ice cream', 7, ' Adda', 'Chowkbazar', 'ggh', 17),
	('jui@gmail.com', 'Cappuccino Coffee', 8, 'Well Food Centre', 'Nizam Road GEC Circle', 'good...', 5),
	('reza@gmail.com', ' kacchi biriyani', 9.5, '7days', '2no gate', 'prochur moja.....', 6),
	('sanji@gmail.com', ' fuska', 9.5, 'Adda', 'Keyari market,Chowkbazar', 'awesome', 7),
	('subhra@gmail', ' icecream', 8, 'Sub_Zero', 'Stadium,Kazir Dewri', 'well', 8),
	('xyz@gmail.com', 'fuska', 7, ' Adda', 'Chowkbazar', 'good', 9);
/*!40000 ALTER TABLE `tbreviewinfo` ENABLE KEYS */;


-- Dumping structure for table food.uploadedimage
CREATE TABLE IF NOT EXISTS `uploadedimage` (
  `Id` int(11) NOT NULL DEFAULT '0',
  `imagename` blob NOT NULL,
  `autoid` bigint(200) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `autoid` (`autoid`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Dumping data for table food.uploadedimage: ~4 rows (approximately)
/*!40000 ALTER TABLE `uploadedimage` DISABLE KEYS */;
INSERT INTO `uploadedimage` (`Id`, `imagename`, `autoid`) VALUES
	(0, _binary 0xFFD8FFE000104A46494600010101004800480000FFE20C584943435F50524F46494C4500010100000C484C696E6F021000006D6E74725247422058595A2007CE00020009000600310000616373704D5346540000000049454320735247420000000000000000000000000000F6D6000100000000D32D4850202000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000001163707274000001500000003364657363000001840000006C777470740000, 12),
	(1, _binary 0xFFD8FFE000104A46494600010200000100010000FFDB0043000503040404030504040405050506070C08070707070F0A0B090C110F1212110F111013161C1713141A1510111821181A1C1D1F1F1F13172224221E241C1E1F1EFFDB0043010505050706070E08080E1E1411141E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1E1EFFC0001108019C022603012200021101031101FFC4001F00000105010101010101000000000000000001, 11),
	(2, _binary 0x706174696C2E6A7067, 16),
	(3, _binary 0x626565662E6A7067, 18);
/*!40000 ALTER TABLE `uploadedimage` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
