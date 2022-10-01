-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 11:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(255) NOT NULL,
  `course_id` int(255) NOT NULL,
  `subject_id` int(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `attendance` varchar(255) NOT NULL,
  `teacher_id` int(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `course_id`, `subject_id`, `student_id`, `student_name`, `attendance`, `teacher_id`, `created_at`) VALUES
(1, 786786, 786, 1, 'Pankaj Patel', 'Present', 1, '2022-08-18 16:50:03.000000'),
(2, 0, 0, 0, '', '', 0, '2022-09-24 05:44:53.299869'),
(3, 0, 0, 0, '', '', 0, '2022-09-24 05:45:17.004271'),
(4, 786, 0, 2, 'Amandeep', 'Present', 2, '2022-09-24 06:30:06.731448');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `teacher_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `contact` bigint(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `teacher_id`, `user_id`, `contact`, `created_at`) VALUES
(2, 'Manpreet Singh', 'manpreet009@gmail.com', 'Come back to school your leave is over.', 2, 2, 9915172378, '2022-08-18 17:13:54.000000');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`, `created_at`) VALUES
(1, 'B.tech', '2022-08-18 16:27:46.000000'),
(2, 'B.tech', '2022-08-23 06:16:09.482555'),
(3, 'B.tech', '2022-08-23 06:16:24.051999'),
(5, 'B.tech', '2022-08-23 12:47:54.336901'),
(6, 'B.tech', '2022-08-25 10:00:03.038611'),
(7, 'B.tech', '2022-08-25 10:53:04.293619'),
(9, 'B.tech', '2022-08-25 10:55:02.664803'),
(10, 'B.tech', '2022-08-26 04:03:04.121415'),
(11, 'B.tech', '2022-09-17 05:39:07.283144'),
(12, 'BCA', '2022-09-17 05:49:57.737127'),
(13, 'daaph', '2022-09-17 06:11:14.308622'),
(14, 'bcom', '2022-09-17 06:14:39.022084'),
(15, 'coa56', '2022-09-17 06:18:24.557364'),
(16, '786', '2022-09-17 07:17:30.084412'),
(17, '786', '2022-09-17 07:21:17.130899');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', 12345, '2022-10-01 09:13:36.182037');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(255) NOT NULL,
  `contact` bigint(255) NOT NULL,
  `address` longtext NOT NULL,
  `course_id` int(255) NOT NULL,
  `roll_no` int(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_name`, `email`, `password`, `contact`, `address`, `course_id`, `roll_no`, `created_at`) VALUES
(1, 'Jaspreet Singh', 'jaspreet009@gmail.com', 12345, 9915172315, 'V.P.O Bulhowal distt.HOSHIARPUR', 2468, 2022361, '2022-08-18 17:01:04.000000');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `course_id` int(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject_name`, `subject_code`, `course_id`, `created_at`) VALUES
(1, 'DSA', 'BTCSD-456', 786, '2022-08-18 16:45:18.000000'),
(2, 'DAA', 'BTCS401', 786, '2022-09-17 07:57:14.989857');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Course` bigint(255) NOT NULL,
  `Address` longtext NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `password`, `Course`, `Address`, `created_at`) VALUES
(1, 'Pankaj Patel', 'pp4439218@gmail.com', 'panku2003', 0, '', '2022-08-18 16:12:31.000000'),
(2, 'Neha Heer', 'nehaheer01@gmail.com', '12345', 9223372036854775807, 'V.P.O Sekhowal Garshankr\r\n', '2022-09-24 04:04:32.000000'),
(4, 'Manpreet kaur', 'manpreet65@gmail.com', 'chudu', 525, 'V.P.O OTHHEEE HI....JITHE UDHNN C', '2022-10-01 05:46:04.823672'),
(7, 'Amandeep', '', '', 0, 'present', '2022-09-24 06:26:37.846824'),
(8, 'Amandeep', '', '', 0, 'present', '2022-09-24 06:28:12.842587');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
