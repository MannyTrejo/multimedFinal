CREATE TABLE IF NOT EXISTS admin (
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS datos (
  name VARCHAR(255) NOT NULL,
  age INT NOT NULL,
  major VARCHAR(255) NOT NULL,
  hours INT NOT NULL,
  sex VARCHAR(255) NOT NULL,
) ENGINE = INNODB;