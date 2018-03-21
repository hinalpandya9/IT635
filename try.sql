-- MySQL dump 10.13  Distrib 5.7.21, for Linux (i686)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `car_avai`
--

DROP TABLE IF EXISTS `car_avai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `car_avai` (
  `carID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `model` varchar(30) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`carID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_avai`
--

LOCK TABLES `car_avai` WRITE;
/*!40000 ALTER TABLE `car_avai` DISABLE KEYS */;
INSERT INTO `car_avai` VALUES (1,'Audi','Q5',2018,'Black',48795),(2,'BMW','X6',2016,'white',51995),(3,'Dodge','Challenger',2016,'red',31500),(4,'Honda','CR V',2015,'Gray',21500),(5,'Land Rover','Range Rover',2017,'blue',83995),(6,'Mazda','Mazda3 sport',2013,'silver',25499),(7,'Nissan','Pathfinder',2014,'mate black',21090),(9,'Porsche','Macan turbo',2017,'Silver',57499);
/*!40000 ALTER TABLE `car_avai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car_rent`
--

DROP TABLE IF EXISTS `car_rent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `car_rent` (
  `email` varchar(35) NOT NULL,
  `password` varchar(8) DEFAULT NULL,
  `user` char(1) DEFAULT NULL,
  `carID` int(11) NOT NULL,
  `loc_name` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`email`),
  KEY `fk_carID` (`carID`),
  CONSTRAINT `fk_carID` FOREIGN KEY (`carID`) REFERENCES `car_avai` (`carID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_rent`
--

LOCK TABLES `car_rent` WRITE;
/*!40000 ALTER TABLE `car_rent` DISABLE KEYS */;
INSERT INTO `car_rent` VALUES ('abc@gmail.com','abc','A',2,'Lakewood'),('hgp@gmail.com','hgp','A',9,'Williamstown'),('mnp@gmail.com','mnp','R',3,'Toms River'),('pqr@gmail.com','pqr','R',5,'Egg Harbor'),('rst@gmail.com','rst','R',6,'Princeton'),('xyz@gmail.com','xyz','A',7,'Winslow');
/*!40000 ALTER TABLE `car_rent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location` (
  `loc_ID` int(11) NOT NULL AUTO_INCREMENT,
  `loc_name` varchar(35) DEFAULT NULL,
  `carID` int(11) DEFAULT NULL,
  PRIMARY KEY (`loc_ID`),
  KEY `carID` (`carID`),
  CONSTRAINT `location_ibfk_1` FOREIGN KEY (`carID`) REFERENCES `car_avai` (`carID`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=449 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` VALUES (111,'Egg harbor',5),(222,'Lakewood',2),(333,'Princeton',6),(444,'Toms River',3),(445,'Winslow',7),(447,'Voorhees',1),(448,'Williamstown',9);
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-23 22:25:11
