-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:8889
-- Tiempo de generación: 10-06-2015 a las 02:55:25
-- Versión del servidor: 5.5.38
-- Versión de PHP: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `braggart`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atributos`
--

CREATE TABLE `atributos` (
`id_atributo` int(11) NOT NULL,
  `nombre_esp` text COLLATE utf8_unicode_ci NOT NULL,
  `nombre_eng` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `mostrar` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `atributos`
--

INSERT INTO `atributos` (`id_atributo`, `nombre_esp`, `nombre_eng`, `status`, `mostrar`) VALUES
(14, 'Talla', 'Size', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atributos_valores`
--

CREATE TABLE `atributos_valores` (
  `id_atributo` int(11) NOT NULL,
`id_valor` int(11) NOT NULL,
  `nombre_esp` text COLLATE utf8_unicode_ci NOT NULL,
  `nombre_eng` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `mostrar` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `atributos_valores`
--

INSERT INTO `atributos_valores` (`id_atributo`, `id_valor`, `nombre_esp`, `nombre_eng`, `status`, `mostrar`) VALUES
(14, 3, 'Grande', 'Large', 1, 0),
(14, 2, 'Mediana', 'Medium', 1, 0),
(14, 1, 'Chica', 'Small', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boletin`
--

CREATE TABLE `boletin` (
`idboletin` int(11) NOT NULL,
  `correo` text COLLATE utf8_unicode_ci NOT NULL,
  `token` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `boletin`
--

INSERT INTO `boletin` (`idboletin`, `correo`, `token`, `status`) VALUES
(1, 'brent.heftye@hotmail.com', '4a32f0ff41dcbd6dd43997df22e3d5fe', 1),
(2, 'brent@locker.com.mx', 'd9d5fcd0bc01d355dcf53ad7b90be4ea', 1),
(3, 'bheftye92@hotmail.com', 'e6d975b221479aa05a7c91247baedfc6', 1),
(4, 'bheftye92@gmail.com', 'd9d5fcd0bc01d355dcf53ad7b90be4ea', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_productos`
--

CREATE TABLE `categorias_productos` (
`id_categoria` int(11) NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `combinaciones_atributos_valores`
--

CREATE TABLE `combinaciones_atributos_valores` (
  `id_combinacion` int(11) NOT NULL,
  `id_atributo` int(11) NOT NULL,
  `id_valor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `combinaciones_atributos_valores`
--

INSERT INTO `combinaciones_atributos_valores` (`id_combinacion`, `id_atributo`, `id_valor`) VALUES
(55, 14, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `combinaciones_imagenes`
--

CREATE TABLE `combinaciones_imagenes` (
  `id_combinacion` int(11) NOT NULL,
  `id_imagen` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `combinaciones_imagenes`
--

INSERT INTO `combinaciones_imagenes` (`id_combinacion`, `id_imagen`) VALUES
(55, 15),
(55, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `combinaciones_productos`
--

CREATE TABLE `combinaciones_productos` (
`id_combinacion` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `stock` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `mostrar` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `combinaciones_productos`
--

INSERT INTO `combinaciones_productos` (`id_combinacion`, `id_producto`, `nombre`, `stock`, `status`, `mostrar`) VALUES
(55, 4, 'Grande', '5', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config_mailing`
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
-- Volcado de datos para la tabla `config_mailing`
--

INSERT INTO `config_mailing` (`idconfig`, `correo_noreply`, `correo_standard`, `facebook`, `twitter`, `instagram`, `youtube`) VALUES
(9, 'no-reply@locker.com.mx', 'hola@locker.com.mx', 'www.facebook.com', 'www.twitter.com', 'www.instagram.com', 'www.youtube.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `idcontacto` int(2) NOT NULL,
  `correo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `emisor` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`idcontacto`, `correo`, `emisor`) VALUES
(1, 'bheftye92@gmail.com', 'bheftye92@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correo1`
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
-- Estructura de tabla para la tabla `correo1img`
--

CREATE TABLE `correo1img` (
`idcorreoimg1` int(11) NOT NULL,
  `idcorreo1` int(11) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correo1img2`
--

CREATE TABLE `correo1img2` (
`idcorreo1img2` int(11) NOT NULL,
  `idcorreo1` int(11) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosuserend`
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
-- Volcado de datos para la tabla `datosuserend`
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
-- Estructura de tabla para la tabla `datosusuario`
--

CREATE TABLE `datosusuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datosusuario`
--

INSERT INTO `datosusuario` (`idusuario`, `nombre`, `email`, `telefono`, `token`) VALUES
(17, 'Administrador', 'bheftye92@gmail.com', '', '3426b6eeb6b7cc31439d937386a8fece'),
(20, 'Yelmy Maria Pech Miranda', 'yelmymc@hotmail.com', '9999999999', 'db61549a47e6ee5d8c4c0d244f3f939a'),
(21, 'Manuel Alejandro MÃ©ndez Cervera', 'manuel_amc@outlook.com', '9999580867', 'bcfe4c66c62c46a31f2dd89ef211777e');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_orden`
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
-- Estructura de tabla para la tabla `direcciones`
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
-- Estructura de tabla para la tabla `faq`
--

CREATE TABLE `faq` (
`id_faq` tinyint(1) NOT NULL,
  `contenido_esp` longtext COLLATE utf8_unicode_ci NOT NULL,
  `contenido_eng` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `faq`
--

INSERT INTO `faq` (`id_faq`, `contenido_esp`, `contenido_eng`) VALUES
(1, '&lt;div class=&quot;col-lg-12&quot; style=&quot;width: 845.515625px; font-size: 14.4444446563721px; line-height: 22.2222232818604px;&quot;&gt;&lt;h5&gt;Â¿Tienen tienda fÃ­sica en MÃ©xico?&lt;/h5&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.&lt;/p&gt;&lt;/div&gt;&lt;div class=&quot;col-lg-12&quot; style=&quot;width: 845.515625px; font-size: 14.4444446563721px; line-height: 22.2222232818604px;&quot;&gt;&lt;h5&gt;libero venenatis faucibus&lt;/h5&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.&lt;/p&gt;&lt;/div&gt;&lt;div class=&quot;col-lg-12&quot; style=&quot;width: 845.515625px; font-size: 14.4444446563721px; line-height: 22.2222232818604px;&quot;&gt;&lt;h5&gt;Pellentesque eu&lt;/h5&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.&lt;/p&gt;&lt;/div&gt;&lt;div class=&quot;col-lg-12&quot; style=&quot;width: 845.515625px; font-size: 14.4444446563721px; line-height: 22.2222232818604px;&quot;&gt;&lt;h5&gt;Donec vitae&lt;/h5&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.&lt;/p&gt;&lt;/div&gt;&lt;div class=&quot;col-lg-12&quot; style=&quot;width: 845.515625px; font-size: 14.4444446563721px; line-height: 22.2222232818604px;&quot;&gt;&lt;h5&gt;Apien ut libero&lt;/h5&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.&lt;/p&gt;&lt;/div&gt;', '&lt;div class=&quot;col-lg-12&quot; style=&quot;width: 845.515625px; font-size: 14.4444446563721px; line-height: 22.2222232818604px;&quot;&gt;&lt;h5&gt;Do you have a physical store in Mexico?&lt;/h5&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.&lt;/p&gt;&lt;/div&gt;&lt;div class=&quot;col-lg-12&quot; style=&quot;width: 845.515625px; font-size: 14.4444446563721px; line-height: 22.2222232818604px;&quot;&gt;&lt;h5&gt;libero venenatis faucibus&lt;/h5&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.&lt;/p&gt;&lt;/div&gt;&lt;div class=&quot;col-lg-12&quot; style=&quot;width: 845.515625px; font-size: 14.4444446563721px; line-height: 22.2222232818604px;&quot;&gt;&lt;h5&gt;Pellentesque eu&lt;/h5&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.&lt;/p&gt;&lt;/div&gt;&lt;div class=&quot;col-lg-12&quot; style=&quot;width: 845.515625px; font-size: 14.4444446563721px; line-height: 22.2222232818604px;&quot;&gt;&lt;h5&gt;Donec vitae&lt;/h5&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.&lt;/p&gt;&lt;/div&gt;&lt;div class=&quot;col-lg-12&quot; style=&quot;width: 845.515625px; font-size: 14.4444446563721px; line-height: 22.2222232818604px;&quot;&gt;&lt;h5&gt;Apien ut libero&lt;/h5&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.&lt;/p&gt;&lt;/div&gt;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_producto`
--

CREATE TABLE `img_producto` (
`id_img_producto` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `orden` int(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `img_producto`
--

INSERT INTO `img_producto` (`id_img_producto`, `id_producto`, `ruta`, `titulo`, `orden`) VALUES
(1, 1, '2eb70b63.jpg', '', 1),
(2, 1, 'c3b63e40.jpg', '', 2),
(3, 1, '1583bf94.jpg', '', 3),
(4, 1, 'd225d8dd.jpg', '', 4),
(5, 2, '56266874.jpg', '', 5),
(6, 2, '4508f98e.jpg', '', 6),
(7, 2, 'f341f08b.jpg', '', 7),
(8, 2, '8d3a212c.jpg', '', 8),
(9, 3, '77ea0d48.jpg', '', 9),
(10, 3, 'c4346469.jpg', '', 10),
(11, 3, '7ccaa1e7.jpg', '', 11),
(12, 3, '3cb2e7e7.jpg', '', 12),
(13, 4, 'c308bcaf.jpg', '', 13),
(14, 4, 'f823a7f7.jpg', '', 14),
(15, 4, 'a67b5eae.jpg', '', 15),
(16, 4, '913b34b3.jpg', '', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impuestos`
--

CREATE TABLE `impuestos` (
`id_impuesto` int(11) NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `porcentaje` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `impuestos`
--

INSERT INTO `impuestos` (`id_impuesto`, `nombre`, `porcentaje`) VALUES
(1, 'IVA', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `latienda`
--

CREATE TABLE `latienda` (
`id_latienda` int(11) NOT NULL,
  `historia` longtext COLLATE utf8_unicode_ci NOT NULL,
  `descripcion1` text COLLATE utf8_unicode_ci NOT NULL,
  `descripcion2` text COLLATE utf8_unicode_ci NOT NULL,
  `descripcion3` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `latienda`
--

INSERT INTO `latienda` (`id_latienda`, `historia`, `descripcion1`, `descripcion2`, `descripcion3`) VALUES
(1, '&lt;p&gt;BRAGGART es una marca orgullosamente yucateca con sede en la ciudad de MÃ©rida.&lt;/p&gt;&lt;p&gt;Nace en 2015 con el objetivo de crear camisas para caballero de alta calidad.&lt;/p&gt;', '&lt;p&gt;BRAGGART es una marca orgullosamente mexicana, elegante y hecha para ti.&amp;nbsp;&lt;br&gt;&lt;/p&gt;', '&lt;p&gt;Tenemos envÃ­o a toda la repÃºblica.&lt;br&gt;&lt;/p&gt;', '&lt;p&gt;Aceptamos pagos con tarjeta de crÃ©dito y de dÃ©bito.&lt;br&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
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
-- Volcado de datos para la tabla `marcas`
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
-- Estructura de tabla para la tabla `marcas_productos`
--

CREATE TABLE `marcas_productos` (
  `id_marca` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
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
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
`idpermiso` int(11) NOT NULL,
  `nompermiso` varchar(255) NOT NULL,
  `clavepermiso` varchar(255) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permiso`
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
-- Estructura de tabla para la tabla `plantilla_mailing`
--

CREATE TABLE `plantilla_mailing` (
`idplantilla` int(11) NOT NULL,
  `nombre_plantilla` text COLLATE utf8_unicode_ci NOT NULL,
  `xml` text COLLATE utf8_unicode_ci NOT NULL,
  `num_usadas` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `img_principal`, `titulo_esp`, `descripcion_esp`, `url_amigable_esp`, `fecha_creacion`, `fecha_modificacion`, `mostrar`, `status`, `orden`, `titulo_eng`, `descripcion_eng`, `url_amigable_eng`, `precio_mxn`, `precio_usd`, `peso`, `clave`, `tags_esp`, `meta_titulo_esp`, `meta_descripcion_esp`, `tags_eng`, `meta_titulo_eng`, `meta_descripcion_eng`, `pdf_adjunto`, `stock_general`, `impuesto`, `id_marca`) VALUES
(1, 'c22412a7.jpg', 'Navy Scarlet', '&amp;lt;p&amp;gt;Camisa 100% de algodÃ³n.&amp;amp;nbsp;&amp;lt;/p&amp;gt;', 'navy-scarlet', '2015-03-05', '2015-04-18', 0, 1, 1, 'CAMISA 1', '&amp;lt;p&amp;gt;Camisa 100% de algodÃ³n.&amp;amp;nbsp;&amp;lt;/p&amp;gt;', 'camisa-1', 600, 600, '0.200', 'SRSECS-123', 'camisa,algodon', 'CAMISA 1', 'Camisa 100% de algodÃ³n. ', 'camisa,algodon', 'CAMISA 1', 'Camisa 100% de algodÃ³n. ', '', 3, 16, 0),
(2, '341b8e25.jpg', 'Retro Seafarer', '&amp;lt;p&amp;gt;Camisa 100% de algodÃ³n, excelente para el calor.&amp;lt;/p&amp;gt;', 'retro-seafarer', '2015-03-05', '2015-04-18', 0, 1, 2, 'CAMISA 2', '&amp;lt;p&amp;gt;Camisa 100% de algodÃ³n, excelente para el calor.&amp;lt;/p&amp;gt;', 'camisa-2', 550, 550, '0.200', 'DRDFDDFD-213', 'algodÃ³n,calor,camisa', 'CAMISA 2', 'Camisa 100% de algodÃ³n, excelente para el calor.', 'algodÃ³n,calor,camisa', 'CAMISA 2', 'Camisa 100% de algodÃ³n, excelente para el calor.', '', 3, 16, 0),
(3, '2f0d379a.jpg', 'Oxblood', '&amp;lt;p&amp;gt;Camisa 100% de algodÃ³n&amp;lt;/p&amp;gt;', 'oxblood', '2015-03-05', '2015-04-18', 0, 1, 3, 'CAMISA 3', '&amp;lt;p&amp;gt;Camisa 100% de algodÃ³n&amp;lt;/p&amp;gt;', 'camisa-3', 750, 750, '0.200', 'C-1234', 'algodon,camisa', 'CAMISA 3', 'Camisa 100% de algodÃ³n', 'algodon,camisa', 'CAMISA 3', 'Camisa 100% de algodÃ³n', '', 3, 16, 0),
(4, 'ab65797d.jpg', 'Vintage Navy', '&amp;lt;p&amp;gt;Camisa 100% de algÃ³don, con encaje blanco.&amp;lt;/p&amp;gt;', 'vintage-navy', '2015-03-05', '2015-04-18', 0, 1, 4, 'CAMISA 4', '&amp;lt;p&amp;gt;Camisa 100% de algÃ³don, con encaje blanco.&amp;lt;/p&amp;gt;', 'camisa-4', 600, 600, '0.300', 'SRDFE-12345', 'encaje,algodon,camisa', 'CAMISA 4', 'Camisa 100% de algÃ³don, con encaje blanco.', 'encaje,algodon,camisa', 'CAMISA 4', 'Camisa 100% de algÃ³don, con encaje blanco.', '', 3, 16, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_categorias`
--

CREATE TABLE `productos_categorias` (
  `id_producto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_transportes`
--

CREATE TABLE `productos_transportes` (
  `id_producto` int(11) NOT NULL,
  `id_transporte` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos_transportes`
--

INSERT INTO `productos_transportes` (`id_producto`, `id_transporte`) VALUES
(1, 3),
(1, 6),
(2, 1),
(2, 5),
(3, 3),
(3, 4),
(3, 6),
(4, 1),
(4, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progreso_mailing`
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
-- Volcado de datos para la tabla `progreso_mailing`
--

INSERT INTO `progreso_mailing` (`idmailing`, `idcorreo`, `tipocorreo`, `numcorreos`, `enviados`, `status`, `fechayhorainicio`, `fechayhorafinal`, `duracion`, `plantilla`, `permitido`) VALUES
(1, 6, 1, 4, 5, 1, '2014-10-13 12:50:03pm', '2014-10-13 12:53:10pm', '', 1, 1),
(2, 6, 1, 4, 4, 1, '2014-10-13 12:57:54pm', '2014-10-13 12:59:01pm', '', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rangos_transporte`
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
-- Volcado de datos para la tabla `rangos_transporte`
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
-- Estructura de tabla para la tabla `redes_sociales`
--

CREATE TABLE `redes_sociales` (
  `id_redes_sociales` tinyint(1) NOT NULL,
  `facebook` text COLLATE utf8_unicode_ci NOT NULL,
  `twitter` text COLLATE utf8_unicode_ci NOT NULL,
  `instagram` text COLLATE utf8_unicode_ci NOT NULL,
  `pinterest` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `redes_sociales`
--

INSERT INTO `redes_sociales` (`id_redes_sociales`, `facebook`, `twitter`, `instagram`, `pinterest`) VALUES
(1, 'http://facebook.com', 'http://twitter.com', 'http://instagram.com', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slide`
--

CREATE TABLE `slide` (
`idslide` int(11) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `urlvideo` varchar(250) NOT NULL,
  `status` int(2) NOT NULL,
  `texto` text NOT NULL,
  `orden` int(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `slide`
--

INSERT INTO `slide` (`idslide`, `ruta`, `titulo`, `urlvideo`, `status`, `texto`, `orden`) VALUES
(2, 'bcc6ff63.png', 'Slide 1', '', 1, '&lt;p&gt;Primera imagen&lt;/p&gt;', 2),
(3, '676a4fea.jpg', 'Slide 2', '', 0, '&lt;p&gt;Imagen 2&lt;/p&gt;', 3),
(4, '6e5d7575.jpg', 'Slide 3', '', 1, '&lt;p&gt;Imagen 3&lt;/p&gt;', 1),
(5, '8c8e5fed.jpg', 'Slide 4', '', 1, '&lt;p&gt;Imagen 4&lt;/p&gt;', 0),
(6, '0e5ea138.jpg', 'Imagen 4', '', 0, '&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposusuario`
--

CREATE TABLE `tiposusuario` (
`idtipousuario` int(11) NOT NULL,
  `nomtipousuario` varchar(255) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tiposusuario`
--

INSERT INTO `tiposusuario` (`idtipousuario`, `nomtipousuario`, `status`) VALUES
(9, 'Administrador', 1),
(10, 'Secretario/a', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuarioxpermiso`
--

CREATE TABLE `tipousuarioxpermiso` (
  `idtipousuario` int(11) NOT NULL,
  `idpermiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipousuarioxpermiso`
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
-- Estructura de tabla para la tabla `transportes`
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
-- Volcado de datos para la tabla `transportes`
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
-- Estructura de tabla para la tabla `userend`
--

CREATE TABLE `userend` (
`iduserend` int(11) NOT NULL,
  `correo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(2) NOT NULL,
  `token` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `userend`
--

INSERT INTO `userend` (`iduserend`, `correo`, `password`, `status`, `token`) VALUES
(22, 'bebelin@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '1128f6323d60efeaf8c6a11aa407b5dd'),
(21, 'brent@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '1871691f21c022b364af4be6e0a5c279'),
(20, 'bheftye92@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 'd9d5fcd0bc01d355dcf53ad7b90be4ea');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
`idusuario` int(11) NOT NULL,
  `nomusuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(5) NOT NULL,
  `idtipousuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nomusuario`, `password`, `status`, `idtipousuario`) VALUES
(17, 'admin', '202cb962ac59075b964b07152d234b70', 1, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wishlist`
--

CREATE TABLE `wishlist` (
`id_wishlist` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_userend` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atributos`
--
ALTER TABLE `atributos`
 ADD PRIMARY KEY (`id_atributo`);

--
-- Indices de la tabla `atributos_valores`
--
ALTER TABLE `atributos_valores`
 ADD PRIMARY KEY (`id_atributo`,`id_valor`);

--
-- Indices de la tabla `boletin`
--
ALTER TABLE `boletin`
 ADD PRIMARY KEY (`idboletin`);

--
-- Indices de la tabla `categorias_productos`
--
ALTER TABLE `categorias_productos`
 ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `combinaciones_atributos_valores`
--
ALTER TABLE `combinaciones_atributos_valores`
 ADD PRIMARY KEY (`id_combinacion`,`id_atributo`,`id_valor`);

--
-- Indices de la tabla `combinaciones_imagenes`
--
ALTER TABLE `combinaciones_imagenes`
 ADD PRIMARY KEY (`id_combinacion`,`id_imagen`);

--
-- Indices de la tabla `combinaciones_productos`
--
ALTER TABLE `combinaciones_productos`
 ADD PRIMARY KEY (`id_combinacion`,`id_producto`);

--
-- Indices de la tabla `correo1`
--
ALTER TABLE `correo1`
 ADD PRIMARY KEY (`idcorreo1`);

--
-- Indices de la tabla `correo1img`
--
ALTER TABLE `correo1img`
 ADD PRIMARY KEY (`idcorreoimg1`);

--
-- Indices de la tabla `correo1img2`
--
ALTER TABLE `correo1img2`
 ADD PRIMARY KEY (`idcorreo1img2`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
 ADD PRIMARY KEY (`iddireccion`);

--
-- Indices de la tabla `faq`
--
ALTER TABLE `faq`
 ADD PRIMARY KEY (`id_faq`);

--
-- Indices de la tabla `img_producto`
--
ALTER TABLE `img_producto`
 ADD PRIMARY KEY (`id_img_producto`);

--
-- Indices de la tabla `impuestos`
--
ALTER TABLE `impuestos`
 ADD PRIMARY KEY (`id_impuesto`);

--
-- Indices de la tabla `latienda`
--
ALTER TABLE `latienda`
 ADD PRIMARY KEY (`id_latienda`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
 ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `marcas_productos`
--
ALTER TABLE `marcas_productos`
 ADD PRIMARY KEY (`id_marca`,`id_producto`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
 ADD PRIMARY KEY (`idorden`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
 ADD PRIMARY KEY (`idpermiso`);

--
-- Indices de la tabla `plantilla_mailing`
--
ALTER TABLE `plantilla_mailing`
 ADD PRIMARY KEY (`idplantilla`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
 ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `productos_categorias`
--
ALTER TABLE `productos_categorias`
 ADD PRIMARY KEY (`id_producto`,`id_categoria`);

--
-- Indices de la tabla `productos_transportes`
--
ALTER TABLE `productos_transportes`
 ADD PRIMARY KEY (`id_producto`,`id_transporte`);

--
-- Indices de la tabla `progreso_mailing`
--
ALTER TABLE `progreso_mailing`
 ADD PRIMARY KEY (`idmailing`);

--
-- Indices de la tabla `rangos_transporte`
--
ALTER TABLE `rangos_transporte`
 ADD PRIMARY KEY (`id_rango_transporte`);

--
-- Indices de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
 ADD PRIMARY KEY (`id_redes_sociales`);

--
-- Indices de la tabla `slide`
--
ALTER TABLE `slide`
 ADD PRIMARY KEY (`idslide`);

--
-- Indices de la tabla `tiposusuario`
--
ALTER TABLE `tiposusuario`
 ADD PRIMARY KEY (`idtipousuario`);

--
-- Indices de la tabla `transportes`
--
ALTER TABLE `transportes`
 ADD PRIMARY KEY (`id_transporte`);

--
-- Indices de la tabla `userend`
--
ALTER TABLE `userend`
 ADD PRIMARY KEY (`iduserend`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `wishlist`
--
ALTER TABLE `wishlist`
 ADD PRIMARY KEY (`id_wishlist`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atributos`
--
ALTER TABLE `atributos`
MODIFY `id_atributo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `atributos_valores`
--
ALTER TABLE `atributos_valores`
MODIFY `id_valor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `boletin`
--
ALTER TABLE `boletin`
MODIFY `idboletin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `categorias_productos`
--
ALTER TABLE `categorias_productos`
MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `combinaciones_productos`
--
ALTER TABLE `combinaciones_productos`
MODIFY `id_combinacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT de la tabla `correo1`
--
ALTER TABLE `correo1`
MODIFY `idcorreo1` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `correo1img`
--
ALTER TABLE `correo1img`
MODIFY `idcorreoimg1` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `correo1img2`
--
ALTER TABLE `correo1img2`
MODIFY `idcorreo1img2` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
MODIFY `iddireccion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `faq`
--
ALTER TABLE `faq`
MODIFY `id_faq` tinyint(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `img_producto`
--
ALTER TABLE `img_producto`
MODIFY `id_img_producto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `impuestos`
--
ALTER TABLE `impuestos`
MODIFY `id_impuesto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `latienda`
--
ALTER TABLE `latienda`
MODIFY `id_latienda` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
MODIFY `idorden` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
MODIFY `idpermiso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT de la tabla `plantilla_mailing`
--
ALTER TABLE `plantilla_mailing`
MODIFY `idplantilla` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `progreso_mailing`
--
ALTER TABLE `progreso_mailing`
MODIFY `idmailing` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `rangos_transporte`
--
ALTER TABLE `rangos_transporte`
MODIFY `id_rango_transporte` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `slide`
--
ALTER TABLE `slide`
MODIFY `idslide` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tiposusuario`
--
ALTER TABLE `tiposusuario`
MODIFY `idtipousuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `transportes`
--
ALTER TABLE `transportes`
MODIFY `id_transporte` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `userend`
--
ALTER TABLE `userend`
MODIFY `iduserend` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `wishlist`
--
ALTER TABLE `wishlist`
MODIFY `id_wishlist` int(11) NOT NULL AUTO_INCREMENT;