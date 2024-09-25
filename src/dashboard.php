

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


    <div class="row">
        <div class="col-md-4">
            </div>

        </div>
    </div>

<?php

    include 'functions/compteur.php';
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur.php';

?>

    <div  class="card">
        <div class="card-body">
            <strong style= "font-size:3em;"><?= $total?></strong>
            Visite<?= $total  > 1 ? 's' : '' ?> total
            <?php

?>

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

            $vues= ajouter_vue();


        ?>

            <p>Il y a <?=$vues?> visite<?php if ($vues > 1): ?>s<?php endif; ?> sur le site </p>
            </div>
        </div>

            <div class="col-md-4">
                <form action="new" method="post" class="form-inline">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Enter votre email" required class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </form>

                <h6>Suivez-Nous</h6>
        <div class="logo">
                <a href="https://github.com/Madikoule"><img src="../../Public/Assets/image/github (6).svg" alt="github"></a>
                <a href="https://www.facebook.com/"><img src="../../Public/Assets/image/facebook (2).svg" alt="facebook"></a>
                <a href="http://linkedin.com"><img src="../../Public/Assets/image/linkedin.svg" alt="linkedin"></a>
            </div>

                <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Arcadia, </span>
            </div>
        </div>
        </div>
    </footer>

</html>