<?php
$min = rand(0,59);
echo $min;

if ($min <= 15) {
    echo "Первая";
}
else if ($min <= 30) {
    echo "Вторая";
}
else if ($min <= 45) {
    echo "Третья";
}
else if ($min <= 60) {
    echo "Четвертая";
}