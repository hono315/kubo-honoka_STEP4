<?php 
 $nestedArray = [
    "fruits" =>["apple", "banana"],
    "numbers" =>[1,2,3] ,
    "nested" =>[
        "a",
        "b",
        "c" => ["x","y","z"]
    ]
 ];

 print_r($nestedArray) ;
 echo count($nestedArray,  COUNT_RECURSIVE);

 ?>
