CREATE TABLE IF NOT EXISTS `tb_continuation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ep` int(4),
  `dia` varchar(14),
  `data` date,
  `link` longtext,
  PRIMARY KEY (id),
	 id_anime int references tb_animes(id),
     id_usuario int references tb_usuario(id),
     id_temporada int references tb_temporada(id),
     id_nota int references tb_nota(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;