-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 02:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dance`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `logo_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `logo`, `heading`, `paragraph`, `link`, `video`, `image`, `logo_2`) VALUES
(1, 'logo.jpeg', 'Dance With you heart <br>We Can Dance', 'Established in 1940, Dancerio Dance Studio has become a center for dance students <br> with professional aspirations', '', 'https://www.youtube.com/watch?v=_sI_Ps7JSEk', 'slide-1.jpg', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `best_dance`
--

CREATE TABLE `best_dance` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL,
  `icon_1` varchar(255) NOT NULL,
  `icon_2` varchar(255) NOT NULL,
  `heading_2` varchar(255) NOT NULL,
  `paragraph_2` varchar(255) NOT NULL,
  `trainer` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `winner` varchar(255) NOT NULL,
  `features` varchar(255) NOT NULL,
  `heading_3` varchar(255) NOT NULL,
  `paragraph_3` varchar(255) NOT NULL,
  `trainer_number` varchar(255) NOT NULL,
  `client_number` varchar(255) NOT NULL,
  `winner_number` varchar(255) NOT NULL,
  `features_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `best_dance`
--

INSERT INTO `best_dance` (`id`, `heading`, `paragraph`, `icon_1`, `icon_2`, `heading_2`, `paragraph_2`, `trainer`, `client`, `winner`, `features`, `heading_3`, `paragraph_3`, `trainer_number`, `client_number`, `winner_number`, `features_number`) VALUES
(1, 'Last year we proved that we’re the best Dance Services', 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'flaticon-007-ballet', 'flaticon-008-ballet-1', 'Dance Schedule', 'Find out what\'s happening by viewing our full schedule of classes.', 'Certified Trainer', 'Verified Happy Client', 'Time Award Winner', 'Features added', 'Professional dance', 'Find out what\'s happening by viewing our full schedule of classes.', '20', '1300', '150', '280');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `title` int(11) NOT NULL,
  `photo` int(11) NOT NULL,
  `details` int(11) NOT NULL,
  `video` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `class_booking`
--

CREATE TABLE `class_booking` (
  `id` int(11) NOT NULL,
  `slotID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `class_schedule`
--

CREATE TABLE `class_schedule` (
  `id` int(11) NOT NULL,
  `classID` int(11) NOT NULL,
  `date` date NOT NULL,
  `duration` varchar(255) NOT NULL,
  `task` varchar(255) NOT NULL,
  `time` varchar(200) NOT NULL,
  `trainer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `fee` varchar(255) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `category` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `venue` varchar(255) NOT NULL,
  `organizer_name` varchar(255) NOT NULL,
  `organizer_trainer` varchar(255) NOT NULL,
  `organizer_phone` varchar(25) NOT NULL,
  `organizer_email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `global`
--

CREATE TABLE `global` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_designation` varchar(255) NOT NULL,
  `p_sign` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `global`
--

INSERT INTO `global` (`id`, `name`, `heading`, `paragraph`, `image`, `p_name`, `p_image`, `p_designation`, `p_sign`) VALUES
(1, 'We Provie service since 1940', 'Join A Global Dance Community', 'Lorem Ipsum proin gravida nibivel velit auctor aenean velitsol licitu Lorem Ipsum proin gravida nibivel velit auctor aenean velitsol licitu Lorem Ipsum proin gravida nibivel velit auctor aenean velitsol licitu', '1.jpg', 'Mahfuz Riad', '2.jpg', 'CEO & Founder of Phanic', 'sign.png');

-- --------------------------------------------------------

--
-- Table structure for table `online_dance`
--

CREATE TABLE `online_dance` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_dance`
--

INSERT INTO `online_dance` (`id`, `heading`, `image`, `link`, `image_2`) VALUES
(1, 'Online Dance Classes With The <br>World\'s Best Instructors', '7.png', '', '8.png');

-- --------------------------------------------------------

--
-- Table structure for table `outstanding`
--

CREATE TABLE `outstanding` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `ballet` varchar(255) NOT NULL,
  `paragraph` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `theatre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outstanding`
--

INSERT INTO `outstanding` (`id`, `name`, `heading`, `ballet`, `paragraph`, `image`, `theatre`) VALUES
(1, 'OUTSTANDING PERFORMANCE', 'Afiyana Star Academy offers quality dance instruction done with care', 'Pre-Ballet', 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua.', '1.png', 'Musical Theatre');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `heading`, `paragraph`, `icon`, `number`) VALUES
(1, 'Creative Movement', 'Lorem ipsum dolor sit amet consem et ctetuering adipisc elit sed diam.', 'flaticon-006-ballerina icon', '01'),
(2, 'Musical Theatre', 'Lorem ipsum dolor sit amet consem et ctetuering adipisc elit sed diam.', 'flaticon-005-gymnast icon', '02'),
(3, 'Hip-Hop', 'Lorem ipsum dolor sit amet consem et ctetuering adipisc elit sed diam.', 'flaticon-004-men-dancing icon', '03');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `paragraph` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `paragraph`, `p_image`, `p_name`, `p_designation`) VALUES
(2, '“My 9 year old shuffle-ball-steps her way through the day, twirls in the checkout line and chasses to the bus! Thank you for the incredible role models & opportunity. We Love You!”', '3.jpg', 'Mahfuz RIad', 'Founder'),
(3, '“My 9 year old shuffle-ball-steps her way through the day, twirls in the checkout line and chasses to the bus! Thank you for the incredible role models & opportunity. We Love You!”', '3.jpg', 'Mahfuz RIad', 'Founder'),
(4, '“My 9 year old shuffle-ball-steps her way through the day, twirls in the checkout line and chasses to the bus! Thank you for the incredible role models & opportunity. We Love You!”', '3.jpg', 'Mahfuz RIad', 'Founder');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `id`) VALUES
(' juliush  ', '  m@gmail.com  ', '  12345 ', 10),
('  abc  ', '  a@gmail.com  ', '  12345 ', 11),
('Coyon', 'c@email.com', '12345', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `best_dance`
--
ALTER TABLE `best_dance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_booking`
--
ALTER TABLE `class_booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slotID` (`slotID`);

--
-- Indexes for table `class_schedule`
--
ALTER TABLE `class_schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classID` (`classID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `global`
--
ALTER TABLE `global`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_dance`
--
ALTER TABLE `online_dance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outstanding`
--
ALTER TABLE `outstanding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `best_dance`
--
ALTER TABLE `best_dance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_booking`
--
ALTER TABLE `class_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_schedule`
--
ALTER TABLE `class_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `global`
--
ALTER TABLE `global`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `online_dance`
--
ALTER TABLE `online_dance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `outstanding`
--
ALTER TABLE `outstanding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_booking`
--
ALTER TABLE `class_booking`
  ADD CONSTRAINT `class_booking_ibfk_1` FOREIGN KEY (`slotID`) REFERENCES `class_schedule` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `class_schedule`
--
ALTER TABLE `class_schedule`
  ADD CONSTRAINT `class_schedule_ibfk_1` FOREIGN KEY (`classID`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
