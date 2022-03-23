-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2022 at 03:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `google_drive`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_storage`
--

CREATE TABLE `add_storage` (
  `id` int(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` int(100) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_storage`
--

INSERT INTO `add_storage` (`id`, `userid`, `type`, `size`, `created_on`) VALUES
(44, '5', 'Monthly', 1000000, '2022-03-18 14:03:05'),
(45, '5', 'Monthly', 1000000, '2022-03-18 14:03:05'),
(46, '5', 'Monthly', 2000000, '2022-03-18 14:03:06'),
(47, '5', 'Monthly', 2000000, '2022-03-18 14:03:06');

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
(1, 'Admin', 'admin@gmail.com', '', NULL, 'admin', '12345', 'yes', 'yes', 'enable', 'Admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `messages` varchar(255) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `messages`, `sender`, `receiver`, `date`) VALUES
(1, 'Ehkjhugyuginter text here...', 'vinod@gmail.com', 'yadav.vinod510@hotmail.com', '2022-02-23 08:45:08'),
(2, 'Enterbrtry text here...', 'vinod@gmail.com', 'yadav.vinod510@hotmail.com', '2022-02-23 08:45:14'),
(3, 'Hi', 'mks@gmail.com', 'vinod@gmail.com', '2022-03-08 07:12:51'),
(4, 'Hi', 'mks@gmail.com', 'mks@gmail.com', '2022-03-08 07:13:17'),
(5, 'Hi', 'mks@gmail.com', 'vinod@gmail.com', '2022-03-08 07:13:25'),
(6, 'Hi there...', 'mks1@gmail.com', 'mks22@gmail.com', '2022-03-15 11:23:26');

-- --------------------------------------------------------

--
-- Table structure for table `fileupload`
--

CREATE TABLE `fileupload` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `private` tinyint(1) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fileupload`
--

INSERT INTO `fileupload` (`id`, `name`, `size`, `type`, `created`, `private`, `userid`) VALUES
(96, 'CH34x_Install_Windows_v3_4.EXE', '243321', 'EXE', '2022-03-08 07:37:09', 0, 5),
(97, 'Infosys-1.xlsx', '8642', 'xlsx', '2022-03-08 07:42:24', 0, 5),
(102, 'arduino code (1).txt', '1150', 'txt', '2022-03-09 07:33:05', 1, 7),
(106, 'admin.php', '10414', 'php', '2022-03-15 01:42:05', 0, 5),
(107, 'email_plans.php', '11422', 'php', '2022-03-15 01:44:49', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `folder`
--

CREATE TABLE `folder` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `folder`
--

INSERT INTO `folder` (`id`, `name`, `created`) VALUES
(5, 'Folder1', '2022-03-15 02:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `form` mediumtext NOT NULL,
  `userid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `category` varchar(50) NOT NULL,
  `value` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `type`, `price`, `status`, `category`, `value`) VALUES
(1, '1GB', 'Yearly', '75.00', '0', 'Storage', 1000000),
(2, '2GB', 'Yearly', '150.00', '0', 'Storage', 2000000),
(3, '5GB', 'Yearly', '200.00', '0', 'Storage', 5000000),
(4, '10GB', 'Yearly', '300.00', '0', 'Storage', 10000000),
(5, '25GB', 'Yearly', '400.00', '0', 'Storage', 25000000),
(6, '50GB', 'Yearly', '500.00', '0', 'Storage', 50000000),
(7, '100GB', 'Yearly', '1000.00', '0', 'Storage', 100000000),
(8, '1GB', 'Monthly', '8.00', '0', 'Storage', 1000000),
(9, '2GB', 'Monthly', '15.00', '0', 'Storage', 2000000),
(10, '5GB', 'Monthly', '40.00', '0', 'Storage', 5000000),
(11, '10GB', 'Monthly', '60.00', '0', 'Storage', 10000000),
(12, '25GB', 'Monthly', '80.00', '0', 'Storage', 25000000),
(13, '50GB', 'Monthly', '100.00', '0', 'Storage', 50000000),
(14, '100GB', 'Monthly', '170.00', '0', 'Storage', 100000000),
(16, '10000 Files', 'Monthly', '7.00', '0', 'Files', 0),
(17, '25000 Files', 'Monthly', '15.00', '0', 'Files', 0),
(18, 'UL Plans', 'Monthly', '500.00', '0', 'Files', 0),
(19, '10000 Files', 'Yearly', '60.00', '0', 'Files', 0),
(20, '25000 Files', 'Yearly', '100.00', '0', 'Files', 0),
(21, 'UL Plans', 'Yearly', '3500.00', '0', 'Files', 0),
(23, '1 DB', 'Monthly', '5.00', '0', 'DB', 0),
(24, '3 DB', 'Monthly', '10.00', '0', 'DB', 0),
(25, '5 DB', 'Monthly', '20.00', '0', 'DB', 0),
(26, '10 DB', 'Monthly', '30.00', '0', 'DB', 0),
(27, 'UL DB', 'Monthly', '90.00', '0', 'DB', 0),
(28, '1 DB', 'Yearly', '54.00', '0', 'DB', 0),
(29, '3 DB', 'Yearly', '108.00', '0', 'DB', 0),
(30, '5 DB', 'Yearly', '216.00', '0', 'DB', 0),
(31, '10 DB', 'Yearly', '324.00', '0', 'DB', 0),
(32, 'UL DB', 'Yearly', '972.00', '0', 'DB', 0),
(38, '1 Website', 'Monthly', '25.00', '0', 'WebHosting', 0),
(39, '3 Website', 'Monthly', '50.00', '0', 'WebHosting', 0),
(40, '5 Website', 'Monthly', '75.00', '0', 'WebHosting', 0),
(41, '10 Website', 'Monthly', '100.00', '0', 'WebHosting', 0),
(42, 'UL Hosting', 'Monthly', '500.00', '0', 'WebHosting', 0),
(43, '1 Website', 'Yearly', '270.00', '0', 'WebHosting', 0),
(44, '3 Website', 'Yearly', '540.00', '0', 'WebHosting', 0),
(45, '5 Website', 'Yearly', '810.00', '0', 'WebHosting', 0),
(46, '10 Website', 'Yearly', '1080.00', '0', 'WebHosting', 0),
(47, 'UL Hosting', 'Yearly', '5400.00', '0', 'WebHosting', 0),
(53, '1 Email', 'Monthly', '25.00', '0', 'Email', 0),
(54, '2 Email', 'Monthly', '45.00', '0', 'Email', 0),
(55, '5 Email', 'Monthly', '90.00', '0', 'Email', 0),
(56, '10 Email', 'Monthly', '150.00', '0', 'Email', 0),
(57, 'UL Email', 'Monthly', '500.00', '0', 'Email', 0),
(58, '1 Email', 'Yearly', '270.00', '0', 'Email', 0),
(59, '2 Email', 'Yearly', '486.00', '0', 'Email', 0),
(60, '5 Email', 'Yearly', '972.00', '0', 'Email', 0),
(61, '10 Email', 'Yearly', '1620.00', '0', 'Email', 0),
(62, 'UL Email', 'Yearly', '5400.00', '0', 'Email', 0),
(68, 'UL Plans', 'Monthly', '1900.00', '0', 'UnlimitedPlans', 0),
(69, 'UL Plans', 'Yearly', '20520.00', '0', 'UnlimitedPlans', 0),
(71, 'Per Domain', 'Yearly', '1400.00', '0', 'Domain', 0),
(72, 'Multiple Domain', 'Yearly', '1200.00', '0', 'Domain', 0),
(81, '150GB', 'Yearly', '1500.00', '0', 'Storage', 0);

-- --------------------------------------------------------

--
-- Table structure for table `referalwallet`
--

CREATE TABLE `referalwallet` (
  `points` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `refereduserid` int(11) NOT NULL,
  `created` date NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `referalwallet`
--

INSERT INTO `referalwallet` (`points`, `userid`, `refereduserid`, `created`, `type`) VALUES
(1, 5, 1, '2022-03-08', 'credit'),
(1, 6, 5, '2022-03-09', 'credit');

-- --------------------------------------------------------

--
-- Table structure for table `sharedfile`
--

CREATE TABLE `sharedfile` (
  `id` int(11) NOT NULL,
  `fileid` int(11) NOT NULL,
  `sharedwith` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sharedfile`
--

INSERT INTO `sharedfile` (`id`, `fileid`, `sharedwith`, `created`, `userid`) VALUES
(1, 79, 'yadav.vinod510@hotmail.com', '2022-02-23 10:54:34', 5),
(2, 85, 'yadav@hotmail.com', '2022-02-23 23:14:27', 6),
(3, 90, 'vinodkumar8081315330@gmail.com', '2022-02-24 12:28:08', 7),
(4, 97, 'mks22@gmail.com', '2022-03-15 02:41:01', 5);

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `userid` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`userid`, `size`) VALUES
(4, 5000000),
(5, 5000000),
(6, 5000000),
(7, 5000000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `created` datetime NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `referalcode` varchar(100) NOT NULL,
  `current_wallet` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `created`, `usertype`, `referalcode`, `current_wallet`) VALUES
(1, 'Mithunkumar S Nayak', 'mks@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2022-03-08 06:52:58', 'admin', 'gQezNE', 50000),
(5, 'Mithun', 'mks1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2022-03-08 07:36:00', 'user', 'nd9qzb', 49096),
(6, 'Mith', 'mks12@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2022-03-09 07:15:12', 'user', 'JEt9A5', 50000),
(7, 'mks', 'mks22@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2022-03-09 07:17:18', 'user', 'Xw6DsH', 50000);

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
(1, 'Md Shamsher', 'mdsameer09051994@gmail.com', '202cb962ac59075b964b07152d234b70', '300.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_storage`
--
ALTER TABLE `add_storage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fileupload`
--
ALTER TABLE `fileupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `folder`
--
ALTER TABLE `folder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sharedfile`
--
ALTER TABLE `sharedfile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `add_storage`
--
ALTER TABLE `add_storage`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fileupload`
--
ALTER TABLE `fileupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `folder`
--
ALTER TABLE `folder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `sharedfile`
--
ALTER TABLE `sharedfile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
