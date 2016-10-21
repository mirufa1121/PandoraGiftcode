-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2016 at 05:57 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giftcode`
--

-- --------------------------------------------------------

--
-- Table structure for table `homebanner`
--

CREATE TABLE `homebanner` (
  `id` int(11) NOT NULL,
  `baner_desc` varchar(512) DEFAULT '',
  `appname` varchar(128) DEFAULT NULL,
  `link` varchar(512) DEFAULT NULL,
  `tmpl` int(11) DEFAULT '0',
  `img` varchar(512) DEFAULT NULL,
  `type` int(11) DEFAULT '0',
  `pos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homebanner`
--

INSERT INTO `homebanner` (`id`, `baner_desc`, `appname`, `link`, `tmpl`, `img`, `type`, `pos`) VALUES
(1, NULL, 'daichute', 'http://me.zing.vn/dtb/redirect?f0b885b096152', 0, 'http://f2.forum.zdn.vn/fp/f/83256.jpg', 0, 1),
(2, NULL, 'TTTD', 'http://me.zing.vn/dtb/redirect?15eb2aaf2163da', 0, 'http://f1.forum.zdn.vn/fp/f/77970.jpg', 0, 2),
(3, '', 'gunny', 'http://me.zing.vn/dtb/redirect?643c479f1984d0', 0, 'http://f2.forum.zdn.vn/fp/f/82891.jpg', 0, 3),
(4, '', 'canhcutvuive', 'http://me.zing.vn/dtb/redirect?cedf859a99616', 0, 'http://f3.forum.zdn.vn/fp/f/83332.png', 0, 4),
(5, '', 'hoidaotq', 'http://me.zing.vn/dtb/redirect?357c951d99481', 0, 'http://f5.forum.zdn.vn/fp/f/79774.jpg', 0, 5),
(6, '', 'narutoisme', 'http://me.zing.vn/dtb/redirect?582d70302314f2', 0, 'http://f3.forum.zdn.vn/fp/f/72177.jpg', 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `homeitems`
--

CREATE TABLE `homeitems` (
  `id` int(11) NOT NULL,
  `orderdata` int(11) NOT NULL DEFAULT '0',
  `icon_type` varchar(20) NOT NULL DEFAULT 'code-tan-thu',
  `url` varchar(512) NOT NULL,
  `image` varchar(512) DEFAULT NULL,
  `thumbnail` varchar(512) DEFAULT NULL,
  `title` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homeitems`
--

INSERT INTO `homeitems` (`id`, `orderdata`, `icon_type`, `url`, `image`, `thumbnail`, `title`) VALUES
(1, 15, 'code-vip', '/megift/d/code/182/627', 'http://f2.forum.zdn.vn/fp/f/53616.png', 'http://f2.forum.zdn.vn/fp/f/36356.jpg', 'Code VIP Bang Bang'),
(2, 0, 'code-vip', '/megift/d/code/191/648', 'http://f4.forum.zdn.vn/fp/f/77433.png', 'http://b.s110.appstore.zdn.vn/game-ngaokiemkythu/3/ngaokiemkythu-110-1.jpg', 'Code VIP Ngao Kiem Ky Thu'),
(3, 0, 'code-tan-thu', 'http://me.zing.vn/megift/d/code/36/653', 'http://f1.forum.zdn.vn/fp/f/83270.png', 'http://f2.forum.zdn.vn/fp/f/38181.jpg', 'Canh cut vui ve');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_giftcode`
--

CREATE TABLE `tbl_giftcode` (
  `id` int(11) NOT NULL,
  `giftcode_type` int(11) NOT NULL,
  `giftcode_card` varchar(512) NOT NULL,
  `product_id` int(11) NOT NULL,
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `getcard_time` datetime NOT NULL,
  `price` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(128) DEFAULT NULL,
  `provider_id` int(11) DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_provider`
--

CREATE TABLE `tbl_provider` (
  `id` int(11) NOT NULL,
  `provider_name` varchar(128) DEFAULT NULL,
  `status` int(2) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `password_hash` varchar(64) DEFAULT NULL,
  `password_reset_token` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `auth_key` varchar(64) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(64) DEFAULT NULL,
  `permission` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password_hash`, `password_reset_token`, `email`, `auth_key`, `status`, `created_at`, `updated_at`, `password`, `permission`) VALUES
(6, 'admin', '$2y$13$RDDInGuihWMJylTkJNActObh/H1wLS1q2wLZwUCxxsXigr8.1HF6K', NULL, 'final_fantasy1121@yahoo.com', 'bqcGL_-587_1cVEmpsTis6DSrnbJZ8ey', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homebanner`
--
ALTER TABLE `homebanner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeitems`
--
ALTER TABLE `homeitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_giftcode`
--
ALTER TABLE `tbl_giftcode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_provider`
--
ALTER TABLE `tbl_provider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `homebanner`
--
ALTER TABLE `homebanner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `homeitems`
--
ALTER TABLE `homeitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_giftcode`
--
ALTER TABLE `tbl_giftcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_provider`
--
ALTER TABLE `tbl_provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
