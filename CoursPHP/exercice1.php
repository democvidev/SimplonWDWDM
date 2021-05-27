<?php
// Exercice : Ecrire une fonction qui supprime les espaces et met la phrase en camelCase
$sentence = "Le chat esT mOrt"; //devient : leChatEstMort
// indice : si $mot = "jouet" alors $mot[0] = "j", $mot[1] = "o", ...
// indice : chercher sur google une fonction qui renvoie la longueur d'une chaine de caractères (nombre de caractère)


function myFunction(string $param) : string
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

echo myFunction($sentence);

