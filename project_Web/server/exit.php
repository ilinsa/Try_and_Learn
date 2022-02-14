<?php
session_start();
if(!isset($_GET['action']))
    session_destroy();
//unset($_SESSION['login']);
header('Location: http://localhost:8000/');
