
<?php 

$habitats = [
    0 => [
        'image' => '../../Public/Assets/image/Habitat/savane.jpeg',
        'name' => ' La Savane ',

    ],

    1 => [
        'image' => '../../Public/Assets/image/Habitat/jungle.jpg',
        'name' => 'Jungle',
    ],


    2 => [
        'image' => '../../Public/Assets/image/Activity/marai-visite.jpeg',
        'name' => 'Marais',
    ],
];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/Assets/css/habitats.css">
    <link href="https://fonts.goofleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Projet ZOO</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class=" navis container-fluid">
                <a class="barre brand" href="accueil.php">Arcadia</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Acceuil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link " href="../Views/service.php">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="habitat.php">Habitats</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.php"> Contact</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="connexion.php">Connexion</a>
                            </li>
                
                                
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    
    <main>
    <section id="habitat" class="container-fluid">
            <div class=" col-lg-12">
                <nav class="para">
                    <p> Explorer les divers lieux où vivent les animaux ! Des Savanes Africaines aux forêt tropicales,
                        des lacs profonds aux montagne enneigées , chaque espèce à un habitat unique qui 
                        répond à ses besoins spécifiques. Rejoignez-nous pour un voyage fascinant à travers
                        les habitats du monde entiers et laissez-vous émerveiller par la nature ! </p>
                </nav>
            </div>


            <article class="terre" class="container">
                    <?php foreach ($habitats as $habitat) { ?>
                    <a href=".." ><figure class="figure">
                        <img src="<?php echo $habitat['image'] ?>" class="figure-img img-fluid rounded" alt="<?php echo $habitat['name'] ?>">
                        <figcaption class="figure-caption"><?php echo $habitat['name'] ?></figcaption>
                    </figure></a>
                <?php } ?>
                </div>    
            </article>
    </section>
    
            </div> 
    </section>

    </main>


    <footer>
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