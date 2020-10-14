<section id="home" class="container-fluid">
    <div class="header-picture col-12 row">
        <div class="header-slogan col-12 col-md-6">
            <div class="col-12">
                <h1>SEUL ON VA PLUS VITE, ENSEMBLE ON VA PLUS LOIN <i class="fas fa-exclamation" style="color: #fe9c00"></i></h1>
            </div>
        </div>
        <div class="header-login col-12 col-md-6 row justify-content-center">
            <div class="jumbotron col-9 mt-3">
                <h1 class="text-center mb-5">Connexion</h1>
                <form method="POST" action="loginForm.php">
                    <!-- <label for="mail">Adresse mail :</label> -->
                    <input type="email" name="mail" id="mail" placeholder="Adresse e-mail" class="mb-2 form-control <?= count($formErrors) > 0 ? (isset($formErrors['mail']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>" />
                    <!--message erreur-->
                    <p class="errorForm"><?= isset($formErrors['mail']) ? $formErrors['mail'] : '' ?></p>
                    <!-- <label for="password">mot de passe :</label> -->
                    <input type="password" name="password" id="password" placeholder="mot de passe" class="form-control <?= count($formErrors) > 0 ? (isset($formErrors['password']) ? 'is-invalid' : 'is-valid') : '' ?>" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>"/>
                    <!--message erreur-->
                    <p class="errorForm"><?= isset($formErrors['password']) ? $formErrors['password'] : '' ?></p>
                    <div class="text-center mt-3">
                        <input type="submit" name="btn-login" class="btn btn-primary" value="Connexion" />
                    </div>
                </form>
                <hr />
                <div class="text-center mt-3">
                    <a class="register-btn btn text-white" value="Connexion">Créer un compte</a>
                </div>
            </div>
        </div>
    </div>
    <div id="concept" class="col-12 row text-center mb-5">
        <div class="col-12">
            <h1 class="mt-5 mb-3">Le concept <i class="fas fa-exclamation" style="color: #fe9c00"></i></h1>
        </div>
        <div class="col-12 col-md-4 mb-3 reveal">
            <div class="card mt-5">
                <img src="assets/img/home/find.jpg" class="card-img-top img-fluid" alt="trouver">
                <div class="card-body">
                    <h2 class="card-title">Trouver</h2>
                    <p class="card-text">Trouver en toutes simplicitée les partenaires idéals pour vous accompagner dans vos séances de sports.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-3 reveal">
            <div class="card mt-5">
                <img src="assets/img/home/communicate.jpg" class="card-img-top img-fluid" alt="communiquer">
                <div class="card-body">
                    <h2 class="card-title">Communiquer</h2>
                    <p class="card-text">Communiquer avec des sportifs et sportives de votre région et faites du sport autrement grace a notre messagerie.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-3 reveal">
            <div class="card mt-5">
                <img src="assets/img/home/share.jpg" class="card-img-top img-fluid" alt="partager">
                <div class="card-body">
                    <h2 class="card-title">Partager</h2>
                    <p class="card-text">Partager les meilleurs moments de vos activitées sportives pour permettre a vos amis de vous suivres dans vos efforts.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="video-card card p-0 m-0 bg bg-dark">
        <video class="mb-4" autoplay="autoplay" muted="muted" loop="loop">
            <source src="assets/img/home/videoPresentation.mp4" type="video/mp4">
        </video>
        <div class="card-img-overlay d-flex h-50 flex-column  align-items-center justify-content-center text-center text-white">
            <h1 class="reveal">ENTRAIDEZ-VOUS <i class="fas fa-exclamation" style="color: #fe9c00"></i></h1>
            <h1 class="reveal">SURPASSEZ-VOUS <i class="fas fa-exclamation" style="color: #fe9c00"></i></h1>
        </div>
    </div>
</section>