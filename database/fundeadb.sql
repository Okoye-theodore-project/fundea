-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for fundeadb
CREATE DATABASE IF NOT EXISTS `fundeadb` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `fundeadb`;

-- Dumping structure for table fundeadb.comment
CREATE TABLE IF NOT EXISTS `comment` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PROJECT_ID` int(11) NOT NULL,
  `USER_ACCOUNT_ID` int(11) NOT NULL,
  `COMMENT_TEXT` text COLLATE utf8_unicode_ci NOT NULL,
  `TIME` timestamp(6) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_pro_id_idx` (`PROJECT_ID`),
  KEY `fk_users_idx` (`USER_ACCOUNT_ID`),
  CONSTRAINT `fk_pro_id` FOREIGN KEY (`PROJECT_ID`) REFERENCES `projects` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_users` FOREIGN KEY (`USER_ACCOUNT_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table fundeadb.investment_option_catalog
CREATE TABLE IF NOT EXISTS `investment_option_catalog` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `OPTION_NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `FUNDS_MIN` decimal(12,2) NOT NULL,
  `FUNDS_MAX` decimal(12,2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table fundeadb.parameters
CREATE TABLE IF NOT EXISTS `parameters` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PROJECT_ID` int(11) NOT NULL,
  `END_DATE` date NOT NULL,
  `GOAL` decimal(12,2) NOT NULL,
  `TIME` timestamp(6) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_project_idx` (`PROJECT_ID`),
  CONSTRAINT `fk_project` FOREIGN KEY (`PROJECT_ID`) REFERENCES `projects` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table fundeadb.projects
CREATE TABLE IF NOT EXISTS `projects` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PROJECT_NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `USER_ACCOUNT` int(11) NOT NULL,
  `PROJECT_DESCRIPTION` text COLLATE utf8_unicode_ci NOT NULL,
  `PROJECT_CATEGORY` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `PROJECT_LOCATION` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `START_DATE` date NOT NULL,
  `END_DATE` date NOT NULL,
  `IMAGE` blob NOT NULL,
  `GOAL` decimal(12,2) NOT NULL,
  `PLEDGED` decimal(12,2) DEFAULT NULL,
  `INVESTORS` int(11) DEFAULT NULL,
  `PROJECT_STATUS_ID` int(11) DEFAULT NULL,
  `ADD_DATE` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_users_id_idx` (`USER_ACCOUNT`),
  KEY `fk_investor_id_idx` (`INVESTORS`),
  KEY `fk_project_status_idx` (`PROJECT_STATUS_ID`),
  CONSTRAINT `fk_investor_id` FOREIGN KEY (`INVESTORS`) REFERENCES `project_investors` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_project_status` FOREIGN KEY (`PROJECT_STATUS_ID`) REFERENCES `project_status` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_users_id` FOREIGN KEY (`USER_ACCOUNT`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table fundeadb.project_category
CREATE TABLE IF NOT EXISTS `project_category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TYPE_NAME` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table fundeadb.project_investment_option
CREATE TABLE IF NOT EXISTS `project_investment_option` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PROJECT_ID` int(11) NOT NULL,
  `INVESTMENT_OPTION_CATALOG` int(11) NOT NULL,
  `OPTION_NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `OPTION_DESCRIPTION` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_projectss_id_idx` (`PROJECT_ID`),
  KEY `fk_investment_options_catalog_idx` (`INVESTMENT_OPTION_CATALOG`),
  CONSTRAINT `fk_investment_options_catalog` FOREIGN KEY (`INVESTMENT_OPTION_CATALOG`) REFERENCES `investment_option_catalog` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_projectss_id` FOREIGN KEY (`PROJECT_ID`) REFERENCES `projects` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table fundeadb.project_investors
CREATE TABLE IF NOT EXISTS `project_investors` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PROJECT_ID` int(11) NOT NULL,
  `USER_ACCOUNT_ID` int(11) NOT NULL,
  `PROJECT_INVESTMENT_ID` int(11) NOT NULL,
  `PLEDGED` decimal(12,2) NOT NULL,
  `TIME` timestamp(6) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_projectss_idx` (`PROJECT_ID`),
  KEY `fk_userss_idx` (`USER_ACCOUNT_ID`),
  KEY `fk_project_investment_id_idx` (`PROJECT_INVESTMENT_ID`),
  CONSTRAINT `fk_project_investment_id` FOREIGN KEY (`PROJECT_INVESTMENT_ID`) REFERENCES `project_investment_option` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_projectss` FOREIGN KEY (`PROJECT_ID`) REFERENCES `projects` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_userss` FOREIGN KEY (`USER_ACCOUNT_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table fundeadb.project_status
CREATE TABLE IF NOT EXISTS `project_status` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `STATUS_NAME` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table fundeadb.project_status_history
CREATE TABLE IF NOT EXISTS `project_status_history` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PROJECT_ID` int(11) NOT NULL,
  `PROJECT_STATUS_ID` int(11) NOT NULL,
  `TIME` timestamp NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_proj_id_idx` (`PROJECT_ID`),
  KEY `fk_proj_status_id_idx` (`PROJECT_STATUS_ID`),
  CONSTRAINT `fk_proj_id` FOREIGN KEY (`PROJECT_ID`) REFERENCES `projects` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_proj_status_id` FOREIGN KEY (`PROJECT_STATUS_ID`) REFERENCES `project_status` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table fundeadb.update
CREATE TABLE IF NOT EXISTS `update` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PROJECT_ID` int(11) NOT NULL,
  `USER_ACCOUNT_ID` int(11) NOT NULL,
  `UPDATE_TEXT` text COLLATE utf8_unicode_ci NOT NULL,
  `TIME` timestamp(6) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_projct_id_idx` (`PROJECT_ID`),
  KEY `fk_user_id_idx` (`USER_ACCOUNT_ID`),
  CONSTRAINT `fk_projct_id` FOREIGN KEY (`PROJECT_ID`) REFERENCES `projects` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_user_id` FOREIGN KEY (`USER_ACCOUNT_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table fundeadb.users
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FIRST_NAME` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `LAST_NAME` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `PASSWORD` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `PHONE` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMAIL` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `BIO` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `PICTURE` text COLLATE utf8_unicode_ci,
  `TRN_DATE` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `EMAIL_UNIQUE` (`EMAIL`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
