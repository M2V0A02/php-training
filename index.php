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
    // Установление значений по умолчанию
    public $name;
    public $password;
    public $email;
    public $city;


    function __construct($name, $password, $email, $city)
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
    }

    function __destruct()
    {
        print "Уничтожение";
    }

    public function hello() {
        return 'Hello' . $this->name;
    }

    function getInfo() {
        return "{$this->name} {$this->email}"; 
    }
}

$admin = new User('Alex', '12345', '123@mail.ru', 'kiev');
echo "{$admin->getInfo()}";
// $admin->Hello();
// echo $admin->name;

// $user1 = new User();
// $admin->name = "admin";
// $user1->name = "Andrey";

// echo $admin->name;
// echo $user1->name;

// использование несуществующего свойства
// $user1->surname = "Ivanov";
// echo $user1->surname;

// class ShoppingCard {
//     // При наследование наследуемый класс может использовать только public и protected.
//     private $name;
//     public function naming() {
//         $this->name = "Adidas";
//         echo $this->name;
//     }
// };

// $product1 = new ShoppingCard();
// $product2 = new ShoppingCard();
// $product3 = new ShoppingCard();

// $product1->naming();
// var_dump($product1);
// var_dump($product2);
// var_dump($product1 instanceof ShoppingCard);
// var_dump($product2 instanceof Attribute);
?>
</body>
</html>