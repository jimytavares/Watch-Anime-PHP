-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `nickname` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nivel` int(11) NOT NULL,
  `ativo` double NOT NULL,
  `notificacao` double NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uni_email` (`email`) USING BTREE,
  UNIQUE KEY `uni_username` (`username`) USING BTREE,
  UNIQUE KEY `uni_nickname` (`nickname`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tb_temporada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `ano` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tb_animes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `sinopse` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_id_temporada` (`id_temporada`),
  CONSTRAINT `FK_id_temporada` FOREIGN KEY (`id_temporada`) REFERENCES `tb_temporada` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tb_assistido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_anime` int(11) NOT NULL DEFAULT '0',
  `id_usuario` int(11) NOT NULL DEFAULT '0',
  `episodio` int(11) NOT NULL,
  `dia_semana` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK3_id_anime` (`id_anime`),
  KEY `FK3_id_usuario` (`id_usuario`),
  CONSTRAINT `FK3_id_anime` FOREIGN KEY (`id_anime`) REFERENCES `tb_animes` (`id`),
  CONSTRAINT `FK3_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tb_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tb_comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_anime` int(11) NOT NULL,
  `comentario` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_id_anime` (`id_anime`),
  KEY `FK_id_usuario` (`id_usuario`),
  CONSTRAINT `FK_id_anime` FOREIGN KEY (`id_anime`) REFERENCES `tb_animes` (`id`),
  CONSTRAINT `FK_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tb_genero` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tb_nota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pontuacao` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tb_parado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_anime` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `epsidio` int(4) DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK4_id_usuario` (`id_usuario`),
  KEY `FK4_id_anime` (`id_anime`),
  CONSTRAINT `FK4_id_anime` FOREIGN KEY (`id_anime`) REFERENCES `tb_animes` (`id`),
  CONSTRAINT `FK4_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tb_ranking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_anime` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_nota` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK2_id_anime` (`id_anime`),
  KEY `FK2_id_usuario` (`id_usuario`),
  KEY `FK_id_nota` (`id_nota`),
  CONSTRAINT `FK2_id_anime` FOREIGN KEY (`id_anime`) REFERENCES `tb_animes` (`id`),
  CONSTRAINT `FK2_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id`),
  CONSTRAINT `FK_id_nota` FOREIGN KEY (`id_nota`) REFERENCES `tb_nota` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tb_rec_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL DEFAULT '0',
  `codigo_autenticador` varchar(25) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK__tb_usuario` (`id_usuario`),
  CONSTRAINT `FK__tb_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

DROP VIEW IF EXISTS `vw_assistido`;
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `vw_assistido` (
	`id` INT(11) NOT NULL,
	`id_usuario` INT(11) NOT NULL,
	`dia_semana` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`nome` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`episodio` INT(11) NOT NULL
) ENGINE=MyISAM;

-- Copiando estrutura para view dbanime.vw_assistido
DROP VIEW IF EXISTS `vw_assistido`;
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `vw_assistido`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_assistido` AS select `ta`.`id` AS `id`,`ta`.`id_usuario` AS `id_usuario`,`ta`.`dia_semana` AS `dia_semana`,`an`.`nome` AS `nome`,`ta`.`episodio` AS `episodio` from (`tb_assistido` `ta` join `tb_animes` `an` on((`ta`.`id_anime` = `an`.`id`))) ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
