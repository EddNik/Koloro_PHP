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
        <h4>Редактирование Менеджеров</h4>
    </div>
    <div class="row">
        <p>
            <a href="../../controller/managerController/insert.php" class="btn btn-success">Создать</a>
        </p>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Имя Менеджера</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>Компания</th>
                <!-- <th>Фотография</th>-->
                <th>Действия</th>

            </tr>
            </thead>
            <tbody>
            <?php
            require_once '../../model/Database.php';
            require_once '../../model/Manager.php';

            $selected = new Manager();
            $result = $selected->select();

            foreach ($result as $row) {
                echo '<tr>';
                echo '<td>' . $row['name_manager'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['phone'] . '</td>';
                echo '<td>' . $row['company'] . '</td>';
//                echo '<td>'. $row['foto'] . '</td>';
                echo '<td width=250>';
                echo '<a class="btn btn-success" href="../../controller/managerController/update.php?id=' . $row['id'] . '">Изменить</a>';
                echo ' ';
                echo '<a class="btn btn-danger" href="../../controller/managerController/delete.php?id=' . $row['id'] . '">Удалить</a>';
                echo ' ';
                echo '<a class="btn " href="../../controller/managerController/detail.php?id=' . $row['id'] . '">Показать</a>';
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
</div> <!-- /container -->
</body>
</html>
