-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2023 a las 18:13:37
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
(37, '1688442230_blog1.jpg', 'Consejos de Alimentacion para tus Hijos', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.'),
(38, '1688442235_blog2.jpg', 'Proyectos y Trabajos estudiantiles', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.'),
(39, '1688442252_blog3.jpg', 'Consejos Educativos Y Recursos', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.');

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
(24, '1688441747_programacio_robotica.jpg', 'Programacion y Robotica', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.', '12', '500', '18:100', '500'),
(25, '1688441758_arte.jpg', 'Taller Arte y Creatividad', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.', '10 - 18', '10', '3pm - 5pm', '411'),
(26, '1688441763_deportes_niños.jpg', 'Clase de deportes al aire libre', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.', '5', '10', '3pm - 5pm', '$200');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `profesion` varchar(255) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `nombre`, `profesion`, `descripcion`, `estado`, `fecha`) VALUES
(4, 'Juan Quispe Quispe', 'Instructor', 'Un excelente colegio, buena eduacion academica... Recomendado', 1, '2023-06-29 17:18:18'),
(7, 'Gunnar Castro Iñigo', 'Desarrollo de Sistemas', 'Innovacion constante, educacion de primera... Profesores responsables', 0, '2023-06-30 03:29:15'),
(24, 'Cardenas Torres Emerson', 'Desarrollo de Software', 'Apoyo constante hacia los alumnos, proyectos innovadores.', 0, '2023-07-02 14:16:48');

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
(3, '989764566', 'Luis', 'Miguel Cajas', '128128812', 'luisluis@hotamil.com', 'Secretario', '1688445263_foto.png'),
(4, '76015187', 'emerzon', 'torres', '929544215', 'enneres@exaaa.com', 'Software', '1688445255_programacion.jpg'),
(5, '76015187', 'Luis', 'Taype', '+51929544215', 'enneres@exaaa.com', 'Ing Software IA', '1688445295_hollow-knight-fanart_3840x2160_xtrafondos.com.jpg'),
(6, '76015187', 'Juan', 'De la Peña', '+51929544215', 'emerxon123@gmail.com', 'Ing Software IA', '1688445320_430917.jpg');

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
(63, 'Actividad 1', '1688485722_30708484_2087325317951475_7089837295875915776_n.jpg'),
(64, 'Actividad 2', '1688485733_30727583_2087325567951450_3624082533802573824_n.jpg'),
(65, 'Actividad 3', '1688485739_30743931_2087325164618157_4256253324082282496_n.jpg'),
(66, 'Actividad 4', '1688485745_30762668_2087325141284826_7693016343943053312_n.jpg'),
(67, 'Actividad 5', '1688485750_31059507_2087325754618098_7407629824551813120_n.jpg'),
(68, 'Actividad 6', '1688485755_31076666_2087325747951432_6259319937999831040_n.jpg'),
(69, 'Avanzes', '1688485768_155286879_4426034604080523_3694317815964333892_n.jpg'),
(70, 'Infraestructura', '1688485776_155993887_4424622744221709_5532690220954635776_n.jpg'),
(71, 'Ayuda!', '1688485788_31084155_2087325427951464_8873196060357427200_n.jpg');

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
(70, 998822000, 'MAria', 'Gutierres Sangez', 929544215, 'enneres@exaaa.com', 'Software wee', '1687663881_team-1.jpg', '123', '123'),
(71, 76015187, 'Emerson', 'Cardenas Torres', 929544215, 'enneres@exaaa.com', 'Software', '1688442089_profesor.jpg', '123123', '123123'),
(72, 11122, 'Calabazin', 'Halloween Soto', 1199223, 'emerxon123@gmail.com', 'Software', '1688442008_profesor.jpg', '123123', '123123'),
(73, 12345678, 'Emerson', 'Cardenas Torres', 929544215, 'emerxon123@gmail.com', 'Ing Software IA', '1688442054_profesor.jpg', '123123', '123123'),
(74, 76015187, 'Emerson', 'Cardenas Torres', 2147483647, 'emerxon123@gmail.com', 'Ingnieria de Software', '1688530055_430917.jpg', '123123', '123123');

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
(12, 'Musica', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.'),
(13, 'Dibujo y pintura', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.'),
(14, 'Danza', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.');

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
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `clases_populares`
--
ALTER TABLE `clases_populares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `registro_profesores`
--
ALTER TABLE `registro_profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `reserva_asientos`
--
ALTER TABLE `reserva_asientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `talleres`
--
ALTER TABLE `talleres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
