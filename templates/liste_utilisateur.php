<h1>Liste des utilisateurs</h1>
<?php

foreach($entry as $monutilisateur){
    echo "<a href='unutilisateur.php?id=".$monutilisateur->id."'> $monutilisateur->prenom $monutilisateur->nom </a>
    
    
    
  -   <a href='modifier.php?id=".$monutilisateur->id."'>Modifier</a>-
    
    
    <a href='supprimer.php?id=".$monutilisateur->id."'>Supprimer</a><hr>";
    
    
    //<a href='unutilisateur.php?id=".$monutilisateur->id."'>$monutilisateur->prenom."  ".$monutilisateur->nom."</a> <hr>";
}

// Recuperer l'ensemble des donnes de la tables utilisateurs
?>