-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mag 22, 2025 alle 10:41
-- Versione del server: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ospedale`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `cura`
--

CREATE TABLE IF NOT EXISTS `cura` (
  `id_cura` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_visita` int(10) unsigned NOT NULL,
  `id_farmaci` int(10) unsigned NOT NULL,
  `inizio_data` date NOT NULL,
  `fine_data` date NOT NULL,
  PRIMARY KEY (`id_cura`),
  KEY `id_visita` (`id_visita`),
  KEY `id_farmaci` (`id_farmaci`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `farmaci`
--

CREATE TABLE IF NOT EXISTS `farmaci` (
  `id_farmaci` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_farmaco` varchar(255) NOT NULL,
  `prezzo_farmaco` int(11) NOT NULL,
  PRIMARY KEY (`id_farmaci`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `medico`
--

CREATE TABLE IF NOT EXISTS `medico` (
  `id_medico` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_reparto` int(10) unsigned NOT NULL,
  `Nome_medico` varchar(255) NOT NULL,
  `Cognome_medico` varchar(255) NOT NULL,
  `Specializzazione` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_medico`),
  KEY `id_reparto` (`id_reparto`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dump dei dati per la tabella `medico`
--

INSERT INTO `medico` (`id_medico`, `id_reparto`, `Nome_medico`, `Cognome_medico`, `Specializzazione`, `email`, `password`) VALUES
(3, 1, 'Mario', 'Rossi', 'Neurologo', 'mariorossi@gmail.com', '*86502CA39C574046672E43D8498CE08C06800D74');

-- --------------------------------------------------------

--
-- Struttura della tabella `reparto`
--

CREATE TABLE IF NOT EXISTS `reparto` (
  `id_reparto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nome_reparto` varchar(255) NOT NULL,
  `Ubicazione` varchar(255) NOT NULL,
  PRIMARY KEY (`id_reparto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `ricovero`
--

CREATE TABLE IF NOT EXISTS `ricovero` (
  `id_ricovero` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_reparto` int(10) unsigned NOT NULL,
  `id_paziente` int(10) unsigned NOT NULL,
  `data_ricovero` date NOT NULL,
  PRIMARY KEY (`id_ricovero`),
  KEY `id_reparto` (`id_reparto`),
  KEY `id_paziente` (`id_paziente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `visita`
--

CREATE TABLE IF NOT EXISTS `visita` (
  `id_visita` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `ora` varchar(255) NOT NULL,
  `salute_paziente` varchar(255) NOT NULL,
  `pressione_arteriosa` int(11) NOT NULL,
  `temperatura` int(11) NOT NULL,
  `frequenza_cardiaca` int(11) NOT NULL,
  `prescrizione` varchar(255) NOT NULL,
  `id_paziente` int(10) unsigned NOT NULL,
  `id_medico` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_visita`),
  KEY `id_paziente` (`id_paziente`),
  KEY `id_medico` (`id_medico`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
