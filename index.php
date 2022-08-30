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
    public $id = 5;
    public $d = "d";
    function __clone()
    {
        $this->id = 0;
    }

    // не работает с публичными полями
    function __get($variable)
    {
        echo "You get {$variable} ";
    }

    //не работает с публичными полями
    public function __set($name, $value)
    {
        print "Установка '$name' в '$value'\n";
        $this->data[$name] = $value;
    }
}
$obj = new User();
$obj->a;
?>
</body>
</html>