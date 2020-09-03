<?php

$arr = [
    'one',
    'two',
    'three'
];

for( $i = 0; $i < 3; $i++) {
    echo $arr[$i] . "<br/>";
}

function Swap($arr, $search) {
    for( $i = 0; $i < 4; $i++) {
        if($arr[$i] === $search) {
            return "<br/>Массив содержит слово '" . $search . "'";
            break;
        } else {
            return "<br/>Массив не содержит слово '" . $search . "'";
        }
    }
}

echo Swap($arr, 'rer'); //Регистр искомого слова так же важен