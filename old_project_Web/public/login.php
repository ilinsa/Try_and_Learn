<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Вход</title>
</head>
<body>
    <h1>Введите логин и пароль</h1>
    <div class="form">
    <form action="user.php" method="post">
        <legend>Пользовательские данные</legend>
        <input type="text" name="login"><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Войти">
    </form>
    </div>
</body>
</html>