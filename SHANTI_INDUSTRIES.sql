SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `SHANTI_INDUSTRIES`;

USE `SHANTI_INDUSTRIES`;


CREATE TABLE IF NOT EXISTS `customer_details` (
  `sn` int(10) NOT NULL COMMENT 'Serial Number',
  `bn` int(10) NOT NULL COMMENT 'Book Number',
  `date` date NOT NULL,
  `cname` varchar(25) NOT NULL DEFAULT 'NA' COMMENT 'Customer Name',
  `add` varchar(100) NOT NULL DEFAULT 'NA' COMMENT 'Address',
  `TIN` int(11) NOT NULL DEFAULT '0',
  `VAT` double NOT NULL DEFAULT '0',
  `ox` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `item_details` (
  `n` int(11) NOT NULL AUTO_INCREMENT,
  `sn` int(10) NOT NULL,
  `part` varchar(30) NOT NULL,
  `qun` double NOT NULL DEFAULT '1',
  `rate` double NOT NULL,
  `per` varchar(5) NOT NULL,
  PRIMARY KEY (`n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;


CREATE TABLE IF NOT EXISTS `login` (
  `sn` int(5) NOT NULL,
  `user` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `login` (`sn`, `user`, `pass`) VALUES
(1, 'root', 'neo');

