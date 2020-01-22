<?php
session_start();
$recettes = $_SESSION['recettes'] ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mon livre de recettes</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" crossorigin="anonymous">
  <style>
    small{font-size: 0.6em;color: grey;}
  </style>
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
              <?php foreach($recettes as $k => $r): ?>
                <li class="list-item">
                  <a href="recette.php?id=<?php echo $k;?>">
                    <?php echo $r['name'];?>
                  </a>
                  <small><em><?php echo $r['created_at'];?></em></small>
                </li>
              <?php endforeach; ?>
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