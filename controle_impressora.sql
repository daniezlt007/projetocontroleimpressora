-- MySQL dump 10.13  Distrib 8.0.19, for Linux (x86_64)
--
-- Host: localhost    Database: controle_impressora
-- ------------------------------------------------------
-- Server version	8.0.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `impressora`
--

DROP TABLE IF EXISTS `impressora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `impressora` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nr_serie` varchar(30) NOT NULL,
  `local_id` int NOT NULL,
  `host` varchar(50) NOT NULL,
  `modelo_idmodelo` int NOT NULL,
  `marca_idmarca` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_impressora_local_idx` (`local_id`),
  KEY `fk_impressora_modelo1_idx` (`modelo_idmodelo`),
  KEY `fk_impressora_marca1_idx` (`marca_idmarca`),
  CONSTRAINT `fk_impressora_local` FOREIGN KEY (`local_id`) REFERENCES `local` (`idlocal`),
  CONSTRAINT `fk_impressora_marca1` FOREIGN KEY (`marca_idmarca`) REFERENCES `marca` (`idmarca`),
  CONSTRAINT `fk_impressora_modelo1` FOREIGN KEY (`modelo_idmodelo`) REFERENCES `modelo` (`idmodelo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `impressora`
--

LOCK TABLES `impressora` WRITE;
/*!40000 ALTER TABLE `impressora` DISABLE KEYS */;
INSERT INTO `impressora` VALUES (3,'njuuhu85554g45fn5f',2,'pa-server-05',1,1),(4,'fd4154848',1,'pa-sebrae-03',2,2),(5,'fd4154848',1,'pa-sebrae-03',2,2),(6,'15784578/',1,'4587',2,1);
/*!40000 ALTER TABLE `impressora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `impressora_detalhe`
--

DROP TABLE IF EXISTS `impressora_detalhe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `impressora_detalhe` (
  `usuario_id` int NOT NULL,
  `impressora_id` int NOT NULL,
  `qtde_porc` int unsigned NOT NULL,
  `data_troca` date DEFAULT NULL,
  `data_proxima_troca` date DEFAULT NULL,
  PRIMARY KEY (`usuario_id`,`impressora_id`),
  KEY `fk_usuario_has_impressora_impressora1_idx` (`impressora_id`),
  KEY `fk_usuario_has_impressora_usuario1_idx` (`usuario_id`),
  CONSTRAINT `fk_usuario_has_impressora_impressora1` FOREIGN KEY (`impressora_id`) REFERENCES `impressora` (`id`),
  CONSTRAINT `fk_usuario_has_impressora_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `impressora_detalhe`
--

LOCK TABLES `impressora_detalhe` WRITE;
/*!40000 ALTER TABLE `impressora_detalhe` DISABLE KEYS */;
INSERT INTO `impressora_detalhe` VALUES (1,3,50,'2016-02-06','2016-02-06');
/*!40000 ALTER TABLE `impressora_detalhe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `local`
--

DROP TABLE IF EXISTS `local`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `local` (
  `idlocal` int NOT NULL AUTO_INCREMENT,
  `desc_local` varchar(100) NOT NULL,
  `desc_sigla` varchar(20) NOT NULL,
  PRIMARY KEY (`idlocal`),
  UNIQUE KEY `desc_local_UNIQUE` (`desc_local`),
  UNIQUE KEY `desc_sigla_UNIQUE` (`desc_sigla`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `local`
--

LOCK TABLES `local` WRITE;
/*!40000 ALTER TABLE `local` DISABLE KEYS */;
INSERT INTO `local` VALUES (1,'Sede - RMM Centro de Cap.','RMM'),(2,'UNIDADE DE TECNOLOGIA','UTEC');
/*!40000 ALTER TABLE `local` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marca`
--

DROP TABLE IF EXISTS `marca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `marca` (
  `idmarca` int NOT NULL AUTO_INCREMENT,
  `desc_marca` varchar(50) NOT NULL,
  PRIMARY KEY (`idmarca`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marca`
--

LOCK TABLES `marca` WRITE;
/*!40000 ALTER TABLE `marca` DISABLE KEYS */;
INSERT INTO `marca` VALUES (1,'CANON'),(2,'EPSON - EPX255');
/*!40000 ALTER TABLE `marca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelo`
--

DROP TABLE IF EXISTS `modelo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modelo` (
  `idmodelo` int NOT NULL AUTO_INCREMENT,
  `desc_modelo` varchar(50) NOT NULL,
  PRIMARY KEY (`idmodelo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo`
--

LOCK TABLES `modelo` WRITE;
/*!40000 ALTER TABLE `modelo` DISABLE KEYS */;
INSERT INTO `modelo` VALUES (1,'iR-ADV 400'),(2,'JPA-java');
/*!40000 ALTER TABLE `modelo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `idusuario` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(40) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Admin Admin','admin@admin','63a9f0ea7bb98050796b649e85481845');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-02 11:06:46
