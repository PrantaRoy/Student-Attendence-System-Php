-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 08:10 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samira`
--

-- --------------------------------------------------------

--
-- Table structure for table `stinfo`
--

CREATE TABLE `stinfo` (
  `id` int(15) NOT NULL,
  `s_id` varchar(15) NOT NULL,
  `name` varchar(15) NOT NULL,
  `present` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stinfo`
--

INSERT INTO `stinfo` (`id`, `s_id`, `name`, `present`) VALUES
(1, '1', 'samira', 'present'),
(2, '151-15-5100', 'prodip', 'absent'),
(3, '3', 'aaaa', 'present'),
(4, '4', 'bb', 'present');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stinfo`
--
ALTER TABLE `stinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stinfo`
--
ALTER TABLE `stinfo`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
