<?php
require_once '../../model/Database.php';
require_once '../../model/Projects.php';

$selected = new Projects();
$result = $selected->show($_GET['id']);
$projects = $selected->read($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">

    <div class="span10 offset1">
        <div class="row">
            <h4>Информация о менеджерах проекта </h4>
        </div>

        <div class="form-horizontal">
            <div class="control-group">
                <label class="control-label">Название Проекта</label>
                <div class="controls">
                    <label class="checkbox">
                        <?php echo $result['name_project']; ?>
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Кто из менеджеров участвует</label>
                <div class="controls">
                    <label class="checkbox">
                        <?php
                        foreach ($projects as $row) {
                            echo '<tr>';
                            echo '<td>' . $row['name_manager'] . '</td>';
                            echo ' ';
                            echo '<tr>';
                        }
                        ?>
                    </label>
                </div>
            </div>
            <div class="form-actions">
                <a class="btn" href="../../index.php">На главную</a>
            </div>

        </div>
    </div>

</div> <!-- /container -->
</body>
</html>