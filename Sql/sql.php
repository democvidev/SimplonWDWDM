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
    // var_dump($dbh);
    
    echo 'Connexion établie !';
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

try {
    // $dbh = new PDO('mysql:host=localhost;dbname=18.05_wordpress_bd', $user, $pass);
    // var_dump($dbh);
    $query = 'SELECT wp_posts.ID, post_title, LEFT(post_content, 700) AS post_content_tr, post_date, display_name 
                        FROM wp_posts, wp_users
                        WHERE post_type="post"
                            AND post_status="publish"
                            AND post_author= wp_users.ID';
    $req = $dbh->query($query);
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $tab = $req->fetchAll();
    $req->closeCursor();
    // var_dump($tab);
    // Création html
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Titre de la page</title>
    </head>
    <body>
        <h1>Accueil blog</h1>
        <?php foreach($tab as $row) { ?>
        <h2><a href="article.php?id=<?= $row['ID'] ?>"><?= $row['post_title'] ?></a></h2>
        <p><?= $row['post_content_tr'] ?></p>
        <p>Rédigé par : <?= $row['display_name'] ?> - Date : <?= $row['post_date'] ?></p>
        <?php } ?>
    </body>
    </html>

<?php
    // var_dump($tab);
    // foreach ($tab as $row) {
    //     // print_r($row);
    //     var_dump($row);
    // }
    $dbh = null;
    echo 'Fin du SQL !';
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
