-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2018 at 10:05 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dishapro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`, `status`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '2017-01-24 16:21:18', '26-08-2018 01:32:10 PM', '12');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `e_code` varchar(20) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(6) NOT NULL,
  `c_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `m_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `contact`, `e_code`, `course_name`, `address`, `gender`, `c_date`, `m_date`) VALUES
(1, 'jn', 'g@gmail.com', '84648', 'j2018', 'java', 'D4545', 'm', '2018-04-04 12:22:11', '2018-04-04 12:22:11'),
(11, 'bikash jena', 'hh65', '65', 'K9', 'c++', '556hjvmmmydrcyh', 'male', '2018-04-04 17:27:58', '2018-04-04 17:27:58'),
(13, 'satya', 's@gmail.com', '98098765', 'd1234', 'c#', 'bbsr', 'male', '2018-04-05 11:30:14', '2018-04-05 11:30:14'),
(14, 'satya barik', 'sa@gmail.com', '987788766', 'S234', 'adv.php', 'bbsr<br>', 'male', '2018-04-11 23:11:25', '2018-04-11 23:11:25'),
(15, 'BISWA', 'biswajit110b@gmail.c', '987777888', 'B66', 'PYTHON', 'CTC<br>', 'male', '2018-04-12 11:49:11', '2018-04-12 11:49:11'),
(16, 'ramakanta', 'r@gmail.com', '89076573', 'R123', 'php', 'nomad', 'male', '2018-04-23 13:17:09', '2018-04-23 13:17:09'),
(17, '', 'email', '0', '', '', '', '', '2018-04-25 19:00:56', '2018-04-25 19:00:56'),
(18, 'sukanta das', 'v@gmail.com', '98789990', 'Q1234', 'word press', 'bbsr', 'male', '2018-07-04 11:06:56', '2018-07-04 11:06:56'),
(19, 'subrata', 's@gmail.com', '23654789', 'E234', 'PHP', 'AT/PO-KHORDA', 'male', '2018-08-26 13:33:28', '2018-08-26 13:33:28');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `activationcode` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `postingdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `name`, `email`, `password`, `activationcode`, `status`, `postingdate`) VALUES
(3, 'Anuj', 'anuj.lpu1@gmail.com', 'Test@123', 'e9f2906ad1fda04297593d2095eaf4f7', 1, '2016-08-20 04:13:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
