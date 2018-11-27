/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.21-MariaDB : Database - tic71
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tic71` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `tic71`;

/*Table structure for table `categorias` */

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `idc` int(11) DEFAULT NULL,
  `nombre` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `categorias` */

insert  into `categorias`(`idc`,`nombre`) values (1,'Latas'),(2,'Metales'),(3,'Lacteos');

/*Table structure for table `cines` */

DROP TABLE IF EXISTS `cines`;

CREATE TABLE `cines` (
  `idc` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `plaza` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `turno` int(11) NOT NULL,
  `tipo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estados` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `municipios` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `cines` */

/*Table structure for table `clientes` */

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `idc` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `zonae` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `clientes` */

insert  into `clientes`(`idc`,`nombre`,`zonae`) values (1,'joel','mexico'),(2,'nisssim','san luis'),(3,'paula',NULL);

/*Table structure for table `maestros` */

DROP TABLE IF EXISTS `maestros`;

CREATE TABLE `maestros` (
  `idm` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `carrera` varchar(23) COLLATE utf8_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `idpl` int(11) DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idm`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `maestros` */

insert  into `maestros`(`idm`,`nombre`,`sexo`,`carrera`,`edad`,`remember_token`,`created_at`,`updated_at`,`deleted_at`,`idpl`,`imagen`) values (2,'pacosss','M','TIC',45,NULL,NULL,'2017-12-08 19:57:12',NULL,1,NULL),(3,'laura','F','MANTENIMINETO',67,NULL,NULL,'2017-12-08 20:02:14','2017-12-08 20:02:14',2,NULL),(4,'luisass','M','MECATRONICAS',20,NULL,NULL,'2017-12-08 19:29:14',NULL,1,NULL),(7,'Jacinto','M','MEcatronica',23,NULL,'2017-11-04 02:19:49','2017-12-02 02:04:13','2017-12-02 02:04:13',3,NULL),(8,'Panchita','F','Mecatronica',34,NULL,NULL,NULL,NULL,3,NULL),(9,'Paquito','M','Paramedico',23,NULL,NULL,NULL,NULL,2,NULL),(10,'Pato','M','Sistemas',20,NULL,'2017-12-08 20:29:22','2017-12-08 20:29:22',NULL,1,NULL),(11,'Julieta','F','Negocios',20,NULL,'2017-12-08 20:35:08','2017-12-08 20:35:08',NULL,3,'20171208_203508_mysql.jpg'),(12,'PAncho','M','TIC',23,NULL,'2018-02-23 01:49:16','2018-02-23 01:49:16',NULL,2,'20180223_014915_cars.jpg'),(13,'Rodrigo','M','TIC',34,NULL,'2018-02-23 23:40:12','2018-02-23 23:50:06','2018-02-23 23:50:06',2,'20180223_234012_gatitos.png'),(14,'Siux','F','TEC COMPUTACION',34,NULL,'2018-02-23 23:43:29','2018-02-26 23:45:21','2018-02-26 23:45:21',3,'20180223_234329_gatitos.png'),(15,'Andreasss','F','TIC',20,NULL,'2018-02-26 23:34:52','2018-02-26 23:53:21',NULL,2,'20180226_233452_LOGO-AJAX.png'),(16,'Cinthia','F','TIC',21,NULL,'2018-02-26 23:37:16','2018-02-26 23:37:16',NULL,1,'20180226_233716_LOGO-AJAX.png'),(17,'pacoeeeee','M','TIc',33,NULL,'2018-03-07 01:45:33','2018-03-07 02:18:56',NULL,2,'20180307_021838_glosario34.jpg'),(18,'PATertert','F','TIC',30,NULL,'2018-03-07 01:52:25','2018-03-08 23:33:20',NULL,1,'20180308_233320_index.jpg'),(19,'CHARLY','M','TIC',45,NULL,'2018-03-07 01:53:24','2018-03-07 01:53:24',NULL,3,'noimagen.png'),(20,'Apolinarsito','M','TIC',35,NULL,'2018-03-08 22:54:27','2018-03-08 23:30:08',NULL,NULL,'20180308_225427_avisos.jpg'),(21,'Chuchote','M','TIC',36,NULL,'2018-03-08 23:06:19','2018-03-08 23:06:19',NULL,2,'noimagen.png');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2017_10_14_003248_creatablasucursales',1),('2017_10_14_010414_creatablacines',1),('2017_10_14_011923_agregacolumnascines',1),('2017_10_14_012818_creatablapeliculas',1),('2017_10_27_234856_creatablamaestros',2);

/*Table structure for table `peliculas` */

DROP TABLE IF EXISTS `peliculas`;

CREATE TABLE `peliculas` (
  `idp` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `clasificacion` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `idc` int(10) unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idp`),
  KEY `peliculas_idc_foreign` (`idc`),
  CONSTRAINT `peliculas_idc_foreign` FOREIGN KEY (`idc`) REFERENCES `cines` (`idc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `peliculas` */

/*Table structure for table `planteles` */

DROP TABLE IF EXISTS `planteles`;

CREATE TABLE `planteles` (
  `idpl` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `calle` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idpl`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `planteles` */

insert  into `planteles`(`idpl`,`nombre`,`calle`) values (1,'Toluca','5 de mayo'),(2,'Metepec','Colon'),(3,'Lerma',NULL);

/*Table structure for table `productos` */

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `idp` int(11) DEFAULT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `costo` int(11) DEFAULT NULL,
  `idc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `productos` */

insert  into `productos`(`idp`,`nombre`,`cantidad`,`costo`,`idc`) values (1,'Producto1',23,35,1),(2,'Producto2',43,43,1),(3,'Producto3',15,54,2),(4,'Producto4',27,65,2),(5,'Producto5',74,55,3);

/*Table structure for table `sucursales` */

DROP TABLE IF EXISTS `sucursales`;

CREATE TABLE `sucursales` (
  `ids` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `calle` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `estado` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ids`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `sucursales` */

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `idu` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `pasw` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `activo` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`idu`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `usuarios`(`idu`,`nombre`,`apellido`,`user`,`pasw`,`tipo`,`correo`,`imagen`,`deleted_at`,`activo`) values (1,'Joel','Herrera','admin','827ccb0eea8a706c4c34a16891f84e7b','Administrador','shalojoey3@gmail.com','noimagen.png',NULL,'Si'),(2,'Iris','Lopez','auxiliar','827ccb0eea8a706c4c34a16891f84e7b','Asistente','iris@hotmail.com','noimagen.png',NULL,'Si');

/*Table structure for table `ventadetalles` */

DROP TABLE IF EXISTS `ventadetalles`;

CREATE TABLE `ventadetalles` (
  `idvd` int(11) NOT NULL AUTO_INCREMENT,
  `idv` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `costo` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `idp` int(11) DEFAULT NULL,
  PRIMARY KEY (`idvd`)
) ENGINE=InnoDB AUTO_INCREMENT=192 DEFAULT CHARSET=latin1;

/*Data for the table `ventadetalles` */

insert  into `ventadetalles`(`idvd`,`idv`,`cantidad`,`costo`,`created_at`,`updated_at`,`deleted_at`,`idp`) values (1,4,3,65,'2018-06-20 02:06:09','2018-06-20 02:06:09',NULL,1),(2,5,5,43,'2018-06-20 23:29:04','2018-06-20 23:29:04',NULL,1),(3,5,10,65,'2018-06-20 23:30:17','2018-06-20 23:30:17',NULL,2),(4,6,1,54,'2018-06-26 23:21:39','2018-06-26 23:21:39',NULL,3),(23,7,1,55,'2018-06-26 23:32:29','2018-06-26 23:32:29',NULL,5),(26,7,1,55,'2018-06-26 23:40:05','2018-06-26 23:40:05',NULL,5),(27,8,1,55,'2018-06-26 23:40:20','2018-06-26 23:40:20',NULL,5),(55,9,2,65,'2018-06-27 00:40:12','2018-06-27 00:40:12',NULL,4),(56,9,2,65,'2018-06-27 00:41:14','2018-06-27 00:41:14',NULL,4),(57,9,2,54,'2018-06-27 00:41:34','2018-06-27 00:41:34',NULL,3),(58,10,1,65,'2018-06-27 00:46:28','2018-06-27 00:46:28',NULL,4),(59,11,12,65,'2018-06-27 01:15:29','2018-06-27 01:15:29',NULL,4),(60,11,12,54,'2018-06-27 01:15:38','2018-06-27 01:15:38',NULL,3),(61,12,10,65,'2018-06-27 01:21:25','2018-06-27 01:21:25',NULL,4),(81,13,10,59,'2018-06-27 01:59:06','2018-06-27 01:59:06',NULL,4),(82,13,10,59,'2018-06-27 01:59:33','2018-06-27 01:59:33',NULL,4),(83,13,10,59,'2018-06-27 02:00:53','2018-06-27 02:00:53',NULL,4),(84,13,10,59,'2018-06-27 02:01:12','2018-06-27 02:01:12',NULL,4),(85,14,1,59,'2018-06-27 02:04:48','2018-06-27 02:04:48',NULL,4),(86,14,1,59,'2018-06-27 02:04:50','2018-06-27 02:04:50',NULL,4),(87,14,1,59,'2018-06-28 22:02:37','2018-06-28 22:02:37',NULL,4),(88,15,12,54,'2018-07-04 00:07:58','2018-07-04 00:07:58',NULL,3),(89,15,1,39,'2018-07-04 00:08:11','2018-07-04 00:08:11',NULL,2),(90,15,1,39,'2018-07-04 00:11:51','2018-07-04 00:11:51',NULL,2),(91,16,1,65,'2018-07-04 00:12:35','2018-07-04 00:12:35',NULL,4),(92,16,1,65,'2018-07-04 00:12:37','2018-07-04 00:12:37',NULL,4),(93,17,1,54,'2018-07-04 00:14:29','2018-07-04 00:14:29',NULL,3),(94,17,1,54,'2018-07-04 00:14:30','2018-07-04 00:14:30',NULL,3),(95,18,2,33,'2018-07-04 00:23:58','2018-07-04 00:23:58',NULL,4),(96,18,2,33,'2018-07-04 00:26:45','2018-07-04 00:26:45',NULL,4),(97,19,2,33,'2018-07-04 00:28:20','2018-07-04 00:28:20',NULL,4),(98,19,2,33,'2018-07-04 00:28:42','2018-07-04 00:28:42',NULL,4),(99,20,3,22,'2018-07-04 00:28:56','2018-07-04 00:28:56',NULL,4),(100,21,1,65,'2018-07-04 00:37:55','2018-07-04 00:37:55',NULL,4),(101,21,1,65,'2018-07-04 00:38:22','2018-07-04 00:38:22',NULL,4),(102,22,2,33,'2018-07-04 00:39:47','2018-07-04 00:39:47',NULL,4),(103,22,2,33,'2018-07-04 00:39:49','2018-07-04 00:39:49',NULL,4),(104,23,1,54,'2018-07-04 00:41:13','2018-07-04 00:41:13',NULL,3),(105,23,1,54,'2018-07-04 00:41:14','2018-07-04 00:41:14',NULL,3),(106,24,1,49,'2018-07-04 00:42:10','2018-07-04 00:42:10',NULL,3),(107,24,1,49,'2018-07-04 00:42:11','2018-07-04 00:42:11',NULL,3),(108,25,1,54,'2018-07-04 00:42:52','2018-07-04 00:42:52',NULL,3),(109,25,1,54,'2018-07-04 00:42:54','2018-07-04 00:42:54',NULL,3),(111,26,1,65,'2018-07-04 00:50:04','2018-07-04 00:50:04',NULL,4),(112,27,1,54,'2018-07-04 00:56:29','2018-07-04 00:56:29',NULL,3),(113,27,1,54,'2018-07-04 00:56:31','2018-07-04 00:56:31',NULL,3),(114,27,1,54,'2018-07-04 00:56:35','2018-07-04 00:56:35',NULL,3),(115,27,1,54,'2018-07-04 00:56:36','2018-07-04 00:56:36',NULL,3),(116,27,1,54,'2018-07-04 00:56:36','2018-07-04 00:56:36',NULL,3),(117,27,1,54,'2018-07-04 00:56:36','2018-07-04 00:56:36',NULL,3),(118,27,1,54,'2018-07-04 00:56:37','2018-07-04 00:56:37',NULL,3),(119,27,1,54,'2018-07-04 00:56:37','2018-07-04 00:56:37',NULL,3),(120,27,1,54,'2018-07-04 00:57:18','2018-07-04 00:57:18',NULL,3),(121,27,1,54,'2018-07-04 00:57:19','2018-07-04 00:57:19',NULL,3),(122,27,1,54,'2018-07-04 00:57:19','2018-07-04 00:57:19',NULL,3),(123,27,1,54,'2018-07-04 00:57:19','2018-07-04 00:57:19',NULL,3),(124,27,1,54,'2018-07-04 00:57:19','2018-07-04 00:57:19',NULL,3),(125,27,1,54,'2018-07-04 00:57:20','2018-07-04 00:57:20',NULL,3),(126,27,1,54,'2018-07-04 00:57:20','2018-07-04 00:57:20',NULL,3),(127,27,1,54,'2018-07-04 00:57:20','2018-07-04 00:57:20',NULL,3),(128,27,1,54,'2018-07-04 00:57:20','2018-07-04 00:57:20',NULL,3),(129,27,1,54,'2018-07-04 00:57:20','2018-07-04 00:57:20',NULL,3),(131,28,1,65,'2018-07-04 00:58:27','2018-07-04 00:58:27',NULL,4),(132,28,1,65,'2018-07-04 00:58:27','2018-07-04 00:58:27',NULL,4),(133,28,1,65,'2018-07-04 00:59:11','2018-07-04 00:59:11',NULL,4),(134,28,1,65,'2018-07-04 01:00:02','2018-07-04 01:00:02',NULL,4),(135,28,1,65,'2018-07-04 01:01:38','2018-07-04 01:01:38',NULL,4),(136,28,1,65,'2018-07-04 01:01:45','2018-07-04 01:01:45',NULL,4),(137,29,1,43,'2018-07-04 01:01:55','2018-07-04 01:01:55',NULL,2),(171,31,2,65,'2018-07-04 01:23:47','2018-07-04 01:23:47',NULL,4),(173,32,2,42,'2018-07-04 01:29:21','2018-07-04 01:29:21',NULL,5),(176,33,2,65,'2018-07-06 22:05:17','2018-07-06 22:05:17',NULL,4),(177,33,3,42,'2018-07-06 22:05:50','2018-07-06 22:05:50',NULL,5),(178,33,1,59,'2018-07-06 22:06:25','2018-07-06 22:06:25',NULL,4),(182,34,1,65,'2018-07-06 22:26:43','2018-07-06 22:26:43',NULL,4),(184,34,1,65,'2018-07-06 22:33:06','2018-07-06 22:33:06',NULL,4),(185,34,1,65,'2018-07-06 22:33:07','2018-07-06 22:33:07',NULL,4),(191,35,1,65,'2018-07-06 22:36:43','2018-07-06 22:36:43',NULL,4);

/*Table structure for table `ventas` */

DROP TABLE IF EXISTS `ventas`;

CREATE TABLE `ventas` (
  `idv` int(11) NOT NULL,
  `idc` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idv`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ventas` */

insert  into `ventas`(`idv`,`idc`,`fecha`,`updated_at`,`created_at`,`deleted_at`) values (1,1,'0000-00-00','2018-06-20 02:03:22','2018-06-20 02:03:22',NULL),(2,2,'2018-06-14','2018-06-20 02:03:51','2018-06-20 02:03:51',NULL),(3,3,'2018-06-13','2018-06-20 02:05:29','2018-06-20 02:05:29',NULL),(4,2,'2018-06-20','2018-06-20 02:06:08','2018-06-20 02:06:08',NULL),(5,1,'0000-00-00','2018-06-20 23:29:04','2018-06-20 23:29:04',NULL),(6,2,'2018-06-26','2018-06-26 23:21:39','2018-06-26 23:21:39',NULL),(7,3,'2018-06-19','2018-06-26 23:32:29','2018-06-26 23:32:29',NULL),(8,3,'2018-06-26','2018-06-26 23:40:19','2018-06-26 23:40:19',NULL),(9,2,'2018-06-27','2018-06-27 00:19:57','2018-06-27 00:19:57',NULL),(10,2,'2018-06-26','2018-06-27 00:46:28','2018-06-27 00:46:28',NULL),(11,2,'2018-06-26','2018-06-27 01:15:29','2018-06-27 01:15:29',NULL),(12,2,'2018-06-26','2018-06-27 01:21:24','2018-06-27 01:21:24',NULL),(13,2,'2018-06-27','2018-06-27 01:44:33','2018-06-27 01:44:33',NULL),(14,2,'2018-06-26','2018-06-27 02:04:48','2018-06-27 02:04:48',NULL),(15,2,'2018-07-11','2018-07-04 00:07:58','2018-07-04 00:07:58',NULL),(16,2,'2018-07-03','2018-07-04 00:12:35','2018-07-04 00:12:35',NULL),(17,2,'2018-07-03','2018-07-04 00:14:28','2018-07-04 00:14:28',NULL),(18,2,'2018-07-03','2018-07-04 00:23:58','2018-07-04 00:23:58',NULL),(19,2,'0000-00-00','2018-07-04 00:28:19','2018-07-04 00:28:19',NULL),(20,2,'0000-00-00','2018-07-04 00:28:55','2018-07-04 00:28:55',NULL),(21,2,'0000-00-00','2018-07-04 00:37:55','2018-07-04 00:37:55',NULL),(22,2,'2018-07-03','2018-07-04 00:39:47','2018-07-04 00:39:47',NULL),(23,2,'0000-00-00','2018-07-04 00:41:13','2018-07-04 00:41:13',NULL),(24,2,'2018-07-10','2018-07-04 00:42:10','2018-07-04 00:42:10',NULL),(25,2,'0000-00-00','2018-07-04 00:42:52','2018-07-04 00:42:52',NULL),(26,2,'0000-00-00','2018-07-04 00:43:08','2018-07-04 00:43:08',NULL),(27,2,'0000-00-00','2018-07-04 00:56:29','2018-07-04 00:56:29',NULL),(28,2,'2018-07-10','2018-07-04 00:58:26','2018-07-04 00:58:26',NULL),(29,1,'2018-07-03','2018-07-04 01:01:55','2018-07-04 01:01:55',NULL),(30,2,'2018-07-10','2018-07-04 01:02:13','2018-07-04 01:02:13',NULL),(31,2,'2018-07-11','2018-07-04 01:17:05','2018-07-04 01:17:05',NULL),(32,2,'2018-07-03','2018-07-04 01:29:08','2018-07-04 01:29:08',NULL),(33,3,'2018-07-06','2018-07-06 21:42:20','2018-07-06 21:42:20',NULL),(34,2,'2018-07-10','2018-07-06 22:12:59','2018-07-06 22:12:59',NULL),(35,2,'0000-00-00','2018-07-06 22:35:44','2018-07-06 22:35:44',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
