<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form enctype="multipart/form-data" action="File.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" name="mybut" value="Отправить файл" />
    <select name="alg" id="al">
        <option value="md5">md5</option>
        <option value="sha1">sha1</option>
        <option value="sha256">sha256</option>
        <option value="sha512">sha512</option>
        <option value="gost">gost</option>
    </select>
</form>
    <?php
    if(isset($_POST["mybut"]))
    {
    //move_uploaded_file($_FILES['userfile']['tmp_name'], "E:/Web/projnewbee/".$_FILES['userfile']['name']);
    //print hash_file($_POST['alg'], "E:/Web/projnewbee/".$_FILES['userfile']['name']);
    print hash_file($_POST['alg'], $_FILES['userfile']['tmp_name']);
    }
    ?>
</body>
</html>