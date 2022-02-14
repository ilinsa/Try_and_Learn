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
    <div class="numform">
        <h2>Введите слагаемые:</h2>
        <form action="output.php" method="post">
            <div class="field">
                <label for="a">A=:</label>
                <input type="number" name="a">
            </div>
            <div class="field">
                <label for="b">B=:</label>
                <input type="number" name="b">
            </div>
            <div class="button">
                <input type="submit" name="add" value="Сложить">
            </div>
        </form>
    </div>

</body>
</html>