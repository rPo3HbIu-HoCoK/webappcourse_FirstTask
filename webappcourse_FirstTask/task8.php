<?php
$arr = 
[
    ['Monday' => 1],
    ['Tuesday' => 2],
    ['Wednesday' => 3],
    ['Thursday' => 4],
    ['Friday' => 5],
    ['Saturday' => 6],
    ['Sunday' => 7],

    ['Понедельник' => 1],
    ['Вторник' => 2],
    ['Среда' => 3],
    ['Четверг' => 4],
    ['Пятница' => 5],
    ['Суббота' => 6],
    ['Воскресенье' => 7]
];

foreach ($arr as $key => $value) {
    foreach ($value as $key => $value) {
        if ($value == 3) {
            echo $key. " ";
        }      
    }
}