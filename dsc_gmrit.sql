-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2020 at 12:18 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `event_name` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `organizing_mode` varchar(50) NOT NULL,
  `event_cost` float NOT NULL,
  `event_description` varchar(225) NOT NULL,
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
('5f6256e1cfdb7', 'DSC Info Session', '2020-09-20', '06:30:00', 'Online', 0, 'Introduction to Developer Student Clubs', 'Koushik Modekurti', 'NA', 'NA', 'Upcoming', 'dsc_logo_min (1).png'),
('5f625a8a5bf2b', 'Basics of Web Development Workshop', '2020-09-16', '20:30:00', 'Online', 0, 'We are going to discuss on Web Development Basics', 'Vinay Sriram, Saikiran Kopparthi', 'NA', 'NA', 'Completed', 'web.jpg'),
('5f625e82f2a2a', 'Mobile App Development', '2020-10-25', '21:00:00', 'Online Google Meet', 100, 'We are going to discuss on Android Development Basics', 'Saikiran Kopparthi', 'NAA', 'NA', 'Completed', 'android.jpg');

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

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `question`, `answer`, `publish_date`) VALUES
('5f62fbe6b4114', 'What does DSC Do ?', 'It solves Local Problems using Various Technologies', '2020-09-17 11:32:14'),
('5f6332820145f', 'How can we join DSC-GMRIT ?', 'Refer Community Section in our Page.', '2020-09-17 15:25:14');

-- --------------------------------------------------------

--
-- Table structure for table `idea_spot`
--

CREATE TABLE `idea_spot` (
  `idea_id` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `idea_description` varchar(100) NOT NULL,
  `idea_summarization` varchar(100) NOT NULL,
  `idea_uniqueness` varchar(100) NOT NULL,
  `idea_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idea_spot`
--

INSERT INTO `idea_spot` (`idea_id`, `name`, `email_id`, `phone`, `idea_description`, `idea_summarization`, `idea_uniqueness`, `idea_title`) VALUES
('5f62f7368fe30', 'Hello', 'knvrssai@gmail.com', '+91 9381384234', 'Hello', 'Hello', 'Hello', 'Hello'),
('5f6334bde63e7', 'Koushik', 'koushik@gmail.com', '+91 931384234', 'Hello', 'Hello', 'Hello', 'Food4All'),
('5f656f2117f82', 'saikiran', 'knvrssai@gmail.com', '+91 9908721573', 'Hello', 'Hello', 'Hello', 'Hello');

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
('5f62f53ccb749', '5f6256e1cfdb7', 'Saikiran Kopparthi', 'Kakinada', 'Andhra Pradesh', ' Kakinada ', 'Graduate', '18341A1224', 'GMR Institute of Technology', '9381384234', 'knvrs@gmail.com'),
('5f63340e85db2', '5f6256e1cfdb7', 'Koushik', 'Kakinada', 'Andhra Pradesh', ' East Godavari ', 'Undergarduate', '17341A1236', 'GMRIT', '8639796138', 'koushik@gmail.com'),
('5f633e0f817b2', '5f6256e1cfdb7', 'Saikiran', 'Kakinada', 'Andhra Pradesh', ' Bheemunipatnam ', 'Graduate', '12345', 'GMR Institute of Technology', '9900990019', 'knvrs@gmail.com'),
('5f648c60be2cd', '5f625a8a5bf2b', 'Gowtham', 'Kakinada', 'Andhra Pradesh', ' East Godavari ', 'Graduate', '17341A1224', 'GMR Institute of Technology', '9381384234', 'gowkas@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `member_id` varchar(30) NOT NULL,
  `member_name` varchar(50) NOT NULL,
  `member_designation` varchar(255) NOT NULL,
  `member_dept` varchar(255) NOT NULL,
  `member_interests` varchar(255) NOT NULL,
  `member_email` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `github_profile` varchar(100) NOT NULL,
  `instagram_profile` varchar(100) NOT NULL,
  `linkedlin_profile` varchar(100) NOT NULL,
  `member_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`member_id`, `member_name`, `member_designation`, `member_dept`, `member_interests`, `member_email`, `phone_number`, `github_profile`, `instagram_profile`, `linkedlin_profile`, `member_photo`) VALUES
('dsc_01', 'Mr. Koushik Modekurti', 'DSC Lead', '4th IT', 'Android,Data Analyst, Firebase, Backend Development, Cloud Computing, Web Development, AWS', 'koushikmodekurti00@gmail.com', '+91 8639796138', 'https://github.com/Koushik15042000', 'https://www.instagram.com/__sai_koushik__/', 'https://www.linkedin.com/in/koushik-modekurti-6b0b46150/', 'koushik_modekurti.jpg'),
('dsc_02', 'Mr. T. Chandra Sekhar Reddy', 'Faculty Advisor', 'Dept. of IT', 'RPA, Big Data Analytics, Hadoop Programming', 'chandrasekhar.t@gmrit.edu.in', '+91 9849183145', 'NA', 'https://www.instagram.com/chandu.tummuru/', 'https://www.linkedin.com/in/chandrasekhara-reddy-tummuru-362449191/', 'chandra_sekhar_sir.jpeg'),
('dsc_03', 'Mr. Santosh Burada', 'Android Developer', '4th IT', 'Adnroid, Python, Web Development, OpenCV, Java, ML', 'santu.burada99@gmail.com', '+91 6303149161', 'https://github.com/santosh-burada', 'https://www.instagram.com/santuburada1999/', 'https://www.linkedin.com/in/santosh-burada-1171881aa/', 'santosh_burada.jpg'),
('dsc_04', 'Mr. Vinay Sriram', ' Web Developer', '2nd IT', 'Web Development', 'vinaysriramtummidi01@gmail.com', '+91 8688486699', 'https://github.com/vinaysriram01', 'https://www.instagram.com/sriram_vinay/', 'https://www.linkedin.com/in/vinay-sriram-3692141b6/', 'vinay_sriram.jpg'),
('dsc_05', 'Mr. Saikiran Kopparthi', 'Android Developer', '3rd IT', 'Machine Learning, Android App Development, Firebase, REST API, Web Development, PHP, jQuery', 'knvrssaikiran@gmail.com', '+91 9381384234', '', 'https://www.instagram.com/kirankkd12/', 'https://www.linkedin.com/in/saikiran-kopparthi-2204a518a/', 'kiran.jpg'),
('dsc_06', 'Ms. Juhi Siri Sai Jasti', 'Media & Creatives', '4th CSE', 'Creativity, Graphic Design', 'juhisirisai@gmail.com', '+919494913736', 'NA', 'https://www.instagram.com/juhi_jasti/', 'https://www.linkedin.com/in/juhijasti2414/', 'juhi_siri_sai_jasti.jpeg'),
('dsc_07', 'Mr. Sai Teja Vankayala', 'Full Stack Developer', '4th CSE', 'Web Development, React, Django, REST API', 'saitejavankayala5@gmail.com', '+91 9182661299', 'https://github.com/saitejavankayala', 'https://www.instagram.com/saitejavankayala/', 'https://www.linkedin.com/in/vankayala-sai-teja-507114152/', 'saiteja_vankayala.jpeg'),
('dsc_08', 'Mr. Venkatesh Muvvala', 'IoT Developer', '4th ECE', 'Cyber Security, AWS, Game Development, HTML, CSS, IoT, Robotics', 'muvvalavenkatesh99@gmail.com', '+91 9121979986', 'NA', 'https://www.instagram.com/venkatesh_muvvala/', 'https://www.linkedin.com/in/venkatesh-muvvala-287150177/', 'venkatesh_muvvala.jpeg');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
