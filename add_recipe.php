<?php
session_start();


// Les 3 expressions ci-dessous expriment la même chose. Les conditions ternaires permettent de racourcir une condition.

// if ($_SESSION['recettes']) {
//   $recettes = $_SESSION['recettes'];
// } else {
//   $recettes = [];
// }

// $recettes = $_SESSION['recettes'] ? $_SESSION['recettes'] : [];

// $recettes = $_SESSION['recettes'] ?? [];
// Si la condition testée (0 < 1) est vraie, alors on stocke true dans $var, dans le cas contraire on y stocke false.
//

$name = $_POST['recipe_name']; // C'est l'attribut name de l'input qui donne la clé dans laquelle, on va stocker le nom de la recette (recipe_name)

if(!isset($_SESSION['recettes'])){
  $_SESSION['recettes'] = [];
}


$newRecette = ["name" => $name, "created_at" => date("Y-m-d à H:i:s")];

echo '<pre>';
var_dump($newRecette);
echo '</pre>';

$_SESSION['recettes'][] = $newRecette;


//EXo 1 : sauvegarder tout sans écraser
//Exo 2 : récupérer le contenu de la session
//Exo 3 : afficher la liste


header("Location: index.php");
exit;
