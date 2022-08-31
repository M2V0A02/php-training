<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="action.php" method="post" enctype="multipart/form-data">
    <input type="file" name="upload">
    <input type="submit" value="Загрузить">
</form>
<?php
    $num = '2';
    switch($num) {
        case "2":
            echo "two!";
        case "3":
            echo "three!";
        default:
            echo "shnu!";
            break;
    }


?>
</body>
</html>