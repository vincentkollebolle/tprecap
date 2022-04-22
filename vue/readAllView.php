<?php
 // afficher via html une page contenant une représentation des différents
 //blogpost. 
 $title = "Affichage de tout les posts"; 

 ob_start(); 
?>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($posts as $post) { ?>
                <tr>
                    <td><?=$post['title']?></td>
                    <td> 
                        <a href="/frontController.php/detail?id=<?=$post['id']?>" class="btn btn-outline-primary mb-4"> detail</a>
                        <a href="" class="btn btn-outline-primary mb-4"> (modifier)</a>
                        <a href="" class="btn btn-outline-primary mb-4"> (supprimer)</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php
    $content = ob_get_clean();

    include "layout.php";