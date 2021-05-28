<?php

// Constantes
const MAX_NAME_LENGTH = 15;
const MIN_NAME_LENGTH = 2;
const MAX_POINTS = 5;

function showStars(): void
{
    if (isset($_POST['question3'])) {
        $count = $_POST['question1'] + $_POST['question2'] + $_POST['question3'];
        $count === '-1' ? $count = '0' : $count;
        for ($i = 0; $i < $count; $i++) {
            echo '⭐';
        }
        for ($i = 0; $i < MAX_POINTS - $count; $i++) {
            echo '⚫';
        }
    }
}

function showPhoneNumber(string $tel): void
{
    echo $tel;
}

function isValidForm(array $array): void
{    
    var_dump($array);
    die;
}
