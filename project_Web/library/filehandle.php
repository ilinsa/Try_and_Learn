<?php
require "dbconnect.php";
    
function getUserFilesList($login)
{   
    $personal=glob($_SERVER['DOCUMENT_ROOT']."\server\stored_files\\$login\*.*");
    $shared=glob($_SERVER['DOCUMENT_ROOT']."\server\stored_files\\$login\shared\*.*");
    
    
    /*foreach($personal as $p)
    {
        foreach($shared as $s)
        {
            if(sha1_file($p)==sha1_file($s))
            {
                //print $p." and ".$s." are the same";
                unset($personal[array_search($p,$personal)]);
            }
        }   
    }*/
    //foreach($personal as $p)
        //$personal[array_search($p,$personal)]=basename($p);
    //foreach($shared as $s)
        //$shared[array_search($s,$shared)]=basename($s);
    return array_merge($personal,$shared);
}
//$cc=getUserFilesList('admin');
//print explode("_Web",$cc[0])[1];
function getSharedFilesList()
{
    $shared=[];
    $logdb = new DB_connect;
    $login_list=$logdb->getLoginList();

    foreach($login_list as $login)
    {
        $shared=array_merge($shared,glob($_SERVER['DOCUMENT_ROOT']."\server\stored_files\\$login\shared\*.*"));
    }

    return $shared;
}
function checkFilePresence($file, $login)
{
    $shared=getSharedFilesList();
    $personal=getUserFilesList($login);
    for($i=0;$i<count($shared);++$i)
        {
            $shared[$i]=basename($shared[$i]);
        }
    for($i=0;$i<count($personal);++$i)
        {
            $personal[$i]=basename($personal[$i]);
        }  

    if(in_array($file, $shared) or in_array($file, $personal))
        return True;
    return False;
}
function checkFileObsession($file, $login)
{

    $personal=getUserFilesList($login);

    /*for($i=0;$i<count($personal);++$i)
        {
            $personal[$i]=basename($personal[$i]);
        }*/  

    if(in_array($file, $personal))
        return True;
    return False;
}