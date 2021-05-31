/*
SQLyog Professional v12.4.3 (64 bit)
MySQL - 5.6.20 : Database - indigo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`indigo` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `indigo`;

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `status` enum('Active','Inactive') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `category` */

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ci_sessions` */

/*Table structure for table `input_instrumen` */

DROP TABLE IF EXISTS `input_instrumen`;

CREATE TABLE `input_instrumen` (
  `id_input` int(11) NOT NULL AUTO_INCREMENT,
  `id_instrumen1` varchar(150) NOT NULL,
  `pa_tujuan` varchar(150) DEFAULT NULL,
  `no_perkara` varchar(150) NOT NULL,
  `tgl_sidang` date NOT NULL,
  `pihak_perkara` enum('Penggugat','Pemohon','Tergugat','Termohon') NOT NULL,
  `nama_jurusita` varchar(150) NOT NULL,
  `Biaya_radius` double(23,2) DEFAULT NULL,
  `ketua_majelis` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL,
  PRIMARY KEY (`id_input`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `input_instrumen` */

insert  into `input_instrumen`(`id_input`,`id_instrumen1`,`pa_tujuan`,`no_perkara`,`tgl_sidang`,`pihak_perkara`,`nama_jurusita`,`Biaya_radius`,`ketua_majelis`,`status`) values 
(1,'1','Pengadilan Agama Kisaran','192/Pdt.G/2021/PA.Sim','2021-05-27','Penggugat','Al Zimy Siregar',150000.00,'ILMAS,S.H.I','Belum Di Cetak');

/*Table structure for table `instrumen` */

DROP TABLE IF EXISTS `instrumen`;

CREATE TABLE `instrumen` (
  `id_instrumen` int(11) NOT NULL AUTO_INCREMENT,
  `instrumen_nama` varchar(150) NOT NULL,
  PRIMARY KEY (`id_instrumen`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `instrumen` */

insert  into `instrumen`(`id_instrumen`,`instrumen_nama`) values 
(1,'INSTRUMEN PANGGILAN  PENGGUGAT / PEMOHON'),
(2,'INSTRUMEN PANGGILAN TERGUGAT / TERMOHON'),
(3,'INSTRUMEN MOHON BANTUAN PANGGILAN'),
(4,'INSTRUMEN PANGGILAN UNTUK TERGUGAT / TERMOHON ( PENGUMUMAN )');

/*Table structure for table `pendapathukum` */

DROP TABLE IF EXISTS `pendapathukum`;

CREATE TABLE `pendapathukum` (
  `id_pendapathukum` int(11) NOT NULL AUTO_INCREMENT,
  `id_serahterimabb` int(11) NOT NULL,
  `id_jaksa` int(11) NOT NULL,
  `hari_input` varchar(30) NOT NULL,
  `tgl_input` date NOT NULL,
  `tgl_kekuatan_hukum` date NOT NULL,
  PRIMARY KEY (`id_pendapathukum`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `pendapathukum` */

insert  into `pendapathukum`(`id_pendapathukum`,`id_serahterimabb`,`id_jaksa`,`hari_input`,`tgl_input`,`tgl_kekuatan_hukum`) values 
(2,2,1,'Rabu','2017-01-09','2017-01-16'),
(3,1,2,'Sabtu','2017-01-16','2017-01-06');

/*Table structure for table `serahterimabb` */

DROP TABLE IF EXISTS `serahterimabb`;

CREATE TABLE `serahterimabb` (
  `id_serahterima` int(11) NOT NULL AUTO_INCREMENT,
  `hari_input_bb` varchar(30) NOT NULL,
  `tgl_input_bb` date NOT NULL,
  `no_print` varchar(200) NOT NULL,
  `tgl_no_print` date NOT NULL,
  `barang_bukti` text NOT NULL,
  `nama_terpidana` varchar(255) NOT NULL,
  `id_jaksa1` int(11) NOT NULL,
  `id_jaksa2` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status_bb` varchar(200) NOT NULL,
  `no_putusan` varchar(255) NOT NULL,
  `tgl_putusan` date NOT NULL,
  PRIMARY KEY (`id_serahterima`),
  KEY `id_jaksa1` (`id_jaksa1`),
  KEY `id_jaksa2` (`id_jaksa2`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `serahterimabb` */

insert  into `serahterimabb`(`id_serahterima`,`hari_input_bb`,`tgl_input_bb`,`no_print`,`tgl_no_print`,`barang_bukti`,`nama_terpidana`,`id_jaksa1`,`id_jaksa2`,`keterangan`,`status_bb`,`no_putusan`,`tgl_putusan`) values 
(1,'Rabu','2017-01-11','11111/111111/1111','2017-01-10','Barang bukti','Udin Junior',1,2,'Mantap','dirampas untuk negara','NO/PUTUSAN/112/1','2017-01-10'),
(2,'Kamis','2017-01-16','PRINT/10/111','2017-01-11','Baju Bekas','Anang',2,1,'siap','dirampas untuk negara','PUTUSAN/011','2017-01-12'),
(3,'Rabu','2017-01-18','NO/PRIN/123','2017-01-12','Arit','Udin Bandung',1,2,'Mantap','dirampas untuk negara','Putusan/123','2017-01-17');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','jurusita','hakim') NOT NULL DEFAULT 'admin',
  `last_logged_in` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(20) NOT NULL DEFAULT '0.0.0.0',
  `display_name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `activation_key` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id_user`,`username`,`password`,`level`,`last_logged_in`,`ip_address`,`display_name`,`email`,`activation_key`) values 
(1,'administrator','$2y$10$qLgN1yw69/Xsy7W57RiZ8OkFcIGGqRakhqKQzJ5DQeJE2l/jEqRX6','admin','2021-05-31 15:57:22','::1','ADMINISTRATOR','admin@gmail.com',NULL),
(2,'zimy','$2y$10$zyvX/SJUOEt.KHRpV5eik.PNDoeJ3Sfg48MZfK859fX7QijCR1JbK','jurusita','0000-00-00 00:00:00','::1','Al Zimy Siregar','zimy@indigo.com',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
