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
	(1,'test','$2y$10$BspLRwzv2fyle40SxK1NweOsjgKJ/lTLMNpP0Mu3R5qC9qNUeo6Fa','dsf',1);

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
  `wnum` varchar(20) DEFAULT '0',
  `evaldesc` varchar(255) DEFAULT NULL,
  `fagomr` varchar(255) DEFAULT NULL,
  `proejer` varchar(20) DEFAULT NULL,
  `sysejer` varchar(20) DEFAULT NULL,
  `platejer` varchar(20) DEFAULT NULL,
  `var1dev` int(11) DEFAULT '0',
  `var2dev` int(11) DEFAULT '0',
  `var3dev` int(11) DEFAULT '0',
  `var4dev` int(11) DEFAULT '0',
  `var1pro` int(11) DEFAULT '0',
  `var2pro` int(11) DEFAULT '0',
  `var3pro` int(11) DEFAULT '0',
  `var4pro` int(11) DEFAULT '0',
  `var1lev` int(11) DEFAULT '0',
  `var2lev` int(11) DEFAULT '0',
  `var3lev` int(11) DEFAULT '0',
  `evalself` int(11) DEFAULT '0',
  `evaldev` tinyint(1) DEFAULT '0',
  `evalpro` tinyint(1) DEFAULT '0',
  `evallev` tinyint(1) DEFAULT '0',
  `evaladm` tinyint(1) DEFAULT '0',
  `score` float DEFAULT '0',
  `scoredev` float DEFAULT '0',
  `scorepro` float DEFAULT '0',
  `scorelev` float DEFAULT '0',
  `dok1` varchar(20) DEFAULT 'Nej',
  `dok2` varchar(20) DEFAULT 'Nej',
  `dok3` varchar(20) DEFAULT 'Nej',
  `dok4` varchar(20) DEFAULT 'Nej',
  `aarsvbesp` float DEFAULT '0',
  `aarsvcost` float DEFAULT '0',
  `aarsvbroek` float DEFAULT '0',
  `systemer` varchar(20) DEFAULT NULL,
  `finanslov` varchar(20) DEFAULT NULL,
  `hyppighed` varchar(20) DEFAULT NULL,
  `sager` varchar(20) DEFAULT NULL,
  `behtid` varchar(20) DEFAULT NULL,
  `risikofakt` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;

INSERT INTO `projects` (`id`, `name`, `descr`, `requestor`, `wnum`, `evaldesc`, `fagomr`, `proejer`, `sysejer`, `platejer`, `var1dev`, `var2dev`, `var3dev`, `var4dev`, `var1pro`, `var2pro`, `var3pro`, `var4pro`, `var1lev`, `var2lev`, `var3lev`, `evalself`, `evaldev`, `evalpro`, `evallev`, `evaladm`, `score`, `scoredev`, `scorepro`, `scorelev`, `dok1`, `dok2`, `dok3`, `dok4`, `aarsvbesp`, `aarsvcost`, `aarsvbroek`, `systemer`, `finanslov`, `hyppighed`, `sager`, `behtid`, `risikofakt`)
VALUES
	(1,'Automatisering af bilregistrering','Projektet vil automatisere registreringen af nye nummberplader','Jens Jensen','Nej','Denne er høj prioritet for os','Motor','Nej',NULL,NULL,6,5,8,8,3,5,4,10,3,6,6,5,1,1,1,1,6.5,6.6,7.5,5.4,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(2,'Projekt IT Afdeling','Projektet vil automatisere kørslen af de opdaterede scripts i IT Afdelingen','Hans Hansen','Nej','Denne er ikke så væsentlig','Motor','Nej',NULL,NULL,3,8,5,9,3,5,5,5,4,5,7,4,1,1,1,1,5.58333,6.75,4.6,5.4,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(3,'Projekt til årsopgørsel','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Ulla Jensen','Nej','Det er et klart ønske','Motor','Nej',NULL,NULL,1,0,0,0,0,0,0,0,0,0,0,2,1,0,0,0,3,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(15,'Automatisering af password-resets','Vi ønsker med dette projekt at automatisere alle password-reset som laves i IT-Afdelingen.','Simon Ottosen','Nej','Dette har høj prioritet, da dette tager meget lang tid at udfÃ¸re.','Motor','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,10,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(16,'Koordineringsprojekt af datastruktur','Vi ønsker at automatisere kørslen af en tilfældig process','Rune Bøgh','Nej','Denne har en væsentlig prioritet for os','Moms','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(17,'Projekt automatisering','Ønsket er at optimere antallet af sager der kan klares sidst på måneden','Jens Hansen','Nej','Denne har en væsentlig prioritet for os','Moms','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(18,'Projekt Asterix','Vi ønsker at automatisere kørslen af en tilfældig process','Tina Olsen','Nej','Denne har en væsentlig prioritet for os','Moms','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,10,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(19,'Optimering af datakvalitet','Ønsket er at optimere antallet af sager der kan klares sidst på måneden','Rune Bøgh','Nej','Denne har en væsentlig prioritet for os','Moms','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,4,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(20,'Projekt automatisering','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Tina Olsen','Nej','Denne har en væsentlig prioritet for os','Moms','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,3,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(21,'Kørsel af proces for brugere','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Rune Bøgh','Nej','Denne har en væsentlig prioritet for os','Regnskab','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,6,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(22,'Projekt automatisering','Ønsket er at optimere antallet af sager der kan klares sidst på måneden','Test Testesen','Nej','Denne har en væsentlig prioritet for os','Regnskab','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,10,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(23,'Projekt Asterix','Vi ønsker at automatisere kørslen af en tilfældig process','Jens Hansen','Nej','Denne har en væsentlig prioritet for os','Regnskab','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,7,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(24,'Optimering af datakvalitet','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Alexander Kastrup','Nej','Denne har en væsentlig prioritet for os','Regnskab','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,5,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(25,'Koordineringsprojekt af datastruktur','Vi ønsker at automatisere kørslen af en tilfældig process','Jens Hansen','Nej','Denne har en væsentlig prioritet for os','Regnskab','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(26,'Kørsel af proces for brugere','Ønsket er at optimere antallet af sager der kan klares sidst på måneden','Alexander Kastrup','Nej','Denne har en væsentlig prioritet for os','Ledelse','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,7,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(27,'Projekt automatisering','Vi ønsker at automatisere kørslen af en tilfældig process','Tina Olsen','Nej','Denne har en væsentlig prioritet for os','Ledelse','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,3,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(28,'Projekt automatisering','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Test Testesen','Nej','Denne har en væsentlig prioritet for os','Ledelse','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,6,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(29,'Projekt Asterix','Vi ønsker at automatisere kørslen af en tilfældig process','Rune Bøgh','Nej','Denne har en væsentlig prioritet for os','HR','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,3,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(30,'Projekt automatisering','Vi ønsker at automatisere kørslen af en tilfældig process','Jens Hansen','Nej','Denne har en væsentlig prioritet for os','HR','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,5,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(31,'Kørsel af proces for brugere','Ønsket er at optimere antallet af sager der kan klares sidst på måneden','Rune Bøgh','Nej','Denne har en væsentlig prioritet for os','HR','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,10,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(32,'Projekt automatisering','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Tina Olsen','Nej','Denne har en væsentlig prioritet for os','Miljø og Energi','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,3,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(33,'Kørsel af proces for brugere','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Alexander Kastrup','Nej','Denne har en væsentlig prioritet for os','Miljø og Energi','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(34,'Projekt automatisering','Vi ønsker at automatisere kørslen af en tilfældig process','Jens Hansen','Nej','Denne har en væsentlig prioritet for os','Miljø og Energi','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,8,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(35,'Projekt automatisering','Ønsket er at optimere antallet af sager der kan klares sidst på måneden','Alexander Kastrup','Nej','Denne har en væsentlig prioritet for os','Miljø og Energi','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,4,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(36,'Kørsel af proces for brugere','Vi ønsker at automatisere kørslen af en tilfældig process','Tina Olsen','Nej','Denne har en væsentlig prioritet for os','Miljø og Energi','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,10,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(37,'Koordineringsprojekt af datastruktur','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Rune Bøgh','Nej','Denne har en væsentlig prioritet for os','Miljø og Energi','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,3,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(38,'Projekt automatisering','Vi ønsker at automatisere kørslen af en tilfældig process','Alexander Kastrup','Nej','Denne har en væsentlig prioritet for os','Miljø og Energi','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,4,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(39,'Optimering af datakvalitet','Ønsket er at optimere antallet af sager der kan klares sidst på måneden','Jens Hansen','Nej','Denne har en væsentlig prioritet for os','Miljø og Energi','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(40,'Kørsel af proces for brugere','Vi ønsker at automatisere kørslen af en tilfældig process','Test Testesen','Nej','Denne har en væsentlig prioritet for os','Miljø og Energi','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,6,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(41,'Projekt automatisering','Vi ønsker at automatisere kørslen af en tilfældig process','Tina Olsen','Nej','Denne har en væsentlig prioritet for os','Told','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,3,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(42,'Koordineringsprojekt af datastruktur','Vi ønsker at automatisere kørslen af en tilfældig process','Test Testesen','Nej','Denne har en væsentlig prioritet for os','Told','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,6,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(43,'Projekt automatisering','Ønsket er at optimere antallet af sager der kan klares sidst på måneden','Jens Hansen','Nej','Denne har en væsentlig prioritet for os','Told','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,4,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(44,'Kørsel af proces for brugere','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Tina Olsen','Nej','Denne har en væsentlig prioritet for os','Told','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,3,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(45,'Projekt automatisering','Vi ønsker at automatisere kørslen af en tilfældig process','Rune Bøgh','Nej','Denne har en væsentlig prioritet for os','Told','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,7,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(46,'Kørsel af proces for brugere','Ønsket er at optimere antallet af sager der kan klares sidst på måneden','Jens Hansen','Nej','Denne har en væsentlig prioritet for os','Told','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,6,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(47,'Optimering af datakvalitet','Vi ønsker at automatisere kørslen af en tilfældig process','Test Testesen','Nej','Denne har en væsentlig prioritet for os','Told','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,9,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(48,'Projekt automatisering','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Rune Bøgh','Nej','Denne har en væsentlig prioritet for os','Told','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,10,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(49,'Kørsel af proces for brugere','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Tina Olsen','Nej','Denne har en væsentlig prioritet for os','Forvaltning','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,3,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(50,'Projekt automatisering','Ønsket er at optimere antallet af sager der kan klares sidst på måneden','Alexander Kastrup','Nej','Denne har en væsentlig prioritet for os','Forvaltning','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(51,'Kørsel af proces for brugere','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Rune Bøgh','Nej','Denne har en væsentlig prioritet for os','Forvaltning','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,8,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(52,'Projekt automatisering','Ønsket er at optimere antallet af sager der kan klares sidst på måneden','Test Testesen','Nej','Denne har en væsentlig prioritet for os','Forvaltning','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,10,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(53,'Koordineringsprojekt af datastruktur','Ønsket er at optimere antallet af sager der kan klares sidst på måneden','Alexander Kastrup','Nej','Denne har en væsentlig prioritet for os','Forvaltning','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,4,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(54,'Kørsel af proces for brugere','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Alexander Kastrup','Nej','Denne har en væsentlig prioritet for os','Forvaltning','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,3,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(55,'Projekt automatisering','Vi ønsker at automatisere kørslen af en tilfældig process','Tina Olsen','Nej','Denne har en væsentlig prioritet for os','Forvaltning','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,4,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(56,'Kørsel af proces for brugere','Ønsket er at optimere antallet af sager der kan klares sidst på måneden','Alexander Kastrup','Nej','Denne har en væsentlig prioritet for os','Forvaltning','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,7,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(57,'Projekt Asterix','Vi ønsker at automatisere kørslen af en tilfældig process','Tina Olsen','Nej','Denne har en væsentlig prioritet for os','Forvaltning','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,5,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(58,'Projekt automatisering','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Jens Hansen','Nej','Denne har en væsentlig prioritet for os','Forvaltning','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(59,'Koordineringsprojekt af datastruktur','Vi ønsker at automatisere kørslen af en tilfældig process','Test Testesen','Nej','Denne har en væsentlig prioritet for os','Aktionærer','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,4,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(60,'Kørsel af proces for brugere','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Tina Olsen','Nej','Denne har en væsentlig prioritet for os','Aktionærer','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,6,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(61,'Koordineringsprojekt af datastruktur','Vi ønsker at automatisere kørslen af en tilfældig process','Jens Hansen','Nej','Denne har en væsentlig prioritet for os','Aktionærer','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(62,'Projekt automatisering','Vi ønsker at automatisere kørslen af en tilfældig process','Test Testesen','Nej','Denne har en væsentlig prioritet for os','Aktionærer','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,7,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(63,'Koordineringsprojekt af datastruktur','Vi ønsker at automatisere kørslen af en tilfældig process','Rune Bøgh','Nej','Denne har en væsentlig prioritet for os','Aktionærer','Nej',NULL,NULL,8,10,7,4,4,10,6,5,4,7,4,5,1,1,1,1,5.8,6.4,5.5,5.5,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(64,'Projekt automatisering','Ønsket er at optimere antallet af sager der kan klares sidst på måneden','Jens Hansen','Nej','Denne har en væsentlig prioritet for os','Aktionærer','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,10,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(65,'Projekt Asterix','Vi ønsker at automatisere kørslen af en tilfældig process','Alexander Kastrup','Nej','Denne har en væsentlig prioritet for os','Aktionærer','Nej',NULL,NULL,0,0,0,0,6,6,9,9,0,0,0,2,1,0,0,0,0,0,8.1,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(66,'Projekt automatisering','Vi ønsker at automatisere kørslen af en tilfældig process','Tina Olsen','Nej','Denne har en væsentlig prioritet for os','Aktionærer','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(67,'Kørsel af proces for brugere','Vi ønsker at automatisere kørslen af en tilfældig process','Test Testesen','Nej','Denne har en væsentlig prioritet for os','Aktionærer','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,6,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(68,'Projekt automatisering','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Jens Hansen','Nej','Denne har en væsentlig prioritet for os','Aktionærer','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,4,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(69,'Optimering af datakvalitet','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Test Testesen','Nej','Denne har en væsentlig prioritet for os','Aktionærer','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,7,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(70,'Projekt automatisering','Vi ønsker at automatisere kørslen af en tilfældig process','Tina Olsen','Nej','Denne har en væsentlig prioritet for os','Aktionærer','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,7,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(71,'Projekt Asterix','Ønsket er at optimere antallet af sager der kan klares sidst på måneden','Tina Olsen','Nej','Denne har en væsentlig prioritet for os','Kapital','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(72,'Koordineringsprojekt af datastruktur','Vi ønsker at automatisere kørslen af en tilfældig process','Jens Hansen','Nej','Denne har en væsentlig prioritet for os','Kapital','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,7,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(73,'Projekt automatisering','Vi ønsker at automatisere kørslen af en tilfældig process','Test Testesen','Nej','Denne har en væsentlig prioritet for os','Kapital','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,9,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(74,'Kørsel af proces for brugere','Ønsket er at optimere antallet af sager der kan klares sidst på måneden','Jens Hansen','Nej','Denne har en væsentlig prioritet for os','Selskab','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,4,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(75,'Optimering af datakvalitet','Vi ønsker at automatisere kørslen af en tilfældig process','Jens Hansen','Nej','Denne har en væsentlig prioritet for os','Selskab','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(76,'Projekt automatisering','Vi ønsker at automatisere kørslen af en tilfældig process','Test Testesen','Nej','Denne har en væsentlig prioritet for os','Selskab','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,5,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(77,'Koordineringsprojekt af datastruktur','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Tina Olsen','Nej','Denne har en væsentlig prioritet for os','Selskab','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,8,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(78,'Optimering af datakvalitet','Ønsket er at optimere antallet af sager der kan klares sidst på måneden','Tina Olsen','Nej','Denne har en væsentlig prioritet for os','Selskab','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(79,'Projekt automatisering','Vi ønsker at automatisere kørslen af en tilfældig process','Jens Hansen','Nej','Denne har en væsentlig prioritet for os','Selskab','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(80,'Projekt Asterix','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Rune Bøgh','Nej','Denne har en væsentlig prioritet for os','Selskab','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,6,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(81,'Kørsel af proces for brugere','Vi ønsker at automatisere kørslen af en tilfældig process','Alexander Kastrup','Nej','Denne har en væsentlig prioritet for os','Ejendomme','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(82,'Projekt automatisering','Ønsket er at optimere antallet af sager der kan klares sidst på måneden','Alexander Kastrup','Nej','Denne har en væsentlig prioritet for os','Ejendomme','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,4,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(83,'Projekt Asterix','Vi ønsker at automatisere kørslen af en tilfældig process','Tina Olsen','Nej','Denne har en væsentlig prioritet for os','Ejendomme','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,6,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(84,'Kørsel af proces for brugere','Ønsket er at optimere antallet af sager der kan klares sidst på måneden','Jens Hansen','Nej','Denne har en væsentlig prioritet for os','Ejendomme','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,7,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(85,'Koordineringsprojekt af datastruktur','Vi ønsker at automatisere kørslen af en tilfældig process','Test Testesen','Nej','Denne har en væsentlig prioritet for os','Ejendomme','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,9,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(86,'Optimering af datakvalitet','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Jens Hansen','Nej','Denne har en væsentlig prioritet for os','Pension','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(87,'Projekt automatisering','Ønsket er at optimere antallet af sager der kan klares sidst på måneden','Tina Olsen','Nej','Denne har en væsentlig prioritet for os','Pension','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,7,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(88,'Koordineringsprojekt af datastruktur','Vi ønsker at automatisere kørslen af en tilfældig process','Rune Bøgh','Nej','Denne har en væsentlig prioritet for os','Pension','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,6,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(89,'Optimering af datakvalitet','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Tina Olsen','Nej','Denne har en væsentlig prioritet for os','Pension','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,9,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(90,'Projekt automatisering','Ønsket er at optimere antallet af sager der kan klares sidst på måneden','Rune Bøgh','Nej','Denne har en væsentlig prioritet for os','Pension','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,10,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(91,'Koordineringsprojekt af datastruktur','Ved at øge antallet af kontroller kan vi minimere antallet af fejlbehandlinger','Jens Hansen','Nej','Denne har en væsentlig prioritet for os','Pension','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(92,'Optimering af datakvalitet','Vi ønsker at automatisere kørslen af en tilfældig process','Alexander Kastrup','Nej','Denne har en væsentlig prioritet for os','Pension','Nej',NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,'Ja','Ja','Ja','Nej',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL),
	(95,'fdsfdsfsd fsdf dsf ds','sdfdsf dsf dsf sdf ','dsfdsf','sdfdsf','sdfs','sdfsdf','fdsfd','sdfsdf','sdfsdfsd',0,0,0,0,0,0,0,0,0,0,0,4,0,0,0,0,0,0,0,0,'Ja','Nej','Ja','Ja',0,0,0,'dfdsf dsf dsf sdf ','Nedbringe skattegab','sd','sdfsdf ds','sd','sdsdfds'),
	(96,'sdfds','sdfs','dsfdsf sdf ','dsfdsf dsf','sdfs','sdfdsf ','sdfsdf','sdfsdf','sdfdsf',0,0,0,0,0,0,0,0,0,0,0,4,0,0,0,0,0,0,0,0,'Ja','Ja','Nej','Nej',0,0,0,'sdf','Øge kundetilfredshed','sdfds','sdfs','sdfsd','sdfsdf');

/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
