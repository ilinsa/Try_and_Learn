<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<?php
$goods_list=['Apple' => "0.90",'Bike' => "129.90",'Pineapple' => "22.90",
'Bread loaf' => "14.90", 'Cell phone' => "199.90", 'Ball' => "9.90", 'Pencil set' => "1.90"];
foreach($goods_list as $key=>$value)
{
print '<div class="item">
        <form action="buy.php" method="post">
        <figure>
            <img src="apple.png" alt="Product image">
            <figcaption>'.$key.'</figcaption>
            <p>$'.($value).'</p>
        </figure>
        <input type="hidden" name="price" value='.$value.'>
        <input type="hidden" name="choosen" value='.$key.'>
        <label class="qlabel">Quantity:<input type="number"
         class="field" name="quantity" value="1" min="1" max="100" step="1"></label>
        <input  class="buybutton" type="submit"value="Buy now">
        </form>
    </div>';
}
?>
</body>
</html>