<?php
    session_start();
    //$_SESSION['login']=$_GET['login'];
    require "header.php";
        if(!isset($_SESSION['login']))
    {
        print '<p align="center">Вы не авторизованы</p>
        <div align="center">
        <form method="POST" action="/../">
        <input type="submit" value="На главную">
        </form>
        </div>';
        exit();
    }
    /*    if($_SESSION['login']!=$_GET['login'])
    {
        print '<p align="center">У вас нет прав доступа к этой странице</p>';
        print $_SESSION['login'];
        exit();
    }*/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style.css">
    <title>Пользователь</title>
</head>
<body>
    <div class="greeting">
        <p>Привествуем, 
            <?php
            print $_SESSION['login'];
            ?>
        </p>
    </div>
    <div class="actionbutton">
    <form method="post" action="http://localhost:8000/public/filereview.php">
    <input type="submit" name="submitButton" value="Обзор файлов" />
    </form>
    </div>
        <div class="actionbutton">
    <form method="post" action="http://localhost:8000/server/exit.php">
    <input type="submit" name="submitButton" value="Выйти" />
    </form>
    </div>
</body>
</html>
