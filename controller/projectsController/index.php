<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <div class="row">
        <h4>Редактирование Проектов</h4>
    </div>
    <div class="row">
        <p>
            <a href="../../controller/projectsController/insert.php" class="btn btn-success">Создать</a>
        </p>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Название Проекта</th>
                <th>Стоимость</th>
                <th>Менеджер</th>
                <th>Дата начала проекта</th>
                <th>Дата окончания</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            <?php
            require_once '../../model/Database.php';
            require_once '../../model/Projects.php';

            $selected = new Projects();
            $result = $selected->select();
            foreach ($result as $row) {
                echo '<tr>';
                echo '<td>' . $row['name_project'] . '</td>';
                echo '<td>' . $row['price'] . '</td>';
                echo '<td>' . $row['performer'] . '</td>';
                echo '<td>' . $row['startDate'] . '</td>';
                echo '<td>' . $row['endDate'] . '</td>';
                echo '<td width=250>';
                echo '<a class="btn btn-success" href="../../controller/projectsController/update.php?id=' . $row['id'] . '">Изменить</a>';
                echo ' ';
                echo '<a class="btn btn-danger" href="../../controller/projectsController/delete.php?id=' . $row['id'] . '">Удалить</a>';
                echo '</td>';
                echo '</tr>';
            }
            Database::disconnect();
            ?>
            </tbody>
            <div class="form-actions">
                <a class="btn" href="../../index.php">На главную</a>
            </div>
        </table>
    </div>
</div>
</body>
</html>
