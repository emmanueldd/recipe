<?php
session_start();
var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mon livre de recettes</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css" />
</head>
<body>

  <h1 class="title">Mes meilleures recettes</h1>


  <section>
    <div class="container">
      <div class="columns">
        <div class="column is-half">
          <article>
            <div class="h3 title">Ma liste</div>
            <ul class="list">
              <li class="list-item">Tarte au citron</li>
              <li class="list-item">Chouquettes au sucre</li>
              <li class="list-item">Crêpe au Nutella maison</li>
            </ul>
          </article>
        </div>
        <div class="column is-half">
          <article>
            <h3 class="title">Ajouter une recette</h3>
            <form action="add_recipe.php" method="POST">
              <input type="text" class="input is-fullwidth" name="recipe_name" placeholder="Nom de la recette"><br>
              <button type="submit" class="button is-small is-success">Ajouter</button>
            </form>
          </article>
        </div>
      </div>
    </div>
  </section>
  
</body>
</html>