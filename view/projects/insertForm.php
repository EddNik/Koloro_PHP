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
            <h4>Создать Проект</h4>
        </div>
        <form class="form-horizontal" action="../../controller/projectsController/insert.php" method="post">
            <div class="control-group <?php echo !empty($nameError) ? 'error' : ''; ?>">
                <label class="control-label">Название Проекта</label>
                <div class="controls">
                    <input name="name_project" type="text" placeholder="name project"
                           value="<?php echo !empty($name) ? $name : ''; ?>">
                    <?php if (!empty($nameError)): ?>
                        <span class="help-inline"><?php echo $nameError; ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($priceError) ? 'error' : ''; ?>">
                <label class="control-label">Стоимость Проекта</label>
                <div class="controls">
                    <input name="price" type="text" placeholder="price"
                           value="<?php echo !empty($price) ? $price : ''; ?>">
                    <?php if (!empty($priceError)): ?>
                        <span class="help-inline"><?php echo $priceError; ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($performerError) ? 'error' : ''; ?>">
                <label class="control-label">Менеджер</label>
                <div class="controls">
                    <input name="performer" type="text" placeholder="performer"
                           value="<?php echo !empty($performer) ? $performer : ''; ?>">
                    <?php if (!empty($performerError)): ?>
                        <span class="help-inline"><?php echo $performerError; ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($startDateError) ? 'error' : ''; ?>">
                <label class="control-label">Дата начала проекта</label>
                <div class="controls">
                    <input name="startDate" type="text" placeholder="startDate"
                           value="<?php echo !empty($startDate) ? $startDate : ''; ?>">
                    <?php if (!empty($startDateError)): ?>
                        <span class="help-inline"><?php echo $startDateError; ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($endDateError) ? 'error' : ''; ?>">
                <label class="control-label">Дата окончания</label>
                <div class="controls">
                    <input name="endDate" type="text" placeholder="endDate"
                           value="<?php echo !empty($endDate) ? $endDate : ''; ?>">
                    <?php if (!empty($endDateError)): ?>
                        <span class="help-inline"><?php echo $endDateError; ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-success">Создать</button>
                <a class="btn" href="../../controller/managerController/index.php">Назад</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>