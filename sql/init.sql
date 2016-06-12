CREATE TABLE `users` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`email` varchar(50),
`password` char(128),
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `login_attempts` (
`user_id` int(11) NOT NULL,
`time` varchar(30)NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `categories` (
`id` int(6) unsigned NOT NULL AUTO_INCREMENT,
`name` varchar(30),
`code` varchar(10) ,
`parent` int(6) DEFAULT NULL,
PRIMARY KEY (`id`),
UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `answers` (
`id` int(6) unsigned NOT NULL AUTO_INCREMENT,
`pathUrl` text NOT NULL,
`text` text NOT NULL,
`type` varchar(10) DEFAULT NULL,
`assoc` text NOT NULL,
`fill` text NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `chaossquare_inz`.`categories` (`name`, `code`, `parent`) VALUES ('CZŁOWIEK', 'C', NULL);
INSERT INTO `chaossquare_inz`.`categories` (`name`, `code`, `parent`) VALUES ('POJECIA OGÓLNE', 'PO', NULL);
INSERT INTO `chaossquare_inz`.`categories` (`name`, `code`, `parent`) VALUES ('ZDROWIE', 'Z', NULL);
INSERT INTO `chaossquare_inz`.`categories` (`name`, `code`, `parent`) VALUES ('ŻYWNOŚĆ I POSIŁKI', 'ZIP', NULL);

INSERT INTO `chaossquare_inz`.`categories` (`name`, `code`, `parent`)
SELECT 'CZĘSCI CIALA', 'C-CIC', id FROM categories WHERE code like 'C';
INSERT INTO `chaossquare_inz`.`categories` (`name`, `code`, `parent`)
SELECT 'KOLORY', 'PO-K', id FROM categories WHERE code like 'PO';
INSERT INTO `chaossquare_inz`.`categories` (`name`, `code`, `parent`)
SELECT 'SZPITAL I LEKARZE', 'Z-SIL', id FROM categories WHERE code like 'Z';

INSERT INTO `chaossquare_inz`.`categories` (`name`, `code`, `parent`)
SELECT 'DESERY I NAPOJ', 'ZIP-DIN', id FROM categories WHERE code like 'ZIP';
INSERT INTO `chaossquare_inz`.`categories` (`name`, `code`, `parent`)
SELECT 'MIĘSO,NABIAŁ I ŻBOŻA', 'ZIP-MNZ', id FROM categories WHERE code like 'ZIP';
INSERT INTO `chaossquare_inz`.`categories` (`name`, `code`, `parent`)
SELECT 'OWOCE I WARZYWA', 'ZIP-OIW', id FROM categories WHERE code like 'ZIP';

