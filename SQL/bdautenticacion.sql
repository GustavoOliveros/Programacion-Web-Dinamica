SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdautenticacion`
--
-- CREATE DATABASE `bdautenticacion`

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `usnombre` varchar(50) NOT NULL UNIQUE,
  `uspass` varchar(40) NOT NULL,
  `usmail` varchar(50) NOT NULL,
  `usdeshabilitado` TIMESTAMP DEFAULT '0000-00-00'
) ENGINE=INNODB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `idrol` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `roldescripcion` varchar(50) NOT NULL UNIQUE
) ENGINE=INNODB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Estructura de tabla para la tabla `usuariorol`
--

DROP TABLE IF EXISTS `usuariorol`;
CREATE TABLE IF NOT EXISTS `usuariorol` (
  `idusuario` bigint(20) NOT NULL,
  `idrol` bigint(20) NOT NULL,
  PRIMARY KEY (`idusuario`,`idrol`),
  FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON UPDATE CASCADE ON DELETE RESTRICT,
  FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario`(`usnombre`,`uspass`,`usmail`) VALUES
('root', 'a4ea6876f894e9ecc990bcfeb7f93d64', 'root@email.com'),
('usuario1', '22a79aa4674c806956338099a5752c4f', 'usuario1@email.com');

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol`(`roldescripcion`) VALUES
('admin'),
('otros');

--
-- Volcado de datos para la tabla `usuariorol`
--

INSERT INTO `usuariorol`(`idusuario`,`idrol`) VALUES
(1,1),(2,2);


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
