-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.5.24-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             8.1.0.4635
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for news
CREATE DATABASE IF NOT EXISTS `news` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `news`;


-- Dumping structure for table news.author
CREATE TABLE IF NOT EXISTS `author` (
  `author_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `summary` text NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table news.author: ~1 rows (approximately)
/*!40000 ALTER TABLE `author` DISABLE KEYS */;
REPLACE INTO `author` (`author_id`, `name`, `summary`, `join_date`) VALUES
	(1, 'Augustin Dalmas', 'BLABLABLA to do', '2014-04-27 03:18:40');
/*!40000 ALTER TABLE `author` ENABLE KEYS */;


-- Dumping structure for table news.game
CREATE TABLE IF NOT EXISTS `game` (
  `game_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `game_type_id` int(3) NOT NULL,
  `editor` varchar(100) NOT NULL,
  PRIMARY KEY (`game_id`),
  KEY `game_type_id` (`game_type_id`),
  KEY `game_id` (`game_id`),
  KEY `game_type_id_2` (`game_type_id`),
  CONSTRAINT `game_ibfk_1` FOREIGN KEY (`game_type_id`) REFERENCES `game_type` (`game_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table news.game: ~3 rows (approximately)
/*!40000 ALTER TABLE `game` DISABLE KEYS */;
REPLACE INTO `game` (`game_id`, `name`, `game_type_id`, `editor`) VALUES
	(1, 'League of Legends', 1, 'Riot Games'),
	(2, 'Dota 2', 1, 'Valve'),
	(100, 'false', 6, 'false');
/*!40000 ALTER TABLE `game` ENABLE KEYS */;


-- Dumping structure for table news.game_type
CREATE TABLE IF NOT EXISTS `game_type` (
  `game_type_id` int(3) NOT NULL AUTO_INCREMENT,
  `name_short` varchar(10) NOT NULL,
  `name_long` varchar(50) NOT NULL,
  PRIMARY KEY (`game_type_id`),
  KEY `game_type_id` (`game_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table news.game_type: ~6 rows (approximately)
/*!40000 ALTER TABLE `game_type` DISABLE KEYS */;
REPLACE INTO `game_type` (`game_type_id`, `name_short`, `name_long`) VALUES
	(1, 'MOBA', 'Multiplayer Online Battle Arena'),
	(2, 'RTS', 'Real-Time Strategy'),
	(3, 'CCG', 'Collectible Card Game'),
	(4, 'FPS', 'First-person Shooter'),
	(5, 'Sport', 'Sport'),
	(6, 'none', 'none');
/*!40000 ALTER TABLE `game_type` ENABLE KEYS */;


-- Dumping structure for table news.news
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(3) NOT NULL AUTO_INCREMENT,
  `titre` varchar(60) NOT NULL,
  `contenu` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author_id` int(10) NOT NULL,
  `news_type_id` int(3) NOT NULL,
  `game_type_id` int(3) NOT NULL,
  `game_id` int(3) NOT NULL,
  PRIMARY KEY (`news_id`),
  KEY `game_id` (`game_id`),
  KEY `game_type_id` (`game_type_id`),
  KEY `news_type_id` (`news_type_id`),
  KEY `author_id` (`author_id`),
  KEY `news_id` (`news_id`),
  CONSTRAINT `news_ibfk_4` FOREIGN KEY (`game_id`) REFERENCES `game` (`game_id`),
  CONSTRAINT `news_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`),
  CONSTRAINT `news_ibfk_2` FOREIGN KEY (`news_type_id`) REFERENCES `newstype` (`news_type_id`),
  CONSTRAINT `news_ibfk_3` FOREIGN KEY (`game_type_id`) REFERENCES `game_type` (`game_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- Dumping data for table news.news: ~2 rows (approximately)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
REPLACE INTO `news` (`news_id`, `titre`, `contenu`, `image`, `date`, `author_id`, `news_type_id`, `game_type_id`, `game_id`) VALUES
	(16, 'Bienvenue', 'Bienvenue sur Esport News.\r\nLe site est actuellement en construction.\r\nHOY HOY', 'http://navi-gaming.com/images/navi_logo.png', '2014-04-26 21:16:40', 1, 10, 1, 100),
	(18, 'Menu de news cool', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce euismod est eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean libero risus, sagittis at luctus tincidunt, viverra non arcu. Ut tempor elementum urna quis tincidunt. Ut scelerisque justo in ultrices vulputate. Fusce vitae eros sit amet dolor interdum adipiscing. Aliquam augue velit, porttitor eu leo eget, dignissim commodo lacus.', '0', '2014-04-26 21:22:14', 1, 10, 1, 100);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;


-- Dumping structure for table news.newstype
CREATE TABLE IF NOT EXISTS `newstype` (
  `news_type_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`news_type_id`),
  KEY `news_type_id` (`news_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table news.newstype: ~10 rows (approximately)
/*!40000 ALTER TABLE `newstype` DISABLE KEYS */;
REPLACE INTO `newstype` (`news_type_id`, `name`) VALUES
	(1, 'Results'),
	(2, 'Tournament Standings'),
	(3, 'Analysis'),
	(4, 'Reportages'),
	(5, 'Videos'),
	(6, 'Photos Reportages'),
	(7, 'Interviews'),
	(8, 'Transfers, Sponsorships'),
	(9, 'General announcements'),
	(10, 'Esport News Annoucements');
/*!40000 ALTER TABLE `newstype` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
