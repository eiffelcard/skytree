-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016 年 10 月 20 日 19:02
-- サーバのバージョン： 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake_skytree`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` text NOT NULL,
  `postcode` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `country`, `postcode`, `state`, `city`, `created`, `modified`) VALUES
(1, 3, 'Japan', '1111111', '東京都', '日野市', '2016-10-20 11:19:24', '2016-10-20 11:19:24');

-- --------------------------------------------------------

--
-- テーブルの構造 `card_histories`
--

CREATE TABLE `card_histories` (
  `id` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `productcode` int(11) NOT NULL,
  `message` text NOT NULL,
  `is_delivered` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `product_masters`
--

CREATE TABLE `product_masters` (
  `id` int(11) NOT NULL,
  `product_number` int(11) NOT NULL,
  `product_picture` text,
  `product_name` text NOT NULL,
  `category` text NOT NULL,
  `price` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `product_masters`
--

INSERT INTO `product_masters` (`id`, `product_number`, `product_picture`, `product_name`, `category`, `price`, `created`, `modified`) VALUES
(1, 123456, '8dba2adf462b05c19af87b693b171c6f.jpg', 'cute ghost', 'halloween', 300, '2016-10-20 22:41:42', '2016-10-20 22:41:42'),
(2, 2, '5de3081dd96b7e5ed8d91c45d8db9df5.jpg', 'ハロウィン少年団', 'halloween', 300, '2016-10-21 01:32:31', '2016-10-21 01:32:31'),
(3, 3, '8d224a32d859398d38ee92f0d00f1605.jpg', 'パンプキン', 'halloween', 300, '2016-10-21 01:33:43', '2016-10-21 01:33:43'),
(4, 4, '91cf01411e0caac7e487b31dc94db39e.jpg', 'ハロウィン飲み会', 'halloween', 300, '2016-10-21 01:34:49', '2016-10-21 01:34:49');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `created`, `modified`) VALUES
(1, 'Yuuki', 'Noda', 'noda@test.com', '$2y$10$ukrtwk4Jr71HnaEJ96Yn4.X69smVIVxrs4Mpk4vxksYIjSE6M73Je', '2016-10-20 10:13:48', '2016-10-20 20:06:37'),
(2, 'Takuya', 'Kawamura', 'takuya@test.com', '$2y$10$mMfqYlZCelk15f5kjFOqH.DvVzqy/oRJHuM7kndHaHUmaMThOSLme', '2016-10-20 11:07:25', '2016-10-20 21:11:51'),
(3, 'Kiyokazu', 'Oami', 'kiyokazu@test.com', '123456', '2016-10-20 11:09:08', '2016-10-20 11:09:08'),
(4, 'Yui', 'Sasaki', 'sasaki@test.com', '123456', '2016-10-20 11:31:11', '2016-10-20 11:31:11'),
(5, 'test', 'test2', 'test@test.com', '$2y$10$LiqxD4MDUiYKU68htWgMxe0dav84r03hOO1IcW750g/PUeMtYl9G6', '2016-10-20 21:11:17', '2016-10-20 21:11:17'),
(6, 'Yukitoshi', 'Kihana', 'kihana@test.com', '$2y$10$OtkLt7JAxRrzuRRe8InMd.hU141OSuTpF16gSErTAv9RiwSvghGNW', '2016-10-20 22:23:11', '2016-10-20 22:23:11'),
(7, 'taro', 'Sumida', 'taro@test.com', '$2y$10$bpyQ3ypuvBMarIx3.7ZsMec13D7drRwE2wSLVkWQO/s.jSRGxcuDm', '2016-10-21 00:16:07', '2016-10-21 00:16:07');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_settings`
--

CREATE TABLE `user_settings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `picture` text,
  `display_name` text,
  `firstname_local` text,
  `lastname_local` text,
  `birthday` date DEFAULT NULL,
  `language` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `user_settings`
--

INSERT INTO `user_settings` (`id`, `user_id`, `picture`, `display_name`, `firstname_local`, `lastname_local`, `birthday`, `language`, `created`, `modified`) VALUES
(6, 2, 'ed3c5e9f129035616c406b68c14c179f.jpg', '河村拓哉', 'たくや', '河村', NULL, 'Ja', '2016-10-20 17:09:55', '2016-10-20 17:09:55'),
(7, 1, '8198c4679bfbae5e8615df0ce4a9372c.jpg', '野田祐機', 'ゆうき', 'のだ', NULL, 'Ja', '2016-10-20 17:33:11', '2016-10-20 17:33:11'),
(8, 3, '11ab5cf8c0e9e8ee3c22b57c20a6567f.jpg', '大網きよかず', 'きよかず', 'おおあみ', NULL, 'Ja', '2016-10-20 22:24:15', '2016-10-20 22:24:15'),
(9, 7, '45671adc8337b56441772ceb807d9afa.jpg', '隅田太郎', 'たろう', 'すみだ', NULL, 'Ja', '2016-10-21 00:19:54', '2016-10-21 00:19:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_histories`
--
ALTER TABLE `card_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_masters`
--
ALTER TABLE `product_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_settings`
--
ALTER TABLE `user_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `card_histories`
--
ALTER TABLE `card_histories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_masters`
--
ALTER TABLE `product_masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_settings`
--
ALTER TABLE `user_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
