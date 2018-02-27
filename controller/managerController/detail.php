<?php
require_once '../../model/Database.php';
require_once '../../model/Manager.php';

$selected = new Manager();
$result = $selected->show($_GET['id']);
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
            <h4>Информация о менеджере</h4>
        </div>

        <div class="form-horizontal">
            <div class="control-group">
                <label class="control-label">Имя Менеджера</label>
                <div class="controls">
                    <label class="checkbox">
                        <?php echo $result['name_manager']; ?>
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Email Address</label>
                <div class="controls">
                    <label class="checkbox">
                        <?php echo $result['email']; ?>
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Mobile Number</label>
                <div class="controls">
                    <label class="checkbox">
                        <?php echo $result['phone']; ?>
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Компания</label>
                <div class="controls">
                    <label class="checkbox">
                        <?php echo $result['company']; ?>
                    </label>
                </div>
            </div>
            <div class="form-actions">
                <a class="btn" href="../managerController/index.php">Назад</a>
            </div>

        </div>
    </div>

</div> <!-- /container -->
</body>
</html>