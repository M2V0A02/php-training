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
    $arr = array(1,2,3,4,10,100,3,4987,6,7,8,9);
    echo max($arr);
    $max = $arr[0];
    foreach($arr as $item)
        if ($max < $item) $max = $item;
    echo $max;
?>
</body>
</html>