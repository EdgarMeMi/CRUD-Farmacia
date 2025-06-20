-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-12-2023 a las 05:21:53
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `farma`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

DROP TABLE IF EXISTS `bitacora`;
CREATE TABLE IF NOT EXISTS `bitacora` (
  `num` int NOT NULL AUTO_INCREMENT,
  `fechahora` datetime NOT NULL,
  `id` varchar(20) NOT NULL,
  `accion` varchar(50) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`num`, `fechahora`, `id`, `accion`) VALUES
(1, '2023-11-27 00:00:00', '6754', '0'),
(2, '2023-11-27 00:00:00', '9876', 'ALTAS'),
(3, '2023-11-29 09:11:32', '12345', 'ALTAS'),
(4, '2023-11-29 09:17:18', '4555', 'ALTAS'),
(5, '2023-11-30 09:27:01', '1264', 'ALTAS'),
(6, '2023-12-04 08:26:59', '7813', 'MODIFICACION'),
(7, '2023-12-04 08:28:31', '7813', 'BAJAS'),
(8, '2023-12-04 17:52:17', '7899', 'ALTAS'),
(9, '2023-12-04 18:02:08', '78765', 'ALTAS'),
(10, '2023-12-04 18:11:47', '7899', 'MODIFICACION'),
(11, '2023-12-04 18:12:48', '7899', 'MODIFICACION'),
(12, '2023-12-04 18:22:59', '7899', 'MODIFICACION'),
(13, '2023-12-04 18:24:13', '7899', 'MODIFICACION'),
(14, '2023-12-04 18:28:36', '7899', 'MODIFICACION'),
(15, '2023-12-04 21:37:32', '78765', 'BAJAS'),
(16, '2023-12-04 21:37:44', '4555', 'MODIFICACION'),
(17, '2023-12-04 21:48:47', '7899', 'MODIFICACION'),
(18, '2023-12-04 21:50:09', '7899', 'MODIFICACION'),
(19, '2023-12-04 21:50:55', '7899', 'MODIFICACION'),
(20, '2023-12-04 21:52:07', '7899', 'MODIFICACION'),
(21, '2023-12-04 21:54:23', '7899', 'MODIFICACION'),
(22, '2023-12-04 21:56:31', '7899', 'MODIFICACION'),
(23, '2023-12-04 22:24:18', '9876', 'MODIFICACION'),
(24, '2023-12-04 22:34:16', '9876', 'MODIFICACION'),
(25, '2023-12-04 22:34:24', '4555', 'MODIFICACION'),
(26, '2023-12-04 22:43:01', '7899', 'MODIFICACION'),
(27, '2023-12-04 22:43:09', '9876', 'MODIFICACION'),
(28, '2023-12-04 22:43:15', '4555', 'MODIFICACION'),
(29, '2023-12-04 22:44:39', '1264', 'MODIFICACION'),
(30, '2023-12-04 22:44:45', '4555', 'MODIFICACION'),
(31, '2023-12-04 22:45:39', '1264', 'MODIFICACION'),
(32, '2023-12-04 22:48:28', '1264', 'MODIFICACION'),
(33, '2023-12-04 22:50:19', '9876', 'MODIFICACION'),
(34, '2023-12-04 22:50:42', '4555', 'MODIFICACION'),
(35, '2023-12-04 22:54:11', '7899', 'MODIFICACION'),
(36, '2023-12-04 22:55:37', '9876', 'MODIFICACION'),
(37, '2023-12-04 22:59:26', '8754', 'ALTAS'),
(38, '2023-12-04 23:00:02', '1234', 'ALTAS'),
(39, '2023-12-04 23:00:22', '9842', 'ALTAS'),
(40, '2023-12-04 23:00:53', '971', 'ALTAS'),
(41, '2023-12-04 23:01:27', '1520', 'ALTAS'),
(42, '2023-12-04 23:02:20', '5167', 'ALTAS'),
(43, '2023-12-04 23:02:59', '7777', 'ALTAS'),
(44, '2023-12-04 23:03:32', '3456', 'ALTAS'),
(45, '2023-12-04 23:04:05', '986', 'ALTAS'),
(46, '2023-12-04 23:04:37', '1988', 'ALTAS'),
(47, '2023-12-04 23:05:16', '3458', 'ALTAS'),
(48, '2023-12-04 23:05:52', '911', 'ALTAS'),
(49, '2023-12-04 23:07:16', '7123', 'ALTAS'),
(50, '2023-12-04 23:08:11', '1642', 'ALTAS'),
(51, '2023-12-04 23:08:36', '5673', 'ALTAS'),
(52, '2023-12-04 23:08:56', '2301', 'ALTAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

DROP TABLE IF EXISTS `carrito`;
CREATE TABLE IF NOT EXISTS `carrito` (
  `nombre` varchar(50) NOT NULL,
  `cantidad` int NOT NULL,
  `preciof` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentos`
--

DROP TABLE IF EXISTS `medicamentos`;
CREATE TABLE IF NOT EXISTS `medicamentos` (
  `nombre` varchar(60) NOT NULL,
  `codigo` int NOT NULL,
  `aplicacion` varchar(20) NOT NULL,
  `cantidad` varchar(20) NOT NULL,
  `uni` int NOT NULL,
  `precio` int NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `medicamentos`
--

INSERT INTO `medicamentos` (`nombre`, `codigo`, `aplicacion`, `cantidad`, `uni`, `precio`) VALUES
('Viagra', 7899, 'Intravenosa', '500 ml', 9, 120),
('Extracto de mi trozon', 9876, 'Untable', '420 MG', 170, 85),
('Viagra ', 4555, 'Untable', '500 mg ', 80, 62),
('GAMBUTROL', 1264, 'Intravenosa', '500 ML', 100, 8000),
('TORNACHILES', 8754, 'Oral', '10 MG', 250, 16),
('PEPTOBISMOL', 1234, 'Oral', '400 ML', 500, 35),
('RIVOTRIL', 9842, 'Intravenosa', '500 ML', 20, 100),
('LOMECAN B', 971, 'Untable', '200 MG', 50, 150),
('ULTRA-DENGUE', 1520, 'Untable', '200 MG', 75, 63),
('FORMOL', 5167, 'Oral', '500 ml', 200, 1500),
('fentanilo', 7777, 'Intravenosa', '500 ml', 2000, 5),
('cloroformo', 3456, 'Oral', '100 ml', 55, 20),
('COCODRILE', 986, 'Intravenosa', '250 ML', 100, 500),
('LEVONGESTREL', 1988, 'Oral', '10 MG', 200, 90),
('ETANOL', 3458, 'Untable', '100 ML', 200, 23),
('POLVO DE AVION', 911, 'Oral', '10 MG', 20, 10),
('LDOPA', 7123, 'Oral', '20 ML', 200, 600),
('CLEMBUTEROL', 1642, 'Intravenosa', '50 ML', 500, 1600),
('DIANABOL', 5673, 'Intravenosa', '50 ML', 78, 2200),
('MARIHUANOL', 2301, 'Intravenosa', '100 ML', 50, 20);

--
-- Disparadores `medicamentos`
--
DROP TRIGGER IF EXISTS `bajamedi`;
DELIMITER $$
CREATE TRIGGER `bajamedi` AFTER DELETE ON `medicamentos` FOR EACH ROW INSERT INTO bitacora VALUES(0,now(),old.codigo,"BAJAS")
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `modimedi`;
DELIMITER $$
CREATE TRIGGER `modimedi` AFTER UPDATE ON `medicamentos` FOR EACH ROW INSERT INTO bitacora VALUES(0,now(),old.codigo,"MODIFICACION")
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `newmedicamento`;
DELIMITER $$
CREATE TRIGGER `newmedicamento` AFTER INSERT ON `medicamentos` FOR EACH ROW INSERT INTO bitacora VALUES(0,now(),new.codigo,"ALTAS")
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `ventass`;
DELIMITER $$
CREATE TRIGGER `ventass` AFTER UPDATE ON `medicamentos` FOR EACH ROW INSERT INTO `ventas`(`nume`, `fechah`, `codigo`, `accion`, `cantidad`, `preciof`) VALUES (0,now(),old.codigo,'VENTA','','')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` varchar(100) NOT NULL,
  `contra` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `contra`) VALUES
('Diablo', '666'),
('Cliente', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

DROP TABLE IF EXISTS `ventas`;
CREATE TABLE IF NOT EXISTS `ventas` (
  `nume` int NOT NULL AUTO_INCREMENT,
  `fechah` datetime NOT NULL,
  `codigo` int NOT NULL,
  `accion` varchar(20) NOT NULL,
  PRIMARY KEY (`nume`,`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`nume`, `fechah`, `codigo`, `accion`) VALUES
(1, '2023-11-30 09:47:25', 9876, 'VENTA'),
(2, '2023-11-30 09:50:10', 7813, 'VENTA'),
(3, '2023-11-30 09:52:24', 7813, 'VENTA'),
(4, '2023-11-30 09:54:31', 9876, 'VENTA'),
(5, '2023-11-30 09:55:33', 7813, 'VENTA'),
(6, '2023-11-30 11:35:51', 7813, 'VENTA'),
(7, '2023-12-04 08:26:59', 7813, 'VENTA'),
(8, '2023-12-04 18:11:47', 7899, 'VENTA'),
(9, '2023-12-04 18:12:48', 7899, 'VENTA'),
(10, '2023-12-04 18:22:59', 7899, 'VENTA'),
(11, '2023-12-04 18:24:13', 7899, 'VENTA'),
(12, '2023-12-04 18:28:36', 7899, 'VENTA'),
(13, '2023-12-04 21:37:44', 4555, 'VENTA'),
(14, '2023-12-04 21:48:47', 7899, 'VENTA'),
(15, '2023-12-04 21:50:09', 7899, 'VENTA'),
(16, '2023-12-04 21:50:55', 7899, 'VENTA'),
(17, '2023-12-04 21:52:07', 7899, 'VENTA'),
(18, '2023-12-04 21:54:23', 7899, 'VENTA'),
(19, '2023-12-04 21:56:31', 7899, 'VENTA'),
(20, '2023-12-04 22:24:18', 9876, 'VENTA'),
(21, '2023-12-04 22:34:16', 9876, 'VENTA'),
(22, '2023-12-04 22:34:24', 4555, 'VENTA'),
(23, '2023-12-04 22:43:01', 7899, 'VENTA'),
(24, '2023-12-04 22:43:09', 9876, 'VENTA'),
(25, '2023-12-04 22:43:15', 4555, 'VENTA'),
(26, '2023-12-04 22:44:39', 1264, 'VENTA'),
(27, '2023-12-04 22:44:45', 4555, 'VENTA'),
(28, '2023-12-04 22:45:39', 1264, 'VENTA'),
(29, '2023-12-04 22:48:28', 1264, 'VENTA'),
(30, '2023-12-04 22:50:19', 9876, 'VENTA'),
(31, '2023-12-04 22:50:42', 4555, 'VENTA'),
(32, '2023-12-04 22:54:11', 7899, 'VENTA'),
(33, '2023-12-04 22:55:37', 9876, 'VENTA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
