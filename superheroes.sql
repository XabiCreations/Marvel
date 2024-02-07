-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-03-2023 a las 13:44:31
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `superheroes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `superheroe`
--

CREATE TABLE `superheroe` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `categoria` varchar(20) DEFAULT NULL,
  `fuerza` int(11) DEFAULT NULL,
  `imagen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `superheroe`
--

INSERT INTO `superheroe` (`id`, `nombre`, `categoria`, `fuerza`, `imagen`) VALUES
(1, 'Batman', 'Malo', 1, 'batman1080.jpg'),
(2, 'Nightwing', 'Neutro', 2, 'nightwing1080.png'),
(3, 'Groot', 'Bueno', 3, 'groot.png'),
(4, 'capiMan', 'pescanova', 800, 'capi.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `superheroe`
--
ALTER TABLE `superheroe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `superheroe`
--
ALTER TABLE `superheroe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
