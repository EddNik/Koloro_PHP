<?php
require_once 'model/Database.php';

$projectSelected = new Database();
$projectSelected->updateTables();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

    <h4>Блок Менеджер</h4>
    <a class="btn btn-primary btn-lg active" href="controller/managerController/index.php" role="button">Переход к редактированию менеджеров &raquo;</a>
    <a class="btn btn-primary btn-lg active" href="controller/managerController/read.php" role="button">Создать страницу с выводом списка менеджеров &raquo;</a>

    <h4>Блок Проект</h4>
    <a class="btn btn-primary btn-lg active" href="controller/projectsController/index.php" role="button">Переход к редактированию проектов &raquo;</a>
    <a class="btn btn-primary btn-lg active" href="controller/projectsController/read.php" role="button">Создать страницу с выводом списка проектов, &raquo;</a>
</div>
</body>
</html>