<?php

$lang = "ru";

$arr = [];

if ($lang == "en") {
    $arr[0] = 'Monday';
    $arr[1] = 'Tuesday';
    $arr[2] = 'Wednesday';
    $arr[3] = 'Thursday';
    $arr[4] = 'Friday';
    $arr[5] = 'Saturday';
    $arr[6] = 'Sunday';
    echo implode("<br>\r\n", $arr);
}

if ($lang == "ru") {
    $arr[0] = 'ПН';
    $arr[1] = 'ВТ';
    $arr[2] = 'СР';
    $arr[3] = 'ЧТ';
    $arr[4] = 'ПТ';
    $arr[5] = 'СБ';
    $arr[6] = 'ВС';
    echo implode("<br>\r\n", $arr);
}

echo "<br>\r\n";

switch ($lang) {
    case 'ru':
        $arr[0] = 'ПН';
        $arr[1] = 'ВТ';
        $arr[2] = 'СР';
        $arr[3] = 'ЧТ';
        $arr[4] = 'ПТ';
        $arr[5] = 'СБ';
        $arr[6] = 'ВС';
    echo implode("<br>\r\n", $arr);
        break;
    
    case 'en':
        $arr[0] = 'Monday';
        $arr[1] = 'Tuesday';
        $arr[2] = 'Wednesday';
        $arr[3] = 'Thursday';
        $arr[4] = 'Friday';
        $arr[5] = 'Saturday';
        $arr[6] = 'Sunday';
    echo implode("<br>\r\n", $arr);
        break;
}

