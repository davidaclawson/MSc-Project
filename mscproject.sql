-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2024 at 11:10 PM
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
-- Database: `mscproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `gapanalysis`
--

CREATE TABLE `gapanalysis` (
  `ID` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `identify1` varchar(50) NOT NULL,
  `identify2` varchar(50) NOT NULL,
  `identify3` varchar(50) NOT NULL,
  `identify4` varchar(50) NOT NULL,
  `identify5` varchar(50) NOT NULL,
  `identify6` varchar(50) NOT NULL,
  `protect1` varchar(50) NOT NULL,
  `protect2` varchar(50) NOT NULL,
  `protect3` varchar(50) NOT NULL,
  `protect4` varchar(50) NOT NULL,
  `protect5` varchar(50) NOT NULL,
  `protect6` varchar(50) NOT NULL,
  `protect7` varchar(50) NOT NULL,
  `protect8` varchar(50) NOT NULL,
  `protect9` varchar(50) NOT NULL,
  `protect10` varchar(50) NOT NULL,
  `protect11` varchar(50) NOT NULL,
  `protect12` varchar(50) NOT NULL,
  `detect1` varchar(50) NOT NULL,
  `detect2` varchar(50) NOT NULL,
  `detect3` varchar(50) NOT NULL,
  `detect4` varchar(50) NOT NULL,
  `detect5` varchar(50) NOT NULL,
  `detect6` varchar(50) NOT NULL,
  `respond1` varchar(50) NOT NULL,
  `respond2` varchar(50) NOT NULL,
  `respond3` varchar(50) NOT NULL,
  `respond4` varchar(50) NOT NULL,
  `respond5` varchar(50) NOT NULL,
  `respond6` varchar(50) NOT NULL,
  `recover1` varchar(50) NOT NULL,
  `recover2` varchar(50) NOT NULL,
  `recover3` varchar(50) NOT NULL,
  `recover4` varchar(50) NOT NULL,
  `recover5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gapanalysis`
--

INSERT INTO `gapanalysis` (`ID`, `name`, `identify1`, `identify2`, `identify3`, `identify4`, `identify5`, `identify6`, `protect1`, `protect2`, `protect3`, `protect4`, `protect5`, `protect6`, `protect7`, `protect8`, `protect9`, `protect10`, `protect11`, `protect12`, `detect1`, `detect2`, `detect3`, `detect4`, `detect5`, `detect6`, `respond1`, `respond2`, `respond3`, `respond4`, `respond5`, `respond6`, `recover1`, `recover2`, `recover3`, `recover4`, `recover5`) VALUES
(10, 'David FC', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant', 'Compliant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gapanalysis`
--
ALTER TABLE `gapanalysis`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gapanalysis`
--
ALTER TABLE `gapanalysis`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
