<?php

$user = "root";
$pass = "";
$dbname = "18.05_wordpress_bd";

try {
    $dsn = 'mysql:host=localhost;dbname=' . $dbname;
    $options = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
    $dbh = new PDO($dsn, $user, $pass, $options);
    var_dump($dbh); 
    
    echo 'Connexion établie !';
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

try {
    $dbh = new PDO('mysql:host=localhost;dbname=18.05_wordpress_bd', $user, $pass);
    // var_dump($dbh);

    $tab = $dbh->query('SELECT post_title, LEFT(post_content, 300), post_date 
                        FROM wp_posts, wp_users
                        WHERE post_type="post"
                            AND post_status="publish"');

    foreach ($tab as $row) {
        // print_r($row);
        var_dump($row);
    }
    $dbh = null;
    echo 'Fin du SQL !';
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

