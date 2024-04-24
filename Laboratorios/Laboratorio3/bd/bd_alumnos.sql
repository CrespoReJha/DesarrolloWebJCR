-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2024 a las 23:59:02
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
-- Base de datos: `bd_alumnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `fotografia` varchar(100) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `cu` varchar(15) NOT NULL,
  `sexo` char(1) NOT NULL,
  `codigocarrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `fotografia`, `nombres`, `apellidos`, `cu`, `sexo`, `codigocarrera`) VALUES
(1, '6629703d01503.png', 'Jhamil', 'Crespo Rejas', '111-443', 'M', 1),
(2, '6629703d0244d.png', 'Veronica', 'Quispe', '35-567', 'F', 2),
(3, '6629703d031e6.png', 'Carolina', 'Perez', '35-4684', 'F', 3),
(4, '6629715f14d26.png', 'Temporibus in est ar', 'Odit sed non dolores', '111-6546', 'M', 1),
(5, '6629715f16b14.png', 'Deserunt ut odit bea', 'Saepe sit natus id ', '111-6841', 'F', 3),
(6, '6629729be6f79.png', 'Aut mollitia et nobi', 'Ut id ipsam est lib', '111-564', 'M', 1),
(7, '6629729be7e90.png', 'Sed vitae quo minus ', 'Commodo obcaecati at', '35-684', 'F', 2),
(8, '662979700589a.png', 'Quam nesciunt tempo', 'Eos id asperiores n', 'Repreh', 'M', 2),
(9, '6629797006647.png', 'Quis et voluptate su', 'Anim architecto offi', 'Cillum ', 'F', 1),
(10, '6629798935331.png', 'Quam nesciunt tempo', 'Eos id asperiores n', 'Repreh', 'M', 2),
(11, '66297989379be.png', 'Quis et voluptate su', 'Anim architecto offi', 'Cillum ', 'F', 1),
(12, '6629799d20d53.png', 'Quam nesciunt tempo', 'Eos id asperiores n', 'Repreh', 'M', 2),
(13, '6629799d2485d.png', 'Quis et voluptate su', 'Anim architecto offi', 'Cillum ', 'F', 1),
(14, '662979a34c4e1.png', 'Quam nesciunt tempo', 'Eos id asperiores n', 'Repreh', 'M', 2),
(15, '662979a34f774.png', 'Quis et voluptate su', 'Anim architecto offi', 'Cillum ', 'F', 1),
(16, '662979a8e7078.png', 'Quam nesciunt tempo', 'Eos id asperiores n', 'Repreh', 'M', 2),
(17, '662979a8e9048.png', 'Quis et voluptate su', 'Anim architecto offi', 'Cillum ', 'F', 1),
(18, '662979cca970e.png', 'Quam nesciunt tempo', 'Eos id asperiores n', 'Repreh', 'M', 2),
(19, '662979ccaa3d2.png', 'Quis et voluptate su', 'Anim architecto offi', 'Cillum ', 'F', 1),
(20, '66297a10e6f9b.png', 'Repellendus Dolor l', 'Est est est ut cum n', 'Sequi ', 'F', 1),
(21, '66297a10ea8eb.png', 'Quia voluptas omnis ', 'Incidunt deserunt a', 'Comm', 'M', 2),
(22, '66297a370a484.png', 'Est molestiae et ten', 'Quo labore qui exerc', 'Dolores ', 'F', 3),
(23, '66297a370be90.png', 'Ratione irure omnis ', 'Aperiam voluptas ut ', 'Dolore id', 'F', 3),
(24, '66297a370ff36.png', 'Alias ad possimus f', 'Pariatur Quibusdam ', 'Proident ', 'M', 1),
(25, '66297a717ecb9.png', 'Aut nesciunt qui ad', 'Sunt voluptate tempo', 'In veri', 'F', 2),
(26, '66297a7181c19.png', 'Harum laudantium ve', 'Adipisci non enim no', 'Nisi ', 'M', 1),
(27, '66297ab814cfe.png', 'Repellendus Vitae e', 'Voluptas quia minus ', 'Conse', 'M', 1),
(28, '66297ab8182b8.png', 'Aspernatur est provi', 'Accusamus sit volup', 'Consequ', 'M', 2),
(29, '66297ab819b64.png', 'Voluptas tempora in ', 'Nam voluptatem haru', 'Dolor o', 'F', 3),
(30, '66297b36d1bd0.png', 'Quo non cupidatat ex', 'Reprehenderit odio n', 'Ut non c', 'M', 1),
(31, '66297b36d799d.png', 'Aperiam enim ea iste', 'Sed impedit sunt vo', 'Susci', 'F', 3),
(32, '66297b36d88f0.png', 'Anim asperiores sunt', 'Nulla sunt possimus', 'Et volup', 'F', 2),
(33, '66297d38774f4.png', 'Sunt voluptas saepe', 'Suscipit illo sint p', 'Perspiciati', 'F', 3),
(34, '66297d38791e4.png', 'Omnis voluptatibus e', 'Qui doloribus aut ei', 'Dolorem', 'F', 1),
(35, '66297d387a980.png', 'Pariatur Laudantium', 'In irure enim et per', 'Est d', 'F', 3),
(36, '66297d387c2b5.png', 'Ad ad velit qui ex e', 'Magni quos quis in l', 'Qui qui', 'F', 2),
(37, '66297d387df08.png', 'Ea a illum non id e', 'Ea necessitatibus ma', 'In ut et', 'M', 3),
(38, '6629801d09499.png', 'Deleniti est facere', 'Est laudantium ita', 'Quam f', 'F', 1),
(39, '6629801d09ff3.png', 'Reprehenderit odit ', 'Dolorem nihil praese', 'Nostrud s', 'M', 2),
(40, '6629801d0b53e.png', 'Aut autem esse aut ', 'Qui molestias beatae', 'Expedita e', 'M', 1),
(41, '6629801d0c1b5.png', 'In fugiat obcaecati', 'Qui impedit earum e', 'Sunt vol', 'M', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `codigo` int(11) NOT NULL,
  `carrera` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`codigo`, `carrera`) VALUES
(1, 'Ing. Ciencias de la Computacion'),
(2, 'Ing. Sistemas'),
(3, 'Ing. Diseño y Animacion');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
