<?php

function forcerTelechargement($nom, $situation)
  {
    header('Content-Type: application/octet-stream');
    // header('Content-Length: '. $poids);
    header('Content-disposition: attachment; filename='. $nom);
    header('Pragma: no-cache');
    header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    header('Expires: 0');
    readfile($situation);
    exit();}

    $nom=$_GET['fichier'];
    $situation="http://localhost/depot/".$nom;
    
    forcerTelechargement($nom, $situation);
    ?>