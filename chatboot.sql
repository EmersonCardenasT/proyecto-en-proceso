-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2023 a las 19:20:44
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `manuboot`
--

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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chatboot`
--
ALTER TABLE `chatboot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chatboot`
--
ALTER TABLE `chatboot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
