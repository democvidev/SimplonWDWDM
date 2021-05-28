<?php
require_once('modele/functions.php');


if ($_POST === []) {
    include('utilities/header.php');
    include('templates/form.php');
    include('utilities/footer.php');
}


if ($_POST != null) {    
    // isValidForm($_POST);
    include('utilities/header.php');
    include('utilities/footer.php');
}

?>



    
 