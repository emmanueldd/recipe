<?php
session_start();

//onrécupère le paramètre id passé en GET
$id = $_GET['id'];

//on récupère la liste des recettes
$recettes = $_SESSION['recettes'] ?? [];


//on récupère la recette qui se trouve à la position $id
$recette = $recettes[$id];

/*
  Exo 4 :
   - Afficher la page de la recette
   - Permettre d'ajouter un ingrédient
   - Permettre d'ajouter une étape
*/

/*
  Exo 5 :
    - Pouvoir ordonner/réordonner les étapes
    - Pouvoir éditer/supprimer une recette (nom, ingrédients, étape)
  */

  /*
    Exo 6 :
     - Pour chaque étape, rajouter une durée
     - Afficher cette durée sur la page d'accueil
     - Pouvoir trier les recettes par durée ou alphabétique
    */  

     ?>
     <!DOCTYPE html>
     <html lang="en">
     <head>
       <meta charset="UTF-8">
       <title>Ma recette</title>
     </head>
     <body>

      <h1 class="title"><?php echo $recette['name'];?> <small>créée le <?php echo $recette['created_at'];?></small></h1>
       
     </body>
     </html>
