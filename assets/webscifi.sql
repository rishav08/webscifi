-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.14 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table webscifi.activities
DROP TABLE IF EXISTS `activities`;
CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `max_capacity` int(11) NOT NULL DEFAULT '1',
  `start` time NOT NULL,
  `end` time NOT NULL,
  `slot_length` int(11) NOT NULL DEFAULT '30',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `activities_id_unique` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webscifi.activities: ~2 rows (approximately)
DELETE FROM `activities`;
/*!40000 ALTER TABLE `activities` DISABLE KEYS */;
INSERT INTO `activities` (`id`, `name`, `description`, `max_capacity`, `start`, `end`, `slot_length`, `created_at`, `updated_at`) VALUES
	(1, 'Badminton', 'Rec west.', 4, '10:00:00', '18:00:00', 30, '2017-09-17 05:06:15', '2017-09-17 05:06:17'),
	(2, 'Badminton', 'Rec west.', 4, '10:00:00', '18:00:00', 30, '2017-09-17 05:07:08', '2017-09-17 05:07:09'),
	(3, 'Badminton', 'Rec west.', 4, '10:00:00', '18:00:00', 30, '2017-09-17 05:07:08', '2017-09-17 05:07:09');
/*!40000 ALTER TABLE `activities` ENABLE KEYS */;


-- Dumping structure for table webscifi.booking
DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `no_of_people` int(11) NOT NULL,
  `slot_start_time` timestamp NOT NULL,
  `slot_end_time` timestamp NOT NULL,
  `delete` tinyint(4) DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `booking_id_unique` (`id`),
  KEY `booking_user_id_index` (`user_id`),
  KEY `booking_activity_id_index` (`activity_id`),
  KEY `booking_no_of_people_index` (`no_of_people`),
  KEY `booking_slot_start_time_index` (`slot_start_time`),
  KEY `booking_slot_end_time_index` (`slot_end_time`),
  KEY `booking_status_index` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webscifi.booking: ~9 rows (approximately)
DELETE FROM `booking`;
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
INSERT INTO `booking` (`id`, `user_id`, `activity_id`, `no_of_people`, `slot_start_time`, `slot_end_time`, `delete`, `status`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 2, '2017-09-18 12:00:00', '2017-09-18 12:30:00', 0, 'active', '2017-09-17 05:09:03', '2017-09-17 05:09:04'),
	(2, 2, 2, 4, '2017-09-19 17:00:00', '2017-09-19 17:30:00', 0, 'inactive', '2017-09-17 05:09:36', '2017-09-17 05:09:38'),
	(3, 2, 3, 3, '2017-09-20 10:30:00', '2017-09-20 10:00:00', 1, 'active', '2017-09-17 05:48:06', '2017-09-17 05:48:07'),
	(4, 2, 2, 2, '2017-09-18 13:00:00', '2017-09-18 13:00:00', 0, 'active', '2017-09-17 12:52:46', '2017-09-17 12:52:46'),
	(5, 2, 2, 1, '2017-09-17 17:00:00', '2017-09-17 17:30:00', 1, 'active', '2017-09-17 12:57:42', '2017-09-17 12:57:42'),
	(6, 2, 2, 1, '2017-09-17 17:00:00', '2017-09-17 17:30:00', 1, 'active', '2017-09-17 12:58:41', '2017-09-17 12:58:41'),
	(7, 2, 1, 1, '2017-09-18 10:00:00', '2017-09-18 10:30:00', 1, 'active', '2017-09-17 12:59:40', '2017-09-17 12:59:40'),
	(8, 2, 1, 1, '2017-09-18 10:00:00', '2017-09-18 10:30:00', 1, 'active', '2017-09-17 12:59:56', '2017-09-17 12:59:56'),
	(9, 2, 1, 1, '2017-09-18 10:00:00', '2017-09-18 10:30:00', 1, 'active', '2017-09-17 13:00:36', '2017-09-17 13:00:36'),
	(10, 2, 1, 1, '2017-09-17 10:00:00', '2017-09-17 10:30:00', NULL, 'active', '2017-09-17 14:16:20', '2017-09-17 14:16:20');
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;


-- Dumping structure for table webscifi.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webscifi.migrations: ~4 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(5, '2014_10_12_000000_create_users_table', 1),
	(6, '2014_10_12_100000_create_password_resets_table', 1),
	(7, '2017_09_16_192240_create_activities_table', 1),
	(8, '2017_09_16_194750_create_booking_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Dumping structure for table webscifi.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webscifi.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


-- Dumping structure for table webscifi.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `blocked` tinyint(1) NOT NULL DEFAULT '0',
  `faults` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_id_unique` (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webscifi.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `access`, `blocked`, `faults`, `created_at`, `updated_at`) VALUES
	(1, 'UTD Comet', 'comet@utdallas.edu', '$2y$10$2e36UIy02GoCOyMp8DYGqeEiV8S2aJ2QgYlBrlr7H52lyzLod1RQu', 'admin', 0, 0, '2017-09-16 20:01:19', '2017-09-16 20:01:19'),
	(2, 'Rishav Kumar', 'rxk171330@utdallas.edu', '$2y$10$kdP6WffNEgnYg.BFBituCuX6epRritnzIwYR4pAbLFp09FoMVZf2i', 'user', 0, 0, '2017-09-16 20:01:19', '2017-09-16 20:01:19');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
