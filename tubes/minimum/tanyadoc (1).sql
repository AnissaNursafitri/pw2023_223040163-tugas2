-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 04:09 PM
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
  `waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_janji`
--

INSERT INTO `table_janji` (`id`, `nama`, `email`, `NIK`, `spesialis`, `waktu`) VALUES
(38, 'Harry James', 'james@mail', '223040172', 'Spesialis Anak', '10.00'),
(42, 'John Miller', 'john@mail', '223040235', 'Spesialis Mata', '13.00'),
(43, 'Anissa Nursafitri', 'anissa@gmail.com', '223040163', 'Spesialis Anak', '09.00'),
(45, 'William James', 'wil@mail', '224026845', 'Spesialis Anak', '10.00'),
(46, 'Herda pw', 'pw@mail', '296438924', 'Spesialis Gigi', '09.00'),
(48, 'Yesi Dede', 'yesi@gmail.com', '223040179', 'Spesialis Gigi', '10.00'),
(50, 'Justin Bieber', 'justin@mail', '23534547', 'Spesialis Anak', '14.00'),
(51, 'James Athur', 'athur@mail', '46976543', 'Spesialis Anak', '10.00'),
(52, 'Yolan Elsas', 'yolan@gmail.com', '23940573067', 'Spesialis Mata', '13.00'),
(60, 'Lewis Capaldi', 'lewis@mail', '2354658', 'Spesialis Mata', '10.00'),
(61, 'Siti Mariam', 'mar@mail', '46758679', 'Spesialis Mata', '08.00'),
(62, 'Annisa Ica', 'ica@gmail.com', '223040172', 'Spesialis Umum', '13.00'),
(63, 'Lesti Billar', 'bilar@mail.com', '23785936503', 'Spesialis Umum', '13.00'),
(64, 'Arianna Grande', 'arin@mail', '39057365', 'Spesialis Mata', '10.00'),
(65, 'Taylor Swift', 'taylor@mail', '23434658', 'Spesialis Mata', '10.00'),
(66, 'Rihanna', 'rii@mail', '34545769', 'Spesialis Umum', '14.00'),
(67, 'Beyonce', 'on@mail', '24870421312', 'Spesialis Mata', '08.00'),
(68, 'Katy Perry', 'katy@gmail', '132765845', 'Spesialis Anak', '13.00'),
(69, 'Selena Gomez', 'selen@gmail', '23682953291', 'Spesialis Gigi', '13.00'),
(70, 'Christiana Aguilera', 'chris@mail', '123963498', 'Spesialis Mata', '09.00'),
(71, 'Billie Eilish', 'lis@mail', '24275492', 'Spesialis Mata', '13.00'),
(72, 'Chloe Bridges', 'ch@mail', '325457690', 'Spesialis Mata', '14.00'),
(73, 'Madison Beer', 'beer@mail', '235778980', 'Spesialis Gigi', '11.00'),
(74, 'Jennifer Lopez', 'lop@mail', '130724956', 'Spesialis Anak', '13.00'),
(76, 'Rebecca Black', 'sags@mail', '1465889098', 'Spesialis Gigi', '13.00'),
(77, 'Asep', 'sep@mail', '3465489', 'Spesialis Gigi', '14.00'),
(78, 'Ujang', 'jang@mail', '2354579', 'Spesialis Mata', '14.00'),
(79, 'Syamsudin', 'din@mail', '23435799900', 'Spesialis Umum', '10.00'),
(80, 'Iqbal Ramadhan', 'bal@mail', '294693865', 'Spesialis Mata', '14.00'),
(81, 'aldi', 'aldi@gmail.com', '223040166', 'Spesialis Anak', '14.00'),
(82, 'Amir Alhakim', 'amir@mail', '32096523650', 'Spesialis Umum', '10.00'),
(83, 'mama', 'ma@mail', '32969212', 'Spesialis Anak', '09.00'),
(84, 'fahira', 'far@mail', '23556788', 'Spesialis Anak', '14.00'),
(86, 'Andi Jalaludin', 'andi@mail', '95723956905', 'Spesialis Gigi', '13.00'),
(91, 'Rayhans', 'ray@mail', '570439704', 'Spesialis Gigi', '10.00'),
(92, 'pebry', 'bii@mail', '6359753', 'Spesialis Gigi', '13.00'),
(101, 'salva', 'salva@mail', '8659023650', 'Spesialis Umum', '11.00');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `username`, `nama`, `email`, `password`, `role`) VALUES
(39, 'admin', 'anissa', 'anissa@gmail.com', '$2y$10$ibUY4Sew3KqQacdMrLou9OBodkkJslIXoqqunOk8K5xfwUgplmcB2', 'admin'),
(41, 'user', 'user', 'user@gmail.com', '$2y$10$b4Vg9oYjRaUj0RqX5CV1LeDTdKmvFj.Njk0et.YUq0CHuiVOW5xPS', 'user'),
(42, 'mama', 'mamaku', 'ma@mail', '$2y$10$Wf4ix/DOq/HEoM73zhUQDuc6lebtXSYN6s1BANevDKqbjx7YDdDYG', 'user'),
(43, 'andi', 'Andi Jalaludin', 'andi@mail', '$2y$10$ujUlaLSxF804hZecyjOPbu4I6h/kKaqNQDRzXufgDHHRhwsWEAYb6', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_janji`
--
ALTER TABLE `table_janji`
  ADD PRIMARY KEY (`id`),
  ADD KEY `spesialis` (`spesialis`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
