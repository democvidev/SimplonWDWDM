<?php
require_once('modele/functions.php');


if ($_POST === []) {
    include('utilities/header.php');
    include('templates/form.php');
    include('utilities/footer.php');
}


if ($_POST != null) {
    if (isset($_POST['last_name']) && isset($_POST['first_name']) && isset($_POST['tel_number']) && isset($_POST['date_achat']) && isset($_POST['question1']) && isset($_POST['question2']) && isset($_POST['question3']) && $_POST['question3'] == '1') {
        $count = $_POST['question1'] + $_POST['question2'] + $_POST['question3'];
        include('utilities/header.php');
        showStarts($count);
        include('utilities/footer.php');
        foreach ($_POST as $key => $value) {
            echo $key . '->' . $value . '<br>';
        }
    }

    if (isset($_POST['last_name']) && isset($_POST['first_name']) && isset($_POST['tel_number']) && isset($_POST['date_achat']) && isset($_POST['question1']) && isset($_POST['question2']) && isset($_POST['question3']) && isset($_POST['call_now']) && $_POST['question3'] == '-1' && $_POST['call_now'] == 'yes') {
        include('utilities/header.php');
        contactUser($_POST['tel_number']);
        include('utilities/footer.php');
    } else {
        $count = $_POST['question1'] + $_POST['question2'] + $_POST['question3'];
        include('utilities/header.php');
        showStarts($count);
        include('utilities/footer.php');
    }
}

?>



    
 