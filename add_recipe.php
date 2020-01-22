<?php
session_start();

$name = $_POST['recipe_name'];

if(!isset($_SESSION['recettes'])){
  $_SESSION['recettes'] = [];
}

$newRecette = ["name" => $name,
               "created_at" => date("Y-m-d H:i:s")
              ];

$_SESSION['recettes'][] = $newRecette;



//EXo 1 : sauvegarder tout sans écraser
//Exo 2 : récupérer le contenu de la session
//Exo 3 : afficher la liste


header("Location: /");
exit;