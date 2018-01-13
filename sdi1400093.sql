-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 13 Ιαν 2018 στις 14:24:56
-- Έκδοση διακομιστή: 10.1.28-MariaDB
-- Έκδοση PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `sdi1400093`
--
CREATE DATABASE IF NOT EXISTS `sdi1400093` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sdi1400093`;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `aitimata`
--

CREATE TABLE `aitimata` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `aitimata`
--

INSERT INTO `aitimata` (`id`, `username`, `type`) VALUES
(13, 'jojo', 'Î£ÏÎ½Ï„Î±Î¾Î·Ï‚'),
(14, 'jojo', 'Î‘Î½Î±Ï€Î·ÏÎ¯Î±Ï‚');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `asfalismenoi`
--

CREATE TABLE `asfalismenoi` (
  `username` varchar(50) NOT NULL,
  `suntaksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `asfalismenoi`
--

INSERT INTO `asfalismenoi` (`username`, `suntaksi`) VALUES
('jojo', '70'),
('maltom', '10');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `suntaksiouxoi`
--

CREATE TABLE `suntaksiouxoi` (
  `username` varchar(50) NOT NULL,
  `suntaksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `AFM` varchar(9) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`name`, `surname`, `fathername`, `mothername`, `AFM`, `username`, `password`, `email`, `type`) VALUES
('Î“Î¹ÏŽÏÎ³Î¿Ï‚', 'Î‘Ï€Î¿ÏƒÏ„ÏŒÎ»Î¿Ï…', 'ÎÎ¹ÎºÏŒÎ»Î±Î¿Ï‚', 'ÎˆÏ†Î·', '123456789', 'jojo', '123', 'sdi1400015@di.uoa.gr', 'Î‘ÏƒÏ†Î±Î»Î¹ÏƒÎ¼Î­Î½Î¿Ï‚'),
('Î˜Ï‰Î¼Î¬Ï‚', 'ÎœÎ±Î»Î¹Î¬Ï€Ï€Î·Ï‚', 'ÎœÎ¹Ï‡Î¬Î»Î·Ï‚', 'ÎšÎ±Ï„ÎµÏÎ¯Î½Î±', '111111111', 'maltom', '123', 'sdi1400093@di.uoa.gr', 'Î‘ÏƒÏ†Î±Î»Î¹ÏƒÎ¼Î­Î½Î¿Ï‚'),
('RandomName', 'RandomSurname', 'RandomFaName', 'RandomMoName', '123456789', 'RandomUser', '123', 'random@random.com', 'Î•ÏÎ³Î¿Î´ÏŒÏ„Î·Ï‚');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `aitimata`
--
ALTER TABLE `aitimata`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `asfalismenoi`
--
ALTER TABLE `asfalismenoi`
  ADD PRIMARY KEY (`username`);

--
-- Ευρετήρια για πίνακα `suntaksiouxoi`
--
ALTER TABLE `suntaksiouxoi`
  ADD PRIMARY KEY (`username`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `aitimata`
--
ALTER TABLE `aitimata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
