# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.21)
# Database: skat
# Generation Time: 2018-05-03 07:12:13 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table members
# ------------------------------------------------------------

DROP TABLE IF EXISTS `members`;

CREATE TABLE `members` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(11) DEFAULT NULL,
  `class` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;

INSERT INTO `members` (`id`, `username`, `password`, `name`, `class`)
VALUES
	(1,'test','$2y$10$BspLRwzv2fyle40SxK1NweOsjgKJ/lTLMNpP0Mu3R5qC9qNUeo6Fa','Testname',1);

/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `descr` varchar(255) DEFAULT NULL,
  `requestor` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `reusablemodules` decimal(6,2) DEFAULT '0',
  `workload` decimal(6,2) DEFAULT '0',
  `processmaturity` decimal(6,2) DEFAULT '0',
  `internalprioritization` decimal(6,2) DEFAULT '0',
  `riskevaluation` decimal(6,2) DEFAULT '0',
  `organizationalvision` decimal(6,2) DEFAULT '0',
  `systemcount` decimal(6,2) DEFAULT '0',
  `systemcomplexity` decimal(6,2) DEFAULT '0',
  `documentationquality` decimal(6,2) DEFAULT '0',
  `clicksandinteraction` decimal(6,2) DEFAULT '0',
  `legislationpressure` decimal(6,2) DEFAULT '0',
  `customersatisfaction` decimal(6,2) DEFAULT '0',
  `timeusage` decimal(6,2) DEFAULT '0',
  `amountoftransactions` decimal(6,2) DEFAULT '0',
  `degreeofautomation` decimal(6,2) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;

INSERT INTO `projects` (`id`, `name`, `descr`, `requestor`, `department`, `reusablemodules`, `workload`, `processmaturity`, `internalprioritization`, `riskevaluation`, `organizationalvision`, `systemcount`, `systemcomplexity`, `documentationquality`, `clicksandinteraction`, `legislationpressure`, `customersatisfaction`, `timeusage`, `amountoftransactions`, `degreeofautomation`)
VALUES
(1,'Project Alpha','Lorem Ipsum Dolor sit amet','Jens Jensen','Finance',5,6,6,5,8,8,3,5,4,10,3,6,6,5,3);


/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table weight
# ------------------------------------------------------------

DROP TABLE IF EXISTS `weights`;

CREATE TABLE `weights` (
  `reusablemodules` decimal(6,2) DEFAULT '0',
  `workload` decimal(6,2) DEFAULT '0',
  `processmaturity` decimal(6,2) DEFAULT '0',
  `internalprioritization` decimal(6,2) DEFAULT '0',
  `riskevaluation` decimal(6,2) DEFAULT '0',
  `organizationalvision` decimal(6,2) DEFAULT '0',
  `systemcount` decimal(6,2) DEFAULT '0',
  `systemcomplexity` decimal(6,2) DEFAULT '0',
  `documentationquality` decimal(6,2) DEFAULT '0',
  `clicksandinteraction` decimal(6,2) DEFAULT '0',
  `legislationpressure` decimal(6,2) DEFAULT '0',
  `customersatisfaction` decimal(6,2) DEFAULT '0',
  `timeusage` decimal(6,2) DEFAULT '0',
  `amountoftransactions` decimal(6,2) DEFAULT '0'
);


INSERT INTO `weights` (`reusablemodules`, `workload`, `processmaturity`, `internalprioritization`, `riskevaluation`, `organizationalvision`, `systemcount`, `systemcomplexity`, `documentationquality`, `clicksandinteraction`, `legislationpressure`, `customersatisfaction`, `timeusage`, `amountoftransactions`)
VALUES
(5.3,6.3,7.3,6.7,7.5,6.6,6.9,6.8,6.9,5.6,7.1,5.9,8.4,8.7);



