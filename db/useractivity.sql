-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 02:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iws`
--

-- --------------------------------------------------------

--
-- Table structure for table `useractivity`
--

CREATE TABLE `useractivity` (
  `S.No.` int(5) NOT NULL,
  `activity` varchar(512) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useractivity`
--

INSERT INTO `useractivity` (`S.No.`, `activity`, `tag`) VALUES
(1, 'Learn 10 words from a new language', 'Y'),
(2, 'Solve a crossword puzzle', 'Y'),
(3, 'Do some physical activity and exercise', 'S'),
(4, 'Use your weaker (opposite) hand for 1 complete day', 'Y'),
(5, 'Go on a hike', 'S'),
(6, 'Play an instrument', 'D'),
(7, 'Try calligraphy', 'Y'),
(8, 'Cook a meal', 'C'),
(9, 'Learn sign language', 'Y'),
(10, 'Visit an NGO', 'Y'),
(11, 'Create a sound mix using Audacity', 'Y'),
(12, 'Solve the Rubric\'s Cube', 'Y'),
(13, 'Watch a biography', 'Y'),
(14, 'Paint your room', 'A'),
(15, 'Learn a new dance routine', 'D'),
(16, 'Write your fantasy movie script', 'W'),
(17, 'Start read a new book (Go crazy on Wattpad!)', 'R'),
(18, 'Create your own scented candles', 'A'),
(19, 'Prepare a debate for a pressing issue in your country', 'W'),
(20, 'Play some latest online games', 'G');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `useractivity`
--
ALTER TABLE `useractivity`
  ADD PRIMARY KEY (`S.No.`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
