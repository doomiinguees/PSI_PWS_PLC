-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: hdservices
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empresas` (
  `name` varchar(15) NOT NULL,
  `designacao` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` int NOT NULL,
  `nif` int NOT NULL,
  `morada` varchar(45) NOT NULL,
  `localidade` varchar(15) NOT NULL,
  `codPostal` varchar(8) NOT NULL,
  `capSocial` decimal(10,2) NOT NULL,
  `id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` VALUES ('HD Services','Serviços Audiovisuais','noreply@hdservices.botelho.eu.org',244509508,520123123,'Rua Alto do Vieiro','Leiria','2400-900',5392178.00,1);
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `folhaobras`
--

DROP TABLE IF EXISTS `folhaobras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `folhaobras` (
  `id` int NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `ivatotal` decimal(8,2) NOT NULL,
  `estado` enum('Em lançamento','Emitida','Paga','Anulada') NOT NULL,
  `id_cliente` int NOT NULL,
  `id_funcionario` int NOT NULL,
  `id_empresa` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `id_cliente_idx` (`id_cliente`),
  KEY `d_empresa_idx` (`id_empresa`),
  CONSTRAINT `id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `users` (`id`),
  CONSTRAINT `id_emp` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id`),
  CONSTRAINT `id_funcionario` FOREIGN KEY (`id_cliente`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `folhaobras`
--

LOCK TABLES `folhaobras` WRITE;
/*!40000 ALTER TABLE `folhaobras` DISABLE KEYS */;
INSERT INTO `folhaobras` VALUES (1,'2023-06-29 00:24:21',381.00,45.71,'Paga',5,1,1),(2,'2023-06-29 01:54:57',192.00,31.47,'Paga',4,2,1),(3,'2023-06-29 01:56:18',226.00,39.06,'Emitida',6,2,1),(4,'2023-06-29 02:13:24',289.00,36.10,'Paga',5,3,1),(5,'2023-06-29 02:16:57',445.00,46.10,'Emitida',4,3,1),(6,'2023-06-29 18:38:58',165.00,19.20,'Paga',9,8,1);
/*!40000 ALTER TABLE `folhaobras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ivas`
--

DROP TABLE IF EXISTS `ivas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ivas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `valor` int NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `estado` enum('Ativo','Inativo') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ivas`
--

LOCK TABLES `ivas` WRITE;
/*!40000 ALTER TABLE `ivas` DISABLE KEYS */;
INSERT INTO `ivas` VALUES (1,23,'Taxa Normal','Inativo'),(2,13,'Taxa Intermédia','Inativo'),(3,6,'Taxa Reduzida','Ativo'),(4,3,'Taxa COVID','Ativo'),(5,50,'TAXA 50','Ativo');
/*!40000 ALTER TABLE `ivas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `linhaobras`
--

DROP TABLE IF EXISTS `linhaobras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `linhaobras` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quantidade` int NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `valiva` decimal(8,2) NOT NULL,
  `id_folhaobra` int NOT NULL,
  `id_service` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `id_folhaobra_idx_idx` (`id_folhaobra`),
  KEY `id_service_idx` (`id_service`),
  CONSTRAINT `id_folhaobra` FOREIGN KEY (`id_folhaobra`) REFERENCES `folhaobras` (`id`),
  CONSTRAINT `id_service` FOREIGN KEY (`id_service`) REFERENCES `services` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `linhaobras`
--

LOCK TABLES `linhaobras` WRITE;
/*!40000 ALTER TABLE `linhaobras` DISABLE KEYS */;
INSERT INTO `linhaobras` VALUES (1,2,60.00,13.80,1,1),(2,4,76.00,4.56,1,6),(3,1,50.00,6.50,1,3),(4,3,45.00,1.35,1,7),(5,2,120.00,27.60,2,2),(6,3,57.00,3.42,2,6),(7,1,15.00,0.45,2,7),(8,1,30.00,6.90,3,1),(9,2,120.00,27.60,3,2),(10,4,76.00,4.56,3,6),(11,2,140.00,18.20,4,4),(13,3,75.00,4.50,4,5),(14,2,30.00,0.90,4,7),(15,1,50.00,6.50,4,3),(16,3,150.00,19.50,5,3),(17,2,140.00,18.20,5,4),(18,5,125.00,7.50,5,5),(19,2,30.00,0.90,5,7),(20,2,60.00,13.80,6,1),(21,2,30.00,0.90,6,7);
/*!40000 ALTER TABLE `linhaobras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `referencia` varchar(20) NOT NULL,
  `precoHora` decimal(8,2) NOT NULL,
  `iva_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `iva_servico_idx` (`iva_id`),
  CONSTRAINT `iva_id` FOREIGN KEY (`iva_id`) REFERENCES `ivas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Book 15 fotos','HDSBOOK30FOTS',30.00,1),(2,'Book 30 fotos','HDSBOOK30FTS',60.00,1),(3,'Video promocional - 1 min','HDSPROMOVID1',50.00,2),(4,'Video de longa duração - até 20 min','HDSVIDLD20',70.00,2),(5,'Edição de Video','EDITVID008',25.00,3),(6,'Edição de foto','EDITFT0003',19.00,3),(7,'Pós-Produção','POSPROD12',15.00,4);
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` int NOT NULL,
  `nif` int NOT NULL,
  `morada` varchar(45) NOT NULL,
  `localidade` varchar(15) NOT NULL,
  `codpostal` varchar(8) NOT NULL,
  `role` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `telefone` (`telefone`),
  UNIQUE KEY `nif` (`nif`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrador','admin','passw0rd','dadomingues2003@gmail.com',915556443,209087065,'Rua Principal','Leiria','2423-009','1'),(2,'Renato Silva','renatosilva','passw0rd','dadomingues2003@gmail.com',912345678,123456789,'Rua Principal','Leiria','2400-001','2'),(3,'Isabel Gonçalves','isagonca','passw0rd','dadomingues2003@gmail.com',923456789,987654321,'Avenida 22 de Maio','Leiria','2400-002','2'),(4,'Ricardo Esteves','resteves','passw0rd','dadomingues2003@gmail.com',934567890,654321987,'Rua Alto do Vieiro','Leiria','2400-003','3'),(5,'Pedro Dias','pedrodias','passw0rd','dadomingues2003@gmail.com',945678901,789456123,'Avenda Marquês de Pombal','Leiria','2400-004','3'),(6,'João Duarte','jduarte','passw0rd','dadomingues2003@gmail.com',956789012,321654987,'Rua das Almoinhas','Leiria','2400-005','3'),(8,'humo ','hugo','123','hugo@',932345236,256706107,'rua das ','Leiria','2400-005','2'),(9,'David Afonso Domingues','testeuser','|0ZZ72@w=L6K','dadomingues2003@gmail.com',2147483647,836963254,'Cat Castanheira de Pera','Castanheira de ','3280-113','3');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-30 15:35:22
