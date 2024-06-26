-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2023 at 07:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pande_game_reserve`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `adult` int(250) NOT NULL,
  `child` int(250) NOT NULL,
  `start_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `end_date` datetime(6) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `customer_id`, `adult`, `child`, `start_date`, `end_date`, `status`) VALUES
(11, 7, 2, 1, '2023-08-29 12:00:00.000000', '2023-08-31 00:00:00.000000', 1),
(12, 8, 3, 2, '2023-08-31 12:00:00.000000', '2023-09-01 00:00:00.000000', 1),
(13, 9, 2, 2, '2023-08-04 12:00:00.000000', '2023-09-01 00:00:00.000000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `campsites`
--

CREATE TABLE `campsites` (
  `campsite_id` int(11) NOT NULL,
  `campsite_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `capacity` int(20) NOT NULL,
  `price` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campsites`
--

INSERT INTO `campsites` (`campsite_id`, `campsite_name`, `location`, `capacity`, `price`) VALUES
(1, 'pande ', 'mabwepande', 15, '30000'),
(2, 'pande camp ', 'mabwepande', 17, '40000');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `first_name`, `last_name`, `email`, `phone`, `password`, `user_type`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '0744430216', 'admin', 'admin'),
(2, 'arafa', 'miraji', 'arafa@gmail.com', '07532987', '1234', 'customer'),
(9, 'asha', 'salum', 'asha@gmail.com', '067355356', '900', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `campsites`
--
ALTER TABLE `campsites`
  ADD PRIMARY KEY (`campsite_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `campsites`
--
ALTER TABLE `campsites`
  MODIFY `campsite_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
