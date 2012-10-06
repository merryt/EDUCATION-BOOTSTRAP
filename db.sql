SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `edubootstrap` ;
CREATE SCHEMA IF NOT EXISTS `edubootstrap` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `edubootstrap` ;

-- -----------------------------------------------------
-- Table `edubootstrap`.`subjects`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `edubootstrap`.`subjects` ;

CREATE  TABLE IF NOT EXISTS `edubootstrap`.`subjects` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `edubootstrap`.`vendors`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `edubootstrap`.`vendors` ;

CREATE  TABLE IF NOT EXISTS `edubootstrap`.`vendors` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `edubootstrap`.`courses`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `edubootstrap`.`courses` ;

CREATE  TABLE IF NOT EXISTS `edubootstrap`.`courses` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  `cost` INT NULL DEFAULT 0 ,
  `vendor_id` INT NOT NULL ,
  `description` VARCHAR(255) NOT NULL ,
  `duration` INT NULL DEFAULT 0 ,
  PRIMARY KEY (`id`) ,
  INDEX `courses_vendors` (`vendor_id` ASC) ,
  CONSTRAINT `courses_vendors`
    FOREIGN KEY (`vendor_id` )
    REFERENCES `edubootstrap`.`vendors` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `edubootstrap`.`courseequivalents`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `edubootstrap`.`courseequivalents` ;

CREATE  TABLE IF NOT EXISTS `edubootstrap`.`courseequivalents` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  `course_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `course_equivalents_courses` (`course_id` ASC) ,
  CONSTRAINT `course_equivalents_courses`
    FOREIGN KEY (`course_id` )
    REFERENCES `edubootstrap`.`courses` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `edubootstrap`.`courseequivalents_subjects`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `edubootstrap`.`courseequivalents_subjects` ;

CREATE  TABLE IF NOT EXISTS `edubootstrap`.`courseequivalents_subjects` (
  `id` INT NOT NULL ,
  `subject_id` INT NOT NULL ,
  `courseequivalent_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `courseequivalents_subjects_subjects` (`subject_id` ASC) ,
  INDEX `courseequivalents_subjects_courseequivalents` (`courseequivalent_id` ASC) ,
  CONSTRAINT `courseequivalents_subjects_subjects`
    FOREIGN KEY (`subject_id` )
    REFERENCES `edubootstrap`.`subjects` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `courseequivalents_subjects_courseequivalents`
    FOREIGN KEY (`courseequivalent_id` )
    REFERENCES `edubootstrap`.`courseequivalents` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `edubootstrap`.`subjects`
-- -----------------------------------------------------
START TRANSACTION;
USE `edubootstrap`;
INSERT INTO `edubootstrap`.`subjects` (`id`, `name`) VALUES (1, 'Computer Science');
INSERT INTO `edubootstrap`.`subjects` (`id`, `name`) VALUES (2, 'Western Art History');

COMMIT;

-- -----------------------------------------------------
-- Data for table `edubootstrap`.`vendors`
-- -----------------------------------------------------
START TRANSACTION;
USE `edubootstrap`;
INSERT INTO `edubootstrap`.`vendors` (`id`, `name`) VALUES (1, 'Lynda');
INSERT INTO `edubootstrap`.`vendors` (`id`, `name`) VALUES (2, 'Udemy');

COMMIT;

-- -----------------------------------------------------
-- Data for table `edubootstrap`.`courses`
-- -----------------------------------------------------
START TRANSACTION;
USE `edubootstrap`;
INSERT INTO `edubootstrap`.`courses` (`id`, `name`, `cost`, `vendor_id`, `description`, `duration`) VALUES (1, 'CSCI 101', 0, 1, 'description here', NULL);
INSERT INTO `edubootstrap`.`courses` (`id`, `name`, `cost`, `vendor_id`, `description`, `duration`) VALUES (2, 'CSCI 102', 0, 1, 'description here', NULL);
INSERT INTO `edubootstrap`.`courses` (`id`, `name`, `cost`, `vendor_id`, `description`, `duration`) VALUES (3, 'AHIST 101 - Western', 100, 2, 'description here', NULL);
INSERT INTO `edubootstrap`.`courses` (`id`, `name`, `cost`, `vendor_id`, `description`, `duration`) VALUES (4, 'AHIST 102 - Eastern', 100, 2, 'description here', NULL);

COMMIT;

-- -----------------------------------------------------
-- Data for table `edubootstrap`.`courseequivalents`
-- -----------------------------------------------------
START TRANSACTION;
USE `edubootstrap`;
INSERT INTO `edubootstrap`.`courseequivalents` (`id`, `name`, `course_id`) VALUES (1, 'Art History 101', 1);
INSERT INTO `edubootstrap`.`courseequivalents` (`id`, `name`, `course_id`) VALUES (2, 'Art History 102', 2);
INSERT INTO `edubootstrap`.`courseequivalents` (`id`, `name`, `course_id`) VALUES (3, 'CSCI 101', 3);
INSERT INTO `edubootstrap`.`courseequivalents` (`id`, `name`, `course_id`) VALUES (4, 'CSCI 102', 4);

COMMIT;

-- -----------------------------------------------------
-- Data for table `edubootstrap`.`courseequivalents_subjects`
-- -----------------------------------------------------
START TRANSACTION;
USE `edubootstrap`;
INSERT INTO `edubootstrap`.`courseequivalents_subjects` (`id`, `subject_id`, `courseequivalent_id`) VALUES (1, 1, 3);
INSERT INTO `edubootstrap`.`courseequivalents_subjects` (`id`, `subject_id`, `courseequivalent_id`) VALUES (2, 1, 4);
INSERT INTO `edubootstrap`.`courseequivalents_subjects` (`id`, `subject_id`, `courseequivalent_id`) VALUES (3, 2, 1);
INSERT INTO `edubootstrap`.`courseequivalents_subjects` (`id`, `subject_id`, `courseequivalent_id`) VALUES (4, 2, 2);

COMMIT;
