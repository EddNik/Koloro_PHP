<?php

require_once '../../model/Database.php';
require_once '../../model/Projects.php';

$del = new Projects();
$result = $del->delete($_GET['id']);

header("Location: ../projectsController/index.php?");
