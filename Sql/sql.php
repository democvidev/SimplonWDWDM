<?php

$user = "root";
$pass = "";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=18.05_wordpress_bd', $user, $pass);
    // var_dump($dbh);

    $tab = $dbh->query('SELECT post_title, LEFT(post_content, 30), post_date 
                        FROM wp_posts
                        WHERE post_type="post"
                            AND post_status="publish"');

    foreach ( $tab as $row) {
        // print_r($row);
        var_dump($row);
    }
    $dbh = null;
    echo 'Fin du SQL !';
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
