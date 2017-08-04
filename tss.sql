-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Dec 05, 2016 at 08:38 PM
-- Server version: 1.0.116
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `tss`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin_db`
-- 

CREATE TABLE `admin_db` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `admin_db`
-- 

INSERT INTO `admin_db` (`username`, `password`) VALUES 
('demo', 'demo');

-- --------------------------------------------------------

-- 
-- Table structure for table `nontech_events`
-- 

CREATE TABLE `nontech_events` (
  `nevent_name` varchar(100) NOT NULL,
  `nevent_date` varchar(100) NOT NULL,
  `nevent_pmplt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `nontech_events`
-- 

INSERT INTO `nontech_events` (`nevent_name`, `nevent_date`, `nevent_pmplt`) VALUES 
('The Shuttlers', 'August 23, 2016', 'admin/nontech_events/work-35.jpg'),
('Donate Blood, Save Lives', 'April 7, 2016', 'admin/nontech_events/work-8.jpg'),
('Spell Bee', 'October 7-8, 2014', 'admin/nontech_events/work-23.jpg'),
('Battlefield', 'October 11, 2012', 'admin/nontech_events/work-17.jpg'),
('Roadies', 'April 10-15, 2011', 'admin/nontech_events/work-28.jpg'),
('Rebuttal', 'March 8, 2011', 'admin/nontech_events/work-30.jpg'),
('Miami Ink', 'March 8, 2011', 'admin/nontech_events/work-31.jpg'),
('BEG, BORROW, STEAL', 'FEBRURAY 4, 2016', 'admin/nontech_events/work-3.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `seminor_events`
-- 

CREATE TABLE `seminor_events` (
  `sevent_name` varchar(100) NOT NULL,
  `sevent_date` varchar(100) NOT NULL,
  `seventt_pmplt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `seminor_events`
-- 

INSERT INTO `seminor_events` (`sevent_name`, `sevent_date`, `seventt_pmplt`) VALUES 
('Seminar on CAMPUS PLACEMENTS', 'August 24, 2016', 'admin/seminor_events/work-36.jpg'),
('Seminar on Ethical hacking', 'April 18, 2016', 'admin/seminor_events/work-1.jpg'),
('Workshop by Netmax', 'April 8, 2016', 'admin/seminor_events/work-5.jpg'),
('Seminar by BSNL', 'April 6, 2016', 'admin/seminor_events/work-7.jpg'),
(' Workshop on PHONEGAP by HCL', 'April 5, 2016', 'admin/seminor_events/work-6.jpg'),
('Flash Classes on Data Analytics', 'April, 2015', 'admin/seminor_events/work-19.jpg'),
('Workshop on HTML', 'April 10-11, 2012', 'admin/seminor_events/work-14.jpg'),
('Loophole', 'August 31 - September 1, 2012', 'admin/seminor_events/work-27.jpg'),
('Demystifying Numbers', 'March, 2011', 'admin/seminor_events/work-29.jpg'),
('Flash Classes on C Language', 'February 15, 2011', 'admin/seminor_events/work-34.jpg'),
('Workshop on Microsoft Exchange Server', 'February 7-12, 2011', 'admin/seminor_events/work-33.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `techfest`
-- 

CREATE TABLE `techfest` (
  `tfevent_name` varchar(100) NOT NULL,
  `tfevent_date` varchar(100) NOT NULL,
  `tfevent_pmplt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `techfest`
-- 

INSERT INTO `techfest` (`tfevent_name`, `tfevent_date`, `tfevent_pmplt`) VALUES 
('IRIS'' 13', '2013', 'admin/techfest_events/work-18.jpg'),
('IRIS'' 15', '2015', 'admin/techfest_events/work-4.jpg'),
('TECHNOID'' 12', '2012', 'admin/techfest_events/work-24.jpg'),
('UTPANN'' 12', '2012', 'admin/techfest_events/work-26.jpg'),
('IGNIS'' 11', '2011', 'admin/techfest_events/work-15.jpg'),
(' IGNIS'' 11  2011 UTPANN'' 11', '2011', 'admin/techfest_events/work-16.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `technical_events`
-- 

CREATE TABLE `technical_events` (
  `tevent_name` varchar(100) NOT NULL,
  `tevent_date` varchar(100) NOT NULL,
  `tevent_pmplt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `technical_events`
-- 

INSERT INTO `technical_events` (`tevent_name`, `tevent_date`, `tevent_pmplt`) VALUES 
('Code Quest', 'March 3, 2016', 'admin/technical_events/work-2.jpg'),
('QUIZ by TECHIES', 'February 3, 2016', 'admin/technical_events/work-9.jpg'),
(' From Inside The Room', '2015', 'admin/technical_events/work-11.jpg'),
('Competetive Exam Challenge (IBT)', 'April 15&16, 2015', 'admin/technical_events/work-10.jpg'),
(' Mock Placement Drive', 'March 2-4, 2015', 'admin/technical_events/work-21.jpg'),
('Mock Placements (TIMES)', 'February 3, 2015', 'admin/technical_events/work-22.jpg'),
('INSOMIA (Tri Series)', 'March, 2015', 'admin/technical_events/work-20.jpg'),
('Code Overnight', 'September 27, 2014', 'admin/technical_events/work-12.jpg'),
('Polish HTML,Css Skills', 'September 16, 2014', 'admin/technical_events/work-13.jpg'),
('Loopscope', 'October 11, 2012', 'admin/technical_events/work-15.jpg'),
('Code Hunt', 'March 8, 2011', 'admin/technical_events/work-32.jpg');
