<?php
session_start();
require __DIR__."\..\library\dbconnect.php";

$login=$_POST['login'];
if($login=='admin' and $logdb->checkPassword('admin', $_POST['password']))
{
    $_SESSION['login']=$login;
    header('Location: http://localhost:8000/public/admin.php');
}
else if($logdb->checkLogin($login) and $logdb->checkPassword($login, $_POST['password']))
{
     $_SESSION['login']=$login;
    header("Location: http://localhost:8000/public/user.php");
}
else
{
    header('Location: http://localhost:8000/');
    
}
