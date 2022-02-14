<?php
require __DIR__."\..\library\dbconnect.php";
$logdb->removeUser($_GET['login']);
header('Location: http://localhost:8000/public/userconfig.php');