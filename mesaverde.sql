-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2020 a las 22:13:11
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mesaverde`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `idCompra` int(10) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `valorTotal` int(5) NOT NULL,
  `idProducto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`idCompra`, `cantidad`, `valorTotal`, `idProducto`) VALUES
(1, 2, 20, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_product_detail`
--

CREATE TABLE `tbl_product_detail` (
  `product_id` int(11) NOT NULL,
  `item_number` varchar(255) CHARACTER SET latin1 NOT NULL,
  `product_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `product_img` varchar(255) CHARACTER SET latin1 NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_currency` varchar(255) CHARACTER SET latin1 NOT NULL,
  `product_dec` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_product_detail`
--

INSERT INTO `tbl_product_detail` (`product_id`, `item_number`, `product_name`, `product_img`, `product_price`, `product_currency`, `product_dec`) VALUES
(1, 'MQ==', 'Planta', 'img/1.jpg', 5, 'USD', 'Este equipo convertible, repleto de recursos fant&aacute;sticos, posee una bisagra que gira 360 grados y te permite cambiar f&aacute;cilmente entre diversas posiciones (notebook, atril, tienda de campa&ntilde;a o tablet), seg&uacute;n tus necesidades de trabajo o entretenimiento.'),
(2, 'Mg==', 'Hectárea', 'img/2.jpg', 200, 'USD', 'Nikon D3300 DSLR Camera with 18 55mm VR lens: Capture photographs with true-to-life details using this DSLR camera, which features a 24.2-megapixel CMOS sensor and comes with an AF-S DX NIKKOR VR II lens, so you can snap clear shots whether you\'re a professional or just in it for the memories.'),
(3, 'Mw==', 'Otro', 'img/3.jpg', 80, 'USD', ' With a comfort wave design keyboard, a contoured laser mouse, and batteries that last, this wireless combo gives you a comfort curve without the learning curve - at home or at the office.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`idCompra`),
  ADD KEY `FkProducto` (`idProducto`);

--
-- Indices de la tabla `tbl_product_detail`
--
ALTER TABLE `tbl_product_detail`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `idCompra` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_product_detail`
--
ALTER TABLE `tbl_product_detail`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `FkProducto` FOREIGN KEY (`idProducto`) REFERENCES `tbl_product_detail` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
