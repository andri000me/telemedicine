-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 11:33 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_telemedicine`
--

-- --------------------------------------------------------

--
-- Table structure for table `advice`
--

CREATE TABLE `advice` (
  `advice_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advice`
--

INSERT INTO `advice` (`advice_id`, `description`) VALUES
(1, 'ACC Kemoterapi Fast Track'),
(2, 'ACC Kemoterapi non Fast Track'),
(3, 'Tidak ACC Kemoterapi'),
(4, 'Kontrol Ulang'),
(5, 'Perbaikan KU di daerah');

-- --------------------------------------------------------

--
-- Table structure for table `assesment`
--

CREATE TABLE `assesment` (
  `assesment_id` int(11) NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `checkin_code` varchar(100) NOT NULL,
  `sistol` int(11) NOT NULL,
  `diastol` int(11) NOT NULL,
  `temp` decimal(10,1) NOT NULL,
  `hr` int(11) NOT NULL,
  `rr` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `pain` tinyint(1) NOT NULL,
  `description` text NOT NULL,
  `service` int(11) NOT NULL COMMENT ' type of service',
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assesment`
--

INSERT INTO `assesment` (`assesment_id`, `patient_id`, `checkin_code`, `sistol`, `diastol`, `temp`, `hr`, `rr`, `height`, `weight`, `pain`, `description`, `service`, `date_added`) VALUES
(1, 'C12345', 'AB12', 120, 80, '36.5', 80, 24, 180, 80, 1, 'Saya merasakan mual dan muntah', 3, '2020-05-14 11:35:41'),
(2, 'C12345', 'CD23', 120, 80, '36.5', 80, 24, 170, 80, 1, 'Sya merasa pusing hidung tersumbat', 3, '2020-05-15 08:48:47');

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE `attachment` (
  `attachment_id` int(11) NOT NULL,
  `assesment_id` int(11) NOT NULL,
  `last_medicine` date NOT NULL,
  `laboratory` varchar(255) NOT NULL,
  `schedule` varchar(255) NOT NULL,
  `protocol` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attachment`
--

INSERT INTO `attachment` (`attachment_id`, `assesment_id`, `last_medicine`, `laboratory`, `schedule`, `protocol`, `other`) VALUES
(1, 1, '2020-04-30', '057f3e37ff1e08dbc5ab2ed7ea6bf0c6.jpg', '057f3e37ff1e08dbc5ab2ed7ea6bf0c6.jpg', '057f3e37ff1e08dbc5ab2ed7ea6bf0c6.jpg', ''),
(2, 2, '2020-05-01', '62c71f8038722240dc22920eabd05cf6.jpg', '62c71f8038722240dc22920eabd05cf6.jpg', '62c71f8038722240dc22920eabd05cf6.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `chemo_schedule`
--

CREATE TABLE `chemo_schedule` (
  `follow_up_id` int(11) NOT NULL,
  `assesment_id` int(11) NOT NULL,
  `advice` tinyint(1) DEFAULT NULL,
  `dr_education` text NOT NULL,
  `hospitalization_date` date DEFAULT NULL,
  `chemo_date` date DEFAULT NULL,
  `ward` varchar(255) DEFAULT NULL,
  `ns_education` text NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemo_schedule`
--

INSERT INTO `chemo_schedule` (`follow_up_id`, `assesment_id`, `advice`, `dr_education`, `hospitalization_date`, `chemo_date`, `ward`, `ns_education`, `date_added`) VALUES
(1, 1, 1, 'makan banyak', '2020-05-14', '2020-05-14', 'Kasuari_5', 'Silahkan datang melalui TPPRI IGD', '2020-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `patient_id` varchar(100) NOT NULL,
  `criticism` text NOT NULL,
  `suggestions` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `cm` varchar(100) NOT NULL,
  `profile_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `checkin_code` varchar(100) NOT NULL,
  `cm` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `reservation_date` date NOT NULL,
  `polyclinic` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `checkin_code`, `cm`, `name`, `birthday`, `reservation_date`, `polyclinic`, `doctor`, `phone`, `date_added`) VALUES
(1, 'AB12', 'C12345', 'Test Pasien', '1980-01-08', '2020-05-14', 'KLINIK THT ONKOLOGI', 'D0012', '123456789', '2020-05-12 15:59:24'),
(2, 'CD23', 'C12345', 'Test Pasien', '1980-01-08', '2020-05-15', 'KLINIK THT ONKOLOGI', 'D0013', '123456789', '2020-05-12 15:59:24');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`) VALUES
(1, 'Konsultasi'),
(2, 'Pengambilan Obat'),
(3, 'Penjadwalan Kemotherapi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `code`, `name`, `username`, `password`, `role_id`, `date_added`) VALUES
(1, '', 'Admin Telemedicine', 'admin', '21232f297a57a5a743894a0e4a801fc3', -18, '2020-04-22 13:20:59'),
(2, '', 'Test Perawat', 'perawat', '5d6a514ee02a5fc910dee69cc07017cc', -17, '2020-04-25 09:49:05'),
(3, 'D0012', 'Test Dokter', 'dokter', 'd22af4180eee4bd95072eb90f94930e5', 2, '2020-05-05 12:06:18'),
(4, '', 'rsdk', 'rsdk', 'b8decb965fc96ad35b05ef2b3c8ad11a', -18, '2020-05-15 10:58:03'),
(5, 'D0013', 'Test Dokter 2', 'dokter2', 'd22af4180eee4bd95072eb90f94930e5', 2, '2020-05-05 12:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `user_role_id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`user_role_id`, `role`) VALUES
(-18, 'Administrator'),
(-17, 'Perawat'),
(2, 'Dokter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advice`
--
ALTER TABLE `advice`
  ADD PRIMARY KEY (`advice_id`);

--
-- Indexes for table `assesment`
--
ALTER TABLE `assesment`
  ADD PRIMARY KEY (`assesment_id`);

--
-- Indexes for table `attachment`
--
ALTER TABLE `attachment`
  ADD PRIMARY KEY (`attachment_id`);

--
-- Indexes for table `chemo_schedule`
--
ALTER TABLE `chemo_schedule`
  ADD PRIMARY KEY (`follow_up_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`cm`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`user_role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advice`
--
ALTER TABLE `advice`
  MODIFY `advice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `assesment`
--
ALTER TABLE `assesment`
  MODIFY `assesment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attachment`
--
ALTER TABLE `attachment`
  MODIFY `attachment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chemo_schedule`
--
ALTER TABLE `chemo_schedule`
  MODIFY `follow_up_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `user_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
