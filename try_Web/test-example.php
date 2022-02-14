<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo 'Привет от PHP', "<br>";

echo 2014, "<br>";
$name="Victor";
$surname="Petrov";
$number=12775950;
$pi=3.14159265;
$hello="Hi all";
echo "Your name is ", $name, "<br>";//print can't do this
$a=5;
$b=20;
$c=125;
$summ=$a+$b+$c;
echo "Sum of the three numbers=", $summ, "<br>";
$capital="Moscow";
echo "The captial of Russia is ", $capital, "<br>";
echo "The captial of Russia is $capital", "<br>";
$apples=5;
$fruit="apples";
echo "The number of apples is ", $$fruit, "<br>";
echo "The number of apples is ${$fruit}", "<br>";
define("pi", 3.14);
echo "The math constant PI is ", pi, "<br>";
$bool=TRUE;
$int=100;
$string="The variable contains text";
$string2="4413";
$float=44.122;
$str="50000";
$new_str=(integer)$str;
echo $new_str+$new_str, "<br>";
echo "2+2=",2+2, "<br>";
echo "5-2=",5-2, "<br>";
echo "10*10=",10*10, "<br>";
echo "100/2=",100/2, "<br>";
echo "10%2=",10%2, "<br>";
echo "2**3=",2**3, "<br>";
echo "round(4.2)=",round(4.2), "<br>";
$n=$m=$v=3;
echo $n,$m,$v, "<br>";
$n++;
$v--;
echo $n,$m,$v;
$d="dir d:\\";//put
echo $d, "<br>";
$d="Hello";
$f=$d."world";
echo $f, "<br>";
$f.="!!!";
echo $f, "<br>";
$speed=80;
if($speed>=60)
{
    echo "Overspeeding!", "<br>";
    echo "Please slow down!", "<br>";
}
$speed=45;
if($speed!=60)
    echo "Your speed is within the norm", "<br>";
if($speed>35 && $speed<55)
    echo "Your speed is within the norm", "<br>";
else
    echo "Your is speed is not within the norm", "<br>";
    
$speed=80;
echo ($speed<=60) ? "The speed is within the norm<br>" : "Overspeeding!<br>";
switch($speed)
{
    case 80: echo "Your speed is 80 Km/h", "<br>"; break;
    case 55: echo "Your speed is 55 Km/h", "<br>"; break;
    default: echo "Your speed is within the norm", "<br>";
}



?>

</body>
</html>
