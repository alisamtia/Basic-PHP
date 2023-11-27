-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 11:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkbox_st`
--

CREATE TABLE `checkbox_st` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `languages` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkbox_st`
--

INSERT INTO `checkbox_st` (`id`, `name`, `languages`) VALUES
(1, 'PHP,Python,JavaScript', 'Muhammad Ali'),
(2, 'PHP,Java,JavaScript', 'Atiq Samtia');

-- --------------------------------------------------------

--
-- Table structure for table `country_tb`
--

CREATE TABLE `country_tb` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `country_tb`
--

INSERT INTO `country_tb` (`cid`, `cname`) VALUES
(1, 'India'),
(2, 'Pakistan'),
(3, 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `state_tb`
--

CREATE TABLE `state_tb` (
  `sid` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `state_tb`
--

INSERT INTO `state_tb` (`sid`, `sname`, `country`) VALUES
(1, 'Haryana', 1),
(2, 'Gujrat', 1),
(3, 'Uttar Pradesh', 1),
(4, 'Maharashtra', 1),
(5, 'Rajasthan', 1),
(6, 'Madhya Pradesh', 1),
(7, 'Balochistan', 2),
(8, 'Punjab', 2),
(9, 'Sindh', 2),
(10, 'Barisal', 3),
(11, 'Chittagong', 3),
(12, 'Dhaka', 3),
(13, 'Khulna', 3),
(14, 'KPK', 2),
(15, 'Gilgit', 2);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `dob` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `city`, `dob`) VALUES
(1, 'Yahoo Baba', 'Delhi', '08/28/1995'),
(2, 'Salman Khan', 'Agra', '01/20/2002'),
(3, 'Shahid Kapoor', 'Bhopal', '10/03/1932'),
(4, 'Juhi Chawla', 'Delhi', '06/16/1965'),
(5, 'Anil Kapoor', 'Mumbai', '04/10/1972'),
(6, 'Ram Kumar', 'Goa', '11/25/2004'),
(7, 'Kumar Sanu', 'Delhi', '12/08/2010'),
(8, 'Sonu Nigam', 'Mumbai', '12/24/1964'),
(9, 'John Abraham', 'Agra', '08/10/1995');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `file_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `file_name`) VALUES
(1, '439878690.p'),
(2, '1187846212.'),
(3, '1448979532.'),
(4, '28267741.jp'),
(5, '149886070.j'),
(6, '740548296.j');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkbox_st`
--
ALTER TABLE `checkbox_st`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_tb`
--
ALTER TABLE `country_tb`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `state_tb`
--
ALTER TABLE `state_tb`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkbox_st`
--
ALTER TABLE `checkbox_st`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `country_tb`
--
ALTER TABLE `country_tb`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state_tb`
--
ALTER TABLE `state_tb`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
