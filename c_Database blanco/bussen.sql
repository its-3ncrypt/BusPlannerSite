-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 29 jan 2019 om 11:58
-- Serverversie: 10.1.35-MariaDB
-- PHP-versie: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bussen`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `afdelingen`
--

CREATE TABLE `afdelingen` (
  `ID` int(11) NOT NULL,
  `Naam` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `berichten`
--

CREATE TABLE `berichten` (
  `ID` int(11) NOT NULL,
  `ID_User` int(11) DEFAULT NULL,
  `bericht` varchar(1000) DEFAULT NULL,
  `Datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bussen`
--

CREATE TABLE `bussen` (
  `ID` int(11) NOT NULL,
  `Nummerplaat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservaties`
--

CREATE TABLE `reservaties` (
  `Startdatum` date DEFAULT NULL,
  `Stopdatum` date DEFAULT NULL,
  `Startuur` varchar(100) DEFAULT NULL,
  `Stopuur` varchar(100) DEFAULT NULL,
  `ID_User` int(11) DEFAULT NULL,
  `ID_BUs` int(11) DEFAULT NULL,
  `Controle` tinyint(1) DEFAULT NULL,
  `Geweigerd` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Voornaam` varchar(100) DEFAULT NULL,
  `Naam` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Bevestigd` tinyint(1) DEFAULT NULL,
  `Rol` varchar(100) DEFAULT NULL,
  `Afdeling_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `afdelingen`
--
ALTER TABLE `afdelingen`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `berichten`
--
ALTER TABLE `berichten`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `bussen`
--
ALTER TABLE `bussen`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `afdelingen`
--
ALTER TABLE `afdelingen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `berichten`
--
ALTER TABLE `berichten`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `bussen`
--
ALTER TABLE `bussen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
