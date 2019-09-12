-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema technomonte
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema technomonte
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `technomonte` DEFAULT CHARACTER SET utf8 ;
USE `technomonte` ;

-- -----------------------------------------------------
-- Table `technomonte`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `technomonte`.`usuario` (
  `cpf` VARCHAR(11) NOT NULL,
  `nome` VARCHAR(150) NOT NULL,
  `senha` VARCHAR(256) NOT NULL,
  PRIMARY KEY (`cpf`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `technomonte`.`pagamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `technomonte`.`pagamento` (
  `codigo` INT NOT NULL AUTO_INCREMENT,
  `datapagamento` DATETIME NOT NULL,
  `valor` FLOAT NOT NULL,
  `usuario_responsavel` VARCHAR(11) NOT NULL,
  PRIMARY KEY (`codigo`),
  INDEX `fk_pagamento_usuario1_idx` (`usuario_responsavel` ASC),
  CONSTRAINT `fk_pagamento_usuario1`
    FOREIGN KEY (`usuario_responsavel`)
    REFERENCES `technomonte`.`usuario` (`cpf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `technomonte`.`inscricao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `technomonte`.`inscricao` (
  `cpf` VARCHAR(11) NOT NULL,
  `nome` VARCHAR(150) NOT NULL,
  `endereco` VARCHAR(200) NOT NULL,
  `cidade` VARCHAR(100) NOT NULL,
  `estado` VARCHAR(2) NOT NULL,
  `celular` VARCHAR(11) NULL,
  `email` VARCHAR(100) NOT NULL,
  `data` DATETIME NOT NULL,
  `estudante` INT NOT NULL,
  `instituicao` VARCHAR(200) NULL,
  `pagamento_codigo` INT NULL,
  `camiseta` CHAR(1) NULL,
  `mostra` INT NOT NULL default 0,
  `feira` INT NOT NULL default 0,
  PRIMARY KEY (`cpf`),
  INDEX `fk_inscricao_pagamento1_idx` (`pagamento_codigo` ASC),
  CONSTRAINT `fk_inscricao_pagamento1`
    FOREIGN KEY (`pagamento_codigo`)
    REFERENCES `technomonte`.`pagamento` (`codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `technomonte`.`atividade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `technomonte`.`atividade` (
  `codigo` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `vagastotais` INT NOT NULL,
  `vagasdisponiveis` INT NOT NULL,
  `ano` INT NOT NULL,
  PRIMARY KEY (`codigo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `technomonte`.`atividade_inscricao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `technomonte`.`atividade_inscricao` (
  `minicurso_codigo` INT NOT NULL,
  `inscricao_cpf` VARCHAR(11) NOT NULL,
  PRIMARY KEY (`minicurso_codigo`, `inscricao_cpf`),
  INDEX `fk_minicurso_has_inscricao_inscricao1_idx` (`inscricao_cpf` ASC),
  INDEX `fk_minicurso_has_inscricao_minicurso_idx` (`minicurso_codigo` ASC),
  CONSTRAINT `fk_minicurso_has_inscricao_minicurso`
    FOREIGN KEY (`minicurso_codigo`)
    REFERENCES `technomonte`.`atividade` (`codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_minicurso_has_inscricao_inscricao1`
    FOREIGN KEY (`inscricao_cpf`)
    REFERENCES `technomonte`.`inscricao` (`cpf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
