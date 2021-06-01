<?php

require 'model/connexionDb.php';
require 'service/functions.php';

// Création de la page html
include 'views/header.php';

try {
    if (isset($_GET['s'])) {
        validate($_GET['s']);
        $tab = searchPosts($_GET['s']);
    }
    include 'views/searchResults.php';
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

        
include 'views/footer.php';
