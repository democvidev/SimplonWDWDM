<?php

require 'model/connexionDb.php';
require 'service/functions.php';

// Création de la page html
include 'views/header.php'; 
    if (isset($_GET['id'])) {  
        validate($_GET['id']);      
        $post = showPost($_GET['id']);
        include 'views/post.php';
    } else {
        $tab = showAllPosts();        
        include 'views/allPosts.php'; 
    }    
include 'views/footer.php';
