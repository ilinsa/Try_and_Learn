<?php
session_start();
if(isset($_GET['login']))
    $login=$_GET['login'];
else
    $login=$_SESSION['login'];
unlink($_SERVER['DOCUMENT_ROOT']."/server/stored_files/".$login."/".$_GET['file']);
//print_r($_POST);
header("Location: http://localhost:8000/public/filereview.php");
