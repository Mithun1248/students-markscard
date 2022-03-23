-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 11:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mdtask`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `staff_designation` varchar(30) DEFAULT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `isadmin` text NOT NULL,
  `superadmin` text NOT NULL,
  `status` text NOT NULL,
  `type` text NOT NULL,
  `entry_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `contact`, `staff_designation`, `username`, `password`, `isadmin`, `superadmin`, `status`, `type`, `entry_date`) VALUES
(1, 'Admin', 'admin@gmail.com', '', NULL, 'admin', '$2y$10$kqxThLz2FYk9Wxk8xSjjWOpK6IPJdMugGZ3OT4e4wpK4KGJoFnqDi', 'yes', 'yes', 'enable', 'Admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `type` enum('Monthly','Yearly') NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `type`, `price`, `status`, `category`) VALUES
(1, '1GB', 'Yearly', '75.00', '0', 'Storage'),
(2, '2GB', 'Yearly', '150.00', '0', 'Storage'),
(3, '5GB', 'Yearly', '200.00', '0', 'Storage'),
(4, '10GB', 'Yearly', '300.00', '0', 'Storage'),
(5, '25GB', 'Yearly', '400.00', '0', 'Storage'),
(6, '50GB', 'Yearly', '500.00', '0', 'Storage'),
(7, '100GB', 'Yearly', '1000.00', '0', 'Storage'),
(8, '1GB', 'Monthly', '8.00', '0', 'Storage'),
(9, '2GB', 'Monthly', '15.00', '0', 'Storage'),
(10, '5GB', 'Monthly', '40.00', '0', 'Storage'),
(11, '10GB', 'Monthly', '60.00', '0', 'Storage'),
(12, '25GB', 'Monthly', '80.00', '0', 'Storage'),
(13, '50GB', 'Monthly', '100.00', '0', 'Storage'),
(14, '100GB', 'Monthly', '170.00', '0', 'Storage'),
(16, '10000 Files', 'Monthly', '7.00', '0', 'Files'),
(17, '25000 Files', 'Monthly', '15.00', '0', 'Files'),
(18, 'UL Plans', 'Monthly', '500.00', '0', 'Files'),
(19, '10000 Files', 'Yearly', '60.00', '0', 'Files'),
(20, '25000 Files', 'Yearly', '100.00', '0', 'Files'),
(21, 'UL Plans', 'Yearly', '3500.00', '0', 'Files'),
(23, '1 DB', 'Monthly', '5.00', '0', 'DB'),
(24, '3 DB', 'Monthly', '10.00', '0', 'DB'),
(25, '5 DB', 'Monthly', '20.00', '0', 'DB'),
(26, '10 DB', 'Monthly', '30.00', '0', 'DB'),
(27, 'UL DB', 'Monthly', '90.00', '0', 'DB'),
(28, '1 DB', 'Yearly', '54.00', '0', 'DB'),
(29, '3 DB', 'Yearly', '108.00', '0', 'DB'),
(30, '5 DB', 'Yearly', '216.00', '0', 'DB'),
(31, '10 DB', 'Yearly', '324.00', '0', 'DB'),
(32, 'UL DB', 'Yearly', '972.00', '0', 'DB'),
(38, '1 Website', 'Monthly', '25.00', '0', 'WebHosting'),
(39, '3 Website', 'Monthly', '50.00', '0', 'WebHosting'),
(40, '5 Website', 'Monthly', '75.00', '0', 'WebHosting'),
(41, '10 Website', 'Monthly', '100.00', '0', 'WebHosting'),
(42, 'UL Hosting', 'Monthly', '500.00', '0', 'WebHosting'),
(43, '1 Website', 'Yearly', '270.00', '0', 'WebHosting'),
(44, '3 Website', 'Yearly', '540.00', '0', 'WebHosting'),
(45, '5 Website', 'Yearly', '810.00', '0', 'WebHosting'),
(46, '10 Website', 'Yearly', '1080.00', '0', 'WebHosting'),
(47, 'UL Hosting', 'Yearly', '5400.00', '0', 'WebHosting'),
(53, '1 Email', 'Monthly', '25.00', '0', 'Email'),
(54, '2 Email', 'Monthly', '45.00', '0', 'Email'),
(55, '5 Email', 'Monthly', '90.00', '0', 'Email'),
(56, '10 Email', 'Monthly', '150.00', '0', 'Email'),
(57, 'UL Email', 'Monthly', '500.00', '0', 'Email'),
(58, '1 Email', 'Yearly', '270.00', '0', 'Email'),
(59, '2 Email', 'Yearly', '486.00', '0', 'Email'),
(60, '5 Email', 'Yearly', '972.00', '0', 'Email'),
(61, '10 Email', 'Yearly', '1620.00', '0', 'Email'),
(62, 'UL Email', 'Yearly', '5400.00', '0', 'Email'),
(68, 'UL Plans', 'Monthly', '1900.00', '0', 'UnlimitedPlans'),
(69, 'UL Plans', 'Yearly', '20520.00', '0', 'UnlimitedPlans'),
(71, 'Per Domain', 'Yearly', '1400.00', '0', 'Domain'),
(72, 'Multiple Domain', 'Yearly', '1200.00', '0', 'Domain');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(50) NOT NULL,
  `current_wallet` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `current_wallet`) VALUES
(1, 'Md Shamsher', 'mdsameer09051994@gmail.com', '202cb962ac59075b964b07152d234b70', '497559.20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
