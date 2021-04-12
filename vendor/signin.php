<?php
session_start();
require_once 'user.php';
include("bd_connect.php");

$check_correct =true;
foreach ($_POST as $key => $value) {
    if ($value === '')
        $check_correct =false;
}


if ($check_correct == true) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $user= user::create()->setAuth($login,$password);
    $user->correct_user();


}