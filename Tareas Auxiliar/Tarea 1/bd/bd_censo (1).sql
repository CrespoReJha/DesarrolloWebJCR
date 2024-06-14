-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2024 a las 06:29:10
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_censo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ocupaciones`
--

CREATE TABLE `ocupaciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ocupaciones`
--

INSERT INTO `ocupaciones` (`id`, `nombre`) VALUES
(1, 'Agricultor'),
(2, 'Programador'),
(3, 'Ing. en Ciencias de la Computacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(6) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `edad` int(3) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `ocupacion_id` tinyint(4) NOT NULL,
  `fotografia` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombres`, `apellidos`, `edad`, `sexo`, `ocupacion_id`, `fotografia`) VALUES
(123456, 'juan', 'perez', 12, 'M', 2, '66175b8b94c3d.png'),
(123457, 'Maria', 'Crespo', 23, 'F', 3, '66175d5e094f5.png'),
(123459, 'marco', 'choque', 23, 'M', 1, '66175d78196a4.png'),
(123460, 'Jhamilo', 'Crespo Rejas', 2, 'M', 3, '66175dacd8d6c.png'),
(123461, 'Ut deserunt ad porro', 'Debitis lorem dolori', 60, 'M', 2, '665ca37e9dbdd.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` tinyint(4) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nivel` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `password`, `nivel`) VALUES
(1, 'admin@sis256.com', '0f3fde0103dd44077c040215a2fabd09a097aecc', 1),
(2, 'usuario@sis256.com', '3c55950f0400029902b056c1492f4cc040898c79', 0),
(3, 'hola123@sis255.com', '0f3fde0103dd44077c040215a2fabd09a097aecc', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ocupaciones`
--
ALTER TABLE `ocupaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ocupaciones`
--
ALTER TABLE `ocupaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123462;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
