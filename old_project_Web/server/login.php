<?php
session_start();
//$_SESSION['login']=$_POST['login'];
require __DIR__."\..\library\dbconnect.php";
//$logdb = new DB_connect;
$login=$_POST['login'];
if($login=='admin' and $logdb->checkPassword('admin', $_POST['password']))
{
    $_SESSION['login']=$login;
    //print_r($_POST);
    header('Location: http://localhost:8000/public/admin.php');
}
else if($logdb->checkLogin($login) and $logdb->checkPassword($login, $_POST['password']))
{
     $_SESSION['login']=$login;
    //print_r($_POST);
    header("Location: http://localhost:8000/public/user.php");
}
else
{
    header('Location: http://localhost:8000/');
    
}
