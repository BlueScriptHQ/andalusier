-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 10.3.0.102
-- Gegenereerd op: 04 okt 2016 om 08:55
-- Serverversie: 5.6.29
-- PHP-versie: 5.5.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gerrizo42_bluescript`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `accounts`
--

CREATE TABLE `accounts` (
  `accounts_id` int(5) NOT NULL,
  `accounts_username` varchar(48) NOT NULL,
  `accounts_password` varchar(48) NOT NULL,
  `accounts_name` varchar(120) NOT NULL,
  `accounts_privileges` int(2) NOT NULL,
  `accounts_profilepicture` varchar(120) DEFAULT NULL,
  `accounts_email` varchar(200) DEFAULT NULL,
  `accounts_phone` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `accounts`
--

INSERT INTO `accounts` (`accounts_id`, `accounts_username`, `accounts_password`, `accounts_name`, `accounts_privileges`, `accounts_profilepicture`, `accounts_email`, `accounts_phone`) VALUES
(1, 'd033e22ae348aeb5660fc2140aec35850c4da997', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 0, NULL, 'webmaster@bluescript.nl', NULL),
(2, '5f436c2a42e3a957379a4869709e6584bd963c7a', 'da487a201657381efac8da16851cb1b253e25aba', 'Gerrit Kreeft', 1, NULL, 'gerritkreeft@hotmail.com', NULL),
(3, 'ecddeb1367e4596fe40015fc8fb4acb52e496298', '61afb4850fe25ed47aaa6012abebf52f682b8b9f', 'Karin Kreeft', 1, NULL, 'karinkreeft8@hotmail.com', NULL),
(4, '550528ee211f485f9e6654003b015b361900b582', '61afb4850fe25ed47aaa6012abebf52f682b8b9f', 'Gerrit Luimstra', 1, NULL, 'gerrit.luimstra@ziggo.nl', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `menu`
--

CREATE TABLE `menu` (
  `m_id` int(2) NOT NULL,
  `m_name` varchar(200) NOT NULL,
  `m_href` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `menu`
--

INSERT INTO `menu` (`m_id`, `m_name`, `m_href`) VALUES
(1, 'To Do', 'todo.php'),
(2, 'Statistieken', 'statistics.php');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pages`
--

CREATE TABLE `pages` (
  `pages_id` int(20) NOT NULL,
  `pages_name` varchar(50) NOT NULL,
  `pages_count` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `pages`
--

INSERT INTO `pages` (`pages_id`, `pages_name`, `pages_count`) VALUES
(14, 'index.php', 146),
(15, 'worst.php', 2),
(16, 'leden.php', 2),
(17, 'documents.php', 3),
(18, 'log.php', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projects`
--

CREATE TABLE `projects` (
  `projects_id` int(5) NOT NULL,
  `projects_name` varchar(100) NOT NULL,
  `projects_password` varchar(48) NOT NULL,
  `projects_description` varchar(600) DEFAULT NULL,
  `projects_uploadpath` varchar(120) NOT NULL,
  `projects_users` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`accounts_id`);

--
-- Indexen voor tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexen voor tabel `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pages_id`);

--
-- Indexen voor tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projects_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `accounts`
--
ALTER TABLE `accounts`
  MODIFY `accounts_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `m_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `pages`
--
ALTER TABLE `pages`
  MODIFY `pages_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT voor een tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `projects_id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
