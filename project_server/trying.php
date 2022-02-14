<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="trying.css">
    <title>Document</title>
</head>

<body>
<form action="trying.php" method="post">
<label for="receiver">Receiver:</label>
<br>
    <input type="text" name="receiver">   
    <br>
    <label for="message">Type your message here:</label>
    <br>
    <textarea name="message" rows="10" cols="30"></textarea>
    <br>
    <button>Send</button>
</form>
    <table>
        <?php
    $a=['There', 'lived','a','certain','main','in','Russia','long','ago'];
    foreach($a as $item)
        //print "<tr><td>$item</td></tr>";
        
    
    
?>
</table>
</body>

</html>