<?php session_start();
;?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Регистрация</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="assets/js/ajax.js"></script>
</head>
<body>
<?php require "header.php"; ?>
<div class="container">
    <form action="" method="post" id="ajax_form_reg" enctype="multipart/form-data">
        <label >Имя</label>
        <input type="text" name="first_name" placeholder="Введите свое  имя">
        <label >Фамилия</label>
        <input type="text" name="last_name" placeholder="Введите свою фамилию">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес своей почты">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <input type="button" id="btn_reg" value="Отправить" class="registerbtn" />
</div>

<?php require "footer.php"; ?>
</body>
</html>

