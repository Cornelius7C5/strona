CREATE TABLE answers (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
pathUrl TEXT NOT NULL,
text TEXT NOT NULL,
type VARCHAR(10)
)

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

