-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 08:32 AM
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
('deepak123', 'C3345', 'Water', 'door damaged', 'bad door damage', '../uploaded_images/complaint_images/110_5_C3345.jpg', '2024-01-26 11:14:03.00', NULL, '2024-01-26 11:14:16.00', NULL),
('deepak123', 'C4975', 'Electricity', 'Capacitor problem ', 'kharab capacitor', '../uploaded_images/complaint_images/110_5_C4975.jpg', '2024-01-26 11:12:27.06', '2024-01-26 11:14:32.00', '2024-01-26 11:14:32.00', NULL),
('deepak123', 'C9389', 'Water', 'Bad Odour', 'kharab smell ', '../uploaded_images/complaint_images/110_5_C9389.jpg', '2024-01-26 11:13:41.30', NULL, NULL, NULL);

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
(8, 'Deepak Kumar Yadav', 'deepak123', '$2y$10$Edx/H9c0bu/zltldqTt8veiTTrW5HBQ1G2CRYQpfildo9Bwbo9802', 'deepak@gmail.com', '110', '5', '../uploaded_images/allotment_letter/110_5.pdf', '../uploaded_images/profile_image/110_5.png', 1),
(17, NULL, 'krishna123', '$2y$10$yKH1QaibyoVHCOLrb89O2.v4VwPR5pVtHBgnZhyNptO12UhUOKTB2', 'krishna@gmail.com', '210', '1', '../uploaded_images/allotment_letter/210_1.pdf', NULL, 0),
(9, 'Rahul', 'rahul123', '$2y$10$aHZciYx4s9qtgH9b9.0O.OeTrR2q3ed3o2drge2DbsSeGZuJwEf6.', 'rahul@gmail.com', '210', '5', '../uploaded_images/allotment_letter/210_5.pdf', '../uploaded_images/profile_image/210_5.png', 1),
(15, NULL, 'sita123', '$2y$10$dXf8WppBS4Xw5TYLRnFTIeLlDdp.Qs6cVughhaaukWAaBnRJVDyqu', 'sita@gmail.com', '179', '1', '../uploaded_images/allotment_letter/179_1.pdf', NULL, 0);

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
('mukesh123', '$2y$10$zEVP02SBQMs25TYqL354V.cC2L3ECNwKycUmN4WmwpxRN00aVRiNa', 'yadavsuraj7449@gmail.com', '../uploaded_images/aadhar_card/mukesh123.pdf', '', 'Water');

-- --------------------------------------------------------

--
-- Table structure for table `worker_action`
--

CREATE TABLE `worker_action` (
  `complaint_id` varchar(30) NOT NULL,
  `actionTaken` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`complaint_id`) REFERENCES `worker_action` (`complaint_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
