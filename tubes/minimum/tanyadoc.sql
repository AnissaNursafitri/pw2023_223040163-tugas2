-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2023 at 12:04 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanyadoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_janji`
--

CREATE TABLE `table_janji` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `NIK` char(50) NOT NULL,
  `spesialis` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_janji`
--

INSERT INTO `table_janji` (`id`, `nama`, `email`, `NIK`, `spesialis`, `waktu`, `gambar`) VALUES
(38, 'Harry James', 'james@mail', '223040172', 'Spesialis Mata', '14.00', '647cc9fe6ec92.jpg'),
(42, 'John Miller', 'john@mail', '223040235', 'Spesialis Mata', '13.00', '647cc9c99d590.jpg'),
(43, 'Anissa Nursafitri', 'anissa@gmail.com', '223040163', 'Spesialis Anak', '09.00', '647de2d4c9739.jpg'),
(45, 'William James', 'wil@mail', '224026845', 'Spesialis Anak', '10.00', '647d628a581ca.jpg'),
(46, 'Herda pw', 'pw@mail', '296438924', 'Spesialis Anak', '08.00', '647d63133dc48.jpg'),
(47, 'Mustika Weni', 'mustika@gmail.com', '223040139', 'Spesialis Gigi', '14.00', '647d64f0ccb8f.jpg'),
(48, 'Yesi Dedehidayati', 'yesi@gmail.com', '223040179', 'Spesialis Anak', '14.00', '647d67603af47.jpg'),
(50, 'Justin Bieber', 'justin@mail', '23534547', 'Spesialis Anak', '14.00', '647d84997add4.jpg'),
(51, 'James Athur', 'athur@mail', '46976543', 'Spesialis Anak', '10.00', '647d853667845.jpg'),
(52, 'Yolan Elsas', 'yolan@gmail.com', '23940573067', 'Spesialis Mata', '13.00', '647dca28a9b62.jpg'),
(60, 'Lewis Capaldi', 'lewis@mail', '2354658', 'Spesialis Mata', '10.00', '647de0b0eff01.jpg'),
(61, 'Siti Mariam', 'mar@mail', '46758679', 'Spesialis Gigi', '12.00', '64822bbb0400f.jpg'),
(62, 'Annisa Ica', 'ica@gmail.com', '223040172', 'Spesialis Umum', '13.00', '6482a81fdb2ba.jpg'),
(63, 'Lesti Billar', 'bilar@mail.com', '23785936503', 'Spesialis Umum', '13.00', '64813c22922b5.jpg'),
(64, 'Arianna Grande', 'arin@mail', '39057365', 'Spesialis Mata', '10.00', '6482017e767a3.jpg'),
(65, 'Taylor Swift', 'taylor@mail', '23434658', 'Spesialis Mata', '10.00', '648225b261789.jpg'),
(66, 'Rihanna', 'rii@mail', '34545769', 'Spesialis Umum', '14.00', '6482264ab6435.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `username`, `nama`, `email`, `password`) VALUES
(4, 'anissans', 'Anissa Nursafitri', 'anissa@gmail.com', '$2y$10$5UkohfSkPA5q/9.a94oGN.J0N6rTWP/1lTWcqypwt5UrrqYikD20m'),
(13, 'mustika', 'Mustika Weni', 'mustika@gmail.com', '$2y$10$jSsPtXf0oI2LFn6a6FlvkuOlDCWmyYtBUJuLx3emmQdEHcIl/F9lm'),
(14, 'yesiii', 'Yesi Dedehidayati', 'yesi@gmail.com', '$2y$10$zH0JvOm6sVQDHZaYs41cyep.THsR23.ZvTvmZmh9j2fvqb07vL62i'),
(15, 'icaa', 'Annisa Ica', 'ica@gmail.com', '$2y$10$/MBUPrrmsA76ScTl9SLMnevYo7kppbcZ6BV3htKaU2X3K1E6gs0C6'),
(17, 'wildan', 'Wildan Aziz', 'wildan@gmail.com', '$2y$10$9.89QMcJ3uE/G/cyI8X2xuHKgrNyRBPJFDR59BrHc/9.dqqw3/CkC'),
(18, 'khoerul', 'Khoerul Mubin', 'khoerul@gmail.com', '$2y$10$ts0BRzp8.KMYrkptH9YW4.UWOiCfYP3aUAoM.SbzzkPC3cxIjobzm'),
(19, 'yolan', 'Yolan Elsas', 'yolan@gmail.com', '$2y$10$TF4wXItYgtQH2ZpC1kq6QO4N728pgCsn/qoZpPzEbLTVUSXTrRoE.'),
(25, 'herda', 'Herda pw', 'pw@mail', '$2y$10$hbHeCR2IdLhpMkPILmHuDOLYSnQAYpUVo7iA5Sv5tP20UlTmw2jCK'),
(29, 'william', 'williamjames', 'wili@mail', '$2y$10$cGBHfUNGCzqxtLN7PFa8g.aOey1eHxDL3djFfgED8XLk3gMZbd2Ia'),
(30, 'mariam', 'Siti Mariam', 'mar@mail', '$2y$10$IDJ5yEc0q008tFFRNh9ZE.Z.YhfIA9TsjADP71fTv.EcwVK.XOEIm'),
(31, 'james', 'Harry James', 'james@mail', '$2y$10$ex3fSO4jySoRYe70ODdZ3eaLbsrKIGZVsG2er6aFMenQ6HRHAReRa'),
(32, 'john', 'John Miller', 'john@mail', '$2y$10$0Ti0s.avxEHQ.5i1KwO8veQ2NcHr/IQXgu8I./yzl8r9Dc/E3jfV2'),
(33, 'justin', 'Justin Bieber', 'justin@mail', '$2y$10$h1ciQ39Xefn1RTWy.Pub.eXux3mEd5gF2VVH9ahUqNDM4q9vG9CS6'),
(35, 'athur', 'James Athur', 'athur@mail', '$2y$10$lZw5b1Yf7jTL/so9OEwNQenQNuKiLC1bsXewwzyxjRE29RVUf9m/.'),
(36, 'lewis', 'Lewis Capaldi', 'lewis@mail', '$2y$10$PXn75sMfEmVM3e5tAwVZ3e/CXgYumNhrfXl.n/j6CdMaFDH3tUSlG'),
(37, 'taylor', 'Taylor Swift', 'taylor@mail', '$2y$10$N/xf7s1Tjm2EEtAYQhVBne2zCsPL61VCpL3pZ8bnnl8/cgzoMqVjm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_janji`
--
ALTER TABLE `table_janji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_janji`
--
ALTER TABLE `table_janji`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
