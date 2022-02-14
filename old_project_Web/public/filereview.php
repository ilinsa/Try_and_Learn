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
    /*if($_SESSION['login']!=$_GET['login'])
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
    <title>Мои файлы</title>
</head>
<body>
<div class="wrappr">
<div class="fileform">
<form enctype="multipart/form-data" action="/../server/sendfile.php" method="POST">
    <legend>Загрузить файл:</legend>
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    <input name="userfile" type="file" />
    <br><label for="is_public">Общий доступ</label>
    <input type="checkbox" name="is_public">
    <input type="submit" name="sendfile" value="Загрузить" />
</form>
</div>



<!--<div class="fileitem">
<table><thead><caption>Ваши файлы:</caption></thead><tbody>
    <?php
    /*$login=$_SESSION['login'];
    $a=scandir($_SERVER['DOCUMENT_ROOT']."/server/stored_files/".$login);//linux separators
    //print $_SERVER['DOCUMENT_ROOT']."\server\stored_files\\".$login;
    foreach($a as $file)
        {
            if(strlen($file)>2)
            {
            print "<tr><td><a href='http://localhost:8000/server/stored_files/$login/$file' download>$file</a></td><td></td></tr>";
            }
        }*/
    ?>
    </tbody></table>
    <form action="/../server/deletefile.php" method="POST">
    <select name="delfile">
    <option value="" disabled selected>Выберите файл</option>
        <?php
        /*foreach($a as $file)
        {
            if(strlen($file)>2)
            {
                print "<option value='$file'>$file</option>";
            }
        }*/
        ?>
        <input type="submit" value="Удалить">
        <input type="submit" formaction="plot.php" value="Построить график">
    </select>

    </form>

</div>-->


<div class="fileitem">
<span class="corners-top"><span></span></span>
<h4 align="center">Ваши файлы:</h4>
		<p>
		</p><ul>
    <?php
    $login=$_SESSION['login'];
    $a=scandir($_SERVER['DOCUMENT_ROOT']."/server/stored_files/".$login);//linux separators
    //print_r($a);
    //print $_SERVER['DOCUMENT_ROOT']."\server\stored_files\\".$login;
    foreach($a as $file)
        {
            if(strlen($file)>2)
            {
            print "<li><a href='http://localhost:8000/server/stored_files/$login/$file' download>$file</a><a href='/../server/deletefile.php?file=".$file."'><span class='delmark'>удалить</span></a><br></li>";
            }
        }
    ?>
    <!--<form action="/../server/deletefile.php" method="POST">
    <select name="delfile">
    <option value="" disabled selected>Выберите файл</option>
        <?php
        foreach($a as $file)
        {
            if(strlen($file)>2)
            {
                print "<option value='$file'>$file</option>";
            }
        }
        ?>
        <input type="submit" value="Удалить">
        <input type="submit" formaction="plot.php" value="Построить график">
    </select>

    </form>-->

</div>

<div class="fileitem">
<span class="corners-top"><span></span></span>
<h4 align="center">Общие файлы:</h4>
		<p>
		</p><ul>
    <?php
    $login='shared';
    $a=scandir($_SERVER['DOCUMENT_ROOT']."/server/stored_files/shared");//linux separators
    //print_r($a);
    //print $_SERVER['DOCUMENT_ROOT']."\server\stored_files\\".$login;
    foreach($a as $file)
        {
            if(strlen($file)>2)
            {
            print "<li><a href='http://localhost:8000/server/stored_files/shared/$file' download>$file</a><a href='/../server/deletefile.php?file=$file&login=shared'><span class='delmark'>удалить</span></a><br></li>";
            }
        }
    ?>
    <!--<form action="/../server/deletefile.php" method="POST">
    <select name="delfile">
    <option value="" disabled selected>Выберите файл</option>
        <?php
        foreach($a as $file)
        {
            if(strlen($file)>2)
            {
                print "<option value='$file'>$file</option>";
            }
        }
        ?>
        <input type="submit" formaction="plot.php" value="Построить график">
    </select>

    </form>-->

</div>
















</div>
</body>
</html>
