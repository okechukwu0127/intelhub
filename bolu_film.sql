-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2016 at 04:23 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bolu_film`
--

-- --------------------------------------------------------

--
-- Table structure for table `bolu_ci_sessions`
--

CREATE TABLE IF NOT EXISTS `bolu_ci_sessions` (
  `session_id` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `user_agent` varchar(100) NOT NULL,
  `last_activity` varchar(100) NOT NULL,
  `user_data` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bolu_post`
--

CREATE TABLE IF NOT EXISTS `bolu_post` (
  `id` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `date_time` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bolu_post`
--

INSERT INTO `bolu_post` (`id`, `email`, `title`, `content`, `date_time`) VALUES
(1, 'okechukwu0127@gmail.com', 'Baby monkey breakss into a goat farm and picks its new mother ', 'A baby monkey which was separated from its parents has reportedly picked its new mother from a flock of goats.\n\nThe little monkey is from Jiangxi Province of China. He latches onto the back of its new found parent; a black nanny goat, following her wherever she goes.', 'Fri-Nov-2016'),
(2, 'okechukwu0127@gmail.com', 'Thank God it’s Black Friday! Get 20% off your Slimtea purchase today!!!', 'What is recession when Black Friday is here?! Dust up your weight loss goals, bring out your wallet and get that body back on track this Black Friday with Slimtea!', 'Fri-Nov-2016'),
(3, 'abeltolu@gmail.com', 'Hey, I am testing', 'OK. I am just running a test', 'Fri-Nov-2016'),
(4, 'abeltolu@gmail.com', 'test', 'test', 'Fri-Nov-2016');

-- --------------------------------------------------------

--
-- Table structure for table `bolu_register`
--

CREATE TABLE IF NOT EXISTS `bolu_register` (
  `id` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bolu_register`
--

INSERT INTO `bolu_register` (`id`, `fullname`, `phone`, `email`, `password`, `address`) VALUES
(3, 'okechukwu eze', '2340803647364', 'okechukwu0127@gmail.com', '123456789', ''),
(4, 'Tolulope Abel', '081212907682', 'abeltolu@gmail.com', 'tolu8658', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bolu_post`
--
ALTER TABLE `bolu_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bolu_register`
--
ALTER TABLE `bolu_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bolu_post`
--
ALTER TABLE `bolu_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bolu_register`
--
ALTER TABLE `bolu_register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
