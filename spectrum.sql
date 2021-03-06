-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 08:26 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spectrum`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `email`, `password`) VALUES
(1, 'testuser@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bme`
--

CREATE TABLE `bme` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `reg` int(11) NOT NULL,
  `2020-05-23` varchar(255) NOT NULL DEFAULT 'A',
  `2020-05-15` varchar(255) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bme`
--

INSERT INTO `bme` (`id`, `name`, `reg`, `2020-05-23`, `2020-05-15`) VALUES
(1, 'Test name', 1701106123, 'P', 'P'),
(2, 'Test name 2', 1701106128, 'A', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `civil`
--

CREATE TABLE `civil` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `reg` int(30) NOT NULL,
  `2020-05-23` varchar(255) NOT NULL DEFAULT 'A',
  `2020-05-06` varchar(255) NOT NULL DEFAULT 'A',
  `2020-05-22` varchar(255) NOT NULL DEFAULT 'A',
  `2020-05-30` varchar(255) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `civil`
--

INSERT INTO `civil` (`id`, `name`, `reg`, `2020-05-23`, `2020-05-06`, `2020-05-22`, `2020-05-30`) VALUES
(1, 'Test user for civil', 1701106125, 'P', 'P', 'A', 'P'),
(3, 'Test user for civil 2', 1701106145, 'P', 'A', 'A', 'P');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bme`
--
ALTER TABLE `bme`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg` (`reg`);

--
-- Indexes for table `civil`
--
ALTER TABLE `civil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg` (`reg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bme`
--
ALTER TABLE `bme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `civil`
--
ALTER TABLE `civil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
