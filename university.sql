-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 11:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s.no` int(11) NOT NULL,
  `SNAME` varchar(20) NOT NULL,
  `SID` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PHONE` int(10) NOT NULL,
  `COURSE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s.no`, `SNAME`, `SID`, `EMAIL`, `PHONE`, `COURSE`) VALUES
(1, 'user', '123', 'user@gmail.com', 78965412, 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `flag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userid`, `username`, `password`, `flag`) VALUES
(1, 'HU21CSEN0101929', 'Chinmayi', 'Dchinmayi@2003', 'Show'),
(2, 'HU21CSEN0101910', 'Pranav', '12345', 'Show'),
(3, 'HU21CSEN0101911', 'Aishwarya', '12345', 'Show'),
(4, 'HU21CSEN0101912', 'Ajay Kumar', '12345', 'Show'),
(5, 'HU21CSEN0101913', 'Vaishnavi', '12345', 'Show'),
(6, 'HU21CSEN0101914', 'Deepika', '12345', 'Show'),
(7, 'HU21CSEN0101915', 'Rakshitha', '12345', 'Show'),
(8, 'HU21CSEN0101916', 'Abhishek', '12345', 'Show'),
(9, 'HU21CSEN0101917', 'Archana', '12345', 'Show'),
(10, 'HU21CSEN0101918', 'Pradeepthi', '12345', 'Show'),
(11, 'HU21CSEN0101919', 'Dinakar', '12345', 'Show'),
(12, 'HU21CSEN0101920', 'Harish', '12345', 'Show'),
(13, 'HU21CSEN0101921', 'Aditya', '12345', 'Show'),
(14, 'HU21CSEN0101922', 'Sri Vani', '12345', 'Show'),
(15, 'HU21CSEN0101923', 'Ashish', '12345', 'Show'),
(16, 'HU21CSEN0101924', 'Uday', '12345', 'Show'),
(17, 'HU21CSEN0101925', 'Sai Ram', '12345', 'Show'),
(18, 'HU21CSEN0101926', 'Madhu', '12345', 'Show'),
(19, 'HU21CSEN0101927', 'Sai Krishna', '12345', 'Show'),
(20, 'HU21CSEN0101928', 'Shiva', '12345', 'Show'),
(21, 'HU21CSEN0101930', 'Ayush', '12345', 'Show');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
