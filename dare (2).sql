-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2020 at 06:36 AM
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
  `assignment_name` varchar(100) NOT NULL,
  `weight` int(11) DEFAULT NULL,
  `pointes_earned` int(11) DEFAULT NULL,
  `points_possible` int(11) NOT NULL,
  `percentage` int(11) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `due_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`course_id`, `student_id`, `assignment_name`, `weight`, `pointes_earned`, `points_possible`, `percentage`, `comments`, `due_date`) VALUES
(10025, 754024, 'Assign 1', 0, 7, 10, 70, '', '0000-00-00 00:00:00'),
(454545, 754024, 'Exam 1', 0, 65, 80, 81, '', '0000-00-00 00:00:00'),
(454545, 754024, 'Homework 1', 0, 7, 10, 70, '', '0000-00-00 00:00:00'),
(454545, 754024, 'Homework 2', 0, 8, 10, 80, '', '0000-00-00 00:00:00'),
(454545, 754024, 'Exam 1', 0, 65, 80, 81, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `professor_id` varchar(10) NOT NULL,
  `name` varchar(45) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `professor_id`, `name`, `start_date`, `end_date`) VALUES
(10025, '121212', 'Software Engineering', '2019-01-06', '2019-05-02'),
(454545, '358474', 'Algorithms', '2019-01-06', '2019-05-02'),
(878877, '651078', 'Languages', '2019-01-06', '2019-05-02'),
(879879, '779998', 'Geography', '2019-01-06', '2019-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `course_students`
--

CREATE TABLE `course_students` (
  `course_id` varchar(15) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `student_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_students`
--

INSERT INTO `course_students` (`course_id`, `course_name`, `first_name`, `last_name`, `student_id`) VALUES
('10025', 'Software Engineering', 'parth', 'desai', 754024),
('454545', 'Algorithms', 'parth', 'desai', 754024),
('878877', 'Languages', 'parth', 'desai', 754024),
('879879', 'Geography', 'parth', 'desai', 754024);

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

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`professor_id`, `first_name`, `last_name`, `email`, `username`, `password`, `phone`, `token`) VALUES
(651078, 'prof3', 'dsa', 'dsf@dsa', 'prof3', '$2y$10$iCU204C/YDQMI0VCXTU6z..lXlnRWD8h0qjuiZb3m7hQQwpxaVLWa', '589-897-5792', ''),
(660444, 'prof5', 'dsa', 'sdafsd@sda', 'prof5', '$2y$10$aoPBnwQdp4NbbMmEjc.hBO3SnDdIYfasEYi/DU0Y6bNhXWC2T8tBu', '654-897-9877', ''),
(686314, 'Parth', 'Desai', '36.parth.36@gmail.com', 'prof2', '$2y$10$noltj.I1lnaL5kcuObB3zevTd3Xm/5dYNw.Z0yN0vWX33Dsl09e96', '321-564-8977', ''),
(779998, 'prof4', 'dsaf', 'klxz@sadas', 'prof4', '$2y$10$8NRtazJDiKnM8CWnmN5MW.nrcmTPAOIN4760K/zUhxUNoHNouaaF2', '546-879-8977', ''),
(914419, 'Prof', 'uno', 'dffs@d', 'Prof', '$2y$10$/lEhIxaBZ0YizQX4vNglJuSGYdmvz4QjGgKX7Qs./jElL/lqL3LIK', '456-654-8797', ''),
(942917, 'Parth', 'Desai', '36.parth.36@gmail.com', 'karma', '$2y$10$5x5aGJjxwiTofAVpvzY1G.paMyu/NJaA9zpgJvvUwga3p0GcScIli', '248-884-4922', '');

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
