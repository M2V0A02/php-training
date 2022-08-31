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
    function censor($str){
        $find = ['bitch', 'fuck', 'stupid'];
        $replace = ['b**ch', 'f**k', 'stup**'];
        return str_replace($find, $replace, $str);
    }
    echo censor('you stupid fuck bitch');
?>
</body>
</html>