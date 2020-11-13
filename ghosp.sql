-- MySQL Script generated by MySQL Workbench
-- Thu Nov  5 18:55:36 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema ghosp
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `ghosp` ;

-- -----------------------------------------------------
-- Schema ghosp
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ghosp` DEFAULT CHARACTER SET utf8 ;
USE `ghosp` ;

-- -----------------------------------------------------
-- Table `ghosp`.`pacientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ghosp`.`pacientes` (
  `idpaciente` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NULL,
  `cpf` VARCHAR(13) NOT NULL,
  `data_nascimento` DATE NOT NULL,
  `id_endereco` INT NULL,
  `id_plano` INT NOT NULL,
  `alergias` LONGTEXT NULL,
  `doencas_cronicas` LONGTEXT NULL,
  PRIMARY KEY (`idpaciente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ghosp`.`planos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ghosp`.`planos` (
  `idplano` INT NOT NULL AUTO_INCREMENT,
  `nome_plano` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idplano`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ghosp`.`enderecos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ghosp`.`enderecos` (
  `idendereco` INT NOT NULL AUTO_INCREMENT,
  `rua` VARCHAR(45) NULL,
  `cidade` VARCHAR(45) NULL,
  `bairro` VARCHAR(45) NULL,
  `cep` VARCHAR(8) NULL,
  `numero` INT NULL,
  `complemento` VARCHAR(45) NULL,
  `id_estados` INT NULL,
  PRIMARY KEY (`idendereco`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ghosp`.`estados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ghosp`.`estados` (
  `idestado` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `sigla` VARCHAR(45) NULL,
  PRIMARY KEY (`idestado`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
