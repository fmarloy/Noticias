-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2018 a las 08:53:32
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `notice`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `autor` varchar(50) NOT NULL,
  `texto` text NOT NULL,
  `imagen` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `autor`, `texto`, `imagen`, `created_at`, `updated_at`) VALUES
(22, 'La autoridad electoral mexicana acusa El Bronco de financiación ilegal durante su campaña', 'EL PAÍS', 'El instituto nacional electoral mexicano (INE) destapó este lunes un esquema de financiación ilegal de la campaña de Jaime Rodríguez Calderón, conocido como \'El Bronco\' por más de 13 millones de pesos (600.000 dólares). La autoridad electoral ha detectado una trama que incluye los delitos de defraudación fiscal, recursos de procedencia ilícita y malversación de recursos públicos a favor del candidato independiente y gobernador de Nuevo León hasta su postulación hace apenas cuatro meses. La denuncia ha sido elevada a la Procuraduría General de la República (PGR).\r\nEl INE detalló que la operación constaba de tres patas. Por un lado, el Bronco se habría servido de 652 empleados públicos del Gobierno de Nuevo León para recabar firmas durante su horaria laboral. La autoridad electoral constató además utilizó a particulares que simulaban ser donadores de la campaña, siendo en realidad una pantalla de los verdaderos financiadores: un puñado de empresas, algunas de ellas fantasma, sin siquiera registro mercantil. Otra de las prácticas consistía en que los ciudadanos que recababan los firmas a favor del candidato recibía dinero a través de tarjetas Saldazo-Oxxo cuyo gasto no estaba registrado.\r\nLa ley electoral mexicana prohíbe que las empresas aporten dinero a las campañas sin dejar constancia. Aparte de los fondos aportados por empresas, la candidatura del Bronco habría escondido a la autoridad otros seis millones de pesos gastados durante la campaña y sin fuente especificada. A falta de intervención de la Fiscalía, el Consejo General del INE ha multado de momento a la Rodriguez Calderón con 739.000 pesos.\r\n', '/foto.jpg', '2018-05-29 10:42:34', '2018-05-29 10:42:34'),
(24, 'La autoridad electoral mexicana acusa El Bronco de financiación ilegal durante su campaña', 'EL PAÍS', 'El instituto nacional electoral mexicano (INE) destapó este lunes un esquema de financiación ilegal de la campaña de Jaime Rodríguez Calderón, conocido como \'El Bronco\' por más de 13 millones de pesos (600.000 dólares). La autoridad electoral ha detectado una trama que incluye los delitos de defraudación fiscal, recursos de procedencia ilícita y malversación de recursos públicos a favor del candidato independiente y gobernador de Nuevo León hasta su postulación hace apenas cuatro meses. La denuncia ha sido elevada a la Procuraduría General de la República (PGR).\r\nEl INE detalló que la operación constaba de tres patas. Por un lado, el Bronco se habría servido de 652 empleados públicos del Gobierno de Nuevo León para recabar firmas durante su horaria laboral. La autoridad electoral constató además utilizó a particulares que simulaban ser donadores de la campaña, siendo en realidad una pantalla de los verdaderos financiadores: un puñado de empresas, algunas de ellas fantasma, sin siquiera registro mercantil. Otra de las prácticas consistía en que los ciudadanos que recababan los firmas a favor del candidato recibía dinero a través de tarjetas Saldazo-Oxxo cuyo gasto no estaba registrado.\r\nLa ley electoral mexicana prohíbe que las empresas aporten dinero a las campañas sin dejar constancia. Aparte de los fondos aportados por empresas, la candidatura del Bronco habría escondido a la autoridad otros seis millones de pesos gastados durante la campaña y sin fuente especificada. A falta de intervención de la Fiscalía, el Consejo General del INE ha multado de momento a la Rodriguez Calderón con 739.000 pesos.\r\n', '/foto.jpg', '2018-05-29 10:44:49', '2018-05-29 10:44:49'),
(25, 'La autoridad electoral mexicana acusa El Bronco de financiación ilegal durante su campaña', 'EL PAÍS', 'El instituto nacional electoral mexicano (INE) destapó este lunes un esquema de financiación ilegal de la campaña de Jaime Rodríguez Calderón, conocido como \'El Bronco\' por más de 13 millones de pesos (600.000 dólares). La autoridad electoral ha detectado una trama que incluye los delitos de defraudación fiscal, recursos de procedencia ilícita y malversación de recursos públicos a favor del candidato independiente y gobernador de Nuevo León hasta su postulación hace apenas cuatro meses. La denuncia ha sido elevada a la Procuraduría General de la República (PGR).\r\nEl INE detalló que la operación constaba de tres patas. Por un lado, el Bronco se habría servido de 652 empleados públicos del Gobierno de Nuevo León para recabar firmas durante su horaria laboral. La autoridad electoral constató además utilizó a particulares que simulaban ser donadores de la campaña, siendo en realidad una pantalla de los verdaderos financiadores: un puñado de empresas, algunas de ellas fantasma, sin siquiera registro mercantil. Otra de las prácticas consistía en que los ciudadanos que recababan los firmas a favor del candidato recibía dinero a través de tarjetas Saldazo-Oxxo cuyo gasto no estaba registrado.\r\nLa ley electoral mexicana prohíbe que las empresas aporten dinero a las campañas sin dejar constancia. Aparte de los fondos aportados por empresas, la candidatura del Bronco habría escondido a la autoridad otros seis millones de pesos gastados durante la campaña y sin fuente especificada. A falta de intervención de la Fiscalía, el Consejo General del INE ha multado de momento a la Rodriguez Calderón con 739.000 pesos.\r\n', '/foto.jpg', '2018-05-29 10:50:35', '2018-05-29 10:50:35'),
(26, 'La autoridad electoral mexicana acusa El Bronco de financiación ilegal durante su campaña', 'EL PAÍS', 'El instituto nacional electoral mexicano (INE) destapó este lunes un esquema de financiación ilegal de la campaña de Jaime Rodríguez Calderón, conocido como \'El Bronco\' por más de 13 millones de pesos (600.000 dólares). La autoridad electoral ha detectado una trama que incluye los delitos de defraudación fiscal, recursos de procedencia ilícita y malversación de recursos públicos a favor del candidato independiente y gobernador de Nuevo León hasta su postulación hace apenas cuatro meses. La denuncia ha sido elevada a la Procuraduría General de la República (PGR).\r\nEl INE detalló que la operación constaba de tres patas. Por un lado, el Bronco se habría servido de 652 empleados públicos del Gobierno de Nuevo León para recabar firmas durante su horaria laboral. La autoridad electoral constató además utilizó a particulares que simulaban ser donadores de la campaña, siendo en realidad una pantalla de los verdaderos financiadores: un puñado de empresas, algunas de ellas fantasma, sin siquiera registro mercantil. Otra de las prácticas consistía en que los ciudadanos que recababan los firmas a favor del candidato recibía dinero a través de tarjetas Saldazo-Oxxo cuyo gasto no estaba registrado.\r\nLa ley electoral mexicana prohíbe que las empresas aporten dinero a las campañas sin dejar constancia. Aparte de los fondos aportados por empresas, la candidatura del Bronco habría escondido a la autoridad otros seis millones de pesos gastados durante la campaña y sin fuente especificada. A falta de intervención de la Fiscalía, el Consejo General del INE ha multado de momento a la Rodriguez Calderón con 739.000 pesos.\r\n', '/foto.jpg', '2018-05-29 10:51:48', '2018-05-29 10:51:48');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
