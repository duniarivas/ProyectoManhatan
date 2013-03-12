-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2013 at 09:18 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `boutique`
--

-- --------------------------------------------------------

--
-- Table structure for table `caracteristicas`
--

CREATE TABLE IF NOT EXISTS `caracteristicas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla',
  `talla` varchar(100) DEFAULT NULL COMMENT 'Tamaño de prenda',
  `color` varchar(1024) DEFAULT NULL COMMENT 'Descripciòn de los colores de prenda',
  `stock` int(11) DEFAULT NULL COMMENT 'Cantidad de prendas en almacen',
  `created` datetime DEFAULT NULL COMMENT 'Fecha de inserción de datos',
  `modified` datetime DEFAULT NULL COMMENT 'Fecha de última modificación de datos',
  `item_id` int(11) NOT NULL COMMENT 'Llave foránea de la tabla item',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `caracteristicas`
--

INSERT INTO `caracteristicas` (`id`, `talla`, `color`, `stock`, `created`, `modified`, `item_id`) VALUES
(6, 'S', 'Plomo', 10, '2011-12-11 19:43:38', '2011-12-13 06:42:49', 8),
(7, 'M', 'Plomo', 10, '2011-12-13 06:41:09', '2011-12-13 06:41:09', 8),
(8, '10', 'Plateado y Rojo', 10, '2011-12-18 20:55:14', '2011-12-18 20:55:14', 28),
(9, '11', 'Plateado y Rojo', 10, '2011-12-18 20:55:31', '2011-12-18 20:55:31', 28),
(10, '12', 'Plateado y Rojo', 10, '2011-12-18 20:55:42', '2011-12-18 20:55:42', 28),
(11, '14', 'Plateado y Rojo', 10, '2011-12-18 20:55:51', '2011-12-18 20:55:51', 28),
(12, 'Unica', 'Plateado y Negro', 10, '2011-12-18 20:56:38', '2011-12-18 20:56:38', 29),
(13, 'S', 'Dorado y Rojo', 10, '2011-12-18 20:57:05', '2011-12-18 20:57:05', 30),
(14, 'M', 'Dorado y Rojo', 10, '2011-12-18 20:57:21', '2011-12-18 20:58:30', 30),
(15, 'G', 'Dorado y Rojo', 10, '2011-12-18 20:57:31', '2011-12-18 20:58:37', 30),
(16, 'Unica', 'Dorado y Negro', 10, '2011-12-18 20:57:51', '2011-12-18 20:57:51', 31),
(17, 'S', 'Combinado', 10, '2011-12-18 21:03:06', '2011-12-18 21:03:06', 9),
(18, 'M', 'Combinado', 10, '2011-12-18 21:03:21', '2011-12-18 21:03:21', 9),
(19, 'L', 'Combinado', 10, '2011-12-18 21:03:29', '2011-12-18 21:03:38', 9),
(20, 'S', 'Combinado', 10, '2011-12-18 21:03:58', '2011-12-18 21:04:06', 10),
(21, 'M', 'Combinado', 10, '2011-12-18 21:04:21', '2011-12-18 21:04:21', 10),
(22, 'M', 'Combinado Gris', 10, '2011-12-18 21:04:45', '2011-12-18 21:04:45', 11),
(23, 'L', 'Combinado Gris', 10, '2011-12-18 21:04:58', '2011-12-18 21:04:58', 11),
(24, 'XL', 'Combinado Gris', 10, '2011-12-18 21:05:12', '2011-12-18 21:05:12', 11),
(25, 'S', 'Negro', 10, '2011-12-20 04:53:28', '2011-12-20 04:53:28', 14),
(26, 'M', 'Negro', 10, '2011-12-20 04:54:29', '2011-12-20 04:54:29', 14),
(27, 'M', 'Rosado', 10, '2011-12-20 04:55:33', '2011-12-20 04:55:33', 15),
(28, 'L', 'Rosado', 10, '2011-12-20 04:57:35', '2011-12-20 04:57:35', 15),
(29, 'XL', 'Rosado', 10, '2011-12-20 04:58:01', '2011-12-20 05:02:15', 15),
(30, 'S', 'Cafe', 10, '2011-12-20 04:59:47', '2011-12-20 04:59:47', 16),
(31, 'M', 'Cafe', 10, '2011-12-20 04:59:56', '2011-12-20 04:59:56', 16),
(32, 'L', 'Cafe', 10, '2011-12-20 05:00:05', '2011-12-20 05:00:05', 16),
(33, 'S', 'Negro', 10, '2011-12-20 05:00:32', '2011-12-20 05:00:32', 17),
(34, 'S', 'Rosado', 10, '2011-12-20 05:01:01', '2011-12-20 05:01:01', 18),
(35, 'M', 'Rosado', 10, '2011-12-20 05:01:09', '2011-12-20 05:01:09', 18),
(36, 'Unica', 'Purpura', 10, '2011-12-20 05:03:37', '2011-12-20 05:03:37', 32),
(37, 'Unica', 'Purpura', 10, '2011-12-20 05:04:19', '2011-12-20 05:04:19', 33),
(38, 'Unica', 'Negro', 10, '2011-12-20 05:04:33', '2011-12-20 05:04:33', 34),
(39, 'Unica', 'Plomo', 10, '2011-12-20 05:04:50', '2011-12-20 05:04:50', 35),
(40, 'Unica', 'Cafe', 10, '2011-12-20 15:24:24', '2011-12-20 15:24:24', 19),
(41, 'Unica', 'Negro', 10, '2011-12-20 15:24:49', '2011-12-20 15:24:49', 20),
(42, 'Unica', 'Negro', 10, '2011-12-20 15:25:07', '2011-12-20 15:25:07', 21),
(43, 'Unica', 'Rojo', 10, '2011-12-20 15:25:26', '2011-12-20 15:25:26', 22),
(44, 'Unica', 'Purpura y Cafe', 10, '2011-12-20 15:26:33', '2011-12-20 15:26:33', 23),
(45, 'Unica', 'Negro', 20, '2011-12-20 15:26:51', '2011-12-20 15:26:51', 24),
(46, 'Unica', 'Plomo y Negro', 10, '2011-12-20 15:27:12', '2011-12-20 15:27:12', 25),
(47, 'Unica', 'Blanco', 10, '2011-12-20 15:27:43', '2011-12-20 15:27:43', 26),
(48, 'Unica', 'Rojo', 10, '2011-12-20 15:28:01', '2011-12-20 15:28:01', 27);

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla',
  `nombre` varchar(150) DEFAULT NULL COMMENT 'Nombre de Categoría de Prenda',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(7, 'Pantalones'),
(8, 'Vestidos'),
(9, 'Sacos'),
(10, 'Blusas'),
(11, 'Chalecos'),
(12, 'Faldas'),
(13, 'Chompas'),
(14, 'Camisas'),
(15, 'Accesorios'),
(16, 'Camperas');

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla',
  `comentario` varchar(256) DEFAULT NULL COMMENT 'Comentario realizado por un usuario',
  `created` datetime DEFAULT NULL COMMENT 'Fecha de creación del comentario',
  `usuario_id` int(11) NOT NULL COMMENT 'Llave foránea de usuario',
  `item_id` int(11) NOT NULL COMMENT 'Llave foránea de item',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario`, `created`, `usuario_id`, `item_id`) VALUES
(1, 'saco de panio ', '2011-09-27 00:54:43', 1, 1),
(2, 'Buen Item!', '2011-09-27 00:54:43', 2, 8),
(3, 'Genial xD', '2011-09-27 00:55:15', 2, 8),
(4, 'Excelente Item', '2011-10-01 15:00:43', 4, 8),
(5, NULL, '2011-12-15 03:51:04', 0, 0),
(6, 'Prueba\r\n', '2011-12-15 03:53:48', 2, 8),
(7, 'Prueba 2\r\n', '2011-12-15 03:55:18', 2, 8),
(8, 'Prueba 3', '2011-12-15 03:55:42', 2, 8),
(9, 'Me Parece Un Muy Buen Item...\r\nLo Mejor de todo...', '2011-12-18 10:43:04', 2, 8),
(10, 'Excelente Collar!', '2011-12-18 20:59:30', 2, 30),
(11, 'Bonito aretes, un poco pequeños pero bonitos', '2011-12-18 21:07:14', 2, 31),
(12, 'Excelente bufanda', '2011-12-19 19:57:12', 4, 19),
(13, 'Son un poco peque;os', '2011-12-19 22:15:02', 2, 31),
(14, 'pretty\r\n', '2011-12-19 22:25:07', 4, 31),
(15, 'GENIAL', '2011-12-21 03:08:47', 10, 35),
(16, 'es una prenda pretty', '2011-12-21 11:06:42', 13, 10),
(17, 'muy comodo', '2011-12-21 11:06:57', 13, 10),
(18, 'lindo', '2011-12-21 16:49:50', 13, 35),
(19, 'esta re lindo', '2013-03-07 21:11:02', 23, 8);

-- --------------------------------------------------------

--
-- Table structure for table `deseos`
--

CREATE TABLE IF NOT EXISTS `deseos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla',
  `usuario_id` int(11) NOT NULL COMMENT 'Llave foránea de la tabla usuario',
  `item_id` int(11) NOT NULL COMMENT 'Llave foránea de la tabla item',
  `talla` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `deseos`
--

INSERT INTO `deseos` (`id`, `usuario_id`, `item_id`, `talla`) VALUES
(6, 2, 8, 'S'),
(7, 4, 8, 'M'),
(8, 2, 30, 'M'),
(9, 2, 31, 'Unica'),
(10, 2, 29, 'Unica'),
(11, 2, 28, '12'),
(12, 4, 31, 'Unica'),
(13, 4, 30, 'S'),
(14, 9, 31, 'Unica'),
(15, 9, 29, 'Unica'),
(17, 10, 28, '12'),
(19, 13, 10, 'S'),
(20, 13, 35, 'Unica'),
(21, 23, 35, 'Unica'),
(22, 23, 8, 'S'),
(23, 27, 22, 'Unica');

-- --------------------------------------------------------

--
-- Table structure for table `direcciones`
--

CREATE TABLE IF NOT EXISTS `direcciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla',
  `direccion1` varchar(150) DEFAULT NULL COMMENT 'Primera Línea de Dirección',
  `direccion2` varchar(150) DEFAULT NULL COMMENT 'Segunda línea de Dirección',
  `ciudad` varchar(100) DEFAULT NULL COMMENT 'Nombre de Cuidad',
  `telefono` varchar(20) DEFAULT NULL COMMENT 'Teléfono de Usuario',
  `fax` varchar(20) DEFAULT NULL COMMENT 'Fax de Usuario',
  `usuario_id` int(11) NOT NULL COMMENT 'Llave foránea de la tabla usuario',
  `paise_id` int(11) NOT NULL COMMENT 'Llave foránea de la tabla País',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `direcciones`
--

INSERT INTO `direcciones` (`id`, `direccion1`, `direccion2`, `ciudad`, `telefono`, `fax`, `usuario_id`, `paise_id`) VALUES
(2, 'Calle Los Robles', 'Esquina Jose Acha #6754', 'Cochabamba', '4322123', '', 2, 29),
(3, 'Av. 21 de Enero', 'Blanco Galindo km 8', 'Cochabamba', '4375529', '', 4, 29),
(4, 'avenida 21 de enero', 'blanco galindo km 8', 'cochabamba', '4375529', '', 13, 29);

-- --------------------------------------------------------

--
-- Table structure for table `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla',
  `url` varchar(1024) NOT NULL COMMENT 'URL de la imágen',
  `item_id` int(11) NOT NULL COMMENT 'Llave foránea de la tabla item',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `imagenes`
--

INSERT INTO `imagenes` (`id`, `url`, `item_id`) VALUES
(17, '/files/uploads/0item1.png', 8),
(19, '/files/uploads/1item2.png', 9),
(20, '/files/uploads/2item3.png', 10),
(21, '/files/uploads/3item4.png', 11),
(25, '/files/uploads/5cinturon.png', 14),
(26, '/files/uploads/6cinturon1.png', 15),
(27, '/files/uploads/7cinturon2.png', 16),
(28, '/files/uploads/8cinturon3.png', 17),
(29, '/files/uploads/9cinturon4.png', 18),
(30, '/files/uploads/9bufanda.png', 19),
(31, '/files/uploads/10bufanda1.png', 20),
(32, '/files/uploads/11bufanda3.png', 21),
(33, '/files/uploads/12bufanda2.png', 22),
(34, '/files/uploads/13Nermstock-speirs-35.png', 25),
(35, '/files/uploads/14Hoss-Intropia25.png', 23),
(36, '/files/uploads/1555dsl-25.png', 24),
(37, '/files/uploads/16replay-20.png', 26),
(38, '/files/uploads/17Fred-Bare29.png', 27),
(39, '/files/uploads/18mawi-854.png', 28),
(40, '/files/uploads/19mawi-252.png', 29),
(41, '/files/uploads/20fiona-paxton-154.png', 30),
(42, '/files/uploads/21delfina-delettrez-250.png', 31),
(43, '/files/uploads/22michael-kors-255.png', 32),
(44, '/files/uploads/23roberta-di-camerino-450.png', 34),
(45, '/files/uploads/24gianfranco-ferre-490.png', 33),
(46, '/files/uploads/25furla-155.png', 35);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla',
  `nombre` varchar(250) NOT NULL COMMENT 'Nombre de Item (Artículo))',
  `precio` float DEFAULT NULL COMMENT 'Precio de Item (Artículo))',
  `peso` float DEFAULT NULL COMMENT 'Descripción del Peso de Item (Artículo)',
  `material` varchar(1000) DEFAULT NULL COMMENT 'Descripción del Material de Item(Artículo))',
  `descripcion` varchar(1000) DEFAULT NULL COMMENT 'Descripción del Artículo',
  `created` datetime DEFAULT NULL COMMENT 'Fecha de inserción de información',
  `modified` datetime DEFAULT NULL COMMENT 'Fecha de la última modificación de la información',
  `subcategoria_id` int(11) NOT NULL COMMENT 'Llave foránea de la tabla subcategoria',
  `rating` decimal(3,1) unsigned DEFAULT '0.0' COMMENT 'Resultado entre 1 y 5 del rating del Item',
  `votes` int(11) unsigned DEFAULT '0' COMMENT 'Cantidad de votos del item',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `nombre`, `precio`, `peso`, `material`, `descripcion`, `created`, `modified`, `subcategoria_id`, `rating`, `votes`) VALUES
(8, 'Estampado Facial Chica', 95, 0.5, 'Algodon Licrado', 'Musculosa con estampado de chica, colores combinados', '2011-11-27 19:12:30', '2011-12-16 03:17:09', 17, 3.0, 3),
(9, 'Hannah Montana Mariposa', 75, 0.5, 'Algodon Licrado', 'Musculosa con caida mariposa, Hannah Montana', '2011-11-27 19:30:00', '2011-12-01 20:52:46', 17, 2.0, 2),
(10, 'Estampado Hannah Montana', 65, 0.5, 'Algodon Licrado', 'Musculosa Hannah Montana, terminacion normal', '2011-11-27 19:31:10', '2011-11-27 21:57:39', 17, 4.0, 2),
(11, 'Fashion Girl Caida En Puntas', 85, 0.5, 'Algodon Licrado', 'Musculosa con caida en puntas, con estampado combinado plomo y blanco', '2011-11-27 19:59:50', '2011-11-27 21:57:48', 17, 0.0, 0),
(14, 'Cinturon Negro, Ebilla Simple', 64, 0.2, 'Cuerina', 'Cinturon de cuerina, color negro, simple', '2011-12-01 04:03:59', '2011-12-01 04:03:59', 34, 0.0, 0),
(15, 'Cinturon Rosado, Who''s Who', 95, 0.3, 'Cuerina', 'Cinturon de cuerina, color rosado, Who''s Who', '2011-12-01 04:05:30', '2011-12-01 04:05:30', 34, 0.0, 0),
(16, 'Who''s Who, Cafe Delgado', 160, 0.2, 'Cuerina', 'Cinturon de cuerina, color Cafe delgado Who''s Who', '2011-12-01 04:06:55', '2011-12-01 04:06:55', 34, 0.0, 0),
(17, 'Christian Dior Ebilla Grande', 70, 0.2, 'Cuerina', 'Cinturon de cuerina, color negro, Christian Dior ebilla negro', '2011-12-01 04:08:42', '2011-12-01 04:08:42', 34, 0.0, 0),
(18, 'Balenciaga Rosado', 59, 0.1, 'Tela', 'Cinturon de Tela, Boton, Balenciaga Rosado', '2011-12-01 04:10:02', '2011-12-01 04:10:02', 34, 0.0, 0),
(19, 'Ralph Lauren Cafe', 96, 0.2, 'Sintetico', 'Bufanda Ralph Lauren Cafe, Sintetico', '2011-12-01 04:23:24', '2011-12-01 04:23:24', 36, 0.0, 0),
(20, 'Who''s Who Negro', 195, 0.3, 'Sintetico', 'Bufanda Who''s Who Negro, Robots Colores', '2011-12-01 04:24:44', '2011-12-01 04:24:44', 36, 0.0, 0),
(21, 'Diesel Black Gold', 96, 0.2, 'Sintetico', 'Bufanda Diesel Negro, Black Gold, Sintetico', '2011-12-01 04:26:07', '2011-12-01 04:26:07', 36, 0.0, 0),
(22, 'Who''s Who Rojo', 175, 0.2, 'Sintetico', 'Bufanda Who''s Who Rojo, Robot', '2011-12-01 04:26:52', '2011-12-20 15:25:31', 36, 3.0, 1),
(23, 'Hoss Intropia', 25, 0.2, 'Sintetico', 'Gorra Hoss Intropia Purpura, Sintetico', '2011-12-01 04:33:09', '2011-12-01 04:33:09', 32, 0.0, 0),
(24, '55DSL', 25, 0.2, 'Tejido', 'Gorra 55DSL Negro, Tejido', '2011-12-01 04:33:45', '2011-12-01 04:33:45', 32, 0.0, 0),
(25, 'Nermstock Speirs', 35, 0.2, 'Tejido', 'Gorra Nermstock Speirs Plomo y Negro', '2011-12-01 04:34:24', '2011-12-01 04:34:24', 32, 0.0, 0),
(26, 'Replay', 20, 0.1, 'Sintetico', 'Sombrero Replay Blanco', '2011-12-01 04:34:57', '2011-12-01 20:57:21', 32, 0.0, 0),
(27, 'Fred Bare', 29, 0.2, 'Sintetico', 'Gorra Fred Bare Rojo, Sintetico', '2011-12-01 04:37:36', '2011-12-01 04:37:36', 32, 0.0, 0),
(28, 'Anillo MAWI', 854, 0.3, 'Plata Pura Con Petalos de Rosa', 'Anillo MAWI Plata Pura Con Petalos de Rosa', '2011-12-01 04:44:19', '2011-12-01 04:44:19', 37, 0.0, 0),
(29, 'Aretes MAWI', 252, 0.1, 'Plata', 'Aretes Negros MAWI ', '2011-12-01 04:44:53', '2011-12-01 04:44:53', 37, 0.0, 0),
(30, 'Fiona Paxton', 154, 0.2, 'Bañado En Oro', 'Collar Fiona Paxton 154', '2011-12-01 04:45:33', '2011-12-01 04:45:33', 37, 0.0, 0),
(31, 'Delfina Delettrez Aretes', 250, 0.2, 'Bañado En Oro', 'Aretes Delfina Delettrez Abejas Bañado en Oro', '2011-12-01 04:46:21', '2012-09-24 22:05:53', 37, 2.5, 2),
(32, 'Michael Kors', 255, 0.3, 'Sintetico, Cuerina', 'Cartera Purpura de Cuerina y Sintetico', '2011-12-01 04:53:31', '2011-12-01 04:53:31', 31, 0.0, 0),
(33, 'GianFranco Ferre', 490, 0.5, 'Sintetico', 'Cartera Grande Gianfranco Ferre, Purpura', '2011-12-01 04:54:21', '2012-09-08 11:24:42', 31, 5.0, 1),
(34, 'Roberta di Camerino', 450, 0.6, 'Sintetico', 'Cartera Grande Negro, Roberta de Camerino 450', '2011-12-01 04:55:10', '2011-12-01 04:55:10', 31, 0.0, 0),
(35, 'Furla', 155, 0.5, 'Sintetico', 'Cartera Mediana Sintetica, Ploma', '2011-12-01 04:55:46', '2011-12-01 04:55:46', 31, 0.0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla',
  `nombre` varchar(80) DEFAULT NULL COMMENT 'Nombre de País',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=241 ;

--
-- Dumping data for table `paises`
--

INSERT INTO `paises` (`id`, `nombre`) VALUES
(1, 'Afganistán'),
(2, 'Islas Gland'),
(3, 'Albania'),
(4, 'Alemania'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Anguilla'),
(8, 'Antártida'),
(9, 'Antigua y Barbuda'),
(10, 'Antillas Holandesas'),
(11, 'Arabia Saudí'),
(12, 'Argelia'),
(13, 'Argentina'),
(14, 'Armenia'),
(15, 'Aruba'),
(16, 'Australia'),
(17, 'Austria'),
(18, 'Azerbaiyán'),
(19, 'Bahamas'),
(20, 'Bahréin'),
(21, 'Bangladesh'),
(22, 'Barbados'),
(23, 'Bielorrusia'),
(24, 'Bélgica'),
(25, 'Belice'),
(26, 'Benin'),
(27, 'Bermudas'),
(28, 'Bhután'),
(29, 'Bolivia'),
(30, 'Bosnia y Herzegovina'),
(31, 'Botsuana'),
(32, 'Isla Bouvet'),
(33, 'Brasil'),
(34, 'Brunéi'),
(35, 'Bulgaria'),
(36, 'Burkina Faso'),
(37, 'Burundi'),
(38, 'Cabo Verde'),
(39, 'Islas Caimán'),
(40, 'Camboya'),
(41, 'Camerún'),
(42, 'Canadá'),
(43, 'República Centroafricana'),
(44, 'Chad'),
(45, 'República Checa'),
(46, 'Chile'),
(47, 'China'),
(48, 'Chipre'),
(49, 'Isla de Navidad'),
(50, 'Ciudad del Vaticano'),
(51, 'Islas Cocos'),
(52, 'Colombia'),
(53, 'Comoras'),
(54, 'República Democrática del Congo'),
(55, 'Congo'),
(56, 'Islas Cook'),
(57, 'Corea del Norte'),
(58, 'Corea del Sur'),
(59, 'Costa de Marfil'),
(60, 'Costa Rica'),
(61, 'Croacia'),
(62, 'Cuba'),
(63, 'Dinamarca'),
(64, 'Dominica'),
(65, 'República Dominicana'),
(66, 'Ecuador'),
(67, 'Egipto'),
(68, 'El Salvador'),
(69, 'Emiratos Árabes Unidos'),
(70, 'Eritrea'),
(71, 'Eslovaquia'),
(72, 'Eslovenia'),
(73, 'España'),
(74, 'Islas ultramarinas de Estados Unidos'),
(75, 'Estados Unidos'),
(76, 'Estonia'),
(77, 'Etiopía'),
(78, 'Islas Feroe'),
(79, 'Filipinas'),
(80, 'Finlandia'),
(81, 'Fiyi'),
(82, 'Francia'),
(83, 'Gabón'),
(84, 'Gambia'),
(85, 'Georgia'),
(86, 'Islas Georgias del Sur y Sandwich del Sur'),
(87, 'Ghana'),
(88, 'Gibraltar'),
(89, 'Granada'),
(90, 'Grecia'),
(91, 'Groenlandia'),
(92, 'Guadalupe'),
(93, 'Guam'),
(94, 'Guatemala'),
(95, 'Guayana Francesa'),
(96, 'Guinea'),
(97, 'Guinea Ecuatorial'),
(98, 'Guinea-Bissau'),
(99, 'Guyana'),
(100, 'Haití'),
(101, 'Islas Heard y McDonald'),
(102, 'Honduras'),
(103, 'Hong Kong'),
(104, 'Hungría'),
(105, 'India'),
(106, 'Indonesia'),
(107, 'Irán'),
(108, 'Iraq'),
(109, 'Irlanda'),
(110, 'Islandia'),
(111, 'Israel'),
(112, 'Italia'),
(113, 'Jamaica'),
(114, 'Japón'),
(115, 'Jordania'),
(116, 'Kazajstán'),
(117, 'Kenia'),
(118, 'Kirguistán'),
(119, 'Kiribati'),
(120, 'Kuwait'),
(121, 'Laos'),
(122, 'Lesotho'),
(123, 'Letonia'),
(124, 'Líbano'),
(125, 'Liberia'),
(126, 'Libia'),
(127, 'Liechtenstein'),
(128, 'Lituania'),
(129, 'Luxemburgo'),
(130, 'Macao'),
(131, 'ARY Macedonia'),
(132, 'Madagascar'),
(133, 'Malasia'),
(134, 'Malawi'),
(135, 'Maldivas'),
(136, 'Malí'),
(137, 'Malta'),
(138, 'Islas Malvinas'),
(139, 'Islas Marianas del Norte'),
(140, 'Marruecos'),
(141, 'Islas Marshall'),
(142, 'Martinica'),
(143, 'Mauricio'),
(144, 'Mauritania'),
(145, 'Mayotte'),
(146, 'México'),
(147, 'Micronesia'),
(148, 'Moldavia'),
(149, 'Mónaco'),
(150, 'Mongolia'),
(151, 'Montserrat'),
(152, 'Mozambique'),
(153, 'Myanmar'),
(154, 'Namibia'),
(155, 'Nauru'),
(156, 'Nepal'),
(157, 'Nicaragua'),
(158, 'Níger'),
(159, 'Nigeria'),
(160, 'Niue'),
(161, 'Isla Norfolk'),
(162, 'Noruega'),
(163, 'Nueva Caledonia'),
(164, 'Nueva Zelanda'),
(165, 'Omán'),
(166, 'Países Bajos'),
(167, 'Pakistán'),
(168, 'Palau'),
(169, 'Palestina'),
(170, 'Panamá'),
(171, 'Papúa Nueva Guinea'),
(172, 'Paraguay'),
(173, 'Perú'),
(174, 'Islas Pitcairn'),
(175, 'Polinesia Francesa'),
(176, 'Polonia'),
(177, 'Portugal'),
(178, 'Puerto Rico'),
(179, 'Qatar'),
(180, 'Reino Unido'),
(181, 'Reunión'),
(182, 'Ruanda'),
(183, 'Rumania'),
(184, 'Rusia'),
(185, 'Sahara Occidental'),
(186, 'Islas Salomón'),
(187, 'Samoa'),
(188, 'Samoa Americana'),
(189, 'San Cristóbal y Nevis'),
(190, 'San Marino'),
(191, 'San Pedro y Miquelón'),
(192, 'San Vicente y las Granadinas'),
(193, 'Santa Helena'),
(194, 'Santa Lucía'),
(195, 'Santo Tomé y Príncipe'),
(196, 'Senegal'),
(197, 'Serbia y Montenegro'),
(198, 'Seychelles'),
(199, 'Sierra Leona'),
(200, 'Singapur'),
(201, 'Siria'),
(202, 'Somalia'),
(203, 'Sri Lanka'),
(204, 'Suazilandia'),
(205, 'Sudáfrica'),
(206, 'Sudán'),
(207, 'Suecia'),
(208, 'Suiza'),
(209, 'Surinam'),
(210, 'Svalbard y Jan Mayen'),
(211, 'Tailandia'),
(212, 'Taiwán'),
(213, 'Tanzania'),
(214, 'Tayikistán'),
(215, 'Territorio Británico del Océano Índico'),
(216, 'Territorios Australes Franceses'),
(217, 'Timor Oriental'),
(218, 'Togo'),
(219, 'Tokelau'),
(220, 'Tonga'),
(221, 'Trinidad y Tobago'),
(222, 'Túnez'),
(223, 'Islas Turcas y Caicos'),
(224, 'Turkmenistán'),
(225, 'Turquía'),
(226, 'Tuvalu'),
(227, 'Ucrania'),
(228, 'Uganda'),
(229, 'Uruguay'),
(230, 'Uzbekistán'),
(231, 'Vanuatu'),
(232, 'Venezuela'),
(233, 'Vietnam'),
(234, 'Islas Vírgenes Británicas'),
(235, 'Islas Vírgenes de los Estados Unidos'),
(236, 'Wallis y Futuna'),
(237, 'Yemen'),
(238, 'Yibuti'),
(239, 'Zambia'),
(240, 'Zimbabue');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla',
  `user_id` char(36) NOT NULL DEFAULT '' COMMENT 'Llave foránea de la tabla usuario',
  `model_id` char(36) NOT NULL DEFAULT '' COMMENT 'Llave foránea del modelo a tener rating',
  `model` varchar(100) NOT NULL DEFAULT '' COMMENT 'Nombre del Modelo',
  `rating` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT 'Rating, valor de 1 a 5',
  `name` varchar(100) DEFAULT NULL COMMENT 'Nombre de usuario',
  `created` datetime DEFAULT NULL COMMENT 'Fecha de inserción de información',
  `modified` datetime DEFAULT NULL COMMENT 'Fecha de la última modificación de la información',
  PRIMARY KEY (`id`),
  KEY `rating` (`model_id`,`model`,`rating`,`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `model_id`, `model`, `rating`, `name`, `created`, `modified`) VALUES
(1, '4ed1bd28-6ef4-42c2-9d96-0704a8be1a77', '1', 'Item', 4, 'default', '2011-11-27 05:50:10', '2011-11-27 05:50:10'),
(2, '4ed25d62-5f80-49b2-89a1-0704a8be1a77', '1', 'Item', 3, 'default', '2011-11-27 16:56:19', '2011-11-27 16:56:19'),
(3, '4ed2a293-85b0-4f9d-89b8-0bcca8be1a77', '8', 'Item', 3, 'default', '2011-11-27 21:51:36', '2011-11-27 21:51:36'),
(4, '4ed2a306-4178-4fa0-ada1-0bccc0a80067', '8', 'Item', 2, 'default', '2011-11-27 21:52:26', '2011-11-27 21:57:52'),
(6, '4ed2a306-4178-4fa0-ada1-0bccc0a80067', '10', 'Item', 3, 'default', '2011-11-27 21:52:34', '2011-11-27 21:57:39'),
(9, '4ed2a293-85b0-4f9d-89b8-0bcca8be1a77', '10', 'Item', 5, 'default', '2011-11-27 21:54:05', '2011-11-27 21:54:05'),
(10, '4ed2a293-85b0-4f9d-89b8-0bcca8be1a77', '9', 'Item', 3, 'default', '2011-11-27 21:55:28', '2011-11-27 21:55:28'),
(11, '4ed2a306-4178-4fa0-ada1-0bccc0a80067', '9', 'Item', 1, 'default', '2011-11-27 21:57:31', '2011-11-27 21:57:31'),
(12, '4ee43936-b8ec-400a-bf2c-0730c0a80065', '8', 'Item', 4, 'default', '2011-12-16 03:17:09', '2011-12-16 03:17:09'),
(13, '4eedacf6-6e70-499b-bdf0-01e0c0a80065', '31', 'Item', 2, 'default', '2011-12-18 21:06:08', '2011-12-18 21:06:08'),
(14, '4eedacf6-6e70-499b-bdf0-01e0c0a80065', '22', 'Item', 3, 'default', '2011-12-20 15:25:31', '2011-12-20 15:25:31'),
(15, '504b61a9-f8d0-4aa8-a7c7-30aa1faaa28f', '33', 'Item', 5, 'default', '2012-09-08 11:24:42', '2012-09-08 11:24:42'),
(16, '505a5dc1-5930-4460-99b3-4663a8be1a77', '31', 'Item', 3, 'default', '2012-09-24 22:05:53', '2012-09-24 22:05:53');

-- --------------------------------------------------------

--
-- Table structure for table `subcategorias`
--

CREATE TABLE IF NOT EXISTS `subcategorias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla',
  `nombre` varchar(150) DEFAULT NULL COMMENT 'Nombre de Subcategoría de Prenda',
  `categoria_id` int(11) NOT NULL COMMENT 'Llave foránea de la tabla categoria',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `subcategorias`
--

INSERT INTO `subcategorias` (`id`, `nombre`, `categoria_id`) VALUES
(8, 'Pantalones Formales', 7),
(9, 'Pantalones Casuales', 7),
(10, 'Pantalones Cortos', 7),
(11, 'Tobilleras', 7),
(12, 'Capris', 7),
(13, 'Vestidos Formales', 8),
(14, 'Vestidos Casuales', 8),
(15, 'Tapados', 9),
(16, 'Sacos Cortos', 9),
(17, 'Musculosas', 10),
(18, 'Modal', 10),
(19, 'Razzo', 10),
(20, 'Corset', 10),
(21, 'Capa', 11),
(22, 'Chaleco entero', 11),
(23, 'Faldas Casuales', 12),
(24, 'Faldas Formales', 12),
(25, 'Chompas Largas', 13),
(26, 'Chompas 3/4', 13),
(27, 'Camisas Formales', 14),
(28, 'Camisas Casuales', 14),
(29, 'Camperas Cortas', 16),
(30, 'Camperas Largas', 16),
(31, 'Carteras', 15),
(32, 'Sombreros', 15),
(33, 'Gafas', 15),
(34, 'Cinturones', 15),
(36, 'Bufandas', 15),
(37, 'Bijuteria', 15);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla',
  `nombre` varchar(200) DEFAULT NULL COMMENT 'Nombre de Usuario',
  `apellido` varchar(250) DEFAULT NULL COMMENT 'Apellido de Usuario',
  `email` varchar(100) DEFAULT NULL COMMENT 'Email de Usuario',
  `password` int(11) DEFAULT NULL COMMENT 'Password de Usuario',
  `emailverificado` tinyint(1) DEFAULT NULL COMMENT 'Verificación de Email',
  `created` datetime DEFAULT NULL COMMENT 'Fecha de inserción de información',
  `modified` datetime DEFAULT NULL COMMENT 'Fecha de la última modificación de la información',
  `codigoverificacion` varchar(250) DEFAULT NULL COMMENT 'Código de Verificación',
  `nacimiento` date DEFAULT NULL COMMENT 'Fecha de Nacimiento',
  `tipo` varchar(100) DEFAULT NULL COMMENT 'Tipo de Usuario',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `emailverificado`, `created`, `modified`, `codigoverificacion`, `nacimiento`, `tipo`) VALUES
(23, 'Dunia', 'Rivas', 'duniarivas@hotmail.com', 0, 0, '2013-03-03 21:46:49', '2013-03-03 22:03:06', NULL, '1995-03-03', '1'),
(24, 'Diego', 'Landa', 'diegolanda@msn.com', 6, NULL, '2013-03-03 22:49:50', '2013-03-03 22:49:50', NULL, '1995-03-03', '1'),
(25, 'Diego', 'Landa', 'diegolanda1000@hotmail.com', 6, NULL, '2013-03-03 23:17:14', '2013-03-03 23:17:14', NULL, '1995-03-03', '1'),
(27, 'admin', 'admin', 'admin@msn.com', 61791792, NULL, '2013-03-07 22:10:42', '2013-03-07 22:10:42', NULL, '1995-03-07', '1');
