-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2016 at 12:40 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shanti_industries`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `sn` int(10) NOT NULL COMMENT 'Serial Number',
  `bn` int(10) DEFAULT '1' COMMENT 'Book Number',
  `date` date NOT NULL,
  `cname` varchar(25) NOT NULL DEFAULT 'NA' COMMENT 'Customer Name',
  `add` varchar(100) NOT NULL DEFAULT 'NA' COMMENT 'Address',
  `TIN` int(11) NOT NULL DEFAULT '0',
  `VAT` double NOT NULL DEFAULT '0',
  `ox` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`sn`, `bn`, `date`, `cname`, `add`, `TIN`, `VAT`, `ox`) VALUES
(18, 1, '2016-11-30', 'Akshay', 'dfr', 123456, 10, 10),
(19, 1, '2016-11-30', 'sdc', 'C 261', 123456, 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `item_details`
--

CREATE TABLE `item_details` (
  `n` int(11) NOT NULL,
  `sn` int(10) NOT NULL,
  `part` varchar(30) NOT NULL,
  `qun` double NOT NULL DEFAULT '1',
  `rate` double NOT NULL,
  `per` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_details`
--

INSERT INTO `item_details` (`n`, `sn`, `part`, `qun`, `rate`, `per`) VALUES
(3, 18, 'kjb', 1, 10, '1'),
(4, 19, 'kjn', 1, 60, '1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sn` int(5) NOT NULL,
  `user` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sn`, `user`, `pass`) VALUES
(1, 'root', 'neo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `item_details`
--
ALTER TABLE `item_details`
  ADD PRIMARY KEY (`n`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `sn` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Serial Number', AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `item_details`
--
ALTER TABLE `item_details`
  MODIFY `n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
