-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 18-05-2022 a les 21:19:55
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
  `Preu` decimal(6,0) NOT NULL,
  `Stock` int(3) NOT NULL,
  `Mides` varchar(255) NOT NULL,
  `Descripcio` varchar(535) NOT NULL,
  `Imatge` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `productes`
--

INSERT INTO `productes` (`id`, `Nom`, `Preu`, `Stock`, `Mides`, `Descripcio`, `Imatge`) VALUES
(1, 'MSI Prestige 15 A11UC-096XES Intel Core i7-1195G7/32GB/1TB SSD/RTX 3050/15.6\"', '1399', 13, '356.8(W) x 233.7(D) x 16.9(H) mm', 'MSI aprovecha el espíritu de exploración y creatividad al diseñar la mejor colección de computadoras portátiles: la serie Prestige. Para seguir empujando los límites creativos, estas máquinas finamente diseñadas no solo muestran un gusto único, sino que t', 'https://thumb.pccomponentes.com/w-530-530/articles/76/761627/1133-msi-prestige-15-a11uc-096xes-intel-core-i7-1195g7-32gb-1tb-ssd-rtx-3050-156.jpg'),
(2, 'Xiaomi Redmi Note 11 Pro Plus 5G 8/256GB', '369', 45, '163.65 x 76.19 x 8.34 mm', 'Redmi Note 11 Pro+ 5G tiene una batería de larga duración de 4500 mAh (típica) con HyperCharge de 120W, cámara principal de grado profesional de 108MP con objetivos ultra gran angular y macro, pantalla DotDisplay AMOLED FHD+ de 120 Hz, altavoces duales co', 'https://thumb.pccomponentes.com/w-530-530/articles/1020/10208370/1413-xiaomi-redmi-note-11-pro-plus-5g-8-256gb-gris-libre.jpg'),
(3, 'MSI GeForce RTX 3070 VENTUS 2X OC LHR 8GB GDDR6', '649', 19, 'Profundidad: 52 mm Altura: 124 mm Ancho: 232 mm', 'RTX.  IT’S ON. Disfruta de los mayores éxitos de ventas de hoy como nunca antes con la fidelidad visual del trazado de rayos en tiempo real y el rendimiento definitivo de DLSS con tecnología de IA.', 'https://thumb.pccomponentes.com/w-530-530/articles/57/571988/1207-msi-geforce-rtx-3070-ventus-2x-oc-lhr-8gb-gddr6-opiniones.jpg'),
(4, 'AMD Ryzen 7 5800X 3.8GHz', '339', 24, '198x154', 'El procesador que permite disfrutar una experiencia de juego de élite. Ocho núcleos optimizados para computadoras de juego con alto FPS.', 'https://thumb.pccomponentes.com/w-530-530/articles/32/328473/168-amd-ryzen-7-5800x-38ghz.jpg'),
(5, 'HP X27 27\" LED IPS FullHD 165Hz FreeSync Premium', '284', 15, 'Ancho: 613,5mm Profundidad: 211,5mm Altura: 512,4mm', 'Juega durante más tiempo, de forma más cómoda y con una precisión asombrosa en nuestro paquete de monitores de juegos. Hemos redefinido los juegos de alta definición con tecnología de panel IPS, 165 Hz, tiempo de respuesta de 1 ms, AMD FreeSync™ Premium ', 'https://thumb.pccomponentes.com/w-530-530/articles/51/513908/1635-hp-x27-27-led-ips-fullhd-165hz-freesync-premium.jpg'),
(6, 'HP Omen Spacer TKL Teclado Mecánico Gaming Inalámbrico Cherry MX Brown', '158', 42, '369,3 x 139,5 x 36 mm', 'Sin cables. Sin complicaciones. Ya puedes tener una conexión fiable y constante tan rápida como por cable; además de 100 millones de pulsaciones garantizadas gracias a los conmutadores CHERRY MX marrones.', 'https://thumb.pccomponentes.com/w-530-530/articles/36/362838/1276-hp-omen-spacer-tkl-teclado-mecanico-gaming-inalambrico-cherry-mx-brown.jpg');

-- --------------------------------------------------------

--
-- Estructura de la taula `usuaris`
--

CREATE TABLE `usuaris` (
  `id` int(10) NOT NULL,
  `Contrassenya` varchar(255) NOT NULL,
  `Rol` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Usuari` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `usuaris`
--

INSERT INTO `usuaris` (`id`, `Contrassenya`, `Rol`, `Nom`, `Usuari`) VALUES
(2, 'sandra1234', 'editor', 'Sandra', 'sandra'),
(3, 'sergi1234', 'admin', 'Sergi', 'sergi'),
(5, 'anton1234', 'admin', 'Anton', 'anton');

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `productes`
--
ALTER TABLE `productes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la taula `usuaris`
--
ALTER TABLE `usuaris`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
