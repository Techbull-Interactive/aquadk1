-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 23, 2021 at 07:45 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aquadk`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

DROP TABLE IF EXISTS `category_tbl`;
CREATE TABLE IF NOT EXISTS `category_tbl` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` text NOT NULL,
  `slug` varchar(50) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`cat_id`, `cat_name`, `slug`, `is_deleted`) VALUES
(1, 'Live Fishes', 'fish', 0),
(2, 'Aquarium Plants', 'plants', 0),
(3, 'Aquarium Accessories', 'accessories', 0);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE IF NOT EXISTS `enquiry` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `phone` varchar(155) NOT NULL,
  `detail` text NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`eid`, `fullname`, `email`, `phone`, `detail`, `is_deleted`) VALUES
(1, 'cz', 'test@gmail.com', '1234567890', 'ggh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

DROP TABLE IF EXISTS `product_tbl`;
CREATE TABLE IF NOT EXISTS `product_tbl` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `modelno` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `purchase_price` varchar(50) NOT NULL,
  `mrp` varchar(50) NOT NULL,
  `feature_pro` varchar(50) NOT NULL,
  `pro_img` varchar(255) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`product_id`, `cat_id`, `product_name`, `modelno`, `description`, `purchase_price`, `mrp`, `feature_pro`, `pro_img`, `is_deleted`) VALUES
(1, 3, 'BIO-SPONGE  FILTER.  ', 'Xij-180', 'This super biochemical sponge filter is a filter that keeps your aquarium always clean.The filter provides mechanical and biological filtration for easy aquarium maintenance.As a mechanical filtration,it use the air- driven system to create suction,that allows the sponge to capture floating particles in the water and return filtered water to tank.As a biological filtration, harmful wastes are biologically transformed into a relatively harmless substance by aerobic bacteria that accumulates in the sponge.This kind of sponge is also suitable for Discus breeding tanks,small tropical fish tanks and fry stock tanks.', '', '', 'yes', '07.jpeg', 0),
(2, 3, 'AQUARIUM AIR PUMP', 'AP-408A', 'Long lasting performance\r\nEnergy saving design\r\nWith low noise and big output\r\nTwo speed control\r\nSuction cups to fit any aquarium\r\nMax outlet -2X4L/min\r\nWatt-5W', '', '', 'yes', '03.jpeg', 0),
(3, 3, 'AQUARIUM AIR PUMP\r\n', 'AP-208', 'Long lasting performance\r\nEnergy saving design\r\nWith low noise and big output\r\nTwo speed control\r\nSuction sups.to fit any aquariums\r\nMax outlet-3L/min\r\nWatt-2.5W', '', '', 'yes', '05.jpeg', 0),
(4, 3, 'BIO-SPONGE  FILTER', 'Xij-280', '  This super biochemical sponge filter is a filter that keeps your aquarium always clean.The filter provides mechanical and biological filtration for easy aquarium maintenance.As a mechanical filtration,it use the air- driven system to create suction,that allows the sponge to capture floating particles in the water and return filtered water to tank.As a biological filtration, harmful wastes are biologically transformed into a relatively harmless substance by aerobic bacteria that accumulates in the sponge.This kind of sponge is also suitable for Discus breeding tanks,small tropical fish tanks and fry stock tanks.', '', '', 'yes', '06.jpeg', 0),
(5, 3, 'BIO-SPONGE  FILTER', 'Xij-380', ' This super biochemical sponge filter is a filter that keeps your aquarium always clean.The filter provides mechanical and biological filtration for easy aquarium maintenance.As a mechanical filtration,it use the air- driven system to create suction,that allows the sponge to capture floating particles in the water and return filtered water to tank.As a biological filtration, harmful wastes are biologically transformed into a relatively harmless substance by aerobic bacteria that accumulates in the sponge.This kind of sponge is also suitable for Discus breeding tanks,small tropical fish tanks and fry stock tanks.', '', '', 'yes', '02.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

DROP TABLE IF EXISTS `user_tbl`;
CREATE TABLE IF NOT EXISTS `user_tbl` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`uid`, `fname`, `lname`, `gender`, `email`, `phone`, `password`, `is_deleted`) VALUES
(1, 'revathy', 'sudheesh', 'F', 'drishyasudheesh@gmail.com', '1234567890', '123', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
