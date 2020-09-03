<?php

$name = 'Степан';
$age = 22;
$skills = [
    'Html',
    'CSS',
    'Laravel',
    'JQuery',
    'Bootstrap'
];

$newfile = fopen('me.txt', 'w+');
fwrite($newfile, $name );
fwrite($newfile, '<br/>');
fwrite($newfile, $age);
fwrite($newfile, '<br/>');
for ($i = 0; $i < 5; $i++) {
    fwrite($newfile, $skills[$i]);
    fwrite($newfile, '<br/>');
}

fclose($newfile);
readfile('me.txt');