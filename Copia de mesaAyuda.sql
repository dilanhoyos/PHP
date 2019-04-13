-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-04-2019 a las 18:27:21
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mesaAyuda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `IDAREA` int(11) NOT NULL,
  `NOMBRE` varchar(20) NOT NULL,
  `FKEMPLE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `area`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallereq`
--

CREATE TABLE `detallereq` (
  `IDDETALLEREQ` int(11) NOT NULL,
  `FECHA` date NOT NULL,
  `OBSERVACION` varchar(4000) NOT NULL,
  `FKEMPLE` int(11) NOT NULL,
  `FKREQ` int(11) NOT NULL,
  `FKESTADO` int(11) NOT NULL,
  `FKEMPLEASIG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detallereq`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `IDEMPLEADO` int(11) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `TELEFONO` varchar(15) NOT NULL,
  `CARGO` varchar(50) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `FKAREA` int(11) NOT NULL,
  `FKEMPLE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `IDESTADO` int(11) NOT NULL,
  `NOMBRE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`IDESTADO`, `NOMBRE`) VALUES
(1, 'RADICADO'),
(2, 'ASIGNADO'),
(3, 'SOLUCIONADO PARCIALM'),
(4, 'SOLUCIONADO TOTALMEN'),
(5, 'CANCELADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `usuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasena` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisito`
--

CREATE TABLE `requisito` (
  `IDREQ` int(11) NOT NULL,
  `FKAREA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `requisito`
--

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`IDAREA`),
  ADD KEY `CONS_FKEMPLE` (`FKEMPLE`);

--
-- Indices de la tabla `detallereq`
--
ALTER TABLE `detallereq`
  ADD PRIMARY KEY (`IDDETALLEREQ`),
  ADD KEY `CONS_FKEMPLE2` (`FKEMPLE`),
  ADD KEY `CONS_FKREQ` (`FKREQ`),
  ADD KEY `CONS_ESTADO` (`FKESTADO`),
  ADD KEY `CONS_FKEMPLEASIG` (`FKEMPLEASIG`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`IDEMPLEADO`),
  ADD KEY `CONS_FKAREA` (`FKAREA`),
  ADD KEY `CONS_FKEMPLE1` (`FKEMPLE`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`IDESTADO`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `requisito`
--
ALTER TABLE `requisito`
  ADD PRIMARY KEY (`IDREQ`),
  ADD KEY `CONS_FKAREA1` (`FKAREA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detallereq`
--
ALTER TABLE `detallereq`
  MODIFY `IDDETALLEREQ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1111127;
--
-- AUTO_INCREMENT de la tabla `requisito`
--
ALTER TABLE `requisito`
  MODIFY `IDREQ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `CONS_FKEMPLE` FOREIGN KEY (`FKEMPLE`) REFERENCES `empleado` (`IDEMPLEADO`);

--
-- Filtros para la tabla `detallereq`
--
ALTER TABLE `detallereq`
  ADD CONSTRAINT `CONS_ESTADO` FOREIGN KEY (`FKESTADO`) REFERENCES `estado` (`IDESTADO`),
  ADD CONSTRAINT `CONS_FKEMPLE2` FOREIGN KEY (`FKEMPLE`) REFERENCES `empleado` (`IDEMPLEADO`),
  ADD CONSTRAINT `CONS_FKEMPLEASIG` FOREIGN KEY (`FKEMPLEASIG`) REFERENCES `empleado` (`IDEMPLEADO`),
  ADD CONSTRAINT `CONS_FKREQ` FOREIGN KEY (`FKREQ`) REFERENCES `requisito` (`IDREQ`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `CONS_FKAREA` FOREIGN KEY (`FKAREA`) REFERENCES `area` (`IDAREA`),
  ADD CONSTRAINT `CONS_FKEMPLE1` FOREIGN KEY (`FKEMPLE`) REFERENCES `empleado` (`IDEMPLEADO`);

--
-- Filtros para la tabla `requisito`
--
ALTER TABLE `requisito`
  ADD CONSTRAINT `CONS_FKAREA1` FOREIGN KEY (`FKAREA`) REFERENCES `area` (`IDAREA`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
