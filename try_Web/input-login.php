<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="userform">
    <h3>Вход на сайт</h3>
    <form action="output.php" method="POST">
        <div class="field">
        <label>Логин:</label>
        <input type="text" name="login"><br>
        </div>
        <div class="field">
        <label>Пароль:</label>
        <input type="password" name="password"><br>
            </div>
            <div class="button2">
            <input type="submit" name="lbutton" value="Войти">
            </div>



    </form>
    </div>
</body>
</html>