<?php 
    session_start();
    include_once 'models/database.php';
    include_once 'models/userMdl.php';
    include_once 'models/foodMdl.php';
    include_once 'controllers/indexCtrl.php';
    //Include le controlleur lié au contenu chargé
    isset($content) ? (include 'controllers/' . $content . 'Ctrl.php') : '' ;
?>
<!DOCTYPE html>
<html lang="FR">
   <head>
       <meta charset="UTF-8" />
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
       <meta http-equiv="x-ua-compatible" content="ie=edge" />
       <title>Material Design for Bootstrap</title>
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
       <!-- End your project here-->
       <!-- jQuery -->
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <!-- Bootstrap tooltips -->
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
       <!-- Bootstrap core JavaScript -->
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
       <!-- MDB core JavaScript -->
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
       <!-- Your custom scripts (optional) -->
       <script type="text/javascript">
       </script>
   </body>
</html>