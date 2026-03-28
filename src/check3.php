<?php
 $fruits = array("りんご","みかん","バナナ","ぶどう");

 echo $fruits[0];

 echo $fruits[2];

 $students = array(
    "john" => 20,
    "Jane" => 22,
    "BOb" => 19,
 );

 echo $students["jane"];

 echo $students["Bob"];

  $class = [
   "John" =>[
      "Math" => 85,
      "English" => 78
   ],
   "Jane" =>[
      "Math" => 92,
      "English" => 81
   ],
   "Bod" =>[
      "Math" => 47,
      "English" => 81
   ]
  ];

  echo $class["John"]["Math"];
  echo $class["Jane"]["English"];

  $numbers = array(3,1,4,1,5,9);

  array_push($numbers,2);

  unset($numbers[1]);

  sort($numbers);

  print_r($numbers);

  $string ="Hello,World";

  echo strlen($string);

  echo str_replace("World","PHP",$string);

  echo substr($string,0.5);

?>



