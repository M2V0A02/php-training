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
    function fac($x)
    {
        if ($x === 0){
            return 1;
        }
        else {
            return $x * fac($x - 1);
        }
    }
    echo fac(5);
?>
</body>
</html>