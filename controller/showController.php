<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    //1./ Se mettre en lien avec le model
    require "../model/model.php";

    //2./ Appeler la bonne fonction du modele pour rappatrier les données voulu
    //ici nos donnée dépende de l'url 
    //puisqu'on veut pouvoir passer l'id dans l'url
    $id = filter_var($_GET['id']);
    $post = getPostById($id);

    //3. Appel le bon template
    include "../vue/readDetailView.php";

?>