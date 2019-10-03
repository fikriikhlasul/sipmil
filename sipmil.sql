-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2019 at 01:48 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipmil`
--

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notif_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `req_id` int(11) NOT NULL,
  `notif_title` varchar(128) NOT NULL,
  `notif_desc` varchar(128) NOT NULL,
  `notif_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notif_id`, `user_id`, `req_id`, `notif_title`, `notif_desc`, `notif_status`) VALUES
(1, 1, 15, 'tes', 'Approved', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `bagian` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `bagian`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'admin', 'Admin', 'admin@gmail.com', 'One-Piece-Episode-904-Kiminime.jpg', '$2y$10$hYF12POHVaiEF3uaOeMYNuuHXAaQTAkxhd4q5gH.ZIytzgTfUHaeO', 1, 1, 1569783602),
(13, 'fikri', 'Kasum', 'fikri@gmail.com', 'default.jpg', '$2y$10$l1b/i31CRpGh8IyxF4jcoesjzdWSVH8hr/e/ixgVWqp9I32zOkcMS', 2, 1, 1569919522);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(8, 1, 2),
(10, 8, 10),
(12, 1, 10),
(15, 8, 11),
(20, 1, 3),
(23, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user_kordinator_car`
--

CREATE TABLE `user_kordinator_car` (
  `id` int(11) NOT NULL,
  `no_polisi` varchar(24) NOT NULL,
  `nama_supir` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(11, 'Kordinator');

-- --------------------------------------------------------

--
-- Table structure for table `user_req_transport`
--

CREATE TABLE `user_req_transport` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(128) NOT NULL,
  `nama_req` varchar(128) NOT NULL,
  `jenis_trans` varchar(128) NOT NULL,
  `tujuan_trans` varchar(128) NOT NULL,
  `keperluan_trans` varchar(128) NOT NULL,
  `req_dari` varchar(128) NOT NULL,
  `req_ke` varchar(128) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `jam_pinjam` time NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `jam_kembali` time NOT NULL,
  `kode_proyek` varchar(128) NOT NULL,
  `status_req` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  `color` varchar(10) NOT NULL,
  `no_polisi` varchar(10) NOT NULL,
  `nama_supir` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_req_transport`
--

INSERT INTO `user_req_transport` (`id`, `user_id`, `user_email`, `nama_req`, `jenis_trans`, `tujuan_trans`, `keperluan_trans`, `req_dari`, `req_ke`, `tanggal_pinjam`, `jam_pinjam`, `tanggal_kembali`, `jam_kembali`, `kode_proyek`, `status_req`, `date_created`, `color`, `no_polisi`, `nama_supir`) VALUES
(2, 1, 'admin@gmail.com', 'admin', 'Mobil', 'Luar Kota', 'Servicing Products', 'Pekanbaru', 'Medan', '2019-12-30', '09:00:00', '2019-12-30', '16:00:00', 'MDNPKU23', 'Approved', 1569982937, 'green', 'BM 1999 SC', 'John'),
(4, 13, 'fikri@gmail.com', 'fikri', 'Mobil', 'Luar Kota', 'Servicing Product', 'Pekanbaru', 'Medan', '2019-10-01', '11:00:00', '2019-10-01', '17:00:00', 'MDNPKU23', 'Waiting Approval', 1569982937, 'blue', '', ''),
(6, 1, 'admin@gmail.com', 'admin', 'Bus', 'Luar Kota', 'Servicing Product', 'Pekanbaru', 'Duri', '2019-10-02', '08:00:00', '2019-10-02', '12:59:00', 'PKUDUR12', 'Waiting Approval', 1569982937, 'blue', '', ''),
(7, 1, 'admin@gmail.com', 'admin', 'Mobil', 'Luar Kota', 'Servicing Product', 'Pekanbaru', 'Dumai', '2019-10-02', '09:00:00', '2019-10-02', '12:59:00', 'PKUDUM12', 'Waiting Approval', 1569990765, 'blue', '', ''),
(8, 1, 'admin@gmail.com', 'admin', 'Mobil', 'Luar Kota', 'Servicing Product', 'Pekanbaru', 'Aceh', '2019-10-03', '23:59:00', '2019-10-03', '16:59:00', 'PKUACH12', 'Waiting Approval', 1570069036, 'blue', '', ''),
(10, 1, 'admin@gmail.com', 'admin', 'Kendaraan Lain', 'Dalam Kota', 'Buy Product', 'Kantor', 'Toko', '2019-12-31', '06:00:00', '2019-12-31', '12:59:00', 'KANTOK12', 'Waiting Approval', 1570069324, 'blue', '', ''),
(11, 13, 'fikri@gmail.com', 'fikri', 'Taksi', 'Dalam Kota', 'Servicing Product', 'Pekanbaru', 'Medan', '2019-12-31', '12:59:00', '2019-12-31', '16:59:00', 'MDNPKU23', 'Waiting Approval', 1570070984, 'blue', '', ''),
(12, 1, 'admin@gmail.com', 'admin', 'Mobil', 'Luar Kota', 'Servicing Product', 'Pekanbaru', 'Medan', '2019-12-31', '12:59:00', '2019-12-31', '12:59:00', 'MDNPKU23', 'Waiting Approval', 1570072545, 'blue', '', ''),
(15, 1, 'admin@gmail.com', 'admin', 'Taksi', 'Dalam Kota', 'Servicing Product', 'Pekanbaru', 'Medan', '2019-12-31', '12:59:00', '2019-12-31', '12:59:00', 'MDNPKU23', 'Waiting Approval', 1570089041, 'blue', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'User'),
(8, 'Kordinator');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 'Active'),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 'Active'),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 'Active'),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 'Active'),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 'Active'),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 'Active'),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 'Active'),
(11, 2, 'Request Transportation', 'user/reqtransport', 'fas fa-car', 'Active'),
(13, 10, 'List User Request', 'kordinator', 'fas fa-user-secret', 'Active'),
(14, 10, 'Report', 'kordinator/report', 'far fa-chart-bar', 'Active'),
(17, 11, 'User Request List', 'kordinator', 'fas fa-list', 'Active'),
(21, 11, 'Daily Report', 'kordinator/daily', 'fas fa-newspaper', 'Active'),
(23, 2, 'Inbox', 'user/inbox', 'fas fa-envelope', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notif_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_kordinator_car`
--
ALTER TABLE `user_kordinator_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_req_transport`
--
ALTER TABLE `user_req_transport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_kordinator_car`
--
ALTER TABLE `user_kordinator_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_req_transport`
--
ALTER TABLE `user_req_transport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
