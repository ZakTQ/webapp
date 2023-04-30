<?php
session_start();
if(isset($_SESSION['user'])){
    echo $_SESSION['user'];
}
echo $_SESSION['user'];
?>

<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>сайт магазин</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="products">меню</a>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                войти / регистрация
                            </button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacts">контакты</a>
                        </li>
                </div>
            </div>
        </nav>

        <!-- Modal -->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Войти в аккаунт</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- вход в логин -->
                        <form action="action.php" method="post">
                            <div class="mb-3">
                                <label class="form-label">Логин</label>
                                <input type="text" class="form-control" id="login" name="login">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Запомнить меня</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Войти</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button> -->
                        <a href="registration">
                            Регистрация аккаунта
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->

    </div>