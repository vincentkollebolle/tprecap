<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 1./se mettre avec la couche model et les fonctions presentes dans celle-ci
require "../model/model.php";

// 2./ via une fonction du modele rapatrier les données voulues
$posts = getAllPost(); 

// 3./ Appeler le bon template 
require "../vue/readAllView.php";
