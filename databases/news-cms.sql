-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 11:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news-cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `post` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `post`) VALUES
(30, 'Sport', 1),
(31, 'Entertainment', 2),
(32, 'Politics', 2),
(33, 'Health', 1),
(35, 'Technology', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `author` int(11) NOT NULL,
  `post_img` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `description`, `category`, `post_date`, `author`, `post_img`) VALUES
(44, 'Discover the Most Magical Sunset in As', '                                                            We woke reasonably late following the feast and free flowing wine the night before. After gathering ourselves and our packs, we headed down to our homestay family’s small dining room for breakfast.\r\n\r\nRefreshingly, what was expected of her was the same thing that was expected of Lara Stone: to take a beautiful picture.\r\n\r\nWe were making our way to the Rila Mountains, where we were visiting the Rila Monastery where we enjoyed scrambled eggs, toast, mekitsi, local jam and peppermint tea.                                                ', '31', '30 Aug, 2023', 27, '54-1-696x405.jpg'),
(43, 'Ecommerce Brands Tend', 'We woke reasonably late following the feast and free flowing wine the night before. After gathering ourselves and our packs, we headed down to our homestay family’s small dining room for breakfast.\r\n\r\nRefreshingly, what was expected of her was the same thing that was expected of Lara Stone: to take a beautiful picture.\r\n\r\nWe were making our way to the Rila Mountains, where we were visiting the Rila Monastery where we enjoyed scrambled eggs, toast, mekitsi, local jam and peppermint tea.', '32', '27 Aug, 2023', 39, '67-696x464.jpg'),
(42, 'Game Changing Virtual Reality Console', '                                        We woke reasonably late following the feast and free flowing wine the night before. After gathering ourselves and our packs, we headed down to our homestay family’s small dining room for breakfast.\r\n\r\nRefreshingly, what was expected of her was the same thing that was expected of Lara Stone: to take a beautiful picture.\r\n\r\nWe were making our way to the Rila Mountains, where we were visiting the Rila Monastery where we enjoyed scrambled eggs, toast, mekitsi, local jam and peppermint tea.                                ', '33', '27 Aug, 2023', 38, '28-696x368.jpg'),
(41, 'WordPress News Magazine Charts', '                                        We woke reasonably late following the feast and free flowing wine the night before. After gathering ourselves and our packs, we headed down to our homestay family’s small dining room for breakfast.\r\n\r\nRefreshingly, what was expected of her was the same thing that was expected of Lara Stone: to take a beautiful picture.\r\n\r\nWe were making our way to the Rila Mountains, where we were visiting the Rila Monastery where we enjoyed scrambled eggs, toast, mekitsi, local jam and peppermint tea.                                ', '32', '27 Aug, 2023', 38, 'h104-696x464.jpg'),
(45, 'Shaheen, Rizwan and Rossouw in PSL team', 'Mohammad Rizwan (wk)\r\n550 runs, 55.00 average, 142.85 strike rate, one hundred, four fifties\r\n\r\nRizwan will go down as a PSL legend, and it\'s because of seasons like these. Not only did he retain his incredible consistency - he was the highest run-getter of the tournament - he also demonstrated he can continue to add layers to his batting. Often criticised for his strike rate, it was up to 142.85 this year from under 127 the previous year. His magnum opus was an unbeaten 64-ball 110 against Karachi Kings. He flew from 50 to 100 in 18 balls, and was the only player to score a hundred this PSL at a ground other than Rawalpindi. He was, expectedly, flawless behind the stumps, all while leading Multan Sultans to their third straight final, and ending up agonisingly close to another title.\r\n\r\nSaim Ayub\r\n341 runs, 28.41 average, 165.53 strike rate, five fifties\r\n\r\nNot quite the find of the PSL, since he\'d already been lighting up the domestic circuit, but the effortless step up was still a sight to behold. Having struggled with Quetta Gladiators as a teenager in 2021, Ayub\'s reinvention as an aggressive top-order ball-striker was instrumental to Peshawar Zalmi\'s successful season. A 37-ball 53 was a statement of intent, but he hit the heights during the Rawalpindi leg, taking full advantage of the shorter boundaries and flat pitches. Three successive fifties ignited Zalmi\'s campaign, propelling them through to the play-offs and earning him a maiden call-up to Pakistan\'s T20I side', '30', '30 Aug, 2023', 37, 'cover_1674665941az.jpg'),
(49, 'This is ai post', '                                                                                                    Hello this is ai post                                                                                ', '35', '01 Sep, 2023', 27, 'work hard.jpg'),
(50, 'Hello this is new post', '                    Just a test                ', '31', '02 Sep, 2023', 27, '1693635166-technology-customer-support1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `websitename` varchar(60) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `footerdesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`websitename`, `logo`, `footerdesc`) VALUES
('News Site', 'favicon.jpg', '@ Copyright 2023 News | Powered by Muhammad Ali                                                                        ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `password`, `role`) VALUES
(27, 'Ali', 'Samtia', 'ali', '202cb962ac59075b964b07152d234b70', 1),
(30, 'Noman', 'Punjabi', 'nomi', '45753b048517787f6f1c4506ae643acc', 0),
(39, 'Ashal', 'Sheikh', 'Ashal', '202cb962ac59075b964b07152d234b70', 1),
(38, 'Noman', 'Punjabi', 'Noman', '202cb962ac59075b964b07152d234b70', 0),
(37, 'Ahmed', 'Rana', 'ahmed', '202cb962ac59075b964b07152d234b70', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
