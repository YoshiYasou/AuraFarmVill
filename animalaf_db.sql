-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2025 at 03:30 PM
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
-- Database: `aurafarmvil test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `animalaf`
--

CREATE TABLE `animalaf` (
  `ID_NUM` int(11) NOT NULL,
  `Animal` varchar(100) NOT NULL,
  `Species` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `Sex` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `animalaf`
--

INSERT INTO `animalaf` (`ID_NUM`, `Animal`, `Species`, `Age`, `Sex`) VALUES
(1, '123abc', 'Cow', 6, 'M'),
(2, '456efg', 'Pig', 10, 'M'),
(3, '789hij', 'Chicken', 9, 'F'),
(4, '101klm', 'Horse', 20, 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animalaf`
--
ALTER TABLE `animalaf`
  ADD PRIMARY KEY (`ID_NUM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animalaf`
--
ALTER TABLE `animalaf`
  MODIFY `ID_NUM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
