<?php


function showStars(int $count): void
{
    echo '<p class="mt-5">Merci pour votre notation :';
    $count === '-1' ? $count = '0' : $count;
    for ($i = 0; $i < $count; $i++) {
        echo '⭐';
    }
    for ($i = 0; $i < 5 - $count; $i++) {
        echo '⚫';
    }
}

function contactUser(string $tel): void
{
    echo '        
        <p>Vous serez rappelé au numéro '. $tel . '</p>
    ';
}
