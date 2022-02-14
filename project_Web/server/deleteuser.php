<?php
session_start();
require __DIR__."/../library/dbconnect.php";
if($_SESSION['login']!='admin')
    exit();
$login=$_GET['login'];
$deldir=$_SERVER['DOCUMENT_ROOT']."\server\stored_files\\$login";
function recursiveRemoveDir($dir) {
	$includes = glob($dir.'/{,.}*', GLOB_BRACE);
	$systemDots = preg_grep('/\.+$/', $includes);
	foreach ($systemDots as $index => $dot) 	
		unset($includes[$index]);
	foreach ($includes as $include) 
    {
		if(is_dir($include) && !is_link($include)) 
			recursiveRemoveDir($include);
		else
			unlink($include);
    }
	    rmdir($dir);
}
recursiveRemoveDir($deldir);
$logdb->removeUser($login);
header('Location: http://localhost:8000/public/userconfig.php');