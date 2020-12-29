-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-12-2020 a las 02:20:57
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `NAMEUS` varchar(20) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`ID`, `NAMEUS`, `NAME`, `LASTNAME`, `PASSWORD`) VALUES
(48, 'hola mundo', 'jessica', 'araujo tapullima', '$2y$10$2hRUEPTkzmOpnRaOFBQrX.KNrZEFGKz7TSq/Uy1KbTB/DiZGwZiPq'),
(49, 'tatianaOl', 'tatiana', 'vela dias', '$2y$10$2hRUEPTkzmOpnRaOFBQrX.KNrZEFGKz7TSq/Uy1KbTB/DiZGwZiPq'),
(50, 'mia khalifia', 'Sarah Joe', 'Mia Callista', '$2y$10$2hRUEPTkzmOpnRaOFBQrX.KNrZEFGKz7TSq/Uy1KbTB/DiZGwZiPq'),
(51, 'nuevoUser', 'juan', 'app1 app2', '$2y$10$6uVGZQZFjDz3x7mAqyTeR.Pvl8d4nqohstcSrT7K.OJ6bI3ThVuhS'),
(52, 'aristedesF3', 'aristedes', 'flores bartra', '$2y$10$2hRUEPTkzmOpnRaOFBQrX.KNrZEFGKz7TSq/Uy1KbTB/DiZGwZiPq'),
(53, 'ANTO0101', 'ANTONIO', 'garcia martinez', '$2y$10$l/L721eXlEMLuuhfnOhpDeQWGYFKs6t002SyQnlgj/x988VvMqW8e'),
(54, 'proHack', 'jose', 'martines lopez', '$2y$10$dvfYq95oPlzj0sVCT5jniukZjqahj5zJrYe3G9WQyWTYuKZkrsdyy'),
(55, 'codeJavu', 'manuel', 'sanchez gonzales', '$2y$10$8zzU.r1s70pfBMAK484ureNH4PtEfnGEmvfD7mUBKuop9Ty2N1fx6'),
(56, 'isabelitaBB', 'isabel', 'fernandez moreno', '$2y$10$BZIV27P.HPBLNj4TYJRKy.1OI5fpF8LWTshpKZZ2E29MyQpt8V6NG'),
(57, 'javierT', 'javier', 'ruiz dias', '$2y$10$SE4Hgi191vhtz1MTqt1CZe88YiSdZH.WhhNde0.3qyLVTPuHJD5kS'),
(58, 'MKJ', 'miguel angel', 'hernandez muñoz', '$2y$10$PRRW8Zr8IJzf11qhUd4NBeN24kS1o1uA8l2kn0U/ZSa660JAzFDri'),
(59, 'PP33Code', 'ana maria', 'romero rubio', '$2y$10$nTNev2L2EL8Js.FmnAk1I.5TO2VAVhGmcloE0zMUfHcHmfYz/a8MK'),
(60, 'chinaDeveloper', 'elena', 'picaso ortega', '$2y$10$zetzTi3WOy5DSbaHVoQNUOhzmyciUEMI773W04UVQ4l.oZWWvl7rq'),
(61, 'JK', 'juan carlos', 'marin cuenca', '$2y$10$xworG2U3AtCt3O/4oQXppuCSSGbA5wCPlBMVNtjxfQXKP26oj4/fK'),
(62, 'jsDev', 'Francisco Jose', 'rodenas alarcon', '$2y$10$PVNvPbu9GjGztpfClc2RQOkbp.Qxmh4XPJA9aqV5KQJQeh3vm2bia'),
(63, 'JhonelCode', 'jhonel', 'puerta castillo', '$2y$10$bqakCY.f5FpDjqNsBjyCCOq1cl.8.6T5Iaeh0dfBZVef.6sS5jR2i'),
(64, 'admin', 'andres', 'puerta castillo', '$2y$10$H5n8tnsaw7r/SPHDjM7ViOzztjOmBKzcRPcOAgr482Ny65hnysqUa'),
(65, 'anonymous', 'nombre', 'apellido1 ap2', '$2y$10$ll2/X1QSK2zHBaqeIxpexuLkx5seys6e7t.cRCZEHrfwuMKJhvPnm'),
(66, 'prueva101', 'nombres', 'apellidos', '$2y$10$coi/MiaQjeBSjrzGA.M86OhXb5gg2kmcRgECxwNR1bY4T73UabaTa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
