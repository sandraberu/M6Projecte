-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 13-05-2022 a les 19:22:04
-- Versió del servidor: 10.4.14-MariaDB
-- Versió de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `projecte`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `productes`
--

CREATE TABLE `productes` (
  `id` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Preu` int(6) NOT NULL,
  `Stock` int(3) NOT NULL,
  `Mides` varchar(255) NOT NULL,
  `Descripcio` varchar(255) NOT NULL,
  `Imatge` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `productes`
--

INSERT INTO `productes` (`id`, `Nom`, `Preu`, `Stock`, `Mides`, `Descripcio`, `Imatge`) VALUES
(1, 'abc', 21, 23, 'dsds', 'sdsdsdsdsd', 'https://thumb.pccomponentes.com/w-530-530/articles/1009/10097416/1345-acer-nitro-5-an515-56-intel-core-i5-11300h-8gb-512gb-ssd-gtx-1650-156.jpg'),
(3, 'asdasd', 45, 45, '45', 'sad', 'https://thumb.pccomponentes.com/w-530-530/articles/1009/10097416/1345-acer-nitro-5-an515-56-intel-core-i5-11300h-8gb-512gb-ssd-gtx-1650-156.jpg');

-- --------------------------------------------------------

--
-- Estructura de la taula `usuaris`
--

CREATE TABLE `usuaris` (
  `usuari` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `productes`
--
ALTER TABLE `productes`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `usuaris`
--
ALTER TABLE `usuaris`
  ADD PRIMARY KEY (`usuari`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `productes`
--
ALTER TABLE `productes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
