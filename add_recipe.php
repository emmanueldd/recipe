<?php
session_start();

var_dump($_SESSION);

$name = $_POST['recipe_name'];

$_SESSION["recipe_name"] = $name;


var_dump($_SESSION);



//EXo 1 : sauvegarder tout sans écraser
//Exo 2 : récupérer le contenu de la session
//Exo 3 : afficher la liste


//header("Location: /");
//exit;