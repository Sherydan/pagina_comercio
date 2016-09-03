-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-09-2016 a las 13:24:45
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ecomerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `rut` varchar(13) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(15) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `clave` varchar(100) NOT NULL,
  PRIMARY KEY (`rut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`rut`, `nombre`, `direccion`, `telefono`, `correo`, `clave`) VALUES
('', '', '', 0, '', ''),
('17.550.470-2', 'Luis Tobar', 'Tinguiririca', 96697386, 'sadsa@algo.com', '1234'),
('17.747.579-3', 'Edgardo Ignacio Avila Acevedo', 'SADAS', 1234, 'gamitpro@gmail.com', '1234'),
('21321', 'gg', 'gg', 44455, 'gamitpaaaro@gmail.com', 'aiep'),
('3342d', 'ssadas', 'asdsa', 455, 'sadasd', '1234'),
('asdas111', 'sadsa', 'sadsa', 0, 'gamitpro@gmail.com', '1234'),
('sadas13', 'sadsa', 'sadas', 555, 'gamitpro@gmail.com', 'aiep'),
('sads5644', 'asdas', 'sadas', 454, 'gamitpro@gmail.com', '1234'),
('safasf', 'sadsad', 'sadas', 1234, 'gamitpro@gmail.com', '1234'),
('sasaf', 'safsad', 'dsadas', 44, 'sadas', '1234'),
('sdsad', 'sdasd', 'sadsa', 1234, '1234', '1234'),
('sdsad4353', 'sdasd', 'sadsa', 1234, '1234', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loginattempts`
--

CREATE TABLE IF NOT EXISTS `loginattempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `loginattempts`
--

INSERT INTO `loginattempts` (`IP`, `Attempts`, `LastLogin`, `Username`, `ID`) VALUES
('::1', 1, '2016-09-01 01:39:59', 'edgar', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` char(23) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ciudad` varchar(100) NOT NULL,
  `rut` varchar(13) NOT NULL,
  `telefono` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `email`, `verified`, `mod_timestamp`, `ciudad`, `rut`, `telefono`) VALUES
('2478557c84bb9adee4', 'sadsad', '1234', 'hola@gmail.com', 0, '2016-09-01 15:39:39', '', '', 0),
('748657c8f927b1b37', 'sadas11', '1234', 'gamitproaaaaa1@gmail.com', 0, '2016-09-02 03:59:37', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
