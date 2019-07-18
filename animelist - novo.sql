-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para dbanime
DROP DATABASE IF EXISTS `dbanime`;
CREATE DATABASE IF NOT EXISTS `dbanime` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbanime`;

-- Copiando estrutura para tabela dbanime.tb_animes
DROP TABLE IF EXISTS `tb_animes`;
CREATE TABLE IF NOT EXISTS `tb_animes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_verificar` int(11) DEFAULT NULL,
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
  KEY `FK_id_genero` (`id_genero`),
  KEY `FK_id_categoria` (`id_categoria`),
  KEY `FK_id_verificar` (`id_verificar`),
  KEY `FK_id_temporada` (`id_temporada`),
  CONSTRAINT `FK_id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `tb_categoria` (`id`),
  CONSTRAINT `FK_id_genero` FOREIGN KEY (`id_genero`) REFERENCES `tb_genero` (`id`),
  CONSTRAINT `FK_id_temporada` FOREIGN KEY (`id_temporada`) REFERENCES `tb_temporada` (`id`),
  CONSTRAINT `FK_id_verificar` FOREIGN KEY (`id_verificar`) REFERENCES `tb_verificar` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela dbanime.tb_animes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_animes` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_animes` ENABLE KEYS */;

-- Copiando estrutura para tabela dbanime.tb_assistido
DROP TABLE IF EXISTS `tb_assistido`;
CREATE TABLE IF NOT EXISTS `tb_assistido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_anime` int(11) NOT NULL DEFAULT '0',
  `id_usuario` int(11) NOT NULL DEFAULT '0',
  `dia_semana` date NOT NULL,
  `dia_assistido` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK3_id_anime` (`id_anime`),
  KEY `FK3_id_usuario` (`id_usuario`),
  CONSTRAINT `FK3_id_anime` FOREIGN KEY (`id_anime`) REFERENCES `tb_animes` (`id`),
  CONSTRAINT `FK3_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela dbanime.tb_assistido: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_assistido` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_assistido` ENABLE KEYS */;

-- Copiando estrutura para tabela dbanime.tb_categoria
DROP TABLE IF EXISTS `tb_categoria`;
CREATE TABLE IF NOT EXISTS `tb_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela dbanime.tb_categoria: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_categoria` DISABLE KEYS */;
INSERT INTO `tb_categoria` (`id`, `nome`) VALUES
	(1, 'Livre'),
	(2, '10 Anos'),
	(3, '14 Anos'),
	(4, '16 Anos'),
	(5, '18 Anos');
/*!40000 ALTER TABLE `tb_categoria` ENABLE KEYS */;

-- Copiando estrutura para tabela dbanime.tb_comentarios
DROP TABLE IF EXISTS `tb_comentarios`;
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

-- Copiando dados para a tabela dbanime.tb_comentarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_comentarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_comentarios` ENABLE KEYS */;

-- Copiando estrutura para tabela dbanime.tb_genero
DROP TABLE IF EXISTS `tb_genero`;
CREATE TABLE IF NOT EXISTS `tb_genero` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela dbanime.tb_genero: ~26 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_genero` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `tb_genero` ENABLE KEYS */;

-- Copiando estrutura para tabela dbanime.tb_nota
DROP TABLE IF EXISTS `tb_nota`;
CREATE TABLE IF NOT EXISTS `tb_nota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pontuacao` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela dbanime.tb_nota: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_nota` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_nota` ENABLE KEYS */;

-- Copiando estrutura para tabela dbanime.tb_parado
DROP TABLE IF EXISTS `tb_parado`;
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

-- Copiando dados para a tabela dbanime.tb_parado: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_parado` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_parado` ENABLE KEYS */;

-- Copiando estrutura para tabela dbanime.tb_ranking
DROP TABLE IF EXISTS `tb_ranking`;
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

-- Copiando dados para a tabela dbanime.tb_ranking: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_ranking` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_ranking` ENABLE KEYS */;

-- Copiando estrutura para tabela dbanime.tb_temporada
DROP TABLE IF EXISTS `tb_temporada`;
CREATE TABLE IF NOT EXISTS `tb_temporada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `ano` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela dbanime.tb_temporada: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_temporada` DISABLE KEYS */;
INSERT INTO `tb_temporada` (`id`, `nome`, `ano`) VALUES
	(1, 'Janeiro / Winter / Inverno', '2019-01-01'),
	(2, 'Abril / Spring / Primavera', '2019-04-01'),
	(3, 'Julho / Summer / Verão', '2019-07-01'),
	(4, 'Outubro / Fall / Outono', '2019-10-01');
/*!40000 ALTER TABLE `tb_temporada` ENABLE KEYS */;

-- Copiando estrutura para tabela dbanime.tb_usuario
DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nivel` int(11) NOT NULL,
  `ativo` double NOT NULL,
  `notificacao` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela dbanime.tb_usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_usuario` DISABLE KEYS */;
INSERT INTO `tb_usuario` (`id`, `username`, `password`, `email`, `nivel`, `ativo`, `notificacao`) VALUES
	(1, 'admim', 'admim', 'admim@admim.com', 1, 1, 1);
/*!40000 ALTER TABLE `tb_usuario` ENABLE KEYS */;

-- Copiando estrutura para tabela dbanime.tb_verificar
DROP TABLE IF EXISTS `tb_verificar`;
CREATE TABLE IF NOT EXISTS `tb_verificar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `comentario` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela dbanime.tb_verificar: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_verificar` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_verificar` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
