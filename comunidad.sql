-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-03-2022 a las 12:56:36
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comunidad_beta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartamentos`
--

CREATE TABLE `apartamentos` (
  `id` varchar(4) NOT NULL,
  `info_apartamento` varchar(250) DEFAULT NULL,
  `codigotasa` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contadores`
--

CREATE TABLE `contadores` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `apartamento` varchar(4) DEFAULT NULL,
  `lectura` int(6) DEFAULT NULL,
  `observaciones` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(3) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `apartamento` varchar(4) NOT NULL,
  `cargo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibos`
--

CREATE TABLE `recibos` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `vivienda` varchar(3) NOT NULL,
  `recibo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `apartamento` varchar(4) NOT NULL,
  `lecturaanterior` int(10) DEFAULT NULL,
  `lecturaactual` int(10) DEFAULT NULL,
  `agua` decimal(4,2) DEFAULT NULL,
  `comunidad` decimal(4,2) DEFAULT NULL,
  `saldo` decimal(6,2) NOT NULL DEFAULT 0.00,
  `ingreso` decimal(6,2) DEFAULT NULL,
  `infovivienda` varchar(100) NOT NULL,
  `infocontador` varchar(100) NOT NULL,
  `recibo` int(1) NOT NULL,
  `adjunto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(2) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `info` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`, `info`) VALUES
(1, 'administrador', 'Acceso total a la aplicación'),
(2, 'usuario_lector_conta', 'Acceso restringido a sección CONTADORES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `rol` int(1) DEFAULT NULL,
  `clave` varchar(25) NOT NULL,
  `observaciones` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `rol`, `clave`, `observaciones`) VALUES
(1, 'Administrador', 'admin@comunidad.com', 1, 'C3562719', 'control total sobre la aplicación\r\nrol 1 = admin / rol 2 = user'),
(2, 'contadores', 'user@aplicacion.com', 2, 'Cont1He', 'usuario con acceso limitado a contadores\r\nrol 1 = admin / rol 2 = user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apartamentos`
--
ALTER TABLE `apartamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contadores`
--
ALTER TABLE `contadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recibos`
--
ALTER TABLE `recibos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contadores`
--
ALTER TABLE `contadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `recibos`
--
ALTER TABLE `recibos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
