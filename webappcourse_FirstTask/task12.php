<?php
$arr = ['html', 'css', 'php', 'js', 'jq'];

foreach ($arr as $value) {
    if ($value == $arr[4]) {
        echo $value;
    }
    else {
        echo $value. ", ";
    }
}