/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 5.7.33 : Database - sipb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sipb` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sipb`;

/*Table structure for table `bencana` */

DROP TABLE IF EXISTS `bencana`;

CREATE TABLE `bencana` (
  `id_bencana` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nama_bencana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `FK_Id_kategori_bencana` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id_bencana`),
  KEY `bencana_fk_id_kategori_bencana_foreign` (`FK_Id_kategori_bencana`),
  CONSTRAINT `bencana_fk_id_kategori_bencana_foreign` FOREIGN KEY (`FK_Id_kategori_bencana`) REFERENCES `kategori_bencana` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `bencana` */

insert  into `bencana`(`id_bencana`,`Nama_bencana`,`created_at`,`updated_at`,`FK_Id_kategori_bencana`) values 
(1,'Banjir','2021-12-08 00:32:03','2021-12-08 00:32:03',2),
(2,'Gempa Bumi','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(3,'Angin Tornado','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(4,'Tsunami','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(5,'Gunung Mbledos','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(6,'Erosi','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(7,'Tanah Longsor','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(8,'Kebakaran','2021-12-08 00:32:03','2021-12-08 00:32:03',2),
(9,'Hujan Es','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(10,'Badai','2021-12-08 00:32:03','2021-12-08 00:32:03',1);

/*Table structure for table `detail_korban` */

DROP TABLE IF EXISTS `detail_korban`;

CREATE TABLE `detail_korban` (
  `id_detail_korban` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `FK_Id_laporan` bigint(20) unsigned NOT NULL,
  `NIK` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Umur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kondisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_detail_korban`),
  KEY `detail_korban_fk_id_laporan_foreign` (`FK_Id_laporan`),
  CONSTRAINT `detail_korban_fk_id_laporan_foreign` FOREIGN KEY (`FK_Id_laporan`) REFERENCES `pelaporan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `detail_korban` */

insert  into `detail_korban`(`id_detail_korban`,`FK_Id_laporan`,`NIK`,`Nama`,`Umur`,`Kondisi`,`created_at`,`updated_at`) values 
(1,7,'39','Eka Damanik M.Pd','93','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(2,14,'53','Belinda Nuraini','50','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(3,19,'2','Vicky Wastuti','94','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(4,11,'91','Carub Sinaga','80','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(5,40,'15','Kezia Riyanti','20','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(6,22,'9','Daliman Kardi Prasetya S.Sos','40','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(7,25,'10','Ifa Safitri M.Farm','1','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(8,49,'65','Karya Arta Wasita','36','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(9,16,'51','Gaduh Hardiansyah','66','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(10,4,'4','Danu Bagiya Hutagalung M.M.','51','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(11,20,'82','Belinda Farida','53','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(12,23,'40','Wirda Kayla Andriani','21','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(13,5,'98','Yosef Hidayanto','30','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(14,15,'67','Danang Latupono','85','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(15,12,'90','Wulan Aisyah Yulianti S.I.Kom','17','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(16,48,'30','Eko Hardiansyah','42','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(17,35,'88','Martani Sitompul','26','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(18,38,'45','Cahya Saputra','55','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(19,34,'74','Carub Suryono','28','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(20,18,'14','Malik Hardi Jailani','74','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(21,38,'59','Hasna Suryatmi','82','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(22,42,'80','Raden Anggriawan S.Sos','90','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(23,10,'72','Hafshah Hafshah Nasyidah S.Pd','10','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(24,50,'98','Ilsa Riyanti','7','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(25,32,'78','Kunthara Hardiansyah','92','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(26,39,'78','Zaenab Handayani S.Farm','14','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(27,22,'40','Anastasia Novitasari','80','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(28,30,'46','Septi Rahayu','60','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(29,4,'10','Labuh Ozy Najmudin M.M.','100','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(30,24,'13','Anggabaya Aslijan Saefullah','100','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(31,7,'57','Cahyanto Dabukke','58','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(32,20,'82','Hafshah Sadina Aryani','30','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(33,34,'46','Jumari Sitompul M.Pd','20','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(34,32,'79','Ella Yuliarti','41','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(35,4,'19','Rina Septi Rahimah S.Psi','57','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(36,45,'72','Ida Farah Yolanda M.Ak','29','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(37,49,'47','Eko Saputra S.I.Kom','36','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(38,43,'90','Hamima Hassanah','41','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(39,6,'61','Putri Nilam Purwanti','64','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(40,1,'55','Jinawi Damanik','84','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(41,22,'18','Dalima Sudiati S.Farm','84','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(42,13,'72','Paulin Vicky Hartati S.Farm','57','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(43,32,'8','Wakiman Simbolon','78','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(44,46,'91','Juli Rahmawati','15','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(45,10,'42','Edi Najmudin','90','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(46,48,'22','Darman Rajata','18','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(47,18,'57','Aditya Prabowo Pratama','83','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(48,9,'79','Nugraha Waskita','92','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(49,32,'42','Sadina Oktaviani','73','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(50,6,'2','Titin Purwanti','70','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(51,10,'14','Paris Hastuti','43','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(52,46,'29','Tina Siti Kusmawati S.E.','64','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(53,36,'41','Maya Anggraini','41','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(54,35,'18','Asman Prabowo S.H.','70','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(55,26,'39','Wahyu Nainggolan','88','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(56,25,'66','Hana Tiara Laksmiwati S.Psi','17','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(57,23,'100','Yulia Wahyuni','68','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(58,10,'65','Ulya Fujiati S.Sos','49','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(59,9,'62','Silvia Mardhiyah','58','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(60,14,'100','Diah Permata M.Pd','39','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(61,19,'68','Cengkal Uwais M.Ak','54','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(62,7,'2','Artawan Gunarto','68','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(63,11,'35','Tania Suryatmi','99','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(64,41,'18','Joko Prakasa S.E.I','85','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(65,10,'6','Febi Halimah M.Ak','22','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(66,18,'28','Niyaga Kasusra Hutasoit S.E.','67','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(67,12,'58','Gilda Padmasari S.Pt','98','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(68,5,'40','Faizah Aurora Palastri','47','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(69,50,'62','Bella Keisha Safitri M.M.','94','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(70,23,'26','Arsipatra Hardiansyah M.M.','100','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(71,18,'72','Titin Lala Fujiati','15','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(72,43,'71','Daniswara Winarno M.Ak','7','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(73,33,'73','Yani Wahyuni M.Ak','48','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(74,28,'99','Ophelia Astuti','72','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(75,24,'86','Padmi Rahayu','25','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(76,6,'40','Karsa Mandala','80','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(77,28,'50','Ika Cinta Mandasari','36','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(78,24,'36','Asmianto Drajat Prasetya S.IP','73','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(79,27,'53','Cahya Hutagalung','76','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(80,6,'88','Hadi Asmadi Utama S.T.','21','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(81,48,'13','Dasa Hardiansyah','29','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(82,37,'73','Kayla Clara Nasyiah','57','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(83,7,'46','Garan Hasim Najmudin','80','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(84,13,'35','Bala Lazuardi','89','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(85,32,'61','Utama Opung Ramadan M.Kom.','54','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(86,48,'99','Gilda Haryanti','25','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(87,16,'10','Zelda Yance Palastri','10','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(88,45,'52','Rafi Jail Santoso','1','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(89,8,'31','Shakila Mala Namaga S.T.','21','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(90,18,'18','Cahyono Winarno S.Farm','30','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(91,36,'27','Daruna Napitupulu','36','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(92,34,'50','Fathonah Ani Zulaika S.Ked','72','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(93,25,'47','Zelaya Anastasia Haryanti','1','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(94,24,'88','Setya Murti Thamrin','44','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(95,36,'88','Slamet Suwarno','6','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(96,32,'53','Sarah Palastri','20','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(97,7,'76','Asirwanda Mahendra','88','1','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(98,2,'53','Ellis Permata','90','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(99,46,'38','Balidin Habibi','6','0','2021-12-08 00:32:04','2021-12-08 00:32:04'),
(100,4,'90','Zulfa Laksita','31','0','2021-12-08 00:32:04','2021-12-08 00:32:04');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `kategori_bencana` */

DROP TABLE IF EXISTS `kategori_bencana`;

CREATE TABLE `kategori_bencana` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Kategori_Bencana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kategori_bencana` */

insert  into `kategori_bencana`(`id`,`Kategori_Bencana`,`created_at`,`updated_at`) values 
(1,'Alam',NULL,NULL),
(2,'Non-Alam',NULL,NULL);

/*Table structure for table `kecamatan` */

DROP TABLE IF EXISTS `kecamatan`;

CREATE TABLE `kecamatan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nama_Kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `FK_ID_KOTA` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kecamatan_fk_id_kota_foreign` (`FK_ID_KOTA`),
  CONSTRAINT `kecamatan_fk_id_kota_foreign` FOREIGN KEY (`FK_ID_KOTA`) REFERENCES `kota` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kecamatan` */

insert  into `kecamatan`(`id`,`Nama_Kecamatan`,`created_at`,`updated_at`,`FK_ID_KOTA`) values 
(1,'Bitung','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(2,'Administrasi Jakarta Pusat','2021-12-08 00:32:03','2021-12-08 00:32:03',3),
(3,'Dumai','2021-12-08 00:32:03','2021-12-08 00:32:03',2),
(4,'Pekalongan','2021-12-08 00:32:03','2021-12-08 00:32:03',5),
(5,'Balikpapan','2021-12-08 00:32:03','2021-12-08 00:32:03',5),
(6,'Banjarmasin','2021-12-08 00:32:03','2021-12-08 00:32:03',4),
(7,'Batu','2021-12-08 00:32:03','2021-12-08 00:32:03',4),
(8,'Yogyakarta','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(9,'Semarang','2021-12-08 00:32:03','2021-12-08 00:32:03',5),
(10,'Kediri','2021-12-08 00:32:03','2021-12-08 00:32:03',2),
(11,'Tarakan','2021-12-08 00:32:03','2021-12-08 00:32:03',4),
(12,'Makassar','2021-12-08 00:32:03','2021-12-08 00:32:03',4),
(13,'Jayapura','2021-12-08 00:32:03','2021-12-08 00:32:03',4),
(14,'Batam','2021-12-08 00:32:03','2021-12-08 00:32:03',4),
(15,'Tomohon','2021-12-08 00:32:03','2021-12-08 00:32:03',5),
(16,'Metro','2021-12-08 00:32:03','2021-12-08 00:32:03',4),
(17,'Parepare','2021-12-08 00:32:03','2021-12-08 00:32:03',4),
(18,'Blitar','2021-12-08 00:32:03','2021-12-08 00:32:03',4),
(19,'Pagar Alam','2021-12-08 00:32:03','2021-12-08 00:32:03',4),
(20,'Sibolga','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(21,'Administrasi Jakarta Selatan','2021-12-08 00:32:03','2021-12-08 00:32:03',5),
(22,'Tegal','2021-12-08 00:32:03','2021-12-08 00:32:03',3),
(23,'Surakarta','2021-12-08 00:32:03','2021-12-08 00:32:03',5),
(24,'Administrasi Jakarta Barat','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(25,'Pariaman','2021-12-08 00:32:03','2021-12-08 00:32:03',4),
(26,'Madiun','2021-12-08 00:32:03','2021-12-08 00:32:03',4),
(27,'Gunungsitoli','2021-12-08 00:32:03','2021-12-08 00:32:03',4),
(28,'Samarinda','2021-12-08 00:32:03','2021-12-08 00:32:03',2),
(29,'Jambi','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(30,'Tidore Kepulauan','2021-12-08 00:32:03','2021-12-08 00:32:03',5),
(31,'Denpasar','2021-12-08 00:32:03','2021-12-08 00:32:03',5),
(32,'Cilegon','2021-12-08 00:32:03','2021-12-08 00:32:03',2),
(33,'Administrasi Jakarta Utara','2021-12-08 00:32:03','2021-12-08 00:32:03',2),
(34,'Surabaya','2021-12-08 00:32:03','2021-12-08 00:32:03',3),
(35,'Sungai Penuh','2021-12-08 00:32:03','2021-12-08 00:32:03',4),
(36,'Mataram','2021-12-08 00:32:03','2021-12-08 00:32:03',3),
(37,'Palangka Raya','2021-12-08 00:32:03','2021-12-08 00:32:03',2),
(38,'Ternate','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(39,'Kotamobagu','2021-12-08 00:32:03','2021-12-08 00:32:03',3),
(40,'Palopo','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(41,'Salatiga','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(42,'Bandung','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(43,'Lhokseumawe','2021-12-08 00:32:03','2021-12-08 00:32:03',3),
(44,'Cirebon','2021-12-08 00:32:03','2021-12-08 00:32:03',3),
(45,'Bandar Lampung','2021-12-08 00:32:03','2021-12-08 00:32:03',5),
(46,'Mojokerto','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(47,'Tangerang Selatan','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(48,'Sorong','2021-12-08 00:32:03','2021-12-08 00:32:03',4),
(49,'Binjai','2021-12-08 00:32:03','2021-12-08 00:32:03',5),
(50,'Padangpanjang','2021-12-08 00:32:03','2021-12-08 00:32:03',1);

/*Table structure for table `kota` */

DROP TABLE IF EXISTS `kota`;

CREATE TABLE `kota` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `FK_ID_PROVINSI` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kota_fk_id_provinsi_foreign` (`FK_ID_PROVINSI`),
  CONSTRAINT `kota_fk_id_provinsi_foreign` FOREIGN KEY (`FK_ID_PROVINSI`) REFERENCES `provinsi` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kota` */

insert  into `kota`(`id`,`nama_kota`,`created_at`,`updated_at`,`FK_ID_PROVINSI`) values 
(1,'Palu','2021-12-08 00:32:03','2021-12-08 00:32:03',3),
(2,'Bima','2021-12-08 00:32:03','2021-12-08 00:32:03',4),
(3,'Solok','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(4,'Administrasi Jakarta Timur','2021-12-08 00:32:03','2021-12-08 00:32:03',3),
(5,'Sawahlunto','2021-12-08 00:32:03','2021-12-08 00:32:03',5),
(6,'Prabumulih','2021-12-08 00:32:03','2021-12-08 00:32:03',2),
(7,'Banjar','2021-12-08 00:32:03','2021-12-08 00:32:03',2),
(8,'Subulussalam','2021-12-08 00:32:03','2021-12-08 00:32:03',4),
(9,'Padangsidempuan','2021-12-08 00:32:03','2021-12-08 00:32:03',2),
(10,'Bogor','2021-12-08 00:32:03','2021-12-08 00:32:03',2),
(11,'Tual','2021-12-08 00:32:03','2021-12-08 00:32:03',5),
(12,'Lubuklinggau','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(13,'Depok','2021-12-08 00:32:03','2021-12-08 00:32:03',4),
(14,'Magelang','2021-12-08 00:32:03','2021-12-08 00:32:03',3),
(15,'Pontianak','2021-12-08 00:32:03','2021-12-08 00:32:03',3),
(16,'Medan','2021-12-08 00:32:03','2021-12-08 00:32:03',4),
(17,'Payakumbuh','2021-12-08 00:32:03','2021-12-08 00:32:03',5),
(18,'Bau-Bau','2021-12-08 00:32:03','2021-12-08 00:32:03',4),
(19,'Langsa','2021-12-08 00:32:03','2021-12-08 00:32:03',3),
(20,'Bontang','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(21,'Sukabumi','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(22,'Gorontalo','2021-12-08 00:32:03','2021-12-08 00:32:03',5),
(23,'Ambon','2021-12-08 00:32:03','2021-12-08 00:32:03',2),
(24,'Tanjungbalai','2021-12-08 00:32:03','2021-12-08 00:32:03',1),
(25,'Pasuruan','2021-12-08 00:32:03','2021-12-08 00:32:03',3),
(26,'Bekasi','2021-12-08 00:32:03','2021-12-08 00:32:03',4),
(27,'Banjarbaru','2021-12-08 00:32:03','2021-12-08 00:32:03',2),
(28,'Cimahi','2021-12-08 00:32:03','2021-12-08 00:32:03',5),
(29,'Pekanbaru','2021-12-08 00:32:03','2021-12-08 00:32:03',3),
(30,'Sabang','2021-12-08 00:32:03','2021-12-08 00:32:03',3);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2021_09_29_042817_create_table_user',1),
(6,'2021_10_04_050809_create_provinsi',1),
(7,'2021_10_04_050920_create_kota',1),
(8,'2021_10_04_051141_create_kecamatan',1),
(9,'2021_10_04_053702_create_kategori_bencana',1),
(10,'2021_10_04_054301_create_bencana',1),
(11,'2021_10_04_060011_create_pelaporan',1),
(12,'2021_10_04_073323_create_detail_korban',1),
(13,'2021_10_04_075848_create_role',1),
(14,'2021_10_04_080451_create_user_role',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `pelaporan` */

DROP TABLE IF EXISTS `pelaporan`;

CREATE TABLE `pelaporan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `FK_Id_user` bigint(20) unsigned NOT NULL,
  `FK_Id_bencana` bigint(20) unsigned NOT NULL,
  `FK_Id_kecamatan` bigint(20) unsigned NOT NULL,
  `judul_laporan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_laporan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_bencana` date NOT NULL,
  `waktu_bencana` time NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pelaporan_fk_id_user_foreign` (`FK_Id_user`),
  KEY `pelaporan_fk_id_bencana_foreign` (`FK_Id_bencana`),
  KEY `pelaporan_fk_id_kecamatan_foreign` (`FK_Id_kecamatan`),
  CONSTRAINT `pelaporan_fk_id_bencana_foreign` FOREIGN KEY (`FK_Id_bencana`) REFERENCES `bencana` (`id_bencana`),
  CONSTRAINT `pelaporan_fk_id_kecamatan_foreign` FOREIGN KEY (`FK_Id_kecamatan`) REFERENCES `kecamatan` (`id`),
  CONSTRAINT `pelaporan_fk_id_user_foreign` FOREIGN KEY (`FK_Id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pelaporan` */

insert  into `pelaporan`(`id`,`FK_Id_user`,`FK_Id_bencana`,`FK_Id_kecamatan`,`judul_laporan`,`isi_laporan`,`tgl_bencana`,`waktu_bencana`,`status`,`created_at`,`updated_at`) values 
(1,46,9,39,'Ab nemo occaecati et.','Rem fugiat omnis praesentium accusamus. Consequatur ducimus consequatur ipsum. Ut molestiae doloribus placeat odio sit. Dolor quas et neque.','2013-05-02','10:27:52','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(2,44,4,29,'Ut omnis eveniet eius.','Occaecati quia nisi rerum officia. Eveniet facere quia minima aut aperiam. Quos alias reiciendis est totam enim at reiciendis. Laborum in sapiente sed vel autem.','1988-08-07','13:05:55','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(3,12,10,30,'Officiis aut maiores occaecati.','Laboriosam nam laboriosam inventore et nulla qui blanditiis. Aperiam vel incidunt voluptas sed ut. Adipisci voluptates non quam facilis ad inventore sed omnis. Qui atque ut sed cum qui.','1973-05-26','09:42:26','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(4,9,7,48,'Eveniet consequuntur rerum aut maiores.','Voluptate doloribus quia reprehenderit quis rem qui. Itaque aut quia adipisci beatae soluta voluptates. Placeat aut non doloribus id. Occaecati et numquam quam sed mollitia culpa.','1976-04-02','00:30:48','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(5,29,2,20,'Aut quas eaque impedit.','Aut fugit sint illo. Velit ut ut et veniam. Aut quis quibusdam totam id.','2005-06-19','16:24:51','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(6,10,1,22,'Sint molestiae est architecto similique.','Quis suscipit vel quasi minus iure id nesciunt. Labore natus omnis nihil exercitationem. Blanditiis optio dolorem et atque. Qui accusantium atque deserunt saepe consectetur.','2006-08-17','22:10:33','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(7,24,9,15,'In assumenda omnis quo.','Id quos est nam earum et. Sed omnis nihil occaecati vel et. Voluptas ad placeat qui qui dolorem deleniti fugit. Ipsam incidunt sit velit ipsam. Dignissimos velit consequuntur enim aut quod.','2002-08-29','20:21:48','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(8,7,4,30,'Alias sed vero ullam.','Hic iste animi voluptatem illo excepturi. Officia et quia omnis laborum quo quis aut. Quam illum voluptatem aut qui consequuntur.','1973-12-24','04:08:57','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(9,14,5,21,'Consequuntur quas nobis.','Ut quia et maiores deserunt. Nam iste aliquid dolorem sed est. Ut est eum dignissimos. Ipsa sed accusamus eos architecto. Ipsum dolorem dolores animi sequi error a iusto. Quia nostrum id ut et.','1987-03-07','01:29:27','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(10,2,9,14,'Tempore cum quas consequatur est.','Facilis sit rerum corrupti nemo aperiam omnis. Dolorum architecto fuga earum in. Laborum officia mollitia cum consequatur suscipit. Eos aliquam earum fugit natus.','1983-09-28','13:27:14','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(11,24,3,20,'Perferendis in numquam.','Amet voluptate quia aspernatur esse doloribus officia. Quidem recusandae aut saepe provident. Quis iure voluptate optio voluptas. Et est occaecati voluptatem veniam esse.','1977-12-10','13:13:56','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(12,47,4,45,'Animi aut.','Alias animi ut unde quis. Eius debitis laboriosam magnam placeat. Illum voluptas id et dicta aspernatur provident. Quia nihil autem expedita aut exercitationem. Ea ipsa exercitationem eos et.','1991-05-16','01:56:36','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(13,38,9,40,'Eos assumenda.','Qui laudantium quia in voluptates voluptatem aut id. Dolor sint omnis ipsum veritatis. Deserunt debitis fugit pariatur quisquam ut. Iste laboriosam quia eligendi.','2015-06-30','13:42:24','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(14,7,5,36,'Officia quo quod dolor.','Fugit voluptas autem distinctio impedit iure. Et et qui vel eius autem. Sint sit minus harum tempore rerum tenetur.','2004-02-23','01:38:12','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(15,24,4,34,'Eos eum odit.','Consequatur unde quam dicta aut. Incidunt occaecati est ullam. Omnis qui libero aspernatur amet et minima. Placeat corrupti consequatur earum distinctio quia nihil.','2014-09-27','21:38:08','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(16,33,7,14,'Ratione illo et ut.','Repellendus non dolor quibusdam impedit laboriosam et est. Sequi iusto neque quo eaque itaque ea quaerat at. Fugiat sint rem qui sunt ab rem. Et doloremque ut omnis non.','1986-05-01','23:34:43','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(17,24,2,37,'Ullam rem repellat.','Dolore tenetur inventore quia. Et libero accusantium dolorum enim esse in excepturi. Nisi dolorum eum veniam repellat est veniam.','2002-02-11','13:54:11','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(18,23,4,40,'Reprehenderit nesciunt aut.','Voluptatem aut commodi dolores voluptas. Velit tempore eum accusamus est atque. Officia quo inventore velit molestias itaque vero qui.','1981-07-25','17:04:31','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(19,29,4,34,'Eveniet aperiam voluptatibus perferendis.','In facilis ut consequatur et. Et et sequi veritatis. Odit eius quis blanditiis molestiae ut. Facilis dolorum autem eius officiis.','1973-06-23','12:37:12','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(20,16,5,21,'In eius cum fugiat.','Sit expedita commodi et maxime nulla odit. Consequatur esse temporibus quod sed quod fuga molestias rem. Possimus voluptatum nemo labore in. Distinctio dignissimos est omnis unde quaerat illum sunt.','1977-05-03','13:32:25','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(21,10,2,20,'Amet vel quos ut.','Est ipsum aspernatur itaque veniam labore maxime nam id. Quia vel eum voluptate magnam labore vero itaque accusamus. Ducimus iure debitis non voluptatum nostrum laborum saepe.','1995-11-08','11:11:39','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(22,50,7,40,'Et porro veniam aperiam.','Neque rerum hic sed veniam. Voluptatibus quia totam repellat iusto in. Quibusdam tenetur voluptatem sint corrupti.','1977-04-23','14:55:32','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(23,37,3,39,'Odit soluta.','Dolorem itaque optio dolor aliquam. Quos iste eveniet nisi et debitis nobis quisquam. Perspiciatis vero quia odit sequi maiores voluptates optio provident. Et possimus veniam aut beatae aut.','1998-01-20','19:51:30','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(24,33,1,30,'Quis quod vero et.','Suscipit laborum nihil praesentium. Quia dolor laboriosam ducimus dicta voluptates quia nihil. Ut est eligendi repellendus est.','1970-01-26','11:52:55','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(25,5,10,27,'Tempora maxime esse ducimus.','Velit repellendus possimus dicta corrupti et nam quae. Sed magnam dicta esse non necessitatibus. Possimus ex eum aspernatur qui. Minima eaque ipsam exercitationem voluptatem autem.','1975-12-07','01:34:27','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(26,31,8,24,'Illum reprehenderit corrupti porro.','Rerum aperiam dolorem vel magni in. Ut vel expedita non et deleniti. Eligendi est aspernatur ea voluptatibus dolor. Consequatur blanditiis et voluptatem cum ad.','1980-05-09','07:25:43','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(27,4,1,22,'Consectetur maiores alias sit.','Cum cumque reiciendis velit quo. Commodi est fuga sint at ea et. Ipsa dolores nulla modi sequi non adipisci aperiam. Rerum similique in officiis. Totam tenetur possimus eligendi suscipit aperiam.','1977-12-15','02:08:12','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(28,29,3,13,'Ut dignissimos repudiandae.','Iste iusto quo debitis explicabo. Aut sed corrupti voluptatem illum. Et laboriosam ut iusto aut praesentium labore molestiae.','1995-05-19','21:51:05','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(29,31,5,14,'Quis voluptatem iure.','Molestiae est sed ab impedit perferendis eius provident. Ratione nobis quae maxime qui omnis et. Est perferendis excepturi quia molestias voluptate. Optio sapiente facilis rerum qui.','1986-05-30','22:30:20','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(30,37,3,38,'Qui doloremque sint.','Sed illo corrupti quisquam recusandae. Perferendis ut et necessitatibus et aliquam animi. Nam rerum laborum autem est impedit qui ut. Unde necessitatibus aut dicta natus.','1978-12-13','15:46:27','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(31,13,10,17,'Nulla ut assumenda at.','Ut laudantium aut voluptas accusamus. Quia totam qui voluptatibus rem et ipsum. Ratione vel accusamus et illo praesentium est. Fugit aut ullam voluptates ducimus pariatur est consequatur nemo.','1997-05-24','23:49:09','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(32,27,9,28,'Minus qui excepturi perspiciatis qui.','Distinctio quos sint voluptatem fugiat eos ut consequatur. Tempora expedita mollitia illum facilis quas fuga. Nulla cum rerum magnam iste quidem impedit architecto.','2012-10-25','15:00:46','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(33,41,6,28,'Quam facere modi id nemo.','Incidunt earum dolores ut non. Non aut est sequi ratione. Voluptas quod ut dolor quidem perspiciatis. Sit quisquam quia soluta sit placeat ut velit.','2014-10-26','23:43:17','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(34,34,6,46,'Dolore in porro.','Reprehenderit aperiam consequatur earum voluptas. Sequi qui in deleniti rem aut labore. Blanditiis neque libero eum quia autem dolorem. Omnis et veniam quo.','1981-06-30','10:59:27','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(35,27,7,12,'Quae eligendi dolor aperiam.','Aut nesciunt et ut iure. Porro eos iure ipsa vel. Quidem quod laudantium magnam. Quae voluptas sint consequatur soluta voluptas occaecati veniam.','1983-10-13','06:30:16','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(36,46,6,12,'Tenetur doloremque vitae.','Praesentium sequi velit voluptatibus velit perferendis et. Dolorum molestiae corrupti nihil ratione. Iusto ut sequi minima voluptas laborum natus.','1998-04-08','21:36:52','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(37,9,10,37,'Ipsam id eos ipsam deserunt.','Ex voluptatem ipsam sed possimus cum blanditiis sint. Est molestiae voluptate deleniti reiciendis sint vero adipisci illo. Est qui culpa cupiditate eos perspiciatis quam nemo.','1970-10-21','01:44:30','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(38,27,2,39,'Perspiciatis magni labore deleniti.','Alias ut culpa voluptas fuga ut. Quasi ducimus et quas quas nihil sunt ut. Cupiditate eaque quasi illum tempora sed ut nihil vel. Non sed soluta natus sed. Asperiores vero qui fugit dolorum libero.','1980-10-17','19:12:39','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(39,40,10,44,'Sint dolorem accusamus.','Temporibus rem enim officia repudiandae neque ipsa est nulla. Reiciendis ullam omnis quia veniam tempore vel. Et dolor est nihil. Odit sit sunt non aut officiis fuga eveniet.','1970-08-17','04:15:07','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(40,11,6,23,'Praesentium facilis aut.','Suscipit aperiam cupiditate natus et et. Aut ut repellendus unde voluptates amet. Quia sint commodi nihil.','2012-01-29','10:49:42','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(41,26,6,27,'Qui ea quaerat.','Nihil iste enim alias repellendus rerum ea eos. Et nemo dolor alias non illo sunt. Dolor id est dolorem dolor et accusantium et eos. Qui eum soluta doloribus in velit.','1973-01-22','22:06:23','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(42,44,1,33,'Consequuntur atque ut est labore.','Dolorem cumque id nemo sunt. Quaerat consequatur ullam voluptatum dolorem ullam saepe placeat cupiditate. Porro autem eius rerum ad perferendis id nulla.','1996-11-15','17:07:46','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(43,33,10,31,'Non omnis aut.','Enim ipsum et placeat nihil aliquam. Ipsa enim culpa itaque et. Ut et quia asperiores laboriosam corporis. Maiores dolor et quibusdam esse voluptatibus et nemo ex.','1986-01-24','13:35:17','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(44,2,1,6,'Culpa et commodi quo.','Reiciendis est vero pariatur illum qui. Iure ipsam perferendis officiis aut quos aut. Explicabo enim ducimus dolores. Veritatis quas et quia cupiditate molestias quae.','1971-01-18','19:41:10','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(45,17,1,48,'Enim aut deserunt sunt.','Non non dolorem reiciendis facilis consequatur. Minus tempore odit est sunt non dolor. Incidunt cum facere voluptas enim itaque. Ex aut consectetur aut. Repudiandae eius fugit sapiente aspernatur.','1999-11-14','15:47:56','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(46,13,9,24,'Explicabo molestiae.','Libero nihil est sit eum. Impedit repellendus voluptate cumque id et doloribus fugit. Minus et non ut explicabo dolores laborum voluptates. Est veniam architecto error minus aliquid inventore illum.','1971-05-08','22:46:34','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(47,39,5,36,'Minus mollitia mollitia voluptate.','Neque repellat repellat itaque natus et qui possimus distinctio. Aut aspernatur maxime magnam maiores aut. Dolorum impedit et ut occaecati qui perferendis quis.','1994-06-03','21:25:20','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(48,19,3,28,'Voluptatem et praesentium.','Et rerum tempora rem. Cumque deserunt consequatur et rerum accusamus maiores. Voluptatem velit atque aut illum ipsum nihil et. Sequi quo eius est voluptas beatae est.','1990-02-18','06:16:59','0','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(49,38,4,34,'Repudiandae et quidem voluptatum.','Repellendus sunt quisquam vel mollitia est incidunt. Ipsum dolorem quidem occaecati quia sit. Voluptatem sunt repellat eligendi dolor labore voluptatem.','1994-06-12','17:27:11','1','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(50,48,10,8,'Consequatur in voluptas.','Quia et nisi et repudiandae alias aliquam laudantium libero. Dignissimos est incidunt veniam quis qui ab. Pariatur dolor et voluptatem.','2007-11-03','12:09:34','0','2021-12-08 00:32:03','2021-12-08 00:32:03');

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `provinsi` */

DROP TABLE IF EXISTS `provinsi`;

CREATE TABLE `provinsi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `provinsi` */

insert  into `provinsi`(`id`,`nama_provinsi`,`created_at`,`updated_at`) values 
(1,'Sulawesi Tenggara','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(2,'Jambi','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(3,'Kalimantan Timur','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(4,'Kalimantan Utara','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(5,'Nusa Tenggara Barat','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(6,'Kalimantan Barat','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(7,'Aceh','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(8,'Gorontalo','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(9,'Sumatera Barat','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(10,'Sulawesi Utara','2021-12-08 00:32:03','2021-12-08 00:32:03');

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `id_role` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role` */

insert  into `role`(`id_role`,`Role`,`created_at`,`updated_at`) values 
(1,'velit','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(2,'nulla','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(3,'omnis','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(4,'facilis','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(5,'accusantium','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(6,'quis','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(7,'ratione','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(8,'quia','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(9,'atque','2021-12-08 00:32:03','2021-12-08 00:32:03'),
(10,'sapiente','2021-12-08 00:32:03','2021-12-08 00:32:03');

/*Table structure for table `table_user` */

DROP TABLE IF EXISTS `table_user`;

CREATE TABLE `table_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `table_user` */

/*Table structure for table `user_role` */

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `id_user_role` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `FK_Id_User` bigint(20) unsigned NOT NULL,
  `FK_Id_role` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_user_role`),
  KEY `user_role_fk_id_user_foreign` (`FK_Id_User`),
  KEY `user_role_fk_id_role_foreign` (`FK_Id_role`),
  CONSTRAINT `user_role_fk_id_role_foreign` FOREIGN KEY (`FK_Id_role`) REFERENCES `role` (`id_role`),
  CONSTRAINT `user_role_fk_id_user_foreign` FOREIGN KEY (`FK_Id_User`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `user_role` */

insert  into `user_role`(`id_user_role`,`FK_Id_User`,`FK_Id_role`,`created_at`,`updated_at`) values 
(1,4,4,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(2,3,4,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(3,3,1,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(4,5,2,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(5,5,2,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(6,3,2,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(7,1,3,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(8,3,1,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(9,3,2,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(10,4,2,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(11,5,1,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(12,5,5,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(13,3,5,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(14,5,1,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(15,2,2,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(16,1,3,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(17,3,2,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(18,1,1,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(19,4,2,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(20,4,1,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(21,4,2,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(22,5,3,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(23,3,3,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(24,4,3,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(25,3,1,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(26,4,4,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(27,1,2,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(28,4,4,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(29,5,4,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(30,5,5,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(31,2,2,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(32,3,5,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(33,1,1,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(34,4,5,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(35,5,5,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(36,2,4,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(37,1,1,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(38,4,1,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(39,2,4,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(40,5,2,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(41,3,1,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(42,2,1,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(43,2,2,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(44,5,1,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(45,4,2,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(46,5,2,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(47,4,2,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(48,5,2,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(49,2,1,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(50,3,5,'2021-12-08 00:32:03','2021-12-08 00:32:03');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`nama_user`,`email`,`tgl_lahir`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Silvia Pudjiastuti S.Psi','saefullah.siska@example.com','2021-12-08','|U)b}4<d$F@=fn$vY2xn',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(2,'Devi Handayani','pdamanik@example.com','2021-12-08',']~Vo-7s@nhlJ4l6qE.Ue',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(3,'Tira Puspita','daryani.hidayanto@example.com','2021-12-08','30ha@romB{OvpE4?}x$F',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(4,'Lidya Lailasari','laras.mandasari@example.com','2021-12-08','TTjDU~Lx:mv-oJu|bi&X',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(5,'Karna Sihombing','qnarpati@example.net','2021-12-08',';++2\'F#z-)U2P$ov\"kZn',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(6,'Jayeng Budiman','palastri.viktor@example.com','2021-12-08','t=M3MMpOM24$ZLg*W5Lm',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(7,'Puspa Farhunnisa Mulyani','plailasari@example.org','2021-12-08','SAq\"?m!@9F&dU\\b%zmqp',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(8,'Kayun Mangunsong','nasyiah.imam@example.com','2021-12-08','b7BQEoR]DyEl6Hn5B+G}',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(9,'Opan Dabukke','amelia.sudiati@example.com','2021-12-08','_X%z8#JE9-i59~w84mb|',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(10,'Mustika Akarsana Ramadan','wacana.gatot@example.org','2021-12-08','7`-p9nWFx_GgKa>6g>`/',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(11,'Caraka Hidayat','usada.hasta@example.com','2021-12-08',')\'T*qrjDs>0@{<D\\_d\\q',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(12,'Rachel Pudjiastuti','iswahyudi.jumadi@example.com','2021-12-08','Re8(#3B;oL\'0t&\'5vBzJ',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(13,'Amelia Elma Permata S.Psi','kprasetya@example.com','2021-12-08','#%r\'g~_0wr4Ki5+Rs`\\*',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(14,'Darmaji Samosir S.T.','setya31@example.com','2021-12-08','_Fj)^DHi4rg#g`1UIg@a',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(15,'Putri Vera Hasanah','mpurwanti@example.org','2021-12-08','aJx3d3pQ={Hiu`g5EkD5',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(16,'Julia Farida','gsudiati@example.net','2021-12-08','cK?C0d)A&w&8,*i.`+|\"',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(17,'Prayitna Kurnia Simbolon','lwijaya@example.org','2021-12-08','I6[yX#<3-iZo_,5`6hoE',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(18,'Diah Padmasari S.E.I','qwastuti@example.net','2021-12-08','Bg9h{\"`}R=Cr=$cQ./N2',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(19,'Bajragin Sitompul','yani35@example.com','2021-12-08','Wa.dV!(;1JD<Dvs,*hn4',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(20,'Atma Nababan','saefullah.jati@example.net','2021-12-08','|U9HlNbKVyqdl]y;~GDF',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(21,'Eluh Maulana M.M.','jaya.laksmiwati@example.org','2021-12-08','Y#JIdCy1%KAs4ckMuTPt',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(22,'Chelsea Rahimah','yhandayani@example.com','2021-12-08','rbfSL#WaaJQL?4W&/(;g',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(23,'Rachel Astuti','zwahyuni@example.org','2021-12-08','m^Gj$=lFQ%C5]Df{1Er_',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(24,'Pia Oktaviani','shania07@example.net','2021-12-08','oNIZ$=O7W2g0u>5$WMx&',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(25,'Samiah Farida','iiswahyudi@example.org','2021-12-08','W\'<p%v;(6o!/\\vU!O\"uS',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(26,'Maryadi Pratama','hharyanto@example.org','2021-12-08','6(aZw=k{b0wo?We#n\"Y=',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(27,'Harsanto Pangestu','znuraini@example.org','2021-12-08',':4i8^&+)upF@o)}q2`Em',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(28,'Yuliana Wijayanti S.Pd','gabriella52@example.org','2021-12-08','d~rj;/HR%z{\"m)C4kp8t',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(29,'Hamzah Sitompul M.M.','zsudiati@example.com','2021-12-08','%\"`jE!2yr-z)$KFA4E\'#',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(30,'Edward Mahendra','diana.simanjuntak@example.net','2021-12-08','/A\\@dnxjSakv)H={7BeA',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(31,'Jessica Kuswandari','lwinarno@example.com','2021-12-08','6L3\\Uw+P,9W=G:1plM/Y',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(32,'Syahrini Ulva Riyanti M.M.','drajat.hastuti@example.org','2021-12-08','|,cADF$-7g.f6pl@afW^',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(33,'Labuh Prayoga','muni12@example.org','2021-12-08','z+T*~n.fb?n=t<<[BlYN',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(34,'Natalia Susanti','ysitorus@example.net','2021-12-08','W%P<ym2x@X4\"!~4j2s|q',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(35,'Margana Ajimin Winarno S.E.I','widodo.ibrahim@example.org','2021-12-08','`_EFS,D_Nm59#qQmZNpv',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(36,'Zahra Ratna Yuniar','pnasyiah@example.org','2021-12-08','rr5vJh5\\[%fFcq~2G:Yy',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(37,'Gading Drajat Prayoga S.E.I','salimah.uyainah@example.net','2021-12-08','TZQ[b1;bFRZgGJ.JuKso',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(38,'Utama Maheswara S.IP','safina61@example.net','2021-12-08','?$(U:\\aWwpUK[foAt-vA',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(39,'Yahya Zulkarnain','pandu33@example.net','2021-12-08','=P#1PWm5i$4r~RCuz1GA',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(40,'Lintang Lailasari','hardi03@example.org','2021-12-08','CKC7[\'QV9]q{*?30igVE',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(41,'Gina Astuti','amalia37@example.org','2021-12-08','}lB]Dj*Mg$T=|ra4-GHB',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(42,'Clara Haryanti','dian44@example.org','2021-12-08','T%V2-}LjENmTX0^)jHf1',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(43,'Wulan Hesti Halimah','daliman38@example.com','2021-12-08','T5Pvl{Bxte99Acfm_lfH',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(44,'Nadia Lestari','ajeng90@example.org','2021-12-08','qLe)Ft5j|%-XNn?@M2\'t',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(45,'Kania Anggraini','prasetya.firmansyah@example.org','2021-12-08',':??Y~0}|/|RQcXG)%K7B',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(46,'Edi Suwarno','nurul82@example.net','2021-12-08','d=!wXHXR$p[FD$p?RUX]',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(47,'Patricia Novitasari S.Pd','dhartati@example.com','2021-12-08','W[F4Ej@T9A*w:7umU6~?',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(48,'Oni Susanti','emong89@example.org','2021-12-08','>uO<af:|(|3{p^iLQhy&',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(49,'Bakijan Umar Marbun S.H.','gpurnawati@example.com','2021-12-08','E~Z.q\":&Vpreb\"K<mG\'E',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(50,'Niyaga Maulana','arta28@example.net','2021-12-08','LV$ikH?TNCW5aCgo!*4~',NULL,'2021-12-08 00:32:03','2021-12-08 00:32:03'),
(51,'Bintang Achmad','achmadbintang45@gmail.com','1222-12-11','$2y$10$DoiNXayKZF.cWBkQQPav6.yCn6fgQPMUTtDBoabMuDpTMkSmh3hBi',NULL,'2021-12-08 00:35:38','2021-12-08 00:35:38');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
