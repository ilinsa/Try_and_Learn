<?php
$connect= new mysqli("localhost","root","9aluminum)","base");
$res=$connect->query("SELECT * FROM sign_info");
print $res->fetch_assoc()["login"];
?>