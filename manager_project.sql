CREATE TABLE manager_project (
  manager_id  int NOT NULL,
  project_id    int NOT NULL,
  PRIMARY KEY (manager_id, project_id),
    FOREIGN KEY (manager_id)
    REFERENCES manager(id) ON DELETE CASCADE,
    FOREIGN KEY (project_id)
    REFERENCES project(id) ON DELETE CASCADE
) ENGINE = InnoDB;