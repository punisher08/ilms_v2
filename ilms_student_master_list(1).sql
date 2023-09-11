-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 11, 2023 at 02:37 AM
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
  `student_number` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
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

INSERT INTO `master_list` (`id`, `student_number`, `status`, `first_name`, `last_name`, `middle_name`, `gender`, `dob`, `age`, `contact`, `address`, `email`, `college`, `year_level`, `program`, `major`, `site_name`, `created_at`) VALUES
(6, '201510510050', 1, 'jhomEL', 'ignacio', 'luanzon', 'male', '2023-09-09', 25, '0935298979', 'Barangay Care Tarlac City', 'jhomigancio@mail.com', 'ccs', '2', 'BSIT', 'WMA', 'http://ilmsapi.test/signup', '2023-09-09 04:26:31'),
(7, '2015105200', 1, 'jhom', 'ignacio', 'luanzon', 'male', '2023-09-01', 33, '0935298979', 'Barangay Care Tarlac City', 'jdev.netseek@gmail.com', 'ccs', '3', 'BSIT', 'WMA', 'http://ilmsapi.test/signup', '2023-09-09 08:48:00'),
(8, '2015105201', 1, 'rap', 'test', 'test', 'female', '2023-09-23', 25, '0935298979', 'Barangay Care Tarlac City', 'jhomignacio08@gmail.com', 'ccs', '5', 'BSIT', 'WMA', 'http://ilmsapi.test/signup', '2023-09-09 09:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(100) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_token` varchar(200) NOT NULL,
  `password_token_exp` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `email`, `username`, `password`, `password_token`, `password_token_exp`, `created_at`) VALUES
(1, 'admin', 'jhomignacio08@gmail.com', 'admin', '$2y$10$mCEdm1JGRglGM92egDCaO.DGDylZ6ZDDjEID0STkkLlYN9mYDdx3K', 'c857c637cf00b401a4b0298c2e943bbc95a92a51f966414592f3ba23c2bae1e0', '2023-09-10 10:31:36', '2023-08-24 08:27:40');

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
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_list`
--
ALTER TABLE `master_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
