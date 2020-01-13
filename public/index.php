<?php

/* on affiche  les erreurs, 
si vous avez une erreur 500, 
regardez dans votre console */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/* nous verrons plus tard comment se passer de ces 3 lignes */


// on inclue le fichier qui contient nos fonctions
require __DIR__ . '/../lib/functions.php';

// l'exemple avec le header, à vous de jouer pour le reste
getPart('header');
getContent();
$user = getUserData();
foreach ($user as $use => $val){
    if($use == "experiences"){
        echo $use."<br>";
        foreach ($val as $key => $val2){
            foreach ($val2 as $key2 => $val3){
                echo $key2." : ".$val3."<br>";
            }
        }
    }else {
        echo $use." : ".$val."<br>";
    }

}
getPart('footer');

getUserData();

