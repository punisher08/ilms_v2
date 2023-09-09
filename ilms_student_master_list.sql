-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2023 at 03:17 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ilms_student_master_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(200) NOT NULL,
  `date_created` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_list`
--

CREATE TABLE `master_list` (
  `id` int(11) NOT NULL,
  `student_number` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `age` int(20) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `year_level` varchar(20) NOT NULL,
  `program` varchar(100) NOT NULL,
  `major` varchar(100) NOT NULL,
  `site_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_list`
--

INSERT INTO `master_list` (`id`, `student_number`, `first_name`, `last_name`, `middle_name`, `gender`, `dob`, `age`, `contact`, `address`, `email`, `college`, `year_level`, `program`, `major`, `site_name`, `created_at`) VALUES
(1, 2015105100, 'jhomel', 'ignacio', 'luanzon', 'male', '1996-06-08', 27, '09123456789', 'Barangay Care zone 5 Tarlac City', 'khiel@gmail.com', 'ccs', '1', 'BSIT', 'WMA', 'test', '0000-00-00 00:00:00'),
(2, 2015105101, 'jhomel', 'ignacio', 'luanzon', 'male', '1996-06-08', 23, '09123456789', 'Barangay Care zone 5 Tarlac City', 'admin@gmail.com', 'ccs', '1', 'BSIT', 'WMA', 'test', '2023-08-28 07:24:45'),
(4, 2015105105, 'lorem', 'ipsum', 'dolor', 'male', '1995-06-08', 23, '09123456789', 'Barangay Care zone 5 Tarlac City', 'jhomignacio08@gmail.com', 'ccs', '2', 'BSIT', 'WMA', 'test', '2023-08-28 08:26:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `password_token` varchar(200) NOT NULL,
  `password_token_exp` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `password_token`, `password_token_exp`, `created_at`) VALUES
(1, 'jhomignacio08@gmail.com', 'admin', 'admin', '07f4f6f17ba7d1527043c15d8a4ffc14ae951a398301d0d3330e33b0a9c99b8c', '2023-08-31 02:35:42', '2023-08-24 08:27:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_list`
--
ALTER TABLE `master_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_number` (`student_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_list`
--
ALTER TABLE `master_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
