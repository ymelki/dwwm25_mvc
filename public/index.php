<?php
// routeur : 
//dans cd public
// php -S localhost:8080

if (isset($_SERVER['PATH_INFO'])==false){
  
    include __DIR__.'/../src/controller/homeController.php';
    index();
   // echo "vous êtes à la page d'accueil";

}
else if ($_SERVER['PATH_INFO']=="/liste_utilisateur"){
   
    include __DIR__.'/../src/controller/liste_utiController.php';
    index();

  //  include __DIR__.'/../templates/Liste_utilisateur.php';

}


else if ($_SERVER['PATH_INFO']=="/creer_article"){
    echo "vous êtes à la page creer article";
}

// EXO CREEZ un nouveau projet avec un routeur dans le dossier public
// avec plusieurs page 2 ou 3 
// avec le serveur lancé depuis le terminal