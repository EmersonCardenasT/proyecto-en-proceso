-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2023 a las 16:16:34
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `emanuel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `DNI` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contrasenia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `DNI`, `usuario`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`, `contrasenia`) VALUES
(1, 76015187, 'admin', 'Emerson', 'Cardenas Torres', '929544215', 'Sagani', 'emerxon123@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`id`, `foto`, `titulo`, `descripcion`) VALUES
(3, '1687701440_trick-treat6-img.png', 'Fanastima', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.'),
(4, '1687701466_category2-img.png', 'Calabazitas lindas', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.'),
(5, '1687701480_new6-img.png', 'Vehiculo de tu amiga', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases_populares`
--

CREATE TABLE `clases_populares` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(1500) NOT NULL,
  `edad` varchar(150) NOT NULL,
  `sesiones` varchar(255) NOT NULL,
  `horario` varchar(255) NOT NULL,
  `costo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clases_populares`
--

INSERT INTO `clases_populares` (`id`, `foto`, `titulo`, `descripcion`, `edad`, `sesiones`, `horario`, `costo`) VALUES
(23, '1687666177_team-2.jpg', 'Logo', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.', '5', '10', '3pm - 5pm', '$200'),
(24, '1687666199_class-3.jpg', 'Oratoria', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.', '12', '500', '18:100', '500'),
(25, '1687666215_post-3.jpg', 'Horatorio', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.', '10 - 18', '10', '3pm - 5pm', '$200');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id` int(11) NOT NULL,
  `DNI` varchar(20) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id`, `DNI`, `nombre`, `apellidos`, `telefono`, `correo`, `especialidad`, `foto`) VALUES
(1, '76015187', 'emerzon', 'torres', '929544215', 'enneres@exaaa.com', 'Software', '1687704742_new1-img.png'),
(2, '00011122', 'Juan', 'Lincol', '55100223', 'wuuuuu@gmail.com', 'Barrendero', '1687704848_category3-img.png'),
(3, '989764566', 'Luis', 'Miguel Cajas', '128128812', 'luisluis@hotamil.com', 'Secretario', '1687704879_new5-img.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `nombre`, `imagen`) VALUES
(51, 'emerzon', '1687542253_matricula.jpg'),
(52, 'Emerson', '1687542258_portfolio-6.jpg'),
(53, 'nombre cambiado', '1687542262_class-1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_profesores`
--

CREATE TABLE `registro_profesores` (
  `id` int(11) NOT NULL,
  `DNI` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `curso` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `contrasenia` varchar(255) NOT NULL,
  `confirmarContrasenia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro_profesores`
--

INSERT INTO `registro_profesores` (`id`, `DNI`, `nombre`, `apellidos`, `telefono`, `correo`, `curso`, `foto`, `contrasenia`, `confirmarContrasenia`) VALUES
(69, 76015187, 'Juan', 'Luis Quispe', 123456, 'enneres@exaaa.com', 'Software', '1687663800_team-4.jpg', '123', '123'),
(70, 998822, 'MAria', 'Gutierres Sangez', 929544215, 'enneres@exaaa.com', 'Software wee', '1687663881_team-1.jpg', '123', '123'),
(71, 76015187, 'emerzon', 'torres', 929544215, 'enneres@exaaa.com', 'Software', '1687663921_testimonial-3.jpg', '123123', '123123'),
(72, 11122, 'Calabazin', 'Halloween Soto', 1199223, 'emerxon123@gmail.com', 'Software', '1687702719_trick-treat3-img.png', '123123', '123123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva_asientos`
--

CREATE TABLE `reserva_asientos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `celular` varchar(30) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `clase` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reserva_asientos`
--

INSERT INTO `reserva_asientos` (`id`, `nombre`, `celular`, `correo`, `clase`) VALUES
(4, 'Emerson Cardenas Torres', '929544215', 'emerxon123@gmail.com', 'Idiomas'),
(5, 'Joaquin', '900100255', 'kaylee_901@gmail.com', 'Ciencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talleres`
--

CREATE TABLE `talleres` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `talleres`
--

INSERT INTO `talleres` (`id`, `titulo`, `descripcion`) VALUES
(10, 'Php as', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.'),
(12, 'Trabajo en Equipo', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.'),
(13, 'Dota 2', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clases_populares`
--
ALTER TABLE `clases_populares`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro_profesores`
--
ALTER TABLE `registro_profesores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reserva_asientos`
--
ALTER TABLE `reserva_asientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `talleres`
--
ALTER TABLE `talleres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clases_populares`
--
ALTER TABLE `clases_populares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `registro_profesores`
--
ALTER TABLE `registro_profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `reserva_asientos`
--
ALTER TABLE `reserva_asientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `talleres`
--
ALTER TABLE `talleres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
