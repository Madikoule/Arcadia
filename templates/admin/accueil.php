<?php



$animals = [
    0 => [
        'name' => 'Gibbon au main blanches',
        'description' => 'Présent dans notre zoo <br> depuis  l\'Age de deux ans',
        'image' => '../../Public/Assets/image/Animaux/Gibbon-a-mains-blanches-3.jpg',
        'title' => 'Oyopi',
        'habitat' => 'Forêts tropicales, Asie',
        'age' => ' 14 ans',
        'race' => 'Hylobates lar ',
    ],

    1 => [
        'name' => 'Kamel & Kamoss',
        'description' => 'Les GIRAFES INSÉPARABLES <br> depuis l\'Afrique .',
        'image' => '../../Public/Assets/image/Animaux/Girafas_1.jpeg',
        'title' => 'Kamel & Kamoss',
        'habitat' => ' Savanes, Afrique',
        'age' => '4 ans' ,
        'race' => 'Giraffa camelopardalis',
    ],

    2 => [
        'name'=> 'Crocodile du Nil',
        'description' =>  'l\'incontournable <br>Niloticus .',
        'image' => '../../Public/Assets/image/Animaux/crocodile du nil.webp',
        'title' => 'Gasper',
        'habitat' => 'Marais , rivières et lacs en Afrique subsaharienne.',
        'age' => ' 35 ans' ,
        'race' => ' Crocodylus Niloticus' ,
    ]
    ];



?>






<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Public/Assets/css/responsive.css">
    <link rel="stylesheet" href="../../Public/Assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Projet ZOO</title>
</head>
<body>
    <div>
        <? $content;?>
    </div>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">

            <div class=" navis container-fluid">
            <a><img src="../../public/Assets/image/logo.arcadia.webp" class="barre brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menus</h5>
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
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    
    </header>

    <main>
        <section>
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="cover carousel-item active">
                                <img src="../../Public/Assets/image/Animaux/panda-family.webp" alt="...">
                            </div>
                            <div class="cover carousel-item">
                                <img src="../../Public/Assets/image/Animaux/elephant.webp" alt="...">
                            </div>

                            <div class="title">
                                <span>VOYAGER AU COEUR <br> DE NOS HABITATS </span>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
        
        </section>
            <section>
                <div class="decouverte container-fluid">
                    <div class="titre2">
                        <h2>
                            Bienvenue dans le Zoo <br> Arcadia.
                        </h2>
                    </div>
                    <div class="zoo">
                        <img src="../../Public/Assets/image/Habitat/Aquatic-ZOO.jpeg" class="img-fluid" alt="Arcadia">
                    </div>
                    <div class="text1">
                        <p> Un parc zoologique, aussi appelé jardin zoologique, ou plus communément zoo,<br>
                        est un espace ou sont réunies de nombreuses espèces animales, pour la plus part <br> sauvages,
                        vivant des espaces clos.</p>
                    </div>
                </div>
        </section>

        <section>
        <div class="slide1 container-fluid">
                <div class="titre3">
                            <h3>
                                Les Habitats Arcadia
                            </h3>
                </div>
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner"  class="container-fluid">
                        <div class="carousel1 carousel-item active">
                            <img src="../../Public/Assets/image/Habitat/jungle.jpg" class="img-fluid" alt="Jungle">
                            <div class="sel1">
                            <h5>Jungle</h5>
                        </div>
                        </div>
                    
                        <div class="carousel1 carousel-item">
                            <img src="../../Public/Assets/image/Habitat/maraiis.webp" class="img-fluid" alt="Marais">
                        <div class="sel2">
                            <h5>Marais</h5>
                        </div>
                        </div>
                        <div class=" carousel1 carousel-item">
                            <img src="../../Public/Assets/image/Habitat/savane.jpeg" class="img-fluid" alt="Savane">
                        <div class="sel3">
                            <h5>Savane</h5>
                        </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                </div>
                </div>
            </div>
        </div>
    </section>

        <section class="container-fluid">
        <div class="titl2">
                    <h3>Nos Animaux Terrestres </h3>
                </div>

            <div class="animaux">
            <?php foreach ($animals as $index => $animal) { ?>

                <div class="panda">
                    <img src=" <?php echo $animal ['image'] ;?> " class="img-fluid" alt="Gibbon">
                    <div class="name1">
                        <h4><?php echo $animal['name'];?> </h4>
                            <p><?php echo $animal['description'];?> </p>
                        <button onclick="openPopup('popup<?php echo $index; ?>')">Voir plus d'infos</button>
                    </div>


                    <div id="popup<?php echo $index;?>" class="popup">
                        <div class="popup-content">
                            <span class="close" onclick="closePopup('popup<?php echo $index; ?>')">&times;</span>
                                <h2><?php echo $animal['title'];?></h2>
                                    <p><strong>Habitat :</strong> <?php echo $animal['habitat'];?></p>
                                    <p><strong>Âge :</strong><?php echo $animal['age'];?></p>
                                    <p><strong>Race :</strong><?php echo $animal['race'];?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
            </section>

        <section>
            <div class=" vert container-fluid">
                <div class="description">
                <a href="service.php"><button type="button" class="btn btn-warning ">Services</button></a>
                    <p>- Visite du Zoo en petit train .</p>
                    <p>- Restaurant avec terrasse vue sur le bassin Aquatique .</p>
                    <p>- Visite des Habitat avec un (guide)</p>
                </div>



                <div class="form-container">
                    <h2 class="text-center">Votre Avis</h2>
                    <form id="reviewForm">
                        <div class="form-group">
                            <label for="name">Nom :</label>
                            <input type="text" class="form-control" id="name" placeholder="Votre nom" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" id="email" placeholder="Votre email" required>
                        </div>
                        <div class="form-group">
                            <label>Note :</label>
                            <div class="star-rating">
                                <input type="radio" id="5-stars" name="rating" value="5">
                                <label for="5-stars" class="star">&#9733;</label>
                                <input type="radio" id="4-stars" name="rating" value="4">
                                <label for="4-stars" class="star">&#9733;</label>
                                <input type="radio" id="3-stars" name="rating" value="3">
                                <label for="3-stars" class="star">&#9733;</label>
                                <input type="radio" id="2-stars" name="rating" value="2">
                                <label for="2-stars" class="star">&#9733;</label>
                                <input type="radio" id="1-star" name="rating" value="1">
                                <label for="1-star" class="star">&#9733;</label>
                            </div>
                            <div id="ratingValue" class="mt-2"></div>
                        </div>
                            <div class="form-group">
                                <label for="comments">Commentaires :</label>
                                <textarea class="form-control" id="comments" rows="5" placeholder="Votre avis" required></textarea>
                            </div>
                        <button type="submit" class="btn btn-warning">Soumettre</button>
                    </form>
                </div>
        </section>
    </main>

    <footer>
        <div class="horaire">
            <div class="ouvert">
                <h4> Nos horaires d'ouvertures :</h4>
            </div>
                <div class="ouverture">
                    <div class="jour">
                        <ul>Lundi à Samedi <br> Ouvert 10H00 à 20HOO</ul>
                    </div>

            <div class="logo">
                <h6>Nos Réseaux :</h6>
                    <a href="https://github.com/Madikoule"><img src="../../Public/Assets/image/github (6).svg" alt="github"></a>
                    <a href="https://www.facebook.com/"><img src="../../Public/Assets/image/facebook (2).svg" alt="facebook"></a>
                    <a href="http://linkedin.com"><img src="../../Public/Assets/image/linkedin.svg" alt="linkedin"></a>
                </div>
                <div class="adress">
                    <p>Forêt de Brocéliande<br>Bretagne 35380 Cedex</p>
                </div>
            </div>
        </div>

    

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class=" fin container">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Arcadia,Zoo </span> 
            </div>

        </div>
    </footer>
    
    <script src="../../Public/Assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>