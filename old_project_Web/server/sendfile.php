<?php
session_start();
$login=$_SESSION['login'];
$fileTmpPath = $_FILES['userfile']['tmp_name'];
//$fileDir="$_SERVER['DOCUMENT_ROOT']/server/stored_files/$login/$_FILES['userfile']['name']";
if(isset($_POST['is_public']))
{
    $login='shared';
}
$fileDir=$_SERVER['DOCUMENT_ROOT']."/server/stored_files/".$login."/".$_FILES['userfile']['name'];
move_uploaded_file($fileTmpPath, $fileDir);
header("Location: http://localhost:8000/public/filereview.php");
