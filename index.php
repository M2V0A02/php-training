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
    class User{
        static private $blood = 5;
        static public function insertBlood($litr)
        {
            self::$blood += $litr;
        }
        static public function showBlood()
        {
            echo self::$blood;
        }
    }
    User::showBlood();
    User::insertBlood(3);
    User::showBlood();
?>
</body>
</html>