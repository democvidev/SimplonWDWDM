<?php

$max = 5;


if ($_GET == null) {
    header("Location: index.php");
    die();
}

if ($_GET != null) {
    // var_dump($_GET);
    if (isset($_GET['last_name']) && isset($_GET['first_name']) && isset($_GET['tel_number']) && isset($_GET['date_achat']) && isset($_GET['question1']) && isset($_GET['question2']) && isset($_GET['question3'])) {
        $count = $_GET['question1'] + $_GET['question2'] +$_GET['question3'];
        $count === '-1' ? $count = '0' : $count;
            for ($i = 0; $i < $count; $i++) {
                echo '⭐';
            }
            for ($i = 0; $i < $max - $count; $i++) {
                echo '⚫';
            }
    }
}
