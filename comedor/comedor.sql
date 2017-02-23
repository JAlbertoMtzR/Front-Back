-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2017 a las 06:57:21
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `comedor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE IF NOT EXISTS `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipoArticulo` int(2) NOT NULL,
  `nombreArticulo` varchar(100) NOT NULL,
  `costoVenta` tinyint(1) NOT NULL,
  `unidad` varchar(5) NOT NULL,
  `FechaAlta` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estatus` bit(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `tipoArticulo`, `nombreArticulo`, `costoVenta`, `unidad`, `FechaAlta`, `estatus`) VALUES
(1, 2, 'Coca cola 500m', 15, 'PZ', '2017-02-22 21:01:15', b'01'),
(2, 1, 'TOMATE', 0, 'Kg', '2017-02-22 00:00:00', b'01'),
(3, 2, 'Cocacola 2Lts', 50, 'Pz', '2017-02-22 00:00:00', b'01'),
(4, 1, 'CODILLO CERDO', 0, 'Kg', '2017-02-22 00:00:00', b'01'),
(5, 2, 'AGUA PURIFICADA 1 LT', 13, 'PZ', '2017-02-22 00:00:00', b'01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `telefono` text NOT NULL,
  `tipous` int(11) NOT NULL,
  `fechaAlta` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estatus` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `contrasena`, `nombre`, `apellidos`, `telefono`, `tipous`, `fechaAlta`, `estatus`) VALUES
(1, 'betomartinezr@hotmail.com', '19950114', 'Alberto', 'Martinez', '9988429331', 1, '2017-02-21 00:12:21', b'1');