<?php
session_start();
require_once 'user.php';
include("bd_connect.php");

$check_correct =true;

foreach ($_POST as $key => $value) {
    if ($value === '')
        $check_correct =false;
}
if ($_POST['password'] != $_POST['password_confirm'] ){
    $check_correct = false;
}


if ($check_correct == true)  {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    $user = user::create()->setRegistraition($first_name, $last_name, $login,$email,$password,$password_confirm);

    $user->registration_user();


}