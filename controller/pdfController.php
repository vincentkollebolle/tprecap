<?php 

    $id = filter_var($_GET['id']);
    $post = getPostById($id);

    // 3./ Appeler le bon template 
    require "vue/pdfView.php";
