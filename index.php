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

class User {
    private static $name;

    public static function setName($name1) {
        self::$name = $name1;
    }
    public static function getName() {
        return self::$name;
    }
}
User::setName('Ivan');
echo User::getName();
User::setName('Vlad');
echo User::getName();
?>
</body>
</html>