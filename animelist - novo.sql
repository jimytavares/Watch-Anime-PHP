-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 18-Jul-2019 às 15:53
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.0.10

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
-- Estrutura da tabela `tb_animes`
--

CREATE TABLE `tb_animes` (
  `id` int(11) NOT NULL,
  `id_genero` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_temporada` int(11) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `abreviacao` varchar(20) NOT NULL,
  `epsiodio` int(4) NOT NULL,
  `estreia` date NOT NULL,
  `diretor` varchar(50) NOT NULL,
  `estudio` varchar(50) NOT NULL,
  `trailer` varchar(50) NOT NULL,
  `sinopse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_animes`
--

INSERT INTO `tb_animes` (`id`, `id_genero`, `id_categoria`, `id_temporada`, `nome`, `abreviacao`, `epsiodio`, `estreia`, `diretor`, `estudio`, `trailer`, `sinopse`) VALUES
(1, 4, 5, 1, 'dhd dxd', 'dxd', 12, '2019-07-01', 'teste diretor', 'teste estudio', 'teste trailer', 'teste sinopse');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_assistido`
--

CREATE TABLE `tb_assistido` (
  `id` int(11) NOT NULL,
  `id_anime` int(11) NOT NULL DEFAULT '0',
  `id_usuario` int(11) NOT NULL DEFAULT '0',
  `episodio` int(11) NOT NULL,
  `dia_semana` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_assistido`
--

INSERT INTO `tb_assistido` (`id`, `id_anime`, `id_usuario`, `episodio`, `dia_semana`) VALUES
(1, 1, 2, 75, 'Terça-Feira'),
(2, 1, 1, 78, 'Quarta-Feira');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_categoria`
--

INSERT INTO `tb_categoria` (`id`, `nome`) VALUES
(1, 'Livre'),
(2, '10 Anos'),
(3, '14 Anos'),
(4, '16 Anos'),
(5, '18 Anos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_comentarios`
--

CREATE TABLE `tb_comentarios` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_anime` int(11) NOT NULL,
  `comentario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_genero`
--

CREATE TABLE `tb_genero` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_genero`
--

INSERT INTO `tb_genero` (`id`, `nome`) VALUES
(1, 'Acao'),
(2, 'Artes Marciais'),
(3, 'Aventura'),
(4, 'Adulto'),
(5, 'Bender'),
(6, 'Comedia'),
(7, 'Doujinshi'),
(8, 'Drama'),
(9, 'Ecchi'),
(10, 'Esporte'),
(11, 'Fantasia'),
(12, 'Ficao '),
(13, 'Harem'),
(14, 'Historico'),
(15, 'Horror'),
(16, 'Josei'),
(17, 'Romance'),
(18, 'Seinen'),
(19, 'Shoujo'),
(20, 'Shounen'),
(21, 'Slice of Life'),
(22, 'Sobrenatural'),
(23, 'Terror'),
(24, 'Vida Escolar'),
(25, 'Yaoi'),
(26, 'Yuri');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_nota`
--

CREATE TABLE `tb_nota` (
  `id` int(11) NOT NULL,
  `pontuacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_nota`
--

INSERT INTO `tb_nota` (`id`, `pontuacao`) VALUES
(1, 10),
(2, 9),
(3, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_parado`
--

CREATE TABLE `tb_parado` (
  `id` int(11) NOT NULL,
  `id_anime` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `epsidio` int(4) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ranking`
--

CREATE TABLE `tb_ranking` (
  `id` int(11) NOT NULL,
  `id_anime` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_nota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_temporada`
--

CREATE TABLE `tb_temporada` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `ano` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_temporada`
--

INSERT INTO `tb_temporada` (`id`, `nome`, `ano`) VALUES
(1, 'Janeiro / Winter / Inverno', '2019-01-01'),
(2, 'Abril / Spring / Primavera', '2019-04-01'),
(3, 'Julho / Summer / Verão', '2019-07-01'),
(4, 'Outubro / Fall / Outono', '2019-10-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nickname` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nivel` int(11) NOT NULL,
  `ativo` double NOT NULL,
  `notificacao` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `username`, `nickname`, `password`, `email`, `nivel`, `ativo`, `notificacao`) VALUES
(1, 'admin', 'Admin', 'admin', 'admin@admin.com', 1, 1, 1),
(2, 'dev', 'dev', 'dev', 'dev@dev.com', 1, 1, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_assistido`
-- (See below for the actual view)
--
CREATE TABLE `vw_assistido` (
`id` int(11)
,`id_usuario` int(11)
,`dia_semana` varchar(50)
,`nome` varchar(50)
,`episodio` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_assistido`
--
DROP TABLE IF EXISTS `vw_assistido`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_assistido`  AS  select `ta`.`id` AS `id`,`ta`.`id_usuario` AS `id_usuario`,`ta`.`dia_semana` AS `dia_semana`,`an`.`nome` AS `nome`,`ta`.`episodio` AS `episodio` from (`tb_assistido` `ta` join `tb_animes` `an` on((`ta`.`id_anime` = `an`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_animes`
--
ALTER TABLE `tb_animes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_genero` (`id_genero`),
  ADD KEY `FK_id_categoria` (`id_categoria`),
  ADD KEY `FK_id_temporada` (`id_temporada`);

--
-- Indexes for table `tb_assistido`
--
ALTER TABLE `tb_assistido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK3_id_anime` (`id_anime`),
  ADD KEY `FK3_id_usuario` (`id_usuario`);

--
-- Indexes for table `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_comentarios`
--
ALTER TABLE `tb_comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_anime` (`id_anime`),
  ADD KEY `FK_id_usuario` (`id_usuario`);

--
-- Indexes for table `tb_genero`
--
ALTER TABLE `tb_genero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_nota`
--
ALTER TABLE `tb_nota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_parado`
--
ALTER TABLE `tb_parado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK4_id_usuario` (`id_usuario`),
  ADD KEY `FK4_id_anime` (`id_anime`);

--
-- Indexes for table `tb_ranking`
--
ALTER TABLE `tb_ranking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK2_id_anime` (`id_anime`),
  ADD KEY `FK2_id_usuario` (`id_usuario`),
  ADD KEY `FK_id_nota` (`id_nota`);

--
-- Indexes for table `tb_temporada`
--
ALTER TABLE `tb_temporada`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uni_email` (`email`) USING BTREE,
  ADD UNIQUE KEY `uni_username` (`username`) USING BTREE,
  ADD UNIQUE KEY `uni_nickname` (`nickname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_animes`
--
ALTER TABLE `tb_animes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_assistido`
--
ALTER TABLE `tb_assistido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_comentarios`
--
ALTER TABLE `tb_comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_genero`
--
ALTER TABLE `tb_genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_nota`
--
ALTER TABLE `tb_nota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_parado`
--
ALTER TABLE `tb_parado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_ranking`
--
ALTER TABLE `tb_ranking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_temporada`
--
ALTER TABLE `tb_temporada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_animes`
--
ALTER TABLE `tb_animes`
  ADD CONSTRAINT `FK_id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `tb_categoria` (`id`),
  ADD CONSTRAINT `FK_id_genero` FOREIGN KEY (`id_genero`) REFERENCES `tb_genero` (`id`),
  ADD CONSTRAINT `FK_id_temporada` FOREIGN KEY (`id_temporada`) REFERENCES `tb_temporada` (`id`);

--
-- Limitadores para a tabela `tb_assistido`
--
ALTER TABLE `tb_assistido`
  ADD CONSTRAINT `FK3_id_anime` FOREIGN KEY (`id_anime`) REFERENCES `tb_animes` (`id`),
  ADD CONSTRAINT `FK3_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id`);

--
-- Limitadores para a tabela `tb_comentarios`
--
ALTER TABLE `tb_comentarios`
  ADD CONSTRAINT `FK_id_anime` FOREIGN KEY (`id_anime`) REFERENCES `tb_animes` (`id`),
  ADD CONSTRAINT `FK_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id`);

--
-- Limitadores para a tabela `tb_parado`
--
ALTER TABLE `tb_parado`
  ADD CONSTRAINT `FK4_id_anime` FOREIGN KEY (`id_anime`) REFERENCES `tb_animes` (`id`),
  ADD CONSTRAINT `FK4_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id`);

--
-- Limitadores para a tabela `tb_ranking`
--
ALTER TABLE `tb_ranking`
  ADD CONSTRAINT `FK2_id_anime` FOREIGN KEY (`id_anime`) REFERENCES `tb_animes` (`id`),
  ADD CONSTRAINT `FK2_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id`),
  ADD CONSTRAINT `FK_id_nota` FOREIGN KEY (`id_nota`) REFERENCES `tb_nota` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
