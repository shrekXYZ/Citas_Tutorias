-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para citas_tutorias
CREATE DATABASE IF NOT EXISTS `citas_tutorias` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `citas_tutorias`;

-- Volcando estructura para tabla citas_tutorias.cursos2
CREATE TABLE IF NOT EXISTS `cursos2` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `numerocurso` varchar(50) DEFAULT NULL,
  `enlacecurso` varchar(50) DEFAULT NULL,
  `enlace_administrar` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla citas_tutorias.cursos2: ~8 rows (aproximadamente)
INSERT INTO `cursos2` (`id`, `nombre`, `imagen`, `numerocurso`, `enlacecurso`, `enlace_administrar`) VALUES
	(1, 'Aprender sobre el arte', 'img/Curso1Arte.jpg', '0', 'arte.php', 'arteprof.php'),
	(2, 'Calculo Diferencial', 'img/Curso2CalculoDiferencial.jpg', '0', 'calculodiferencial.php', NULL),
	(3, 'Teoria sobre negocios', '/img/Negocios1.jpg', '0', '#', NULL),
	(4, 'Habilidades Culturales', 'img/Curso8.jpg', '0', '#', NULL),
	(5, 'Historia de Mexico', 'img/Curso5.jpeg', '0', '#', NULL),
	(6, 'Ingles V', 'img/Curso6.jpeg', '0', '#', NULL),
	(7, 'Arte Contemporaneo', 'img/Curso3.jpg', '0', '#', NULL),
	(8, 'Quimica Analitica', 'img/Curso10.jpeg', '0', '#', NULL);

-- Volcando estructura para tabla citas_tutorias.inscripciones
CREATE TABLE IF NOT EXISTS `inscripciones` (
  `id_inscripcion` int unsigned NOT NULL AUTO_INCREMENT,
  `id_usuario` int unsigned NOT NULL,
  `id_curso` int unsigned NOT NULL,
  PRIMARY KEY (`id_inscripcion`),
  KEY `FK_inscripciones_usuarios` (`id_usuario`),
  KEY `FK_inscripciones_cursos2` (`id_curso`),
  CONSTRAINT `FK_inscripciones_cursos2` FOREIGN KEY (`id_curso`) REFERENCES `cursos2` (`id`),
  CONSTRAINT `FK_inscripciones_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla citas_tutorias.inscripciones: ~52 rows (aproximadamente)
INSERT INTO `inscripciones` (`id_inscripcion`, `id_usuario`, `id_curso`) VALUES
	(1, 3, 2),
	(2, 3, 5),
	(3, 3, 1),
	(4, 6, 2),
	(5, 13, 7),
	(6, 1, 2),
	(7, 3, 5),
	(8, 1, 1),
	(9, 13, 1),
	(10, 14, 2),
	(11, 15, 3),
	(12, 16, 4),
	(13, 17, 5),
	(14, 18, 6),
	(15, 19, 7),
	(16, 20, 8),
	(17, 21, 7),
	(18, 22, 2),
	(19, 23, 3),
	(20, 24, 4),
	(21, 25, 5),
	(22, 26, 6),
	(23, 27, 7),
	(24, 28, 8),
	(25, 29, 1),
	(26, 30, 2),
	(27, 31, 3),
	(28, 32, 4),
	(29, 33, 5),
	(30, 34, 6),
	(31, 35, 7),
	(32, 36, 8),
	(33, 37, 1),
	(34, 38, 2),
	(35, 39, 3),
	(36, 40, 4),
	(37, 41, 5),
	(38, 42, 6),
	(39, 43, 7),
	(40, 44, 8),
	(41, 45, 1),
	(42, 46, 2),
	(43, 47, 3),
	(44, 48, 4),
	(45, 49, 5),
	(46, 50, 6),
	(47, 51, 7),
	(48, 52, 8),
	(49, 53, 1),
	(50, 54, 2),
	(51, 13, 3),
	(52, 14, 4);

-- Volcando estructura para tabla citas_tutorias.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `rol` int unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla citas_tutorias.roles: ~3 rows (aproximadamente)
INSERT INTO `roles` (`rol`, `usuario`) VALUES
	(0, 'visitante'),
	(1, 'profesor'),
	(2, 'alumno');

-- Volcando estructura para tabla citas_tutorias.tareas
CREATE TABLE IF NOT EXISTS `tareas` (
  `id_tarea` int NOT NULL AUTO_INCREMENT,
  KEY `id_tarea` (`id_tarea`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tabla exclusiva para las tareas.\r\nLas tareas haran relación con la tabla cursos.';

-- Volcando datos para la tabla citas_tutorias.tareas: ~0 rows (aproximadamente)

-- Volcando estructura para tabla citas_tutorias.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `correo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `contrasena` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `estatus` int unsigned NOT NULL,
  `id_rol` int unsigned NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `FK_usuarios_roles` (`id_rol`),
  CONSTRAINT `FK_usuarios_roles` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`rol`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla citas_tutorias.usuarios: ~45 rows (aproximadamente)
INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `usuario`, `correo`, `contrasena`, `estatus`, `id_rol`) VALUES
	(1, 'Juan Diego1234', 'Trejo Sandoval', 'Trejito1', 'juandiegoFIFA@gmail.com', '1', 0, 2),
	(3, 'Abraham', 'Sarellano Hernandez', 'blazter123', 'elblack@outlook.com', 'gusanito1', 0, 2),
	(6, 'Adrian Estefano1', 'Rivera Bermudez', 'AdrianBermu12', 'adrianeste123123@gmail.com', 'dh2h3bd2', 1, 1),
	(13, 'Panchi', 'Serrano', 'seraax', 'Serrax@gmail.com', 'alklajcnlc', 1, 1),
	(14, 'Martin', 'Sungirungi', 'mart.sg', 'chalan@gmail.com', '12356798', 1, 2),
	(15, 'Juan', 'Pérez González', 'juan_perez', 'juan.perez@email.com', '123456', 1, 1),
	(16, 'María', 'Rodríguez López', 'maria_rodriguez', 'maria.rodriguez@email.com', 'abcdef', 2, 0),
	(17, 'Carlos', 'Sánchez Martínez', 'carlos_sanchez', 'carlos.sanchez@email.com', 'qwerty', 1, 1),
	(18, 'Laura', 'García Hernández', 'laura_garcia', 'laura.garcia@email.com', '987654', 1, 2),
	(19, 'Javier', 'Ruiz García', 'javier_ruiz', 'javier.ruiz@email.com', 'asdfgh', 2, 1),
	(20, 'Ana', 'López Rodríguez', 'ana_lopez', 'ana.lopez@email.com', 'zxcvbn', 1, 1),
	(21, 'Pablo', 'Martínez Pérez', 'pablo_martinez', 'pablo.martinez@email.com', '13579', 2, 0),
	(22, 'Isabel', 'Fernández García', 'isabel_fernandez', 'isabel.fernandez@email.com', '24680', 1, 1),
	(23, 'Sergio', 'Jiménez López', 'sergio_jimenez', 'sergio.jimenez@email.com', 'qazwsx', 1, 2),
	(24, 'Marta', 'Torres Sánchez', 'marta_torres', 'marta.torres@email.com', 'plmokn', 2, 0),
	(25, 'Raúl', 'Gómez Rodríguez', 'raul_gomez', 'raul.gomez@email.com', 'ytrewq', 1, 1),
	(26, 'Sandra', 'Vargas Martínez', 'sandra_vargas', 'sandra.vargas@email.com', '111222', 2, 0),
	(27, 'Diego', 'Herrera López', 'diego_herrera', 'diego.herrera@email.com', 'abcd1234', 1, 2),
	(28, 'Elena', 'Núñez García', 'elena_nunez', 'elena.nunez@email.com', '987abc', 1, 1),
	(29, 'Andrés', 'Romero Sánchez', 'andres_romero', 'andres.romero@email.com', 'xyz123', 2, 0),
	(30, 'Julia', 'Moreno Martínez', 'julia_moreno', 'julia.moreno@email.com', 'pqrst', 1, 1),
	(31, 'Alberto', 'Delgado Rodríguez', 'alberto_delgado', 'alberto.delgado@email.com', '456789', 2, 0),
	(32, 'Carolina', 'Torres García', 'carolina_torres', 'carolina.torres@email.com', 'mnbvcx', 1, 2),
	(33, 'José', 'Soto López', 'jose_soto', 'jose.soto@email.com', '789012', 2, 0),
	(34, 'Patricia', 'Ramos Martínez', 'patricia_ramos', 'patricia.ramos@email.com', 'qwe123', 1, 1),
	(35, 'Juan', 'Pérez González', 'juan_perez', 'juan.perez@email.com', '123456', 1, 1),
	(36, 'María', 'Rodríguez López', 'maria_rodriguez', 'maria.rodriguez@email.com', 'abcdef', 2, 0),
	(37, 'Carlos', 'Sánchez Martínez', 'carlos_sanchez', 'carlos.sanchez@email.com', 'qwerty', 1, 1),
	(38, 'Laura', 'García Hernández', 'laura_garcia', 'laura.garcia@email.com', '987654', 1, 2),
	(39, 'Javier', 'Ruiz García', 'javier_ruiz', 'javier.ruiz@email.com', 'asdfgh', 2, 1),
	(40, 'Ana', 'López Rodríguez', 'ana_lopez', 'ana.lopez@email.com', 'zxcvbn', 1, 1),
	(41, 'Pablo', 'Martínez Pérez', 'pablo_martinez', 'pablo.martinez@email.com', '13579', 2, 0),
	(42, 'Isabel', 'Fernández García', 'isabel_fernandez', 'isabel.fernandez@email.com', '24680', 1, 1),
	(43, 'Sergio', 'Jiménez López', 'sergio_jimenez', 'sergio.jimenez@email.com', 'qazwsx', 1, 2),
	(44, 'Marta', 'Torres Sánchez', 'marta_torres', 'marta.torres@email.com', 'plmokn', 2, 0),
	(45, 'Raúl', 'Gómez Rodríguez', 'raul_gomez', 'raul.gomez@email.com', 'ytrewq', 1, 1),
	(46, 'Sandra', 'Vargas Martínez', 'sandra_vargas', 'sandra.vargas@email.com', '111222', 2, 0),
	(47, 'Diego', 'Herrera López', 'diego_herrera', 'diego.herrera@email.com', 'abcd1234', 1, 2),
	(48, 'Elena', 'Núñez García', 'elena_nunez', 'elena.nunez@email.com', '987abc', 1, 1),
	(49, 'Andrés', 'Romero Sánchez', 'andres_romero', 'andres.romero@email.com', 'xyz123', 2, 0),
	(50, 'Julia', 'Moreno Martínez', 'julia_moreno', 'julia.moreno@email.com', 'pqrst', 1, 1),
	(51, 'Alberto', 'Delgado Rodríguez', 'alberto_delgado', 'alberto.delgado@email.com', '456789', 2, 0),
	(52, 'Carolina', 'Torres García', 'carolina_torres', 'carolina.torres@email.com', 'mnbvcx', 1, 2),
	(53, 'José', 'Soto López', 'jose_soto', 'jose.soto@email.com', '789012', 2, 0),
	(54, 'Patricia', 'Ramos Martínez', 'patricia_ramos', 'patricia.ramos@email.com', 'qwe123', 1, 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
