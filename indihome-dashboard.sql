-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for indihome-dashboard
CREATE DATABASE IF NOT EXISTS `indihome-dashboard` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `indihome-dashboard`;

-- Dumping structure for table indihome-dashboard.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table indihome-dashboard.migrations: ~2 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2022_02_19_103026_create_users_table', 1),
	(2, '2022_02_19_104112_create_pelanggans_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table indihome-dashboard.pelanggans
CREATE TABLE IF NOT EXISTS `pelanggans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kodePelanggan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noTelp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodeSales` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusPemasangan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kodePelanggan` (`kodePelanggan`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table indihome-dashboard.pelanggans: ~0 rows (approximately)
/*!40000 ALTER TABLE `pelanggans` DISABLE KEYS */;
INSERT INTO `pelanggans` (`id`, `kodePelanggan`, `nama`, `noTelp`, `email`, `paket`, `alamat`, `kodeSales`, `statusPemasangan`, `created_at`, `updated_at`) VALUES
	(4, 'MYIR-9938721080', 'pelanggan 1', '123456789', 'pelanggan1@gmail.com', 'paket1', 'alamat pelanggan 1', 'MKTCWN', 1, '2022-02-19 13:30:38', '2022-02-19 13:30:45'),
	(5, 'MYIR-5105302578', 'pelanggan 2', '456789', 'pelanggan2@gmail.com', 'paket1', 'alamat pelanggan 2', 'MKTCWN', 0, '2022-02-19 13:31:10', '2022-02-19 13:31:10'),
	(8, 'MYIR-8280391716', 'asdf', '123', 'asdf@gmail.com', '5', 'asdf', 'MKTCWN', 0, '2022-02-19 13:56:09', '2022-02-19 13:56:09');
/*!40000 ALTER TABLE `pelanggans` ENABLE KEYS */;

-- Dumping structure for table indihome-dashboard.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table indihome-dashboard.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `nama`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
	(1, 'Super Admin', 'admin@gmail.com', '$2y$10$EwxhQziCgZX6nW.XXJT6hepjMe.ulRTafyj0SvEjZH912chOflTWy', 1, '2022-02-19 12:39:49', '2022-02-19 12:39:49'),
	(2, 'Sales', 'sales@gmail.com', '$2y$10$fyH7L7eb.vkcvTJ9fPpsieHf1UFRjz15qSHmFBLw1ISRu.86PuTGG', 2, '2022-02-19 12:39:49', '2022-02-19 12:39:49');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
