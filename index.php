<?php
    $array = range(1, 100);
    for ($i = 0; $i < count($array); $i++)
        $i % 2 == 0 ?: $array[$i] = 2;
    print_r($array);
    $array = array_values(array_unique($array));
    [$firstArray, $secondArray] = array_chunk($array, ceil(count($array) / 2));
    arsort($firstArray);
    arsort($secondArray);
    print_r($firstArray);
    print_r($secondArray);
    $number = array_rand($firstArray);
    print_r(sprintf("$number \n%s", round($number * 25.75)));
?>    