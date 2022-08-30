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
abstract class User {
    public $name;
    public $status;

    abstract function __construct($name, $status);

}
abstract class User4 {
    public function getStatus()
    {
        print $this->name . $this->status;
    }
}
class Moderator extends User{
    function __construct($name, $status){

    }
}

interface User1 {
    // не может содержать свойства
    const B = 'Константа интерфейса';
    function __construct($name, $status);
    function getStatus();
}

interface User2 {
    // не может содержать свойства
    function getStatus();
}

class Moderator1 implements User1, User2 {

    function __construct($name, $status)
    {
        $this->name = $name;
        $this->status = $status;
    }
    function getStatus()
    {
        print $this->name . $this->status;
    }
}

$m = new Moderator1('egor', 'on');
$m->getStatus();
?>
</body>
</html>