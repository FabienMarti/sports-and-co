<?php if(isset($messageSuccess)){ ?>
    <div class="alert alert-success" role="alert">
        <?= $messageSuccess ?>
    </div>
<?php } ?>
<?php if(isset($messageFail)){ ?>
    <div class="alert alert-danger" role="alert">
        <?= $messageFail ?>
    </div>
<?php } ?>
<div id="registration" class="container p-5 my-3">
    <div class="row">
        <h1 class="col-12 text-center mb-5">Inscription <i class="fas fa-exclamation" style="color: #fe9c00"></i></h1>
        <div class="jumbotron col-12">
            <form action="" method="POST" enctype="multipart/form-data" class="row">
                <div class="col-12">
                    <div class="form-group md-form">
                        <label for="username">Nom d'utilisateur</label>
                        <input type="text" name="username" id="username" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['username']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>" />
                        <!--message d'erreur-->
                        <p class="errorForm"><?= isset($formErrors['username']) ? $formErrors['username'] : '' ?></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group no-md-form">
                        <label for="gender">Genre</label>
                        <select class="form-control"  name="gender" id="gender">
                            <option disabled selected>Selectionnez un genre</option>
                            <?php 
                            foreach($genderList as $key => $value){ 
                                ?><option value="<?= $key ?>"><?= $value ?></option><?php
                            } ?>
                        </select>
                        <!--message d'erreur-->
                        <p class="errorForm"><?= isset($formErrors['gender']) ? $formErrors['gender'] : '' ?></p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group md-form">
                        <label for="mail">Adresse e-mail</label>
                        <input type="email" name="mail" id="mail" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['mail']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>" />
                        <!--message d'erreur-->
                        <p class="errorForm"><?= isset($formErrors['mail']) ? $formErrors['mail'] : '' ?></p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group md-form">
                        <label for="mailVerify">Confirmer adresse e-mail</label>
                        <input type="email" name="mailVerify" id="mailVerify" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['mailVerify']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['mailVerify']) ? $_POST['mailVerify'] : '' ?>" />
                        <!--message d'erreur-->
                        <p class="errorForm"><?= isset($formErrors['mailVerify']) ? $formErrors['mailVerify'] : '' ?></p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group md-form">
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" id="password" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['password']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>" />
                        <!--message d'erreur-->
                        <p class="errorForm"><?= isset($formErrors['password']) ? $formErrors['password'] : '' ?></p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group md-form">
                        <label for="passwordVerify">Confirmer mot de passe</label>
                        <input type="password" name="passwordVerify" id="passwordVerify" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['passwordVerify']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['passwordVerify']) ? $_POST['passwordVerify'] : '' ?>" />
                        <!--message d'erreur-->
                        <p class="errorForm"><?= isset($formErrors['passwordVerify']) ? $formErrors['passwordVerify'] : '' ?></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group md-form">
                        <label for="birthDate">Date de naissance</label>
                        <input type="date" name="birthDate" id="birthDate" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['birthDate']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['birthDate']) ? $_POST['birthDate'] : '' ?>" />
                        <!--message d'erreur-->
                        <p class="errorForm"><?= isset($formErrors['birthDate']) ? $formErrors['birthDate'] : '' ?></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group md-form">
                        <label for="city">Ville</label>
                        <input type="text" name="city" id="city" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['city']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['city']) ? $_POST['city'] : '' ?>" />
                        <!--message d'erreur-->
                        <p class="errorForm"><?= isset($formErrors['city']) ? $formErrors['city'] : '' ?></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group no-md-form">
                        <label for="profilePicture">Photo de profil</label>
                        <input type="file" name="profilePicture" id="profilePicture" class="form-control" />
                        <!--message d'erreur-->
                        <p class="errorForm"><?= isset($formErrors['profilePicture']) ? $formErrors['profilePicture'] : '' ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <h2>Ajoutez un sport pratiqué</h2>

                    <!-- SPORT PRATIQUE -->
                    <select name="sport">
                        <option value="" selected disabled>Sélectionnez un sport</option>
                        <?php
                            foreach ($showAllSports as $value) { ?>
                                <option value="<?= $value->id ?>"><?= $value->name ?></option>
                        <?php } ?>
                        <!-- A gerer plus tard -->
                        <option value="999">Autres</option>
                    </select>

                    <!-- CTRL => Si vide, ajouter'Aucun' dans la BDD -->
                    <label for="club">Nom du club</label>
                    <input type="text" name="club" id="club" />
                    <!-- Revoir nom du champ cp (bdd) -->
                    <label for="postalCode">code postal du club</label>
                    <input type="text" name="postalCode" id="postalCode" />
                    <small>Si aucun club, ne rien remplir</small>
                    <label for="level">Votre niveau dans ce sport</label>
                    <?php
                        foreach ($levelList as $key => $value) { ?>
                            <div class="col-12">
                                <label class="my-auto" for="<?= $value ?>"><?= $value ?> : </label>
                                <input type="radio" name="level" value="<?= $key ?>" id="<?= $value ?>" <?= isset($_POST['level']) && $_POST['level'] == $key ? 'checked' : '' ?> class="my-auto <?= isset($formErrors['level']) ? 'is-invalid' : '' ?>" />
                            </div>
                    <?php } ?>
                </div>

                <div class="col-12">
                    <div class="text-center">
                        <input type="submit" name="sendRegistration" class="btn btn-primary" value="S'inscrire" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>