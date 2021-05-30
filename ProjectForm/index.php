<?php
require_once('services/functions.php');

include('views/templates/header.php');

if ($_POST === []) {
    include('views/components/form.php');
}


if ($_POST != null) {
    $datas = [];
    foreach ($_POST as $key => $value) {
        $datas += [$key => validate($value)];
    }
    
    if (isValidForm($datas) !== []) {
        $errors = isValidForm($datas);
        include('views/components/form.php');
        exit();
    }
}

include('views/templates/footer.php');




    
 