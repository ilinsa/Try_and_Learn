<?php
$conn=mysqli_connect('localhost','root','9aluminum)','projectwebbase','3306');
/*$req='SELECT login FROM accounts';
$result=mysqli_query($conn,$req);
$data=mysqli_fetch_all($result, MYSQLI_ASSOC);
print_r($data[1]['login']);*/


function getLoginList()
{
    $conn=mysqli_connect('localhost','root','9aluminum)','projectwebbase','3306');
    $result=mysqli_query($conn,'SELECT login FROM accounts');
    $data=mysqli_fetch_all($result, MYSQLI_ASSOC);
    $login_list=[];
    for($i=0;$i<count($data);$i++)
    {
        array_push($login_list,$data[$i]['login']);
    }
    return $login_list;
}
print getLoginList();


function lookForLogin($login)
{
    
}