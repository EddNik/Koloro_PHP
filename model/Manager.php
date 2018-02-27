<?php


class Manager
{
    private $table_manager = 'manager';

    public function insert($name_manager, $email, $phone, $company, $foto)
    {
        $pdo_conn = (new Database())->getConnectionDB();
        $sql = "INSERT INTO  $this->table_manager(name_manager, email, phone, company , foto) VALUES ( :name_manager, :email, :phone, :company, :foto)";
        $pdo_statement = $pdo_conn->prepare($sql);
        $pdo_statement->bindValue(":name_manager", $name_manager);
        $pdo_statement->bindValue(":email", $email);
        $pdo_statement->bindValue(":phone", $phone);
        $pdo_statement->bindValue(":company", $company);
        $pdo_statement->bindValue(":foto", $foto);
        $pdo_statement->execute();
    }

    public function update($name_manager, $email, $phone, $company, $id)
    {
        $pdo_conn = (new Database())->getConnectionDB();
        $sql = "UPDATE $this->table_manager SET name_manager = :name_manager, email = :email, phone = :phone, company = :company  WHERE id = :id";
        $pdo_statement = $pdo_conn->prepare($sql);
        $pdo_statement->bindValue(":id", $id);
        $pdo_statement->bindValue(":name_manager", $name_manager);
        $pdo_statement->bindValue(":email", $email);
        $pdo_statement->bindValue(":phone", $phone);
        $pdo_statement->bindValue(":company", $company);
        $pdo_statement->execute();

    }

    public function delete($id)
    {
        $pdo_conn = (new Database())->getConnectionDB();
        $sql = "DELETE from  $this->table_manager WHERE id = :id";
        $pdo_statement = $pdo_conn->prepare($sql);
        $pdo_statement->bindValue(":id", $id);
        $pdo_statement->execute();

    }

    public function select()
    {
        $pdo_conn = (new Database())->getConnectionDB();
        $sql = "SELECT * FROM $this->table_manager";
        $pdo_statement = $pdo_conn->prepare($sql);
        $pdo_statement->execute();
        return $result = $pdo_statement->fetchAll();
    }

    public function show($id)
    {
        $pdo_conn = (new Database())->getConnectionDB();
        $sql = "SELECT * FROM $this->table_manager where id = :id";
        $pdo_statement = $pdo_conn->prepare($sql);
        $pdo_statement->bindValue(":id", $id);
        $pdo_statement->execute();
        return $result = $pdo_statement->fetch(PDO::FETCH_ASSOC);

    }

    public function read($id)
    {
        $pdo_conn = (new Database())->getConnectionDB();
        $sql = "SELECT name_project FROM manager_project
        INNER JOIN manager ON manager_project.manager_id = manager.id
         INNER JOIN project ON  manager_project.project_id = project.id
         WHERE manager.id = :id";
        $pdo_statement = $pdo_conn->prepare($sql);
        $pdo_statement->bindValue(":id", $id);
        $pdo_statement->execute();
        return $result = $pdo_statement->fetchAll();

    }

}