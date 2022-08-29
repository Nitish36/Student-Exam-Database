-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 12:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examination_database`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `mystudent` ()  SELECT * FROM student$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `BRANCHID` int(11) NOT NULL,
  `BRANCHNAME` varchar(255) DEFAULT NULL,
  `SEMESTER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `SUBJECTCODE` varchar(20) DEFAULT NULL,
  `EXAMDATE` date DEFAULT NULL,
  `TIMING` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`SUBJECTCODE`, `EXAMDATE`, `TIMING`) VALUES
('1CS', '2022-02-09', '09:30:00'),
('18CS51', '2022-12-02', '09:30:00'),
('18CS52', '2022-02-22', '09:30:00'),
('18CS53', '2022-02-25', '09:30:00'),
('18CS54', '2022-03-04', '09:30:00'),
('18CS55', '2022-03-10', '09:30:00'),
('18CS56', '2022-03-16', '09:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `USN` varchar(11) DEFAULT NULL,
  `SUBJECTCODE` varchar(10) DEFAULT NULL,
  `MARKS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`USN`, `SUBJECTCODE`, `MARKS`) VALUES
('1', '1CS', 90),
('1', '1CS', 100);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `USN` varchar(11) NOT NULL,
  `STUDENT_NAME` varchar(30) DEFAULT NULL,
  `GENDER` char(1) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `BRANCHID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`USN`, `STUDENT_NAME`, `GENDER`, `EMAIL`, `DOB`, `BRANCHID`) VALUES
('1RN19CS001', 'Abhay', 'm', 'abhay@gmail.com', '2001-11-11', 2),
('1RN19CS002', 'Akshay', 'm', 'akshay@gmail.com', '2001-02-03', 2),
('1RN19CS003', 'Ankith', 'm', 'ankith@gmail.com', '2001-03-03', 1),
('1RN19CS004', 'Bhavana', 'f', 'bhavana@gmail.com', '2000-03-05', 1),
('1RN19CS005', 'Bhuvan', 'm', 'bhuvan@gmail.com', '2000-02-02', 2),
('1RN19CS006', 'Kiran', 'm', 'kiran@gmail.com', '2001-01-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SUBJECTCODE` varchar(10) NOT NULL,
  `SUBJECTNAME` varchar(50) DEFAULT NULL,
  `CREDIT` int(11) DEFAULT NULL,
  `BRANCHID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`BRANCHID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SUBJECTCODE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
