-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 10:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `article_tbl`
--

CREATE TABLE `article_tbl` (
  `article_id` int(11) NOT NULL,
  `author_name` varchar(40) NOT NULL,
  `title` varchar(255) NOT NULL,
  `full_text` varchar(255) NOT NULL,
  `publication_date` date NOT NULL DEFAULT current_timestamp(),
  `is_final` tinyint(1) NOT NULL,
  `article_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article_tbl`
--

INSERT INTO `article_tbl` (`article_id`, `author_name`, `title`, `full_text`, `publication_date`, `is_final`, `article_img`) VALUES
(20, 'Jeremy Okuto', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some f', '2023-07-12', 1, '1689146071_BestApp.png'),
(22, 'Darren Young', 'It is a long established fact that a reader will be distracted', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words', '2023-07-12', 1, '1689146430_CloudComp.png'),
(23, 'Elon Musk', 'Lorem Ipsum is simply dummy text of the printing and typesetting', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised ', '2023-07-12', 1, '1689146553_CloudComp.png');

-- --------------------------------------------------------

--
-- Table structure for table `author_tbl`
--

CREATE TABLE `author_tbl` (
  `author_id` int(11) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author_tbl`
--

INSERT INTO `author_tbl` (`author_id`, `full_name`, `email`, `username`, `password`) VALUES
(1, 'Jeremy Okuto', 'jerryokuto713@gmail.com', 'JerryLegend254', '$2y$10$JeCI7RXyoNROF33x6NtRmObcDTFDwbr1zcK4wWl4Vi/G1r4KlEtBS'),
(2, 'Jeremy Clarkson', 'jeremy@gmail.com', 'jeremy', '$2y$10$Ky2CTdl/L1eDhMY4OqBrqOL.l5q.k1ElfhFDvs4/EQDgL9I2C3Fse'),
(3, 'John Doe', 'john@gmail.com', 'Johny', '$2y$10$rI.TydTR6z2kQfQ12M/r5u.y0ptR5WgYXrCSm.Wm7wrc5.jebjidy'),
(4, 'Darren Young', 'd@gmail.com', 'darry', '$2y$10$A3.kLtpjzNjmn6N3mmyeROnd9hknBHKExb1DxFwIdJkexyAlxuO/6'),
(5, 'Elon Musk', 'e@gmail.com', 'elonmusk', '$2y$10$hpumkFS4LYihS3Zm/i9Zz.e9X0QVNw8iVRf8jxWEeCycQnrYg0p8K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article_tbl`
--
ALTER TABLE `article_tbl`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `author_tbl`
--
ALTER TABLE `author_tbl`
  ADD PRIMARY KEY (`author_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article_tbl`
--
ALTER TABLE `article_tbl`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `author_tbl`
--
ALTER TABLE `author_tbl`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
