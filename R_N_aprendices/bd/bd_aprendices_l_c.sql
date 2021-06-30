-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2021 a las 19:28:08
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_aprendices_l_c`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendices`
--

CREATE TABLE `aprendices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aprendices`
--

INSERT INTO `aprendices` (`id`, `nombre`) VALUES
(2, 'juan'),
(3, 'MAYE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha_nacimiento`
--

CREATE TABLE `fecha_nacimiento` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha_de_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Genero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id`, `Genero`) VALUES
(1, 'masculino'),
(2, 'femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre`) VALUES
(1, 'matematicas'),
(2, 'castellano'),
(3, 'biologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas_aprendices_materias`
--

CREATE TABLE `notas_aprendices_materias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_aprendices` bigint(20) UNSIGNED NOT NULL,
  `id_materia` bigint(20) UNSIGNED NOT NULL,
  `puntaje` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `notas_aprendices_materias`
--

INSERT INTO `notas_aprendices_materias` (`id`, `id_aprendices`, `id_materia`, `puntaje`) VALUES
(18, 2, 2, '13.00'),
(30, 3, 1, '10.00'),
(31, 3, 2, '1.00'),
(32, 2, 1, '4.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aprendices`
--
ALTER TABLE `aprendices`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fecha_nacimiento`
--
ALTER TABLE `fecha_nacimiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notas_aprendices_materias`
--
ALTER TABLE `notas_aprendices_materias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_aprendices` (`id_aprendices`),
  ADD KEY `id_materia` (`id_materia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aprendices`
--
ALTER TABLE `aprendices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `fecha_nacimiento`
--
ALTER TABLE `fecha_nacimiento`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `notas_aprendices_materias`
--
ALTER TABLE `notas_aprendices_materias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fecha_nacimiento`
--
ALTER TABLE `fecha_nacimiento`
  ADD CONSTRAINT `fecha_nacimiento_ibfk_1` FOREIGN KEY (`id`) REFERENCES `genero` (`id`);

--
-- Filtros para la tabla `notas_aprendices_materias`
--
ALTER TABLE `notas_aprendices_materias`
  ADD CONSTRAINT `notas_aprendices_materias_ibfk_1` FOREIGN KEY (`id_aprendices`) REFERENCES `aprendices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notas_aprendices_materias_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
