<?php
    require __DIR__."\..\library\dbconnect.php";
    //$logdb = new DB_connect;
    if($_POST['useraddpassword']==$_POST['useraddpassword2'] and $_POST['useraddpassword']!="" and $_POST['useraddname']!="")
    {
        $logdb->addUser($_POST['useraddname'], $_POST['useraddpassword']);
        if (!file_exists($_SERVER['DOCUMENT_ROOT']."/server/stored_files/".$_POST['useraddname'])) 
        {
            mkdir($_SERVER['DOCUMENT_ROOT']."/server/stored_files/".$_POST['useraddname'], 0777, true);
        }
    }
    header('Location: http://localhost:8000/public/userconfig.php');
