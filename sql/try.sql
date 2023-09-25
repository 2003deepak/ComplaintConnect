-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 08:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
  `last_updation` datetime(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`username`, `complaint_id`, `complaint_type`, `subject`, `description`, `folder`, `time`, `resolved_time`, `last_updation`) VALUES
('deepak123', 'C4197', 'Electricity', 'tubelight not working', 'light is not working ', '../uploaded_images/complaint_images/110 _ 5 _ C4197.jpg', '2023-09-21 22:26:57.80', NULL, NULL),
('deepak123', 'C6942', 'Water', 'Bad Odour', 'Very Bad Odour', '../uploaded_images/complaint_images/110 _ 5 _ C6942.jpg', '2023-09-21 21:31:56.90', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `sno` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `building` varchar(5) NOT NULL,
  `room` varchar(5) NOT NULL,
  `allotment_letter` varchar(300) NOT NULL,
  `isAllowed` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`sno`, `username`, `password`, `email`, `building`, `room`, `allotment_letter`, `isAllowed`) VALUES
(8, 'deepak123', '$2y$10$Edx/H9c0bu/zltldqTt8veiTTrW5HBQ1G2CRYQpfildo9Bwbo9802', 'deepak@gmail.com', '110', '5', '../uploaded_images/allotment_letter/110_5.pdf', 1),
(17, 'krishna123', '$2y$10$yKH1QaibyoVHCOLrb89O2.v4VwPR5pVtHBgnZhyNptO12UhUOKTB2', 'krishna@gmail.com', '210', '1', '../uploaded_images/allotment_letter/210_1.pdf', 0),
(9, 'rahul123', '$2y$10$aHZciYx4s9qtgH9b9.0O.OeTrR2q3ed3o2drge2DbsSeGZuJwEf6.', 'rahul@gmail.com', '210', '5', '../uploaded_images/allotment_letter/210_5.pdf', 1),
(15, 'sita123', '$2y$10$dXf8WppBS4Xw5TYLRnFTIeLlDdp.Qs6cVughhaaukWAaBnRJVDyqu', 'sita@gmail.com', '179', '1', '../uploaded_images/allotment_letter/179_1.pdf', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`username`,`complaint_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `sno` (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
