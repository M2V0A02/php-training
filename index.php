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
    $result = 0;
    while ($result != 14)
    {
        $a = rand(0, 10);
        $b = rand(0, 10);
        $c = rand(0, 10);
        $result = $a + $b + $c;            
    }
    echo $result;
?>
</body>
</html>