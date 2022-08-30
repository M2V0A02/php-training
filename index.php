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
Class ShoppingCard {

};

$product1 = new ShoppingCard();
$product2 = new ShoppingCard();
$product3 = new ShoppingCard();

var_dump($product1);
var_dump($product2);
var_dump($product1 instanceof ShoppingCard);
var_dump($product2 instanceof Attribute);
?>
</body>
</html>