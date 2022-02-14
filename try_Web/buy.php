<?php
    $q=$_POST['quantity'];
    $prod=$_POST['choosen'];
    $price=$_POST['price'];
    $sum=$q*$price;
    print "$q $prod was ordered, the total sum is \$$sum";