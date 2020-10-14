<div id="registration" class="container p-5 my-3">
    <div class="row">
        <h1 class="col-12 text-center mb-5">Inscription <i class="fas fa-exclamation" style="color: #fe9c00"></i></h1>
        <div class="jumbotron col-12">
            <form action="" method="POST" enctype="multipart/form-data" class="row">
                <div class="col-12">
                    <div class="form-group md-form">
                        <label for="username">Nom d'utilisateur</label>
                        <input type="text" name="username" id="username" class="form-control" />
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group no-md-form">
                        <label for="gender">Genre</label>
                        <select class="form-control"  name="gender" id="gender">
                            <option disabled selected>Selectionner un genre</option>
                            <?php 
                            foreach($genderList as $key => $value){ 
                                ?><option value="<?= $key ?>"><?= $value ?></option><?php
                            } ?>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group md-form">
                        <label for="mail">Adresse e-mail</label>
                        <input type="email" name="mail" id="mail" class="form-control" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group md-form">
                        <label for="mailVerify">Confirmer adresse e-mail</label>
                        <input type="email" name="mailVerify" id="mailVerify" class="form-control" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group md-form">
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" id="password" class="form-control" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group md-form">
                        <label for="passwordVerify">Confirmer mot de passe</label>
                        <input type="password" name="passwordVerify" id="passwordVerify" class="form-control" />
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group md-form">
                        <label for="birthDate">Date de naissance</label>
                        <input type="date" name="birthDate" id="birthDate" class="form-control" />
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group md-form">
                        <label for="city">Ville</label>
                        <input type="text" name="city" id="city" class="form-control" />
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group no-md-form">
                        <label for="profilePicture">Photo de profil</label>
                        <input type="file" name="profilePicture" id="profilePicture" class="form-control" />
                    </div>
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