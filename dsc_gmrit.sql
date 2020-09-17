-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 14, 2020 at 05:07 PM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- --------------------------------------------------------

--
-- Table structure for table `event venue`
--

CREATE TABLE `event venue` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `organization_mode` varchar(50) NOT NULL,
  `event_cost` float NOT NULL,
  `event_description` varchar(50) NOT NULL,
  `event_speaker` varchar(50) NOT NULL,
  `event_sponsor` varchar(50) NOT NULL,
  `event_associate` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_registration`
--

CREATE TABLE `event_registration` (
  `event_id` int(11) NOT NULL,
  `person_name` varchar(30) NOT NULL,
  `person_city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `typesp` varchar(30) NOT NULL,
  `jntuno` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `gmail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_registration`
--

INSERT INTO `event_registration` (`event_id`, `person_name`, `person_city`, `state`, `district`, `typesp`, `jntuno`, `company`, `phone_number`, `gmail`) VALUES
(1, 'SAITEJAVANKAYALA5@GMAIL.COM', 'city', 'state', 'district', 'student', '17341a05h1', 'gmrit', '09182661299', 'saitejavankayala5@gmail.com'),
(2, 'SAITEJAVANKAYALA5@GMAIL.COM', 'Banana', 'Banana', 'Banana', 'student', '17341a05h1', 'gmrit', '09182661299', 'saitejavankayala5@gmail.com'),
(3, 'vankayala saiteja', 'Apple', 'Apple', 'Apple', 'saiteja', '17341a05h1', 'gmrit', '09182661299', 'saitejavankayala5@gmail.com'),
(4, 'vankayala saiteja', 'Apple', 'Apple', 'Apple', 'teja', '17341a05h1', 'gmrit', '09182661299', 'saitejavankayala5@gmail.com'),
(5, 'vankayala saiteja', 'Apple', 'Apple', 'Apple', 'student', '17341a05h1', 'gmrit', '09182661299', 'saitejavankayala5@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `fqa`
--

CREATE TABLE `fqa` (
  `question` varchar(100) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `publish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fqa`
--

INSERT INTO `fqa` (`question`, `answer`, `publish_date`) VALUES
('What is Dsc?', 'Developer Student Clubs(DSC) are on-campus Communities to bridge the Gap between Theory & Practice.', '2020-09-13'),
('How can we join DSC - GMRIT?', 'Refer Community Section in Our page', '2020-09-13'),
('Who can join DSC?\r\n', '\r\nStudents from all under-graduate and graduate programs with an interest in growing as a Developer are welcome to DSC.', '2020-09-14');

-- --------------------------------------------------------

--
-- Table structure for table `ideashot`
--

CREATE TABLE `ideashot` (
  `idea_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `idea_gmail` varchar(100) NOT NULL,
  `idea_description` varchar(100) NOT NULL,
  `idea_summarization` varchar(100) NOT NULL,
  `idea_uniqueness` varchar(100) NOT NULL,
  `idea_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ideashot`
--

INSERT INTO `ideashot` (`idea_id`, `name`, `idea_gmail`, `idea_description`, `idea_summarization`, `idea_uniqueness`, `idea_title`) VALUES
(5, 'vankayala  saiteja', 'SAITEJAVANKAYALA5@GMAIL.COM', 'sfkdjn', 'kjdfs', 'kjdsff', 'sd'),
(6, 'vankayala  saiteja', 'SAITEJAVANKAYALA5@GMAIL.COM', 'hihjbknjk', 'ytfhgv', 'yfthgj', 'dsfkj'),
(7, 'vankayala  saiteja', 'saitejavankayala9@gmail.com', 'nfdfgd', 'kjvncxk', 'kjcvxnjvkcvxjk', 'dsc'),
(8, 'vankayala  saiteja', 'SAITEJAVANKAYALA5@GMAIL.COM', 'jkdfsfkj', 'kjjdsjks', 'kjdksf', 'sjfnd'),
(9, 'vankayala  saiteja', 'SAITEJAVANKAYALA5@GMAIL.COM', 'jkdfsfkj', 'kjjdsjks', 'kjdksf', 'sjfnd'),
(10, 'GMRIT_APP_FOR_FEES_PAY', 'saitejavankayala9@gmail.com', 'IN THIS APP, A STUDNET CAN PAY USING APP WITHOUT GOING TO BANK', 'FSDKDJK', 'HBJSDFS', 'FEES_APP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_registration`
--
ALTER TABLE `event_registration`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `ideashot`
--
ALTER TABLE `ideashot`
  ADD PRIMARY KEY (`idea_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_registration`
--
ALTER TABLE `event_registration`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ideashot`
--
ALTER TABLE `ideashot`
  MODIFY `idea_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
