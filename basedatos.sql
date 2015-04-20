

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `u225861_PROYECTO_FINAL`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigo`
--
-- Creación: 19-04-2015 a las 05:48:41
--

CREATE TABLE IF NOT EXISTS `codigo` (
  `TITULO` text CHARACTER SET latin1 NOT NULL,
  `USUARIO` text COLLATE utf8_spanish_ci NOT NULL,
  `CODIGO` longtext COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
