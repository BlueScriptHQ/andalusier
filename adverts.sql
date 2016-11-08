-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 08 nov 2016 om 08:58
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
  `adverts_enddate` date NOT NULL,
  `adverts_status` tinyint(1) NOT NULL,
  `adverts_type` varchar(10) NOT NULL,
  `adverts_old` int(2) NOT NULL,
  `adverts_contact` varchar(30) NOT NULL,
  `adverts_address` varchar(70) NOT NULL,
  `adverts_postalcode` varchar(20) NOT NULL,
  `adverts_city` varchar(50) NOT NULL,
  `adverts_country` varchar(50) NOT NULL,
  `adverts_email` varchar(50) NOT NULL,
  `adverts_email2` varchar(50) DEFAULT NULL,
  `adverts_telephone` varchar(20) NOT NULL,
  `adverts_telephone2` varchar(20) DEFAULT NULL,
  `adverts_mobile` varchar(20) DEFAULT NULL,
  `adverts_bank` varchar(40) NOT NULL,
  `adverts_billingnumber` varchar(30) NOT NULL,
  `adverts_comment` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `adverts`
--

INSERT INTO `adverts` (`adverts_id`, `adverts_name`, `adverts_owner`, `adverts_date`, `adverts_enddate`, `adverts_status`, `adverts_type`, `adverts_old`, `adverts_contact`, `adverts_address`, `adverts_postalcode`, `adverts_city`, `adverts_country`, `adverts_email`, `adverts_email2`, `adverts_telephone`, `adverts_telephone2`, `adverts_mobile`, `adverts_bank`, `adverts_billingnumber`, `adverts_comment`) VALUES
(1, 'Hele jaar aanbieding', 'Jumbo', '2016-11-01 12:54:46', '0000-00-00', 1, 'Heel', 0, '', '', '', '', '', 'jumbo@infofake.nl', '', '', '', '', 'Knab', 'knab05019283957691', NULL),
(2, 'De vrolijke koe', 'Jumbo', '2016-11-01 14:01:58', '0000-00-00', 1, 'Heel', 1, 'Piet Klaas', 'Hoofdlaan 1', '0000AB', 'Amsterdam', '', 'jumbo@infofake.nl', '', '0638794613', '', '', 'rabo', 'knb', 'jhdgfjkhasgfjkf'),
(3, 'Mooie advertentie', 'Abc2', '2016-11-01 14:01:28', '0000-00-00', 1, 'Heel', 1, '', '', '', '', '', '', '', '', '', '', 'Knab', 'knab0101930', 'test');

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
