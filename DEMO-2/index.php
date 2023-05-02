<?php ob_start(); ?>

<section class="container h-50">

            <div class="row justify-content-center gap-5">

                <div class="card col-5 bg-dark pb-5 shadow-lg">
                    <div class="card-body">
                        <h2 class="card-title text-white">Convertisseur Chiffres Romain</h2>
                        <p class="card-text pt-5 text-white mb-5">Lorem ipsum dolor sit, amet consecteur adipisicing elit. Natus adipisci unde debitis ab facilis</p>
                        <a href="convertisseur.php" class="btn text-white border-white btn-outline-light">Convertir</a>
                    </div>
                </div>

                <div class="card col-5 bg-warning pb-5 shadow-lg ">
                    <div class="card-body">
                
                        <h2 class="card-title">Fastest servers</h2>
                        <p class="card-text pt-5 text-dark mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit.Natus adipisci unde debitis ab facilis</p>
                        <a href="#" class="btn text-white border-white">Look at the ranking</a>
                    </div>
                </div>
        
            </div>

        </section>




<?php
$content = ob_get_clean();
require 'template.php';
?>