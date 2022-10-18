/*
SQLyog Ultimate v8.55 
MySQL - 5.1.49-community : Database - dbsultanagung
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbsultanagung` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dbsultanagung`;

/*Table structure for table `ahp` */

DROP TABLE IF EXISTS `ahp`;

CREATE TABLE `ahp` (
  `c1c2` int(1) DEFAULT NULL,
  `c1c3` int(1) DEFAULT NULL,
  `c1c4` int(1) DEFAULT NULL,
  `c2c3` int(1) DEFAULT NULL,
  `c2c4` int(1) DEFAULT NULL,
  `c3c4` int(1) DEFAULT NULL,
  `bobotc1` decimal(10,2) DEFAULT NULL,
  `bobotc2` decimal(10,2) DEFAULT NULL,
  `bobotc3` decimal(10,2) DEFAULT NULL,
  `bobotc4` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ahp` */

insert  into `ahp`(`c1c2`,`c1c3`,`c1c4`,`c2c3`,`c2c4`,`c3c4`,`bobotc1`,`bobotc2`,`bobotc3`,`bobotc4`) values (1,2,2,2,3,5,'0.34','0.29','0.21','0.17');

/*Table structure for table `bulan` */

DROP TABLE IF EXISTS `bulan`;

CREATE TABLE `bulan` (
  `idbulan` int(2) NOT NULL AUTO_INCREMENT,
  `nmbulan` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idbulan`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `bulan` */

insert  into `bulan`(`idbulan`,`nmbulan`) values (1,'Januari'),(2,'Pebruari'),(3,'Maret'),(4,'April'),(5,'Mei'),(6,'Juni'),(7,'Juli'),(8,'Agustus'),(9,'September'),(10,'Oktober'),(11,'Nopember'),(12,'Desember');

/*Table structure for table `nilai` */

DROP TABLE IF EXISTS `nilai`;

CREATE TABLE `nilai` (
  `kdsantri` varchar(8) NOT NULL DEFAULT '',
  `tahun` year(4) NOT NULL DEFAULT '0000',
  `c1` int(3) DEFAULT NULL,
  `c2` int(3) DEFAULT NULL,
  `c3` int(3) DEFAULT NULL,
  `c4` int(3) DEFAULT NULL,
  `nilc1` decimal(10,3) DEFAULT NULL,
  `nilc2` decimal(10,3) DEFAULT NULL,
  `nilc3` decimal(10,3) DEFAULT NULL,
  `nilc4` decimal(10,4) DEFAULT NULL,
  PRIMARY KEY (`kdsantri`,`tahun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `nilai` */

insert  into `nilai`(`kdsantri`,`tahun`,`c1`,`c2`,`c3`,`c4`,`nilc1`,`nilc2`,`nilc3`,`nilc4`) values ('94156655',2022,80,80,90,80,'27.200','23.200','18.900','13.6000'),('94170171',2022,80,90,80,90,'27.200','26.100','16.800','15.3000'),('94170332',2022,80,85,90,100,'27.200','24.650','18.900','17.0000'),('95150140',2022,85,96,95,80,'28.900','27.840','19.950','13.6000'),('95157887',2022,90,80,90,85,'30.600','23.200','18.900','14.4500');

/*Table structure for table `pengguna` */

DROP TABLE IF EXISTS `pengguna`;

CREATE TABLE `pengguna` (
  `username` varchar(30) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `pengguna` */

insert  into `pengguna`(`username`,`nama`,`pass`) values ('admin','Ahmad Mustofa Zakariya','123');

/*Table structure for table `santri` */

DROP TABLE IF EXISTS `santri`;

CREATE TABLE `santri` (
  `kdsantri` varchar(8) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`kdsantri`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `santri` */

insert  into `santri`(`kdsantri`,`nama`,`alamat`,`telepon`) values ('94156655','MUHAMMAD SHOLIKHUL HADI','Krajan Utara RT 001 RW 005 Kel','085228121952'),('94170171','YUDIYANTO','Bogosari RT 003/RW 005, Kec. P','085226418847'),('94170332','NOVAN ARDHIANSYAH','Karangmalang RT 001/RW 002, Ke','082146506206'),('95150140','ROIS ALESKAN','Jl. Medoho Cempaka RT 06/RW 04','082135828917'),('95157887','WAHYU SEPTIAWAN','JL.Gayam Sari V dalam RT.04/XI','082132161212');

/*Table structure for table `seleksi` */

DROP TABLE IF EXISTS `seleksi`;

CREATE TABLE `seleksi` (
  `kdsantri` varchar(8) NOT NULL DEFAULT '',
  `tahun` year(4) NOT NULL DEFAULT '0000',
  `idbulan` int(2) NOT NULL,
  `c1` int(3) DEFAULT NULL,
  `c2` int(3) DEFAULT NULL,
  `c3` int(3) DEFAULT NULL,
  `c4` int(3) DEFAULT NULL,
  PRIMARY KEY (`kdsantri`,`tahun`,`idbulan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `seleksi` */

insert  into `seleksi`(`kdsantri`,`tahun`,`idbulan`,`c1`,`c2`,`c3`,`c4`) values ('94156655',2022,1,80,80,90,80),('94170171',2022,1,80,90,80,90),('94170332',2022,1,80,85,90,100),('95150140',2022,1,85,96,95,80),('95157887',2022,1,90,80,90,85);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
