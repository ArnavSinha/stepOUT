-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 02:54 PM
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
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `S.No.` int(100) NOT NULL,
  `quote` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`S.No.`, `quote`) VALUES
(1, '“All our dreams can come true, if we have the courage to pursue them.” – Walt Disney'),
(2, '“The secret of getting ahead is getting started.” – Mark Twain'),
(3, '“Don’t limit yourself. Many people limit themselves to what they think they can do. You can go as far as your mind lets you. What you believe, remember, you can achieve.” – Mary Kay Ash'),
(4, '“It’s hard to beat a person who never gives up.” – Babe Ruth'),
(5, '“If people are doubting how far you can go, go so far that you can’t hear them anymore.” – Michele Ruiz'),
(6, '“We need to accept that we won’t always make the right decisions, that we’ll screw up royally sometimes – understanding that failure is not the opposite of success, it’s part of success.” – Arianna Huffington'),
(7, '“Fairy tales are more than true: not because they tell us that dragons exist, but because they tell us that dragons can be beaten.”― Neil Gaiman'),
(8, '“Everything you can imagine is real.”― Pablo Picasso'),
(9, '“Do one thing every day that scares you.”― Eleanor Roosevelt'),
(10, '“If we have the attitude that it’s going to be a great day it usually is.” – Catherine Pulsifier'),
(11, '“You can either experience the pain of discipline or the pain of regret. The choice is yours.” - Arnav Sinha'),
(12, '“Your passion is waiting for your courage to catch up.” – Isabelle Lafleche'),
(13, '\"If something is important enough, even if the odds are stacked against you, you should still do it.” – Elon Musk'),
(14, '“The hard days are what make you stronger.” – Aly Raisman'),
(15, '“If you believe it’ll work out, you’ll see opportunities. If you don’t believe it’ll work out, you’ll see obstacles.” – Wayne Dyer'),
(16, '“You can waste your lives drawing lines. Or you can live your life crossing them.” – Shonda Rhimes'),
(17, '“You’ve got to get up every morning with determination if you’re going to go to bed with satisfaction.” – George Lorimer');

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

-- --------------------------------------------------------

--
-- Table structure for table `usercontact`
--

CREATE TABLE `usercontact` (
  `person_id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usercontact`
--

INSERT INTO `usercontact` (`person_id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'arnav', 'ar', '', ''),
(2, 'arnav', 'ar@gmail.com', 'Feedback', 'Hello, nice site!'),
(3, 'Arnav', 'ar@gmail.com', 'hello', 'hola!');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `person_id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`person_id`, `name`, `email`, `password`) VALUES
(1, 'Arnav', 'ar@gmail.com', 'password'),
(6, 'arnav', 'as@g.co', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`S.No.`);

--
-- Indexes for table `useractivity`
--
ALTER TABLE `useractivity`
  ADD PRIMARY KEY (`S.No.`);

--
-- Indexes for table `usercontact`
--
ALTER TABLE `usercontact`
  ADD PRIMARY KEY (`person_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`person_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `S.No.` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `usercontact`
--
ALTER TABLE `usercontact`
  MODIFY `person_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `person_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
