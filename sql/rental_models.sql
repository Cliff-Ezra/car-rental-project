-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: rental
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `models`
--

DROP TABLE IF EXISTS `models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `models` (
  `model_id` int NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `s1_passenger_no` int DEFAULT NULL,
  `s2_transmission` varchar(255) DEFAULT NULL,
  `s3_door_no` int DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `description` longtext,
  `product_slug` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`model_id`),
  KEY `category_id_idx` (`category_id`),
  CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `models`
--

LOCK TABLES `models` WRITE;
/*!40000 ALTER TABLE `models` DISABLE KEYS */;
INSERT INTO `models` VALUES (1,1,'Audi A3','01_a_Audi-a3.jpg',4,'Auto',4,'8','7800','Audi AG is a German automotive manufacturer of luxury vehicles headquartered in Ingolstadt, Bavaria, Germany. As a subsidiary of its parent company, the Volkswagen Group, Audi produces vehicles in nine production facilities worldwide.','audi-a3',NULL),(2,1,'Audi A4','01_b_Audi-A4-Avant.jpg',5,'Auto',4,'4','8400','Audi AG is a German automotive manufacturer of luxury vehicles headquartered in Ingolstadt, Bavaria, Germany. As a subsidiary of its parent company, the Volkswagen Group, Audi produces vehicles in nine production facilities worldwide.','audi-a4',NULL),(3,1,'Audi Q7','01_c_2017-Audi-Q7.jpg',5,'Auto',4,'5','12600','Audi AG is a German automotive manufacturer of luxury vehicles headquartered in Ingolstadt, Bavaria, Germany. As a subsidiary of its parent company, the Volkswagen Group, Audi produces vehicles in nine production facilities worldwide.','audi-q7',NULL),(4,1,'Audi Q5','01_d_Audi_A5.jpg',4,'Auto',2,'3','15000','Audi AG is a German automotive manufacturer of luxury vehicles headquartered in Ingolstadt, Bavaria, Germany. As a subsidiary of its parent company, the Volkswagen Group, Audi produces vehicles in nine production facilities worldwide.','audi-q5',NULL),(5,2,'BMW 3 Series','02_a_bmw-3-series-sedan.jpg',4,'Auto',2,'12','6400','Bayerische Motoren Werke AG, commonly referred to as BMW, is a German multinational corporate manufacturer of luxury vehicles and motorcycles headquartered in Munich, Bavaria, Germany.','bmw-3-series',NULL),(6,2,'BMW Z4','02_b_bmw_Z4.jpg',2,'Auto',2,'10','15000','Bayerische Motoren Werke AG, commonly referred to as BMW, is a German multinational corporate manufacturer of luxury vehicles and motorcycles headquartered in Munich, Bavaria, Germany.','bmw-z4',NULL),(7,2,'BMW X6','02_c_bmw-x6.jpg',5,'Auto',4,'5','17000','Bayerische Motoren Werke AG, commonly referred to as BMW, is a German multinational corporate manufacturer of luxury vehicles and motorcycles headquartered in Munich, Bavaria, Germany.','bmw-x6',NULL),(8,2,'BMW 7 Series','02_d_bmw-7-series.jpg',4,'Auto',4,'3','18900','Bayerische Motoren Werke AG, commonly referred to as BMW, is a German multinational corporate manufacturer of luxury vehicles and motorcycles headquartered in Munich, Bavaria, Germany.','bmw-7-series',NULL),(9,3,'Lexus LS-460','03_a_lexus-ls-460.jpg',5,'Manual',4,'4','1000','Lexus is the luxury vehicle division of the Japanese automaker Toyota. The Lexus brand is marketed in more than 90 countries and territories worldwide and is Japan\'s largest-selling make of premium cars. It has ranked among the 10 largest Japanese global brands in market value. Lexus is headquartered in Nagoya, Japan.','lexus-ls-460',NULL),(10,3,'Lexus-RX-350','03_b_Lexus-RX-350.jpg',5,'Auto',4,'8','11000','Lexus is the luxury vehicle division of the Japanese automaker Toyota. The Lexus brand is marketed in more than 90 countries and territories worldwide and is Japan\'s largest-selling make of premium cars. It has ranked among the 10 largest Japanese global brands in market value. Lexus is headquartered in Nagoya, Japan.','lexus-rx-350',NULL),(11,4,'Mercedes C-Class','04_a_Mercedes-C-Class.jpg',5,'Manual',4,'3','9000','Mercedes-Benz, commonly referred to as Mercedes, is a German luxury automotive brand. Both Mercedes-Benz and Mercedes-Benz AG are headquartered in Stuttgart, Baden-Württemberg, Germany. Mercedes-Benz produces consumer luxury vehicles and commercial vehicles1.','mercedes-c-class',NULL),(12,4,'Mercedes CLS-Class','04_b_mercedes-benz-cls-class.jpg',4,'Manual',4,'6','1000','Mercedes-Benz, commonly referred to as Mercedes, is a German luxury automotive brand. Both Mercedes-Benz and Mercedes-Benz AG are headquartered in Stuttgart, Baden-Württemberg, Germany. Mercedes-Benz produces consumer luxury vehicles and commercial vehicles','mercedes-cls-class',NULL),(13,4,'Mercedes GLE','04_c_Mercedes-Benz-GLE.jpg',5,'Auto',4,'9','12700','Mercedes-Benz, commonly referred to as Mercedes, is a German luxury automotive brand. Both Mercedes-Benz and Mercedes-Benz AG are headquartered in Stuttgart, Baden-Württemberg, Germany. Mercedes-Benz produces consumer luxury vehicles and commercial vehicles','mercedes-gle',NULL),(14,4,'Mercedes SL-Class','04_d_mercedes_SL-Class.jpg',2,'Auto',2,'9','25900','Mercedes-Benz, commonly referred to as Mercedes, is a German luxury automotive brand. Both Mercedes-Benz and Mercedes-Benz AG are headquartered in Stuttgart, Baden-Württemberg, Germany. Mercedes-Benz produces consumer luxury vehicles and commercial vehicles','mercedes-sl-class',NULL),(15,5,'Mini-Cooper-S','05_a_MINI-Cooper-S.jpg',4,'Auto',4,'7','8900','The Mini Hatch (stylised as MINI hatch, or MINI Hardtop in the US), also known as Mini Cooper, Mini One, or simply the Mini, is a three-door or five door hatchback first introduced in early 2000 by German automotive company BMW under the Mini marque. The second generation was launched in 2006 and the third in 2014. A convertible version was introduced in 2004, with the second generation following in 2008.','mini-cooper-s',NULL),(16,5,'Mini Countryman','05_b_MINI_countryman.jpg',4,'Auto',2,'4','9500','The Mini Hatch (stylised as MINI hatch, or MINI Hardtop in the US), also known as Mini Cooper, Mini One, or simply the Mini, is a three-door or five door hatchback first introduced in early 2000 by German automotive company BMW under the Mini marque. The second generation was launched in 2006 and the third in 2014. A convertible version was introduced in 2004, with the second generation following in 2008.','mini-countryman',NULL),(17,6,'Porsche Cayenne','06_a_porsche_cayenne.jpg',5,'Auto',4,'3','12700','Dr.-Ing. h.c. F. Porsche AG, usually shortened to Porsche, is a German automobile manufacturer specializing in high-performance sports cars, SUVs and sedans, headquartered in Stuttgart, Baden-Württemberg, Germany.','porsche-cayenne',NULL),(18,6,'Porsche Boxster','06_b_porsche_boxster.jpg',2,'Auto',2,'4','1800','Dr.-Ing. h.c. F. Porsche AG, usually shortened to Porsche, is a German automobile manufacturer specializing in high-performance sports cars, SUVs and sedans, headquartered in Stuttgart, Baden-Württemberg, Germany.','porsche-boxter',NULL),(19,6,'Porsche Panamera','06_c_Porsche-Panamera.jpg',4,'Auto',4,'5','25200',' Dr.-Ing. h.c. F. Porsche AG, usually shortened to Porsche, is a German automobile manufacturer specializing in high-performance sports cars, SUVs and sedans, headquartered in Stuttgart, Baden-Württemberg, Germany. ','porsche-panamera',NULL),(20,8,'Test Testosterone','Image1.jpg',5,'Manual',4,'4','1000',' 2022 Model ',NULL,NULL),(25,9,'Dodge','Car test dodge.jpg',4,'Auto',2,'7','17000','Dodge Car',NULL,NULL);
/*!40000 ALTER TABLE `models` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-19 10:10:00
