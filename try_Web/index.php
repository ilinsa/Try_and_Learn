<?php   
        $lang=$_POST["lang"];
        if($lang!="en")
        $tr=parse_ini_file($lang.".ini");
    ?>
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
    <form action="" method="post">
        <label for="name"><?php print $tr["Name:"] ?? "Name:"?></label>
        <input type="text" name="name"><br>
        <label for="surname"><?php print $tr["Surname:"] ?? "Surname:"?></label>
        <input type="text" name="surname">
        <select name="lang" id="">
            <option value="en">English</option>
            <option value="ru"<?php if($lang=="ru") print "selected='selected'" ?>>Русский</option>
            <option value="fr"<?php if($lang=="fr") print "selected='selected'" ?>>Francais</option>
        </select>
        <input type="submit" value=<?php print $tr["Submit"] ?? "Submit"?>>
    </form>
    </div>
</body>
</html>