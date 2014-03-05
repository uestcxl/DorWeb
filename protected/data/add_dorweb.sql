
USE `DorWeb`;


CREATE  TABLE IF NOT EXISTS `DorWeb`.`user_infor` (
  `user_id` INT(11) NOT NULL ,
  `user_name` VARCHAR(20) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NOT NULL ,
  `school` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NOT NULL ,
  `acmid` VARCHAR(30) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `phone` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`user_id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `DorWeb`.`stu_union` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `links` VARCHAR(255) NOT NULL ,
  `name` VARCHAR(30) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

