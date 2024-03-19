-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Generation Time: Mar 19, 2024 at 12:36 PM
-- Server version: 5.7.44
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formation_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `birthday_invitations`
--

CREATE TABLE `birthday_invitations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `guests_count` int(11) NOT NULL,
  `phone_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birthday_invitations`
--

INSERT INTO `birthday_invitations` (`id`, `name`, `guests_count`, `phone_number`) VALUES
(8, 'David', 12, '4124915'),
(9, 'Jennifer', 2, '4503200'),
(10, 'Ronan', 5, '9102323'),
(11, 'Freddy', 2, '4100200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birthday_invitations`
--
ALTER TABLE `birthday_invitations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birthday_invitations`
--
ALTER TABLE `birthday_invitations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
