-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2023 at 01:19 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `apply` varchar(255) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `year` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `apply`, `qualification`, `year`) VALUES
(1, 'amit', '', 'b tech', '2009'),
(16, 'Abhishek', 'developer', 'btech', '2009'),
(17, 'Abhishek', 'developer', 'btech', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(100) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `jdesc` text NOT NULL,
  `skills` text NOT NULL,
  `CTC` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `cname`, `position`, `jdesc`, `skills`, `CTC`) VALUES
(1, 'ibm', 'developer', 'full time web developer', 'html,css', '3-5lpa'),
(33, 'apple', 'developer', 'full time web developer', 'html,css', '3-5lpa'),
(36, 'microsoft', 'developer', 'full time web developer', 'html,css', '3-5lpa'),
(37, 'microsoft', 'developer', 'full time web developer', 'html,css', '3-5lpa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sq no` int(3) NOT NULL,
  `Full name` varchar(20) NOT NULL,
  `Email Address` varchar(20) NOT NULL,
  `phone number` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `confirm password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sq no`, `Full name`, `Email Address`, `phone number`, `password`, `confirm password`) VALUES
(34, '09508453530', 'abhi2020arya@gmail.c', '09508453530', 'abc', 'abc'),
(35, '09508453530', 'abhi2020arya@gmail.c', '09508453530', 'abc', 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sq no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sq no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
