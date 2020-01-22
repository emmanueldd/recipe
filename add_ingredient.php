<?php
  session_start();
  $recettes = $_SESSION['recettes'] ?? [];
  $recette_id = $_GET['recette_id'];
  $ingredient = $_POST['ingredient'];
  $_SESSION['recettes'][$recette_id]['ingredients'][] = $ingredient;


  echo '<pre>$recettes["8"] =>';
  var_dump($_SESSION['recettes'][$recette_id]);
  echo '</pre>';

  header("Location: recette.php?id=$recette_id");
  exit;
