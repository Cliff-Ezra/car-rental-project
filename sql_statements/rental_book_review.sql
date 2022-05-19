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
-- Table structure for table `book_review`
--

DROP TABLE IF EXISTS `book_review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `book_review` (
  `review_id` int NOT NULL AUTO_INCREMENT,
  `comment` longtext NOT NULL,
  `full_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `website` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`review_id`),
  CONSTRAINT `model_id` FOREIGN KEY (`review_id`) REFERENCES `models` (`model_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_review`
--

LOCK TABLES `book_review` WRITE;
/*!40000 ALTER TABLE `book_review` DISABLE KEYS */;
INSERT INTO `book_review` VALUES (1,'What an amazing car. The A4 handles amazingly. You can never go wrong with it as your choice. ','Cliff Ezra','ezra@gmail.com','https://www.linkedin.com/'),(2,'This car is as amazing as it looks and it handles brilliantly. Couldn\'t be happier','Edwayne Kalume','kalume@gmail.com','https://www.linkedin.com/'),(3,'Amazing. Simply amazing','Brian Kazungu','kazungu@gmail.com','https://www.linkedin.com/'),(9,'Great car','Tong Malong','malong@gmail.com','https://www.linkedin.com/'),(10,'Great car. Would definitely recommend','Jack Harlow','harlow@gmail.com','https://www.linkedin.com/'),(16,'Genius Idea for testing. Let\'s hope it works','Ideate Ideas','idea@gmail.com','www.idea.com'),(18,'Hey','Hey Hey','hey@gmail.com','www.hey.com');
/*!40000 ALTER TABLE `book_review` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-19 10:09:59
