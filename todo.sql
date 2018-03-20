CREATE DATABASE IF NOT EXISTS `todo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `todo`;

DROP TABLE IF EXISTS `lists`;
CREATE TABLE IF NOT EXISTS `lists` (
	`lists_id` int(11) NOT NULL AUTO_INCREMENT,
	`lists_description` varchar(50) DEFAULT NULL,
	PRIMARY KEY (`species_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

INSERT INTO `lists` (`lists_id`, `lists_name`) VALUES
(1, 'todo assignment'),
(2, 'stemwijzer assignment');

