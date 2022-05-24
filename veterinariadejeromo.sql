-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2020 a las 03:18:59
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinariadejeromo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Marca` varchar(100) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `Garantia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`ID`, `Nombre`, `Marca`, `Precio`, `Color`, `Garantia`) VALUES
(1, 'Alimento Cachorros-Adultos', 'ACANA', 3000, 'Cafè', '1 semana'),
(2, 'Collares', 'DUBLIN', 5000, 'Azul-Blanco-Rojo-Negro-Verde-Cafe-Amarillo-Rosa', '1 mes'),
(3, 'Correas', 'DUBLIN', 5000, 'Rojo-Negro-Amarillo-Azul-Verde', '1 mes'),
(4, 'Placas de identificacion ', 'GoTags', 3000, 'Plateada', '2 meses'),
(5, 'Champu', 'MENFORSAN', 10000, 'Crema', 'Sin garantia'),
(6, 'Jabon AntiPulgas', 'ASUNTOL', 6000, 'Blanco', 'Sin garantia'),
(7, 'Cepillo de peinar', 'BIKIEN', 5500, 'Azul-Blanco-Negro-Rojo', '1 mes'),
(8, 'Ropa', 'IS PET', 10000, 'Cualquier color', '1 mes'),
(9, 'Corta Uñas', 'PECUTE', 8000, 'Plateado', '3 meses'),
(10, 'Camas', 'ARISTOPET', 15000, 'Cualquier color', '3 meses'),
(11, 'Tapetes', 'PETYS', 22000, 'Verde-Azul-Negro', '3 meses'),
(12, 'Transportadora', 'PETEGO PRO', 17500, 'Gris-Nero', '3 meses'),
(13, 'Bozal', 'BASKERVILLE', 5000, 'Negro', '1 mes'),
(14, 'Casas', 'PETSFIT', 25000, 'Cualquier color', '1 mes'),
(15, 'Peluches', 'WUAPU', 1500, 'Cualquier color', '1 mes'),
(16, 'Dispensador de alimento y agua', 'XIAPIA', 5000, 'Negro-Blanco-Gris-Rojo', 'Sin garantia'),
(17, 'Pecheras', 'MANIQUI JORDAN PRINDLE', 3000, 'Cualquier color', '1 mes'),
(18, 'Silbato Corrector', 'ACME', 2500, 'Cualquier color', 'Sin garantia'),
(19, 'Clicker para entrenamiento', 'ANSELF', 7500, 'Cualquier color', '1 mes'),
(20, 'Bolas de Juguete', 'UEETEK', 1000, 'Rojo-Negro-Blanco-Verde-Azul-Amarillo', 'Sin garantia'),
(21, 'Paja Natural', 'JR FARM', 1500, 'Paja', 'Sin garantia'),
(22, 'Rasqueta CortaNudos', 'OMORC', 12600, 'Blanco', 'Sin garantia'),
(23, 'Cepillo dental', 'TRIXIE', 2500, 'Blanco', 'Sin garantia'),
(24, 'Kit de Gromming', 'WAHL PET-PRO ', 35000, 'Plateado', '3 meses'),
(25, 'Contenedor para Alimento', 'TIOVERY', 24000, 'Blanco', '1 mes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Precio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`ID`, `Nombre`, `Precio`) VALUES
(1, 'Cirugias', '50.000-150.000'),
(2, 'Consulta general y especializada', '20.000'),
(3, 'Prótesis, Ortesis, Silla de Ruedas y Rehabilitación', '200.000'),
(4, 'Imagenología', '15.000'),
(5, 'Laboratorio', '15.000'),
(6, 'Microchip de identificación', '25.000'),
(7, 'Odontología', '25.000'),
(8, 'Peluquería', '10.000'),
(9, 'Vacunación y desparasitación', '10.000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
