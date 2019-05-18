/*
SQLyog Community v10.51 
MySQL - 5.5.5-10.1.36-MariaDB : Database - programmer
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`programmer` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `programmer`;

/*Table structure for table `skills` */

DROP TABLE IF EXISTS `skills`;

CREATE TABLE `skills` (
  `user_id` INT(11) NOT NULL AUTO_INCREMENT,
  `skill` VARCHAR(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=INNODB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `skills` */

INSERT  INTO `skills`(`user_id`,`skill`) VALUES (1,'html,css,php,javascript'),(2,'php'),(3,'python'),(4,'html'),(5,''),(6,'php');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `uid` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=INNODB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

INSERT  INTO `users`(`uid`,`name`) VALUES (1,'Septian Feri Ferdinan'),(2,'user'),(3,'user baru'),(4,'nama'),(5,'saya'),(6,'ferdinan');

/* Trigger structure for table `users` */

DELIMITER $$

USE `programmer`$$

DROP TRIGGER /*!50032 IF EXISTS */ `skills`$$

CREATE
    /*!50017 DEFINER = 'root'@'localhost' */
    TRIGGER `skills` AFTER INSERT ON `users` 
    FOR EACH ROW BEGIN
	INSERT INTO skills VALUES('','');
    END;
$$

DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;