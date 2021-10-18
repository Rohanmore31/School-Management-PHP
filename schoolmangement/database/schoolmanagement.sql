-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 03:16 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sr_no` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sr_no`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin@123'),
(2, 'student', 'student@gmail.com', 'student@123');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sr_no` int(50) NOT NULL,
  `roll_no` int(50) NOT NULL,
  `name` varchar(55) NOT NULL,
  `subject` varchar(70) NOT NULL,
  `class` varchar(80) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `remarks` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sr_no`, `roll_no`, `name`, `subject`, `class`, `teacher`, `email`, `password`, `remarks`) VALUES
(1, 1001, 'Rohan More', 'Biology', '12std', 'Jayshree Jadhav', 'rohanmore@gmail.com', 'rohan@123', 'Excellent'),
(2, 1002, 'Ravi', 'Maths,History', '12std', 'Omkar Chavan', 'ravi@gmail.com', 'ravi@123', 'Good'),
(3, 1003, 'Raj Komar', 'History,science', '10std', 'Omkar shinde', 'raj@gmail12.com', 'raj@123', 'Need to work harder'),
(4, 1004, 'Surekha ', 'Hindi,Marathi', '9std', 'Ragav Shinde', 'surekha@gmail.com', 'surekha@123', 'Keep it up...!'),
(5, 1005, 'Deepak', 'Science,Hindi', '8std', 'Jayshree Jadhav', 'deepak@gmail.com', 'deepak@123', 'Very Good'),
(0, 1006, 'Rohit', 'Maths,Hindi', '12std', 'Omkar shinde', 'rohit@gmail.com', 'rohit@123', 'Excellent As Always');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `t_id` int(50) NOT NULL,
  `name` varchar(55) NOT NULL,
  `mobile` int(30) NOT NULL,
  `subjects` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`t_id`, `name`, `mobile`, `subjects`) VALUES
(1, 'Rohan More', 2147483647, 'History');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `t_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
