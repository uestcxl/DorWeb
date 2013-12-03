SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';
CREATE DATABASES DorWeb;
USE DorWeb;

-- -----------------------------------------------------
-- Table `DorWeb`.`user`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DorWeb`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `user_name` VARCHAR(20) NOT NULL ,
  `password` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DorWeb`.`news`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DorWeb`.`news` (
  `news_id` INT NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(50) NOT NULL ,
  `content` TEXT NOT NULL ,
  `time` DATETIME NOT NULL ,
  PRIMARY KEY (`news_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DorWeb`.`files`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DorWeb`.`files` (
  `files_id` INT NOT NULL AUTO_INCREMENT ,
  `file_name` VARCHAR(100) NOT NULL ,
  `time` DATETIME NOT NULL ,
  PRIMARY KEY (`files_id`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
