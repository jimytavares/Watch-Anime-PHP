
CREATE TABLE `tb_genero` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_genero` (`id`, `nome`) VALUES
(1, 'Acao'),
(2, 'Artes Marciais'),
(6, 'Comedia'),
(8, 'Drama'),
(9, 'Ecchi'),
(10, 'Esporte'),
(12, 'Ficao '),
(17, 'Romance'),
(21, 'Slice of Life'),
(22, 'Sobrenatural'),
(23, 'Terror'),
(24, 'Vida Escolar'),
(26, 'Yuri'),
(27, 'RPG/Jogo');

CREATE TABLE `tb_categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_categoria` (`id`, `nome`) VALUES
(1, 'Livre'),
(2, '10 Anos'),
(3, '14 Anos'),
(4, '16 Anos'),
(5, '18 Anos');

CREATE TABLE `tb_temporada` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `ano` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_temporada` (`id`, `nome`, `ano`) VALUES
(1, 'Janeiro / Winter / Inverno', '2019-01-01'),
(2, 'Abril / Spring / Primavera', '2019-04-01'),
(3, 'Julho / Summer / Verão', '2019-07-01'),
(4, 'Outubro / Fall / Outono', '2019-10-01');

CREATE TABLE `tb_animes` (
  `id` int(11) NOT NULL,
  `id_genero` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_temporada` int(11) DEFAULT NULL,
  `nome` varchar(50) NOT NULL,
  `abreviacao` varchar(20) DEFAULT NULL,
  `episodio` int(4) DEFAULT NULL,
  `estreia` varchar(20) DEFAULT NULL,
  `sinopse` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_animes` (`id`, `id_genero`, `id_categoria`, `id_temporada`, `nome`, `abreviacao`, `episodio`, `estreia`, `sinopse`) VALUES
(4, 1, 4, 4, 'Mugen no Juunin; Imortal', 'MUGEN', 10, '0000-00-00', 'Samurai Imortal'),
(5, 1, 4, 4, 'Nanatsu no Taizai 3', '', 12, '0000-00-00', ''),
(6, 12, 1, 1, 'ID: Invade', 'ID', 12, '05.01.2020', ''),
(7, 27, 1, 1, 'Itai no wa Iya nano', '', 12, '08.01.2020', 'Garota Jogo online celular'),
(8, 27, 3, 1, 'Darwins Game', '', 11, '03.01.2020', ''),
(13, 27, 2, 1, 'Infinite Dendrogam', '', 0, '09.01.2020', '');

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

INSERT INTO `tb_usuario` (`id`, `username`, `nickname`, `password`, `email`, `nivel`, `ativo`, `notificacao`) VALUES
(1, 'admin', 'Admin', 'admin', 'admin@admin.com', 1, 1, 1),
(2, 'dev', 'dev', 'dev', 'dev@dev.com', 1, 1, 1);

CREATE TABLE `tb_assistido` (
  `id` int(11) NOT NULL,
  `id_anime` int(11) NOT NULL DEFAULT 0,
  `id_usuario` int(11) NOT NULL DEFAULT 0,
  `episodio` int(11) NOT NULL,
  `dia_semana` varchar(50) NOT NULL,
  `dtdia` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_assistido` (`id`, `id_anime`, `id_usuario`, `episodio`, `dia_semana`, `dtdia`) VALUES
(7, 7, 1, 2, 'Quarta-Feira', '15.01.2020'),
(8, 13, 1, 2, 'Quinta-Feira', '30.01.2020'),
(10, 5, 1, 14, 'Quinta-Feira', '16.01.2020'),
(11, 8, 1, 3, 'Sexta-Feira', '10.01.2020'),
(13, 6, 1, 4, 'Domingo', '12.01.2020');

CREATE TABLE `tb_comentarios` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_anime` int(11) NOT NULL,
  `comentario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tb_nota` (
  `id` int(11) NOT NULL,
  `pontuacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_nota` (`id`, `pontuacao`) VALUES
(1, 10),
(2, 9),
(4, 8),
(5, 7),
(6, 6),
(7, 5),
(8, 4),
(9, 3),
(10, 2),
(11, 1);

CREATE TABLE `tb_parado` (
  `id` int(11) NOT NULL,
  `id_anime` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `episodio` int(4) DEFAULT NULL,
  `data` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `tb_parado` (`id`, `id_anime`, `id_usuario`, `episodio`, `data`) VALUES
(2, 4, 1, 7, '');

CREATE TABLE `tb_ranking` (
  `id` int(11) NOT NULL,
  `id_anime` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_nota` int(11) DEFAULT NULL,
  `comentario` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_assistido`  AS  select `ta`.`id` AS `id`,`ta`.`id_usuario` AS `id_usuario`,`ta`.`dia_semana` AS `dia_semana`,`an`.`nome` AS `nome`,`ta`.`episodio` AS `episodio`,`ta`.`dtdia` AS `dtdia` from (`tb_assistido` `ta` join `tb_animes` `an` on(`ta`.`id_anime` = `an`.`id`)) ;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_parados`  AS  select `ta`.`id` AS `id`,`ta`.`id_usuario` AS `id_usuario`,`an`.`nome` AS `nome`,`ta`.`episodio` AS `episodio`,`ta`.`data` AS `data` from (`tb_parado` `ta` join `tb_animes` `an` on(`ta`.`id_anime` = `an`.`id`)) ;

