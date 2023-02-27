-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2023 at 05:39 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyectoanimal`
--

-- --------------------------------------------------------

--
-- Table structure for table `animales`
--

CREATE TABLE `animales` (
  `id` int(11) NOT NULL,
  `foto` varchar(11) NOT NULL,
  `tipo` varchar(6) NOT NULL,
  `tamaño` varchar(10) DEFAULT 'mediano',
  `raza` varchar(14) NOT NULL,
  `color` varchar(9) NOT NULL,
  `cc` varchar(15) DEFAULT NULL,
  `ciudad` varchar(10) NOT NULL,
  `info` varchar(340) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animales`
--

INSERT INTO `animales` (`id`, `foto`, `tipo`, `tamaño`, `raza`, `color`, `cc`, `ciudad`, `info`, `correo`) VALUES
(9, '', 'perro', 'mediano', '', 'rojo', '', '', '', 'mj_of@hotmail.com'),
(10, '', 'perro', 'mediano', '', 'rojo', '', '', '', 'mj_of@hotmail.com'),
(11, '', 'perro', 'mediano', '', 'rojo', '', '', '', 'mj_of@hotmail.com'),
(12, '', 'perro', 'mediano', '', 'rojo', '', '', '', 'mj_of@hotmail.com'),
(13, '', 'perro', 'mediano', 'za', '', '', '', '', 'mj_of@hotmail.com'),
(14, '', 'perro', 'mediano', 'za', '', '', '', '', 'mj_of@hotmail.com'),
(15, '', 'perro', 'mediano', 'za', '', '', '', '', 'mj_of@hotmail.com'),
(16, '', 'perro', 'mediano', 'za', '', '', '', '', 'mj_of@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `animal_usuario`
--

CREATE TABLE `animal_usuario` (
  `id` int(11) NOT NULL,
  `correo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `correo` varchar(26) NOT NULL,
  `pw` varchar(10) NOT NULL,
  `protectora` varchar(2) NOT NULL,
  `nombreP` varchar(25) NOT NULL,
  `admin` int(1) DEFAULT NULL,
  `info` varchar(320) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `correo`, `pw`, `protectora`, `nombreP`, `admin`, `info`) VALUES
('', '', '', '', '', '', NULL, 'qwe'),
('maria', 'ortiz', '666666666', '', 'no', '0', 1, ''),
('', '', 'as', 'as', 'no', '', NULL, ''),
('Maria', 'Ortiz', 'mj_of@hotmail.com', '123', 'no', '', NULL, '234'),
('Maria', 'Ortiz', 'mj_ok@hotmail.com', '234', 'no', '', NULL, ''),
('', '', 'nj', 'mj', 'no', '', NULL, ''),
('', '', 'qw', 'qw', 'no', '', NULL, ''),
('', '', 'vc', 'vc', 'no', '', NULL, ''),
('', '', 'zx', 'zx', 'no', '', NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animales`
--
ALTER TABLE `animales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CORREO` (`correo`);

--
-- Indexes for table `animal_usuario`
--
ALTER TABLE `animal_usuario`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `correo` (`correo`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`correo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animales`
--
ALTER TABLE `animales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animales`
--
ALTER TABLE `animales`
  ADD CONSTRAINT `animales_ibfk_1` FOREIGN KEY (`correo`) REFERENCES `usuarios` (`correo`);

--
-- Constraints for table `animal_usuario`
--
ALTER TABLE `animal_usuario`
  ADD CONSTRAINT `animal_usuario_ibfk_1` FOREIGN KEY (`id`) REFERENCES `animales` (`id`),
  ADD CONSTRAINT `animal_usuario_ibfk_2` FOREIGN KEY (`correo`) REFERENCES `usuarios` (`correo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
