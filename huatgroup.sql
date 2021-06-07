-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 07, 2021 at 01:17 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `huatgroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `AnswerID` int(11) NOT NULL AUTO_INCREMENT,
  `Answer` varchar(255) DEFAULT NULL,
  `EnquiryID` int(11) DEFAULT NULL,
  `AnsweredBy` varchar(50) DEFAULT NULL,
  `Part-timerID` int(11) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`AnswerID`),
  KEY `EnquiryID` (`EnquiryID`),
  KEY `Username` (`AnsweredBy`),
  KEY `Part-timerID` (`Part-timerID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`AnswerID`, `Answer`, `EnquiryID`, `AnsweredBy`, `Part-timerID`, `Date`) VALUES
(1, 'you can add through the forum site', 1, 'Ali', NULL, '2020-02-01 20:25:06'),
(2, 'just go into see more--> and make a reply', 1, 'Ali', 2, '2020-02-01 20:25:06'),
(3, 'ok thanks for the information', 1, 'rich', NULL, '2020-02-04 04:21:27'),
(4, 'you can find at the home page ', 2, 'rich', NULL, '2020-02-04 04:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `applicationid`
--

DROP TABLE IF EXISTS `applicationid`;
CREATE TABLE IF NOT EXISTS `applicationid` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `JobID` int(11) DEFAULT NULL,
  `Part-timerID` int(11) DEFAULT NULL,
  `Application_Status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `JobID` (`JobID`),
  KEY `Part-timerID` (`Part-timerID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicationid`
--

INSERT INTO `applicationid` (`ID`, `JobID`, `Part-timerID`, `Application_Status`) VALUES
(1, 1, 1, 'Pending'),
(5, 1, 2, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE IF NOT EXISTS `enquiry` (
  `EnquiryID` int(11) NOT NULL AUTO_INCREMENT,
  `Enquiry` varchar(255) DEFAULT NULL,
  `Description` varchar(3000) NOT NULL,
  `Part-timerID` int(11) DEFAULT NULL,
  `Date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Username` varchar(50) NOT NULL,
  PRIMARY KEY (`EnquiryID`),
  KEY `Part-timerID` (`Part-timerID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`EnquiryID`, `Enquiry`, `Description`, `Part-timerID`, `Date`, `Username`) VALUES
(1, 'Where can i add my comment?', 'i cant add the comment ', 1, '2020-01-29 16:00:00', ''),
(2, 'where i can find the job?', 'i cant find job', 1, '2020-01-26 16:00:00', 'rich'),
(3, 'where shall i contact the manager?', 'i cant find the contact number', 7, '2020-02-04 16:35:17', 'daddy');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
CREATE TABLE IF NOT EXISTS `job` (
  `JobID` int(11) NOT NULL AUTO_INCREMENT,
  `JobTitle` varchar(50) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `Job_type` varchar(50) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Job_Status` varchar(50) DEFAULT NULL,
  `Part-timer_needed` int(11) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`JobID`),
  KEY `Username` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`JobID`, `JobTitle`, `location`, `salary`, `date`, `Job_type`, `Description`, `Job_Status`, `Part-timer_needed`, `Username`) VALUES
(1, 'Tuition teacher', 'Sunway Pyramid', 100, '2020-02-01', 'Event Crew', 'Sell ice cream', 'Completed', 3, 'Ali'),
(2, 'test 2', 'Mid valley', 130, '2020-12-22', 'Event crrew', 'Control crowd', 'Completed', 3, 'Ali'),
(5, 'Body promoter', ' vietnam', 112, '2020-02-01', 'Event Crew', 'lol', 'Completed', 3, 'Ali'),
(7, 'Promoter', 'Sunway Pyramid', 50, '2020-02-25', 'Waiter', 'details', 'Completed', 3, 'Ali'),
(8, 'sadfsadf', 'fsaf', 133, '2020-04-09', 'sdf', 'fds', 'Completed', 2, 'sdf'),
(9, 'sdf', 'sdf', 233, '2020-01-01', 'sdfds', 'sfsfs', 'Completed', 3, 'sfsf'),
(10, 'sadfsadf', 'fsaf', 133, '2020-01-24', 'sdf', 'fds', 'Completed', 2, 'sdf'),
(11, 'sdf', 'sdf', 233, '2020-05-14', 'sdfds', 'sfsfs', 'Completed', 3, 'sfsf'),
(12, 'sadfsadf', 'fsaf', 133, '2020-07-07', 'sdf', 'fds', 'Completed', 2, 'sdf'),
(13, 'sdf', 'sdf', 233, '2020-06-14', 'sdfds', 'sfsfs', 'Completed', 3, 'sfsf'),
(14, 'sdf', 'sdf', 233, '2020-08-14', 'sdfds', 'sfsfs', 'Completed', 3, 'sfsf'),
(15, 'sdf', 'sdf', 233, '2020-09-14', 'sdfds', 'sfsfs', 'Completed', 3, 'sfsf'),
(16, 'sdf', 'sdf', 233, '2020-10-14', 'sdfds', 'sfsfs', 'Completed', 3, 'sfsf'),
(17, 'sdf', 'sdf', 233, '2020-11-14', 'sdfds', 'sfsfs', 'Completed', 3, 'sfsf'),
(18, 'Dizzy Casting1', ' Puchong1', 60, '2020-02-16', 'Waiter', 'abc', 'Completed', 2, 'rich'),
(19, 'Car Promoter1', ' BukitJalil1', 50, '2020-02-01', 'Waiter', '123', 'Completed', 2, 'rich');

-- --------------------------------------------------------

--
-- Table structure for table `part-timer`
--

DROP TABLE IF EXISTS `part-timer`;
CREATE TABLE IF NOT EXISTS `part-timer` (
  `Part-TimerID` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(255) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `PhoneNumber` int(11) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'Active',
  `About` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Part-TimerID`),
  KEY `Username` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part-timer`
--

INSERT INTO `part-timer` (`Part-TimerID`, `FullName`, `Gender`, `Email`, `PhoneNumber`, `Username`, `Status`, `About`, `Address`) VALUES
(1, 'Thanesh bin Raju', 'Male', 'asarasensei@gmail.com', 123456789, 'Thanesh', 'Suspended', '', ''),
(2, 'Burma', 'Female', 'asarasensei@gmail.com', 1123456789, 'IpMan', 'Active', '', ''),
(5, 'Soh De Hui', 'Male', 'nicsonsoh.sdh@gmail.com', 129323338, 'Nic', 'Suspended', '', ''),
(6, 'Hong Jun Khuan', 'Male', 'hongjunkhuan@gmail.com', 129999999, 'J.Khuan', 'Suspended', '', ''),
(7, 'daddy', 'Male', 'asarasensei@gmail.com', 122939572, 'daddy', 'Active', 'Hello nice to meet you', 'Seri Kembangan'),
(8, 'Carmen', 'Male', 'carmencb@gmail.com', 162563263, 'Carmen', 'Active', '', ''),
(9, 'Hot', 'Male', 'nicsonsoh.sdh@gmail.com', 122939572, 'Hot', 'Active', NULL, NULL),
(10, 'Nicson', 'Male', 'nicsonsoh.sdh@gmail.com', 176817033, 'Hongy', 'Active', NULL, NULL),
(11, 'wei cong', 'Male', 'asarasensei@gmail.com', 999, 'congbabe', 'Active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `part-timer_payment`
--

DROP TABLE IF EXISTS `part-timer_payment`;
CREATE TABLE IF NOT EXISTS `part-timer_payment` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `JobID` int(11) DEFAULT NULL,
  `Part-timerID` int(11) DEFAULT NULL,
  `Payment_Status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `PaymentID_2` (`JobID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=365 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part-timer_payment`
--

INSERT INTO `part-timer_payment` (`ID`, `JobID`, `Part-timerID`, `Payment_Status`) VALUES
(265, 1, 1, 'Pending'),
(266, 1, 1, 'Pending'),
(267, 1, 1, 'Pending'),
(268, 1, 1, 'Pending'),
(269, 1, 1, 'Pending'),
(270, 1, 1, 'Pending'),
(271, 1, 1, 'Pending'),
(272, 1, 1, 'Pending'),
(273, 1, 1, 'Pending'),
(274, 1, 1, 'Pending'),
(275, 1, 1, 'Pending'),
(276, 1, 1, 'Pending'),
(277, 1, 1, 'Pending'),
(278, 1, 1, 'Pending'),
(279, 1, 1, 'Pending'),
(280, 1, 1, 'Pending'),
(281, 1, 1, 'Pending'),
(282, 1, 1, 'Pending'),
(283, 1, 1, 'Pending'),
(284, 1, 1, 'Pending'),
(285, 1, 1, 'Pending'),
(286, 1, 1, 'Pending'),
(287, 1, 1, 'Pending'),
(288, 1, 1, 'Pending'),
(289, 1, 1, 'Pending'),
(290, 1, 1, 'Pending'),
(291, 1, 1, 'Pending'),
(292, 1, 1, 'Pending'),
(293, 1, 1, 'Pending'),
(294, 1, 1, 'Pending'),
(295, 1, 1, 'Pending'),
(296, 1, 1, 'Pending'),
(297, 1, 1, 'Pending'),
(298, 1, 1, 'Pending'),
(299, 1, 1, 'Pending'),
(300, 1, 1, 'Pending'),
(301, 1, 1, 'Pending'),
(302, 1, 1, 'Pending'),
(303, 1, 1, 'Pending'),
(304, 1, 1, 'Pending'),
(305, 1, 1, 'Pending'),
(306, 1, 1, 'Pending'),
(307, 1, 1, 'Pending'),
(308, 1, 1, 'Pending'),
(309, 1, 1, 'Pending'),
(310, 1, 2, 'Pending'),
(311, 1, 2, 'Pending'),
(312, 1, 2, 'Pending'),
(313, 1, 2, 'Pending'),
(314, 1, 2, 'Pending'),
(315, 1, 2, 'Pending'),
(316, 1, 2, 'Pending'),
(317, 1, 2, 'Pending'),
(318, 1, 2, 'Pending'),
(319, 1, 2, 'Pending'),
(320, 1, 2, 'Pending'),
(321, 1, 2, 'Pending'),
(322, 1, 2, 'Pending'),
(323, 1, 2, 'Pending'),
(324, 1, 2, 'Pending'),
(325, 1, 2, 'Pending'),
(326, 1, 2, 'Pending'),
(327, 1, 2, 'Pending'),
(328, 1, 2, 'Pending'),
(329, 1, 2, 'Pending'),
(330, 1, 2, 'Pending'),
(331, 1, 2, 'Pending'),
(332, 1, 2, 'Pending'),
(333, 1, 2, 'Pending'),
(334, 1, 2, 'Pending'),
(335, 1, 2, 'Pending'),
(336, 1, 2, 'Pending'),
(337, 1, 2, 'Pending'),
(338, 1, 2, 'Pending'),
(339, 1, 2, 'Pending'),
(340, 1, 2, 'Pending'),
(341, 1, 2, 'Pending'),
(342, 1, 2, 'Pending'),
(343, 1, 2, 'Pending'),
(344, 1, 2, 'Pending'),
(345, 1, 2, 'Pending'),
(346, 1, 2, 'Pending'),
(347, 1, 2, 'Pending'),
(348, 1, 2, 'Pending'),
(349, 1, 2, 'Pending'),
(350, 1, 2, 'Pending'),
(351, 1, 2, 'Pending'),
(352, 1, 2, 'Pending'),
(353, 1, 2, 'Pending'),
(354, 1, 2, 'Pending'),
(355, 1, 1, 'Pending'),
(356, 1, 2, 'Pending'),
(357, 1, 1, 'Pending'),
(358, 1, 2, 'Pending'),
(359, 1, 1, 'Pending'),
(360, 1, 2, 'Pending'),
(361, 1, 1, 'Pending'),
(362, 1, 2, 'Pending'),
(363, 1, 1, 'Pending'),
(364, 1, 2, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `PaymentID` int(11) NOT NULL AUTO_INCREMENT,
  `JobID` int(11) DEFAULT NULL,
  `Due_date` date DEFAULT NULL,
  `Status` varchar(50) NOT NULL,
  PRIMARY KEY (`PaymentID`),
  KEY `JobID` (`JobID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentID`, `JobID`, `Due_date`, `Status`) VALUES
(1, 1, '2020-01-21', 'Pending'),
(2, 5, '2020-02-14', 'Completed'),
(5, 2, '2002-04-20', 'Completed'),
(6, 9, '2020-02-01', 'Completed'),
(10, 10, '2020-02-04', 'Completed'),
(16, 9, '2020-02-01', 'Completed'),
(17, 19, '2020-03-01', 'Completed'),
(18, 10, '2020-02-24', 'Completed'),
(19, 7, '2020-03-25', 'Completed'),
(20, 11, '2020-06-14', 'Completed'),
(21, 12, '2020-08-07', 'Completed'),
(22, 13, '2020-07-14', 'Completed'),
(23, 14, '2020-09-14', 'Completed'),
(24, 15, '2020-10-14', 'Completed'),
(25, 16, '2020-11-14', 'Completed'),
(26, 17, '2020-12-14', 'Completed'),
(27, 18, '2020-03-16', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `RatingID` int(11) NOT NULL AUTO_INCREMENT,
  `Rating_Score` int(50) DEFAULT NULL,
  `Part-timerID` int(11) DEFAULT NULL,
  `JobID` int(11) DEFAULT NULL,
  PRIMARY KEY (`RatingID`),
  KEY `Part-timerID` (`Part-timerID`),
  KEY `JobID` (`JobID`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`RatingID`, `Rating_Score`, `Part-timerID`, `JobID`) VALUES
(64, 3, 7, 5),
(63, 3, 2, 5),
(62, 1, 1, 5),
(61, 3, 7, 1),
(60, 2, 2, 1),
(59, 2, 1, 1),
(58, 2, 6, 10),
(57, 2, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

DROP TABLE IF EXISTS `userdata`;
CREATE TABLE IF NOT EXISTS `userdata` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Role` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`Username`, `Password`, `Role`, `Email`) VALUES
('Thanesh', '81dc9bdb52d04dc20036dbd8313ed055', '1', NULL),
('IpMan', '2345', '1', NULL),
('Nic', '1234', '3', NULL),
('J.khuan', '1234', '1', NULL),
('rich', '81dc9bdb52d04dc20036dbd8313ed055', '3', 'asarasensei@gmail.com'),
('daddy', '093ec71f562ba6cbf5825b7c9a48f19e', '2', 'asarasensei@gmail.com'),
('sugarbaby', '81dc9bdb52d04dc20036dbd8313ed055', '2', 'sugarbaby@gmail.com'),
('Bomb', '202cb962ac59075b964b07152d234b70', '3', 'nicsonsoh.sdh@gmail.com'),
('rrr', '81dc9bdb52d04dc20036dbd8313ed055', '3', 'nicsonsoh.sdh@gmail.com'),
('Hot', '202cb962ac59075b964b07152d234b70', '1', 'nicsonsoh.sdh@gmail.com'),
('Hongy', '202cb962ac59075b964b07152d234b70', '1', 'nicsonsoh.sdh@gmail.com'),
('congbabe', 'e10adc3949ba59abbe56e057f20f883e', '2', 'asarasensei@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `working_experience`
--

DROP TABLE IF EXISTS `working_experience`;
CREATE TABLE IF NOT EXISTS `working_experience` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Job_type` varchar(50) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Part-timerID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `Part-timerID` (`Part-timerID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `part-timer_payment`
--
ALTER TABLE `part-timer_payment`
  ADD CONSTRAINT `part-timer_payment_ibfk_1` FOREIGN KEY (`JobID`) REFERENCES `payment` (`PaymentID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`JobID`) REFERENCES `job` (`JobID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
