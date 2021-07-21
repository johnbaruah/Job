-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 08:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('john@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id` int(50) NOT NULL,
  `vkey` varchar(60) NOT NULL,
  `verified` tinyint(2) DEFAULT 0,
  `crdate` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`fname`, `mname`, `lname`, `email`, `mobile`, `password`, `id`, `vkey`, `verified`, `crdate`) VALUES
('TT', 'TT', 'BARUAH', 'johnbaruah8@gmail.com', '7118522582', '3d02649f3da70297f58b01114347f820', 49, '67f1c6ba834ecf313d51850a42dc831d', 1, '2021-05-13 17:56:10.024574');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(50) NOT NULL,
  `f_id_sign` int(50) NOT NULL,
  `father` varchar(50) DEFAULT NULL,
  `spouse` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `post_name` varchar(50) NOT NULL,
  `maritial` varchar(30) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `cat` varchar(20) NOT NULL,
  `cat_doc` varchar(50) NOT NULL,
  `dofb` date NOT NULL,
  `dob_doc` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `e_board` varchar(50) NOT NULL,
  `e_ins_name` varchar(50) NOT NULL,
  `pass_year` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `percent` varchar(30) NOT NULL,
  `e_doc` varchar(50) NOT NULL,
  `other_quali` varchar(50) NOT NULL,
  `other_quali_name` varchar(50) NOT NULL,
  `other_quali_doc` varchar(50) NOT NULL,
  `prof_sport` varchar(20) NOT NULL,
  `prof_sport_name` varchar(50) NOT NULL,
  `prof_sport_doc` varchar(50) NOT NULL,
  `any_job_exp_name` varchar(50) NOT NULL,
  `any_job_exp_year` varchar(20) NOT NULL,
  `any_job_exp_doc` varchar(50) NOT NULL,
  `p_address` varchar(300) NOT NULL,
  `p_po` varchar(50) NOT NULL,
  `p_dist` varchar(50) NOT NULL,
  `p_pin` varchar(7) NOT NULL,
  `p_ps` varchar(50) NOT NULL,
  `p_land` varchar(50) NOT NULL,
  `p_state` varchar(50) NOT NULL,
  `pr_address` varchar(300) NOT NULL,
  `pr_po` varchar(50) NOT NULL,
  `pr_dist` varchar(50) NOT NULL,
  `pr_pin` varchar(7) NOT NULL,
  `pr_ps` varchar(50) NOT NULL,
  `pr_land` varchar(50) NOT NULL,
  `pr_state` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `sign` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `cr_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `tr_chalan_no` varchar(30) NOT NULL,
  `tr_chalan_date` date NOT NULL,
  `tr_chalan_doc` varchar(50) NOT NULL,
  `status` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `f_id_sign`, `father`, `spouse`, `gender`, `post_name`, `maritial`, `nationality`, `cat`, `cat_doc`, `dofb`, `dob_doc`, `education`, `e_board`, `e_ins_name`, `pass_year`, `class`, `percent`, `e_doc`, `other_quali`, `other_quali_name`, `other_quali_doc`, `prof_sport`, `prof_sport_name`, `prof_sport_doc`, `any_job_exp_name`, `any_job_exp_year`, `any_job_exp_doc`, `p_address`, `p_po`, `p_dist`, `p_pin`, `p_ps`, `p_land`, `p_state`, `pr_address`, `pr_po`, `pr_dist`, `pr_pin`, `pr_ps`, `pr_land`, `pr_state`, `photo`, `sign`, `place`, `cr_date`, `tr_chalan_no`, `tr_chalan_date`, `tr_chalan_doc`, `status`) VALUES
(1043, 49, '', 'TT', 'FEMALE', 'JOB2', 'MARRIED', 'INDIAN', 'OBC', '', '2021-05-08', '', 'EE', 'EE', 'EE', '4444', 'ee', '55%', '', '', '', '', '', '', '', '', '', '', 'TT', 'TT', 'TT', '555555', 'TT', 'TT', 'TT', 'TT', 'TT', 'TT', '555555', 'TT', 'TT', 'TT', '1621246119aa.jpg', '', 'TT', '2021-05-14 06:56:54.096665', '', '0000-00-00', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`,`f_id_sign`),
  ADD KEY `user_details_ibfk_1` (`f_id_sign`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1044;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`f_id_sign`) REFERENCES `signin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
