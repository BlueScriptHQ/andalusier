-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 08 nov 2016 om 09:18
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
-- Tabelstructuur voor tabel `accounts`
--

CREATE TABLE `accounts` (
  `accounts_id` int(4) NOT NULL,
  `accounts_username` varchar(64) NOT NULL,
  `accounts_password` varchar(256) NOT NULL,
  `accounts_name` varchar(48) NOT NULL DEFAULT 'Gebruiker',
  `accounts_tussenvoegsel` varchar(20) DEFAULT NULL,
  `accounts_lastname` varchar(200) NOT NULL,
  `accounts_birthdate` date NOT NULL,
  `accounts_loggedintime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `accounts_prev_loggedintime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `accounts`
--

INSERT INTO `accounts` (`accounts_id`, `accounts_username`, `accounts_password`, `accounts_name`, `accounts_tussenvoegsel`, `accounts_lastname`, `accounts_birthdate`, `accounts_loggedintime`, `accounts_prev_loggedintime`) VALUES
(1, 'andalusier', '$2y$10$QvGxbBKa512kGJf0i7Z6uOx4qrtuhTletIpLhJd0nFF2MKCHg4UXy', 'Bert123', 'Test', 'Account', '2016-03-06', '2016-10-26 12:32:29', '2016-10-26 09:05:07'),
(2, 'karin', '$2y$10$TV.HWDWLpilT0Ea9dpzSZO3vsL/4fhjvwZ5GVgoG9EAdbQbTN5EgW', 'Karin', '', 'Kreeft', '1996-09-05', '2016-10-22 12:47:15', '2016-06-17 13:14:52'),
(3, 'admin', '$2y$10$zbiLGbWUBGKxVsipfLz6..fTIgMUiipSKKpaN0WcEag7IDQhc2U0K', 'Administrator2', '', 'Geen', '2016-10-11', '2016-11-08 07:43:20', '2016-11-07 20:50:20');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `accounts_contact_info`
--

CREATE TABLE `accounts_contact_info` (
  `accounts_id` int(5) NOT NULL,
  `accounts_email` varchar(200) NOT NULL,
  `accounts_email2` varchar(200) DEFAULT NULL,
  `accounts_phonenr` varchar(15) NOT NULL,
  `accounts_phonenr2` varchar(15) DEFAULT NULL,
  `accounts_mobnr` varchar(15) NOT NULL,
  `accounts_mobnr2` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `accounts_contact_info`
--

INSERT INTO `accounts_contact_info` (`accounts_id`, `accounts_email`, `accounts_email2`, `accounts_phonenr`, `accounts_phonenr2`, `accounts_mobnr`, `accounts_mobnr2`) VALUES
(1, 'echtedata@gmail.com', 'test@gmail.com', '05245812892', '', '0612345679', ''),
(2, 'karinkreeft8@hotmail.com', '', '91283798123', '', '', ''),
(3, 'admin@test.com', '', '05245812897', '', '123213213', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `accounts_titles`
--

CREATE TABLE `accounts_titles` (
  `accounts_id` int(5) NOT NULL,
  `accounts_title_content` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `acc_notif`
--

CREATE TABLE `acc_notif` (
  `accounts_id` int(5) NOT NULL,
  `notifications_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `acc_notif`
--

INSERT INTO `acc_notif` (`accounts_id`, `notifications_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `acc_ranks`
--

CREATE TABLE `acc_ranks` (
  `accounts_id` int(5) NOT NULL,
  `ranks_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `acc_ranks`
--

INSERT INTO `acc_ranks` (`accounts_id`, `ranks_id`) VALUES
(1, 2),
(2, 5),
(3, 1);

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

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `documents`
--

CREATE TABLE `documents` (
  `documents_id` int(5) NOT NULL,
  `documents_name` varchar(200) NOT NULL,
  `documents_url` varchar(2000) NOT NULL,
  `documents_type` varchar(400) NOT NULL,
  `documents_size` varchar(400) NOT NULL,
  `documents_lastedited` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `logs`
--

CREATE TABLE `logs` (
  `logs_id` int(5) NOT NULL,
  `logs_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `logs_content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `logs`
--

INSERT INTO `logs` (`logs_id`, `logs_date`, `logs_content`) VALUES
(1, '2016-07-11 16:56:13', 'Map "Ledenadministratie" hernoemd naar "Ledenadministraties" !'),
(2, '2016-07-11 16:56:23', 'Map "Ledenadministraties" hernoemd naar "Ledenadministratie" !'),
(3, '2016-07-11 16:57:15', 'Nieuwe map "test" toegevoegd!'),
(4, '2016-07-11 16:57:26', 'Bestand "to do morgen.txt" toegevoegd!'),
(5, '2016-07-11 16:57:33', 'Map "test" samen met inhoud succesvol verwijderd!'),
(6, '2016-07-11 18:26:18', 'Bestand "Proces ledenadministratie.xlsx" hernoemd naar "Proces ledenadministratie2.xlsx".'),
(7, '2016-07-11 18:26:23', 'Bestand "Proces ledenadministratie2.xlsx" hernoemd naar "Proces ledenadministratie.xlsx".'),
(8, '2016-07-11 20:56:13', 'Lid   toegevoegd!'),
(9, '2016-07-11 20:56:18', 'Lid gegevens voor Gerda De Fries aangepast.'),
(10, '2016-07-11 20:56:22', 'Lid gegevens voor Gerda De Fries aangepast.'),
(11, '2016-07-12 23:05:59', 'Bestand "data2.hdr" succesvol verwijderd.'),
(12, '2016-07-12 23:06:29', 'Bestand "voorstel rapporten2.xls" hernoemd naar "voorstel rapporten.xls".'),
(13, '2016-07-12 23:06:39', 'Bestand "LaunchWLApp.bat" succesvol verwijderd.'),
(14, '2016-07-12 23:13:39', 'Bestand "to do morgen.txt" toegevoegd!'),
(15, '2016-07-12 23:13:46', 'Bestand "to do morgen.txt" succesvol verwijderd.'),
(16, '2016-07-12 23:56:51', 'Bestand "Proces ledenadministratie.xlsx" hernoemd naar "Proces ledenadministratie2.xlsx".'),
(17, '2016-07-12 23:56:57', 'Bestand "Proces ledenadministratie2.xlsx" hernoemd naar "Proces ledenadministratie.xlsx".'),
(18, '2016-07-12 23:59:44', 'Bestand "Advertentiebevestiging Brouwer Hibra  2016.docx" hernoemd naar "Advertentiebevestiging Brouwer Hibra  2017.docx".'),
(19, '2016-07-12 23:59:48', 'Bestand "Advertentiebevestiging Brouwer Hibra  2017.docx" hernoemd naar "Advertentiebevestiging Brouwer Hibra  2016.docx".'),
(20, '2016-07-12 23:59:53', 'Map "Ledenadministratie" hernoemd naar "Ledenadministraties".'),
(21, '2016-07-12 23:59:57', 'Map "Ledenadministraties" hernoemd naar "Ledenadministratie".'),
(22, '2016-07-13 00:00:06', 'Nieuwe map "Werkt dit nu?" aangemaakt.'),
(23, '2016-07-13 00:00:16', 'Nieuwe map "Werkt/" aangemaakt.'),
(24, '2016-07-13 00:00:21', 'Map "Werkt" succesvol verwijderd.'),
(25, '2016-07-13 00:00:31', 'Nieuwe map "Werkt-" aangemaakt.'),
(26, '2016-07-13 00:00:43', 'Nieuwe map "Wertk*" aangemaakt.'),
(27, '2016-07-13 00:00:46', 'Map "Wertk*" succesvol verwijderd.'),
(28, '2016-07-13 00:00:53', 'Nieuwe map "Wertk[" aangemaakt.'),
(29, '2016-07-13 00:00:57', 'Map "Wertk[" succesvol verwijderd.'),
(30, '2016-07-13 00:01:14', 'Nieuwe map "Wertk":" aangemaakt.'),
(31, '2016-07-13 00:02:23', 'Map "Werkt dit nu?" succesvol verwijderd.'),
(32, '2016-07-13 00:04:05', 'Map "Activiteiten" hernoemd naar "Activiteiten2".'),
(33, '2016-07-13 00:04:18', 'Map "Activiteiten2" hernoemd naar "Activiteiten".'),
(34, '2016-07-13 00:33:51', 'Bestand "tets.rar" toegevoegd!'),
(35, '2016-07-13 00:34:04', 'Bestand "tets.rar" succesvol verwijderd.'),
(36, '2016-07-13 00:36:57', 'Lid Petra De Boer toegevoegd!'),
(37, '2016-07-13 00:37:14', 'Lid gegevens voor Petra DeBoer aangepast.'),
(38, '2016-07-13 00:37:29', 'Lid gegevens voor Petra De Boer aangepast.'),
(39, '2016-07-13 00:37:44', 'Lid gegevens voor Petra de Boer aangepast.'),
(40, '2016-07-13 00:37:49', 'Lid gegevens voor Petra de Boer aangepast.'),
(41, '2016-07-13 00:38:35', 'Lid Jan De Boer toegevoegd!'),
(42, '2016-07-13 00:38:41', 'Lid gegevens voor Jan DeBoer aangepast.'),
(43, '2016-07-13 00:38:47', 'Lid gegevens voor Jan DeBoer aangepast.'),
(44, '2016-07-13 00:40:16', 'Lid gegevens voor Jan De Boer aangepast.'),
(45, '2016-07-13 00:41:01', 'Lid gegevens voor Jan De Boer aangepast.'),
(46, '2016-07-13 00:41:07', 'Lid gegevens voor Petra de Boer aangepast.'),
(47, '2016-07-13 00:44:40', 'Lid Saskia Stevens toegevoegd!'),
(48, '2016-07-13 00:44:49', 'Lid gegevens voor Saskia Stevens aangepast.'),
(49, '2016-07-13 00:45:04', 'Lid gegevens voor Saskia Stevens aangepast.'),
(50, '2016-07-13 00:50:20', 'Lid Stefan Klaassen toegevoegd!'),
(51, '2016-07-13 00:50:28', 'Lid gegevens voor Stefan Klaassen aangepast.'),
(52, '2016-07-13 00:50:34', 'Lid gegevens voor Stefan Klaassen aangepast.'),
(53, '2016-07-13 00:50:39', 'Lid gegevens voor Stefan Klaassen aangepast.'),
(54, '2016-07-13 00:50:54', 'Lid gegevens voor Stefan Klaassen aangepast.'),
(55, '2016-07-13 00:51:00', 'Lid gegevens voor Stefan Klaassen aangepast.'),
(56, '2016-07-13 00:51:03', 'Lid gegevens voor Stefan Klaassen aangepast.'),
(57, '2016-07-13 00:51:08', 'Lid gegevens voor Saskia Stevens aangepast.'),
(58, '2016-07-13 00:51:28', 'Lid gegevens voor Saskia Stevens aangepast.'),
(59, '2016-07-13 00:51:42', 'Lid gegevens voor Stefan Klaassen aangepast.'),
(60, '2016-07-13 00:52:05', 'Lid gegevens voor Stefan Klaassen aangepast.'),
(61, '2016-07-13 00:52:55', 'Lid gegevens voor Stefan Klaassen aangepast.'),
(62, '2016-07-13 00:54:02', 'Lid gegevens voor Stefan Klaassen aangepast.'),
(63, '2016-07-13 00:54:05', 'Lid gegevens voor Saskia Stevens aangepast.'),
(64, '2016-07-13 00:54:08', 'Lid gegevens voor Saskia Stevens aangepast.'),
(65, '2016-07-13 00:54:10', 'Lid gegevens voor Stefan Klaassen aangepast.'),
(66, '2016-07-13 00:54:22', 'Lid   toegevoegd!'),
(67, '2016-07-13 00:54:26', 'Lid gegevens voor   aangepast.'),
(68, '2016-07-13 00:55:36', 'Lid gegevens voor   aangepast.'),
(69, '2016-07-13 00:55:53', 'Lid gegevens voor Stefan Klaassen aangepast.'),
(70, '2016-07-13 01:04:22', 'Lid gegevens voor Saskia Stevens aangepast.'),
(71, '2016-07-13 01:04:28', 'Lid gegevens voor Saskia Stevens aangepast.'),
(72, '2016-07-13 01:12:29', 'Lid gegevens voor   aangepast.'),
(73, '2016-07-13 01:12:34', 'Lid gegevens voor Saskia Stevens aangepast.'),
(74, '2016-07-13 01:14:01', 'Lid gegevens voor   aangepast.'),
(75, '2016-07-13 01:14:06', 'Lid gegevens voor Jan De Boer aangepast.'),
(76, '2016-07-13 01:14:08', 'Lid gegevens voor Saskia Stevens aangepast.'),
(77, '2016-07-13 01:14:12', 'Lid gegevens voor   aangepast.'),
(78, '2016-07-13 01:17:20', 'Lid gegevens voor Jan De Boer aangepast.'),
(79, '2016-07-13 01:17:28', 'Lid gegevens voor Petra de Boer aangepast.'),
(80, '2016-07-13 01:17:32', 'Lid gegevens voor Jan De Boer aangepast.'),
(81, '2016-07-13 01:17:36', 'Lid gegevens voor Petra de Boer aangepast.'),
(82, '2016-07-13 01:17:40', 'Lid gegevens voor Saskia Stevens aangepast.'),
(83, '2016-07-13 01:17:48', 'Lid gegevens voor Saskia Stevens aangepast.'),
(84, '2016-07-13 01:17:59', 'Lid gegevens voor Stefan Klaassen aangepast.'),
(85, '2016-07-13 01:20:36', 'Lid gegevens voor Stefan Klaassen aangepast.'),
(86, '2016-07-13 09:13:56', 'Lid Bert Stapper toegevoegd!'),
(87, '2016-07-13 09:19:42', 'Lid gegevens voor Bert Stapper aangepast.'),
(88, '2016-07-13 09:29:37', 'Bestand "Huishoudelijk Reglement Vereniging Spaanse paard NL.pdf" toegevoegd!'),
(89, '2016-07-13 09:29:48', 'Bestand "Huishoudelijk Reglement Vereniging Spaanse paard NL.pdf" succesvol verwijderd.'),
(90, '2016-07-13 09:31:49', 'Bestand "Facturen PP april.docx" hernoemd naar "Facturen PP maart.docx".'),
(91, '2016-07-13 09:33:02', 'Nieuwe map "\\werkt dit?" aangemaakt.'),
(92, '2016-07-13 09:33:21', 'Bestand "werkt dit?" succesvol verwijderd.'),
(93, '2016-08-30 08:51:55', 'Lid gegevens voor Saskia Stevens aangepast.'),
(94, '2016-09-04 23:10:37', 'Bestand "Pura PasiÃ³n adverteerders 2016.xlsx" hernoemd naar "Pura PasiÃ³n adverteerders 2016.xlsx".'),
(95, '2016-10-25 12:48:19', 'Nieuwe map "test" aangemaakt.'),
(96, '2016-10-25 12:49:09', 'Nieuwe map "test123" aangemaakt.'),
(97, '2016-10-25 12:49:24', 'Nieuwe map "test12323123" aangemaakt.'),
(98, '2016-10-25 12:56:41', 'Nieuwe map "test1234" aangemaakt.'),
(99, '2016-10-26 12:53:42', 'Nieuwe map "test" aangemaakt.'),
(100, '2016-10-26 12:54:06', 'Bestand "Plan van Aanpak.docx" toegevoegd!'),
(101, '2016-10-26 12:54:13', 'Bestand "functioneel ontwerp.docx" toegevoegd!');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `members`
--

CREATE TABLE `members` (
  `members_id` int(11) NOT NULL,
  `members_onhold` tinyint(1) NOT NULL DEFAULT '1',
  `members_name` varchar(120) NOT NULL,
  `members_tussenvoegsel` varchar(20) DEFAULT NULL,
  `members_lastname` varchar(200) NOT NULL,
  `members_birthdate` date DEFAULT NULL,
  `members_startdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `members_enddate` datetime DEFAULT NULL,
  `members_newsletter` tinyint(1) NOT NULL DEFAULT '1',
  `members_mail` tinyint(1) NOT NULL DEFAULT '1',
  `members_stable` varchar(300) DEFAULT NULL,
  `members_bank` varchar(50) NOT NULL DEFAULT 'Niet opgegeven',
  `members_comment` varchar(1000) DEFAULT NULL,
  `members_is_old` tinyint(1) NOT NULL DEFAULT '0',
  `members_types_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `members`
--

INSERT INTO `members` (`members_id`, `members_onhold`, `members_name`, `members_tussenvoegsel`, `members_lastname`, `members_birthdate`, `members_startdate`, `members_enddate`, `members_newsletter`, `members_mail`, `members_stable`, `members_bank`, `members_comment`, `members_is_old`, `members_types_id`) VALUES
(2, 1, 'Jan', 'De', ' Boer', '1946-05-09', '2016-11-01 10:15:12', NULL, 1, 0, 'Paardjeshof', 'ASNBNRANDOMIETSGG', 'Over dit lid geen opmerkingen.', 0, 3),
(3, 1, 'Saskia', '', 'Stevens', '1971-01-01', '2016-10-26 10:25:06', NULL, 0, 0, 'Hengstenkamp', 'ASNB RANDOM NUMMER', 'Dit lid woont in het buitenland, maar wil graag in Nederland de post ontvangen.', 0, 3),
(4, 0, 'Stefan', '', 'Klaassen', '1981-05-02', '2016-10-26 10:21:01', NULL, 0, 0, 'AndalusierHofje', 'SNSB RANDOM NUMMER', 'Over dit lid geen opmerkingen.', 0, 4),
(6, 0, 'Bert', '', 'Stapper', '1977-12-07', '2016-10-26 10:24:52', NULL, 1, 1, 'De Stal', 'ASNB RANDOM NUMMER', 'Over dit lid geen opmerkingen.', 0, 4),
(7, 1, 'Karin', '', 'Kreeft', '1996-09-05', '2016-11-01 14:40:56', NULL, 1, 1, 'paardenstal ', '3746238423', 'Druk aant programmieren', 0, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `members_contact_info`
--

CREATE TABLE `members_contact_info` (
  `members_id` int(5) NOT NULL,
  `members_email` varchar(200) NOT NULL,
  `members_email2` varchar(200) DEFAULT NULL,
  `members_phonenr` varchar(15) NOT NULL,
  `members_phonenr2` varchar(15) DEFAULT NULL,
  `members_mobnr` varchar(15) DEFAULT NULL,
  `members_mobnr2` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `members_contact_info`
--

INSERT INTO `members_contact_info` (`members_id`, `members_email`, `members_email2`, `members_phonenr`, `members_phonenr2`, `members_mobnr`, `members_mobnr2`) VALUES
(2, 'j.deboer@gmail.com', '', '0528-178932', '0528-178932', '06-90782354', NULL),
(3, 's.stevens@outlook.com', 'moeder.stevens@yahoo.com', '0538-392919', '0538-392919', '06-38392919', NULL),
(4, 'email@email.com', 'email2@email.com', '0923123123', '0923123123', '', NULL),
(6, 'mail@mail.com', '', '0524581289', '0524581289', '', NULL),
(7, 'karinkreeft8@hotmail.com', NULL, '0528768264', NULL, '0615508853', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `members_residence_info`
--

CREATE TABLE `members_residence_info` (
  `members_id` int(5) NOT NULL,
  `members_residence_street` varchar(200) NOT NULL,
  `members_residence_streetnr` varchar(10) NOT NULL,
  `members_residence_zip` varchar(10) NOT NULL,
  `members_residence_place` varchar(300) NOT NULL,
  `members_residence_country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `members_residence_info`
--

INSERT INTO `members_residence_info` (`members_id`, `members_residence_street`, `members_residence_streetnr`, `members_residence_zip`, `members_residence_place`, `members_residence_country`) VALUES
(2, 'Prinsjeslaan', '38', '7902JH', 'Hoogeveen', 'nederland'),
(3, 'Pottenstraat', '27', '7863 TM', 'Zwinderen', 'nederland'),
(4, 'Zeillaan', '271', '7863 BE', 'Oosterheim', 'belgie'),
(6, 'De straat', '24', '783TM', 'Hoogeveen', 'belgie'),
(7, 'jan dekkerstraat', '', '7902jh', 'hgv', 'nl');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `members_status`
--

CREATE TABLE `members_status` (
  `members_id` int(5) NOT NULL,
  `members_gift` tinyint(1) NOT NULL DEFAULT '0',
  `members_paid` tinyint(1) NOT NULL DEFAULT '0',
  `members_paiddate` date NOT NULL,
  `members_reminder` tinyint(1) NOT NULL DEFAULT '0',
  `members_remdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `members_status`
--

INSERT INTO `members_status` (`members_id`, `members_gift`, `members_paid`, `members_paiddate`, `members_reminder`, `members_remdate`) VALUES
(2, 1, 1, '0000-00-00', 0, '0000-00-00'),
(3, 1, 1, '0000-00-00', 1, '0000-00-00'),
(4, 1, 1, '0000-00-00', 0, '0000-00-00'),
(6, 1, 0, '0000-00-00', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `members_titles`
--

CREATE TABLE `members_titles` (
  `members_id` int(5) NOT NULL,
  `members_titles_content` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `members_titles`
--

INSERT INTO `members_titles` (`members_id`, `members_titles_content`) VALUES
(2, 'dhr'),
(3, 'mevr'),
(4, 'dhr'),
(6, 'dhr'),
(7, 'mevr');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `members_types`
--

CREATE TABLE `members_types` (
  `members_types_id` int(5) NOT NULL,
  `members_types_content` varchar(100) NOT NULL,
  `members_contribution_amount` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `members_types`
--

INSERT INTO `members_types` (`members_types_id`, `members_types_content`, `members_contribution_amount`) VALUES
(1, 'Lid', '75'),
(2, 'Jeugdlid', '20'),
(3, 'Gezinslid', '25'),
(4, 'Buitenlands Lid', '85');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `notifications`
--

CREATE TABLE `notifications` (
  `notifications_id` int(5) NOT NULL,
  `notifications_content` varchar(400) NOT NULL,
  `notifications_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `notifications`
--

INSERT INTO `notifications` (`notifications_id`, `notifications_content`, `notifications_time`) VALUES
(1, 'Notificatie systeem is deels af. Na de test versie gaan we deze verfijnen.', '2016-06-10 20:32:01'),
(2, 'Begonnen met het notificatie systeem.', '2016-06-10 12:38:08'),
(3, 'Begonnen met het laten veranderen van de accountgegevens.', '2016-06-11 13:56:32'),
(4, 'De accountgegevens kunnen momenteel deels worden aangepast.', '2016-06-11 14:28:22'),
(5, 'De accountgegevens kunnen nu volledig worden aangepast.', '2016-06-11 15:29:16'),
(6, 'Nu mogelijk om in te zien wanneer u de vorige keer had ingelogd.', '2016-06-11 16:33:18'),
(7, 'Sneak preview registreer formulier:\r\n<a href="http://andalusier.bluescript.nl/register.php" target="_blank">Bekijk het hier</a>', '2016-06-14 14:31:35'),
(8, 'Begonnen met laden van menu items op basis van functie.', '2016-06-14 14:32:46'),
(9, 'Klaar met het inladen van menu op basis van de functies.', '2016-06-16 16:54:29');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pages`
--

CREATE TABLE `pages` (
  `pages_id` int(5) NOT NULL,
  `pages_name` varchar(200) NOT NULL,
  `pages_url` varchar(300) NOT NULL,
  `pages_parentid` int(5) DEFAULT NULL,
  `pages_iscontroller` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `pages`
--

INSERT INTO `pages` (`pages_id`, `pages_name`, `pages_url`, `pages_parentid`, `pages_iscontroller`) VALUES
(1, 'Dashboard', 'index.php', NULL, 0),
(2, 'Leden', 'leden.php', NULL, 1),
(3, 'Overzicht', 'leden.php', 2, 0),
(5, 'Oud leden', 'oudleden.php', 2, 0),
(6, 'Documenten', 'documents.php', NULL, 0),
(7, 'Logboek', 'log.php', NULL, 0),
(8, 'Accounts', 'accounts.php', NULL, 1),
(9, 'Overzicht', 'accounts.php', 8, 0),
(10, 'Aanmeldingen', 'registrations.php', 2, 0);

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
(1, '3', '2016-11-08 09:08:21');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ranks`
--

CREATE TABLE `ranks` (
  `ranks_id` int(5) NOT NULL,
  `ranks_name` varchar(200) NOT NULL DEFAULT 'Gebruiker'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `ranks`
--

INSERT INTO `ranks` (`ranks_id`, `ranks_name`) VALUES
(1, 'Super Admin'),
(2, 'Administrator'),
(3, 'Voorzitter'),
(4, 'Secretaris'),
(5, 'Custom');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ranks_pages`
--

CREATE TABLE `ranks_pages` (
  `ranks_id` int(5) NOT NULL,
  `pages_id` int(5) NOT NULL,
  `permission` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `ranks_pages`
--

INSERT INTO `ranks_pages` (`ranks_id`, `pages_id`, `permission`) VALUES
(1, 1, 1),
(1, 2, 1),
(1, 3, 1),
(1, 6, 1),
(1, 7, 1),
(1, 8, 1),
(1, 9, 1),
(1, 10, 1),
(2, 1, 1),
(2, 2, 1),
(2, 3, 1),
(2, 6, 1),
(2, 7, 1),
(2, 9, 1),
(2, 10, 1),
(5, 1, 1),
(5, 6, 1),
(5, 7, 1);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`accounts_id`);

--
-- Indexen voor tabel `accounts_contact_info`
--
ALTER TABLE `accounts_contact_info`
  ADD PRIMARY KEY (`accounts_id`);

--
-- Indexen voor tabel `accounts_titles`
--
ALTER TABLE `accounts_titles`
  ADD PRIMARY KEY (`accounts_id`);

--
-- Indexen voor tabel `acc_notif`
--
ALTER TABLE `acc_notif`
  ADD PRIMARY KEY (`accounts_id`,`notifications_id`),
  ADD KEY `acc_notif_notif` (`notifications_id`);

--
-- Indexen voor tabel `acc_ranks`
--
ALTER TABLE `acc_ranks`
  ADD PRIMARY KEY (`accounts_id`,`ranks_id`),
  ADD KEY `acc_ranks_ranks` (`ranks_id`);

--
-- Indexen voor tabel `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`adverts_id`);

--
-- Indexen voor tabel `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logs_id`);

--
-- Indexen voor tabel `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`members_id`),
  ADD KEY `members_types` (`members_types_id`);

--
-- Indexen voor tabel `members_contact_info`
--
ALTER TABLE `members_contact_info`
  ADD PRIMARY KEY (`members_id`);

--
-- Indexen voor tabel `members_residence_info`
--
ALTER TABLE `members_residence_info`
  ADD PRIMARY KEY (`members_id`);

--
-- Indexen voor tabel `members_status`
--
ALTER TABLE `members_status`
  ADD PRIMARY KEY (`members_id`);

--
-- Indexen voor tabel `members_titles`
--
ALTER TABLE `members_titles`
  ADD PRIMARY KEY (`members_id`);

--
-- Indexen voor tabel `members_types`
--
ALTER TABLE `members_types`
  ADD PRIMARY KEY (`members_types_id`);

--
-- Indexen voor tabel `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notifications_id`);

--
-- Indexen voor tabel `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pages_id`);

--
-- Indexen voor tabel `payment_requests`
--
ALTER TABLE `payment_requests`
  ADD PRIMARY KEY (`payment_requests_id`);

--
-- Indexen voor tabel `ranks`
--
ALTER TABLE `ranks`
  ADD PRIMARY KEY (`ranks_id`);

--
-- Indexen voor tabel `ranks_pages`
--
ALTER TABLE `ranks_pages`
  ADD PRIMARY KEY (`ranks_id`,`pages_id`),
  ADD KEY `ranks_pages_pages` (`pages_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `accounts`
--
ALTER TABLE `accounts`
  MODIFY `accounts_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `accounts_titles`
--
ALTER TABLE `accounts_titles`
  MODIFY `accounts_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `adverts`
--
ALTER TABLE `adverts`
  MODIFY `adverts_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `logs`
--
ALTER TABLE `logs`
  MODIFY `logs_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT voor een tabel `members`
--
ALTER TABLE `members`
  MODIFY `members_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT voor een tabel `members_titles`
--
ALTER TABLE `members_titles`
  MODIFY `members_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT voor een tabel `members_types`
--
ALTER TABLE `members_types`
  MODIFY `members_types_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notifications_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT voor een tabel `pages`
--
ALTER TABLE `pages`
  MODIFY `pages_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT voor een tabel `payment_requests`
--
ALTER TABLE `payment_requests`
  MODIFY `payment_requests_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `ranks`
--
ALTER TABLE `ranks`
  MODIFY `ranks_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `accounts_titles`
--
ALTER TABLE `accounts_titles`
  ADD CONSTRAINT `acc_genders_genders` FOREIGN KEY (`accounts_id`) REFERENCES `accounts` (`accounts_id`);

--
-- Beperkingen voor tabel `acc_notif`
--
ALTER TABLE `acc_notif`
  ADD CONSTRAINT `acc_notif_acc` FOREIGN KEY (`accounts_id`) REFERENCES `accounts` (`accounts_id`),
  ADD CONSTRAINT `acc_notif_notif` FOREIGN KEY (`notifications_id`) REFERENCES `notifications` (`notifications_id`);

--
-- Beperkingen voor tabel `acc_ranks`
--
ALTER TABLE `acc_ranks`
  ADD CONSTRAINT `acc_ranks_acc` FOREIGN KEY (`accounts_id`) REFERENCES `accounts` (`accounts_id`),
  ADD CONSTRAINT `acc_ranks_ranks` FOREIGN KEY (`ranks_id`) REFERENCES `ranks` (`ranks_id`);

--
-- Beperkingen voor tabel `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_members_types_fk` FOREIGN KEY (`members_types_id`) REFERENCES `members_types` (`members_types_id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `members_contact_info`
--
ALTER TABLE `members_contact_info`
  ADD CONSTRAINT `members_contact_info_members_fk` FOREIGN KEY (`members_id`) REFERENCES `members` (`members_id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `members_residence_info`
--
ALTER TABLE `members_residence_info`
  ADD CONSTRAINT `members_residence_info_members_fk` FOREIGN KEY (`members_id`) REFERENCES `members` (`members_id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `members_titles`
--
ALTER TABLE `members_titles`
  ADD CONSTRAINT `mem_titles_mem` FOREIGN KEY (`members_id`) REFERENCES `members` (`members_id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `ranks_pages`
--
ALTER TABLE `ranks_pages`
  ADD CONSTRAINT `ranks_pages_pages` FOREIGN KEY (`pages_id`) REFERENCES `pages` (`pages_id`),
  ADD CONSTRAINT `ranks_pages_ranks` FOREIGN KEY (`ranks_id`) REFERENCES `ranks` (`ranks_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
