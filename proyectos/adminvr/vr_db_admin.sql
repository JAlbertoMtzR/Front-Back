-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-05-2017 a las 22:56:51
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `vr_db_admin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_correos`
--

CREATE TABLE IF NOT EXISTS `cat_correos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_dominio` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estatus` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_departamentos`
--

CREATE TABLE IF NOT EXISTS `cat_departamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estatus` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cat_departamentos`
--

INSERT INTO `cat_departamentos` (`id`, `nombre`, `fecha_alta`, `estatus`) VALUES
(1, 'Dirección', '2017-05-18 21:52:32', b'1'),
(2, 'Sistemas', '2017-05-18 21:52:32', b'1'),
(4, 'Contabilidad', '2017-05-18 21:53:19', b'1'),
(5, 'Contac Center', '2017-05-18 21:53:19', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_dominios`
--

CREATE TABLE IF NOT EXISTS `cat_dominios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estatus` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cat_dominios`
--

INSERT INTO `cat_dominios` (`id`, `nombre`, `fecha_alta`, `estatus`) VALUES
(1, 'vacancyrewards.com', '2017-05-18 22:01:17', b'1'),
(2, 'vacancyclub.com', '2017-05-18 22:01:17', b'1'),
(3, 'astutotravel.com', '2017-05-18 22:01:17', b'1'),
(4, 'travelpass.mx', '2017-05-18 22:01:17', b'1'),
(5, 'scape2travel.com', '2017-05-18 22:01:17', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_equipos`
--

CREATE TABLE IF NOT EXISTS `cat_equipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_departamento` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_correo` int(11) NOT NULL,
  `id_extension` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `clave_equipo` varchar(25) NOT NULL,
  `estado_equipo` int(11) NOT NULL,
  `nodo` varchar(25) NOT NULL,
  `id_team` varchar(10) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estatus` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_usuarios_colaboradores`
--

CREATE TABLE IF NOT EXISTS `cat_usuarios_colaboradores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estatus` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
