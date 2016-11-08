-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 08 nov 2016 om 15:50
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payement_systeme`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `accounts`
--

CREATE TABLE `accounts` (
  `accounts_id` int(5) NOT NULL,
  `accounts_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `accounts`
--

INSERT INTO `accounts` (`accounts_id`, `accounts_name`) VALUES
(1, 'gerrit'),
(2, 'karin');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `betalingen`
--

CREATE TABLE `betalingen` (
  `betalingen_id` int(5) NOT NULL,
  `betalingen_amount` float NOT NULL,
  `betalingen_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `factuur_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `betalingen`
--

INSERT INTO `betalingen` (`betalingen_id`, `betalingen_amount`, `betalingen_date`, `factuur_id`) VALUES
(3, 30, '2016-11-08 14:44:01', 1),
(4, 50, '2016-11-08 14:44:09', 1),
(5, 50, '2016-11-08 14:48:14', 1),
(6, 3000, '2016-11-08 14:48:19', 2),
(7, -10, '2016-11-08 14:48:32', 1),
(8, -1, '2016-11-08 14:48:39', 1),
(9, 0, '2016-11-08 14:49:04', 1),
(10, -4000, '2016-11-08 14:49:10', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `facturen`
--

CREATE TABLE `facturen` (
  `facturen_id` int(5) NOT NULL,
  `facturen_name` varchar(200) NOT NULL,
  `facturen_amount` float NOT NULL,
  `facturen_paid` tinyint(1) NOT NULL DEFAULT '0',
  `facturen_enddate` date NOT NULL,
  `facturen_startdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `members_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `facturen`
--

INSERT INTO `facturen` (`facturen_id`, `facturen_name`, `facturen_amount`, `facturen_paid`, `facturen_enddate`, `facturen_startdate`, `members_id`) VALUES
(1, 'Betaling contributie', 1, 0, '2016-11-25', '2016-11-08 14:49:04', 1),
(2, 'Betaling contributie', 1199, 0, '2016-11-26', '2016-11-08 14:49:11', 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`accounts_id`);

--
-- Indexen voor tabel `betalingen`
--
ALTER TABLE `betalingen`
  ADD PRIMARY KEY (`betalingen_id`);

--
-- Indexen voor tabel `facturen`
--
ALTER TABLE `facturen`
  ADD PRIMARY KEY (`facturen_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `accounts`
--
ALTER TABLE `accounts`
  MODIFY `accounts_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `betalingen`
--
ALTER TABLE `betalingen`
  MODIFY `betalingen_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT voor een tabel `facturen`
--
ALTER TABLE `facturen`
  MODIFY `facturen_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
