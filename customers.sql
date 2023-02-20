-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 09:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Sr_No` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Account_Number` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Branch` varchar(30) NOT NULL,
  `Current_Balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Sr_No`, `Name`, `Account_Number`, `Email`, `Branch`, `Current_Balance`) VALUES
(1, 'Rohit', 'XXXX-XXXX-XXXX-0001', 'rohit@xyz.com', 'Mumbai', 50000),
(2, 'Rahul', 'XXXX-XXXX-XXXX-0002', 'rahul@xyz.com', 'Bangalore', 45000),
(3, 'Pujara', 'XXXX-XXXX-XXXX-0003', 'pujara@xyz.com', 'Rajkot', 35000),
(4, 'Kohli', 'XXXX-XXXX-XXXX-0004', 'kohli@xyz.com', 'Delhi', 75000),
(5, 'Surya', 'XXXX-XXXX-XXXX-0005', 'surya@xyz.com', 'Mumbai', 25000),
(6, 'Bharat', 'XXXX-XXXX-XXXX-0006', 'bharat@xyz.com', 'Vishakhapatnam', 40000),
(7, 'Jadeja', 'XXXX-XXXX-XXXX-0007', 'jadeja@xyz.com', 'Rajkot', 35000),
(8, 'Axar', 'XXXX-XXXX-XXXX-0008', 'axar@xyz.com', 'Rajkot', 50000),
(9, 'Ashwin', 'XXXX-XXXX-XXXX-0009', 'ashwin@xyz.com', 'Chennai', 65000),
(10, 'Siraj', 'XXXX-XXXX-XXXX-0010', 'siraj@xyz.com', 'Hyderabad', 30000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Sr_No`),
  ADD UNIQUE KEY `Account_Number` (`Account_Number`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Sr_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
