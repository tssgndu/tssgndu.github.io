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
('myadmin', 'admin@123', 1);

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

INSERT INTO `team_record` (`id`, `name`, `post`, `image`, `fb_link`, `insta_link`, `linkedin`, `youtube`, `level`) VALUES
(1, 'Hardeep Singh', 'President', 'admin/team/6.jpg', 'https://www.facebook.com/hardeep.singh.58118774', '', 'https://www.linkedin.com/in/hardeep-singh-7b5b6416/', '', 1),
(3, 'Sukhsagar Singh', 'CONVENER', 'admin/team/sukhsagar.jpg', 'https://fb.com/sukhsagarsinghbatra', 'https://www.instagram.com/thealtruisticturbanator/', 'https://www.linkedin.com/in/sukhsagarsinghbatra/', '', 2),
(4, 'Mahima Mujral', 'GENERAL MANAGER', 'admin/team/mahi.jpg', 'https://www.facebook.com/mahimamujral/', 'https://www.instagram.com/twinkling_stardust/', '', '', 3),
(5, 'Ridhima Mehra', 'COMMUNITY BUILDER', 'admin/team/ridhima.jpeg', 'https://www.facebook.com/ridhima04', 'https://www.instagram.com/ridhima_mehra4', '', '', 4),
(6, 'MANPREET KAUR', 'HEAD OF LITERARY CLUB', 'admin/team/mannie.jpg', 'https://www.facebook.com/profile.php?id=100003092463717', '', '', '', 5),
(7, 'Lovepreet Kaur', 'HEAD OF Web-Dev CLUB', 'admin/team/loveprt.jpg', '', '', '', '', 6),
(8, 'Pukhraj Singh', 'EVENT MANAGER', 'admin/team/pukhraj.jpeg', 'https://www.facebook.com/pukhraj.randhawa', '', '', '', 7),
(9, 'Kriti Shah', 'Event Manager', 'admin/team/Kriti.jpeg', 'https://www.facebook.com/kriti.shah.359', '', '', '', 8),
(10, 'Harsimar Bedi', 'Public Relations Manager', 'admin/team/harsimar.jpeg', 'https://www.facebook.com/harsimar.bedi?ref=br_rs', '', '', '', 9),
(11, 'Yuvraj Singh', 'Head of Placement Committee', 'admin/team/yuvraj.jpeg', 'https://www.facebook.com/yuvisingh.cool', '', '', '', 10),
(12, 'Tanvi Dhammi', 'Head of Cultural Club', 'admin/team/tanvi.jpeg', 'https://www.facebook.com/profile.php?id=100002724876434', '', '', '', 11),
(13, 'Gurkiran Kaur', 'Head of Sports Club', 'admin/team/Gurkiran.jpeg', 'https://www.facebook.com/profile.php?id=100002177488295', '', '', '', 12),
(14, 'Rahul Kumar', 'Head of Designing Club', 'admin/team/Rahul.jpeg', 'https://www.facebook.com/profile.php?id=100000757341317', '', '', '', 13),
(15, 'Deepti Mehra', 'Notice Board Manager', 'admin/team/Deepti.jpeg', 'https://www.facebook.com/profile.php?id=100001002108841&', '', '', '', 14),
(16, 'Nidhi', 'Notice Board Manager', 'admin/team/nnidhi.jpeg', '', '', '', '', 15),
(17, 'Kishore Narang', 'Head of Programming Club', 'admin/team/Kishore.jpeg', 'https://www.facebook.com/profile.php?id=100003144444525', '', '', '', 16),
(18, 'Aarti Sethi', 'Head of Academics Comittee', 'admin/team/Aarti.jpeg', 'https://www.facebook.com/profile.php?id=100001220924849', '', '', '', 17),
(19, 'Harpreet Kaur', 'Head of Finance Committee', 'admin/team/Harpreet.jpeg', 'https://www.facebook.com/profile.php?id=100010337221213', '', '', '', 18),
(20, 'Adeeshnoor Singh', 'Social Media Manager', 'admin/team/adeesh.jpg', 'https://www.facebook.com/profile.php?id=100001376850889', '', '', '', 19),
(21, 'Vrinda Aggarwal', 'Head of Academics Comittee', 'admin/team/Vrinda.jpeg', 'https://www.facebook.com/vrinda.aggarwal.372', '', '', '', 20);

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
