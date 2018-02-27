<?php

require_once '../../model/Database.php';
require_once '../../model/Manager.php';

$del = new Manager();
$result = $del->delete($_GET['id']);
header("Location: ../managerController/index.php?");
