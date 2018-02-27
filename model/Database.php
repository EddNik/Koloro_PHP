<?php

class  Database
{
//    private static $db_host = 'localhost';
//    private static $dbUserName = 'root';
//    private static $dbPassword = 'root';
//    private static $dbName = 'koloro';

    private static $db_host = 'sql302.epizy.com';
    private static $dbUserName = 'epiz_21688018';
    private static $dbPassword = 'pass4edik';
    private static $dbName = 'epiz_21688018_koloro';

    private static $pdo_con = null;
    protected $tableManagerProject = 'manager_project';

    public static function disconnect()
    {
        self::$pdo_con = null;
    }

    public function updateTables()
    {
        $pdo_conn = self::getConnectionDB();
        $del = "TRUNCATE TABLE manager_project";
        $pdo_conn->prepare($del)->execute();
        $sql = "INSERT INTO $this->tableManagerProject (manager_id, project_id) SELECT m.id, p.id
          FROM manager m, project p WHERE m.name_manager = p.performer;";
        $pdo_statement = $pdo_conn->prepare($sql);
        $pdo_statement->bindValue(":manager_id", 1);
        $pdo_statement->execute();

    }

    public function getConnectionDB()
    {
        try {
            self::$pdo_con = new PDO("mysql:host=" . self::$db_host . ";" . "dbname=" . self::$dbName, self::$dbUserName, self::$dbPassword);
            return self::$pdo_con;
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
    }

}