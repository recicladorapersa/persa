/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.34-MariaDB : Database - tic71
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

/*Table structure for table `carreras` */

DROP TABLE IF EXISTS `carreras`;

CREATE TABLE `carreras` (
  `idc` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `activo` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idc`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `carreras` */

insert  into `carreras`(`idc`,`nombre`,`activo`,`remember_token`,`created_at`,`updated_at`) values (1,'TIC','SI',NULL,NULL,NULL),(2,'MECATRONICA','SI',NULL,NULL,NULL),(3,'PARAMEDICO','SI',NULL,NULL,NULL),(4,'ENFERMERIA','SI',NULL,NULL,NULL);

/*Table structure for table `maestros` */

DROP TABLE IF EXISTS `maestros`;

CREATE TABLE `maestros` (
  `idm` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `cp` int(11) NOT NULL,
  `sexo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `beca` double NOT NULL,
  `idc` int(10) unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `archivo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idm`),
  KEY `maestros_idc_foreign` (`idc`),
  CONSTRAINT `maestros_idc_foreign` FOREIGN KEY (`idc`) REFERENCES `carreras` (`idc`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `maestros` */

insert  into `maestros`(`idm`,`nombre`,`edad`,`cp`,`sexo`,`beca`,`idc`,`remember_token`,`created_at`,`updated_at`,`archivo`) values (1,'Pancho',23,43567,'M',123.34,1,NULL,'2018-09-24 21:40:21','2018-09-24 21:40:21',NULL),(2,'Pepe',23,43567,'M',123.34,1,NULL,'2018-09-24 21:48:40','2018-09-24 21:48:40',NULL),(3,'Paulina',23,43567,'F',123.34,3,NULL,'2018-09-24 21:53:37','2018-09-24 21:53:37',NULL),(4,'Roxana',36,43556,'M',234.45,4,NULL,'2018-09-25 22:01:13','2018-09-25 22:01:13','20180925_220113_cars.jpg'),(5,'Pancho',50,52000,'M',521.25,4,NULL,'2018-09-25 22:18:23','2018-09-25 22:18:23','20180925_221823_cars.jpg'),(6,'Normita',70,43456,'F',100.25,3,NULL,'2018-09-25 22:29:12','2018-09-25 22:29:12','sinfoto.png');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2018_09_17_215915_carreras',1),('2018_09_17_222541_maestros',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
