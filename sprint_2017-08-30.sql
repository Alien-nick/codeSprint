# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.25-MariaDB)
# Database: sprint
# Generation Time: 1939-06-08 07:14:41 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table buyers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `buyers`;

CREATE TABLE `buyers` (
  `bid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `buyer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `buyer_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `buyer_contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `buyers_id` int(11) NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;

INSERT INTO `comments` (`id`, `user_id`, `buyers_id`, `body`, `created_at`, `updated_at`)
VALUES
	(1,3,58,'hello','2017-08-27 16:27:31','2017-08-27 16:27:31'),
	(2,3,58,'hello','2017-08-27 16:27:36','2017-08-27 16:27:36'),
	(3,3,58,'hry','2017-08-27 17:01:13','2017-08-27 17:01:13'),
	(4,3,55,'something','2017-08-27 17:06:23','2017-08-27 17:06:23'),
	(5,3,58,'Supp','2017-08-27 17:14:43','2017-08-27 17:14:43'),
	(6,2,58,'Nice Product','2017-08-27 18:40:43','2017-08-27 18:40:43'),
	(7,2,65,'Wow Comments!!','2017-08-29 23:59:58','2017-08-29 23:59:58');

/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table crops
# ------------------------------------------------------------

DROP TABLE IF EXISTS `crops`;

CREATE TABLE `crops` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `crop_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `crop_cost_per_lb` int(11) NOT NULL,
  `crop_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '-Null-',
  `crop_produce_date` date NOT NULL,
  `crop_quantity` int(11) NOT NULL,
  `crop_estimate_reap_date` date NOT NULL,
  `crop_user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `crops` WRITE;
/*!40000 ALTER TABLE `crops` DISABLE KEYS */;

INSERT INTO `crops` (`id`, `crop_name`, `crop_cost_per_lb`, `crop_image`, `crop_produce_date`, `crop_quantity`, `crop_estimate_reap_date`, `crop_user_id`)
VALUES
	(1,'Some Scunt',300,'-Null-','2017-08-31',100,'2017-09-01',0),
	(2,'Some Scunt',300,'-Null-','2017-08-31',100,'2017-09-01',0),
	(3,'Some Scunt',300,'-Null-','2017-08-31',100,'2017-09-01',0);

/*!40000 ALTER TABLE `crops` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table demands
# ------------------------------------------------------------

DROP TABLE IF EXISTS `demands`;

CREATE TABLE `demands` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_quantity` int(11) NOT NULL,
  `crop_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date_of_order` date NOT NULL,
  `end_date_of_order` date NOT NULL,
  `order_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `demands` WRITE;
/*!40000 ALTER TABLE `demands` DISABLE KEYS */;

INSERT INTO `demands` (`id`, `order_quantity`, `crop_type`, `start_date_of_order`, `end_date_of_order`, `order_status`, `user_id`)
VALUES
	(55,100,'nick','2017-08-13','2017-08-19','approved',2),
	(56,100,'bora','2017-08-27','2017-09-03','approved',3),
	(57,100,'bora','2017-08-27','2017-09-03','approved',3),
	(58,100,'calalu','2017-08-27','2017-09-03','approved',3),
	(59,100,'somethign','2017-08-26','2017-09-03','approved',2),
	(60,100,'Rice','2017-08-26','2017-09-02','approved',2),
	(61,100,'Lime','2017-08-31','2017-09-03','approved',2),
	(62,100,'Egg Plant','2017-08-26','2017-09-03','approved',2),
	(63,100,'Salt','2017-08-26','2017-09-03','approved',2),
	(64,100,'Weed','2017-08-25','2017-09-02','approved',2),
	(65,100,'Weed1','2017-08-25','2017-09-02','approved',2);

/*!40000 ALTER TABLE `demands` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table farmers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `farmers`;

CREATE TABLE `farmers` (
  `fid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `farmer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `farmer_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `farmer_contact` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2017_08_22_134314_create_farmers_table',1),
	(4,'2017_08_22_134402_create_buyers_table',1),
	(5,'2017_08_27_161354_create_comments_table',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('f','b','a') COLLATE utf8_unicode_ci DEFAULT 'f',
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT '0',
  `status_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `status`, `address`, `contact`, `is_admin`, `status_id`)
VALUES
	(1,'nick','qaz@mail.com','$2y$10$ayj/zuO9SVtzuy9c85TTYeiiCtLoUITqLPyZvnyF/K5PPuAZ4/jx6',NULL,'2017-08-26 20:59:21','2017-08-26 20:59:21','b',NULL,NULL,NULL,NULL),
	(2,'nick','nick@mail.com','$2y$10$J92rbcTGLCH9s2Bz1.EuZ.BHICocDYHohUTBjbnV65ns1GNO.n2ny','OCqaEWHcgK8PzHd1SljN9OjmM4zq5fX95EVnV19qO4MzBsMX3GZeZFw6LCiM','2017-08-26 22:17:08','2017-08-26 22:17:08','b','Better Hope, Georgetown, Guyana',2200854,NULL,NULL),
	(3,'dana','dana@gmail.com','$2y$10$du.4neIt4FEGNjii4tgtuenyNQnx4ou/U5JJ3LCBvmYR9MS9ocIgy','NAheCUm30JwWQqGVwpVcRBcY0iYNqaARNntuZpUKi2oEJxIvgBnZlG5P2WZL','2017-08-26 22:29:03','2017-08-26 22:29:03','b','berbice',6507279,1,NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
