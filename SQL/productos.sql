-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-10-2022 a las 20:10:30
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `infoproducto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `existencia` int(11) NOT NULL,
  `codigoBarras` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigoBarras` (`codigoBarras`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `existencia`, `codigoBarras`) VALUES
(1, 'Azucar', 20, '7435A3454'),
(2, 'Sal', 32, '3243123453234'),
(3, 'Yerba', 120, '43234324'),
(4, 'Harina', 23, 'A42434D'),
(5, 'Leche', 32, '432-12'),
(6, 'Huevos', 36, 'ABC1424/ 24'),
(7, 'Polenta', 20, 'ASDFV1234'),
(8, 'Libro de cocina', 30, '2343543243'),
(9, 'Libro de cocina profesional', 50, '234354323443'),
(10, 'Tomate', 20, '234354'),
(11, 'Lechuga', 50, '03432435334'),
(12, 'Tomate', 20, '434534');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
