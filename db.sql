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
-- Table `edubootstrap`.`facilitations`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `edubootstrap`.`facilitations` ;

CREATE  TABLE IF NOT EXISTS `edubootstrap`.`facilitations` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `edubootstrap`.`levels`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `edubootstrap`.`levels` ;

CREATE  TABLE IF NOT EXISTS `edubootstrap`.`levels` (
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
  `title` VARCHAR(255) NOT NULL ,
  `description` TEXT NOT NULL ,
  `vendor_id` INT NOT NULL ,
  `cost` INT NULL DEFAULT 0 ,
  `duration` INT NULL DEFAULT 0 ,
  `level_id` INT NOT NULL ,
  `rating` INT NULL DEFAULT 0 ,
  `author` VARCHAR(45) NULL ,
  `likes` INT NULL ,
  `facilitation_id` INT NOT NULL ,
  `includes` TEXT NULL ,
  `released` DATETIME NULL ,
  `courseurl` VARCHAR(400) NOT NULL ,
  `imageurl` VARCHAR(400) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `courses_vendors` (`vendor_id` ASC) ,
  INDEX `courses_facilitations` (`facilitation_id` ASC) ,
  INDEX `courses_levels` (`level_id` ASC) ,
  CONSTRAINT `courses_vendors`
    FOREIGN KEY (`vendor_id` )
    REFERENCES `edubootstrap`.`vendors` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `courses_facilitations`
    FOREIGN KEY (`facilitation_id` )
    REFERENCES `edubootstrap`.`facilitations` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `courses_levels`
    FOREIGN KEY (`level_id` )
    REFERENCES `edubootstrap`.`levels` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `edubootstrap`.`courses_subjects`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `edubootstrap`.`courses_subjects` ;

CREATE  TABLE IF NOT EXISTS `edubootstrap`.`courses_subjects` (
  `id` INT NOT NULL ,
  `subject_id` INT NOT NULL ,
  `course_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_courses_subjects_courses` (`course_id` ASC) ,
  INDEX `fk_courses_subjects_subjects` (`subject_id` ASC) ,
  CONSTRAINT `fk_courses_subjects_courses`
    FOREIGN KEY (`course_id` )
    REFERENCES `edubootstrap`.`courses` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_courses_subjects_subjects`
    FOREIGN KEY (`subject_id` )
    REFERENCES `edubootstrap`.`subjects` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `edubootstrap`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `edubootstrap`.`users` ;

CREATE  TABLE IF NOT EXISTS `edubootstrap`.`users` (
  `id` INT NOT NULL ,
  `username` VARCHAR(45) NOT NULL ,
  `firstname` VARCHAR(45) NULL ,
  `lastname` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `edubootstrap`.`statuses`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `edubootstrap`.`statuses` ;

CREATE  TABLE IF NOT EXISTS `edubootstrap`.`statuses` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `edubootstrap`.`courses_users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `edubootstrap`.`courses_users` ;

CREATE  TABLE IF NOT EXISTS `edubootstrap`.`courses_users` (
  `id` INT NOT NULL ,
  `course_id` INT NOT NULL ,
  `user_id` INT NOT NULL ,
  `status_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_courses_users_courses` (`course_id` ASC) ,
  INDEX `fk_courses_users_users` (`user_id` ASC) ,
  INDEX `fk_courses_users_statuses` (`status_id` ASC) ,
  CONSTRAINT `fk_courses_users_courses`
    FOREIGN KEY (`course_id` )
    REFERENCES `edubootstrap`.`courses` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_courses_users_users`
    FOREIGN KEY (`user_id` )
    REFERENCES `edubootstrap`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_courses_users_statuses`
    FOREIGN KEY (`status_id` )
    REFERENCES `edubootstrap`.`statuses` (`id` )
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
INSERT INTO `edubootstrap`.`subjects` (`id`, `name`) VALUES (1, 'Mobile App Development');
INSERT INTO `edubootstrap`.`subjects` (`id`, `name`) VALUES (2, 'Western Art History');
INSERT INTO `edubootstrap`.`subjects` (`id`, `name`) VALUES (3, 'Geology');
INSERT INTO `edubootstrap`.`subjects` (`id`, `name`) VALUES (4, 'Auto Repair');

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
-- Data for table `edubootstrap`.`facilitations`
-- -----------------------------------------------------
START TRANSACTION;
USE `edubootstrap`;
INSERT INTO `edubootstrap`.`facilitations` (`id`, `name`) VALUES (1, 'self-paced');
INSERT INTO `edubootstrap`.`facilitations` (`id`, `name`) VALUES (2, 'instructor-led');

COMMIT;

-- -----------------------------------------------------
-- Data for table `edubootstrap`.`levels`
-- -----------------------------------------------------
START TRANSACTION;
USE `edubootstrap`;
INSERT INTO `edubootstrap`.`levels` (`id`, `name`) VALUES (1, 'Beginner');
INSERT INTO `edubootstrap`.`levels` (`id`, `name`) VALUES (2, 'Intermediate');
INSERT INTO `edubootstrap`.`levels` (`id`, `name`) VALUES (3, 'Advanced');

COMMIT;

-- -----------------------------------------------------
-- Data for table `edubootstrap`.`courses`
-- -----------------------------------------------------
START TRANSACTION;
USE `edubootstrap`;
INSERT INTO `edubootstrap`.`courses` (`id`, `title`, `description`, `vendor_id`, `cost`, `duration`, `level_id`, `rating`, `author`, `likes`, `facilitation_id`, `includes`, `released`, `courseurl`, `imageurl`) VALUES (1, 'Titanium Mobile App Development Essential Training', 'In this course, author Rafael Hernandez creates native iOS and Android applications from a single codebase with the open-source Appcelerator Titanium platform. The course explains the difference between browser-based JavaScript and Titanium JavaScript, shows how to create a basic application, and demonstrates building buttons, sliders, switches, and pickers. The course also covers creating tables, implementing maps, providing feedback to users, incorporating multimedia, detecting gestures, and preparing finished apps for distribution.', 1, 25, 640, 1, 3, 'Rafael Hernandez', 22, 1, '{exercises:true,\n					audio:true,\n					captions:true,\n					discussionForum:false,\n					video:true}', '2012', 'http://www.lynda.com/Titanium-training/Mobile-App-Development-Essential-Training/89116-2.html?srchtrk=index%3A1%0Alinktypeid%3A2%0Aq%3Amobile%20app%20development%0Apage%3A1%0As%3Arelevance%0Asa%3Atrue%0Aproducttypeid%3A2%0Ameta_topic_facet%3AMobile%20Apps%0Alevel%3A1-Beginner', 'thumbnails/titanium1.png');
INSERT INTO `edubootstrap`.`courses` (`id`, `title`, `description`, `vendor_id`, `cost`, `duration`, `level_id`, `rating`, `author`, `likes`, `facilitation_id`, `includes`, `released`, `courseurl`, `imageurl`) VALUES (2, 'Android App Development with Java Essential Training', 'This course is a comprehensive look at the Android architecture that teaches how to build and deploy applications for Android phones and tablets using the Java programming language. Starting with the installation of the required developer tools, including Eclipse and the Android SDK, the course covers how to build the user interface, work with local data, integrate data from the accelerometer and other sensors, and deploy finished applications to the Android Market.', 1, 149, 433, 1, 4, 'Lee Brimelow', 291, 1, '{\"exercises\":true,\"audio\":true,\"captions\":true,\"discussionForum\":false,\"video\":true}', '2011', 'http://www.lynda.com/Android-2-tutorials/Android-App-Development-with-Java-Essential-Training/79825-2.html?srchtrk=index%3A5%0Alinktypeid%3A2%0Aq%3Amobile%20app%20development%0Apage%3A1%0As%3Arelevance%0Asa%3Atrue%0Aproducttypeid%3A2%0Ameta_topic_facet%3AMobile%20Apps%0Alevel%3A1-Beginner', 'thumbnails/android1.png');
INSERT INTO `edubootstrap`.`courses` (`id`, `title`, `description`, `vendor_id`, `cost`, `duration`, `level_id`, `rating`, `author`, `likes`, `facilitation_id`, `includes`, `released`, `courseurl`, `imageurl`) VALUES (3, 'Create an iPad Web App', 'Discover how to create an app-like experience for the Apple iPad with HTML, CSS, and jQuery. In this course, Chris Converse shows how to prepare web pages that can become web apps on the iPad. Discover how to create custom icons, startup screens, and create an immersive user experience—all with web standard technologies. Bypass Objective-C and the App Store altogether and create a unique experience that can be revised as quickly as you update your web site.', 2, 25, 87, 2, 1, 'Chris Converse', 23, 2, NULL, '2010', 'http://cnn.com', 'thumbnails/app1.png');
INSERT INTO `edubootstrap`.`courses` (`id`, `title`, `description`, `vendor_id`, `cost`, `duration`, `level_id`, `rating`, `author`, `likes`, `facilitation_id`, `includes`, `released`, `courseurl`, `imageurl`) VALUES (4, 'Creative Programming for Digital Media & Mobile Apps', 'This course will teach you how to develop and apply programming skills to creative work. This is an important skill within the development of creative mobile applications, digital music and video games. It will teach technical skills needed to write software that make use of images, audio and graphics, and will concentrate on the application of these skills to creative projects.  Additional resources will be provided for students with no programming background.', 2, 0, 3600, 3, 4, 'Mick Grierson, Matthew Yee-King and Marco Gillies of Goldsmiths, University of London', 10, 1, NULL, '2011', 'http://bing.com', 'thumbnails/ipad1.png');
INSERT INTO `edubootstrap`.`courses` (`id`, `title`, `description`, `vendor_id`, `cost`, `duration`, `level_id`, `rating`, `author`, `likes`, `facilitation_id`, `includes`, `released`, `courseurl`, `imageurl`) VALUES (5, 'Overview of Mobile App Development', 'This is an overview of how to get started with mobile app development', 1, 0, 240, 1, 2, 'John McCob', 2, 1, NULL, '2012', 'http://www.lynda.com/Android-2-tutorials/Android-App-Development-with-Java-Essential-Training/79825-2.html?srchtrk=index%3A5%0Alinktypeid%3A2%0Aq%3Amobile%20app%20development%0Apage%3A1%0As%3Arelevance%0Asa%3Atrue%0Aproducttypeid%3A2%0Ameta_topic_facet%3AMobile%20Apps%0Alevel%3A1-Beginner', 'thumbnails/hybrid1.png');
INSERT INTO `edubootstrap`.`courses` (`id`, `title`, `description`, `vendor_id`, `cost`, `duration`, `level_id`, `rating`, `author`, `likes`, `facilitation_id`, `includes`, `released`, `courseurl`, `imageurl`) VALUES (6, 'Intro to iOS', 'Introduction to iOS programming', 2, 24, 200, 1, 3.5, 'Jason Wentworth', 15, 2, NULL, '2012', 'http://www.lynda.com/Titanium-training/Mobile-App-Development-Essential-Training/89116-2.html?srchtrk=index%3A1%0Alinktypeid%3A2%0Aq%3Amobile%20app%20development%0Apage%3A1%0As%3Arelevance%0Asa%3Atrue%0Aproducttypeid%3A2%0Ameta_topic_facet%3AMobile%20Apps%0Alevel%3A1-Beginner', 'thumbnails/ios1.png');

COMMIT;

-- -----------------------------------------------------
-- Data for table `edubootstrap`.`users`
-- -----------------------------------------------------
START TRANSACTION;
USE `edubootstrap`;
INSERT INTO `edubootstrap`.`users` (`id`, `username`, `firstname`, `lastname`) VALUES (1, 'tmerry', 'Tyler', 'Merry');
INSERT INTO `edubootstrap`.`users` (`id`, `username`, `firstname`, `lastname`) VALUES (2, 'turrechaga', 'Tiffany', 'Urréchega');
INSERT INTO `edubootstrap`.`users` (`id`, `username`, `firstname`, `lastname`) VALUES (3, 'dhead', 'Doody', 'Head');

COMMIT;

-- -----------------------------------------------------
-- Data for table `edubootstrap`.`statuses`
-- -----------------------------------------------------
START TRANSACTION;
USE `edubootstrap`;
INSERT INTO `edubootstrap`.`statuses` (`id`, `name`) VALUES (1, 'Enrolled');
INSERT INTO `edubootstrap`.`statuses` (`id`, `name`) VALUES (2, 'In Progress');
INSERT INTO `edubootstrap`.`statuses` (`id`, `name`) VALUES (3, 'Complete');

COMMIT;

-- -----------------------------------------------------
-- Data for table `edubootstrap`.`courses_users`
-- -----------------------------------------------------
START TRANSACTION;
USE `edubootstrap`;
INSERT INTO `edubootstrap`.`courses_users` (`id`, `course_id`, `user_id`, `status_id`) VALUES (1, 1, 1, 1);
INSERT INTO `edubootstrap`.`courses_users` (`id`, `course_id`, `user_id`, `status_id`) VALUES (2, 1, 2, 2);
INSERT INTO `edubootstrap`.`courses_users` (`id`, `course_id`, `user_id`, `status_id`) VALUES (3, 2, 2, 3);

COMMIT;
