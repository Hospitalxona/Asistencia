/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.7.24 : Database - qr_code_laravel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`qr_code_laravel` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `qr_code_laravel`;

/*Table structure for table `activations` */

DROP TABLE IF EXISTS `activations`;

CREATE TABLE `activations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `activations` */

insert  into `activations`(`id`,`user_id`,`code`,`completed`,`completed_at`,`created_at`,`updated_at`) values (2,2,'kNsQDWekQyLZ8deJ9I8f12Ii2lyOK2jf',1,'2020-03-12 23:52:22','2020-03-12 23:52:22','2020-03-12 23:52:22'),(3,3,'XR6684wG1OFOhtwV8f5rRNKuMT8pAwXw',1,'2020-03-13 02:59:45','2020-03-13 02:59:45','2020-03-13 02:59:45'),(4,1,'cFdGP9db3yHzEZUtqnRZenpheE6536o6',1,'2020-03-13 17:53:17','2020-03-13 17:53:17','2020-03-13 17:53:17'),(5,4,'tfvCnLLB7VGQ0UphMnagcA796marE32t',1,'2020-03-15 13:42:36','2020-03-15 13:42:36','2020-03-15 13:42:36'),(6,5,'YiqAErTgyMvpAtuqhHeslLUsk0O9gukJ',1,'2020-03-15 21:52:13','2020-03-15 21:52:13','2020-03-15 21:52:13'),(7,6,'XEJjWX3BdEjvqUU7gf3AblHQ4gLSzOWA',1,'2020-03-16 18:25:52','2020-03-16 18:25:52','2020-03-16 18:25:52'),(8,7,'ZnTXm4qQkyhpePwb52Bq3XVsYTwAVOqW',1,'2020-03-17 08:12:26','2020-03-17 08:12:26','2020-03-17 08:12:26'),(9,8,'kwHPbvQmcmcZXfbNCHL50vq4EZikqbzq',1,'2020-03-17 08:37:32','2020-03-17 08:37:32','2020-03-17 08:37:32'),(10,9,'iwR9QxmPV6XDGAPmEydRTusU8HHI8ljY',1,'2020-03-18 08:43:37','2020-03-18 08:43:37','2020-03-18 08:43:37'),(11,10,'qcvSLd5fota9fGKcz1f0rmTxkTIGdPB3',1,'2020-03-18 10:22:47','2020-03-18 10:22:47','2020-03-18 10:22:47'),(12,11,'tPPLBieoFecrdW3S0g3hYLZF2iS1UlvM',1,'2020-03-18 10:45:37','2020-03-18 10:45:37','2020-03-18 10:45:37'),(13,12,'fqwn1AX2AiK8VyAbCeOxI2I7HtbZHIYU',1,'2020-03-18 10:51:39','2020-03-18 10:51:39','2020-03-18 10:51:39'),(14,13,'YBvRMhnzKgnyKsBgA2lLy1EownXfWChc',1,'2020-03-18 12:36:21','2020-03-18 12:36:21','2020-03-18 12:36:21'),(15,14,'Ap2sFgGaKbwzExGFeJfdQxd4x71RfFKj',1,'2020-03-18 12:39:22','2020-03-18 12:39:22','2020-03-18 12:39:22'),(16,15,'V3TQeGKPrrMQbEUDcml06QpE2Giq6edZ',1,'2020-03-18 17:38:27','2020-03-18 17:38:27','2020-03-18 17:38:27'),(17,16,'tkVwnyqq5tNmxxJgBJT3gJ4MTCmWCrJd',1,'2020-03-18 19:21:29','2020-03-18 19:21:29','2020-03-18 19:21:29'),(18,17,'IkAM4yIPbmx5orVaqhTn1VTDDRsj2Zli',1,'2020-03-18 19:57:13','2020-03-18 19:57:13','2020-03-18 19:57:13'),(19,18,'Iev7TG50hPFqGsJpJfFNICUtybAjIbAe',1,'2020-03-18 19:59:51','2020-03-18 19:59:51','2020-03-18 19:59:51'),(20,19,'DrpqKYFK3Z71cP0TdmBIyvDF3WsjT8CL',1,'2020-03-19 08:49:05','2020-03-19 08:49:05','2020-03-19 08:49:05'),(21,20,'PNZYBA6efE7cS2zk6SWjQSvadWx5Hmgj',1,'2020-03-19 09:39:37','2020-03-19 09:39:37','2020-03-19 09:39:37'),(22,21,'P9HkOOOB68gZljG0TyQZ1PxzsZ0ibeKx',1,'2020-03-19 09:43:10','2020-03-19 09:43:10','2020-03-19 09:43:10'),(23,22,'v4Q7yfEZ19RWgk2NoJ7s4i34H1hrmnQ6',1,'2020-03-19 21:29:28','2020-03-19 21:29:28','2020-03-19 21:29:28'),(24,23,'PWWCTNxRDrBU5IqJQQlHoEoxTYaO6Iek',1,'2020-03-20 14:07:07','2020-03-20 14:07:07','2020-03-20 14:07:07'),(25,24,'fACbgHe4CPs98n2AktRpWOhsqCBohUQJ',1,'2020-03-21 17:14:56','2020-03-21 17:14:56','2020-03-21 17:14:56');

/*Table structure for table `asistencias` */

DROP TABLE IF EXISTS `asistencias`;

CREATE TABLE `asistencias` (
  `ida` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ida`)
) ENGINE=InnoDB AUTO_INCREMENT=178 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `asistencias` */

insert  into `asistencias`(`ida`,`user`,`fecha`,`hora`,`id`,`created_at`,`updated_at`,`deleted_at`) values (174,'$2y$10$o6XaYn3XWHe0Jc5GHs2Wh.cGsNHJnwuIl/frA3emGUxTh3icJYuhu','2020-03-19','10:01:28',7,'2020-03-19 10:01:35','2020-03-19 10:01:35',NULL),(175,'$2y$10$FscP4FoANoJ.xEGZB13DfONkMTK6tCZiOuVqyVhWYG5LXUjsUaiea','2020-03-19','10:02:53',7,'2020-03-19 10:02:57','2020-03-19 10:02:57',NULL),(176,'$2y$10$r.C6tuwAkGSLdKRriNJL3.AF1gaUkKvE8yRQU.eyUY6rN3Cks8TUm','2020-03-19','21:32:10',23,'2020-03-19 21:32:28','2020-03-19 21:32:28',NULL),(177,'$2y$10$a2KMyW0eZbB5h.SCykFMVuoBroa0hYYWr8pdE0lJzQJcsTlVtNhHS','2020-03-20','14:08:49',1,'2020-03-20 14:09:45','2020-03-20 14:09:45',NULL);

/*Table structure for table `calificaciones` */

DROP TABLE IF EXISTS `calificaciones`;

CREATE TABLE `calificaciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ide` int(10) unsigned NOT NULL,
  `idu` int(10) unsigned NOT NULL,
  `calpre` double DEFAULT NULL,
  `calpos` double DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `calificaciones` */

insert  into `calificaciones`(`id`,`title`,`ide`,`idu`,`calpre`,`calpos`,`deleted_at`,`created_at`,`updated_at`) values (1,'Hospitales Verdes',1,12,8.5,9,NULL,NULL,NULL),(2,'Capacitación 2020',2,8,8,10,NULL,NULL,NULL);

/*Table structure for table `capacitaciones` */

DROP TABLE IF EXISTS `capacitaciones`;

CREATE TABLE `capacitaciones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `lugar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `capacitaciones` */

insert  into `capacitaciones`(`id`,`nombre`,`fecha`,`hora`,`lugar`,`created_at`,`updated_at`,`deleted_at`) values (1,'COVID-19','2020-03-12','10:00:00','Enseñanza','2020-03-13 21:23:47','2020-03-14 21:41:04',NULL),(5,'Protocolo de seguridad COVID-19','2020-05-14','16:00:00','Enseñanza','2020-03-15 00:06:33','2020-03-13 21:41:00',NULL),(7,'Embarazo','2020-03-14','16:00:00','Enseñanza','2020-03-15 00:06:35','2020-03-13 17:32:48',NULL),(8,'Violencia contra la mujer','2020-03-16','10:00:00','Enseñanza','2020-03-13 21:23:47','2020-03-18 18:02:08','2020-03-18 18:02:08'),(9,'Cirugía','2020-03-12','23:30:00','Enseñanza','2020-03-13 21:26:19','2020-03-13 22:04:08',NULL),(10,'Operación','2020-03-26','23:28:00','Enseñanza','2020-03-13 21:28:41','2020-03-14 16:43:43',NULL),(11,'Calidad en los medicamentos','2020-03-17','09:32:00','Enseñanza','2020-03-13 21:31:49','2020-03-13 21:31:49',NULL),(12,'Lavado de Manos','2020-03-20','11:00:00','Enseñanza','2020-03-13 21:32:47','2020-03-13 21:32:47',NULL),(14,'Violencia de Genero','2020-03-14','13:00:00','Enseñanza','2020-03-13 21:40:06','2020-03-13 21:40:06',NULL),(22,'Operación obstetrica','2020-03-27','15:00:00','Enseñanza','2020-03-13 22:02:33','2020-03-13 22:02:33',NULL),(23,'Liderazgo y Comunicación en la Administración de Riesgos','2020-03-20','07:00:00','Enseñanza','2020-03-14 19:26:42','2020-03-14 19:26:42',NULL),(24,'Atención de Público','2020-03-25','14:00:00','Enseñanza','2020-03-14 19:27:01','2020-03-14 19:27:01',NULL),(25,'Actitudes Preventivas','2020-03-26','12:00:00','Enseñanza','2020-03-14 19:27:18','2020-03-14 19:27:18',NULL),(26,'Psicología de la Emergencia','2020-03-27','11:00:00','Enseñanza','2020-03-14 19:27:38','2020-03-14 19:27:38',NULL),(27,'Manejo de Emociones','2020-03-31','08:00:00','Enseñanza','2020-03-14 19:28:00','2020-03-14 19:28:00',NULL),(28,'Monitores de Emergencia','2020-03-24','10:00:00','Enseñanza','2020-03-14 19:28:22','2020-03-14 19:28:22',NULL),(29,'Prevención y Control de Incendios','2020-03-24','07:00:00','Enseñanza','2020-03-14 19:28:39','2020-03-14 19:28:39',NULL),(30,'Plan de Emergencia en Empresas Públicas','2020-03-18','09:00:00','Enseñanza','2020-03-14 19:29:14','2020-03-14 19:29:14',NULL),(31,'Primeros auxilios','2020-03-20','08:00:00','Enseñanza','2020-03-14 19:29:29','2020-03-14 19:29:29',NULL),(32,'Brigadas de Emergencias','2020-03-30','13:00:00','Enseñanza','2020-03-14 19:29:59','2020-03-14 19:29:59',NULL),(33,'Enfermedades Crónicas Degenerativas','2020-04-01','08:00:00','Enseñanza','2020-03-16 18:27:50','2020-03-16 18:27:50',NULL),(34,'Sulfato de magnesio','2020-03-17','13:00:00','Enseñanza','2020-03-17 08:41:35','2020-03-17 08:43:19','2020-03-17 08:43:19'),(35,'coronavirus','2020-03-19','08:00:00','Enseñanza','2020-03-18 10:35:53','2020-03-18 10:42:12','2020-03-18 10:42:12'),(36,'Norma 046','2020-03-18','10:54:00','Enseñanza','2020-03-18 10:54:42','2020-03-18 10:54:42',NULL);

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `hora` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `events` */

insert  into `events`(`id`,`title`,`url`,`start_date`,`end_date`,`hora`,`created_at`,`updated_at`) values (1,'Capacitación COVID-19','http://covid19.facmed.unam.mx/','2020-03-20','2020-03-20','13:00:00','2020-03-19 19:01:33','2020-03-19 19:01:33'),(2,'Tratamiento clinico','https://www.dravetfoundation.eu/investigacion/tratamiento-clinico/','2020-03-27','2020-03-27','08:00:00','2020-03-19 21:18:14','2020-03-19 21:18:14'),(4,'Comite','http://iner.salud.gob.mx/interna/comitehospitalario_comites.html','2020-03-31','2020-03-31','10:00:00','2020-03-20 08:12:38','2020-03-20 08:12:38'),(5,'Junta General','http://www.salud.gob.mx/unidades/cdi/documentos/ComitesHospitalarios.pdf','2020-04-01','2020-04-01','13:00:00','2020-03-20 08:49:35','2020-03-20 08:49:35'),(6,'Lavado de Manos','https://www.cdc.gov/handwashing/esp','2020-04-07','2020-04-07','14:00:00','2020-03-20 08:52:04','2020-03-20 08:52:04');

/*Table structure for table `examens` */

DROP TABLE IF EXISTS `examens`;

CREATE TABLE `examens` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iframe` mediumtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `examens` */

insert  into `examens`(`id`,`title`,`iframe`,`status`,`tipo`,`deleted_at`,`created_at`,`updated_at`) values (1,'Hospitales Verdes','<iframe src=\"https://docs.google.com/forms/d/e/1FAIpQLSehxj7zMHH5ZfZ2pIUWWGUZ1pL7kqv7YEmvLsnq9qvto3_ONQ/viewform?embedded=true\" width=\"640\" height=\"805\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\">Cargando…</iframe>','Activo','pre',NULL,'2020-03-23 18:36:34','2020-03-23 18:36:36'),(2,'Capacitación 2020','<iframe src=\"https://docs.google.com/forms/d/e/1FAIpQLSehxj7zMHH5ZfZ2pIUWWGUZ1pL7kqv7YEmvLsnq9qvto3_ONQ/viewform?embedded=true\" width=\"640\" height=\"805\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\">Cargando…</iframe>','Inactivo','pos',NULL,'2020-03-23 18:36:44','2020-03-23 18:36:45');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (13,'2014_07_02_230147_migration_cartalyst_sentinel',1),(14,'2017_05_05_084634_PasswordReset',1),(15,'2020_03_11_221845_capacitaciones',1),(16,'2020_03_12_234435_Asistencias',1),(18,'2020_03_19_111640_create_events_table',2),(27,'2020_03_22_150244_examens',4),(29,'2020_03_23_181352_calificaciones',5);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `persistences` */

DROP TABLE IF EXISTS `persistences`;

CREATE TABLE `persistences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `persistences_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `persistences` */

insert  into `persistences`(`id`,`user_id`,`code`,`created_at`,`updated_at`) values (5,3,'85PLsQKObYkAu4CFqFA8C3egkXHqWfRY','2020-03-13 04:48:43','2020-03-13 04:48:43'),(8,3,'bPm5OjmxabLaSlxGONqKnZGyGqk6jytf','2020-03-13 21:45:37','2020-03-13 21:45:37'),(11,3,'xnZeWKMWSX3PkTgocsP7UkI2cxYLpDPi','2020-03-13 22:10:08','2020-03-13 22:10:08'),(13,3,'v5uNoimUgSwPvdS3pBV6BXT4rVjX1Tk8','2020-03-13 22:13:59','2020-03-13 22:13:59'),(14,3,'aMLHKs8d7v6HHFBJPerso3lATUIprWr3','2020-03-13 22:15:21','2020-03-13 22:15:21'),(15,3,'OqfOwM0Q5qgkTnZ7tpUYN0OeoVMMtNf4','2020-03-13 22:18:50','2020-03-13 22:18:50'),(16,3,'RwFZPaFDt2e7ubP55Fek6l3jQYWHHml3','2020-03-13 22:22:03','2020-03-13 22:22:03'),(17,3,'nd4sg3B0gzkuYIciJUU9cEWbatQj4PsX','2020-03-13 22:27:43','2020-03-13 22:27:43'),(20,3,'nOwrHGJLp59U0BFMNZjaHFRZhR5TU2rv','2020-03-14 16:26:51','2020-03-14 16:26:51'),(22,3,'9r3Z0jHXxGRbGRKE25M8lAos7kLMmhpr','2020-03-14 18:50:37','2020-03-14 18:50:37'),(23,3,'GKvwKVDTqDmsl6LpW8aDbLmqNDPpwI8r','2020-03-14 21:25:19','2020-03-14 21:25:19'),(24,3,'fq6aTAutrBnrxymJEA4TMo6up8iVvF7s','2020-03-15 12:00:38','2020-03-15 12:00:38'),(28,4,'Ljh8EaFXHqslBakX4YITdqqPVWRFgqp3','2020-03-15 13:48:14','2020-03-15 13:48:14'),(29,4,'Mym6iUOwao5onmrbLa0uUER3IXARMOnt','2020-03-15 16:09:19','2020-03-15 16:09:19'),(30,3,'HudEOQ0AYR94iteai1IgIEyNPPG5vLMY','2020-03-15 16:34:41','2020-03-15 16:34:41'),(32,3,'dHwCKirDTpIq6z6vGGtmWw9tJRgNLiGU','2020-03-15 21:54:47','2020-03-15 21:54:47'),(33,3,'gFIPuu1HEqryy8tbiW6L35jMvO0PEbBZ','2020-03-15 23:03:05','2020-03-15 23:03:05'),(39,4,'wKiYgyERQmNL4TGqjVIj7CjagjnrtlhP','2020-03-16 18:39:13','2020-03-16 18:39:13'),(40,4,'6J2QNLqG5mjYB2sls66I1HwOiWb83wfd','2020-03-16 18:41:12','2020-03-16 18:41:12'),(41,3,'Qxz4vS0QMDJM8WcCixy8C9dwCBwKi0lX','2020-03-16 20:07:01','2020-03-16 20:07:01'),(47,3,'fxepM7FA36zNyeFrZnhl34EAP9tgl9DH','2020-03-19 10:02:48','2020-03-19 10:02:48'),(48,3,'pwE86QRPTHahlNopsiWmnn5Poum7tYLj','2020-03-20 08:20:47','2020-03-20 08:20:47'),(54,3,'XuBRSRLMIf64VZ8oHGesXzuiDh8Poc3b','2020-03-20 14:08:17','2020-03-20 14:08:17'),(79,22,'PDa3QlxZwJSEsuONUsaALIDY8ts1WD1n','2020-03-21 17:18:24','2020-03-21 17:18:24'),(80,22,'Y5uqRNKCwjf3y11hzqLPy6uVkmXLYWHS','2020-03-21 17:19:17','2020-03-21 17:19:17'),(81,3,'kqlut6vBQHT2KrANnJFIvN3vy5t971Hv','2020-03-21 17:21:25','2020-03-21 17:21:25'),(85,22,'68dYEv6mtyjOC9s6zMjpVEK6mD9wON0B','2020-03-21 17:24:18','2020-03-21 17:24:18'),(99,22,'pqXdZvAPoUUu9luYONUFbtxV0KWQhA2L','2020-03-21 17:53:12','2020-03-21 17:53:12'),(105,22,'T54Nul7wluNLzUETEkzrF1JgQ5J5Qzmu','2020-03-21 18:04:20','2020-03-21 18:04:20'),(111,22,'rjbX3kNrtQ5BJXMAahdrKzYvhA1qd9Vu','2020-03-21 18:23:07','2020-03-21 18:23:07'),(131,22,'s74bcnvAlnt6hEK46arBpj5Y6hLIRXD8','2020-03-21 23:50:23','2020-03-21 23:50:23'),(135,3,'9cOFpgnDxwsSSSHaryGiZbNPxgXqRAOm','2020-03-22 15:36:57','2020-03-22 15:36:57'),(139,3,'l7WljNL897GURE4AJzY6G848QbhuBCrA','2020-03-23 13:29:44','2020-03-23 13:29:44'),(143,22,'gCo1OPxapEncGglcRnBveSG13D46TSTe','2020-03-23 19:01:51','2020-03-23 19:01:51');

/*Table structure for table `reminders` */

DROP TABLE IF EXISTS `reminders`;

CREATE TABLE `reminders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `reminders` */

/*Table structure for table `role_users` */

DROP TABLE IF EXISTS `role_users`;

CREATE TABLE `role_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_users` */

insert  into `role_users`(`user_id`,`role_id`,`created_at`,`updated_at`) values (1,1,NULL,NULL),(2,2,'2020-03-12 23:52:22','2020-03-12 23:52:22'),(3,1,'2020-03-13 02:59:45','2020-03-13 02:59:45'),(4,1,'2020-03-15 13:42:36','2020-03-15 13:42:36'),(5,2,'2020-03-15 21:52:13','2020-03-15 21:52:13'),(6,2,'2020-03-16 18:25:52','2020-03-16 18:25:52'),(7,2,'2020-03-17 08:12:26','2020-03-17 08:12:26'),(8,1,'2020-03-17 08:39:38','2020-03-17 08:39:38'),(9,2,'2020-03-18 08:43:37','2020-03-18 08:43:37'),(10,1,'2020-03-18 10:25:20','2020-03-18 10:25:20'),(11,2,'2020-03-18 10:45:37','2020-03-18 10:45:37'),(12,2,'2020-03-18 10:51:39','2020-03-18 10:51:39'),(13,2,'2020-03-18 12:36:21','2020-03-18 12:36:21'),(14,1,'2020-03-18 12:43:10','2020-03-18 12:43:10'),(15,2,'2020-03-18 17:38:27','2020-03-18 17:38:27'),(16,2,'2020-03-18 19:21:29','2020-03-18 19:21:29'),(17,2,'2020-03-18 19:57:13','2020-03-18 19:57:13'),(18,2,'2020-03-18 19:59:51','2020-03-18 19:59:51'),(19,2,'2020-03-19 08:49:05','2020-03-19 08:49:05'),(20,15,'2020-03-19 09:39:37','2020-03-19 09:39:37'),(21,16,'2020-03-19 09:43:10','2020-03-19 09:43:10'),(22,13,'2020-03-19 21:29:28','2020-03-19 21:29:28'),(23,2,'2020-03-20 14:07:07','2020-03-20 14:07:07'),(24,19,'2020-03-21 17:14:56','2020-03-21 17:14:56');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`slug`,`name`,`permissions`,`created_at`,`updated_at`) values (1,'admin','Admin','{\"password.request\":true,\"password.email\":true,\"password.reset\":true,\"home.dashboard\":true,\"user.index\":true,\"user.create\":true,\"user.store\":true,\"user.show\":true,\"user.edit\":true,\"user.update\":true,\"user.destroy\":true,\"user.permissions\":true,\"user.save\":true,\"user.activate\":true,\"user.deactivate\":true,\"role.index\":true,\"role.create\":true,\"role.store\":true,\"role.show\":true,\"role.edit\":true,\"role.update\":true,\"role.destroy\":true,\"role.permissions\":true,\"role.save\":true}',NULL,NULL),(2,'client','usuario','{\"home.dashboard\":true}',NULL,NULL),(10,'Doctor','Doctor','{\"home.dashboard\":true}',NULL,NULL),(11,'Enfermería','Enfermería','{\"home.dashboard\":true}',NULL,NULL),(12,'Apoyo administrativo','Apoyo administrativo','{\"home.dashboard\":true}',NULL,NULL),(13,'Odontología','Odontología','{\"home.dashboard\":true}',NULL,NULL),(14,'Médico pediatra','Médico pediatra','{\"home.dashboard\":true}',NULL,NULL),(15,'Psicólogo','Psicólogo','{\"home.dashboard\":true}',NULL,NULL),(16,'Nutriólogo','Nutriólogo','{\"home.dashboard\":true}',NULL,NULL),(17,'Médico general','Médico general','{\"home.dashboard\":true}',NULL,NULL),(18,'Médico ginecólogo','Médico ginecólogo','{\"home.dashboard\":true}',NULL,NULL),(19,'Médico cirujano','Médico cirujano','{\"home.dashboard\":true}	',NULL,NULL),(20,'Médico internista','Médico internista','{\"home.dashboard\":true}	',NULL,NULL),(21,'Médico dentista','Médico dentista','{\"home.dashboard\":true}	',NULL,NULL),(22,'Laboratorista','Laboratorista','{\"home.dashboard\":true}	',NULL,NULL),(23,'Mantenimiento','Mantenimiento','{\"home.dashboard\":true}	',NULL,NULL),(24,'Servicios generales','Servicios generales','{\"home.dashboard\":true}	',NULL,NULL);

/*Table structure for table `throttle` */

DROP TABLE IF EXISTS `throttle`;

CREATE TABLE `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `throttle` */

insert  into `throttle`(`id`,`user_id`,`type`,`ip`,`created_at`,`updated_at`) values (1,NULL,'global',NULL,'2020-03-13 04:48:24','2020-03-13 04:48:24'),(2,NULL,'ip','::1','2020-03-13 04:48:24','2020-03-13 04:48:24'),(3,NULL,'global',NULL,'2020-03-13 04:48:32','2020-03-13 04:48:32'),(4,NULL,'ip','::1','2020-03-13 04:48:32','2020-03-13 04:48:32'),(5,NULL,'global',NULL,'2020-03-15 13:47:56','2020-03-15 13:47:56'),(6,NULL,'ip','::1','2020-03-15 13:47:56','2020-03-15 13:47:56'),(7,4,'user',NULL,'2020-03-15 13:47:56','2020-03-15 13:47:56'),(8,NULL,'global',NULL,'2020-03-16 18:25:14','2020-03-16 18:25:14'),(9,NULL,'ip','::1','2020-03-16 18:25:14','2020-03-16 18:25:14'),(10,NULL,'global',NULL,'2020-03-18 10:26:48','2020-03-18 10:26:48'),(11,NULL,'ip','::1','2020-03-18 10:26:48','2020-03-18 10:26:48'),(12,10,'user',NULL,'2020-03-18 10:26:48','2020-03-18 10:26:48'),(13,NULL,'global',NULL,'2020-03-18 10:53:14','2020-03-18 10:53:14'),(14,NULL,'ip','::1','2020-03-18 10:53:15','2020-03-18 10:53:15'),(15,10,'user',NULL,'2020-03-18 10:53:15','2020-03-18 10:53:15'),(16,NULL,'global',NULL,'2020-03-18 19:31:02','2020-03-18 19:31:02'),(17,NULL,'ip','::1','2020-03-18 19:31:02','2020-03-18 19:31:02'),(18,3,'user',NULL,'2020-03-18 19:31:02','2020-03-18 19:31:02'),(19,NULL,'global',NULL,'2020-03-20 23:04:49','2020-03-20 23:04:49'),(20,NULL,'ip','::1','2020-03-20 23:04:49','2020-03-20 23:04:49'),(21,NULL,'global',NULL,'2020-03-20 23:15:35','2020-03-20 23:15:35'),(22,NULL,'ip','::1','2020-03-20 23:15:35','2020-03-20 23:15:35'),(23,22,'user',NULL,'2020-03-20 23:15:35','2020-03-20 23:15:35'),(24,NULL,'global',NULL,'2020-03-21 17:10:43','2020-03-21 17:10:43'),(25,NULL,'ip','::1','2020-03-21 17:10:43','2020-03-21 17:10:43'),(26,22,'user',NULL,'2020-03-21 17:10:43','2020-03-21 17:10:43'),(27,NULL,'global',NULL,'2020-03-21 17:23:23','2020-03-21 17:23:23'),(28,NULL,'ip','::1','2020-03-21 17:23:23','2020-03-21 17:23:23'),(29,22,'user',NULL,'2020-03-21 17:23:23','2020-03-21 17:23:23'),(30,NULL,'global',NULL,'2020-03-21 21:13:52','2020-03-21 21:13:52'),(31,NULL,'ip','::1','2020-03-21 21:13:52','2020-03-21 21:13:52'),(32,22,'user',NULL,'2020-03-21 21:13:52','2020-03-21 21:13:52'),(33,NULL,'global',NULL,'2020-03-21 21:54:25','2020-03-21 21:54:25'),(34,NULL,'ip','::1','2020-03-21 21:54:25','2020-03-21 21:54:25'),(35,24,'user',NULL,'2020-03-21 21:54:25','2020-03-21 21:54:25'),(36,NULL,'global',NULL,'2020-03-21 21:54:31','2020-03-21 21:54:31'),(37,NULL,'ip','::1','2020-03-21 21:54:32','2020-03-21 21:54:32'),(38,21,'user',NULL,'2020-03-21 21:54:32','2020-03-21 21:54:32'),(39,NULL,'global',NULL,'2020-03-23 11:52:40','2020-03-23 11:52:40'),(40,NULL,'ip','::1','2020-03-23 11:52:40','2020-03-23 11:52:40'),(41,3,'user',NULL,'2020-03-23 11:52:40','2020-03-23 11:52:40'),(42,NULL,'global',NULL,'2020-03-23 13:21:12','2020-03-23 13:21:12'),(43,NULL,'ip','::1','2020-03-23 13:21:12','2020-03-23 13:21:12'),(44,3,'user',NULL,'2020-03-23 13:21:12','2020-03-23 13:21:12');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `QRpassword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'bIzSXpVdE4RZ2S9tfxCFrhl74YrAYRwPIGXobnqD',
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`password`,`QRpassword`,`permissions`,`last_login`,`first_name`,`last_name`,`remember_token`,`deleted_at`,`created_at`,`updated_at`) values (1,'admin@admin.com','$2y$10$kO7kNcOG.3eE2ZTu2HooVuTJzKERQ78SaXTM1uLdtjU5f/Sb4LR6e','Dammy-CODE-1S4u7lJzehk62xDm3DgYgXXYWtbHE6gSP','{\"home.dashboard\":true}',NULL,'John','Doe',NULL,'2020-03-18 12:54:35',NULL,'2020-03-18 12:54:35'),(3,'manzanocortesbrayan@gmail.com','$2y$10$s5W1a/ovKWNVIbrddIvq7eU7zC1Ubcq3VSo8yWVt6CjM0fLNrmmiu','$2y$10$o6XaYn3XWHe0Jc5GHs2Wh.cGsNHJnwuIl/frA3emGUxTh3icJYuhu','{\"password.request\":true,\"password.email\":true,\"password.reset\":true,\"home.dashboard\":true,\"user.index\":true,\"user.create\":true,\"user.store\":true,\"user.show\":true,\"user.edit\":true,\"user.update\":true,\"user.destroy\":true,\"user.permissions\":true,\"user.save\":true,\"user.activate\":true,\"user.deactivate\":true,\"role.index\":true,\"role.create\":true,\"role.store\":true,\"role.show\":true,\"role.edit\":true,\"role.update\":true,\"role.destroy\":true,\"role.permissions\":true,\"role.save\":true}','2020-03-23 18:59:46','Brayan','Manzano',NULL,NULL,'2020-03-13 02:59:45','2020-03-23 18:59:46'),(8,'erikatrejo.mc@gmail.com','$2y$10$LwNHwN2DSWhjeaxcInI69e4lJBdlA3B6xFdmYicWopgvkSIQl/Oyi','Erika Trejo','{\"password.request\":true,\"password.email\":true,\"password.reset\":true,\"home.dashboard\":true,\"user.index\":true,\"user.create\":true,\"user.store\":true,\"user.show\":true,\"user.edit\":true,\"user.update\":true,\"user.destroy\":true,\"user.permissions\":true,\"user.save\":true,\"user.activate\":true,\"user.deactivate\":true,\"role.index\":true,\"role.create\":true,\"role.store\":true,\"role.show\":true,\"role.edit\":true,\"role.update\":true,\"role.destroy\":true,\"role.permissions\":true,\"role.save\":true}','2020-03-17 08:40:08','Erika','Trejo',NULL,NULL,'2020-03-17 08:37:32','2020-03-17 08:40:08'),(10,'xonaense2020@hotmail.com','$2y$10$eL1NFOS6q4kvfbv6Nhao.uusQL4lQsP0.xYa9PiLcOTjz2.bG2aRC','carmen estrada','{\"password.request\":true,\"password.email\":true,\"password.reset\":true,\"home.dashboard\":true,\"user.index\":true,\"user.create\":true,\"user.store\":true,\"user.show\":true,\"user.edit\":true,\"user.update\":true,\"user.destroy\":true,\"user.permissions\":true,\"user.save\":true,\"user.activate\":true,\"user.deactivate\":true,\"role.index\":true,\"role.create\":true,\"role.store\":true,\"role.show\":true,\"role.edit\":true,\"role.update\":true,\"role.destroy\":true,\"role.permissions\":true,\"role.save\":true}','2020-03-18 10:53:27','carmen','estrada',NULL,NULL,'2020-03-18 10:22:47','2020-03-18 10:53:27'),(11,'laga88lg1@gmail.com','$2y$10$2TzcO1OEWw/U/1zi39NTGeop/ew.HxcCFloUfJkGxatbVtAk1eAUy','Araceli Laureano Guerrero',NULL,'2020-03-18 10:46:21','Araceli','Laureano Guerrero',NULL,NULL,'2020-03-18 10:45:36','2020-03-18 10:46:39'),(12,'bethportillo3@gmail.com','$2y$10$vhfvo28dEI5mBAJHI48Nc.0lhNii/Z/nqNNRb2vKphLry6VN.3sRq','Bethel Bethesda Portillo Iturbide',NULL,'2020-03-18 10:52:12','Bethel Bethesda','Portillo Iturbide',NULL,NULL,'2020-03-18 10:51:39','2020-03-18 10:52:28'),(15,'prueba@gmail.com','$2y$10$99C40JcZJhIQ6kdHS8/vbuFyA2UsztvLzaboH6JnVUAQltxt0JJwS','$2y$10$mq0FUgFLx2nA1rUXsEdxfewrOonSF.9K/BiE2.12YEKx0eboIjX.O',NULL,'2020-03-18 17:57:20','Prueba','prueba',NULL,NULL,'2020-03-18 17:38:27','2020-03-18 17:57:46'),(16,'toro@gmail.com','$2y$10$8xtkthlMDCMZ0/uRI3ItzeaynMomDfKVHyQszCSQwoGZ2uhKfVGbS','$2y$10$r.C6tuwAkGSLdKRriNJL3.AF1gaUkKvE8yRQU.eyUY6rN3Cks8TUm',NULL,'2020-03-18 19:22:34','Pepe','el toro',NULL,NULL,'2020-03-18 19:21:29','2020-03-18 19:22:42'),(17,'roger@gmail.com','$2y$10$XJ4r0rYrcxAbbTw12HqmSOwmvnnfnECMuueQn1P9UuxMqTYQZ.kZC','bIzSXpVdE4RZ2S9tfxCFrhl74YrAYRwPIGXobnqD',NULL,NULL,'Rogelio','Lara',NULL,NULL,'2020-03-18 19:57:13','2020-03-18 19:57:13'),(18,'rogera@gmail.com','$2y$10$6/81WVnM.i6bhvYCLJi9s.mvOKLZpjD7rgO6erMiGY6jQ9mSGXrHm','bIzSXpVdE4RZ2S9tfxCFrhl74YrAYRwPIGXobnqD',NULL,NULL,'Rogelio','reyes',NULL,NULL,'2020-03-18 19:59:51','2020-03-18 19:59:51'),(19,'mar@gmail.com','$2y$10$Dwevww3rHL4QJMOc41ZsTONAHSNMGqO8fFz2fCeBgT4/GrKSVklqS','$2y$10$bdObgezjuX6lNMKuQ9vjpOZMvEGWLlAfnVdhGc8aW7u08MGllTazO',NULL,'2020-03-19 08:49:26','Marco','Solis',NULL,NULL,'2020-03-19 08:49:05','2020-03-19 08:49:36'),(20,'fer@gmail.com','$2y$10$WudnJnNGfjj6RhZGBCSuT.Q6K6MqLFdrhPh6qsQuExFniLvUNksW6','bIzSXpVdE4RZ2S9tfxCFrhl74YrAYRwPIGXobnqD',NULL,NULL,'Fernan','Flo',NULL,NULL,'2020-03-19 09:39:37','2020-03-19 09:39:37'),(21,'rick@gmail.com','$2y$10$7dJR515F0xcrTU0kxFvpRuQljP5EnJngfqhl7CtX6hTEWK8pdP0KG','$2y$10$FscP4FoANoJ.xEGZB13DfONkMTK6tCZiOuVqyVhWYG5LXUjsUaiea',NULL,'2020-03-22 14:52:32','Ricardo','Rodriguez',NULL,NULL,'2020-03-19 09:43:10','2020-03-22 14:52:32'),(22,'torito@gmail.com','$2y$10$WJC3/xc2IZPD.6cG28QdZ.LvJeHZ3KV3FscS1y2pCfwpg41bTwh9.','$2y$10$8UMtyL3ULwfw/KuTd03Xr.zUX41iD6Q4Uw5RW1seZLJUWMKcoT28y',NULL,'2020-03-23 19:01:51','Torito','Torres',NULL,NULL,'2020-03-19 21:29:28','2020-03-23 19:01:51'),(23,'saul@gmail.com','$2y$10$/mqUjeAElDbHjX9yGgq1jucpaV49n1zS5mQCmcRIw.Fccqt9kf2dq','$2y$10$a2KMyW0eZbB5h.SCykFMVuoBroa0hYYWr8pdE0lJzQJcsTlVtNhHS',NULL,'2020-03-20 14:07:17','Saul','hernandez',NULL,NULL,'2020-03-20 14:07:07','2020-03-20 14:07:29'),(24,'rickm@gmail.com','$2y$10$Sc1I9I72pHyMOftou/Eyj.U0D/sJj98sM4VB0uptsQZqt6OCqMu5S','bIzSXpVdE4RZ2S9tfxCFrhl74YrAYRwPIGXobnqD','{\"home.dashboard\":true}','2020-03-21 17:17:37','Rick','Sanchez',NULL,NULL,'2020-03-21 17:14:56','2020-03-21 17:17:37');

/*Table structure for table `listaases` */

DROP TABLE IF EXISTS `listaases`;

/*!50001 DROP VIEW IF EXISTS `listaases` */;
/*!50001 DROP TABLE IF EXISTS `listaases` */;

/*!50001 CREATE TABLE  `listaases`(
 `ida` bigint(20) unsigned ,
 `Nombre` varchar(191) ,
 `apellido` varchar(191) ,
 `correo` varchar(191) ,
 `role` varchar(191) ,
 `fecha` date ,
 `hora` time ,
 `id` bigint(20) unsigned ,
 `capacitacion` varchar(191) 
)*/;

/*View structure for view listaases */

/*!50001 DROP TABLE IF EXISTS `listaases` */;
/*!50001 DROP VIEW IF EXISTS `listaases` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `listaases` AS select `asi`.`ida` AS `ida`,`us`.`first_name` AS `Nombre`,`us`.`last_name` AS `apellido`,`us`.`email` AS `correo`,`ro`.`name` AS `role`,`asi`.`fecha` AS `fecha`,`asi`.`hora` AS `hora`,`ca`.`id` AS `id`,`ca`.`nombre` AS `capacitacion` from ((((`asistencias` `asi` join `capacitaciones` `ca` on((`ca`.`id` = `asi`.`id`))) join `users` `us` on((`us`.`QRpassword` = `asi`.`user`))) join `role_users` `ru` on((`ru`.`user_id` = `us`.`id`))) join `roles` `ro` on((`ro`.`id` = `ru`.`role_id`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
