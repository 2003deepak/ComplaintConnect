-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2024 at 05:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaintconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `closed_complaints`
--

CREATE TABLE `closed_complaints` (
  `username` varchar(50) NOT NULL,
  `complaint_id` varchar(10) NOT NULL,
  `complaint_type` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `folder` varchar(300) NOT NULL,
  `resolved_image` varchar(255) NOT NULL,
  `uploaded_time` timestamp(2) NOT NULL DEFAULT current_timestamp(2) ON UPDATE current_timestamp(2),
  `resolved_time` datetime(2) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_updation` datetime(2) DEFAULT NULL,
  `worker_assigned` varchar(50) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `closed_complaints`
--

INSERT INTO `closed_complaints` (`username`, `complaint_id`, `complaint_type`, `subject`, `description`, `folder`, `resolved_image`, `uploaded_time`, `resolved_time`, `time`, `last_updation`, `worker_assigned`, `rating`) VALUES
('deepak123', 'C7808', 'Electricity', 'Fan not working', 'My fan is not working ', '../uploaded_images/closed_complaint/C7808(user).jpg', '../uploaded_images/closed_complaint/C7808(worker).png', '2024-03-30 20:07:26.87', '2024-03-31 01:38:35.00', '2024-03-30 20:09:31', '2024-03-31 01:38:16.00', 'ajay123', 5);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `username` varchar(50) NOT NULL,
  `complaint_id` varchar(10) NOT NULL,
  `complaint_type` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `folder` varchar(300) NOT NULL,
  `resolved_image` varchar(255) DEFAULT NULL,
  `time` datetime(2) NOT NULL DEFAULT current_timestamp(2),
  `resolved_time` datetime(2) DEFAULT NULL,
  `last_updation` datetime(2) DEFAULT NULL,
  `worker_assigned` varchar(50) DEFAULT NULL,
  `isApproved` int(2) NOT NULL,
  `isPriority` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `priority_complaints`
--

CREATE TABLE `priority_complaints` (
  `complaint_id` varchar(30) NOT NULL,
  `desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `sno` int(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `building` varchar(5) NOT NULL,
  `room` varchar(5) NOT NULL,
  `allotment_letter` varchar(300) NOT NULL,
  `user_profile` varchar(255) DEFAULT NULL,
  `isAllowed` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`sno`, `name`, `username`, `password`, `email`, `building`, `room`, `allotment_letter`, `user_profile`, `isAllowed`) VALUES
(21, 'Deepak Yadav', 'deepak123', '$2y$10$2xj0asAM81loJdYvQbRBfOEcdlKwC8lxU7MWoi.90dRnTNwZpwN5C', 'deepak@gmail.com', '210', '1', '../uploaded_images/allotment_letter/210_1.pdf', '../uploaded_images/profile_image/210_1.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL,
  `aadhar_card` varchar(255) NOT NULL,
  `name` varchar(40) NOT NULL,
  `work_area` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`username`, `password`, `email`, `aadhar_card`, `name`, `work_area`) VALUES
('ajay123', '$2y$10$o7bozrnKDkCkEgEURpDtteRGEbToTh5ZUjouEzYGMjJmyvXe34QhG', 'ajay@gmail.com', '../uploaded_images/aadhar_card/ajay123.pdf', '', 'Electricity'),
('arjun123', '$2y$10$OGLUo9cJ4npbDEwUQmrGfulMzditbEn8q/vMARI7NywAedXV74RTK', 'rrpgyadav@gmail.com', '../uploaded_images/aadhar_card/arjun123.pdf', '', 'Electricity');

-- --------------------------------------------------------

--
-- Table structure for table `worker_action`
--

CREATE TABLE `worker_action` (
  `worker_assigned` varchar(50) NOT NULL,
  `complaint_id` varchar(30) NOT NULL,
  `actionTaken` int(2) NOT NULL,
  `complete` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `closed_complaints`
--
ALTER TABLE `closed_complaints`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`username`,`complaint_id`),
  ADD KEY `complaint_id` (`complaint_id`);

--
-- Indexes for table `priority_complaints`
--
ALTER TABLE `priority_complaints`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `sno` (`sno`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `worker_action`
--
ALTER TABLE `worker_action`
  ADD PRIMARY KEY (`complaint_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
