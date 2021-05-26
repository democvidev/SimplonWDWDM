<?php

echo 'hello world! Comment ca va ?' . '<br>';

$nom = "Ciobanu";
$prenom = "Vladislav";

// Opérateurs chaine
echo "Je suis " . $nom . " " . $prenom . "<br>";
echo "Il a dit 'Hello !'" . "<br>";
echo "Il a dit \"Hello !\"" . "<hr>";

//Condition
$condition = true;
if ($condition) {
    echo "C'est vrai !" . "<br>";
} elseif (!$condition) {
    echo "C'est faux !" . "<br>";
}
echo 'suite ...' . '<br>';

// Boucles
// While
$i = 0;
while ($i <= 10) {
    echo $i . " ";
    $i++;
}
echo '<br>';
// For
for ($i = 10; $i >= 0 ; $i--) {
    echo $i . " ";
}
