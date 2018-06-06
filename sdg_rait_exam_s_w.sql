-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2018 at 12:42 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdg_rait_exam_s/w`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocate_seat`
--

CREATE TABLE `allocate_seat` (
  `Roll_no` varchar(30) NOT NULL,
  `Seat` varchar(30) DEFAULT NULL,
  `Sem` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_table`
--

CREATE TABLE `course_table` (
  `Branch` varchar(30) NOT NULL,
  `pattern` varchar(30) DEFAULT NULL,
  `Sem` varchar(30) DEFAULT NULL,
  `sub_name` varchar(30) DEFAULT NULL,
  `sub_code` varchar(30) DEFAULT NULL,
  `lect/week` varchar(30) DEFAULT NULL,
  `pracweek` varchar(30) DEFAULT NULL,
  `twmax` varchar(30) DEFAULT NULL,
  `tw_min` int(30) DEFAULT NULL,
  `th_max` varchar(30) DEFAULT NULL,
  `th_min` varchar(30) DEFAULT NULL,
  `prac_max` varchar(30) DEFAULT NULL,
  `prac_min` varchar(30) DEFAULT NULL,
  `oral_max` varchar(30) DEFAULT NULL,
  `oral_min` varchar(30) DEFAULT NULL,
  `op_max` varchar(30) DEFAULT NULL,
  `op_min` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_table_cbgs`
--

CREATE TABLE `course_table_cbgs` (
  `Branch` varchar(30) NOT NULL,
  `Pattern` varchar(30) DEFAULT NULL,
  `Sem` varchar(30) NOT NULL,
  `Sub_name` varchar(30) DEFAULT NULL,
  `Sub_code` varchar(30) DEFAULT NULL,
  `lect/week` varchar(30) DEFAULT NULL,
  `prac/week` varchar(30) DEFAULT NULL,
  `credits_th` varchar(30) DEFAULT NULL,
  `credits_tw` varchar(30) DEFAULT NULL,
  `grade_ese` varchar(30) DEFAULT NULL,
  `grade_op` varchar(30) DEFAULT NULL,
  `grade_or` varchar(30) DEFAULT NULL,
  `grade_ia` varchar(30) DEFAULT NULL,
  `grade_tw` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_table_rev`
--

CREATE TABLE `course_table_rev` (
  `branch` varchar(30) NOT NULL,
  `pattern` varchar(30) NOT NULL,
  `sem` int(30) NOT NULL,
  `subject` varchar(350) NOT NULL,
  `Sub_code` varchar(30) DEFAULT NULL,
  `coursecredits_th` varchar(10) NOT NULL,
  `coursecredits_tw` varchar(10) NOT NULL,
  `grade_ese` varchar(1) NOT NULL,
  `grade_op` varchar(1) NOT NULL,
  `grade_or` varchar(1) NOT NULL,
  `grade_ia` varchar(1) NOT NULL,
  `grade_tw` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_table_rev`
--

INSERT INTO `course_table_rev` (`branch`, `pattern`, `sem`, `subject`, `Sub_code`, `coursecredits_th`, `coursecredits_tw`, `grade_ese`, `grade_op`, `grade_or`, `grade_ia`, `grade_tw`) VALUES
('CE', 'REV2012', 1, 'Applied Chemistry - I', NULL, '3', '0.5', '', '-', '-', '', ''),
('CE', 'REV2012', 1, 'Applied Mathematics - I', NULL, '4', '1', '', '-', '-', '', ''),
('CE', 'REV2012', 1, 'Applied Physics - I', NULL, '3', '0.5', '', '-', '-', '', ''),
('CE', 'REV2012', 1, 'Basic Electrical & Electronics Engg.', NULL, '4', '1', '', '', '', '', ''),
('CE', 'REV2012', 1, 'Basic Work Shop Practice I', NULL, '-', '2', '-', '-', '-', '-', ''),
('CE', 'REV2012', 1, 'Engineering Mechanics', NULL, '5', '1', '', '', '-', '', ''),
('CE', 'REV2012', 1, 'Environmental Studies (EVS)', NULL, '2', '-', '', '-', '-', '', '-'),
('CE', 'REV2012', 2, 'Applied Chemistry - II', NULL, '3', '0.5', '', '-', '-', '', ''),
('CE', 'REV2012', 2, 'Applied Mathematics - II', NULL, '4', '1', '', '-', '-', '', ''),
('CE', 'REV2012', 2, 'Applied Physics - II', NULL, '3', '0.5', '', '-', '-', '', ''),
('CE', 'REV2012', 2, 'Basic Work Shop Practice II', NULL, '-', '2', '-', '-', '-', '-', ''),
('CE', 'REV2012', 2, 'Communication Skills', NULL, '2', '1', '', '-', '-', '', ''),
('CE', 'REV2012', 2, 'Engineering Drawing', NULL, '3', '2', '', '', '-', '', ''),
('CE', 'REV2012', 2, 'Structured Programming Approach', NULL, '4', '1', '', '', '-', '', ''),
('CE', 'REV2012', 3, 'Applied Mathematics - III', NULL, '4', '1', '', '-', '-', '', ''),
('CE', 'REV2012', 3, 'Data Structures', NULL, '4', '1', '', '', '-', '', ''),
('CE', 'REV2012', 3, 'Digital Logic Design and Analysis', NULL, '3', '1', '', '-', '-', '', ''),
('CE', 'REV2012', 3, 'Discrete Structures', NULL, '4', '-', '', '-', '-', '', '-'),
('CE', 'REV2012', 3, 'Electronic Circuits & Communication Fundamental', NULL, '4', '1', '', '-', '', '', ''),
('CE', 'REV2012', 3, 'Object Oriented Programming Methodology', NULL, '4', '1', '', '', '-', '', ''),
('CE', 'REV2012', 4, 'Analysis of Algorithms', NULL, '4', '1', '', '', '-', '', ''),
('CE', 'REV2012', 4, 'Applied Mathematics - IV', NULL, '4', '1', '', '-', '-', '', ''),
('CE', 'REV2012', 4, 'Computer Graphics', NULL, '3', '1', '', '', '-', '', ''),
('CE', 'REV2012', 4, 'Computer Organization & Architecture', NULL, '4', '1', '', '-', '', '', ''),
('CE', 'REV2012', 4, 'Database Management System', NULL, '4', '1', '', '', '-', '', ''),
('CE', 'REV2012', 4, 'Theoretial Computer Science', NULL, '4', '-', '', '-', '-', '', '-'),
('CE', 'REV2012', 5, 'Business Communication & Ethics', NULL, '-', '2', '-', '-', '-', '-', ''),
('CE', 'REV2012', 5, 'Computer Networks', NULL, '4', '1', '', '', '-', '', ''),
('CE', 'REV2012', 5, 'Microprocessor', NULL, '4', '1', '', '', '-', '', ''),
('CE', 'REV2012', 5, 'Operating Systems', NULL, '4', '1', '', '', '-', '', ''),
('CE', 'REV2012', 5, 'Structured & Object Oriented Analysis & Design', NULL, '4', '1', '', '-', '', '', ''),
('CE', 'REV2012', 5, 'Web Technologies Laboratory', NULL, '-', '2', '-', '-', '', '-', ''),
('CE', 'REV2012', 6, 'Distributed Databases', NULL, '4', '1', '', '-', '', '', ''),
('CE', 'REV2012', 6, 'Mobile Communication and Computing', NULL, '4', '1', '', '', '-', '', ''),
('CE', 'REV2012', 6, 'Network Programming Laboratory', NULL, '-', '2', '-', '-', '', '-', ''),
('CE', 'REV2012', 6, 'Project Management', NULL, '-', '2', '-', '-', '-', '-', ''),
('CE', 'REV2012', 6, 'Software Engineering', NULL, '4', '1', '', '-', '', '', ''),
('CE', 'REV2012', 6, 'System Programming & Compiler Construction ', NULL, '4', '1', '', '', '-', '', ''),
('CE', 'REV2012', 7, 'Artificial Intelligence', NULL, '4', '1', '', '-', '', '', ''),
('CE', 'REV2012', 7, 'Cryptography and System Security', NULL, '4', '1', '', '-', '', '', ''),
('CE', 'REV2012', 7, 'Digital Signal Processing', NULL, '4', '1', '', '-', '-', '', ''),
('CE', 'REV2012', 7, 'Elective - II', NULL, '4', '1', '', '-', '', '', ''),
('CE', 'REV2012', 7, 'Network Threats and Attack Laboratory', NULL, '-', '2', '', '-', '', '-', ''),
('CE', 'REV2012', 7, 'Project - I', NULL, '-', '3', '-', '-', '', '-', ''),
('CE', 'REV2012', 8, 'Cloud Computing Laboratory', NULL, '-', '1', '-', '-', '-', '-', '-'),
('CE', 'REV2012', 8, 'Data Warehouse and Mining', NULL, '4', '1', '-', '-', '-', '-', '-'),
('CE', 'REV2012', 8, 'Elective - III', NULL, '4', '1', '-', '-', '-', '-', '-'),
('CE', 'REV2012', 8, 'Human Machine Interaction', NULL, '4', '1', '-', '-', '-', '-', '-'),
('CE', 'REV2012', 8, 'Parallel and Distributed Systems', NULL, '4', '1', '-', '-', '-', '-', '-'),
('CE', 'REV2012', 8, 'Project - II', NULL, '-', '6', '-', '-', '-', '-', '-'),
('EL', 'REV2012', 1, 'Applied Chemistry - I', NULL, '3', '0.5', '', '-', '-', '', ''),
('EL', 'REV2012', 1, 'Applied Mathematics - I', NULL, '4', '1', '', '-', '-', '', ''),
('EL', 'REV2012', 1, 'Applied Physics - I', NULL, '3', '0.5', '', '-', '-', '', ''),
('EL', 'REV2012', 1, 'Basic Electrical & Electronics Engg.', NULL, '4', '1', '', '', '-', '', ''),
('EL', 'REV2012', 1, 'Basic Workshop and Practice-I', NULL, '-', '2', '-', '-', '-', '-', ''),
('EL', 'REV2012', 1, 'Engineering Mechanics', NULL, '5', '1', '', '', '-', '', ''),
('EL', 'REV2012', 1, 'Environmental Studies ( EVS )', NULL, '2', '-', '', '-', '-', '', '-'),
('EL', 'REV2012', 2, 'Applied Chemistry - II', NULL, '3', '0.5', '', '-', '-', '', ''),
('EL', 'REV2012', 2, 'Applied Mathematics - II', NULL, '4', '1', '', '-', '-', '', ''),
('EL', 'REV2012', 2, 'Applied Physics - II', NULL, '3', '0.5', '', '-', '-', '', ''),
('EL', 'REV2012', 2, 'Basic Work Shop  Practice - II', NULL, '-', '2', '-', '-', '-', '-', ''),
('EL', 'REV2012', 2, 'Communication Skills', NULL, '2', '1', '', '-', '-', '', ''),
('EL', 'REV2012', 2, 'Engineering Drawing', NULL, '3', '2', '', '', '-', '', ''),
('EL', 'REV2012', 2, 'Structured Programming Approach', NULL, '4', '1', '', '', '-', '', ''),
('EL', 'REV2012', 3, 'Applied Mathematics - III', NULL, '4', '1', '', '-', '-', '', ''),
('EL', 'REV2012', 3, 'Circuit Theory', NULL, '4', '-', '', '-', '-', '', '-'),
('EL', 'REV2012', 3, 'Circuit Theory & Measurements Laboratry', NULL, '-', '1', '-', '-', '-', '-', ''),
('EL', 'REV2012', 3, 'Digital Circuits and Design', NULL, '4', '-', '', '-', '-', '', '-'),
('EL', 'REV2012', 3, 'Digital Circuits and Design Laboratory', NULL, '-', '1', '-', '', '-', '-', ''),
('EL', 'REV2012', 3, 'Electronics Devices', NULL, '4', '-', '', '-', '-', '', '-'),
('EL', 'REV2012', 3, 'Electronics Devices Laboratory', NULL, '-', '1', '-', '', '-', '-', ''),
('EL', 'REV2012', 3, 'Electronics Instruments & Measurements', NULL, '4', '-', '', '-', '-', '', '-'),
('EL', 'REV2012', 3, 'Object Oriented Programming Methodology Lab.', NULL, '-', '2', '-', '', '-', '-', ''),
('EL', 'REV2012', 4, 'Applied Mathematics - IV', NULL, '4', '1', '', '-', '-', '', ''),
('EL', 'REV2012', 4, 'Communication Engg. Laboratory', NULL, '-', '1', '-', '', '-', '-', ''),
('EL', 'REV2012', 4, 'Control Systems & Electrical Machines Lab.', NULL, '-', '1', '-', '-', '', '-', ''),
('EL', 'REV2012', 4, 'Discrete Electronics Circuits', NULL, '4', '-', '', '-', '-', '', '-'),
('EL', 'REV2012', 4, 'Discrete Electronics Laboratory', NULL, '-', '1', '-', '', '-', '-', ''),
('EL', 'REV2012', 4, 'Electrical Machines', NULL, '3', '-', '', '-', '-', '', '-'),
('EL', 'REV2012', 4, 'Fundamentals of Comm. Engg.', NULL, '4', '-', '', '-', '-', '', '-'),
('EL', 'REV2012', 4, 'Microprocessors & Peripherals', NULL, '4', '-', '', '-', '-', '', '-'),
('EL', 'REV2012', 4, 'Microprocessors & Peripherals Laboratory', NULL, '-', '1', '-', '-', '', '-', ''),
('EL', 'REV2012', 4, 'Principles of Control Systems', NULL, '4', '-', '', '-', '-', '', '-'),
('EL', 'REV2012', 5, 'Business Communication & Ethics', NULL, '-', '2', '-', '-', '-', '-', ''),
('EL', 'REV2012', 5, 'Design With Linear Integrated Circuits', NULL, '4', '-', '', '-', '-', '', '-'),
('EL', 'REV2012', 5, 'Design With Linear Integrated Circuits Lab', NULL, '-', '1', '-', '', '-', '-', ''),
('EL', 'REV2012', 5, 'Digital Communication', NULL, '4', '-', '', '-', '-', '', '-'),
('EL', 'REV2012', 5, 'Digital Communication  Lab ', NULL, '-', '1', '-', '-', '', '-', ''),
('EL', 'REV2012', 5, 'Electromagnetic Engineering', NULL, '4', '-', '', '-', '-', '', '-'),
('EL', 'REV2012', 5, 'Microcontrollers and Applications', NULL, '4', '-', '', '-', '-', '', '-'),
('EL', 'REV2012', 5, 'Microcontrollers and Applications Lab', NULL, '-', '1', '-', '', '-', '-', ''),
('EL', 'REV2012', 5, 'Mini Project', NULL, '-', '2', '-', '-', '', '-', ''),
('EL', 'REV2012', 5, 'Signals and Systems', NULL, '4', '1', '', '-', '-', '', ''),
('EL', 'REV2012', 6, 'Advanced Instrumentation & Power Electronics Lab.', NULL, '-', '1', '-', '', '-', '-', ''),
('EL', 'REV2012', 6, 'Advanced Instrumentation Systems', NULL, '4', '-', '', '-', '-', '', '-'),
('EL', 'REV2012', 6, 'Basic VLSI Design', NULL, '4', '-', '', '-', '-', '', '-'),
('EL', 'REV2012', 6, 'Computer Organization', NULL, '4', '-', '', '-', '-', '', '-'),
('EL', 'REV2012', 6, 'Digital Signal Processing & Processor', NULL, '4', '-', '', '-', '-', '', '-'),
('EL', 'REV2012', 6, 'Digital Signal Processing & Processor Lab.', NULL, '-', '1', '-', '-', '', '-', ''),
('EL', 'REV2012', 6, 'Mini Project II', NULL, '-', '2', '-', '', '-', '-', ''),
('EL', 'REV2012', 6, 'Modern IT For Management', NULL, '2', '-', '', '-', '-', '', '-'),
('EL', 'REV2012', 6, 'Power Electronics I', NULL, '4', '-', '', '-', '-', '', '-'),
('EL', 'REV2012', 6, 'VLSI Design Laboratory', NULL, '-', '1', '-', '-', '', '-', ''),
('EL', 'REV2012', 7, 'Computer Communication Networks', NULL, '4', '1', '', '-', '', '', ''),
('EL', 'REV2012', 7, 'Elective II', NULL, '4', '1', '', '-', '', '', ''),
('EL', 'REV2012', 7, 'Embedded System Design', NULL, '4', '1', '', '-', '', '', ''),
('EL', 'REV2012', 7, 'IC Technology', NULL, '4', '1', '', '-', '', '', ''),
('EL', 'REV2012', 7, 'Power Electronics - II', NULL, '4', '1', '', '-', '', '', ''),
('EL', 'REV2012', 7, 'Project - I', NULL, '-', '2', '-', '-', '', '-', ''),
('EL', 'REV2012', 8, 'Advanced Networking Technologies', NULL, '4', '1', '', '', '', '', ''),
('EL', 'REV2012', 8, 'CMOS VLSI Design', NULL, '4', '1', '', '', '', '', ''),
('EL', 'REV2012', 8, 'Elective III', NULL, '4', '1', '', '', '', '', ''),
('EL', 'REV2012', 8, 'MEMS Technology', NULL, '4', '1', '', '', '', '', ''),
('EL', 'REV2012', 8, 'Project - II', NULL, '-', '4', '-', '-', '', '-', ''),
('ET', 'REV2012', 1, 'Applied Chemistry - I', NULL, '3', '0.5', '', '-', '-', '', ''),
('ET', 'REV2012', 1, 'Applied Mathematics - I', NULL, '4', '1', '', '-', '-', '', ''),
('ET', 'REV2012', 1, 'Applied Physics - I', NULL, '3', '0.5', '', '-', '-', '', ''),
('ET', 'REV2012', 1, 'Basic Electrical & Electronics Engg.', NULL, '4', '1', '', '', '-', '', ''),
('ET', 'REV2012', 1, 'Basic Work Shop & Practice- I', NULL, '-', '2', '-', '-', '-', '-', ''),
('ET', 'REV2012', 1, 'Engineering Mechanics', NULL, '5', '1', '', '', '-', '', ''),
('ET', 'REV2012', 1, 'Environmental Studies ( EVS )', NULL, '2', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 2, 'Applied Chemistry - II', NULL, '3', '0.5', '', '-', '-', '', ''),
('ET', 'REV2012', 2, 'Applied Mathematics - II', NULL, '4', '1', '', '-', '-', '', ''),
('ET', 'REV2012', 2, 'Applied Physics - II', NULL, '3', '0.5', '', '-', '-', '', ''),
('ET', 'REV2012', 2, 'Basic Work Shop  Practice - II', NULL, '-', '2', '-', '-', '-', '-', ''),
('ET', 'REV2012', 2, 'Communication Skills', NULL, '2', '1', '', '-', '-', '', ''),
('ET', 'REV2012', 2, 'Engineering Drawing', NULL, '3', '2', '', '', '-', '', ''),
('ET', 'REV2012', 2, 'Structured Programming Approach', NULL, '4', '1', '', '', '-', '', ''),
('ET', 'REV2012', 3, 'Analog Electronics - I', NULL, '4', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 3, 'Analog Electronics I Laboratory', NULL, '-', '1', '-', '', '-', '-', ''),
('ET', 'REV2012', 3, 'Applied Mathematics - III', NULL, '4', '1', '', '-', '-', '', ''),
('ET', 'REV2012', 3, 'Circuits and Measurements Laboratory', NULL, '-', '1', '-', '-', '-', '-', ''),
('ET', 'REV2012', 3, 'Circuits and Transsmission Lines', NULL, '4', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 3, 'Digital Electronics', NULL, '4', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 3, 'Digital Electronics Laboratory', NULL, '-', '1', '-', '', '-', '-', ''),
('ET', 'REV2012', 3, 'Electronics Instruments & Measurements', NULL, '4', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 3, 'Object Oriented Programmig Methodology Lab.', NULL, '-', '2', '-', '', '-', '-', ''),
('ET', 'REV2012', 4, 'Analog Electronics - II', NULL, '4', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 4, 'Analog Electronics II Lab.', NULL, '-', '1', '-', '', '-', '-', ''),
('ET', 'REV2012', 4, 'Applied Mathematics - IV', NULL, '4', '1', '', '-', '-', '', ''),
('ET', 'REV2012', 4, 'Control Systems', NULL, '4', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 4, 'Microprocessors & Peripherals', NULL, '4', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 4, 'Microprocessors & Peripherals Lab.', NULL, '-', '1', '-', '', '-', '-', ''),
('ET', 'REV2012', 4, 'Signals and Systems', NULL, '3', '1', '', '-', '-', '', ''),
('ET', 'REV2012', 4, 'Software Simulation Lab.', NULL, '-', '1', '-', '', '-', '-', ''),
('ET', 'REV2012', 4, 'Wave Theory and Propagation', NULL, '4', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 5, 'Analog Communication', NULL, '4', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 5, 'Business Comm. And Ethics', NULL, '-', '2', '-', '-', '-', '-', ''),
('ET', 'REV2012', 5, 'Communication Engg. Lab I', NULL, '-', '1', '-', '', '-', '-', ''),
('ET', 'REV2012', 5, 'Communication Engg. Lab II', NULL, '-', '1', '-', '', '-', '-', ''),
('ET', 'REV2012', 5, 'Integrated Circuits', NULL, '4', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 5, 'Microcontrollers and Applications', NULL, '4', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 5, 'Microcontrollers and Applications Lab.', NULL, '-', '1', '-', '', '-', '-', ''),
('ET', 'REV2012', 5, 'Mini Project', NULL, '-', '1', '-', '', '-', '-', ''),
('ET', 'REV2012', 5, 'Random Signal Analysis', NULL, '4', '1', '', '-', '-', '', '-'),
('ET', 'REV2012', 5, 'RF Modeling and Antennas', NULL, '4', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 6, 'Communication Engg. Lab III', NULL, '-', '1', '-', '', '-', '-', ''),
('ET', 'REV2012', 6, 'Communication Engg. Lab IV', NULL, '-', '1', '-', '', '-', '-', ''),
('ET', 'REV2012', 6, 'Computer Comm. Telecom Net.', NULL, '4', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 6, 'Digital Communication', NULL, '4', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 6, 'Discrete Time Signal Processing', NULL, '4', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 6, 'Discrete Time Signal Processing Lab', NULL, '-', '1', '-', '', '-', '-', ''),
('ET', 'REV2012', 6, 'Mini Project II', NULL, '-', '1', '-', '', '-', '-', ''),
('ET', 'REV2012', 6, 'Operating Systems', NULL, '4', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 6, 'Television Engineering', NULL, '4', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 6, 'VLSI Design', NULL, '4', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 7, 'Advance Communication Engineering Lab II', NULL, '-', '1', '', '', '', '', ''),
('ET', 'REV2012', 7, 'Advance Communication Engineering Laboratory I', NULL, '-', '1', '-', '-', '', '-', ''),
('ET', 'REV2012', 7, 'Elective - II', NULL, '4', '1', '', '-', '', '', ''),
('ET', 'REV2012', 7, 'Image and Video Processing', NULL, '4', '1', '', '-', '', '', ''),
('ET', 'REV2012', 7, 'Microwave and Radar Engineering', NULL, '4', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 7, 'Mobile Communication ', NULL, '4', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 7, 'Optical Communication and Networks', NULL, '4', '-', '', '-', '-', '', '-'),
('ET', 'REV2012', 7, 'Project - I', NULL, '-', '3', '-', '-', '', '-', ''),
('ET', 'REV2012', 8, 'Elective III', NULL, '4', '1', '', '-', '', '', ''),
('ET', 'REV2012', 8, 'Internet and Voice Communication', NULL, '4', '1', '', '-', '', '', ''),
('ET', 'REV2012', 8, 'Project - II', NULL, '-', '6', '-', '-', '', '-', ''),
('ET', 'REV2012', 8, 'Satellite Communication and Networks', NULL, '4', '1', '', '-', '', '', ''),
('ET', 'REV2012', 8, 'Wireless Networks', NULL, '4', '1', '', '-', '', '', ''),
('IN', 'REV2012', 1, 'Applied Chemistry - I', NULL, '3', '0.5', '', '-', '-', '', ''),
('IN', 'REV2012', 1, 'Applied Mathematics - I', NULL, '4', '1', '', '-', '-', '', ''),
('IN', 'REV2012', 1, 'Applied Physics - I', NULL, '3', '0.5', '', '-', '-', '', ''),
('IN', 'REV2012', 1, 'Basic Electrical & Electronics Engg.', NULL, '4', '1', '', '', '-', '', ''),
('IN', 'REV2012', 1, 'Basic Work Shop & Practice - I', NULL, '-', '2', '-', '-', '-', '-', ''),
('IN', 'REV2012', 1, 'Engineering Mechanics', NULL, '5', '1', '', '', '-', '', ''),
('IN', 'REV2012', 1, 'Environmental Studies ( EVS )', NULL, '2', '-', '', '-', '-', '', '-'),
('IN', 'REV2012', 2, 'Applied Chemistry - II', NULL, '3', '0.5', '', '-', '-', '', ''),
('IN', 'REV2012', 2, 'Applied Mathematics - II', NULL, '4', '1', '', '-', '-', '', ''),
('IN', 'REV2012', 2, 'Applied Physics - II', NULL, '3', '0.5', '', '-', '-', '', ''),
('IN', 'REV2012', 2, 'Basic Workshop Practice - II', NULL, '-', '2', '-', '-', '-', '-', ''),
('IN', 'REV2012', 2, 'Communication Skills', NULL, '2', '1', '', '-', '-', '', ''),
('IN', 'REV2012', 2, 'Engineering Drawing', NULL, '3', '2', '', '', '-', '', ''),
('IN', 'REV2012', 2, 'Structured Programming Approach', NULL, '4', '1', '', '', '-', '', ''),
('IN', 'REV2012', 3, 'Analog Electronics', NULL, '4', '1', '', '', '-', '', ''),
('IN', 'REV2012', 3, 'Applied Maths- III', NULL, '4', '1', '', '-', '-', '', ''),
('IN', 'REV2012', 3, 'Digital Electronics', NULL, '4', '1', '', '-', '-', '', ''),
('IN', 'REV2012', 3, 'Electrical Network Analysis & Synthesis', NULL, '4', '1', '', '-', '-', '', ''),
('IN', 'REV2012', 3, 'Object oriented programming and methodology', NULL, '-', '2', '', '', '-', '-', ''),
('IN', 'REV2012', 3, 'Transducers-I', NULL, '4', '1', '', '', '-', '', ''),
('IN', 'REV2012', 4, 'Application Software Practices', NULL, '-', '2', '-', '', '-', '-', ''),
('IN', 'REV2012', 4, 'Applied Maths-IV', NULL, '4', '1', '', '-', '-', '', ''),
('IN', 'REV2012', 4, 'Communication System', NULL, '4', '1', '', '-', '-', '', ''),
('IN', 'REV2012', 4, 'Electrical Technology and Instruments', NULL, '4', '1', '', '-', '', '', ''),
('IN', 'REV2012', 4, 'Feedback Control System', NULL, '4', '1', '', '-', '', '', ''),
('IN', 'REV2012', 4, 'Transducers-II', NULL, '4', '1', '', '', '-', '', ''),
('IN', 'REV2012', 5, 'Applications of Microcontroller -I', NULL, '4', '1', '', '', '-', '', ''),
('IN', 'REV2012', 5, 'Business Communication and Ethics', NULL, '-', '2', '-', '-', '-', '-', ''),
('IN', 'REV2012', 5, 'Control system components', NULL, '4', '1', '', '', '-', '', ''),
('IN', 'REV2012', 5, 'Control System Design', NULL, '4', '1', '', '-', '-', '', ''),
('IN', 'REV2012', 5, 'Signal Conditioning & Circuit Design', NULL, '4', '2', '', '', '', '', ''),
('IN', 'REV2012', 5, 'Signals and Systems', NULL, '4', '1', '', '-', '-', '', ''),
('IN', 'REV2012', 6, 'Analytical Instrumentation', NULL, '3', '1', '', '-', '-', '', ''),
('IN', 'REV2012', 6, 'Applications of Microcontroller -II', NULL, '4', '1', '', '', '', '', ''),
('IN', 'REV2012', 6, 'Digital Signal Processing', NULL, '4', '1', '', '-', '', '', ''),
('IN', 'REV2012', 6, 'Industrial Data Communication', NULL, '3', '1', '', '-', '-', '', ''),
('IN', 'REV2012', 6, 'Power Electronics and Drives', NULL, '4', '1', '', '', '-', '', ''),
('IN', 'REV2012', 6, 'Process Instrumentation Systems', NULL, '4', '1', '', '-', '', '', ''),
('IN', 'REV2012', 7, 'Advanced Control Systems', NULL, '4', '1', '', '', '', '', ''),
('IN', 'REV2012', 7, 'Biomedical Instrumentation', NULL, '4', '1', '', '-', '', '', ''),
('IN', 'REV2012', 7, 'Elective II', NULL, '4', '1', '', '-', '', '', ''),
('IN', 'REV2012', 7, 'Industrial Process Control', NULL, '4', '1', '', '-', '', '', ''),
('IN', 'REV2012', 7, 'Process Automation', NULL, '4', '1', '', '-', '', '', ''),
('IN', 'REV2012', 7, 'Project - I', NULL, '-', '3', '-', '-', '', '-', ''),
('IN', 'REV2012', 8, 'Digital Control System', NULL, '4', '1', '', '', '', '', ''),
('IN', 'REV2012', 8, 'Elective III', NULL, '4', '1', '', '-', '', '', ''),
('IN', 'REV2012', 8, 'Instrument and System Design', NULL, '4', '1', '', '-', '', '', ''),
('IN', 'REV2012', 8, 'Instrumentation Project Documentation and Execution', NULL, '4', '1', '', '-', '', '', ''),
('IN', 'REV2012', 8, 'Project - II', NULL, '-', '6', '-', '-', '', '-', ''),
('IT', 'REV2012', 1, 'Applied Chemistry - I', NULL, '3', '0.5', '', '-', '-', '', ''),
('IT', 'REV2012', 1, 'Applied Mathematics - I', NULL, '4', '1', '', '-', '-', '', ''),
('IT', 'REV2012', 1, 'Applied Physics - I', NULL, '3', '0.5', '', '-', '-', '', ''),
('IT', 'REV2012', 1, 'Basic Electrical & Electronics Engg.', NULL, '4', '1', '', '', '-', '', ''),
('IT', 'REV2012', 1, 'Basic Work Shop & Practice- I', NULL, '-', '2', '-', '-', '-', '-', ''),
('IT', 'REV2012', 1, 'Engineering Mechanics', NULL, '5', '1', '', '', '-', '', ''),
('IT', 'REV2012', 1, 'Environmental Studies ( EVS )', NULL, '2', '-', '', '-', '-', '', '-'),
('IT', 'REV2012', 2, 'Applied Chemistry - II', NULL, '3', '0.5', '', '-', '-', '', ''),
('IT', 'REV2012', 2, 'Applied Mathematics - II', NULL, '4', '1', '', '-', '-', '', ''),
('IT', 'REV2012', 2, 'Applied Physics - II', NULL, '3', '0.5', '', '-', '-', '', ''),
('IT', 'REV2012', 2, 'Basic Work Shop  Practice - II', NULL, '-', '2', '-', '-', '-', '-', ''),
('IT', 'REV2012', 2, 'Communication Skills', NULL, '2', '1', '', '-', '-', '', ''),
('IT', 'REV2012', 2, 'Engineering Drawing', NULL, '3', '2', '', '', '-', '', ''),
('IT', 'REV2012', 2, 'Structured Programming Approach', NULL, '4', '1', '', '', '-', '', ''),
('IT', 'REV2012', 3, 'Analog & Digital Circuits', NULL, '4', '1', '', '', '-', '', ''),
('IT', 'REV2012', 3, 'Applied Mathematics - III', NULL, '4', '1', '', '-', '-', '', ''),
('IT', 'REV2012', 3, 'Data Structure & Algorithm Analysis', NULL, '4', '1', '', '', '-', '', ''),
('IT', 'REV2012', 3, 'Database Management System', NULL, '3', '1', '', '', '-', '', ''),
('IT', 'REV2012', 3, 'Object Oriented Programming Methodology', NULL, '4', '1', '', '', '-', '', ''),
('IT', 'REV2012', 3, 'Principles of Analog & Digital Communication', NULL, '3', '1', '', '-', '', '', ''),
('IT', 'REV2012', 4, 'Applied Mathematics - IV', NULL, '4', '1', '', '-', '-', '', ''),
('IT', 'REV2012', 4, 'Automata Theory', NULL, '3', '1', '', '-', '-', '', ''),
('IT', 'REV2012', 4, 'Computer Networks', NULL, '4', '1', '', '-', '', '', ''),
('IT', 'REV2012', 4, 'Computer Organization & Architecture', NULL, '3', '1', '', '-', '', '', ''),
('IT', 'REV2012', 4, 'Information Theory & Coding', NULL, '4', '1', '', '-', '-', '', ''),
('IT', 'REV2012', 4, 'Web Programming', NULL, '4', '1', '', '-', '', '', ''),
('IT', 'REV2012', 5, 'Advanced Database Management Systems', NULL, '4', '1', '', '-', '', '', ''),
('IT', 'REV2012', 5, 'Business Communication and Ethics', NULL, '-', '2', '-', '-', '', '-', ''),
('IT', 'REV2012', 5, 'Computer Graphics & Virtual Reality', NULL, '4', '1', '', '', '-', '', ''),
('IT', 'REV2012', 5, 'Microcontroller & Embedded Systems', NULL, '4', '1', '', '-', '', '', ''),
('IT', 'REV2012', 5, 'Open Source Technologies', NULL, '3', '1', '', '', '-', '', ''),
('IT', 'REV2012', 5, 'Operating Systems', NULL, '4', '1', '', '-', '', '', ''),
('IT', 'REV2012', 6, 'Advance Internet Technology', NULL, '4', '1', '', '', '-', '', ''),
('IT', 'REV2012', 6, 'Data Mining & Business Intelligence', NULL, '4', '1', '', '-', '', '', ''),
('IT', 'REV2012', 6, 'Distributed Systems', NULL, '4', '1', '', '-', '', '', ''),
('IT', 'REV2012', 6, 'Software Engineering', NULL, '4', '1', '', '-', '', '', ''),
('IT', 'REV2012', 6, 'System & Web Security', NULL, '4', '1', '', '-', '', '', ''),
('IT', 'REV2012', 7, 'Cloud Computing ', NULL, '3', '1', '', '-', '', '', ''),
('IT', 'REV2012', 7, 'Elective II', NULL, '4', '1', '', '-', '', '', ''),
('IT', 'REV2012', 7, 'Intelligent System', NULL, '4', '1', '', '-', '', '', ''),
('IT', 'REV2012', 7, 'Project - I', NULL, '-', '3', '-', '-', '', '-', ''),
('IT', 'REV2012', 7, 'Software Project Management', NULL, '4', '1', '', '-', '', '', ''),
('IT', 'REV2012', 7, 'Wireless Technology', NULL, '4', '1', '', '-', '', '', ''),
('IT', 'REV2012', 8, 'Big Data Analytics', NULL, '4', '1', '', '-', '', '', ''),
('IT', 'REV2012', 8, 'Computer Simulation and Modeling', NULL, '4', '1', '', '-', '', '', ''),
('IT', 'REV2012', 8, 'Elective III', NULL, '4', '1', '', '-', '', '', ''),
('IT', 'REV2012', 8, 'Project - II', NULL, '-', '6', '-', '-', '', '-', ''),
('IT', 'REV2012', 8, 'Storage Network Management and Retrieval', NULL, '4', '1', '', '-', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_cgpi`
--

CREATE TABLE `student_cgpi` (
  `seat` varchar(30) DEFAULT NULL,
  `Roll_No` varchar(30) NOT NULL,
  `exam_yr` varchar(30) DEFAULT NULL,
  `cgpi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `Roll_no` varchar(30) NOT NULL,
  `Branch` varchar(30) NOT NULL,
  `Fullname` varchar(30) DEFAULT NULL,
  `Pattern` varchar(30) DEFAULT NULL,
  `sem_reg` varchar(30) DEFAULT NULL,
  `shift` varchar(30) DEFAULT NULL,
  `sex` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_details_copy`
--

CREATE TABLE `student_details_copy` (
  `Roll_no` varchar(30) DEFAULT NULL,
  `Branch` varchar(30) DEFAULT NULL,
  `Fullname` varchar(30) DEFAULT NULL,
  `Pattern` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details_copy`
--

INSERT INTO `student_details_copy` (`Roll_no`, `Branch`, `Fullname`, `Pattern`) VALUES
('00CE166', 'C', 'SUDRIK PRAMOD RAMESHRAO', '0'),
('00CE166', 'C', 'SUDRIK PRAMOD RAMESHRAO', ''),
('00CE166', 'C', 'SUDRIK PRAMOD RAMESHRAO', ''),
('00CE166', 'C', 'SUDRIK PRAMOD RAMESHRAO', ''),
('00CE166', 'C', 'SUDRIK PRAMOD RAMESHRAO', ''),
('02CE1005', 'C', 'BHERE TUSHAR  KANHU', ''),
('02CE1010', 'C', 'DIXIT ABHIJIT BRAHMKUMAR', ''),
('02CE1010', 'C', 'DIXIT ABHIJIT BRAHMKUMAR', ''),
('02CE1010', 'C', 'DIXIT ABHIJIT BRAHMKUMAR', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_final_marksheet`
--

CREATE TABLE `student_final_marksheet` (
  `seat` varchar(30) DEFAULT NULL,
  `Roll_No` varchar(30) NOT NULL,
  `branch` varchar(30) DEFAULT NULL,
  `full_name` varchar(30) DEFAULT NULL,
  `pattern` varchar(30) DEFAULT NULL,
  `exam_yr` varchar(30) DEFAULT NULL,
  `Sub_code` varchar(30) DEFAULT NULL,
  `course_credits_th` varchar(30) DEFAULT NULL,
  `course_credits_tw` varchar(30) DEFAULT NULL,
  `grade_ese` varchar(30) DEFAULT NULL,
  `grade_oralprac` varchar(30) DEFAULT NULL,
  `grade_oral` varchar(30) DEFAULT NULL,
  `grade_ia` varchar(30) DEFAULT NULL,
  `grade_tw` varchar(30) DEFAULT NULL,
  `overall_ese` varchar(30) DEFAULT NULL,
  `overall_tw` varchar(30) DEFAULT NULL,
  `creditsearned_th` varchar(30) DEFAULT NULL,
  `creditsearned_tw` varchar(30) DEFAULT NULL,
  `gradepoints_th` varchar(30) DEFAULT NULL,
  `gradepoints_tw` varchar(30) DEFAULT NULL,
  `cxg_th` varchar(30) DEFAULT NULL,
  `cxg_tw` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_final_marksheet`
--

INSERT INTO `student_final_marksheet` (`seat`, `Roll_No`, `branch`, `full_name`, `pattern`, `exam_yr`, `Sub_code`, `course_credits_th`, `course_credits_tw`, `grade_ese`, `grade_oralprac`, `grade_oral`, `grade_ia`, `grade_tw`, `overall_ese`, `overall_tw`, `creditsearned_th`, `creditsearned_tw`, `gradepoints_th`, `gradepoints_tw`, `cxg_th`, `cxg_tw`) VALUES
('47', '00CE166', 'C', 'SUDRIK PRAMOD RAMESHRAO', '', 'NOV\'09', '123456', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('6506', '03IT2059', 'T', 'RANAWARE SATYAJIT SHIVAJIRAO', '', 'NOV-13', '123456', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('552', '04CE1055', 'C', 'MHATRE MAYURESH MADHUKAR', '', 'MAY-15', '123456', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `seat` varchar(30) DEFAULT NULL,
  `Roll_No` varchar(30) NOT NULL,
  `branch` varchar(30) DEFAULT NULL,
  `pattern` varchar(30) DEFAULT NULL,
  `exam_yr` varchar(30) DEFAULT NULL,
  `sem` varchar(30) DEFAULT NULL,
  `shift` varchar(30) DEFAULT NULL,
  `sub_code` varchar(30) DEFAULT NULL,
  `tw_obtained` varchar(30) DEFAULT NULL,
  `or_obtained` varchar(30) DEFAULT NULL,
  `pr_obtained` varchar(30) DEFAULT NULL,
  `op_obtained` varchar(30) DEFAULT NULL,
  `ia_obtained` varchar(30) DEFAULT NULL,
  `th_obtained` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_marks_existing`
--

CREATE TABLE `student_marks_existing` (
  `Seat` varchar(30) NOT NULL,
  `Roll_No` varchar(30) NOT NULL,
  `Branch` varchar(30) DEFAULT NULL,
  `Pattern` varchar(30) NOT NULL,
  `exam_yr` varchar(30) NOT NULL,
  `sem` varchar(30) DEFAULT NULL,
  `shift` varchar(30) DEFAULT NULL,
  `Sub_code1` varchar(30) DEFAULT NULL,
  `sub1_twobtained` varchar(30) DEFAULT NULL,
  `sub1_thobtained` varchar(30) DEFAULT NULL,
  `sub1_orobtained` varchar(30) DEFAULT NULL,
  `sub1_probtained` varchar(30) DEFAULT NULL,
  `sub1_opobtained` varchar(30) DEFAULT NULL,
  `sub1_iaobtained` varchar(30) DEFAULT NULL,
  `sub_code2` varchar(30) DEFAULT NULL,
  `sub2_twobtained` varchar(30) DEFAULT NULL,
  `sub2_thobtained` varchar(30) DEFAULT NULL,
  `sub2_orobtained` varchar(30) DEFAULT NULL,
  `sub2_probtained` varchar(30) DEFAULT NULL,
  `sub2_opobtained` varchar(30) DEFAULT NULL,
  `sub2_iaobtained` varchar(30) DEFAULT NULL,
  `sub_code3` varchar(30) DEFAULT NULL,
  `sub3_twobtained` varchar(30) DEFAULT NULL,
  `sub3_thobtained` varchar(30) DEFAULT NULL,
  `sub3_orobtained` varchar(30) DEFAULT NULL,
  `sub3_probtained` varchar(30) DEFAULT NULL,
  `sub3_opobtained` varchar(30) DEFAULT NULL,
  `sub3_iaobtained` varchar(30) DEFAULT NULL,
  `sub_code4` varchar(30) DEFAULT NULL,
  `sub4_twobtained` varchar(30) DEFAULT NULL,
  `sub4_thobtained` varchar(30) DEFAULT NULL,
  `sub4_orobtained` varchar(30) DEFAULT NULL,
  `sub4_probtained` varchar(30) DEFAULT NULL,
  `sub4_opobtained` varchar(30) DEFAULT NULL,
  `sub4_iaobtained` varchar(30) DEFAULT NULL,
  `Sub_code5` varchar(30) DEFAULT NULL,
  `sub5_twobtained` varchar(30) DEFAULT NULL,
  `sub5_thobtained` varchar(30) DEFAULT NULL,
  `sub5_orobtained` varchar(30) DEFAULT NULL,
  `sub5_probtained` varchar(30) DEFAULT NULL,
  `sub5_opobtained` varchar(30) DEFAULT NULL,
  `sub5_iaobtained` varchar(30) DEFAULT NULL,
  `Sub_code6` varchar(30) DEFAULT NULL,
  `sub6_twobtained` varchar(30) DEFAULT NULL,
  `sub6_thobtained` varchar(30) DEFAULT NULL,
  `sub6_orobtained` varchar(30) DEFAULT NULL,
  `sub6_probtained` varchar(30) DEFAULT NULL,
  `sub6_opobtained` varchar(30) DEFAULT NULL,
  `sub6_iaobtained` varchar(30) DEFAULT NULL,
  `Sub_code7` varchar(30) DEFAULT NULL,
  `sub7_twobtained` varchar(30) DEFAULT NULL,
  `sub7_thobtained` varchar(30) DEFAULT NULL,
  `sub7_orobtained` varchar(30) DEFAULT NULL,
  `sub7_probtained` varchar(30) DEFAULT NULL,
  `sub7_opobtained` varchar(30) DEFAULT NULL,
  `sub7_iaobtained` varchar(30) DEFAULT NULL,
  `Sub_code8` varchar(30) DEFAULT NULL,
  `sub8_twobtained` varchar(30) DEFAULT NULL,
  `sub8_thobtained` varchar(30) DEFAULT NULL,
  `sub8_orobtained` varchar(30) DEFAULT NULL,
  `sub8_probtained` varchar(30) DEFAULT NULL,
  `sub8_opobtained` varchar(30) DEFAULT NULL,
  `sub8_iaobtained` varchar(30) DEFAULT NULL,
  `Sub_code9` varchar(30) DEFAULT NULL,
  `sub9_twobtained` varchar(30) DEFAULT NULL,
  `sub9_thobtained` varchar(30) DEFAULT NULL,
  `sub9_orobtained` varchar(30) DEFAULT NULL,
  `sub9_probtained` varchar(30) DEFAULT NULL,
  `sub9_opobtained` varchar(30) DEFAULT NULL,
  `sub9_iaobtained` varchar(30) DEFAULT NULL,
  `grand_total` varchar(30) DEFAULT NULL,
  `remark` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_theory_mask`
--

CREATE TABLE `student_theory_mask` (
  `code` varchar(30) NOT NULL,
  `marks` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_theory_unmask`
--

CREATE TABLE `student_theory_unmask` (
  `code` varchar(30) NOT NULL,
  `seat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocate_seat`
--
ALTER TABLE `allocate_seat`
  ADD PRIMARY KEY (`Roll_no`);

--
-- Indexes for table `course_table`
--
ALTER TABLE `course_table`
  ADD PRIMARY KEY (`Branch`);

--
-- Indexes for table `course_table_cbgs`
--
ALTER TABLE `course_table_cbgs`
  ADD PRIMARY KEY (`Branch`);

--
-- Indexes for table `course_table_rev`
--
ALTER TABLE `course_table_rev`
  ADD UNIQUE KEY `branch` (`branch`,`pattern`,`sem`,`subject`);

--
-- Indexes for table `student_cgpi`
--
ALTER TABLE `student_cgpi`
  ADD PRIMARY KEY (`Roll_No`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`Roll_no`,`Branch`);

--
-- Indexes for table `student_final_marksheet`
--
ALTER TABLE `student_final_marksheet`
  ADD PRIMARY KEY (`Roll_No`);

--
-- Indexes for table `student_marks`
--
ALTER TABLE `student_marks`
  ADD PRIMARY KEY (`Roll_No`);

--
-- Indexes for table `student_marks_existing`
--
ALTER TABLE `student_marks_existing`
  ADD PRIMARY KEY (`Roll_No`);

--
-- Indexes for table `student_theory_mask`
--
ALTER TABLE `student_theory_mask`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `student_theory_unmask`
--
ALTER TABLE `student_theory_unmask`
  ADD PRIMARY KEY (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
