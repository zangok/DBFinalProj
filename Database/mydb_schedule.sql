-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `schedule` (
  `id` int NOT NULL,
  `class1` int DEFAULT NULL,
  `class2` int DEFAULT NULL,
  `class3` int DEFAULT NULL,
  `class4` int DEFAULT NULL,
  `class5` int DEFAULT NULL,
  `class6` int DEFAULT NULL,
  `class7` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `class1_idx` (`class1`),
  KEY `class2_idx` (`class2`),
  KEY `class3_idx` (`class3`),
  KEY `class4_idx` (`class4`),
  KEY `class5_idx` (`class5`),
  KEY `class6_idx` (`class6`),
  KEY `class7_idx` (`class7`),
  CONSTRAINT `schedule_class1` FOREIGN KEY (`class1`) REFERENCES `classes` (`class_num`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `schedule_class2` FOREIGN KEY (`class2`) REFERENCES `classes` (`class_num`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `schedule_class3` FOREIGN KEY (`class3`) REFERENCES `classes` (`class_num`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `schedule_class4` FOREIGN KEY (`class4`) REFERENCES `classes` (`class_num`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `schedule_class5` FOREIGN KEY (`class5`) REFERENCES `classes` (`class_num`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `schedule_class6` FOREIGN KEY (`class6`) REFERENCES `classes` (`class_num`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `schedule_class7` FOREIGN KEY (`class7`) REFERENCES `classes` (`class_num`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedule`
--

LOCK TABLES `schedule` WRITE;
/*!40000 ALTER TABLE `schedule` DISABLE KEYS */;
INSERT INTO `schedule` VALUES (0,0,NULL,NULL,NULL,NULL,NULL,NULL),(1,1,NULL,NULL,NULL,NULL,NULL,NULL),(2,1,NULL,NULL,NULL,NULL,NULL,NULL),(3,0,NULL,NULL,NULL,NULL,NULL,NULL),(4,0,NULL,NULL,NULL,NULL,NULL,NULL),(5,1,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `schedule` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-27 15:08:38
