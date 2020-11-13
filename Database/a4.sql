-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 11:22 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a4`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `Player_name` varchar(15) NOT NULL,
  `Player_ID` int(15) NOT NULL,
  `Score` int(10) NOT NULL,
  `Level` int(15) NOT NULL,
  `Time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`Player_name`, `Player_ID`, `Score`, `Level`, `Time`) VALUES
('', 0, 0, 0, '2020-11-13'),
('Ali', 23, 7955, 1, NULL),
('Ahmed', 567, 71, 10, '2020-11-13'),
('Akbar', 2345, 1214, 1, NULL),
('Ali', 3456, 369, 1, '2020-11-13'),
('Ghulam', 3660, 2147483647, 1, NULL),
('Zain', 3838, 93133, 1, NULL),
('Ali', 3871, 30, 1, NULL),
('Zeeshan', 7890, 0, 1, '2020-11-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`Player_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
