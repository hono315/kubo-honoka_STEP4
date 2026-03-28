<?php

$sample1 = 10;
$sample2 = 5;

$test1 = $sample1 + $sample2;
echo "$test1 \n";

$test2 = $sample1 - $sample2;
echo "$test2 \n";

$test3 = $sample1 * $sample2;
echo "$test3 \n";

$test4 = $sample1 / $sample2;
echo "$test4 \n";

$test5 = $sample1 % $sample2;
echo "$test5 \n";

$a = 10;
$a += 5;
$a -= 3;
echo $a;

$b = 10;
$c = 20;

var_dump($b == $c);
var_dump($b != $c);
var_dump($b > $c);
var_dump($b < $c);

$d = "プログラミング";
$e = "は楽しい！";
$f = $d . $e;
echo $f;

$age = 18;
$age_result = ($age>=18)? "成人" : "未成年";

echo $age_result;


