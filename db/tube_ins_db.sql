-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 06:10 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tube_ins_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_cot`
--

CREATE TABLE `m_cot` (
  `id` int(11) NOT NULL,
  `part_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `i_dia_min` double(10,2) NOT NULL,
  `i_dia_value` double(10,2) NOT NULL,
  `i_dia_max` double(10,2) NOT NULL,
  `i_dia_tol_add` double(10,2) NOT NULL,
  `i_dia_tol_min` double(10,2) NOT NULL,
  `o_dia_min` double(10,2) NOT NULL,
  `o_dia_value` double(10,2) NOT NULL,
  `o_dia_max` double(10,2) NOT NULL,
  `o_dia_tol_add` double(10,2) NOT NULL,
  `o_dia_tol_min` double(10,2) NOT NULL,
  `w_min` double(10,2) NOT NULL,
  `w_value` double(10,2) NOT NULL,
  `w_max` double(10,2) NOT NULL,
  `w_tol_min` double(10,2) NOT NULL,
  `w_tol_add` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_cot`
--

INSERT INTO `m_cot` (`id`, `part_name`, `i_dia_min`, `i_dia_value`, `i_dia_max`, `i_dia_tol_add`, `i_dia_tol_min`, `o_dia_min`, `o_dia_value`, `o_dia_max`, `o_dia_tol_add`, `o_dia_tol_min`, `w_min`, `w_value`, `w_max`, `w_tol_min`, `w_tol_add`) VALUES
(1, 'RCOT5', 5.00, 5.20, 5.50, 0.30, 0.20, 7.40, 7.60, 7.80, 0.20, 0.20, 0.13, 0.20, 0.27, 0.70, 0.70),
(2, 'RCOT7', 7.20, 7.40, 7.70, 0.30, 0.20, 10.00, 10.20, 10.40, 0.20, 0.20, 0.17, 0.27, 0.37, 0.10, 0.10),
(3, 'RCOT10', 10.50, 10.70, 11.00, 0.30, 0.20, 13.90, 14.10, 14.30, 0.20, 0.20, 0.17, 0.27, 0.37, 0.10, 0.10),
(4, 'RCOT13', 13.00, 13.20, 13.50, 0.30, 0.20, 17.30, 17.50, 17.70, 0.20, 0.20, 0.17, 0.27, 0.37, 0.10, 0.10),
(5, 'RCOT15', 15.00, 15.20, 15.50, 0.30, 0.20, 19.30, 19.50, 19.70, 0.20, 0.20, 0.17, 0.27, 0.37, 0.10, 0.10),
(6, 'RCOT17', 17.10, 17.30, 17.60, 0.30, 0.20, 21.50, 21.70, 21.90, 0.20, 0.20, 0.17, 0.27, 0.37, 0.10, 0.10),
(7, 'RCOT19', 19.30, 19.50, 19.80, 0.30, 0.20, 23.60, 23.80, 24.00, 0.20, 0.20, 0.17, 0.27, 0.37, 0.10, 0.10),
(8, 'RCOT22', 21.90, 22.10, 22.40, 0.30, 0.20, 26.80, 27.00, 27.20, 0.20, 0.20, 0.20, 0.30, 0.40, 0.10, 0.10),
(9, 'RCOT25', 24.80, 25.00, 25.30, 0.30, 0.20, 29.80, 30.00, 30.20, 0.20, 0.20, 0.25, 0.35, 0.45, 0.10, 0.10),
(10, 'RCOT28', 28.00, 28.20, 28.50, 0.30, 0.20, 33.80, 34.00, 34.20, 0.20, 0.20, 0.25, 0.35, 0.45, 0.10, 0.10),
(11, 'RCOT 32', 32.00, 32.20, 32.50, 0.30, 0.20, 37.70, 38.00, 38.50, 0.50, 0.30, 0.25, 0.35, 0.45, 0.10, 0.10),
(12, 'NCOT5', 5.00, 5.20, 5.50, 0.30, 0.20, 7.40, 7.60, 7.80, 0.20, 0.20, 0.13, 0.20, 0.27, 0.70, 0.70),
(13, 'NCOT7', 7.20, 7.40, 7.70, 0.30, 0.20, 10.00, 10.20, 10.40, 0.20, 0.20, 0.17, 0.27, 0.37, 0.10, 0.10),
(14, 'NCOT10', 10.50, 10.70, 11.00, 0.30, 0.20, 13.90, 14.10, 14.30, 0.20, 0.20, 0.17, 0.27, 0.37, 0.10, 0.10),
(15, 'NCOT13', 13.00, 13.20, 13.50, 0.30, 0.20, 17.30, 17.50, 17.70, 0.20, 0.20, 0.17, 0.27, 0.37, 0.10, 0.10),
(16, 'NCOT15', 15.00, 15.20, 15.50, 0.30, 0.20, 19.30, 19.50, 19.70, 0.20, 0.20, 0.17, 0.27, 0.37, 0.10, 0.10),
(17, 'NCOT17', 17.10, 17.30, 17.60, 0.30, 0.20, 21.50, 21.70, 21.90, 0.20, 0.20, 0.17, 0.27, 0.37, 0.10, 0.10),
(18, 'NCOT19', 19.30, 19.50, 19.80, 0.30, 0.20, 23.60, 23.80, 24.00, 0.20, 0.20, 0.17, 0.27, 0.37, 0.10, 0.10),
(19, 'NCOT22', 21.90, 22.10, 22.40, 0.30, 0.20, 26.80, 27.00, 27.20, 0.20, 0.20, 0.20, 0.30, 0.40, 0.10, 0.10),
(20, 'NCOT25', 24.80, 25.00, 25.30, 0.30, 0.20, 29.80, 30.00, 30.20, 0.20, 0.20, 0.25, 0.35, 0.45, 0.10, 0.10),
(21, 'NCOT28', 28.00, 28.20, 28.50, 0.30, 0.20, 33.80, 34.00, 34.20, 0.20, 0.20, 0.25, 0.35, 0.45, 0.10, 0.10),
(22, 'NCOT32', 32.00, 32.20, 32.50, 0.30, 0.20, 37.70, 38.00, 38.50, 0.20, 0.20, 0.25, 0.35, 0.45, 0.10, 0.10);

-- --------------------------------------------------------

--
-- Table structure for table `sp_end_point`
--

CREATE TABLE `sp_end_point` (
  `id` int(11) NOT NULL,
  `part_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(100) NOT NULL,
  `time_start` datetime NOT NULL,
  `time_end` datetime NOT NULL,
  `total_mins` float(10,2) NOT NULL,
  `shift` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inspected_date` date NOT NULL,
  `inspected_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outside_appearance` float(10,2) NOT NULL,
  `inside_appearance` float(10,2) NOT NULL,
  `color` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `i_tolerance` float(10,2) NOT NULL,
  `i_start` float(10,2) NOT NULL,
  `i_end` float(10,2) NOT NULL,
  `o_tolerance` float(10,2) NOT NULL,
  `o_start` float(10,2) NOT NULL,
  `o_end` float(10,2) NOT NULL,
  `w_tolerance` float(10,2) NOT NULL,
  `ep_s_q1` float(10,2) NOT NULL,
  `ep_s_q2` float(10,2) NOT NULL,
  `ep_s_q3` float(10,2) NOT NULL,
  `ep_s_q4` float(10,2) NOT NULL,
  `ep_e_q1` float(10,2) NOT NULL,
  `ep_e_q2` float(10,2) NOT NULL,
  `ep_e_q3` float(10,2) NOT NULL,
  `ep_e_q4` float(10,2) NOT NULL,
  `using_r_bar` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `using_b_hand` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_judgement` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dim_judgement` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ng_quality` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `defect_type` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confrimed_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sp_mass_production`
--

CREATE TABLE `sp_mass_production` (
  `id` int(11) NOT NULL,
  `mp_part_name` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mp_quantity` int(100) NOT NULL,
  `mp_time_start` time NOT NULL,
  `mp_time_end` time NOT NULL,
  `mp_total_mins` int(110) NOT NULL,
  `mp_shift` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mp_inspected_date` date NOT NULL,
  `mp_inspected_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mp_lot_no` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mp_serial_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mp_outside_appearance` float(10,2) NOT NULL,
  `mp_inside_appearance` float(10,2) NOT NULL,
  `mp_color` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mp_tube_breaking` float(10,2) NOT NULL,
  `mp_tolerance` float(10,2) NOT NULL,
  `mp_mp_s_q1` float(10,2) NOT NULL,
  `mp_s_q2` float(10,2) NOT NULL,
  `mp_s_q3` float(10,2) NOT NULL,
  `mp_s_q4` float(10,2) NOT NULL,
  `mp_e_q1` float(10,2) NOT NULL,
  `mp_e_q2` float(10,2) NOT NULL,
  `mp_e_q3` float(10,2) NOT NULL,
  `mp_e_q4` float(10,2) NOT NULL,
  `mp_app_judgement` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mp_dim_judgement` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mp_ng_quality` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mp_defect_type` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mp_confrimed_by` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mp_remarks` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sp_start_point`
--

CREATE TABLE `sp_start_point` (
  `id` int(11) NOT NULL,
  `sp_part_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_quantity` int(11) NOT NULL,
  `sp_time_start` time NOT NULL,
  `sp_time_end` time NOT NULL,
  `sp_total_mins` int(11) NOT NULL,
  `sp_shift` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_inspected_date` date NOT NULL,
  `sp_inspected_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_outside_appearance` float(10,2) NOT NULL,
  `sp_inside_appearance` float(10,2) NOT NULL,
  `sp_slit_condition` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_color` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_i_tolerance` float(10,2) NOT NULL,
  `sp_i_start` float(10,2) NOT NULL,
  `sp_i_end` float(10,2) NOT NULL,
  `sp_o_tolerance` float(10,2) NOT NULL,
  `sp_o_start` float(10,2) NOT NULL,
  `sp_o_end` float(10,2) NOT NULL,
  `sp_w_tolerance` float(10,2) NOT NULL,
  `sp_s_q1` float(10,2) NOT NULL,
  `sp_s_q2` float(10,2) NOT NULL,
  `sp_s_q3` float(10,2) NOT NULL,
  `sp_s_q4` float(10,2) NOT NULL,
  `sp_m_q1` float(10,2) NOT NULL,
  `sp_m_q2` float(10,2) NOT NULL,
  `sp_m_q3` float(10,2) NOT NULL,
  `sp_m_q4` float(10,2) NOT NULL,
  `sp_e_q1` float(10,2) NOT NULL,
  `sp_e_q2` float(10,2) NOT NULL,
  `sp_e_q3` float(10,2) NOT NULL,
  `sp_e_q4` float(10,2) NOT NULL,
  `sp_using_r_bar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_using_b_hand` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_app_judgement` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_dim_judgement` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_ng_quality` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_defect_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_confrimed_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_remarks` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_account`
--

CREATE TABLE `users_account` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_account`
--

INSERT INTO `users_account` (`id`, `full_name`, `username`, `password`, `role`, `type`) VALUES
(1, 'COT Admin', 'cot', 'cot', 'admin', 'cot'),
(2, 'PVC Admin', 'pvc', 'pvc', 'admin', 'pvc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_cot`
--
ALTER TABLE `m_cot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_end_point`
--
ALTER TABLE `sp_end_point`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_mass_production`
--
ALTER TABLE `sp_mass_production`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_start_point`
--
ALTER TABLE `sp_start_point`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_account`
--
ALTER TABLE `users_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_cot`
--
ALTER TABLE `m_cot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sp_end_point`
--
ALTER TABLE `sp_end_point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sp_mass_production`
--
ALTER TABLE `sp_mass_production`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sp_start_point`
--
ALTER TABLE `sp_start_point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_account`
--
ALTER TABLE `users_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
