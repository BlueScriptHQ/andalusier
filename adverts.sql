-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 26 okt 2016 om 12:43
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
-- Tabelstructuur voor tabel `adverts`
--

CREATE TABLE `adverts` (
  `adverts_id` int(4) NOT NULL,
  `adverts_name` varchar(50) NOT NULL,
  `adverts_owner` varchar(50) NOT NULL,
  `adverts_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `adverts_status` tinyint(1) NOT NULL,
  `adverts_type` varchar(10) NOT NULL,
  `adverts_old` int(2) NOT NULL,
  `adverts_contact` varchar(30) NOT NULL,
  `adverts_address` varchar(70) NOT NULL,
  `adverts_postalcode` varchar(20) NOT NULL,
  `adverts_city` varchar(50) NOT NULL,
  `adverts_country` varchar(50) NOT NULL,
  `adverts_email` varchar(40) NOT NULL,
  `adverts_telephone` varchar(20) NOT NULL,
  `adverts_bank` varchar(40) NOT NULL,
  `adverts_billingnumber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `adverts`
--

INSERT INTO `adverts` (`adverts_id`, `adverts_name`, `adverts_owner`, `adverts_date`, `adverts_status`, `adverts_type`, `adverts_old`, `adverts_contact`, `adverts_address`, `adverts_postalcode`, `adverts_city`, `adverts_country`, `adverts_email`, `adverts_telephone`, `adverts_bank`, `adverts_billingnumber`) VALUES
(1, 'Hele jaar aanbieding', 'Jumbo', '2016-10-26 07:14:30', 1, 'Heel', 0, '', '', '', '', '', 'jumbo@infofake.nl', '', 'Knab', 'knab05019283957691'),
(2, 'De vrolijke koe', 'Jumbo', '2016-10-26 10:02:55', 0, 'Heel', 1, 'Piet Klaas', 'Hoofdlaan 1', '0000AB', 'Amsterdam', 'Nederland', 'jumbo@infofake.nl', '0638794613', '', ''),
(3, 'Mooie advertentie', 'Abc', '2016-10-26 07:02:46', 0, 'Heel', 1, '', '', '', '', '', '', '', '', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`adverts_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `adverts`
--
ALTER TABLE `adverts`
  MODIFY `adverts_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
