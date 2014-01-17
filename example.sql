CREATE DATABASE `example` COLLATE 'utf8_czech_ci';

CREATE TABLE `person` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL
) COMMENT='';

CREATE TABLE `person_notes` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `person_id` int(11) NOT NULL,
  `note` varchar(300) NOT NULL,
  FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE CASCADE
) COMMENT='';