-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2017 at 10:57 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gryqhon`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `info` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `name`, `info`, `pic`) VALUES
(1, 'Bức Tường', 'Là ban nhạc rock hàng đầu Việt Nam được thành lập năm 1995', 'buctuong'),
(2, 'Hạc San', 'Là ban nhạc rock được thành lập năm 2012 với thể loại chính là Progressive Metal', '1237920_507829695957985_402995914_n'),
(3, 'Microwave', 'Microwave (nghĩa tiếng việt là Vi sóng, đôi khi được viết là MW như logo nổi tiếng của họ) là một ban nhạc rock theo thể loại nu metal ở TP Hồ Chí Minh. Họ là một trong những ban nhạc nổi tiếng và thành công nhất của thể loại nu metal ở Việt Nam.', 'microwave-band'),
(4, 'Backstreet Boys', NULL, NULL),
(5, 'Bon Jovi', NULL, NULL),
(6, 'Queen', 'Queen là một ban nhạc rock thành lập năm 1970 tại London, Anh. Ban nhạc có được tổng cộng 18 album, 18 đĩa đơn và 10 DVD đạt tới vị trí quán quân, được vinh danh tại Đại sảnh Danh vọng Rock and Roll vào năm 2001.', NULL),
(8, 'The White Stripes', 'The White Stripes là ban nhạc song ca người Mỹ được thành lập vào năm 1997 ở Detroit, Michigan, Mỹ. Ban nhạc bao gồm 2 thành viên: tay trống Meg White và nhạc sĩ - nghệ sĩ đa nhạc cụ Jack White.', NULL),
(9, 'Avenged Sevenfold', 'Avenged Sevenfold (A7X) là một ban nhạc rock được thành lập tại California, Hoa Kỳ vào năm 1999. Ban nhạc đạt được thành công lớn với album City of Evil vào năm 2005 với các bài hát như "Burn It Down", "Bat Country", "Beast and the Harlot".', 'avenged_sevenfold_classic_by_mckee91'),
(10, 'Prince', 'Prince Rogers Nelson, được biết đến bởi nghệ danh Prince, là một ca sĩ, người viết bài hát, nhạc công đa nhạc cụ, nhà sản xuất thu âm và diễn viên người Mỹ.', 'Prince'),
(13, 'Good Charlotte', 'Là nhóm nhạc rock Mỹ thành lập năm 1996 tại  Waldorf, Maryland.', 'fa4b5059c42469594b9b0c6d9452814a');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `genre_id` int(11) NOT NULL,
  `genre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genre_info` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genre_id`, `genre`, `genre_info`) VALUES
(1, 'Rock', ''),
(2, 'Pop', '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_25_065542_create_music_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(10) UNSIGNED NOT NULL,
  `track` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `artist` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `album` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cover_art` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `artist_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `track`, `artist`, `genre`, `link`, `created_at`, `updated_at`, `album`, `cover_art`, `artist_id`, `genre_id`) VALUES
(1, 'Cây Bàng', 'Bức Tường', 'Rock', 'https://www.youtube.com/embed/lkWbOyY9gnU', NULL, NULL, 'Vô Hình', 'vohinh', 1, 1),
(2, 'I Want It That Way', 'Backstreet Boys', 'Pop', 'https://www.youtube.com/embed/4fndeDfaWCg', NULL, '2017-05-30 06:33:22', 'Millennium', 'Millennium', 4, 2),
(3, 'Bed of Roses', 'Bon Jovi', 'Rock', 'https://www.youtube.com/embed/pdkw2jL6Ho8', NULL, NULL, 'Keep the Faith', 'KeepTheFaith', 5, 1),
(4, 'Mắt Đen', 'Bức Tường', 'Rock', 'https://www.youtube.com/embed/hOXa_7lpj1g', '2017-05-26 03:30:22', '2017-05-26 03:30:22', 'Vô Hình', 'vohinh', 1, 1),
(5, 'Rock Xuyên Màn Đêm', 'Bức Tường', 'Rock', 'https://www.youtube.com/embed/FHyQ-K84AYE', '2017-05-28 23:43:29', '2017-05-28 23:43:29', 'Tâm Hồn Của Đá', 'tamhoncuada', 1, 1),
(10, 'Tìm lại', 'Microwave', 'Rock', 'https://www.youtube.com/embed/hKCYIYmKEBc', NULL, '2017-05-31 00:37:45', 'Lối Thoát', 'Mw_loi_thoat', 3, 1),
(15, 'Sét Đánh Ngang Trời', 'Hạc San', 'Rock', 'https://www.youtube.com/embed/DXz0J5YSOoY', '2017-05-31 00:21:44', '2017-06-05 18:54:55', 'Sét Đánh Ngang Trời', 'setdanhngangtroi', 2, 1),
(42, 'Tiếng Đàn Hàm Oan', 'Hạc San', 'Rock', 'https://www.youtube.com/embed/KF_ao02NNt4', '2017-06-09 01:27:11', '2017-06-09 01:27:58', 'Sét Đánh Ngang Trời', 'setdanhngangtroi', 2, 1),
(43, 'Những Chuyến Đi Dài', 'Bức Tường', 'Rock', 'https://www.youtube.com/embed/4RgCllKvJuc', '2017-06-09 01:33:35', '2017-06-09 01:35:39', 'Đất Việt', 'DatViet', 1, 1),
(44, 'Tháng 12', 'Bức Tường', 'Rock', 'https://www.youtube.com/embed/fBN1V2gPzHI', '2017-06-09 01:33:35', '2017-06-09 01:34:33', 'Đất Việt', 'DatViet', 1, 1),
(48, 'Ai Oán', 'Hạc San', 'Rock', 'https://www.youtube.com/embed/M2ffAikn8AM', '2017-06-09 01:39:39', '2017-06-09 01:39:39', 'Sét Đánh Ngang Trời', 'setdanhngangtroi', 2, 1),
(49, 'Bí Mật Người Ra Đi', 'Hạc San', 'Rock', 'https://www.youtube.com/embed/5rfAw_0cJ1c', '2017-06-09 01:46:15', '2017-06-09 01:46:30', 'Sét Đánh Ngang Trời', 'setdanhngangtroi', 2, 1),
(50, 'I Want To Break Free', 'Queen', 'Rock', 'https://www.youtube.com/embed/f4Mc-NYPHaQ', '2017-06-09 02:00:05', '2017-06-09 02:00:05', 'The Works', 'Queen_The_Works', 6, 1),
(51, 'Nightmare', 'Avenged Sevenfold', 'Rock', 'https://www.youtube.com/embed/94bGzWyHbu0', '2017-06-09 02:38:21', '2017-06-09 02:40:38', 'Nightmare', 'Nightmare', 9, 1),
(52, 'Hoang Tàn', 'Hạc San', 'Rock', 'https://www.youtube.com/embed/whKBvGm-MTE', '2017-06-09 02:48:56', '2017-06-09 02:48:56', 'Sét Đánh Ngang Trời', 'setdanhngangtroi', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Quan dep trai', 'gryqhon@email.com', '$2y$10$tql4SafeLLkSETKp8kB9UuLfTsvFMr57GPBorYHzGM7KEDf1tkTmq', 'sD1ozLIhX8WNRGPCwObcpLU2FskpGAS24vohngEpy631ZaB46PB7zyEi9Br9', '2017-05-24 23:39:54', '2017-05-31 02:09:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artist_id` (`artist_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `music`
--
ALTER TABLE `music`
  ADD CONSTRAINT `music_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`),
  ADD CONSTRAINT `music_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`genre_id`);

--
-- Constraints for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD CONSTRAINT `password_resets_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
