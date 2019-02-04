-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 04 feb 2019 om 16:13
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
  `ID_Afdeling` int(11) NOT NULL,
  `Naam` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `berichten`
--

CREATE TABLE `berichten` (
  `ID_Bericht` int(11) NOT NULL,
  `ID_User` int(11) DEFAULT NULL,
  `bericht` varchar(1000) DEFAULT NULL,
  `Datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bussen`
--

CREATE TABLE `bussen` (
  `ID_Bus` int(11) NOT NULL,
  `Nummerplaat` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservaties`
--

CREATE TABLE `reservaties` (
  `ID_Reservaties` int(11) NOT NULL,
  `Startdatum` date DEFAULT NULL,
  `Stopdatum` date DEFAULT NULL,
  `Startuur` time DEFAULT NULL,
  `Stopuur` time DEFAULT NULL,
  `ID_User` int(11) DEFAULT NULL,
  `ID_Bus` int(11) DEFAULT NULL,
  `Controle` tinyint(1) DEFAULT NULL,
  `Geweigerd` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `ID_User` int(11) NOT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Voornaam` varchar(100) DEFAULT NULL,
  `Naam` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Bevestigd` tinyint(1) DEFAULT NULL,
  `Rol` varchar(100) DEFAULT NULL,
  `ID_Afdeling` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `afdelingen`
--
ALTER TABLE `afdelingen`
  ADD PRIMARY KEY (`ID_Afdeling`);

--
-- Indexen voor tabel `berichten`
--
ALTER TABLE `berichten`
  ADD PRIMARY KEY (`ID_Bericht`);

--
-- Indexen voor tabel `bussen`
--
ALTER TABLE `bussen`
  ADD PRIMARY KEY (`ID_Bus`);

--
-- Indexen voor tabel `reservaties`
--
ALTER TABLE `reservaties`
  ADD PRIMARY KEY (`ID_Reservaties`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `afdelingen`
--
ALTER TABLE `afdelingen`
  MODIFY `ID_Afdeling` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `berichten`
--
ALTER TABLE `berichten`
  MODIFY `ID_Bericht` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `bussen`
--
ALTER TABLE `bussen`
  MODIFY `ID_Bus` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `reservaties`
--
ALTER TABLE `reservaties`
  MODIFY `ID_Reservaties` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
