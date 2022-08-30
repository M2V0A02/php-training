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
    function __construct($surname, $password)
    {
        $this->surname = $surname;
        $this->password = $password;
    }

    function info(){
        return "{$this->surname} {$this->password}";
    }
    public static function setName($name1) {
        self::$name = $name1;
    }
    public static function getName() {
        return self::$name;
    }
}
User::setName('Ivan');
echo User::getName();

class Moderator extends User {
    function __construct($id)
    {
        // вызвать конструктор родителя
        parent::__construct('volod', 'qwerty');
        $this->id = $id;
    }

    function info()
    {
        $st = parent::info();
        $st .= "{$this->id}";
        return $st;
    }

    function hello() {
        echo "Moderator is here";
    }
}
Moderator::setName('Vlad1');
$mod = new Moderator("1234");
echo $mod->info();
?>
</body>
</html>