-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Jan-2020 às 19:38
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbanime`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_animes`
--

CREATE TABLE `tb_animes` (
  `id` int(11) NOT NULL,
  `id_genero` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_temporada` int(11) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `abreviacao` varchar(20) NOT NULL,
  `episodio` int(4) NOT NULL,
  `estreia` varchar(20) NOT NULL,
  `sinopse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_animes`
--

INSERT INTO `tb_animes` (`id`, `id_genero`, `id_categoria`, `id_temporada`, `nome`, `abreviacao`, `episodio`, `estreia`, `sinopse`) VALUES
(4, 1, 4, 4, 'Mugen no Juunin; Imortal', 'MUGEN', 10, '0000-00-00', 'Samurai Imortal'),
(5, 1, 4, 4, 'Nanatsu no Taizai 3', '', 12, '0000-00-00', ''),
(6, 1, 1, 1, 'ID: Invade', 'ID', 12, '05.01.2020', ''),
(7, 3, 1, 1, 'Itai no wa Iya nano', '', 12, '08.01.2020', 'Garota Jogo online celular'),
(8, 3, 3, 1, 'Darwins Game', '', 11, '03.01.2020', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_animes`
--
ALTER TABLE `tb_animes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_genero` (`id_genero`),
  ADD KEY `FK_id_categoria` (`id_categoria`),
  ADD KEY `FK_id_temporada` (`id_temporada`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_animes`
--
ALTER TABLE `tb_animes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_animes`
--
ALTER TABLE `tb_animes`
  ADD CONSTRAINT `FK_id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `tb_categoria` (`id`),
  ADD CONSTRAINT `FK_id_genero` FOREIGN KEY (`id_genero`) REFERENCES `tb_genero` (`id`),
  ADD CONSTRAINT `FK_id_temporada` FOREIGN KEY (`id_temporada`) REFERENCES `tb_temporada` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
