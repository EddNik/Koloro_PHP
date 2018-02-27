<?php

require_once '../../model/Database.php';
require_once '../../model/Projects.php';

if (!empty($_POST["name_project"]) && !empty($_POST["price"]) && !empty($_POST["performer"]) && !empty($_POST["startDate"]) && !empty($_POST["endDate"])) {
    $update = new Projects();
    $update->update($_POST["name_project"], $_POST["price"], $_POST["performer"], $_POST["startDate"], $_POST["endDate"], $_POST['id']);
    header("Location: ../projectsController/index.php?");
}
$startDate = date("Y-m-d H:i:s", time());
$endDate = date("Y-m-d H:i:s", time() + 12800);
require_once '../../view/projects/updateForm.php';
