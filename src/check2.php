<?php
 $age = 18;
 if($age >= 18){
    echo "成人";
 }elseif($age < 18){
    echo "未成年";
 }

 $day = "Monday";
 switch($day){
    case"Monday";
    echo "今日は月曜日です。";
    break;
    case "Tuesday";
    echo "今日は火曜日です。";
    break;
    case "Wednesday";
    echo "今日は水曜日です。";
    break;
 }

//  iが10以下の間は繰り返し11になると止まる
 $i = 1;
 while($i <= 10){
    if($i % 2 ==0){
        echo $i . "\n";
    }
    $i++;
 }

 $num = 5;
 do{
    echo $num . "\n";
    $num--;
 }while($num >= 1);

 for($num = 1; $num <=100; $num++){

 }

 for($num = 1;$num <=100; $num++){
    if($num % 3 ==0){
        echo $num . "\n";
    }
 }

 $fruits = ["りんご" =>100,"バナナ"=>50, "オレンジ"=>70];
 foreach($fruits as $name =>$price){
    echo $name .":" .$price."円,\n";
 }
