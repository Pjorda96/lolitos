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


-- Volcando estructura de base de datos para bbdd_ip
CREATE DATABASE IF NOT EXISTS `bbdd_ip` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bbdd_ip`;

-- Volcando estructura para tabla bbdd_ip.persona
CREATE TABLE IF NOT EXISTS `persona` (
  `dni` varchar(9) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasenya` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `cuenta_florida` varchar(50) DEFAULT NULL,
  `imagen` longblob,
  `vehiculo` varchar(50) DEFAULT NULL,
  `intereses` varchar(50) DEFAULT NULL,
  `telefono` int(9) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dni`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bbdd_ip.persona: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` (`dni`, `usuario`, `contrasenya`, `nombre`, `apellidos`, `cuenta_florida`, `imagen`, `vehiculo`, `intereses`, `telefono`, `direccion`, `fecha_nac`, `genero`, `ciudad`) VALUES
	('21792971B', 'pajoga', 'f5210b502970f3c8b247966b042d5a188ab52d02', 'Pablo', 'Jorda', 'pajoga', NULL, NULL, NULL, 684987684, NULL, NULL, 'H', 'Valencia'),
	('325235', 'sdffsdf', 'ecd1a3599b7c70c0befdc366397b6fe8a61271ba', 'dr', 'drt', 'sdffsdf', NULL, NULL, NULL, 4536534, NULL, NULL, 'M', 'xdfsd'),
	('3434343', 'marcos_perra', 'ecd1a3599b7c70c0befdc366397b6fe8a61271ba', 'Macos', 'Perra Peluda', 'marcos_perra', NULL, NULL, NULL, 69696969, NULL, NULL, 'M', 'Chueca'),
	('6454656d', 'makaka', '1234', 'pepe', NULL, 'mekaka', _binary 0x730000, 'el', 'lu', 64564, 'rhrth', '0000-00-00', 'rhtrh', ''),
	('645465d', 'makaka', '1234', 'Marcos', NULL, 'mekaka', _binary 0x730000, 'el', 'lu', 64564, 'rhrth', '0000-00-00', 'rhtrh', ''),
	('zzyrk', 'arykzy', '6509dce0870f3a10fd6802f7f2c11b4c4f25904f', 'Julio', 'aryk', 'arykzy', NULL, NULL, NULL, 684526521, NULL, NULL, 'H', 'aryk');
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;

-- Volcando estructura para tabla bbdd_ip.perxtar
CREATE TABLE IF NOT EXISTS `perxtar` (
  `dni` varchar(9) NOT NULL,
  `id_tarjeta` int(11) NOT NULL,
  PRIMARY KEY (`dni`,`id_tarjeta`),
  KEY `id_tarjeta_FK` (`id_tarjeta`),
  CONSTRAINT `FK_perxtar_persona` FOREIGN KEY (`dni`) REFERENCES `persona` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_tarjeta_FK` FOREIGN KEY (`id_tarjeta`) REFERENCES `tarjetas` (`id_tarjeta`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bbdd_ip.perxtar: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `perxtar` DISABLE KEYS */;
INSERT INTO `perxtar` (`dni`, `id_tarjeta`) VALUES
	('6454656d', 4),
	('645465d', 3);
/*!40000 ALTER TABLE `perxtar` ENABLE KEYS */;

-- Volcando estructura para tabla bbdd_ip.tarjetas
CREATE TABLE IF NOT EXISTS `tarjetas` (
  `id_tarjeta` int(11) NOT NULL AUTO_INCREMENT,
  `destino` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `precio` int(3) NOT NULL,
  `salida` varchar(50) NOT NULL,
  `plazas` int(1) NOT NULL,
  `hora` time NOT NULL,
  `vehiculo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tarjeta`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bbdd_ip.tarjetas: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tarjetas` DISABLE KEYS */;
INSERT INTO `tarjetas` (`id_tarjeta`, `destino`, `fecha`, `precio`, `salida`, `plazas`, `hora`, `vehiculo`) VALUES
	(3, 'dfd', '2018-05-14', 5, 'dfd', 9, '00:00:00', 'df'),
	(4, 'uj', '2018-05-14', 4, 'kl', 1, '00:00:00', 'yy');
/*!40000 ALTER TABLE `tarjetas` ENABLE KEYS */;

-- Volcando estructura para tabla bbdd_ip.tarjetas_prediseñadas
CREATE TABLE IF NOT EXISTS `tarjetas_prediseñadas` (
  `id_tarjeta` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `destino` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `precio` int(3) NOT NULL,
  `salida` varchar(50) NOT NULL,
  `plazas` int(1) NOT NULL,
  `hora` time NOT NULL,
  `vehiculo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tarjeta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bbdd_ip.tarjetas_prediseñadas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tarjetas_prediseñadas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tarjetas_prediseñadas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
