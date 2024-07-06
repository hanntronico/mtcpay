-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-11-2018 a las 15:36:55
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdaccesscon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesos`
--

CREATE TABLE `accesos` (
  `acc_codigo` int(11) NOT NULL,
  `acc_fecha` datetime DEFAULT NULL,
  `acc_origen` varchar(150) DEFAULT NULL,
  `usr_codigo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `accesos`
--

INSERT INTO `accesos` (`acc_codigo`, `acc_fecha`, `acc_origen`, `usr_codigo`) VALUES
(1149367, '2018-09-09 14:34:44', '127.0.0.1', 1),
(1149368, '2018-09-09 15:29:35', '127.0.0.1', 1),
(1149369, '2018-09-09 15:36:59', '127.0.0.1', 1),
(1149370, '2018-09-09 15:38:35', '127.0.0.1', 1),
(1149371, '2018-09-09 15:42:06', '192.168.4.155', 1),
(1149372, '2018-09-09 15:46:51', '192.168.4.155', 1),
(1149373, '2018-09-09 16:31:23', '192.168.4.155', 18),
(1149374, '2018-09-09 16:32:40', '192.168.4.155', 1),
(1149375, '2018-09-09 16:33:09', '192.168.4.239', 1),
(1149376, '2018-09-09 16:33:45', '192.168.4.239', 1),
(1149377, '2018-09-09 16:35:44', '192.168.4.239', 1),
(1149378, '2018-09-09 16:35:49', '192.168.4.155', 1),
(1149379, '2018-09-09 16:36:13', '192.168.4.239', 1),
(1149380, '2018-09-09 16:36:28', '192.168.4.155', 1),
(1149381, '2018-09-09 16:40:22', '192.168.4.155', 1),
(1149382, '2018-09-09 16:40:31', '192.168.4.239', 1),
(1149383, '2018-09-09 16:43:03', '192.168.4.239', 1),
(1149384, '2018-09-09 16:43:04', '192.168.4.239', 1),
(1149385, '2018-09-09 16:43:05', '192.168.4.239', 1),
(1149386, '2018-09-09 16:43:19', '192.168.4.239', 1),
(1149387, '2018-09-09 16:43:38', '192.168.4.239', 1),
(1149388, '2018-09-09 16:43:43', '192.168.4.155', 1),
(1149389, '2018-09-09 16:49:56', '192.168.4.239', 1),
(1149390, '2018-09-09 16:49:58', '192.168.4.239', 1),
(1149391, '2018-09-09 16:49:58', '192.168.4.239', 1),
(1149392, '2018-09-09 16:52:46', '192.168.4.155', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE `niveles` (
  `cod_nivel` tinyint(11) NOT NULL,
  `nivel_descrip` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`cod_nivel`, `nivel_descrip`) VALUES
(1, 'Administrador'),
(2, 'Asistente'),
(3, 'controlador'),
(6, 'hann');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cod_usuario` int(11) NOT NULL,
  `login` varchar(32) CHARACTER SET utf8 NOT NULL,
  `clave` varchar(32) CHARACTER SET utf8 NOT NULL,
  `nombre` text CHARACTER SET utf8 NOT NULL,
  `apellidos` text CHARACTER SET utf8 NOT NULL,
  `dni` char(8) CHARACTER SET utf8 NOT NULL,
  `direccion` text CHARACTER SET utf8,
  `telefono` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `correo` text CHARACTER SET utf8,
  `cod_nivel` tinyint(11) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `login`, `clave`, `nombre`, `apellidos`, `dni`, `direccion`, `telefono`, `correo`, `cod_nivel`, `estado`) VALUES
(1, 'Administ', '21232f297a57a5a743894a0e4a801fc3', 'Administrador', 'Administrador', '12345678', '', '', 'admin@hotmail.com', 1, 1),
(18, 'rmalca', 'e10adc3949ba59abbe56e057f20f883e', 'Robert', 'Malca Lara', '48596978', 'calle Los Tulipanes Nº 456 - urb Los parques', '98749825125', 'robertm_l@gmail.com', 1, 1),
(12, 'lulu', '81dc9bdb52d04dc20036dbd8313ed055', 'Lourdes Sofía', 'Torres Gonzales', '48592631', 'Calle Los Tumbos Nº 156 - Urb. Sta. Victoria', '619260', 'lourdes@hotmail.com', 3, 1),
(20, '', '', 'Hannnnn', 'Soft', '---', '---', '----', 'hannsoft@hotmail.com', 2, 1),
(21, 'piter', 'e10adc3949ba59abbe56e057f20f883e', 'Piter', 'Bernal', '45681234', 'Av. José Leonardo Ortiz Nº 166', '987456135465', 'likiluis@hotmail.com', 2, 1),
(22, 'nquinte', 'ae2bac2e4b4da805d01b2952d7e35ba4', 'Nestor', 'Quinteros', '41526789', 'Av. Mexico #3658', '9874267890', 'elcafre@gmail.com', 2, 1),
(23, '', 'd41d8cd98f00b204e9800998ecf8427e', 'sadfadf', 'sadfas', '234234', 'fasvsa 345', '345345', 'pyron84@hotmail.com', 1, 1),
(24, '', 'd41d8cd98f00b204e9800998ecf8427e', 'ADaAS', 'GSDGD', '3423424', 'ASDFSD', '52342', 'pyron84@hotmail.com', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesos`
--
ALTER TABLE `accesos`
  ADD PRIMARY KEY (`acc_codigo`),
  ADD KEY `usr_codigo` (`usr_codigo`);

--
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`cod_nivel`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesos`
--
ALTER TABLE `accesos`
  MODIFY `acc_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1149393;
--
-- AUTO_INCREMENT de la tabla `niveles`
--
ALTER TABLE `niveles`
  MODIFY `cod_nivel` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
