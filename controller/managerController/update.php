<?php

require_once '../../model/Database.php';
require_once '../../model/Manager.php';

if (!empty($_POST["name_manager"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["company"])) {
    $update = new Manager();
    $update->update($_POST["name_manager"], $_POST["email"], $_POST["phone"], $_POST["company"], $_POST["id"]);
    header("Location: ../managerController/index.php?");
}
require_once '../../view/manager/updateForm.php';
