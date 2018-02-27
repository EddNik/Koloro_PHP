<?php

class Projects
{
    private $table_project = 'project';

    public function insert($name_project, $price, $performer, $startDate, $endDate)
    {
        $pdo_conn = (new Database())->getConnectionDB();
        $sql = "INSERT INTO  $this->table_project(name_project, price, performer, startDate, endDate ) VALUES ( :name_project, :price, :performer, :startDate, :endDate)";
        $pdo_statement = $pdo_conn->prepare($sql);
        $pdo_statement->bindValue(":name_project", $name_project);
        $pdo_statement->bindValue(":price", $price);
        $pdo_statement->bindValue(":performer", $performer);
        $pdo_statement->bindValue(":startDate", $startDate);
        $pdo_statement->bindValue(":endDate", $endDate);
        $pdo_statement->execute();
    }

    public function update($name_project, $price, $performer, $startDate, $endDate, $id)
    {
        $pdo_conn = (new Database())->getConnectionDB();
        $sql = "UPDATE  $this->table_project SET name_project = :name_project, price = :price, performer = :performer, startDate = :startDate, endDate = :endDate  WHERE id = :id";
        $pdo_statement = $pdo_conn->prepare($sql);
        $pdo_statement->bindValue(":id", $id);
        $pdo_statement->bindValue(":name_project", $name_project);
        $pdo_statement->bindValue(":price", $price);
        $pdo_statement->bindValue(":performer", $performer);
        $pdo_statement->bindValue(":startDate", $startDate);
        $pdo_statement->bindValue(":endDate", $endDate);
        $pdo_statement->execute();
    }

    public function delete($id)
    {
        $pdo_conn = (new Database())->getConnectionDB();
        $sql = "DELETE from  $this->table_project WHERE id = :id";
        $pdo_statement = $pdo_conn->prepare($sql);
        $pdo_statement->bindValue(":id", $id);
        $pdo_statement->execute();
    }
    public function select()
    {
        $pdo_conn = (new Database())->getConnectionDB();
        $sql = "SELECT * FROM  $this->table_project";
        $pdo_statement = $pdo_conn->prepare($sql);
        $pdo_statement->execute();
        return $result = $pdo_statement->fetchAll();
    }

    public function show($id)
    {
        $pdo_conn =  (new Database())->getConnectionDB();
        $sql = "SELECT * FROM $this->table_project where id = :id";
        $pdo_statement = $pdo_conn->prepare($sql);
        $pdo_statement->bindValue(":id", $id);
        $pdo_statement->execute();
        return $result = $pdo_statement->fetch(PDO::FETCH_ASSOC);

    }
    public function read($id)
    {
        $pdo_conn =  (new Database())->getConnectionDB();
        $sql = "SELECT name_manager FROM manager_project
        INNER JOIN manager ON manager_project.manager_id = manager.id
         INNER JOIN project ON  manager_project.project_id = project.id
         where project.id = :id";
        $pdo_statement = $pdo_conn->prepare($sql);
        $pdo_statement->bindValue(":id", $id);
        $pdo_statement->execute();
        return $result = $pdo_statement->fetchAll();

    }

}