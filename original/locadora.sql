
CREATE SCHEMA IF NOT EXISTS `locadora` DEFAULT CHARACTER SET utf8 ;
USE `locadora`;

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` INT NOT NULL AUTO_INCREMENT,
  `nome_cliente` VARCHAR(100) NOT NULL,
  `cpf_cliente` CHAR(11) UNIQUE,
  `telefone_cliente` VARCHAR(20),
  `email_cliente` VARCHAR(100),
  `endereco_cliente` VARCHAR(120),
  PRIMARY KEY (`id_cliente`)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `filme` (
  `id_filme` INT NOT NULL AUTO_INCREMENT,
  `titulo_filme` VARCHAR(100) NOT NULL,
  `genero_filme` VARCHAR(45),
  `ano_filme` YEAR,
  `classificacao_filme` VARCHAR(10),
  PRIMARY KEY (`id_filme`)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `locacao` (
  `id_locacao` INT NOT NULL AUTO_INCREMENT,
  `data_locacao` DATE NOT NULL,
  `data_devolucao` DATE,
  `cliente_id_cliente` INT NOT NULL,
  `filme_id_filme` INT NOT NULL,
  PRIMARY KEY (`id_locacao`, `cliente_id_cliente`, `filme_id_filme`),
  FOREIGN KEY (`cliente_id_cliente`) REFERENCES `cliente`(`id_cliente`),
  FOREIGN KEY (`filme_id_filme`) REFERENCES `filme`(`id_filme`)
) ENGINE = InnoDB;
