-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema technomonte
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema technomonte
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `technomonte` DEFAULT CHARACTER SET utf8 ;
USE `technomonte` ;

-- -----------------------------------------------------
-- Table `technomonte`.`pessoa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `technomonte`.`pessoa` (
  `nome` VARCHAR(100) NOT NULL,
  `telefone` VARCHAR(20) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `cidade` VARCHAR(100) NOT NULL,
  `estado` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`cpf`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
