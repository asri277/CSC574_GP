-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2022 at 10:08 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(6) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_phoneno` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_email`, `cust_phoneno`, `username`, `password`) VALUES
(1, 'MUHAMMAD ASRI BIN MOHD ALI', 'asriuitm27@gmail.com', '0195963751', 'asri', 'asriali123'),
(2, 'Asri Ali', 'asriuitm27@gmail.com', '0195963751', 'clontrixs', 'cubaan123');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(6) NOT NULL,
  `movie_name` varchar(50) NOT NULL,
  `movie_date` date NOT NULL,
  `movie_category` varchar(15) NOT NULL,
  `movie_language` varchar(15) NOT NULL,
  `movie_length` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_name`, `movie_date`, `movie_category`, `movie_language`, `movie_length`) VALUES
(1, 'SPIDER-MAN NO WAY HOME', '2022-01-21', 'ACTION', 'ENGLISH', '2 HOURS'),
(2, 'DISNEY - ENCANTO', '2022-01-22', 'CARTOON', 'ENGLISH', '2 HOURS'),
(3, 'ILLUMINATION - SING 2', '2022-01-23', 'CARTOON', 'ENGLISH', '2 HOURS'),
(4, 'SCREAM', '2022-01-14', 'HORROR', 'ENGLISH', '2 HOURS'),
(5, 'RESIDENT EVIL', '2022-11-24', 'HORROR', 'ENGLISH', '2 HOURS'),
(6, 'THE MATRIX RESURRECTIONS', '2022-01-25', 'ACTION', 'ENGLISH', '2 HOURS');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(6) NOT NULL,
  `cust_id` int(6) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `payment_total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `cust_id`, `payment_type`, `payment_total`) VALUES
(1, 1, 'VISA', '13.00'),
(2, 1, 'ONLINE BANKING', '21.00'),
(3, 1, 'ONLINE BANKING', '21.00'),
(4, 1, 'ONLINE BANKING', '21.00'),
(5, 1, 'ONLINE BANKING', '21.00'),
(6, 1, 'VISA', '21.00'),
(7, 1, 'ONLINE BANKING', '21.00'),
(8, 1, 'ONLINE BANKING', '14.00'),
(9, 2, 'ONLINE BANKING', '7.00'),
(10, 2, 'ONLINE BANKING', '7.00');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(6) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `staff_email` varchar(50) NOT NULL,
  `staff_phoneno` varchar(15) NOT NULL,
  `staff_address` varchar(100) NOT NULL,
  `staff_username` varchar(20) NOT NULL,
  `staff_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_email`, `staff_phoneno`, `staff_address`, `staff_username`, `staff_password`) VALUES
(1, 'MUHAMMAD ASRI BIN MOHD ALI', 'asriuitm27@gmail.com', '0195963751', 'LOT 80A SUNGAI ROKAM IPOH PERAK', 'admin', 'cubaan123');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(6) NOT NULL,
  `movie_id` int(6) NOT NULL,
  `cust_id` int(6) NOT NULL,
  `show_time` varchar(50) NOT NULL,
  `theater_room` varchar(5) NOT NULL,
  `seat_no` varchar(50) NOT NULL,
  `no_of_cust` int(3) NOT NULL,
  `ticket_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `movie_id`, `cust_id`, `show_time`, `theater_room`, `seat_no`, `no_of_cust`, `ticket_date`) VALUES
(6, 1, 1, '10:00 AM - 12:00 PM', 'R01', 'A01A02A03', 3, '2022-01-21'),
(7, 2, 1, '3:00 PM - 5:00 PM', 'R02', 'A03/A04/A0', 3, '2022-01-21'),
(8, 3, 1, '10:00 PM - 12:00 AM', 'R03', 'A07/A08/A0', 3, '2022-01-21'),
(9, 4, 1, '3:00 PM - 5:00 PM', 'R04', 'A04/A05/A10', 3, '2022-01-21'),
(10, 5, 1, '10:00 AM - 12:00 PM', 'R05', 'A02/A06/A07/', 3, '2022-01-21'),
(11, 1, 1, '10:00 AM - 12:00 PM', 'R01', 'A01/A03/A07/', 3, '2022-01-31'),
(12, 3, 1, '3:00 PM - 5:00 PM', 'R03', 'A03/A04/A05/', 3, '2022-01-31'),
(13, 3, 1, '10:00 PM - 12:00 AM', 'R03', 'A04/A05/', 2, '2022-01-31'),
(14, 1, 2, '10:00 AM - 12:00 PM', 'R01', 'A07/', 1, '2022-01-31'),
(15, 2, 2, '10:00 AM - 12:00 PM', 'R02', 'A06/', 1, '2022-01-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `cust_id_fk_payment` (`cust_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `movie_id_fk_ticket` (`movie_id`),
  ADD KEY `cust_id_fk_ticket` (`cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `cust_id_fk_payment` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `cust_id_fk_ticket` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `movie_id_fk_ticket` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
