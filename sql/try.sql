-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 08:50 PM
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
  `building` int(3) NOT NULL,
  `room` int(3) NOT NULL,
  `complaint_id` varchar(10) NOT NULL,
  `complaint_type` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `folder` varchar(300) NOT NULL,
  `time` datetime(2) NOT NULL DEFAULT current_timestamp(2)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`username`, `building`, `room`, `complaint_id`, `complaint_type`, `subject`, `description`, `folder`, `time`) VALUES
('deepak123', 210, 2, 'C2637', 'Water', 'door damaged', 'all the doors are damaged', '../uploaded_images/WhatsApp Image 2023-06-02 at 11.42.01 AM.jpeg', '2023-09-01 23:17:57.97'),
('deepak123', 210, 2, 'C4453', 'Electricity', 'light not working ', 'my light is not working ', '../uploaded_images/Screenshot 2023-08-31 184439.jpg', '2023-09-01 19:17:51.40');

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
  `isAllowed` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`sno`, `username`, `password`, `email`, `building`, `room`, `isAllowed`) VALUES
(10, 'rahul123', '$2y$10$Gc0M2JkZnlV7Op4DH2ZilupTDtSVUKIJmosXtFz.iNzh90slXTKYK', 'rahul@gmail.com', '179', '2', 1),
(11, 'deepak123', '$2y$10$7jmyNDFwF2TQg9bjABLvgeQ84EIBwIZN77HlyeryQReX0/NtfQwPi', 'deepak@gmail.com', '110', '3', 1),
(12, 'indar123', '$2y$10$HEJlC/AO6u50MWZxJujL6eFHbD2M64A5LowmLyUuXbwmPz.fIFDXq', 'indar@gmail.com', '179', '4', 1);

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
  ADD PRIMARY KEY (`sno`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
