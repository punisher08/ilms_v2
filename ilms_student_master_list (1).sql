-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2023 at 10:56 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

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
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `action` varchar(200) NOT NULL,
  `date_created` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_list`
--

CREATE TABLE `master_list` (
  `id` int NOT NULL,
  `student_number` int NOT NULL,
  `status` int NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `age` int NOT NULL,
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
(6, 2015105100, 1, 'jhom', 'ignacio', 'luanzon', 'male', '2023-09-09', 25, '0935298979', 'Barangay Care Tarlac City', 'jhomigancio@mail.com', 'ccs', '2', 'BSIT', 'WMA', 'http://ilmsapi.test/signup', '2023-09-09 04:26:31'),
(7, 2015105200, 0, 'jhom', 'ignacio', 'luanzon', 'male', '2023-09-01', 33, '0935298979', 'Barangay Care Tarlac City', 'jdev.netseek@gmail.com', 'ccs', '3', 'BSIT', 'WMA', 'http://ilmsapi.test/signup', '2023-09-09 08:48:00'),
(8, 2015105201, 0, 'rap', 'test', 'test', 'female', '2023-09-23', 25, '0935298979', 'Barangay Care Tarlac City', 'jhomignacio08@gmail.com', 'ccs', '5', 'BSIT', 'WMA', 'http://ilmsapi.test/signup', '2023-09-09 09:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password_token` varchar(200) NOT NULL,
  `password_token_exp` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `password_token`, `password_token_exp`, `created_at`) VALUES
(1, 'jhomignacio08@gmail.com', 'admin', '$2y$10$OACqzHWMT84X2ykfd1PXJumhOc9B7cVl/JbDsI1xNCXHbl8kcs8pa', '1b5f7be96095efa91eea8cde49464ca71ae692ba2281362e3b21debcd3a0c4fb', '2023-09-09 10:21:37', '2023-08-24 08:27:40');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_list`
--
ALTER TABLE `master_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
