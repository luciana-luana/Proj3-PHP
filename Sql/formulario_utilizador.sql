CREATE DATABASE  IF NOT EXISTS `formulario` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `formulario`;
-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: formulario
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `utilizador`
--

DROP TABLE IF EXISTS `utilizador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `utilizador` (
  `codido_id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(30) NOT NULL,
  `Apelido` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `telemovel` varchar(12) DEFAULT NULL,
  `sexo` varchar(30) NOT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `acesso` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codido_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilizador`
--

LOCK TABLES `utilizador` WRITE;
/*!40000 ALTER TABLE `utilizador` DISABLE KEYS */;
INSERT INTO `utilizador` VALUES (0,'Luciana ','Cruz','lucianadacruz.unicv@gmail.com','912649938','Feminino','Luciana1997$$','Administrador'),(31,'Doren','Costa','doreencruzsv@gmail.com','912364938','Feminino','$2y$12$WlXkNkW0tEucJOIiO79Ox.LQCks7fNLVUjOw8I','User'),(33,'a','a','a@a','123456789','Masculino','$2y$12$YkDOrv1n/XMDmHWiQb23kuR.bUkAe2cAKRsvNW','User'),(34,'b','bhvbhbh','b@b','987456321','Feminino','$2y$12$KjgFXWJTknVBuA0kSFHvvOK7xC9oRr6vBxmNpe','User'),(35,'Joana','Martins','martins@gmail.com','960805754','Feminino','Joana1997$$','User'),(36,'Lucas','Mateus','lucas@gmail.com','915263785','Masculino','$2y$12$9YXp2mzpcF.zHB/xJkOy0eEpijhdsIPTWYVl8X','Utilizador');
/*!40000 ALTER TABLE `utilizador` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-28 13:49:39
