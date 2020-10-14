<?php 
    session_start();
    include_once 'models/database.php';
    include_once 'models/userMdl.php';
    include_once 'controllers/indexCtrl.php';
    //Include le controlleur lié au contenu chargé
    include 'controllers/' . $content . 'Ctrl.php';
?>
<!DOCTYPE html>
<html lang="FR" dir="ltr">
   <head>
       <meta charset="UTF-8" />
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
       <meta http-equiv="x-ua-compatible" content="ie=edge" />
       <title><?= isset($pageTitle) ? $pageTitle : 'Sports & Co' ?></title>
        <!--FONT barlow + Noto-->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet" />
       <!-- Font Awesome -->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
       <!-- Bootstrap core CSS -->
       <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" />
       <!-- Material Design Bootstrap -->
       <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet" />
       <!-- Your custom styles (optional) -->
       <link rel="stylesheet" href="assets/css/style.css" />
   </head>
   <body>
    <header>
        <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
                <a class="navbar-brand" href="index.php"><img src="assets/img/logos/logo_nav.png" alt="logo-sac"> Sports & Co</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#concept">Concept</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Connexion</a>
                        </li>
                    </ul>
                </div>
            </nav>
        <!-- Fin navbar -->
    </header>
        <?php include 'views/' . $content . '.php' ?>
<!-- Footer -->
    <footer class="page-footer font-small stylish-color-dark pt-4">
    <!-- Footer Links -->
    <div class="container text-center text-md-left">
        <!-- Grid row -->
        <div class="row">
        <!-- Grid column -->
        <div class="col-md-4 mx-auto">
            <!-- Content -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Informations importantes</h5>
            <p>Les informations recueillies sont destinées à Sport&co et aux sociétés dans lesquelles Sport&co détient une participation, ainsi qu’à leurs prestataires situés dans et hors de l’Union Européenne, pour vous permettre d’accéder aux services et offres du Groupe Sport&co. Vous pouvez demander à accéder, faire rectifier ou supprimer les informations vous concernant ou vous opposer à leur traitement par le Groupe Sport&co dans la rubrique “mon compte” sur Sport&co ou aux coordonnées précisées dans les CGU.</p>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
        <div class="col-md-2 mx-auto">
            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">À propos</h5>
            <ul class="list-unstyled">
            <li>
                <a href="#!">Conditions générales</a>
            </li>
            <li>
                <a href="#!">Régles de communautées</a>
            </li>
            <li>
                <a href="#!">Politique de confidentialité</a>
            </li>
            <li>
                <a href="#!">Gestions des cookies</a>
            </li>
            </ul>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
        <div class="col-md-2 mx-auto">
            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Compte</h5>
            <ul class="list-unstyled">
            <li>
                <a href="#!">Gérer votre compte</a>
            </li>
            <li>
                <a href="#!">Connexion</a>
            </li>
            <li>
                <a href="#!">Deconnexion</a>
            </li>
            <li>
                <a href="#!">Inscription</a>
            </li>
            </ul>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none">
        <!-- Grid column -->
        <div class="col-md-2 mx-auto">
        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Services</h5>
        <ul class="list-unstyled">
            <li>
            <a href="#!">Sports&co +</a>
            </li>
            <li>
            <a href="#!">Investir</a>
            </li>
            <li>
            <a href="#!">Événements</a>
            </li>
            <li>
            <a href="#!">Contacter Sports&co</a>
            </li>
        </ul>
        </div>
        <!-- Grid column -->
        </div>
        <!-- Grid row -->
        </div>
    <!-- Footer Links -->
    <hr>
    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
            <i class="fab fa-facebook-f"> </i>
        </a>
        </li>
        <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
            <i class="fab fa-twitter"> </i>
        </a>
        </li>
        <li class="list-inline-item">
        <a class="btn-floating btn-you mx-1">
            <i class="fab fa-youtube"></i>
        </a>
        </li>
        <li class="list-inline-item">
        <a class="btn-floating btn-snap mx-1">
            <i class="fab fa-snapchat-ghost"></i>
        </a>
        </li>
        <li class="list-inline-item">
        <a class="btn-floating btn-insta mx-1">
            <i class="fab fa-instagram"></i>
        </a>
        </li>
    </ul>
    <!-- Social buttons -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="#">TGM.com</a>
    </div>
    <!-- Copyright -->
    </footer>
<!-- Fin footer -->
<!-- scripts -->
       <!-- jQuery -->
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <!-- Bootstrap tooltips -->
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
       <!-- Bootstrap core JavaScript -->
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
       <!-- MDB core JavaScript -->
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
       <!-- Your custom scripts (optional) -->
       <script type="text/javascript" src="assets/js/main.js"></script>
<!-- Fin scripts -->
   </body>
</html>