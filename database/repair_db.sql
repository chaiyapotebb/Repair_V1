-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 04:43 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repair_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_case`
--

CREATE TABLE `tbl_case` (
  `case_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'tbl_login',
  `status_id` int(11) NOT NULL DEFAULT 1 COMMENT 'tbl_status',
  `tec_id` int(11) NOT NULL COMMENT 'ช่าง',
  `name_case` varchar(100) NOT NULL COMMENT 'แจ้งซ่อม',
  `detail_case` varchar(250) NOT NULL COMMENT 'รายละเอียด',
  `place_case` varchar(100) NOT NULL COMMENT 'สถานที่',
  `date_case` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'วันที่แจ้งซ่อม',
  `date_assign` timestamp NULL DEFAULT NULL COMMENT 'วันที่ส่งมอบงาน',
  `date_sent` timestamp NULL DEFAULT NULL COMMENT 'วันที่รับงาน',
  `date_close` timestamp NULL DEFAULT NULL COMMENT 'วันที่ปิดงาน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `user_id` int(11) NOT NULL COMMENT 'PK',
  `username` varchar(20) NOT NULL COMMENT 'ชื่อผู้ใช้งาน',
  `password` varchar(200) NOT NULL COMMENT 'รหัสผ่าน',
  `user_status` int(11) NOT NULL DEFAULT 0 COMMENT 'สถานะการเข้าสู่ระบบ',
  `user_level` varchar(20) NOT NULL COMMENT 'สถานะ',
  `u_name` varchar(100) NOT NULL COMMENT 'ชื่อ',
  `u_lastname` varchar(100) NOT NULL COMMENT 'นามสกุล',
  `u_tel` varchar(20) NOT NULL COMMENT 'เบอร์โทร',
  `u_email` varchar(50) NOT NULL COMMENT 'อีเมล์',
  `u_img` varchar(200) DEFAULT NULL COMMENT 'รูปภาพ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`user_id`, `username`, `password`, `user_status`, `user_level`, `u_name`, `u_lastname`, `u_tel`, `u_email`, `u_img`) VALUES
(1, 'chaiyapotebb', '7bb01d32e32753ef5481c29fc6b00be2c8d4258cacb5bb29cba01f7fa5c2bd668eeb0c4b6855445e88b2f47b1923571f07b7c323805c92a5c2bc3d99b088ff2b', 0, 'admin', 'ไชยพศ', 'นันทปรีชา', '085-360-9391', 'chaiyapoteza@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`status_id`, `status_name`) VALUES
(1, 'รอดําเนินการ'),
(2, 'กําลังดําเนินการ'),
(3, 'กําลังซ่อม'),
(4, 'ซ่อมเสร็จแล้ว');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_case`
--
ALTER TABLE `tbl_case`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_case`
--
ALTER TABLE `tbl_case`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
