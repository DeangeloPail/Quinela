-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2023 a las 08:42:42
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `quinela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competicion`
--

CREATE TABLE `competicion` (
  `cod_competicion` int(20) NOT NULL,
  `nom_competicion` varchar(250) NOT NULL,
  `logo_competici` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `competicion`
--

INSERT INTO `competicion` (`cod_competicion`, `nom_competicion`, `logo_competici`) VALUES
(1, 'Premier League', 'Premier_league.png'),
(2, 'La Liga Santander', 'LaLiga_santander.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `cod_equipo` int(20) NOT NULL,
  `nom_equipo` varchar(250) NOT NULL,
  `logo_equipo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`cod_equipo`, `nom_equipo`, `logo_equipo`) VALUES
(1, 'Real Madrid', 'Real_madrid.png'),
(2, 'FC Barcelona', 'FC_Barcelona.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidos`
--

CREATE TABLE `partidos` (
  `cod_partido` int(20) NOT NULL,
  `ref_competicion` int(20) NOT NULL,
  `ref_equi_loc` int(20) NOT NULL,
  `ref_equi_visi` int(20) NOT NULL,
  `fecha_prtido` date NOT NULL,
  `resultado_prtido` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `partidos`
--

INSERT INTO `partidos` (`cod_partido`, `ref_competicion`, `ref_equi_loc`, `ref_equi_visi`, `fecha_prtido`, `resultado_prtido`) VALUES
(1, 2, 1, 2, '2023-06-13', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `cod_tp_usu` varchar(20) NOT NULL,
  `tip_usuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`cod_tp_usu`, `tip_usuario`) VALUES
('admin', 'Administrador'),
('usuario', 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cod_usuario` int(20) NOT NULL,
  `nom_usuario` varchar(250) NOT NULL,
  `contrasena` varchar(250) NOT NULL,
  `correo_elec` varchar(250) NOT NULL,
  `num_telefono` varchar(250) NOT NULL,
  `ref_tp_usurio` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `nom_usuario`, `contrasena`, `correo_elec`, `num_telefono`, `ref_tp_usurio`) VALUES
(1, 'administrador', '123456', 'correo@correo.com', '0412-6420093', 'admin'),
(2, 'cliente', '123456', 'correo@correo.com', '0412-6420093', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `competicion`
--
ALTER TABLE `competicion`
  ADD PRIMARY KEY (`cod_competicion`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`cod_equipo`);

--
-- Indices de la tabla `partidos`
--
ALTER TABLE `partidos`
  ADD PRIMARY KEY (`cod_partido`),
  ADD KEY `ref_equi_loc` (`ref_equi_loc`),
  ADD KEY `ref_competicion` (`ref_competicion`),
  ADD KEY `ref_equi_visi` (`ref_equi_visi`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`cod_tp_usu`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`),
  ADD KEY `ref_tp_usurio` (`ref_tp_usurio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `competicion`
--
ALTER TABLE `competicion`
  MODIFY `cod_competicion` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `cod_equipo` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `partidos`
--
ALTER TABLE `partidos`
  MODIFY `cod_partido` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `partidos`
--
ALTER TABLE `partidos`
  ADD CONSTRAINT `partidos_ibfk_1` FOREIGN KEY (`ref_equi_loc`) REFERENCES `equipo` (`cod_equipo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `partidos_ibfk_2` FOREIGN KEY (`ref_equi_visi`) REFERENCES `equipo` (`cod_equipo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `partidos_ibfk_3` FOREIGN KEY (`ref_competicion`) REFERENCES `competicion` (`cod_competicion`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`ref_tp_usurio`) REFERENCES `tipo_usuario` (`cod_tp_usu`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
