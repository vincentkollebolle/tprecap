<?php 
$title = $post['title'];

$content = "<h1>".$post['title']."</h1>";
$content .= "<p>".$post['description']."</p>";

include "layout.php";