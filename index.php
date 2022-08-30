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
trait Base {
    public function hello(){
        echo "Hello";
    }

    public function hello1(){
        echo "Hello2";
    }
}

trait Hello {
    public function hello(){
        echo "h3";
    }
    
    public function hello1(){
        echo "Hello4";
    }
}

Class Er 
{
    use Base, Hello {
        Base::hello insteadof Hello;
        Hello::hello1 insteadof Base;
    }
}

$er = new Er();
$er->hello();
$er->hello1();
?>
</body>
</html>