<?php
    session_start();
    if(isset($_SESSION['login']))
    {
        if($_SESSION['login']=='admin')
        {
            header('Location: http://localhost:8000/public/admin.php');
        }
        else
        {
            header('Location: http://localhost:8000/public/user.php');
        }
        exit();
    }
    require "public/header.php";

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style.css">
    <title>Файлообменный сервис</title>
</head>
<body>
    <div class="greeting">
    <p>Добро пожаловать на сайт!</p>
    </div>
    <div class="instruction">
    <p>Для доступа к файлам необходимо авторизоваться.</p>
    </div>
    <div class="loginform">
    <form action="server/login.php" method="POST">
        <label>Введите имя пользователя:</label>
        <input type="text" name="login"><br>
        <label>Введите пароль:</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Войти">
    </form>
    </div>
</body>
</html>
