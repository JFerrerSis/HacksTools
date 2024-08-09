-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2024 a las 20:26:38
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hackstools`
--
CREATE DATABASE IF NOT EXISTS `hackstools` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hackstools`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distribucion`
--

CREATE TABLE `distribucion` (
  `id_linux` int(11) NOT NULL,
  `distribucion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `distribucion`
--

INSERT INTO `distribucion` (`id_linux`, `distribucion`) VALUES
(1, 'kali linux'),
(2, 'ubuntu'),
(3, 'debian'),
(4, 'linux mint'),
(5, 'arch linux');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form`
--

CREATE TABLE `form` (
  `id_form` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `edad` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `id_tools` int(11) NOT NULL,
  `id_linux` int(11) NOT NULL,
  `feha_creacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `form`
--

INSERT INTO `form` (`id_form`, `nombre`, `correo`, `numero`, `edad`, `usuario`, `id_tools`, `id_linux`, `feha_creacion`) VALUES
(1, 'jorge', 'jorgeferrercohen@gmail.com', '04246334784', '19', 'valle frio', 7, 1, '2024-08-09'),
(2, 'derl', 'hduauhd@gmail.com', '04146355857', '30', 'san francisco', 2, 4, '2024-08-09');

--
-- Disparadores `form`
--
DELIMITER $$
CREATE TRIGGER `respaldo` AFTER INSERT ON `form` FOR EACH ROW INSERT INTO respaldo_form (id_form, nombre, correo, numero, edad, usuario, id_linux, id_tools, feha_creacion) VALUES (NEW.id_form, NEW.nombre, NEW.correo, NEW.numero, NEW.edad, NEW.usuario, NEW.id_linux, NEW.id_tools, CURRENT_TIMESTAMP)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respaldo_form`
--

CREATE TABLE `respaldo_form` (
  `id_respaldo` int(11) NOT NULL,
  `id_form` int(11) NOT NULL DEFAULT 0,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `id_tools` int(11) NOT NULL,
  `id_linux` int(11) NOT NULL,
  `feha_creacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `respaldo_form`
--

INSERT INTO `respaldo_form` (`id_respaldo`, `id_form`, `nombre`, `correo`, `numero`, `edad`, `usuario`, `id_tools`, `id_linux`, `feha_creacion`) VALUES
(1, 1, 'aa', 'aa', 'aa', 12, 'aa', 2, 5, '2024-08-09'),
(2, 12, 'jorge', 'moiseslozanoportillo@gmail.com', '12', 12, '12jorge', 1, 3, '2024-08-09'),
(3, 13, 'Moises Lozano', 'moiseslozanoportillo@gmail.com', '12', 12, '12111', 2, 2, '2024-08-09'),
(4, 14, '3', 'jorgeferrercohen@gmail.com', '12', 121, '1211122', 3, 1, '2024-08-09'),
(5, 15, 'jorge', 'moiseslozanoportillo@gmail.coma', '111111', 1212222, 'luia', 1, 1, '2024-08-09'),
(6, 16, 'jorge', 'moiseslozanoportillo@gmail.coma', '65463464', 12, '1211122', 3, 2, '2024-08-09'),
(7, 17, 'carlos', 'anonimous@gmail.com', '041463255584', 19, 'valle frio', 8, 1, '2024-08-09'),
(8, 18, 'carlos11', 'anonimous@gmail.com11', '041463255584123132', 19, 'valle frio', 12, 2, '2024-08-09'),
(9, 1, 'jorge', 'jorgeferrercohen@gmail.com', '04246334784', 19, 'valle frio', 7, 1, '2024-08-09'),
(10, 2, 'derl', 'hduauhd@gmail.com', '04146355857', 30, 'san francisco', 2, 4, '2024-08-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tools`
--

CREATE TABLE `tools` (
  `id_tool` int(11) NOT NULL,
  `tool` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tools`
--

INSERT INTO `tools` (`id_tool`, `tool`) VALUES
(1, 'Nmap'),
(2, 'DNSenum'),
(3, 'Whois'),
(4, 'OpenVAS'),
(5, 'Nikto'),
(6, 'Metasploit'),
(7, 'John the Ripper\r\n'),
(8, 'Hashcat'),
(9, 'Aircrack-ng\r\n'),
(10, 'Hydra'),
(11, 'Kismet'),
(12, 'Wifite');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `distribucion`
--
ALTER TABLE `distribucion`
  ADD PRIMARY KEY (`id_linux`);

--
-- Indices de la tabla `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id_form`),
  ADD KEY `id_linux` (`id_linux`),
  ADD KEY `id_tools` (`id_tools`);

--
-- Indices de la tabla `respaldo_form`
--
ALTER TABLE `respaldo_form`
  ADD PRIMARY KEY (`id_respaldo`);

--
-- Indices de la tabla `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id_tool`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `distribucion`
--
ALTER TABLE `distribucion`
  MODIFY `id_linux` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `form`
--
ALTER TABLE `form`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `respaldo_form`
--
ALTER TABLE `respaldo_form`
  MODIFY `id_respaldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tools`
--
ALTER TABLE `tools`
  MODIFY `id_tool` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `form`
--
ALTER TABLE `form`
  ADD CONSTRAINT `form_ibfk_1` FOREIGN KEY (`id_linux`) REFERENCES `distribucion` (`id_linux`),
  ADD CONSTRAINT `form_ibfk_2` FOREIGN KEY (`id_tools`) REFERENCES `tools` (`id_tool`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
