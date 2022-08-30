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

    function __construct($name, $status)
    {
        $this->name = $name;
        $this->status = $status;
    }

    public function getStatus()
    {
        print $this->name . $this->status;
    }
}

class Moderator extends User{

}

$m = new Moderator('egor', 'on');
$m->getStatus();
?>
</body>
</html>