-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 11:01 PM
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
-- Database: `touirest`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_rate`
--

CREATE TABLE `comment_rate` (
  `id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `place_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment_rate`
--

INSERT INTO `comment_rate` (`id`, `user_email`, `place_name`) VALUES
(1, 'yousefabdelraman862022@gmail.com', 'cairo Citadel '),
(2, 'yousefabdelraman862022@gmail.com', 'pyrmaids'),
(3, 'yousefabdelraman862022@gmail.com', 'Cairo Tower'),
(4, 'yousefabdelraman862022@gmail.com', 'mosque amr ibn alas'),
(5, 'yousefabdelraman862022@gmail.com', 'NMEC');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(10) NOT NULL,
  `place` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `place_img` varchar(100) NOT NULL,
  `catgory` varchar(100) NOT NULL,
  `catgory_img` varchar(100) NOT NULL,
  `link_destination` varchar(500) NOT NULL,
  `video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `place`, `city`, `place_img`, `catgory`, `catgory_img`, `link_destination`, `video`) VALUES
(1, 'pyrmaids', 'giza', 'Egypt.jpg', 'Cultural', 'cultural.jpg', ' https://maps.app.goo.gl/8KjZ4ahBPBXhDzRD9', 'cairo2.mp4'),
(2, 'NMEC', 'giza', 'Egypt.jpg', 'Cultural', 'cultural.jpg', 'https://maps.app.goo.gl/7dnapNj6jy5CgY6a8', 'Prelude to The Pharaohs’ Golden Parade.mp4'),
(3, 'cairo Citadel ', 'cairo', 'Cairo-Egypt.jpg', 'Cultural', 'cultural.jpg', 'https://maps.app.goo.gl/Z5KbLPogktVsAkGZ9', 'Salah El-Din Citadel - Cairo Citadel - Egypt.mp4'),
(4, 'Cairo Tower', 'cairo', 'Cairo-Egypt.jpg', 'Cultural', 'cultural.jpg', 'https://maps.app.goo.gl/VxNh2swNbaAFge9C9', 'Cairo Tower from ABOVE at night - Drone Video.mp4'),
(5, 'mosque amr ibn alas', 'cairo', 'Cairo-Egypt.jpg', 'religious', 'reg.jpeg', 'https://maps.app.goo.gl/6ScyDKvi77KdJWfDA', 'المختصر _ شاهد قصة مسجد عمرو بن العاص - لماذا كان أزهرا قبل الجامع الأزهر؟.mp4'),
(6, 'Mangroovy Beach', 'Hurghada', 'hurghada.jpg', 'beaches', 'beaches.png', 'https://maps.app.goo.gl/41224oWiDZVrSmKMA', 'El Gouna - Egypt.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `place_details`
--

CREATE TABLE `place_details` (
  `id` int(11) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `place_details`
--

INSERT INTO `place_details` (`id`, `description`, `price`) VALUES
(1, 'pyramid, in architecture, a monumental structure constructed of or faced with stone or brick and having a rectangular base and four sloping triangular (or sometimes trapezoidal) sides meeting at an apex (or truncated to form a platform).', '1234'),
(2, 'The NMEC is the first of its kind in Egypt and the Arab world. It presents the full range of the richness and diversity of Egyptian civilization throughout the ages, from prehistoric times to the present day by focusing on its continuity and stability as demonstrated by its tangible and intangible heritage.', '1243'),
(3, 'Salah El-Din Citadel is one of the most important landmarks of Islamic Cairo, and one of the most luxurious military fortresses built in the middle ages. Its strategic location on the top of Mokattam Mountain afforded a wonderful view of all the landmarks of historical Cairo.', '12'),
(4, 'Cairo Tower is an important tourist world. It was built between 1956 and 1961. Cairo Tower was built out of concrete iron and it has the shape of the famous Lotus plant where ancient Egyptians used to produce papyrus. It is located in the middle of Cairo at the edge of Zamalek Island', '100'),
(5, ' the Arab commander who led the Muslim conquest of Egypt and served as its governor in 640–646 and 658–664. The son of a wealthy Qurayshite, Amr embraced Islam in c. 629 and was assigned important roles in the nascent Muslim community by the Islamic prophet Muhammad.', '0'),
(6, 'Delivering exclusivity and luxury in abundance, Mangroovy Residence is a state-of-the-art development that boasts a mesmerising seafront location. Inspired by nature and its surroundings, its architecture and design have been created in a way that inspires.', '200');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'yousef', 'yousefabdelraman862022@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
(2, '', '', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
(3, ' youssef', 'ali@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_rate`
--
ALTER TABLE `comment_rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_email` (`user_email`),
  ADD KEY `place_name` (`place_name`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`),
  ADD KEY `place` (`place`),
  ADD KEY `place_2` (`place`);

--
-- Indexes for table `place_details`
--
ALTER TABLE `place_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment_rate`
--
ALTER TABLE `comment_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `place_details`
--
ALTER TABLE `place_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment_rate`
--
ALTER TABLE `comment_rate`
  ADD CONSTRAINT `place_rate` FOREIGN KEY (`place_name`) REFERENCES `places` (`place`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_rate` FOREIGN KEY (`user_email`) REFERENCES `users` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `place_details`
--
ALTER TABLE `place_details`
  ADD CONSTRAINT `place_details_ibfk_1` FOREIGN KEY (`id`) REFERENCES `places` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
