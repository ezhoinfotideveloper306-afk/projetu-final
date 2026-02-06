/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.32-MariaDB : Database - db_web3_alumi2025
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_web3_alumi2025` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `db_web3_alumi2025`;

/*Table structure for table `t_alumni` */

DROP TABLE IF EXISTS `t_alumni`;

CREATE TABLE `t_alumni` (
  `id_alumni` char(10) NOT NULL,
  `nrn_alumni` char(255) NOT NULL,
  `sexo` enum('Mane','Feto') NOT NULL,
  `fatin_moris` char(255) NOT NULL,
  `data_moris` date NOT NULL,
  `id_anoletivu` year(4) NOT NULL,
  `id_departamentu` char(2) NOT NULL,
  `id_niveles` char(1) NOT NULL,
  `foto_alumni` char(255) NOT NULL,
  `obs_alumni` varchar(500) NOT NULL,
  PRIMARY KEY (`id_alumni`),
  KEY `iAnoletivu` (`id_anoletivu`),
  KEY `iDepartamentu` (`id_departamentu`),
  KEY `iNiveles` (`id_niveles`),
  CONSTRAINT `FK_ANOLETINUS` FOREIGN KEY (`id_anoletivu`) REFERENCES `t_anoletivu` (`id_anoletivu`) ON UPDATE CASCADE,
  CONSTRAINT `FK_DEPARTAMENTUS` FOREIGN KEY (`id_departamentu`) REFERENCES `t_departamentu` (`id_departamentu`) ON UPDATE CASCADE,
  CONSTRAINT `FK_NIVELES` FOREIGN KEY (`id_niveles`) REFERENCES `t_niveles` (`id_niveles`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `t_alumni` */

/*Table structure for table `t_anoletivu` */

DROP TABLE IF EXISTS `t_anoletivu`;

CREATE TABLE `t_anoletivu` (
  `id_anoletivu` year(4) NOT NULL,
  `nrn_anoletivu` char(255) NOT NULL,
  `obs_anoletivu` varchar(500) NOT NULL,
  PRIMARY KEY (`id_anoletivu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `t_anoletivu` */

/*Table structure for table `t_departamentu` */

DROP TABLE IF EXISTS `t_departamentu`;

CREATE TABLE `t_departamentu` (
  `id_departamentu` char(2) NOT NULL,
  `nrn_departamentu` char(255) NOT NULL,
  `inc_departamentu` char(25) NOT NULL,
  `id_fakuldade` char(2) NOT NULL,
  `obs_departamentu` varchar(500) NOT NULL,
  PRIMARY KEY (`id_departamentu`),
  KEY `iFakul` (`id_fakuldade`),
  CONSTRAINT `FK_FAKULDADES` FOREIGN KEY (`id_fakuldade`) REFERENCES `t_fakuldade` (`id_fakuldade`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `t_departamentu` */

/*Table structure for table `t_fakuldade` */

DROP TABLE IF EXISTS `t_fakuldade`;

CREATE TABLE `t_fakuldade` (
  `id_fakuldade` char(2) NOT NULL,
  `nrn_fakuldade` char(255) NOT NULL,
  `inc_fakuldade` char(25) NOT NULL,
  `obs_fakuldade` varchar(500) NOT NULL,
  PRIMARY KEY (`id_fakuldade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `t_fakuldade` */

/*Table structure for table `t_niveles` */

DROP TABLE IF EXISTS `t_niveles`;

CREATE TABLE `t_niveles` (
  `id_niveles` char(1) NOT NULL,
  `nrn_niveles` char(255) NOT NULL,
  `inc_niveles` char(25) NOT NULL,
  `obs_niveles` varchar(500) NOT NULL,
  PRIMARY KEY (`id_niveles`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `t_niveles` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
