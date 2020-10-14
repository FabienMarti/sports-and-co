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
                <a class="navbar-brand" href="#"><img src="assets/img/logos/logo_nav.png" alt="logo-sac"> Sports & Co</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?content=home">Accueil</a>
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
        <?php include 'views/footer.php' ?>
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