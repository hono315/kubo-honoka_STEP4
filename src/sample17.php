<?php

$number1 = 10;
$number2 = 5;

var_dump($number1 == $number2);
var_dump($number1 != $number2);
var_dump($number1 > $number2);
var_dump($number1 < $number2);

$string1 =  "Hello";
$string2 = "hello";

var_dump($string1 == $string2);
var_dump($string1 === $string2);

$array1 = [1, 2, 3];
$array2 = ["1", "2", "3"];

var_dump($array1 == $array2);
var_dump($array1 === $array2);
?>

