-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2020 at 07:11 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dare`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `professor_id` int(11) NOT NULL,
  `assignment_name` varchar(100) NOT NULL,
  `weight` int(11) DEFAULT NULL,
  `pointes_earned` int(11) DEFAULT NULL,
  `points_possible` int(11) NOT NULL,
  `percentage` int(11) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `due_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `professor_id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(80) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(80) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `email`, `username`, `password`, `phone`, `token`) VALUES
(321645, 'HGHG', 'GHJG', 'GHJ', 'SDF', 'SDF', '0', ''),
(476473, 'parth', 'desai', 'saf@dafs', 'test', '$2y$10$Sv3GzF3RTLCKeF5eCPixp.NcOs4JfsTGImjZ7L', '213', ''),
(754024, 'parth', 'desai', 'saf@dafs', 'first', '$2y$10$nVleFpi74F2DqrnxIedQpeB4rDetKoG20yXi3FgpGcoOYhnaHMvXW', '213-567-4654', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`course_id`,`student_id`,`professor_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`professor_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
