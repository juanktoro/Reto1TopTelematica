-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-02-2014 a las 00:24:45
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `imagenes`
--
CREATE DATABASE IF NOT EXISTS `jnorena3_reto1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jnorena3_reto1`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruta` varchar(150) DEFAULT NULL,
  `descripcion` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `image`
--

INSERT INTO `image` (`id`, `ruta`, `descripcion`) VALUES
(1, 'imagenes/e46caballo.jpg', 'Animales'),
(3, 'imagenes/5aa', 'Animales'),
(4, 'imagenes/badferrari.jpg', 'Automoviles'),
(5, 'imagenes/c72mustang.jpg', 'Automoviles'),
(6, 'imagenes/ebctt.jpg', 'Automoviles'),
(7, 'imagenes/ab0loro.jpg', 'Animales'),
(8, 'imagenes/354images.jpg', 'Paisajes'),
(9, 'imagenes/84aarte.jpg', 'Arte'),
(10, 'imagenes/27fpersonas.jpg', 'Personas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT 'NOT NULL',
  `apellido` varchar(25) DEFAULT 'NOT NULL',
  `usuario` varchar(25) DEFAULT 'NOT NULL',
  `password` varchar(15) DEFAULT 'NOT NULL',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `password`) VALUES
(1, 'juan', 'toro', 'juank', '1128'),
(2, 'jose', 'mora', 'josem', '123'),
(3, 'manuel', 'valle', 'man', '1212');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
