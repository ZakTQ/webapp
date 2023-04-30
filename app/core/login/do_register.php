<!-- ссылка на материал https://habr.com/ru/articles/665602/ -->

<?php

include '../Database.php';

$db = Database::getInstance();
Database::setCharsetEncoding();

$stmt = $db->prepare("SELECT * FROM `users` WHERE `login` = :login");
$stmt->execute(['login' => $_POST['login']]);


if ($stmt->rowCount() > 0) {
    echo ('Это имя пользователя уже занято.');
    header('Location: /');
    die;
}

$stmt = $db->prepare("INSERT INTO `users` (`login`,`password`) VALUES (:login, :password)");

$stmt->execute([
    'login' => $_POST['login'],
    'password' => $_POST['password'],

    // 'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
]);


header('Location: /');
