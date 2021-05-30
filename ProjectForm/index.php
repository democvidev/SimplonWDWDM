<?php
require_once('modele/functions.php');

include('utilities/header.php');

if ($_POST === []) {
    include('templates/form.php');
}


if ($_POST != null) {  
    $datas = [];
    foreach ($_POST as $key => $value) {
        $datas += [$key => validate($value)];
    }  
    
    if (catchError(isValidForm($datas)) !== []) {            
        $errors = catchError(isValidForm($datas));        
        include('templates/form.php');
        exit();
    }
    
}

include('utilities/footer.php');
?>



    
 