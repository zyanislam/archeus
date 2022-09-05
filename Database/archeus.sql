-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 10:39 PM
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
-- Table structure for table `bookmark_post`
--

CREATE TABLE `bookmark_post` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `bookmarked_post_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cv_basic`
--

CREATE TABLE `cv_basic` (
  `cv_id` int(11) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `st_email` varchar(255) NOT NULL,
  `st_contact` varchar(255) NOT NULL,
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
-- Table structure for table `post_student`
--

CREATE TABLE `post_student` (
  `stpost_id` varchar(255) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `stpost_title` varchar(255) DEFAULT NULL,
  `stpost_desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_student`
--

INSERT INTO `post_student` (`stpost_id`, `st_username`, `st_name`, `stpost_title`, `stpost_desc`) VALUES
('1', '011182035', 'Anika', 'Need one member for fydp', 'All the requirements here...');

-- --------------------------------------------------------

--
-- Table structure for table `post_teacher`
--

CREATE TABLE `post_teacher` (
  `tpost_id` varchar(255) NOT NULL,
  `t_username` varchar(255) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `tpost_title` varchar(255) DEFAULT NULL,
  `tpost_desc` longtext DEFAULT NULL,
  `tpost_datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_teacher`
--

INSERT INTO `post_teacher` (`tpost_id`, `t_username`, `t_name`, `tpost_title`, `tpost_desc`, `tpost_datetime`) VALUES
('1', 'AT', 'Anika Tahsin', 'Internship at BAT', '\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"', '2022-09-05 22:00:14'),
('2', 'FAI', 'Fahad Al Islam', 'Need FrontEnd Developer at Robi', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', '2022-09-05 22:00:14'),
('3', 'b', 'An', 'Job Vacancy at Grameen Phone', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia volupt', '2022-09-05 22:00:14'),
('4', 'X', 'Mr X', 'Fellowship at Google', '\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollit', '2022-09-05 22:00:14'),
('5', 'AT', 'Anika Tahsin', 'Need FrontEnd Developer at UIU IT Dept', 'What I find remarkable is that this text has been the industry\'s standard dummy text ever since some printer in the 1500s took a galley of type and scrambled it to make a type specimen book; it has survived not only four centuries of letter-by-letter resetting but even the leap into electronic typesetting, essentially unchanged except for an occasional \'ing\' or \'y\' thrown in. It\'s ironic that when the then-understood Latin was scrambled, it became as incomprehensible as Greek;', '2022-09-05 22:00:14'),
('6', 'FAI', 'Fahad Al Islam', 'Need an Intern', '“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam. Ut aliquet tristique nisl vitae volutpat. Nulla aliquet porttitor venenatis. Donec a dui et dui fringilla consectetur id nec massa. Aliquam erat volutpat. Sed ut dui ut lacus dictum fermentum vel tincidunt neque. Sed sed lacinia lectus. Duis sit amet sodales felis. Duis nunc eros, mattis at dui ac, convallis semper risus. In adipiscing ultrices tellus, in suscipit massa vehicula eu.”', '2022-09-05 22:04:44'),
('7', 'AT', 'Anika Tahsin', 'new post', 'acvd', '2022-09-06 12:08:20');

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
(3, '011182035', 'Anika Tahsin', 'atahsin182035@bscse.uiu.ac.bd', 'anika1234', 'CSE', NULL, '1996-10-26', 'Female', NULL, 'student', 0),
(4, '011183070', 'Fahad Al Islam', 'fislam@bscse.uiu.ac.bd', 'fahad1234', 'CSE', NULL, '2022-08-22', 'Male', NULL, 'student', 0),
(19, '011183013', 'Sadman Sakib', 'ssakib@bscse.uiu.ac.bd', '1234', 'CSE', NULL, '2022-08-25', 'Male', NULL, 'student', 0),
(24, '011182033', 'kamado tanjiro', 'tan@bscse.uiu.ac.bd', '1234', 'CSE', NULL, '2022-08-30', 'Male', NULL, 'student', 0),
(25, '011172035', 'x', 'x@bseee.uiu.ac.bd', '1234', 'CSE', NULL, '2022-09-03', 'Male', NULL, 'student', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_log`
--

CREATE TABLE `student_log` (
  `stlog_id` int(11) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `stlog_login_date_time` datetime DEFAULT NULL,
  `stlog_logout_date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_log`
--

INSERT INTO `student_log` (`stlog_id`, `st_username`, `st_name`, `stlog_login_date_time`, `stlog_logout_date_time`) VALUES
(6, '011182033', 'kamado tanjiro', '2022-08-30 01:33:30', '2022-08-30 01:35:55'),
(7, '011182035', 'Anika Tahsin', '2022-08-30 02:33:26', '2022-08-30 02:33:45'),
(8, '011183070', 'Fahad Islam', '2022-08-30 01:38:14', '2022-08-30 01:38:40'),
(9, '011172035', 'x', '2022-09-03 10:15:02', '2022-09-03 10:15:15');

-- --------------------------------------------------------

--
-- Table structure for table `tags_student`
--

CREATE TABLE `tags_student` (
  `id` int(11) NOT NULL,
  `post_student_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tags_teacher`
--

CREATE TABLE `tags_teacher` (
  `id` int(11) NOT NULL,
  `post_teacher_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
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
(2, 'AT', 'Anika Tahsin', 'at@uiu.ac.bd', '1234', 'CSE', 'Professor', 'teacher'),
(3, 'b', 'An', 'a', '1234', 'CE', 'c', 'teacher'),
(4, 'X', 'Mr X', 'x@gmail.com', '1234', 'CE', 'lecturer', 'teacher'),
(10, 'AH', 'Abir Hasan', 'abir@uiu.ac.bd', '1234', 'CSE', 'lecturer', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_log`
--

CREATE TABLE `teacher_log` (
  `tlog_id` int(11) NOT NULL,
  `t_username` varchar(255) NOT NULL,
  `tlog_name` varchar(255) NOT NULL,
  `tlog_login_date_time` datetime DEFAULT NULL,
  `tlog_logout_date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_log`
--

INSERT INTO `teacher_log` (`tlog_id`, `t_username`, `tlog_name`, `tlog_login_date_time`, `tlog_logout_date_time`) VALUES
(3, 'AH', 'Abir Hasan', '2022-09-04 02:56:36', '2022-09-04 02:56:41');

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
-- Indexes for table `bookmark_post`
--
ALTER TABLE `bookmark_post`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `post_student`
--
ALTER TABLE `post_student`
  ADD PRIMARY KEY (`stpost_id`),
  ADD KEY `fk9` (`st_username`);

--
-- Indexes for table `post_teacher`
--
ALTER TABLE `post_teacher`
  ADD PRIMARY KEY (`tpost_id`),
  ADD KEY `fk10` (`t_username`);

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
-- Indexes for table `tags_student`
--
ALTER TABLE `tags_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk13` (`post_student_id`);

--
-- Indexes for table `tags_teacher`
--
ALTER TABLE `tags_teacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk12` (`post_teacher_id`);

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
-- AUTO_INCREMENT for table `bookmark_post`
--
ALTER TABLE `bookmark_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `student_log`
--
ALTER TABLE `student_log`
  MODIFY `stlog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tags_student`
--
ALTER TABLE `tags_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags_teacher`
--
ALTER TABLE `tags_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teacher_log`
--
ALTER TABLE `teacher_log`
  MODIFY `tlog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- Constraints for table `post_student`
--
ALTER TABLE `post_student`
  ADD CONSTRAINT `fk9` FOREIGN KEY (`st_username`) REFERENCES `student` (`st_username`);

--
-- Constraints for table `student_log`
--
ALTER TABLE `student_log`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`st_username`) REFERENCES `student` (`st_username`);

--
-- Constraints for table `tags_student`
--
ALTER TABLE `tags_student`
  ADD CONSTRAINT `fk13` FOREIGN KEY (`post_student_id`) REFERENCES `post_student` (`stpost_id`);

--
-- Constraints for table `tags_teacher`
--
ALTER TABLE `tags_teacher`
  ADD CONSTRAINT `fk12` FOREIGN KEY (`post_teacher_id`) REFERENCES `post_teacher` (`tpost_id`);

--
-- Constraints for table `teacher_log`
--
ALTER TABLE `teacher_log`
  ADD CONSTRAINT `fk5` FOREIGN KEY (`t_username`) REFERENCES `teacher` (`t_username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
