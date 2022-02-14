<?php
    session_start();
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
            if($_SESSION['login']!='admin')
    {
        print '<p align="center">У вас нет прав доступа к этой странице</p>
        <div align="center">
        <form method="POST" action="/../">
        <input type="submit" value="На главную">
        </form>
        </div>';
        exit();
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="userform">
        <form action="/server/adduser.php" method="POST">
        <legend>Учетные данные нового пользователя</legend>
            <label for="useraddname">Логин:</label>
            <input type="text" name="useraddname"><br>
            <label for="useraddpassword">Пароль:</label>
            <input type="password" name="useraddpassword"><br>
            <label for="useraddpassword2">Повторите ввод пароля:</label>
            <input type="password" name="useraddpassword2"><br>
            <input type="submit" value="Создать пользователя">
        </form>
    </div>
    <div class="userlist">
    <form>
        <legend>Список пользователей</legend>
    <ul>
    
    <?php
    require __DIR__."\..\library\dbconnect.php";
    $a=$logdb->getLoginList();
    unset($a[array_search('admin', $a)]);
    foreach($a as $login)
    {
        print "<li>".$login."<a href='/../server/deleteuser.php?login=".$login."'><span class='delmark'>удалить</span></a></li>";
    }
    
    ?>

    </ul>
    </form>
    </div>
</body>
</html>
