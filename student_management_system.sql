-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 09:47 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(99) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `PhoneNumber` varchar(14) NOT NULL,
  `Class` text NOT NULL,
  `Subject` text NOT NULL,
  `School` text NOT NULL,
  `Address` text NOT NULL,
  `Birth_Date` date NOT NULL,
  `Gender` text NOT NULL,
  `T_Gender` text NOT NULL,
  `Additional_Information` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Email`, `PhoneNumber`, `Class`, `Subject`, `School`, `Address`, `Birth_Date`, `Gender`, `T_Gender`, `Additional_Information`) VALUES
(3, ' israt jahan', 'israt.jahan3058@gmail.com', '0178564658', 'bba', 'web tech', 'NSU', 'Badda', '2021-04-09', 'Female', 'Male', '123'),
(4, ' israt jahan', 'israt.jahan3058@gmail.com', '0178564658', 'bba', 'web tech', 'NSU', 'Badda', '2021-04-09', 'Male', 'Female', '1234'),
(5, 'israt jahan', 'israt.jahan3058@gmail.com', '01688990022', 'CIS', 'c#', 'AIUB', 'Badda', '1998-11-30', 'Female', 'Male', 'ABCD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
