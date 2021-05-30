<?php

// Constantes
const MAX_NAME_LENGTH = 15;
const MIN_NAME_LENGTH = 2;
const MAX_POINTS = 5;
const TELEPHONE = 10;
const PATERN = '/^0(1|6|7|9)\d{8}$/';

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

function validate(string $data): string 
{
    $data = trim($data); //supprimer les espaces dans la requête de l'internaute
    $data = stripslashes($data);// Supprime les antislashs d'une chaîne
    $data = htmlspecialchars($data); //sécuriser le formulaire contre les failles html
    $data = strip_tags($data); // supprimer les balises html et php dans la requête
    return $data;
}

function showPhoneNumber(string $tel): void
{
    echo $tel;
}

function isValidForm(array $array): array
{    
    $errorMessage = [];
    foreach ($array as $key => $value) {
        if ($key == 'last_name' && strlen($value) < MIN_NAME_LENGTH) {
            $errorMessage += [ $key => ' ce champ doit contenir au moins 2 caractères'];
        }
        if ($key == 'first_name' && strlen($value) < MIN_NAME_LENGTH) {
            $errorMessage += [ $key => ' ce champ doit contenir au moins 2 caractères'];
        }        
        if (($key == 'tel_number') && ((strlen($value) != TELEPHONE) || preg_match(PATERN, $value) != '1')) {
            $errorMessage += [ $key => ' ce champ doit contenir au moins 10 chiffres et le numéro doit être valide']; 
        }
    }
    return $errorMessage;   
}
