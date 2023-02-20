-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 09:20 AM
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
-- Table structure for table `transfer_history`
--

CREATE TABLE `transfer_history` (
  `Tr_No` int(11) NOT NULL,
  `s_name` varchar(40) NOT NULL,
  `s_account` varchar(40) NOT NULL,
  `r_name` varchar(40) NOT NULL,
  `r_account` varchar(40) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transfer_history`
--

INSERT INTO `transfer_history` (`Tr_No`, `s_name`, `s_account`, `r_name`, `r_account`, `amount`) VALUES
(1, 'Pujara', 'XXXX-XXXX-XXXX-0003', 'Rohit', 'XXXX-XXXX-XXXX-0001', 3000),
(2, 'Rohit', 'XXXX-XXXX-XXXX-0001', 'Jadeja', 'XXXX-XXXX-XXXX-0007', 4340),
(3, 'Kohli', 'XXXX-XXXX-XXXX-0004', 'Surya', 'XXXX-XXXX-XXXX-0005', 25000),
(4, 'Kohli', 'XXXX-XXXX-XXXX-0004', 'Bharat', 'XXXX-XXXX-XXXX-0006', 1000),
(5, 'Rahul', 'XXXX-XXXX-XXXX-0002', 'Bharat', 'XXXX-XXXX-XXXX-0006', 10000),
(6, 'Jadeja', 'XXXX-XXXX-XXXX-0007', 'Kohli', 'XXXX-XXXX-XXXX-0004', 3600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transfer_history`
--
ALTER TABLE `transfer_history`
  ADD PRIMARY KEY (`Tr_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transfer_history`
--
ALTER TABLE `transfer_history`
  MODIFY `Tr_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
