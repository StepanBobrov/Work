<?php

$age = 22;

if ($age < 18) {
    echo 'Ты способный парень, но тебе стоит немного
подучиться';
} else if ($age >= 18 && $age < 55) {
    echo 'Тебе еще работать и работать';
} else {
    echo 'Ну что ж, ты заслужил почетный отдых';
}