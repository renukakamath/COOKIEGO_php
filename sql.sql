/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.7.9 : Database - cookiego
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cookiego` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `cookiego`;

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`category_id`,`category`) values 
(1,'goods');

/*Table structure for table `cooling_class` */

DROP TABLE IF EXISTS `cooling_class`;

CREATE TABLE `cooling_class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `host_id` int(11) DEFAULT NULL,
  `file` varchar(1000) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `cooling_class` */

insert  into `cooling_class`(`class_id`,`host_id`,`file`,`date`) values 
(1,1,'img/image_64dcb718a77e6.mp3','2023-08-16'),
(2,1,'img/image_64dcb7f7e50ff.mp4','2023-08-16');

/*Table structure for table `event` */

DROP TABLE IF EXISTS `event`;

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event` varchar(100) DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `eventdate` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `event` */

insert  into `event`(`event_id`,`event`,`details`,`eventdate`,`date`) values 
(3,'users','staffs','7899-06-07','2023-08-16'),
(4,'gffhg','jhghj','7899-06-07','7899-06-07'),
(5,'kjfhdsk','fguyiuy','7849-06-07','3499-06-07'),
(6,'hsrri','hjfhe','7899-06-07','7899-06-07');

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `feeback_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `feedback` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`feeback_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

insert  into `feedback`(`feeback_id`,`user_id`,`feedback`,`date`,`type`) values 
(1,1,'good','2023-08-16','host'),
(2,4,'user','2023-08-17','user'),
(3,4,'huj','2023-08-17','host'),
(4,10,'user1','2023-08-17','guest'),
(5,2,'khkj','2023-08-17','host'),
(6,10,'hai','2023-08-17','user'),
(7,0,'good','2023-08-17','guest');

/*Table structure for table `host` */

DROP TABLE IF EXISTS `host`;

CREATE TABLE `host` (
  `host_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `hostname` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`host_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `host` */

insert  into `host`(`host_id`,`login_id`,`hostname`,`place`,`phone`,`email`) values 
(1,2,'students','kochis','2345678901','students@gmail.com'),
(4,8,'user','645456','5656564646','student@gmail.com');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `user_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`username`,`password`,`user_type`) values 
(1,'admin','admin','admin'),
(2,'host','host','host'),
(4,'user','user','user'),
(8,'shop','officer','host'),
(10,'hai','hai','user');

/*Table structure for table `participate` */

DROP TABLE IF EXISTS `participate`;

CREATE TABLE `participate` (
  `participate_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) DEFAULT NULL,
  `participate_for_id` int(11) DEFAULT NULL,
  `participate_type` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`participate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `participate` */

insert  into `participate`(`participate_id`,`event_id`,`participate_for_id`,`participate_type`,`date`,`status`) values 
(1,3,0,'guest','2023-08-17','participate');

/*Table structure for table `rating` */

DROP TABLE IF EXISTS `rating`;

CREATE TABLE `rating` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `recepie_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `rate` varchar(100) DEFAULT NULL,
  `review` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`rating_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `rating` */

insert  into `rating`(`rating_id`,`recepie_id`,`user_id`,`rate`,`review`,`date`) values 
(1,2,4,'4','ok','2023-08-17'),
(2,2,4,'4','ok','2023-08-17');

/*Table structure for table `recepie` */

DROP TABLE IF EXISTS `recepie`;

CREATE TABLE `recepie` (
  `recepie_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `recepie` varchar(100) DEFAULT NULL,
  `incredienets` varchar(100) DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`recepie_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `recepie` */

insert  into `recepie`(`recepie_id`,`user_id`,`recepie`,`incredienets`,`details`,`image`) values 
(1,2,'users','nkfhesks','hfgfdgs','img/image_64dcb03061bff.jpg'),
(2,4,'user1','500','3','img/image_64dd9a72bd906.jpg'),
(3,10,'staff','5000','76876','img/image_64ddbe6fde42a.jpg');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`user_id`,`login_id`,`fname`,`lname`,`place`,`phone`,`email`) values 
(1,4,'users','qwertys','ernakaulams','2345678900','students@gmail.com'),
(4,10,'user','qwerty','kerala','02345678907','student@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
