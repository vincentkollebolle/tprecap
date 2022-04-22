<?php

// 2./ via une fonction du modele rapatrier les données voulues
$posts = getAllPost(); 

// 3./ Appeler le bon template 
require "vue/readAllView.php";
