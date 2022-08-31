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
    $arr = array(3,8,15,25,16,11,10,5,7,30);
    for ($i = 0; $i <= count($arr) - 1; $i++)
    {
        if ($arr[$i] % 5 == 0) 
            echo $arr[$i] . "</br>";
    }
?>
</body>
</html>