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
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мои файлы</title>
</head>
<body>
<div class="wrapper">
<div class="fileform">
<form enctype="multipart/form-data" action="/../server/sendfile.php" method="POST">
    <legend>Загрузить файл:</legend>
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    <input name="userfile" type="file" />
    <br><label for="is_public">Общий доступ</label>
    <input type="checkbox" name="is_public">
    <br><label for="rewrite">Перезаписывать</label>
    <input type="checkbox" name="rewrite">
    <input type="submit" name="sendfile" value="Загрузить" />
</form>
</div>


<div class="fileitem">
<h4 align="center">Ваши файлы:</h4>
    <ul>
    <?php
    require __DIR__."/../library/filehandle.php";
    $login=$_SESSION['login'];
    $a=getUserFilesList($login);
    foreach($a as $file)
        {
            if(strlen($file)>2)
            {
            $f=basename($file);
            $fs='http://localhost:8000'.explode("_Web", $file)[1];
            $fd="/../server/deletefile.php?file=$file";
            print "<li><a href=$fs download>$f</a><a href=$fd><span class='delmark'>удалить</span></a><br></li>";
            }
        }
    ?>
</div>

<div class="fileitem">
<span class="corners-top"><span></span></span>
<h4 align="center">Общие файлы:</h4>
<ul>
    <?php
    //$login='shared';
    $b=getSharedFilesList();
    foreach($b as $file)
        {
            if(strlen($file)>2)
            {
                $f=basename($file);
                $fs='http://localhost:8000'.explode("_Web", $file)[1];
                $fd="/../server/deletefile.php?file=$file&act=mov";
                print "<li><a href=$fs download>$f</a>";
                if(checkFileObsession($file, $login))
                    print "<a href=$fd'><span class='delmark'>удалить</span></a>";
                print "<br></li>";
            }
        }
    require "footer.php";
    ?>

</div>
</div>
</body>
</html>
