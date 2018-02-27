<?php
require_once '../../model/Database.php';
require_once '../../model/Projects.php';

if (!empty($_POST["name_project"]) && !empty($_POST["price"]) && !empty($_POST["performer"]) && !empty($_POST["startDate"]) && !empty($_POST["endDate"])) {
    $insert = new Projects();
    $insert->insert($_POST["name_project"], $_POST["price"], $_POST["performer"], $_POST["startDate"], $_POST["endDate"]);
    header("Location: ../projectsController/index.php?");
}

$startDate = date("Y-m-d H:i:s", time());
$endDate = date("Y-m-d H:i:s", time() + 8600);
require_once '../../view/projects/insertForm.php';




