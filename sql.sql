-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 01, 2015 at 06:24 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `braggart`
--

-- --------------------------------------------------------

--
-- Table structure for table `atributos`
--

CREATE TABLE `atributos` (
`id_atributo` int(11) NOT NULL,
  `nombre_esp` text COLLATE utf8_unicode_ci NOT NULL,
  `nombre_eng` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `mostrar` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `atributos_valores`
--

CREATE TABLE `atributos_valores` (
  `id_atributo` int(11) NOT NULL,
`id_valor` int(11) NOT NULL,
  `nombre_esp` text COLLATE utf8_unicode_ci NOT NULL,
  `nombre_eng` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `mostrar` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `boletin`
--

CREATE TABLE `boletin` (
`idboletin` int(11) NOT NULL,
  `correo` text COLLATE utf8_unicode_ci NOT NULL,
  `token` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `boletin`
--

INSERT INTO `boletin` (`idboletin`, `correo`, `token`, `status`) VALUES
(1, 'brent.heftye@hotmail.com', '4a32f0ff41dcbd6dd43997df22e3d5fe', 1),
(2, 'brent@locker.com.mx', 'd9d5fcd0bc01d355dcf53ad7b90be4ea', 1),
(3, 'bheftye92@hotmail.com', 'e6d975b221479aa05a7c91247baedfc6', 1),
(4, 'bheftye92@gmail.com', 'd9d5fcd0bc01d355dcf53ad7b90be4ea', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categorias_productos`
--

CREATE TABLE `categorias_productos` (
`id_categoria` int(11) NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `combinaciones_atributos_valores`
--

CREATE TABLE `combinaciones_atributos_valores` (
  `id_combinacion` int(11) NOT NULL,
  `id_atributo` int(11) NOT NULL,
  `id_valor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `combinaciones_imagenes`
--

CREATE TABLE `combinaciones_imagenes` (
  `id_combinacion` int(11) NOT NULL,
  `id_imagen` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `combinaciones_productos`
--

CREATE TABLE `combinaciones_productos` (
`id_combinacion` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `stock` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `mostrar` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `config_mailing`
--

CREATE TABLE `config_mailing` (
  `idconfig` tinyint(1) NOT NULL,
  `correo_noreply` text COLLATE utf8_unicode_ci NOT NULL,
  `correo_standard` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook` text COLLATE utf8_unicode_ci NOT NULL,
  `twitter` text COLLATE utf8_unicode_ci NOT NULL,
  `instagram` text COLLATE utf8_unicode_ci NOT NULL,
  `youtube` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `config_mailing`
--

INSERT INTO `config_mailing` (`idconfig`, `correo_noreply`, `correo_standard`, `facebook`, `twitter`, `instagram`, `youtube`) VALUES
(9, 'no-reply@locker.com.mx', 'hola@locker.com.mx', 'www.facebook.com', 'www.twitter.com', 'www.instagram.com', 'www.youtube.com');

-- --------------------------------------------------------

--
-- Table structure for table `contacto`
--

CREATE TABLE `contacto` (
  `idcontacto` int(2) NOT NULL,
  `correo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `emisor` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacto`
--

INSERT INTO `contacto` (`idcontacto`, `correo`, `emisor`) VALUES
(1, 'bheftye92@gmail.com', 'bheftye92@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `correo1`
--

CREATE TABLE `correo1` (
`idcorreo1` int(11) NOT NULL,
  `ruta` varchar(150) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` varchar(100) NOT NULL,
  `desc1` text NOT NULL,
  `desc2` text NOT NULL,
  `desc3` text NOT NULL,
  `logo` varchar(150) NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `youtube` text NOT NULL,
  `from_email` text NOT NULL,
  `footer` text NOT NULL,
  `fromname` text NOT NULL,
  `idlista` int(11) NOT NULL,
  `linklogo` text NOT NULL,
  `nomemp` text NOT NULL,
  `color` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `correo1img`
--

CREATE TABLE `correo1img` (
`idcorreoimg1` int(11) NOT NULL,
  `idcorreo1` int(11) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `correo1img2`
--

CREATE TABLE `correo1img2` (
`idcorreo1img2` int(11) NOT NULL,
  `idcorreo1` int(11) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `datosuserend`
--

CREATE TABLE `datosuserend` (
  `iduserend` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8_unicode_ci NOT NULL,
  `postal` int(5) NOT NULL,
  `tipo` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `datosuserend`
--

INSERT INTO `datosuserend` (`iduserend`, `nombre`, `apellido`, `company`, `telefono`, `ciudad`, `direccion`, `postal`, `tipo`) VALUES
(1, 'Luis J', 'Caamal Barbosa', '', '9999915623', 'MÃ©rida', 'c 15', 89563, 0),
(2, 'Jose', 'Acosta', '898989', '9992921305', 'MÃ©rida', '', 97000, 1),
(3, 'Luis', 'Caamal', 'undefined', 'undefined', 'undefined', '', 0, 1),
(4, 'Brent', 'Heftye', 'undefined', 'undefined', 'undefined', '', 0, 1),
(5, 'Luis J.', 'Caamal Barbosa', 'undefined', 'undefined', 'undefined', '', 0, 1),
(6, 'Brent', 'Heftye', 'undefined', 'undefined', 'undefined', '', 0, 1),
(7, 'brent', 'heftye', 'undefined', 'undefined', 'undefined', '', 0, 1),
(8, 'Luis', 'Caamal', 'undefined', 'undefined', 'undefined', '', 0, 1),
(9, 'david', 'sabido', 'undefined', 'undefined', 'undefined', '', 0, 1),
(10, 'Luis', 'Sabido', 'undefined', 'undefined', 'undefined', '', 0, 1),
(11, 'Ana Patricia', 'Montejo May', 'undefined', 'undefined', 'undefined', '', 0, 1),
(12, 'Ana Patricia', 'Montejo May', 'undefined', 'undefined', 'undefined', '', 0, 1),
(13, 'david2', 'sabido', 'undefined', 'undefined', 'undefined', '', 0, 1),
(14, 'Ana Patricia', 'Montejo May', 'undefined', 'undefined', 'undefined', '', 0, 1),
(15, 'Luis J', 'caamal', 'undefined', 'undefined', 'undefined', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `datosusuario`
--

CREATE TABLE `datosusuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datosusuario`
--

INSERT INTO `datosusuario` (`idusuario`, `nombre`, `email`, `telefono`, `token`) VALUES
(17, 'Administrador', 'bheftye92@gmail.com', '', '3426b6eeb6b7cc31439d937386a8fece'),
(20, 'Yelmy Maria Pech Miranda', 'yelmymc@hotmail.com', '9999999999', 'db61549a47e6ee5d8c4c0d244f3f939a'),
(21, 'Manuel Alejandro MÃ©ndez Cervera', 'manuel_amc@outlook.com', '9999580867', 'bcfe4c66c62c46a31f2dd89ef211777e');

-- --------------------------------------------------------

--
-- Table structure for table `detalle_orden`
--

CREATE TABLE `detalle_orden` (
  `idorden` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `precio` float NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_combinacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `direcciones`
--

CREATE TABLE `direcciones` (
`iddireccion` int(11) NOT NULL,
  `nombreDireccion` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `zip` int(5) NOT NULL,
  `status` int(2) NOT NULL,
  `iduserend` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
`id_faq` tinyint(1) NOT NULL,
  `contenido_esp` longtext COLLATE utf8_unicode_ci NOT NULL,
  `contenido_eng` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_faq`, `contenido_esp`, `contenido_eng`) VALUES
(1, '&lt;div class=&quot;col-lg-12&quot; style=&quot;width: 845.515625px; font-size: 14.4444446563721px; line-height: 22.2222232818604px;&quot;&gt;&lt;h5&gt;Â¿Tienen tienda fÃ­sica en MÃ©xico?&lt;/h5&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.&lt;/p&gt;&lt;/div&gt;&lt;div class=&quot;col-lg-12&quot; style=&quot;width: 845.515625px; font-size: 14.4444446563721px; line-height: 22.2222232818604px;&quot;&gt;&lt;h5&gt;libero venenatis faucibus&lt;/h5&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.&lt;/p&gt;&lt;/div&gt;&lt;div class=&quot;col-lg-12&quot; style=&quot;width: 845.515625px; font-size: 14.4444446563721px; line-height: 22.2222232818604px;&quot;&gt;&lt;h5&gt;Pellentesque eu&lt;/h5&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.&lt;/p&gt;&lt;/div&gt;&lt;div class=&quot;col-lg-12&quot; style=&quot;width: 845.515625px; font-size: 14.4444446563721px; line-height: 22.2222232818604px;&quot;&gt;&lt;h5&gt;Donec vitae&lt;/h5&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.&lt;/p&gt;&lt;/div&gt;&lt;div class=&quot;col-lg-12&quot; style=&quot;width: 845.515625px; font-size: 14.4444446563721px; line-height: 22.2222232818604px;&quot;&gt;&lt;h5&gt;Apien ut libero&lt;/h5&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.&lt;/p&gt;&lt;/div&gt;', '&lt;div class=&quot;col-lg-12&quot; style=&quot;width: 845.515625px; font-size: 14.4444446563721px; line-height: 22.2222232818604px;&quot;&gt;&lt;h5&gt;Do you have a physical store in Mexico?&lt;/h5&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.&lt;/p&gt;&lt;/div&gt;&lt;div class=&quot;col-lg-12&quot; style=&quot;width: 845.515625px; font-size: 14.4444446563721px; line-height: 22.2222232818604px;&quot;&gt;&lt;h5&gt;libero venenatis faucibus&lt;/h5&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.&lt;/p&gt;&lt;/div&gt;&lt;div class=&quot;col-lg-12&quot; style=&quot;width: 845.515625px; font-size: 14.4444446563721px; line-height: 22.2222232818604px;&quot;&gt;&lt;h5&gt;Pellentesque eu&lt;/h5&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.&lt;/p&gt;&lt;/div&gt;&lt;div class=&quot;col-lg-12&quot; style=&quot;width: 845.515625px; font-size: 14.4444446563721px; line-height: 22.2222232818604px;&quot;&gt;&lt;h5&gt;Donec vitae&lt;/h5&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.&lt;/p&gt;&lt;/div&gt;&lt;div class=&quot;col-lg-12&quot; style=&quot;width: 845.515625px; font-size: 14.4444446563721px; line-height: 22.2222232818604px;&quot;&gt;&lt;h5&gt;Apien ut libero&lt;/h5&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.&lt;/p&gt;&lt;/div&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `img_producto`
--

CREATE TABLE `img_producto` (
`id_img_producto` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `orden` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `impuestos`
--

CREATE TABLE `impuestos` (
`id_impuesto` int(11) NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `porcentaje` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `impuestos`
--

INSERT INTO `impuestos` (`id_impuesto`, `nombre`, `porcentaje`) VALUES
(1, 'IVA', 16);

-- --------------------------------------------------------

--
-- Table structure for table `marcas`
--

CREATE TABLE `marcas` (
`id_marca` int(11) NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `img_principal` text COLLATE utf8_unicode_ci NOT NULL,
  `mostrar` tinyint(1) NOT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nombre`, `status`, `img_principal`, `mostrar`, `descripcion`) VALUES
(1, 'AreaWare', 0, '2de761fb.jpg', 1, '&lt;p&gt;Productos que traemos de esta tienda.&amp;nbsp;&lt;/p&gt;'),
(2, 'Ohmycool', 1, '6d9794bd.png', 1, '&lt;p&gt;Productos traÃ­dos de ohmycool&lt;/p&gt;'),
(3, 'Rooster', 1, 'c1d1f396.jpg', 1, '&lt;p&gt;Productos comprados en Rooster&lt;/p&gt;'),
(4, 'Adidas', 1, '341dbed1.png', 1, '&lt;p&gt;Productos comprados en Adidas&lt;/p&gt;'),
(5, 'Nike', 1, '0e1011f5.jpg', 1, '&lt;p&gt;Productos comprados en Nike&lt;/p&gt;'),
(6, 'Puma', 1, '41985ea7.jpg', 1, '&lt;p&gt;Productos comprados en Puma&lt;/p&gt;'),
(7, 'Starbucks', 1, '0cc0bfec.png', 1, '&lt;p&gt;Productos comprados de starbucks&lt;/p&gt;'),
(8, 'Angrybirds', 1, 'a1be44e3.jpg', 1, '&lt;p&gt;Productos de angrybirds&lt;/p&gt;'),
(9, 'The Home Store', 1, '2eea6456.png', 1, '&lt;p&gt;Productos de The Home Store&lt;/p&gt;'),
(10, 'Playstation 4', 1, 'f8bd6b51.png', 1, '&lt;p&gt;Productos de Playstation 4&lt;/p&gt;'),
(11, 'Xbox One', 1, '8b810c28.png', 1, '&lt;p&gt;Productos de Xbox One&lt;/p&gt;'),
(12, 'Apple', 1, '9e479d3d.jpg', 1, '&lt;p&gt;Productos de Apple Inc.&lt;/p&gt;'),
(13, 'Amazon', 1, 'c3763f23.jpg', 1, '&lt;p&gt;Productos comprados en Amazon&lt;/p&gt;'),
(14, 'American Eagle', 1, '69bdc479.jpg', 1, '&lt;p&gt;Productos de American Eagle&lt;/p&gt;'),
(15, 'Polo Raulph Lauren', 1, 'dec1d0bf.jpg', 1, '&lt;p&gt;Productos de Polo Ralph Lauren&lt;/p&gt;'),
(16, 'Flat', 1, '00368507.jpg', 1, '&lt;p&gt;Furniture Inspiration.&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `marcas_productos`
--

CREATE TABLE `marcas_productos` (
  `id_marca` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orden`
--

CREATE TABLE `orden` (
`idorden` int(11) NOT NULL,
  `iddireccion` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `iduserend` int(11) NOT NULL,
  `num_productos` int(11) NOT NULL,
  `total_productos` float NOT NULL,
  `estatus` int(11) NOT NULL,
  `peso` float NOT NULL,
  `id_transporte` int(11) NOT NULL,
  `id_rango_transporte` int(11) NOT NULL,
  `id_combinacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permiso`
--

CREATE TABLE `permiso` (
`idpermiso` int(11) NOT NULL,
  `nompermiso` varchar(255) NOT NULL,
  `clavepermiso` varchar(255) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permiso`
--

INSERT INTO `permiso` (`idpermiso`, `nompermiso`, `clavepermiso`, `status`) VALUES
(37, 'Agregar CategorÃ­a', 'AgrCat', 1),
(38, 'Modifcar CategorÃ­a', 'ModCat', 1),
(39, 'Eliminar CategorÃ­a', 'ElimCat', 1),
(40, 'Activar/Desactivar CategorÃ­a', 'AcDcCat', 1),
(41, 'Agregar Slide', 'AgrSlide', 1),
(42, 'Modificar Slide', 'ModSlide', 1),
(43, 'Eliminar Slide', 'ElimSlide', 1),
(44, 'Activar/Desactivar Slide', 'AcDcSlide', 1),
(53, 'Agregar Usuarios', 'AgrUsu', 1),
(54, 'Modificar Usuario', 'ModUsu', 1),
(55, 'Eliminar Usuario', 'EliUsu', 1),
(56, 'Activar/Desactivar Usuario', 'AcDcUsu', 1),
(61, 'Agregar Tipo Usuario', 'AgrTiUs', 1),
(62, 'Modificar Tipo Usuario', 'ModTiUs', 1),
(63, 'Eliminar Tipo Usuario', 'EliTiUs', 1),
(64, 'Activar/Desactivar Tipo Usuario', 'AcDcTiUs', 1),
(65, 'Configuracion', 'conf', 1),
(66, 'Select Tipo usuario', 'SelecTipo', 1),
(67, 'Agregar Proyecto', 'AgrPro', 1),
(68, 'Modificar Proyecto', 'ModPro', 1),
(69, 'Eliminar Proyecto', 'ElimPro', 1),
(70, 'Activar/Desactivar Proyecto', 'AcDcPro', 1),
(71, 'Agregar PublicaciÃ³n', 'AgrPub', 1),
(72, 'Modificar PublicaciÃ³n', 'ModPub', 1),
(73, 'Eliminar PublicaciÃ³n', 'ElimPub', 1),
(74, 'Activar/Desactivar PublicaciÃ³n', 'AcDcPub', 1),
(75, 'Modificar Nosotros', 'ModNos', 1),
(76, 'Ordenar Slides', 'SortTableSlide', 1),
(77, 'Ordenar Noticias', 'SortTableNot', 1),
(78, 'Ordenar ImÃ¡genes Productos', 'SortImgPro', 1),
(79, 'Agregar Impuesto', 'AgrImp', 1),
(80, 'Eliminar Impuesto', 'ElimImp', 1),
(81, 'Activar Ver Desactivar Impuesto', 'AcDcImp', 1),
(82, 'Ordernar Impuestos', 'SortTableImp', 1),
(83, 'Agregar Transporte', 'AgrTrans', 1),
(84, 'Eliminar Transporte', 'ElimTrans', 1),
(85, 'Activar y Desactivar Transporte', 'AcDcTrans', 1),
(86, 'Editar Transporte', 'ModTrans', 1);

-- --------------------------------------------------------

--
-- Table structure for table `plantilla_mailing`
--

CREATE TABLE `plantilla_mailing` (
`idplantilla` int(11) NOT NULL,
  `nombre_plantilla` text COLLATE utf8_unicode_ci NOT NULL,
  `xml` text COLLATE utf8_unicode_ci NOT NULL,
  `num_usadas` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
`id_producto` int(11) NOT NULL,
  `img_principal` varchar(50) NOT NULL,
  `titulo_esp` varchar(100) NOT NULL,
  `descripcion_esp` text NOT NULL,
  `url_amigable_esp` varchar(100) NOT NULL,
  `fecha_creacion` varchar(50) NOT NULL,
  `fecha_modificacion` varchar(50) NOT NULL,
  `mostrar` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  `orden` int(7) NOT NULL,
  `titulo_eng` text NOT NULL,
  `descripcion_eng` text NOT NULL,
  `url_amigable_eng` text NOT NULL,
  `precio_mxn` double NOT NULL,
  `precio_usd` double NOT NULL,
  `peso` text NOT NULL,
  `clave` text NOT NULL,
  `tags_esp` text NOT NULL,
  `meta_titulo_esp` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_descripcion_esp` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tags_eng` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_titulo_eng` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_descripcion_eng` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pdf_adjunto` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `stock_general` int(11) NOT NULL,
  `impuesto` double NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productos_categorias`
--

CREATE TABLE `productos_categorias` (
  `id_producto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productos_transportes`
--

CREATE TABLE `productos_transportes` (
  `id_producto` int(11) NOT NULL,
  `id_transporte` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `progreso_mailing`
--

CREATE TABLE `progreso_mailing` (
`idmailing` int(11) NOT NULL,
  `idcorreo` int(11) NOT NULL,
  `tipocorreo` smallint(1) NOT NULL,
  `numcorreos` int(11) NOT NULL,
  `enviados` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `fechayhorainicio` text COLLATE utf8_unicode_ci NOT NULL,
  `fechayhorafinal` text COLLATE utf8_unicode_ci NOT NULL,
  `duracion` text COLLATE utf8_unicode_ci NOT NULL,
  `plantilla` smallint(1) NOT NULL,
  `permitido` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `progreso_mailing`
--

INSERT INTO `progreso_mailing` (`idmailing`, `idcorreo`, `tipocorreo`, `numcorreos`, `enviados`, `status`, `fechayhorainicio`, `fechayhorafinal`, `duracion`, `plantilla`, `permitido`) VALUES
(1, 6, 1, 4, 5, 1, '2014-10-13 12:50:03pm', '2014-10-13 12:53:10pm', '', 1, 1),
(2, 6, 1, 4, 4, 1, '2014-10-13 12:57:54pm', '2014-10-13 12:59:01pm', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rangos_transporte`
--

CREATE TABLE `rangos_transporte` (
`id_rango_transporte` int(11) NOT NULL,
  `peso_maximo` float(6,2) NOT NULL,
  `peso_minimo` float(6,2) NOT NULL,
  `id_transporte` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `cargo_por_envio` text COLLATE utf8_unicode_ci NOT NULL,
  `mostrar` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rangos_transporte`
--

INSERT INTO `rangos_transporte` (`id_rango_transporte`, `peso_maximo`, `peso_minimo`, `id_transporte`, `status`, `cargo_por_envio`, `mostrar`) VALUES
(2, 4.00, 3.00, 1, 1, '12.00', 0),
(4, 3.00, 2.00, 1, 1, '10.00', 0),
(5, 2.00, 1.00, 2, 1, '8.00', 0),
(7, 2.00, 1.00, 1, 1, '5.00', 0),
(8, 3.00, 2.00, 2, 1, '12.00', 0),
(9, 15.50, 4.00, 1, 1, '50.05', 0),
(10, 15.00, 5.00, 2, 1, '60', 0),
(12, 4.00, 3.00, 4, 1, '70.00', 0),
(13, 1.00, 0.50, 4, 1, '0.00', 0),
(14, 3.00, 1.00, 4, 1, '35.00', 0),
(16, 0.50, 0.00, 5, 1, '0.00', 0),
(17, 2.00, 0.50, 5, 1, '30.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `redes_sociales`
--

CREATE TABLE `redes_sociales` (
  `id_redes_sociales` tinyint(1) NOT NULL,
  `facebook` text COLLATE utf8_unicode_ci NOT NULL,
  `twitter` text COLLATE utf8_unicode_ci NOT NULL,
  `instagram` text COLLATE utf8_unicode_ci NOT NULL,
  `pinterest` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `redes_sociales`
--

INSERT INTO `redes_sociales` (`id_redes_sociales`, `facebook`, `twitter`, `instagram`, `pinterest`) VALUES
(1, 'http://facebook.com', 'http://twitter.com', 'http://instagram.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
`idslide` int(11) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `urlvideo` varchar(250) NOT NULL,
  `status` int(2) NOT NULL,
  `texto` text NOT NULL,
  `orden` int(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`idslide`, `ruta`, `titulo`, `urlvideo`, `status`, `texto`, `orden`) VALUES
(2, 'bcc6ff63.png', 'Slide 1', '', 1, '&lt;p&gt;Primera imagen&lt;/p&gt;', 3),
(3, '676a4fea.jpg', 'Slide 2', '', 1, '&lt;p&gt;Imagen 2&lt;/p&gt;', 2),
(4, '6e5d7575.jpg', 'Slide 3', '', 1, '&lt;p&gt;Imagen 3&lt;/p&gt;', 1),
(5, '8c8e5fed.jpg', 'Slide 4', '', 1, '&lt;p&gt;Imagen 4&lt;/p&gt;', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tiposusuario`
--

CREATE TABLE `tiposusuario` (
`idtipousuario` int(11) NOT NULL,
  `nomtipousuario` varchar(255) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiposusuario`
--

INSERT INTO `tiposusuario` (`idtipousuario`, `nomtipousuario`, `status`) VALUES
(9, 'Administrador', 1),
(10, 'Secretario/a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipousuarioxpermiso`
--

CREATE TABLE `tipousuarioxpermiso` (
  `idtipousuario` int(11) NOT NULL,
  `idpermiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipousuarioxpermiso`
--

INSERT INTO `tipousuarioxpermiso` (`idtipousuario`, `idpermiso`) VALUES
(10, 37),
(10, 38),
(10, 40),
(10, 41),
(10, 42),
(10, 44),
(10, 45),
(10, 46),
(10, 48),
(10, 49),
(10, 50),
(10, 52),
(9, 37),
(9, 38),
(9, 39),
(9, 40),
(9, 41),
(9, 42),
(9, 43),
(9, 44),
(9, 53),
(9, 54),
(9, 55),
(9, 56),
(9, 61),
(9, 62),
(9, 63),
(9, 64),
(9, 65),
(9, 66),
(9, 67),
(9, 68),
(9, 69),
(9, 70),
(9, 71),
(9, 72),
(9, 73),
(9, 74),
(9, 75),
(9, 76),
(9, 77),
(9, 78),
(9, 79),
(9, 80),
(9, 81),
(9, 82),
(9, 83),
(9, 84),
(9, 85),
(9, 86);

-- --------------------------------------------------------

--
-- Table structure for table `transportes`
--

CREATE TABLE `transportes` (
`id_transporte` int(11) NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `tiempo_transito` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `img_principal` text COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `mostrar` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transportes`
--

INSERT INTO `transportes` (`id_transporte`, `nombre`, `tiempo_transito`, `status`, `img_principal`, `descripcion`, `mostrar`) VALUES
(1, 'UPS', '1', 1, '8731159c.jpg', 'Entrega al siguiente dia', 0),
(2, 'DHL', '1', 1, '2deddfd9.jpg', '&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 1),
(3, 'Fedex', '3', 1, '5fb9120e.jpg', '&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 0),
(4, 'ESTAFETA', '5', 1, 'f2a35051.jpg', '', 0),
(5, 'REDPACK', '5', 1, 'e42eb4f1.jpg', '', 0),
(6, 'DHL #2', '1', 1, '638c26d7.gif', '&lt;p&gt;DHL Nueva ubicaciÃ³n&lt;/p&gt;', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userend`
--

CREATE TABLE `userend` (
`iduserend` int(11) NOT NULL,
  `correo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(2) NOT NULL,
  `token` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userend`
--

INSERT INTO `userend` (`iduserend`, `correo`, `password`, `status`, `token`) VALUES
(1, 'luisjcaamal2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '8656925cf58e70f240f561a627866fd7'),
(2, 'calladoconejo@hotmail.com', 'af4258b8ea969f6b048d43f68f2bacf2', 1, 'aba2f33fd463ba5084ff35ac4427009a'),
(3, 'lcaamals@locker.com.mx', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'cd4be225ef50e5e642995867873a13d0'),
(4, 'bheftye92@gmail.com', 'f119eba430fdec0ce91cf4f310bcfafc', 1, 'd9d5fcd0bc01d355dcf53ad7b90be4ea'),
(5, 'aguila-josue@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'fd298b929a174c00a762697aa9263451'),
(6, 'brent@locker.com.mx', 'f119eba430fdec0ce91cf4f310bcfafc', 1, '4a32f0ff41dcbd6dd43997df22e3d5fe'),
(7, 'bheftye92@hotmail.com', 'f119eba430fdec0ce91cf4f310bcfafc', 0, '937cdd64317746d9874acf3f4ebcdf7b'),
(8, 'luisjcaamal@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '8656925cf58e70f240f561a627866fd7'),
(9, 'dsabidoc@gmail.com', 'e120ea280aa50693d5568d0071456460', 1, '9b181f9f53637808b95c786624f27dcb'),
(10, 'luiseffe@gmail.com', 'f07b94d11270b301407093cb188420ea', 1, '89412c026c22b8a202c64c2f27402c8c'),
(11, 'lcaamal2@locker.com.mx', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'cd4be225ef50e5e642995867873a13d0'),
(12, 'lcaamal@locker.com.mx', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'cd4be225ef50e5e642995867873a13d0'),
(13, 'david@locker.com.mx', 'e120ea280aa50693d5568d0071456460', 1, 'e6d975b221479aa05a7c91247baedfc6'),
(14, 'developercaamal@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '3426b6eeb6b7cc31439d937386a8fece'),
(15, 'developercaamal2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'f03e3655b8fa7980a55c8cc586abfe1a');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
`idusuario` int(11) NOT NULL,
  `nomusuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(5) NOT NULL,
  `idtipousuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nomusuario`, `password`, `status`, `idtipousuario`) VALUES
(17, 'admin', '202cb962ac59075b964b07152d234b70', 1, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atributos`
--
ALTER TABLE `atributos`
 ADD PRIMARY KEY (`id_atributo`);

--
-- Indexes for table `atributos_valores`
--
ALTER TABLE `atributos_valores`
 ADD PRIMARY KEY (`id_atributo`,`id_valor`);

--
-- Indexes for table `boletin`
--
ALTER TABLE `boletin`
 ADD PRIMARY KEY (`idboletin`);

--
-- Indexes for table `categorias_productos`
--
ALTER TABLE `categorias_productos`
 ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `combinaciones_atributos_valores`
--
ALTER TABLE `combinaciones_atributos_valores`
 ADD PRIMARY KEY (`id_combinacion`,`id_atributo`,`id_valor`);

--
-- Indexes for table `combinaciones_imagenes`
--
ALTER TABLE `combinaciones_imagenes`
 ADD PRIMARY KEY (`id_combinacion`,`id_imagen`);

--
-- Indexes for table `combinaciones_productos`
--
ALTER TABLE `combinaciones_productos`
 ADD PRIMARY KEY (`id_combinacion`,`id_producto`);

--
-- Indexes for table `correo1`
--
ALTER TABLE `correo1`
 ADD PRIMARY KEY (`idcorreo1`);

--
-- Indexes for table `correo1img`
--
ALTER TABLE `correo1img`
 ADD PRIMARY KEY (`idcorreoimg1`);

--
-- Indexes for table `correo1img2`
--
ALTER TABLE `correo1img2`
 ADD PRIMARY KEY (`idcorreo1img2`);

--
-- Indexes for table `direcciones`
--
ALTER TABLE `direcciones`
 ADD PRIMARY KEY (`iddireccion`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
 ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `img_producto`
--
ALTER TABLE `img_producto`
 ADD PRIMARY KEY (`id_img_producto`);

--
-- Indexes for table `impuestos`
--
ALTER TABLE `impuestos`
 ADD PRIMARY KEY (`id_impuesto`);

--
-- Indexes for table `marcas`
--
ALTER TABLE `marcas`
 ADD PRIMARY KEY (`id_marca`);

--
-- Indexes for table `marcas_productos`
--
ALTER TABLE `marcas_productos`
 ADD PRIMARY KEY (`id_marca`,`id_producto`);

--
-- Indexes for table `orden`
--
ALTER TABLE `orden`
 ADD PRIMARY KEY (`idorden`);

--
-- Indexes for table `permiso`
--
ALTER TABLE `permiso`
 ADD PRIMARY KEY (`idpermiso`);

--
-- Indexes for table `plantilla_mailing`
--
ALTER TABLE `plantilla_mailing`
 ADD PRIMARY KEY (`idplantilla`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
 ADD PRIMARY KEY (`id_producto`);

--
-- Indexes for table `productos_categorias`
--
ALTER TABLE `productos_categorias`
 ADD PRIMARY KEY (`id_producto`,`id_categoria`);

--
-- Indexes for table `productos_transportes`
--
ALTER TABLE `productos_transportes`
 ADD PRIMARY KEY (`id_producto`,`id_transporte`);

--
-- Indexes for table `progreso_mailing`
--
ALTER TABLE `progreso_mailing`
 ADD PRIMARY KEY (`idmailing`);

--
-- Indexes for table `rangos_transporte`
--
ALTER TABLE `rangos_transporte`
 ADD PRIMARY KEY (`id_rango_transporte`);

--
-- Indexes for table `redes_sociales`
--
ALTER TABLE `redes_sociales`
 ADD PRIMARY KEY (`id_redes_sociales`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
 ADD PRIMARY KEY (`idslide`);

--
-- Indexes for table `tiposusuario`
--
ALTER TABLE `tiposusuario`
 ADD PRIMARY KEY (`idtipousuario`);

--
-- Indexes for table `transportes`
--
ALTER TABLE `transportes`
 ADD PRIMARY KEY (`id_transporte`);

--
-- Indexes for table `userend`
--
ALTER TABLE `userend`
 ADD PRIMARY KEY (`iduserend`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atributos`
--
ALTER TABLE `atributos`
MODIFY `id_atributo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `atributos_valores`
--
ALTER TABLE `atributos_valores`
MODIFY `id_valor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `boletin`
--
ALTER TABLE `boletin`
MODIFY `idboletin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `categorias_productos`
--
ALTER TABLE `categorias_productos`
MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `combinaciones_productos`
--
ALTER TABLE `combinaciones_productos`
MODIFY `id_combinacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `correo1`
--
ALTER TABLE `correo1`
MODIFY `idcorreo1` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `correo1img`
--
ALTER TABLE `correo1img`
MODIFY `idcorreoimg1` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `correo1img2`
--
ALTER TABLE `correo1img2`
MODIFY `idcorreo1img2` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `direcciones`
--
ALTER TABLE `direcciones`
MODIFY `iddireccion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
MODIFY `id_faq` tinyint(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `img_producto`
--
ALTER TABLE `img_producto`
MODIFY `id_img_producto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `impuestos`
--
ALTER TABLE `impuestos`
MODIFY `id_impuesto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `marcas`
--
ALTER TABLE `marcas`
MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `orden`
--
ALTER TABLE `orden`
MODIFY `idorden` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permiso`
--
ALTER TABLE `permiso`
MODIFY `idpermiso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `plantilla_mailing`
--
ALTER TABLE `plantilla_mailing`
MODIFY `idplantilla` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `progreso_mailing`
--
ALTER TABLE `progreso_mailing`
MODIFY `idmailing` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rangos_transporte`
--
ALTER TABLE `rangos_transporte`
MODIFY `id_rango_transporte` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
MODIFY `idslide` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tiposusuario`
--
ALTER TABLE `tiposusuario`
MODIFY `idtipousuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `transportes`
--
ALTER TABLE `transportes`
MODIFY `id_transporte` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `userend`
--
ALTER TABLE `userend`
MODIFY `iduserend` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;