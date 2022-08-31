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
    $my_array = ['h', 'e', 'l', 'l', 'o'];
    $my_array = array_reverse($my_array);
    print_r($my_array);
    $reversed = array();
    for ($i = 0; $i < count($my_array); $i++) array_unshift($reversed, $my_array[$i]);
    print_r($reversed);
    $str = "Turn Str";
    print($str);
    $str1 = '';
    for($i = strlen($str) - 1; $i >= 0; $i--) $str1 .= $str[$i];
    print($str1);
?>
</body>
</html>