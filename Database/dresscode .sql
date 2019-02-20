-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Feb 20, 2019 at 05:35 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dresscode`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `deleteuser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteuser` ()  DELETE FROM login WHERE email='".$_SESSION["email"]."'$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `badge`
--

DROP TABLE IF EXISTS `badge`;
CREATE TABLE IF NOT EXISTS `badge` (
  `studentid` varchar(30) NOT NULL,
  `badgecolour` varchar(10) NOT NULL,
  `badgequantity` int(10) NOT NULL,
  KEY `studentid` (`studentid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `badge`
--

INSERT INTO `badge` (`studentid`, `badgecolour`, `badgequantity`) VALUES
('1jb16cs003', 'blue', 2),
('1jb16cs004', 'yellow', 3),
('1jb16cs005', 'white', 3),
('1jb16cs006', 'green', 2),
('1jb16cs007', 'yellow', 3),
('1jb16cs008', 'blue', 4),
('1jb16cs009', 'yellow', 2);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `email` varchar(30) NOT NULL,
  `message` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `username`, `password`) VALUES
('krishnatv104@gmail.com', 'krishnatv104@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `pant`
--

DROP TABLE IF EXISTS `pant`;
CREATE TABLE IF NOT EXISTS `pant` (
  `studentid` varchar(30) NOT NULL,
  `pantcolour` varchar(10) NOT NULL,
  `pantsize` int(10) NOT NULL,
  `pantquantity` int(10) NOT NULL,
  KEY `pant_ibfk_1` (`studentid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pant`
--

INSERT INTO `pant` (`studentid`, `pantcolour`, `pantsize`, `pantquantity`) VALUES
('1jb16cs003', 'White', 28, 3),
('1jb16cs004', 'White', 32, 2),
('1jb16cs005', 'White', 26, 2),
('1jb16cs006', 'White', 30, 4),
('1jb16cs007', 'Khaki\n\n', 28, 3),
('1jb16cs008', 'White', 26, 4),
('1jb16cs009', 'White', 26, 2);

-- --------------------------------------------------------

--
-- Table structure for table `shirt`
--

DROP TABLE IF EXISTS `shirt`;
CREATE TABLE IF NOT EXISTS `shirt` (
  `studentid` varchar(30) NOT NULL,
  `shirtcolour` varchar(10) NOT NULL,
  `shirtsize` int(10) NOT NULL,
  `shirtquantity` int(10) NOT NULL,
  KEY `studentid` (`studentid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shirt`
--

INSERT INTO `shirt` (`studentid`, `shirtcolour`, `shirtsize`, `shirtquantity`) VALUES
('1jb16cs003', 'White', 26, 4),
('1jb16cs004', 'khaki', 24, 4),
('1jb16cs005', 'Khaki', 28, 1),
('1jb16cs006', 'White', 30, 4),
('1jb16cs007', 'Khaki', 24, 1),
('1jb16cs008', 'White', 26, 3),
('1jb16cs009', 'Khaki', 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

DROP TABLE IF EXISTS `shoes`;
CREATE TABLE IF NOT EXISTS `shoes` (
  `studentid` varchar(30) NOT NULL,
  `shoecolour` varchar(10) NOT NULL,
  `shoesize` int(10) NOT NULL,
  `shoequantity` int(10) NOT NULL,
  KEY `studentid` (`studentid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`studentid`, `shoecolour`, `shoesize`, `shoequantity`) VALUES
('1jb16cs003', 'White', 8, 4),
('1jb16cs004', 'Black', 11, 4),
('1jb16cs005', 'Black', 9, 2),
('1jb16cs006', 'White', 8, 2),
('1jb16cs007', 'White', 9, 2),
('1jb16cs008', 'Black', 8, 3),
('1jb16cs009', 'White', 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

DROP TABLE IF EXISTS `studentdetails`;
CREATE TABLE IF NOT EXISTS `studentdetails` (
  `studentid` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `mobile` double NOT NULL,
  `gender` varchar(10) NOT NULL,
  `user` varchar(30) NOT NULL,
  `timeupdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`studentid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`studentid`, `name`, `dob`, `mobile`, `gender`, `user`, `timeupdated`) VALUES
('1jb16cs003', 'A', '16/April/2003', 12345567, 'Male', 'krishnatv104@gmail.com', '2019-02-19 18:16:35'),
('1jb16cs004', 'B', '17/May/2001', 456123457, 'Male', 'krishnatv104@gmail.com', '2019-02-19 18:16:56'),
('1jb16cs005', 'C', '16/March/2000', 12346789, 'Female', 'krishnatv104@gmail.com', '2019-02-19 18:17:03'),
('1jb16cs006', 'D', '14/March/2000', 12345567, 'Male', 'krishnatv104@gmail.com', '2019-02-19 18:17:10'),
('1jb16cs007', 'E', '12/April/2002', 456789123, 'Male', 'krishnatv104@gmail.com', '2019-02-19 18:17:18'),
('1jb16cs008', 'F', '13/April/2000', 645565645, 'Female', 'krishnatv104@gmail.com', '2019-02-19 18:17:25'),
('1jb16cs009', 'G', '11/August/2000', 8951022866, 'Male', 'krishnatv104@gmail.com', '2019-02-19 18:17:31');

--
-- Triggers `studentdetails`
--
DROP TRIGGER IF EXISTS `timeupdated`;
DELIMITER $$
CREATE TRIGGER `timeupdated` BEFORE INSERT ON `studentdetails` FOR EACH ROW set new.timeupdated=LOCALTIME
$$
DELIMITER ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `badge`
--
ALTER TABLE `badge`
  ADD CONSTRAINT `badge_ibfk_1` FOREIGN KEY (`studentid`) REFERENCES `studentdetails` (`studentid`) ON DELETE CASCADE;

--
-- Constraints for table `pant`
--
ALTER TABLE `pant`
  ADD CONSTRAINT `pant_ibfk_1` FOREIGN KEY (`studentid`) REFERENCES `studentdetails` (`studentid`) ON DELETE CASCADE;

--
-- Constraints for table `shirt`
--
ALTER TABLE `shirt`
  ADD CONSTRAINT `shirt_ibfk_1` FOREIGN KEY (`studentid`) REFERENCES `studentdetails` (`studentid`) ON DELETE CASCADE;

--
-- Constraints for table `shoes`
--
ALTER TABLE `shoes`
  ADD CONSTRAINT `shoes_ibfk_1` FOREIGN KEY (`studentid`) REFERENCES `studentdetails` (`studentid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
