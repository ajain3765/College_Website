-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2021 at 07:11 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `id` int(10) NOT NULL,
  `event_type` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `status` varchar(40) NOT NULL,
  `sponsored_by` varchar(40) NOT NULL,
  `duration` varchar(40) NOT NULL,
  `dates` varchar(30) NOT NULL,
  `place` varchar(50) NOT NULL,
  `organizer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`id`, `event_type`, `title`, `status`, `sponsored_by`, `duration`, `dates`, `place`, `organizer`) VALUES
(1, 'workshop', 'Workshop on Data Science', 'completed', 'gfg', '2 Days', '2020-12-13', 'NITK Surathka', 'B. R. Chandavarkar'),
(2, 'workshop', 'Workshop on Fundamentals of Speech Processing', 'completed', 'gfg', '2 Days', '2020-11-13', 'NITK Surathka', 'Shashidhar Koolagudi'),
(3, 'workshop', 'Workshop on Medical Image Computing', 'completed', 'gfg', '2 Days', '2020-10-10', 'NITK Surathka', 'Jeny Rajan'),
(4, 'workshop', 'Workshop on Network Simulator', 'completed', 'TEQIP', '2 Days', '2013-12-08', 'NITK Surathka', 'B R Chandavarkar'),
(5, 'workshop', 'Workshop on Database Management Systems', 'completed', 'ISTE-MHRD', '2 weeks', ' December 13, 2010', 'NITK, Surathkal', 'P. Santhi Thilagam'),
(15, '', 'yyy36y', '6y63', '6y63', '2 Days', '12-3-2020', 'NITK Surathka', '5t5'),
(15, 'workshop', 'yyy36y', '6y63', '6y63', '2 Days', '12-3-2020', 'NITK Surathka', '5t5'),
(13, 'workshop', 'Two Days Workshop on Data Science', 'completed', 'TEQIP', '2 Days', '0000-00-00', 'NITK Surathka', 'grwe'),
(13, 'workshop', 'Two Days Workshop on Data Science', 'completed', 'TEQIP', '2 Days', '0000-00-00', 'NITK Surathka', 'grwe'),
(56, 'workshop', 'gfg', 'completed', 'ISTE-MHRD', '2 Days', '2020-12-13', 'NITK Surathka', 'tt4w');

-- --------------------------------------------------------

--
-- Table structure for table `facultyinfo`
--

CREATE TABLE `facultyinfo` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `date_of_joining` date NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facultyinfo`
--

INSERT INTO `facultyinfo` (`id`, `name`, `designation`, `date_of_joining`, `specialization`, `email`, `contact`, `gender`) VALUES
('1', 'Alwyn Roshan', 'Associate Professor & Head of the Department', '1997-12-31', 'Algorithms, Complexity Analysis.', 'alwyn@nitk.ac.in', '08242473407', 'male'),
('10', 'Manu Basavaraju', 'Associate Professors', '2021-01-01', 'Graph Algorithms', 'manub@nitk.ac.in', '+91-0824-2473415', 'male'),
('12', 'grg', 'rgeh', '2021-01-02', 'Algorithms', 'abcdef@gmail.com', '07062764287', 'male'),
('2', 'P. Santhi Thilagam', 'Professors', '1996-06-05', 'Database Security, Data Management', 'santhi@nitk.edu.in', '08242473404', 'female'),
('23', 'hare', 'Professors', '2021-01-01', 'hpc', 'abcdef@gmail.com', '07062764287', 'male'),
('3', 'Vani M', 'Associate Professors', '2002-06-13', 'Algorithmic Graph Theory', 'vani@nitk.ac.in', '08242473405', 'female'),
('4', 'Basavaraj Talawar', ' Assistant Professors', '2013-10-24', 'High Performance Computing', 'basavaraj@nitk.edu.in', '+919886383949', 'male'),
('5', 'Mahendra Pratap Singh', 'Assistant Professors', '2009-01-06', 'Information Security', 'mp_singh@nitk.ac.in', '91-824-2473402', 'male'),
('6', 'Sourav Kanti Addya', 'Assistant Professors', '2019-12-05', 'Cloud Computing,IoT', 'souravkaddya@nitk.edu.in', '0824-2473153', 'male'),
('7', 'Biswajit R Bhowmik', 'Assistant Professors', '2019-12-02', 'Machine Learning, and Distributed Systems', 'brb@nitk.edu.in', '+91-824-247-3164', 'male'),
('8', 'Annappa', 'Professors', '1998-12-21', 'Cloud Computing, Big Data Analytics', 'annappa@nitk.ac.in', '+91-824-2473401', 'male'),
('9', 'Chandrasekaran K', 'Professors', '1987-11-02', 'Algorithms, Computing, Systems', 'kch@nitk.edu.in', '91-824-2474060', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `s_no` int(11) NOT NULL,
  `registration_no` varchar(20) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `age` varchar(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `degree` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `semester` varchar(8) NOT NULL,
  `company_placed` varchar(25) DEFAULT NULL,
  `designation` varchar(25) DEFAULT NULL,
  `ctc` varchar(20) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `contact` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`s_no`, `registration_no`, `rollno`, `name`, `age`, `dob`, `gender`, `address`, `degree`, `course`, `semester`, `company_placed`, `designation`, `ctc`, `email`, `contact`) VALUES
(2, '191273CS102', '17cs002', 'AAKARSHEE JAIN', '21', '2021-01-09', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '1', '', '', '', 'abc@gmail.com', '7062764287'),
(3, '191747CS103', '17cs003', 'ABHISHEK SINGH', '21', '2021-01-05', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '1', '', '', '', 'abc@gmail.com', '7062764287'),
(4, '191143CS104', '17cs004', 'ADITYA KUMAR', '21', '2021-01-12', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '1', '', '', '', 'abc@gmail.com', '7062764287'),
(5, '191475CS105', '17cs005', 'ADITYA SANTHOSH', '21', '2021-01-07', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '1', '', '', '', 'abc@gmail.com', '7062764287'),
(7, '191148CS106', '17cs007', 'AKANKSHA SANTOSH MORE', '22', '2021-01-06', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '1', '', '', '', 'abc@gmail.com', '7062764287'),
(13, '191596CS118', '17cs018', 'DHARMATEJA', '22', '2021-01-01', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '1', '', '', '', 'abcd@gmail.com', '7062764287'),
(14, ' 191209CS119', '17cs019', 'DWIJA PRASHANT', '21', '2021-01-02', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '1', '', '', '', 'abcd@gmail.com', '7062764287'),
(15, '191809CS120', '17cs020', 'HARSHITA', '21', '2021-01-03', 'female', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '1', '', '', '', 'abc@gmail.com', '7062764287'),
(16, '191956CS121', '17cs021', 'HARSHWARDHAN ', '21', '2021-01-05', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '1', '', '', '', 'abcd@gmail.com', '7062764287'),
(17, '181337CO101', '16cs001', 'JAY DHARMENDRA', '22', '2021-01-05', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '3', NULL, '', '', 'abcde@gmail.com', '7062764287'),
(18, '181175CO102', '16cs002', 'PATIL ABHISHEK SACHIN', '21', '2021-01-06', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '3', NULL, '', '', 'abcd@gmail.com', '7062764287'),
(19, '181468CO103', '16cs003', 'ADITHI SRINATH', '21', '2021-01-13', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '3', NULL, '', '', 'abcd@gmail.com', '7062764287'),
(20, '181293CO104', '16cs004', 'ADITYA CHIRANIA', '21', '2021-01-14', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '3', NULL, '', '', 'abcd@gmail.com', '7062764287'),
(21, '181367CO105', '16cs005', 'AKSHAY DHAYAL', '22', '2021-01-05', '', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '3', NULL, '', '', 'abcd@gmail.com', '7062764287'),
(22, '181084CO106', '16cs006', 'ANKIT RAJ', '21', '2021-01-21', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '3', NULL, '', '', 'abcd@gmail.com', '7062764287'),
(24, '181141CO107', '16cs007', 'ANSEN ANTONY', '21', '2021-01-20', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '3', NULL, '', '', 'abcd@gmail.com', '7062764287'),
(25, '181070CO108', '16cs008', 'ANUSHA P DAS', '22', '2021-01-22', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '3', NULL, '', '', 'abcd@gmail.com', '7062764287'),
(26, '181550CO109', '16cs009', 'ARJUN A', '22', '2021-01-08', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '3', NULL, '', '', 'abcd@gmail.com', '7062764287'),
(27, '181118CO110', '16cs010', 'ARTI RAJENDRA AWALE', '22', '2021-01-13', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '3', NULL, '', '', 'abcd@gmail.com', '7062764287'),
(28, '171404CO101', '15cs001', 'A NAGA NEERAMITRA REDDY', '23', '2021-01-08', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '5', '', '', '', 'abcd@gmail.com', '7062764287'),
(29, '171015CO102', '15cs002', 'ABHA ABHAY WADJIKAR', '23', '2021-01-04', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '5', '', '', '', 'abcd@gmail.com', '7062764287'),
(30, '171757CO103', '15cs003', 'ABHINAV P Y', '23', '2021-01-06', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '5', '', '', '', 'abcd@gmail.com', '7062764287'),
(31, '171622CO104', '15cs004', 'ABHISHEK VISHWAKARMA', '22', '2021-01-07', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '5', '', '', '', 'abcd@gmail.com', '7062764287'),
(32, '171318CO105', '15cs005', 'ADITYA RASTOGI', '23', '2021-01-06', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '5', '', '', '', 'abcd@gmail.com', '7062764287'),
(33, '171264CO106', '15cs006', 'AGJA DHRUV SHAILESH KUMAR', '22', '2021-01-06', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '5', '', '', '', 'abcd@gmail.com', '7062764287'),
(34, '171009CO107', '15cs007', 'AKASH SIVARAMAN NAIR', '23', '2021-01-07', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '5', '', '', '', 'abcd@gmail.com', '7062764287'),
(35, '171291CO108', '15cs008', 'ANIMESH KUMAR', '23', '2021-01-13', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '5', '', '', '', 'abcd@gmail.com', '7062764287'),
(36, '171074CO109', '15cs009', 'ANKIT KARODY', '22', '2021-01-06', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '5', '', '', '', 'abcd@gmail.com', '7062764287'),
(37, '16700716CO101', '14cs001', 'ANSHUL PINTO', '22', '2021-01-01', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '7', 'adobe', '', '24', 'abcd@gmail.com', '7062764287'),
(38, '16605516CO102', '14cs002', 'ANUSHA S', '22', '2021-01-06', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '7', 'Arcesium', '', '20', 'abcd@gmail.com', '7062764287'),
(39, '16708516CO103', '14cs003', 'ASHWIN JAYDEV NAIR', '21', '2021-01-06', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '7', 'Goldman Sachs', '', '31', 'abcd@gmail.com', '7062764287'),
(40, '16609116CO104', '14cs004', 'ASHWIN JOISA', '22', '2021-01-10', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '1', '', '', '', 'abcd@gmail.com', '7062764287'),
(41, '16614616CO105', '14cs005', 'BANDARU LIKITHA TEJASWI', '22', '2021-01-15', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '7', 'Google', '', '40', 'abcd@gmail.com', '7062764287'),
(42, '16652116CO106', '14cs006', 'CHUKKALA', '24', '2020-06-10', 'female', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '7', 'Intuit', '', '18', 'abcde@gmail.com', '7062764287'),
(43, '16661016CO107', '14cs007', 'CHANDANA JAYARAM', '21', '2021-01-04', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '7', 'Microsoft', '', '23', 'abcde@gmail.com', '7062764287'),
(44, '16627716CO108', '14cs008', 'CHENNA KESHAVA B S', '24', '2021-01-06', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '7', 'Oracle', '', '32', 'abcde@gmail.com', '7062764287'),
(45, '16611416CO109', '14cs009', 'DARSHAN V', '21', '2021-01-08', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '7', NULL, '', '', 'abcde@gmail.com', '7062764287'),
(46, '202652cs001', '202cs001', 'Abhilash Vasudeo Ghope', '23', '2021-01-06', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'PG', 'CSE', '1', '', '', '', 'abcde@gmail.com', '7062764287'),
(47, '202652cs002', '202cs002', 'Ankush', '21', '2021-01-07', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'PG', 'CSE', '1', '', '', '', 'abcde@gmail.com', '7062764287'),
(48, '202652cs003', '202cs003', 'Ayushi Jain', '24', '2021-01-01', 'female', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'PG', 'CSE', '1', '', '', '', 'abcde@gmail.com', '7062764287'),
(49, '202652cs004', '202cs004', 'Dagade', '23', '2021-01-06', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'PG', 'CSE', '1', '', '', '', 'abcde@gmail.com', '7062764287'),
(50, '202652cs005', '202cs005', 'Sadik', '24', '2021-01-02', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'PG', 'CSE', '1', '', '', '', 'abcde@gmail.com', '7062764287'),
(51, '202652cs006', '202cs006', 'Dheeraj', '24', '2021-01-06', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'PG', 'CSE', '1', '', '', '', 'abcde@gmail.com', '7062764287'),
(52, '202652cs007', '202cs007', 'Divya', '24', '2021-01-01', 'female', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'PG', 'CSE', '1', '', '', '', 'abcde@gmail.com', '7062764287'),
(53, '202652cs008', '202cs008', 'Gangurde', '24', '2021-01-02', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'PG', 'CSE', '1', '', '', '', 'abcde@gmail.com', '7062764287'),
(54, '202652cs010', '17cs010', 'Harendra Singh Kushwaha', '22', '2021-01-08', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'PG', 'CSE', '1', '', '', '', 'abcde@gmail.com', '7062764287'),
(55, '202652cs022', '202cs022', 'Rishi Verma', '24', '2021-01-02', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'PG', 'CSE', '1', '', '', '', 'abcde@gmail.com', '7062764287'),
(56, '192010CS001 ', '192cs001', 'ADITYA CHAUDHARY', '23', '2021-01-08', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'PG', 'CSE', '3', 'Oracle', '', '30', 'abcde@gmail.com', '7062764287'),
(57, '202627IS001', '192is001', 'Aakriti Thawre', '21', '2021-01-05', 'female', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'PG', 'CSE-IS', '1', '', '', '', 'abcde@gmail.com', '7062764287'),
(60, '192617IS002', '192is002', 'ABHAY PRAKASH', '23', '2021-01-04', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'PG', 'CSE-IS', '3', 'NetApp', '', '20', 'abcdef@gmail.com', '7062764287'),
(63, '202680IS003', '202is003', 'Ajay', '22', '2021-01-02', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'PG', 'CSE-IS', '1', '', '', '', 'abcdef@gmail.com', '7062764287'),
(64, '202680IS004', '202is004', 'Anil', '21', '2021-01-01', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'PG', 'CSE-IS', '1', '', '', '', 'abcdef@gmail.com', '7062764287'),
(65, '33', '1', 'dffg', '22', '2020-12-05', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '1', '', '', '', 'abcdef@gmail.com', '7062764287'),
(66, '34', '2', 'gffdg', '21', '2021-01-02', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '1', 'fdf', 'fefer', '8', 'abcdef@gmail.com', '7062764287'),
(68, '123', '1234', 'fsdvf', '21', '2021-01-02', 'male', 'Vill- Bhadaura,post-mason,dist-ghazipur(up)', 'UG', 'CSE', '1', 'dsv', 'fefer', '8', 'abcdef@gmail.com', '7062764287'),
(69, '1234', '2002cs025', 'harry', '262', '2021-01-03', 'male', 'fwgwgrrgrg', 'PG', 'CSE-IS', '3', 'fdf', 'fefer', '8', 'abcdef@gmail.com', '7062764287');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `username` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`username`, `email`, `password`) VALUES
('ayushi', 'asdf@gmail.com', 'qwerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facultyinfo`
--
ALTER TABLE `facultyinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`s_no`),
  ADD UNIQUE KEY `rollno` (`rollno`),
  ADD UNIQUE KEY `registration_no` (`registration_no`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
