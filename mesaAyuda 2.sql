-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-05-2019 a las 17:55:28
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

INSERT INTO `area` (`IDAREA`, `NOMBRE`, `FKEMPLE`) VALUES
(0, '', 654),
(1, 'Pruebas Mesa Ayuda', 654),
(2, 'pre-produccion', 432),
(3, 'YRO', 654333);

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

INSERT INTO `detallereq` (`IDDETALLEREQ`, `FECHA`, `OBSERVACION`, `FKEMPLE`, `FKREQ`, `FKESTADO`, `FKEMPLEASIG`) VALUES
(1111132, '2019-04-13', 'QUE FUNCIONE', 1234, 28, 2, 111),
(1111133, '2019-04-13', 'm', 1234, 29, 3, 43635239),
(1111134, '0000-00-00', 'n', 1234, 32, 3, 1234),
(1111143, '2019-04-18', 'asdf', 1234, 41, 1, 654),
(1111144, '2019-04-18', 'SADSADASASDAD', 1234, 42, 1, 43635239),
(1111164, '2019-04-18', 'n,mkmklmlkmkmklmlmklmklmlmkl', 1234, 63, 1, 654),
(1111165, '2019-04-18', 'hola que mas', 432, 64, 1, 43635239),
(1111166, '2019-04-18', 'assasasasas', 1234, 65, 1, 654),
(1111167, '2019-04-18', 'assasasasasssssssssss', 1234, 66, 2, 432),
(1111168, '2019-04-18', 'se me daño el  mause', 1234, 67, 3, 111),
(1111169, '2019-04-19', 'No sirve algo', 1234, 68, 1, 432),
(1111170, '2019-04-26', 'jjjj', 1234, 70, 2, 1234),
(1111171, '2019-04-26', 'saldadas', 1234, 71, 2, 1234),
(1111172, '2019-04-26', 'dsdssd', 1234, 72, 1, NULL),
(1111173, '2019-04-26', 'as,dlsadl;asd', 1234, 73, 2, 432),
(1111174, '2019-04-26', 'hola que ms me dormire', 1234, 74, 3, 1234),
(1111175, '2019-04-26', 'DSD', 1234, 75, 1, NULL),
(1111176, '2019-04-26', 's', 1234, 76, 2, 654),
(1111177, '2019-04-27', 's', 1234, 77, 2, 1234),
(1111178, '2019-04-27', 'por fin', 1234, 78, 2, 1234),
(1111179, '2019-04-27', 'sss', 1234, 79, 2, 1234),
(1111180, '2019-04-27', 'esta mejor asi', 1234, 80, 2, 1234),
(1111181, '2019-04-27', 'ssss', 1234, 81, 2, 1234),
(1111182, '2019-04-27', 'zxzxz', 1234, 82, 2, 1234),
(1111183, '2019-04-27', 'jajaajjajaj', 1234, 83, 2, 1234),
(1111184, '2019-04-27', 'dilan es mejor asi', 1234, 84, 2, 1234),
(1111185, '2019-04-27', 'BUENO ESPERO ESTO SI ESTE FUNCIONANDO', 1234, 85, 2, 1234),
(1111186, '2019-04-27', 'AJAAJAJJAAJAJJ HOLA QUIERO DORMIR', 1234, 86, 2, 1234),
(1111187, '2019-04-27', 'Esta mala la pantalla', 1234, 87, 3, 1234),
(1111188, '2019-05-01', 'hola que mas', 1234, 88, 2, 432);

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

INSERT INTO `empleado` (`IDEMPLEADO`, `NOMBRE`, `TELEFONO`, `CARGO`, `EMAIL`, `FKAREA`, `FKEMPLE`) VALUES
(111, 'sss', '3333', 'Administrador', 'fesfsefs@d.com', 1, 654),
(432, 'Dilan Andres Hoyos', '123456', 'Jefe de Area', 'hoyosdilan@outlook.com', 1, 1234),
(654, 'Pedrito', '1111222', 'Jefe de Area', 'hfrnfy@jfu.co', 1, 432),
(1234, 'Yorman Paul ma', '43214', 'Tester', 'yor@e.com', 1, NULL),
(654333, 'Pedrito', '1111222', 'Jefe de Area', 'hfrnfy@jfu.co', 1, 432),
(43635239, 'Sandra Acevedo', '5285293', 'Administrador', 'smilena@hotmail.com', 1, 1234);

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
  `rol` int(11) NOT NULL,
  `FKEMPLE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`usuario`, `contrasena`, `rol`, `FKEMPLE`) VALUES
('yorman', '1234', 0, 1234);

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

INSERT INTO `requisito` (`IDREQ`, `FKAREA`) VALUES
(76, 0),
(28, 1),
(29, 1),
(38, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(64, 1),
(67, 1),
(75, 1),
(80, 1),
(82, 1),
(85, 1),
(87, 1),
(88, 1),
(32, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(39, 2),
(40, 2),
(52, 2),
(53, 2),
(54, 2),
(63, 2),
(65, 2),
(66, 2),
(68, 2),
(70, 2),
(71, 2),
(72, 2),
(73, 2),
(74, 2),
(77, 2),
(78, 2),
(79, 2),
(81, 2),
(83, 2),
(84, 2),
(86, 2);

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
  MODIFY `IDDETALLEREQ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1111189;
--
-- AUTO_INCREMENT de la tabla `requisito`
--
ALTER TABLE `requisito`
  MODIFY `IDREQ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
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
