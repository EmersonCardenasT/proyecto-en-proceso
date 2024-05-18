-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2024 a las 16:26:22
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
(38, '1688442235_blog2.jpg', 'Proyecto y Trabajos estudiantiles', 'Lorem ipsum dolors sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.'),
(39, '1688442252_blog3.jpg', 'Consejos Educativos Y Recursos', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatboot`
--

CREATE TABLE `chatboot` (
  `id` int(11) NOT NULL,
  `messages` mediumtext NOT NULL,
  `response` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `chatboot`
--

INSERT INTO `chatboot` (`id`, `messages`, `response`) VALUES
(1, 'hola|Hola', 'Hola,soy ManuBoot.Estoy para responder preguntas relacionadas con el colegio Emanuel.Espero ayudarte.'),
(2, 'Cual es la dirección del Colegio Emanuel?|Donde esta ubicado el Colegio Emanuel?', 'El Colegio Emanuel está ubicado en la Calle Principal Jr.Jose Balta 386, Bajo Pichanaqui, Perú.'),
(3, 'Cual es el número de teléfono del Colegio Emanuel?|Numero del Colegio Emanuel?', 'El número de teléfono del Colegio Emanuel es 946245889'),
(4, 'Cual es el horario de clases en el Colegio Emanuel?|Horario de clases?', 'Las clases en el Colegio Emanuel se llevan a cabo de lunes a viernes de 8:00 a.m. a 2:00 p.m.'),
(5, 'Cual es el enfoque educativo del Colegio Emanuel?', 'El Colegio Emanuel se enfoca en brindar una educación integral y de calidad, fomentando el desarrollo académico y personal de los estudiantes.'),
(6, 'Que niveles educativos ofrece el Colegio Emanuel?', 'El Colegio Emanuel ofrece educación desde Inicial, Primaria y Secundaria.'),
(7, 'Cuales son las actividades extracurriculares disponibles en el Colegio Emanuel?|Que actividades tiene el Colegio Emanuel?', 'En el Colegio Emanuel, los estudiantes pueden participar en actividades como deportes, arte, música y clubes académicos.'),
(8, 'Cual es el lema del Colegio Emanuel?|Cual es el lema?', 'El lema del Colegio Emanuel es \"Forjando una enseñanza al más alto nivel.\"'),
(9, 'Cual es el uniforme escolar del Colegio Emanuel?|El uniforme?', 'El uniforme escolar del Colegio Emanuel consta de camisa blanca, pantalón o falda azul marino y zapatos negros.'),
(10, 'Cuales son los idiomas que se enseñan en el Colegio Emanuel?|Que idioma enseñan?', 'En el Colegio Emanuel se enseñan los idiomas inglés y español.'),
(11, 'El Colegio Emanuel cuenta con transporte escolar?', 'Sí, el Colegio Emanuel ofrece servicio de transporte escolar para los estudiantes.'),
(12, 'Cuales son las instalaciones deportivas del Colegio Emanuel?', 'El Colegio Emanuel cuenta con canchas de fútbol, baloncesto y voleibol para la práctica deportiva de los estudiantes.'),
(13, 'El Colegio Emanuel ofrece programas de intercambio estudiantil?', 'Sí, el Colegio Emanuel ofrece programas de intercambio estudiantil con otras instituciones educativas nacionales e internacionales.'),
(14, 'El Colegio Emanuel tiene programas de becas?|Tiene becas?', 'Sí, el Colegio Emanuel ofrece programas de becas para estudiantes destacados académicamente y con necesidades económicas.'),
(15, 'Cual es el costo de la matrícula en el Colegio Emanuel?|Precio de la matrícula?', 'El costo de la matrícula en el Colegio Emanuel es de S/200.00'),
(16, 'La matrícula incluye algun tipo de material o uniforme escolar?|La matrícula incluye todo?', 'No, la matrícula solo cubre los costos administrativos y de inscripción. Los materiales y el uniforme escolar son aparte.'),
(17, 'Cual es el periodo de pago de la matrícula?', 'El Colegio Emanuel establece un plazo para el pago de la matrícula, generalmente antes del inicio del año escolar.'),
(18, 'Hay algun descuento disponible para la matrícula en el Colegio Emanuel?|Hay descuento?', 'El Colegio Emanuel puede ofrecer descuentos en la matrícula en ciertos casos, como para hermanos que también estén matriculados.'),
(19, 'Que métodos de pago se aceptan para la matrícula?|Métodos de pago? ', 'El Colegio Emanuel acepta pagos en efectivo, transferencia bancaria o a través de plataformas electrónicas.'),
(20, 'Porque el nombre de Emanuel?', 'El nombre \"Emanuel\" se utiliza en referencia a la presencia divina y su significado es \"Dios está con nosotros\". Es un nombre que transmite esperanza, fe y protección espiritual.');

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
(4, '76015187', 'Emerson', 'Cardenas Torres', '929544215', 'emerxon123@gmail.com', 'Software', '1688445255_programacion.jpg'),
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
(71, 'Ayuda!', '1688485788_31084155_2087325427951464_8873196060357427200_n.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas_frecuentes`
--

CREATE TABLE `preguntas_frecuentes` (
  `id` int(11) NOT NULL,
  `pregunta` varchar(255) NOT NULL,
  `respuesta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `preguntas_frecuentes`
--

INSERT INTO `preguntas_frecuentes` (`id`, `pregunta`, `respuesta`) VALUES
(3, 'Como se llama el Colegio', 'Es Emanuel Correctamente Escrito'),
(5, 'Como me puedo comunicar con ustedes?', 'Por via Whatsapp o por nuestros canales alternativos como Facebook y a traves de nuestra pagina Web'),
(6, 'Precio de la matricula?', 'El precio va definido segun el grado y seccion.. Para mayor informacion cominacte con nosotros al Whatsapp 909 881 223');

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
(70, 998822000, 'Jose', 'Gutierres Sangez', 929544216, 'enneres@exaaa.com', 'Software wee', '1687663881_team-1.jpg', '123', '123'),
(71, 76015187, 'Emerson', 'Cardenas Torres', 929544215, 'enneres@exaaa.com', 'Software', '1688442089_profesor.jpg', '123123', '123123'),
(72, 11122, 'Calabazin', 'Halloween Soto', 1199223, 'emerxon123@gmail.com', 'Software', '1688442008_profesor.jpg', '123123', '123123'),
(73, 12345678, 'Emerson', 'Cardenas Torres', 929544215, 'emerxon123@gmail.com', 'Ing Software IA', '1688442054_profesor.jpg', '123123', '123123'),
(75, 76015187, 'Juan ', 'Orosco Quispe', 901828234, 'username@example.com', 'Software', '1694368097_blog1.jpg', '123123', '123123');

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
(5, 'Joaquin', '900100255', 'kaylee_901@gmail.com', 'Ciencia'),
(6, 'Leandro Castro', '901331223', '', 'Idiomas');

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
(13, 'Dibujo y pintura', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.'),
(14, 'Danza', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.'),
(15, 'Musica', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas et mollitia illo ipsam maxime corporis ut iusto recusandae asperiores officia, officiis aut consequuntur vero architecto dolore numquam incidunt eveniet.	');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_inicial`
--

CREATE TABLE `tb_inicial` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `primer_parrafo` varchar(2000) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `segundo_parrafo` varchar(2000) NOT NULL,
  `Tercersub_title` varchar(500) NOT NULL,
  `tercer_parrafo` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_inicial`
--

INSERT INTO `tb_inicial` (`id`, `title`, `primer_parrafo`, `sub_title`, `segundo_parrafo`, `Tercersub_title`, `tercer_parrafo`) VALUES
(1, 'NIVEL INCIAL ', 'AJISDGAS ASDGASDIO  aosdgj asdg oasidg ', 'Subtitulo', 'asjipdfs sdfpsd sdpfsdjpf ', 'Tercer subtitulo', 'asdiogjio asdof s 12312130 sd900sdf ');

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
-- Indices de la tabla `chatboot`
--
ALTER TABLE `chatboot`
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
-- Indices de la tabla `preguntas_frecuentes`
--
ALTER TABLE `preguntas_frecuentes`
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
-- Indices de la tabla `tb_inicial`
--
ALTER TABLE `tb_inicial`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `chatboot`
--
ALTER TABLE `chatboot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `clases_populares`
--
ALTER TABLE `clases_populares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `preguntas_frecuentes`
--
ALTER TABLE `preguntas_frecuentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `registro_profesores`
--
ALTER TABLE `registro_profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `reserva_asientos`
--
ALTER TABLE `reserva_asientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `talleres`
--
ALTER TABLE `talleres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tb_inicial`
--
ALTER TABLE `tb_inicial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
