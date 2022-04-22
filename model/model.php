<?php
/* 
 Ce fichier regroupe toutes les fonctions necessaire pour 
 questionner la base de données.
*/



function getAllPost() {
    
    //doit renvoyer tout les posts présent dans la bdd 
    include "parameters.php"; 
    
    //1. Se connceter a la bdd 
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
    //2./ preparer une requête
    //3./ Executer la requête
    $sth = $pdo->query('SELECT * FROM post');
    $results = $sth->fetchAll();

    $posts = []; 
    // iterate over array by index and by name
    foreach($results as $result) {
        $posts[] =$result; 
    }
    //5./ killer la connexion
    $pdo = null;
    //4./ renvoyer le tableau de post
    return $posts;
}