<?php
session_start();
require_once 'vendor/user.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Авторизация</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="assets/js/ajax.js"></script>
</head>
<body>
<?php require "header.php"; ?>
<div class="container">
<form method="POST" id="ajax_form" action="">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <input type="button" id="btn_auth" value="Отправить" class="registerbtn" />
</div>
    <?php require "footer.php"; ?>

</body>
</html>
