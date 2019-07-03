-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 03-Jul-2019 às 13:36
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbanime`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `assistindo`
--

DROP TABLE IF EXISTS `assistindo`;
CREATE TABLE IF NOT EXISTS `assistindo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `episodio` int(11) DEFAULT NULL,
  `dataassistido` varchar(10) DEFAULT NULL,
  `dataproxep` varchar(10) DEFAULT NULL,
  `qualidade` varchar(20) DEFAULT NULL,
  `comentario` varchar(20) DEFAULT NULL,
  `nota` int(11) DEFAULT NULL,
  `diasemana` varchar(20) DEFAULT NULL,
  `diasemanaproxep` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `assistindo`
--

INSERT INTO `assistindo` (`id`, `nome`, `episodio`, `dataassistido`, `dataproxep`, `qualidade`, `comentario`, `nota`, `diasemana`, `diasemanaproxep`) VALUES
(2, 'Black Clover ', 89, '26.06.2019', '26.07.2019', '720p', 'Teste', 9, 'Quarta-feira', 'Terca-Feira'),
(3, 'One Punch Man 2', 11, '25.06.2019', '', '720p', '', 10, 'Terca-Feira', 'Terca-Feira');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
