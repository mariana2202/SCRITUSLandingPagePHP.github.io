-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-06-2021 a las 17:57:25
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `scritus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nombre` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contrasena` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `celular` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`correo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `correo`, `contrasena`, `celular`) VALUES
('Daniela', 'Franco Guerra', 'danielafrancoguerra9709@gmail.com', 'Dani9709', '3052265104'),
('Mariana', 'Aristizábal Gutiérrez', 'aristizabalg.2001@gmail.com', 'Carlina2001', '3215527963'),
('Valeria', 'Aristizábal Gutiérrez', 'valeriaa895@gmail.com', 'Valeria990723', '3116769025'),
('Carlina Yozmed', 'Gutiérrez Maya', 'carly805@gmail.com', '20010222', '3113557423'),
('Franklin ', 'Arias Amariles', 'franarias.2929@gmail.com', '966bd662c3b829176f84', '3005983000'),
('Rubiela', 'Maya Aguirre', 'migormari@gmail.com', '827ccb0eea8a706c4c34', '2812267');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
