-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 06:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `archeus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_username` varchar(255) NOT NULL,
  `ad_pass` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_username`, `ad_pass`, `role`) VALUES
(1, 'anika', 'anika1234', 'admin'),
(2, 'zyan', 'zyan1234', 'admin'),
(3, 'sadman', 'sadman1234', 'admin'),
(4, 'azwad', 'azwad1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cv_basic`
--

CREATE TABLE `cv_basic` (
  `cv_id` int(11) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `st_email` varchar(255) NOT NULL,
  `st_contact` int(11) NOT NULL,
  `st_city` varchar(255) DEFAULT NULL,
  `st_facebook` varchar(255) DEFAULT NULL,
  `st_linkedin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cv_eca`
--

CREATE TABLE `cv_eca` (
  `eca_id` int(11) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `eca_name` varchar(255) DEFAULT NULL,
  `eca_desc` varchar(255) DEFAULT NULL,
  `eca_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cv_edu`
--

CREATE TABLE `cv_edu` (
  `edu_id` int(11) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `edu_school` varchar(255) DEFAULT NULL,
  `edu_school_start` varchar(255) DEFAULT NULL,
  `edu_school_end` varchar(255) DEFAULT NULL,
  `edu_college` varchar(255) DEFAULT NULL,
  `edu_college_start` varchar(255) DEFAULT NULL,
  `edu_college_end` varchar(255) DEFAULT NULL,
  `edu_uni` varchar(255) DEFAULT NULL,
  `edu_uni_start` varchar(255) DEFAULT NULL,
  `edu_uni_end` varchar(255) DEFAULT NULL,
  `edu_uni_dept` varchar(255) DEFAULT NULL,
  `edu_uni_major` varchar(255) DEFAULT NULL,
  `edu_uni_cgpa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cv_project`
--

CREATE TABLE `cv_project` (
  `project_id` int(11) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cv_publication`
--

CREATE TABLE `cv_publication` (
  `pub_id` int(11) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `pub_title` varchar(255) NOT NULL,
  `pub_year_published` date NOT NULL,
  `pub_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cv_soft_skill`
--

CREATE TABLE `cv_soft_skill` (
  `soft_skill_id` int(11) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `soft_skill_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cv_tech_skill`
--

CREATE TABLE `cv_tech_skill` (
  `tech_skill_id` int(11) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `tech_skill_name` varchar(255) DEFAULT NULL,
  `tech_skill_desc` varchar(255) DEFAULT NULL,
  `tech_skill_related_project` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `st_id` int(11) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `st_email` varchar(255) NOT NULL,
  `st_pass` varchar(255) NOT NULL,
  `st_dept` varchar(255) NOT NULL,
  `st_contact` int(11) DEFAULT NULL,
  `st_dob` date NOT NULL,
  `st_gender` varchar(255) NOT NULL,
  `profile_picture` blob DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `st_username`, `st_name`, `st_email`, `st_pass`, `st_dept`, `st_contact`, `st_dob`, `st_gender`, `profile_picture`, `role`, `status`) VALUES
(3, '011182035', 'Anika Tahsin', 'anika@ieee.org', 'anika1234', 'CSE', NULL, '1996-10-26', 'Female', NULL, 'student', 0),
(4, '011183070', 'Fahad Al Islam', 'fislam@gmail.com', 'fahad1234', 'CSE', NULL, '2022-08-22', 'Male', NULL, 'student', 0),
(19, '011183013', 'Sadman Sakib', 'ssakib@bscse.uiu.ac.bd', '1234', 'CSE', NULL, '2022-08-25', 'Male', NULL, 'student', 0),
(20, '011182033', 'an', 'an@bscse.uiu.ac.bd', '1234', 'CSE', NULL, '2022-08-25', 'Female', NULL, 'student', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_log`
--

CREATE TABLE `student_log` (
  `stlog_id` int(11) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `stlog_login_date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `stlog_logout_date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(11) NOT NULL,
  `t_username` varchar(255) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_email` varchar(255) NOT NULL,
  `t_pass` varchar(255) NOT NULL,
  `t_dept` varchar(255) NOT NULL,
  `t_des` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `t_username`, `t_name`, `t_email`, `t_pass`, `t_dept`, `t_des`, `role`) VALUES
(1, 'FAI', 'Fahad Al Islam', 'fai@uiu.ac.bd', 'fai1234', 'CSE', 'Lecturer', 'teacher'),
(2, 'a', 'Anika', 'a', '1234', 'EEE', 'x', 'teacher'),
(3, 'b', 'An', 'a', '1234', 'CE', 'c', 'teacher'),
(4, 'X', 'Mr X', 'x@gmail.com', '1234', 'CE', 'lecturer', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_log`
--

CREATE TABLE `teacher_log` (
  `tlog_id` int(11) NOT NULL,
  `t_username` varchar(255) NOT NULL,
  `tlog_name` varchar(255) NOT NULL,
  `tlog_login_date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `tlog_logout_date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`),
  ADD UNIQUE KEY `ad_username` (`ad_username`);

--
-- Indexes for table `cv_basic`
--
ALTER TABLE `cv_basic`
  ADD PRIMARY KEY (`cv_id`),
  ADD KEY `fk1` (`st_username`) USING BTREE;

--
-- Indexes for table `cv_eca`
--
ALTER TABLE `cv_eca`
  ADD PRIMARY KEY (`eca_id`),
  ADD KEY `fk3` (`st_username`);

--
-- Indexes for table `cv_edu`
--
ALTER TABLE `cv_edu`
  ADD PRIMARY KEY (`edu_id`),
  ADD KEY `fk2` (`st_username`);

--
-- Indexes for table `cv_project`
--
ALTER TABLE `cv_project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `fk6` (`st_username`);

--
-- Indexes for table `cv_publication`
--
ALTER TABLE `cv_publication`
  ADD PRIMARY KEY (`pub_id`),
  ADD KEY `fk8` (`st_username`);

--
-- Indexes for table `cv_soft_skill`
--
ALTER TABLE `cv_soft_skill`
  ADD PRIMARY KEY (`soft_skill_id`),
  ADD KEY `fk7` (`st_username`);

--
-- Indexes for table `cv_tech_skill`
--
ALTER TABLE `cv_tech_skill`
  ADD PRIMARY KEY (`tech_skill_id`),
  ADD KEY `fk4` (`st_username`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`st_id`),
  ADD UNIQUE KEY `st_username` (`st_username`),
  ADD UNIQUE KEY `st_email` (`st_email`);

--
-- Indexes for table `student_log`
--
ALTER TABLE `student_log`
  ADD PRIMARY KEY (`stlog_id`),
  ADD KEY `fk1` (`st_username`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `t_username` (`t_username`);

--
-- Indexes for table `teacher_log`
--
ALTER TABLE `teacher_log`
  ADD PRIMARY KEY (`tlog_id`),
  ADD KEY `fk5` (`t_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cv_basic`
--
ALTER TABLE `cv_basic`
  MODIFY `cv_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cv_eca`
--
ALTER TABLE `cv_eca`
  MODIFY `eca_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cv_edu`
--
ALTER TABLE `cv_edu`
  MODIFY `edu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cv_project`
--
ALTER TABLE `cv_project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cv_publication`
--
ALTER TABLE `cv_publication`
  MODIFY `pub_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cv_soft_skill`
--
ALTER TABLE `cv_soft_skill`
  MODIFY `soft_skill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cv_tech_skill`
--
ALTER TABLE `cv_tech_skill`
  MODIFY `tech_skill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `student_log`
--
ALTER TABLE `student_log`
  MODIFY `stlog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher_log`
--
ALTER TABLE `teacher_log`
  MODIFY `tlog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cv_basic`
--
ALTER TABLE `cv_basic`
  ADD CONSTRAINT `ct1` FOREIGN KEY (`st_username`) REFERENCES `student` (`st_username`);

--
-- Constraints for table `cv_eca`
--
ALTER TABLE `cv_eca`
  ADD CONSTRAINT `fk3` FOREIGN KEY (`st_username`) REFERENCES `student` (`st_username`);

--
-- Constraints for table `cv_edu`
--
ALTER TABLE `cv_edu`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`st_username`) REFERENCES `student` (`st_username`);

--
-- Constraints for table `cv_project`
--
ALTER TABLE `cv_project`
  ADD CONSTRAINT `fk6` FOREIGN KEY (`st_username`) REFERENCES `student` (`st_username`);

--
-- Constraints for table `cv_publication`
--
ALTER TABLE `cv_publication`
  ADD CONSTRAINT `fk8` FOREIGN KEY (`st_username`) REFERENCES `student` (`st_username`);

--
-- Constraints for table `cv_soft_skill`
--
ALTER TABLE `cv_soft_skill`
  ADD CONSTRAINT `fk7` FOREIGN KEY (`st_username`) REFERENCES `student` (`st_username`);

--
-- Constraints for table `cv_tech_skill`
--
ALTER TABLE `cv_tech_skill`
  ADD CONSTRAINT `fk4` FOREIGN KEY (`st_username`) REFERENCES `student` (`st_username`);

--
-- Constraints for table `student_log`
--
ALTER TABLE `student_log`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`st_username`) REFERENCES `student` (`st_username`);

--
-- Constraints for table `teacher_log`
--
ALTER TABLE `teacher_log`
  ADD CONSTRAINT `fk5` FOREIGN KEY (`t_username`) REFERENCES `teacher` (`t_username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
