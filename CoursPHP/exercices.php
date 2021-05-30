<?php


// Exercice 1 : afficher le plus petit nombre
$a = 10;
$b = 20;
// Ecrire le code ici

function plusPetitNb(int $a, int $b): void
{
    echo $a < $b ? $a : $b;
}
// plusPetitNb($a, $b);

echo "<hr>";

// Exercice 2 : afficher la table de 9 (opération + résultat)
// Ecrire le code ici
$chiffre = 9;
function tableDeX(int $x): void 
{
    for ($i=1; $i <= 9; $i++) {
        $produit = $i * $x;
        echo '<p>' . $i . ' x ' . $x . ' = ' . $produit;
    }
}
// tableDeX($chiffre);

echo "<hr>";

// Exercice 3 : compter à rebours

// Ecrire le code ici
$number = 10;
function reverseCount(int $x): void
{
    for ($i = $x; $i > 0; $i--) {
        echo $i . ' ';
    }
}
// reverseCount($number);

echo "<hr>";

// Exercice 4 : Ecrire une boucle qui produit une ligne horizontale de 8 étoiles

// Ecrire le code ici
$nbStars = 8;
function lineOfStars(int $x): void
{
    $i = 0;
    while ($x > $i) {
        echo '⭐';
        $i++;
    }
}
// lineOfStars($nbStars);

echo "<hr>";

// Exercice 5 : Afficher un figure de 8 étoiles sur 8.

// Ecrire le code ici
$lat = 8;
$long = 8;
function showFigure(int $a, int $b): void
{
    for ($i = 0; $i < $a; $i++) {
        for ($j = 0; $j < $b; $j++) {
            echo '⭐' . ' ';
        }
        echo '<br>';
    }
}
// showFigure($lat, $long);

echo "<hr>";

// Exercice 6 : Ecrire une fonction (utilisant une boucle) qui remplace tout les espaces d'une phrase par un underscore
// indice : si $mot = "jouet" alors $mot[0] = "j", $mot[1] = "o", ...
// indice : chercher sur google une fonction qui renvoie la longueur d'une chaine de caractères

// Ecrire le code ici
$phrase = 'Le terme réusinage est originaire du Québec';
function replaceByUnderscore($sentence)
{
    for ($i = 0; $i < strlen($sentence); $i++) {
        if ($sentence[$i] == ' ') {
            $sentence[$i] = '_';
        }
    }
    return $sentence;
}
// echo replaceByUnderscore($phrase);
echo '<br>';
// trouver sur google son équivalant clef en main.
// str_replace() retourne une chaîne ou un tableau, dont toutes les occurrences de search dans subject ont été remplacées par replace.
// echo str_replace(' ', '_', $phrase);
echo "<hr>";

// Exercice 7 : Ecrire une fonction (utilisant une boucle) qui inverse et affiche l'ordre des lettres d'un mot

// Ecrire le code ici
$word = "originaire";
function reverseWord( string $string): string 
{
    $reversedWord = '';
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversedWord .= $string[$i];
    }
    return $reversedWord;
}
// echo reverseWord($word);
echo '<br>';
// trouver sur google son équivalant clef en main.
// strrev — Inverse une chaîne
// echo strrev($word);
echo "<hr>";




// Exercice 8: Ecrire une fonction qui supprime les espaces et met la phrase en camelCase
// Interdit d'utiliser les fonctions suivantes : ucwords() et str_replace().
$sentence = "Le cHat est mOrt"; //devient : leChatEstMort

// Ecrire le code ici
function myCamelCase1(string $param) : string
{
    // Mettre toute la chaîne en minuscules
    $tmp = strtolower($param);
    // Scinder une chaîne de caractères en segments, en utilisant le séparateur " " (un espace vide dans notre cas)
    // On obtient un tableau numérique
    $array = explode(" ", $tmp);
    // On stocke le premier mot dans le futur résultat en mettant le premier caractère en minuscule
    $result = $array[0];
    // Parcourir le tableau à partir du second élément
    for ($i = 1; $i < count($array); $i++) {
        // A chaque tour de boucle
        $word = ucfirst($array[$i]); // Mettre le premier caractère en majuscule

        $result .= $word; // Concatener le mot obtenu au reste de la chaine
    }
    return $result;
}

// echo myCamelCase1($sentence);


// Réécrire la fonction en utilisant les fonctions interdites
function myCamelCase2($param)
{
    return lcfirst(str_replace(' ', '', ucwords(strtolower($param))));
}
echo myCamelCase2($sentence);