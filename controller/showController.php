<?php


    //2./ Appeler la bonne fonction du modele pour rappatrier les données voulu
    //ici nos donnée dépende de l'url 
    //puisqu'on veut pouvoir passer l'id dans l'url
    $id = filter_var($_GET['id']);
    $post = getPostById($id);

    //3. Appel le bon template
    include "vue/readDetailView.php";

?>