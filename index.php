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
    $capitals = array("US" => "Washington", "UK" => "London", "Austria" => "Vienna");
    asort($capitals); // сортировка по значению
    ksort($capitals); // сортировка по ключу 
    sort($capitals); // сортировка по значению с удалением ключей.
?>
</body>
</html>