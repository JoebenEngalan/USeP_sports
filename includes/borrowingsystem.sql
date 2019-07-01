-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2019 at 04:53 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `borrowingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Datelogs` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_ID`, `Name`, `Password`, `Datelogs`) VALUES
(1, 'Admin_sports', 'sports1234', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `borrower_table`
--

CREATE TABLE `borrower_table` (
  `Borrower_ID` int(100) NOT NULL,
  `FirstName` varchar(100) DEFAULT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `ContactNumber` int(50) DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `Position` varchar(50) DEFAULT NULL,
  `EmailID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `BorrowPage`
--

CREATE TABLE `BorrowPage` (
  `Item_borrowed` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_table`
--

CREATE TABLE `staff_table` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(100) DEFAULT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `ContactNumber` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_table`
--

INSERT INTO `staff_table` (`id`, `FirstName`, `LastName`, `Email`, `Password`, `ContactNumber`) VALUES
(1, 'shaira', 'celerian', 'shai@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(2, 'simplyn', 'madula', 'madula@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `borrower_table`
--
ALTER TABLE `borrower_table`
  ADD PRIMARY KEY (`Borrower_ID`);

--
-- Indexes for table `staff_table`
--
ALTER TABLE `staff_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_table`
--
ALTER TABLE `staff_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
