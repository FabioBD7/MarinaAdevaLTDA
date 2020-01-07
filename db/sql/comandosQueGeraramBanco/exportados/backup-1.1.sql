-- MariaDB dump 10.17  Distrib 10.4.8-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: marina
-- ------------------------------------------------------
-- Server version	10.4.8-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `embarcacao`
--

DROP TABLE IF EXISTS `embarcacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `embarcacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dono` int(11) NOT NULL,
  `nome` varchar(120) DEFAULT NULL,
  `modelo` varchar(75) NOT NULL,
  `tipo` enum('Lancha','Veleiro','Escuna','Pesqueiro','Trawler','CatamarÔö£├║','Iate','Jet-Ski','Jet Boat','Caiaque','Caiaque','Prancha de surf/windsurf','outro') NOT NULL DEFAULT 'outro',
  `tamanho` int(3) NOT NULL,
  `num_passageiros` int(2) DEFAULT NULL,
  `capacidade_tanque` int(4) DEFAULT NULL,
  `observacao` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dono` (`dono`),
  CONSTRAINT `embarcacao_ibfk_1` FOREIGN KEY (`dono`) REFERENCES `usuario` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `embarcacao`
--

LOCK TABLES `embarcacao` WRITE;
/*!40000 ALTER TABLE `embarcacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `embarcacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manutencao`
--

DROP TABLE IF EXISTS `manutencao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manutencao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mecanico` int(11) NOT NULL,
  `tipo` enum('prÔö£┬«-saida','rotina','avaria') DEFAULT NULL,
  `data` date NOT NULL,
  `obs` varchar(500) DEFAULT NULL,
  `preco` decimal(7,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mecanico` (`mecanico`),
  CONSTRAINT `manutencao_ibfk_1` FOREIGN KEY (`mecanico`) REFERENCES `usuario` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manutencao`
--

LOCK TABLES `manutencao` WRITE;
/*!40000 ALTER TABLE `manutencao` DISABLE KEYS */;
/*!40000 ALTER TABLE `manutencao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `passageiros`
--

DROP TABLE IF EXISTS `passageiros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `passageiros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_saida` int(11) DEFAULT NULL,
  `nome` varchar(120) NOT NULL,
  `rg` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_saida` (`id_saida`),
  CONSTRAINT `passageiros_ibfk_1` FOREIGN KEY (`id_saida`) REFERENCES `saida` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `passageiros`
--

LOCK TABLES `passageiros` WRITE;
/*!40000 ALTER TABLE `passageiros` DISABLE KEYS */;
/*!40000 ALTER TABLE `passageiros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `saida`
--

DROP TABLE IF EXISTS `saida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `saida` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barco` int(11) NOT NULL,
  `saida` datetime NOT NULL,
  `retorno` datetime DEFAULT NULL,
  `nivel_combustivel` int(4) DEFAULT NULL,
  `obs` varchar(500) DEFAULT NULL,
  `preco` decimal(7,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `barco` (`barco`),
  CONSTRAINT `saida_ibfk_1` FOREIGN KEY (`barco`) REFERENCES `embarcacao` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saida`
--

LOCK TABLES `saida` WRITE;
/*!40000 ALTER TABLE `saida` DISABLE KEYS */;
/*!40000 ALTER TABLE `saida` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) NOT NULL,
  `email` varchar(75) NOT NULL,
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario_perfil`
--

DROP TABLE IF EXISTS `usuario_perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario_perfil` (
  `usuarioID` int(11) NOT NULL,
  `perfilID` int(11) NOT NULL,
  PRIMARY KEY (`usuarioID`,`perfilID`),
  KEY `perfilID` (`perfilID`),
  CONSTRAINT `usuario_perfil_ibfk_1` FOREIGN KEY (`usuarioID`) REFERENCES `usuario` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `usuario_perfil_ibfk_2` FOREIGN KEY (`perfilID`) REFERENCES `perfil` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_perfil`
--

LOCK TABLES `usuario_perfil` WRITE;
/*!40000 ALTER TABLE `usuario_perfil` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario_perfil` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-07 14:20:57
