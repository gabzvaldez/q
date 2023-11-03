-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for q
CREATE DATABASE IF NOT EXISTS `q` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `q`;

-- Dumping structure for table q.office
CREATE TABLE IF NOT EXISTS `office` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `division` varchar(500) NOT NULL,
  `office` varchar(500) NOT NULL,
  `abbrv` varchar(500) NOT NULL,
  `count` int(11) NOT NULL DEFAULT 0,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table q.office: ~8 rows (approximately)
DELETE FROM `office`;
/*!40000 ALTER TABLE `office` DISABLE KEYS */;
INSERT INTO `office` (`id`, `division`, `office`, `abbrv`, `count`, `username`, `password`) VALUES
	(1, 'MSD', 'Public Assistance and Complaints Desk', 'PACD', 36, 'pacd', '$2y$10$9RL7/NRLuJ.bznboShUCWOPu3xor3Q3HT038ukUb4Xvgt50QX0Vby'),
	(2, 'MSD', 'Procurement Unit', 'PROCUREMENT', 10, 'procurement', '$2y$10$9RL7/NRLuJ.bznboShUCWOPu3xor3Q3HT038ukUb4Xvgt50QX0Vby'),
	(3, 'MSD', 'Information and Communications Technology Unit', 'ICTU', 11, 'ictu', '$2y$10$9RL7/NRLuJ.bznboShUCWOPu3xor3Q3HT038ukUb4Xvgt50QX0Vby'),
	(4, 'MSD', 'Accounting Section', 'ACCOUNTING', 0, 'accounting', '$2y$10$9RL7/NRLuJ.bznboShUCWOPu3xor3Q3HT038ukUb4Xvgt50QX0Vby'),
	(5, 'MSD', 'Cashier Section', 'CASHIER', 0, 'cashier', '$2y$10$9RL7/NRLuJ.bznboShUCWOPu3xor3Q3HT038ukUb4Xvgt50QX0Vby'),
	(6, 'MSD', 'Legal Unit', 'LEGAL', 0, 'legal', '$2y$10$9RL7/NRLuJ.bznboShUCWOPu3xor3Q3HT038ukUb4Xvgt50QX0Vby'),
	(7, 'MSD', 'Human Resource Development Unit', 'HRDU', 4, 'hrdu', '$2y$10$9RL7/NRLuJ.bznboShUCWOPu3xor3Q3HT038ukUb4Xvgt50QX0Vby'),
	(8, 'RLED', 'Regulations, Licensing and Enforcement Division', 'RLED', 7, 'rled', '$2y$10$9RL7/NRLuJ.bznboShUCWOPu3xor3Q3HT038ukUb4Xvgt50QX0Vby');
/*!40000 ALTER TABLE `office` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
