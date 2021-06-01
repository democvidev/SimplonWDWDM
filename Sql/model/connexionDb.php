<?php

function connectDb(): PDO
{
    // Couche d'accès au données
    $user = "root";
    $pass = "";
    $dbname = "18.05_wordpress_bd";
    $host = 'localhost';

    // Mise en place d'un système de déroutage et gestion d'exeptions

    try {
        $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
        $options = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
        $dbh = new PDO($dsn, $user, $pass, $options);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
    return $dbh;
}


function showAllPosts(): array
{
    $dbh = connectDb();
    $query = 'SELECT wp_posts.ID, post_title, LEFT(post_content, 700) AS post_content_tr, post_date, display_name 
              FROM wp_posts, wp_users
              WHERE post_type="post"
                AND post_status="publish"
                AND post_author= wp_users.ID
              ORDER BY post_date DESC';
    $req = $dbh->query($query);
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $tab = $req->fetchAll();
    $req->closeCursor();
    return $tab;
}

function showPost($id): array
{
    $dbh = connectDb();
    $query = 'SELECT display_name, post_title, post_content, post_date FROM wp_posts INNER JOIN wp_users ON post_author = wp_users.ID WHERE wp_posts.ID =' . $id;
    $req = $dbh->query($query);
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $row = $req->fetch();
    $req->closeCursor();
    return $row;
}

function searchPosts($search): array
{
    $dbh = connectDb();
    $query = 'SELECT wp_posts.ID, post_title, LEFT(post_content, 700) AS post_content_tr, post_date FROM wp_posts WHERE post_title LIKE "%' . $search . '%"';
    $req = $dbh->query($query);
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $tab = $req->fetchAll();
    $req->closeCursor();
    // var_dump($tab);
    return $tab;
}
