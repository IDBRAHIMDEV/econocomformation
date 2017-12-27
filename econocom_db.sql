-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           10.1.26-MariaDB - mariadb.org binary distribution
-- SE du serveur:                Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Export de la structure de la base pour econocomdb
CREATE DATABASE IF NOT EXISTS `econocomdb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `econocomdb`;

-- Export de la structure de la table econocomdb. category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(67) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_64C19C12B36786B` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table econocomdb.category : ~2 rows (environ)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id`, `title`, `description`) VALUES
	(1, 'premier title 1', 'première description'),
	(2, 'premier title 2', 'première description');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Export de la structure de la table econocomdb. image
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alt` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table econocomdb.image : ~28 rows (environ)
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` (`id`, `alt`, `url`) VALUES
	(1, 'image 1', 'https://www.google.com'),
	(2, 'image 1', 'https://www.google.com'),
	(3, 'image 1', 'https://www.google.com'),
	(4, 'image 1', 'https://www.google.com'),
	(5, 'image 1', 'https://www.google.com'),
	(6, 'image 1', 'https://www.google.com'),
	(7, 'image 1', 'https://www.google.com'),
	(8, 'image 1', 'https://www.google.com'),
	(9, 'image 1', 'https://www.google.com'),
	(10, 'image 1', 'https://www.google.com'),
	(11, 'image 1', 'https://www.google.com'),
	(12, 'image 1', 'https://www.google.com'),
	(13, 'image 1', 'https://www.google.com'),
	(14, 'image 1', 'https://www.google.com'),
	(15, 'image 1', 'https://www.google.com'),
	(16, 'image 1', 'https://www.google.com'),
	(17, 'image 1', 'https://www.google.com'),
	(18, 'image 1', 'https://www.google.com'),
	(19, 'image 1', 'https://www.google.com'),
	(20, 'image 1', 'https://www.google.com'),
	(21, 'image 1', 'https://www.google.com'),
	(22, 'image 1', 'https://www.google.com'),
	(23, 'formation symfony', 'url image'),
	(25, 'zdzdzdzd', 'C:\\xampp\\tmp\\php57C6.tmp'),
	(26, 'erefefer', 'C:\\xampp\\tmp\\php3263.tmp'),
	(27, 'effefefef', 'C:\\xampp\\tmp\\php7C72.tmp'),
	(28, 'zdzdzdzd', 'C:\\xampp\\tmp\\php4401.tmp'),
	(29, 'efefefefefefef', 'IMG20170925115249.jpg');
/*!40000 ALTER TABLE `image` ENABLE KEYS */;

-- Export de la structure de la table econocomdb. post
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(67) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datepublication` date NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_5A8A6C8D3DA5256D` (`image_id`),
  KEY `IDX_5A8A6C8D12469DE2` (`category_id`),
  CONSTRAINT `FK_5A8A6C8D12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  CONSTRAINT `FK_5A8A6C8D3DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table econocomdb.post : ~31 rows (environ)
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` (`id`, `title`, `content`, `datepublication`, `category_id`, `active`, `image_id`) VALUES
	(1, 'title 1', 'content 1', '0000-00-00', NULL, 0, NULL),
	(2, 'titre post 1', 'content post 1', '2017-12-26', 1, 0, NULL),
	(3, 'titre post 2', 'content post 2', '2017-12-27', 1, 1, NULL),
	(4, 'titre post 3', 'content post 3', '2017-12-27', 1, 1, 1),
	(5, 'titre post 3', 'content post 3', '2017-12-27', 1, 1, 2),
	(6, 'titre post 3', 'content post 3', '2017-12-27', 1, 1, 3),
	(7, 'titre post 3', 'content post 3', '2017-12-27', 1, 1, 4),
	(8, 'titre post 3', 'content post 3', '2017-12-27', 1, 1, 5),
	(9, 'titre post 3', 'content post 3', '2017-12-27', 1, 1, 6),
	(10, 'titre post 3', 'content post 3', '2017-12-27', 1, 1, 7),
	(11, 'titre post 3', 'content post 3', '2017-12-27', 1, 1, 8),
	(12, 'titre post 3', 'content post 3', '2017-12-27', 1, 1, 9),
	(13, 'titre post 3', 'content post 3', '2017-12-27', 1, 1, 10),
	(14, 'titre post 3', 'content post 3', '2017-12-27', 1, 1, 11),
	(15, 'titre post 3', 'content post 3', '2017-12-27', 1, 1, 12),
	(16, 'titre post 3', 'content post 3', '2017-12-27', 1, 1, 13),
	(17, 'titre post 3', 'content post 3', '2017-12-27', 1, 1, 14),
	(18, 'titre post 3', 'content post 3', '2017-12-27', 1, 1, 15),
	(19, 'titre post 3', 'content post 3', '2017-12-27', 1, 1, 16),
	(20, 'titre post 3', 'content post 3', '2017-12-27', 1, 1, 17),
	(21, 'titre post 3', 'content post 3', '2017-12-27', 1, 1, 18),
	(22, 'titre post 3', 'content post 3', '2017-12-27', 1, 1, 19),
	(23, 'Mon title avec les ingenieurs', 'Mon title avec les ingenieurs de econocom', '2020-01-01', 1, 1, 20),
	(24, 'Mon title avec les ingenieurs 2', 'Mon title avec les ingenieurs de econocom 2', '2020-01-01', 1, 1, 21),
	(25, 'test test', 'test test', '2012-01-01', 1, 1, 22),
	(26, 'test form image', 'sdklfkekfjdf', '2012-01-01', 1, 1, 23),
	(27, 'test form image', 'zdezkhdzjdz', '2020-09-18', 1, 1, 25),
	(28, 'title de mon post', 'efrefefdfdf', '2021-07-16', 1, 1, 26),
	(29, 'test form image', 'efefefefef', '2014-05-15', 1, 1, 27),
	(30, 'zdzdzdzd', 'zdzdzdzd', '2022-10-19', 2, 1, 28),
	(31, 'test form image', 'refefefef', '2021-09-18', 1, 1, 29);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;

-- Export de la structure de la table econocomdb. post_tag
CREATE TABLE IF NOT EXISTS `post_tag` (
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`,`tag_id`),
  KEY `IDX_5ACE3AF04B89032C` (`post_id`),
  KEY `IDX_5ACE3AF0BAD26311` (`tag_id`),
  CONSTRAINT `FK_5ACE3AF04B89032C` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_5ACE3AF0BAD26311` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table econocomdb.post_tag : ~116 rows (environ)
/*!40000 ALTER TABLE `post_tag` DISABLE KEYS */;
INSERT INTO `post_tag` (`post_id`, `tag_id`) VALUES
	(3, 1),
	(3, 2),
	(3, 3),
	(3, 4),
	(4, 1),
	(4, 2),
	(4, 3),
	(4, 4),
	(5, 1),
	(5, 2),
	(5, 3),
	(5, 4),
	(6, 1),
	(6, 2),
	(6, 3),
	(6, 4),
	(7, 1),
	(7, 2),
	(7, 3),
	(7, 4),
	(8, 1),
	(8, 2),
	(8, 3),
	(8, 4),
	(9, 1),
	(9, 2),
	(9, 3),
	(9, 4),
	(10, 1),
	(10, 2),
	(10, 3),
	(10, 4),
	(11, 1),
	(11, 2),
	(11, 3),
	(11, 4),
	(12, 1),
	(12, 2),
	(12, 3),
	(12, 4),
	(13, 1),
	(13, 2),
	(13, 3),
	(13, 4),
	(14, 1),
	(14, 2),
	(14, 3),
	(14, 4),
	(15, 1),
	(15, 2),
	(15, 3),
	(15, 4),
	(16, 1),
	(16, 2),
	(16, 3),
	(16, 4),
	(17, 1),
	(17, 2),
	(17, 3),
	(17, 4),
	(18, 1),
	(18, 2),
	(18, 3),
	(18, 4),
	(19, 1),
	(19, 2),
	(19, 3),
	(19, 4),
	(20, 1),
	(20, 2),
	(20, 3),
	(20, 4),
	(21, 1),
	(21, 2),
	(21, 3),
	(21, 4),
	(22, 1),
	(22, 2),
	(22, 3),
	(22, 4),
	(23, 1),
	(23, 2),
	(23, 3),
	(23, 4),
	(24, 1),
	(24, 2),
	(24, 3),
	(24, 4),
	(25, 1),
	(25, 2),
	(25, 3),
	(25, 4),
	(26, 1),
	(26, 2),
	(26, 3),
	(26, 4),
	(27, 1),
	(27, 2),
	(27, 3),
	(27, 4),
	(28, 1),
	(28, 2),
	(28, 3),
	(28, 4),
	(29, 1),
	(29, 2),
	(29, 3),
	(29, 4),
	(30, 1),
	(30, 2),
	(30, 3),
	(30, 4),
	(31, 1),
	(31, 2),
	(31, 3),
	(31, 4);
/*!40000 ALTER TABLE `post_tag` ENABLE KEYS */;

-- Export de la structure de la table econocomdb. tag
CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_389B7832B36786B` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table econocomdb.tag : ~4 rows (environ)
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
INSERT INTO `tag` (`id`, `title`, `active`) VALUES
	(1, 'laravel', 1),
	(2, 'symfony', 1),
	(3, 'codeigniter', 1),
	(4, 'angular', 1);
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
