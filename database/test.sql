-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2020 at 08:12 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `aimg`
--

CREATE TABLE `aimg` (
  `id` int(7) NOT NULL,
  `catid` int(7) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aimg`
--

INSERT INTO `aimg` (`id`, `catid`, `img`) VALUES
(43, 45, 'img/2d3c0b3bee3204372094dcca7b371a5e.jpg'),
(60, 46, 'img/2ff72ff53e3f8377b7c5cb138d616818.jpg'),
(61, 46, 'img/db021806a907b45472101f51f2d1c6b5.jpg'),
(62, 46, 'img/d7637981eb503630f56703ea313efff4.jpg'),
(63, 46, 'img/d1068b7fe96d3f420af0902cfc3ad3c0.jpg'),
(64, 46, 'img/1141120b04963e70ee8e0283ee52476e.jpg'),
(65, 46, 'img/bc83f13f318f8224ecb7f749891b0b98.jpg'),
(66, 46, 'img/ed77718eaa347d1876c0fe84cb8f0f33.jpg'),
(67, 46, 'img/78f6b6b2636466948f23982b7ab5693a.jpg'),
(69, 47, 'img/28e1ad93b5b8bf2b5f8221c71b57ed4c.jpg'),
(70, 47, 'img/ea9262ba545e22c7a99286466e5bd385.jpg'),
(71, 47, 'img/817c1ce768c05ead769daa200e61838f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `num` int(11) NOT NULL,
  `status` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `num`, `status`) VALUES
(45, 'sky', 3, 'ว่าง'),
(46, 'yellow', 2232, 'ไม่ว่าง'),
(47, 'qq', 331, 'ว่าง');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aimg`
--
ALTER TABLE `aimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aimg`
--
ALTER TABLE `aimg`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
