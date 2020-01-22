<?php
session_start();

//onrécupère le paramètre id passé en GET
$id = $_GET['id'];

//on récupère la liste des recettes
$recettes = $_SESSION['recettes'] ?? [];

//on récupère la recette qui se trouve à la position $id
$recette = $recettes[$id];
$ingredients = $_SESSION['recettes'][$id]['ingredients'];
echo '<pre>';
var_dump($ingredients);
echo '</pre>';

/*
  Exo 4 :
   - Afficher la page de la recette
   - Permettre d'ajouter un ingrédient
   - Permettre d'ajouter une étape
*/


// $recettes[1]['ingredients'] => [ 0 => 'chocolat', 1 => 'sucre']
// $recettes[1]['steps'] => [ 0 => 'Mélanger le chocolat', 1 => 'Ajouter le sucre']

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
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" crossorigin="anonymous">
     </head>
     <body>

      <h1 class="title"><?php echo $recette['name'];?> <small>créée le <?php echo $recette['created_at'];?></small></h1>

       <section>
    <div class="container">
      <div class="columns">
        <div class="column is-half">
          <article>
            <div class="h3 title">Ingrédients</div>
            <ul class="list">
              <?php foreach ($ingredients as $key => $ingredient) { ?>
                <li class="list-item"><?php echo $ingredient; ?></li>
              <?php } ?>
            </ul>
          </article>
        </div>
        <div class="column is-half">
          <article>
            <h3 class="title">Ajouter un ingrédient</h3>
            <form action="add_ingredient.php?recette_id=<?php echo $_GET['id']; ?>" method="POST">
              <input type="text" class="input is-fullwidth" name="ingredient" placeholder="Ingrédient"><br>
              <button type="submit" class="button is-small is-success">Ajouter</button>
            </form>
          </article>
        </div>
      </div>
      <div class="columns">
        <div class="column is-half">
          <article>
            <div class="h3 title">Étapes de la recette</div>
            <ol class="list" type="1">

                <li class="list-item">1. Casser les oeufs</li>
                <li class="list-item">2. Écraser les avocats </li>
                <li class="list-item">3. Tartiner le beurre</li>
                <li class="list-item">4. Saupoudrer de canelle</li>
                <li class="list-item">5. Cuire 30 minutes avec soin</li>
            </ol>
          </article>
        </div>
        <div class="column is-half">
          <article>
            <h3 class="title">Ajouter une étape</h3>
            <form action="???" method="POST">
              <textarea class="input is-fullwidth" name="step" rows="6" placeholder="Étape"></textarea><br>
              <button type="submit" class="button is-small is-success">Ajouter</button>
            </form>
          </article>
        </div>
      </div>
    </div>
  </section>

     </body>
     </html>
