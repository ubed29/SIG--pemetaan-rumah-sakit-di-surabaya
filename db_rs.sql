/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - db_rs
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_rs` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_rs`;

/*Table structure for table `tbl_rs` */

DROP TABLE IF EXISTS `tbl_rs`;

CREATE TABLE `tbl_rs` (
  `id` varchar(255) NOT NULL,
  `nama_rs` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_rs` */

insert  into `tbl_rs`(`id`,`nama_rs`,`kecamatan`,`latitude`,`longitude`) values 
('1','Rumah Sakit Islam Surabaya','Wonokromo','-7.306183','112.734932'),
('2','RS Marinir Gunung Sari','Dukuh Pakis','-7.303884','112.708464'),
('3','RS Mitra Keluarga','Sukomanunggal','-7.266699','112.691254'),
('4','RSUD Dr. Sutomo','Gubeng','-7.267703','112.758456'),
('5','Rumah Sakit Lanu Surabaya','Wonokromo','-7.291354','112.740951'),
('6','Rumah Sakit Husada Utama','Tambaksari','-7.264842','112.756226'),
('7','RS Adi Husada Kapasari','Simokerto','-7.242698','112.752013'),
('8','RS Darmo','Tegalsari','-7.287463','112.738965'),
('9','Rumah Sakit Adi Husada Undaan Wetan','Genteng','-7.251584','112.745870'),
('10','RS William Booth','Wonokromo','-7.291080','112.737136'),
('11','RS Katolik St Vincentius A Paulo','Wonokromo','-7.292396','112.735100'),
('12','Rumah Sakit Surabaya Internasional','Sukolilo','-7.304471','112.765249'),
('13','RSU Haji','Sukolilo','-7.283846','112.779869'),
('14','RS Gotong Royong','Sukolilo','-7.292184','112.764778'),
('15','RS Siloam Gleneagles','Gubeng','-7.273998','112.746440'),
('16','RSUD Muh. Soewandi','Simokerto','-7.245894','112.758008'),
('17','RSB St Melania','Tambaksari','-7.254190','112.754473'),
('18','RSB Pura Raharja','Gubeng','-7.283007','112.752930'),
('19','RS Putri','Sukolilo','-7.290899','112.782677'),
('20','RSJ Menur','Gubeng','-7.286142','112.761746'),
('21','RSA & B Siti Aisyah','Tambaksari','-7.259151','112.756608'),
('22','RSB Adi Guna','Tambaksari','-7.249097','112.764756'),
('23','Rumah Sakit AL Pal','Pabean Cantian','-7.228001','112.740432'),
('24','RSAL Tanjung Perak','Pabean Cantian','-7.212101','112.724500'),
('25','RS Muhammadiyah','Pabean Cantian','-7.229876','112.741191'),
('26','Rumah Sakit Bhayangkara','Gayungan','-7.324643','112.731253'),
('27','RSAD','Wonokromo','-7.297115','112.723273'),
('28','RSAL. Dr. Ramelan','Wonokromo','-7.308109','112.736606'),
('29','RS Bhakti Rahayu','Gayungan','-7.311791','112.722960'),
('31','Rumah Sakit Islam Surabaya','Jemursari','-7.322676','112.739887'),
('32','RS Mata Undaan','Genteng','-7.254394','112.743789'),
('30','Rumah Sakit Universitas Airlangga (RS UNAIR)','Mulyorejo','-7.269816','112.784841');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
