<?php ob_start(); ?>

<section class="container h-50 pt-5">

            <div class="row justify-content-center gap-5">

                <div class="card col-5 bg-dark pb-5 shadow-lg">
                    <div class="card-body">
                        <h2 class="card-title text-white">Convertisseur Romain</h2>
                        <p class="card-text pt-5 text-white mb-5">Convertissez vos nombres en chiffres romains</p>
                        <a href="convertisseur.php" class="btn text-white border-white btn-outline-light">Convertir</a>
                    </div>
                </div>

                <div class="card col-5 bg-warning pb-5 shadow-lg ">
                    <div class="card-body">
                
                        <h2 class="card-title text-white">Authentification</h2>
                        <p class="card-text pt-5 text-white mb-5">Authentifier vous</p>
                        <a href="authentification.php" class="btn text-white border-white">Sign in</a>
                    </div>
                </div>
        
                <div class="card col-5 bg-primary pb-5 shadow-lg ">
                    <div class="card-body">
                
                        <h2 class="card-title text-white">Session</h2>
                        <p class="card-text pt-5 text-white mb-5">Créer une session et la supprimer</p>
                        <a href="menuAjout.php" class="btn text-white border-white">Valider</a>
                    </div>
                </div>
        
                <div class="card col-5 bg-success pb-5 shadow-lg ">
                    <div class="card-body">
                
                        <h2 class="card-title text-white">Mon Annonce</h2>
                        <p class="card-text pt-5 text-white mb-5">Français, Anglais, Espagnol</p>
                        <a href="traducteur.php" class="btn text-white border-white">Entrée</a>
                    </div>
                </div>
        

                <div class="card col-5 bg-secondary pb-5 shadow-lg ">
                    <div class="card-body">
                
                        <h2 class="card-title text-white">Les Cookies</h2>
                        <p class="card-text pt-5 text-white mb-5">Créer des cookies</p>
                        <a href="cookie1.php" class="btn text-white border-white">Entrée</a>
                    </div>
                </div>
        
                <div class="card col-5 bg-info pb-5 shadow-lg ">
                    <div class="card-body">
                
                        <h2 class="card-title text-white">Mon Annonce</h2>
                        <p class="card-text pt-5 text-white mb-5">Français, Anglais, Espagnol</p>
                        <a href="traducteur.php" class="btn text-white border-white">Entrée</a>
                    </div>
                </div>
        
                <div class="card col-5 bg-danger pb-5 shadow-lg ">
                    <div class="card-body">
                
                        <h2 class="card-title text-white">Devine mon nombre!</h2>
                        <p class="card-text pt-5 text-white mb-5"></p>Tu dois deviner le nombre auquel je pense!</p>
                        <a href="game1.php" class="btn text-white border-white">Devine!!!</a>
                    </div>
                </div>

                <div class="card col-5 bg-warning pb-5 shadow-lg ">
                    <div class="card-body">
                
                        <h2 class="card-title text-white">Mon Annonce</h2>
                        <p class="card-text pt-5 text-white mb-5">Français, Anglais, Espagnol</p>
                        <a href="traducteur.php" class="btn text-white border-white">Entrée</a>
                    </div>
                </div>



            </div>

        </section>




<?php
$content = ob_get_clean();
require 'template.php';
?>