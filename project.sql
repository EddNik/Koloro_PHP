CREATE TABLE project (
  id    int AUTO_INCREMENT NOT NULL,
  name_project  varchar(50) CHARACTER SET utf8 NOT NULL,
  price   decimal(15,2),
  performer varchar(50) CHARACTER SET utf8 NOT NULL,
  startDate  DATETIME ,
  endDate    DATETIME ,
  PRIMARY KEY (id)
) ENGINE = InnoDB;