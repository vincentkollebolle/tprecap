<?php 
    //Faire ce qu'il y'a a faire de transversalle
    
    //ini_set('display_errors', 1);
    //ini_set('display_startup_errors', 1);
    //error_reporting(E_ALL);
    
    require "model/model.php";

    //puise redirigé vers le bon controller 
    // en analysant l'url qui a été appelé ! 
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // PARSEURL == NTU 
    
    if($uri == '/frontController.php') {
        //on affiche la liste de tout les posts
        include "controller/readAllController.php";
    } else if($uri == '/frontController.php/detail' && isset($_GET['id'])) {
        include "controller/showController.php";
    } else {
        header('HTTP/1.1 404 Not Found');
        echo '<html><body><h1>Page Not Found</h1></body></html>';
    }