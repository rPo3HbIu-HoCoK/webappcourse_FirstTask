<?php

$arr = [-10, -20, -15, 17, 24, 35];
$positiveSum = 0;
$negativeSum = 0;
$counter = 0;
foreach ($arr as $value) {
   if($arr[$counter] > 0){
    $positiveSum += $arr[$counter];
   }
   if($arr[$counter] < 0){
    $negativeSum += $arr[$counter];
   }
   $counter++;
}

echo $positiveSum. " ". $negativeSum;