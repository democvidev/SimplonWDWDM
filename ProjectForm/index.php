<?php
require_once('modele/functions.php');


if ($_POST === []) {
    include('utilities/header.php');
    include('templates/form.php');
    include('utilities/footer.php');
}


if ($_POST != null) {  
    $datas = [];
    foreach ($_POST as $key => $value) {
        $datas += [$key => validate($value)];
    }  
    include('utilities/header.php');
    
    if (catchError(isValidForm($datas)) !== []) {            
        $errors = catchError(isValidForm($datas));        
        include('templates/form.php');
        exit();
    }
    
    include('utilities/footer.php');
}

?>



    
 