-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2025 at 05:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` text DEFAULT NULL,
  `id_number` varchar(20) DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `gwa` decimal(5,2) DEFAULT NULL,
  `attendance_record` varchar(10) DEFAULT NULL,
  `disciplinary_history` text DEFAULT NULL,
  `health_info` text DEFAULT NULL,
  `tuition_payment` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `full_name`, `dob`, `address`, `id_number`, `course`, `gwa`, `attendance_record`, `disciplinary_history`, `health_info`, `tuition_payment`) VALUES
(2, 'Aya Marie A. Salamania', '2002-06-19', 'Brgy. New Tambo, Katipunan, Zamboanga Del Norte', '202510019', 'BSIT', 92.00, '78/80', 'N/A', 'Rubber allergy.', 8000.00),
(3, 'Rhea R. Elogsong', '2001-02-10', 'Estaka, Dipolog City, Zamboanga Del Norte', '202510025', 'BSCE', 90.00, '75/80', 'N/A', 'Sea food allergy.', 8000.00),
(4, 'Khailen Gelhea S. Calasang ', '2004-02-10', 'Brgy. Ma. Cristina, Dapitan City, Zamboanga Del Norte ', '202510020', ' BSIT ', 87.00, '78/80 ', 'N/A', 'N/A', 8000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
