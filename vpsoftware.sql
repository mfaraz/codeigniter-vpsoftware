SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `vpsoftware` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `vpsoftware` ;

-- -----------------------------------------------------
-- Table `vpsoftware`.`about`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `vpsoftware`.`about` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `content_vi` TEXT CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `content_en` TEXT CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `cataloging` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vpsoftware`.`partners`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `vpsoftware`.`partners` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name_vi` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `name_en` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `image` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `link` VARCHAR(200) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vpsoftware`.`message`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `vpsoftware`.`message` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `title_vi` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `title_en` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `image` VARCHAR(100) CHARACTER SET 'ujis' COLLATE 'ujis_japanese_ci' NULL ,
  `content_vi` TEXT CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `content_en` TEXT CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vpsoftware`.`Support`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `vpsoftware`.`Support` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `email` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `cataloging` VARCHAR(40) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vpsoftware`.`contact`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `vpsoftware`.`contact` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `email` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `subject` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `content` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL ,
  `isread` BIT NULL ,
  `Support_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_contact_Support1_idx` (`Support_id` ASC) ,
  CONSTRAINT `fk_contact_Support1`
    FOREIGN KEY (`Support_id` )
    REFERENCES `vpsoftware`.`Support` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vpsoftware`.`product`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `vpsoftware`.`product` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `image` VARCHAR(100) NULL ,
  `price` VARCHAR(12) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `title_vi` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `title_en` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `content_vi` TEXT CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `content_en` TEXT CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `cataloging` VARCHAR(15) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vpsoftware`.`category_software`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `vpsoftware`.`category_software` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name_vi` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `name_en` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vpsoftware`.`software`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `vpsoftware`.`software` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name_vi` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `name_en` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `date` VARCHAR(15) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `size` VARCHAR(15) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `download` VARCHAR(15) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `category_software_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_software_category_software_idx` (`category_software_id` ASC) ,
  CONSTRAINT `fk_software_category_software`
    FOREIGN KEY (`category_software_id` )
    REFERENCES `vpsoftware`.`category_software` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vpsoftware`.`order`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `vpsoftware`.`order` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `phone` VARCHAR(15) NULL ,
  `email` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `address` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vpsoftware`.`details_order`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `vpsoftware`.`details_order` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `number` INT NULL ,
  `price` VARCHAR(12) NULL ,
  `total` VARCHAR(12) NULL ,
  `order_id` INT NOT NULL ,
  `product_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_details_order_order1_idx` (`order_id` ASC) ,
  INDEX `fk_details_order_product1_idx` (`product_id` ASC) ,
  CONSTRAINT `fk_details_order_order1`
    FOREIGN KEY (`order_id` )
    REFERENCES `vpsoftware`.`order` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_details_order_product1`
    FOREIGN KEY (`product_id` )
    REFERENCES `vpsoftware`.`product` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vpsoftware`.`account`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `vpsoftware`.`account` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `user` VARCHAR(45) NULL ,
  `pass` VARCHAR(45) NULL ,
  `name` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `birthday` VARCHAR(15) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `address` VARCHAR(200) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `accountcol` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `hometown` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  `content` TEXT CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

USE `vpsoftware` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
