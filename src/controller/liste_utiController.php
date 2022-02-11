<?php

function index(){
    require_once __DIR__.'/../entity/Utilisateur.php';
    // recuperer l ensemble des données des utilisateurs
    $entry = Utilisateur::all();

    include __DIR__.'/../../templates/liste_utilisateur.php';





}
