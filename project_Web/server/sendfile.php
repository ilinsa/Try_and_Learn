<?php
session_start();
require __DIR__."/../library/filehandle.php";
$login=$_SESSION['login'];
$fileTmpPath = $_FILES['userfile']['tmp_name'];
$filename=$_FILES['userfile']['name'];
$fileDir=$_SERVER['DOCUMENT_ROOT']."\server\stored_files\\".$login."\\".$filename;
$fileDirS=$_SERVER['DOCUMENT_ROOT']."\server\stored_files\\".$login."\shared\\".$filename;
//if((checkFilePresence($filename, $login) and !isset($_POST['rewrite'])) or (checkFilePresence($filename, $login) and isset($_POST['rewrite']) and !in_array($fileDirS, getSharedFilesList())))
if(checkFilePresence($filename, $login) and (!isset($_POST['rewrite']) or (isset($_POST['rewrite']) and !in_array($fileDirS, getSharedFilesList()))))
{
    $parts=explode(".",$filename);
    $ext=$parts[count($parts)-1];
    unset($parts[count($parts)-1]);
    $initname=implode($parts);
    $i=1;
    do
    {
        $tryname=$initname;
        $tryname=$tryname."($i)".".$ext";
        $i++;
    }
    while(checkFilePresence($tryname, $login));
    $filename=$tryname;   
}
if(isset($_POST['is_public']))
{
    $login=$login.'\shared';
}
$fileDir=$_SERVER['DOCUMENT_ROOT']."\server\stored_files\\".$login."\\".basename($filename);
move_uploaded_file($fileTmpPath, $fileDir);
header("Location: http://localhost:8000/public/filereview.php");