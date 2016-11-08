-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 08 nov 2016 om 09:01
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gerrizo42_andalusier`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `payment_requests`
--

CREATE TABLE `payment_requests` (
  `payment_requests_id` int(4) NOT NULL,
  `payment_requests_page` varchar(200) NOT NULL,
  `payment_requests_send` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `payment_requests`
--

INSERT INTO `payment_requests` (`payment_requests_id`, `payment_requests_page`, `payment_requests_send`) VALUES
(1, '3', '2016-11-02 10:17:02');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `payment_requests`
--
ALTER TABLE `payment_requests`
  ADD PRIMARY KEY (`payment_requests_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `payment_requests`
--
ALTER TABLE `payment_requests`
  MODIFY `payment_requests_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
