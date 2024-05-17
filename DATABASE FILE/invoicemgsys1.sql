-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 04:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invoicemgsys1`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_assignment`
--

CREATE TABLE `add_assignment` (
  `teacher_name` varchar(50) NOT NULL,
  `Department name` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `session` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `lecture_no` int(50) NOT NULL,
  `add_clo` int(50) NOT NULL,
  `plo` int(50) NOT NULL,
  `course_content` varchar(70) NOT NULL,
  `assignment_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_assignment`
--

INSERT INTO `add_assignment` (`teacher_name`, `Department name`, `semester`, `session`, `course_name`, `lecture_no`, `add_clo`, `plo`, `course_content`, `assignment_no`) VALUES
('Dr.Azam', 'BSCS', '1st', 'fall-2023', 'DLD', 1, 1, 1, 'what is DLD', '1'),
('Dr.Azam', 'BSCS', '1st', 'fall-2023', 'DLD', 2, 1, 1, 'explain circuit', '2');

-- --------------------------------------------------------

--
-- Table structure for table `add_department`
--

CREATE TABLE `add_department` (
  `dep_id` int(40) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `Department_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_department`
--

INSERT INTO `add_department` (`dep_id`, `department_name`, `Department_id`) VALUES
(1, 'BSIT', '167778 '),
(2, 'BSCS', '167778 '),
(4, 'Departmentname1', '167778 '),
(5, 'Departmentname1', '45678 ');

-- --------------------------------------------------------

--
-- Table structure for table `add_presentation`
--

CREATE TABLE `add_presentation` (
  `teacher_name` varchar(50) NOT NULL,
  `Department name` varchar(50) NOT NULL,
  `subject_name` text NOT NULL,
  `presentation_weak` text NOT NULL,
  `presentation_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_presentation`
--

INSERT INTO `add_presentation` (`teacher_name`, `Department name`, `subject_name`, `presentation_weak`, `presentation_content`) VALUES
('[nasir hussain]', '[BSIT]', '[DLD]', '[2]', '[]'),
('[zohair hider]', '[BSIT]', '[DLD]', '[3]', '[ jlndkowecnmwp]'),
('[zohair hider]', '[BSIT]', '[DLD]', '[3]', ' jlndkowecnmwp'),
('[imran Al]', '[ADPCS]', '[DLD]', '[3]', 'rrrrr'),
('[]', '[]', '[]', '[]', ''),
('imran Al', 'BSIT', 'Data structure', '3', 'dgety6rht6');

-- --------------------------------------------------------

--
-- Table structure for table `add_programs`
--

CREATE TABLE `add_programs` (
  `program_id` int(11) NOT NULL,
  `department_name` varchar(255) DEFAULT NULL,
  `program_name` varchar(255) DEFAULT NULL,
  `programe_teacher` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_programs`
--

INSERT INTO `add_programs` (`program_id`, `department_name`, `program_name`, `programe_teacher`) VALUES
(1, 'BSCS', 'BSCS', 'nasir hussain'),
(8, 'BSIT', 'BSCS', 'nasir hussain'),
(9, 'BSIT', 'BSCS', 'nasir hussain'),
(10, 'BSIT', 'ADPCS', 'nasir hussain'),
(11, 'BSIT', 'BSIT', 'nasir hussain'),
(12, 'BSIT', 'BSCS', 'nasir hussain'),
(14, 'BSIT', 'BSCS', 'nasir hussain');

-- --------------------------------------------------------

--
-- Table structure for table `add_quiz`
--

CREATE TABLE `add_quiz` (
  `teacher_name` varchar(50) NOT NULL,
  `Department name` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `session` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `lecture_no` varchar(50) NOT NULL,
  `add_clo` varchar(50) NOT NULL,
  `plo` varchar(80) NOT NULL,
  `course_content` varchar(50) NOT NULL,
  `quiz_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_quiz`
--

INSERT INTO `add_quiz` (`teacher_name`, `Department name`, `semester`, `session`, `course_name`, `lecture_no`, `add_clo`, `plo`, `course_content`, `quiz_no`) VALUES
('Dr.Azam', 'BSCS', '1st', 'fall-2023', 'DLD', '1', '1', '1', 'explain kmap', '1');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `allocate_clo`
--

CREATE TABLE `allocate_clo` (
  `add_clo` varchar(50) NOT NULL,
  `add_plo` varchar(50) NOT NULL,
  `topics` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocate_clo`
--

INSERT INTO `allocate_clo` (`add_clo`, `add_plo`, `topics`) VALUES
('', 'invoice', ''),
('2', '3', 'dfff'),
('', 'invoice', ''),
('2', '3', 'dfff'),
('', 'invoice', ''),
('1', '3', 'dfff'),
('2', '2', 'dfff');

-- --------------------------------------------------------

--
-- Table structure for table `clo`
--

CREATE TABLE `clo` (
  `CLONumber` int(11) NOT NULL,
  `CLODescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clo`
--

INSERT INTO `clo` (`CLONumber`, `CLODescription`) VALUES
(1, 'Explain fundamental database concepts.'),
(2, 'Design conceptual, logical and physical database schemas using different data models.'),
(3, 'Understand fundamental concepts of digital logic design including basic and universal gates, number systems, binary coded systems, basic components of combinational and sequential circuits'),
(4, 'Understand the basic concepts of matrices, vector space, system of linear equations and inner product. And');

-- --------------------------------------------------------

--
-- Table structure for table `courselog_add`
--

CREATE TABLE `courselog_add` (
  `Teacherid` int(50) NOT NULL,
  `Teachername` varchar(50) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `lectureno` varchar(60) NOT NULL,
  `lectureweek` varchar(70) NOT NULL,
  `program` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `credit_hrs` varchar(50) NOT NULL,
  `session` text NOT NULL,
  `course_content` varchar(50) NOT NULL,
  `clo` varchar(10) NOT NULL,
  `plo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courselog_add`
--

INSERT INTO `courselog_add` (`Teacherid`, `Teachername`, `coursename`, `lectureno`, `lectureweek`, `program`, `semester`, `course_code`, `credit_hrs`, `session`, `course_content`, `clo`, `plo`) VALUES
(1, '{ zohair hider}', '  DLD', '{ 3}', '{addlectweek1 }', '{ BSIT}', '{ 3rd}', '{ 431}', '{ 1}', '{ fall-2019}', '{ rtyuhi}', '{ 3}', '2'),
(2, '{ zohair hider}', '  DLD', '{ 3}', '{addlectweek1 }', '{ BSIT}', '{ 3rd}', '{ 431}', '{ 1}', '{ fall-2019}', '{ rtyuhi}', '{ 3}', '2'),
(3, '{ zohair hider}', '  OOP', '{ 3}', '{addlectweek1 }', '{ BSIT}', '{ 3rd}', '{ 444}', '{ 2}', '{ fall-2025}', '{  what is my }', '{ 2}', '1'),
(4, '{ zohair hider}', '  OOP', '{ 3}', '{addlectweek1 }', '{ BSIT}', '{ 3rd}', '{ 444}', '{ 2}', '{ fall-2025}', '{  what is my }', '{ 2}', '1'),
(5, '{ zohair hider}', '  OOP', '{ 3}', '{addlectweek1 }', '{ BSIT}', '{ 3rd}', '{ 444}', '{ 2}', '{ fall-2025}', '{  what is my }', '{ 2}', '1'),
(6, '{ zohair hider}', '  OOP', '{ 3}', '{addlectweek1 }', '{ BSIT}', '{ 3rd}', '{ 444}', '{ 2}', '{ fall-2025}', '{  what is my }', '{ 2}', '1'),
(7, '{ zohair hider}', '  OOP', '{ 3}', '{addlectweek1 }', '{ BSIT}', '{ 3rd}', '{ 444}', '{ 2}', '{ fall-2025}', '{  what is my }', '{ 2}', '1'),
(8, ' ', '  ', ' ', 'addlectweek1 ', ' ', ' ', ' ', ' ', ' ', ' ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `final_paper`
--

CREATE TABLE `final_paper` (
  `teacher_name` varchar(50) NOT NULL,
  `Department name` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `session` varchar(50) NOT NULL,
  `course_name` text NOT NULL,
  `marks` bigint(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hod_login`
--

CREATE TABLE `hod_login` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hod_login`
--

INSERT INTO `hod_login` (`id`, `email`, `password`) VALUES
(1, 'hod@gmail.com', 'hod123');

-- --------------------------------------------------------

--
-- Table structure for table `mid_paper`
--

CREATE TABLE `mid_paper` (
  `teacher_name` varchar(50) NOT NULL,
  `Department name` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `session` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `marks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mid_paper`
--

INSERT INTO `mid_paper` (`teacher_name`, `Department name`, `semester`, `session`, `course_name`, `marks`) VALUES
('{ zohair hider}', '{ BSIT}', '{ 2nd}', 'fall-2020', '{  Data structure}', '{  }'),
('{ zohair hider}', '{ BSIT}', '{ 2nd}', 'fall-2020', '{  Data structure}', '{  }'),
('{ nasir hussain}', '{ BSCS}', '{ 3rd}', 'fall-2020', '{  OOP}', '{  10}'),
('{ }', '{ }', '{ }', '', '{  }', '{  }'),
('{ zohair hider}', '{ BSCS}', '{ 2nd}', 'fall-2019', '{  DLD}', '{  15}'),
('{ Dr.Azam}', '{ ADPCS}', '{ 3rd}', 'fall-2019', '{  DLD}', '{  5}'),
('{ Dr.Azam}', '{ ADPCS}', '{ 3rd}', 'fall-2019', '{  DLD}', '{  5}'),
('{ Dr.Azam}', '{ ADPCS}', '{ 3rd}', 'fall-2019', '{  DLD}', '{  5}'),
('{ zohair hider}', '{ ADPCS}', '{ 3rd}', 'fall-2019', '{  DLD}', '{  5}'),
('{ zohair hider}', '{ ADPCS}', '{ 3rd}', 'fall-2019', '{  DLD}', '{  5}');

-- --------------------------------------------------------

--
-- Table structure for table `plo`
--

CREATE TABLE `plo` (
  `PLOID` int(11) NOT NULL,
  `PLOHeading` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plo`
--

INSERT INTO `plo` (`PLOID`, `PLOHeading`) VALUES
(1, 'Academic Education'),
(2, 'Knowledge for Solving Computing Problems'),
(3, 'Problem Analysis'),
(4, 'Design/ Development of Solutions');

-- --------------------------------------------------------

--
-- Table structure for table `scheme_of_study`
--

CREATE TABLE `scheme_of_study` (
  `program _name` varchar(50) NOT NULL,
  `credit hrs` int(10) NOT NULL,
  `session` varchar(50) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `semester` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scheme_of_study`
--

INSERT INTO `scheme_of_study` (`program _name`, `credit hrs`, `session`, `coursename`, `semester`) VALUES
('{  ADPIT}', 0, '{ fall-2023}', '{coursenam2}', '2nd'),
('{  ADPIT}', 0, '{ fall-2023}', '{coursenam2}', '2nd'),
('{  }', 0, '{ fall-2020}', '{coursenam2}', '1st'),
('{  BSIT}', 0, '{ fall-2020}', '{coursenam2}', '2nd'),
('{  BSCS}', 0, '{ fall-2023}', '{coursenam2}', '2nd');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `student_id` int(50) NOT NULL,
  `student _name` varchar(50) NOT NULL,
  `Father_name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `cell_no` bigint(20) NOT NULL,
  `student_cnic` bigint(20) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`student_id`, `student _name`, `Father_name`, `Email`, `sem`, `cell_no`, `student_cnic`, `gender`) VALUES
(1, '34535', 'Raees ABu', 'Raees@gmail.com', '7th', 5566, 0, ''),
(2, '34535', 'Raees ABu', 'Raees@gmail.com', '7th', 5566, 0, ''),
(3, '34535', 'Raees ABu', 'Raees@gmail.com', '7th', 5566, 0, ''),
(4, '34535', 'Raees ABu', 'Raees@gmail.com', '7th', 244343, 3435463355, ''),
(5, '34535', 'Raees ABu', 'Raees@gmail.com', '7th', 244343, 3435463355, ''),
(9, 'Raees abbas', 't', 'raies@gmail.com', '7', 65677, 655555555, ''),
(10, 'Raees abbas', 't', 'raies@gmail.com', '7', 65677, 655555555, ''),
(11, 'M', 'K', 'raies@gmail.com', '8', 65677, 32102, ''),
(12, 'ghjghj', 'hjn bnm', 'b nmb', '8', 67890, 567890, ''),
(13, '', '', '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `subjectclomapping`
--

CREATE TABLE `subjectclomapping` (
  `MappingID` int(11) NOT NULL,
  `SubjectID` int(11) NOT NULL,
  `CLONumber` int(11) NOT NULL,
  `PLOID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjectclomapping`
--

INSERT INTO `subjectclomapping` (`MappingID`, `SubjectID`, `CLONumber`, `PLOID`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 2),
(3, 1, 3, 3),
(4, 1, 4, 2),
(5, 2, 1, 1),
(6, 2, 2, 2),
(7, 2, 3, 2),
(8, 2, 4, 4),
(9, 3, 1, 1),
(10, 3, 2, 3),
(11, 3, 3, 3),
(12, 3, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `SubjectID` int(11) NOT NULL,
  `SubjectName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`SubjectID`, `SubjectName`) VALUES
(1, 'Database System'),
(2, 'Digital & Logical Design'),
(3, 'Linear Algebra'),
(4, 'OOP');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_add_clo`
--

CREATE TABLE `teacher_add_clo` (
  `Teacherid` int(50) NOT NULL,
  `Teachername` varchar(50) NOT NULL,
  `Teacheraddplo` varchar(50) NOT NULL,
  `Teacheraddclo` varchar(70) NOT NULL,
  `TeacheraddBlevel` varchar(60) NOT NULL,
  `Teacheraddcloq` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_add_clo`
--

INSERT INTO `teacher_add_clo` (`Teacherid`, `Teachername`, `Teacheraddplo`, `Teacheraddclo`, `TeacheraddBlevel`, `Teacheraddcloq`) VALUES
(14, 'nasir hussain', '4', '', 'c3', 'Oop'),
(15, 'Dr.hamaid ghous', '3', '', 'c2', 'gdqagdajs'),
(16, 'imran Al', '4', '', 'c3', 'Data mining'),
(17, 'nasir hussain', '3', '', 'c4', 'Database'),
(18, 'nasir hussain', '3', '', 'c4', 'Database'),
(19, 'zeeshan hider', '2', '', 'c4', 'Database'),
(20, 'zeeshan hider', '2', '', 'c3', 'what is molvie'),
(21, 'imran Al', '3', '', 'c3', 'what is Data Minning'),
(22, 'imran Al', '3', '', 'c3', 'what is Data Minning'),
(23, 'imran Al', '2', '', 'c3', 'Database'),
(24, 'imran Al', '2', '', 'c3', 'Database'),
(25, '', '', '', '', ''),
(26, 'nasir hussain', '2', '', 'c4', 'gygrvthnbtg gtbt gjbg junhbjyhbgtu7'),
(27, 'nasir hussain', '', '', '', ''),
(28, 'zohair hider', '', '', '', ''),
(29, 'imran Al', '', '', '3', 'hfwejfbekjbf'),
(30, 'Dr.Azam', '', '', '3', 'hfwejfbekjbf'),
(31, 'zeeshan hider', '', '', '2', 'Oop'),
(32, 'zeeshan hider', '', '', '2', 'Oop'),
(33, 'zohair hider', '', '', '3', 'b n'),
(34, 'zohair hider', '', '', '3', 'b n'),
(35, 'Dr.hamaid ghous', '', '', '3', 'b n'),
(36, '', '', '', '', ''),
(37, '', '', '', '', ''),
(38, '', '', '', '', ''),
(39, '', '', '', '', ''),
(40, '', '', '', '', ''),
(41, '', '', '', '', ''),
(42, '', '', '', '', ''),
(43, '', '', '', '', ''),
(44, 'nasir hussain', '2', '', 'c2', 'kjnk'),
(45, '', '', '', '', ''),
(46, '', '', '', '', ''),
(47, '', '', '', '', ''),
(48, '2', '', '', '', 'genaric algrothim'),
(49, '4', '10', '', '', ''),
(50, 'Quizz', '', '', '', ''),
(51, 'Quizz', '', '', '', ''),
(52, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_password`
--

CREATE TABLE `teacher_password` (
  `teacher_id` int(40) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `teacher_email` varchar(50) NOT NULL,
  `teacher_phone` varchar(50) NOT NULL,
  `teacher_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_password`
--

INSERT INTO `teacher_password` (`teacher_id`, `teacher_name`, `teacher_email`, `teacher_phone`, `teacher_password`) VALUES
(1, 'Raees', 'Raees@gmail.com', '43344343', '29fd873305dde42e2b7e67f2180737f5'),
(2, 'gtdtd', 'thtddt@gmail.com', 'gygigfgeudy', '29fd873305dde42e2b7e67f2180737f5'),
(4, 'gtdtd', 'thtddt@gmail.com', 'gygigfgeudy', '29fd873305dde42e2b7e67f2180737f5'),
(5, 'gtdtd', 'thtddt@gmail.com', 'gygigfgeudy', '29fd873305dde42e2b7e67f2180737f5'),
(6, 'gtdtd', 'thtddt@gmail.com', 'gygigfgeudy', '29fd873305dde42e2b7e67f2180737f5');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_upload`
--

CREATE TABLE `teacher_upload` (
  `teacher_name` varchar(50) NOT NULL,
  `assig_1` varchar(50) NOT NULL,
  `assig_2` varchar(50) NOT NULL,
  `assig_3` varchar(50) NOT NULL,
  `assig_4` varchar(60) NOT NULL,
  `quiz1` varchar(50) NOT NULL,
  `quiz2` varchar(50) NOT NULL,
  `quiz3` varchar(50) NOT NULL,
  `quiz4` varchar(50) NOT NULL,
  `subject_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_upload`
--

INSERT INTO `teacher_upload` (`teacher_name`, `assig_1`, `assig_2`, `assig_3`, `assig_4`, `quiz1`, `quiz2`, `quiz3`, `quiz4`, `subject_name`) VALUES
('Dr.Azam ', ' 1', '2', '1 ', ' 2', ' 1', '1', '1 ', '2', '0'),
('zohair hider ', ' 1', '2', '1 ', ' 2', ' 1', '1', '1 ', '2', '0'),
('zohair hider ', ' 1', '2', '1 ', ' 2', ' 1', '1', '1 ', '2', '0'),
('zohair hider ', ' 1', '2', '1 ', ' 2', ' 1', '1', '1 ', '2', '0'),
('zeeshan hider ', ' 1', '1', '1 ', ' 1', ' 1', '1', '1 ', '1', '0'),
('zeeshan hider ', ' 1', '1', '1 ', ' 1', ' 1', '1', '1 ', '1', 'DLD'),
('Dr.Azam ', ' 1', '1', ' ', ' 3', ' ', '3', '3 ', '1', 'OOP'),
('zohair hider ', ' 1', '1', ' ', ' 2', ' 2', '1', '2 ', '2', 'Data structure');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_department`
--
ALTER TABLE `add_department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `add_programs`
--
ALTER TABLE `add_programs`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clo`
--
ALTER TABLE `clo`
  ADD PRIMARY KEY (`CLONumber`);

--
-- Indexes for table `courselog_add`
--
ALTER TABLE `courselog_add`
  ADD PRIMARY KEY (`Teacherid`);

--
-- Indexes for table `hod_login`
--
ALTER TABLE `hod_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plo`
--
ALTER TABLE `plo`
  ADD PRIMARY KEY (`PLOID`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subjectclomapping`
--
ALTER TABLE `subjectclomapping`
  ADD PRIMARY KEY (`MappingID`),
  ADD KEY `SubjectID` (`SubjectID`),
  ADD KEY `CLONumber` (`CLONumber`),
  ADD KEY `PLOID` (`PLOID`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`SubjectID`);

--
-- Indexes for table `teacher_add_clo`
--
ALTER TABLE `teacher_add_clo`
  ADD PRIMARY KEY (`Teacherid`);

--
-- Indexes for table `teacher_password`
--
ALTER TABLE `teacher_password`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_department`
--
ALTER TABLE `add_department`
  MODIFY `dep_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `add_programs`
--
ALTER TABLE `add_programs`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clo`
--
ALTER TABLE `clo`
  MODIFY `CLONumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courselog_add`
--
ALTER TABLE `courselog_add`
  MODIFY `Teacherid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hod_login`
--
ALTER TABLE `hod_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plo`
--
ALTER TABLE `plo`
  MODIFY `PLOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `student_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subjectclomapping`
--
ALTER TABLE `subjectclomapping`
  MODIFY `MappingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `SubjectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher_add_clo`
--
ALTER TABLE `teacher_add_clo`
  MODIFY `Teacherid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `teacher_password`
--
ALTER TABLE `teacher_password`
  MODIFY `teacher_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subjectclomapping`
--
ALTER TABLE `subjectclomapping`
  ADD CONSTRAINT `subjectclomapping_ibfk_1` FOREIGN KEY (`SubjectID`) REFERENCES `subjects` (`SubjectID`),
  ADD CONSTRAINT `subjectclomapping_ibfk_2` FOREIGN KEY (`CLONumber`) REFERENCES `clo` (`CLONumber`),
  ADD CONSTRAINT `subjectclomapping_ibfk_3` FOREIGN KEY (`PLOID`) REFERENCES `plo` (`PLOID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
