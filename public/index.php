<?php
// routeur 

if (isset($_SERVER['PATH_INFO'])==false){
    echo "vous êtes à la page d'accueil";
}
else if ($_SERVER['PATH_INFO']=="/creer_article"){
    echo "vous êtes à la page creer article";
}