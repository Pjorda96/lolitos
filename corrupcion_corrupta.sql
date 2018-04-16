-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.26-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para corropcion_corrupta
CREATE DATABASE IF NOT EXISTS `corropcion_corrupta` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci */;
USE `corropcion_corrupta`;

-- Volcando estructura para tabla corropcion_corrupta.caso
CREATE TABLE IF NOT EXISTS `caso` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `descripcion` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `estimacion` float DEFAULT NULL,
  `dictamen` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `juez` int(11) NOT NULL,
  `ciudadano` int(11) NOT NULL,
  `periodico` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `FKjuez` (`juez`),
  KEY `FKimplicado` (`ciudadano`),
  KEY `FKperiodico` (`periodico`),
  CONSTRAINT `FKimplicado` FOREIGN KEY (`ciudadano`) REFERENCES `implicado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FKjuez` FOREIGN KEY (`juez`) REFERENCES `juez` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FKperiodico` FOREIGN KEY (`periodico`) REFERENCES `periodico` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla corropcion_corrupta.caso: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `caso` DISABLE KEYS */;
/*!40000 ALTER TABLE `caso` ENABLE KEYS */;

-- Volcando estructura para tabla corropcion_corrupta.implicado
CREATE TABLE IF NOT EXISTS `implicado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `direccion` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `dni` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `patrimonio` float DEFAULT NULL,
  `puesto` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `partido` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKpartido` (`partido`),
  CONSTRAINT `FKpartido` FOREIGN KEY (`partido`) REFERENCES `part_politico` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla corropcion_corrupta.implicado: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `implicado` DISABLE KEYS */;
/*!40000 ALTER TABLE `implicado` ENABLE KEYS */;

-- Volcando estructura para tabla corropcion_corrupta.juez
CREATE TABLE IF NOT EXISTS `juez` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `direccion` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `fecha_ejer` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla corropcion_corrupta.juez: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `juez` DISABLE KEYS */;
/*!40000 ALTER TABLE `juez` ENABLE KEYS */;

-- Volcando estructura para tabla corropcion_corrupta.part_politico
CREATE TABLE IF NOT EXISTS `part_politico` (
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefono` float DEFAULT NULL,
  `periodico` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`nombre`),
  KEY `FKperiodic` (`periodico`),
  CONSTRAINT `FKperiodic` FOREIGN KEY (`periodico`) REFERENCES `periodico` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla corropcion_corrupta.part_politico: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `part_politico` DISABLE KEYS */;
/*!40000 ALTER TABLE `part_politico` ENABLE KEYS */;

-- Volcando estructura para tabla corropcion_corrupta.periodico
CREATE TABLE IF NOT EXISTS `periodico` (
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `tirada` int(11) DEFAULT NULL,
  `partido` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`nombre`),
  KEY `FKpart` (`partido`),
  CONSTRAINT `FKpart` FOREIGN KEY (`partido`) REFERENCES `part_politico` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla corropcion_corrupta.periodico: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `periodico` DISABLE KEYS */;
/*!40000 ALTER TABLE `periodico` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
