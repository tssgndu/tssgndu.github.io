-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2017 at 03:35 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tss`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE `admin_db` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`username`, `password`, `id`) VALUES
('myadmin', 'myadmin789', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events_record`
--

CREATE TABLE `events_record` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `flag` int(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `newindex` varchar(100) NOT NULL,
  `techflag` varchar(100) NOT NULL,
  `nontechflag` varchar(100) NOT NULL,
  `semflag` varchar(100) NOT NULL,
  `techfestflag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `indextable`
--

CREATE TABLE `indextable` (
  `id` int(100) NOT NULL,
  `month` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indextable`
--

INSERT INTO `indextable` (`id`, `month`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December'),
(13, 'blabla');

-- --------------------------------------------------------

--
-- Table structure for table `team_record`
--

CREATE TABLE `team_record` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `post` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `fb_link` varchar(100) NOT NULL DEFAULT '0',
  `insta_link` varchar(100) NOT NULL DEFAULT '0',
  `linkedin` varchar(100) NOT NULL DEFAULT '0',
  `youtube` varchar(100) NOT NULL DEFAULT '0',
  `level` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_record`
--

INSERT INTO `team_record` (`id`, `name`, `post`, `image`, `fb_link`, `insta_link`, `linkedin`, `youtube`, `level`) VALUES
(0, '', '', '', '0', '0', '0', '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_record`
--
ALTER TABLE `events_record`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `indextable`
--
ALTER TABLE `indextable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_record`
--
ALTER TABLE `team_record`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `level` (`level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_db`
--
ALTER TABLE `admin_db`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `events_record`
--
ALTER TABLE `events_record`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `indextable`
--
ALTER TABLE `indextable`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `team_record`
--
ALTER TABLE `team_record`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
