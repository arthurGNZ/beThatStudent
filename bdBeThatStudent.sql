-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para bethatstudent
CREATE DATABASE IF NOT EXISTS `bethatstudent` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */;
USE `bethatstudent`;

-- Copiando estrutura para tabela bethatstudent.dicas
CREATE TABLE IF NOT EXISTS `dicas` (
  `id` int(11) DEFAULT NULL,
  `titulo` varchar(350) COLLATE utf8mb4_bin DEFAULT NULL,
  `conteudo` longtext COLLATE utf8mb4_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela bethatstudent.projeto
CREATE TABLE IF NOT EXISTS `projeto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `tempoEstudo` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_projeto_usuario` (`idUsuario`),
  CONSTRAINT `FK_projeto_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela bethatstudent.tarefa
CREATE TABLE IF NOT EXISTS `tarefa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `descricao` varchar(550) COLLATE utf8mb4_bin NOT NULL DEFAULT 'Sem descrição',
  `tempoEstudo` int(11) NOT NULL DEFAULT '0',
  `idProjeto` int(11) NOT NULL DEFAULT '0',
  `idUser` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tarefa_projeto` (`idProjeto`) USING BTREE,
  KEY `FK_tarefa_usuario` (`idUser`),
  CONSTRAINT `FK_tarefa_projeto` FOREIGN KEY (`idProjeto`) REFERENCES `projeto` (`id`),
  CONSTRAINT `FK_tarefa_usuario` FOREIGN KEY (`idUser`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela bethatstudent.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_bin DEFAULT NULL,
  `senha` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Exportação de dados foi desmarcado.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
