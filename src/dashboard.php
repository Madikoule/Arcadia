

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Assets/css/dashboards.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Projet ZOO</title>
</head>

<body>

<header>
        <div class="container-fluid">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../templates/admin/accueil.php">Acceuil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../templates/admin/service.php">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../templates/admin/contact.php">Gestion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../templates/admin/connexion.php">Déconnection</a>
                </li>
            </ul>
        </div>
</header>

<main>


<?php

    include 'functions/compteur.php';
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur.php';
    $total= nombre_vues();
    $annee =(int)date('Y');
    $annee_selection = empty($_GET['annee']) ? $annee : (int)$_GET['annee'];

    $mois = [
        '01' => 'Janvier',
        '02' => 'Février',
        '03' => 'Mars',
        '04' => 'Avril',
        '05' => 'Mai',
        '06' => 'Juin',
        '07' => 'Juillet',
        '08' => 'Aout',
        '09' => 'Septembre',
        '10' => 'Octobre',
        '11' => 'Novembre',
        '12' => 'Décembre',
    ];

?>

        <div class="dash">
            <h1> Dashboard </h1>
        </div>
    <section class="container-fluid "  >
        <nav class="vue">

    <div class=" annee container-fluid">
        <div class="row"> 
            <div class="col-md-4">
                <ul class="list-group">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                    <a class="list-group-item <?=$annee - $i === $annee_selection ? 'active' : '';?>" href="dashboard.php?annee=<?=$annee - $i ?>"><?= $annee - $i ?></a>

                    <?php endfor ?>
                </ul>
            </div>
        </div>
    </div>
        
        <div class="container-fluid">
            <div class="card" style="width: 400px ;">
                <div class="card-body">
                    <strong style= "font-size:3em;"><?= $total?></strong>
                    Visite<?= $total  > 1 ? 's' : '' ?> total
                </div>
            </div>
        </div>
        </nav>
        </section>


</main>

<footer>

        <div class="container foot">
            <div class="row">
                <div class=" col-md-4">
                    <div class="card">
                        <div class="card-body">
                    </div>
                        <h4>Compteur de vue </h4>

        <?php

            require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur.php';

            $vues= ajouter_vue();

        ?>

                        <p>Il y a <?=$vues?> visite<?php if ($vues > 1): ?>s<?php endif; ?> sur le site </p>
                    </div>
                </div>
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
        </div>

                <h6>Suivez-Nous</h6>
        <div class="logo">
                <a href="https://github.com/Madikoule"><img src="../../Public/Assets/image/github (6).svg" alt="github"></a>
                <a href="https://www.facebook.com/"><img src="../../Public/Assets/image/facebook (2).svg" alt="facebook"></a>
                <a href="http://linkedin.com"><img src="../../Public/Assets/image/linkedin.svg" alt="linkedin"></a>
            </div>

                <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Arcadia, </span>
            </div>
        </div>
        
    </footer>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</html>