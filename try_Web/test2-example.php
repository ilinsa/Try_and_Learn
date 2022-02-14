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
    for($i=0;$i<10;++$i)
        echo "String output. 10 times<br>";

        $counter=6;
        do
        {
            echo "This string will be output 1 time<br>";
            $counter++;
        }
        while ($counter<5);

    $array=['Apple','Lemon', 'Cherry', 'Oranges'];
    foreach($array as $item)
        echo "You've chosen the fruit $item<br>";

    echo substr("Hello, world!!!",7,5), "<br>";
    echo substr("Hello, world!!!",7), "<br>";
    echo strpos("Hello world", "world"), "<br>";
    $a["Moscow"]=5000000;
    $a["Kiev"]=500000;
    $a["Paris"]=1000000;
    foreach($a as $key=>$value)
        echo $key.": ".$value."<br>";
    unset($a["Paris"]);
    foreach($a as $key=>$value)
        echo $key.": ".$value."<br>";
    print_r($a."<br>");
    ksort($a);
    print_r($a);
    echo "<br>";
    echo implode($a);
    echo "<br>";
    print_r(explode(" ",'H E L L O'));
    ?>
</body>
</html>