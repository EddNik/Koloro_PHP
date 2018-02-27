<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js">
    </script>
</head>

<body>
<div class="container">

    <div class="span10 offset1">
        <div class="row">
            <h4>Внесение информации о менеджере</h4>
        </div>
        <!--        <form role="form" data-toggle="validator">-->
        <form class="form-horizontal" action="../../controller/managerController/insert.php" method="post">
            <div class="control-group <?php echo !empty($nameError) ? 'error' : ''; ?>">
                <label class="control-label">Имя</label>
                <div class="controls">
                    <input name="name_manager" type="text" placeholder="name"
                           value="<?php echo !empty($name) ? $name : ''; ?>">
                    <?php if (!empty($nameError)): ?>
                        <span class="help-inline"><?php echo $nameError; ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($emailError) ? 'error' : ''; ?>">
                <label class="control-label">Email Address</label>
                <div class="controls">
                    <input name="email" type="text" placeholder="email"
                           value="<?php echo !empty($email) ? $email : ''; ?>">
                    <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError; ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($mobileError) ? 'error' : ''; ?>">
                <label class="control-label">Mobile Number</label>
                <div class="controls">
                    <input name="phone" type="text" placeholder="phone"
                           value="<?php echo !empty($mobile) ? $mobile : ''; ?>">
                    <?php if (!empty($mobileError)): ?>
                        <span class="help-inline"><?php echo $mobileError; ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($companyError) ? 'error' : ''; ?>">
                <label class="control-label">Компания</label>
                <div class="controls">
                    <input name="company" type="text" placeholder="company"
                           value="<?php echo !empty($company) ? $company : ''; ?>">
                    <?php if (!empty($companyError)): ?>
                        <span class="help-inline"><?php echo $companyError; ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($fotoError) ? 'error' : ''; ?>">
                <label class="control-label">Фотография</label>
                <div class="controls">
                    <input name="image" type="file" placeholder="foto"
                           value="<?php echo !empty($foto) ? $foto : ''; ?>">
                    <INPUT TYPE="hidden" name="MAX_FILE_SIZE" value="1000000">

                    <?php if (!empty($fotoError)): ?>
                        <span class="help-inline"><?php echo $fotoError; ?></span>
                    <?php endif; ?>
                    <input type="submit" value="Загрузить"/>
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-success">Создать</button>
                <a class="btn" href="../../controller/managerController/index.php">Назад</a>
            </div>
        </form>

</body>
</html>

