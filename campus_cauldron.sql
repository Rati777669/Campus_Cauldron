-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 04:34 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus_cauldron`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(55) CHARACTER SET latin1 NOT NULL,
  `password` varchar(30) CHARACTER SET latin1 NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminname`, `email`, `password`, `id`) VALUES
('Mahima Rai', 'raimahima@gmail.com', '3456', 4),
('Kshitij Sharma', 'riyashukla0907@gmail.com', '3456', 5),
('Mahima Rai', 'raimuskan101@gmail.com', 'mahi', 6),
('Rati Gupta', 'guptarati2001@gmail.com', '1234', 7),
('Katlkar', 'sharmakshitij250@gmail.com', '123', 8);

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `club_id` int(11) NOT NULL,
  `club_name` varchar(255) NOT NULL,
  `club_logo` mediumblob NOT NULL,
  `club_info` varchar(255) NOT NULL,
  `club_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`club_id`, `club_name`, `club_logo`, `club_info`, `club_link`) VALUES
(5, 'LSC', 0x313630373333363338344c53432e6a7067, 'for writing ', 'bk.nvb.nk'),
(6, 'CODE', 0x31363037333339373935434f44452e706e67, 'Club Of DEvelopers', 'code-biet.co'),
(7, 'Sports Subcouncil', 0x313630373334303132375353432e6a7067, 'Sports', 'vnc.snv'),
(8, 'The drone Learners', 0x3136303733343032313054444c2e6a7067, 'drone', 'tdl.com');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `council_name` varchar(255) NOT NULL,
  `event_date` varchar(255) NOT NULL,
  `event_link` varchar(255) NOT NULL,
  `event_info` varchar(255) NOT NULL,
  `event_img` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `council_name`, `event_date`, `event_link`, `event_info`, `event_img`) VALUES
(8, 'Abhinandan', 'CSC', '5/9/2020', 'abhinandan.com', 'welcome fest', 0x31363037333436353639696d6731302e6a7067),
(9, 'Sopaan', 'LSC', '25/1/2021', 'sopaan.in', 'A literary fest', 0x31363037333438313437696d67372e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `question`, `answer`) VALUES
(1, 'Is this a good question?', 'This is an answer.'),
(2, 'Is this a good question?', 'This is an answer.'),
(3, 'question', 'answer'),
(4, 'Why do you love samosa?', 'Because it is pyramidal in shape.');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `date` varchar(20) NOT NULL,
  `npdf` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `title`, `date`, `npdf`) VALUES
(2, 'Exams', '04/03/2021', ''),
(8, 'something', '22/11/2222', '1607094665'),
(9, 'Samosa', '22/2/2000', '1607170404'),
(10, 'Announcement of vacations', '29/3/2021', '1607336469Fresher Non IT Jobs dec 4.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `q_and_a`
--

CREATE TABLE `q_and_a` (
  `id` int(5) NOT NULL,
  `question` varchar(2000) NOT NULL,
  `ques_approved` tinyint(1) DEFAULT NULL,
  `ques_answered` tinyint(1) NOT NULL,
  `answer` varchar(10000) NOT NULL,
  `ans_approved` tinyint(1) DEFAULT NULL,
  `ans_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `q_and_a`
--

INSERT INTO `q_and_a` (`id`, `question`, `ques_approved`, `ques_answered`, `answer`, `ans_approved`, `ans_by`) VALUES
(1, 'Who handles data in BIET?', 1, 1, 'Not a particular person .It changes every year.', 1, ''),
(10, 'Where is director\'s chamber?', NULL, 0, 'NULL', 0, ''),
(11, 'Where is director\'s chamber?', NULL, 0, 'Near Mech dept.', 1, ''),
(12, 'fnwoebfibf jwebfibwefbw kebnfbwfn', NULL, 0, '', NULL, ''),
(13, 'jcvksagdksg scnhbc, bchshc', NULL, 0, '', NULL, ''),
(14, 'what is ur name?', NULL, 1, 'wb rb r rbf fmnb', 1, 'Muskan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(20) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `password`, `phone`) VALUES
(1, 'Muskan', 'raimuskan101@gmail.com', 'mahi', 2147483647),
(2, 'Ashutosh', 'dwivedi.ash007@gmail.com', 'ashu', 2147483647),
(3, 'Barfi', 'barfi@gmail.com', 'barfi', 2147483647),
(4, 'Samose ke Chacha', 'samosekiid@gmail.com', 'samosa', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `q_and_a`
--
ALTER TABLE `q_and_a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `club_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `q_and_a`
--
ALTER TABLE `q_and_a`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
