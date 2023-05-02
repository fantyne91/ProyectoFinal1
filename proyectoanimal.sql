-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 06:07 PM
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
  `foto` varchar(100) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `tamaño` varchar(13) DEFAULT 'mediano',
  `raza` varchar(20) NOT NULL,
  `color` varchar(15) NOT NULL,
  `cc` varchar(19) DEFAULT NULL,
  `ciudad` varchar(17) NOT NULL,
  `info` varchar(340) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animales`
--

INSERT INTO `animales` (`id`, `foto`, `tipo`, `tamaño`, `raza`, `color`, `cc`, `ciudad`, `info`, `correo`, `fecha`) VALUES
(326, '../vista/img/publicados/bulldog-1047518_1280negro.jpg', 'perro', 'mediano', 'bulldog', 'negro', 'cataluña', 'barcelona', '', 'emilia@gmail.com', '2023-04-28 22:00:00'),
(328, '../vista/img/publicados/blanco.jpg', 'perro', 'mediano', '', 'blanco', '', 'barcelona', '', 'emilia@gmail.com', '2023-04-28 22:00:00'),
(329, '../vista/img/publicados/dog-287420_1280negro.jpg', 'perro', 'mediano', 'san bernardo', 'negro', '', 'madrid', '', 'emilia@gmail.com', '2023-04-28 22:00:00'),
(330, '../vista/img/publicados/istockphoto-1402891368-.jpg', 'perro', 'mediano', 'dachshund', 'marron', '', 'madrid', '', 'emilia@gmail.com', '2023-04-28 22:00:00'),
(331, '../vista/img/publicados/dachshund-1519374_1280negro.jpg', 'perro', 'mediano', '', 'negro', '', 'sevilla', '', 'emilia@gmail.com', '2023-04-28 22:00:00'),
(332, '../vista/img/publicados/dog-1851107_1280marron.jpg', 'perro', 'mediano', '', 'marron', '', 'sevilla', '', 'emilia@gmail.com', '2023-04-28 22:00:00'),
(333, '../vista/img/publicados/rhodesian-ridgeback-272703marron.jpg', 'perro', 'mediano', '', 'marron', '', 'huelva', '', 'emilia@gmail.com', '2023-04-28 22:00:00'),
(334, '../vista/img/publicados/dog-2810484_1280.jpg', 'perro', 'mediano', '', 'blanco', '', 'sevilla', '', 'emilia@gmail.com', '2023-04-28 22:00:00'),
(335, '../vista/img/publicados/puppy-1118584_1280.jpg', 'perro', 'mediano', '', 'marron', '', 'sevilla', '', 'emilia@gmail.com', '2023-04-28 22:00:00'),
(339, '../vista/img/publicados/duke.png', 'perro', 'mediano', 'pitbull', 'marron', '', 'barcelona', 'Su nombre es DUKE, lo usaban de Sparring y fue mi primera acogida. Ahora es un perrete feliz conmigo ya que acabé adoptandolo.', 'mj_of@hotmail.com', '2023-04-28 22:00:00'),
(345, '../vista/img/publicados/1682852732666ff.jpg', 'perro', 'mediano', 'labrador', 'blanco', '', 'barcelona', 'Wanda, una labradora que tenian atada las 24h del dia en una terraza. Felizmente adoptada por unos amigos, donde es la reina de la casa.', 'mj_of@hotmail.com', '2023-04-29 22:00:00'),
(346, '../vista/img/publicados/1682852732720ad.jpg', 'perro', 'mediano', 'podenco', 'marron', '', 'barcelona', 'Boni, una podenca que usaban para criar. Felizmente adoptada.', 'mj_of@hotmail.com', '2023-04-29 22:00:00'),
(347, '../vista/img/publicados/1682852732791yr.jpg', 'perro', 'mediano', '', 'marron', '', 'barcelona', 'PEKO, un perrito que tenia problemas de conducta. Felizmente adoptado.', 'mj_of@hotmail.com', '2023-04-29 22:00:00'),
(348, '../vista/img/publicados/we.jpg', 'perro', 'mediano', '', 'negro', '', 'barcelona', 'Luna, se quedó sin familia al morir su dueña. Felizmente adoptada.', 'mj_of@hotmail.com', '2023-04-29 22:00:00'),
(349, '../vista/img/publicados/1682852732920r.jpg', 'perro', 'mediano', 'podenco', 'blanco', '', 'barcelona', 'Luna, abandonada porque no servía para cazar. Felizmente adoptada.', 'mj_of@hotmail.com', '2023-04-29 22:00:00'),
(350, '../vista/img/publicados/1682852732899dw.jpg', 'perro', 'mediano', 'pitbull', 'negro', '', 'barcelona', 'Un bebé de una camada abandonada.', 'mj_of@hotmail.com', '2023-04-29 22:00:00'),
(351, '../vista/img/publicados/1682852732765e.jpg', 'perro', 'mediano', '', 'negro', '', 'barcelona', 'Peko, abandonado por problemas de conducta. Felizmente adoptado.', 'mj_of@hotmail.com', '2023-04-29 22:00:00'),
(352, '../vista/img/publicados/1682852732644e.jpg', 'perro', 'mediano', '', 'marron', '', 'barcelona', 'Un bebé que alguien tenía en malas condiciones. Felizmente adoptado.', 'mj_of@hotmail.com', '2023-04-29 22:00:00'),
(364, '../vista/img/publicados/1682852732560f.jpg', 'perro', 'mediano', '', 'marron', '', 'barcelona', '', 'juan@hotmail.com', '2023-05-01 14:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `protectora_animal`
--

CREATE TABLE `protectora_animal` (
  `id_animal` int(11) NOT NULL,
  `nombreP` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `protectora_animal`
--

INSERT INTO `protectora_animal` (`id_animal`, `nombreP`) VALUES
(326, 'PERROS Y GATOS'),
(328, 'PERROS Y GATOS'),
(329, 'PERROS Y GATOS'),
(330, 'PERROS Y GATOS'),
(331, 'PERROS Y GATOS'),
(332, 'PERROS Y GATOS'),
(333, 'PERROS Y GATOS'),
(334, 'PERROS Y GATOS'),
(335, 'PERROS Y GATOS'),
(339, 'PERROS Y GATOS'),
(345, 'PERROS Y GATOS'),
(346, 'PERROS Y GATOS'),
(347, 'PERROS Y GATOS'),
(348, 'PERROS Y GATOS'),
(349, 'PERROS Y GATOS'),
(350, 'PERROS Y GATOS'),
(351, 'PERROS Y GATOS'),
(352, 'PERROS Y GATOS'),
(364, 'girasol');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `pw` varchar(10) NOT NULL,
  `nombreP` varchar(30) DEFAULT NULL,
  `info` varchar(320) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `pw`, `nombreP`, `info`, `fecha`) VALUES
(1, 'Maria', 'Ortiz', 'mj_of@hotmail.com', '123', 'PERROS Y GATOS', 'rere', '2023-04-27'),
(377, '', '', 'ana@gmail.com', '123', NULL, '', '2023-04-27'),
(378, '', '', 'luisa@gmail.com', '123', 'rosas', '', '2023-04-27'),
(381, '', '', 'emilia@gmail.com', '123', NULL, '', '2023-04-29'),
(390, 'juan', '', 'juan@hotmail.com', '123', 'girasol', '', '2023-05-01');

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
-- Indexes for table `protectora_animal`
--
ALTER TABLE `protectora_animal`
  ADD KEY `nombreP` (`nombreP`),
  ADD KEY `id` (`id_animal`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `correo` (`correo`) USING BTREE,
  ADD UNIQUE KEY `nombreP` (`nombreP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animales`
--
ALTER TABLE `animales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=365;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=391;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animales`
--
ALTER TABLE `animales`
  ADD CONSTRAINT `animales_ibfk_1` FOREIGN KEY (`correo`) REFERENCES `usuarios` (`correo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `protectora_animal`
--
ALTER TABLE `protectora_animal`
  ADD CONSTRAINT `protectora_animal_ibfk_3` FOREIGN KEY (`id_animal`) REFERENCES `animales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `protectora_animal_ibfk_4` FOREIGN KEY (`nombreP`) REFERENCES `usuarios` (`nombreP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
