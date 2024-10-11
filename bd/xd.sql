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

-- Volcando datos para la tabla citas_tutorias.cursos: ~0 rows (aproximadamente)

-- Volcando datos para la tabla citas_tutorias.cursos2: ~9 rows (aproximadamente)
INSERT IGNORE INTO `cursos2` (`id`, `nombre`, `imagen`, `numerocurso`, `enlacecurso`) VALUES
	(1, 'Aprender sobre el arte', 'img/Curso1Arte.jpg', 'Curso1', 'arte.php'),
	(2, 'Calculo Diferencial', 'img/Curso2CalculoDiferencial.jpg', 'Curso2', 'calculodiferencial.php'),
	(3, 'Teoria sobre negocios', '/img/Negocios1.jpg', 'Curso3', '#'),
	(4, 'Habilidades Culturales', 'img/Curso8.jpg', 'Curso4', '#'),
	(5, 'Historia de Mexico', 'img/Curso5.jpeg', 'Curso5', '#'),
	(6, 'Ingles V', 'img/Curso6.jpeg', 'Curso6', '#'),
	(7, 'Arte Contemporaneo', 'img/Curso3.jpg', 'Curso7', '#'),
	(8, 'Quimica Analitica', 'img/Curso10.jpeg', 'Curso8', '#');

-- Volcando datos para la tabla citas_tutorias.roles: ~2 rows (aproximadamente)
INSERT IGNORE INTO `roles` (`rol`, `usuario`) VALUES
	(0, 'visitante'),
	(1, 'profesor'),
	(2, 'alumno');

-- Volcando datos para la tabla citas_tutorias.tareas: ~0 rows (aproximadamente)

-- Volcando datos para la tabla citas_tutorias.usuarios: ~10 rows (aproximadamente)
INSERT IGNORE INTO `usuarios` (`id`, `nombre`, `apellidos`, `usuario`, `correo`, `contrasena`, `rol`) VALUES
	(1, 'trejo', 'Sandoval', 'DIEGOSAN283', 'juandiego6290@gmail.com', 'password', 2),
	(2, 'Josue', 'Valles', 'JOSUE012', 'josue@gmail.com', 'josue901', 2),
	(3, 'Abraham', 'Sarellano', 'ABRAHAM901', 'abraham891@gmail.com', 'abram902', 1),
	(4, 'Angel', 'Sebastian', 'REVELES1954', 'angel@gmail.com', 'angel843', 2),
	(5, 'Edgar', 'Enrique', 'EDGAR924', 'edgar@gmail.com', 'edgar0129', 1),
	(6, 'Carlos', 'Serrano', 'CARLOS293', 'carlos@gmail.com', 'carlos832', 1),
	(7, 'Diego', 'Rivera', 'DIEGORIVERA843', 'diegorivera@gmail.com', 'Rivera9123', 1),
	(8, 'Jammal', 'Rodriguez', 'JAMMAL', 'jammal@gmail.com', 'jammal', 1),
	(9, 'Kevin', 'Meneses', 'KEVIN948', 'kevin@gmail.com', 'kevin134', 2);

-- Volcando datos para la tabla citas_tutorias.usuarios1: ~2 rows (aproximadamente)
INSERT IGNORE INTO `usuarios1` (`id`, `usuario`, `contraseña`, `rol`) VALUES
	(1, 'trejo', 'password', 2),
	(2, 'josue', 'valles', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
