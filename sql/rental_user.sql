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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `password` varchar(200) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `telephone` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (16,'maitai@gmail.com','$2y$10$HH34X5x/VsBGhlPlCwLWMuFpifLaiKDPP6w9Nk8ZVb8yYcT.pI69i','Shawn','Maitai','0715078401','2022-04-06 00:00:00'),(18,'test@gmail.com','$2y$10$gJxCbl0MYo1XHi9zlLWP9eloHJgKklnqlpUx85rnfgdLBJFZwDyzy','test101','test','0715078401','2022-04-13 00:00:00'),(19,'maggie@gmail.com','$2y$10$SPnHmZHVjmlH/xtEltZzmugQi3PAc33rgZ4WA8O/6ujMvCSgxYTF2','Mary ','Magdaline','0712345689','2022-04-13 00:00:00'),(20,'allan@gmail.com','$2y$10$1aLiAdcolxm6ekRJJQuSmePpmTEQ/gfOFLGLsMYW8VGvf7EIVDv2.','Allan','Ochieng','0712345689','2022-04-13 00:00:00'),(21,'kanji@gmail.com','$2y$10$5AFQdDBZyKmJUppCiOQwM.lGla0OtUjklbpMmt2YJxQjzyiWv81I2','Sydney','Kanjie','0799863081','2022-04-13 00:00:00'),(22,'yakwa@gmail.com','$2y$10$9D6WnMYYbWlz8VnExl4i5Ox1klxfxeXUqiELyw1geU5PRHno4NsX2','Joel','Yakwa','0715078995','2022-05-06 00:00:00'),(23,'kdot@gmail.com','$2y$10$rwvmlDAtXNV.6leNtoqRnefIhvCJj7QnJ1eTXlJt5E8nMIi8nr62K','Kendrick','Lamar','0714078401','2022-05-17 00:00:00'),(24,'tay@gmail.com','$2y$10$pTtvu7epELRACHICUzV11ucXwlxcTQUx0cSyyN1i3qMJ8YCIyxS7u','Taylor','Page','0799863081','2022-05-18 00:00:00'),(25,'harry@gmail.com','$2y$10$GLXNhssUIK6h4lPD3P0/N.zkzVaVqCztjZu9nNtuGD4NTfIEgmkt6','Harry','Potter','0799863081','2022-05-18 00:00:00');
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

-- Dump completed on 2022-05-19 10:10:01
