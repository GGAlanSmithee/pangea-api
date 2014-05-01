CREATE DATABASE  IF NOT EXISTS `jesper_100k` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `jesper_100k`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: jesper_100k
-- ------------------------------------------------------
-- Server version	5.6.17-1~dotdeb.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `building`
--

DROP TABLE IF EXISTS `building`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `building` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `building_type_id` int(10) unsigned NOT NULL,
  `town_id` int(10) unsigned NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `construction_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_building_building_type_idx` (`building_type_id`),
  KEY `fk_building_town_id_idx` (`town_id`),
  CONSTRAINT `fk_building_building_type` FOREIGN KEY (`building_type_id`) REFERENCES `building_type` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_building_town` FOREIGN KEY (`town_id`) REFERENCES `town` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `building`
--

LOCK TABLES `building` WRITE;
/*!40000 ALTER TABLE `building` DISABLE KEYS */;
INSERT INTO `building` VALUES (1,2,3,'2014-02-25 14:28:26',10),(2,2,3,'2014-02-25 14:29:26',10),(3,2,3,'2014-02-25 14:29:27',10),(4,2,3,'2014-02-25 14:29:28',10),(5,4,3,'2014-02-25 14:31:27',10),(6,4,3,'2014-02-25 14:31:28',10),(7,4,3,'2014-02-25 14:31:28',10),(8,4,3,'2014-02-25 14:31:32',10),(9,4,3,'2014-02-25 14:31:33',10),(10,4,3,'2014-02-25 14:31:35',10),(11,4,3,'2014-02-25 14:31:35',10),(12,4,3,'2014-02-25 14:31:36',10),(13,4,3,'2014-02-25 14:31:37',10),(14,2,3,'2014-02-25 14:33:00',10),(15,2,3,'2014-02-25 14:33:07',10),(16,3,3,'2014-03-02 21:34:06',10),(17,3,3,'2014-03-02 21:34:07',10),(18,3,3,'2014-03-02 21:34:08',10),(19,3,3,'2014-03-02 21:34:09',10),(20,3,3,'2014-03-02 21:34:10',10),(21,1,3,'2014-03-02 21:34:22',10),(22,1,3,'2014-03-02 21:34:23',10),(23,1,3,'2014-03-02 21:34:24',10),(24,4,3,'2014-03-02 21:34:33',10),(25,4,3,'2014-03-02 21:34:34',10),(26,4,3,'2014-03-02 21:34:35',10),(27,4,3,'2014-03-02 21:34:36',10),(28,4,3,'2014-03-02 21:34:37',10),(29,4,3,'2014-03-02 21:34:38',10),(30,4,3,'2014-03-02 21:34:39',10),(31,4,3,'2014-03-02 21:34:40',10),(32,4,3,'2014-03-02 21:34:41',10),(33,4,3,'2014-03-02 21:34:42',10),(34,4,3,'2014-03-02 21:34:43',10),(35,4,7,'2014-03-02 21:43:34',10);
/*!40000 ALTER TABLE `building` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `building_type`
--

DROP TABLE IF EXISTS `building_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `building_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `building_type`
--

LOCK TABLES `building_type` WRITE;
/*!40000 ALTER TABLE `building_type` DISABLE KEYS */;
INSERT INTO `building_type` VALUES (3,'farm'),(1,'home'),(4,'mine'),(2,'well');
/*!40000 ALTER TABLE `building_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clan`
--

DROP TABLE IF EXISTS `clan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clan`
--

LOCK TABLES `clan` WRITE;
/*!40000 ALTER TABLE `clan` DISABLE KEYS */;
INSERT INTO `clan` VALUES (1,'test','sweden','kronoberg'),(2,'Oslo','Norge','Europe');
/*!40000 ALTER TABLE `clan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clan_relationship`
--

DROP TABLE IF EXISTS `clan_relationship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clan_relationship` (
  `clan_1_id` int(10) unsigned NOT NULL,
  `clan_2_id` int(10) unsigned NOT NULL,
  `relationship_type_id` int(10) unsigned NOT NULL,
  `percent` int(11) NOT NULL,
  PRIMARY KEY (`clan_1_id`,`clan_2_id`),
  UNIQUE KEY `clan_1_id_UNIQUE` (`clan_1_id`),
  UNIQUE KEY `clan_2_id_UNIQUE` (`clan_2_id`),
  KEY `fk_clan_relationship_relationship_type_idx` (`relationship_type_id`),
  CONSTRAINT `fk_clan_relationship_clan_1` FOREIGN KEY (`clan_1_id`) REFERENCES `clan` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_clan_relationship_clan_2` FOREIGN KEY (`clan_2_id`) REFERENCES `clan` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_clan_relationship_relationship_type` FOREIGN KEY (`relationship_type_id`) REFERENCES `relationship_type` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clan_relationship`
--

LOCK TABLES `clan_relationship` WRITE;
/*!40000 ALTER TABLE `clan_relationship` DISABLE KEYS */;
/*!40000 ALTER TABLE `clan_relationship` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `town_id` int(10) unsigned NOT NULL,
  `text` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_read` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_event_town_idx` (`town_id`),
  CONSTRAINT `fk_event_town` FOREIGN KEY (`town_id`) REFERENCES `town` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum`
--

DROP TABLE IF EXISTS `forum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `clan_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_forum_clan_idx` (`clan_id`),
  CONSTRAINT `fk_forum_clan` FOREIGN KEY (`clan_id`) REFERENCES `clan` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum`
--

LOCK TABLES `forum` WRITE;
/*!40000 ALTER TABLE `forum` DISABLE KEYS */;
/*!40000 ALTER TABLE `forum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personality`
--

DROP TABLE IF EXISTS `personality`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personality` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personality`
--

LOCK TABLES `personality` WRITE;
/*!40000 ALTER TABLE `personality` DISABLE KEYS */;
INSERT INTO `personality` VALUES (4,'builder'),(2,'commander'),(5,'economist'),(1,'general'),(6,'scientist'),(3,'trader');
/*!40000 ALTER TABLE `personality` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `town_id` int(10) unsigned NOT NULL,
  `thread_id` int(10) unsigned NOT NULL,
  `text` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_post_town_idx` (`town_id`),
  KEY `fk_post_thread_idx` (`thread_id`),
  CONSTRAINT `fk_post_thread` FOREIGN KEY (`thread_id`) REFERENCES `thread` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_post_town` FOREIGN KEY (`town_id`) REFERENCES `town` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `race`
--

DROP TABLE IF EXISTS `race`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `race` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `race`
--

LOCK TABLES `race` WRITE;
/*!40000 ALTER TABLE `race` DISABLE KEYS */;
INSERT INTO `race` VALUES (1,'human'),(2,'orc');
/*!40000 ALTER TABLE `race` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relationship_type`
--

DROP TABLE IF EXISTS `relationship_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `relationship_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relationship_type`
--

LOCK TABLES `relationship_type` WRITE;
/*!40000 ALTER TABLE `relationship_type` DISABLE KEYS */;
INSERT INTO `relationship_type` VALUES (5,'brotherly'),(1,'friendly'),(3,'hostile'),(2,'unfriendly'),(4,'war');
/*!40000 ALTER TABLE `relationship_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `science`
--

DROP TABLE IF EXISTS `science`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `science` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `science_type_id` int(10) unsigned NOT NULL,
  `town_id` int(10) unsigned NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `construction_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `science_science_type_idx` (`science_type_id`),
  KEY `science_town_idx` (`town_id`),
  CONSTRAINT `fk_science_science_type` FOREIGN KEY (`science_type_id`) REFERENCES `science_type` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_science_town` FOREIGN KEY (`town_id`) REFERENCES `town` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `science`
--

LOCK TABLES `science` WRITE;
/*!40000 ALTER TABLE `science` DISABLE KEYS */;
INSERT INTO `science` VALUES (1,1,3,'2014-03-03 21:30:55',10),(2,1,3,'2014-03-03 21:30:57',10),(3,1,3,'2014-03-03 21:30:58',10),(4,1,3,'2014-03-03 21:31:00',10),(5,2,3,'2014-03-03 21:31:08',10),(6,2,3,'2014-03-03 21:31:09',10),(7,2,3,'2014-03-03 21:31:11',10),(8,3,3,'2014-03-03 21:31:18',10),(9,3,3,'2014-03-03 21:31:20',10),(10,3,7,'2014-03-03 21:31:26',10),(11,3,7,'2014-03-03 21:31:27',10),(12,3,7,'2014-03-03 21:31:28',10),(13,3,7,'2014-03-03 21:31:29',10),(14,3,7,'2014-03-03 21:31:29',10),(15,3,7,'2014-03-03 21:31:30',10),(16,3,7,'2014-03-03 21:31:31',10),(17,3,7,'2014-03-03 21:31:32',10),(18,3,7,'2014-03-03 21:31:32',10),(19,3,7,'2014-03-03 21:31:33',10),(20,4,7,'2014-03-03 21:31:47',10),(21,4,7,'2014-03-03 21:31:48',10),(22,4,7,'2014-03-03 21:31:49',10);
/*!40000 ALTER TABLE `science` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `science_type`
--

DROP TABLE IF EXISTS `science_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `science_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `science_type`
--

LOCK TABLES `science_type` WRITE;
/*!40000 ALTER TABLE `science_type` DISABLE KEYS */;
INSERT INTO `science_type` VALUES (1,'economics'),(2,'military'),(3,'construction'),(4,'food');
/*!40000 ALTER TABLE `science_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `thread`
--

DROP TABLE IF EXISTS `thread`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `thread` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `town_id` int(10) unsigned NOT NULL,
  `forum_id` int(10) unsigned NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_thread_town_idx` (`town_id`),
  KEY `fk_thread_forum_idx` (`forum_id`),
  CONSTRAINT `fk_thread_forum` FOREIGN KEY (`forum_id`) REFERENCES `forum` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_thread_town` FOREIGN KEY (`town_id`) REFERENCES `town` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thread`
--

LOCK TABLES `thread` WRITE;
/*!40000 ALTER TABLE `thread` DISABLE KEYS */;
/*!40000 ALTER TABLE `thread` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `town`
--

DROP TABLE IF EXISTS `town`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `town` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `clan_id` int(10) unsigned NOT NULL,
  `race_id` int(10) unsigned NOT NULL,
  `personality_id` int(10) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ruler_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  KEY `fk_town_user_idx` (`user_id`),
  KEY `fk_town_clan_idx` (`clan_id`),
  KEY `fk_town_race_idx` (`race_id`),
  KEY `fk_town_personality_idx` (`personality_id`),
  CONSTRAINT `fk_town_clan` FOREIGN KEY (`clan_id`) REFERENCES `clan` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_town_personality` FOREIGN KEY (`personality_id`) REFERENCES `personality` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_town_race` FOREIGN KEY (`race_id`) REFERENCES `race` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_town_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `town`
--

LOCK TABLES `town` WRITE;
/*!40000 ALTER TABLE `town` DISABLE KEYS */;
INSERT INTO `town` VALUES (3,3,1,1,6,'AlanTown','AlanSmithee'),(7,5,1,2,1,'SimonTown','SimonJonsson');
/*!40000 ALTER TABLE `town` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `town_relationship`
--

DROP TABLE IF EXISTS `town_relationship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `town_relationship` (
  `town_1_id` int(10) unsigned NOT NULL,
  `town_2_id` int(10) unsigned NOT NULL,
  `relationship_type_id` int(10) unsigned NOT NULL,
  `percent` int(11) NOT NULL,
  PRIMARY KEY (`town_1_id`,`town_2_id`),
  UNIQUE KEY `town_1_id_UNIQUE` (`town_1_id`),
  UNIQUE KEY `town_2_id_UNIQUE` (`town_2_id`),
  KEY `fk_town_relationship_relationship_type_idx` (`relationship_type_id`),
  CONSTRAINT `fk_town_relationship_relationship_type` FOREIGN KEY (`relationship_type_id`) REFERENCES `relationship_type` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_town_relationship_town_1` FOREIGN KEY (`town_1_id`) REFERENCES `town` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_town_relationship_town_2` FOREIGN KEY (`town_2_id`) REFERENCES `town` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `town_relationship`
--

LOCK TABLES `town_relationship` WRITE;
/*!40000 ALTER TABLE `town_relationship` DISABLE KEYS */;
INSERT INTO `town_relationship` VALUES (3,7,1,50);
/*!40000 ALTER TABLE `town_relationship` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unit`
--

DROP TABLE IF EXISTS `unit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `unit_type_id` int(10) unsigned NOT NULL,
  `town_id` int(10) unsigned NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `construction_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_unit_unit_type_idx` (`unit_type_id`),
  KEY `fk_unit_town_idx` (`town_id`),
  CONSTRAINT `fk_unit_town` FOREIGN KEY (`town_id`) REFERENCES `town` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_unit_unit_type` FOREIGN KEY (`unit_type_id`) REFERENCES `unit_type` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='	';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unit`
--

LOCK TABLES `unit` WRITE;
/*!40000 ALTER TABLE `unit` DISABLE KEYS */;
INSERT INTO `unit` VALUES (1,1,3,'2014-03-02 20:07:49',10),(2,1,3,'2014-03-02 20:07:51',10),(3,1,3,'2014-03-02 20:07:51',10),(4,1,3,'2014-03-02 20:07:52',10),(5,1,3,'2014-03-02 20:07:53',10),(6,1,3,'2014-03-02 20:07:53',10),(7,1,3,'2014-03-02 20:09:26',10),(8,1,3,'2014-03-02 20:09:27',10),(9,1,3,'2014-03-02 20:09:28',10),(10,2,3,'2014-03-03 12:53:06',10),(11,2,3,'2014-03-03 12:53:07',10),(12,2,3,'2014-03-03 12:53:08',10),(13,2,3,'2014-03-03 12:53:09',10),(14,2,3,'2014-03-03 12:53:10',10),(15,2,3,'2014-03-03 12:53:11',10),(16,2,3,'2014-03-03 12:53:12',10),(17,2,3,'2014-03-03 12:53:13',10),(18,2,3,'2014-03-03 12:53:14',10),(19,2,3,'2014-03-03 12:53:15',10),(20,2,3,'2014-03-03 12:53:16',10),(21,2,3,'2014-03-03 12:53:17',10),(22,2,3,'2014-03-03 12:53:17',10),(23,2,3,'2014-03-03 12:53:19',10),(24,2,3,'2014-03-03 12:53:20',10),(25,2,3,'2014-03-03 12:53:20',10),(26,2,3,'2014-03-03 12:53:21',10),(27,2,3,'2014-03-03 12:53:22',10),(28,2,7,'2014-03-03 12:53:30',10),(29,2,7,'2014-03-03 12:53:31',10),(30,1,7,'2014-03-03 12:53:44',10),(31,1,7,'2014-03-03 12:53:45',10),(32,1,7,'2014-03-03 12:54:00',10),(33,2,7,'2014-03-03 12:54:10',10),(34,2,7,'2014-03-03 12:54:12',10);
/*!40000 ALTER TABLE `unit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unit_type`
--

DROP TABLE IF EXISTS `unit_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unit_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unit_type`
--

LOCK TABLES `unit_type` WRITE;
/*!40000 ALTER TABLE `unit_type` DISABLE KEYS */;
INSERT INTO `unit_type` VALUES (1,'peasant'),(2,'soldier');
/*!40000 ALTER TABLE `unit_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (3,'AlanSmithee','AlanSmithee','AlanSmithee','AlanSmithee','AlanSmithee'),(5,'Simon','Simon','Simon','Simon','Simon');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-04-13 18:16:39
