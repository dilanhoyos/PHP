-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2019 at 06:49 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mesaAyuda`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `IDAREA` int(11) NOT NULL,
  `NOMBRE` varchar(20) NOT NULL,
  `FKEMPLE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`IDAREA`, `NOMBRE`, `FKEMPLE`) VALUES
(1, 'Oficina', NULL),
(432, 'Lavanderia', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `detallereq`
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
-- Dumping data for table `detallereq`
--

INSERT INTO `detallereq` (`IDDETALLEREQ`, `FECHA`, `OBSERVACION`, `FKEMPLE`, `FKREQ`, `FKESTADO`, `FKEMPLEASIG`) VALUES
(123, '0000-00-00', 'FSEFSFESF', 1234, 12, 1, 67564),
(1111111, '0000-00-00', 'dsfsdfsdfsdfdsfdfs', 434343, 12, 1, 67564);

-- --------------------------------------------------------

--
-- Table structure for table `empleado`
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
-- Dumping data for table `empleado`
--

INSERT INTO `empleado` (`IDEMPLEADO`, `NOMBRE`, `TELEFONO`, `CARGO`, `EMAIL`, `FKAREA`, `FKEMPLE`) VALUES
(1234, 'Yorman Paul m ', '43214', 'Tester', 'yor@e.com', 1, 434343),
(67564, 'Dilan', '6789', 'Desarrollador', 'hoyosdilan@outlook.com', 1, 1234),
(434343, 'fgdgfd', '3434', 'dfg', 'y@g.com', 432, 67564);

-- --------------------------------------------------------

--
-- Table structure for table `estado`
--

CREATE TABLE `estado` (
  `IDESTADO` int(11) NOT NULL,
  `NOMBRE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estado`
--

INSERT INTO `estado` (`IDESTADO`, `NOMBRE`) VALUES
(1, 'COMPLETADO');

-- --------------------------------------------------------

--
-- Table structure for table `requisito`
--

CREATE TABLE `requisito` (
  `IDREQ` int(11) NOT NULL,
  `FKAREA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requisito`
--

INSERT INTO `requisito` (`IDREQ`, `FKAREA`) VALUES
(12, 432);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`IDAREA`),
  ADD KEY `CONS_FKEMPLE` (`FKEMPLE`);

--
-- Indexes for table `detallereq`
--
ALTER TABLE `detallereq`
  ADD PRIMARY KEY (`IDDETALLEREQ`),
  ADD KEY `CONS_FKEMPLE2` (`FKEMPLE`),
  ADD KEY `CONS_FKREQ` (`FKREQ`),
  ADD KEY `CONS_ESTADO` (`FKESTADO`),
  ADD KEY `CONS_FKEMPLEASIG` (`FKEMPLEASIG`);

--
-- Indexes for table `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`IDEMPLEADO`),
  ADD KEY `CONS_FKAREA` (`FKAREA`),
  ADD KEY `CONS_FKEMPLE1` (`FKEMPLE`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`IDESTADO`);

--
-- Indexes for table `requisito`
--
ALTER TABLE `requisito`
  ADD PRIMARY KEY (`IDREQ`),
  ADD KEY `CONS_FKAREA1` (`FKAREA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detallereq`
--
ALTER TABLE `detallereq`
  MODIFY `IDDETALLEREQ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1111112;
--
-- AUTO_INCREMENT for table `requisito`
--
ALTER TABLE `requisito`
  MODIFY `IDREQ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `CONS_FKEMPLE` FOREIGN KEY (`FKEMPLE`) REFERENCES `empleado` (`IDEMPLEADO`);

--
-- Constraints for table `detallereq`
--
ALTER TABLE `detallereq`
  ADD CONSTRAINT `CONS_ESTADO` FOREIGN KEY (`FKESTADO`) REFERENCES `estado` (`IDESTADO`),
  ADD CONSTRAINT `CONS_FKEMPLE2` FOREIGN KEY (`FKEMPLE`) REFERENCES `empleado` (`IDEMPLEADO`),
  ADD CONSTRAINT `CONS_FKEMPLEASIG` FOREIGN KEY (`FKEMPLEASIG`) REFERENCES `empleado` (`IDEMPLEADO`),
  ADD CONSTRAINT `CONS_FKREQ` FOREIGN KEY (`FKREQ`) REFERENCES `requisito` (`IDREQ`);

--
-- Constraints for table `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `CONS_FKAREA` FOREIGN KEY (`FKAREA`) REFERENCES `area` (`IDAREA`),
  ADD CONSTRAINT `CONS_FKEMPLE1` FOREIGN KEY (`FKEMPLE`) REFERENCES `empleado` (`IDEMPLEADO`);

--
-- Constraints for table `requisito`
--
ALTER TABLE `requisito`
  ADD CONSTRAINT `CONS_FKAREA1` FOREIGN KEY (`FKAREA`) REFERENCES `area` (`IDAREA`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
