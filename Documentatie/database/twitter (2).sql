-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 05 apr 2023 om 11:16
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twitter`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `Gebruikersnaam` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `GeboorteDatum` date NOT NULL,
  `wachtwoord` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `account`
--

INSERT INTO `account` (`id`, `Gebruikersnaam`, `Email`, `GeboorteDatum`, `wachtwoord`) VALUES
(62, 'Ramino', 'RaminoHiromiVrca@gmail.com', '2005-10-10', '$2y$10$nXu9dukwbIQnrxJl0GR2VOYbtQATKO7y8zPDX0urpjOeqCPuuBHKi'),
(65, 'henk', 'henk@gmail.com', '2005-10-10', '$2y$10$43jhQLQ0Uv8y2z82ITvdjeG6zjyaeVYqkN7DdYl3nWIuxWDWpJ4Ci'),
(66, 'lilly', 'lilly@gmail.com', '2006-11-10', '$2y$10$U.3SHfV7BNbfzd.OpsikOurJ4miEG3/9ODkkr6bTEQ4lUnGTpc28q'),
(67, 'alli', 'alli@gmail.com', '2005-10-10', '$2y$10$ZeXH5pyC8q/ra9PPk1/5FOV/oXo1FRTmtPgFi5PAODdGxMiirWMbS');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `tweets_id` int(11) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `likes`
--

INSERT INTO `likes` (`id`, `account_id`, `tweets_id`, `likes`) VALUES
(35, 65, 17, 0),
(38, 62, 17, 0),
(39, 62, 20, 0),
(41, 67, 20, 0),
(43, 62, 22, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tweets`
--

CREATE TABLE `tweets` (
  `id` int(11) NOT NULL,
  `content` varchar(150) NOT NULL,
  `account_id` int(11) NOT NULL,
  `time_tweets` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `likes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `tweets`
--

INSERT INTO `tweets` (`id`, `content`, `account_id`, `time_tweets`, `likes`) VALUES
(17, 'kut', 62, '2023-04-04 21:30:11', 2),
(20, 'suiker drinken', 62, '2023-04-05 07:53:55', 2),
(22, 'handdoek', 62, '2023-04-05 08:48:46', 1);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_like` (`account_id`),
  ADD KEY `tweets_liken` (`tweets_id`);

--
-- Indexen voor tabel `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account` (`account_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT voor een tabel `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT voor een tabel `tweets`
--
ALTER TABLE `tweets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `account_like` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tweets_liken` FOREIGN KEY (`tweets_id`) REFERENCES `tweets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `tweets`
--
ALTER TABLE `tweets`
  ADD CONSTRAINT `account` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
