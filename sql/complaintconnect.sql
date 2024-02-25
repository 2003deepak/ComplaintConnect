-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2024 at 07:20 PM
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
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `username` varchar(50) NOT NULL,
  `complaint_id` varchar(10) NOT NULL,
  `complaint_type` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `folder` varchar(300) NOT NULL,
  `time` datetime(2) NOT NULL DEFAULT current_timestamp(2),
  `resolved_time` datetime(2) DEFAULT NULL,
  `last_updation` datetime(2) DEFAULT NULL,
  `worker_assigned` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`username`, `complaint_id`, `complaint_type`, `subject`, `description`, `folder`, `time`, `resolved_time`, `last_updation`, `worker_assigned`) VALUES
('deepak123', 'C1148', 'Electricity', 'Fan not working', 'No supply in fan ', '../uploaded_images/complaint_images/210_1_C1148.jpg', '2024-02-20 21:23:05.49', '2024-02-21 00:39:36.00', '2024-02-21 00:16:22.00', 'mukesh123'),
('deepak123', 'C5879', 'Water', 'Contaminated Water ', 'Water is dirty ', '../uploaded_images/complaint_images/210_1_C5879.jpg', '2024-02-20 21:24:38.13', NULL, '2024-02-21 00:29:37.00', 'manoj123'),
('deepak123', 'C7676', 'Water', 'Chair Broken ', 'One leg of chair is broken ', '../uploaded_images/complaint_images/210_1_C7676.jpg', '2024-02-20 21:26:43.97', NULL, '2024-02-21 00:22:43.00', 'manoj123'),
('rahul123', 'C7802', 'Electricity', 'Tubelight not working', 'Tubelight Got Fused ', '../uploaded_images/complaint_images/210_2_C7802.jpg', '2024-02-20 21:33:50.66', NULL, '2024-02-21 21:59:54.00', 'mukesh123');

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
(21, NULL, 'deepak123', '$2y$10$IFUInFsLFtBPYwGUWmI9zO0CIJIeitYcsdEJtUgcVKi./GJrXWQqa', 'deepak@gmail.com', '210', '1', '../uploaded_images/allotment_letter/210_1.pdf', NULL, 1),
(22, NULL, 'rahul123', '$2y$10$dKnzgzVnupv9rF9KiI79IunXv3DVcfl.TUuZMtkOWagYAy/kF9r9G', 'rahul@gmail.com', '210', '2', '../uploaded_images/allotment_letter/210_2.pdf', NULL, 1);

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
('arun123', '$2y$10$Wet1p0enIzoQvb8iPLJgMO4Ur1T9j/zv3QUPnEyjStEIW9cMo7E8W', 'yadavsuraj7449@gmail.com', 'C:/xampp/htdocs/ComplaintConnect/uploaded_images/aadhar_card/arun123.pdf', '', 'Carpenter'),
('manoj123', '$2y$10$l4av7/BF9rwHwYHx1TSwR.rqZziX5vj/R2kxuNIpiNr7ksz/OrTJy', 'yadavrishikesh5690@gmail.com', 'C:/xampp/htdocs/ComplaintConnect/uploaded_images/aadhar_card/manoj123.pdf', '', 'Water'),
('mukesh123', '$2y$10$P2Us74HL9NAcojDqaAUSyOX/33duSydpuih/nc6H7TaLeB0wMG7HW', 'poojarryadav@gmail.com', 'C:/xampp/htdocs/ComplaintConnect/uploaded_images/aadhar_card/mukesh123.pdf', '', 'Electricity');

-- --------------------------------------------------------

--
-- Table structure for table `worker_action`
--

CREATE TABLE `worker_action` (
  `worker_assigned` varchar(50) NOT NULL,
  `complaint_id` varchar(30) NOT NULL,
  `actionTaken` int(2) NOT NULL,
  `complete` int(3) DEFAULT NULL,
  `resolved_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `worker_action`
--

INSERT INTO `worker_action` (`worker_assigned`, `complaint_id`, `actionTaken`, `complete`, `resolved_image`) VALUES
('mukesh123', 'C1148', 1, 1, '../uploaded_images/resolved_complaint/.png'),
('manoj123', 'C5879', 1, NULL, NULL),
('manoj123', 'C7676', 0, NULL, NULL),
('mukesh123', 'C7802', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`username`,`complaint_id`),
  ADD KEY `complaint_id` (`complaint_id`);

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
