-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generato il: Feb 21, 2014 alle 14:47
-- Versione del server: 5.5.27
-- Versione PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `informazioniu`
--

DROP TABLE IF EXISTS `informazioniu`;
CREATE TABLE IF NOT EXISTS `informazioniu` (
  `Nome` varchar(255) NOT NULL,
  `Cognome` varchar(255) NOT NULL,
  `Nascita` date NOT NULL,
  `Informazioni` text,
  `Immagine` varchar(255) NOT NULL DEFAULT 'img/null.jpg',
  `Utente` int(11) NOT NULL,
  `registerdate` date NOT NULL,
  PRIMARY KEY (`Utente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `informazioniu`
--
ALTER TABLE `informazioniu`
  ADD CONSTRAINT `informazioniu_ibfk_1` FOREIGN KEY (`Utente`) REFERENCES `utente` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
