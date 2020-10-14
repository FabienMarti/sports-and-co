<?php

$genderList = array('1' => 'Homme', '2' => 'Femme');
$regexList = array('username' => '%^[A-ÿ0-9_\-]{2,30}$%', 'password' => '%^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$%', 'city' => '%^[A-z]{2,}$%', 'date' => '%^[0-9]{4}-[0-9]{2}-[0-9]{2}$%');
$fileExtension = array('jpg', 'png', 'bmp', 'jpeg');
$formErrors = array();

if(isset($_POST['sendRegistration'])){

//? Variables
    $user = new user;
    $isPasswordOk = true;
    $isMailOk = true;

//? Vérification du nom d'utilisateur saisi
    if(!empty($_POST['username'])){
        if(preg_match($regexList['username'], $_POST['username'])){
            $user->username = htmlspecialchars($_POST['username']);
        }else{
            $formErrors['username'] = USERNAME_ERROR_INVALID;
        }
    }else{
        $formErrors['username'] = USERNAME_ERROR_EMPTY;
    }

//? Vérification des mots de passe
    if(empty($_POST['password'])){
        $formErrors['password'] = PASSWORD_ERROR_EMPTY;
        $isPasswordOk = false;
    }
    if(empty($_POST['passwordVerify'])){
        $formErrors['passwordVerify'] = PASSWORDVERIFY_ERROR_EMPTY;
        $isPasswordOk = false;
    }
    //! Si les vérifications des mots de passe sont ok
    if($isPasswordOk){

        if(preg_match($regexList['password'], $_POST['password'])){
            if($_POST['passwordVerify'] == $_POST['password']){
                $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            }else{
                $formErrors['password'] = $formErrors['passwordVerify'] = PASSWORD_ERROR_NOTEQUAL;
            }
        }else{
            $formErrors['password'] = $formErrors['passwordVerify'] = PASSWORD_ERROR_WRONG;
        }
    }
    
//? Vérification des adresse mail
    if(empty($_POST['mail'])){
        $formErrors['mail'] = MAIL_ERROR_EMPTY;
        $isMailOk = false;
    }
    if(empty($_POST['mailVerify'])){
        $formErrors['mailVerify'] = MAILVERIFY_ERROR_EMPTY;
        $isMailOk = false;
    }
    //! Si les vérifications des adresses mail sont ok
    if($isMailOk){

        if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
            if($_POST['mailVerify'] == $_POST['mail']){
                $user->mail = htmlspecialchars($_POST['mail']);
                if(!mkdir('assets/img/users/' . $user->mail, 755)){
                    $formErrors['mail'] = MAIL_ERROR_ALREADYUSED;
                }
            }else{
                $formErrors['mail'] = $formErrors['mailVerify'] = MAIL_ERROR_NOTEQUAL;
            }
        }else{
            $formErrors['mail'] = $formErrors['mailVerify'] = MAIL_ERROR_WRONG;
        }
    }

//? Vérification du nom de la ville + formatage
    if(!empty($_POST['city'])){
        if(preg_match($regexList['city'], $_POST['city'])){
            $lowerCaseCity = strtolower(htmlspecialchars($_POST['city']));
            //Passe la 1ere lettre de chaque mot en Majuscule
            $user->city  = ucwords($lowerCaseCity, ' ');
        }else{
            $formErrors['city'] = CITY_ERROR_WRONG;
        }
    }else{
        $formErrors['city'] = CITY_ERROR_EMPTY;
    }

//? Vérification du genre
    if(!empty($_POST['gender'])){
        if(array_key_exists($_POST['gender'], $genderList)){
            $user->gender = $_POST['gender'];
        }else{
            $formErrors['gender'] = GENDER_ERROR_WRONG;
        }
    }else{
        $formErrors['gender'] = GENDER_ERROR_EMPTY;
    }

//? Vérification de la date de naissance
    if(!empty($_POST['birthDate'])){
        if(preg_match($regexList['date'], $_POST['birthDate'])){
            $dateExplode = explode('-', $_POST['birthDate']);
            if(checkdate($dateExplode[1],$dateExplode[2],$dateExplode[0])){
                $user->birthDate = $_POST['birthDate'];
            }else{
                $formErrors['birthDate'] = BIRTHDATE_ERROR_WRONG;
            }
        }else{
            $formErrors['birthDate'] = BIRTHDATE_ERROR_WRONG;
        }
    }else{
        $formErrors['birthDate'] = BIRTHDATE_ERROR_EMPTY;
    }

//? Vérification du fichier envoyé
    if (!empty($_FILES['profilePicture']) && $_FILES['profilePicture']['error'] == 0) {
        // On stock dans $fileInfos les informations concernant le chemin du fichier.
        $fileInfos = pathinfo($_FILES['profilePicture']['name']);
        // On verifie si l'extension de notre fichier est dans le tableau des extension autorisées.
        if (in_array(strtolower($fileInfos['extension']), $fileExtension)) {
            //On définit le chemin vers lequel uploader le fichier
            $path = ('assets/img/users/' . $user->mail . '/');
            //On crée une date pour différencier les fichiers
            $date = date('Y-m-d_H-i-s');
            //On crée le nouveau nom du fichier (celui qu'il aura une fois uploadé)
            $fileNewName = 'profilePicture' . '_' . $date;
            //On stocke dans une variable le chemin complet du fichier (chemin + nouveau nom + extension une fois uploadé) Attention : ne pas oublier le point
            $fileFullPath = $path . $fileNewName . '.' . $fileInfos['extension'];
            //move_uploaded_files : déplace le fichier depuis son emplacement temporaire ($_FILES['file']['tmp_name']) vers son emplacement définitif ($fileFullPath)
            if (move_uploaded_file($_FILES['profilePicture']['tmp_name'], $fileFullPath)) {
                //On définit les droits du fichiers uploadé (Ici : écriture et lecture pour l'utilisateur apache, lecture uniquement pour le groupe et tout le monde)
                chmod($fileFullPath, 0644);
                $user->profilePicture = $fileFullPath;
            } else {
                $formErrors['profilePicture'] = PICTURE_ERROR;
            }
        } else {
            $formErrors['profilePicture'] = PICTURE_ERROR_WRONG;
        }
    } else {
        $formErrors['profilePicture'] = PICTURE_ERROR_EMPTY;
    }

//? Si formErrors ne contient aucun message d'erreur
    if(empty($formErrors)){
        $isOk = true;
        //On vérifie si le pseudo est libre
        if($user->checkUserUnavailabilityByFieldName(['username'])){
            $formErrors['username'] = USERNAME_ERROR_ALREADYUSED;
            $isOk = false;
        }
        //On vérifie si le mail est libre
        if($user->checkUserUnavailabilityByFieldName(['mail'])){
            $formErrors['mail'] = MAIL_ERROR_ALREADYUSED;
            $isOk = false;
        }
        //Si c'est bon on ajoute l'utilisateur
        if($isOk){
            $user->addUser();
            $messageSuccess = 'Vous avez bien été enregistré';
        }else{
            $messageFail = 'Erreur lors de votre enregistrement';
        }
    }
}