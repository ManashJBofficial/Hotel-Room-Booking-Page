-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 06:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dc2019mca0009`
--

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE `room_details` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `g_no` int(10) NOT NULL,
  `c_in` date NOT NULL,
  `c_out` date NOT NULL,
  `r_type` text NOT NULL,
  `r_num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_details`
--

INSERT INTO `room_details` (`id`, `name`, `phone`, `email`, `g_no`, `c_in`, `c_out`, `r_type`, `r_num`) VALUES
(44, 'Nimisha Sharma', 9987678642, 'nimisha@gmail.com', 4, '2020-05-29', '2020-06-04', 'VIP', 2),
(77, 'Manash Jyoti Baruah', 8638043876, 'mjbaruah9@gmail.com', 3, '2020-05-28', '2020-05-30', 'Deluxe', 2),
(166, 'Nimisha Sharma', 9987678642, 'nimisha@gmail.com', 4, '2020-05-29', '2020-06-04', 'VIP', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `room_details`
--
ALTER TABLE `room_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room_details`
--
ALTER TABLE `room_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
