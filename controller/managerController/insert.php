<?php
require_once '../../model/Manager.php';
require_once '../../model/Database.php';

if (!empty($_POST["name_manager"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["company"])) {
    $insert = new Manager();
    $insert->insert($_POST["name_manager"], $_POST["email"], $_POST["phone"], $_POST["company"], $_FILES['userfile']['size']);
    header("Location: ../managerController/index.php?");
}
require_once '../../view/manager/insertForm.php';
