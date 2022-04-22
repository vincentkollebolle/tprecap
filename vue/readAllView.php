<?php
 // afficher via html une page contenant une représentation des différents
 //blogpost. 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog > Lister tout les posts</title>
</head>
<body>
    <ul>
        <?php foreach($posts as $post) { ?>
            <li>
                <?=$post['title']?> 
                <a href=""> (detail)</a>
                <a href=""> (modifier)</a>
                <a href=""> (supprimer)</a>
            </li>
        <?php } ?>
    </ul>
</body>
</html>