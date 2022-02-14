<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
if (isset($_POST['compute'])) 
{
    $power = $_POST['power'];
    $L = $_POST['L'];
    $R = $_POST['R'];
    $R_pow=$R**$power;
    $C = $_POST['C'];
    $O = $_POST['O'];

    $tau = round(2 * $L / $R_pow, 4);
    $T = round(2 * 3.1415926 * sqrt($L * $R_pow), 4);
    $top = ($tau < 1) ? 0 : 100;
}
?>

<body>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col1_1">
                    <img src="Inter.png" alt="Scheme">
                </div>
                <div class="col1_2">

                </div>
                <div class="col1_3">
                    <img src="Inter.png" alt="Scheme">
                </div>
            </div>
            <div class="row">
                <div class="col2_1">
                    <form action="index.php" method="post">
                        <label>L= <input type="number" name="L" value=<?php print $L ?? 20 ?> step="0.1"> мГн</label>
                        <label class="s">R= <input type="number" name="R" value=<?php print $R ?? 0.05 ?> step="0.01"> мГн</label><br>
                        <label>C= <input type="number" name="C" value=<?php print $C ?? 20 ?> step="0.1"> мГн</label>
                        <label class="s">Q= <input type="number" name="O" value=<?php print $O ?? 10 ?> step="0.1"> мГн</label><br>
                        <input type="range" name="power" min="-2" max="2" value=<?php print $power ?? 0; ?>><br>
                        <input type="submit" name="compute" value="Вычислить">
                    </form>
                </div>
                <div class="col2_2">
                    We <progress max="100" value=<?php print $top; ?>></progress><br>
                    Wm<progress max="100" value=<?php print 100 - $top; ?>></progress><br>
                    τ=2L/R= <?php if (isset($_POST['compute'])) print $tau; ?><br>
                    T=2π√(LR)= <?php if (isset($_POST['compute'])) print $T; ?><br>
                </div>
            </div>
        </div>
    </div>

</body>

</html>