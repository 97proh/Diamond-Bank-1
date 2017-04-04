-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema diamondbank
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema diamondbank
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `diamondbank` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema teste
-- -----------------------------------------------------
USE `diamondbank` ;

-- -----------------------------------------------------
-- Table `diamondbank`.`Conta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `diamondbank`.`Conta` (
  `saldoConta` INT NOT NULL,
  `numeroConta` INT NOT NULL,
  `tipoConta` ENUM('Conta corrente', 'Conta poupança') NOT NULL,
  `limiteConta` INT NOT NULL,
  `nomeCliente` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`numeroConta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `diamondbank`.`Usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `diamondbank`.`Usuarios` (
  `idUsuario` INT NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `diamondbank`.`Gerente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `diamondbank`.`Gerente` (
  `idGerente` INT NOT NULL,
  `emailGerente` VARCHAR(255) NOT NULL,
  `senhaGerente` INT NOT NULL,
  PRIMARY KEY (`idGerente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `diamondbank`.`extrato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `diamondbank`.`extrato` (
  `operação` ENUM('saque', 'deposito', 'transferencia') NOT NULL,
  `data` DATE NULL,
  `numero_id` INT NOT NULL,
  INDEX `numero_fk_idx` (`numero_id` ASC),
  CONSTRAINT `numero_fk`
    FOREIGN KEY (`numero_id`)
    REFERENCES `diamondbank`.`Conta` (`numeroConta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
