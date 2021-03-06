<?php

//? Username
define('USERNAME_ERROR_EMPTY', 'Le nom d\'utilisateur ne doit pas être vide.');
define('USERNAME_ERROR_INVALID', 'Le nom d\'utilisateur doit comporter entre 2 et 30 caractères');
define('USERNAME_ERROR_ALREADYUSED', 'Le nom d\'utilisateur est déjà utilisé.');

//? Password
define('PASSWORD_ERROR_EMPTY', 'Le mot de passe ne doit pas être vide.');
define('PASSWORD_ERROR_WRONG', 'Le mot de passe doit comporter 1 majuscule, 1 minuscule, 1 chiffre et 8 caractères minimum.');
define('PASSWORDVERIFY_ERROR_EMPTY', 'Le mot de passe (confirmation) ne doit pas être vide.');
define('PASSWORD_ERROR_NOTEQUAL', 'Les mots de passe ne sont pas identiques');

//? Mail
define('MAIL_ERROR_EMPTY', 'L\'adresse mail ne doit pas être vide.');
define('MAILVERIFY_ERROR_EMPTY', 'L\'adresse mail (confirmation) ne doit pas être vide.');
define('MAIL_ERROR_WRONG', 'L\'adresse mail doit être de la bonne forme.');
define('MAIL_ERROR_NOTEQUAL', 'Les adresses mail ne sont pas identiques.');
define('MAIL_ERROR_ALREADYUSED', 'L\'adresse mail est déjà utilisée.');

//? Ville
define('CITY_ERROR_EMPTY', 'La ville ne doit pas être vide.');
define('CITY_ERROR_WRONG', 'La ville doit être de la bonne forme.');

//? Genre
define('GENDER_ERROR_EMPTY', 'Le genre ne doit pas être vide.');
define('GENDER_ERROR_WRONG', 'Une erreur est survenue, veuillez contacter l\'équipe technique.');

//? Date
define('BIRTHDATE_ERROR_EMPTY', 'La date ne doit pas être vide.');
define('BIRTHDATE_ERROR_WRONG', 'La date doit être de la bonne forme.');

//? Photo de profil
define('PICTURE_ERROR', 'Votre fichier ne s\'est pas téléversé correctement.');
define('PICTURE_ERROR_WRONG', 'Votre fichier n\'est pas du format attendu.');
define('PICTURE_ERROR_EMPTY', 'Veuillez selectionner un fichier.');

//? Club
define('CLUB_ERROR_LENGHT', 'La longueur du nom du club ne doit pas excéder 25 caractères.');
define('CLUB_ERROR_EMPTY', 'Le nom du club ne doit pas être vide.');
define('PC_ERROR_WRONG', 'Le code postal doit être du format : 61234.');
define('PC_ERROR_EMPTY', 'Le code postal doit être renseigné.');

//? Niveau de pratique
define('LEVEL_ERROR_WRONG', 'Le niveau doit se trouver dans la liste.');
define('LEVEL_ERROR_EMPTY', 'Un niveau de pratique doit être sélectionné.');

//? Autres
define('LOGIN_ERROR', 'Le mot de passe et/ou l\'adresse mail est incorrecte');