
    
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/Assets/css/dashboards.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Projet ZOO</title>
</head>



<main>


    <article>

    <div  class="card">
        <div class="card-body">
            <strong style= "font-size:3em;"><?= $total ?></strong>
            Visite<?= $total > 1 ? 's' : '' ?> total

        </div>
    </div>
    </article>
    <article>
        <div class="dash">
            <p> voici votre page dashboard principale </p>
            
        </div>
    </article>
</main>


<footer>


        <h1> compteur de vue </h1>
        <div class="container">
        <div class="row">
        <div class="col-md-4">

        <?php
            require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur.php';

            ajouter_vue();
        ?>

            <p>Il y a <?= $vues ?> visites<?php if ($vues > 1): ?>s<?php endif; ?> sur le site </p>
            </div>
        </div>

            <div class="col-md-4">
                <form action="new" method="post" class="form-inline">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Enter votre email" required class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </form>
        </div>
    </footer>

</html>