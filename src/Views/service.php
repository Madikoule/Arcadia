<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/Assets/css/services.css">
    <link rel="stylesheet" href="../../Public/Assets/css/responsiv2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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
                                <a class="nav-link " href="service.php">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="habitat.php">Habitats</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="connexion.php">Connexion</a>
                            </li>
                        </li>
                                    <li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section id="service" class="container-fluid">
                    <nav class="debut">
                        <h1>Nos Services</h1>
                    </nav>
                        <article class="safari">
                            <div class="text1 ">
                                <h3>Train Safari</h3>
                                    <p> Voyagé en train à la découverte <br>de nos animaux, dans différents <br>paysage adapté et aménagé<br>
                                        pour vous approcher au maximum.</p>
                                    <p> Gardé les meilleures souvenirs <br> avec le Zoo Arcadia .</p>
                            </div>
                        <div class="train">
                            <img src="../../Public/Assets/image/Activity/petit-train.jpeg" class="img-fluid" alt="Visite train">
                        </div>
                        </div>
                    </div>
            </div>
        </article>

        <article>
                <div id="food">
                    <div class="fast">
                        <h3>Restaurant-Fastfood</h3>
                            <p>Déjeuner , goùter , pause  salée <br>ou sucrée... . Notre restaurant <br>proposent une offres 
                                variée, <br>pour répondre à toutes <br> vos envies !
                            </p>
                        </div>
                    <div class="resto">
                        <img src="../../Public/Assets/image/Activity/restaurant-exterieur.jpeg" class="img-fluid" alt="fast food">
                    </div>
                </div>
            </article>

            <article>
                <div id="vétérinaire">
                    <div class="soigneur">
                        <h3> Guide vétérinaire </h3>
                            <p>Le Zoo à le privilège de vous accompagnée en <br> tète a tète avec les animaux une demi-journée<br> dans la peau d'un soigneur animalier ,<br>
                                une chose est sùr , vois garderez de mémorable <br>souvenir de votre visitre au Zoo Arcadia .
                            </p>
                        </div>
                        <div class="veto">
                            <img src="../../Public/Assets/image/Activity/veto-zoo.jpeg" class="img-fluid" alt="soigneur animalié">
                        </div>
                    </div>   
            </article>
        </div>
        <div class="retour">
            <a href="index.php"><button type="button" class="btn btn-warning ">Retour</button></a>
        </div>
    </main>



    <footer>
                        <div class="pied">
                        <h6>Nos réseaux :</h6>
                            <div class="reso">
                                    <a href="https://github.com/Madikoule"><img src="../../Public/Assets/image/github (6).svg" alt="github"></a>
                                    <a href="https://www.facebook.com/"><img src="../../Public/Assets/image/facebook (2).svg" alt="facebook"></a>
                                    <a href="http://linkedin.com"><img src="../../Public/Assets/image/linkedin.svg" alt="linkedin"></a>
                            </div>
                            <div class="arcadia">
                        <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Arcadia, </span>
                    </div>
                </div>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>