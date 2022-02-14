<?php
session_start();
if(isset($_GET['login']))
    $login=$_GET['login'];
else
    $login=$_SESSION['login'];
if(isset($_GET['act']))
{
    rename($_GET['file'], $_SERVER['DOCUMENT_ROOT']."\server\stored_files\\$login\\".basename($_GET['file']));
}
else
    unlink($_GET['file']);
header("Location: http://localhost:8000/public/filereview.php");
