<?php

$arr = [10, 20, 15, 17, 24, 35];
$counter = 0;
$sum = 0;
foreach ($arr as $value) {
    $sum += $arr[$counter];
    $counter++;
}

echo $sum;