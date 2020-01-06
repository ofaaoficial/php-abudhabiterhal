-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2019 a las 21:21:51
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `abudhabi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `places`
--

INSERT INTO `places` (`id`, `title`, `picture`, `description`) VALUES
(1, 'Titulo 1', 'imgs/place1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, architecto commodi consequatur culpa deleniti dolorem eaque esse expedita fugiat ipsam, ipsum molestiae nesciunt omnis pariatur perferendis saepe sapiente tempora totam ut voluptate! Architecto autem cupiditate eveniet minima quae? Consequuntur deleniti, dicta error esse eveniet ex fuga nobis perspiciatis rerum veniam! Dignissimos impedit minus nostrum provident quos rem, repellendus sit veniam? Ad beatae doloribus nostrum se'),
(2, 'Titulo 2', 'imgs/place2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, architecto commodi consequatur culpa deleniti dolorem eaque esse expedita fugiat ipsam, ipsum molestiae nesciunt omnis pariatur perferendis saepe sapiente tempora totam ut voluptate! Architecto autem cupiditate eveniet minima quae? Consequuntur deleniti, dicta error esse eveniet ex fuga nobis perspiciatis rerum veniam! Dignissimos impedit minus nostrum provident quos rem, repellendus sit veniam? Ad beatae doloribus nostrum se'),
(3, 'Titulo 3', 'imgs/place1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, architecto commodi consequatur culpa deleniti dolorem eaque esse expedita fugiat ipsam, ipsum molestiae nesciunt omnis pariatur perferendis saepe sapiente tempora totam ut voluptate! Architecto autem cupiditate eveniet minima quae? Consequuntur deleniti, dicta error esse eveniet ex fuga nobis perspiciatis rerum veniam! Dignissimos impedit minus nostrum provident quos rem, repellendus sit veniam? Ad beatae doloribus nostrum se'),
(4, 'Titulo 4', 'imgs/place2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, architecto commodi consequatur culpa deleniti dolorem eaque esse expedita fugiat ipsam, ipsum molestiae nesciunt omnis pariatur perferendis saepe sapiente tempora totam ut voluptate! Architecto autem cupiditate eveniet minima quae? Consequuntur deleniti, dicta error esse eveniet ex fuga nobis perspiciatis rerum veniam! Dignissimos impedit minus nostrum provident quos rem, repellendus sit veniam? Ad beatae doloribus nostrum se'),
(5, 'Titulo 5', 'imgs/place1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid amet at consequatur, debitis dicta dolorem excepturi fugiat illo laudantium magnam maxime optio quidem quis, recusandae rem temporibus! Atque consequuntur, cupiditate dignissimos dolor et, exercitationem explicabo harum id impedit in labore molestiae nemo perspiciatis quae saepe similique vel, vero. Error inventore nobis sed suscipit? Consequuntur cumque dolor dolores ea eum excepturi fuga, iure molestiae nam nemo quae'),
(6, 'Titulo 6', 'imgs/place2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid amet at consequatur, debitis dicta dolorem excepturi fugiat illo laudantium magnam maxime optio quidem quis, recusandae rem temporibus! Atque consequuntur, cupiditate dignissimos dolor et, exercitationem explicabo harum id impedit in labore molestiae nemo perspiciatis quae saepe similique vel, vero. Error inventore nobis sed suscipit? Consequuntur cumque dolor dolores ea eum excepturi fuga, iure molestiae nam nemo quae'),
(7, 'Titulo 7', 'imgs/place1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid amet at consequatur, debitis dicta dolorem excepturi fugiat illo laudantium magnam maxime optio quidem quis, recusandae rem temporibus! Atque consequuntur, cupiditate dignissimos dolor et, exercitationem explicabo harum id impedit in labore molestiae nemo perspiciatis quae saepe similique vel, vero. Error inventore nobis sed suscipit? Consequuntur cumque dolor dolores ea eum excepturi fuga, iure molestiae nam nemo quae'),
(8, 'Titulo 8', 'imgs/place2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid amet at consequatur, debitis dicta dolorem excepturi fugiat illo laudantium magnam maxime optio quidem quis, recusandae rem temporibus! Atque consequuntur, cupiditate dignissimos dolor et, exercitationem explicabo harum id impedit in labore molestiae nemo perspiciatis quae saepe similique vel, vero. Error inventore nobis sed suscipit? Consequuntur cumque dolor dolores ea eum excepturi fuga, iure molestiae nam nemo quae'),
(9, 'Titulo 9', 'imgs/place1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid amet at consequatur, debitis dicta dolorem excepturi fugiat illo laudantium magnam maxime optio quidem quis, recusandae rem temporibus! Atque consequuntur, cupiditate dignissimos dolor et, exercitationem explicabo harum id impedit in labore molestiae nemo perspiciatis quae saepe similique vel, vero. Error inventore nobis sed suscipit? Consequuntur cumque dolor dolores ea eum excepturi fuga, iure molestiae nam nemo quae'),
(10, 'Titulo 10', 'imgs/place1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid deleniti dolorem doloremque ducimus ea ex expedita fugit hic illum iste iure laboriosam maxime minima nam nemo nisi numquam obcaecati, odit officiis perferendis, quam qui quisquam recusandae repellendus suscipit tempora vel voluptas. A fuga labore maiores maxime mollitia quod voluptates? Consequatur distinctio, dolore dolorum et iste mollitia non nostrum quasi recusandae sunt. Ad alias, amet atque debitis doloribus eaque esse in i');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'ofaaoficial', 'oscar123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
