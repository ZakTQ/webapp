<?php

session_start();

require_once './app/core/Database.php';
require_once './app/core/login/Loginup.php';

if (isset($_POST['login'])) {
    $login = $_POST['login'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

$select = new Loginup();
$result = $select->get_data($login, $password);


$_SESSION['name'] = $result['name'];

header('Location: /');