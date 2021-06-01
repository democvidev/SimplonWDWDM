<?php

require 'model/connexionDb.php';
require 'service/functions.php';

// Création de la page html
include 'views/header.php';

try {
    if (isset($_GET['id'])) {
        validate($_GET['id']);
        $post = showPost($_GET['id']);
        include 'views/post.php';
    } else {
        $tab = showAllPosts();
        // var_dump($tab);
        // die;
        include 'views/allPosts.php';
    }
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

        
include 'views/footer.php';
