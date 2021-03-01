<?php
include_once('App.php');
/**
 * Récupération de la donnée nbCotes
 * Si la donnée est absente ou si la donnée vaut 0, on choisit une valeur aléatoire (rand)
 */


/**
 * Récupération de la donnée couleur
 * Si la donnée est absente, on choisit une valeur aléatoire
 */


?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Formes</title>
</head>
<body>
    <div class="interface">
        <header><a href="index.php"><img src="images/mesformes.svg" alt=""></a><h1>Mes formes</h1></header>
        <div class="body">
            <form action="" method="get">
                <h2>Choisissez...</h2>
                <div>
                    <label for="nbCotes">Nombre de côtés</label>
                    <!-- Champ nbCotes -->

                    <!-- /Champ nbCotes -->
                </div>
                <div>
                    <label for="couleur">Couleur</label>
                    <!-- Champ couleur -->

                    <!-- /Champ couleur -->
                </div>
                <div><button type="submit">Créer</button></div>
                <div><button type="submit" onclick="nbCotes.value=0;couleur.disabled=true">Aléa</button></div>
            </form>
            <!-- Affichage du résultat -->

            <!-- /Affichage du résultat -->
        </div>
        <footer>&copy; Cégep de Saint-Jérôme - Martin Boudreau</footer>
    </div>
</body>
</html>