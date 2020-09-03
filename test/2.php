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

echo 'Имя: ' . $name . '<br/>Возраст: ' . $age . ' года<br/><br/>' .
    'Ключевые навыки: ' .
    "<ul>
        <li>$skills[0]</li>
        <li>$skills[1]</li>
        <li>$skills[2]</li>
        <li>$skills[3]</li>
        <li>$skills[4]</li>
    </ul>";
