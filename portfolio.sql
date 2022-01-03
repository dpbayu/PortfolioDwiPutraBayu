-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 07:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about_pic` text NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_pic`, `about_title`, `about_desc`) VALUES
(1, '1636559044profile.png', 'Web Designer | UI & UX Designer | Front-End Programmer', 'Experienced Operational Specialist with a demonstrated history of working in the computer software industry. I am skilled in office administration, data entry, web design and UI/UX Designer. I mastered tool figma for create mock up and microsoft office for office administration. Strong information technology professional with a Bachelor\'s degree focused in Computer/Information Technology Administration and Management from Mercu Buana University.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `admin_profile` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `admin_profile`, `username`, `password`) VALUES
(1, 'Michaelangelo', '1636732024IMG_0631.JPG', 'bayudp', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `email`, `mobile`) VALUES
(1, 'Jakarta, Indonesia', 'Dwiputrabayu19@gmail.com', '+ 62 89604333574');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `word1` varchar(255) NOT NULL,
  `word2` varchar(255) NOT NULL,
  `word3` varchar(255) NOT NULL,
  `showicons` varchar(11) NOT NULL,
  `home_pic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `word1`, `word2`, `word3`, `showicons`, `home_pic`) VALUES
(1, 'Dwi Putra Bayu Oktantyo', 'Web Designer', 'UI & UX Designer', 'Front-End Programmer', 'on', '1636558811profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE `interests` (
  `id` int(11) NOT NULL,
  `icon_interest` text NOT NULL,
  `title_interest` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`id`, `icon_interest`, `title_interest`) VALUES
(11, '1636732356video-game.png', 'Game'),
(12, '1636732411graphic-design.png', 'Design'),
(13, '1636732465hiking.png', 'Hiking'),
(14, '1636732563cinema.png', 'Movie'),
(15, '1636732610coffee-cup.png', 'Coffee'),
(16, '1636732787running.png', 'Sport'),
(20, '1636804103headphones.png', 'Music'),
(21, '1636804163web-programming.png', 'Coding');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `project_type` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_pic` text NOT NULL,
  `project_desc` longtext NOT NULL,
  `project_date` varchar(255) NOT NULL,
  `project_role` varchar(255) NOT NULL,
  `project_link` varchar(255) NOT NULL,
  `project_linkname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `project_type`, `project_name`, `project_pic`, `project_desc`, `project_date`, `project_role`, `project_link`, `project_linkname`) VALUES
(1, 'Web Design', 'PUSATNUSA', '1636733844Pusatnusa.png', 'The People Entrepreneurs Association (PUSATNUSA) is a legal entity organization consisting of entrepreneurs based on the people economy (Pancasila economy) together with the people and users to become pioneers in realizing the goals of the Republic of Indonesia.', 'June 2020', 'Web Designer', 'https://pusatnusa.com/', 'www.pusatnusa.com'),
(2, 'Web Design', 'Portfolio Aqilla Aurellia', '1636733845Portfolio.png', 'Aqila Aurelia is a graphic designer who has more than 3 years of experience in the design field. She loves meeting new people from all over the world. She loves challenges and is always learning to be better than before with the people around her.', 'October 2020', 'UI & UX Designer', 'https://www.figma.com/file/0OZVLXHIpaHsfv7GQTy8sL/Portfolio?node-id=0%3A1', 'www.aqillaaurellia.com'),
(64, 'Web Design', 'Let\'s Eat', '1636807563Lets Eat.png', 'Let\'s eat is a web design that serves to help customers order food and drinks with a beautiful appearance and stunning animation so that it will look fresher. This website can also be used to book a place or a dining table that customers want.', 'November 2020', 'UI & UX Designer', 'https://www.figma.com/file/caL3qHEamhfUBAvdiYOwtC/Let\'s-Eat-Figma?node-id=0%3A1', 'www.letseat.com'),
(70, 'Web Design', 'Soundhead', '1636807815Soundhead.png', 'Soundhead makes it easy for you to find the right music or podcast for every time on your phone, your computer, your tablet, and more. There are millions of songs on Soundhead. So whether you are driving, working out, partying, or relaxing, the right music or podcast is always in your hands. Choose what you want to hear or let Soundhead surprise you.\r\n\r\n', 'August 2021', 'UI & UX Designer', 'https://www.figma.com/file/Ti6JWzeTQhUpLvGkZSxZIY/Soundhead-Figma?node-id=0%3A1', 'www.soundhead.com'),
(71, 'Web Design', 'Chill & Burn', '1636807905Chill & Burn.png', 'The minimalistic design of the Chill & Burn website coffee anytime provides the most complete and up-to-date information about the menu and price list. The design reflects the Chill & Burn corporate indetity and try to attracts new customers and help to promotion of the cafe.', 'September 2021', 'UI & UX Designer', 'https://www.figma.com/file/tCi3llWtEDEo8NWQcXLQXu/Chill-%26-Burn?node-id=0%3A1', 'www.chill&burn.com'),
(72, 'Website', 'Portfolio Chou Tzuyu', '1636808167choutzuyu.png', 'Dynamic website for Chou Tzuyu member of South Korean girl group TWICE.', 'October 2021', 'Fullstack Programmer', 'http://choutzuyu.epizy.com/', 'choutzuyu.epizy.com');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `org` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `exp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `type`, `title`, `org`, `time`, `exp`) VALUES
(8, 'e', 'Course HTML, CSS & JAVASCRIPT', 'Progate', 'March 2021 - April 2021', 'Professional Academy'),
(9, 'e', 'Big Data Analytics', 'Digital Talent Scholarship KOMINFO', '2019', 'Program Fresh Graduate Academy'),
(10, 'e', 'Bachelor of Computer Science', 'Mercu Buana University', '2015 - 2019', ''),
(11, 'p', 'Web Designer', 'GORGA GROUP', 'June 2020 - September 2020', 'Create website PUSATNUSA'),
(13, 'p', 'Junior Android Programmer', 'Cooperative Sejahtera Mandiri', 'January 2017 - June 2017', 'Create a cooperative employee salary calculation application');

-- --------------------------------------------------------

--
-- Table structure for table `section_control`
--

CREATE TABLE `section_control` (
  `id` int(11) NOT NULL,
  `home_section` varchar(11) NOT NULL,
  `about_section` varchar(11) NOT NULL,
  `resume_section` varchar(11) NOT NULL,
  `portfolio_section` varchar(11) NOT NULL,
  `contact_section` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_control`
--

INSERT INTO `section_control` (`id`, `home_section`, `about_section`, `resume_section`, `portfolio_section`, `contact_section`) VALUES
(1, 'on', 'on', 'on', 'on', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `page_title` text NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `siteicon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `page_title`, `keywords`, `description`, `siteicon`) VALUES
(1, 'Dwi Putra Bayu Oktantyo | PORTFOLIO', 'Web, Website, Web Design, Front-end, UI, UX, Design', 'Portfolio Dwi Putra Bayu Oktantyo', '1636622810codesvein.png');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon_service` text NOT NULL,
  `title_service` varchar(25) NOT NULL,
  `desc_service` varchar(85) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon_service`, `title_service`, `desc_service`) VALUES
(15, '1636805493front-end.png', 'Front-End', 'People who play a role in developing the appearance of a site or application'),
(16, '1636805551ux-design.png', 'Web Design', 'Web design is a form of graphic or digital animation in creating a web page	'),
(17, '1636805811ui-design.png', 'UI & UX Design', 'UI design is the beauty of appearance, and the focus of UX design is the satisfaction');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `skill_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `skill_level`) VALUES
(26, 'HTML', 85),
(27, 'CSS', 80),
(30, 'PHP', 70),
(31, 'Figma', 90),
(32, 'Design', 80);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `behance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `facebook`, `instagram`, `linkedin`, `github`, `behance`) VALUES
(1, 'dwiputrabayu.oktantyo', 'dwptrbayu', 'dwiputrabayu', 'dwptrbayu', 'dwptrbayu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_control`
--
ALTER TABLE `section_control`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `interests`
--
ALTER TABLE `interests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `section_control`
--
ALTER TABLE `section_control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
