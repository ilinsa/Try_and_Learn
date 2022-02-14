<?php
if(isset($_POST["add"]))
{
$a=$_POST["a"];
$b=$_POST["b"];
print "При A=$a и B=$b сумма A+B=".($a+$b);
}
if(isset($_POST["divide"]))
{
    $s=$_POST["string"];
    print "Строка: $s<br>";
    print "Слова строки: ";
    $s=explode(" ",$s);
    foreach($s as $word)
        print "<br>".$word;
}
if(isset($_POST["lbutton"])){
    $login=$_POST["login"];
    $password=$_POST["password"];
    print "Ваш логин: $login<br>";
    print "Ваш пароль: $password";
}