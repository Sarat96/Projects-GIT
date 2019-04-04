-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2018 at 03:35 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facecorporates`
--
CREATE DATABASE IF NOT EXISTS `facecorporates` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `facecorporates`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sno` int(11) NOT NULL,
  `firstname` varchar(20) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `phone` bigint(20) NOT NULL,
  `company` varchar(50) COLLATE utf8_bin NOT NULL,
  `details` longtext COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `firstname`, `lastname`, `email`, `phone`, `company`, `details`) VALUES
(3, '', '', '', 0, '', ''),
(4, 'Aquib', 'Ajani', 'aquibajani17@gmail.com', 0, '', ''),
(5, 'Aquib', 'Ajani', 'aquibajani17@gmail.com', 8220060505, 'Tabdeel', 'aeafa'),
(6, 'Aquib', 'Ajani', 'aquibajani17@gmail.com', 8220060505, 'Tabdeel', 'aeafa'),
(7, 'Aquib', 'Ajani', 'aquibajani17@gmail.com', 8220060505, 'Tabdeel', 'aeafa'),
(8, 'Salman', 'Ajani', 'shun@gmail.com', 9788936945, 'BUFWEOBOWe', ' swnglibusefi wef'),
(9, 'Salman', 'Ajani', 'shun@gmail.com', 9788936945, 'BUFWEOBOWe', ' swnglibusefi wef'),
(10, 'Salman', 'Ajani', 'shun@gmail.com', 9788936945, 'BUFWEOBOWe', ' swnglibusefi wef'),
(11, 'Aquib', 'Ajani', 'aquibajani17@gmail.com', 8220060505, 'seef', 'efqf'),
(12, 'Aquib', 'Ajani', 'aquibajani17@gmail.com', 8, 'Rasf', 'aefq'),
(13, 'Aquib', 'Ajani', 'aquibajani17@gmail.com', 86, 'A', 'A'),
(14, 'Aquib', 'Ajani', 'aquibajani17@gmail.com', 8220060505, 'Tabdeel', 'awfg'),
(15, 'Aquib', 'Ajani', 'aquibajani17@gmail.com', 8220060505, 'Tabdeel', 'awfg'),
(16, 'Aquib', 'Ajani', 'aquibajani17@gmail.com', 8220060505, 'Tabdeel', 'awfg'),
(17, 'Aquib', 'Ajani', 'aquibajani17@gmail.com', 8220060505, 'Tabdeel', 'awfg'),
(18, 'Aquib', 'Ajani', 'aquibajani17@gmail.com', 8220060505, 'Tabdeel', 'Something'),
(19, 'Aquib', 'Ajani', 'aquibajani17@gmail.com', 8220060505, 'Tabdeel', 'Something');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
