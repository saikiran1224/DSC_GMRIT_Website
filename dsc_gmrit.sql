-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 16, 2020 at 10:19 PM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dsc_gmrit`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `event_id` varchar(30) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `organizing_mode` varchar(50) NOT NULL,
  `event_cost` float NOT NULL,
  `event_description` varchar(50) NOT NULL,
  `event_speaker` varchar(50) NOT NULL,
  `event_sponsor` varchar(50) NOT NULL,
  `event_associate` varchar(50) NOT NULL,
  `event_status` varchar(10) NOT NULL,
  `event_logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`event_id`, `event_name`, `date`, `time`, `organizing_mode`, `event_cost`, `event_description`, `event_speaker`, `event_sponsor`, `event_associate`, `event_status`, `event_logo`) VALUES
('1', 'DSC INFO Session', '2020-09-20', '02:00:00', 'free', 0, 'jbhasf', 'bhjdsjh', 'hbdshhj', 'hjbdsdh', 'pending', 'anno.png'),
('2', 'DSC INFO Session', '2020-09-20', '02:00:00', 'free', 0, 'bhjds', 'bhjdsjh', 'hbdshhj', 'hjbdsdh', 'pending', 'book.png');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` varchar(30) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `publish_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `idea_spot`
--

CREATE TABLE `idea_spot` (
  `idea_id` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `idea_description` varchar(100) NOT NULL,
  `idea_summarization` varchar(100) NOT NULL,
  `idea_uniqueness` varchar(100) NOT NULL,
  `idea_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idea_spot`
--

INSERT INTO `idea_spot` (`idea_id`, `name`, `email_id`, `idea_description`, `idea_summarization`, `idea_uniqueness`, `idea_title`) VALUES
('10', 'GMRIT_APP_FOR_FEES_PAY', 'saitejavankayala9@gmail.com', 'IN THIS APP, A STUDNET CAN PAY USING APP WITHOUT GOING TO BANK', 'FSDKDJK', 'HBJSDFS', 'FEES_APP'),
('11', 'vankayala  saiteja', 'SAITEJAVANKAYALA5@GMAIL.COM', 'cvkj', 'qk', 'n', 'dsfkj'),
('12', 'saivaishnavu', 'hdfsdf@gmail.pcm', 'jnksfdk', 'jksdfkjf', 'kjnsdfjdff', 'ksdfndf'),
('5', 'vankayala  saiteja', 'SAITEJAVANKAYALA5@GMAIL.COM', 'sfkdjn', 'kjdfs', 'kjdsff', 'sd'),
('5f620d7ceb9dc', 'vankayala  saiteja', 'SAITEJAVANKAYALA5@GMAIL.COM', 'dkffnf', 'kjfdn ', 'jksfd fd', 'dsfkj'),
('5f621a83a9b56', 'vankayala  saiteja', 'SAITEJAVANKAYALA5@GMAIL.COM', 'isfjnjsdfk', 'jkdsnfkf', 'kjsdkjf', 'dsfkj'),
('5f621e7510b12', 'vankayala  saiteja', 'SAITEJAVANKAYALA5@GMAIL.COM', 'sdg', 'sdgd', 'sdddgg', 'dsfkj'),
('6', 'vankayala  saiteja', 'SAITEJAVANKAYALA5@GMAIL.COM', 'hihjbknjk', 'ytfhgv', 'yfthgj', 'dsfkj'),
('7', 'vankayala  saiteja', 'saitejavankayala9@gmail.com', 'nfdfgd', 'kjvncxk', 'kjcvxnjvkcvxjk', 'dsc'),
('8', 'vankayala  saiteja', 'SAITEJAVANKAYALA5@GMAIL.COM', 'jkdfsfkj', 'kjjdsjks', 'kjdksf', 'sjfnd'),
('9', 'vankayala  saiteja', 'SAITEJAVANKAYALA5@GMAIL.COM', 'jkdfsfkj', 'kjjdsjks', 'kjdksf', 'sjfnd');

-- --------------------------------------------------------

--
-- Table structure for table `participant_details`
--

CREATE TABLE `participant_details` (
  `participant_id` varchar(30) NOT NULL,
  `event_id` varchar(30) NOT NULL,
  `participant_name` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `member_type` varchar(30) NOT NULL,
  `member_roll` varchar(30) NOT NULL,
  `organization` varchar(30) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `email_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participant_details`
--

INSERT INTO `participant_details` (`participant_id`, `event_id`, `participant_name`, `city`, `state`, `district`, `member_type`, `member_roll`, `organization`, `phone_number`, `email_id`) VALUES
('5f62226e4a1f1', '1', 'saitejavankayala5@gmail.com', 'KADAKATLA, TADEPALLIGUDEM', 'Andaman & Nicobar', ' Alipur ', 'Graduate', '17341A05d0', 'gmrit', '09182661299', 'saitejavankayala5@gmail.com'),
('5f622286c91a4', '1', 'SAITEJAVANKAYALA5@GMAIL.COM', 'RAJAM', 'Andaman & Nicobar', ' Alipur ', 'Undergarduate', '17341A05d0', 'gmrit', 'saitejavankayala5@gmail.com', 'saitejavankayala5@gmail.com'),
('5f6222c0d71fa', '1', 'SAITEJAVANKAYALA5@GMAIL.COM', 'RAJAM', 'Andaman & Nicobar', ' Alipur ', 'Graduate', '17341A05d0', 'gmrit', '09182661299', 'saitejavankayala5@gmail.com'),
('5f62277b02ecb', '1', 'SAITEJAVANKAYALA5@GMAIL.COM', 'RAJAM', 'Andaman & Nicobar', ' Alipur ', 'Graduate', '17341A05d0', 'gmrit', '09182661299', 'saitejavankayala5@gmail.com'),
('5f622819f0576', '2', 'SAITEJAVANKAYALA5@GMAIL.COM', 'RAJAM', 'Andaman & Nicobar', ' Alipur ', 'Graduate', '17341A05d0', 'gmrit', '09182661299', 'saitejavankayala5@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `member_id` varchar(30) NOT NULL,
  `member_name` varchar(50) NOT NULL,
  `member_email` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `github_profile` varchar(100) NOT NULL,
  `instagram_profile` varchar(100) NOT NULL,
  `linkedlin_profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`event_id`),
  ADD UNIQUE KEY `event_id` (`event_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `idea_spot`
--
ALTER TABLE `idea_spot`
  ADD PRIMARY KEY (`idea_id`);

--
-- Indexes for table `participant_details`
--
ALTER TABLE `participant_details`
  ADD PRIMARY KEY (`participant_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`member_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
