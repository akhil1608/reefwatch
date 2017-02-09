-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2017 at 06:33 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reefwatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'a', 'a@a.com', 'a', 'a '),
(2, 'a', 'a@a.com', 'a', 'a '),
(3, 'a', 'a@a.c', 'a', 'a '),
(4, 'a', 'a@a.com', 'a', 'a '),
(5, 'a', 'a@a.a', 'a', 'a '),
(6, 'a', 'a@a.com', 'a', 'a '),
(7, 'a', 'a@a.com', 'a', 'a '),
(8, 'a', 'a@a.com', 'a', 'a '),
(9, 'a', 'a@a.com', 'a', 'a '),
(10, 'a', 'a@a.com', 'a', 'a '),
(11, 'a', 'a@a.com', 'a', 'a '),
(12, 'a', 'a@a.com', 'a', 'a '),
(13, 'a', 'a@a.com', 'a', 'a '),
(14, 'a', 'a@a.com', 'a', 'a '),
(15, 'a', 'a@a.com', 'a', 'a '),
(16, 'a', 'a@a.com', 'a', 'a '),
(17, 'a', 'a@a.com', 'a', 'a '),
(18, 'a', 'a@a.com', 'a', 'a '),
(19, 'a', 'a@a.com', 'a', 'a '),
(20, 'a', 'a@a.com', 'a', 'a '),
(21, 'a', 'a@a.com', 'a', 'a '),
(22, 'a', 'a@a.com', 'a', 'a '),
(23, 'a', 'a@a.com', 'a', 'a '),
(24, 'a', 'a@a.com', 'a', 'a\r\n '),
(25, 'a', 'a@a.com', 'a', 'a\r\n '),
(26, 'a', 'a@a.com', 'a', 'a\r\n '),
(27, 'a', 'a@a.com', 'a', 'a\r\n '),
(28, 'a', 'a@a.com', 'a', 'a\r\n '),
(29, 'a', 'a@a.com', 'a', 'a\r\n '),
(30, 'a', 'a@a.com', 'a', 'a\r\n '),
(31, 'a', 'a@a.com', 'a', 'a\r\n '),
(32, 'a', 'a@a.com', 'a', 'a\r\n '),
(33, 'a', 'a@a.com', 'a', 'a\r\n '),
(34, 'a', 'a@a.com', 'a', 'a\r\n '),
(35, 'a', 'a@a.com', 'a', 'a\r\n '),
(36, 'bond', 'b007@james.com', 'bond', 'james '),
(37, 'b', 'b@b.b', 'b', 'b '),
(38, 'akhil', 'akhil@a.com', 'thanks', 'im grateful to you! '),
(39, 'a', 'a@a.com', 'a', 'a '),
(40, 'a', 'a@a.com', 'a', 'a '),
(41, 'a', 'a@a.com', 'a', 'a '),
(42, 'a', 'a@a.com', 'a', 'a '),
(43, 'a', 'a@a.com', 'a', 'a '),
(44, 'a', 'a@a.com', 'a', 'a '),
(45, 'a', 'a@a.com', 'a', 'a '),
(46, 'a', 'a@a.com', 'a', 'a '),
(47, 'a', 'a@a.com', 'a', 'a '),
(48, 'a', 'a@a.com', 'a', 'a '),
(49, 'a', 'a@a.com', 'a', 'a '),
(50, 'a', 'a@a.com', 'a', 'a '),
(51, 'a', 'a@a.com', 'a', 'a '),
(52, 'a', 'a@a.com', 'a', 'a '),
(53, 'a', 'a@a.com', 'a', 'a '),
(54, 'a', 'a@a.com', 'a', 'a '),
(55, 'a', 'a@a.com', 'a', 'a '),
(56, 'a', 'a@a.com', 'a', 'a '),
(57, 'a', 'a@a.com', 'a', 'a '),
(58, 'a', 'a@a.com', 'a', 'a '),
(59, 'a', 'a@a.com', 'a', 'a '),
(60, 'a', 'a@a.com', 'a', 'a '),
(61, 'a', 'a@a.com', 'a', 'a '),
(62, 'a', 'a@a.com', 'a', 'a '),
(63, 'a', 'a@a.com', 'a', 'a '),
(64, 'a', 'a@a.com', 'a', 'a '),
(65, 'a', 'a@a.com', 'a', 'a '),
(66, 'a', 'a@a.com', 'a', 'a '),
(67, 'a', 'a@a.com', 'a', 'a '),
(68, 'a', 'a@a.com', 'a', 'a '),
(69, 'a', 'a@a.com', 'a', 'a '),
(70, 'a', 'a@a.com', 'a', 'a '),
(71, 'a', 'a@a.com', 'a', 'a '),
(72, 'a', 'a@a.com', 'a', 'aas ');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `path` varchar(20) NOT NULL,
  `page` tinyint(2) NOT NULL,
  `part` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `path`, `page`, `part`) VALUES
(1, 'h1.jpg', 1, 1),
(2, 'HomePageSlider1.jpg', 1, 2),
(3, 'HomePageSlider2.jpg', 1, 2),
(4, 'HomePageSlider3.jpg', 1, 2),
(5, 'HomePageSlider4.jpg', 1, 2),
(6, 'HomePageSlider5.jpg', 1, 2),
(7, 'HomePageSlider6.jpg', 1, 2),
(8, 'HomePageSlider7.jpg', 1, 2),
(9, 'h4.jpg', 1, 3),
(10, 's1.jpg', 1, 4),
(11, 's2.jpg', 1, 4),
(12, 's3.jpg', 1, 4),
(13, 's4.jpg', 1, 4),
(14, 's5.jpg', 1, 4),
(15, 's6.jpg', 1, 4),
(16, 's7.jpg', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `path` varchar(20) NOT NULL,
  `href` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `path`, `href`) VALUES
(1, 'Lacadives', 'Lacadives-Logo.png', '#'),
(2, 'Luminous Deep', 'luminous-deep.png', 'http://www.luminousdeep.com/'),
(3, 'Mission Blue', 'MissionBlue.png', 'http://mission-blue.org/about/'),
(4, 'Infiniti', 'infiniti-logo.png', 'http://www.infinitiliveaboard.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
