/*
SQLyog Enterprise - MySQL GUI v7.15 
MySQL - 5.5.32 : Database - clgloginn
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`clgloginn` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `clgloginn`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `username` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `passcode` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`username`,`password`,`passcode`) values ('adm','mcamca','7207');

/*Table structure for table `book` */

DROP TABLE IF EXISTS `book`;

CREATE TABLE `book` (
  `HallName` tinytext NOT NULL,
  `FunctionName` text NOT NULL,
  `BookingDate` varchar(15) NOT NULL,
  `UserName` tinytext NOT NULL,
  `Uniqueid` decimal(10,0) NOT NULL,
  `principalstatus` tinytext NOT NULL,
  `placementstatus` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `book` */

/*Table structure for table `clghall` */

DROP TABLE IF EXISTS `clghall`;

CREATE TABLE `clghall` (
  `Hallno` decimal(5,0) DEFAULT NULL,
  `HallName` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `clghall` */

insert  into `clghall`(`Hallno`,`HallName`) values ('1','PG SeminarHall'),('2','Conference Hall'),('3','Auditorium'),('4','New PG Seminar Hall'),(NULL,'hcet');

/*Table structure for table `fn` */

DROP TABLE IF EXISTS `fn`;

CREATE TABLE `fn` (
  `function` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `fn` */

insert  into `fn`(`function`) values ('Symposium'),('Workshop'),('Conference'),('Faculty Development Program'),('Student Development Program'),('Recruitment'),('Placement Training'),('Others');

/*Table structure for table `log` */

DROP TABLE IF EXISTS `log`;

CREATE TABLE `log` (
  `username` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `passcode` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `log` */

insert  into `log`(`username`,`password`,`passcode`) values ('BE(Aero)','engii','11'),('BE(CSE)','ercomputer','12'),('BE(ECE)','erelectricals','13'),('\r\nBE(Mech)','ermechanicals','14'),('B.Tech','technology','15'),('\r\nBE(Automoblie)','erautomobiles','16'),('ME(Embeded System)','mrembededs','17'),('MBA','buisness','18'),('ME(CSE)','mca','20'),('MCA','application','7207');

/*Table structure for table `logd` */

DROP TABLE IF EXISTS `logd`;

CREATE TABLE `logd` (
  `username` tinytext NOT NULL,
  `logintime` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `logd` */

/*Table structure for table `plc` */

DROP TABLE IF EXISTS `plc`;

CREATE TABLE `plc` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `passcode` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `plc` */

insert  into `plc`(`username`,`password`,`passcode`) values ('place','hindu','11127');

/*Table structure for table `pri` */

DROP TABLE IF EXISTS `pri`;

CREATE TABLE `pri` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `passcode` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pri` */

insert  into `pri`(`username`,`password`,`passcode`) values ('prin','hcet','20');

/*Table structure for table `stat` */

DROP TABLE IF EXISTS `stat`;

CREATE TABLE `stat` (
  `status` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `stat` */

insert  into `stat`(`status`) values ('Approved'),('Cancelled');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
