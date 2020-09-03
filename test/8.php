<?php

$array = [
    0 => rand(0, 9),
    1 => rand(0, 9),
    2 => rand(0, 9),
    3 => rand(0, 9),
    4 => rand(0, 9),
];

for( $i = 0; $i < 5; $i++) {
    echo $array[$i] . "<br/>";
}
$max = max($array);
$min = min($array);
//Отбирается первое встреченное из искомых значений

$key1 = array_search($max, $array);
$key2 = array_search($min, $array);

echo "<br/>Максимальное значение:" . $max;
echo "<br/>Минимальное значение:" . $min;

echo "<p>Меняем их местами...</p>";

$temp = $array[$key1];
$array[$key1] = $array[$key2];
$array[$key2] = $temp;

for( $i = 0; $i < 5; $i++) {
    echo $array[$i] . "<br/>";
}

