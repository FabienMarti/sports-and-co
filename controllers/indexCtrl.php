<?php 

$contentArray = array(
    'Accueil' => 'home',
    'S\'inscrire' => 'registration'
);

if(isset($_GET['content']) && in_array($_GET['content'], $contentArray))  {
    foreach ($contentArray as $title => $value) {
        if($_GET['content'] == $value){
            $content = $value;
            $pageTitle = $title;
        }
    }
}else{
    $content = 'home';
}

//Gestion des actions
if(isset($_GET['action'])){
    if($_GET['action'] == 'disconnect'){
        //Pour deconnecter l'utilisateur on détruit sa session
        session_destroy();
        //Et on le redirige vers l'accueil
        header('location:index.php');
        exit();
    }
}