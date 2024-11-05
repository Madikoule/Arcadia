
<?php
session_start();
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Doucoure Mady">
    <meta name="copyright" content="Arcadia">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Arcadia">
    <meta property="og:description" content="Découvrez notre zoo, un espace dédié à la faune sauvage et à la conservation. Explorez une variété d'espèces animales dans un cadre naturel et éducatif pour toute la famille.">
    <link rel="stylesheet" href="../../Public/Assets/css/contacte.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Projet ZOO</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class=" navis container-fluid">
            <a href="accueil.php"><img src="../../public/Assets/image/logo.arcadia.webp" class="barre brand" alt="logo arcadia"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Accueil</h5>
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
                                <a class="nav-link" href="../src/connexion.php">Connexion</a>
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

    <div class="container">
        <div class="divider"></div>
        <div class="heading">
            <h2>Contactez-moi</h2>
        </div>
    
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <form id="contact-form" method="post" action="send_message.php"role="form">
                    <div class="row">
                    <div class="col-md-8">
                            <label for="name">Nom<span class="bleu">*</span></label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" value="<?php echo $name ;?>">
                            <p class="comments"><?php echo $nameError;?></p>
                        </div>

                        <div class="col-md-8">
                            <label for="firstname">Prénom<span class="bleu">*</span></label>
                            <input type="text" id="fistname" name="firstname" required class="form-control" placeholder="Votre prenom" value="<?php echo $firstname ;?>">
                            <p class="comments"><?php echo $firstnameError;?></p>
                        </div>

                        <div class="col-md-8">
                            <label for="email">Email<span class="bleu">*</span></label>
                            <input type="text" id="email" required name="email" class="form-control" placeholder="Votre email" value="<?php echo $email ;?>">
                            <p class="comments"><?php echo $emailError ;?></p>
                        </div>

                        <div class="col-md-8">
                            <label for="message">Message<span class="bleu"> *</span></label>
                            <textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="4" ><?php echo $message ;?></textarea>
                            <p class="comments"><?php echo $messageError;?></p>
                        </div>

                        <div class="col-md-8">
                            <p class="info"><strong>* Ces information sont requises</strong></p>
                        </div>
                        
                        <div class="col-md-8">
                            <input type="submit" class="button1" value="Envoyer">
                        </div>
                    </form>
                    <div id="confirmation-message" style="display:none; color: green;">Votre message a bien été envoyé avec succès !
                </div>
            </div>
        </div>
    </div>

        <?php

            if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success']; ?>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>

            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger">
                    <?= $_SESSION['error']; ?>
                </div>
                <?php unset($_SESSION['error']); ?>
            <?php endif; 
        ?>

            <div class="retour">
                <a href="accueil.php"><button type="button" class="btn btn-warning ">Retour</button></a>
            </div>
    </main>

    <footer>
                <h6>Suivez-Nous :</h6>
            <div class="logo">
                <a href="https://github.com/Madikoule"><img src="../../Public/Assets/image/github (6).svg" alt="github"></a>
                <a href="https://www.facebook.com/"><img src="../../Public/Assets/image/facebook (2).svg" alt="facebook"></a>
                <a href="http://linkedin.com"><img src="../../Public/Assets/image/linkedin.svg" alt="linkedin"></a>
            </div>

                <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Arcadia, </span>
            </div>
    </footer>

    <script src="../../public/Assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>