<?php

$user = "root";
$pass = "";
$dbname = "18.05_wordpress_bd";
$host = 'localhost';

try {
    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
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
    // $dbh = new PDO('mysql:host=localhost;dbname=18.05_wordpress_bd', $user, $pass);
    // var_dump($dbh);
    $query = 'SELECT post_title, LEFT(post_content, 100) AS post_content_tr, post_date, display_name 
                        FROM wp_posts, wp_users
                        WHERE post_type="post"
                            AND post_status="publish"
                            AND post_author= wp_users.ID';
    $req = $dbh->query($query);
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $tab = $req->fetchAll();
    $req->closeCursor();
    // var_dump($tab);
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

