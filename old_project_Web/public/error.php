<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style.css">
    <title>Ошибка авторизации</title>
</head>
<body>
<?php
        require "header.php";
    ?>
        <div class="greeting">
    <p>Неверный логин и/или пароль. Вы будете возвращены на главную страницу.</p>
    
    </div>
    <?php
    header('Refresh: 5; url=http://localhost:8000/');
    ?>
</body>
</html>
