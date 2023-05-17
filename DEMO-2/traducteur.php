<?php ob_start(); ?>


<div class ="container h-50">

    <div class="text-center pt-5">

    <form action="traducteur.php" method="POST">

    <button name="btn1" value="btn1" class="border-0">
        <img src="..\image\icons8-france-48.png" alt="" height="50px">
    </button>
    <button name="btn2" value="btn2" class="border-0">
        <img src="..\image\icons8-spain-48.png" alt="" height="50px">
    </button>
    <button name="btn3" value="btn3" class="border-0">
        <img src="..\image\icons8-usa-48.png" alt="" height="50px">
    </button>    

    </form>

    </div>


    <?php

    // ecrire un programme avec switch qui affiche des pages de traduction en fonction des buttons choisi


        $action = "";
        if (isset($_POST['btn1'])) {

            $action = 'action1';

        }
        elseif (isset($_POST['btn2'])) {
            $action = 'action2';
            
        }
        elseif (isset($_POST['btn3'])) {
            $action = 'action3';
        }
        switch ($action) {
            case 'action1':
                include "france.php";
                break;
            case 'action2':
                include "spain.php";     
                  break;
            case 'action3':
                include "usa.php";
                break;   
            default: 
                include "france.php";
                break;
        }
    


    ?>


    <div class="d-flex pt-5 justify-content-start">

        <div class = "col-3">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi eum ducimus explicabo autem! Aspernatur pariatur, ullam recusandae obcaecati, autem hic soluta quo accusamus iure necessitatibus vitae exercitationem sequi saepe assumenda.
            </p>    
        </div>

    
</div>







<?php 
$content = ob_get_clean();
require 'template.php';
?>