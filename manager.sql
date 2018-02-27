CREATE TABLE manager (
  id    int AUTO_INCREMENT NOT NULL,
  name_manager  varchar(50) CHARACTER SET utf8 NOT NULL,
  email varchar(50) CHARACTER SET utf8 ,
  phone varchar(15),
  company varchar(50) CHARACTER SET utf8 ,
  foto  BLOB ,
  PRIMARY KEY (id)
) ENGINE = InnoDB;