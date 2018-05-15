DROP TABLE IF EXISTS `#__congreso`;

CREATE TABLE IF NOT EXISTS `#__congreso` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(25) NOT NULL,
	`description` VARCHAR(25) NOT NULL,
	`link` VARCHAR(25) NOT NULL,
	`published` tinyint(4) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;