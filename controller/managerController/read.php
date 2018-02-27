<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("button").click(function () {
                var id = $(this).data('value');
                $("#msg").load("../../controller/managerController/show.php?id=" + id);
            });
        });
    </script>
</head>

<body>
<div id="msg" class="container">
    <div class="row">
        <h4>Список Менеджеров</h4>
    </div>
    <div class="row">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Имя Менеджера</th>
            </tr>
            </thead>
            <tbody>
            <?php
            require_once '../../model/Database.php';
            require_once '../../model/Manager.php';

            $selected = new Manager();
            $result = $selected->select();
            foreach ($result as $row) {
                ?>
                <tr>
                    <td>
                        <button data-value='<?php echo $row['id']; ?>'><?php echo $row['name_manager']; ?>
                            <br>
                            <span class="help-inline">в каких проектах участвует</span>
                        </button>

                    </td>
                </tr>
                <?php
            }
            Database::disconnect();
            ?>
            </tbody>
        </table>
    </div>
    <div class="form-actions">
        <a class="btn" href="../../index.php">На главную</a>
    </div>
</div> <!-- /container -->
</body>
</html>