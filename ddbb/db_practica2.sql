-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-01-2021 a las 16:29:39
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_practica2`
--
CREATE DATABASE IF NOT EXISTS `db_practica2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_practica2`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativas`
--

CREATE TABLE `administrativas` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrativas`
--

INSERT INTO `administrativas` (`id_admin`, `email`, `password`) VALUES
(1, 'Albert@gmail.com', '12345'),
(2, 'Pablo@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre_empleados` varchar(250) NOT NULL,
  `apellido1_empleados` varchar(250) NOT NULL,
  `apellido2_empleados` varchar(250) NOT NULL,
  `fecha_empleado` date NOT NULL,
  `sueldo_empleado` int(11) NOT NULL,
  `complementos_empleado` int(11) NOT NULL,
  `email_empleado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre_empleados`, `apellido1_empleados`, `apellido2_empleados`, `fecha_empleado`, `sueldo_empleado`, `complementos_empleado`, `email_empleado`) VALUES
(2, 'Juan', 'Perez', 'Martinez', '2021-01-05', 1200, 300, 'juan@empleado.com'),
(4, 'rftgyhju', 'dfgyui', 'fghjki', '2020-12-29', 120, 120, 'ghj@ghjk.com'),
(6, 'rftgyhju', 'sdrfty', 'rtyu', '2020-12-28', 1200, 1200, 'rftyhju@dfghj.com'),
(7, 'rftgyhju', 'dfgh', 'dfgh', '2020-12-30', 1200, 1200, 'fcgyhuji@ghj.com'),
(9, 'rftgyhju', '5r6ty78u', 'r6ty78u', '2021-01-27', 1200, 1200, '12@12.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrativas`
--
ALTER TABLE `administrativas`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_empleado` (`email_empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrativas`
--
ALTER TABLE `administrativas`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
